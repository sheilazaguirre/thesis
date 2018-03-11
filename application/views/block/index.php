<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Blocks</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('block/add'); ?>" class="btn btn-success btn-sm">Add Block</a> 
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <a href="<?php echo site_url('reports/section'); ?>" class="btn btn-warning btn-sm" target="_blank">Generate Report</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="blockTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>Block Code</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($blocks as $b){ ?>
                    <tr>
						<td><?php echo $b['blockID']; ?></td>
						<td><?php echo $b['blockCode']; ?></td>
						<td><?php echo $b['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('block/edit/'.$b['blockID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('block/remove/'.$b['blockID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
