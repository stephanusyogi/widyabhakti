
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

    <section class="section-formulirpeminjaman">
        <form action="<?= base_url() ?>peminjaman/create" name="peminjaman" method="POST" id="create-peminjaman-form" role="form" enctype="multipart/form-data">
            <div class="container">
                <h2 style="color: #8C2D25;">Formulir Pengajuan Peminjaman Ruangan</h2>
                <p>Harap mengisi form yang tersedia dibawah ini!</p>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Ruangan Yang Akan Dipinjam</label>
                            <select class="form-control" id="ruanganpeminjaman" name="id_ruangan" required>
                                <option selected disabled>Pilih Ruangan</option>
                                <?php foreach($dataruangan['data'] as $row ){?>
                                    <option value="<?= $row['id_ruangan']; ?>"><strong><?= $row['nama_ruangan']; ?></strong> - Lt. <?= $row['lantai'] == '0' ? 'Ground' : $row['lantai'] ?></option>
                                <?php } ?>
                            </select>
                            <div class="image-ruangan mt-2"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Tanggal Kegiatan</label>
                            <input class="form-control" type="date" name="jadwal" placeholder="Masukkan Tanggal Kegiatan" required>
                            <label for="">Waktu Mulai Kegiatan</label>
                            <input class="form-control" id="waktu_mulai" type="text" name="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan"  required="">
                            <script>
                            $(document).ready(function(){
                                $('#waktu_mulai').datetimepicker({
                                    datepicker:false,
                                    allowTimes:[
                                    '06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', 
                                    '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', 
                                    '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', 
                                    '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00' 
                                    ],
                                    format:'H:i',
                                });
                            });
                            </script>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Waktu Selesai Kegiatan</label>
                            <input class="form-control" id="waktu_selesai" type="text" name="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan" required="">
                            <script>
                            $(document).ready(function(){
                                $('#waktu_selesai').datetimepicker({
                                    datepicker:false,
                                    allowTimes:[
                                    '06:00', '06:30', '07:00', '07:30', '08:00', '08:30', '09:00', '09:30', 
                                    '10:00', '10:30', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', 
                                    '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '17:00', '17:30', 
                                    '18:00', '18:30', '19:00', '19:30', '20:00', '20:30', '21:00' 
                                    ],
                                    format:'H:i',
                                });
                            });
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Nama Peminjam</label>
                            <input class="form-control" type="text" name="nama_peminjam" placeholder="Masukkan Nama Anda" required>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Nomor HP Peminjam (Dapat Dihubungi Melalui WhatsApp)</label>
                            <input class="form-control" type="text" name="nohp" placeholder="Masukkan Nomor HP Anda" required>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Nama Kegiatan</label>
                            <input class="form-control" type="text" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan Anda" required>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Lembaga/Lingkungan/Kelompok Katergorial</label>
                            <input class="form-control" type="text" name="pemilik_kegiatan" placeholder="Masukkan Nama Pemilik Kegiatan" required>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Jumlah Orang / Partisipan Kegiatan</label>
                            <input class="form-control" type="text" name="jumlah_orang" placeholder="Masukkan Jumlah Orang" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Deskripsi Kegiatan</label>
                            <textarea class="form-control" type="text" name="deskripsi_kegiatan" rows="5" placeholder="Masukkan Deskripsi Kegiatan" required></textarea>
                        </div>
                        <div class="form-group  floating-label-form-group">
                            <label for="">Keterangan Tambahan</label>
                            <textarea class="form-control" type="text" name="keterangan_tambahan" placeholder="Tambahkan keterangan tambahan apabila anda ingin request barang lain seperti sound, mic atau lainnya. contoh : 'Kami juga membutuhkan kursi sebanyak 50 dan sound system.'" rows="5"></textarea>
                        </div>
                    </div>
                </div>        
                <button type="submit" class="btn" style="background:#8C2D25!important;color:#fff;float:right;" >Submit</button>
            </div>
        </form>
    </section>

    <script>
        $(document).ready(function() {
            // Lihat Gambar Ruangan
            $('#ruanganpeminjaman').change(function() {
                // Get value selected option
                var id_item = $(this).val();

                var settings = {
                    "url": `https://apiwidyabhakti.parokikatedralmalang.org/api/detailruangan/${id_item}`,
                    "method": "GET",
                    "timeout": 0,
                };

                $.ajax(settings).done(function (res) {
                    // Append Element Image
                    var src = 'src="<?php echo base_url() ?>admin/uploads/img_ruangan/'+ res.data[0].thumbnail +'"';
                    var image = $(`<img class="rounded mb-2" ${src} alt="" style="width: 100%;">`);

                    $('.image-ruangan').empty().append(image);
                });
            });
        });
    </script>
