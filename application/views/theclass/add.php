<div class="row">
    <div class="col-md-6">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Class</h3>
            </div>
            <?php echo form_open('theclass/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-12">
						<label for="subjectID" class="control-label"><span class="text-danger">*</span>Subject</label>
						<div class="form-group">
							<select name="subjectID" class="form-control">
								<option value="">Select a Subject</option>
								<?php 
								foreach($all_subjects as $subject)
								{
									$selected = ($subject['sujectID'] == $this->input->post('subjectID')) ? ' selected="selected"' : "";

									echo '<option value="'.$subject['sujectID'].'" '.$selected.'>'.$subject['subjectCode'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('subjectID');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="timeSlotID" class="control-label"><span class="text-danger">*</span>Timeslot</label>
						<div class="form-group">
							<select name="timeSlotID" class="form-control">
								<option value="">Select a Timeslot</option>
								<?php 
								foreach($all_timeslots as $timeslot)
								{
									$selected = ($timeslot['timeSlotID'] == $this->input->post('timeSlotID')) ? ' selected="selected"' : "";

									echo '<option value="'.$timeslot['timeSlotID'].'" '.$selected.'>'.$timeslot['dayOfWeek'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('timeSlotID');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="venueID" class="control-label"><span class="text-danger">*</span>Venue</label>
						<div class="form-group">
							<select name="venueID" class="form-control">
								<option value="">Select a  Venue</option>
								<?php 
								foreach($all_venues as $venue)
								{
									$selected = ($venue['venueID'] == $this->input->post('venueID')) ? ' selected="selected"' : "";

									echo '<option value="'.$venue['venueID'].'" '.$selected.'>'.$venue['venueCode'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('venueID');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="academicYear" class="control-label"><span class="text-danger">*</span>Academic Year</label>
						<div class="form-group">
							<input type="text" name="academicYear" value="<?php echo $this->input->post('academicYear'); ?>" class="form-control" id="academicYear" />
							<span class="text-danger"><?php echo form_error('academicYear');?></span>
						</div>
					</div>
					<div class="col-md-12">
						<label for="semester" class="control-label"><span class="text-danger">*</span>Semester</label>
						<div class="form-group">
							<input type="text" name="semester" value="<?php echo $this->input->post('semester'); ?>" class="form-control" id="semester" />
							<span class="text-danger"><?php echo form_error('semester');?></span>
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
	<div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Students</h3>
            </div>
            <div class="box-body">
                <table id="classTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Student Name</th>
						<th>ID Number</th>
						<th>Course</th>
						<th>Actions</th>
                    </tr>
                </thead>

                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
	
</div>