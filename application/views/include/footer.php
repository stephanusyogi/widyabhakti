
      <!-- Section Footer -->
      <section class="section-footer" id="footer">
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
                        <li><a href="<?php echo base_url('main/tentang') ?>">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url('main/fasilitas') ?>">Fasilitas</a></li>
                        <li><a href="<?php echo base_url('main/BERITA') ?>">Berita</a></li>
                        <li><a href="#">Informasi Peminjaman</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <h2>Sosial Media</h2>
                    <div class="subfootersosmed">
                        <i class="fab fa-instagram-square"></i>
                        <i class="fab fa-whatsapp-square"></i>
                    </div>
                </div>
            </div>
          </div>
      </section>
      <section class="section section-copyright">
        <p>Copyright @ 2022, Widya Bhakti Pastoral Center, All rights reserved</p>
     </section>



    
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


    <!-- Swiper -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.js') ?>"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- Toast -->
    <script src="<?php echo base_url('assets/plugins'); ?>/toastr/toastr.min.js"></script>  
    
    <!-- Jquery Interval Carousel -->
    <script>
        $('.carousel').carousel({
        interval: 5000
        })
    </script>
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
            delay: 109999999,
            disableOnInteraction: false,
        },
        pagination: {
            el: '.swiper-pagination-2',
            clickable: true,
        }
        });
    </script>
    
</body>
</html>