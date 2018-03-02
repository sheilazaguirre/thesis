<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Prof</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('prof/add'); ?>" class="btn btn-success btn-sm">Add Prof</a> 
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
                    <?php foreach($prof as $p){ ?>
                        <tr>
                            <td><?php echo $p['profID']; ?></td>
                            <td><?php echo $p['userFN']; ?> <?php echo $p['userLN']; ?></td>
                            <td><?php echo $p['subjectCode']; ?></td>
                            <td><?php echo $p['remarks']; ?></td>
                            <td>
                                <a href="<?php echo site_url('prof/remove/'.$p['profID']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Delete this?')"><span class="fa fa-trash"></span> Remove</a>
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
