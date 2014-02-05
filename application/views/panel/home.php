<?php
?>
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
						<ul class="breadcrumb no-border no-radius b-b b-light pull-in">
							<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
							<li class="active">Dashboard</li>
						</ul>
						
						<div class="m-b-md">
							<h3 class="m-b-none">Dashboard</h3>
							<small>Welcome back, Ridwan Amir</small>
						</div>
						
						<section class="panel panel-default">
							<div class="row m-l-none m-r-none bg-light lter">
								<div class="col-sm-6 col-md-3 padder-v b-r b-light">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-info"></i>
										<i class="fa fa-male fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong>52,000</strong></span>
										<small class="text-muted text-uc">New robots</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-warning"></i>
										<i class="fa fa-bug fa-stack-1x text-white"></i>
										<span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#fff" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="2000" data-target="#bugs" data-update="3000"></span>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong id="bugs">468</strong></span>
										<small class="text-muted text-uc">Bugs intruded</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x text-danger"></i>
										<i class="fa fa-fire-extinguisher fa-stack-1x text-white"></i>
										<span class="easypiechart pos-abt" data-percent="100" data-line-width="4" data-track-Color="#f5f5f5" data-scale-Color="false" data-size="50" data-line-cap='butt' data-animate="3000" data-target="#firers" data-update="5000"></span>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong id="firers">359</strong></span>
										<small class="text-muted text-uc">Extinguishers ready</small>
									</a>
								</div>
								
								<div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
									<span class="fa-stack fa-2x pull-left m-r-sm">
										<i class="fa fa-circle fa-stack-2x icon-muted"></i>
										<i class="fa fa-clock-o fa-stack-1x text-white"></i>
									</span>
									<a class="clear" href="#">
										<span class="h3 block m-t-xs"><strong>31:50</strong></span>
										<small class="text-muted text-uc">Left to exit</small>
									</a>
								</div>
							</div>
						</section>
						
						<section class="panel panel-default portlet-item" style="opacity: 1;">
							<header class="panel-heading">
								<ul class="nav nav-pills pull-right">
									<li>
										<a class="panel-toggle text-muted" href="#"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
									</li>
								</ul>
								News From Admin <span class="badge bg-info">32</span>
							</header>
							
							<section class="panel-body">
								<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x"></i>
											<i class="fa fa-bold fa-stack-1x text-white"></i>
										</span>
									</div>
									<div class="media-body">
										<a class="h4" href="#">ini judul news from admin</a>
										<small class="block m-t-xs">ini isi berita dari admin, dan tapilkan 3 berita saja, dan di potong max 150 karakter saja, tampilkan tanggal post Sleek, intuitive, and powerful mobile-first front-end framework for faster an Sleek, intuitive, and powerful mobile-first front-end framework for faster an d easier web development.</small>
										<em class="text-xs">Posted on <span class="text-danger">Feb 23, 2013</span></em>
									</div>
								</article>
								<div class="line pull-in"></div>
								<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x text-info"></i>
											<i class="fa fa-file-o fa-stack-1x text-white"></i>
										</span>
									</div>
									<div class="media-body">
										<a class="h4" href="#">Bootstrap documents</a>
										<small class="block m-t-xs">There are a few easy ways to quickly get started with Bootstrap, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.</small>
										<em class="text-xs">Posted on <span class="text-danger">Feb 12, 2013</span></em>
									</div>
								</article>
								<div class="line pull-in"></div>
								<article class="media">
									<div class="pull-left">
										<span class="fa-stack fa-lg">
											<i class="fa fa-circle fa-stack-2x icon-muted"></i>
											<i class="fa fa-mobile fa-stack-1x text-white"></i>
										</span>
									</div>
									<div class="media-body">
										<a class="h4 text-success" href="#">Mobile first html/css framework</a>
										<small class="block m-t-xs">Bootstrap, Ratchet</small>
										<em class="text-xs">Posted on <span class="text-danger">Feb 05, 2013</span></em>
									</div>
								</article>
							</section>
						</section>
					</section>
				</section>
				
				<a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
			</section>
		</section>
	</section>
</section>
<?php $this->load->view( 'panel/common/footer'); ?>