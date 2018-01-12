<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Add</title>
		<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="css/header-user-student.css">
		<link rel="stylesheet" href="css/footer-student.css">
		<link href="http://bootswatch.com/spacelab/bootstrap.min.css" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="assets/xstyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
	</head>
	<body>

	<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="registrar-home.html">GAPC</a></h1>

		<nav>
		<a href="registrar-home.html">Home</a>
	  	<a href="registrar-classview.php">Student Class</a>
      	<a href="registrar-studentview.php">Student Records</a>
      	<a href="registrar-facultyview.php">Faculty</a>
      	<a href="registrar-announcementview.php">Announcements</a>
      	<a href="registrar-blockview.php">Block</a>
		</nav>


		<div class="header-user-menu">
			<img src="assets/3.png" alt="User Image"/>

			<ul>
				<li><a href="edit-information.html">Edit Info</a></li>
				<li><a href="#" class="highlight">Logout</a></li>
			</ul>
		</div>

	</div>

	</header>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Student Add</h3>
            </div>
            <!--<?php echo form_open('student/add'); ?>-->
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label">User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">select user</option>
								<?php 
								foreach($all_users as $user)
								{
									$selected = ($user['userID'] == $this->input->post('userID')) ? ' selected="selected"' : "";

									echo '<option value="'.$user['userID'].'" '.$selected.'>'.$user['userFN'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="blockID" class="control-label"><span class="text-danger">*</span>Block</label>
						<div class="form-group">
							<select name="blockID" class="form-control">
								<option value="">select block</option>
								<?php 
								foreach($all_blocks as $block)
								{
									$selected = ($block['blockID'] == $this->input->post('blockID')) ? ' selected="selected"' : "";

									echo '<option value="'.$block['blockID'].'" '.$selected.'>'.$block['blockCode'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('blockID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="course" class="control-label"><span class="text-danger">*</span>Course</label>
						<div class="form-group">
							<input type="text" name="course" value="<?php echo $this->input->post('course'); ?>" class="form-control" id="course" />
							<span class="text-danger"><?php echo form_error('course');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="major" class="control-label"><span class="text-danger">*</span>Major</label>
						<div class="form-group">
							<input type="text" name="major" value="<?php echo $this->input->post('major'); ?>" class="form-control" id="major" />
							<span class="text-danger"><?php echo form_error('major');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
</body>
</html>