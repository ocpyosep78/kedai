<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
    <?php $this->load->view( 'panel/common/header' ); ?>
	
	<section><section class="hbox stretch">
        <?php $this->load->view( 'panel/common/sidebar' ); ?>
		
        <section id="content">
			<section class="hbox stretch">
				<aside class="aside-xl b-l b-r" id="note-list">
					<section class="vbox flex">
						<form method="post" id="form-search">
							<header class="header clearfix">
								<span class="pull-right m-t"><button class="btn btn-dark btn-sm btn-icon" id="new-note" data-toggle="tooltip" data-placement="right" title="New"><i class="fa fa-plus"></i></button></span>
								<p class="h3">Notebook</p>
								<div class="input-group m-t-sm m-b-sm">
									<span class="input-group-addon input-sm"><i class="fa fa-search"></i></span>
									<input type="text" class="form-control input-sm" id="search-note" placeholder="search" />
								</div>
							</header>
						</form>
						<section><section><section>
							<div class="padder">
								<ul id="note-items" class="list-group list-group-sp">
									<li class="list-group-item hover">
										<div class="view">
											<button class="destroy close hover-action">&times;</button>
											<div class="note-name">
												<strong>Note Name</strong>
											</div>
											<div class="note-desc">Note Description</div>
											<span class="text-xs text-muted">Time Update</span>
										</div>
									</li>
									<li class="list-group-item hover">
										<div class="view">
											<button class="destroy close hover-action">&times;</button>
											<div class="note-name">
												<strong>Note Name</strong>
											</div>
											<div class="note-desc">Note Description</div>
											<span class="text-xs text-muted">Time Update</span>
										</div>
									</li>
								</ul>
								<p class="text-center">&nbsp;</p>
							</div>
						</section></section></section>
					</section>
				</aside>
				
				<aside id="note-detail">
					<section class="vbox">
						<header class="header bg-light lter bg-gradient b-b">
							<div style="float: right;" id="form-btn">
								<div style="padding: 10px 0;">
									<a class="btn btn-sm btn-info btn-save">Save</a>
									<a class="btn btn-sm btn-default">Reset</a>
								</div>
							</div>
							<p id="note-date">Created on ......</p>
						</header>
						<section class="bg-light lter" id="form-note">
							<input type="hidden" name="action" value="update" />
							<section class="hbox stretch">
								<aside>
									<section class="vbox b-b">
										<section class="paper">
											<textarea type="text" name="content" class="form-control scrollable" placeholder="Type your note here"></textarea>
										</section>
									</section>
								</aside>
							</section>
						</section>
					</section>
				</aside>
			</section>
			<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
	</section></section>
</section>

<script>
$(document).ready(function() {
	var page = {
		new_note: function(p) {
			var template = '';
			template += '<li class="list-group-item hover active">';
			template += '<div class="hide record">{id:10}</div>';
			template += '<div class="view">';
			template += '<button class="destroy close hover-action">&times;</button>';
			template += '<div class="note-name">';
			template += '<strong>Note Name</strong>';
			template += '</div>';
			template += '<div class="note-desc">Note Description</div>';
			template += '<span class="text-xs text-muted">Time Update</span>';
			template += '</div>';
			template += '</li>';
			
			$('#note-items').find('.active').removeClass('active');
			$('#note-items').append(template);
			
			// init
			$('#note-items li').last().click(function() {
				$('#note-items').find('.active').removeClass('active');
				$(this).addClass('active');
				
				// populate record
				var raw = $(this).find('.record').html();
				eval('var record = ' + raw);
				Func.ajax({ url: web.base + 'panel/note/action', param: { action: 'get_by_id', id: record.id }, callback: function(result) {
					console.log(result);
				} });
			});
			$('#note-items li .destroy').last().click(function() {
				$(this).parents('li').remove();
			});
		}
	}
	
	// search
	$('#form-search').submit(function(e) {
		e.preventDefault();
		
		var param = Site.Form.GetValue('form-search');
		Func.ajax({ url: web.base + 'panel/note/action', param: param, callback: function(result) {
			console.log(result);
		} });
	});
	
	// form
	$('#new-note').click(function() {
		page.new_note({});
	});
	$('#form-btn .btn-save').click(function() {
		var param = Site.Form.GetValue('form-note');
		Func.update({
			param: param,
			link: web.base + 'panel/note/action'
		});
	});
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>