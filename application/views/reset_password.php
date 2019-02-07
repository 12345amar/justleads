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
                    <strong>Warning!</strong> <?= $this->session->flashdata("success") ?>
                </div>
                <?php } ?>
                    
                   <form method="post" class="form-horizontal form-material" id="loginform" action="<?php echo base_url('forgot/changePassword'); ?>">
                       <input type="hidden" name="token" value="<?php echo $token; ?>">
                        <h2 class="box-title m-b-20">Reset Your Password</h2>

                      <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password"  placeholder="Password" value="<?php echo set_value('password'); ?>">
                            <span class="help-block" style="color:red;" <?php echo form_error('password'); ?></span> 
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="confirm"  placeholder="Confirm Password">
                             <span class="help-block" style="color:red;" <?php echo form_error('confirm'); ?></span>
                        </div>
                    </div>
                        
                        

                      
                        
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">Reset Password</button>
                                
                            </div>
                        </div>
                       
                       
                    </form>
                    <!-- Close first form -->

                  
                </div>
            </div>
        </div>
    </section>
    <?php include('include/footer.php'); ?>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    