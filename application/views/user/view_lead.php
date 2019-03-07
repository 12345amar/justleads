
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead class="thead-res">
                                <tr>
                                    <th></th>
                                    <th>Created Date</th>
                                    <th>Client Id</th>
                                    <th>Lead Id</th>
                                    <th>Comment</th>
                                    <th>Order</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;
                                foreach ($record as $row) { ?>
                                    <tr>
                                    <td><?=$i?></td>
                                    <td><?=$row['created_date']?></td>
                                    <td><?=$row['client_id']?></td>
                                    <td><?=$row['lead_id']?></td>
                                    <td><?=$row['comment']?></td>
                                    <td><?=$row['order']?></td>
                                    <td><?=$row['status']?></td>
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
    
    <!-- ============================================================== -->
<!--</div>-->
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->

