<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Usertypes</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usertype/add'); ?>" class="btn btn-success btn-sm">Add Usertype</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="usertypeTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>User Type</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($usertype as $u){ ?>
                    <tr>
						<td><?php echo $u['userTypeID']; ?></td>
						<td><?php echo $u['userType']; ?></td>
						<td>
                            <a href="<?php echo site_url('usertype/edit/'.$u['userTypeID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('usertype/remove/'.$u['userTypeID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
