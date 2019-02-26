
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
                                <li class="breadcrumb-item"><a href="javascript:void(0)">View Caller</a></li>
                                <!--<li class="breadcrumb-item active">Form</li>-->
                            </ol>
                        </div>

                    </div> 
					
                <!-- Row -->
                <div class="row" style="margin-top: -70px;">
                    <div class="col-lg-12">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">View Callers Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="<?php echo base_url()?>admin/user" class="form-horizontal form-bordered">
                                    
                                    <?php if (isset($message)) { ?>
                                    <CENTER><h3 style="color:green;">Lead inserted successfully</h3></CENTER><br>
                                    <?php } ?>
									<?php echo form_hidden('id',$record[0]['id']); ?>
                                   <div class="form-body">
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">User Name</label>
                                            <div class="col-md-9">
                                                <input type="text" name="username" value="<?php echo $record[0]['username']; ?>"  placeholder="User Name" class="form-control" readonly="">
                                                <span class="text-danger" style="color:red;"><?php echo form_error('username'); ?></span> 
											</div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="control-label text-right col-md-3">Email</label>
                                            <div class="col-md-9">
                                                <input type="text" name="email" value="<?php echo $record[0]['email']; ?>" placeholder="Email" class="form-control" readonly="">
                                                <span class="text-danger" style="color:red;"><?php echo form_error('email'); ?></span> 
											</div>
                                        </div>
										
										<div class="form-group row">
                                            <label class="control-label text-right col-md-3">Mobile</label>
                                            <div class="col-md-9">
                                                <input type="number" name="mobile" value="<?php echo $record[0]['mobile']; ?>" placeholder="Mobile" class="form-control" readonly="">
                                                <span class="text-danger" style="color:red;"><?php echo form_error('mobile'); ?></span> 
											</div>
                                        </div>
										
									  
									
							    <div class="form-group text-center m-t-20">
									<div class="col-xs-12">
										<button class="btn btn-danger" name="view" type="submit">Back</button>
										<?php echo $this->session->flashdata("error"); ?>
									</div>
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
         