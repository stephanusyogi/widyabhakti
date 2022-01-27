<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title; ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a style="color:#000;" href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="breadcrumb-item active"><a style="color:#8C2D25;" href="<?php echo base_url() . $menuLink; ?>"><?php echo $menuName; ?></a></li>
                    </ol>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="menu1">
                            <?php if(isset($peminjaman['data'])){ ?>
                                <?php foreach ($peminjaman['data'] as $row) { ?>
                                    <form action="<?= base_url() ?>peminjaman/ubah" name="peminjaman" method="POST" id="create-peminjaman-form" role="form" enctype="multipart/form-data">
                                        <input type="hidden" name="id_peminjaman" value="<?= $row['id_peminjaman']; ?>">
                                        <div class="container">
                                            <hr/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group  floating-label-form-group">
                                                        <label for="">Waktu Mulai Kegiatan</label>
                                                        <input class="form-control mt-1" id="waktu_mulai" type="text" name="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan" value="<?= $row['waktu_mulai'] ?>">
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
                                                        <input class="form-control mt-1" id="waktu_selesai" type="text" name="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan" value="<?= $row['waktu_selesai'] ?>">
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
                                                <div class="col-md-6">
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Ruangan Kegiatan</label>
                                                        <input type="hidden" name="hiddenruangan" value="<?= $row['id_ruangan']; ?>">
                                                        <select class="form-control mt-1" id="editRuanganPeminjaman" type="text" name="id_ruangan" placeholder="Masukan Ruangan">
                                                                    <option value="<?= $row['id_ruangan']; ?>" selected disabled><?= $row['nama_ruangan']; ?></option>
                                                            <?php if(isset($ruangan['data'])){ ?>
                                                                <?php foreach ($ruangan['data'] as $row_ruangan) { ?>
                                                                    <option value="<?= $row_ruangan['id_ruangan'] ?>"><?= $row_ruangan['nama'] ?></option>
                                                                <?php } ?>
                                                            <?php }else{?>
                                                                    <option>Data Tidak Tersedia</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Tanggal Kegiatan</label>
                                                        <input type="date" name="jadwal" class="form-control mt-1" value="<?= $row['jadwal']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-secondary mb-1">Check</button>
                                            <div class="alert alert-info small d-flex" role="alert">
                                                <span><i class="fas fa-exclamation-triangle"></i></span>&nbsp;&nbsp;&nbsp;Apabila terdapat perubahan pada Ruangan, Tanggal, Waktu Mulai & Waktu Selesai Kegiatan, dimohon untuk memeriksa ketersediaan jadwal dengan menekan tombol Check .
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Nama Peminjam</label>
                                                        <input type="hidden" name="hiddenuser" value="<?= $row['id_user']; ?>">
                                                        <select class="form-control mt-1" id="editUserPeminjaman" type="text" name="id_user" placeholder="Masukan Nama Peminjam">
                                                                    <option value="<?= $row['id_user']; ?>" selected disabled><?= $row['nama_user']; ?></option>
                                                            <?php if(isset($user['data'])){ ?>
                                                                <?php foreach ($user['data'] as $row_user) { ?>
                                                                    <option value="<?= $row_user['id'] ?>"><?= $row_user['name'] ?></option>
                                                                <?php } ?>
                                                            <?php }else{?>
                                                                    <option>Data Tidak Tersedia</option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group  floating-label-form-group">
                                                        <label for="">Nama Kegiatan</label>
                                                        <input class="form-control mt-1" type="text" name="nama_kegiatan" placeholder="Masukkan Nama Kegiatan" value="<?= $row['nama_kegiatan']; ?>">
                                                    </div>
                                                    <div class="form-group  floating-label-form-group">
                                                        <label for="">Lembaga/Organisasi Pemilik Kegiatan</label>
                                                        <input class="form-control mt-1" type="text" name="pemilik_kegiatan" placeholder="Masukkan Pemilik Kegiatan" value="<?= $row['pemilik_kegiatan']; ?>">
                                                    </div>
                                                    <div class="form-group  floating-label-form-group">
                                                        <label for="">Jumlah Orang dalam Kegiatan</label>
                                                        <input class="form-control mt-1" type="text" name="jumlah_kegiatan" placeholder="Masukkan Jumlah Orang" value="<?= $row['jumlah_orang']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Verifikator</label>
                                                        <input type="text" name="nama_admin" class="form-control mt-1" value="<?= $row['nama_admin']; ?>" disabled>
                                                    </div>
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Peminjam Rutin ?</label>
                                                        <input type="hidden" name="hiddenrutin" value="<?= $row['rutin']; ?>">
                                                        <select class="form-control mt-1" type="text" name="rutin" placeholder="">
                                                            <option value="<?= $row['rutin']; ?>" selected disabled><?= $row['rutin'] ? 'Peminjam Rutin' : 'Bukan Peminjam Rutin' ?></option>
                                                            <option value="1">Peminjam Rutin</option>
                                                            <option value="0">Bukan Peminjam Rutin</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="">Status</label>
                                                        <input type="hidden" name="hiddenstatus" value="<?= $row['status']; ?>">
                                                        <select class="form-control mt-1" type="text" name="status" placeholder="Masukan Status">
                                                            <option value="<?= $row['status']; ?>" selected disabled><?= $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?></option>
                                                            <option value="approved">Disetujui</option>
                                                            <option value="rejected">Tidak Disetujui</option>
                                                            <option value="pending">Pending</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group floating-label-form-group">
                                                        <label for="" >Pesan Admin</label>
                                                        <textarea type="text" name="pesan_admin" class="form-control mt-1" placeholder="Pesan Admin"><?= $row['pesan_admin']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group  floating-label-form-group">
                                                <label for="">Deskripsi Kegiatan</label>
                                                <textarea class="form-control mt-1" type="text" name="deskripsi_kegiatan" placeholder="Masukkan Deskripsi Kegiatan" ><?= $row['deskripsi_kegiatan']; ?></textarea>
                                            </div>
                                            <div class="form-group  floating-label-form-group">
                                                <label for="">Keterangan Tambahan</label>
                                                <textarea class="form-control mt-1" type="text" name="keterangan_tambahan" placeholder="Masukkan Deskripsi Kegiatan"><?= $row['keterangan_tambahan']; ?></textarea>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-success float-right">Simpan Perubahan</button>
                                    </form>
                                <?php } ?>
                            <?php }else{?>
                                    <div style="text-align:center;"><p style="color:grey;font-size:18px;">Data Tidak Ditemukan</p></div>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </section>
    <!-- /.content -->
</div>

<script>
    $(function() {

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })


    })
</script>