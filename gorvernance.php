

<?php include 'header.php'; ?>
<section class="pop-cour">
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>School <span>Gorvance</span></h2>
                   <!-- <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI) offers accredited programs in Medical Imaging,
                        Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.</p>-->

                        <h4 style="color:blue;">"Members of the School Governance"</h4>
                </div>
            </div>
             <div class="row">

            <?php $governance = dbSQL("SELECT * FROM governance ORDER BY governance.gv_id DESC ");
                    foreach ($governance as $governance) { ?>
                <div class="col-md-3">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-12"> <img src="<?=$governance->img; ?>" alt=""> </div><br><br>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <h5 style="color:blue; margin-top:2px;"><?=$governance->name; ?></h5>
                                <a href="about ">
                                    <h5><?=$governance->possition; ?></h5>
                                </a>
                        </div>
                        </div>

          


                    </div>
                </div>
                  <?php } ?>

            </div>
        </div>

        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Board of <span>Directors</span></h2>
                   <!-- <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI) offers accredited programs in Medical Imaging,
                        Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field.</p>-->

                        <h4 style="color:blue;">"Members of Board Of Directors"</h4>
                </div>
            </div>
             <div class="row">

            <?php $boardmember = dbSQL("SELECT * FROM boardmember ORDER BY boardmember.bd_id DESC ");
                    foreach ($boardmember as $boardmember) { ?>

                <div class="col-md-3">
                    <div>
                        <!--POPULAR COURSES-->
                        <div class="home-top-cour">
                            <!--POPULAR COURSES IMAGE-->
                            <div class="col-md-12"> <img src="<?=$boardmember->img; ?>" alt=""> </div><br><br>
                            <!--POPULAR COURSES: CONTENT-->
                            <div class="col-md-9 home-top-cour-desc">
                                <h5 style="color:blue; margin-top:2px;"><?=$boardmember->name; ?></h5>
                                
                        </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

             

               
               
            </div>
        </div>
    </section>
<?php include 'footer.php'; ?>