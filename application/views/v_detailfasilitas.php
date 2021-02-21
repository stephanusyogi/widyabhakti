<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/styledetailfasilitas.less') ?>" />

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
                        <li class="nav-item-active">
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
                        <div class="imageproduct">
                            <div class="slider"><img id="big-image" src="<?php echo base_url('assets/img/galeri4.jpg') ?>" alt=""></div>
                            <div id="img-slider" class="img-slider">
                                <div class="imgs"><img id="Nomos1" src="<?php echo base_url('assets/img/galeri5.jpg') ?>" alt=""></div>
                                <div class="imgs"><img id="Nomos2" src="<?php echo base_url('assets/img/galeri3.jpg') ?>" alt=""></div>
                                <div class="imgs"><img id="Nomos3" src="<?php echo base_url('assets/img/galeri2.jpg') ?>" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="caption">
                            <h2>Aula Bersama Lantai 1</h2>
                            <hr>
                            <div class="subcaption">
                                <p><i class="fas fa-building"></i><span>5 x 5m</span></p>
                                <p><i class="fas fa-users"></i><span>Max. 15 Orang</span></p>
                            </div>
                            <div class="maincaption">
                                <h4>Description</h4>
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum sunt quae, eos quod veniam qui 
                                    dolorum repellendus doloremque blanditiis suscipit ex eum nobis, dolore saepe perspiciatis illo 
                                    consequatur nostrum excepturi!</p>
                            </div>
                            <a href="#" class="btn btn-primary">Pinjam Sekarang</a>
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
<!-- Image Pop Up -->
<script>
    const BigImage = document.getElementById('big-image');
    const imgSlider = document.getElementById('img-slider');

    imgSlider.addEventListener('click', event => {

        if (event.target === Nomos1) {
            BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri5.jpg') ?>");
        }

        else if (event.target === Nomos2) {
            BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri3.jpg') ?>");
        }

        else {
        BigImage.setAttribute ("src","<?php echo base_url('assets/img/galeri2.jpg') ?>");
        }
    
    });
</script>
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