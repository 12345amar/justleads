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
                    

                   <form method="post" class="form-horizontal form-material" id="loginform" action="<?php echo base_url('login/index'); ?>">
                    
                        <h3 class="box-title m-b-20">Sign In</h3>

                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input type="text" name="username" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Enter Email or Mobile"> 
                                <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input type="password" name="password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="Enter Password"> 
                                <span class="text-danger" style="color:red;"><?php echo form_error('password'); ?></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="d-flex no-block align-items-center">
                                <!--<div class="checkbox checkbox-primary p-t-0">
                                    <input id="checkbox-signup" name="checkme" <?php //if(get_cookie('userId')){echo 'checked';};  ?> type="checkbox" value='1'>
                                    <label for="checkbox-signup"> Remember me </label>
                                </div>--> 
                                <div class="ml-auto">
                                    <a href="<?php echo base_url('forgot'); ?>" id="to-recover" class="text-muted"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> 
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">Log In</button>
                                
                            </div>
                        </div>
                        <!--<div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <button class="btn btn-facebook" data-toggle="tooltip" title="Login with Facebook"> <i aria-hidden="true" class="fab fa-facebook-f"></i> </button>
                                    <button class="btn btn-googleplus" data-toggle="tooltip" title="Login with Google"> <i aria-hidden="true" class="fab fa-google-plus-g"></i> </button>
                                </div>
                            </div>
                        </div>-->
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Don't have an account? <a href="<?php echo base_url('registration'); ?>" class="text-info m-l-5"><b>Sign Up</b></a>
                            </div>
                        </div>
                    </form>
                    <!-- Close first form -->

                    <form class="form-horizontal" id="recoverform" action="<?php echo base_url('forgot'); ?>" method="post">
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