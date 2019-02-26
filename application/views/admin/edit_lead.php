
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Leads</a></li>
                <li class="breadcrumb-item active">Edit Lead</li>
            </ol>
        </div>
    </div>

    <!-- Row -->
    <div class="row" style="margin-top:-70px;">
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

                    <form method="post" action="<?php echo base_url() ?>admin/update_lead" class="form-horizontal form-bordered">

                        <?php if (isset($message)) { ?>
                            <CENTER><h3 style="color:green;">Lead inserted successfully</h3></CENTER><br>
                        <?php } ?>
                        <?php echo form_hidden('id', $record[0]['id']); ?>
                        <div class="form-body">
                            
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Date</label>
                                <div class="col-md-9">
                                    <input type="date" value="<?php echo $record[0]['created']; ?>" placeholder="Date" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('created'); ?></span> 
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Buyer Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="buyer_name" value="<?php echo $record[0]['buyer_name']; ?>" placeholder="Buyer Name" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('buyer_name'); ?></span> 
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Email</label>
                                <div class="col-md-9">
                                    <input type="email" name="email" value="<?php echo $record[0]['email']; ?>" placeholder="Email Id" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span>  
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Lead Source</label>
                                <div class="col-md-9">
                                    <input type="text" name="lead_source" value="<?php echo $record[0]['lead_source']; ?>" placeholder="Lead Source" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('lead_source'); ?></span> 
                                </div>
                            </div>
                            
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Buyer Budget</label>
                                <div class="col-md-9">
                                    <input type="text" name="buyer_budget" value="<?php echo $record[0]['buyer_budget']; ?>" placeholder="Buyer Budget" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('buyer_budget'); ?></span> 
                                </div>
                            </div>
                            
                            
                             <div class="form-group row">
                                <label class="control-label text-right col-md-3">Location</label>
                                <div class="col-md-9">
                                    <input type="text" name="location" value="<?php echo $record[0]['location']; ?>" placeholder="Location" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('location'); ?></span> 
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Project</label>
                                <div class="col-md-9">
                                    <input type="text" name="project" value="<?php echo $record[0]['project']; ?>" placeholder="Project" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('project'); ?></span> 
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Contact Number</label>
                                <div class="col-md-9">
                                    <input type="number" name="mobile" value="<?php echo $record[0]['mobile']; ?>" placeholder="Contact Number" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span> 
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Lead Status</label>
                                <div class="col-md-9">
                                    <input type="text" name="lead_status" value="<?php echo $record[0]['lead_status']; ?>" placeholder="Lead Status" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('lead_status'); ?></span> 
                                </div>
                            </div>
                            
                              <div class="form-group row">
                                <label class="control-label text-right col-md-3">Size</label>
                                <div class="col-md-9">
                                    <input type="text" name="size" value="<?php echo $record[0]['size']; ?>" placeholder="Size" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('size'); ?></span> 
                                </div>
                            </div>
                            
                            
                            <div class="form-group row">
                                <label class="control-label text-right col-md-3">Priority</label>
                                <div class="col-md-9">
                                    <input type="text" name="priority" value="<?php echo $record[0]['priority']; ?>" placeholder="Priority" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('priority'); ?></span> 
                                </div>
                            </div>
                            
                             <div class="form-group row">
                                <label class="control-label text-right col-md-3">Message</label>
                                <div class="col-md-9">
                                    <input type="text" name="message" value="<?php echo $record[0]['message']; ?>" placeholder="Message" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('message'); ?></span> 
                                </div>
                            </div>
                            
                               <div class="form-group row">
                                <label class="control-label text-right col-md-3">Updated</label>
                                <div class="col-md-9">
                                    <input type="date" name="updated" value="<?php echo $record[0]['updated']; ?>" placeholder="Updated" class="form-control">
                                    <span class="text-danger" style="color:red;"><?php echo form_error('updated'); ?></span> 
                                </div>
                            </div>


                            <!--</div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="offset-sm-3 col-md-9">
                                                <button type="submit" class="btn btn-success" name="submit"> <i class="fa fa-check"></i> Submit</button>
                            <!--<button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" name="submit" type="submit">Submit</button>-->
                            <!--<button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->


                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-info" name="update" type="submit">Update</button>
                                    <?php echo $this->session->flashdata("error"); ?>
									<a href="<?php echo base_url('admin/leads'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                </div>
                            </div>


                    </form>


                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li><b>With Light sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                    <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                    <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                    <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                    <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                    <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                    <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                    <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                    <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                    <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li><b>Chat option</b></li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                    </li>
                    <li>
                        <a href="javascript:void(0)"><img src="<?php echo base_url(); ?>assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
