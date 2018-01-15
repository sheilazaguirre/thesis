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
						<label for="userID" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $student['userID']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].' '.$user['userLN'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="course" class="control-label"><span class="text-danger">*</span>Course</label>
						<div class="form-group">
							<select name="course" class="form-control">
								<option value="">select</option>
								<?php 
								$course_values = array(
								);

								foreach($course_values as $value => $display_text)
								{
									$selected = ($value == $student['course']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('course');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="blockID" class="control-label"><span class="text-danger">*</span>Block</label>
						<div class="form-group">
							<select name="blockID" class="form-control">
								<option value="">select block</option>
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
						<label for="dateAdded" class="control-label"><span class="text-danger">*</span>DateAdded</label>
						<div class="form-group">
							<input type="text" name="dateAdded" value="<?php echo ($this->input->post('dateAdded') ? $this->input->post('dateAdded') : $student['dateAdded']); ?>" class="form-control" id="dateAdded" />
							<span class="text-danger"><?php echo form_error('dateAdded');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="dateModified" class="control-label"><span class="text-danger">*</span>DateModified</label>
						<div class="form-group">
							<input type="text" name="dateModified" value="<?php echo ($this->input->post('dateModified') ? $this->input->post('dateModified') : $student['dateModified']); ?>" class="form-control" id="dateModified" />
							<span class="text-danger"><?php echo form_error('dateModified');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="status" class="control-label"><span class="text-danger">*</span>Status</label>
						<div class="form-group">
							<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $student['status']); ?>" class="form-control" id="status" />
							<span class="text-danger"><?php echo form_error('status');?></span>
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