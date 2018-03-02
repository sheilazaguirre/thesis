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
							<a href="schedule"><span class="act-underline">SCHEDULE</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="listing.html"><span class="act-underline">ENCODE GRADES</span></a>
						</span>						
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="product.html"><span class="act-underline"><span class="act-underline">MANAGE LESSONS</span></span></a>
						</span>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="blog-layout-1.html"><span class="act-underline">MANAGE ASSSIGNMENTS</span></a>
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
										<a href="schedule" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SCHEDULE</span></a>
									</li>									
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="grades" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ENCODE GRADES</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="lessons" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE LESSONS</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="assignments" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MANAGE ASSIGNMENTS</span></a>
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
		<div class="menu">

			<div id="studentContent">
				<div class="container">
					<br>
					<h3>Grades Encoding</h3>
					<br/>

					<div class="container">
						<div class="col-md-6">
							<h5>Faculty: Salvador, Ronaldo</h5>
							<h5>Subject: Fil 1</h5>
							<h5>Section: TI001</h5>
							<h5>Year: 1st Year</h5>
						</div>
						<div class="col-md-6">
							<h5>SY: 2017-2018</h5>
							<h5>Venue: D405</h5>
							<h5>Schedule: MW 11:20 - 12:50</h5>
						</div>
					</div>
					<br>
					<h3 align="center">
						<b>Prelims</b>
					</h3>
					<hr/>
					<?php $this->session->flashdata('message_name'); ?>
					<table id="name" cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
						<thead>
							<tr>
								<th bgcolor="#80091F" style="color: #fff">Student ID</th>
								<th bgcolor="#80091F" style="color: #fff">Student Name</th>
								<th bgcolor="#80091F" style="color: #fff">Grade</th>
								<th bgcolor="#80091F" style="color: #fff">Remarks</th>

							</tr>
						</thead>
						<tbody>
						
							<?php foreach($classlist as $c){ ?>
							<tr>
								<td>
									<p><?php echo $c['studentID']; ?></p>
								</td>
								<td>
									<?php echo $c['userName']; ?>
								</td>
								<input type="hidden" name="clID[<?php echo $c['classlistID']?>]" value="<?php echo $c['classlistID']?>"/>
								<input type="hidden" name="classid" value="<?php echo $c['classID']?>"/>
								<input type="hidden" name="sid[<?=$c['classlistID']?>]" value="<?php echo $c['studentID']?>"/>
								
								<td>
									<select name="grade[<?=$c['classlistID']?>]" <?php if ($c['status'] == 'Submitted'){ ?> disabled <?php   } ?> required>
										<option value="">Select Grade</option>
										<option value="1" <?php echo $c["grade"] == "1" ? "selected" : "" ?>>1.00</option>
										<option value="1.25" <?php echo $c["grade"] == "1.25" ? "selected" : "" ?>>1.25</option>
										<option value="1.50" <?php echo $c["grade"] == "1.50" ? "selected" : "" ?>>1.50</option>
										<option value="1.75" <?php echo $c["grade"] == "1.75" ? "selected" : "" ?>>1.75</option>
										<option value="2" <?php echo $c["grade"] == "2" ? "selected" : "" ?>>2.00</option>
										<option value="2.25" <?php echo $c["grade"] == "2.25" ? "selected" : "" ?>>2.25</option>
										<option value="2.50" <?php echo $c["grade"] == "2.50" ? "selected" : "" ?>>2.50</option>
										<option value="2.75" <?php echo $c["grade"] == "2.75" ? "selected" : "" ?>>2.75</option>
										<option value="3" <?php echo $c["grade"] == "3" ? "selected" : "" ?>>3.00</option>
										<option value="4" <?php echo $c["grade"] == "4" ? "selected" : "" ?>>4.00</option>
										<option value="W" <?php echo $c["grade"] == "W" ? "selected" : "" ?>>W</option>
										<option value="X" <?php echo $c["grade"] == "X" ? "selected" : "" ?>>X</option>
										<option value="inc" <?php echo $c["grade"] == "inc" ? "selected" : "" ?>>INC</option>
									</select>
									<br/>
								</td>
								<td>
									<textarea rows="2" value="" <?php if ($c['status'] == 'Submitted'){ ?> disabled <?php   } ?> name="remarks[<?=$c['classlistID']?>]">
										<?php echo $c['remarks']; ?>
									</textarea>
								</td>

							</tr>
							<?php }?>
						</tbody>

					</table>
					<div class="form-group">
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='1'");
							$row = $query->row();

							if(isset($row)){
						?>
						1.00 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='1.25'");
							$row = $query->row();

							if(isset($row)){
						?>
						1.25 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='1.50'");
							$row = $query->row();

							if(isset($row)){
						?>
						1.50 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='1.75'");
							$row = $query->row();

							if(isset($row)){
						?>
						1.75 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='2'");
							$row = $query->row();

							if(isset($row)){
						?>
						2.00 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='2.25'");
							$row = $query->row();

							if(isset($row)){
						?>
						2.25 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='2.50'");
							$row = $query->row();

							if(isset($row)){
						?>
						2.50 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='2.75'");
							$row = $query->row();

							if(isset($row)){
						?>
						2.75 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='3'");
							$row = $query->row();

							if(isset($row)){
						?>
						3.00 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='4'");
							$row = $query->row();

							if(isset($row)){
						?>
						4.00 - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='X'");
							$row = $query->row();

							if(isset($row)){
						?>
						X - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='W'");
							$row = $query->row();

							if(isset($row)){
						?>
						W - <?php echo $row->grade;?>
							<?php }?>
						|
						<?php
							$query = $this->db->query("SELECT COUNT(*) grade FROM grades WHERE grade='INC'");
							$row = $query->row();

							if(isset($row)){
						?>
						INC - <?php echo $row->grade;?>
							<?php }?>
					</div>
					<div class="form-group">
						<div class="col-md-2 left">
							<p><b>Legend:</b><br/>
							1.00: 98-100 <br/>
							1.25: 95-97<br/>
							1.50: 92-94<br/>
							1.75: 89-91 <br/>
							2.00: 86-88<br/>
							2.25: 83-85<br/>
							2.50: 80-82<br/>
							</p>
						</div>
						<div class="col-md-3 right">
							<p><b>Legend:</b><br/>
							2.75: 77-79<br/>
							3.00: 74-76<br/>
							4.00: For Midterm Only<br/>
							5.00: For Finals Only<br/>
							W: Dropped <br/>
							X: Absent from the Final Exam <br/>
							INC: Incomplete <br/>
							</p>
						</div>
					</div>
					

					<div class="form-group">
						<div class="col-md-12 text-right">
						<?php if($c['status'] != 'Submitted'): ?>
							<button type="submit" name="save" class="btn btn-info" onclick='return confirm("Save?");'>
								<i class="fa fa-check"></i> Save
							</button>
						<?php endif; ?>
							<button type="submit" name="submit" class="btn btn-success"  onclick='return confirm("Are you sure you want to Submit?");'>
								<i class="fa fa-check"></i> Submit
							</button>
						</div>
					</div>
					<!--                                         -->
				</div>
			</div>



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