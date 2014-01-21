<?php
	$array_category = $this->Category_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
	<input type="hidden" name="category_id" value="0" />
	<input type="hidden" name="category_sub_id" value="0" />
	<input type="hidden" name="advert_type_sub_id" value="0" />
	
    <section>
		<section class="hbox stretch">
			<?php $this->load->view( 'panel/common/sidebar' ); ?>
			
			<section id="content">
				<section class="vbox">
					<section class="scrollable padder">
						<div class="m-b-md">
							<h3 class="m-b-none">Category Input</h3>
						</div>
						
						<section class="panel panel-default panel-table">
							<header class="header bg-white b-b clearfix">
								<div class="row m-t-sm">
									<div class="col-sm-8 m-b-xs">
										<div class="btn-group group-category">
											<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle">
												<span class="title-replace">Category</span>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<?php foreach ($array_category as $row) { ?>
												<li><a class="cursor select-category" data-row='<?php echo json_encode($row); ?>'><?php echo $row['name']; ?></a></li>
												<?php } ?>
											</ul>
										</div>
										<div class="btn-group group-category-sub">
											<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle">
												<span class="title-replace">Sub Category</span>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu"></ul>
										</div>
										<div class="btn-group group-advert-type-sub">
											<button data-toggle="dropdown" class="btn btn-default btn-sm dropdown-toggle">
												<span class="title-replace">Advert Type</span>
												<span class="caret"></span>
											</button>
											<ul class="dropdown-menu"></ul>
										</div>
										<a class="btn btn-sm btn-default show-dialog" data-price-type="1"><i class="fa fa-plus"></i> Create</a>
									</div>
								</div>
							</header>
						</section>
						
						<section class="panel panel-default panel-table">
							<div class="table-responsive" style="padding: 10px;">
								<?php $this->load->view( 'panel/common/form_tree' ); ?>
							</div>
						</section>
					</section>
				</section>
				
				<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			</section>
		</section>
    </section>
</section>

<script>
$(document).ready(function() {
	// helper
	Func.combo({
		category_change: function(category) {
			$('input[name="category_id"]').val(category.id);
			$('.group-category .title-replace').text(category.name);
		},
		category_sub_change: function(category_sub) {
			$('input[name="category_sub_id"]').val(category_sub.id);
			$('.group-category-sub .title-replace').text(category_sub.name);
		},
		advert_type_sub_change: function(advert_type_sub) {
			$('input[name="advert_type_sub_id"]').val(advert_type_sub.id);
			$('.group-advert-type-sub .title-replace').text(advert_type_sub.advert_type_name);
		}
	});
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>