<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$query = "SELECT * FROM classes c LEFT JOIN subjects s ON s.`subjectID` = c.`subjectID` LEFT JOIN users u ON u.`userIDNo` = c.`facultyID` LEFT JOIN venues v ON v.`venueID` = c.`venueID` LEFT JOIN timeslots t ON t.`timeSlotID` = c.`timeSlotID` WHERE c.status = 'Active'";
	$results = mysqli_query($db, $query);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Classlist Report</title>
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
			<h3 class="text-center">List of Classes</h3>
			<h4 class="text-center">Year: <?php echo date("Y"); ?></h4>
			<br>
        	</div>
				<table cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
				<thead>
                    <tr>
                        <th bgcolor="#80091F" style="color: #fff;">ID</th>
                        <th bgcolor="#80091F" style="color: #fff;">Subject Code</th>
                        <th bgcolor="#80091F" style="color: #fff;">Faculty ID</th>
                        <th bgcolor="#80091F" style="color: #fff;">Timeslot</th>
                        <th bgcolor="#80091F" style="color: #fff;">Venue</th>
                        <th bgcolor="#80091F" style="color: #fff;">Academic Year</th>
                        <th bgcolor="#80091F" style="color: #fff;">Semester</th>
                    </tr>
                </thead>
                <tbody>
				<?php
					while ($row = mysqli_fetch_array($results))
					{
						$id = $row['classID'];
						$code = $row['subjectCode'];
						$fac = $row['facultyID'];
						$tim = $row['timeSlotID'];
						$ven = $row['venueID'];
						$acad = $row['academicYear'];
						$sem = $row['semester'];
						
						echo "<tr>";
						echo "<td style='color: black;'>".$id."</td>";
						echo "<td style='color: black;'>".$code."</td>";
						echo "<td style='color: black;'>".$fac."</td>";
						echo "<td style='color: black;'>".$tim."</td>";
						echo "<td style='color: black;'>".$ven."</td>";
						echo "<td style='color: black;'>".$acad."</td>";
						echo "<td style='color: black;'>".$sem."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</div>
		</div>
	</body>
</html>