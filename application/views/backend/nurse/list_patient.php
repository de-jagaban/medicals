 <!-- .row -->
 <div class="row el-element-overlay">
                    <!-- .usercard -->
                    <!-- This selects the patients from the database through the select_patient function in the patient_model
                    using the $patient variable pointing to the patient_id -->
                    <?php $get_patients = $this->patient_model->select_patient();
                            foreach($get_patients as $key => $patient):?>
					                   
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
							
                            <div class="el-card-item">
                                <!--This echoes out the patient Image using the parameters declared in the crud model function, 
                                same code is used to link the image pop-up button to display the image as a pop-up-->
                                <div class="el-card-avatar el-overlay-1"> <img src="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>" /> 
                                    <div class="el-overlay">
                                        <ul class="el-info">
                                            <li><a class="btn default btn-outline image-popup-vertical-fit" href="<?php echo $this->crud_model->get_image_url('patient', $patient['patient_id']);?>"><i class="icon-magnifier"></i></a></li>
                                            <li><a class="btn default btn-outline" href="<?php echo base_url();?>patient/edit_patient/<?php echo $patient['patient_id'];?>"><i class="fa fa-edit"></i></a></li>
                                            <li><a class="btn default btn-outline" href="<?php echo base_url();?>patient/view_patient/<?php echo $patient['patient_id'];?>"><i class="fa fa-eye "></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title"><?php echo $patient['name'];?></h3> <small>Occupation: <?php echo $patient['occupation'];?></small>
                                    <br/> <small>Age: <?php echo $patient['age'];?> years</small> </div>
                            </div>
                        </div>
                    </div>

                            <?php endforeach; ?>
											

                    </div> 