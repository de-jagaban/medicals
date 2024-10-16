<?php $select_companies = $this->db->get_where('retainership', array('company_id' => $param2))->result_array();
        foreach ($select_companies as $key => $all_selected_companies) : ?>

<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Update Retainership')?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'retainership/manage_retainership/update/' .$param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>  <!-- Opening Form action class -->

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Company Name')?></label>
                        <div class="col-sm-12">
                                <input name="company_name" value="<?php echo $all_selected_companies['company_name'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Address')?></label>
                        <div class="col-sm-12">
                                <input name="address" value="<?php echo $all_selected_companies['address'];?>" class="form-control"/ required >
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Email')?></label>
                        <div class="col-sm-12">
                                <input name="email" value="<?php echo $all_selected_companies['email'];?>" type="text" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone')?></label>
                        <div class="col-sm-12">
                                <input name="phone" value="<?php echo $all_selected_companies['phone'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Focal Person')?></label>
                        <div class="col-sm-12">
                                <input name="focal_person" value="<?php echo $all_selected_companies['focal_person'];?>" type="text" class="form-control"/ required>
                        </div>
                    </div>


                    
                             <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('Parameters');?>*</label>
                                    <div class="col-sm-12">
                                        <textarea class="form-control" rows="5" name="parameters" >

                                            <?php echo $all_selected_companies['parameters'];?>  

                                        </textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-12" for="example-text"><?php echo get_phrase('Ref No')?></label>
                                    <div class="col-sm-12">
                                            <input name="ref_no" value="<?php echo $all_selected_companies['ref_no'];?>" type="text" class="form-control"/ required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date'); ?></label>
                                    <div class="col-sm-12">
                                            <input name="start_date" type="date" id="date" value="<?php echo date('Y-m-d', $all_selected_companies['start_date']);?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Expiry Date'); ?></label>
                                    <div class="col-sm-12">
                                            <input name="expiry_date" type="date" id="date" value="<?php echo date('Y-m-d', $all_selected_companies['expiry_date']);?>" class="form-control">
                                    </div>
                                </div>
                               		
                   
                                <hr>
                                <div class="form-group">
							    <div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" <?php if($all_selected_companies['status'] == '1') echo 'checked';?>  checked data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('Inactive');?></label> 

                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2" <?php if($all_selected_companies['status'] == '2') echo 'checked';?>   data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Active');?></label>
							    </div>
						        </div>
                                <hr>
							
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Update')?></button>
                    </div>
                    <?php echo form_close();?> <!-- Closing Form action class -->
                </div>                
		</div>
	</div>
</div>
<?php endforeach; ?>