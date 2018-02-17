<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cricket-info</title>
        <!-- Core CSS - Include with every page -->
        <link href="<?php echo base_url(); ?>/assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>/assets/css/main-style.css" rel="stylesheet" />
        <!-- Page-Level CSS -->
        <link href="<?php echo base_url(); ?>/assets/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <script src="<?php echo base_url(); ?>/js/country.js"  type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>/js/ckeditor/ckeditor.js"  type="text/javascript"></script>

    </head>
    <body>
        <!--  wrapper -->
        <div id="wrapper">
            <!-- navbar top -->
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
                <!-- navbar-header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="" />
                    </a>
                </div>
                <!-- end navbar-header -->
                <!-- navbar-top-links -->
                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-3x"></i>
                        </a>
                        <!-- dropdown user-->
                        <ul class="dropdown-menu dropdown-user">                      
                            <li class="divider"></li>
                            <li><a href="<?php echo base_url(); ?>super_admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li>
                            
                        </ul>
                <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
                </ul>
                <!-- end navbar-top-links -->

            </nav>
            <!-- end navbar top -->

            <!-- navbar side -->
            <nav class="navbar-default navbar-static-side" role="navigation">
                <!-- sidebar-collapse -->
                <div class="sidebar-collapse">
                    <!-- side-menu -->
                    <ul class="nav" id="side-menu">
                        <li>
                            <!-- user image section-->
                            <div class="user-section">
                                <div class="user-section-inner">
                                    <img src="<?php echo base_url(); ?>assets/img/user.jpg" alt="">
                                </div>
                                <div class="user-info">
                                    <div>Iqbal <strong>Hossain</strong></div>
                                    <div class="user-text-online">
                                        <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                    </div>
                                </div>
                            </div>
                            <!--end user image section-->
                        </li>
                        <li class="sidebar-search">
                            <!-- search section-->
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!--end search section-->
                        </li>
                        <li class="selected">
                            <a href="<?php echo base_url(); ?>super_admin/"><i class="fa fa-dashboard fa-fw"></i>Dashboard</a>
                        </li>


                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Category Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>super_admin/category_form">Add Category</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>super_admin/all_category">View Category</a>
                                </li>

                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Blog Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>super_admin/add_blog">Add Blog</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>super_admin/all_blog">view blog</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Admin Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="<?php echo base_url(); ?>super_admin/add_admin">Add Admin</a>
                                </li>
                                
                                 <li>
                                     <a href="<?php echo base_url();?>super_admin/all_admin">view Admin</a>
                                 </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Biography Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="<?php echo base_url(); ?>biography_admin/add_biography">Add Biography</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>biography_admin/all_biography">view Biography</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i>Slider Elements<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url(); ?>slider_admin/add_slider">Add Slider</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>slider_admin/all_slider">View Slider</a>
                                </li>
                            </ul>
                            <!-- second-level-items -->
                        </li>
                        
                       
                    </ul>
                    <!-- end side-menu -->
                </div>
                <!-- end sidebar-collapse -->
            </nav>
            <!-- end navbar side -->
            <!--  page-wrapper -->
            <div id="page-wrapper">



                <?php echo $adminmaincontent; ?>



            </div>
            <!-- end page-wrapper -->

        </div>
        <!-- end wrapper -->

        <!-- Core Scripts - Include with every page -->
        <script src="<?php echo base_url(); ?>assets/plugins/jquery-1.10.2.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.js"></script>
        <script src="<?php echo base_url(); ?>assets/scripts/siminta.js"></script>
        <!-- Page-Level Plugin Scripts-->
        <script src="<?php echo base_url(); ?>assets/plugins/morris/raphael-2.1.0.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.js"></script>
        <script src="<?php echo base_url(); ?>assets/scripts/dashboard-demo.js"></script>
        <script src="<?php echo base_url(); ?>assets/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/jquery.dataTables.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.datatables/1.10.9/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>
    </body>

</html>
