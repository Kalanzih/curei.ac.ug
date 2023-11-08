<?php include 'header.php'; ?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp pad-bot-70 pg-inn">
            <div class="row">
                <div class="cor">
                    <div class="col-md-3">

                       <div class="cor-side-com">
                            <div class="">
                                <div class="de-left-tit">
                                    <h4>More Stories</h4>
                                </div>
                            </div>
                            <div class="ho-event">
                                <ul>
                                    
                <?php $blog = dbSQL("SELECT * FROM blog ORDER BY blog.bl_id DESC ");
                    foreach ($blog as $blog) { ?>
                                    <li>
                                        <div class="ho-ev-link ho-ev-link-full">
                                            <a href="#">
                                                <h4><?=$blog->header; ?></h4>
                                            </a>
                                            
                                        </div>
                                    </li>
                        <?php } ?>



                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php $blog = dbSQL("SELECT * FROM blog ORDER BY blog.bl_id DESC limit 1 ");
                    foreach ($blog as $blog) { ?>
                    <div class="col-md-6">
                        <div class="cor-mid-img">
                            <img src="<?=$blog->img; ?>" alt="">
                        </div>
                       
                
                        <div class="cor-con-mid">
                            <div class="cor-p1">
                                <h4><?=$blog->header; ?></h4>
                              <div class="share-btn">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook fb1"></i> Share On Facebook</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-twitter tw1"></i> Share On Twitter</a>
                                        </li>
                                        <li><a href="#"><i class="fa fa-google-plus gp1"></i> Share On Google Plus</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cor-p4">
                                <p><?=$blog->body; ?></p>
                            </div>
                            
                        </div>

                      

                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!--SECTION END-->
 
<?php include 'footer.php'; ?>