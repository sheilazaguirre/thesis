<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Block Edit</h3>
            </div>
			<?php echo form_open('block/edit/'.$block['blockID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="blockCode" class="control-label">Block Code</label>
						<div class="form-group">
							<input type="text" name="blockCode" value="<?php echo ($this->input->post('blockCode') ? $this->input->post('blockCode') : $block['blockCode']); ?>" class="form-control" id="blockCode" />
							<span class="text-danger"><?php echo form_error('blockCode');?></span>
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