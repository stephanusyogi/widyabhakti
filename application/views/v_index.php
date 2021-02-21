<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;900&display=swap" rel="stylesheet">

    <!-- CSS PopUp -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/magnific-popup.css') ?>">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/style.less') ?>" />
    
    <!-- Less JS -->
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/922eb8e20d.js" crossorigin="anonymous"></script>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

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
                        <li class="nav-item-active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/tentang') ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/fasilitas') ?>">Fasilitas</a>
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
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/banner1.jpg') ?>" alt="">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/banner2.jpg') ?>" alt="">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/banner3.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs">
                    <div class="text-left">
                        <h1>Widya Bhakti Pastoral Center</h1>
                        <p class="desc-title">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis, voluptatibus animi? Ea odit fugit non quam cumque magni expedita fuga quasi quod qui, corrupti quia voluptates pariatur? Aut, architecto suscipit.</p>
                        <p class="lead flex-btn">
                            <a class="btn btn-banner btn-lg" href="#" role="button">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                            <a class="btn btn-banner btn-none btn-lg" href="#" role="button">Informasi Peminjaman&nbsp;<i class="fas fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
    </section>

    <!-- Section Berita -->
    <section class="section-berita">
        <div class="container">
            <div class="title-berita">
            <h4>Berita Terkini</h4>
            </div>
            <!-- Slider News -->
            <div class="galeri-slider">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/berita1.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-text">
                                <p>
                                    Publis : 22 Juli 2020
                                </p>
                                <h5>Pelayanan Widya Bhakti Dibuka Selama Jam Kerja</h5>
                                <a href="#">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/berita2.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-text">
                                <p>
                                    Publis : 22 Juli 2020
                                </p>
                                <h5>Widya Bhakti Footage Gedung Lampau Kota Malang</h5>
                                <a href="#">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url('assets/img/berita3.jpg') ?>" alt="">
                            <div class="card-body">
                                <div class="card-text">
                                <p>
                                    Publis : 22 Juli 2020
                                </p>
                                <h5>Kapel Adorasi Dibuka Kembali dengan Protokol Kesehatan</h5>
                                <a href="#">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="linknews">
                <a href="#">Lihat Semua Berita&nbsp;<i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Section Fasilitas -->
    <section class="section-fasilitas">
        <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-10">
                    <div class="title-fasilitas">
                        <h2>Fasilitas Gedung</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae sunt molestiae commodi dolore. Maiores voluptas.</p>
                    </div>
                    <div class="buttonpagefasilitas">
                        <a href="#"><button class="buttonfasilitas">Detail Fasilitas&nbsp;<i class="fas fa-angle-right"></i></button></a>
                        <a href="#"><button class="buttonfasilitas">Informasi Peminjaman&nbsp;<i class="fas fa-angle-right"></i></button></a>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-2">
                     <div class="arrow">
                        <div class="arrowleft">
                           <a class="buttonleft"><i class="fas fa-long-arrow-alt-left"></i></a>
                        </div>
                        <div class="arrowright">
                           <a class="buttonright"><i class="fas fa-long-arrow-alt-right"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            <div class="fasilitas">
               <div class="swiper-container s1">
                  <div class="swiper-wrapper">
                     <!-- slide 1 -->
                     <div class="swiper-slide">
                        <div class="row">
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas1.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruang Kesehatan</h3>
                                    </div>
                                    </a>
                                </div>
                           </div> 
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas2.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat A</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas3.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat B</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas4.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Kapel Adorasi</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                        </div>
                     </div>
                    <!-- slide 2 -->
                    <div class="swiper-slide">
                        <div class="row">
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas1.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruang Kesehatan</h3>
                                    </div>
                                    </a>
                                </div>
                           </div> 
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas2.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat A</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas3.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat B</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas4.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Kapel Adorasi</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                        </div>
                     </div>
                     <!-- slide 1 -->
                     <div class="swiper-slide">
                        <div class="row">
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas1.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruang Kesehatan</h3>
                                    </div>
                                    </a>
                                </div>
                           </div> 
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas2.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat A</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="card-fasilitas-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas3.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Ruangan Rapat B</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                           <div class="col-md-3">
                                <div class="card-fasilitas">
                                    <a href="#">
                                    <div class="wg-box-content-overlay"></div>
                                    <img class="card-faslitas-image" src="<?php echo base_url('assets/img/fasilitas4.jpg') ?>">
                                    <div class="card-fasilitas-details card-fasilitas-fade">
                                        <h3 class="wg-box-content-title">Kapel Adorasi</h3>
                                    </div>
                                    </a>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="swiper-pagination-1"></div>
               </div>
            </div>
         </div>
    </section>

    <!-- Section Number -->
    <section class="section section-number">
        <div class="container">
            <div class="numberrow">
                <div class="row">
                    <div class="col-md-3">
                        <div class="numberblock">
                        <div class="shapenumber">
                            <div class="shapecount">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/ruangan.png') ?>" alt="influencer" width="35" height="24"><br>
                            </div>
                            <h4>
                                <b>
                                    <div class="demo"><span class="counter">14</span></div>
                                </b>
                            </h4>
                            <p>FASILITAS RUANGAN</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="numberblock">
                        <div class="shapenumber">
                            <div class="shapecount">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/customer.png') ?>" alt="influencer" width="35" height="30">
                            </div>
                            <h4>
                                <b>
                                    <div class="demo"><span class="counter">24 JAM</span></div>
                                </b>
                            </h4>
                            <p>CUSTOMER SERVICE</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="numberblock">
                        <div class="shapenumber">
                            <div class="shapecount">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/pengunjung.png') ?>" alt="influencer" width="35" height="30">
                            </div>
                            <h4>
                                <b>
                                    <div class="demo"><span class="counter">2000&nbsp;+</span></div>
                                </b>
                            </h4>
                            <p>PENGUNJUNG WEBSITE</p>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="numberblock">
                        <div class="shapenumber">
                            <div class="shapecount">
                                <img class="img-fluid" src="<?php echo base_url('assets/img/event.png') ?>" alt="influencer" width="35" height="33">
                            </div>
                            <h4><div class="demo"><b><span>150&nbsp;+</span></b></div></h4>
                            <p>EVENT</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!-- Section Galeri -->
      <section class="section-galeri">
        <div class="container">
            <div class="title-galeri">
                <h4>Galeri Kegiatan</h4>
            </div>
            <div class="album-kegiatan">
                <div class="swiper-container s2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri5.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri5.jpg') ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri5.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri5.jpg') ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri3.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri3.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri4.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri4.jpg') ?>"></a>
                                    </div>
                                    <div class="cropgaleri">
                                        <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri5.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri5.jpg') ?>"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination-2"></div>
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
                        <li><a href="#">Beranda</a></li>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Fasilitas</a></li>
                        <li><a href="#">Berita</a></li>
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
        <p>Developed by Universitas Brawijaya</p>
     </section>



    <!-- Jquery Interval Carousel -->
    <script>
        $('.carousel').carousel({
        interval: 25
        })
    </script>

    <!-- JS POPUP -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.magnific-popup.js') ?>"></script>
    <!-- Jquery PopUp -->
    <script type="text/javascript">
        $(document).ready(function($) {
          $('.test-popup-link').magnificPopup({
            type:'image',
            mainClass: 'mfp-with-zoom', // this class is for CSS animation below

        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it

          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function

          // The "opener" function should return the element from which popup will be zoomed in
          // and to which popup will be scaled down
          // By defailt it looks for an image tag:
          opener: function(openerElement) {
            // openerElement is the element on which popup was initialized, in this case its <a> tag
            // you don't need to add "opener" option if this code matches your needs, it's defailt one.
            return openerElement.is('img') ? openerElement : openerElement.find('img');
          }
        }
          });
        });
    </script>
    
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

    <!-- Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- Swiper JS -->
    <script>
        var swiper = new Swiper('.s1', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination-1',
            clickable: true,
        },
        navigation: {
            nextEl: '.buttonright',
            prevEl: '.buttonleft',
        },
        });
    </script>

    <script>
        var swiper = new Swiper('.s2', {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination-2',
            clickable: true,
        }
        });
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>