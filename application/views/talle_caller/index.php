      <body class="fix-header fix-sidebar card-no-border">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">               
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<!--<div class="container-fluid">-->
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
           <?php 
           $userData  = $this->session->userdata('username');
            //print_r($userData);
               //$query = $this->db->get('users');
               //$userData   = $query->row(); 
               //echo '<pre>';
               //print_r($userData);
             ?>   
            <h6 class="text-themecolor m-b-0 m-t-0">Welcome To <?php echo $this->session->userdata('username') ?> Panel</h6>
            <!--<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Form</li>
            </ol>-->
        </div>
    </div>
    
                         
                            
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <!-- Row -->
    
	                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body box-shadow">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-info"><i class="ti-headphone-alt"></i></div>
                                    
                                    <a href="<?php echo base_url('telecaller/caller'); ?>">
                                    <div class="m-l-10 align-self-center">
                                        <!--<h3 class="m-b-0 font-light">$3249</h3>-->
                                        <h5 class="text-muted m-b-0">Telecaller</h5>
                                    </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body box-shadow">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-warning"><i class="fas fa-users"></i></div>
                                    
                                    <a href="<?php echo base_url('telecaller/user'); ?>">
                                    <div class="m-l-10 align-self-center">
                                        <!--<h3 class="m-b-0 font-lgiht">$2376</h3>-->
                                        <h5 class="text-muted m-b-0">Clients</h5>
                                    </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body box-shadow">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-primary"><i class="fab fa-docker"></i></div>
                                    
                                    <a href="<?php echo base_url('telecaller/credits'); ?>">
                                    <div class="m-l-10 align-self-center">
                                        <!--<h3 class="m-b-0 font-lgiht">$1795</h3>-->
                                        <h5 class="text-muted m-b-0">Credits</h5>
                                    </div>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body box-shadow">
                                <div class="d-flex flex-row">
                                    <div class="round round-lg align-self-center round-danger"><i class="fas fa-info-circle"></i></div>
                                    
                                    <a href="<?php echo base_url('telecaller/leads'); ?>">
                                    <div class="m-l-10 align-self-center">
                                        <!--<h3 class="m-b-0 font-lgiht">$687</h3>-->
                                        <h5 class="text-muted m-b-0">All Leads</h5>
                                    </div>
                                    </a>    
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
	
	
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
   
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
<!--</div>-->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
</div>
</body>

