    <!-- Section Carousel Jumbotron -->
    <section class="carjumbotronformulir">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="<?php echo base_url('assets/img/banner2.jpg') ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="main-text hidden-xs" data-aos="fade-down">
                    <div class="container text-center">
                        <h1>Formulir Peminjaman</h1>
                    </div>
                </div>
    </section>

    <section class="section-formulirpeminjaman" style="overflow:hidden;">
        <form action="" method="POST" id="create-listing-form" role="form" enctype="multipart/form-data">
            <div class="container-fluid create container" id="step-0">
                <h2 style="color: #8C2D25;">Formulir Pengajuan Peminjaman Ruangan</h2>
                <p>Harap mengisi form yang tersedia dibawah ini!</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Nama Pengaju</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Nama Pengaju">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Nama Kegiatan</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Nama Kegiatan">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Lembaga/Organisasi/Komunitas</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Lembaga/Organisasi/Komunitas Penanggun Jawab Kegiatan">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Jadwal Kegiatan</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Jadwal Kegiatan">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Waktu Mulai Kegiatan</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Waktu Mulai Kegiatan">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Waktu Selesai Kegiatan</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Waktu Selesai Kegiatan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Ruangan Yang Akan Dipinjam</label>
                            <select id="status" class="form-control" type="text" name="status" placeholder="Masukan Ruangan">
                                <option value="" selected disabled></option>
                                <option value="approved">Disetujui</option>
                                <option value="rejected">Tidak Disetujui</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Jumlah Orang / Partisipan Kegiatan</label>
                            <input class="form-control" type="text" name="name" placeholder="Masukkan Jumlah Orang / Partisipan Kegiatan">
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Deskripsi Kegiatan</label>
                            <textarea class="form-control" type="text" name="name" rows="5"></textarea>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Keterangan Tambahan</label>
                            <p style="font-size:14px;">Tambahkan keterangan tambahan apabila anda ingin request barang lain seperti sound, mic atau lainnya.</p>
                            <textarea class="form-control" type="text" name="name"></textarea>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn" style="background:#8C2D25!important;color:#fff;">Submit</button>
            </div>
        </form>
    </section>