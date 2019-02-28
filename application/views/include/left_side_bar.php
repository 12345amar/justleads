
<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> 
		</svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">

                    <!-- Logo icon -->

                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span>
                        <!-- Light Logo text -- --> 
                        <img src="<?php echo base_url(); ?>assets/images/justleads-logo.png" style="height:70px;" class="light-logo" alt="homepage" /></span>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item hidden-sm-down search-box">
                            <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class=""></i></a>
                            <!--<div class="dropdown-menu scale-up-left">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL --
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="<?php echo base_url(); ?>assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL --
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian --
                                        <div id="accordion" class="nav-accordion" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </a>
                                                    </h5> </div>
                                                <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5> </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5> </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="card-body"> Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact --
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style --
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>-->
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-message"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox scale-up">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            
                                            <a href="#">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            
                                            <a href="#">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            
                                            <a href="#">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            
                                            <a href="#">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <!--<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right scale-up" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message --
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php //echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message --
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php //echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message --
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php //echo base_url(); ?>assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message --
                                            <a href="#">
                                                <div class="user-img"> <img src="<?php //echo base_url(); ?>assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right scale-up">
                                <ul class="dropdown-user">
                                    <li>
                                        <div class="dw-user-box">
                                            <div class="u-img"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user"></div>
                                            <div class="u-text">
                                                <?php if ($this->router->fetch_class() == 'admin') { ?>
                                                <p><?php echo $this->session->userdata('username'); ?></p>
                                                <?php } ?>
                                                
                                                <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                                                <p><?php echo $this->session->userdata('username'); ?></p>
                                                <?php } ?>
                                                
                                                <?php if ($this->router->fetch_class() == 'user') { ?>
                                                <p><?php echo $this->session->userdata('username'); ?></p>
                                                <?php } ?>
                                                
                                                <?php if ($this->router->fetch_class() == 'admin') { ?>
                                                <p class="text-muted"><?php //echo $this->session->userdata('email'); ?></p><a href="<?php echo base_url('admin/view_profile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                                <?php } ?>
                                                
                                                 <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                                                <p class="text-muted"><?php //echo $this->session->userdata('email'); ?></p><a href="<?php echo base_url('telecaller/view_profile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                                <?php } ?>
                                                
                                                 <?php if ($this->router->fetch_class() == 'user') { ?>
                                                <p class="text-muted"><?php //echo $this->session->userdata('email'); ?></p><a href="<?php echo base_url('user/view_profile'); ?>" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                                <?php } ?>
                                            </div>
                                                
                                        </div>

                                    </li>
                                    <?php if ($this->router->fetch_class() == 'admin') { ?>
                                        <li><a href="<?php echo base_url('admin/profile'); ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <?php } ?>
                                    <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                                        <li><a href="<?php echo base_url('telecaller/profile'); ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <?php } ?>
                                    <?php if ($this->router->fetch_class() == 'user') { ?>
                                        <li><a href="<?php echo base_url('user/profile'); ?>"><i class="ti-user"></i> My Profile</a></li>
                                    <?php } ?>
                                    <?php if ($this->router->fetch_class() == 'admin') { ?>
                                        <li><a href="<?php echo base_url('admin/changepassword'); ?>"><i class="ti-lock"></i> Change Password</a></li>
                                    <?php } ?>
                                    <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                                        <li><a href="<?php echo base_url('telecaller/changepassword'); ?>"><i class="ti-lock"></i> Change Password</a></li>
                                    <?php } ?>
                                    <?php if ($this->router->fetch_class() == 'user') { ?>
                                        <li><a href="<?php echo base_url('user/changepassword'); ?>"><i class="ti-lock"></i> Change Password</a></li>
                                    <?php } ?>
                                    <li><a href="<?php echo base_url('logout'); ?>"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Language -->
                        <!-- ============================================================== -->

                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User profile -->
                <div class="user-profile" style="background: url(<?php echo base_url(); ?>assets/images/background/user-info.png) no-repeat;">
                    <!-- User profile image -->
                    <div class="profile-img"> <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/users/profile.png" alt="user" /></a> </div>
                    <!-- User profile text-->

                    <div class="dropdown-menu animated flipInY">
                        <?php if ($this->router->fetch_class() == 'admin') { ?>
                            <li class="nav-small-cap"><a href="#">Admin Dashboard</a></li>
                            <li><a href="<?php echo base_url('admin/profile'); ?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a></li>
                        <?php } ?>
                        <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                            <li class="nav-small-cap"><a href="#">Telecaller Dashboard</a></li>
                            <li><a href="<?php echo base_url('telecaller/profile'); ?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a></li>
                        <?php } ?>
                        <?php if ($this->router->fetch_class() == 'user') { ?>
                            <li class="nav-small-cap"><a href="#">User Dashboard</a></li>
                            <li><a href="<?php echo base_url('user/profile'); ?>" class="dropdown-item"><i class="ti-user"></i> My Profile</a></li>
                        <?php } ?>

                        <div class="dropdown-divider"></div> <a href="<?php echo base_url('logout'); ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                    </div>
                </div>
            </div>
            <!-- End User profile text-->
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <?php if ($this->router->fetch_class() == 'telecaller') { ?>
                        <li class="nav-small-cap"><a href="#">Telecaller Dashboard</a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="#"><span class="hide-menu">Dashboard </span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('telecaller/leads'); ?>" aria-expanded="false"><i class="mdi mdi-laptop-windows"></i><span class="hide-menu">Leads</span></a></li>
                    <?php } ?>

                    <?php if ($this->router->fetch_class() == 'admin') { ?>
                        <!--<li class="nav-small-cap"><a href="#">Admin Dashboard</a></li>-->
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin'); ?>"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/caller'); ?>" aria-expanded="false"><i class="ti-headphone-alt"></i> <span class="hide-menu">Telecallers</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/user'); ?>" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Clients</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/leads'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Leads</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('admin/filter_leads'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Filter Leads</span></a></li>
                    <?php } ?>

                    <?php if ($this->router->fetch_class() == 'user') { ?>
                        <!--<li class="nav-small-cap">User Dashboard</li>-->
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('user'); ?>"><span class="hide-menu">Dashboard</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('user'); ?>" aria-expanded="false"><i class="fas fa-credit-card"></i><span class="hide-menu">My Balance</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('user/myleads'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">My Leads</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('user/rejectstatus'); ?>" aria-expanded="false"><i class="fas fa-pencil-alt"></i><span class="hide-menu">Rejects Status</span></a></li>
                        <li><a class="has-arrow waves-effect waves-dark" href="<?php echo base_url('user/todayleads'); ?>" aria-expanded="false"><i class="fas fa-info-circle"></i><span class="hide-menu">Today Leads</span></a></li>
                        
                    <?php } ?>

                </ul>
            </nav>
            <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    <!-- Bottom points-->

    <!-- End Bottom points-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">