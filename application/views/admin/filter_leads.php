
      
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
                                <a href="javascript:void(0)">Filter Leads</a>
                            </li>
                            <!--<li class="breadcrumb-item active">Table Data table</li>-->
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
                               
                                
                                    <select name="client">
                                        <?php
                                               $query = $this->db->query('select users.* from users 
                                                  left join user_roles on users.id=user_roles.user_id 
                                                  where user_roles.role_id=3 order by id desc')->result_array();
                                               print_r($query);                                         
                                         for($i=1; $i<=100; $i++) {  ?>
                                        <option value="<?php $i; ?>"><?php echo $i;?>Client Name</option>
                                        <?php } ?>
                                    </select>
				                <div class="d-flex no-block align-self-center">
                                    <div class="ml-auto">
                                        
                                        
                                        <form method="post" action="<?php echo base_url()?>telecaller/importLeadsByExcel" enctype="multipart/form-data" id="uploadLeadsForm">
                                        <!--<label class="btn btn-success btn-sm pull-right collapsed" style="width: 25%;">
                                               <input type="file" name="leads" id="uploadLeads" style="opacity:0.0;width: 5%;"> <i class="far fa-file-excel"></i> Upload Excel
                                        </label>-->
                                            
                                        <!--<label class="btn btn-success btn-sm pull-right collapsed" style="width: 25%;">
                                            
                                               <input type="button" name="addlead" style="opacity:0.0;width: 5%;"> <i class="far fa-file-archive"></i> <a href="<?php //echo base_url('telecaller/addlead'); ?>"> Add Leads</a>
                                               <!--<button type="button" ><a href="<?php //echo base_url('telecaller/addlead'); ?>"> Add Leads</a> </button>-->
                                        <!--</label>-->
                                     </form>
                                          
                                               
                                            
                                        <!--<button class="btn btn-success btn-sm pull-right collapsed" type="button" ><a href="<?php //echo base_url('telecaller/addlead'); ?>"> Add Leads</a> </button>-->
                                    </div> 
                                </div>
								
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
					        foreach($record as $row) { ?>
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
           
           