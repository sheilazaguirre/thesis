<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Users Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>UserID</th>
						<th>UserTypeID</th>
						<th>Status</th>
						<th>Gender</th>
						<th>UserPassword</th>
						<th>UserIDNo</th>
						<th>UserLN</th>
						<th>UserFN</th>
						<th>UserEmail</th>
						<th>UserMobile</th>
						<th>Birthdate</th>
						<th>Age</th>
						<th>Civstat</th>
						<th>Nationality</th>
						<th>Religion</th>
						<th>Elemschool</th>
						<th>Secschool</th>
						<th>Tertchool</th>
						<th>Guardian</th>
						<th>Relation</th>
						<th>Fathername</th>
						<th>Fatherocc</th>
						<th>Mothername</th>
						<th>Motherocc</th>
						<th>Birthplace</th>
						<th>Addcity</th>
						<th>Addprovince</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($users as $u){ ?>
                    <tr>
						<td><?php echo $u['userID']; ?></td>
						<td><?php echo $u['userTypeID']; ?></td>
						<td><?php echo $u['status']; ?></td>
						<td><?php echo $u['gender']; ?></td>
						<td><?php echo $u['userPassword']; ?></td>
						<td><?php echo $u['userIDNo']; ?></td>
						<td><?php echo $u['userLN']; ?></td>
						<td><?php echo $u['userFN']; ?></td>
						<td><?php echo $u['userEmail']; ?></td>
						<td><?php echo $u['userMobile']; ?></td>
						<td><?php echo $u['birthdate']; ?></td>
						<td><?php echo $u['age']; ?></td>
						<td><?php echo $u['civstat']; ?></td>
						<td><?php echo $u['nationality']; ?></td>
						<td><?php echo $u['religion']; ?></td>
						<td><?php echo $u['elemschool']; ?></td>
						<td><?php echo $u['secschool']; ?></td>
						<td><?php echo $u['tertchool']; ?></td>
						<td><?php echo $u['guardian']; ?></td>
						<td><?php echo $u['relation']; ?></td>
						<td><?php echo $u['fathername']; ?></td>
						<td><?php echo $u['fatherocc']; ?></td>
						<td><?php echo $u['mothername']; ?></td>
						<td><?php echo $u['motherocc']; ?></td>
						<td><?php echo $u['birthplace']; ?></td>
						<td><?php echo $u['addcity']; ?></td>
						<td><?php echo $u['addprovince']; ?></td>
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
