<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 09:05:26 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
        <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url(); ?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
        <!-- You can change the theme colors from here -->
        <link href="<?php echo base_url(); ?>assets/css/colors/blue.css" id="theme" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>

    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Leads </h4>
                </div>
                <div class="card-body">

                    <?php if ($this->session->flashdata('error')) { ?>
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Warning!</strong> <?= $this->session->flashdata("error") ?>
                        </div>
                    <?php } ?>

                    <?php if ($this->session->flashdata('success')) { ?>
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong></strong> <?= $this->session->flashdata("success") ?>
                        </div>
                    <?php } ?>

                    <form method="post" action="<?php echo base_url() ?>admin/insert_caller" class="form-horizontal form-bordered">

                        <?php if (isset($message)) { ?>
                            <CENTER><h3 style="color:green;"> inserted successfully</h3></CENTER><br>
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Username</label>
                                <div class="col-md-9">
                                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span>  
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Mobile</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" value="<?php echo set_value('mobile'); ?>" placeholder="Mobile" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Password</label>
                                <div class="col-md-9">
                                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="password" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('password'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success" name="submit" type="submit">Submit</button>
                                    <?php echo $this->session->flashdata("error"); ?>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    © 2018 Material Pro Admin by wrappixel.com
</footer>

<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?php echo base_url(); ?>assets/plugins/popper/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url(); ?>assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?php echo base_url(); ?>assets/js/sidebarmenu.js"></script>
<!--stickey kit -->
<script src="<?php echo base_url(); ?>assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!--Custom JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- Style switcher -->
<!-- ============================================================== -->
<script src="<?php echo base_url(); ?>assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>



<!-- Mirrored from wrappixel.com/demos/admin-templates/material-pro/material/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Dec 2018 09:05:26 GMT -->
</html>