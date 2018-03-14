
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
							<a href="<?php echo base_url()?>student_page/schedule"><span class="act-underline">SCHEDULE</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>student_page/grades"><span class="act-underline">GRADES</span></a>
						</span>						
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>student_page/lessons"><span class="act-underline"><span class="act-underline">LESSONS</span></span></a>
						</span>
					</li>
					<li>
						<span class="assignments">
							<span class="expander">-</span>
							<a href="<?php echo base_url()?>student_page/assignments"><span class="act-underline">ASSSIGNMENTS</span></a>
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
							<div class="slogan"> Welcome, "<?php echo $fn; ?> <?php echo $ln; ?>"! </div>
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
										<li><a href="<?php echo site_url('student_page/account/') ?>"><span class="icon icon-person"></span>Account Information</a></li>
										<li><a href="<?php echo site_url('landing_page/logout/') ?>"><span class="icon icon-lock"></span>Log-out</a></li>
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
										<a href="<?php echo base_url()?>student_page/schedule" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SCHEDULE</span></a>
									</li>									
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>student_page/grades" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">GRADES</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>student_page/lessons" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">LESSONS</span></a>
									</li>
									<li class="dropdown dropdown-mega-menu">
										<span class="dropdown-toggle extra-arrow"></span>
										<a href="<?php echo base_url()?>student_page/assignments" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ASSIGNMENTS</span></a>
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

		<!-- End HEADER section -->
		<!-- Slider section --> 
		<section class="content offset-top-0 intro tp-banner-button1" id="slider">
			<!--
				#################################
				- THEMEPUNCH BANNER -
				#################################
				--> 
			<!-- START REVOLUTION SLIDER 3.1 rev5 fullwidth mode -->
			<h2 class="hidden">Slider Section</h2>
			<div class="tp-banner-container">
				<div class="tp-banner">
					<ul>
						<!-- SLIDE -1 -->
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							<!-- MAIN IMAGE --> 
							<img src="<?php echo site_url('resources/my-images/slide.jpg')?>"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
							<!-- LAYERS -->												
						</li>
						<!-- /SLIDE -1 -->
						<!-- SLIDE 2  -->            
						<li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">
							<!-- MAIN IMAGE --> 
							<img src="<?php echo site_url('resources/my-images/slides/slide-bg-1.png')?>"  alt="slide2"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
							<!-- LAYERS -->												
						</li>
						<!-- /SLIDE 2  -->
						<!-- SLIDE 3  -->
						<!-- /SLIDE 3  -->		  
					</ul>
				</div>
			</div>
		</section>
		<!-- END REVOLUTION SLIDER --> 
		
		<!-- FOOTER section -->
		<footer  class="layout-2">			
			<!-- social-icon -->
			<div class="container">
				
				
			</div>
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12  text-center"> 
						<a href="index"><span>GAPC</span> Information Systems</a> &copy; 2018 . All Rights Reserved. 
					</div>
				</div>
			</div>
			<!-- /footer-copyright -->			
		</footer>
		<!-- END FOOTER section -->
		
	
		<!--================== /scripts ==================-->

		<!-- jQuery 1.10.1--> 
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