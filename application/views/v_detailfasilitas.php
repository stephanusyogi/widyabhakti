
<?php include('include/header.php'); ?>    
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotrondetailfasilitas">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner2.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-up">
                    <h1>Fasilitas & Ruangan</h1>
                </div>
    </section>

    <!-- Section Box Detail -->
    <section class="boxdetail">
        <div class="container">
            <div class="framebox">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carousel-thumb<?= $detailruangan['data'][0]['id_ruangan']; ?>" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                            <!--Slides-->
                            <div class="carousel-inner carousel-resp text-center" role="listbox">
                                <?php foreach ($detailruangan['data'][0]['photos'] as $key => $photos) { ?>
                                    <div class="carousel-item <?php if ($key == 0) {
                                                                    echo 'active';
                                                                } ?>">
                                        <img style="width: 600px;" class="" src="<?php echo base_url().'admin/uploads/img_ruangan/'.$photos['src'] ?>" height="350px" style="object-fit:contain; width:;">
                                    </div>
                                <?php } ?>
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" style="position: absolute; font-size:xx-large; 
                            color:#8C2D25;" href="#carousel-thumb<?= $detailruangan['data'][0]['id_ruangan']; ?>" role="button" data-slide="prev">
                                <i class="fas fa-chevron-circle-left btn-detail-left"></i>
                                <span class="sr-only">prev</span>
                            </a>
                            <a class="carousel-control-next" style="position: absolute; font-size:xx-large; 
                            color:#8C2D25;" href="#carousel-thumb<?= $detailruangan['data'][0]['id_ruangan']; ?>" role="button" data-slide="next">
                                <i class="fas fa-chevron-circle-right btn-detail-right"></i>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                            <ol class="carousel-indicators" style="border-radius: 50%;">
                                <?php foreach ($detailruangan['data'][0]['photos'] as $key => $photos) { ?>
                                    <li style="border-radius: 50%; width:10px; height:10px; border:1px solid white;" data-target="#carousel-thumb<?= $detailruangan['data'][0]['id_ruangan']; ?>a-slide-to="<?php echo $key ?>">
                                        <img src="<?php echo base_url().'admin/uploads/img_ruangan/'.$photos['src'] ?>" width="100">
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="caption">
                            <h2><?= $detailruangan['data'][0]['nama'] ?></h2>
                            <hr>
                            <div class="subcaption">
                                <p><i class="fas fa-building"></i><span><?= $detailruangan['data'][0]['luas'] ?></span></p>
                                <p><i class="fas fa-users"></i><span>Max. <?= $detailruangan['data'][0]['kapasitas'] ?></span></p>
                            </div>
                            <div class="maincaption">
                                <h4>Deskripsi</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;<?= $detailruangan['data'][0]['deskripsi'] ?></p>
                            </div>
                            <a href="<?= base_url('peminjaman/informasi') ?>peminjaman/informasi" class="btn btn-primary">Informasi Peminjaman</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('include/footer.php'); ?>    