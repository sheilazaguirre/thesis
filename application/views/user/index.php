<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">List of Users</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add User</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="userTable" class="table table-striped">
                <thead>
                    <tr>
						<th>ID#</th>
						<th>UserType</th>
						<th>User ID No.</th>
						<th>Last Name</th>
						<th>First Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>Mobile Number</th>
						<th>Status</th>
						<th>Actions</th>
                    </tr>
                </thead>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['userID']; ?></td>
						<td><?php echo $u['userTypeID']; ?></td>
						<td><?php echo $u['userIDNo']; ?></td>
						<td><?php echo $u['userLN']; ?></td>
						<td><?php echo $u['userFN']; ?></td>
						<td><?php echo $u['userEmail']; ?></td>
						<td><?php echo $u['userPassword']; ?></td>
						<td><?php echo $u['userMobile']; ?></td>
						<td><?php echo $u['status']; ?></td>
						<td>
                            <a href="<?php echo site_url('user/edit/'.$u['userID']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('user/remove/'.$u['userID']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
