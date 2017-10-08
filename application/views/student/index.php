<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Students</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('student/add'); ?>" class="btn btn-success btn-sm">Add Student</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="studentTable" class="table table-striped">
                <thead>
                    <tr>
						<th>Student ID</th>
						<th>User ID</th>
						<th>Block ID</th>
						<th>Course</th>
						<th>Major</th>
						<th>Date Added</th>
						<th>Date Modified</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($students as $s){ ?>
                    <tr>
						<td><?php echo $s['studentID']; ?></td>
						<td><?php echo $s['userID']; ?></td>
						<td><?php echo $s['blockID']; ?></td>
						<td><?php echo $s['course']; ?></td>
						<td><?php echo $s['major']; ?></td>
						<td><?php echo $s['dateAdded']; ?></td>
						<td><?php echo $s['dateModified']; ?></td>
						<td><?php echo $s['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('student/edit/'.$s['studentID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('student/remove/'.$s['studentID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
