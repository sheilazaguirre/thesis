<div class="row">
    <div class="col-md-6">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Classlist</h3>
            </div>
            <?php echo form_open('classlist/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-12">
						<label for="classID" class="control-label">Class</label>
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
	<div class="col-md-6">
	<label for="addstud" class="control-label"><span class="text-danger"></span>Search Student</label>
	<div class="input-group">
                <div class="input-group-btn">
                  <button type="submit" class="btn btn-danger">Add</button>
                </div>
                <!-- /btn-group -->
                <input class="form-control" type="text" value="<?php echo $this->input->post('addstud'); ?>" id="addstud">
				<span class="text-danger"><?php echo form_error('addstud');?></span>
              </div>
	</div>
	
	<div class="col-md-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Students</h3>
            </div>
            <div class="box-body">
                <table id="classTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Student Name</th>
						<th>ID Number</th>
						<th>Course</th>
						<th>Actions</th>
                    </tr>
                </thead>

                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
		
    </div>
</div>