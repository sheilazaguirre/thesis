<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registrar</title>

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
		<h1><a href="registrar.html">GAPC</a></h1>

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

<div id="wrap">
			<div class="container">
			</br>
            <div class="col-md-6 text-left">
            <h3>Student Records</h3>
        	</div>
            <div class="col-lg-6 text-right">
                <a href="registrar-studentadd.php" class="btn btn-danger">
					Add
				</a>
            </div>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
					<thead>
						<tr>
							<th bgcolor="#a9404d">Student ID</th>
							<th bgcolor="#a9404d">Last Name</th>
							<th bgcolor="#a9404d">First Name</th>
							<th bgcolor="#a9404d">Email</th>
							<th bgcolor="#a9404d">Course</th>
							<th bgcolor="#a9404d">Major</th>
							<th bgcolor="#a9404d"></th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td align="center">
								<a href='details.php?no=" . $no . "'>
								<i class='fa fa-user-circle-o'>
								</i></a>
								<a href='delete.php?no=" . $no . "'>
								<i class='fa fa-trash'>
								</i></a>
							</td>
							
						</tr>

					</tbody>
					
				</table>
				 <div class="form-group">
              <div class="col-md-12 text-right">
                <a href="registrar-home.html" class="btn btn-danger">
					Back
				</a>
              </div>
			</div>
		</div>




<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});



	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});


</script>


</body>

</html>
