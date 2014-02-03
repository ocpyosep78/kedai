<?php
	/* region form */
	
	$namelike = (isset($_POST['namelike'])) ? $_POST['namelike'] : '';
	$city_id = (isset($_POST['city_id'])) ? $_POST['city_id'] : 0;
	$region_id = (isset($_POST['region_id'])) ? $_POST['region_id'] : 0;
	$price_min = (isset($_POST['price_min'])) ? $_POST['price_min'] : 0;
	$price_max = (isset($_POST['price_max'])) ? $_POST['price_max'] : 0;
	$condition = (isset($_POST['condition'])) ? $_POST['condition'] : '';
	$advert_type_id = (isset($_POST['advert_type_id'])) ? $_POST['advert_type_id'] : 0;
	
	$array_region = $this->Region_model->get_array();
	$array_city = $this->City_model->get_array(array( 'region_id' => $region_id ));
	$array_sort = $this->Advert_model->get_array_sort();
	$array_limit = $this->Advert_model->get_array_limit();
	$array_condition = $this->Condition_model->get_array();
	$array_advert_type = $this->Advert_Type_model->get_array();
	$array_price_min = $this->Category_Price_model->get_array(array( 'category_sub_id' => $category_sub['id'], 'price_type' => 1 ));
	$array_price_max = $this->Category_Price_model->get_array(array( 'category_sub_id' => $category_sub['id'], 'price_type' => 2 ));
	
	/* end region form */
	
	/* region advert */
	
	$page_sort = (isset($_POST['page_sort'])) ? $_POST['page_sort'] : $array_sort[0]['value'];
	$page_active = (isset($_POST['page_active'])) ? $_POST['page_active'] : 1;
	$page_limit = (isset($_POST['page_limit'])) ? $_POST['page_limit'] : 12;
	$page_offset = ($page_active * $page_limit) - $page_limit;
	
	$param_advert = array(
		'namelike' => $namelike,
		'advert_status_id' => ADVERT_STATUS_APPROVE,
		'city_id' => $city_id,
		'region_id' => $region_id,
		'condition' => $condition,
		'advert_type_id' => $advert_type_id,
		'price_min' => $price_min,
		'price_max' => $price_max,
		'category_id' => @$category['id'],
		'category_sub_id' => @$category_sub['id'],
		'sort' => $page_sort,
		'start' => $page_offset,
		'limit' => $page_limit
	);
	$array_advert = $this->Advert_model->get_array($param_advert);
	$total_item = $this->Advert_model->get_count($param_advert);
	$page_total = ceil($total_item / $page_limit);
	
	/* end region advert */
	
	// build breadcrumb
	$param_breadcrumb['title_list'][] = array( 'link' => base_url(), 'title' => 'Home', 'class' => 'first' );
	$param_breadcrumb['title_list'][] = array( 'link' => $category['category_link'], 'title' => $category['name'], 'class' => '' );
	$param_breadcrumb['title_list'][] = array( 'link' => $category_sub['category_sub_link'], 'title' => $category_sub['name'], 'class' => '' );
?>
<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">

