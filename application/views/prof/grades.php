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
						<h3 align="center"><b>Prelims</b></h3>
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
						<tr class="student1">
							<td>11810001</td>
							<td>Blake, Ian V.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student2">
							<td>11810002</td>
							<td>Sanchez, Victoria L.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student3">
							<td>11810003</td>
							<td>Go, Troy T.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student4">
							<td>11810004</td>
							<td>Ong, Beper C.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student5">
							<td>11810005</td>
							<td>Zaguirre, Sheila P.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student6">
							<td>11810006</td>
							<td>Pascual, Shaun G.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student7">
							<td>11810007</td>
							<td>Villanueva, Miko G.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea rows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student8">
							<td>11810008</td>
							<td>Blake, Ian V.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student9">
							<td>11810009</td>
							<td>James, Lebron B.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student10">
							<td>11810010</td>
							<td>Santos, Julienne L.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student11">
							<td>11810011</td>
							<td>Comia, Ralph G.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student12">
							<td>11810012</td>
							<td>Valmeo, Biance T.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student13">
							<td>11810013</td>
							<td>Talimban, Bea S.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student14">
							<td>11810014</td>
							<td>Estera, Gian B.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student15">
							<td>11810015</td>
							<td>Tuazon, Paul M.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student16">
							<td>11810016</td>
							<td>Hernando, Alexa S.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student17">
							<td>11810017</td>
							<td>Remulla, JIonna O.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student18">
							<td>11810018</td>
							<td>Su, Samantha S.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student19">
							<td>11810019</td>
							<td>Magsaysay, Joseph S.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student20">
							<td>11810020</td>
							<td>Filipinas, Luzviminda A.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student21">
							<td>11810021</td>
							<td>Bryant, Kobe L.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student22">
							<td>11810022</td>
							<td>Irving, Kyrie C.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student23">
							<td>11810023</td>
							<td>Durant, Kevin T.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student24">
							<td>11810024</td>
							<td>Westbrook, Rusell T.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student25">
							<td>11810025</td>
							<td>Curry, Stephen W.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student26">
							<td>11810026</td>
							<td>Thompson, Klay W.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student27">
							<td>11810027</td>
							<td>Lucid, Shannon, W.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student28">
							<td>11810028</td>
							<td>Pascal, Blaise K.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student29">
							<td>11810029</td>
							<td>Elion, Gertrude B.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>
						<tr class="student30">
							<td>11810030</td>
							<td>Barton, Jacqueline K.</td>
							<td>
								<select required>
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
									<option value="w">W</option>
									<option value="x">X</option>
									<option value="inc">INC</option>
								</select></td>
							<td><textarea Srows="2" id="remarks"></textarea></td>
							
						</tr>

					</tbody>
					
				</table>
				
				<div class="form-group">
          <div class="col-md-12 text-right">
						<button type="sumbit" class="btn btn-success btn-lg">Save</button>
						<button type="sumbit" class="btn btn-info btn-lg">Submit</button>
            <button type="submit" class="btn btn-danger btn-lg">Back</button>
          </div>
			</div>
		</div>

<!--                                         -->





<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

// <script>

// 	$(document).ready(function(){

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

// 	});

// </script>
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