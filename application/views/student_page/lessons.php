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

    $query = mysqli_query($db, "SELECT l.lessonID, c.classID, u.userIDNo, s.subjectCode, l.lessonFile, l.lessonTitle, l.lessonDesc, l.dateUploaded FROM lessons l 
    INNER JOIN classes c ON c.classID = l.classID 
    INNER JOIN classlist cl ON cl.classID = c.classID 
    INNER JOIN subjects s ON c.subjectID = s.subjectID 
    INNER JOIN users u ON cl.studentID = u.userIDNo 
    WHERE u.userIDNo = $_SESSION[userIDNo] AND l.status = 'Active' AND c.semester='1st Semester' AND c.academicYear=YEAR(NOW())");

    $query2 = mysqli_query($db, "SELECT l.lessonID, c.classID, u.userIDNo, s.subjectCode, l.lessonFile, l.lessonTitle, l.lessonDesc, l.dateUploaded FROM lessons l 
    INNER JOIN classes c ON c.classID = l.classID 
    INNER JOIN classlist cl ON cl.classID = c.classID 
    INNER JOIN subjects s ON c.subjectID = s.subjectID 
    INNER JOIN users u ON cl.studentID = u.userIDNo 
    WHERE u.userIDNo = $_SESSION[userIDNo] AND l.status = 'Active' AND c.semester='2nd Semester' AND c.academicYear=YEAR(NOW())");

    
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
                                        <li><a href="login_form.html"><span class="icon icon-person"></span>Account Information</a></li>
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
                                        <a href="schedule" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">SCHEDULE</span></a>
                                    </li>                                   
                                    <li class="dropdown dropdown-mega-menu">
                                        <span class="dropdown-toggle extra-arrow"></span>
                                        <a href="grades" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">GRADES</span></a>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <span class="dropdown-toggle extra-arrow"></span>
                                        <a href="lessons" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">LESSONS</span></a>
                                    </li>
                                    <li class="dropdown dropdown-mega-menu">
                                        <span class="dropdown-toggle extra-arrow"></span>
                                        <a href="assignments" class="dropdown-toggle" data-toggle="dropdown"><span class="act-underline">ASSIGNMENTS</span></a>
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
                        <li class="home-link"><a href="index" class="icon icon-home"></a></li>
                        <li>S.Y 2016-2017</li>
                        <li class="active">Lessons</li>
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
                                            <?php
                                                if (mysqli_num_rows($query) > 0)
                                                {
                                                    while($row = $query->fetch_assoc())
                                                    {
                                                        $no = $row['lessonID'];
                                                        $subject = $row['subjectCode'];
                                                        $title = $row['lessonTitle'];
                                                        $file = $row['lessonFile'];
                                                        $desc = $row['lessonDesc'];
                                                        $dateadded = $row['dateUploaded'];

                                                        echo
                                                        "<tr>
                                                            <td>" .$subject . "</td>
                                                            <td>" .$title . "</td>
                                                            <td>" .$file . "</td>
                                                            <td>" .$desc . "</td>
                                                            <td>" .$dateadded . "</td>
                                                            <td>
                                                                <a href='../uploads/lessons/".$file."' target='_blank' class='btn btn-success' download>
                                                            Download                                                                </a></td>
                                                            </td>
                                                        </tr>";
                                                    }
                                                }
                                            ?>
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
                                            <?php
                                                if (mysqli_num_rows($query2) > 0)
                                                {
                                                    while($row = $query2->fetch_assoc())
                                                    {
                                                        $no = $row['lessonID'];
                                                        $subject = $row['subjectCode'];
                                                        $title = $row['lessonTitle'];
                                                        $file = $row['lessonFile'];
                                                        $desc = $row['lessonDesc'];
                                                        $dateadded = $row['dateUploaded'];

                                                        echo
                                                        "<tr>
                                                            <td>" .$subject . "</td>
                                                            <td>" .$title . "</td>
                                                            <td>" .$file . "</td>
                                                            <td>" .$desc . "</td>
                                                            <td>" .$dateadded . "</td>
                                                            <td>
                                                                <a href='../uploads/lessons/".$no."' target='_blank' class='btn btn-success' download>
                                                            Download                                                                </a></td>
                                                            </td>
                                                        </tr>";
                                                    }
                                                }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>          
            </section>          
            <!-- related products -->
            <!-- /related products -->
        </div>

        <hr>

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
