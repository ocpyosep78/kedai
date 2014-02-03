<?php
	// build breadcrumb
	$param_breadcrumb['title_list'][] = array( 'link' => base_url(), 'title' => 'Home', 'class' => 'first' );
	$param_breadcrumb['title_list'][] = array( 'link' => base_url('login'), 'title' => 'Register' );
?>
<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">
<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view( 'website/common/breadcrumb', $param_breadcrumb ); ?>
		
		<div class="container">
	 
			<div class="row">
			 
							
						 
				<section class="col-lg-99 col-md-9 col-sm-12 col-xs-12 main-column">
				
					<div class="description">
									
								<div class="wrapper underline no-margin">
								<h2>Register</h2>
			<p>If you already have an account with us, please login at the <a href="http://www.shopermarket.com/demo/opencart/megashop/index.php?route=account/login">login page</a>.</p>		
			<form role="form" enctype="multipart/form-data" method="post" action="http://www.shopermarket.com/demo/opencart/megashop/index.php?route=account/register">
				<h3>Your Personal Details</h3>
				
				
				<div class="content">

							
				
					<table class="form">
					
 
					
						<tbody>
						<tr>
							<td>
								<span class="required">*</span> 
								URL name:							</td>
							<td>
								<input type="text" value="" name="firstname">
															</td>
						</tr>
						
						<tr>
							<td>
								<span class="required">*</span> 
								First Name:							</td>
							<td>
								<input type="text" value="" name="firstname">
															</td>
						</tr>
						<tr>
							<td>
								<span class="required">*</span> 
								Last Name:							</td>
							<td>
								<input type="text" value="" name="lastname">
															</td>
						</tr>
						<tr>
							<td>
								<span class="required">*</span> 
								Telp:							</td>
							<td>
								<input type="text" value="" name="lastname">
															</td>
						</tr>
						
						<tr>
							<td>
								<span class="required">*</span> 
								E-Mail:							</td>
							<td>
								<input type="text" value="" name="email">
															</td>
						</tr>
 
 
					</tbody></table>
				</div>
			
			 
			
			
				<h3>Your Password</h3>
				<div class="content">
					<table class="form table-condensed">
						<tbody><tr>
							<td>
								<span class="required">*</span> 
								Password:							</td>
							<td>
								<input type="password" value="" name="password">
															</td>
						</tr>
						<tr>
							<td>
								<span class="required">*</span>
								Password Confirm:							</td>
							<td>
								<input type="password" value="" name="confirm">
															</td>
						</tr>
					</tbody></table>
				</div>
				
				<h3>Newsletter</h3>
				<div class="content">
					<table class="form table-condensed">
						<tbody><tr>
							<td>Subscribe:</td>
							<td>
																<input type="radio" value="1" name="newsletter">
								Yes								<input type="radio" checked="checked" value="0" name="newsletter">
								No															</td>
						</tr>
					</tbody></table>
				</div>
				
								<div class="buttons">
					<div class="right">
						I have read and agree to the <a alt="Privacy Policy" href="http://www.shopermarket.com/demo/opencart/megashop/index.php?route=information/information/info&amp;information_id=3" class="colorbox cboxElement"><b>Privacy Policy</b></a>												<input type="checkbox" value="1" name="agree">
												<input type="submit" class="button" value="Continue">
					</div>
				</div>
										
			</form>
		</div> 
										 
									</div> 
				</section>
				
				<aside id="oc-column-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offcanvas-sidebar">
					<div id="column-right" class="sidebar">
			 						<div class="box box-product bestseller">
	<div class="box-heading"><span>Widget 01</span></div>
	<div class="box-content">
		<div class="product-list">Soon..</div>
	</div>
</div>			 				</div>
				</aside>
			</div>
		</div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>
</body></html>