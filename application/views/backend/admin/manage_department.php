<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add Department')?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'department/manage_department/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>  <!-- Opening Form action class -->

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Name')?></label>
                        <div class="col-sm-12">
                                <input name="name" type="text" class="form-control"/ required>
                        </div>
                    </div>	
								
                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Description')?></label>
                        <div class="col-sm-12">
                                <textarea type="text" class="form-control" name="description"></textarea>
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
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Department')?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('ID')?></th>
                                        <th><?php echo get_phrase('Name')?></th>
                                        <th><?php echo get_phrase('Description')?></th>
                                        <th><?php echo get_phrase('Actions')?></th>
                                    </tr>
                                </thead>
                        <tbody>

                        <?php 
                                $counter = 1; //itereate the ID counter
                                $select_department = $this->db->get('department')->result_array(); //Fetches data from the department database and populates the List Department table with it.
                                    foreach ($select_department as $key => $department) :?>
                            
                                    <tr>
                                        <td><?php echo $counter++;?></td>
                                        <td><?php echo $department['name'];?></td>
                                        <td><?php echo $department['description'];?></td>
                                        <td>
                                            
                                            <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_department/<?php echo $department['department_id'];?>')" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                            <a href="<?php echo base_url();?>department/manage_department/delete/<?php echo $department['department_id'];?>" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>

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
			