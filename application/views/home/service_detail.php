    <!--Structur block-->
    <section class="cid-srPN4fVE3X services_detail" id="services_detail">
        <div class="container">
            
            <a href="<?= base_url() ?>#features4-3" class="icon">
                <!-- <i class="fa fa-arrow-left" style="font-size:30px;"></i> -->
                <!-- <i class="bi bi-arrow-left-circle"></i> -->
                <!-- <i class="fas fa-chevron-left" style="font-size:30px;"></i> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                </svg>
            </a>

            <div class="jumbotron jumbotron-fluid jumbotron_services d-flex" style="background-image:  linear-gradient(180deg, rgba(0, 0, 0, 0.75) 0%, rgba(0, 0, 0, 0.75) 100%), url(<?= base_url() ?>assets/images/service/mbr-1.jpg);">
                <div class="container my-auto">
                    <h1 class="content-title">
                        <strong><?= $services[0]['nama_service'] ?></strong>
                    </h1>
                </div>
            </div>


            <div class="content">
                <div class="title">
                    <h5 class="display-5 content-title">
                        <strong><?= $services[0]['nama_service'] ?></strong>
                    </h5>
                </div>
                <div class="detail">
                    <p><?= $services[0]['deskripsi'] ?></p>
                </div>
            </div>
        </div>
    </section>
    <!--End Structur block-->

