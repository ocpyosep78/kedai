<?php
	// site & user info
	$user = $this->User_model->get_session();
	$user_count = $this->User_model->get_count(array( 'total_user' => true ));
	$adver_count = $this->Advert_model->get_count(array( 'total_advert' => true ));
	$verify_address_count = $this->Verify_Address_model->get_count(array( 'total_verify_pending' => true ));
	
	// time active
	$unix_active_time = ConvertToUnixTime($user['active_time']);
	$unix_current_limit = ConvertToUnixTime($this->config->item('current_datetime')) - LOGIN_ACTIVE_TIME;
	$left_time = $unix_active_time - $unix_current_limit;
	
	// announcement
	$array_announce = $this->Announce_model->get_array();
	$count_announce = $this->Announce_model->get_count();
	
	$page['left_time'] = $left_time;
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
	<?php $this->load->view( 'panel/common/header' ); ?>
	<div class="hide">
		<div id="cnt-page"><?php echo json_encode($page); ?></div>
	</div>
	
	<section>
		<section class="hbox stretch">
			<?php $this->load->view( 'panel/common/sidebar' ); ?>
			
			<section id="content">
				<section class="vbox">  
					<section class="scrollable padder">
						<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
						
						<div class="m-b-md">
							<h3 class="m-b-none">Dashboard</h3>
							<small>Welcome back, <?php echo $user['fullname']; ?></small>
						</div>
						
						<?php if (in_array($user['user_type_id'], array(USER_TYPE_ADMINISTRATOR, USER_TYPE_EDITOR))) { ?>
						<section class="panel panel-default">
							<div class="row m-l-none m-r-none bg-light lter">
								<div class="col-sm-6 col-md-3 padder-v b-r b-light">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-info"></i>
										<i class="fa fa-male fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong><?php echo $user_count; ?></strong></span>
										<small class="text-muted text-uc">User</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-warning"></i>
										<i class="fa fa-barcode fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong><?php echo $adver_count; ?></strong></span>
										<small class="text-muted text-uc">Advertise</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-danger"></i>
										<i class="fa fa-check fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong><?php echo $verify_address_count; ?></strong></span>
										<small class="text-muted text-uc">Verify Address Pending</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x icon-muted"></i>
										<i class="fa fa-clock-o fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs cnt-time-label"><strong>00:00</strong></span>
										<small class="text-muted text-uc">Left to exit</small>
									</a>
								</div>
							</div>
						</section>
						<?php } ?>
						
						<section class="panel panel-default portlet-item" style="opacity: 1;">
							<header class="panel-heading">
								<ul class="nav nav-pills pull-right">
									<li>
										<a class="panel-toggle text-muted" href="#"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
									</li>
								</ul>
								News From Admin <a href="<?php echo base_url('announce'); ?>"><span class="badge bg-info"><?php echo $count_announce; ?></span></a>
							</header>
							
							<section class="panel-body">
								<?php foreach ($array_announce as $key => $row) { ?>
								<?php $counter = $key % 3; ?>
								<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg">
											<?php if ($counter == 0) { ?>
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-bold fa-stack-1x text-white"></i>
											<?php } else if ($counter == 1) { ?>
											<i class="fa fa-circle fa-stack-2x text-info"></i>
											<i class="fa fa-file-o fa-stack-1x text-white"></i>
											<?php } else if ($counter == 2) { ?>
											<i class="fa fa-circle fa-stack-2x icon-muted"></i>
											<i class="fa fa-mobile fa-stack-1x text-white"></i>
											<?php } else { ?>
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-bold fa-stack-1x text-white"></i>
											<?php } ?>
										</span>
									</div>
									<div class="media-body">
										<a class="h4" href="<?php echo $row['announce_link']; ?>" target="_blank"><?php echo $row['name']; ?></a>
										<small class="block m-t-xs"><?php echo get_length_char($row['name'], 150, ' ...'); ?></small>
										<em class="text-xs">Posted on <span class="text-danger"><?php echo GetFormatDate($row['post_time']); ?></span></em>
									</div>
								</article>
								<div class="line pull-in"></div>
								<?php } ?>
							</section>
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
			
			page.init_time();
		},
		init_time: function() {
			setInterval(function(){
				// get minute
				var minute = Math.floor(page.data.left_time / 60);
				var second = str_pad(page.data.left_time % 60, 2, '0', 'STR_PAD_LEFT');
				var label = minute + ':' + second;
				$('.cnt-time-label strong').text(label);
				
				page.data.left_time--;
				if (page.data.left_time <= 0) {
					window.location = window.location.href;
				}
			},
			1000);
		}
	}
	page.init();
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>