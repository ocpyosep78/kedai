<?php $this->load->view( 'panel/common/meta', array( 'html_class' => 'bg-dark' ) ); ?>

<body>
<section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
	<div class="container aside-xxl">
		<a class="navbar-brand block" href="index.html">Notebook</a>
		<section class="panel panel-default bg-white m-t-lg">
			<header class="panel-heading text-center">
				<strong>Sign in</strong>
			</header>
			<form class="panel-body wrapper-lg" id="form-login">
				<input type="hidden" name="action" value="login" />
				<div class="form-group">
					<label class="control-label">Email</label>
					<input type="text" name="email" placeholder="Email" class="form-control input-lg" data-required="true" data-type="email" />
				</div>
				<div class="form-group">
					<label class="control-label">Password</label>
					<input type="password" name="passwd" placeholder="Password" class="form-control input-lg" data-required="true" />
				</div>
				<!--
				<div class="checkbox">
					<label>
						<input type="checkbox"> Keep me logged in
					</label>
				</div>
				-->
				<a href="#" class="pull-right m-t-xs"><small>Forgot password?</small></a>
				<button type="submit" class="btn btn-primary">Sign in</button>
				<!--
				<div class="line line-dashed"></div>
				<a href="#" class="btn btn-facebook btn-block m-b-sm"><i class="fa fa-facebook pull-left"></i>Sign in with Facebook</a>
				<a href="#" class="btn btn-twitter btn-block"><i class="fa fa-twitter pull-left"></i>Sign in with Twitter</a>
				<div class="line line-dashed"></div>
				<p class="text-muted text-center"><small>Do not have an account?</small></p>
				<a href="signup.html" class="btn btn-default btn-block">Create an account</a>
				-->
			</form>
		</section>
	</div>
</section>

<footer id="footer">
	<div class="text-center padder">
		<p><small>Web app framework base on Bootstrap<br>&copy; <?php echo date('Y'); ?></small></p>
	</div>
</footer>

<script>
$(document).ready(function() {
	var form = $('#form-login').parsley();
	$('#form-login').submit(function(e) {
		e.preventDefault();
		if (! form.isValid()) {
			return false;
		}
		
		var param = Site.Form.GetValue('form-login');
		Func.ajax({ url: web.base + 'panel/home/action', param: param, callback: function(result) {
			if (result.status) {
				window.location = web.base + 'panel';
			} else {
				$.notify(result.message, "error");
			}
		} });
	});
});
</script>

<?php $this->load->view( 'panel/common/footer'); ?>