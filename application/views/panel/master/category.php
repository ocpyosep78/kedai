<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
	
	<div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title">Idrawfast 02/2013</h4>
				</div>
				<div class="modal-body">
					<p>This is a table in a modal, click the trash icon to remove the item</p>
					<section class="panel panel-default m-l-n-md  m-r-n-md m-b-none">
						<header class="panel-heading">
							<span class="label bg-danger pull-right">4 left</span> Tasks
						</header>
						<table class="table table-striped m-b-none text-sm">
						<thead>
							<tr>
								<th>Progress</th>
								<th>Item</th>
								<th width="20"></th>
							</tr>
						</thead>
						<tbody>
							<tr id="item-1">
								<td>
									<div class="progress progress-sm progress-striped active m-t-xs m-b-none">
										<div class="progress-bar progress-bar-success" data-toggle="tooltip" data-original-title="80%" style="width: 80%"></div>
									</div>
								</td>
								<td>App prototype design</td>
								<td class="text-right">
									<a href="#item-1" data-dismiss="alert"><i class="fa fa-trash-o"></i></a>
								</td>
							</tr>
						</tbody>
						</table>
					</section>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-info" data-loading-text="Updating...">Save changes</button>
				</div>
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
						
						<section class="panel panel-default">
							<header class="header bg-white b-b clearfix">
								<div class="row m-t-sm">
									<div class="col-sm-8 m-b-xs">
										<div class="btn-group">
											<button type="button" class="btn btn-sm btn-default" title="Refresh"><i class="fa fa-refresh"></i></button>
											<button type="button" class="btn btn-sm btn-default" title="Remove"><i class="fa fa-trash-o"></i></button>
											<button type="button" class="btn btn-sm btn-default" title="Filter" data-toggle="dropdown"><i class="fa fa-filter"></i> <span class="caret"></span></button>
											
											<ul class="dropdown-menu">
												<li><a href="#">Action</a></li>
												<li><a href="#">Another action</a></li>
												<li><a href="#">Something else here</a></li>
												<li class="divider"></li>
												<li><a href="#">Separated link</a></li>
											</ul>
										</div>
										<a class="btn btn-sm btn-default show-dialog"><i class="fa fa-plus"></i> Create</a>
									</div>
									<div class="col-sm-4 m-b-xs">
										<div class="input-group">
											<input type="text" class="input-sm form-control" placeholder="Search">
											<span class="input-group-btn">
												<button class="btn btn-sm btn-default" type="button">Go!</button>
											</span>
										</div>
									</div>
								</div>
							</header>
							
							<div class="table-responsive">
								<table class="table table-striped m-b-none" data-ride="datatable" id="datatable">
								<thead>
									<tr>
										<th width="50%">Rendering engine</th>
										<th width="50%">&nbsp;</th>
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
	$('.show-dialog').click(function() {
		$('#modal').modal();
	});
	
	// grid
	var param = {
		id: 'datatable',
		source: web.base + 'panel/master/category/grid',
		column: [ { }, { bSortable: false, sClass: "center" } ],
		callback: function() {
			$('#datatable .btn-edit').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.ajax({ url: web.host + 'panel/master/jenis_angsuran/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {
					$('#form-jenis-angsuran [name="id"]').val(result.id);
					$('#form-jenis-angsuran [name="name"]').val(result.name);
					page.show_form_jenis_angsuran();
				} });
			});
			
			$('#datatable .btn-delete').click(function() {
				var raw_record = $(this).siblings('.hide').text();
				eval('var record = ' + raw_record);
				
				Func.confirm_delete({
					data: { action: 'delete', id: record.id },
					url: web.host + 'panel/master/jenis_angsuran/action', callback: function() { dt.reload(); }
				});
			});
		}
	}
	dt = Func.init_datatable(param);
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>