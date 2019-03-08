
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<!--<div class="container-fluid">-->
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Admin</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Client Request</a>
                </li>
                <!--<li class="breadcrumb-item active">Form</li>-->
            </ol>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Data Export</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <div class="d-flex no-block align-self-center">
                        <div class="ml-auto">
                            <!--<button class="btn btn-success btn-sm pull-right collapsed" type="button" ><a href="<?php echo base_url('admin/add_lead'); ?>"> Add Lead</a> </button>-->
                        </div> 
                    </div>

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="thead-res">
                                <tr>
                                    <th></th>
                                    <th>Date</th>
                                    <th>Client ID</th>
                                    <th>Numbers Of Leads</th>
                                    <th>Query</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;
                                foreach ($record as $row) { ?>
                                    <tr>
                                    <td><?=$i?></td>
                                    <td><?=$row['created_date']?></td>
                                    <td><?=$row['client_id']?></td>
                                    <td><?=$row['number_of_leads']?></td>
                                    <td><?=$row['query']?></td>
                                    <td><?=$row['status']?></td>
                                    <!--<img src="<?php echo base_url(); ?>assets/images/alert/model.png" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" />-->
                                    <!--<td id="<?php //echo $row['id']; ?>" class="manage_leads"><a href="#"><center><i class="fa fa-user" aria-hidden="true"></i></center></a></td>-->
                                   <td>
                                       <a href='<?php echo base_url()."admin/edit_lead/".$row['id'] ?>'><i class='far fa-edit' aria-hidden='true'></i></a>&nbsp;&nbsp;
                                       <a href='<?php echo base_url()."admin/delete_lead/".$row['id'] ?>' onclick='return confirm("Are you sure to delete this item?")'><i class='fas fa-trash-alt' aria-hidden='true'></i></a>&nbsp;&nbsp;
                                       <a href='<?php echo base_url()."admin/view_lead/".$row['id'] ?>'><i class='fas fa-eye' aria-hidden='true'></i></a>
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

    
    
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
<!--</div>-->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

