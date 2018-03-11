<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Faculty</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('faculty/add'); ?>" class="btn btn-success btn-sm">Add Faculty</a> 
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <a href="<?php echo site_url('reports/facultylist'); ?>" class="btn btn-warning btn-sm" target="_blank">Generate Report</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="facultyTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Faculty Name</th>
						<th>Subject</th>
						<th>Remarks</th>
						<th>Actions</th>
                    </tr>
                </thead>

                    <tbody>
                    <?php foreach($faculty as $f){ ?>
                        <tr>
                            <td><?php echo $f['facultyID']; ?></td>
                            <td><?php echo $f['userFN']; ?> <?php echo $f['userLN']; ?></td>
                            <td><?php echo $f['subjectCode']; ?></td>
                            <td><?php echo $f['remarks']; ?></td>
                            <td>
                                <a href="<?php echo site_url('faculty/remove/'.$f['facultyID']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Delete the Facuty?')"><span class="fa fa-trash"></span> Remove</a>
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
