
    <!--<div class="container-fluid">-->
        
        <!-- Bread crumb and right sidebar toggle -->
                    <!-- ============================================================== -->
                    <div class="row page-titles">
                        <div class="col-md-5 col-8 align-self-center">
                            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Add Clients</a></li>
                                <!--<li class="breadcrumb-item active">Form</li>-->
                            </ol>
                        </div>

                    </div>    
        
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Add Clients </h4>
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

                    <form method="post" action="<?php echo base_url('admin/insert_user'); ?>" class="form-horizontal form-bordered">

                        <?php if (isset($message)) { ?>
                            <CENTER><h3 style="color:green;">Caller added successfully</h3></CENTER><br>
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">User Name</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span> 
                                </div>
                            </div>
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Email</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Mobile</label>-->
                                <div class="col-md-12">
                                    <input type="number" name="mobile" value="<?php echo set_value('mobile'); ?>" placeholder="Mobile" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Password</label>-->
                                <div class="col-md-12">
                                    <input type="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Password" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('password'); ?></span>  
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-info" name="submit" type="submit">Submit</button>
                                    <?php echo $this->session->flashdata("error"); ?>
                                    <a href="<?php echo base_url('admin/user'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                            </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->    
