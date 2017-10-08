<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Edit</h3>
            </div>
			<?php echo form_open('student/edit/'.$student['studentID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label">User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">Select a User</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $student['userID']) ? ' selected="selected"' : "";

									echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="blockID" class="control-label"><span class="text-danger">*</span>Block</label>
						<div class="form-group">
							<select name="blockID" class="form-control">
								<option value="">Select a Block</option>
								<?php 
								foreach($all_blocks as $block)
								{
									$selected = ($block['blockID'] == $student['blockID']) ? ' selected="selected"' : "";

									echo '<option value="'.$block['blockID'].'" '.$selected.'>'.$block['blockCode'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('blockID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="course" class="control-label"><span class="text-danger">*</span>Course</label>
						<div class="form-group">
							<input type="text" name="course" value="<?php echo ($this->input->post('course') ? $this->input->post('course') : $student['course']); ?>" class="form-control" id="course" />
							<span class="text-danger"><?php echo form_error('course');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="major" class="control-label"><span class="text-danger">*</span>Major</label>
						<div class="form-group">
							<input type="text" name="major" value="<?php echo ($this->input->post('major') ? $this->input->post('major') : $student['major']); ?>" class="form-control" id="major" />
							<span class="text-danger"><?php echo form_error('major');?></span>
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