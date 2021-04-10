    <!--Splash Screen-->
    <section class="header3 cid-srPPu4tbYs" data-bg-video="https://www.youtube.com/watch?v=ti6Z_O2muHs" id="header3-a">
        <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(187, 187, 187);"></div>
        <div class="align-center container-fluid">
            <div class="row justify-content-end">
                <div class="col-12 col-lg-6">
                    <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Creativity for
                            Eternity</strong></h1>
                    <h2 class="mbr-section-subtitle mbr-fonts-style mb-3 display-2"></h2>
                    <p class="mbr-text mbr-fonts-style display-7">For fast prototyping and small customers' projects.
                    </p>

                </div>
            </div>
        </div>
    </section>
    <!--end splash screen-->

    <!--Synopsis block-->
    <section class="content1 cid-srQ2Lz4kJV" id="content1-c">

        <div class="container">
            <div class="row justify-content-center">
                <div class="title col-12 col-md-9">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-4 display-2" data-aos="fade-up"
                        data-aos-delay="200"><strong>PT Patra Bersatu Abadi</strong></h3>
                    <h4 class="mbr-section-subtitle align-center mbr-fonts-style mb-4 display-7" data-aos="fade-down"
                        data-aos-delay="300">Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit
                        amet. Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet. Lorep
                        ipsum dolor sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet. Lorep ipsum dolor
                        sit amet Lorep ipsum dolor sit amet Lorep ipsum dolor sit amet</h4>

                </div>
            </div>
        </div>
    </section>
    <!--End Synopsis block-->

    <!--Services block-->
    <section class="features4 cid-srPMwO8OeI services" id="features4-3">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2" data-aos="flip-up"><strong>Our Services</strong></h4>
            </div>
            <div class="row mt-4 justify-content-around">
            	<?php foreach ($service as $servis): ?>	
                <div class="item features-image сol-12 col-md-6 col-lg-6">
                    <div class="item-wrapper box-services" data-aos="flip-right" data-aos-delay="100">
                        <div class="item-img services-img">
                            <img src="<?= base_url('assets/') ?>images/service/<?= $servis['img'] ?>" alt="" title="">
                        </div>
                        <div class="item-content services-content">
                            <h5 class="item-title mbr-fonts-style display-5 services-title"><strong><?= $servis['nama_service'] ?></strong></h5>

                            <p class="mbr-text mt-3 display-7 services-info"><?= $servis['deskripsi'] ?></p>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2">
                            <a href="<?= base_url('services/detail/') ?><?= $servis['link'] ?>" class="btn item-btn btn-black display-7 ">Read More</a>
                        </div>
                    </div>
                </div>
            	<?php endforeach ?>
            </div>
        </div>
    </section>
    <!--End Services block-->

    <!--Testimoni block-->
    <section class="testimonails3 carousel slide testimonials-slider cid-srPMVloO79 mbr-parallax-background"
        data-interval="false" id="testimonials3-4">
        <div class="mbr-overlay" style="opacity: 0.9; background-color: rgb(255, 255, 255);">
        </div>
        <div class="text-center container">
            <h3 class="mb-4 mbr-fonts-style display-2">
                <strong>What Our Fantastic Client Say</strong>
            </h3>
            <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel"
                data-interval="8000">
                <div class="carousel-inner">
                	<?php foreach ($testimoni as $testi): ?>
                		
                    <div class="carousel-item">
                        <div class="user col-md-8">
                            <div class="user_image">
                                <img src="<?= base_url('assets/') ?>images/testi/<?= $testi['img'] ?>">
                            </div>
                            <div class="user_text mb-4">
                                <p class="mbr-fonts-style display-7"><?= $testi['isi'] ?></p>
                            </div>
                            <div class="user_name mbr-fonts-style mb-2 display-7">
                                <strong><?= $testi['oleh'] ?></strong>
                            </div>
                            <div class="user_desk mbr-fonts-style display-7"><?= $testi['posisi'] ?></div>
                        </div>
                    </div>
                	<?php endforeach ?>
                </div>

                <div class="carousel-controls">
                    <a class="carousel-control-prev" role="button" data-slide="prev">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next" role="button" data-slide="next">
                        <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimoni block-->

    <!--News block-->
    <section class="content1 cid-srPN4fVE3X news-home" id="content1-5">
        <div class="container">
            <div class="mbr-section-head">
                <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2" data-aos="zoom-in-up">
                    <strong>&nbsp;News and Articles</strong>
                </h4>
            </div>
            <div class="row mt-4 justify-content-center">
            	<?php foreach ($berita as $news): ?>
            		
                <div class="item features-image сol-12 col-md-6 col-lg-4">
                    <div class="item-wrapper news-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="item-img news-img">
                            <img src="<?= base_url('assets/') ?>images/berita/<?= $news['img'] ?>" alt="" title="">
                        </div>
                        <div class="item-content news-content">
                            <h5 class="item-title mbr-fonts-style display-5 content-title"><a href="news_detail.html"
                                    class="text-primary"><strong><?= $news['judul_berita'] ?></strong></a></h5>

                            <div class="mbr-text mt-3 display-7 content-info"><?= substr($news['isi'] , 0, 150) . ' ...'; ?><br></div>
                        </div>
                        <div class="mbr-section-btn item-footer mt-2 news-footer"><a href="<?= base_url('news/detail/'). $news['link']  ?>"
                                class="btn btn-primary item-btn display-7">Read More</a></div>
                    </div>
                </div>
            	<?php endforeach ?>
            </div>
            <center><a href="<?= base_url('news') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"
                    data-aos="zoom-in">More News</a></center>
        </div>
    </section>
    <!--End News block-->

    <!--Gallery block-->
    <section class="gallery5 mbr-gallery cid-srPNbSS1En" id="gallery5-6">


        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(250, 250, 250);">
        </div>

        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Gallery</strong></h3>

            </div>
            <div class="row mbr-gallery mt-4 justify-content-center">
            	<?php foreach ($gallerys as $img): ?>
            		
                <div class="col-12 col-md-6 col-lg-3 item gallery-image">
                    <div class="item-wrapper" data-toggle="modal" data-target="#srQIY4WF7y-modal">
                        <img class="w-100" src="<?= base_url('assets/') ?>/images/gallery/<?= $img['foto'] ?>" alt="" data-slide-to="0"
                            data-target="#lb-srQIY4WF7y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h6 class="mbr-item-subtitle mbr-fonts-style align-center mb-2 mt-2 display-7">
                        <?= $img['caption'] ?> and <a href="#" class="text-primary">Link</a>
                    </h6>
                </div>
            	<?php endforeach ?>
            </div>

            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="srQIY4WF7y-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide carousel-fade" id="lb-srQIY4WF7y" data-ride="carousel"
                                data-interval="5000">
                                <div class="carousel-inner">
                                	<?php foreach ($gallerys as $img): ?>
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="<?= base_url('assets/') ?>/images/gallery/<?= $img['foto'] ?>" alt="">
                                    </div>
                                	<?php endforeach ?>
                                </div>
                                <ol class="carousel-indicators">
                                    <li data-slide-to="0" class="active" data-target="#lb-srQIY4WF7y"></li>
                                    <li data-slide-to="1" data-target="#lb-srQIY4WF7y"></li>
                                    <li data-slide-to="2" data-target="#lb-srQIY4WF7y"></li>
                                    <li data-slide-to="3" data-target="#lb-srQIY4WF7y"></li>
                                </ol>
                                <a role="button" href="" class="close" data-dismiss="modal" aria-label="Close">
                                </a>
                                <a class="carousel-control-prev carousel-control" role="button" data-slide="prev"
                                    href="#lb-srQIY4WF7y">
                                    <span class="mobi-mbri mobi-mbri-arrow-prev" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next carousel-control" role="button" data-slide="next"
                                    href="#lb-srQIY4WF7y">
                                    <span class="mobi-mbri mobi-mbri-arrow-next" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center><a href="<?= base_url('gallery') ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">More
                    Gallery</a>
            </center>
        </div>
    </section>
    <!--End Gallery block-->

    <!--Contact block-->
    <section class="contacts2 cid-srPNQAJiAY contact" id="contacts2-8">
        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2">
                    <strong>Contacts Us</strong>
                </h3>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper contact-box">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Phone</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="tel:+12345678910" class="text-primary">0 (800) 123 45 67</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper contact-box">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-letter mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Email</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                <a href="mailto:info@site.com" class="text-primary">info@site.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper contact-box">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont mobi-mbri-globe mobi-mbri"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Address</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                4100 Ross Street, Okawville, IL
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-wrapper contact-box">
                        <div class="image-wrapper">
                            <span class="mbr-iconfont socicon-player socicon"></span>
                        </div>
                        <div class="text-wrapper">
                            <h6 class="card-title mbr-fonts-style mb-1 display-5">
                                <strong>Working Hours</strong>
                            </h6>
                            <p class="mbr-text mbr-fonts-style display-7">
                                9:00 - 18:00
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contact block-->
