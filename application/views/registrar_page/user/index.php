<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reg_user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
                <div style="text-align: right; margin-top: 10px;">
                    <a href="<?php echo site_url('reports/userlist'); ?>" class="btn btn-warning btn-sm" target="_blank">Generate Report</a> 
                </div>
            </div>
            <div class="box-body">
                <table id="tbuser" class="table table-striped datatable">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>User Type</th>
                        <th>Gender</th>
                        <th>ID No</th>
                        <th>User Name</th>
                        <th>Email Address</th>
                        <th>Mobile Number</th>
                        <th>Age</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($users as $u){ ?>
                        <tr>
                            <td><?php echo $u['userID']; ?></td>
                            <td><?php echo $u['userType']; ?></td>
                            <td><?php echo $u['gender']; ?></td>
                            <td><?php echo $u['userIDNo']; ?></td>
                            <td><?php echo $u['userFN']; ?> <?php echo $u['userLN']; ?></td>
                            <td><?php echo $u['userEmail']; ?></td>
                            <td><?php echo $u['userMobile']; ?></td>
                            <td><?php echo $u['age']; ?></td>
                            <td>
                                <a href="<?php echo site_url('reg_user/edit/'.$u['userID']); ?>" class="btn btn-info btn-xs" onclick="confirm('Edit the User?')"><span class="fa fa-pencil"></span> Edit</a>
                                <a href="<?php echo site_url('reg_user/remove/'.$u['userID']); ?>" class="btn btn-danger btn-xs" onclick="confirm('Archive the User?')"><span class="fa fa-trash"></span> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
                                
            </div>
        </div>
    </div>
</div>
