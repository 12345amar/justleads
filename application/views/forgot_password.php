<?php include('include/header.php'); ?>
<body>
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
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url(); ?>assets/images/background/login-register.jpg);">
            <div class="login-box card">                 
               
                
                <div class="card-body">
                    
                <?php if ($this->session->flashdata('error')) {  ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Warning!</strong> <?= $this->session->flashdata("error") ?>
                </div>
                <?php } ?>
                
                <?php if ($this->session->flashdata('success')) {  ?>
                <div class="alert alert-success alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong></strong> <?= $this->session->flashdata("success") ?>
                </div>
                <?php } ?>
                    
                   <form method="post" class="form-horizontal form-material" id="loginform" action="<?php echo base_url('forgot/index'); ?>">
                    
                        <h3 class="box-title m-b-20">Enter Your Email</h3>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="text" name="username" class="form-control" placeholder="Enter Email or Mobile"> 
                                <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>
                        
                        

                      
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">Send</button>
                                
                            </div>
                        </div>
                       
                       
                    </form>
                    <!-- Close first form -->
                  <form class="form-horizontal" id="recoverform" action="<?php echo base_url(''); ?>" method="post">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h2>Forgot Password</h2>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="text" name="username" class="form-control" placeholder="Email"> 
                                <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Submit</button>
                            </div>
                        </div>
                    </form>
                  
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php'); ?>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    