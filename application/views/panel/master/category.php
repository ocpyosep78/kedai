<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
	<div class="hide">
		<iframe name="iframe_thumbnail" src="<?php echo base_url('panel/upload?callback_name=set_thumbnail'); ?>"></iframe>
	</div>
	
	<div class="modal fade" id="modal-category">
		<div class="modal-dialog">
			<div class="modal-content">
				<form data-validate="parsley">
					<input type="hidden" name="action" value="update" />
					<input type="hidden" name="id" value="0" />
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Category Form</h4>
					</div>
					<div class="modal-body">
						<section class="panel panel-default">
							<div class="panel-body">
								<div class="form-group">
									<label>Title</label>
									<input type="text" class="form-control" name="name" data-required="true" />
								</div>
								<div class="form-group">
									<label>Alias</label>
									<input type="text" class="form-control" name="alias" data-required="true" readonly="readonly" />
								</div>
								<div class="form-group">
									<label>Thumbnail</label>
									<div class="clear"></div>
									<div style="float: left; width: 85%;"><input type="text" name="thumbnail" class="form-control" placeholder="Thumbnail" /></div>
									<div style="float: right; width: 15%; text-align: right;"><button type="button" class="btn btn-default browse-thumbnail">Select</button></div>
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
							<h3 class="m-b-none">Category</h3>
						</div>
						
						<section class="panel panel-default panel-table">
							<header class="header bg-white b-b clearfix">
								<div class="row m-t-sm">
									<div class="col-sm-8 m-b-xs">
										<a class="btn btn-sm btn-default show-dialog"><i class="fa fa-plus"></i> Create</a>
									</div>
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
										<th width="40%">Title</th>
										<th width="40%">Alias</th>
										<th width="20%">&nbsp;</th>
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
	// grid
	var param = {
		id: 'datatable',
		source: web.base + 'panel/master/category/grid',
		column: [ { }, { }, { bSortable: false, sClass: 'center', sWidth: '10%' } ],
		callback: function() {
			$('#datatable .btn-edit').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.ajax({ url: web.base + 'panel/master/category/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {
					Func.populate({ cnt: '#modal-category', record: result });
					$('#modal-category').modal();
				} });
			});
			
			$('#datatable .btn-delete').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.confirm_delete({
					data: { action: 'delete', id: record.id },
					url: web.base + 'panel/master/category/action', callback: function() { dt.reload(); }
				});
			});
		}
	}
	var dt = Func.init_datatable(param);
	
	// form
	var form = $('#modal-category form').parsley();
	$('#modal-category [name="name"]').keyup(function() {
		var value = Func.GetName($(this).val());
		$('#modal-category [name="alias"]').val(value);
	});
	$('#modal-category form').submit(function(e) {
		e.preventDefault();
		if (! form.isValid()) {
			return false;
		}
		
		var param = Site.Form.GetValue('modal-category form');
		Func.update({
			param: param,
			link: web.base + 'panel/master/category/action',
			callback: function() {
				dt.reload();
				$('#modal-category').modal('hide');
			}
		});
	});
	
	// helper
	$('.show-dialog').click(function() {
		$('#modal-category').modal();
		$('#modal-category form')[0].reset();
		$('#modal-category [name="id"]').val(0);
	});
	
	// upload
	$('.browse-thumbnail').click(function() { window.iframe_thumbnail.browse() });
	set_thumbnail = function(p) {
		$('#modal-category [name="thumbnail"]').val(p.file_name);
	}
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>