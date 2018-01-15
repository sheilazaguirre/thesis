<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Class Edit</h3>
            </div>
			<?php echo form_open('class/edit/'.$class['classID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="subjectID" class="control-label">SubjectID</label>
						<div class="form-group">
							<input type="text" name="subjectID" value="<?php echo ($this->input->post('subjectID') ? $this->input->post('subjectID') : $class['subjectID']); ?>" class="form-control" id="subjectID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="facultyID" class="control-label">FacultyID</label>
						<div class="form-group">
							<input type="text" name="facultyID" value="<?php echo ($this->input->post('facultyID') ? $this->input->post('facultyID') : $class['facultyID']); ?>" class="form-control" id="facultyID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="timeSlotID" class="control-label">TimeSlotID</label>
						<div class="form-group">
							<input type="text" name="timeSlotID" value="<?php echo ($this->input->post('timeSlotID') ? $this->input->post('timeSlotID') : $class['timeSlotID']); ?>" class="form-control" id="timeSlotID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="venueID" class="control-label">VenueID</label>
						<div class="form-group">
							<input type="text" name="venueID" value="<?php echo ($this->input->post('venueID') ? $this->input->post('venueID') : $class['venueID']); ?>" class="form-control" id="venueID" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="academicYear" class="control-label">AcademicYear</label>
						<div class="form-group">
							<input type="text" name="academicYear" value="<?php echo ($this->input->post('academicYear') ? $this->input->post('academicYear') : $class['academicYear']); ?>" class="form-control" id="academicYear" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="semester" class="control-label">Semester</label>
						<div class="form-group">
							<input type="text" name="semester" value="<?php echo ($this->input->post('semester') ? $this->input->post('semester') : $class['semester']); ?>" class="form-control" id="semester" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label">Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $class['status']); ?>" class="form-control" id="status" />
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