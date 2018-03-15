<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$count = "SELECT COUNT(*) FROM users WHERE userTypeID = '2' AND status ='Active'";
	$query = "SELECT userIDNo,userFN, userLN, age FROM users WHERE userTypeID = '2' AND status ='Active'";
	$results = mysqli_query($db, $query);

	$countresult = mysqli_query($db, $count);
	$facultycount = mysqli_fetch_array($countresult);
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Faculty Report</title>
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/lux.css')?>">
	</head>
	<div id="wrap">
		<div>
			<p class="text-center"><img src="images/logo.png"></p>
			<h3 style="color:#80091F" class="text-center">Governor Andres Pascual College</h3>
			<p class="text-center">1045 M. Naval St, City of Navotas, 1485 Metro Manila</p>
			<p class="text-center">(02) 282 9035</p>
			<br>
			<h3 class="text-center">Faculty List</h3>
			<h4 class="text-center">Year: <?php echo date("Y"); ?></h4>
			<br>
			<p><?php echo "Total Number of Faculty: " .$facultycount[0].""; ?> </p>
			<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                    	<th bgcolor="#80091F" style="color: #fff;">ID Number</th>
                        <th bgcolor="#80091F" style="color: #fff;">Name</th>
                        <th bgcolor="#80091F" style="color: #fff;">Age</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$fn = $row['userFN'];
						$ln = $row['userLN'];
						$age = $row['age'];
						$uid = $row['userIDNo'];

						echo "<tr>";
						echo "<td style='color: black;'>".$uid."</td>";
						echo "<td style='color: black;'>".$ln.", ".$fn."</td>";
						echo "<td style='color: black;'>".$age."</td>";
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