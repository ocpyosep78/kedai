<?php $this->load->view( 'panel/common/meta' ); ?>
<body>
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen" data-target="#nav">
          <i class="fa fa-bars"></i>
        </a>
        <a href="#" class="navbar-brand" data-toggle="fullscreen"><img src="static/img/logo.png" class="m-r-sm">Notebook</a>
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
                <img src="static/img/avatar.jpg" class="img-circle">
              </a>
              <div class="clear">
                <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
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
                    <img src="static/img/avatar.jpg" alt="John said" class="img-circle">
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
              <img src="static/img/avatar.jpg">
            </span>
            John.Smith <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>
            <li>
              <a href="#">Settings</a>
            </li>
            <li>
              <a href="profile.html">Profile</a>
            </li>
 
            <li>
              <a href="docs.html">Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
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
           <!--       <ul class="dropdown-menu text-left">
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Another Project</a></li>
                    <li><a href="#">More Projects</a></li>
                  </ul> -->
                </div>
              </div>
            </header>
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="index.html"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Dashboard</span>
                      </a>
                    </li>
				
					 <li >
                      <a href="myad.html"  >
                        <i class="fa fa-columns icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>My Ads</span>
                      </a>
                    </li>
                    
                    
                    
                    <li >
                      <a href="message.html"  >
                        <b class="badge bg-danger pull-right">3</b>
                        <i class="fa fa-envelope-o icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span>Message</span>
                      </a>
                    </li>
					<li >
                      <a href="#pages"  >
                        <i class="fa fa-file-text icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>Profile</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="profile.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Edit Profile</span>
                          </a>
                        </li>
                        <li >
                          <a href="get-verified.html" >                                                        
                            <i class="fa fa-angle-right"></i>
                            <span>Get Verified</span>
                          </a>
                        </li>
                      </ul>
                    </li>
					 <li >
                      <a href="setting.html"  >
                        <i class="fa fa-flask icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Setting</span>
                      </a>
                    </li>
					
                    <li >
                      <a href="notebook.html"  >
                        <i class="fa fa-pencil icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Notes</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
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
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
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
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
<?php $this->load->view( 'panel/common/footer'); ?>