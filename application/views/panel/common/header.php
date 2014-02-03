<header class="bg-dark dk header navbar navbar-fixed-top-xs">
	<div class="navbar-header aside-md">
		<a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
			<i class="fa fa-bars"></i>
		</a>
		<a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="<?php echo base_url('static/img/logo.png'); ?>" class="m-r-sm">Notebook</a>
		<a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
			<i class="fa fa-cog"></i>
		</a>
	</div>
	
	<ul class="nav navbar-nav hidden-xs">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle dker" data-toggle="dropdown">
				<i class="fa fa-building-o"></i>
				<span class="font-bold">Activity</span>
			</a>
			
			<section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
				<div class="wrapper lter m-t-n-xs">
					<a href="#" class="thumb pull-left m-r">
						<img src="<?php echo base_url('static/img/avatar.jpg'); ?>" class="img-circle">
					</a>
					<div class="clear">
						<a href="#"><span class="text-white font-bold">@Mike Mcalidek</span></a>
						<small class="block">Art Director</small>
						<a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a>
					</div>
				</div>
				<div class="row m-l-none m-r-none m-b-n-xs">
					<div class="col-xs">
						<div style="padding:5px;">
							<p>Last Login : 192.168.0.0</p>
							<p>Hari login : Sunday</p>
							<p>Last Login :</p>
						</div>
					</div>
				</div>
			</section>
		</li>
		<li>
			<div class="m-t m-l">
				<a href="price.html" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
			</div>
		</li>
	</ul>
	
	<ul class="nav navbar-nav navbar-right hidden-xs nav-user">
		<li class="hidden-xs">
			<a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
				<i class="fa fa-bell"></i>
				<span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
			</a>
			
			<section class="dropdown-menu aside-xl">
				<section class="panel bg-white">
					<header class="panel-heading b-light bg-light">
						<strong>You have <span class="count">2</span> notifications</strong>
					</header>
					<div class="list-group list-group-alt animated fadeInRight">
						<a href="#" class="media list-group-item">
							<span class="pull-left thumb-sm">
								<img src="<?php echo base_url('static/img/avatar.jpg'); ?>" alt="John said" class="img-circle">
							</span>
							
							<span class="media-body block m-b-none">
								Use awesome animate.css<br>
								<small class="text-muted">10 minutes ago</small>
							</span>
						</a>
						<a href="#" class="media list-group-item">
							<span class="media-body block m-b-none">
								1.0 initial released<br>
								<small class="text-muted">1 hour ago</small>
							</span>
						</a>
					</div>
					<footer class="panel-footer text-sm">
						<a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
						<a href="#notes" data-toggle="class:show animated fadeInRight">See all the notifications</a>
					</footer>
				</section>
			</section>
		</li>
		<li class="dropdown hidden-xs">
			<a href="#" class="dropdown-toggle dker" data-toggle="dropdown"><i class="fa fa-fw fa-search"></i></a>
			<section class="dropdown-menu aside-xl animated fadeInUp">
				<section class="panel bg-white">
					<form role="search">
						<div class="form-group wrapper m-b-none">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button type="submit" class="btn btn-info btn-icon"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
					</form>
				</section>
			</section>
		</li>
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">
				<span class="thumb-sm avatar pull-left">
					<img src="<?php echo base_url('static/img/avatar.jpg'); ?>">
				</span>
				John.Smith <b class="caret"></b>
			</a>
			
			<ul class="dropdown-menu animated fadeInRight">
				<span class="arrow top"></span>
				<li><a href="#">Settings</a></li>
				<li><a href="profile.html">Profile</a></li>
				<li><a href="docs.html">Help</a></li>
				<li class="divider"></li>
				<li><a href="<?php echo base_url('panel/home/logout'); ?>">Logout</a></li>
			</ul>
		</li>
	</ul>
</header>