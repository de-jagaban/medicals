<?php $select_blood = $this->db->get_where('blood', array('blood_id' => $param2))->result_array();
        foreach ($select_blood as $key => $blood_selected_with_id):?>
<div class="row">

    <div class="col-sm-12">
		<div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-edit"></i>&nbsp;&nbsp;<?php echo get_phrase('Edit Blood')?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'blood/manage_blood/update/'.$param2, array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>  <!-- Opening Form action class -->

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group')?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" value="<?php echo $blood_selected_with_id['name'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Quantity')?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" value="<?php echo $blood_selected_with_id['quantity'];?>" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Status')?></label>
                        <div class="col-sm-12">
                                <select name="status" class="form-control"/ required >
                                    <option>Select Status</option>
                                    <option value="Available"<?php if($blood_selected_with_id['status'] == 'Available') echo 'selected="selected"' ;?>>Available</option>
                                    <option value="Unvailable"<?php if($blood_selected_with_id['status'] == 'Unvailable') echo 'selected="selected"' ;?>>Unvailable</option>
                                </select>
                        </div>
                    </div>	
								
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save')?></button>
                    </div>
                <?php echo form_close();?> <!-- Closing Form action class -->
                </div>                
		</div>
	</div>

</div>
<?php endforeach; ?>