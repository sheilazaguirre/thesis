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
					<li><a href="">Admission</a></li>						
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
					<h2 class="text-center title-under">Basic Education</h2>
					<div class="divider divider--md1"></div>		
					<div class="row">									
						<div class="col-sm-6 col-md-6 col-lg-3 text-center">
							<img src="<?php echo site_url('resources/my-images/kinder-icon.png')?>">
							<div class="divider divider--sm"></div>						
							<strong class="font22 color font-medium text-uppercase custom-font">Kindergarten</strong>
						    <div class="divider divider--md"></div>
							<p>
							</p>
						</div>
						<div class="divider divider--md1 visible-xs"></div>
						<div class="col-sm-6 col-md-6 col-lg-3 text-center">
							<img src="<?php echo site_url('resources/my-images/gschool-icon.png')?>">
							<div class="divider divider--sm"></div>						
							<strong class="font22 color font-medium text-uppercase custom-font">Grade School</strong>
						    <div class="divider divider--md"></div>
							<p>
							</p>
						</div>
						<div class="divider divider--md1 visible-md visible-sm visible-xs"></div>
						<div class="col-sm-6 col-md-6 col-lg-3 text-center">							
							<img src="<?php echo site_url('resources/my-images/hschool-icon.png')?>">
							<div class="divider divider--sm"></div>						
							<strong class="font22 color font-medium text-uppercase custom-font">Secondary Education</strong>
						    <div class="divider divider--md"></div>
							<p> 
							</p>
						</div>
						<div class="divider divider--md1 visible-xs"></div>
						<div class="col-sm-6 col-md-6 col-lg-3 text-center">
							<img src="<?php echo site_url('resources/my-images/college-icon.png')?>">
							<div class="divider divider--sm"></div>						
							<strong class="font22 color font-medium text-uppercase custom-font">College</strong>
						    <div class="divider divider--md"></div>
							<p>
							</p>
						</div>										
					</div>
				</div>
			</section>
			<!-- / -->	
			
			<!--  -->
			<section class="content">
				<div class="container">
					<!-- title -->
					<div class="title-box">
						<h2 class="text-center title-under">COURSES OFFERED</h2>
					</div>
					<!-- /title -->
					<div class="row">
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="elemed" target="_blank"><img src="<?php echo site_url('resources/my-images/elementary-education.jpg')?>" class="img-responsive" alt=""></a>							
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Bachelor of Elementary Education</span>
								</a>
							</p>
							<p>Click picture to see details.</p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="seced"><img src="<?php echo site_url('resources/my-images/secondary-education.jpg')?>" class="img-responsive" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Bachelor of Secondary Education</span>
								</a>
							</p>
							<p></p>
						</div>
						<div class="divider divider--lg visible-sm visible-xs"></div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="bisad" target="_blank"><img src="<?php echo site_url('resources/my-images/business-administration.jpg')?>" class="img-responsive" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Bachelor of Science in Business</span>
								</a>
							</p>
							<p> </p>
						</div>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<a class="link-img-hover1" href="comsci" target="_blank"><img src="<?php echo site_url('resources/my-images/computer-science.jpg')?>" class="img-responsive" alt=""></a>
							<div class="divider divider--md1"></div>
							<p>
								<a class="hover-effect-01" href="#">
									<span class="font22 text-uppercase color-custom">Bachelor of Science in Computer Science</span>
								</a>
							</p>
							<p> </p>
						</div>
					</div>
				</div>
			</section>
			<!-- / -->
			<!--=== box-baners ===-->
			<!--=== /box-baners ===-->
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
							<a class="logo" href="index"> <img class="replace-2x" src="<?php echo site_url('resources/my-images/footer-logo.png')?>"  alt="YOURStore"> </a> 
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
											<li><a href="about">About Us</a></li>
											<li><a href="support-24">Customer Service</a></li>
											<li><a href="faq">Privacy Policy</a></li>
											<li><a href="site-map">Site Map</a></li>
											<li><a href="contact">Contact Us</a></li>
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
					<div class="col-lg-12"> <a href="index"><span>GAPC </span>Information Systems</a> &copy; 2018 . All Rights Reserved. </div>
				</div>
			</div>
			<!-- /footer-copyright --> 
			<a href="#" class="btn btn--ys btn--full visible-xs" id="backToTop">Back to top <span class="icon icon-expand_less"></span></a> 
		</footer>
		<!-- END FOOTER section -->
		<!-- Button trigger modal -->
	  

		<!--================== modal ==================-->
		<!-- modalAddToCart -->
		<!-- /modalAddToCart -->
		<!-- modalLoginForm-->
		<div class="modal  fade"  id="modalLoginForm" tabindex="-1" role="dialog" aria-label="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog white-modal modal-sm">
		    <div class="modal-content ">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="icon icon-clear"></span></button>
		        <h4 class="modal-title text-center text-uppercase">Login form</h4>
		      </div>
		      <form>
			      <div class="modal-body indent-bot-none">
			      	<div class="form-group">
			      		<div class="input-group">
						    <span class="input-group-addon">
						    	<span class="icon icon-person"></span>
						    </span>
						    <input type="text" id="LoginFormName" class="form-control" placeholder="Name:">
						</div>
			      	</div>
					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">@</span>
						    <input type="password" id="LoginFormPass" class="form-control" placeholder="Password:">
						</div>
					</div>			         				    				     
 	                 <div class="checkbox-group">
	                  <input type="checkbox" id="checkBox2">
	                  <label for="checkBox2"> 
	                  	<span class="check"></span>
	                  	<span class="box"></span>
	                  	Remember me
	                  </label>
	                </div>
	                <button type="button" class="btn btn--ys btn--full btn--lg">Login</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-blue"><span class="fa fa-facebook"></span> Login with Facebook</button>
			        <div class="divider divider--xs"></div>
			        <button type="button" class="btn btn--ys btn--full btn--lg btn-red"><span class="fa fa-google-plus"></span> Login with Google</button>
			        <div class="divider divider--xs"></div>
			        <ul class="list-arrow-right">
			        	<li><a href="#">Forgot your username?</a></li>
			        	<li><a href="#">Forgot your password?</a></li>
			        	<li><a href="#">Create an account</a></li>
			        </ul>
			      </div>			      
			  </form>
		    </div>
		  </div>
		</div>	
		<!-- /modalLoginForm-->

      <!-- Modal (quickViewModal) -->		
		    	<!-- / -->
		    </div>
		  </div>
		</div>
		<!-- / Modal (quickViewModal) -->
		<!-- Modal (newsletter) -->		
		
		<!-- / Modal (newsletter) -->
		<!--================== /modal ==================-->
		




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
		<!-- SLIDER REVOLUTION 4.x SCRIPTS  --> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script> 
		<script type="text/javascript" src="<?php echo site_url('resources/my-external/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script> 
		<!-- Custom --> 
		<script src="<?php echo site_url('resources/my-js/custom.js')?>"></script>			
		<script src="<?php echo site_url('resources/my-js/js-index-01.js')?>"></script>		
	</body>
</html>