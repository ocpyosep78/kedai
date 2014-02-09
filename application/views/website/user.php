<?php
	foreach ($this->uri->segments as $value) {
		if ($value == 'user') {
			continue;
		}
		
		$user = $this->User_model->get_by_id(array( 'alias' => $value ));
		if (count($user) > 0) {
			break;
		}
	}
	
	// no user found
	if (count($user) == 0) {
		header("HTTP/1.1 301 Moved Permanently");
		header('Location: '.base_url());
		exit;
	}
	
	// build breadcrumb
	$param_breadcrumb['title_list'][] = array( 'link' => base_url(), 'title' => 'Home', 'class' => 'first' );
	$param_breadcrumb['title_list'][] = array( 'link' => $user['user_link'], 'title' => $user['fullname'] );
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
							<h2><?php echo $user['first_name']; ?>'s Profile</h2>
							<p>-</p>
							<form method="post" id="form-register">
								<input type="hidden" name="action" value="update" />
								
								<h3>Your Personal Details</h3>
								<div class="content">
									<table class="form"><tbody>
									<tr>
										<td>Fullname</td>
										<td><?php echo $user['fullname']; ?></td></tr>
									<tr>
										<td>Email</td>
										<td><?php echo $user['email']; ?></td></tr>
									<tr>
										<td>Alias</td>
										<td><?php echo $user['alias']; ?></td></tr>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $user['address']; ?></td></tr>
									</tr>
									<tr>
										<td>Telp</td>
										<td><?php echo $user['phone']; ?></td></tr>
									</tr>
									<tr>
										<td>BB PIN</td>
										<td><?php echo $user['bb_pin']; ?></td></tr>
									</tr>
									<tr>
										<td>About</td>
										<td><?php echo $user['user_about']; ?></td></tr>
									</tr>
									<tr>
										<td>Info</td>
										<td><?php echo $user['user_info']; ?></td></tr>
									</tr>
									<tr>
										<td>Avatar</td>
										<td><img src="<?php echo $user['thumbnail_profile_link']; ?>" style="width: 100px;" /></td></tr>
									</tr>
									</tbody></table>
								</div>
							</form>
						</div>
					</div> 
				</section>
				
				<aside id="oc-column-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offcanvas-sidebar">
					<div id="column-right" class="sidebar">
			 			<?php $this->load->view('website/common/widget_section'); ?>
					</div>
				</aside>
			</div>
		</div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>

</body></html>