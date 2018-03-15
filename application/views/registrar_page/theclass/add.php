<div class="row">
<div class="col-md-6">
	  <div class="box box-info">
		<div class="box-header with-border">
			  <h3 class="box-title">Add Class</h3>
			  <span>
				<h5> 
				<label for="error" id="error" class="text-danger"><?php echo $error;?></label>
				</h5>
				</span>
		</div>
		<?php echo form_open('reg_theclass/add'); ?>
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
								$selected = ($subject['subjectID'] == $this->input->post('subjectID')) ? ' selected="selected"' : "";
								echo '<option value="'.$subject['subjectID'].'" '.$selected.'>'.$subject['subjectCode'].'</option>';
							} 
							?>
						</select>
						<span class="text-danger"><?php echo form_error('subjectID');?></span>
					</div>
				</div>
				<div class="col-md-12">
						<label for="facultyID" class="control-label">Faculty</label>
						<div class="form-group">
							<select name="facultyID" class="form-control">
								<option value="">Select a Faculty</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userIDNo'] == $this->input->post('facultyID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['userIDNo'].'" '.$selected.'>Professor '.$user['userLN'].', '.$user['userFN'].'</option>';
								} 
								?>
							</select>
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
								echo '<option value="'.$timeslot['timeSlotID'].'" '.$selected.'>'.$timeslot['dayOfWeek'].' '.$timeslot['startTime'].' - '.$timeslot['endTime'].' </option>';
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
					<select name="semester" class="form-control">
								<option value="">Select a Semester</option>
								<?php 
								$semester_values = array(
									'1ST'=>'1ST Semester',
									'2ND'=>'2ND Semester',
								);

								foreach($semester_values as $value => $display_text)
								{
									$selected = ($value == $this->input->post('semester')) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select>
						<span class="text-danger"><?php echo form_error('semester');?></span>
					</div>
				</div>
				<div class="col-md-12">
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
		<div class="col-md-6">
		<span>
		<h4>Student Count: 
		<label for="studcount" id="studcount" class="control-label"></label>
		</h4>
		</span>
		</div>
		<div class="box-body">
		<table id="tableresult" name="tableresult" class="table table-striped">
		<thead>
		<tr>
			<th>ClassListID</th>
			<th>StudentID</th>
			<th>Name</th>
			<th>DateAdded</th>
			<th>Actions</th>
		</tr>
		</thead>
		
		<tbody id="showdata">
		
		</tbody>
		
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
showAllClasses();

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
			url: "<?php echo base_url(); ?>reg_theclass/autocomplete/",
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
				if (idnum.length === 0)
				{
					alert("Please provide an ID number");
				}
				else {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url(); ?>reg_theclass/insert/",
                    data: {"idnum": idnum},
					dataType: "json",
                    success: function (data) {
						if (data[0] === 1)
						{
						alert("Student successfully added");
						showAllClasses();
						// $('#search_data').val(' ');
						// $('#autoSuggestionsList').hide();  
						}
						else if (data[0] === 2)
						{
							alert("Student already exist!");
						}
						else if (data[0] === 3)
						{
							alert("Not a valid ID number");
						}
                    },
					error: function response() {
						alert("Could not add data");
					}
						
                });

				}
            });
	function showAllClasses(){
			$.ajax({
				type: 'ajax',
				url: '<?php echo base_url() ?>reg_theclass/showAllClasses/',
				async: false,
				dataType: 'json',
				success: function(data){
					var html = '';
					var i;
					var result = data['result'];
					for(i=0; i<result.length; i++){
						html +='<tr>'+
									'<td>'+result[i].classListID+'</td>'+
									'<td>'+result[i].studentID+'</td>'+
									'<td>'+result[i].userName+'</td>'+
									'<td>'+result[i].dateAdded+'</td>'+
									'<td>'+
										'<a href="javascript:;" class="btn btn-danger item-delete" data="'+result[i].id+'">Delete</a>'+
									'</td>'+
							    '</tr>';
					}
					$('#showdata').html(html);
					$('#studcount').html(data['count']);
				},
				error: function(){
					alert('Could not get Data from Database');
				}
			});
		}
</script>
<!-- end (JS code) -->