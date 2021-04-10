
    <!--News block-->
    <section class="content1 cid-srPN4fVE3X news-detail" id="content1-5">
        <div class="container">
            <div class="row mt-3 justify-content-center ">
                <div class="images col-12" data-aos="zoom-in-up" data-aos-delay="100">
                    <img src="<?= base_url() ?>assets/images/berita/mbr-6.jpg" alt="">
                </div>
                <div class="content col-12 mt-3" data-aos="zoom-in-up" data-aos-delay="200">
                    <p class="display-7 tanggal"><small><?= format_indo2($berita[0]['tanggal']) ?></small> </p>
                    <h5 class="item-title mbr-fonts-style display-5 content-title"><a href="#top"
                            class="text-primary"><strong><?= $berita[0]['judul_berita'] ?></strong></a></h5>
                    <div class="mbr-text mt-3 display-7 content-info"> <?= $berita[0]['isi'] ?> </div>

                </div>
            </div>
        </div>
    </section>
    <!--End News block-->
