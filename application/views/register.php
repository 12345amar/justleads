   
    <?php include('include/header.php'); ?>
<center>
    
      <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
   
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(<?php echo base_url();?>assets/images/background/login-register.jpg);">        
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
                
                <?php echo form_open_multipart('registration/index', ['id' => 'registration_form', 'method' => 'post', 'class' => "form-horizontal form-material"]); ?>
                    <h3 class="box-title m-b-20">Sign Up</h3>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="username"  placeholder="Username" value="<?php echo set_value('username'); ?>">
                             <span class="help-block" style="color:red;" <?php echo form_error('username'); ?></span>
                        </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="text" name="email"  placeholder="Email" value="<?php echo set_value('email'); ?>">
                             <span class="help-block" style="color:red;" <?php echo form_error('email'); ?></span>
                        </div>
                    </div>
                     <div class="form-group ">
                        <div class="col-xs-12">
                            <input class="form-control" type="number" name="mobile"  placeholder="Mobile" value="<?php echo set_value('mobile'); ?>">
                             <span class="help-block" style="color:red;" <?php echo form_error('mobile'); ?></span>
                        </div>
                    </div>
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
                    <!--<div class="form-group">
                        <div class="">
                            <div class="checkbox checkbox-success p-t-0">
                                <input id="checkbox-signup" type="checkbox">
                                <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                            </div>
                        </div>
                    </div>-->
                    <div class="form-group text-center m-t-20">
                        <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                        </div>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="col-sm-12 text-center">
                            Already have an account? <a href="<?php echo base_url('login'); ?>" class="text-info m-l-5"><b>Sign In</b></a>
                        </div>
                    </div>
                </form>
                
            </div>
          </div>
        </div>
        
    </section>
    
</center>
    <?php include('include/footer.php'); ?>