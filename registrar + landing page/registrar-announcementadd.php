<!DOCTYPE HTML>
<html>
	<head>
		<title>Announcement Add</title>
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
		$connection = mysql_connect("localhost", "root", "");
		$db = mysql_select_db("thesis", $connection);
		if(isset($_POST['Submit'])){

			$user = $_POST['userID'];
			$title = $_POST['announceTitle'];
			$file = $_POST['filename'];
			$details = $_POST['announceDetail'];
			$date = $_POST['announceDate']
			
			if($title !=''||$details !='' || $date !=''){
				$query = mysql_query("insert into announcements(announceTitle, announceFile, announceDetail, announceDate, dateAdded) values ('$user', '$title', '$file', '$detials', '$date', 'now()')");
				echo "<br/><br/><span>Data Inserted successfully...!!</span>";
			}
			else{
				echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
			}
		}
		mysql_close($connection);
	?>
<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Announcement Add</h3>
            </div>
            <!--<?php echo form_open('announcement/add'); ?>-->
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="userID" class="control-label"><span class="text-danger">*</span>User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">select user</option>
									<?php
										$sql = "SELECT userID FROM users";
										$result=mysqli_query($con,$sql);
										while($row=mysqli_fetch_array($result))
											echo "<option value='" . $row['userID'] . "'>""</option>";
									?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceTitle" class="control-label"><span class="text-danger">*</span>Announce Title</label>
						<div class="form-group">
							<input type="text" name="announceTitle" class="form-control" id="announceTitle" />
							<span class="text-danger"><?php echo form_error('announceTitle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceFile" class="control-label"><span class="text-danger">*</span>Announce File</label>
						<div class="form-group">
							<input type="file" name="filename" size="20" class="form-control" id="announceFile" />
							<span class="text-danger"><?php if (isset($error)) { echo $error; } ?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceDetail" class="control-label"><span class="text-danger">*</span>Announce Detail</label>
						<div class="form-group">
							<input type="text" name="announceDetail" class="form-control" id="announceDetail" />
							<span class="text-danger"><?php echo form_error('announceDetail');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="announceDate" class="control-label"><span class="text-danger">*</span>Announce Date</label>
						<div class="form-group">
							<input type="text" name="announceDate" class="form-control" id="announceDate" />
							<span class="text-danger"><?php echo form_error('announceDate');?></span>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success" name="Submit">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>
</body>
</html>