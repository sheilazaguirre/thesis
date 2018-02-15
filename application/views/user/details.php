<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Edit</h3>
            </div>
			<?php echo form_open('user/details/'.$user['userID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userTypeID" class="control-label">Usertype</label>
						<div class="form-group">
							<select name="userTypeID" class="form-control">
								<option value="">Select Usertype</option>
								<?php 
								foreach($all_usertype as $usertype)
								{
									$selected = ($usertype['userTypeID'] == $user['userTypeID']) ? ' selected="selected"' : "";

									echo '<option value="'.$usertype['userTypeID'].'" '.$selected.'>'.$usertype['userType'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userIDNo" class="control-label"><span class="text-danger">*</span>ID No.</label>
						<div class="form-group">
							<input type="text" name="userIDNo" value="<?php echo ($this->input->post('userIDNo') ? $this->input->post('userIDNo') : $user['userIDNo']); ?>" class="form-control" id="userIDNo" />
							<span class="text-danger"><?php echo form_error('userIDNo');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userLN" class="control-label"><span class="text-danger">*</span>Last Name</label>
						<div class="form-group">
							<input type="text" name="userLN" value="<?php echo ($this->input->post('userLN') ? $this->input->post('userLN') : $user['userLN']); ?>" class="form-control" id="userLN" />
							<span class="text-danger"><?php echo form_error('userLN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userFN" class="control-label"><span class="text-danger">*</span>First Name</label>
						<div class="form-group">
							<input type="text" name="userFN" value="<?php echo ($this->input->post('userFN') ? $this->input->post('userFN') : $user['userFN']); ?>" class="form-control" id="userFN" />
							<span class="text-danger"><?php echo form_error('userFN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userEmail" class="control-label"><span class="text-danger">*</span>Email</label>
						<div class="form-group">
							<input type="text" name="userEmail" value="<?php echo ($this->input->post('userEmail') ? $this->input->post('userEmail') : $user['userEmail']); ?>" class="form-control" id="userEmail" />
							<span class="text-danger"><?php echo form_error('userEmail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userPassword" class="control-label"><span class="text-danger">*</span>Password</label>
						<div class="form-group">
							<input type="password" name="userPassword" value="<?php echo ($this->input->post('userPassword') ? $this->input->post('userPassword') : $user['userPassword']); ?>" class="form-control" id="userPassword" />
							<span class="text-danger"><?php echo form_error('userPassword');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userMobile" class="control-label"><span class="text-danger">*</span>Mobile</label>
						<div class="form-group">
							<input type="text" name="userMobile" value="<?php echo ($this->input->post('userMobile') ? $this->input->post('userMobile') : $user['userMobile']); ?>" class="form-control" id="userMobile" />
							<span class="text-danger"><?php echo form_error('userMobile');?></span>
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