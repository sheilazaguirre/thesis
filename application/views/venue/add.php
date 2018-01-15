<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Add Venue</h3>
            </div>
            <?php echo form_open('venue/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="venueType" class="control-label"><span class="text-danger">*</span>VenueType</label>
						<div class="form-group">
							<select name="venueType" class="form-control">
								<option value="">Select a Venue Type</option>
								<?php 
								$venueType_values = array(
									'Classroom'=>'Classroom',
									'Laboratory'=>'Laboratory',
									'Field'=>'Field',
								);

								foreach($venueType_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('venueType')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('venueType');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="venueCode" class="control-label"><span class="text-danger">*</span>Code</label>
						<div class="form-group">
							<input type="text" name="venueCode" value="<?php echo $this->input->post('venueCode'); ?>" class="form-control" id="venueCode" />
							<span class="text-danger"><?php echo form_error('venueCode');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="venueName" class="control-label"><span class="text-danger">*</span>Name</label>
						<div class="form-group">
							<input type="text" name="venueName" value="<?php echo $this->input->post('venueName'); ?>" class="form-control" id="venueName" />
							<span class="text-danger"><?php echo form_error('venueName');?></span>
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