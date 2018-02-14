<?php
	// include 'config.php';
	// $query = "SELECT cl.classlistID, b.blockCode, CONCAT(u.userLN,', ', u.userFN) as userName, cl.midtermGrade, cl.finalGrade FROM classList cl
	// 					INNER JOIN students s ON cl.studentID = s.studentID
	// 					INNER JOIN blocks b ON s.blockID = b.blockID
	// 					INNER JOIN users u ON s.userID = u.userID";

	// $result = $con->query($query) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Faculty</title>

		<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="css/header-user-student.css">
		<link rel="stylesheet" href="css/footer-student.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="assets/xstyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
				rel="stylesheet" />
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

<header class="header-user-dropdown">

	<div class="header-limiter">
		<h1><a href="#">GAPC</a></h1>

		<nav>
			<a class="dropbtn" href="facultyhearderfooter-Home.php">Home</a>
			<a class="dropbtn" href="facultyheaderfooter-LessonVIEW.php">Lecture</a>
			<a class="dropbtn" href="facultyheaderfooter-AssignmentsVIEW.php">Assignments</a>
			<a class="dropbtn" href="facultyheaderfooter-sched.php">Schedule</a>
			<a class="dropbtn" href="facultyheaderfooter-grades.php">EncodeGrades</a>
		</nav>


		<div class="header-user-menu">
			<img src="assets/3.png" alt="User Image"/>

			<ul>
				<li><a href="#">Account</a></li>
				<li><a href="#" class="highlight">Logout</a></li>
			</ul>
		</div>

	</div>

</header>

<!-- The content of your page would go here. -->
<div class="menu">

	<body>

		<div id="wrap">
			<div class="container">
            <h3>Grades Encoding</h3>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
					<thead>
						<tr>
							<th bgcolor="#a9404d">Classlist ID</th>
							<th bgcolor="#a9404d">Section</th>
							<th bgcolor="#a9404d">Student Name</th>
							<th bgcolor="#a9404d">Midterm Grade</th>
							<th bgcolor="#a9404d">Final Grade</th>
							<th bgcolor="#a9404d">Options</th>
							
						</tr>
					</thead>
					<tbody>
						<?php
							while ($row = mysqli_fetch_array($result))
							{
								$no = $row['classlistID'];
								$section = $row['blockCode'];
								$sn = $row['userName'];
								$mg = $row['midtermGrade'];
								$fg = $row['finalGrade'];

								echo 
									"<tr>
										<td>" .$no . "</td>
										<td>" .$section . "</td>
										<td>" .$sn . "</td>
										<td> <select name='midterm' id='midterm'>
											<option>" .$mg . "</option>
											<option value='1'>1.0</option>
											<option value='1.25'>1.25</option>
											<option value='1.50'>1.50</option>
											<option value='1.75'>1.75</option>
											<option value='2'>2.0</option>
											<option value='2.25'>2.25</option>
											<option value='2.50'>2.50</option>
											<option value='2.75'>2.75</option>
											<option value='3'>3.0</option>
											<option value='4'>4.0</option>
										</select></td>
									<td> <select name='final' id='final'>
										<option>" .$fg . "</option>
										<option value='1'>1.0</option>
										<option value='1.25'>1.25</option>
										<option value='1.50'>1.50</option>
										<option value='1.75'>1.75</option>
										<option value='2'>2.0</option>
										<option value='2.25'>2.25</option>
										<option value='2.50'>2.50</option>
										<option value='2.75'>2.75</option>
										<option value='3'>3.0</option>
										<option value='4'>4.0</option>
									</select></td>
										<td>
										<a href='facultyheaderfooter-gradesEdit.php?no=" . $no . "' type='button' class='btn btn-info'>
										<i class='fa fa-edit'>
										</i>
										</a>
										</td>
									</tr>";
							}
						?>
					</tbody>
					
				</table>
				 <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger btn-lg">Back</button>
              </div>
			</div>
		</div>

<!--                                         -->





<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

	$(document).ready(function() {

        var userID;

        $("#userID").change(function() {
            userID = $(this).val();
            $.get('<?php echo site_url();?>student/findcourse/' + userID, function(data) {
                console.log(data);
                $('#course').html(data);
                $('#loader').slideUp(200, function() {
                    $(this).remove();
                });
            });
        });

    });
</script>

</script>
<footer class="footer-distributed">

      <div class="footer-left">

        <p class="footer-links">
          <a href="#">FAQ</a>
          ·
          <a href="#">Vision</a>
          ·
          <a href="#">Mission</a>
        </p>

        <p class="footer-company-name">Governor Andres Pascual College &copy; 2017</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span></p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p></p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com"></a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

      </div>

    </footer>




</body>

</html>
