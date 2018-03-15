<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$query = "SELECT apfn, apln, courseID, email, mobile, age, gender FROM applicant WHERE studentstat != 'Approved'";
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Applicant Report</title>
		<link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
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
			<h3 class="text-center">List of Applicants</h3>
			<br>
        	</div>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                        <th bgcolor="#80091F" style="color: #fff;">Name</th>
                        <th bgcolor="#80091F" style="color: #fff;">Course</th>
                        <th bgcolor="#80091F" style="color: #fff;">Age</th>
                        <th bgcolor="#80091F" style="color: #fff;">Gender</th>
                        <th bgcolor="#80091F" style="color: #fff;">Email Address</th>
                        <th bgcolor="#80091F" style="color: #fff;">Mobile Number</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['apfn'];
						$ln = $row['apln'];
						$course = $row['courseID'];
						$age = $row['age'];
						$gender = $row['gender'];
						$mail = $row['email'];
						$mobile = $row['mobile'];
						
						echo "<tr>";
						echo "<td style='color: black;'>".$ln.", ".$fn."</td>";
						echo "<td style='color: black;'>".$course."</td>";
						echo "<td style='color: black;'>".$age."</td>";
						echo "<td style='color: black;'>".$gender."</td>";
						echo "<td style='color: black;'>".$mail."</td>";
						echo "<td style='color: black;'>".$mobile."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
		</div>
	</body>
</html>