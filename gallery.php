<?php include 'header.php'; ?>

	<section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Photo Gallery</h1>
                    <p>Ernest Cook Ultrasound Research and Education Institute (ECUREI)  offers accredited programs in Medical Imaging, Biomedical Engineering and other health related courses. These programs are designed to prepare students for successful careers in the healthcare field. Our bridging courses for students who need to meet the prerequisites for admission to a degree program, as well as short courses for specific skills training.</p>
                    <div class="event-head-sub">
                        <ul>
                            <li>Photos: ECUREI</li>
                            <li>Total photos: 500</li>
                            <li>Location: Illunois</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>	
	
    <!--SECTION START-->
    <section>
        <div class="ed-res-bg">
		<div class="container com-sp pad-bot-70 ed-res-bg">
            <div class="row">
                <div class="cor about-sp h-gal ed-pho-gal">
					<ul>
                         <?php $gallery = dbSQL("SELECT * FROM gallery ORDER BY gallery.gal_id DESC ");
                    foreach ($gallery as $gallery) { ?>
						<li><img class="materialboxed" data-caption="Education master image captions" src="<?=$gallery->img; ?>" alt="">
						</li>
                    <?php } ?>
						
					</ul>
                </div>
            </div>
        </div>
		</div>
    </section>
    <!--SECTION END-->
<?php include 'footer.php'; ?>