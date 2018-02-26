<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$query = "SELECT apfn, apln, course, email, mobile, age, gender FROM applicant WHERE studentstat != 'Approved'";
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Report</title>
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/lux.css')?>">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
		 	rel="stylesheet" />
	</head>
	<body>
		<div>
			<p class="text-center"><img src="images/logo.png"></p>
			<h3 style="color:#80091F" class="text-center">Governor Andres Pascual College</h3>
			<p class="text-center">1045 M. Naval St, City of Navotas, 1485 Metro Manila</p>
			<p class="text-center">(02) 282 9035</p>
			<br>
			<p class="text-center">Applicant List</p>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['apfn'];
						$ln = $row['apln'];
						$course = $row['course'];
						$mail = $row['email'];
						$mobile = $row['mobile'];
						$age = $row['age'];
						$gender = $row['gender'];

						echo "<hr>";
						echo "<div class='well col-lg-12'>";
						echo "<h5>Name: ".$fn." ".$ln."</h5>";
						echo "<h5>Course: ".$course."</h5>";
						echo "<h5>Mail: ".$mail."</h5>";
						echo "<h5>Mobile: ".$mobile."</h5>";
						echo "<h5>Age: ".$age."</h5>";
						echo "<h5>Gender: ".$gender."</h5>";
						echo "</div>";
						echo "<br>";
					}
				?>
		</div>
	</body>
</html>