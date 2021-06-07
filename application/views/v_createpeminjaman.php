<?php include('include/headernomenu.php'); ?>
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
        <form action="<?= base_url() ?>peminjaman/create" name="peminjaman" method="POST" id="create-peminjaman-form" role="form" enctype="multipart/form-data">
            <div class="container">
                <h2 style="color: #8C2D25;">Formulir Pengajuan Peminjaman Ruangan</h2>
                <p>Harap mengisi form yang tersedia dibawah ini!</p>
                <hr>
            </div>
            <div class="container create" id="step-0">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <input type="hidden" name="id_ruangan" value="">
                            <label for="">Ruangan Yang Akan Dipinjam</label>
                            <span class="btn btn-info" style="font-size:14px;float:right;" data-toggle="modal" data-target="#informasiruangan">Informasi Ruangan</span>
                            <input type="hidden" name="idruangan" value="<?= $ruangan['data'][0]['id_ruangan']; ?>">
                            <input class="form-control mt-1" type="text" name="ruangan" placeholder="Masukkan Ruangan" value="<?= $ruangan['data'][0]['nama']; ?>" disabled>
                        </div>
                        <!-- Modal Informasi Peminjaman -->
                        <div class="modal fade" id="informasiruangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Informasi <?= $ruangan['data'][0]['nama']; ?></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="thumb text-center">
                                        <img src="<?php echo base_url().'admin/uploads/img_ruangan/'.$ruangan['data'][0]['thumbnail'] ?>" alt="" style="width:100%;"> 
                                    </div>
                                    <hr>
                                    <h5>Deskripsi</h5>
                                    <p>Kapasitas Ruangan : <?= $ruangan['data'][0]['kapasitas'] ?> orang</p>
                                    <p>Luas Ruangan : <?= $ruangan['data'][0]['luas'] ?></p>    
                                    <p>Lantai : <?= $ruangan['data'][0]['lantai'] ?></p>
                                    <p>Deskripsi Ruangan : <?= $ruangan['data'][0]['deskripsi'] ?></p>   
                                </div>
                                </div>
                            </div>
                        </div>
                        <!-- Carousel -->
                        <div class="container">
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                <!--Slides-->
                                <div class="carousel-inner carousel-resp text-center" role="listbox">
                                    <?php foreach ($ruangan['data'][0]['photos'] as $key => $photos) { ?>
                                        <div class="carousel-item <?php if ($key == 0) {
                                                                        echo 'active';
                                                                    } ?>">
                                            <img style="width: 100%;" class="" src="<?php echo base_url().'admin/uploads/img_ruangan/'.$photos['src'] ?>" height="350px" style="object-fit:contain; width:;">
                                        </div>
                                    <?php } ?>
                                </div>
                                <!--/.Slides-->
                                <!--Controls-->
                                <a class="carousel-control-prev" style="position: absolute; font-size:xx-large; 
                                color:#8C2D25;" href="#carousel-thumb" role="button" data-slide="prev">
                                    <i class="fas fa-chevron-circle-left btn-detail-left"></i>
                                    <span class="sr-only">prev</span>
                                </a>
                                <a class="carousel-control-next" style="position: absolute; font-size:xx-large; 
                                color:#8C2D25;" href="#carousel-thumb" role="button" data-slide="next">
                                    <i class="fas fa-chevron-circle-right btn-detail-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Controls-->
                                <ol class="carousel-indicators" style="border-radius: 50%;">
                                    <?php foreach ($ruangan['data'][0]['photos'] as $key => $photos) { ?>
                                        <li style="border-radius: 50%; width:10px; height:10px; border:1px solid white;" data-target="#carousel-thumb" data-slide-to="<?php echo $key ?>">
                                            <img src="<?php echo base_url().'admin/uploads/img_ruangan/'.$photos['src'] ?>" width="100">
                                        </li>
                                    <?php } ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group  floating-label-form-group">
                            <label for="">Jadwal Kegiatan</label>
                            <input type="hidden" name="jadwal" value="<?= $dateruangan ?>">
                            <input class="form-control" type="text" placeholder="Masukkan Jadwal Kegiatan" value="<?= $dateruangan ?>" disabled>
                        </div>
                        <div class="hintform">
                            <p>* Sebelum mengisi Waktu Mulai dan Waktu Selesai peminjaman , harap memperhatikan jadwal ruangan yang tersedia di tanggal tersebut . Klik tombol berikut untuk mengetahui ruangan telah terpakai di waktu berapa.</p>
                            <span class="btn btn-info" data-toggle="modal" data-target="#jadwalruangan">Jadwal Ruangan Terpakai</span>
                        </div>
                        <!-- Modal Informasi Pemakaian -->
                        <div class="modal fade" id="jadwalruangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="jadwalruangan">Informasi <?= $ruangan['data'][0]['nama']; ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Ruangan ini telah terpakai di jadwal :</p>
                                        <div class="text-center" style="padding:10px 25px;">
                                            <?php
                                                if ($waktu_terpakai['status'] == 'onlyruangan') { ?>
                                                <p><?= $ruangan['data'][0]['nama']; ?> belum dipakai di tanggal : <b><?= $dateruangan ?></b></p>
                                            <?php }else{ ?>
                                                <?php 
                                                foreach ($waktu_terpakai['data']['jadwal_terpakai'] as $row) { ?>
                                                    <p class="waktuterpakai mt-1">Pkl. <?=$row['waktu_mulai']?><span> - </span>Pkl. <?=$row['waktu_selesai']?></p>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group  floating-label-form-group">
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
                <button type="button" onclick="validateForm1();" class="btn btn-success mt-2" style="float:right;">Next</button>
                <script>
                    function validateForm1() {
                        var fdatepeminjaman = document.forms["peminjaman"]["jadwal"].value;
                        var fwaktu_mulai = document.forms["peminjaman"]["waktu_mulai"].value;
                        var fwaktu_selesai = document.forms["peminjaman"]["waktu_selesai"].value;
                        var token = '<?= $this->session->userdata('login_data')['token'] ?>' ;
                        if (fwaktu_mulai == null || fwaktu_mulai == "") {
                            alert("Waktu Mulai Peminjaman Harus Diisi");
                            return false;
                        } else if (fwaktu_selesai == null || fwaktu_selesai == "") {
                            alert("Waktu Selesai Peminjaman Harus Diisi !");
                            return false;
                        } else {
                            var form = new FormData();
                            form.append("waktu_mulai", fwaktu_mulai);
                            form.append("waktu_selesai", fwaktu_selesai);
                            form.append("datepeminjaman", fdatepeminjaman);
                            var request = {
                                "url": "http://127.0.0.1:8000/api/validasiwaktu",
                                "method": "POST",
                                "timeout": 0,
                                "headers": {
                                    "Accept": "application/json",
                                    "Authorization": "Bearer " + token
                                },
                                "processData": false,
                                "mimeType": "multipart/form-data",
                                "contentType": false,
                                "data": form
                            };
                            $.ajax(request).done(function (response) {
                                var res = JSON.parse(response);
                                if(res.success == true){
                                    alert('Waktu yang anda masukkan telah digunakan oleh peminjam lain, cek tombol jadwal ruangan untuk melihat jadwal yang terpakai.');
                                    return false;
                                }else if(res.message == 'Unauthenticated.'){
                                    window.location.replace('<?php echo base_url('logout'); ?>');
                                }else{
                                    $('#step-0').hide();
                                    $('#step-1').show();
                                }
                            });
                        }
                    }
                </script>
            </div>
            <div class="container create" id="step-1" style="display: none;">
                <div class="form-group  floating-label-form-group">
                    <label for="">Nama Pengaju</label>
                    <input type="hidden" name="id_user" value="<?= $this->session->userdata('login_data')['userdata']['id'] ?>">
                    <input class="form-control" type="text" name="nama_user" placeholder="Masukkan Nama Pengaju" value="<?= $this->session->userdata('login_data')['userdata']['name'] ?>" disabled>
                </div>
                <div class="form-group  floating-label-form-group">
                    <label for="">Nama Kegiatan</label>
                    <input class="form-control" type="text" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" required>
                </div>
                <div class="form-group  floating-label-form-group">
                    <label for="">Lembaga/Organisasi/Komunitas</label>
                    <input class="form-control" type="text" name="organisasi" placeholder="Masukkan Lembaga/Organisasi/Komunitas Penanggun Jawab Kegiatan" value="<?= $this->session->userdata('login_data')['userdata']['organisasi'] ?>" required>
                </div>
                <div class="form-group  floating-label-form-group">
                    <label for="">Jumlah Orang / Partisipan Kegiatan</label>
                    <input class="form-control" type="text" name="jumlah_orang" placeholder="Masukkan Jumlah Orang / Partisipan Kegiatan" required>
                </div>
                <div class="form-group  floating-label-form-group">
                    <label for="">Deskripsi Kegiatan</label>
                    <textarea class="form-control" type="text" name="deskripsi" rows="5" placeholder="Masukkan Deskripsi Kegiatan" required></textarea>
                </div>
                <div class="form-group  floating-label-form-group">
                    <label for="">Keterangan Tambahan</label>
                    <textarea class="form-control" type="text" name="keterangan_tambahan" placeholder="Tambahkan keterangan tambahan apabila anda ingin request barang lain seperti sound, mic atau lainnya. contoh : 'Kami juga membutuhkan kursi sebanyak 50 dan sound system.'" rows="5"></textarea>
                </div>
                <button type="button" onclick="$('#step-1').hide(); $('#step-0').show();" class="btn btn-secondary">Back</button>
                <button type="submit" class="btn" style="background:#8C2D25!important;color:#fff;float:right;" >Submit</button>
            </div>
        </form>
    </section>


    <?php include('include/footer.php'); ?>
