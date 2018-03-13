<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Governor Andres Pascual College - Information Systems</title>
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
        <!-- breadcrumbs -->
        
        <!-- /breadcrumbs --> 
        <!-- CONTENT section -->
        <div id="studentContent">
            <div class="breadcrumbs">
            <div class="container">
                    <ol class="breadcrumb breadcrumb--ys pull-left">
                        <li class="home-link"><a href="index" class="icon icon-home"></a></li>
                        <li>S.Y <?php echo date("Y"); ?></</li>
                        <li class="active">Assignments</li>
                    </ol>
                </div>
            </div>
            <section class="content offset-top-0">
                <div class="container">
                            <div class="content">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs--ys1" role="tablist">
                                    <li class="active"><a href="#Tab1"  role="tab" data-toggle="tab" class="text-uppercase">1st Semester</a></li>
                                    <li><a href="#Tab2" role="tab" data-toggle="tab" class="text-uppercase">2nd Semester</a></li>
                                </ul>
                                <br>
                                <div class="col-md-10">
                                </div>
                                <div class="col-md-2">
                                <a href="<?php echo site_url('prof_func/add'); ?>" class="btn btn-success btn-sm">Add Assignment</a>
                            </div>
                                <!-- Tab panes -->
                                <div class="tab-content tab-content--ys nav-stacked">
                                    <div role="tabpanel" class="tab-pane active" id="Tab1">
                                        <div class="divider divider--xs"></div>
                                        <table class="table table-params" >
                                            <thead>
                                                <tr bgcolor="#80091F">
                                                    <th class="text-center" style="color: #fff">Class</th>
                                                    <th class="text-center" style="color: #fff">Section</th>
                                                    <th class="text-center" style="color: #fff">Title</th>
                                                    <th class="text-center" style="color: #fff">Description</th>
                                                    <th class="text-center" style="color: #fff">File</th>
                                                    <th class="text-center" style="color: #fff">Date Added</th>
                                                    <th class="text-center" style="color: #fff">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">PRINMAN</td>
                                                    <td class="text-center">TI001</td>
                                                    <td class="text-center">Management Assignment #1</td>
                                                    <td class="text-center">First Assignment for PRINMAN</td>
                                                    <td class="text-center">Instructions.txt</td>
                                                    <td class="text-center">Secret</td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-danger btn-xs" onclick='return confirm("Delete Record?");'><span class="fa fa-trash"></span> Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="Tab2">
                                        <div class="divider divider--xs"></div>
                                        <table class="table table-params">
                                            <thead>
                                                <tr bgcolor="#80091F">
                                                    <th class="text-center" style="color: #fff">Class</th>
                                                    <th class="text-center" style="color: #fff">Section</th>
                                                    <th class="text-center" style="color: #fff">Title</th>
                                                    <th class="text-center" style="color: #fff">Description</th>
                                                    <th class="text-center" style="color: #fff">File</th>
                                                    <th class="text-center" style="color: #fff">Date Added</th>
                                                    <th class="text-center" style="color: #fff">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">PRINMAR</td>
                                                    <td class="text-center">TI002</td>
                                                    <td class="text-center">Marketing Assignment #1</td>
                                                    <td class="text-center">First Assignment for PRINMAR</td>
                                                    <td class="text-center">Instructions.txt</td>
                                                    <td class="text-center">Secret</td>
                                                    <td class="text-center">
                                                        <a href="" class="btn btn-danger btn-xs" onclick='return confirm("Delete Record?");'><span class="fa fa-trash"></span> Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>          
            </section>          
            <!-- related products -->
            <!-- /related products -->
        </div>

        <hr>
        <!-- End CONTENT section --> 
        <!-- / Modal (quickViewModal) -->
        <!-- External JS --> 
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