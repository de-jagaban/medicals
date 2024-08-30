<div class="row">
	<div class="col-sm-12">
		<div class="panel panel-burnt">
			<div class="panel-heading"> <?php echo get_phrase('List Test');?></div>
				<div class="panel-body table-responsive">
 								<table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th><?php echo get_phrase('department');?></th>
                                            <th><?php echo get_phrase('Doctor Name');?></th>
                                            <th><?php echo get_phrase('patient_name');?></th>
                                            <th><?php echo get_phrase('Date Created');?></th>
                                            <th><?php echo get_phrase('status');?></th>
                                            <th><?php echo get_phrase('actions');?></th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                    <?php $get_all_tests = $this->crud_model->select_test_info();
                                            foreach($get_all_tests as $key => $test){?>
                                        <tr>

                                            <td><?php echo $this->crud_model->get_type_name_by_id ('department', $test['department_id']);?></td>
                                            <td>
                                            <?php echo $this->crud_model->get_type_name_by_id ('doctor', $test['doctor_id']);?>
                                            </td>
                                            <td><?php echo $this->crud_model->get_type_name_by_id ('patient', $test['patient_id']);?></td>
                                            <td><?php echo date('d M Y', $test['date_created']);?></td>
											<td>
											<span class="label label-<?php if($test['test_type'] == '1') echo 'success'; else echo 'warning';?>">
                                            <?php if($test['test_type'] == '1'):?>
                                            <?php echo 'New Test';?>
                                            <?php endif;?>
                                            <?php if($test['test_type'] == '2'):?>
                                            <?php echo 'Old Test';?>
                                            <?php endif;?>

                                            </span>
											</td>
                                            <td>

                                            <a href="<?php echo base_url();?>test/view_test/<?php echo $test['test_id'];?>">
												<button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-print"></i> </button>
											</a>

                             					<a href="<?php echo base_url();?>test/edit_test/<?php echo $test['test_id'];?>">
												<button type="button" class="btn btn-primary btn-circle btn-xs"><i class="fa fa-edit"></i> </button>
												</a>

                                                <a href="#" onclick="confirm_modal('<?php echo base_url();?>test/add_test/delete/<?php echo $test['test_id'];?>');">
												<button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i> </button>
												</a>

                                            </td>
             							</tr>
                                    <?php } ?>
									</tbody>


							</table>
			</div>
		</div>
	</div>
</div>
