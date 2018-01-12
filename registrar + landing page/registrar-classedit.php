<!DOCTYPE HTML>
<html>
	<head>
		<title>Announcement Edit</title>
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
		<div class="container">
			<h1 class="text-center">Block Edit</h1>
			<div class="col-lg-offset-3 col-lg-6 well">
				<form method="POST" class="form-horizontal">
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Class ID
						</label>
						<div class="col-lg-8">
							<input name="ln" type="text"
								class="form-control"
								 required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Student ID
						</label>
						<div class="col-lg-8">
							<input name="ln" type="text"
								class="form-control"
								 required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Midterm Grade
						</label>
						<div class="col-lg-8">
							<input name="fn" type="text"
								class="form-control"
								 required />
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-4 control-label">
							Final Grade
						</label>
						<div class="col-lg-8">
							<input name="fn" type="text"
								class="form-control"
								 required />
						</div>
					</div>
					<div class="form-group">
						<div class="col-lg-offset-4 col-lg-8">
							<button name="update"
								class="btn btn-danger">
								Update
							</button>
        					<a href="registrar-classview.php" class="btn btn-danger">
								Back
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>