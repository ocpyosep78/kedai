<?php
	$array_category = $this->Category_model->get_array();
	$array_condition = $this->Condition_model->get_array();
	$array_region = $this->Region_model->get_array();
	// 'id', 'user_id', 'city_id', 'advert_type_id', 'advert_status_id', 'category_sub_id', 'name', 'code', 'content', 'price', 'negotiable', 'thumbnail', 'post_time', 'sold_time', 'is_delete'
?>
<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">
<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view('website/common/breadcrumb'); ?>
		<div class="hide">
			<iframe name="iframe_thumbnail_advert" src="<?php echo base_url('panel/upload?callback_name=set_thumbnail_advert'); ?>"></iframe>
		</div>
		
		<div class="container"><div class="row">
			<section class="col-lg-99 col-md-9 col-sm-12 col-xs-12 main-column">
				<div id="content">
					<form class="sky-form" id="form-advert">
						<fieldset>
							<section>
								<label class="label">Select Category (statis)</label>
								<label class="select">
									<select name="category_id">
										<?php echo ShowOption(array( 'Array' => $array_category, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
									<i></i>
								</label>
							</section>
							<section>
								<label class="label">Select Sub Category (statis)</label>
								<label class="select">
									<select name="category_sub_id">
										<option value="">-</option>
									</select>
									<i></i>
								</label>
							</section>
							<section class="cnt-advert-type">
								<label class="label">Ad Type (dinamis)</label>
								<div class="inline-group"></div>
							</section>
							<section>
								<label class="label">Condition Ad (statis)</label>
								<label class="select">
									<select name="condition_id">
										<?php echo ShowOption(array( 'Array' => $array_condition, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
									<i></i>
								</label>
							</section>
							<section>
								<label class="label">Region (statis)</label>
								<label class="select">
									<select name="region_id">
										<?php echo ShowOption(array( 'Array' => $array_region, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
									<i></i>
								</label>
							</section>
							<section class="hide">
								<label class="label">Area (statis)</label>
								<label class="select">
									<select>
										<option selected="selected" value="3">Select Area</option>
										<option value="1">Alexandra</option>
										<option value="2">Alice</option>
									
										<option value="4">Avelina</option>
										
									</select>
									<i></i>
								</label>
							</section>
							<section>
								<label class="label">City (statis)</label>
								<label class="select">
									<select name="city_id">
										<option value="">-</option>
									</select>
									<i></i>
								</label>
							</section>
							<section>
								<label class="label">Address (statis)</label>
								<label class="textarea textarea-resizable">
									<textarea rows="2" cols="60" name="pesan" placeholder="Ad address"></textarea>
								</label>
							</section>
							<section>
								<label class="label">Title Ad (statis)</label>
								<label class="input">
									<input value="" type="text" name="name" placeholder="Title Ad" />
								</label>
							</section>
						</fieldset>
						
						<fieldset>
							<section>
								<label class="label">Ad Desc (statis)</label>
								<label class="textarea textarea-resizable">
									<textarea rows="3" name="content" placeholder="Desc your ad here"></textarea>
								</label>
							</section>
							<section>
								<label class="label">Image (statis)</label>
								<label class="input input-file">
									<div class="button browse-thumbnail-advert">Browse</div>
									<input readonly="readonly" type="text" name="thumbnail" />
								</label>
							</section>	
							<div class="cnt-list-thumbnail"></div>
						</fieldset>
						
						<!--
						<fieldset>
							<section>
								<label class="label"><div style="float:none;font-size:13px;margin-bottom:8px;">Informasi Tambahan (dinamis)</div></label>
								<div class="row">
									<div class="col col-4">
										<label class="checkbox"><input name="checkbox" checked="checked" type="checkbox"><i></i>Alexandra</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Alice</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Anastasia</label>
									</div>
									<div class="col col-4">
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Avelina</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Basilia</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Beatrice</label>
									</div>
									<div class="col col-4">
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Cassandra</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Clemencia</label>
										<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Desiderata</label>
									</div>
								</div>
							</section>
						</fieldset>
						-->
						<br/><br/>
						
						<!--
						<section>
							<section>
								<h3>DATA ANDA</h3><br />
								<div class="inline-group">
									<label class="radio"><input checked="checked" name="radio-inline" type="radio"><i></i>New Member</label>
									<label class="radio"><input name="radio-inline" type="radio"><i></i>Registered Member</label>
								</div>
							</section>
							<section>
								<label class="label">Your Name</label>
								<label class="input">
									<input value="" type="text">
								</label>
							</section>
							<section>
								<label class="label">Email</label>
								<label class="input">
									<input value="" type="text">
								</label>
							</section>
							<section>
								<label class="label">IC Number / Other ID Number (centang)</label>
								<label class="input">
									<input value="" type="text">
								</label>
							</section>
							<section>
								<label class="label">Phone number</label>
								<label class="input">
									<input value="" type="text">
								</label>
							</section>		
							<section>
								<label class="label">Blackberry (Optional)</label>
								<label class="input">
									<input value="" type="text">
								</label>
							</section>					
						</section>
						-->
						
						<footer>
							<button type="submit" class="button">Submit</button>
							<button type="button" class="button button-secondary" onclick="window.history.back();">Cancel</button>
						</footer>
					</form>
				</div>
			</section>
			
			<aside id="oc-column-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offcanvas-sidebar">
				<?php $this->load->view('website/common/widget_section'); ?>
			</aside>
		</div></div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<script>
	// form
	$('#form-advert [name="category_id"]').change(function() {
		combo.category_sub({
			category_id: $(this).val(),
			target: $('#form-advert [name="category_sub_id"]')
		});
	});
	$('#form-advert [name="category_sub_id"]').change(function() {
		var category_sub_id = $(this).val();
		Func.ajax({
			url: web.base + 'panel/json',
			param: { action: 'advert_type_sub', category_sub_id: category_sub_id },
			callback: function(result) {
				var content = '';
				var template = '<label class="radio"><input type="radio" [ATTRIBUTE] /><i></i>[LABEL]</label>';
				for (var i = 0; i < result.length; i++) {
					var temp = template.replace('[ATTRIBUTE]', 'name="advert_type_id" value="' + result[i].advert_type_name + '"');
					temp = temp.replace('[LABEL]', result[i].advert_type_name);
					content += temp;
				}
				
				$('.cnt-advert-type .inline-group').html(content);
				$('#form-advert [name="advert_type_id"]').eq(0).click();
			}
		});
	});
	$('#form-advert [name="region_id"]').change(function() {
		combo.city({
			region_id: $(this).val(),
			target: $('#form-advert [name="city_id"]')
		});
	});
	
	// upload
	$('.browse-thumbnail-advert').click(function() { window.iframe_thumbnail_advert.browse() });
	set_thumbnail_advert = function(p) {
		// set value
		$('#form-advert [name="thumbnail"]').val(p.file_name);
		
		// render html
		var content = '';
		content += '<span class="photo">';
		content += '<input type="hidden" name="list_thumbnail[]" value="' + p.file_name + '" />';
		content += '<img src="' + p.file_link + '" />';
		content += '<div class="btn-delete"><i class="fa fa-times"></i></div>';
		content += '</span>';
		$('#form-advert .cnt-list-thumbnail').append(content);
		
		// init button
		$('.cnt-list-thumbnail .btn-delete').last().click(function() {
			$(this).parent('span.photo').remove();
		});
	}
</script>

<?php $this->load->view('website/common/menu_canvas'); ?>
</body>
</html>