   <?php include 'header.php'; ?>

    <!--SECTION START-->
    <section>
        <div class="container com-sp">
            <div class="row">
                <div col-md-12>
                <div class="con-title"  style="margin-left: 1px;">
                            <h2>School <span> Events</span></h2>
                            <p >Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs.</p>
                        </div>

                </div>
            </div>
                <div class="row">
                    <div class="col-md-12">
                  
                        
                        <div>
                            <div class="ho-event pg-eve-main">
                                <ul>
                                <?php $event = dbSQL("SELECT * FROM events ORDER BY events.ev_id DESC ");
					            foreach ($event as $event) { ?>
                                
                                        <li>
                                                <div class="ho-ev-date pg-eve-date"><?=$event->evdate ; ?></div>
                                               <a href="event-register.html">
                                                        <h4><?=$event->evname ; ?></h4>
                                                    </a>
                                                    <p><?=$event->description ; ?></p>
                                                    <span style="margin-left: 100px;" ><?=$event->evtime ; ?></span>
                                                </div>
                                                <div class="pg-eve-reg">
                                                    <a href="#">Register</a><a href="#">Read more</a>
                                                </div>
                                            </li>

                                <?php } ?>


                                </ul>
                            </div>
                        </div>
                        <div class="pg-pagina">
                            <ul class="pagination">
                                <li class="disabled"><a href="#!"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
                                <li class="active"><a href="#!">1</a></li>
                                <li class="waves-effect"><a href="#!">2</a></li>
                                <li class="waves-effect"><a href="#!">3</a></li>
                                <li class="waves-effect"><a href="#!">4</a></li>
                                <li class="waves-effect"><a href="#!">5</a></li>
                                <li class="waves-effect"><a href="#!"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

                    </div>

                </div>
                
            </div>
        </div>
    </section>
    <!--SECTION END-->

   <?php include 'footer.php'; ?>