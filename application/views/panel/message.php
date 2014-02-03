<?php $this->load->view( 'panel/common/meta' ); ?>
<style>
.hide { display: none !important; }
</style>
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
									<li class="list-group-item animated fadeInRightBig" href="#email-content, #email-list" data-toggle="class:show,hide">
										<a href="#" class="thumb-xs pull-left m-r-sm">
											<img src="images/avatar_default.jpg" class="img-circle" />
										</a>
										<a href="#" class="clear">
											<small class="pull-right text-muted">3 minuts ago</small>
											<strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span>
											<span>Wellcome and play this web application template ... </span>
										</a>
									</li>
                    <li class="list-group-item animated fadeInRightBig" href="#email-content, #email-list" data-toggle="class:show,hide">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 hour ago</small>
                        <strong>Nama pengirim</strong>
                        <span>judul penawaran honda jazz gan...<span class="text-danger">klik contoh</span></span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">2 hours ago</small>
                        <strong>Josh Long</strong>
                        <span>Vestibulum ullamcorper sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 day ago</small>
                        <strong>Jack Dorsty</strong>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">3 days ago</small>
                        <strong>Morgen Kntooh</strong>
                        <span>Mobile first web app for startup...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">Jun 21</small>
                        <strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">May 10</small>
                        <strong>Gole Lido</strong>
                        <span>Vestibulum ullamcorper sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">Jan 2</small>
                        <strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item" href="#email-content" data-toggle="class:show">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">3 minuts ago</small>
                        <strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span>
                        <span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 hour ago</small>
                        <strong>Jonathan George</strong>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">2 hours ago</small>
                        <strong>Josh Long</strong>
                        <span>Vestibulum ullamcorper sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 day ago</small>
                        <strong>Jack Dorsty</strong>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">3 days ago</small>
                        <strong>Morgen Kntooh</strong>
                        <span>Mobile first web app for startup...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">Jun 21</small>
                        <strong>Yoha Omish</strong> <span class="label label-sm bg-danger text-uc">private</span>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">May 10</small>
                        <strong>Gole Lido</strong>
                        <span>Vestibulum ullamcorper sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">Jan 2</small>
                        <strong>Jonthan Snow</strong> <span class="label label-sm bg-success text-uc">clients</span>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item" href="#email-content" data-toggle="class:show">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">3 minuts ago</small>
                        <strong>Drew Wllon</strong> <span class="label label-sm bg-primary text-uc">work</span>
                        <span>Vestibulum ullamcorper sodales nisi nec sodales nisi nec sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 hour ago</small>
                        <strong>Jonathan George</strong>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">2 hours ago</small>
                        <strong>Josh Long</strong>
                        <span>Vestibulum ullamcorper sodales nisi nec...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar_default.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">1 day ago</small>
                        <strong>Jack Dorsty</strong>
                        <span>Morbi nec nunc condimentum...</span>
                      </a>
                    </li>
                    <li class="list-group-item">
                      <a href="#" class="thumb-xs pull-left m-r-sm">
                        <img src="images/avatar.jpg" class="img-circle">
                      </a>
                      <a href="#" class="clear">
                        <small class="pull-right text-muted">3 days ago</small>
                        <strong>Morgen Kntooh</strong>
                        <span>Mobile first web app for startup...</span>
                      </a>
                    </li>
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
					<aside class="bg-white hide b-l" id="email-content">
						<section class="vbox">
							<section class="scrollable">
								<div class="wrapper b-b b-light">
									<a href="#" data-toggle="class" class="pull-left m-r-sm"><i class="fa fa-star-o fa-1x text"></i><i class="fa fa-star text-warning fa-1x text-active"></i></a>
									<a href="#email-content, #email-list" data-toggle="class:show,hide" class="pull-right text">
										<i class="fa fa-trash-o"></i>
									</a>
									<h4 class="m-n"> judul penawaran honda jazz gan</h4>
								</div>
								<div class="text-sm padder m-t">
									<div class="block clearfix m-b">
										<a href="#" class="thumb-xs inline"><img src="images/avatar.jpg" class="img-circle"></a> 
										<span class="inline m-t-xs">Nama domain &lt;system@inidomain.com&gt; to me</span>
										<div class="pull-right inline">
											May 12 (<em>4 days ago</em>)
											<div class="btn-group">
												<button class="btn btn-default btn-xs" data-toggle="tooltip" data-title="Back"><i class="fa fa-reply"></i></button>
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
									<p>Mr. Soe</p>
									<p>
										<b>Isi pesan dari contact di halaman detail iklan (contact advertiser yang di batasi max 200 karakter)</b>, Hai anda menerima pesan dari pengunjung pada iklan 
										<p>ini url iklan</p>
									</p>
									<blockquote>
										<em>Anu.. itu honda jazz boleh kurang nda.. saya minat bro..</em>
									</blockquote>
									<div class="show">
										<p>Here detail who contact you</p>
										<p>Nama lengkap : Ridwan Amir</p>
										<p>Phone : 081233743926</p>
										<p>Email : ridwanamirsene@yahoo.com</p>
									</div>
									<br/>
								</div>
								<div class="padder">
									<div class="panel text-sm bg-light">
										<div class="panel-body">
											Click here to <a href="#">Reply</a> or <a href="#">Forward</a>
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