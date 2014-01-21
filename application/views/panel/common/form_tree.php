<?php
	$array_tree = array(
		array(
			'title' => 'Parent No 1', 'label' => 'Goes somewhere', 'child' => array(
				array( 'title' => 'Child No 1', 'label' => 'Child Goes somewhere' ),
				array( 'title' => 'Child No 2', 'label' => 'Child Goes somewhere' ),
				array( 'title' => 'Child No 3', 'label' => 'Child Goes somewhere' )
			)
		),
		array(
			'title' => 'Parent No 2', 'label' => 'Goes somewhere', 'child' => array()
		)
	);
	
	function show_tree($array_tree) {
		$result = '';
		foreach ($array_tree as $row) {
			$child_tree = '';
			if (isset($row['child']) && is_array($row['child']) && count($row['child']) > 0) {
				$child_tree = show_tree($row['child']);
			}
			
			// class html
			$style_class = (empty($child_tree)) ? 'fa-leaf' : 'fa-folder-open';
			
			$result .= '
				<li>
					<span><i class="fa '.$style_class.'"></i> '.$row['title'].'</span> <a class="cursor">'.$row['label'].'</a>
					'.$child_tree.'
				</li>
			';
		}
		
		// fix template tree
		$result = '<ul>'.$result.'</ul>';
		
		return $result;
	}
?>
<div class="tree well">
	<?php echo show_tree($array_tree); ?>
</div>