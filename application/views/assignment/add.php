
<?php echo form_open_multipart('./assignment/add');?>
<div class="row">
<div class="col-md-12">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add Assignment</h3>
        </div>
        <?php echo form_open('assignment/add'); ?>
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
									$selected = ($theclass['classID'] == $this->input->post('classID')) ? ' selected="selected"' : "";

									echo '<option value="'.$theclass['classID'].'" '.$selected.'>'.$theclass['classID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="assignFile" class="control-label"><span class="text-danger">*</span>File</label>
						<div class="form-group">
							<input type="file" name="filen" size="20" class="form-control" id="assignFile" />
							<span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
						</div>
					</div>
					<div class="col-md-6">
                        <label for="assignDesc" class="control-label"><span class="text-danger">*</span>Description</label>
                        <div class="form-group">
                            <textarea name="assignDesc" class="form-control" id="assignDesc"><?php echo $this->input->post('assignDesc'); ?></textarea>
                            <span class="text-danger"><?php echo form_error('assignDesc');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="assignTitle" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="assignTitle" value="<?php echo $this->input->post('assignTitle'); ?>" class="form-control" id="assignTitle" />
							<span class="text-danger"><?php echo form_error('assignTitle');?></span>
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

    