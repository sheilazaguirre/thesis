<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Auditlogs</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('auditlog/add'); ?>" class="btn btn-success btn-sm">Add AuditLog</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="auditTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Name</th>
						<th>Descripton</th>
						<th>Timestamp</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($auditlogs as $a){ ?>
                    <tr>
						<td><?php echo $a['auditID']; ?></td>
						<td><?php echo $a['userFN']; ?> <?php echo $a['userLN']; ?></td>
						<td><?php echo $a['auditDesc']; ?></td>
						<td><?php echo $a['timestamp']; ?></td>
						<td><?php echo $a['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('auditlog/edit/'.$a['auditID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('auditlog/remove/'.$a['auditID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
