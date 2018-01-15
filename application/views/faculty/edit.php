<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Faculty Edit</h3>
            </div>
			<?php echo form_open('faculty/edit/'.$faculty['facultyID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label">Faculty</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">Select a User</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $faculty['userID']) ? ' selected="selected"' : "";

                                    echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].' '.$user['userLN'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="facultyType" class="control-label">Faculty Type</label>
						<div class="form-group">
                            <select name="facultyType" class="form-control">
                                <option value="">select</option>
                                <?php
                                $ftype_values = array(
                                    'Part-time'=>'Part-time',
                                    'Full time'=>'Full time',
                                );
                                foreach($ftype_values as $value => $display_text)
                                {
                                    $selected = ($value == $this->input->post('course')) ? ' selected="selected"' : "";

                                    echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
                                }
                                ?>
                            </select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="minUnits" class="control-label">Min Units</label>
						<div class="form-group">
							<input type="text" name="minUnits" value="<?php echo ($this->input->post('minUnits') ? $this->input->post('minUnits') : $faculty['minUnits']); ?>" class="form-control" id="minUnits" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="maxUnits" class="control-label">Max Units</label>
						<div class="form-group">
							<input type="text" name="maxUnits" value="<?php echo ($this->input->post('maxUnits') ? $this->input->post('maxUnits') : $faculty['maxUnits']); ?>" class="form-control" id="maxUnits" />
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