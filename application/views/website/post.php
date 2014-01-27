<?php
	$array_category = $this->Category_model->get_array();
	$array_condition = $this->Condition_model->get_array();
	$array_region = $this->Region_model->get_array();
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
						<input type="hidden" name="id" value="0" />
						<input type="hidden" name="action" value="update" />
						
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
							<section class="non-debug">
								<label class="label">Condition Ad (statis)</label>
								<label class="select">
									<select name="condition_id">
										<?php echo ShowOption(array( 'Array' => $array_condition, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
									<i></i>
								</label>
							</section>
							<section class="non-debug">
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
							<section class="non-debug">
								<label class="label">City (statis)</label>
								<label class="select">
									<select name="city_id">
										<option value="">-</option>
									</select>
									<i></i>
								</label>
							</section>
							<section class="non-debug">
								<label class="label">Address (statis)</label>
								<label class="textarea textarea-resizable">
									<textarea rows="2" cols="60" name="address" placeholder="Ad address"></textarea>
								</label>
							</section>
							<section class="non-debug">
								<label class="label">Title Ad (statis)</label>
								<label class="input">
									<input type="text" name="name" placeholder="Title Ad" />
								</label>
							</section>
							<section class="non-debug">
								<label class="label">Price</label>
								<label class="input">
									<input type="text" name="price" placeholder="Price" />
								</label>
							</section>
							<section class="non-debug">
								<div class="row">
									<div class="col col-4">
										<label class="checkbox"><input name="negotiable" type="checkbox" value="1" /><i></i>Negotiable</label>
									</div>
								</div>
							</section>
						</fieldset>
						
						<fieldset class="non-debug">
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
						
						<fieldset id="cnt-form-add">
							<!--
							// Template here
							
							<section>
								<label class="label">Select</label>
								<label class="select">
									<select name="category_id">
										<?php echo ShowOption(array( 'Array' => $array_category, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
									<i></i>
								</label>
							</section>
							<section>
								<label class="label">Text</label>
								<label class="input">
									<input type="text" name="price" placeholder="Price" />
								</label>
							</section>
							<section>
								<label class="label">Textarea</label>
								<label class="textarea textarea-resizable">
									<textarea rows="3" name="content" placeholder="Desc your ad here"></textarea>
								</label>
							</section>
							<section>
								<label class="label"><div>Check</div></label>
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
							<section class="parent">
								<h4>Parent</h4>
								<section>
									<label class="label">Text</label>
									<label class="input">
										<input type="text" name="price" placeholder="Price" />
									</label>
								</section>
							</section>
							-->
						</fieldset>
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
									<input type="text">
								</label>
							</section>
							<section>
								<label class="label">Email</label>
								<label class="input">
									<input type="text">
								</label>
							</section>
							<section>
								<label class="label">IC Number / Other ID Number (centang)</label>
								<label class="input">
									<input type="text">
								</label>
							</section>
							<section>
								<label class="label">Phone number</label>
								<label class="input">
									<input type="text">
								</label>
							</section>		
							<section>
								<label class="label">Blackberry (Optional)</label>
								<label class="input">
									<input type="text">
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
	var is_debug = true;
	if (is_debug) {
		$('.non-debug').hide();
	}
	
	// page
	var page = {
		load_input: function() {
			var input_param = {
				action: 'get_category_input',
				category_id: $('#form-advert [name="category_id"]').val(),
				category_sub_id: $('#form-advert [name="category_sub_id"]').val(),
				advert_type_sub_id: $('#form-advert [name="advert_type_id"]:checked').data('advert_type_sub_id')
			}
			Func.ajax({
				url: web.base + 'post/action',
				param: input_param,
				callback: function(result) {
					$('#cnt-form-add').html('');
					page.build_input(result, { append: true });
				}
			});
		},
		build_input: function(array_input, config) {
			// set config
			config.append = (typeof(config.append) != 'undefined') ? config.append : false;
			
			for (var i = 0; i < array_input.length; i++) {
				var template = '';
				if (array_input[i].input_type_name == 'text') {
					var value = (array_input[i].value == '') ? '' : 'value="' + array_input[i].value + '"';
					var max_length = (array_input[i].max_length == 0) ? '' : 'maxlength="' + array_input[i].max_length + '"';
					var required = (array_input[i].is_required == 0) ? '' : 'required';
					
					template += '<section>';
					template += '<label class="label">' + array_input[i].label + '</label>';
					template += '<label class="input">';
					template += '<input type="text" name="' + Func.GetName(array_input[i].title) + '" placeholder="' + array_input[i].label + '" ' + value + ' ' + max_length + ' ' + required + ' />';
					template += '</label>';
					template += '</section>';
				}
				else if (array_input[i].input_type_name == 'select') {
					var required = (array_input[i].is_required == 0) ? '' : 'required';
					
					// generate option
					var cnt_option = '';
					var array_value = array_input[i].value.split(',');
					for (var j = 0; j < array_value.length; j++) {
						cnt_option += '<option value="' + array_value[j] + '">' + array_value[j] + '</option>';
					}
					
					template += '<section>';
					template += '<label class="label">' + array_input[i].label + '</label>';
					template += '<label class="select">';
					template += '<select name="' + Func.GetName(array_input[i].title) + '" ' + required + '>';
					template += cnt_option;
					template += '</select>';
					template += '<i></i>';
					template += '</label>';
					template += '</section>';
				}
				else if (array_input[i].input_type_name == 'checkbox') {
					var name = Func.GetName(array_input[i].title);
					
					// generate option
					var cnt_option = '';
					var array_value = array_input[i].value.split(',');
					for (var j = 0; j < array_value.length; j++) {
						cnt_option += '<div class="col col-4"><label class="checkbox"><input name="' + name + '[]" type="checkbox" value="' + array_value[j] + '" /><i></i>' + array_value[j] + '</label></div>';
					}
					
					template += '<section>';
					template += '<label class="label"><div>' + array_input[i].label + '</div></label>';
					template += '<div class="row">';
					template += cnt_option;
					template += '</div>';
					template += '</section>';
				}
				else if (array_input[i].input_type_name == 'textarea') {
					var value = (array_input[i].value == '') ? '' : 'value="' + array_input[i].value + '"';
					var max_length = (array_input[i].max_length == 0) ? '' : 'maxlength="' + array_input[i].max_length + '"';
					var required = (array_input[i].is_required == 0) ? '' : 'required';
					
					template += '<section>';
					template += '<label class="label">' + array_input[i].label + '</label>';
					template += '<label class="textarea textarea-resizable">';
					template += '<textarea rows="3" name="' + Func.GetName(array_input[i].title) + '" placeholder="' + array_input[i].label + '" ' + max_length + ' ' + required + '></textarea>';
					template += '</label>';
					template += '</section>';
				}
				else if (array_input[i].input_type_name == 'parent') {
					var content = '';
					if (typeof(array_input[i].child) != 'undefined') {
						if (array_input[i].child.length > 0) {
							content = page.build_input(array_input[i].child, { append: false });
						}
					}
					
					template += '<section class="parent">';
					template += '<h4>' + array_input[i].label + '</h4>';
					template += content;
					template += '</section>';
				}
				
				if (config.append) {
					$('#cnt-form-add').append(template);
				}
			}
			
			// result
			if (! config.append) {
				return template;
			}
		}
	}
	
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
				// set advert type
				var content = '';
				var template = '<label class="radio"><input type="radio" [ATTRIBUTE] /><i></i>[LABEL]</label>';
				for (var i = 0; i < result.length; i++) {
					var check = (i == 0) ? 'checked="checked"' : '';
					var temp = template.replace('[ATTRIBUTE]', 'name="advert_type_id" value="' + result[i].advert_type_id + '" data-advert_type_sub_id="' + result[i].id + '" ' + check + ' ');
					temp = temp.replace('[LABEL]', result[i].advert_type_name);
					content += temp;
				}
				$('.cnt-advert-type .inline-group').html(content);
				
				// init category input & trigger it
				$('#form-advert [name="advert_type_id"]').click(function() { page.load_input(); });
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
	$('#form-advert').submit(function(e) {
		e.preventDefault();
		if (! $('#form-advert').valid()) {
			return;
		}
		
		var param = Site.Form.GetValue('#form-advert');
		Func.update({
			param: param,
			link: web.base + 'post/action',
			callback: function() {
				console.log('horray');
			}
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