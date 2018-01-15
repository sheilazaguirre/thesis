<?php
	if (isset($_REQUEST['no']))
	{
		include 'config.php';
		$query = "SELECT lessonTitle, lessonDesc,
			lessonFile FROM lessons
			WHERE lessonID=" . $_REQUEST['no'];

		$results = $con->query($query);

		if (mysqli_num_rows($results) > 0)
		{

			while ($row = mysqli_fetch_array($results))
			{
				$title = $row['lessonTitle'];
				$desc = $row['lessonDesc'];
				$file = $row['lessonFile'];
			}

			if (isset($_POST['update']))
			{
			 	$title = mysqli_real_escape_string($con, $_POST['lessonTitle']);
	 			$desc = mysqli_real_escape_string($con, $_POST['lessonDesc']);
			 	$file = mysqli_real_escape_string($con, $_POST['lessonFile']);

				$query_update = "UPDATE lessons SET  
					lessonTitle='" . $title . "', 
					lessonDesc='" . $desc . "',
					lessonFile='" . $file . "',
					dateModified='" . NOW() . "'
					WHERE lessonID=" . $no;
				mysqli_query($con, $query_update);
				header('location: facultyheaderfooter-LessonVIEW.php');
			}
		}
		else
		{
			header('location: facultyheaderfooter-LessonVIEW.php');
		}
	}
	else
	{
		header('location: facultyheaderfooter-LessonVIEW.php');
	}
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8"> 
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Faculty</title>

	<link rel="stylesheet" href="assets/demo.css">
		<link rel="stylesheet" href="css/header-user-student.css">
		<link rel="stylesheet" href="css/footer-student.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<link rel="stylesheet" href="assets/xstyle.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
		
		<style>
         body {padding-top:20px;}
		 
		 
		.image-preview-input {
		position: relative;
		overflow: hidden;
		margin: 0px;    
		color: #333;
		background-color: #fff;
		border-color: #ccc;    
		}
		.image-preview-input input[type=file] {
		position: absolute;
		top: 0;
		right: 0;
		margin: 0;
		padding: 0;
		font-size: 20px;
		cursor: pointer;
		opacity: 0;
		filter: alpha(opacity=0);
		}
		.image-preview-input-title {
		margin-left:2px;
		}
		</style>


</head>

<body>

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

	<div class="container">
	<div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="" method="post">
          <fieldset>
            <legend class="text-center">Update Lesson</legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Title</label>
              <div class="col-md-9">
                <input id="name" name="name" type="text" value='<?php echo $title; ?>' class="form-control">
              </div>
            </div>

          
    
            <!-- Message body -->
            <div class="form-group">
              <label class="col-md-3 control-label" for="message">Description</label>
              <div class="col-md-9">
                <textarea class="form-control" id="message" name="message" value='<?php echo $desc; ?>' rows="5"></textarea>
              </div>
            </div>
			
			 <!-- File Upload -->
			 
			 <div class="input-group image-preview">
			  <label class="col-md-3 control-label" for="name">File Upload</label>
			  <div class="col-md-9">
                <input ty pe="text" class="form-control image-preview-filename" value='<?php echo $file; ?>' disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input">
					
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Browse</span>
                        <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/> <!-- rename it -->
						</div>
                    </div>
                </span>

            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button name="update" type="submit" class="btn btn-danger btn-lg">Update</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
	   <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-danger btn-lg">Back</button>
              </div>
	</div>
</div>

<!--                                         -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});

</script>
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
          <span>About the School</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

      </div>

    </footer>

<script src="js/jquery.js"></script>
<script src="js/File upload.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


</body>

</html>
