<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Students Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('student/add'); ?>" class="btn btn-success btn-sm">Add Student</a>
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <a href="<?php echo site_url('reports/studentlist'); ?>" class="btn btn-warning btn-sm" target="_blank">Generate Report</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="tblstudent" class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student Name</th>
                        <th>ID Number</th>
                        <th>Course</th>
                        <th>BlockID</th>
                        <th>DateAdded</th>
                        <th>DateModified</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($students as $s){ ?>
                        <tr>
                            <td><?php echo $s['studentID']; ?></td>
                            <td><?php echo $s['userFN']; ?> <?php echo $s['userLN']; ?></td>
                            <td><?php echo $s['userIDNo']; ?></td>
                            <td><?php echo $s['course']; ?></td>
                            <td><?php echo $s['blockCode']; ?></td>
                            <td><?php echo $s['dateAdded']; ?></td>
                            <td><?php echo $s['dateModified']; ?></td>
                            <td><?php echo $s['status']; ?></td>
                            <td>
                                <a href="<?php echo site_url('student/edit/'.$s['studentID']); ?>" class="btn btn-info btn-xs" onclick="confirm('Edit the Student?')"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('student/remove/'.$s['studentID']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Archive the Student?')"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>


                </table>
                                
            </div>
        </div>
    </div>
</div>
