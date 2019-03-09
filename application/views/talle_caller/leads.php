
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<!--<div class="container-fluid">-->
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Telecaller</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Leads</a>
                </li>
                <!--<li class="breadcrumb-item active">Form</li>-->
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    
                               <!-- sample modal content -->
                                <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="modal-title">Follow Up Of Leads</h4>
                                            </div>
                                              <form method="post" action="<?php echo base_url() ?>telecaller/insert_model">
                                            <div class="modal-body">
                                              
                                                    <input type="hidden" name="lead_id" id="lead_id">
                                                    <div class="form-group">
                                                    <label for="message-text" class="control-label">Type</label>
                                                    <select class="form-control" name="status">
                                                        <option selected="" disabled="" value="">Select Lead Status..</option>
                                                        <option value="0">Pending</option>
                                                        <option value="1">Processing</option>
                                                        <option value="3">Accept</option>
                                                        <option value="4">Decline</option>
                                                    </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="message-text" class="control-label">Lead Query:</label>
                                                        <textarea class="form-control" name="lead_query" id="lead_query"></textarea>
                                                    </div>                                                   
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                <button type="submit" name="submit" id="btnSave" onclick="" class="btn btn-danger waves-effect waves-light submit_query">Submit</button>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                             <!-- /.modal -->
    
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            

            <div class="card">
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
                    
                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <div class="d-flex no-block align-self-center">
                        <div class="ml-auto">
                            
                                    <form method="post" action="<?php echo base_url()?>admin/importLeadsByExcel" enctype="multipart/form-data" id="uploadLeadsForm">
                                        <label class="btn btn-info btn-sm pull-right collapsed" style="width: 25%;">
                                               <input type="file" name="leads" id="uploadLeads" style="opacity:0.0;width: 5%;"> <i class="fas fa-upload"></i> Upload Excel
                                        </label>
                                            
                                        <label class="btn btn-danger btn-sm pull-right collapsed" style="width: 25%;">
                                            <input type="" name="addlead" class="addlead" style="opacity:0.0;width: 0%;"> <i class="fas fa-plus"></i> <a href="<?php echo base_url('admin/add_lead'); ?>"><span class="addlead"> Add Leads</span></a>
                                               <!--<button type="button" ><a href="<?php //echo base_url('telecaller/addlead'); ?>"> Add Leads</a> </button>-->
                                        </label>
                                     </form>
                            <!--<button class="btn btn-success btn-sm pull-right collapsed" type="button" ><a href="<?php echo base_url('admin/add_lead'); ?>"> Add Lead</a> </button>-->
                        </div> 
                    </div>
                    
                        <label class="btn btn-block btn-success btn-sm pull-left collapsed" style="width: 15%;">
                            <!--<input type="" name="addlead" class="select-checkbox" style="opacity:0.0;width: 0%;"> <a href="<?php //echo base_url('telecaller/leads'); ?>"><span class="addlead" style="color:#fff;"> Transfer To Admin</span></a>-->
                            <button type="button" id="tta" name="tta" class="btn btn-success btn-sm pull-right collapsed select-checkbox"> <span class="addlead" style="color:#fff;">Transfer To Admin</span></button>
                        </label>

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="thead-res">
                                <tr>
                                    <th><input type="checkbox" name="select-all" calss="select-checkbox" id="minimal-checkbox-1"></th>
                                    <th>Sr.No</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Lead Source</th>
                                    <th>Budget</th>
                                    <th>Location</th>
                                    <th>Mobile</th>
                                    <th>Project</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;
                                foreach ($record as $row) { ?>
                                    <tr>
                                   <td><input type="checkbox" name="check[]" calss="select-checkbox" id="minimal-checkbox-1" value="<?=$row['id']?>"></td>
                                    <td><?=$i?></td>
                                    <td><?=$row['created']?></td>
                                    <td><?=$row['buyer_name']?></td>
                                    <td><?=$row['email']?></td>
                                    <td><?=$row['lead_source']?></td>
                                    <td><?=$row['buyer_budget']?></td>
                                    <td><?=$row['location']?></td>
                                    <td><?=$row['mobile']?></td>
                                    <td><?=$row['mobile']?></td>
                                   <td>
                                       <a href='<?php echo base_url()."telecaller/edit_lead/".$row['id'] ?>'><i class='far fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp;
                                       <a href='<?php echo base_url()."telecaller/delete_lead/".$row['id'] ?>' onclick='return confirm("Are you sure to delete this item?")'><i class='fas fa-trash-alt' aria-hidden='true'></i></a>&nbsp;&nbsp;
                                       <a href='<?php echo base_url()."telecaller/view_lead/".$row['id'] ?>'><i class='fas fa-eye' aria-hidden='true'></i></a>
                                   </td>
                                   
                                    </tr>
                                <?php $i++; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <div class="right-sidebar">
        <div class="slimscrollright">
            <div class="rpanel-title"> Service Panel
                <span>
                    <i class="ti-close right-side-toggle"></i>
                </span>
            </div>
            <div class="r-panel-body">
                <ul id="themecolors" class="m-t-20">
                    <li>
                        <b>With Light sidebar</b>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="default" class="default-theme">1</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="green" class="green-theme">2</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="red" class="red-theme">3</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="blue" class="blue-theme working">4</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a>
                    </li>
                    <li class="d-block m-t-30">
                        <b>With Dark sidebar</b>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a>
                    </li>
                    <li>
                        <a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a>
                    </li>
                </ul>
                <ul class="m-t-20 chatonline">
                    <li>
                        <b>Chat option</b>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/1.jpg" alt="user-img" class="img-circle">
                            <span>Varun Dhavan
                                <small class="text-success">online</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user-img" class="img-circle">
                            <span>Genelia Deshmukh
                                <small class="text-warning">Away</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/3.jpg" alt="user-img" class="img-circle">
                            <span>Ritesh Deshmukh
                                <small class="text-danger">Busy</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/4.jpg" alt="user-img" class="img-circle">
                            <span>Arijit Sinh
                                <small class="text-muted">Offline</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/5.jpg" alt="user-img" class="img-circle">
                            <span>Govinda Star
                                <small class="text-success">online</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/6.jpg" alt="user-img" class="img-circle">
                            <span>John Abraham
                                <small class="text-success">online</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/7.jpg" alt="user-img" class="img-circle">
                            <span>Hritik Roshan
                                <small class="text-success">online</small>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <img src="<?php echo base_url(); ?>assets/images/users/8.jpg" alt="user-img" class="img-circle">
                            <span>Pwandeep rajan
                                <small class="text-success">online</small>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
<!--</div>-->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

