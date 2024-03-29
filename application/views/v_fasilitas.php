<style>
.selengkapnya:hover{
    cursor:pointer;
}
</style>
<?php include('include/header.php'); ?>
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotronfasilitas">
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

    <!-- Section CardFasilitas -->
    <section class="cardfasilitas">
        <div class="container">
            <div class="frame-content">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" 
                    id="list-prince-list" data-toggle="list" href="#list-prince" 
                    role="tab" aria-controls="prince">
                    Aula & Ruangan
                    </a>
                    <a class="list-group-item list-group-item-action" id="list-wild-list" data-toggle="list" 
                    href="#list-wild" role="tab" aria-controls="wild">
                    Sarana & Prasarana Umum
                    </a>
                </div>
                <div class="main-content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="list-prince" role="tabpanel" aria-labelledby="list-prince-list">
                            <div class="row">
                            <?php foreach($ruangan['data'] as $rows){ ?>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url() ?>admin/uploads/img_ruangan/<?= $rows['thumbnail'] ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title"><?= $rows['nama'] ?></h5>
                                            <a onclick="window.location = '<?php echo base_url() ?>fasilitas/detail-fasilitas/<?= $rows['id_ruangan'] ?>';" class="btn btn-primary selengkapnya">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-wild" role="tabpanel" aria-labelledby="list-wild-list">
                            <div class="row">
                            <?php foreach($fasilitas['data'] as $rows){ ?>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url() ?>admin/uploads/img_ruangan/<?= $rows['img_dir'] ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title text-center"><?= $rows['nama'] ?></h5>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('include/footer.php'); ?>