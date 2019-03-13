                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
		
                <?php  $userlist = $this->db->query('select users.* from users 
                       left join user_roles on users.id=user_roles.user_id 
                       where user_roles.role_id=2')->result_array(); ?>
                
                <!-- Row -->
                <div class="card">
                    <div class="card-body">
                        <div class="row body-lead">
                           
                            <div class="col-md-4"> 
                                <h5 class="m-t-30">Telecaller List</h5>
                                <select class="select2" style="width: 100%" "height=100%">
                                    <option>Select</option>
                                   <?php foreach ($userlist as $val){ ?>
                                        <option value="AK"><?php echo $val['username']; ?></option>
                                   <?php } ?>
                             
                                </select>
                            </div>
                            
                             <div class="col-md-4"> 
                                <h5 class="m-t-30">From Lead</h5>
                                <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Lead">
                            </div>
                            
                             <div class="col-md-4"> 
                                <h5 class="m-t-30">To Lead</h5>
                                <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="To Lead">
                            </div>
                           
                            
                        </div><br />
                        <div class="row">
                            
                            <div class="col-md-2"> <button type="button" id="add_body_lead" class="btn btn-rounded btn-block btn-info">Add Telecaller</button> </div>
                            <div class="col-md-2"> <button type="button"  id="remove_body_lead" class="btn btn-rounded btn-block btn-danger">Remove Telecaller</button></div>
                            <div class="col-md-2"><button type="button" id="send_lead" class="btn btn-rounded btn-block btn-success">Send Lead</button></div>
                            
                            <label class="btn btn-rounded btn btn-info btn-sm pull-right collapsed" style="width: 15%; background: #ffb22b; border: 1px solid #ffb22b;">
                                 <img src="<?php echo base_url(); ?>assets/images/excel.png" style="width: 25px;" >
                                 <input type="file" name="leads" id="uploadLeads" style="opacity:0.0;width: 5%;"> <i class="fas fa-upload"></i> Upload Excel
                            </label>
                           
                        </div>
                    </div>
                    
                   
                </div>
                <!-- ./Row -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>   
        var maxField = 10;
        var x = 1;
        $("#add_body_lead").click(function(){ 

            var newElement = '<div class="col-md-4"><h5 class="m-t-30">Telecaller List</h5><select class="select2" style="width: 100%"><option>Select</option><?php foreach ($userlist as $val){ ?><option value="<?php echo $val['username']; ?>"><?php echo $val['username']; ?></option><?php } ?></select></div><div class="col-md-4"><h5 class="m-t-30">From Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads"></div><div class="col-md-4"><h5 class="m-t-30">To Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="To Leads">';
            if(x < maxField){
                x++;
            $(".body-lead").append($(newElement));
            }
            });
        </script>  

        <script>  
            
        $("#remove_body_lead").click(function(){ 

            var newElement = '<div class="col-md-4"><h5 class="m-t-30">Telecaller List</h5><select class="select2" style="width: 100%"><option>Select</option><?php foreach ($userlist as $val){ ?><option value="<?php echo $val['username']; ?>"><?php echo $val['username']; ?></option><?php } ?></select></div><div class="col-md-4"><h5 class="m-t-30">To Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads"></div><div class="col-md-4"><h5 class="m-t-30">From Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="To Leads">';
            //$(".body-lead").remove($(newElement));
            $(".col-md-4").remove();

            });
        </script>

</body>
            
          