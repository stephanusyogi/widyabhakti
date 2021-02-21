<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/stylefasilitas.less') ?>" />

    <!-- Less JS -->
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/922eb8e20d.js" crossorigin="anonymous"></script>

    <!-- JQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>

    <title>Widya Bhakti | Pastoral Center Official Website</title>
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">
</head>
<body>
    <!-- Section Menu -->
    <section class="section-menu">
        <div class="container">
            <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light">
                <a class="navbar-brand title-brand" href="#">
                <img class="img-fluid" src="<?php echo base_url('assets/img/logo.png') ?>" width="50" height="30" alt="">
                Widya Bhakti
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main') ?>">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/tentang') ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item-active">
                            <a class="nav-link" href="#">Fasilitas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/berita') ?>">Berita</a>
                        </li>
                    </ul>
                </div>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="item-button">
                            <button class="btn-infopinjam">
                                <a class="nav-link" href="#">Informasi Peminjaman</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotron">
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
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="list-wild" role="tabpanel" aria-labelledby="list-wild-list">
                        <div class="row">
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">    
                                    <div class="card" >
                                        <img class="card-img-top" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt="Card image cap">
                                        <div class="card-body">
                                            <h5 class="card-title">Aula Bersama Lantai 1</h5>
                                            <a href="<?php echo base_url('main/detailfasilitas') ?>" class="btn btn-primary">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Section Footer -->
      <section class="section-footer">
          <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="title-footer">
                        <img src="<?php echo base_url('assets/img/logo.png') ?>" alt="">
                        <h2>WIDYA BHAKTI</h2>
                        <h5>Official Website Pastoral Center</h5>
                    </div>
                </div>
                <div class="col-md-2">
                    <h2>Kontak Kami</h2>
                    <div class="subfooter1">
                        <p>Jl. Guntur No.1, Oro-oro Dowo, Kec. Klojen, Kota Malang, Jawa Timur 65119</p>
                    </div>
                    <div class="subfooter2">
                        <p>+62 867 4938 2398</p>
                        <p> (0341) 323 306 </p>
                    </div>
                </div>
                <div class="col-md-2">
                    <h2>Menu</h2>
                    <div class="subfooter1">
                        <ul>
                        <li><a href="<?php echo base_url('main') ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url('main/tentang') ?>">Tentang Kami</a></li>
                        <li><a href="#">Fasilitas</a></li>
                        <li><a href="<?php echo base_url('main/berita') ?>">Berita</a></li>
                        <li><a href="#">Informasi Peminjaman</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h2>Sosial Media</h2>
                    <div class="subfootersosmed">
                        <img src="<?php echo base_url('assets/img/facebook.png') ?>" alt="">
                        <img src="<?php echo base_url('assets/img/instagram.png') ?>" alt="">
                        <img src="<?php echo base_url('assets/img/whatsapp.png') ?>" alt="">
                    </div>
                </div>
            </div>
          </div>
      </section>
      <section class="section section-copyright">
        <p>Copyright @ 2022, Widya Bhakti Pastoral Center, All rights reserved</p>
     </section>

<!-- Fixed -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<!-- JQuery Menu Fixed -->
<script>
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 75) {
            $("#navbar").addClass("shrink");
            }
        else if(scroll < 75){
            $("#navbar").removeClass("shrink");
            }
        });
</script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

<!-- List Group -->
<!-- <script type="text/javascript">
	$('a[data-toggle="list"]').on('shown.bs.tab', function (e) {
	$(e.target).removeClass( "light-blue" );
	$(e.relatedTarget).addClass( "light-blue" );
	})
</script> -->

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
</body>
</html>