<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-burnt">
			<div class="panel-heading"> <?php echo get_phrase('List Schedules');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('doctor_name');?></th>
                                            <th><?php echo get_phrase('date');?></th>
                                            <th><?php echo get_phrase('start_time');?></th>
											
											<th><?php echo get_phrase('end_time');?></th>
                                            <th><?php echo get_phrase('patient_time');?></th>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>
									
                                    <tbody>
									
                                    <?php $get_all_schedule = $this->schedule_model->select_schedule(); 
                                        foreach($get_all_schedule as $key => $schedule):?>
									
                                        <tr>
                                            <td><?php echo $this->crud_model->get_type_name_by_id('doctor',$schedule['doctor_id']);?></td>
                                            <td><?php echo date('d M Y', $schedule['avail_day']);?></td>
											<td><?php echo $schedule['start_time'];?></td>
                                            <td><?php echo $schedule['end_time'];?></td>
											<td><?php echo $schedule['per_patient_time'];?></td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id('department',$schedule['department_id']);?></td>
											<td>
											<span class="label label-<?php if($schedule['status'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($schedule['status'] == '1'):?>
                                            <?php echo 'Active';?>
                                            <?php endif;?>

                                            <?php if($schedule['status'] == '2'):?>
                                            <?php echo 'Inactive';?>
                                            <?php endif;?>

                                            
                                        
                                        </span>
											</td>
                                            <td>
												<a href="#" onclick="confirm_modal('<?php echo base_url();?>admin/add_schedule/delete/<?php echo $schedule['schedule_id'];?>');">
												<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
												</a>

                             					<a href="<?php echo base_url();?>admin/edit_schedule/<?php echo $schedule['schedule_id'];?>">
												<button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-edit"></i> </button>
												</a>
                                         
             							</tr>
                                         <?php endforeach; ?>
									</tbody>
					

							</table>
			</div>
		</div>
	</div>
</div>

