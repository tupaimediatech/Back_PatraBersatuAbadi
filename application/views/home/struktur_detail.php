    <!--Structur block-->
    <section class="content1 cid-srPN4fVE3X profile" id="profile">
        <div class="container">
            <a href="<?= base_url('struktur#structure') ?>">
                <i class="fa fa-arrow-left" style="font-size:30px;"></i>
            </a>
            <div class="row mt-4 justify-content-between a">
                <div class="kotak col-12" data-aos="zoom-in" data-aos-delay="100">
                    <div class="row">
                        <div class="hitam col-12 col-lg-4">
                            <img src="<?= base_url('assets/') ?>assets/images/<?= $struktur[0]['img'] ?> ?>" alt="" style="position: absolute;" data-aos="zoom-in" data-aos-delay="300">
                        </div>
                        <div class="putih col-12 col-lg-8" data-aos="zoom-in" data-aos-delay="200">
                            <h5 class="item-title mbr-fonts-style display-5 content-title text-primary text-center">
                                <strong><?= $struktur[0]['nama'] ?></strong>
                            </h5>
                            <p class="mbr-text display-7 content-info text-center"><strong><?= $struktur[0]['posisi'] ?></strong><br>
                            </p>
                            <div class="mbr-text mt-3 display-7 content-info text-kecil overflow-auto"><?= $struktur[0]['deskripsi'] ?><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Structur block-->