<?php
	$user = $this->User_model->get_session();
	$array_user_contact = $this->User_Contact_model->get_array(array( 'user_id' => $user['id'] ));
//	print_r($array_user_contact); exit;
?>
<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
<section class="vbox">
    <?php $this->load->view( 'panel/common/header' ); ?>
	
	<section>
		<section class="hbox stretch">
			<?php $this->load->view( 'panel/common/sidebar' ); ?>
			
			<section id="content">
				<section class="hbox stretch">
					<aside class="bg-light lter b-l" id="email-list">
						<section class="vbox">
							<header class="bg-light dk header clearfix">
								<div class="btn-group pull-right">
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-left"></i></button>
									<button type="button" class="btn btn-sm btn-default"><i class="fa fa-chevron-right"></i></button>
								</div>
								<div class="btn-toolbar">
									<div class="btn-group select">
										<button class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">
											<span class="dropdown-label" style="width: 65px;">Filter</span>
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu text-left text-sm">
											<li><a href="#">Read</a></li>
											<li><a href="#">Unread</a></li>
										</ul>
									</div>
									<div class="btn-group">
										<button class="btn btn-sm btn-default" data-toggle="tooltip" data-placement="bottom" data-title="Refresh"><i class="fa fa-refresh"></i></button>
									</div>
								</div>
							</header>
							<section class="scrollable hover">
								<ul class="list-group no-radius m-b-none m-t-n-xxs list-group-alt list-group-lg">
									<?php foreach ($array_user_contact as $row) { ?>
									<?php $class_name = (empty($row['is_read'])) ? 'animated fadeInRightBig' : ''; ?>
									<li class="list-group-item <?php echo $class_name; ?>">
										<span class="hide record"><?php echo json_encode($row); ?></span>
										<a class="cursor thumb-xs pull-left m-r-sm">
											<img src="<?php echo $row['sender_thumbnail_profile_link']; ?>" class="img-circle" />
										</a>
										<a class="cursor clear">
											<small class="pull-right text-muted"><?php echo $row['post_time_text']; ?></small>
											<strong><?php echo $row['sender_full_name']; ?></strong>
											<span><?php echo $row['title']; ?></span>
										</a>
									</li>
									<?php } ?>
								</ul>
							</section>
							<footer class="footer b-t bg-white-only">
								<form class="m-t-sm">
									<div class="input-group">
										<input type="text" class="input-sm form-control input-s-sm" placeholder="Search" />
										<div class="input-group-btn">
											<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
										</div>
									</div>
								</form>
							</footer>
						</section>
					</aside>
					<aside class="bg-white b-l" id="email-content" style="display: none;">
						<section class="vbox">
							<section class="scrollable">
								<div class="wrapper b-b b-light">
									<!-- <a href="#" data-toggle="class" class="pull-left m-r-sm"><i class="fa fa-star-o fa-1x text"></i><i class="fa fa-star text-warning fa-1x text-active"></i></a>	-->
									<a href="#" class="pull-right text">
										<i class="fa fa-trash-o"></i>
									</a>
									<h4 class="m-n message-title">&nbsp;</h4>
								</div>
								<div class="text-sm padder m-t">
									<div class="block clearfix m-b">
										<a href="#" class="thumb-xs inline"><img src="images/avatar.jpg" class="img-circle message-sender-thumbnail"></a> 
										<span class="inline m-t-xs message-fullname">Nama domain &lt;system@inidomain.com&gt; to me</span>
										<div class="pull-right inline">
											<em class="message-post-time-text">&nbsp;</em>
											<div class="btn-group">
												<button class="btn btn-default btn-xs show-list" data-toggle="tooltip" data-title="Back"><i class="fa fa-reply"></i></button>
												<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
												<ul class="dropdown-menu pull-right">
													<li><a href="#"><i class="fa fa-reply"></i> Reply</a></li>
													<li><a href="#"><i class="fa fa-mail-forward"></i> Forward</a></li>
													<li><a href="#"><i class="fa fa-envelope"></i> Mark as unread</a></li>
													<!--
													<li class="divider"></li>
													<li><a href="#">Delete this message</a></li>
													<li><a href="#">Report spam</a></li>
													-->
												</ul>
											</div>
										</div>
									</div>
									<div class="line pull-in"></div>
									<p>
										Hai anda menerima pesan dari pengunjung pada iklan 
										<p class="message-advert-link">&nbsp;</p>
									</p>
									<blockquote class="message-content">
										<em>Anu.. itu honda jazz boleh kurang nda.. saya minat bro..</em>
									</blockquote>
									<div class="show">
										<p>Here detail who contact you</p>
										<p>Nama lengkap : <span class="message-fullname-only">&nbsp;</span></p>
										<p>Phone : <span class="message-phone">&nbsp;</span></p>
										<p>Email : <span class="message-email">&nbsp;</span></p>
									</div>
									<br/>
								</div>
								<div class="padder">
									<div class="panel text-sm bg-light">
										<div class="panel-body">
											Click here to <a href="#">Reply</a>
										</div>
									</div>
								</div>
							</section>
						</section>
					</aside>
				</section>
				
				<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			</section>
		</section>
	</section>
</section>

<?php $this->load->view( 'panel/common/footer'); ?>

<script>
$(document).ready(function() {
	var page = {
		show_message: function() {
			$('#email-list').hide();
			$('#email-content').show();
		},
		show_listing: function() {
			$('#email-list').show();
			$('#email-content').hide();
		}
	}
	
	// form
	$('.list-group li a').click(function() {
		var raw = $(this).parents('li').find('.record').html();
		eval('var record = ' + raw);
		
		$('#email-content .message-title').text(record.title);
		$('#email-content .message-post-time-text').text(record.post_time_text);
		$('#email-content .message-fullname').text(record.sender_full_name + ' <' + record.email + '> to me');
		$('#email-content .message-sender-thumbnail').attr('src', record.sender_thumbnail_profile_link);
		$('#email-content .message-content').text(record.message);
		$('#email-content .message-fullname-only').text(record.sender_full_name);
		$('#email-content .message-phone').text(record.phone);
		$('#email-content .message-email').text(record.email);
		$('#email-content .message-advert-link').html('<a href="' + record.advert_link + '" target="_blank">' + record.advert_link + '</a>');
		
		page.show_message();
	});
	
	// helper
	$('.show-list').click(function() {
		page.show_listing();
	});
});
</script>