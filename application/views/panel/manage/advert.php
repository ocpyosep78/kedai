<?php
	$page['ADVERT_STATUS_APPROVE'] = ADVERT_STATUS_APPROVE;
	
	$array_category = $this->Category_model->get_array();
	$array_advert_status = $this->Advert_Status_model->get_array();
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
	<div id="cnt-page" class="hide"><?php echo json_encode($page); ?></div>
	
	<div class="modal fade" id="modal-advert">
		<div class="modal-dialog">
			<div class="modal-content">
				<form data-validate="parsley">
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="id" value="0" />
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Advert Form</h4>
					</div>
					<div class="modal-body">
						<section class="panel panel-default">
							<div class="panel-body">
								<div class="form-group">
									<label>Category</label>
									<select name="category_id" class="form-control" data-required="true">
										<?php echo ShowOption(array( 'Array' => $array_category, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
								</div>
								<div class="form-group">
									<label>Sub Category</label>
									<select name="category_sub_id" class="form-control" data-required="true"></select>
								</div>
								<div class="form-group">
									<label>Advert Status</label>
									<select name="advert_status_id" class="form-control" data-required="true">
										<?php echo ShowOption(array( 'Array' => $array_advert_status, 'ArrayID' => 'id', 'ArrayTitle' => 'name' )); ?>
									</select>
								</div>
							</div>
						</section>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-info">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
    <section>
		<section class="hbox stretch">
			<?php $this->load->view( 'panel/common/sidebar' ); ?>
			
			<section id="content">
				<section class="vbox">
					<section class="scrollable padder">
						<div class="m-b-md">
							<h3 class="m-b-none">Advert</h3>
						</div>
						
						<section class="panel panel-default panel-table">
							<header class="header bg-white b-b clearfix">
								<div class="row m-t-sm">
									<div class="col-sm-8 m-b-xs">&nbsp;</div>
									<div class="col-sm-4 m-b-xs">
										<div class="input-group">
											<input type="text" class="input-sm form-control input-keyword" placeholder="Search" />
											<span class="input-group-btn">
												<button class="btn btn-sm btn-default btn-search" type="button">Go!</button>
											</span>
										</div>
									</div>
								</div>
							</header>
							
							<div class="table-responsive">
								<table class="table table-striped m-b-none" data-ride="datatable" id="datatable">
								<thead>
									<tr>
										<th width="15%">Category</th>
										<th width="15%">Sub Category</th>
										<th width="20%">Title</th>
										<th width="15%">Post Time</th>
										<th width="20%">Status</th>
										<th width="15%">&nbsp;</th>
									</tr>
								</thead>
								<tbody></tbody>
								</table>
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
	// page
	var page = {
		init: function() {
			var raw_page = $('#cnt-page').html();
			eval('var data = ' + raw_page);
			page.data = data;
		}
	}
	page.init();
	
	// grid
	var param = {
		id: 'datatable', aaSorting: [[3, 'desc']],
		source: web.base + 'panel/manage/advert/grid',
		column: [ { }, { }, { }, { }, { }, { bSortable: false, sClass: 'center', sWidth: '15%' } ],
		callback: function() {
			$('#datatable .btn-edit').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.ajax({ url: web.base + 'panel/manage/advert/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {
					Func.populate({ cnt: '#modal-advert', record: result });
					combo.category_sub({ category_id: result.category_id, target: $('#modal-advert [name="category_sub_id"]'), value: result.category_sub_id });
					$('#modal-advert').modal();
				} });
			});
			
			$('#datatable .btn-delete').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.confirm_delete({
					data: { action: 'delete', id: record.id },
					url: web.base + 'panel/manage/advert/action', callback: function() { dt.reload(); }
				});
			});
			
			$('#datatable .btn-approve').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.update({
					callback: function() { dt.reload(); },
					link: web.base + 'panel/manage/advert/action',
					param: { action: 'update', id: record.id, advert_status_id: page.data.ADVERT_STATUS_APPROVE }
				});
			});
			
			$('#datatable .btn-hyperlink').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				window.open(record.edit_link);
			});
		}
	}
	var dt = Func.init_datatable(param);
	
	// form
	var form = $('#modal-advert form').parsley();
	$('#modal-advert form').submit(function(e) {
		e.preventDefault();
		if (! form.isValid()) {
			return false;
		}
		
		var param = Site.Form.GetValue('modal-advert form');
		Func.update({
			param: param,
			link: web.base + 'panel/manage/advert/action',
			callback: function() {
				dt.reload();
				$('#modal-advert').modal('hide');
				$('#modal-advert form')[0].reset();
			}
		});
	});
	
	// helper
	$('.show-dialog').click(function() {
		$('#modal-advert').modal();
		$('#modal-advert form')[0].reset();
		$('#modal-advert [name="id"]').val(0);
	});
	$('[name="category_id"]').change(function() {
		combo.category_sub({
			category_id: $(this).val(),
			target: $('#modal-advert [name="category_sub_id"]')
		});
	});
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>