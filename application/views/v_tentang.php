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
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/styletentang.less') ?>" />

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
                        <li class="nav-item-active">
                            <a class="nav-link" href="#">Tentang Kami</a>
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
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner1.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-down">
                    <h1>Tentang Kami</h1>
                </div>
    </section>

    <!-- Section Tentang -->
    <section class="section-tentang" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="tentang-prgf">
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas tristique lorem id dolor 
                        pharetra euismod. Aliquam tincidunt viverra turpis, vel lacinia ante vulputate non. Etiam 
                        auctor sodales justo, quis sodales enim varius sed. Integer facilisis tellus felis, ut 
                        consectetur mauris dapibus a. Morbi pharetra luctus dui ac congue. Vestibulum consectetur 
                        quis elit in dapibus. Sed a tortor sit amet mi luctus tempus sagittis sed magna. Nulla 
                        pellentesque quam id nibh ultricies, ac tincidunt tortor facilisis. Suspendisse ornare eu 
                        libero in venenatis. Vestibulum semper lacus enim, vel viverra leo facilisis in.
                        </p>
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;Aliquam erat volutpat. Maecenas interdum fermentum porta. Nunc molestie mattis dui, 
                        ut rhoncus nunc tincidunt non. Pellentesque vestibulum maximus mi, non efficitur diam 
                        egestas et. Sed vitae sem tortor. Cras pretium augue vel purus vestibulum, eget tempus
                         quam luctus. Nulla a vehicula eros. Nullam ut quam id risus egestas ornare. Aenean at consequat diam.
                        </p>
                        <p>
                        &nbsp;&nbsp;&nbsp;&nbsp;Morbi vel varius magna, a auctor ligula. Maecenas placerat faucibus tortor id ornare. Quisque cursus 
                        ullamcorper nibh quis accumsan. Suspendisse porta orci ligula, at lobortis risus iaculis nec. Nam eu leo
                         gravida, efficitur ligula ut, semper ante. Orci varius natoque penatibus et magnis dis parturient montes,
                          nascetur ridiculus mus. Maecenas sit amet pharetra ex. Nullam tempor diam sed dolor lobortis malesuada. 
                          Ut lacinia neque nec ante ultricies, id ullamcorper tellus egestas. Duis et sem nunc. Nunc viverra turpis est, 
                          et placerat nunc ornare id. Phasellus vestibulum tellus neque. Nullam sit amet turpis ut ex scelerisque egestas.
                           Mauris augue urna, molestie at nisi quis, cursus tincidunt orci.
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-tentang">
                        <img class="img-fluid" src="<?php echo base_url('assets/img/tentang.jpg') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Hubungi -->
    <section class="section-hubungi" data-aos="fade-up">
        <div class="container">
            <div class="title-hubungi">
                <h1>Hubungi Kami</h1>
            </div>
            <div class="box-kontak">
                <div class="caption-kontak">
                    <p>Kontak   : (0341) 567 489</p>
                    <p>Alamat   : Jln. Besar Ijen No. 2 , Malang</p>
                </div>
                <div class="maps">
                    <iframe src="https://www.google.com/maps?q=widya%20bhakti%20ijen%20malang&z=14&t=&ie=UTF8&output=embed"></iframe>
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
                        <li><a href="#">Tentang Kami</a></li>
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
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>