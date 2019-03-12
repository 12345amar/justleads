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
                                <select class="select2" style="width: 100%">
                                    <option>Select</option>
                                   <?php foreach ($userlist as $val){ ?>
                                        <option value="AK"><?php echo $val['username']; ?></option>
                                   <?php } ?>
                             
                                </select>
                            </div>
                            
                             <div class="col-md-4"> 
                                <h5 class="m-t-30">From Lead</h5>
                                <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads">
                            </div>
                            
                             <div class="col-md-4"> 
                                <h5 class="m-t-30">To Lead</h5>
                                <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads">
                            </div>
                           
                            
                        </div>
                        <div class="row">
                            
                            <div class="col-md-2"> <button type="button" id="add_body_lead" class="btn btn-rounded btn-block btn-info">Add Telecaller</button> </div>
                            <div class="col-md-2"> <button type="button"  id="remove_body_lead" class="btn btn-rounded btn-block btn-danger">Remove Telecaller</button></div>
                            <div class="col-md-2"><button type="button" id="send_lead" class="btn btn-rounded btn-block btn-success">Send Lead</button></div>
                            
                        </div>
                    </div>
                    
                   
                </div>
                <!-- ./Row -->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
       <script>                                                                       
        $("#add_body_lead").click(function(){ 

            var newElement = '<div class="row body-lead"><div class="col-md-4"><h5 class="m-t-30">Telecaller List</h5><select class="select2" style="width: 100%"><option>Select</option><?php foreach ($userlist as $val){ ?><option value="AK"><?php echo $val['username']; ?></option><?php } ?></select></div><div class="col-md-4"><h5 class="m-t-30">To Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads"></div><div class="col-md-4"><h5 class="m-t-30">From Lead</h5><input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="To Leads"></div>\n\'';
            $(".body-lead").append($(newElement));

            });
        </script>  


</body>
            
          