<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GAPC Main</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="shortcut icon" href="<?php echo site_url('resources/my-images/gapc-favicon.ico')?>">
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

        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    </head>
    
    <body class="hold-transition skin-red sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"></span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><img src="<?php echo site_url('resources/my-images/transparent_logo.png')?>" height="80" width="100" style="margin-top: 15px;"></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <span class="hidden-xs">MENU</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                    <p>
                                    </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="<?php echo base_url()?>landing_page/logout" class="btn btn-default btn-flat">Sign out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">

                        </div>
                        <div class="pull-left info">
                            <p></p>
                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">MAIN NAVIGATION</li>
                        <li>
                            <a href="<?php echo site_url('admin/dashboard');?>">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-bullhorn"></i> <span>Announcement</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('announcement/add');?>"><i class="fa fa-plus"></i> Add Announcement</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('announcement/index');?>"><i class="fa fa-list-ul"></i> View Announcements</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-inbox"></i> <span>Applicant</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('applicant/add');?>"><i class="fa fa-plus"></i> Add Applicant</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('applicant/index');?>"><i class="fa fa-list-ul"></i> View Applicants</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-save"></i> <span>Assignment</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('assignment/add');?>"><i class="fa fa-plus"></i> Add Assignment</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('assignment/index');?>"><i class="fa fa-list-ul"></i> View Assignments</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Auditlog</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('auditlog/add');?>"><i class="fa fa-plus"></i> Add Auditlog</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('auditlog/index');?>"><i class="fa fa-list-ul"></i> View Auditlogs</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Block</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('block/add');?>"><i class="fa fa-plus"></i> Add Block</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('block/index');?>"><i class="fa fa-list-ul"></i> View Block</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-graduation-cap"></i> <span>Class</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('theclass/add');?>"><i class="fa fa-plus"></i> Add Class</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('theclass/index');?>"><i class="fa fa-list-ul"></i> View Classes</a>
                                </li>
							</ul>
                        </li>
						<!-- <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Classlist</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('classlist/add');?>"><i class="fa fa-plus"></i> Add Classlist</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('classlist/index');?>"><i class="fa fa-list-ul"></i> View Classlist</a>
                                </li>
							</ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Course</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('course/add');?>"><i class="fa fa-plus"></i> Add Course</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('course/index');?>"><i class="fa fa-list-ul"></i> View Course</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Faculty</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('faculty/add');?>"><i class="fa fa-plus"></i> Add Faculty</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('faculty/index');?>"><i class="fa fa-list-ul"></i> View Faculties</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-book"></i> <span>Lesson</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('lesson/add');?>"><i class="fa fa-plus"></i> Add Lesson</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('lesson/index');?>"><i class="fa fa-list-ul"></i> View Lessons</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Student</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('student/add');?>"><i class="fa fa-plus"></i> Add Student</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('student/index');?>"><i class="fa fa-list-ul"></i> View Students</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-desktop"></i> <span>Subject</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('subject/add');?>"><i class="fa fa-plus"></i> Add Subject</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('subject/index');?>"><i class="fa fa-list-ul"></i> View Subjects</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-calendar-plus-o"></i> <span>Timeslot</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('timeslot/add');?>"><i class="fa fa-plus"></i> Add Timeslot</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('timeslot/index');?>"><i class="fa fa-list-ul"></i> View Timeslot</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-users"></i> <span>User</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('user/add');?>"><i class="fa fa-plus"></i> Add User</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('user/index');?>"><i class="fa fa-list-ul"></i> View Users</a>
                                </li>
							</ul>
                        </li>
						<li>
                            <a href="#">
                                <i class="fa fa-flag"></i> <span>Venue</span>
                            </a>
                            <ul class="treeview-menu">
								<li class="active">
                                    <a href="<?php echo site_url('venue/add');?>"><i class="fa fa-plus"></i> Add Venue</a>
                                </li>
								<li>
                                    <a href="<?php echo site_url('venue/index');?>"><i class="fa fa-list-ul"></i> View Venues</a>
                                </li>
							</ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Main content -->
                <section class="content">
                    <?php                    
                    if(isset($_view) && $_view)
                        $this->load->view($_view);
                    ?>                    
                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <footer class="main-footer">
                <strong>Created By <a href="http://www.facebook.com/ibeeeep">Team CodeOps</a> 2018</strong>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Create the tabs -->
                <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                    
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <!-- Home tab content -->
                    <div class="tab-pane" id="control-sidebar-home-tab">

                    </div>
                    <!-- /.tab-pane -->
                    <!-- Stats tab content -->
                    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                    <!-- /.tab-pane -->
                    
                </div>
            </aside>
            <!-- /.control-sidebar -->
            <!-- Add the sidebar's background. This div must be placed
            immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div>
        <!-- ./wrapper -->

        <!-- jQuery 2.2.3 -->
        <script src="<?php echo site_url('resources\js\jquery.min.js');?>"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="<?php echo site_url('resources/js/bootstrap.min.js');?>"></script>
        <!-- FastClick -->
        <script src="<?php echo site_url('resources/js/fastclick.js');?>"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo site_url('resources/js/app.min.js');?>"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo site_url('resources/js/demo.js');?>"></script>
        <!-- DatePicker -->
        <script src="<?php echo site_url('resources/js/moment.js');?>"></script>
        <script src="<?php echo site_url('resources/js/bootstrap-datetimepicker.min.js');?>"></script>
        <script src="<?php echo site_url('resources/js/global.js');?>"></script>

        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.js');?>"></script>
        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.extensions.js');?>"></script>
        <script src="<?php echo site_url('resources/input-mask/jquery.inputmask.date.extensions.js');?>"></script>




        <script type="text/javascript" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

        <script>
            $('[data-mask]').inputmask();

            $(document).ready(function(){
                 $('#tbapp').DataTable();
            });

            $(document).ready(function(){
                $('#tbuser').DataTable();
            });
            $(document).ready(function(){
                $('#facultyTable').DataTable();
            });
            $(document).ready(function(){
                $('#subjectTable').DataTable();
            });
            $(document).ready(function(){
                $('#timeslotTable').DataTable();
            });
            $(document).ready(function(){
                $('#tblstudent').DataTable();
            });
            $(document).ready(function(){
                $('#classTable').DataTable();
            });
            $(document).ready(function(){
                $('#auditTable').DataTable();
            });
            

        </script>



            </body>
</html>
