
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotronpeminjaman">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner1.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-down">
                    <div class="container text-center">
                        <h1>Informasi Peminjaman</h1>
                    </div>
                </div>
    </section>

    <!-- Section Deskripsi Peminjaman -->
    <section class="section-peminjaman" data-aos="fade-up">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12 informasi">
                    <h1 class="title">Informasi Peminjaman Gedung dan Ruangan WidyaBhakti Pastoral Center</h1>
                    <p style="font-size:14px;">Harap membaca langkah-langkah alur peminjaman dibawah ini,<span class="hubungiadmin" id="hubungiadmin" style="color:#8C2D25;">hubungi admin</span> apabila mengalami kendala.</p>
                    <button class="btn btn-primary" onclick="window.location='<?php echo base_url('peminjaman/formulirpeminjaman') ?>';">Isi Formulir Peminjaman</button>
                    <h4 class="mt-4">Data Yang Perlu Disiapkan :</h4>
                    <ul class="data">
                        <li>Nama kegiatan,</li>
                        <li>Lembaga / organisasi / komunitas penanggung jawab kegiatan</li>
                        <li>Jadwal kegiatan,</li>
                        <li>Waktu kegiatan (mulai - selesai),</li>
                        <li>Jumlah orang / partisipan dalam kegiatan,</li>
                        <li>Deskripsi tentang kegiatan yang diadakan.</li>
                    </ul>
                    <div class="img-alur">
                        <img src="<?php echo base_url('assets/img/alurpeminjamanwb.png') ?>" alt="alurpeminjamanwidyabhakti" style="width:100%;">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12 call-center">
                    <!-- Stick on Top -->
                    <div class="card stickycallcenter mt-4" id="callcenter">
                        <div class="card-header text-center" style="background-color: #8C2D25;color:white; border-top-left-radius:15px; border-top-right-radius:15px;">Administrator Call Center</div>
                        <div class="card-body text-center">
                            <button class="btn btn-info" style="color:#fff;font-style:24px;"><span><i class="fas fa-user-cog"></i></span>&nbsp;Hubungi Admin</button>
                        </div>
                        <hr>
                        <div class="text-center" style="font-size:14px;">
                            <p>Official Website Widya Bhakti Pastoral Center</p>
                        </div>
                    </div>
                    <!-- Pop Up Contact Us -->
                    <div class="modal fade" id="ContactUsModal" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <h4 class="text-center" style="color:green;">Contact Us</h4>
                                </div>
                                <div class="modal-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var x = window.matchMedia("(min-width: 991px)")
        var hubungiadmin = document.getElementById("hubungiadmin");
        if (x.matches) { // If media query matches
            hubungiadmin.classList.remove("hubungiadmin");
        } else {
            hubungiadmin.classList.add("hubungiadmin");
        }
        
        $(".hubungiadmin").click(function() {
                $('html,body').animate({
                    scrollTop: $(".data").offset().top},
                    'slow');
            });
    </script>