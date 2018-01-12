<!DOCTYPE HTML>
<html>
	<head>
		<title>Block Add</title>
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
	<?php 
		$con = mysql_connect("localhost","root","");
		$db = mysql_select_db("thesis",$con);
		$get=mysql_query("SELECT subjectID FROM classes ORDER BY subjectID ASC");
	   $option = '';
		while($row = mysql_fetch_assoc($get))
	   {
		 $option .= '<option value = "'.$row['subjectID'].'">'.$row['subjectID'].'</option>';
	   }
	?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Classlist Add</h3>
            </div>
            <?php //echo form_open('classlist/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="classID" class="control-label">Theclass</label>
						<div class="form-group">
							<select name="classID" class="form-control">
								<option value="selectclass">Select Class</option>
									<?php echo $option; ?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="studentID" class="control-label">Student</label>
						<div class="form-group">
							<select name="studentID" class="form-control">
								<option value="">select student</option>
								<?php 
								foreach($all_students as $student)
								{
									$selected = ($student['studentID'] == $this->input->post('studentID')) ? ' selected="selected"' : "";

									echo '<option value="'.$student['studentID'].'" '.$selected.'>'.$student['userID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="midtermGrade" class="control-label"><span class="text-danger">*</span>MidtermGrade</label>
						<div class="form-group">
							<input type="text" name="midtermGrade" class="form-control" id="midtermGrade" />
							<span class="text-danger"><?php echo form_error('midtermGrade');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="finalGrade" class="control-label"><span class="text-danger">*</span>FinalGrade</label>
						<div class="form-group">
							<input type="text" name="finalGrade" class="form-control" id="finalGrade" />
							<span class="text-danger"><?php echo form_error('finalGrade');?></span>
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