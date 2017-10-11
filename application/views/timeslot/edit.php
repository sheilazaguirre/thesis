<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Timeslot Edit</h3>
            </div>
			<?php echo form_open('timeslot/edit/'.$timeslot['timeSlotID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="dayOfWeek" class="control-label"><span class="text-danger">*</span>Day Of Week</label>
						<div class="form-group">
							<select name="dayOfWeek" class="form-control">
								<option value="">Select Day of Week</option>
								<?php 
								$dayOfWeek_values = array(
									'mwf'=>'MWF',
									'tth' =>'TTH',
									's' => 'S',
								);

								foreach($dayOfWeek_values as $value => $display_text)
								{
									$selected = ($value == $timeslot['dayOfWeek']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('dayOfWeek');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="startTime" class="control-label"><span class="text-danger">*</span>Start Time</label>
						<div class="form-group">
							<input type="text" name="startTime" value="<?php echo ($this->input->post('startTime') ? $this->input->post('startTime') : $timeslot['startTime']); ?>" class="form-control" id="startTime" />
							<span class="text-danger"><?php echo form_error('startTime');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="endTime" class="control-label"><span class="text-danger">*</span>End Time</label>
						<div class="form-group">
							<input type="text" name="endTime" value="<?php echo ($this->input->post('endTime') ? $this->input->post('endTime') : $timeslot['endTime']); ?>" class="form-control" id="endTime" />
							<span class="text-danger"><?php echo form_error('endTime');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>