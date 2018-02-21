<!DOCTYPE html>
<html>
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Faculty</title>

		<!-- <link rel="stylesheet" href="assets/demo.css"> -->
		<link rel="stylesheet" href="<?php echo site_url('css/header-user-student.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('css/footer-student.css');?>">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- <link rel="stylesheet" href="assets/xstyle.css"> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>



	</head>

	<body>
		<?php echo form_open('prof/grades'); ?>

		<header class="header-user-dropdown">

			<div class="header-limiter">
				<h1>
					<a href="#">GAPC</a>
				</h1>

				<nav>
					<a class="dropbtn" href="facultyhearderfooter-Home.php">Home</a>
					<a class="dropbtn" href="facultyheaderfooter-LessonVIEW.php">Lecture</a>
					<a class="dropbtn" href="facultyheaderfooter-AssignmentsVIEW.php">Assignments</a>
					<a class="dropbtn" href="facultyheaderfooter-sched.php">Schedule</a>
					<a class="dropbtn" href="facultyheaderfooter-grades.php">EncodeGrades</a>
				</nav>


				<div class="header-user-menu">
					<img src="assets/3.png" alt="User Image" />

					<ul>
						<li>
							<a href="#">Account</a>
						</li>
						<li>
							<a href="#" class="highlight">Logout</a>
						</li>
					</ul>
				</div>

			</div>

		</header>

		<!-- The content of your page would go here. -->
		<div class="menu">

			<div id="wrap">
				<div class="container">
					<h3>Grades Encoding</h3>
					<br/>

					<div class="container">
						<div class="col-md-6">
							<h5>Faculty: Salvador, Ronaldo</h5>
							<h5>Subject: Fil 1</h5>
							<h5>Section: TI001</h5>
							<h5>Year: 1st Year</h5>
						</div>
						<div class="col-md-6">
							<h5>SY: 2017-2018</h5>
							<h5>Venue: D405</h5>
							<h5>Schedule: MW 11:20 - 12:50</h5>
						</div>
					</div>
					<h3 align="center">
						<b>Prelims</b>
					</h3>
					<hr/>
					<table id="name" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
						<thead>
							<tr>
								<th bgcolor="#a9404d">Student ID</th>
								<th bgcolor="#a9404d">Student Name</th>
								<th bgcolor="#a9404d">Grade</th>
								<th bgcolor="#a9404d">Remarks</th>

							</tr>
						</thead>
						<tbody>
						
							<?php foreach($classlist as $c){ ?>
							<tr>
								<td>
									<p><?php echo $c['studentID']; ?></p>
								</td>
								<td>
									<?php echo $c['userName']; ?>
								</td>
								<input type="hidden" name="clID[<?php echo $c['classlistID']?>]" value="<?php echo $c['classlistID']?>"/>
								<input type="hidden" name="classid" value="<?php echo $c['classID']?>"/>
								<input type="hidden" name="sid[<?=$c['classlistID']?>]" value="<?php echo $c['studentID']?>"/>
								
								<td>
									<select name="grade[<?=$c['classlistID']?>]">
										<option value="<?=$c["grade[<?=$c['classlistID']?>]"]?>"
										<option value="">Select Grade</option>
										<option value="1">1.0</option>
										<option value="1.25">1.25</option>
										<option value="1.50">1.50</option>
										<option value="1.75">1.75</option>
										<option value="2">2.0</option>
										<option value="2.25">2.25</option>
										<option value="2.50">2.50</option>
										<option value="2.75">2.75</option>
										<option value="3">3</option>
										<option value="4">4.0</option>
										<option value="W">W</option>
										<option value="X">X</option>
										<option value="inc">Incomplete</option>
									</select>
									<br/>
								</td>
								<td>
									<textarea rows="2" name="remarks[<?=$c['classlistID']?>]"></textarea>
								</td>

							</tr>
							<?php }?>
						</tbody>

					</table>

					<div class="form-group">
						<div class="col-md-2 left">
							<p><b>Legend:</b><br/>
							1.0 - <br/>
							1.25 - <br/>
							1.50 - <br/>
							1.75 - <br/>
							2.0 - <br/>
							2.25 - <br/>
							2.50 - <br/>
							</p>
						</div>
						<div class="col-md-3 right">
							<p><b>Legend:</b><br/>
							2.75 - <br/>
							3.0 - <br/>
							4.0 - For Midterm Only<br/>
							5.0 - For Finals Only<br/>
							W - Withdraw <br/>
							X - Absent from the Final Exam <br/>
							INC - Incomplete <br/>
							</p>
						</div>
					</div>
					

					<div class="form-group">
						<div class="col-md-12 text-right">
							<button type="submit" class="btn btn-success" onclick='return confirm("Save?");'>
								<i class="fa fa-check"></i> Save
							</button>
						</div>
					</div>
					<!--                                         -->
				</div>
			</div>


			<script>
				$(document).ready(function(){
					$('.check').click(function() {
						$('.check').not(this).prop('checked', false);
					});
				});
			</script>

			<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

			<!-- // <script> -->

			<!-- // 	$(document).ready(function(){

		// 		var userMenu = $('.header-user-dropdown .header-user-menu');

		// 		userMenu.on('touchend', function(e){

		// 			userMenu.addClass('show');

		// 			e.preventDefault();
		// 			e.stopPropagation();

		// 		});

		// 		// This code makes the user dropdown work on mobile devices

		// 		$(document).on('touchend', function(e){

		// 			// If the page is touched anywhere outside the user menu, close it
		// 			userMenu.removeClass('show');

		// 		});

		// 	}); -->

			<!-- // </script> -->
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
						<p>
							<span>
						</p>
					</div>

					<div>
						<i class="fa fa-phone"></i>
						<p></p>
					</div>

					<div>
						<i class="fa fa-envelope"></i>
						<p>
							<a href="mailto:support@company.com"></a>
						</p>
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