<?php include 'header.php'; ?>

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
           
           <?php $slider = dbSQL("SELECT * FROM slider ORDER BY slider.sl_id DESC limit 1");
					foreach ($slider as $slider) { ?>
            
                <div class="item slider1 active">
                    <img src="<?=$slider->img; ?>" alt="" >
                    <div class="carousel-caption slider-con" style="background-color: rgba(0, 0, 0, 0.5); background-size: cover; margin: 0 auto; height: 100%; width:150%; margin-left: -20%; top: 0%;">
                        <div style="width: 850px; padding: 10px; margin-left: 500px; margin-top: 6%;">
                            <h2 style="color: white;"><?=$slider->heading; ?></span></h2>
                        <p><?=$slider->statement ; ?></p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php $slider = dbSQL("SELECT * FROM slider ORDER BY slider.sl_id DESC ");
					foreach ($slider as $slider) { ?>
            
                <div class="item">
                    <img src="<?=$slider->img; ?>" alt="" >
                    <div class="carousel-caption slider-con" style="background-color: rgba(0, 0, 0, 0.5); background-size: cover; margin: 0 auto; height: 100%; width:150%; margin-left: -20%; top: 0%;">
                        <div style="width: 850px; padding: 10px; margin-left: 500px; margin-top: 6%;">
                            <h2 style="color: white;"><?=$slider->heading; ?></span></h2>
                        <p><?=$slider->statement ; ?></p>
                        <a href="#" class="bann-btn-1">All Courses</a><a href="#" class="bann-btn-2">Read More</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>


    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs.</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="about.html">
                                <img src="images/h-about.jpg" alt="">
                                <span>Academics</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="admission">
                                <img src="images/h-adm1.jpg" alt="">
                                <span>Admission</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="dashboard.html">
                                <img src="images/h-cam.jpg" alt="">
                                <span>Students profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="research.html">
                                <img src="images/h-res.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="all-courses">
                                <img src="images/h-about1.jpg" alt="">
                                <span>Couse</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="db-time-line.html">
                                <img src="images/h-adm.jpg" alt="">
                                <span>Exam Time Line</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="seminar.html">
                                <img src="images/h-cam1.jpg" alt="">
                                <span>Seminar 2018</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="events.html">
                                <img src="images/h-res1.jpg" alt="">
                                <span>Research & Education</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- POPULAR COURSES -->
    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Popular <span>Courses</span></h2>
                    <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs.</p>
                </div>
            </div>
            <div class="row">
               
                <?php $bachelors = dbSQL("SELECT * FROM bachelors ORDER BY bachelors.bach_id DESC  limit 2");
                    foreach ($bachelors as $bachelors) { ?>
            
                <div class="col-md-6">
                    <div>
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                           
                            <div class="col-md-3"> <img src="<?=$bachelors->img; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details">
                                    <h3><?=$bachelors->course_name; ?></h3>
                                </a>
                                <h4>Department: <?=$bachelors->department; ?> </h4>
                                <h4>Durration: <?=$bachelors->durration; ?> / Intake: March</h4>
                                <h4>Requirements: <?=$bachelors->requirments ; ?> </h4>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="bachelors"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
         <?php } ?>

        <?php $courses = dbSQL("SELECT * FROM courses ORDER BY courses.cor_id DESC limit 2");
                    foreach ($courses as $courses) { ?>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="<?=$courses->img; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details">
                                    <h3><?=$courses->course_name; ?></h3>
                                </a>
                                <h4>Department: <?=$courses->department; ?> </h4>
                                <h4>Durration: <?=$courses->durration; ?> / Intake: March</h4>
                                <h4>Requirements: <?=$courses->requirments ; ?> </h4>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="masters"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
             <?php } ?>

            </div>

             <div class="row">
               
               
        <?php $diploma = dbSQL("SELECT * FROM diploma ORDER BY diploma.dip_id DESC limit 2");
                    foreach ($diploma as $diploma) { ?>
                <div class="col-md-6">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="<?=$diploma->img; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details">
                                    <h3><?=$diploma->course_name; ?></h3>
                                </a>
                                <h4>Department: <?=$diploma->department; ?> </h4>
                                <h4>Durration: <?=$diploma->durration; ?> / Intake: March</h4>
                                <h4>Requirements: <?=$diploma->requirments ; ?> </h4>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="diploma"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
             <?php } ?>

              <?php $bridge = dbSQL("SELECT * FROM bridge ORDER BY bridge.br_id DESC  limit 2");
                    foreach ($bridge as $bridge) { ?>
            
                <div class="col-md-6">
                    <div>
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                           
                            <div class="col-md-3"> <img src="<?=$bridge->img; ?>" alt=""> </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details">
                                    <h3><?=$bridge->course_name; ?></h3>
                                </a>
                                <h4>Department: <?=$bridge->department; ?> </h4>
                                <h4>Durration: <?=$bridge->durration; ?> / Intake: March</h4>
                                <h4>Requirements: <?=$bridge->requirments ; ?> </h4>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="bridging"><i class="fa fa-bar-chart" aria-hidden="true"></i> Book Now</a> </li>
                                        <li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                </div>
            </div>
         <?php } ?>

            </div>
        </div>
    </section>

    <!-- UPCOMING EVENTS -->
    <section>
        <div class="container com-sp pad-bot-0">
            <div class="row">
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-1">
                        <div class="ho-lat-ev">
                            <h4>Upcoming Event</h4>
                            <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                    <?php $event = dbSQL("SELECT * FROM events ORDER BY events.ev_id DESC ");
					foreach ($event as $event) { ?>

                            <li>
                                <div class="ho-ev-date"><?=$event->evdate ; ?></span>
                                </div>
                                <div class="ho-ev-link">
                                    <a href="events">
                                        <h4><?=$event->evname ; ?></h4>
                                    </a>
                                    <p><?=$event->description ; ?></p>
                                    <span><?=$event->evtime ; ?></span>
                                </div>
                            </li>
                    
                 <?php } ?>


                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-2">
                        <div class="ho-lat-ev">
                            <h4>Job Vacants</h4>
                            <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs.</p>
                        </div>
                    </div>
                    <div class="ho-event ho-event-mob-bot-sp">
                        <ul>
                    <?php $jobs = dbSQL("SELECT * FROM jobs ORDER BY jobs.job_id DESC ");
					foreach ($jobs as $jobs) { ?>  

                            <li>
                                <div class="ho-ev-img"><img src="<?=$jobs->img ; ?>" alt="">
                                </div>
                                <div class="ho-ev-link">
                                    <a href="#">
                                        <h4><?=$jobs->jname ; ?></h4>
                                    </a>
                                    <p><?=$jobs->detail ; ?></p>
                                    <span><?=$jobs->location ; ?></span>
                                </div>
                            </li>
                        <?php } ?>
                           
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <!--<div class="ho-ex-title">
							<h4>Upcoming Event</h4>
						</div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4>Register & Login</h4>
                            <p>Student area velit convallis venenatis lacus quis, efficitur lectus.</p>
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s6"><a href="#hom-vijay">Register</a>
                            </li>
                            <li class="tab col s6"><a href="#hom_log">Login</a>
                            </li>
                        </ul>
                        <div id="hom-vijay" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>User name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Email id</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="password" class="validate">
                                        <label>Confirm password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="col s12">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Student user name</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate">
                                        <label>Password</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Login" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- NEWS AND EVENTS -->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div class="con-title">
                    <h2>News and <span>Events</span></h2>
                    <p>See the latest news thats is happening around our school and the health secotr at large.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="bot-gal h-gal ho-event-mob-bot-sp">
                        <h4>Photo Gallery</h4>
                        <ul>
                            <?php $gallery = dbSQL("SELECT * FROM gallery ORDER BY gallery.gal_id DESC limit 12");
                             foreach ($gallery as $gallery) { ?>

                            <li><img class="materialboxed" data-caption="Education master image captions" src="<?=$gallery->img ; ?>" alt="">
                            </li>
                            <?php } ?>


                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-vid ho-event-mob-bot-sp">
                        <h4>Video Gallery</h4>
                        <iframe src="https://www.youtube.com/embed/2WqFtiR4-F4?autoplay=0&amp;showinfo=0&amp;controls=0" allowfullscreen></iframe>
                        <h5>Maecenas sollicitudin lacinia</h5>
                        <p>Maecenas finibus neque a tellus auctor mattis. Aliquam tempor varius ornare. Maecenas dignissim leo leo, nec posuere purus finibus vitae.</p>
                        <p>Quisque vitae neque at tellus malesuada convallis. Phasellus in lectus vitae ex euismod interdum non a lorem. Nulla bibendum. Curabitur mi odio, tempus quis risus cursus.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bot-gal h-blog ho-event">
                        <h4>News & Event</h4>
                        <div class="ho-event">
                            <ul>
                                <li>
                                    <div class="ho-ev-date"><span>07</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="blog">
                                            <h4>Latinoo College Expo 2018</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>12</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="blog">
                                            <h4>Training at Team Fabio Clemente</h4>
                                        </a>
                                        <p>Nulla at velit convallis venenatis.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>26</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="blog">
                                            <h4>Nulla at velit convallis</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="ho-ev-date"><span>18</span><span>jan,2018</span>
                                    </div>
                                    <div class="ho-ev-link">
                                        <a href="blog">
                                            <h4>Admissions Information Session and Tour</h4>
                                        </a>
                                        <p>Nulla at velit convallis, venenatis lacus quis, efficitur lectus.</p>
                                        <span>9:15 am – 5:00 pm</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <section >
        <div class="container">
            <div class="row">
                <div class="col-md-2"  style="background: #29419a; ">
                    <div class="section-title pb-45">
                        <h2 style="color: white; padding: 30px; font-size: 17px; text-align: center; ">Our Partners</h2>
                       </div> <!-- section title -->
                </div>
             <!-- row -->
            <div class="col-md-10" >
            <div id="carousel-slider">


            <div class="col-md-2">
                <div class="carousel-item active">
                        <img src="images/medequip.jpg" alt="Course" style="width: 130px; height:90px">
                 </div>
                </div>

                <div class="col-md-2">
                    <div class="image">
                                <img src="images/mengo.jpg" alt="Course" style="width: 120px; height:120px">
                    </div>
                    
                </div>

                 <div class="col-md-2">
                    <div class="image">
                                <img src="images/mindray.jpg" alt="Course" style="width: 150px; height:90px">
                            </div>
                    
                </div>

                <div class="col-md-2">
                    <div class="image">
                                <img src="images/pacific.jpg" alt="Course" style="width: 150px; height:90px">
                            </div>
                    
                </div>

                <div class="col-md-2">
                    <div class="image">
                                <img src="images/renu.jpg" alt="Course" style="width: 150px; height:90px">
                            </div>
                    
                </div>

                <div class="col-md-2">
                    <div class="image">
                                <img src="images/updf.jpg" alt="Course" style="width: 120px; height:120px">
                            </div>
                    
                </div>




        </div>

        </div> <!-- singel course -->
            </div>
            </div> <!-- course slied -->
        
    </section> <br><br>



<?php include 'footer.php'; ?>