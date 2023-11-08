<?php 
    include 'root/config.php';
    include 'root/process.php';

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ecurei</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online education,tution center,distance education,computer education">
    <meta name="keyword" content="education html template, university template, college template, school template, online education template, tution center template">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/logo2.png" type="image/x-icon">
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <!-- Add Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<!-- Add Bootstrap JS (jQuery required) -->
<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>



<link rel="stylesheet" type="text/css" href="css/slick.css" />
<link rel="stylesheet" type="text/css" href="css/slick-theme.css" />





  </head>


<body>

    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo">
                        <a href="<?=SITE_URL?>"><img src="images/logo2.png" alt="" style="height: 80px; width: 150px; padding-bottom: 35px;" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4>Academics</h4>
                            <ul>
                                <li><a href="masters">Masters</a></li>
                                <li><a href="bachelors">Bachelors</a></li>
                                <li><a href="diploma">Diplomas</a></li>
                                <li><a href="bridging">Brdging Courses</a></li>
                                <li><a href="#">Short Courses</a></li>
                                <li><a href="admission">How To Apply</a></li>
                                <li><a href="https://admissions.ecurei.ac.ug/">Apply Online Now</a></li>
                                <li><a href="https://payments.pesapal.com/ecurei">Online Fees Payment</a></li>
                                <li><a href="#">International Students</a></li>
                                <li><a href="gallery-photo">Scholarships and Awards</a></li>
                            </ul>
                            <h4>User Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="<?=SITE_URL?>">Home</a></li>
                                <li><a href="about">About us</a></li>
                                <li><a href="admission">Admission</a></li>
                                <li><a href="course-details">Course details</a></li>
                                <li><a href="awards">Awards</a></li>
                                <li><a href="#">Seminar</a></li>
                                <li><a href="events">Events</a></li>
                                <li><a href="blog">News</a></li>
                            </ul>
                            <h4>User Profile</h4>
                            <ul>
                                <li><a href="dashboard">User profile</a></li>
                                <li><a href="db-courses">Courses</a></li>
                                <li><a href="db-exams">Exams</a></li>
                                <li><a href="db-profile">Prfile</a></li>
                                <li><a href="db-time-line">Time line</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Mengo Hosptial, Albert Cook Building.</a>
                                </li>
                                <li><a href="#"> +256 780316765, +256 708500204</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                               
                            </ul>
                        </div>
                        <div class="ed-com-t1-social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250" style="font-style: poppins; font-size: 14px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-1" style="margin-left: 0;">
                        <div class="wed-logo">
                            <a href="<?=SITE_URL?>"><img src="images/logo3.png" alt="" style="height: 80px; width: 150px;  "/>
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-md-10">
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?=SITE_URL?>">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="about" class="mm-arr">About us</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="admission">
                                                            <img src="images/h-about.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Want to change the world? At Berkeley we’re doing just that. When you join the Golden Bear community, you’re part of an institution that shifts the global conversation every single day.</p>
                                                    <a href="about" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="all-courses">Academics</a></li>
                                                        <li><a href="course-details">Course details</a></li>
                                                        <li><a href="admission">Apply Now</a></li>
                                                        <li><a href="about">About</a></li>
                                                        <li><a href="gorvernance">Gorvernance</a></li>
                                                        <li><a href="management">Management</a></li>
                                                        <li><a href="awards">Awards</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="departments">Departments</a></li>
                                                        <li><a href="dashboard">Student profile</a></li>
                                                        <li><a href="db-courses">Dashboard courses</a></li>
                                                        <li><a href="db-exams">Dashboard exams</a></li>
                                                        <li><a href="db-profile">Dashboard profile</a></li>
                                                        <li><a href="db-time-line">Dashboard timeline</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="#" class="mm-arr">Admission</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="about">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Academics</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="about" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="admission">
                                                            <img src="images/h-adm1.jpg" alt="">
                                                            <span>Admission</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="admission" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="awards">
                                                            <img src="images/h-cam1.jpg" alt="">
                                                            <span>History & awards</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="awards" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#">
                                                            <img src="images/h-res1.jpg" alt="">
                                                            <span>Seminar 2018</span>
                                                        </a>
                                                    </div>
                                                    <p>Donec lacus libero, rutrum ac sollicitudin sed, mattis non eros. Vestibulum congue nec eros quis lacinia. Mauris non tincidunt lectus. Nulla mollis, orci vitae accumsan rhoncus.</p>
                                                    <a href="#" class="mm-r-m-btn">Read more</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                             



                                <li class="cour-menu">
                                    <a href="#!" class="mm-arr">Academics</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos" >
                                        <div class="cour-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Programs</h4>
                                                    <ul>
                                                        
														<li><a href="masters">Masters</a></li>
														<li><a href="bachelors">Bachelors</a></li>
														<li><a href="diploma">Diplomas</a></li>
														<li><a href="bredging">Brdging Courses</a></li>
														<li><a href="#">Short Courses</a></li>
														
													</ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Admissions</h4>
                                                    <ul>
														<li><a href="admission">How To Apply</a></li>
														<li><a href="https://admissions.ecurei.ac.ug/">Apply Online Now</a></li>
														<li><a href="https://payments.pesapal.com/ecurei">Online Fees Payment</a></li>
														<li><a href="#">International Students</a></li>
														<li><a href="awards">Scholarships and Awards</a></li>
                                                    </ul>
													
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4 >Campus</h4>
                                                    <ul>
                                                        <li><a href="#">Freshers' Orientation Guide</a></li>
                                                        <li><a href="#">Graduation</a></li>
                                                        <li><a href="gallery">ECUREI Gallery</a></li>
                                                        <li><a href="#">Academic Events</a></li>
                                                       
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s3">
													<h4>Branches</h4>
                                                    <ul>
														<li><a href="#">Main Branch</a></li>
														<li><a href="#">Balintuma Branch</a></li>
														
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-cour-com mm1-s4">
													<h4>Intakes</h4>
                                                    <ul>
														<li><a href="#">CUREI Intakes</a></li>
														
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="events">Events</a>
                                </li>
                                <li><a href="students">Students</a>
                                </li>
                                <li><a href="blog">News</a>


                                
                            </ul>

                        </div>

                    </div>

                    <div class="all-drop-down-menu">


                    </div>


                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search course and discount courses">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="course-details">Accounting/Finance</a></li>
                                            <li><a href="course-details">civil engineering</a></li>
                                            <li><a href="course-details">Art/Design</a></li>
                                            <li><a href="course-details">Marine Engineering</a></li>
                                            <li><a href="course-details">Business Management</a></li>
                                            <li><a href="course-details">Journalism/Writing</a></li>
                                            <li><a href="course-details">Physical Education</a></li>
                                            <li><a href="course-details">Political Science</a></li>
                                            <li><a href="course-details">Sciences</a></li>
                                            <li><a href="course-details">Statistics</a></li>
                                            <li><a href="course-details">Web Design/Development</a></li>
                                            <li><a href="course-details">SEO</a></li>
                                            <li><a href="course-details">Google Business</a></li>
                                            <li><a href="course-details">Graphics Design</a></li>
                                            <li><a href="course-details">Networking Courses</a></li>
                                            <li><a href="course-details">Information technology</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit" >
                                    <input type="submit" value="Search Course">
                                </div>
                            </form>

                        </div>


                    </div>


            <div class="col-md-3" style=" width:200px; ">
                <a href="admission" class="main-btn" >APPLY NOW</a>
                
            </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->