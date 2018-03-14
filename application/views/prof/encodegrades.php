<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");
	$result = mysqli_query($db, "SELECT DISTINCT c.classID, s.subjectCode, c.facultyID FROM classes c
	INNER JOIN subjects s ON c.subjectID = s.subjectID
	WHERE c.facultyID='20181006' AND c.status='Active' AND c.academicYear=YEAR(NOW())");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic -->
		<meta charset="utf-8">
		<title>Governor Andres Pascual College - Information Systems</title>
		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="YOURStore - Responsive HTML5 Template">
		<meta name="author" content="etheme.com">
		<link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
		<!-- Mobile Specific Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- External Plugins CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick-theme.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/magnific-popup/magnific-popup.css')?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.css')?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/my-external/rs-plugin/css/settings.css')?>" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/style.css')?>">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-font/style.css')?>">
		<!-- Head Libs -->
		<!-- Modernizr -->
		<script src="<?php echo site_url('resources/my-external/modernizr/modernizr.js')?>"></script>
	</head>
	<body class="index">		
		<div id="loader-wrapper">
			<div id="loader">
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
				<div class="dot"></div>
			</div>
		</div>
		<!-- Back to top -->
	    <div class="back-to-top"><span class="icon-keyboard_arrow_up"></span></div>
	    <!-- /Back to top -->
	    <!-- mobile menu -->
		<div class="hidden">
			<nav id="off-canvas-menu">				
				<ul class="expander-list">				
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/schedule"><span class="act-underline">SCHEDULE</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/encodegrades"><span class="act-underline">ENCODE GRADES</span></a>
						</span>						
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/lessons"><span class="act-underline"><span class="act-underline">MANAGE LESSONS</span></span></a>
						</span>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>prof/assignments"><span class="act-underline">MANAGE ASSSIGNMENTS</span></a>
						</span>
					</li>						
				</ul>
			</nav>
		</div>
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header" class="header-layout-04">
				<!-- top-header -->
				<div class="container">
					<div class="row">
						<!-- col-left -->
						<div class="col-sm-3 text-left">
							<!-- slogan start -->
							<div class="slogan"> Welcome, "Name"! </div>
							<!-- slogan end --> 	
						</div>
						<!-- /col-left -->
						<!-- col-right -->
						<!-- /col-right -->
					</div>
				</div>
				<!-- /top-header -->
				<div class="container">
					<div class="row text-center">
						<!--  -->
						<div class="text-right extra-right">			
							<!-- account menu start -->
							<div class="account link-inline">
								<div class="dropdown text-right">
									<a class="dropdown-toggle" data-toggle="dropdown">
									<span class="icon icon-person "></span>
									</a>
									<ul class="dropdown-menu dropdown-menu--xs-full">
										<li><a href="login_form.html"><span class="icon icon-person"></span>Account Information</a></li>
										<li><a href="#"  data-toggle="modal" data-target="#modalLoginForm"><span class="icon icon-lock"></span>Log-out</a></li>
										<li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
									</ul>
								</div>
							</div>
							<!-- account menu end -->		
						</div>
						<!-- / -->
						<!-- logo start --> 
						<a href="index"><img class="logo replace-2x img-responsive" src="<?php echo site_url('resources/my-images/header-logo.png')?>" alt=""/></a> 
						<!-- logo end --> 
					</div>
				</div>
				<!-- nav -->
				<div class="container">
					<div class="row text-center">					
						<!-- navigation start -->
						<nav class="navbar">
							<div class="responsive-menu mainMenu">									
								<!-- Mobile menu Button-->
								<div class="col-xs-2 visible-mobile-menu-on">
									<div class="expand-nav compact-hidden">
										<a href="#off-canvas-menu" class="off-canvas-menu-toggle">
											<div class="navbar-toggle"> 
												<span class="icon-bar"></span> 
												<span class="icon-bar"></span> 
												<span class="icon-bar"></span> 
												<span class="menu-text">MENU</span> 
											</div>
										</a>
									</div>
								</div>
								<!-- //end Mobile menu Button -->
								<ul class="nav navbar-nav">
									<li class="dl-close"><a href="#"><span class="icon icon-close"></span>close</a></li>										
									<li class="dropdown dropdown-mega-menu">											
										<a href="<?php echo base_url()?>prof/schedule" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SCHEDULE</span></a>
									</li>									
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/encodegrades" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ENCODE GRADES</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/lessons" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE LESSONS</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>prof/assignments" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE ASSIGNMENTS</span></a>
									</li>
								</ul>
							</div>
						</nav>
						<!-- navigation finish -->
					</div>
				</div>
				<!-- /nav -->				
			</header>

		</div>

		<!-- The content of your page would go here. -->
		<br/>
		<div class="menu" id="studentContent">
		<form action="<?php echo base_url()?>prof/encodegrades" method="POST">
			<div id="classContent">
				<div class="container">
					
					<table id="name" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
						<thead>
							<tr>
								<th bgcolor="#80091F" style="color: #fff">ClassID</th>
								<th bgcolor="#80091F" style="color: #fff">Subject</th>
								<th bgcolor="#80091F" style="color: #fff">Action</th>

							</tr>
						</thead>
						<tbody>
						<?php
                        	if (mysqli_num_rows($result) > 0)
                        	    {
                        	         while($row = $result->fetch_assoc())
                        	         {
                        	            $no = $row['classID'];
                        	         	$subject = $row['subjectCode'];
    
                        	            echo
                        	            "<tr>
                        	                <td>" .$no . "</td>
                        	                <td>" .$subject . "</td>
											<td class='text-center'>
                                                <a href='grades' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Prelims</a>
                                                <a href='fgrades' class='btn btn-info btn-xs'><span class='fa fa-pencil'></span> Finals</a>
                                            </td>
                        	            </tr>";
                        	        }
                        	    }
                        ?>
						</tbody>

					</table>
					<!--                                         -->
				</div>
			</div>
		</form>



			<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> -->

			<!-- // <script> -->

			<!-- // 	$(document).ready(function(){

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

		// 	}); -->

			<!-- // </script> -->
			<script src="<?php echo site_url('resources/my-external/jquery/jquery-2.1.4.min.js')?>"></script> 
		<!-- Bootstrap 3--> 
		<script src="<?php echo site_url('resources/my-external/bootstrap/bootstrap.min.js')?>"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="<?php echo site_url('resources/my-external/slick/slick.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.min.js')?>"></script>  
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.plugin.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.countdown.min.js')?>"></script>		
	
		<script src="<?php echo site_url('resources/my-external/magnific-popup/jquery.magnific-popup.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/isotope/isotope.pkgd.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/colorbox/jquery.colorbox-min.js')?>"></script>
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>

		<!-- Custom --> 
		<script src="<?php echo site_url('resources/my-js/custom.js')?>"></script>
		<script src="<?php echo site_url('resources/my-js/js-index-04.js')?>"></script>					
	</body>
</html>