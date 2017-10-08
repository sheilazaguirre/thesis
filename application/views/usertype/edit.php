<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Usertype Edit</h3>
            </div>
			<?php echo form_open('usertype/edit/'.$usertype['userTypeID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="userType" class="control-label"><span class="text-danger">*</span>User Type</label>
						<div class="form-group">
							<input type="text" name="userType" value="<?php echo ($this->input->post('userType') ? $this->input->post('userType') : $usertype['userType']); ?>" class="form-control" id="userType" />
							<span class="text-danger"><?php echo form_error('userType');?></span>
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