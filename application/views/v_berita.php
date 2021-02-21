<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/styleberita.less') ?>" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">    

    <!-- Less JS -->
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

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
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/fasilitas') ?>">Fasilitas</a>
                        </li>
                        <li class="nav-item-active">
                            <a class="nav-link" href="#">Berita</a>
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
                                <div class="titlelist">
                                    <a href="<?php echo base_url('main/detailberita') ?>"><h5>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h5></a>
                                    <p>21 Januari 2020</p>
                                </div>
                                <div class="titlelist">
                                    <a href="<?php echo base_url('main/detailberita') ?>"><h5>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h5></a>
                                    <p>21 Januari 2020</p>
                                </div>
                                <div class="titlelist">
                                    <a href="<?php echo base_url('main/detailberita') ?>"><h5>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h5></a>
                                    <p>21 Januari 2020</p>
                                </div>
                                <div class="titlelist">
                                    <a href="<?php echo base_url('main/detailberita') ?>"><h5>Peresmian Gedung WidyaBhakti Oleh Walikota Malang</h5></a>
                                    <p>21 Januari 2020</p>
                                </div>
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
                                    <a href="<?php echo base_url('main/detailberita') ?>">Baca Selengkapnya</a>
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
                                    <a href="<?php echo base_url('main/detailberita') ?>">Baca Selengkapnya</a>
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
                                    <a href="<?php echo base_url('main/detailberita') ?>">Baca Selengkapnya</a>
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
                        <li><a href="<?php echo base_url('main/fasilitas') ?>">Fasilitas</a></li>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
</body>
</html>