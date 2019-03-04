
<!--<div class="container-fluid">-->
    
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Create Package</a>
                </li>
                <!--<li class="breadcrumb-item active">Form</li>-->
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    
    <!-- Row -->
    <div class="row" style="margin-top: -70px !important;">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Create Package </h4>
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

                    <form method="post" action="<?php echo base_url() ?>admin/insert_package" class="form-horizontal form-bordered">

                        <?php if (isset($success)) { ?>
                            <CENTER><h3 style="color:green;">Package created successfully</h3></CENTER><br>
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Buyer Name</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="package_id" value="" placeholder="Package ID" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('package_id'); ?></span> 
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Email</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="package_name" value="" placeholder="Package Name" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('package_name'); ?></span>  
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Lead Source</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="total_leads" value="" placeholder="Total Leads" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('total_leads'); ?></span> 
                                </div>
                            </div>
                            
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Buyer Budget</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="package_price" value=""  placeholder="Package Price" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('package_price'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-info" name="submit" type="submit">Submit</button>
                                    <?php echo $this->session->flashdata("error"); ?>
                                    <a href="<?php echo base_url('admin/credits'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                            </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
    
<!--</div>-->  
