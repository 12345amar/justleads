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
                <li class="breadcrumb-item"><a href="javascript:void(0)">Request For Leads</a></li>
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
    <!-- Row -->
    <div class="row">
        <!-- Column -->
       <!-- Column -->
        <!-- Column -->
        <div class="col-lg-12 col-xlg-12 col-md-12">
            <div class="card">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs profile-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Request For Lead</a> </li>
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
                                    
                                    <form  action="<?php echo base_url(); ?>user/request_to_leads" method="post" class="form-horizontal form-material">

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="number" name="number_of_leads" placeholder="Number Of Leads" required class="form-control form-control-line">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <!--<input type="textarea" name="lead_query" placeholder="Query" class="form-control form-control-line">-->
                                                <textarea class="form-control" name="lead_query" id="lead_query"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-12">
                                                <button name="submit" type="submit" class="btn btn-success btn-info">Query Submit</button>
                                                <a href="<?php echo base_url('user/index'); ?>"><button type="button" class="btn btn-danger">Cancel</button></a>
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
    <!-- ============================================================== -->
</div>
</body>
