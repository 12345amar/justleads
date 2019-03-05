    <body class="fix-header fix-sidebar card-no-border">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
        </div> 
 
<!-- Container fluid  -->
<!-- ============================================================== -->
    <div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">User</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Profile</a></li>
                <!--<li class="breadcrumb-item active">Form</li>-->
            </ol>
        </div>
        
    </div>
    <!-- Row -->
    <div class="row">
        <!-- Column -->
       <!-- Column -->
        <!-- Column -->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Profile</a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel">
                        <div class="card-body">
                            <div class="tab-pane" id="settings" role="tabpanel">
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
                                            <strong>Success!</strong> <?= $this->session->flashdata("success") ?>
                                        </div>
                                    <?php } ?>
                                    
                                    <form  action="<?php echo base_url('telecaller/update_profile'); ?>" method="post" class="form-horizontal form-material">
                                    <?php //echo form_hidden('id', $record[0]['id']); ?>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="text" name="username" placeholder="username" value="<?php echo $this->session->userdata('username'); ?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="email" name="email" placeholder="Email" value="<?php echo $this->session->userdata('email'); ?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="number" name="mobile" placeholder="mobile" maxlength="10"  value="<?php echo $this->session->userdata('mobile'); ?>" class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button name="update" type="submit" class="btn btn-success btn-info">Update Profile</button>
                                                <a href="<?php echo base_url('telecaller/index'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--second tab-->

                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
    
</div>

</body>
