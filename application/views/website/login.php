<?php $this->load->view('website/common/meta'); ?>
<body id="offcanvas-container" class="offcanvas-container layout-fullwidth fs12 page-product">
<section id="page" class="offcanvas-pusher" role="main">
	<?php $this->load->view('website/common/header'); ?>
	
	<section id="columns" class="offcanvas-siderbars">
		<?php $this->load->view('website/common/breadcrumb'); ?>
		
		<div class="container"><div class="row">
			<section class="col-lg-99 col-md-9 col-sm-12 col-xs-12 main-column">
				<div id="content">
					<form class="sky-form" id="form-login">
						<input type="hidden" name="action" value="login" />
						
						<fieldset>
							<section>
								<label class="label">Email</label>
								<label class="input">
									<input type="text" name="email" placeholder="Email" value="" />
								</label>
							</section>
							<section>
								<label class="label">Password</label>
								<label class="input">
									<input type="password" name="passwd" placeholder="Password" value="" />
								</label>
							</section>
						</fieldset	>
						<br/><br/>
						
						<footer>
							<button type="submit" class="button">Sign In</button>
							<button type="button" class="button button-secondary" onclick="window.history.back();">Cancel</button>
						</footer>
					</form>
				</div>
			</section>
			
			<aside id="oc-column-right" class="col-lg-3 col-md-3 col-sm-12 col-xs-12 offcanvas-sidebar">
				<?php $this->load->view('website/common/widget_section'); ?>
			</aside>
		</div></div>
	</section>
	
	<?php $this->load->view('website/common/footer'); ?>
</section>

<?php $this->load->view('website/common/menu_canvas'); ?>

<script>
	// form
	$('#form-login').validate({
		rules: {
			email: { required: true, email: true },
			passwd: { required: true }
		}
	});
	$('#form-login').submit(function(e) {
		e.preventDefault();
		if (! $('#form-login').valid()) {
			return;
		}
		
		var param = Site.Form.GetValue('#form-login');
		Func.ajax({ url: web.base + 'login/action', param: param, callback: function(result) {
			if (result.status == 1) {
				window.location = result.panel_link;
			} else {
				$.notify(result.message, "error");
			}
		} });
	});
</script>

</body>
</html>