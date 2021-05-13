
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

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

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
            delay: 109999999,
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