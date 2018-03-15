<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");

	$count = "SELECT COUNT(*) FROM users WHERE userTypeID = '3' AND status ='Active'";
	$query = "SELECT userIDNo,userFN, userLN, courseID FROM users WHERE userTypeID = '3' AND status ='Active' ORDER BY userLN ASC";


	$countresult = mysqli_query($db, $count);
	$studentcount = mysqli_fetch_array($countresult);
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Student Report</title>
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/lux.css')?>">
	</head>
	<body>
	<div id="wrap">
		<div>
			<p class="text-center"><img src="images/logo.png"></p>
			<h3 style="color:#80091F" class="text-center">Governor Andres Pascual College</h3>
			<p class="text-center">1045 M. Naval St, City of Navotas, 1485 Metro Manila</p>
			<p class="text-center">(02) 282 9035</p>
			<br>
			<h3 class="text-center">Student List</h3>
			<h4 class="text-center">Year: <?php echo date("Y"); ?></h4>
			<br>
			<p><?php echo "Total Number of Students: " .$studentcount[0].""; ?> </p>
			<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                    	<th bgcolor="#80091F" style="color: #fff;">ID Number</th>
                        <th bgcolor="#80091F" style="color: #fff;">Name</th>
                        <th bgcolor="#80091F" style="color: #fff;">Course</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['userFN'];
						$ln = $row['userLN'];
						$course = $row['courseID'];
						$uid = $row['userIDNo'];

						echo "<tr>";
						echo "<td style='color: black;'>".$uid."</td>";
						echo "<td style='color: black;'>".$ln.", ".$fn."</td>";
						echo "<td style='color: black;'>".$course."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
			<br>
			<img src="images/signature.png">
		</div>
	</body>
</html>