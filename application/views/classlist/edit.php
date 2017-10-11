<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Classlist Edit</h3>
            </div>
			<?php echo form_open('classlist/edit/'.$classlist['classListID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="classID" class="control-label">Class</label>
						<div class="form-group">
							<select name="classID" class="form-control">
								<option value="">Select a Class</option>
								<?php 
								foreach($all_theclasses as $theclass)
								{
									$selected = ($theclass['classID'] == $classlist['classID']) ? ' selected="selected"' : "";

									echo '<option value="'.$theclass['classID'].'" '.$selected.'>'.$theclass['subjectID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">Student</label>
						<div class="form-group">
							<select name="studentID" class="form-control">
								<option value="">Select a Student</option>
								<?php 
								foreach($all_students as $student)
								{
									$selected = ($student['studentID'] == $classlist['studentID']) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['userID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="midtermGrade" class="control-label"><span class="text-danger">*</span>Midterm Grade</label>
						<div class="form-group">
							<input type="text" name="midtermGrade" value="<?php echo ($this->input->post('midtermGrade') ? $this->input->post('midtermGrade') : $classlist['midtermGrade']); ?>" class="form-control" id="midtermGrade" />
							<span class="text-danger"><?php echo form_error('midtermGrade');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="finalGrade" class="control-label"><span class="text-danger">*</span>Final Grade</label>
						<div class="form-group">
							<input type="text" name="finalGrade" value="<?php echo ($this->input->post('finalGrade') ? $this->input->post('finalGrade') : $classlist['finalGrade']); ?>" class="form-control" id="finalGrade" />
							<span class="text-danger"><?php echo form_error('finalGrade');?></span>
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