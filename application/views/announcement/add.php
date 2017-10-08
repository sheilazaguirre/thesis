<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Announcement</h3>
            </div>
            <?php echo form_open('announcement/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">Select a User</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $this->input->post('userID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceTitle" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="announceTitle" value="<?php echo $this->input->post('announceTitle'); ?>" class="form-control" id="announceTitle" />
							<span class="text-danger"><?php echo form_error('announceTitle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceFile" class="control-label"><span class="text-danger">*</span>Announcement File</label>
						<div class="form-group">
							<input type="file" name="file" size="20" class="form-control" id="file" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceDetail" class="control-label"><span class="text-danger">*</span>Details</label>
						<div class="form-group">
							<input type="text" name="announceDetail" value="<?php echo $this->input->post('announceDetail'); ?>" class="form-control" id="announceDetail" />
							<span class="text-danger"><?php echo form_error('announceDetail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceDate" class="control-label"><span class="text-danger">*</span>Announcement Date</label>
						<div class="form-group">
							<input type="text" name="announceDate" value="<?php echo $this->input->post('announceDate'); ?>" class="form-control" id="announceDate" />
							<span class="text-danger"><?php echo form_error('announceDate');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success" name="submit">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>