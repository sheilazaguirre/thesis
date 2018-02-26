<div class="row">
<div class="col-md-6">
	  <div class="box box-info">
		<div class="box-header with-border">
			  <h3 class="box-title">Add Class</h3>
		</div>
		<?php echo form_open('theclass/add'); ?>
		  <div class="box-body">
			  <div class="row clearfix">
				<div class="col-md-12">
					<label for="subjectID" class="control-label"><span class="text-danger">*</span>Subject</label>
					<div class="form-group">
						<select name="subjectID" class="form-control">
							<option value="">Select a Subject</option>
							<?php 
							foreach($all_subjects as $subject)
							{
								$selected = ($subject['sujectID'] == $this->input->post('subjectID')) ? ' selected="selected"' : "";
								echo '<option value="'.$subject['sujectID'].'" '.$selected.'>'.$subject['subjectCode'].'</option>';
							} 
							?>
						</select>
						<span class="text-danger"><?php echo form_error('subjectID');?></span>
					</div>
				</div>
				<div class="col-md-12">
					<label for="timeSlotID" class="control-label"><span class="text-danger">*</span>Timeslot</label>
					<div class="form-group">
						<select name="timeSlotID" class="form-control">
							<option value="">Select a Timeslot</option>
							<?php 
							foreach($all_timeslots as $timeslot)
							{
								$selected = ($timeslot['timeSlotID'] == $this->input->post('timeSlotID')) ? ' selected="selected"' : "";
								echo '<option value="'.$timeslot['timeSlotID'].'" '.$selected.'>'.$timeslot['dayOfWeek'].'</option>';
							} 
							?>
						</select>
						<span class="text-danger"><?php echo form_error('timeSlotID');?></span>
					</div>
				</div>
				<div class="col-md-12">
					<label for="venueID" class="control-label"><span class="text-danger">*</span>Venue</label>
					<div class="form-group">
						<select name="venueID" class="form-control">
							<option value="">Select a  Venue</option>
							<?php 
							foreach($all_venues as $venue)
							{
								$selected = ($venue['venueID'] == $this->input->post('venueID')) ? ' selected="selected"' : "";
								echo '<option value="'.$venue['venueID'].'" '.$selected.'>'.$venue['venueCode'].'</option>';
							} 
							?>
						</select>
						<span class="text-danger"><?php echo form_error('venueID');?></span>
					</div>
				</div>
				<div class="col-md-12">
					<label for="academicYear" class="control-label"><span class="text-danger">*</span>Academic Year</label>
					<div class="form-group">
						<input type="text" name="academicYear" value="<?php echo $this->input->post('academicYear'); ?>" class="form-control" id="academicYear" />
						<span class="text-danger"><?php echo form_error('academicYear');?></span>
					</div>
				</div>
				<div class="col-md-12">
					<label for="semester" class="control-label"><span class="text-danger">*</span>Semester</label>
					<div class="form-group">
						<input type="text" name="semester" value="<?php echo $this->input->post('semester'); ?>" class="form-control" id="semester" />
						<span class="text-danger"><?php echo form_error('semester');?></span>
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
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add Students</h3>
			<!-- Live Search -->
			
			<div class="input-group">
                <div class="input-group-btn">
                  <button type="button" class="btn btn-danger" id="btnAdd">Add</button>
                </div>
                <!-- /btn-group -->
                <input class="form-control" name="search_data" id="search_data" type="text" onkeyup="ajaxSearch();">
					<div id="suggestions">
						<p id="autoSuggestionsList">
						</p>
					</div>
              </div>
				<!-- end Live Search -->
			</div>
		<div class="box-body">
		<table id="tableresult" name="tableresult" class="table table-striped">
		<tr>
			<th>ClassListID</th>
			<th>ClassID</th>
			<th>StudentID</th>
			<th>Remarks</th>
			<th>DateAdded</th>
			<th>Actions</th>
		</tr>
		<?php foreach($tableresult as $c): ?>
		<tr>
			<td><?php echo $c['classListID']; ?></td>
			<td><?php echo $c['classID']; ?></td>
			<td><?php echo $c['studentID']; ?></td>
			<td><?php echo $c['remarks']; ?></td>
			<td><?php echo $c['dateAdded']; ?></td>
			<td> 
				<a href="<?php echo site_url('classlist/remove/'.$c['classListID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
			</td>
		</tr>
			<?php endforeach; ?>
	</table>
			<div class="pull-right">
				<?php echo $this->pagination->create_links(); ?>                    
			</div>                
		</div>
	</div>
</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- start (JS code) -->
<script type="text/javascript">
function ajaxSearch()
{
	var input_data = $('#search_data').val();
	if (input_data.length === 0)
	{
		$('#suggestions').hide();
	}
	else
	{
		var post_data = {
			'search_data': input_data,
			'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'
		};
		$.ajax({
			type: "POST",
			url: "<?php echo base_url(); ?>theclass/autocomplete/",
			data: post_data,
			success: function (data) {
				// return success
				if (data.length > 0) {
					$('#suggestions').show();
					$('#autoSuggestionsList');
					$('#autoSuggestionsList').html(data);
				}
			}
		});
	}
}
function inputData(IDNo)
{
	$('#search_data').val(IDNo);	
	$('#suggestions').hide();       
}
$("#btnAdd").click(function () {
				var idnum = $('#search_data').val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>theclass/insert/",
                    data: {idnum: idnum},
                    dataType: "html",
                    success: function (response) {
                        $("#tableresult").load("/theclass/getclass")
                    },
					error: function response() {
						alert("Wala akong nilalagay");
					}
						
                });
            });

</script>
<!-- end (JS code) -->