<div class="menu">

	<div id="wrap">
			<div class="container">
            <h3>Faculty - Assignments</h3>
						<div class="col-lg-6 text-right">
                <a href="facultyheaderfooter-AssignmentsUpload.php" class="btn btn-danger">
									Add
								</a>
						</div>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
					<thead>
						<tr>
							<th bgcolor="#a9404d">Assignment ID</th>
							<th bgcolor="#a9404d">Class ID</th>
							<th bgcolor="#a9404d">Assignment Title</th>
							<th bgcolor="#a9404d">Assignment Description</th>
							<th bgcolor="#a9404d">File Uploaded</th>
							<th bgcolor="#a9404d">Date Uploaded</th>
							<th bgcolor="#a9404d">Options</th>
							
						</tr>
					</thead>
					<tbody>

						<?php
							while ($row = mysqli_fetch_array($results))
							{
								$no = $row['assignID'];
								$class = $row['classID'];
								$title = $row['assignTitle'];
								$desc = $row['assignDesc'];
								$file = $row['assignFile'];
								$dateUpload = $row['dateUploaded'];

								echo 
									"<tr>
										<td>" .$no . "</td>
										<td>" .$class . "</td>
										<td>" .$title . "</td>
										<td>" .$desc . "</td>
										<td>" .$file . "</td>
										<td>" .$dateUpload . "</td>
										<td>
										<a href='facultyheaderfooter-AssignmentsEDIT.php?no=" . $no . "' type='button' class='btn btn-info'>
										<i class='fa fa-edit'>
										</i></a>
										<a onclick='return confirm('Archive Record?');' href='facultyheaderfooter-AssignmentsDelete.php?no=" . $no . " 'type='button' class='btn btn-danger'>
										<i class='fa fa-eraser'>
										</i></a>
										</td>
									</tr>";
							}
						?>
					</tbody>
					
				</table>
				 <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger btn-lg">Back</button>
              </div>
			</div>
		</div>