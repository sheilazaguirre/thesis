<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$count = "SELECT COUNT(*) FROM blocks WHERE status ='Active'";
	$query = "SELECT * FROM blocks WHERE status ='Active'";
	$results = mysqli_query($db, $query);

	$countresult = mysqli_query($db, $count);
	$blockcount = mysqli_fetch_array($countresult);
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Section Report</title>
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
			<h3 class="text-center">Section List</h3>
			<h4 class="text-center">Year: <?php echo date("Y"); ?></h4>
			<br>
			<p><?php echo "Total Number of Sections: " .$blockcount[0].""; ?> </p>
			<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                    	<th bgcolor="#80091F" style="color: #fff;">Block ID</th>
                        <th bgcolor="#80091F" style="color: #fff;">Block Code</th>
                        <th bgcolor="#80091F" style="color: #fff;">Status</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$bid = $row['blockID'];
						$bc = $row['blockCode'];
						$status = $row['status'];

						echo "<tr>";
						echo "<td style='color: black;'>".$bid."</td>";
						echo "<td style='color: black;'>".$bc."</td>";
						echo "<td style='color: black;'>".$status."</td>";
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