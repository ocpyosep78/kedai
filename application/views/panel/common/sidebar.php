<aside class="bg-dark lter aside-md hidden-print" id="nav">
	<section class="vbox">
		<header class="header bg-primary lter text-center clearfix">
			<div class="btn-group">
				<button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
				<div class="btn-group hidden-nav-xs">
					<button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
						Entry Ad
						<span class="caret"></span>
					</button>
					<!--
					<ul class="dropdown-menu text-left">
						<li><a href="#">Project</a></li>
						<li><a href="#">Another Project</a></li>
						<li><a href="#">More Projects</a></li>
					</ul>
					-->
				</div>
			</div>
		</header>
		
		<section class="w-f scrollable">
			<div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
				<nav class="nav-primary hidden-xs">
					<ul class="nav">
						<li class="active">
							<a href="index.html" class="active">
								<i class="fa fa-dashboard icon"><b class="bg-danger"></b></i>
								<span>Dashboard</span>
							</a>
						</li>
						<li>
							<a href="myad.html">
								<i class="fa fa-columns icon"><b class="bg-info"></b></i>
								<span>My Ads</span>
							</a>
						</li>
						<li>
							<a href="message.html">
								<b class="badge bg-danger pull-right">3</b>
								<i class="fa fa-envelope-o icon"><b class="bg-primary dker"></b></i>
								<span>Message</span>
							</a>
						</li>
						<li>
							<a href="#pages">
								<i class="fa fa-file-text icon"><b class="bg-primary"></b></i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span>Profile</span>
							</a>
							
							<ul class="nav lt">
								<li>
									<a href="profile.html">
										<i class="fa fa-angle-right"></i>
										<span>Edit Profile</span>
									</a>
								</li>
								<li>
									<a href="get-verified.html">
										<i class="fa fa-angle-right"></i>
										<span>Get Verified</span>
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="setting.html">
								<i class="fa fa-flask icon"><b class="bg-info"></b></i>
								<span>Setting</span>
							</a>
						</li>
						<li>
							<a href="notebook.html">
								<i class="fa fa-pencil icon"><b class="bg-info"></b></i>
								<span>Notes</span>
							</a>
						</li>
						<li>
							<a>
								<i class="fa fa-file-text icon"><b class="bg-primary"></b></i>
								<span class="pull-right">
									<i class="fa fa-angle-down text"></i>
									<i class="fa fa-angle-up text-active"></i>
								</span>
								<span>Master</span>
							</a>
							
							<ul class="nav lt">
								<li>
									<a href="<?php echo base_url('panel/master/advert_type'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Advert Type</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/category'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Category</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/category_price'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Category Price</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/category_member'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Category Member</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/city'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>City</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/page_static'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Page Static</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/region'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Region</span>
									</a>
								</li>
								<li>
									<a href="<?php echo base_url('panel/master/widget'); ?>">
										<i class="fa fa-angle-right"></i>
										<span>Widget</span>
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</section>
		
		<footer class="footer lt hidden-xs b-t b-dark">
			<!--
			<div id="chat" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light">Active chats</header>
						<div class="panel-body animated fadeInRight">
							<p class="text-sm">No active chats.</p>
							<p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
						</div>
					</section>
				</section>
			</div>
			<div id="invite" class="dropup">
				<section class="dropdown-menu on aside-md m-l-n">
					<section class="panel bg-white">
						<header class="panel-heading b-b b-light">
							John <i class="fa fa-circle text-success"></i>
						</header>
						<div class="panel-body animated fadeInRight">
							<p class="text-sm">No contacts in your lists.</p>
							<p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
						</div>
					</section>
				</section>
			</div>
			-->
			<a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
				<i class="fa fa-angle-left text"></i>
				<i class="fa fa-angle-right text-active"></i>
			</a>
			<!--
			<div class="btn-group hidden-nav-xs">
				<button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
				<button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
			</div>
			-->
		</footer>
	</section>
</aside>