

<?php include 'header.php'; ?>

<section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>School Management</h2>
                    <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI) offers accredited programs in Medical Imaging,
                        Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.</p>

                        <h4 style="color:blue;">"Choose a course where a job is guaranteed"</h4>
                </div>
            </div>
            <div class="row">


            <?php $management = dbSQL("SELECT * FROM management ORDER BY management.mg_id DESC ");
                    foreach ($management as $management) { ?>

                <div class="col-md-3">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-12"> <img src="<?=$management->img; ?>" alt=""> </div><br><br>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <h5 style="color:blue; margin-top:2px;"><?=$management->name; ?></h5>
                                <a href="about ">
                                    <h5><?=$management->possition; ?></h5>
                                </a>
                        </div>
                        </div>
                    </div>
                </div>
            <?php } ?>


               
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>