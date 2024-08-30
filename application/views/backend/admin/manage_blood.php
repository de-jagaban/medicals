<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Blood')?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'blood/manage_blood/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>  <!-- Opening Form action class -->

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group')?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Quantity')?></label>
                        <div class="col-sm-12">
                                <input name="quantity" type="number" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Status')?></label>
                        <div class="col-sm-12">
                                <select name="status" class="form-control"/ required >
                                    <option>Select Status</option>
                                    <option value="Available">Available</option>
                                    <option value="Unvailable">Unvailable</option>
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
		
    <div class="col-sm-7">
        <div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Blood')?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('ID')?></th>
                                        <th><?php echo get_phrase('Blood_group')?></th>
                                        <th><?php echo get_phrase('Quantity')?></th>
                                        <th><?php echo get_phrase('Status')?></th>
                                        <th><?php echo get_phrase('Actions')?></th>
                                    </tr>
                                </thead>
                        <tbody>

                        <?php 
                                $counter = 1; //itereate the ID counter
                                $select_blood = $this->blood_model->select_all_bloods(); //Fetches data from the blood database and populates the List blood table with it.
                                    foreach ($select_blood as $key => $blood) :?>
                            
                                    <tr>
                                        <td><?php echo $counter++;?></td>
                                        <td><?php echo $blood['name'];?></td>
                                        <td><?php echo $blood['quantity'];?></td>
                                        <td>
                                        <span class="label label-<?php if($blood['status'] == 'Available') echo 'success'; else echo 'danger'; ?>"><?php echo $blood['status'];?></span>    
                                        </td>
                                        <td>
                                            
                                            <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_blood/<?php echo $blood['blood_id'];?>')" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url();?>blood/manage_blood/delete/<?php echo $blood['blood_id'];?>" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>

                                        </td>
                                    </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
		        </div>
	    </div>
	</div>
</div>
            <!----TABLE LISTING ENDS--->
			