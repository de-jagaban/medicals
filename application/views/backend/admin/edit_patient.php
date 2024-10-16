<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-burnt">
            <div class="panel-body">
               <div class="alert alert-info"> <?php echo get_phrase('edit_patient');?></div>
                <hr>   

                        <?php foreach ($select_patient as $key => $patient):?>
					    
                        <?php echo form_open(base_url() . 'patient/update_patient/update/'.$patient['patient_id'] , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>

	
                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('full_name');?>*</span></label>
                                <div class="col-md-12">
                                       <input type="text" id="example-text" name="name" value="<?php echo $patient['name'];?>" class="form-control m-r-10" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('gender');?>*</label>
                                    <div class="col-sm-12">
                                        <select class=" form-control" name="sex" required>
                                            <option data-tokens="Male"<?php if($patient['sex'] == 'Male') echo 'selected="selected"' ;?>><?php echo get_phrase('male');?></option>
                                            <option data-tokens="Female"<?php if($patient['sex'] == 'Female') echo 'selected="selected"' ;?>><?php echo get_phrase('female');?></option>
                                            <option data-tokens="Others"<?php if($patient['sex'] == 'Others') echo 'selected="selected"' ;?>><?php echo get_phrase('others');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('date_of_birth');?>*</span></label>
                                <div class="col-md-12">
                                    <input class="form-control m-r-10" name="birth_date" type="date" value="<?php echo $patient['birth_date'];?>" id="example-date-input" required>
                                    <input type="text" id="example-text" name= "age" class= "form-control" value="<?php echo $patient['age'];?>" required>
                                    <input type="text" id="example-text" name= "place_of_birth" class= "form-control" value="<?php echo $patient['place_of_birth'];?>" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('id_card');?>*</span></label>
                                <input type="text" id="example-text" name="id_card" id="firstName" class="form-control" value="<?php echo $patient['id_card'];?>" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('issue_at');?>*</span></label>
                                <input type="text" id="example-text" name="issue_at" id="firstName" class="form-control" value="<?php echo $patient['issue_at'];?>" required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label" for="example-text"><?php echo get_phrase('issue_on');?>*</span></label>
                                <input type="date" id="example-text" name="issue_on" id="example-date-input" value="<?php echo $patient['issue_on'];?>" class="form-control" placeholder="Issue Date" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('occupation');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="occupation" class="form-control" value="<?php echo $patient['occupation'];?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12" for="example-text"><?php echo get_phrase('mother_tongue');?>*</span></label>
                                <div class="col-md-12">
                                    <input type="text" id="example-text" name="mother_tongue" class="form-control" value="<?php echo $patient['mother_tongue'];?>" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"><?php echo get_phrase('marital_status');?>*</label>                                    
                                        <select class=" form-control" name="marital_status" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_marital_status');?></option>
                                            <option data-tokens="Married"<?php if($patient['marital_status'] == 'Married') echo 'selected="selected"';?>><?php echo get_phrase('married');?></option>
                                            <option data-tokens="Single"<?php if($patient['marital_status'] == 'Single') echo 'selected="selected"';?>><?php echo get_phrase('single');?></option>
                                            <option data-tokens="Divorced"<?php if($patient['marital_status'] == 'Divorced') echo 'selected="selected"';?>><?php echo get_phrase('divorced');?></option>
                                            <option data-tokens="Engaged"<?php if($patient['marital_status'] == 'Engaged') echo 'selected="selected"';?>><?php echo get_phrase('engaged');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label"><?php echo get_phrase('religion');?>*</label>  
                                        <select class=" form-control" name="religion" data-style="btn-primary btn-outline" required>
                                            <option data-tokens=""><?php echo get_phrase('select_religion');?></option>
                                            <option data-tokens="Christianity"<?php if($patient['religion'] == 'Christianity') echo 'selected="selected"';?>><?php echo get_phrase('Christianity');?></option>
                                            <option data-tokens="Islam"<?php if($patient['religion'] == 'Islam') echo 'selected="selected"';?>><?php echo get_phrase('Islam');?></option>
                                            <option data-tokens="Traditional"<?php if($patient['religion'] == 'Traditional') echo 'selected="selected"';?>><?php echo get_phrase('Traditional');?></option>
                                            <option data-tokens="Others"<?php if($patient['religion'] == 'Others') echo 'selected="selected"';?>><?php echo get_phrase('Others');?></option>
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('address');?>*</label>
                                <div class="col-md-12">
                                    <textarea class="form-control m-r-10" rows="5" name="address" required><?php echo $patient['address'];?></textarea>

                                </div>
                            </div>

                            <div class="col-md-4">
                                    <div class="form-group">
                                    <label class="control-label"> <?php echo get_phrase('city');?></label>
                                        <input type="text" id="example-text" name="city" class="form-control" value="<?php echo $patient['city'];?>" required>
                                    </div>
                            </div>

                               
                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label"> <?php echo get_phrase('state');?></label>
                                    <input type="text" id="example-text" name="state" class="form-control" value="<?php echo $patient['state'];?>"  required>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                <label class="control-label"> <?php echo get_phrase('nationality');?></label>
                                    <input type="text" id="example-text" name="nationality" class="form-control" value="<?php echo $patient['city'];?>"  required>
                                </div>
                            </div>


                            <div class="row">
								 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> <?php echo get_phrase('phone');?></label>
                                        <input type="text" id="example-phone" name="phone" class="form-control" value="<?php echo $patient['phone'];?>"  data-mask="(999) 999-9999" required>
                                    </div>
                                </div>
								
								<div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> <?php echo get_phrase('mobile_no');?></label>
                                        <input type="text" id="example-phone" name="mobile_no" class="form-control" value="<?php echo $patient['mobile_no'];?>" data-mask="(999) 999-9999" required>
                                    </div>
                                </div>
                            </div>


                            <div class="alert alert-info"><?php echo get_phrase('medical_history');?></div>
								<div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('blood_group');?></span></label>
                                    <div class="col-md-12">
                                       <select class="form-control" name="blood_group" required>
                                    	<option value="A+"<?php if($patient['blood_group'] == 'A+') echo 'selected="selected"';?>>A+</option>
                                        <option value="A-"<?php if($patient['blood_group'] == 'A-') echo 'selected="selected"';?>>A-</option>
                                        <option value="B+"<?php if($patient['blood_group'] == 'B+') echo 'selected="selected"';?>>B+</option>
                                        <option value="B-"<?php if($patient['blood_group'] == 'B-') echo 'selected="selected"';?>>B-</option>
                                        <option value="AB+"<?php if($patient['blood_group'] == 'AB+') echo 'selected="selected"';?>>AB+</option>
                                        <option value="AB-"<?php if($patient['blood_group'] == 'AB-') echo 'selected="selected"';?>>AB-</option>
                                        <option value="O+"<?php if($patient['blood_group'] == 'O+') echo 'selected="selected"';?>>O+</option>
                                        <option value="O-"<?php if($patient['blood_group'] == 'O-') echo 'selected="selected"';?>>O-</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-12" for="example-text"><?php echo get_phrase('date_of_last_admission');?></label>
                                    <div class=col-md-12>
                                        <input class="form-control"  name="date_of_last_admission" type="date" value="<?php echo $patient['date_of_last_admission'];?>" id="example-date-input">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12"><?php echo get_phrase('diagnose');?></label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="diagnose"><?php echo $patient['diagnose'];?></textarea>
                                    </div>
                                </div>                   

                            <div class="form-group">
                                <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                <div class="col-sm-12">
                                <select class=" form-control" name="department_id" data-style="btn-primary btn-outline" required>
                                <?php $get_all_department_from_model = $this->department_model->select_all_departments();
                                        foreach ($get_all_department_from_model as $key => $all_selected_department):?>
                                <option value="<?php echo $all_selected_department['department_id'];?>"
                                <?php if($patient['department_id'] == $all_selected_department['patient_id']) echo 'selected="selected"';?>><?php echo $all_selected_department['name'];?></option>
                                <?php endforeach;?>
                                </select>
                                </div>
                            </div>

                            <div class="form-group">
                                    <label class="col-md-12"><?php echo get_phrase('discharge_condition');?></label>
                                    <div class="col-md-12">
									 <textarea id="mymce" name="discharge_condition"><?php echo $patient['discharge_condition'];?></textarea>
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
                                        <input type="email" id="example-email" name="email" class="form-control" value="<?php echo $patient['email'];?>" required>
                                    </div>
                                </div>

                        
                                <div class="form-group">
                                        <label class="col-sm-12"><?php echo get_phrase('browse_image');?></label>        
                                    <div class="col-sm-12">
                                        <input type='file' class="form-control" name="userfile" onChange="readURL(this);">
                                        <img id="blah" src="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>" alt="" height="200" width="200">
                                    </div>
                                </div>	  

                        <button type="submit" class="btn btn-success btn-rounded btn-sm btn-block waves-effect waves-light m-r-10"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('update');?></button>
                        <?php echo form_close();?>
                        <?php endforeach;?>        
									
									
            </div>
        </div>
    </div>
</div>
					
