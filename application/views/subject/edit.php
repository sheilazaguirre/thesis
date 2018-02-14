<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Subject Edit</h3>
            </div>
			<?php echo form_open('subject/edit/'.$subject['subjectID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="subjectType" class="control-label"><span class="text-danger">*</span>SubjectType</label>
						<div class="form-group">
							<select name="subjectType" class="form-control">
								<option value="">Select a Subject Type</option>
								<?php 
								$subjectType_values = array(
                                    'Lecture'=>'Lecture',
                                    'Laboratory'=>'Laboratory',
									'P.E.'=>'P.E.',
									'NSTP'=>'NSTP',
								);

								foreach($subjectType_values as $value => $display_text)
								{
									$selected = ($value == $subject['subjectType']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('subjectType');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="courseID" class="control-label"><span class="text-danger">*</span>Course</label>
						<div class="form-group">
							<select name="courseID" class="form-control">
								<option value="">Select a Course</option>
								<?php 
								foreach($all_courses as $course)
								{
									$selected = ($course['courseID'] == $this->input->post('courseID')) ? ' selected="selected"' : "";

									echo '<option value="'.$course['courseID'].'" '.$selected.'>'.$course['courseCode'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('courseID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="subjectCode" class="control-label"><span class="text-danger">*</span>Subject Code</label>
						<div class="form-group">
							<input type="text" name="subjectCode" value="<?php echo ($this->input->post('subjectCode') ? $this->input->post('subjectCode') : $subject['subjectCode']); ?>" class="form-control" id="subjectCode" />
							<span class="text-danger"><?php echo form_error('subjectCode');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="subjectName" class="control-label"><span class="text-danger">*</span>Subject Name</label>
						<div class="form-group">
							<input type="text" name="subjectName" value="<?php echo ($this->input->post('subjectName') ? $this->input->post('subjectName') : $subject['subjectName']); ?>" class="form-control" id="subjectName" />
							<span class="text-danger"><?php echo form_error('subjectName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="units" class="control-label"><span class="text-danger">*</span>Units</label>
						<div class="form-group">
							<input type="text" name="units" value="<?php echo ($this->input->post('units') ? $this->input->post('units') : $subject['units']); ?>" class="form-control" id="units" />
							<span class="text-danger"><?php echo form_error('units');?></span>
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