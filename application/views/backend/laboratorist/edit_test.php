<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-burnt">

				<div class="panel-body">

                <?php echo get_phrase('edit_test');?>
                <hr>
                <?php foreach ($select_test_by_id as $key => $value) { ?>
					<?php echo form_open(base_url() . 'test/add_test/update/'. $value['test_id'] ,
					array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" value="<?php echo $value['name'];?>" class="form-control"/ required>
                        </div>
                    </div>


                    <div class="form-group">
                             <label class="col-sm-12"><?php echo get_phrase('department');?>*</label>
                                 <div class="col-sm-12">
									<select class="select2 form-control" id="department_id" name="department_id" onchange="return get_doctor_patient_edit(this.value, <?php echo $test_id;?>)" required>
                                         	<option data-tokens=""><?php echo get_phrase('select_department');?></option>
                                    	<?php
										$department = $this->db->get('department')->result_array();
										foreach($department as $row):
										?>
                                    		<option value="<?php echo $row['department_id'];?>"<?php if($value['department_id'] == $row['department_id']) echo 'selected="selected"';?>><?php echo $row['name'];?></option>
									 <?php endforeach;?>
                                    </select>
								</div>
						</div>


						<div id="doctor_patient_holder"></div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('weight'); ?></label>
                            <div class="col-sm-12">
                                    <input name="weight" value="<?php echo $value['weight'];?>" type="text" class="form-control"/ required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('height'); ?></label>
                            <div class="col-sm-12">
                                    <input name="height" value="<?php echo $value['height'];?>" type="text" class="form-control"/ required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('age'); ?></label>
                            <div class="col-sm-12">
                                    <input name="visiting_fee" value="<?php echo $value['age'];?>" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('blood_pressure'); ?></label>
                            <div class="col-sm-12">
                                    <input name="blood_pressure" value="<?php echo $value['blood_pressure'];?>" type="text" class="form-control">
                            </div>
                        </div>


                        <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('case_history');?></label>
                            <div class="col-md-12">
                                <textarea class="form-control" id="mymce" name="case_history"><?php echo $value['case_history'];?></textarea>
                            </div>
                        </div>


                        <div id="doc_entries">

                        <?php $test_entries = json_decode($value['test_entries']);
                        foreach($test_entries as $key => $test_entry) : ?>
                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('test_entry'); ?></label>
                                    <div class="col-md-3">
                                    <input name="entry_diagnose[]" type="text" class="form-control" value="<?php echo $test_entry->diagnose;?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_name[]" type="text" class="form-control" value="<?php echo $test_entry->medicine_name;?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_type[]" type="text" class="form-control" value="<?php echo $test_entry->medicine_type;?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_test[]" type="text" class="form-control" value="<?php echo $test_entry->usage_test;?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_days[]" type="text" class="form-control" value="<?php echo $test_entry->usage_days;?>">
                                    </div>

                                    <div class="col-md-1">
                                    <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
                                    </div>
						    </div>
                        <?php endforeach;?>
                        </div>

                        <div id="two_doc_entries">
                            <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('test_entry'); ?></label>
                                    <div class="col-md-3">
                                    <input name="entry_diagnose[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Sample Collected');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_name[]" type="text" class="form-control" placeholder="<?php echo get_phrase('unit test normal');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_medicine_type[]" type="text" class="form-control" placeholder="<?php echo get_phrase('differential %');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_test[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Coagulation Test');?>">
                                    </div>

                                    <div class="col-md-2">
                                    <input name="entry_days[]" type="text" class="form-control" placeholder="<?php echo get_phrase('Film Report & Comments');?>">
                                    </div>

                                    <div class="col-md-1">
                                    <button type="button" class="btn btn-info btn-circle btn-sm" onClick="deleteParentElement(this)"><i class="fa fa-times"></i></button>
                                    </div>

						    </div>
                        </div>
                        <button type="button" class="btn btn-info btn-sm btn-rounded btn-block" onClick="two_doc_entry()"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('Add More');?></button>


						<hr>
                        <div class="form-group">
							<div class="col-sm-12">
								    <input type="radio" class="check" id="square-radio-1" name="test_type" value="1" <?php if($value['test_type'] == '1') echo 'checked';?> data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('New Test');?></label>

                                      <input type="radio" class="check" id="square-radio-2" name="test_type" value="2" <?php if($value['test_type'] == '2') echo 'checked';?> data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Old Test');?></label>
							</div>
						</div>

						<hr>

                        <button type="submit" class="btn btn-success btn-block btn-rounded btn-sm"><i class="fa fa-save"></i>&nbsp;<?php echo get_phrase('save');?></button>
                    <?php echo form_close();?>
            <?php } ?>
                        </div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
    function get_doctor_patient_edit(department_id, test_id){
        $.ajax({
            url: '<?php echo base_url();?>test/get_doctor_patient_edit/' + department_id + '/' + test_id,
            success: function(response){
                jQuery('#doctor_patient_holder').html(response);
            }
        });
    }

    </script>

    <script>
        $(document).ready(function() {
            var department_id = $('#department_id').val();
            var test_id = '<?php echo $test_id;?>';
            get_doctor_patient_edit(department_id,test_id);

        });
    </script>



    <script type="text/javascript">
        // CREATING BLANK PRESCRIPTION ENTRY
        var blank_doc_entry = '';
            $(document).ready(function(){
            blank_doc_entry = $('#two_doc_entries').html();
        });

        function two_doc_entry(){
            $('#two_doc_entries').append(blank_doc_entry);
        }

        // REMOVING BLANK PRESCRIPTION ENTRY
        function deleteParentElement(n){
            n.parentNode.parentNode.parentNode.removeChild(n.parentNode.parentNode);
        }
    </script>
