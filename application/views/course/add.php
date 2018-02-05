<div class="row">
<div class="col-md-12">
      <div class="box box-info">
        <div class="box-header with-border">
              <h3 class="box-title">Course Add</h3>
        </div>
        <?php echo form_open('course/add'); ?>
          <div class="box-body">
              <div class="row clearfix">
                <div class="col-md-6">
                    <label for="courseCode" class="control-label"><span class="text-danger">*</span>CourseCode</label>
                    <div class="form-group">
                        <input type="text" name="courseCode" value="<?php echo $this->input->post('courseCode'); ?>" class="form-control" id="courseCode" />
                        <span class="text-danger"><?php echo form_error('courseCode');?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="courseName" class="control-label"><span class="text-danger">*</span>CourseName</label>
                    <div class="form-group">
                        <input type="text" name="courseName" value="<?php echo $this->input->post('courseName'); ?>" class="form-control" id="courseName" />
                        <span class="text-danger"><?php echo form_error('courseName');?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="remarks" class="control-label"><span class="text-danger">*</span>Remarks</label>
                    <div class="form-group">
                        <input type="text" name="remarks" value="<?php echo $this->input->post('remarks'); ?>" class="form-control" id="remarks" />
                        <span class="text-danger"><?php echo form_error('remarks');?></span>
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