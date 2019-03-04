<!--<div class="container-fluid">-->
    
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Add Leads</a>
                </li>
               
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    
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

                    <form method="post" action="<?php echo base_url() ?>admin/insert_lead" class="form-horizontal form-bordered">

                        <?php if (isset($message)) { ?>
                            <CENTER><h3 style="color:green;">Lead inserted successfully</h3></CENTER><br>
                        <?php } ?>
                        <div class="form-body">
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Buyer Name</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="buyer_name" value="<?php echo set_value('buyer_name'); ?>" placeholder="Buyer Name" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('buyer_name'); ?></span> 
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Email</label>-->
                                <div class="col-md-12">
                                    <input type="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email Id" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span>  
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Lead Source</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="lead_source" value="<?php echo set_value('lead_source'); ?>" placeholder="Lead Source" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('lead_source'); ?></span> 
                                </div>
                            </div>
                            
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Buyer Budget</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="buyer_budget" value="<?php echo set_value('buyer_budget'); ?>"  placeholder="Buyer Budget" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('buyer_budget'); ?></span> 
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Location</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="location" value="<?php echo set_value('location'); ?>" placeholder="Location" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('location'); ?></span> 
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Project</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="project" value="<?php echo set_value('project'); ?>" placeholder="Project" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('project'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Contact Number</label>-->
                                <div class="col-md-12">
                                    <input type="number" name="mobile" value="<?php echo set_value('mobile'); ?>" placeholder="Contact Number" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span> 
                                </div>
                            </div>
                            
                            
                              <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Lead Status</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="lead_status" value="<?php echo set_value('lead_status'); ?>" placeholder="Lead Status" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('lead_status'); ?></span> 
                                </div>
                            </div>
                            
                              <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Size</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="size" value="<?php echo set_value('size'); ?>" placeholder="Size" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('size'); ?></span> 
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Priority</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="priority" value="<?php echo set_value('priority'); ?>" placeholder="Priority" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('priority'); ?></span> 
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <!--<label class="control-label text-right col-md-3">Message</label>-->
                                <div class="col-md-12">
                                    <input type="text" name="message" value="<?php echo set_value('message'); ?>" placeholder="Message" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('message'); ?></span> 
                                </div>
                            </div>



                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-info" name="submit" type="submit">Submit</button>
                                    <?php echo $this->session->flashdata("error"); ?>
                                    <a href="<?php echo base_url('admin/leads'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                            </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
</div>