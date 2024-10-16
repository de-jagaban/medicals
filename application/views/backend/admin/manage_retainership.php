<div class="row">

    <div class="col-sm-5">
		<div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Add New Retainership')?></div>
				<div class="panel-body table-responsive">
        
                    <!----CREATION FORM STARTS---->
                    <?php echo form_open(base_url(). 'retainership/manage_retainership/create', array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>  <!-- Opening Form action class -->

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Company Name')?></label>
                        <div class="col-sm-12">
                                <input name="company_name" type="text" class="form-control"/ required>
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Address')?></label>
                        <div class="col-sm-12">
                                <input name="address" class="form-control"/ required >
                        </div>
                    </div>	


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Email')?></label>
                        <div class="col-sm-12">
                                <input name="email" type="text" class="form-control">
                        </div>
                    </div>	

                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone')?></label>
                        <div class="col-sm-12">
                                <input name="phone" type="text" class="form-control"/ required>
                        </div>
                    </div>


                    <div class="form-group">
                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Focal Person')?></label>
                        <div class="col-sm-12">
                                <input name="focal_person" type="text" class="form-control"/ required>
                        </div>
                    </div>


                    
                    <div class="form-group">
                                <label class="col-md-12"><?php echo get_phrase('Parameters');?>*</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" rows="5" name="parameters"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <label class="col-md-12" for="example-text"><?php echo get_phrase('Ref No')?></label>
                                    <div class="col-sm-12">
                                            <input name="ref_no" type="text" class="form-control"/ required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Start Date'); ?></label>
                                    <div class="col-sm-12">
                                            <input name="start_date" type="date" id="date" value="<?php echo date('Y-m-d');?>" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12" for="example-text"><?php echo get_phrase('Expiry Date'); ?></label>
                                    <div class="col-sm-12">
                                            <input name="expiry_date" type="date" id="date" value="<?php echo date('Y-m-d');?>" class="form-control">
                                    </div>
                                </div>
                               		
                   
                                <hr>
                                <div class="form-group">
							    <div class="col-sm-12">
								<input type="radio" class="check" id="square-radio-1" name="status" value="1" checked data-radio="iradio_square-red" required>
                                	<label for="square-radio-1"><?php echo get_phrase('Inactive');?></label>        
                                  	<input type="radio" class="check" id="square-radio-2" name="status" value="2"  data-radio="iradio_square-red" required>
                                 	<label for="square-radio-2"><?php echo get_phrase('Active');?></label>
							    </div>
						        </div>
                                <hr>
							
                                                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('Save')?></button>
                    </div>
                <?php echo form_close();?> <!-- Closing Form action class -->
                </div>                
		</div>
	</div>
		
    <div class="col-sm-7">
        <div class="panel panel-burnt">
            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('List Retainership')?></div>		
                <div class="panel-body table-responsive">
		            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th><?php echo get_phrase('ID')?></th>
                                        <th><?php echo get_phrase('Ref. No')?></th>
                                        <th><?php echo get_phrase('Company Name')?></th>
                                        <th><?php echo get_phrase('Email')?></th>
                                        <th><?php echo get_phrase('Phone')?></th>
                                        <th><?php echo get_phrase('Focal Person')?></th>
                                        <th><?php echo get_phrase('Status')?></th>
                                        <th><?php echo get_phrase('Actions')?></th>
                                    </tr>
                                </thead>
                        <tbody>

                        <?php 
                                $counter = 1; //itereate the ID counter
                                $select_companies = $this->retainership_model->select_all_retainerships(); //Fetches data from the donor database and populates the List retainership table with it.
                                    foreach ($select_companies as $key => $all_selected_companies) :?>
                            
                                    <tr>
                                        <td><?php echo $counter++;?></td>
                                        <td><?php echo $all_selected_companies['ref_no'];?></td>
                                        <td><?php echo $all_selected_companies['company_name'];?></td>
                                        <td><?php echo $all_selected_companies['email'];?></td>
                                        <td><?php echo $all_selected_companies['phone'];?></td>
                                        <td><?php echo $all_selected_companies['focal_person'];?></td>
                                        <td>
											<span class="label label-<?php if($all_selected_companies['status'] == '1') echo 'danger'; else echo 'success';?>">
                                            <?php if($all_selected_companies['status'] == '1'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>
                                            <?php if($all_selected_companies['status'] == '2'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>
                                            
                                            </span>
											</td>
                                        <td>

                                            <a onclick="showAjaxModal('<?php echo base_url();?>modal/popup/edit_retainership/<?php echo $all_selected_companies['company_id'];?>')" class="btn btn-success btn-circle btn-xs"><i class="fa fa-edit"></i></a>

                                            <a href="<?php echo base_url(). 'retainership/completeRetainershipCertificate/' . $all_selected_companies['company_id'];?>" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-link"></i></a>

                                            <a href="<?php echo base_url();?>retainership/manage_retainership/delete/<?php echo $all_selected_companies['company_id'];?>" onclick="return confirm('Are you sure you want to delete');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>
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
			