<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view( 'website/common/breadcrumb', $param_breadcrumb ); ?>
		
		<div class="container"><div class="row">
			<section class="col-lg-9 col-md-9 col-sm-12 col-xs-12 main-column">
				<div id="content">
					<h1>Refine Search</h1>
					<div class="category-info clearfix">
						<div class="product-filter clearfix">
							<div class="display">
								<div class="limit">
									<select name="city_id" class="form_submit">
										<?php echo ShowOption(array( 'Array' => $array_city, 'ArrayID' => 'id', 'ArrayTitle' => 'name', 'LabelEmptySelect' => 'All City', 'Selected' => $city_id )); ?>
									</select>
								</div>
								<div class="limit">
									<select name="region_id" class="form_change">
										<?php echo ShowOption(array( 'Array' => $array_region, 'ArrayID' => 'id', 'ArrayTitle' => 'name', 'LabelEmptySelect' => 'All Region', 'Selected' => $region_id )); ?>
									</select>
								</div>
							</div>
							<div class="sort">
								<select>
									<option>Max sq.ft</option>
								</select>	
							</div>
							<div class="sort">
								<select>
									<option>Mix sq.ft</option>
								</select>
							</div>
							<div class="sort">
								<select name="price_max" class="form_submit">
									<?php echo ShowOption(array( 'Array' => $array_price_max, 'ArrayID' => 'price', 'ArrayTitle' => 'price_text', 'LabelEmptySelect' => 'Price To', 'Selected' => $price_max )); ?>
								</select>
							</div>
							<div class="limit">
								<select name="price_min" class="form_submit">
									<?php echo ShowOption(array( 'Array' => $array_price_min, 'ArrayID' => 'price', 'ArrayTitle' => 'price_text', 'LabelEmptySelect' => 'Price From', 'Selected' => $price_min )); ?>
								</select>
							</div>
						</div>
					</div>
					<hr/>
					
					<div class="hidden">
						<form id="form-hidden" method="post">
							<input type="hidden" name="namelike" value="<?php echo $namelike; ?>" />
							<input type="hidden" name="city_id" value="<?php echo $city_id; ?>" />
							<input type="hidden" name="region_id" value="<?php echo $region_id; ?>" />
							<input type="hidden" name="price_min" value="<?php echo $price_min; ?>" />
							<input type="hidden" name="price_max" value="<?php echo $price_max; ?>" />
							<input type="hidden" name="condition" value="<?php echo $condition; ?>" />
							<input type="hidden" name="advert_type_id" value="<?php echo $advert_type_id; ?>" />
							
							<input type="hidden" name="page_sort" value="<?php echo htmlentities($page_sort); ?>" />
							<input type="hidden" name="page_active" value="<?php echo 1; ?>" />
							<input type="hidden" name="page_limit" value="<?php echo $page_limit; ?>" />
						</form>
					</div>
					
					<div class="product-filter clearfix">
						<div class="display">
							<span style="float: left;">Display:</span>
							<a class="list" onclick="display_item('list');">List</a>
							<a class="grid active" onclick="display_item('grid');">Grid</a>
						</div>
						<div class="limit">
							<span>Show:</span>
							<select class="change_limit">
								<?php echo ShowOption(array( 'Array' => $array_limit, 'ArrayID' => 'value', 'ArrayTitle' => 'value', 'Selected' => $page_limit, 'WithEmptySelect' => false )); ?>
							</select>
						</div>
						<div class="sort">
							<span>Sort By:</span>
							<select class="change_sort">
								<?php echo ShowOption(array( 'Array' => $array_sort, 'ArrayID' => 'value', 'ArrayTitle' => 'label', 'Selected' => $page_sort, 'WithEmptySelect' => false )); ?>
							</select>
						</div>
						<div class="limit">
							<span>Show:</span>
							<select name="advert_type_id" class="form_submit">
								<?php echo ShowOption(array( 'Array' => $array_advert_type, 'ArrayID' => 'id', 'ArrayTitle' => 'name', 'LabelEmptySelect' => 'All', 'Selected' => $advert_type_id )); ?>
							</select>
						</div>
						<div class="limit">
							<span>Condition:</span>
							<select name="condition" class="form_submit">
								<?php echo ShowOption(array( 'Array' => $array_condition, 'ArrayID' => 'name', 'ArrayTitle' => 'name', 'LabelEmptySelect' => 'All', 'Selected' => $condition )); ?>
							</select>
						</div>
					</div>
					
					<div class="product-grid"><div class="products-block"><div class="row">
						<?php foreach ($array_advert as $row) { ?>
							<div class="col-lg-333 col-md-3 col-sm-6 col-xs-12">
								<div class="product-block">
									<div class="tanggal"><?php echo $row['post_time_text']; ?></div>
									<div class="image">
										<a href="<?php echo $row['advert_link']; ?>"><img src="<?php echo $row['thumbnail_link']; ?>" title="<?php echo $row['name']; ?>" alt="<?php echo $row['name']; ?>" class="img-responsive"></a>
										<a href="<?php echo $row['advert_link']; ?>" class="info-view colorbox product-zoom cboxElement" rel="colorbox" title="<?php echo $row['name']; ?>"><i class="fa icon-zoom-in"></i></a>
										<div class="img-overlay"></div>
									</div>
									<div class="product-meta">
										<div class="left">
											<h3 class="name"><a href="<?php echo $row['advert_link']; ?>"><?php echo get_length_char($row['name'], 40, ' ...'); ?></a></h3>
											<p class="description"><?php echo get_length_char($row['content'], 40, ' ...'); ?></p>
											<div class="action">
												<div class="cartt">Region : <?php echo $row['region_name']; ?></div>
												<div class="wishlist">City : <?php echo $row['city_name']; ?></div>
											</div>
										</div>
										<div class="right">
											<div class="price"><span class="price-new"><?php echo $row['price_text']; ?></span></div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
						</div>
					</div></div></div>
					<div class="pagination">
						<div class="links">
							<?php if ($page_active > 1) { ?>
							<?php $page_counter = $page_active - 1; ?>
							<a data-page-value="<?php echo 1; ?>">|&lt;</a>
							<a data-page-value="<?php echo $page_counter; ?>">&lt;</a>
							<?php } ?>
							
							<?php for ($i = -4; $i <= 4; $i++) { ?>
								<?php $page_counter = $page_active + $i; ?>
								<?php if ($page_counter > 0 && $page_counter <= $page_total) { ?>
								<?php if ($i == 0) { ?>
								<b><?php echo $page_counter; ?></b>
								<?php } else { ?>
								<a data-page-value="<?php echo $page_counter; ?>"><?php echo $page_counter; ?></a>
								<?php } ?>
								<?php } ?>
							<?php } ?>
							
							<?php if ($page_active < $page_total) { ?>
							<?php $page_counter = $page_active + 1; ?>
							<a data-page-value="<?php echo $page_counter; ?>">&gt;</a>
							<a data-page-value="<?php echo $page_total; ?>">&gt;|</a>
							<?php } ?>
						</div>
						<div class="results"><?php echo "Showing ".($page_offset + 1)." to ".($page_offset + count($array_advert))." of $total_item ($page_total Pages)"; ?></div>
					</div>
				</div>
			</section>
		</div></div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>

<script type="text/javascript">
	// form
	$('.category-info [name="region_id"]').change(function() {
		combo.city({
			region_id: $(this).val(),
			target: $('.category-info [name="city_id"]'),
			label_empty_select: 'All City'
		});
	});
	$('.form_change').change(function() {
		var name = $(this).attr('name');
		var value = $(this).val();
		$('#form-hidden [name="' + name + '"]').val(value);
		
		if (name == 'region_id') {
			$('#form-hidden [name="city_id"]').val(0);
		}
	});
	$('.form_submit').change(function() {
		var name = $(this).attr('name');
		var value = $(this).val();
		$('#form-hidden [name="' + name + '"]').val(value);
		$('#form-hidden').submit();
	});
	
	// search
	$('.change_sort').change(function() {
		$('#form-hidden [name="page_sort"]').val($(this).val());
		$('#form-hidden').submit();
	});
	$('.change_limit').change(function() {
		$('#form-hidden [name="page_limit"]').val($(this).val());
		$('#form-hidden').submit();
	});
	$('.pagination .links a').click(function() {
		$('#form-hidden [name="page_active"]').val($(this).data('page-value'));
		$('#form-hidden').submit();
	});
	
	// display
	var view_type = get_local('view_type');
	display_item(view_type);
</script>

</body></html>