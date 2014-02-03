<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
  <section class="vbox">
    <?php $this->load->view( 'panel/common/header' ); ?>
	
	<section>
      <section class="hbox stretch">
        <?php $this->load->view( 'panel/common/sidebar' ); ?>
		
        <section id="content">
          <section class="vbox">
            <header class="header bg-white b-b b-light">
              <p>John's profile</p>
            </header>
            <section class="scrollable">
              <section class="hbox stretch">
                <aside class="aside-lg bg-light lter b-r">
                  <section class="vbox">
                    <section class="scrollable">
                      <div class="wrapper">
                        <div class="clearfix m-b">
                          <a href="#" class="pull-left thumb m-r">
                            <img src="images/avatar.jpg" class="img-circle">
                          </a>
                          <div class="clear">
                            <div class="h3 m-t-xs m-b-xs">Ridwan Amir</div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i> Malang, Malaysia</small>
                          </div>                
                        </div>
                        
                        <div class="btn-group btn-group-justified m-b">
                          <a class="btn btn-primary btn-rounded" data-toggle="button">
                            <span class="text">
                              <i class="fa fa-eye"></i> Follow
                            </span>
                            <span class="text-active">
                              <i class="fa fa-eye-slash"></i> Following
                            </span>
                          </a>
                          <a class="btn btn-dark btn-rounded" data-loading-text="Connecting">
                            <i class="fa fa-comment-o"></i> Chat
                          </a>
                        </div>
                        <div>
                          <small class="text-uc text-xs text-muted">about me</small>
                          <p>Artist</p>
                          <small class="text-uc text-xs text-muted">info</small>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                          <div class="line"></div>
                          <small class="text-uc text-xs text-muted">connection</small>
                          <p class="m-t-sm">
                            <a href="#" class="btn btn-rounded btn-twitter btn-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-rounded btn-facebook btn-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-rounded btn-gplus btn-icon"><i class="fa fa-google-plus"></i></a>
                          </p>
                        </div>
                      </div>
                    </section>
                  </section>
                </aside>
               <section class="panel panel-default">
                    <header class="panel-heading font-bold">Edit Profile</header>
                    <div class="panel-body">
                      <form role="form">
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>	
                        <div class="form-group">
                          <label>Alamat Text area max 200kar</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Kota</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>						
                        <div class="form-group">
                          <label>Select Region (combo)</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Kode Pos</label>
                          <input type="email" placeholder="Enter email" class="form-control">
                        </div>						

                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> Dengan mengirimkan form ini saya menyatakan bahwa semua informasi diatas adalah benar dan bisa dipertanggungjawabkan. 
                          </label>
                        </div>
                        <button class="btn btn-sm btn-default" type="submit">Submit</button>
                      </form>
                    </div>
                  </section>
                
              </section>
            </section>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  

</body>
</html>