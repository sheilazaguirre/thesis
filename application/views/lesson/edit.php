<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Lesson Edit</h3>
            </div>
			<?php echo form_open('lesson/edit/'.$lesson['lessonID']); ?>
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
									$selected = ($theclass['classID'] == $lesson['classID']) ? ' selected="selected"' : "";

									echo '<option value="'.$theclass['classID'].'" '.$selected.'>'.$theclass['classID'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('classID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="lessonFile" class="control-label"><span class="text-danger">*</span>File</label>
						<div class="form-group">
						<input type="file" name="filen" size="20" class="form-control" id="lessonFile" />
						<span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
						</div>
					</div>
					<div class="col-md-6">
                        <label for="lessonDesc" class="control-label"><span class="text-danger">*</span>Description</label>
                        <div class="form-group">
                            <textarea name="lessonDesc" value="<?php echo ($this->input->post('lessonDesc') ? $this->input->post('lessonDesc') : $lesson['lessonDesc']); ?>" class="form-control" id="lessonDesc"><?php echo $lesson['lessonDesc']; ?></textarea>
                            <span class="text-danger"><?php echo form_error('lessonDesc');?></span>
                        </div>
                    </div>
					<div class="col-md-6">
						<label for="lessonTitle" class="control-label"><span class="text-danger">*</span>Title</label>
						<div class="form-group">
							<input type="text" name="lessonTitle" value="<?php echo ($this->input->post('lessonTitle') ? $this->input->post('lessonTitle') : $lesson['lessonTitle']); ?>" class="form-control" id="lessonTitle" />
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