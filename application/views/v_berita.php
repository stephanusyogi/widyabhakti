<?php include('include/header.php'); ?>
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotronberita">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner3.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-up">
                    <h1>Berita</h1>
                </div>
    </section>

    <!-- Section Berita -->
    <section class="section-berita">
        <div class="container">
            <div class="berita">
                <div class="row reverse">
                    <div class="col-md-4 col-sm-12">
                        <div class="recentpost">
                            <h4>Berita Terkini</h4>
                            <hr>
                            <div class="newslist">
                            <?php foreach($beritaterkini['data'] as $rows){ ?>
                                <div class="titlelist">
                                    <a class="newest-news" onclick="window.location = '<?php echo base_url() ?>berita/detail-berita/<?= str_replace(' ', '-' , $rows['title']); ?>/<?= $rows['id_berita'] ?>';"><h5><?= $rows['title'] ?></h5></a>
                                    <p><?= date('m/d/Y H:i:s',strtotime($rows['created_at'])); ?></p>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="beritapost">
                            <div class="news">
                                <img src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="">
                                <div class="deskripsititle">
                                    <div class="timeline">
                                        <i class="far fa-calendar-alt"><span>&nbsp;&nbsp;21 Januari 2020&nbsp;&nbsp;&nbsp;16:02</span></i>
                                        <i class="far fa-user"><span>&nbsp;&nbsp;Admin</span></i>
                                    </div>
                                    <h1>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam vel alias non repellendus nisi odio cumque. Eveniet modi mollitia excepturi....</p>
                                    <a href="<?php echo base_url('berita/detail') ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                            <div class="news">
                                <img src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="">
                                <div class="deskripsititle">
                                    <div class="timeline">
                                        <i class="far fa-calendar-alt"><span>&nbsp;&nbsp;21 Januari 2020&nbsp;&nbsp;&nbsp;16:02</span></i>
                                        <i class="far fa-user"><span>&nbsp;&nbsp;Admin</span></i>
                                    </div>
                                    <h1>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam vel alias non repellendus nisi odio cumque. Eveniet modi mollitia excepturi....</p>
                                    <a href="<?php echo base_url('berita/detail') ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                            <div class="news">
                                <img src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="">
                                <div class="deskripsititle">
                                    <div class="timeline">
                                        <i class="far fa-calendar-alt"><span>&nbsp;&nbsp;21 Januari 2020&nbsp;&nbsp;&nbsp;16:02</span></i>
                                        <i class="far fa-user"><span>&nbsp;&nbsp;Admin</span></i>
                                    </div>
                                    <h1>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h1>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam vel alias non repellendus nisi odio cumque. Eveniet modi mollitia excepturi....</p>
                                    <a href="<?php echo base_url('berita/detail') ?>">Baca Selengkapnya</a>
                                </div>
                            </div>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('include/footer.php'); ?>    