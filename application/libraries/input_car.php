<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class input_car {
    function __construct() {
		$this->ci =& get_instance();
    }
	
    function get_entry() {
		$array_vehicle_brand = $this->ci->Vehicle_Brand_model->get_array();
		
		$content = '
			<section>
				<label class="label">Vehicle Brand</label>
				<label class="select">
					<select name="vehicle_brand_id" required>
						'.ShowOption(array( 'Array' => $array_vehicle_brand, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )).'
					</select>
					<i></i>
				</label>
			</section>
			<section>
				<label class="label">Vehicle Type</label>
				<label class="select">
					<select name="vehicle_type_id" required>
						<option>-</option>
					</select>
					<i></i>
				</label>
			</section>
		';
		
		return $content;
    }
}