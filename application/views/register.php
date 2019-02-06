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
                <form action="<?php echo base_url(); ?>users/register" method="post" class="form-horizontal form-material" id="loginform">
                    <h3 class="box-title m-b-20">Sign Up</h3>
					
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username" placeholder="User Name">
							<span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span>
                        </div>
                    </div>
					
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email" placeholder="Email">
							<span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span>
                        </div>
                    </div>
					
					<div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" name="mobile" placeholder="Mobile Number">
							<span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span>
                        </div>
                    </div>
					
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="password" placeholder="Password" value="">
							<span class="text-danger" style="color:red;"><?php echo form_error('password'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password">
							<span class="text-danger" style="color:red;"><?php echo form_error('cpassword'); ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="">
                            <div class="checkbox checkbox-success p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">Sign Up</button>
							<?php //echo $this->session->flashdata("error"); ?>
                        </div>
                    </div>
					
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Already have an account? <a href="<?php echo base_url('admin/login'); ?>" class="text-info m-l-5"><b>Sign In</b></a>
                        </div>
                    </div>
					
                </form>
                
            </div>
          </div>
        </div>
        
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
   <?php include('include/footer.php'); ?>