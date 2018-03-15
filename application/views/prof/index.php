<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");

	$result = mysqli_query($db, "SELECT CONCAT(userFN, ' ',userLN) as userName
	FROM users WHERE userIDNo=$_SESSION[userIDNo]");

	if (mysqli_num_rows($result) > 0)
	{
		while($row = $result->fetch_assoc()) {
			$name = $row['userName'];
		}
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GAPC Main</title>
        <link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap.min.css');?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/font-awesome.min.css');?>">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Datetimepicker -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/bootstrap-datetimepicker.min.css');?>">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/AdminLTE.min.css');?>">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="<?php echo site_url('resources/css/_all-skins.min.css');?>">

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

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>




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
                    <li>
                        <span class="name">
                            <span class="expander">-</span>
                            <a href="<?php echo base_url()?>prof/assignments"><span class="act-underline">MONITOR DOWNLOAD</span></a>
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
                            <div class="slogan"> Welcome, "<?php echo $name; ?>"! </div>
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
                                        <li><a href="<?php echo site_url('prof/account/') ?>"><span class="icon icon-person"></span>Account</a></li>
                                        <li><a href="<?php echo site_url('landing_page/logout/') ?>"><span class="icon icon-lock"></span>Log-out</a></li>
                                        <li class="dropdown-menu__close"><a href="#"><span class="icon icon-close"></span>close</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- account menu end -->       
                        </div>
                        <a href="<?php echo base_url()?>prof/index"><img class="logo replace-2x img-responsive" src="<?php echo site_url('resources/my-images/header-logo.png')?>" alt=""/></a> 
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
                                    <li class="dropdown dropdown-mega-menu">
                                        <span class="dropdown-toggle extra-arrow"></span>
                                        <a href="<?php echo base_url()?>prof/downloads" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">MONITOR DOWNLOAD</span></a>
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
						<a href="<?php echo base_url()?>prof/index"><span>GAPC</span> Information Systems</a> &copy; 2018 . All Rights Reserved. 
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