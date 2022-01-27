<?php include('include/headernomenu.php'); ?>
<!-- Section Carousel Jumbotron -->
<section class="carjumbotronprofil">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo base_url('assets/img/banner3.jpg') ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="main-text hidden-xs" data-aos="fade-down">
                <div class="container text-center">
                    <h1>Halaman Profil</h1>
                </div>
            </div>
</section>
<section class="section-profil">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="section-photo">
                    <div class="card">
                        <img class="card-img-top" src="<?= base_url('assets/img/avatar_user.png'); ?>" alt="Card image cap">
                        <div class="card-body text-center">
                            <h4 class="card-title" style="color:#77322c;"><?= $this->session->userdata('login_data_user')['userdata']['name'] ?></h4>
                            <h5 class="card-title" style="color:#77322c;font-weight:500!important;"><?= $this->session->userdata('login_data_user')['userdata']['email'] ?></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="section-dataprofil">
                    <div class="card card-dataprofil">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="formulir-tab" data-toggle="tab" href="#formulir" role="tab" aria-controls="formulir" aria-selected="true">Formulir Pinjam Ruangan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="identitas-tab" data-toggle="tab" href="#identitas" role="tab" aria-controls="identitas" aria-selected="true">Identitas Diri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="peminjaman-tab" data-toggle="tab" href="#peminjaman" role="tab" aria-controls="peminjaman" aria-selected="false">Data Peminjaman Saya</a>
                            </li>
                            </ul>
                        <div class="tab-content tab-dataprofil" id="myTabContent">
                            <!-- Check Ketersediaan Ruangan -->
                            <div class="tab-pane fade show active" id="formulir" role="tabpanel" aria-labelledby="formulir-tab">
                                <div class="section-checkroom">
                                    <h5>Ketersedian Ruangan</h5>
                                    <hr>
                                        <form>
                                            <div class="input-flex">
                                                <div class="sub mr-2">
                                                    <p>Tanggal Peminjaman:</p>
                                                    <input class="wb-form-control" type="date" id="datepeminjaman" required>
                                                </div>
                                                <div class="sub">
                                                    <p>Ruangan Yang Akan Dipinjam :</p>
                                                    <select class="wb-form-control" id="ruanganpeminjaman">
                                                        <?php foreach($dataruangan['data'] as $row ){?>
                                                            <option value="<?php echo $row['id_ruangan']; ?>"><?php echo $row['nama_ruangan']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <button class="btn btn-info mt-2" id="checkruangan">Check Ruangan</button>
                                        </form>
                                        <hr>
                                    <div class="resultjadwalruangan row mt-3">
                                        
                                    </div>
                                </div>
                            </div>
                            <!-- Identitas Diri -->
                            <div class="tab-pane fade " id="identitas" role="tabpanel" aria-labelledby="identitas-tab">
                                <div class="btnaction">
                                    <button class="btn btn-info" data-toggle="modal" data-target="#editIdentitas">Edit Data</button>
                                </div>
                                <!-- Modal Edit Profil-->
                                <div class="modal fade" id="editIdentitas" tabindex="-1" role="dialog" aria-labelledby="editIdentitasLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Identitas Diri</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                                <form action="" class="section-form-profil">
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="">Nama :</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="wb-form-control" type="text" value="<?= $this->session->userdata('login_data_user')['userdata']['name'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="">Email :</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="wb-form-control" type="text" value="<?= $this->session->userdata('login_data_user')['userdata']['email'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="">Username :</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="wb-form-control" type="text" value="<?= $this->session->userdata('login_data_user')['userdata']['username'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="">Organisasi / Komunitas / Lembaga :</label>
                                        </div>
                                        <div class="col-md-10" style="display:flex;align-items:center;">
                                            <input class="wb-form-control" type="text" value="<?= $this->session->userdata('login_data_user')['userdata']['organisasi'] ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-2">
                                            <label for="">Nomor Handphone :</label>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="wb-form-control" type="text" value="<?= $this->session->userdata('login_data_user')['userdata']['nohp'] ?>" disabled>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Halaman Data Data Peminjaman -->
                            <div class="tab-pane fade section-datapeminjaman" id="peminjaman" role="tabpanel" aria-labelledby="peminjaman-tab">
                                <?php if($datapeminjaman['success']) { ?>
                                    <div class="row">
                                        <?php foreach($datapeminjaman['data'] as $rows){ ?>
                                        <div class="col-md-4">
                                            <div class="card" style="position:relative;overflow:hidden;">
                                                <div class="ribbon-tag" style="background:
                                                    <?php if($rows['status']=='approved'){
                                                        echo 'green';
                                                        }
                                                        elseif($rows['status']=='rejected'){
                                                            echo 'red';
                                                        }else{
                                                            echo 'yellow';
                                                        }
                                                    ?>;color:#000;">
                                                    <?php
                                                        if($rows['status']=='approved'){
                                                            echo 'Approved';
                                                        }elseif($rows['status']=='rejected'){
                                                            echo 'Rejected';
                                                        }else{
                                                            echo 'Pending';
                                                        }
                                                    ?>
                                                    </div>
                                                <img class="card-img-top" src="<?= base_url() ?>/admin/uploads/img_ruangan/<?= $rows['thumbnail'] ?>" alt="">
                                                <div class="card-body">
                                                    <h5><?= $rows['nama_kegiatan'] ?></h5>
                                                    <hr>
                                                    <div class="row" style="font-size:14px;">
                                                        <div class="col-md-6">
                                                            <p><?= $rows['jadwal'] ?></p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><?= $rows['waktu_mulai'] ?><span> - </span><?= $rows['waktu_selesai'] ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="btn-act">
                                                        <button class="btn btn-info" data-toggle="tooltip" data-placement="top" title="Detail Ajuan Peminjaman"><span><i class="fas fa-eye"></i></span></button>
                                                        <button class="btn btn-success" data-toggle="tooltip" data-placement="top" title="Edit Ajuan Peminjaman"><span><i class="fas fa-edit"></i></span></button>
                                                        <button class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus Ajuan Peminjaman"><span><i class="fas fa-trash-alt"></i></span></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                <?php }else {?>
                                    <div style="text-align:center;padding:25px;">
                                        <h2 style="color:#77322c;">Data Peminjaman Anda Kosong.</h2>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $("#checkruangan").click(function(evt) {
        evt.preventDefault();
        var token = '<?= $this->session->userdata('login_data_user')['token'] ?>' ;
        var datepeminjaman = document.getElementById("datepeminjaman").value;
        var ruanganpeminjaman = document.getElementById("ruanganpeminjaman").value;
        if(datepeminjaman){
            var form = new FormData();
            form.append("datepeminjaman", datepeminjaman);
            form.append("ruanganpeminjaman", ruanganpeminjaman);
            var getdata = {
                    "url": "http://127.0.0.1:8000/api/checkpeminjaman",
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

                $.ajax(getdata).done(function (response) {
                var res = JSON.parse(response);
                if(res.status == 'dateandruangan'){
                    var img_src = 'src="<?php echo base_url() ?>admin/uploads/img_ruangan/'+ res.data.data_ruangan.thumbnail +'"';

                    var href = 'href="<?= base_url() ?>peminjaman/formulir/'+datepeminjaman+'/'+ruanganpeminjaman+'"'

                    let waktu = [];
                    for(i=0 ; i < res.data.jadwal_terpakai.length ; ++i){
                    waktu.push('<p>Pkl. '+res.data.jadwal_terpakai[i].waktu_mulai+'<span> - </span>Pkl. '+res.data.jadwal_terpakai[i].waktu_selesai+'</p>');
                    }
                    
                    $(".resultjadwalruangan").empty().append('<div class="col-md-6 img-ruangan"><img '+img_src+' alt="" style="width:350px;"></div><div class="col-md-6 jadwal-ruangan"><div class="title-btn row"><div class="col-md-6"><h5>Jadwal Terpakai</h5></div><div class="col-md-6"><a '+href+'><button class="btn btn-info">Pinjam Ruangan Ini</button></a></div></div><hr><div class="waktuterpakai">'+waktu+'</div><p style="font-size:14px;color:red;"><br>* Waktu diatas merupakan keterangan bahwa ruangan telah terpakai pada jarak waktu tersebut.</p></div>');

                }else if(res.status == 'onlyruangan'){

                    var img_src = 'src="<?php echo base_url() ?>admin/uploads/img_ruangan/'+ res.data.thumbnail +'"';

                    var href = 'href="<?= base_url() ?>peminjaman/formulir/'+datepeminjaman+'/'+ruanganpeminjaman+'"'
                    
                    $(".resultjadwalruangan").empty().append('<div class="col-md-6 img-ruangan"><img '+img_src+' alt="" style="width:350px;"></div><div class="col-md-6 jadwal-ruangan"><div class="title-btn row"><div class="col-md-6"><h5>Jadwal Terpakai</h5></div><div class="col-md-6"><a '+href+'><button class="btn btn-info">Pinjam Ruangan Ini</button></a></div></div><hr><div class="statusonlyruangan"><h5 style="color:#683a3a;">Ruangan Belum Terpakai Di Jadwal Yang Anda Cari.</h5></div></div>');

                }else if(res.message == 'Unauthenticated.'){
                    window.location.replace('<?php echo base_url('logout'); ?>');
                }else{
                    $(".resultjadwalruangan").empty().append('<div class="col-md-12 text-center"><h3 style="color:#683a3a;">Ruangan Belum Terpakai Di Jadwal Yang Anda Cari.</h3></div>');
                }
            });
        }else{
            alert("Dimohon Untuk Mengisi Field Data Yang Kosong.");
            return false;
        }
    });
</script>

<?php include('include/footer.php'); ?>
