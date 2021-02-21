<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/styledetailberita.less') ?>" />

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
                <div class="main-text hidden-xs">
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
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat dui eget libero maximus sollicitudin. Donec tristique convallis leo ut faucibus. Proin feugiat vehicula consequat. Cras vel sapien ante. Nunc quis nulla nisi. Vivamus fermentum ullamcorper bibendum. Cras aliquet tempor est, in mollis arcu. Sed efficitur augue id nisl suscipit suscipit. Nam risus erat, ultricies pulvinar ante ac, mattis viverra diam. Cras tempor a urna in sodales. Nunc vestibulum velit non felis scelerisque interdum. Nam in velit vel magna suscipit convallis. Nunc tempus, dui id convallis pellentesque, urna quam pulvinar odio, in sollicitudin ante tortor a elit.

                                        In tristique, lacus at tincidunt vulputate, quam nisi finibus nisl, non molestie lorem ipsum ut arcu. Quisque ut tincidunt nulla, eu convallis sem. Suspendisse potenti. Donec faucibus, nibh sit amet gravida tristique, velit ex efficitur lacus, nec elementum lacus metus vitae nibh. Nam nec posuere libero. Aenean convallis faucibus sapien, sit amet consequat velit sodales ac. Vivamus pulvinar gravida placerat. Curabitur sollicitudin convallis lacus in tempus.

                                        Nullam vulputate vehicula massa, in ullamcorper sapien iaculis eget. Suspendisse ac justo dui. Aenean venenatis sem quis nunc sodales, eu feugiat purus convallis. Maecenas semper odio sit amet nisl facilisis, ut egestas nibh accumsan. Nulla sed nibh nunc. Vivamus diam justo, eleifend at nulla ac, tincidunt sodales justo. Sed aliquet nibh nibh. Nullam ut quam auctor est aliquet eleifend et vitae enim.

                                        Donec at erat sit amet felis dapibus posuere sit amet at odio. Nunc vitae justo tellus. Aenean id erat dui. Quisque placerat sollicitudin est, vel tincidunt augue imperdiet sed. Nullam tempus, sapien condimentum convallis tincidunt, ipsum erat bibendum urna, eget mollis purus leo facilisis enim. Phasellus ullamcorper risus vel odio varius, ac dictum dui tincidunt. Cras euismod gravida consectetur. Fusce vehicula at nulla et tristique. Duis dignissim purus at rhoncus faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                                    </p>
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

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/popper.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
</body>
</html>