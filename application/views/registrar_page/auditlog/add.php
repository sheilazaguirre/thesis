<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Auditlog</h3>
            </div>
            <?php echo form_open('reg_auditlog/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">Select a  User</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $this->input->post('userID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].''.$user['userLN'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="auditDesc" class="control-label"><span class="text-danger">*</span>\Description</label>
						<div class="form-group">
							<input type="text" name="auditDesc" value="<?php echo $this->input->post('auditDesc'); ?>" class="form-control" id="auditDesc" />
							<span class="text-danger"><?php echo form_error('auditDesc');?></span>
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