<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Classes Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('class/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Subject Code</th>
						<th>FacultyID</th>
						<th>TimeSlotID</th>
						<th>VenueID</th>
						<th>AcademicYear</th>
						<th>Semester</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($classes as $c){ ?>
                    <tr>
						<td><?php echo $c['classID']; ?></td>
						<td><?php echo $c['subjectCode']; ?></td>
						<td><?php echo $c['facultyID']; ?></td>
						<td><?php echo $c['timeSlotID']; ?></td>
						<td><?php echo $c['venueID']; ?></td>
						<td><?php echo $c['academicYear']; ?></td>
						<td><?php echo $c['semester']; ?></td>
						<td><?php echo $c['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('class/edit/'.$c['classID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('class/remove/'.$c['classID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
