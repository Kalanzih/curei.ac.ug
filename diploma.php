<?php include 'header.php'; ?>

    <section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Diploma <span>Courses</span></h2>
                    <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field. Our bridging courses for students who need to meet the prerequisites for admission to a degree program, as well as short courses for specific skills training.</p>

                </div>
            </div>
           <div class="container">
              <div class="row">



           <?php $diploma = dbSQL("SELECT * FROM diploma ORDER BY diploma.dip_id DESC ");
                    foreach ($diploma as $diploma) { ?>
                <div class="col-md-6">
                  
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour"  style="background: #d9dce5;">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-3"> <img src="<?=$diploma->img; ?>" alt="" > </div>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <a href="course-details">
                                    <h3 style="font-size: 18px; color: #29419a"><?=$diploma->course_name; ?></h3>
                                </a>
                                <h4>Department: <?=$diploma->department; ?> </h4>
                                <h4>Durration: <?=$diploma->durration; ?> </h4>
                                <h4>Requirements: <?=$diploma->requirments ; ?> </h4>
                                <h4>Intake: March</h4>
                                <div class="hom-list-share">
                                    <ul>
                                        <li><a href="course-details" style="width: 100%; height: 20%;"><i class="fa fa-bar-chart" aria-hidden="true" ></i> More Details</a> </li>
                                        <li><a href="course-details"><i class="fa fa-eye" aria-hidden="true"></i>10 Aavailable</a> </li>
                                        <li><a href="course-details"><i class="fa fa-share-alt" aria-hidden="true"></i> 570</a> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--POPULAR COURSES-->
               </div>
          <?php } ?>
               
            </div> 
            
        </div>
    </section>

    

   <?php include 'footer.php'; ?>