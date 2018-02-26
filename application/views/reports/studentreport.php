<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");

	$count = "SELECT COUNT(*) FROM users WHERE userTypeID = '1' AND status ='Active'";
	$query = "SELECT userIDNo,userFN, userLN FROM users WHERE userTypeID = '1' AND status ='Active'";

	$countresult = mysqli_query($db, $count);
	$studentcount = mysqli_fetch_array($countresult);
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
			<h3 class="text-center">Student List</h3>
			<br>
			<p><?php echo "Total Number of Students: " .$studentcount[0].""; ?> </p>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['userFN'];
						$ln = $row['userLN'];
						$uid = $row['userIDNo'];

						echo "<hr>";
						echo "<div class='well col-lg-12'>";
						echo "<h5>ID: ".$uid."</h5>";
						echo "<h5>Name: ".$fn." ".$ln."</h5>";
						echo "</div>";
						echo "<br>";
					}
				?>
			<br>
			<img src="images/signature.png">
		</div>
	</body>
</html>