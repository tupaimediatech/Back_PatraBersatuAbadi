
    <!--News block-->
    <section class="content1 cid-srPN4fVE3X news-collection" id="content1-5">
        <div class="container">
            <div class="row mt-5 justify-content-center ">
                <div class="box col-12" data-aos="zoom-in-up" data-aos-delay="100">
                    <?php $a=1; foreach ($berita as $news): ?>
                        <div class="row <?= ($a%2) == 0 ? 'd-flex flex-row-reverse' : '' ?>">
                            <div class="images p-0 col-12 col-lg-6" <?php $a++ ?>>
                                <img src="<?= base_url('assets/') ?>images/berita/<?= $news['img'] ?>" alt="">
                            </div>
                            <div class="content col-12 col-lg-6">
                                <h5 class="item-title mbr-fonts-style display-5 content-title"><a href="<?= base_url('news/detail/'). $news['link']  ?>" class="text-primary"><strong>News Title Here </strong></a></h5>
                                <p class="tanggal"><small><?= format_indo($news['tanggal'])?></small></p>
                                <div class="mbr-text mt-3 display-7 content-info"><?= substr($news['isi'] , 0, 240) . ' ...'; ?><br></div>
                                <div class="mbr-section-btn item-footer mt-2 news-footer"><a href="<?= base_url('news/detail/'). $news['link']  ?>"
                                        class="btn btn-primary item-btn display-7">Read More</a></div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
    <!--End News block-->
    
    <!-- Paggination block -->
    <div class="pagination-box d-flex justify-content-center">
        <nav aria-label="...">
            <ul class="pagination pagination-md">
                <li class="page-item">
                    <a class="page-link" href="<?= base_url('news/') ?>">Previous</a>
                </li>
                <?php if ($stop == 'tidak'): ?>
                    <li class="page-item"><a class="page-link" href="<?= ($this->uri->segment(3)-1) == 1 ? base_url('news/') : base_url('news/page/').($this->uri->segment(3)-1) ?>"><?= ($this->uri->segment(3)-1) ?></a></li>
                    <li class="page-item active"><a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)) ?>"><?= $this->uri->segment(3) ?></a></li>
                    <li class="page-item"><a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)+1) ?>"><?= ($this->uri->segment(3)+1) ?></a></li>
                    <li class="page-item">
                        <a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)+1) ?>">Next</a>
                    </li>
                <?php endif ?>
                <?php if ($stop == 'ya'): ?>
                    <?php if (($this->uri->segment(3)-2) != 0): ?>
                        <li class="page-item"><a class="page-link" href="<?= ($this->uri->segment(3)-1) == 1 ? base_url('news/') : base_url('news/page/').($this->uri->segment(3)-2) ?>"><?= ($this->uri->segment(3)-2) ?></a></li>
                    <?php endif ?>
                    <li class="page-item"><a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)-1) ?>"><?= $this->uri->segment(3)-1 ?></a></li>
                    <li class="page-item active"><a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)) ?>"><?= ($this->uri->segment(3)) ?></a></li>
                    <li class="page-item disabled">
                        <a class="page-link" href="<?= base_url('news/page/').($this->uri->segment(3)+1) ?>">Next</a>
                    </li>
                <?php endif ?>
                <?php if ($stop == 3): ?>
                    <li class="page-item active"><a class="page-link" href="<?= base_url('news/') ?>">1</a></li>
                    <li class="page-item"><a class="page-link" href="<?= base_url('news/page/2') ?>">2 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="<?= base_url('news/page/3') ?>">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="<?= base_url('news/page/2') ?>">Next</a>
                    </li>
                <?php endif ?>
            </ul>
        </nav>

    </div>
    <!-- End paggination block -->

<script>
    
</script>

