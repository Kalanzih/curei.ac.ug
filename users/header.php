
<?php 
    include '../root/config.php';
    include '../root/process.php';

 ?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from rn53themes.net/themes/demo/education-master/admin.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 Oct 2023 15:37:04 GMT -->
<head>
    <title>Admin</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="EEducation master is one of the best eEducational html template, it's suitable for all eEducation websites like university,college,school,online eEducation,tution center,distance eEducation,computer eEducation">
    <meta name="keyword" content="eEducation html template, university template, college template, school template, online eEducation template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon" >
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
   
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="admin>" class="logo"><img src="images/logo2.png" alt="" / >
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
         
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs" aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
               
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="admin" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
						<li><a href="setting"><i class="fa fa-cogs" aria-hidden="true"></i> Site Setting</a>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-book" aria-hidden="true"></i> All Courses</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-master">Master Course</a>
                                    </li>
                                    <li><a href="add-master">Add Master Courses</a>
                                    <li><a href="add-bachelor">Add Bachelor Courses</a>
                                    <li><a href="admin-bachelor">Bachelor Courses</a>
                                    <li><a href="admin-Diploma">Diploma Courses</a>
                                    <li><a href="add-diploma">Add Diploma Courses</a>
                                    <li><a href="add-bridge">Add Brrdging Courses</a>
                                    <li><a href="admin-bridge">Bredging Courses</a>
                                    </li>
                                  
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--<li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-user-all.html">All Users</a>
                                    </li>
                                    <li><a href="admin-user-add.html">Add New user</a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->
                          <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-image" aria-hidden="true"></i> Sliders</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-slider">Sliders</a>
                                    </li>
                                    <li><a href="add-sliders">Add New Slider</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bookmark-o" aria-hidden="true"></i> Management</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-management">Managment</a></li>
                                    <li><a href="add-management">Add Management</a></li>
                                    <li><a href="admin-governance">Governance</a></li>
                                    <li><a href="add-governance">All New Governance</a></li>
                                    <li><a href="admin-boardmember.">Board Members</a></li>
                                    <li><a href="add-board">All New Board Member</a></li>
                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bars" aria-hidden="true"></i>Blogs</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-blogs">Blogs</a></li>
									<li><a href="add-blog">Add Blog</a></li>
								</ul>
                            </div>
                        </li>
						
						
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-events">All Events</a>
                                    </li>
                                    <li><a href="add-events">Create New Events</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-camera" aria-hidden="true"></i> Gallery</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-gallery">Gallery</a>
                                    </li>
                                    <li><a href="add-gallery">Add Gallery</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Job Vacants</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-jobs">All Jobs</a>
                                    </li>
                                    <li><a href="add-jobs">Create New Job</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-bullhorn" aria-hidden="true"></i> Our Partners</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-partners">All Partners</a>
                                    </li>
                                    <li><a href="add-partners">Add New Partner</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       <!-- <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-pencil" aria-hidden="true"></i> Exam time table</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-exam-all.html">All Exams</a></li>
                                    <li><a href="admin-exam-add.html">Add New Exam</a></li>
                                    <li><a href="admin-exam-group-all.html">All Groups</a></li>
                                    <li><a href="admin-exam-group-add.html">Create New Groups</a></li>
                                </ul>
                            </div>
                        </li>-->
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-users" aria-hidden="true"></i> Students Life</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-user-all.html">All Students</a>
                                    </li>
                                    <li><a href="admin-user-add.html">Add New Student</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Discovers</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-all-enquiry.html">All Discovers</a></li>
                                    <li><a href="admin-course-enquiry.html">Add New Discover</a></li>
                                    <li><a href="admin-course-enquiry.html">Partners</a></li>
									<li><a href="admin-course-enquiry.html">Add New Partner</a></li>
									
                                </ul>
                            </div>
                        </li>

                        <li><a href="javascript:void(0)" class="collapsible-header"><i class="fa fa-commenting-o" aria-hidden="true"></i> Research</a>
                            <div class="collapsible-body left-sub-menu">
                                <ul>
                                    <li><a href="admin-research">Research</a></li>
                                    <li><a href="add-research">Add New Research</a></li>
                                                                        
                                </ul>
                            </div>
                        </li>
                    
                    </ul>
                </div>
            </div>