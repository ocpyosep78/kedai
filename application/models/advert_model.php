<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Advert_model extends CI_Model {
    function __construct() {
        parent::__construct();
		
        $this->field = array(
			'id', 'user_id', 'city_id', 'condition_id', 'advert_type_id', 'advert_status_id', 'category_sub_id', 'name', 'code', 'content', 'address', 'price',
			'negotiable', 'metadata', 'thumbnail', 'post_time', 'sold_time', 'is_delete'
		);
    }

    function update($param) {
        $result = array();
       
        if (empty($param['id'])) {
            $insert_query  = GenerateInsertQuery($this->field, $param, ADVERT);
            $insert_result = mysql_query($insert_query) or die(mysql_error());
           
            $result['id'] = mysql_insert_id();
            $result['status'] = '1';
            $result['message'] = 'Data successfully saved.';
        } else {
            $update_query  = GenerateUpdateQuery($this->field, $param, ADVERT);
            $update_result = mysql_query($update_query) or die(mysql_error());
           
            $result['id'] = $param['id'];
            $result['status'] = '1';
            $result['message'] = 'Data successfully updated.';
        }
       
        return $result;
    }

    function get_by_id($param) {
        $array = array();
       
        if (isset($param['id'])) {
            $select_query  = "
				SELECT Advert.*,
					City.region_id,
					Category.name category_name, CategorySub.category_id, CategorySub.name category_sub_name
				FROM ".ADVERT." Advert
				LEFT JOIN ".CATEGORY_SUB." CategorySub ON CategorySub.id = Advert.category_sub_id
				LEFT JOIN ".CATEGORY." Category ON Category.id = CategorySub.category_id
				LEFT JOIN ".CITY." City ON City.id = Advert.city_id
				LEFT JOIN ".REGION." Region ON Region.id = City.region_id
				WHERE Advert.id = '".$param['id']."'
				LIMIT 1
			";
        } 
       
        $select_result = mysql_query($select_query) or die(mysql_error());
        if (false !== $row = mysql_fetch_assoc($select_result)) {
            $array = $this->sync($row);
        }
		
		// add advert type sub
		if (count($array) > 0) {
			$advert_type_sub = $this->Advert_Type_Sub_model->get_by_id(array( 'advert_type_id' => $array['advert_type_id'], 'category_sub_id' => $array['category_sub_id'] ));
			$array['advert_type_sub_id'] = $advert_type_sub['id'];
		}
		
		return $array;
    }
	
    function get_array($param = array()) {
        $array = array();
		$param['is_delete'] = (isset($param['is_delete'])) ? $param['is_delete'] : '0';
		
		$param['field_replace']['name'] = 'Advert.name';
		$param['field_replace']['category_name'] = 'Category.name';
		$param['field_replace']['category_sub_name'] = 'CategorySub.name';
		$param['field_replace']['advert_status_name'] = 'AdvertStatus.name';
		
		$string_namelike = (!empty($param['namelike'])) ? "AND Advert.name LIKE '%".$param['namelike']."%'" : '';
		$string_delete = "AND (Advert.is_delete = '".$param['is_delete']."' OR 'x' = '".$param['is_delete']."')";
		$string_filter = GetStringFilter($param, @$param['column']);
		$string_sorting = GetStringSorting($param, @$param['column'], 'name ASC');
		$string_limit = GetStringLimit($param);
		
		$select_query = "
			SELECT SQL_CALC_FOUND_ROWS Advert.*,
				AdvertStatus.name advert_status_name,
				Category.name category_name, CategorySub.name category_sub_name
			FROM ".ADVERT." Advert
			LEFT JOIN ".CATEGORY_SUB." CategorySub ON CategorySub.id = Advert.category_sub_id
			LEFT JOIN ".CATEGORY." Category ON Category.id = CategorySub.category_id
			LEFT JOIN ".ADVERT_STATUS." AdvertStatus ON AdvertStatus.id = Advert.advert_status_id
			WHERE 1 $string_namelike $string_delete $string_filter
			ORDER BY $string_sorting
			LIMIT $string_limit
		";
        $select_result = mysql_query($select_query) or die(mysql_error());
		while ( $row = mysql_fetch_assoc( $select_result ) ) {
			$array[] = $this->sync($row, $param);
		}
		
        return $array;
    }

    function get_count($param = array()) {
		$select_query = "SELECT FOUND_ROWS() TotalRecord";
		$select_result = mysql_query($select_query) or die(mysql_error());
		$row = mysql_fetch_assoc($select_result);
		$TotalRecord = $row['TotalRecord'];
		
		return $TotalRecord;
    }
	
    function delete($param) {
		$delete_query  = "DELETE FROM ".ADVERT." WHERE id = '".$param['id']."' LIMIT 1";
		$delete_result = mysql_query($delete_query) or die(mysql_error());
		
		$result['status'] = '1';
		$result['message'] = 'Data successfully deleted.';

        return $result;
    }
	
	function sync($row, $param = array()) {
		$row = StripArray($row, array( 'post_time' ));
		
		// link edit
		$row['edit_link'] = base_url('post/'.$row['id']);
		
		// meta data
		if (isset($row['metadata'])) {
			$array_metadata = object_to_array(json_decode($row['metadata']));
			$row = array_merge($row, $array_metadata);
			unset($row['metadata']);
		}
		
		if (count(@$param['column']) > 0) {
			$row = dt_view_set($row, $param);
		}
		
		return $row;
	}
}