<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
    <section>
		<section class="hbox stretch">
			<?php $this->load->view( 'panel/common/sidebar' ); ?>
			
			<section id="content">
				<section class="vbox">
					<section class="scrollable padder">
						<div class="m-b-md">
							<h3 class="m-b-none">Annouce</h3>
						</div>
						
						<section class="panel panel-default panel-table grid-view">
							<header class="header bg-white b-b clearfix">
								<div class="row m-t-sm">
									<div class="col-sm-8 m-b-xs">
										<a class="btn btn-sm btn-default show-form"><i class="fa fa-plus"></i> Create</a>
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
										<th width="50%">Name</th>
										<th width="20%">Post Time</th>
										<th width="20%">Update Time</th>
										<th width="10%">&nbsp;</th>
									</tr>
								</thead>
								<tbody></tbody>
								</table>
							</div>
						</section>
						
						<section class="panel panel-default form-view hide">
							<header class="panel-heading font-bold">Category Input Form</header>
							<div class="panel-body">
								<form class="bs-example form-horizontal" data-validate="parsley">
									<input type="hidden" name="id" value="0" />
									<input type="hidden" name="action" value="update" />
									
									<div class="form-group">
										<label class="col-lg-2 control-label">Name</label>
										<div class="col-lg-10">
											<input type="text" name="name" class="form-control" placeholder="Name" data-required="true" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Alias</label>
										<div class="col-lg-10">
											<input type="text" name="alias" class="form-control" placeholder="Alias" readonly="readonly" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-lg-2 control-label">Content</label>
										<div class="col-lg-10">
											<textarea name="content" class="form-control" placeholder="Content"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-2 col-lg-10">
											<button type="submit" class="btn btn-sm btn-info">Save</button>
											<button type="button" class="btn btn-sm btn-default show-grid">Cancel</button>
										</div>
									</div>
								</form>
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
	var page = {
		show_grid: function() {
			$('.grid-view').show();
			$('.form-view').hide();
		},
		show_form: function() {
			$('.grid-view').hide();
			$('.form-view').show();
		}
	}
	
	// grid
	var param = {
		id: 'datatable',
		source: web.base + 'panel/manage/announce/grid',
		column: [ { }, { }, { }, { bSortable: false, sClass: 'center', sWidth: '10%' } ],
		callback: function() {
			$('#datatable .btn-edit').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.ajax({ url: web.base + 'panel/manage/announce/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {
					Func.populate({ cnt: '.form-view form', record: result });
					page.show_form();
				} });
			});
			
			$('#datatable .btn-delete').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.confirm_delete({
					data: { action: 'delete', id: record.id },
					url: web.base + 'panel/manage/announce/action', callback: function() { dt.reload(); }
				});
			});
		}
	}
	var dt = Func.init_datatable(param);
	
	// form
	var form = $('.form-view form').parsley();
	$('.form-view form').submit(function(e) {
		e.preventDefault();
		if (! form.isValid()) {
			return false;
		}
		
		var param = Site.Form.GetValue('.form-view form');
		Func.update({
			param: param,
			link: web.base + 'panel/manage/announce/action',
			callback: function() {
				dt.reload();
				page.show_grid();
			}
		});
	});
	
	// helper
	$('.show-form').click(function() {
		page.show_form();
		$('.form-view form')[0].reset();
		$('.form-view [name="id"]').val(0);
	});
	$('.show-grid').click(function() {
		page.show_grid();
	});
	$('.form-view form [name="name"]').keyup(function() {
		var value = Func.GetName($(this).val());
		$('.form-view form [name="alias"]').val(value);
	});
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>