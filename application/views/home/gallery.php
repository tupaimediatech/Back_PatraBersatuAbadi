
    <!--Gallery block-->
    <section class="gallery5 mbr-gallery cid-srPNbSS1En gallery" id="gallery5-6">


        <div class="mbr-overlay" style="opacity: 0.8; background-color: rgb(250, 250, 250);">
        </div>

        <div class="container">
            <div class="mbr-section-head">
                <h3 class="mbr-section-title mbr-fonts-style align-center m-0 display-2"><strong>Gallery</strong></h3>
            </div>
            <div class="button-group filter-button-group text-left mt-5">
                <button data-filter="*" class="btn btn-primary">Show All</button>
                <?php foreach ($service as $serv): ?>
                    
                <button data-filter=".<?=$serv['link'] ?>" class="btn btn-primary"><?= $serv['nama_service'] ?></button>
                <?php endforeach ?>
            </div>
            <div class="row mbr-gallery mt-4 grid">
                <?php $i=0; foreach ($gallery as $img): ?>
                    
                <div class="col-12 col-md-6 col-lg-3 item gallery-image element-item <?= $img['link'] ?>">
                    <div class="item-wrapper" data-toggle="modal" data-target="#srQIY4WF7y-modal">
                        <img class="w-100" src="<?= base_url('assets') ?>/images/gallery/<?= $img['foto'] ?>" alt="" data-slide-to="<?= $i++ ?>"
                            data-target="#lb-srQIY4WF7y">
                        <div class="icon-wrapper">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                        </div>
                    </div>
                    <h5 class="gallery-title"><?= $img['caption'] ?></h5>
                    <p class="gallery-info"><?= $img['tanggal'] ?></p>
                </div>
                <?php endforeach ?>

            </div>

            <div class="modal mbr-slider" tabindex="-1" role="dialog" aria-hidden="true" id="srQIY4WF7y-modal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="carousel slide carousel-fade" id="lb-srQIY4WF7y" data-ride="carousel"
                                data-interval="5000">
                                <div class="carousel-inner gcontainer">

                                    <!-- <div class="carousel-item active">
                                        <img class="d-block w-100" src="assets/images/features1.jpg" alt="">
                                    </div> -->
                                    <?php $i=1; foreach ($gallery as $img): ?>
                                        
                                    <div class="carousel-item <?= $i == 1 ? 'active' : '' ?>" <?php $i++ ?>>
                                        <img class="d-block w-100" src="<?= base_url('assets') ?>/images/gallery/<?= $img['foto'] ?>" alt="">
                                    </div>
                                    <?php endforeach ?>
                                    
                                </div>
                                <ol class="carousel-indicators">
                                    
                                    <?php $i=0; foreach ($gallery as $img): ?>
                                        
                                    <li data-slide-to="<?= $i ?>" class=" <?= $i == 0 ? 'active' : '' ?> element-item" <?php $i++ ?>
                                        data-target="#lb-srQIY4WF7y"></li>
                                    <?php endforeach ?>
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
        </div>
    </section>
    <!--End Gallery block-->
