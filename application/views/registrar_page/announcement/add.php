<?php echo form_open_multipart('./reg_announcement/add');?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Announcement</h3>
            </div>
            <?php echo form_open('reg_announcement/add'); ?>
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

									echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].' '.$user['userLN'].'</option>';
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
						<label for="announceFile" class="control-label"><span class="text-danger">*</span>File</label>
						<div class="form-group">
							<input type="file" name="filen" size="20" class="form-control" id="announceFile" />
							<span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
						</div>
					</div>
					<div class="col-md-6">
                        <label for="announceDetail" class="control-label"><span class="text-danger">*</span>Announcement Details</label>
                        <div class="form-group">
                            <textarea name="announceDetail" class="form-control" id="announceDetail"><?php echo $this->input->post('announceDetail'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('announceDetail');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="announceDate" class="control-label"><span class="text-danger">*</span>Announcement Date</label>
						<div class="form-group">
							<input type="date" name="announceDate" value="<?php echo $this->input->post('announceDate'); ?>" class="date form-control" id="announceDate" />
							<span class="text-danger"><?php echo form_error('announceDate');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
			  
            	<button type="submit" class="btn btn-success" name="Submit">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>