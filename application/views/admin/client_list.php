                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
		
                <?php
                /*
                  $data['record'] = $this->db->query('select users.* from users 
                  left join user_roles on users.id=user_roles.user_id 
                  where user_roles.role_id=3 order by id desc')->result_array();
                  echo '<pre>';
                  print_r($data);   */
                  
                $client = $this->db->query('select users.* from users 
                left join user_roles on users.id=user_roles.user_id 
                where user_roles.role_id=3')->result_array();
                  //echo '<pre>';
                  //print_r($client);
                  //foreach ($client as $key => $val){
                     // echo '<pre>';
                     // print_r($val);
                     // echo $val->$username;
                 // }
                  
              // $data['page'] = 'user';
               //$this->load->view('layout', $data);
                
                ?>
                
                <!-- Row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title">Select 2</h4>
                                <h6 class="card-subtitle"> Select2 for custom search and select</h6>-->
                                <h5 class="m-t-30">Client List</h5>
                                <select class="select2" style="width: 100%">
                                    <option>Select</option>
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK">Alaska</option>
                                        <option value="HI">Hawaii</option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA">California</option>
                                        <option value="NV">Nevada</option>
                                        <option value="OR">Oregon</option>
                                        <option value="WA">Washington</option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ">Arizona</option>
                                        <option value="CO">Colorado</option>
                                        <option value="ID">Idaho</option>
                                        <option value="MT">Montana</option>
                                        <option value="NE">Nebraska</option>
                                        <option value="NM">New Mexico</option>
                                        <option value="ND">North Dakota</option>
                                        <option value="UT">Utah</option>
                                        <option value="WY">Wyoming</option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL">Alabama</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                        <option value="MN">Minnesota</option>
                                        <option value="MS">Mississippi</option>
                                        <option value="MO">Missouri</option>
                                        <option value="OK">Oklahoma</option>
                                        <option value="SD">South Dakota</option>
                                        <option value="TX">Texas</option>
                                        <option value="TN">Tennessee</option>
                                        <option value="WI">Wisconsin</option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="IN">Indiana</option>
                                        <option value="ME">Maine</option>
                                        <option value="MD">Maryland</option>
                                        <option value="MA">Massachusetts</option>
                                        <option value="MI">Michigan</option>
                                        <option value="NH">New Hampshire</option>
                                        <option value="NJ">New Jersey</option>
                                        <option value="NY">New York</option>
                                        <option value="NC">North Carolina</option>
                                        <option value="OH">Ohio</option>
                                        <option value="PA">Pennsylvania</option>
                                        <option value="RI">Rhode Island</option>
                                        <option value="SC">South Carolina</option>
                                        <option value="VT">Vermont</option>
                                        <option value="VA">Virginia</option>
                                        <option value="WV">West Virginia</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./Row -->
            
            
            
            
                       <!-- Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Leads</h4>
                                <div id="education_fields"></div>
                                <div class="row">
                                    <div class="col-sm-6 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="From Leads">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 nopadding">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="To Leads">
                                        </div>
                                    </div>
                           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Row -->
            
            
            <!-- Row For Buttons -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--<h4 class="card-title">Bootstrap TouchSpin</h4>
                                <h6 class="card-subtitle">Use the <code> data-plugin="touchSpin" </code> to create a Bootstrap style spinner.</h6>-->
                                <div class="row">
                                    
                                    
                                    <div class="col-lg-4">
                                        <form class="p-r-20">
                                            
                                            <div class="form-group">
                                               
                                                 <button type="button" class="btn btn-rounded btn-block btn-info">Add Telecaller</button> 
                                            </div>
                                           
                                        </form>
                                    </div>
                                    
                                      <div class="col-lg-4">
                                        <form class="p-r-20">
                                            
                                            <div class="form-group">
                                                <!--<label class="control-label">Remove Telecaller </label>-->
                                                 <button type="button" class="btn btn-rounded btn-block btn-danger">Remove Telecaller</button>
                                            </div>
                                        </form>
                                      </div>
                                    
                                       <div class="col-lg-4">
                                        <form class="p-r-20">
                                            
                                            <div class="form-group">
                                                <!--<label class="control-label">Remove Telecaller </label>-->
                                                 <button type="button" class="btn btn-rounded btn-block btn-success">Send Lead</button>
                                            </div>
                                        </form>
                                      </div>
									
									
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->