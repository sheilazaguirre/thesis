<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Venues</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('venue/add'); ?>" class="btn btn-success btn-sm">Add Venues</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="venueTable" class="table table-striped">
                <thead>
                    <tr>
						<th>Venue ID</th>
						<th>Venue Type</th>
						<th>Venue Code</th>
						<th>Venue Name</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($venues as $v){ ?>
                    <tr>
						<td><?php echo $v['venueID']; ?></td>
						<td><?php echo $v['venueType']; ?></td>
						<td><?php echo $v['venueCode']; ?></td>
						<td><?php echo $v['venueName']; ?></td>
						<td><?php echo $v['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('venue/edit/'.$v['venueID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('venue/remove/'.$v['venueID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
