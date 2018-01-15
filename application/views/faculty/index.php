<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Faculty</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('faculty/add'); ?>" class="btn btn-success btn-sm">Add Faculty</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="facultyTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Faculty Name</th>
						<th>Faculty Type</th>
						<th>Min Units</th>
						<th>Max Units</th>
						<th>Date Added</th>
						<th>Date Modified</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>

                    <tbody>
                    <?php foreach($faculty as $f){ ?>
                        <tr>
                            <td><?php echo $f['facultyID']; ?></td>
                            <td><?php echo $f['userFN']; ?> <?php echo $f['userLN']; ?></td>
                            <td><?php echo $f['facultyType']; ?></td>
                            <td><?php echo $f['minUnits']; ?></td>
                            <td><?php echo $f['maxUnits']; ?></td>
                            <td><?php echo $f['dateAdded']; ?></td>
                            <td><?php echo $f['dateModified']; ?></td>
                            <td><?php echo $f['status']; ?></td>
                            <td>
                                <a href="<?php echo site_url('faculty/edit/'.$f['facultyID']); ?>" class="btn btn-info btn-xs" onclick="confirm('Edit the Faculty?')"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('faculty/remove/'.$f['facultyID']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Delete the Facuty?')"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>

                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
