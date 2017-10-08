<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Subjects</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('subject/add'); ?>" class="btn btn-success btn-sm">Add Subject</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="subjectTable" class="table table-striped">
                <thead>
                    <tr>
						<th>Suject ID</th>
						<th>Subject Type</th>
						<th>Subject Code</th>
						<th>Subject Name</th>
						<th>Units</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($subjects as $s){ ?>
                    <tr>
						<td><?php echo $s['sujectID']; ?></td>
						<td><?php echo $s['subjectType']; ?></td>
						<td><?php echo $s['subjectCode']; ?></td>
						<td><?php echo $s['subjectName']; ?></td>
						<td><?php echo $s['units']; ?></td>
						<td><?php echo $s['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('subject/edit/'.$s['sujectID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('subject/remove/'.$s['sujectID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
