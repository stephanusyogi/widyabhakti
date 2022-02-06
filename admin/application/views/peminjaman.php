<style>
    .pending-btn[data-count]:after{
    position: absolute;
    content: attr(data-count);
    font-size: 16px;
    top: 10%;
    color: #ff0707;
    min-width: 1em;
    font-weight: bold;
    background: transparent;
    }
</style>
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
                <div class="container p-2">
                    <div class="row container">
                        <a style="color: white;cursor: pointer;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Add</a>&nbsp;
                    </div>
                </div>
                <div class="card-header p-2">
                    <ul class="nav nav-pills">
                        <li class="nav-item"><a class="nav-link active" href="#menu1" data-toggle="tab">Approved Submission</a></li>
                        <li class="nav-item"><a class="nav-link pending-btn" href="#menu2" data-toggle="tab" data-count="<?= ($peminjamanpending['success']==true) ? count($peminjamanpending['data']) : '' ?>">Pending Submission</a></li>
                        <li class="nav-item"><a class="nav-link" href="#menu3" data-toggle="tab">Rejected Submission</a></li>
                    </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="menu1">
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Peminjam</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($peminjamanapproved['success'] == true){ ?>
                                            <?php foreach ($peminjamanapproved['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('peminjaman/hapus'); ?>/<?= $row['id_peminjaman']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                        <a href="<?= base_url() ?>" style="margin-left: 10px;cursor: pointer;" disabled><i class="fab fa-whatsapp" style="color: yellow;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['nama_kegiatan']; ?></td>
                                                    <td><?php echo $row['nama_peminjam']; ?></td>
                                                    <td><?php echo $row['nama_ruangan']; ?> - <?= ($row['lantai_ruangan'] == '0') ? 'Ground' : $row['lantai_ruangan'] ?></td>
                                                    <td><button class="btn btn-success">Disetujui</button></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="GET" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_kegiatan" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" value="<?= $row['nama_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pemilik_kegiatan" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" value="<?= $row['pemilik_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_peminjam" class="form-control" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nohp" class="form-control" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_ruangan" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" value="<?= $row['nama_ruangan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jumlah_orang" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" value="<?= $row['jumlah_orang']; ?> Orang" disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="jadwal" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="input" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_mulai" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_mulai" class="form-control" value="<?php echo $row['waktu_mulai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_selesai" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_selesai" class="form-control" value="<?php echo $row['waktu_selesai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="deskripsi_kegiatan" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" disabled><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="keterangan_tambahan" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" disabled><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_admin" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= $row['nama_admin']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" value="<?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pesan_admin" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" disabled><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('peminjaman/ubah'); ?>/<?= $row['id_peminjaman']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id_peminjaman" value="<?= $row['id_peminjaman']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" value="<?= $row['nama_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" placeholder="Pemilik Kegiatan" value="<?= $row['pemilik_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nama_peminjam" value="<?= $row['nama_peminjam']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="Peminjam" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nohp" value="<?= $row['nohp']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="No Handphone" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_ruangan" value="<?= $row['id_ruangan']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Ruangan" value="<?= $row['nama_ruangan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" placeholder="Jumlah Orang" value="<?= $row['jumlah_orang']; ?> Orang">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="date" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_mulai" type="text" name="waktu_mulai" value="<?php echo $row['waktu_mulai'] ?>" placeholder="Masukkan Waktu Mulai Kegiatan"  required="" autocomplete="off">
                                                                                    <script>
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
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_selesai" type="text" name="waktu_selesai" value="<?php echo $row['waktu_selesai'] ?>"  placeholder="Masukkan Waktu Selesai Kegiatan" required="" autocomplete="off">
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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" placeholder="Deskripsi Kegiatan"><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" placeholder="Keterangan Tambahan"><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= ($row['nama_admin']) ? $row['nama_admin'] : "" ;?>" disabled>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Status</label>
                                                                                <input type="hidden" name="hiddenstatus" value="<?= $row['status']; ?>">
                                                                                <div class="col-sm-8">
                                                                                <select class="form-control" type="text" name="status" placeholder="Masukan Status">
                                                                                    <option value="<?= $row['status']; ?>" selected disabled><?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?></option>
                                                                                    <option value="approved">Disetujui</option>
                                                                                    <option value="rejected">Tidak Disetujui</option>
                                                                                    <option value="pending">Pending</option>
                                                                                </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" placeholder="Pesan Admin"><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Update Data</button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php }else{?>
                                            <tr>
                                                <td colspan="6" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="menu2">
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Peminjam</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($peminjamanpending['success'] == true){ ?>
                                            <?php foreach ($peminjamanpending['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('peminjaman/hapus'); ?>/<?= $row['id_peminjaman']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['nama_kegiatan']; ?></td>
                                                    <td><?php echo $row['nama_peminjam']; ?></td>
                                                    <td><?php echo $row['nama_ruangan']; ?> - <?= ($row['lantai_ruangan'] == '0') ? 'Ground' : $row['lantai_ruangan'] ?></td>
                                                    <td><button class="btn btn-warning">Pending</button></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="GET" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_kegiatan" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" value="<?= $row['nama_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pemilik_kegiatan" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" value="<?= $row['pemilik_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_peminjam" class="form-control" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nohp" class="form-control" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_ruangan" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" value="<?= $row['nama_ruangan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jumlah_orang" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" value="<?= $row['jumlah_orang']; ?> Orang" disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="jadwal" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="input" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_mulai" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_mulai" class="form-control" value="<?php echo $row['waktu_mulai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_selesai" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_selesai" class="form-control" value="<?php echo $row['waktu_selesai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="deskripsi_kegiatan" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" disabled><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="keterangan_tambahan" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" disabled><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_admin" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= $row['nama_admin']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" value="<?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pesan_admin" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" disabled><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('peminjaman/ubah'); ?>/<?= $row['id_peminjaman']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id_peminjaman" value="<?= $row['id_peminjaman']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" value="<?= $row['nama_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" placeholder="Pemilik Kegiatan" value="<?= $row['pemilik_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nama_peminjam" value="<?= $row['nama_peminjam']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="Peminjam" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nohp" value="<?= $row['nohp']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="No Handphone" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_ruangan" value="<?= $row['id_ruangan']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Ruangan" value="<?= $row['nama_ruangan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" placeholder="Jumlah Orang" value="<?= $row['jumlah_orang']; ?> Orang">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="date" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_mulai" type="text" name="waktu_mulai" value="<?php echo $row['waktu_mulai'] ?>" placeholder="Masukkan Waktu Mulai Kegiatan"  required="" autocomplete="off">
                                                                                    <script>
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
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_selesai" type="text" name="waktu_selesai" value="<?php echo $row['waktu_selesai'] ?>"  placeholder="Masukkan Waktu Selesai Kegiatan" required="" autocomplete="off">
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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" placeholder="Deskripsi Kegiatan"><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" placeholder="Keterangan Tambahan"><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= ($row['nama_admin']) ? $row['nama_admin'] : "" ;?>" disabled>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Status</label>
                                                                                <input type="hidden" name="hiddenstatus" value="<?= $row['status']; ?>">
                                                                                <div class="col-sm-8">
                                                                                <select class="form-control" type="text" name="status" placeholder="Masukan Status">
                                                                                    <option value="<?= $row['status']; ?>" selected disabled><?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?></option>
                                                                                    <option value="approved">Disetujui</option>
                                                                                    <option value="rejected">Tidak Disetujui</option>
                                                                                    <option value="pending">Pending</option>
                                                                                </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" placeholder="Pesan Admin"><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Update Data</button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php }else{?>
                                            <tr>
                                                <td colspan="6" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="menu3">
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Peminjam</th>
                                            <th>Ruangan</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if($peminjamanrejected['success'] == true){ ?>
                                            <?php foreach ($peminjamanrejected['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('peminjaman/hapus'); ?>/<?= $row['id_peminjaman']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['nama_kegiatan']; ?></td>
                                                    <td><?php echo $row['nama_peminjam']; ?></td>
                                                    <td><?php echo $row['nama_ruangan']; ?> - <?= ($row['lantai_ruangan'] == '0') ? 'Ground' : $row['lantai_ruangan'] ?></td>
                                                    <td><button class="btn btn-warning">Pending</button></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="GET" enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_kegiatan" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" value="<?= $row['nama_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pemilik_kegiatan" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" value="<?= $row['pemilik_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_peminjam" class="form-control" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_user" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nohp" class="form-control" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_ruangan" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" value="<?= $row['nama_ruangan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jumlah_orang" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" value="<?= $row['jumlah_orang']; ?> Orang" disabled>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="jadwal" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="input" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_mulai" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_mulai" class="form-control" value="<?php echo $row['waktu_mulai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu_selesai" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu_selesai" class="form-control" value="<?php echo $row['waktu_selesai'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="deskripsi_kegiatan" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" disabled><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="keterangan_tambahan" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" disabled><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="nama_admin" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= $row['nama_admin']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" value="<?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pesan_admin" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" disabled><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id_peminjaman']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('peminjaman/ubah'); ?>/<?= $row['id_peminjaman']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <input type="hidden" name="id_peminjaman" value="<?= $row['id_peminjaman']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" placeholder="Nama Kegiatan" value="<?= $row['nama_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" placeholder="Pemilik Kegiatan" value="<?= $row['pemilik_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nama_peminjam" value="<?= $row['nama_peminjam']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="Peminjam" value="<?= $row['nama_peminjam']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="hidden" name="nohp" value="<?= $row['nohp']; ?>">
                                                                                    <input type="text" name="" class="form-control" placeholder="No Handphone" value="<?= $row['nohp']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_ruangan" value="<?= $row['id_ruangan']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" placeholder="Ruangan" value="<?= $row['nama_ruangan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" placeholder="Jumlah Orang" value="<?= $row['jumlah_orang']; ?> Orang">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="date" name="jadwal" class="form-control" value="<?php echo $row['jadwal'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_mulai" type="text" name="waktu_mulai" value="<?php echo $row['waktu_mulai'] ?>" placeholder="Masukkan Waktu Mulai Kegiatan"  required="" autocomplete="off">
                                                                                    <script>
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
                                                                                    </script>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input class="form-control" id="waktu_selesai" type="text" name="waktu_selesai" value="<?php echo $row['waktu_selesai'] ?>"  placeholder="Masukkan Waktu Selesai Kegiatan" required="" autocomplete="off">
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
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" placeholder="Deskripsi Kegiatan"><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" placeholder="Keterangan Tambahan"><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" value="<?= ($row['nama_admin']) ? $row['nama_admin'] : "" ;?>" disabled>
                                                                                </div>
                                                                                
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Status</label>
                                                                                <input type="hidden" name="hiddenstatus" value="<?= $row['status']; ?>">
                                                                                <div class="col-sm-8">
                                                                                <select class="form-control" type="text" name="status" placeholder="Masukan Status">
                                                                                    <option value="<?= $row['status']; ?>" selected disabled><?php echo $row['status']=='approved' ? 'Disetujui' : ($row['status']=='rejected' ? 'Tidak Disetujui' : 'Pending' ) ?></option>
                                                                                    <option value="approved">Disetujui</option>
                                                                                    <option value="rejected">Tidak Disetujui</option>
                                                                                    <option value="pending">Pending</option>
                                                                                </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" placeholder="Pesan Admin"><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Update Data</button>
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        <?php }else{?>
                                            <tr>
                                                <td colspan="6" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                                <td style="display: none"></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.tab-content -->
                </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
        </div>
    </section>
    <!-- /.content -->
    
    <!-- Modal Add -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Data Peminjaman || Create New Submission</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= base_url('peminjaman/tambah'); ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="nama_kegiatan" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Masukkan Nama Kegiatan" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pemilik_kegiatan" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="pemilik_kegiatan" class="form-control" placeholder="Masukkan Nama Lembaga/Lingkungan/Komunitas" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_user" class="col-sm-4 col-form-label">Nama Peminjam</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama_peminjam" class="form-control" placeholder="Masukkan Nama Peminjam" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_user" class="col-sm-4 col-form-label">No Handphone (WhatsApp)</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nohp" class="form-control" placeholder="Masukkan Nomor Handphone (WhatsApp)" required/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jumlah_orang" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="jumlah_orang" class="form-control" placeholder="Masukkan Jumlah Orang" required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="nama_ruangan" class="col-sm-4 col-form-label">Ruangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="ruanganpeminjaman" name="id_ruangan" required>
                                            <option selected disabled>Pilih Ruangan</option>
                                            <?php foreach($dataruangan['data'] as $row ){?>
                                                <option value="<?= $row['id_ruangan']; ?>"><strong><?= $row['nama_ruangan']; ?></strong> - Lt. <?= $row['lantai'] == '0' ? 'Ground' : $row['lantai'] ?></option>
                                            <?php } ?>
                                        </select>
                                        <div class="image-ruangan mt-2 text-center"></div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="jadwal" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                    <div class="col-sm-8">
                                        <input type="date" name="jadwal" class="form-control" placeholder="Masukkan Tanggal Kegiatan" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="waktu_mulai" class="col-sm-4 col-form-label">Waktu Mulai Kegiatan</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input class="form-control" id="waktu_mulai_add" type="text" name="waktu_mulai" placeholder="Masukkan Waktu Mulai Kegiatan"  required>
                                            <script>
                                            $(document).ready(function(){
                                                $('#waktu_mulai_add').datetimepicker({
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
                                <div class="form-group row">
                                    <label for="waktu_selesai" class="col-sm-4 col-form-label">Waktu Selesai Kegiatan</label>
                                    <div class="col-sm-8">
                                        <div class="input-group">
                                            <input class="form-control" id="waktu_selesai_add" type="text" name="waktu_selesai" placeholder="Masukkan Waktu Selesai Kegiatan" required="">
                                            <script>
                                            $(document).ready(function(){
                                                $('#waktu_selesai_add').datetimepicker({
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
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label for="deskripsi_kegiatan" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" name="deskripsi_kegiatan" class="form-control" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="keterangan_tambahan" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" name="keterangan_tambahan" class="form-control" placeholder="Tambahkan keterangan tambahan apabila anda ingin request barang lain seperti sound, mic atau lainnya. contoh : 'Kami juga membutuhkan kursi sebanyak 50 dan sound system.'" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <input type="hidden" name="id_admin" class="form-control" value="<?= $this->session->userdata('login_data_admin')['userdata']['id'] ?>">
                                <div class="form-group row">
                                    <label for="status" class="col-sm-4 col-form-label">Status</label>
                                    <div class="col-sm-8">
                                        <select class="form-control" type="text" name="status" placeholder="Masukan Status" required>
                                            <option selected disabled>Masukkan Status</option>
                                            <option value="approved">Disetujui</option>
                                            <option value="rejected">Tidak Disetujui</option>
                                            <option value="pending">Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="pesan_admin" class="col-sm-4 col-form-label">Pesan Admin</label>
                                    <div class="col-sm-8">
                                        <textarea type="text" name="pesan_admin" class="form-control" placeholder="Masukkan Pesan Admin" rows="5"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Add</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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
                    var src = 'src="<?php echo base_url() ?>uploads/img_ruangan/'+ res.data[0].thumbnail +'"';
                    var image = $(`<img class="rounded mb-2" ${src} alt="" style="width: 60%;">`);

                    $('.image-ruangan').empty().append(image);
                });
            });
        });
    </script>