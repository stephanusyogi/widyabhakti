<?php include('include/header.php'); ?>
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
                <div class="main-text hidden-xs" data-aos="fade-right">
                    <div class="text-left">
                        <h1>Widya Bhakti Pastoral Center</h1>
                        <p class="desc-title">Gedung layanan pusat pastoral paroki untuk kegiatan juga aktivitias umat. Kami siap melayani anda, klik tombol dibawah untuk mengetahui selebihnya tentang kami.</p>
                        <p class="lead flex-btn">
                            <a class="btn btn-banner btn-lg" href="<?php echo base_url('tentang') ?>" role="button">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                        </p>
                    </div>
                </div>
    </section>

    <!-- Section Berita -->
    <section class="section-berita">
        <div class="container">
            <div class="title-berita" data-aos="fade-up">
            <h4>Berita Terkini</h4>
            </div>
            <!-- Slider News -->
            <div class="galeri-slider" data-aos="fade-up">
                <div class="row">
                    <?php foreach($beritaberanda['data'] as $rows) { ?>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo base_url() ?>admin/uploads/img_thumbnail_berita/<?= $rows['img_dir'] ?>" alt="">
                            <div class="card-body">
                                <div class="card-text">
                                <p>
                                    Publis : <?= date('m/d/Y H:i:s',strtotime($rows['created_at'])); ?>
                                </p>
                                <h5><?= $rows['title'] ?></h5>
                                <a href="<?php echo base_url('main/detailberita') ?>">Baca Selengkapnya&nbsp;<i class="fas fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="linknews">
                <a href="<?php echo base_url('berita') ?>">Lihat Semua Berita&nbsp;<i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Section Fasilitas -->
    <section class="section-fasilitas">
        <div class="container">
               <div class="row">
                  <div class="col-md-6" data-aos="fade-right">
                    <div class="title-fasilitas">
                        <h2>Fasilitas Gedung</h2>
                        <p>Kami menyediakan fasilitas dan ruangan untuk menunjang dan mendukung umat berkegiatan dan beraktivitas di gedung Widya Bhakti Pastoral Center.</p>
                    </div>
                    <div class="buttonpagefasilitas">
                        <a href="<?php echo base_url('main/fasilitas') ?>"><button class="buttonfasilitas">Lihat Semua Fasilitas&nbsp;<i class="fas fa-angle-right"></i></button></a>
                        <a href="#"><button class="buttonfasilitas">Informasi Peminjaman&nbsp;<i class="fas fa-angle-right"></i></button></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                     <div class="fasilitas" data-aos="flip-up">
                     <?php if ($ruanganberanda['data']) { ?>
                        <div id="carouselFasilitas" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <?php $i=0; foreach($ruanganberanda['data'] as $rows): ?>
  	                                <?php if ($i==0) {$set_ = 'active'; } else {$set_ = ''; } ?> 
                                    <div class="carousel-item <?= $set_; ?>">
                                        <div class="card-fasilitas">
                                            <div class="card-fasilitas-overlay"></div>
                                            <img class="card-faslitas-image" src="<?php echo base_url() ?>admin/uploads/img_ruangan/<?= $rows['thumbnail'] ?>">
                                            <div class="card-fasilitas-details card-fasilitas-fade">
                                                <h3 class="wg-box-content-title"><?= $rows['nama'] ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                <?php $i++; endforeach ?>
                            </div>
                            <a class="carousel-control-prev" href="#carouselFasilitas" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselFasilitas" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    <?php } ?>
                    </div>
                  </div>
               </div>
         </div>
    </section>

    <!-- Section Number -->
    <section class="section section-number" id="counter">
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
                                    <div class="demo"><span class="counter counter-value" data-count="14">0</span></div>
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
                                    <div class="demo"><span class="counter counter-value" data-count="2000">0</span>&nbsp;+</div>
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
                            <h4><div class="demo"><b><span class="counter counter-value" data-count="150">0</span>&nbsp;+</b></div></h4>
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
            <div class="row">
                <div class="col-md-6" data-aos="fade-down">
                    <div class="title-galeri">
                        <h4>Galeri Kegiatan</h4>
                        <p>Berikut potret kegiatan dan aktivitas umat di gedung Widya Bhakti Pastoral Center.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-down">
                    <div class="album-kegiatan">
                        <div class="cropgaleri">
                            <a class="test-popup-link" href="<?php echo base_url('assets/img/galeri2.jpg') ?>"><img class="img-fluid" src="<?php echo base_url('assets/img/galeri2.jpg') ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JQuery Number Counter -->
    <script>
        var a = 0;
        $(window).scroll(function() {
        var oTop = $('#counter').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function() {
            var $this = $(this),
                countTo = $this.attr('data-count');
            $({
                countNum: $this.text()
            }).animate({
                countNum: countTo
                },
                {
                duration: 3000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                    $this.text(this.countNum);
                    //alert('finished');
                }
                });
            });
            a = 1;
        }

        });
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

    <?php include('include/footer.php'); ?>