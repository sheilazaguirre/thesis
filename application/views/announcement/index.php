<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Announcements</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('announcement/add'); ?>" class="btn btn-success btn-sm">Add Announcment</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                <thead>
                    <tr>
						<th>Announcement ID</th>
						<th>User ID</th>
						<th>Title</th>
						<th>File</th>
						<th>Detail</th>
						<th>Announcement Date</th>
						<th>Date Uploaded</th>
						<th>Date Modified</th>
						<th>Date Expiry</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($announcements as $a){ ?>
                    <tr>
						<td><?php echo $a['announceID']; ?></td>
						<td><?php echo $a['userID']; ?></td>
						<td><?php echo $a['announceTitle']; ?></td>
						<td><?php echo $a['announceFile']; ?></td>
						<td><?php echo $a['announceDetail']; ?></td>
						<td><?php echo $a['announceDate']; ?></td>
						<td><?php echo $a['dateUploaded']; ?></td>
						<td><?php echo $a['dateModified']; ?></td>
						<td><?php echo $a['dateExpiry']; ?></td>
						<td><?php echo $a['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('announcement/edit/'.$a['announceID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('announcement/remove/'.$a['announceID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
