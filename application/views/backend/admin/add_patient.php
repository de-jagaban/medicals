<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-burnt">
            <div class="panel-body">
               <div class="alert alert-info"> <?php echo get_phrase('new_patient');?></div>
                <hr>   
					    
                        <?php echo form_open(base_url() . 'patient/add_patient/create/' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

	
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('full_name');?>*</span></label>
                                <div class="col-md-12">
                                    <?php 
                                        //This generates a random string for the patients
                                        function generateRandomString($length = 10) {
                                            $characters = 'ABCDEFGHIJKLMNO0123456789PQRSTUVWXYZ0123456789ABCDEFGHIJ0123456789KLMNOPQRSTUVWXYZ';
                                            $charactersLength = strlen($characters);
                                            $randomString = '';
                                            for ($i = 0; $i <  $length; $i++) {
                                                $randomString .= $characters[rand(0, $charactersLength - 1)];
                                            }
                                            return $randomString;
                                        }                                                       
                                    ?>
                                    <input type="text" id="example-text" name="pid" class="form-control m-r-10" value="<?php echo generateRandomString(); ?>" readonly= "true">
                                    <input type="text" id="example-text" name="name" class="form-control m-r-10" placeholder="enter patient name" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('gender');?>*</label>
                                    <div class="col-sm-12">
                                        <select class=" form-control" name="sex" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_gender');?></option>
                                            <option data-tokens="Male"><?php echo get_phrase('male');?></option>
                                            <option data-tokens="Female"><?php echo get_phrase('female');?></option>
                                            <option data-tokens="Others"><?php echo get_phrase('others');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('date_of_birth');?>*</span></label>
                                <div class="col-md-12">
                                    <input class="form-control m-r-10" name="birth_date" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input" required>
                                    <input type="text" id="example-text" name= "age" class= "form-control m-r-10" placeholder= "enter patient age" required>
                                    <input type="text" id="example-text" name= "place_of_birth" class= "form-control m-r-10" placeholder= "enter patient place of birth" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('id_card');?>*</span></label>
                                <input type="text" id="example-text" name="id_card" id="firstName" class="form-control" placeholder="eg national ID card, International Passport, Voters card " required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('issue_at');?>*</span></label>
                                <input type="text" id="example-text" name="issue_at" id="firstName" class="form-control" placeholder="Place of ID Issuance" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('issue_on');?>*</span></label>
                                <input type="date" id="example-text" name="issue_on" id="example-date-input" value="<?php echo date('Y-m-d');?>" class="form-control" placeholder="Issue Date" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('occupation');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="occupation" class="form-control m-r-10" placeholder="Occupation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('mother_tongue');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="mother_tongue" class="form-control m-r-10" placeholder="enter patient mother tongue" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"><?php echo get_phrase('marital_status');?>*</label>                                    
                                        <select class=" form-control" name="marital_status" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_marital_status');?></option>
                                            <option data-tokens="Married"><?php echo get_phrase('married');?></option>
                                            <option data-tokens="Single"><?php echo get_phrase('single');?></option>
                                            <option data-tokens="Divorced"><?php echo get_phrase('divorced');?></option>
                                            <option data-tokens="Engaged"><?php echo get_phrase('engaged');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"><?php echo get_phrase('religion');?>*</label>  
                                        <select class=" form-control" name="religion" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_religion');?></option>
                                            <option data-tokens="Christianity"><?php echo get_phrase('Christianity');?></option>
                                            <option data-tokens="Islam"><?php echo get_phrase('Islam');?></option>
                                            <option data-tokens="Traditional"><?php echo get_phrase('Traditional');?></option>
                                            <option data-tokens="Others"><?php echo get_phrase('Others');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('address');?>*</label>
                                <div class="col-md-12">
                                    <textarea class="form-control m-r-10" rows="5" name="address" placeholder="Enter Address ..." required></textarea>

                                </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label"> <?php echo get_phrase('city');?></label>
                                        <input type="text" id="example-text" name="city" class="form-control m-r-10" placeholder="enter patient city" required>
                                    </div>
                            </div>

                               
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label"> <?php echo get_phrase('state');?></label>
                                    <input type="text" id="example-text" name="state" class="form-control m-r-10" placeholder="enter patient state" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label"> <?php echo get_phrase('nationality');?></label>
                                    <input type="text" id="example-text" name="nationality" class="form-control m-r-10" placeholder="enter patient nationality" required>
                                </div>
                            </div>


                            <div class="row">
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> <?php echo get_phrase('phone');?></label>
                                        <input type="text" id="example-phone" name="phone" class="form-control" placeholder="enter patient phone" data-mask="(999) 999-9999" required>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> <?php echo get_phrase('mobile_no');?></label>
                                        <input type="text" id="example-phone" name="mobile_no" class="form-control" placeholder="enter patient mobile number" data-mask="(999) 999-9999" required>
                                    </div>
                                </div>
                            </div>


                            <div class="alert alert-info"><?php echo get_phrase('medical_history');?></div>
								<div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('blood_group');?></span></label>
                                    <div class="col-md-12">
                                       <select class="form-control" name="blood_group" required>
                                    	<option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-12" for="example-text"><?php echo get_phrase('date_of_last_admission');?></label>
                                    <div class=col-md-12>
                                        <input class="form-control"  name="date_of_last_admission" type="date" value="<?php echo date('Y-m-d');?>" id="example-date-input">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><?php echo get_phrase('diagnose');?></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control m-r-10" rows="5" name="diagnose" placeholder="Enter diagnose ..."></textarea>
                                    </div>
                                </div>                   

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                <div class="col-sm-12">
                                <select class=" form-control" name="department_id" data-style="btn-primary btn-outline" required>
                                <?php $get_all_department_from_model = $this->department_model->select_all_departments();
                                        foreach ($get_all_department_from_model as $key => $all_selected_department):?>
                                <option value="<?php echo $all_selected_department['department_id'];?>"><?php echo $all_selected_department['name'];?></option>
                                <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-12"><?php echo get_phrase('discharge_condition');?></label>
                                    <div class="col-md-12">
									 <textarea id="mymce" name="discharge_condition"></textarea>
                                </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-sm-12"><?php echo get_phrase('patient document');?></label>        
                                    <div class="col-sm-12">
                                        <input type='file' class="form-control" name="file_name">
                                    </div>
                                </div>	


                                <div class="alert alert-info"><?php echo get_phrase('login_details');?></div>

								
								 <div class="form-group">
                                    <label class="col-md-12" for="example-email"><?php echo get_phrase('email');?></label>
                                    <div class="col-md-12">
                                        <input type="email" id="example-email" name="email" class="form-control m-r-10" placeholder="enter your email" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="pwd"><?php echo get_phrase('password');?></label>
                                    <div class="col-md-12">
                                        <input type="password" id="pwd" name="password" class="form-control" placeholder="enter your password" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-sm-12"><?php echo get_phrase('browse_image');?></label>        
                                    <div class="col-sm-12">
                                        <input type='file' class="form-control" name="userfile" onChange="readURL(this);" /required>
                                        <img id="blah" src="#" alt="" height="200" width="200">
                                    </div>
                                </div>	  

                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                        <?php echo form_close();?>        
									
									
            </div>
        </div>
    </div>
</div>
					
