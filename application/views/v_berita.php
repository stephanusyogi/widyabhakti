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
                            <?php foreach($berita['data']['data'] as $rows) { ?>
                                <div class="news">
                                    <img onclick="window.location = '<?php echo base_url() ?>berita/detail-berita/<?= str_replace(' ', '-' , $rows['title']); ?>/<?= $rows['id_berita'] ?>';" src="<?php echo base_url() ?>admin/uploads/img_thumbnail_berita/<?= $rows['img_dir'] ?>" alt="">
                                    <div class="deskripsititle">
                                        <div class="timeline">
                                            <i class="far fa-calendar-alt"><span>&nbsp;&nbsp;<?= date('m/d/Y H:i:s',strtotime($rows['created_at'])); ?></span></i>
                                            <i class="far fa-user"><span>&nbsp;&nbsp;Administrator</span></i>
                                        </div>
                                        <h1><?= $rows['title'] ?></h1>
                                        <p><?= $rows['excerpt'] ?></p>
                                        <a onclick="window.location = '<?php echo base_url() ?>berita/detail-berita/<?= str_replace(' ', '-' , $rows['title']); ?>/<?= $rows['id_berita'] ?>';">Baca Selengkapnya</a>
                                    </div>
                                </div>
                            <?php } ?>
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item <?php if($berita['data']['prev_page_url'] == null){ echo 'disabled';} else { echo '';} ?>">
                                    <a class="page-link" onclick="window.location = '<?php echo base_url() ?>berita/halaman/<?= substr($berita['data']['prev_page_url'], strpos($berita['data']['prev_page_url'], '=') + 1) ?>';" tabindex="-1" >Previous</a>
                                    </li>
                                    <?php
                                        $total_page = $berita['data']['last_page'];
                                        for ($i=1; $i <= $total_page; $i++) :
                                            if($berita['data']['current_page'] == $i){
                                                $active = 'active';
                                            }else{
                                                $active = '';
                                            }
                                    ?>
                                    <li class="page-item <?= $active ?>"><a class="page-link" onclick="window.location = '<?php echo base_url() ?>berita/halaman/<?= $i ?>';"><?= $i ?></a></li>
                                    <?php endfor; ?>
                                    <li class="page-item <?php if($berita['data']['next_page_url'] == null){ echo 'disabled';} else { echo '';} ?>">
                                    <a class="page-link" onclick="window.location = '<?php echo base_url() ?>berita/halaman/<?= substr($berita['data']['next_page_url'], strpos($berita['data']['next_page_url'], '=') + 1) ?>';">Next</a>
                                    </li>
                                </ul>
                            </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('include/footer.php'); ?> 

<?php 
    // $total_page = 5;
    // for ($i=1; $i <= $total_page ; $i++) { 
    //     echo $i;
    // }
?>