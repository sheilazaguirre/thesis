<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Lesson</h3>
            </div>
            <?php echo form_open('lesson/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="classID" class="control-label"><span class="text-danger">*</span>Class</label>
						<div class="form-group">
							<select name="classID" class="form-control">
								<option value="">Select a Class</option>
								<?php 
								foreach($all_theclasses as $theclass)
								{
									$selected = ($theclass['classID'] == $this->input->post('classID')) ? ' selected="selected"' : "";

									echo '<option value="'.$theclass['classID'].'" '.$selected.'>'.$theclass['subjectID'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('classID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonFile" class="control-label"><span class="text-danger">*</span>Lesson File</label>
						<div class="form-group">
							<input type="text" name="lessonFile" value="<?php echo $this->input->post('lessonFile'); ?>" class="form-control" id="lessonFile" />
							<span class="text-danger"><?php echo form_error('lessonFile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonDesc" class="control-label"><span class="text-danger">*</span>]Description</label>
						<div class="form-group">
							<input type="text" name="lessonDesc" value="<?php echo $this->input->post('lessonDesc'); ?>" class="form-control" id="lessonDesc" />
							<span class="text-danger"><?php echo form_error('lessonDesc');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonTitle" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="lessonTitle" value="<?php echo $this->input->post('lessonTitle'); ?>" class="form-control" id="lessonTitle" />
							<span class="text-danger"><?php echo form_error('lessonTitle');?></span>
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