<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Classlist</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('classlist/add'); ?>" class="btn btn-success btn-sm">Add a Classlist</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="classlistTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Class ID</th>
						<th>Student ID</th>
						<th>Midterm Grade</th>
						<th>Final Grade</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($classlist as $c){ ?>
                    <tr>
						<td><?php echo $c['classListID']; ?></td>
						<td><?php echo $c['classID']; ?></td>
						<td><?php echo $c['studentID']; ?></td>
						<td><?php echo $c['midtermGrade']; ?></td>
						<td><?php echo $c['finalGrade']; ?></td>
						<td><?php echo $c['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('classlist/edit/'.$c['classListID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('classlist/remove/'.$c['classListID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
