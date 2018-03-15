<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$query = "SELECT userLN, userFN, userMobile, userEmail, age, gender, userTypeID FROM users ORDER BY userLN ASC";
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>User Report</title>
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
			<h3 class="text-center">List of Users</h3>
			<br>
        	</div>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                        <th bgcolor="#80091F" style="color: #fff;">Name</th>
                        <th bgcolor="#80091F" style="color: #fff;">Email Address</th>
                        <th bgcolor="#80091F" style="color: #fff;">Age</th>
                        <th bgcolor="#80091F" style="color: #fff;">Gender</th>
                        <th bgcolor="#80091F" style="color: #fff;">Mobile Number</th>
                        <th bgcolor="#80091F" style="color: #fff;">User Type</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['userFN'];
						$ln = $row['userLN'];
						$mail = $row['userEmail'];
						$age = $row['age'];
						$gender = $row['gender'];						
						$mobile = $row['userMobile'];
						$type = $row['userTypeID'];
						

						echo "<tr>";
						echo "<td>".$ln.", ".$fn."</td>";
						echo "<td>".$mail."</td>";
						echo "<td>".$age."</td>";
						echo "<td>".$gender."</td>";
						echo "<td>".$mobile."</td>";
						echo "<td>".$type."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
		</div>
	</body>
</html>