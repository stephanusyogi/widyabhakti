
    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotrondetailfasilitas">
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