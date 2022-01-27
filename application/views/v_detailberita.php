<style>
.newest-news:hover{
    cursor:pointer;
    text-decoration:underline;
}
</style>

<?php include('include/header.php'); ?>
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotrondetailberita">
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
        <section class="section-detailberita">
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
                                <img src="<?php echo base_url() ?>admin/uploads/img_thumbnail_berita/<?= $detailberita['img_dir'] ?>" alt="">
                                <div class="deskripsititle">
                                    <div class="timeline">
                                        <i class="far fa-calendar-alt"><span>&nbsp;&nbsp;<?= date('m/d/Y H:i:s',strtotime($detailberita['created_at'])); ?></span></i>
                                        <i class="far fa-user"><span>&nbsp;&nbsp;Admin</span></i>
                                    </div>
                                    <h1><?= $detailberita['title'] ?></h1>
                                    <p><?= $detailberita['content'] ?></p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('include/footer.php'); ?>