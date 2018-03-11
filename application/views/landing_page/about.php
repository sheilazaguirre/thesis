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
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/slick/slick-theme.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/magnific-popup/magnific-popup.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.css');?>">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="<?php echo site_url('resources/my-external/rs-plugin/css/settings.css');?>" media="screen" />
		<!-- Custom CSS -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/style.css');?>">
		<link rel="stylesheet" href="<?php echo site_url('resources/my-css/xstyle.css');?>">
		<!-- Icon Fonts  -->
		<link rel="stylesheet" href="<?php echo site_url('resources/my-font/style.css');?>">
		<!-- Head Libs -->	
		<!-- Modernizr -->
		<script src="<?php echo site_url('resources/my-external/modernizr/modernizr.js');?>"></script>
		<!-- Recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
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
							<a href="index"><span class="act-underline">HOME</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="about"><span class="act-underline">ABOUT US</span></a>
						</span>						
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="admission"><span class="act-underline"><span class="act-underline">ADMISSION</span></span></a>
						</span>
					</li>
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="contact"><span class="act-underline">CONTACT US</span></a>
						</span>
					</li>					
					<li>
						<span class="name">
							<span class="expander">-</span>
							<a href="<?php echo site_url('landing_page/application')?>"><span class="act-underline">APPLICATION<span class="badge badge--menu">NEW</span></span></a>
						</span>
					</li>
					<li>
						<span class="name"><span class="expander">-</span>
							<a href="faculty"><span class="act-underline">FACULTY LOGIN</span></a>
						</span>						
					</li>		
				</ul>
			</nav>
		</div>		
	    <!-- /mobile menu -->
		<!-- HEADER section -->
		<div class="header-wrapper">
			<header id="header">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-6 col-xl-7">
							<!-- logo start --> 
							<a href="index"><img class="logo replace-2x img-responsive" src='<?php echo site_url('resources/my-images/header-logo.png')?>'  alt=""/> </a> 
							<!-- logo end --> 
						</div>
						<div class="col-sm-8 col-md-8 col-lg-6 col-xl-5 text-right">
							<!-- slogan start -->
							<div class="slogan"> </div>
							<!-- slogan end --> 						
							<div class="settings">
								<!-- currency start -->
								<!-- currency end --> 
								<!-- language start -->
								<!-- language end --> 
							</div>
						</div>
					</div>
				</div>
				<div class="stuck-nav">
					<div class="container offset-top-5">
						<div class="row">
							<div class="pull-left col-sm-9 col-md-9 col-lg-10">
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
												<a href="index" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">HOME</span></a>
											</li>											
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="about" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ABOUT US</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="admission" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ADMISSION</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="contact" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">CONTACT US</span></a>
											</li>
											<li class="dropdown dropdown-mega-menu">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="<?php echo site_url('landing_page/application')?>"" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">APPLICATION<span class="badge badge--menu">NEW</span></span></a>
											</li>
											<li class="dropdown dropdown-mega-menu dropdown-two-col">
												<span class="dropdown-toggle extra-arrow"></span>
												<a href="faculty" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">FACULTY LOGIN</span></a>
											</li>
											</li>
										</ul>
									</div>
								</nav>
							</div>
							<!-- navigation end -->
							<div class="pull-right col-sm-3 col-md-3 col-lg-2">
								<div class="text-right">	
									<!-- search start -->
									<!-- search end -->										
									<!-- account menu start -->
									<!-- account menu end -->
									<!-- shopping cart start -->
									<!-- shopping cart end -->			
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		</div>
		<!-- End HEADER section -->
		<!-- breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<ol class="breadcrumb breadcrumb--ys pull-left">
					<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
					<li class="active">About</li>
				</ol>
			</div>
		</div>
		<!-- /breadcrumbs --> 
		<!-- CONTENT section -->
		<div id="pageContent">			
			<!-- parallax-img -->
			<!-- /parallax-img -->
			<!--  -->
			<section class="content">
				<div class="container">
					<h2 class="text-center title-under">History</h2>
					<p class="text-center color-dark main-font">
						Governor Andres Pascual started out as a dream by the late Don Andres Pascual. Don Andres loved his countrymen so much, that he founded the Wesleyan High School Foundation in 1947 and housed it in his own lot and building in Tangos, Navotas, Metro Manila to teach children who are willing to be educated. Don Andres Pascual was still not satisfied. He reserved his one hectare site where a modern high school building could be built. However, time did not allow him to realize his dreams. When Don Andres Pascual died on October 12, 1973, the transformation of his dream into reality became an obsession not only to his beloved wife, Doña Adela S. Pascual, but also to their niece, Dr. Olivia S. Pascual. Though prayers and hard work they succeed in funding this high school. To perpetuate the memory of the late don Andres Pascual, his wife Doña Adela and their niece, Olivia, decided to name this high school as Governor Andres Pascual High School. On June 14, 1976, the Governor Andres Pascual High School started accommodating the poor school children of Navotas, Metro Manila. It offered nursery, kinder, elementary and secondary levels. From 384 students at the start in 1976, it has grown to 2,395 students in 1995. In July 1993, since their ultimate goal is to help prepare their students in their professional careers, the Governor Andres Pascual High School is no longer limited to secondary education. The school started offering courses that focuses on Education, and was the first private school in Navotas that offered college education. Hence, the birth of Governor Andres Pascual College (GAPC). The school now offers 6 Courses that includes Master of Arts in Education and Doctor of Education. In 1993, Governor Andres Pascual first started offering Bachelor of Education. They also offered technical two year courses such as Associate Hotel and Restaurant Management and Associate Computer Secretariat. Two year courses were later on taken by TESDA in 1994 because of the Republic Act No. 7796 otherwise known as the "Technical Education and Skills Development Act of 1994" signed into law by President Fidel V. Ramos on August 25, 1994. In 1993 they started offering Bachelor of Science in Accountancy but was removed by CHED based on CHED Memorandum Order requirement that the students should have the capability to take and pass the CPA (Certified Public Accountants) exam [Article 3 Section 14]. None have passed the exam that is why they removed the program from the College. School year 1997-1998 GAPC introduced Master of Arts in Education major in Administration and Supervision. It was recognized by the Philippine government in April 15, 1998 given at Pasig City, Philippines. The Recognition No. is (070) Series of 1998. In 1998-1999 Doctor of Education was introduced into the college and later on recognized by the Philippine government in June 19, 2000 given at Pasig City with recognition No (166) Series of 2000.
					</p>
					<div class="divider divider--md1"></div>					
				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="container-fluid fill-bg content">
				<div class="content-fill">
					<h2 class="text-center title-under">Vision</h2>
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
							<p class="text-center">
								Governor Andres Pascual College envisions a model learning institution that makes a positive difference and is responsive to the needs of the global community.
							</p>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!--  -->
			<section class="content">
				<div class="container">
					<h2 class="text-center title-under">Mission</h2>
					<p class="text-center color-custom">
						The mission of Governor Andres Pascual College is to provide an affordable learning with emphasis on relevant, innovative and quality academic programs and services.
					</p>
				</div>
			</section>
			<!-- / -->
			<!-- parallax-img -->
			<!-- /parallax-img -->
			<!--  -->
			<!-- / -->
			<!-- blog slider -->
			
			<!-- /blog slider -->		
		</div>
		<hr>
		<!-- End CONTENT section -->
		<!-- FOOTER section -->
		<footer>
			<!-- footer-data -->
			<div class="container inset-bottom-60">
				<div class="row" >
					<div class="col-sm-12 col-md-5 col-lg-6 border-sep-right">
						<div class="footer-logo hidden-xs">
							<!--  Logo  --> 
							<a class="logo" href="index.html"> <img class="replace-2x" src="images/footer-logo.png"  alt="YOURStore"> </a> 
							<!-- /Logo --> 
						</div>
						<div class="box-about">
							<div class="mobile-collapse">
								<h4 class="mobile-collapse__title visible-xs">ABOUT US</h4>
								<div class="mobile-collapse__content">
								<p>GAPC Information Systems is a thesis project created by Shaun Pascual, Beper Ong, Sheila Zaguirre, Miko Villanueva for the completion of the requirements of their ISPROJ2 subject.</p>
								</div>
							</div>
						</div>
						<!-- subscribe-box -->
						<!-- /subscribe-box --> 
					</div>
					<div class="col-sm-12 col-md-7 col-lg-6 border-sep-left">
						<div class="row">
							<div class="col-sm-4">
								<div class="mobile-collapse">
									<h4 class="text-left  title-under  mobile-collapse__title">INFORMATION</h4>
									<div class="v-links-list mobile-collapse__content">
										<ul>
											<li><a href="about.html">About Us</a></li>
											<li><a href="support-24.html">Customer Service</a></li>
											<li><a href="faq.html">Privacy Policy</a></li>
											<li><a href="site-map.html">Site Map</a></li>
											<li><a href="contact.html">Contact Us</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /footer-data --> 
			<div class="divider divider-md visible-xs visible-sm visible-md"></div>
			<!-- social-icon -->
			<!-- /social-icon --> 
			<!-- footer-copyright -->
			<div class="container footer-copyright">
				<div class="row">
					<div class="col-lg-12"> <a href="index.html"><span>GAPC </span>Information Systems</a> &copy; 2018 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->		




		<!-- jQuery 1.10.1--> 
		<script src="<?php echo site_url('resources/my-external/jquery/jquery-2.1.4.min.js')?>"></script> 
		<!-- Bootstrap 3--> 
		<script src="<?php echo site_url('resources/my-external/bootstrap/bootstrap.min.js')?>"></script> 
		<!-- Specific Page External Plugins --> 
		<script src="<?php echo site_url('resources/my-external/slick/slick.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/bootstrap-select/bootstrap-select.min.js')?>"></script>  
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.plugin.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/countdown/jquery.countdown.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/instafeed/instafeed.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/magnific-popup/jquery.magnific-popup.min.js')?>"></script>  		
		<script src="<?php echo site_url('resources/my-external/isotope/isotope.pkgd.min.js')?>"></script> 
		<script src="<?php echo site_url('resources/my-external/imagesloaded/imagesloaded.pkgd.min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/colorbox/jquery.colorbox-min.js')?>"></script>
		<script src="<?php echo site_url('resources/my-external/parallax/jquery.parallax-1.1.3.js')?>"></script>		
		<!-- Custom --> 
		<script src="<?php echo site_url('resources/my-js/custom.js')?>"></script>			
		
	</body>
</html>