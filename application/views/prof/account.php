<?php
	$db = mysqli_connect("localhost", "root", "", "thesis");

	$result = mysqli_query($db, "SELECT userEmail, CONCAT(userFN, ' ',userLN) as userName
	FROM users WHERE userIDNo=$_SESSION[userIDNo]");

	if (mysqli_num_rows($result) > 0)
	{
		while($row = $result->fetch_assoc()) {
			$name = $row['userName'];
			$mail = $row['userEmail'];
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

<div id="studentContent">
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb--ys pull-left">
			<li class="home-link"><a href="index.html" class="icon icon-home"></a></li>				
			<li class="active">Update Password</li>
		</ol>
	</div>
</div>
<div id="update_password_form">
		<h3 style="text-align: center;">Account</h3>
		<div style="text-align: center;" class="form-group">
			<label for="email">Email: </label>
			<input type="email" class="form-control" name="userEmail" style="text-align: center;" value="<?php echo $mail; ?>" readonly>
		</div>
		<br>
		<hr>
	<form action="<?php echo base_url()?>prof/updatepwd" method="POST">
		<h3 style="text-align: center;">Change Password</h3>
        <?php
        echo validation_errors('<p class="error">');
        if (isset($error))
        {
            echo '<p class="error" style="text-align: center; color: #80091f;">'. $error .'</p>';
        }
        ?>
		<br>
		<div style="text-align: center;" class="form-group">
			<label for="password">Current Password: </label>
			<input type="password" class="form-control" value="" name="password" style="text-align: center;" />
			<?php echo form_error('password', 'div class="text-danger', '</div>'); ?>
		</div>
		<div style="text-align: center;" class="form-group">
			<label for="password">New Password: </label>
			<input type="password" class="form-control" value="" name="newpass" style="text-align: center;" />
			<?php echo form_error('password', 'div class="text-danger', '</div>'); ?>
		</div>
		<div style="text-align: center;" class="form-group">
			<label for="password_conf">Confirm Password: </label>
			<input type="password" class="form-control" value="" name="confpass" style="text-align: center;"/>
			<?php echo form_error('password', 'div class="text-danger', '</div>'); ?>
		</div>
		<div style="text-align: center;">
			<input class="button" type="submit" name="submit" value="Update my password"/>
		</div>
	</form>
</div>

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
