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
                            <div class="row" style="justify-content:flex-end;">
                                <a style="color: white;cursor: pointer;" class="btn btn-success btn-sm"><i class="far fa-file-excel"></i> Export</a>&nbsp;
                            </div>
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Nama Kegiatan</th>
                                            <th>Peminjam</th>
                                            <th>Status</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($peminjaman['data'])){ ?>
                                            <?php foreach ($peminjaman['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_peminjaman']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('peminjaman/hapus'); ?>/<?= $row['id_peminjaman']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['nama_kegiatan']; ?></td>
                                                    <td><?php echo $row['nama_user']; ?></td>
                                                    <td><?php 
                                                        if($row['status'] == 'approved'){
                                                            echo '<button class="btn btn-success">Disetujui</button>';
                                                        }elseif($row['status'] == 'rejected'){
                                                            echo '<button class="btn btn-danger">Tidak Disetujui</button>';
                                                        }else{
                                                            echo '<button class="btn btn-warning">Pending</button>';
                                                        }
                                                    ?></td>
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
                                                                                <label for="nama_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan<?= $row['id_peminjaman']; ?>" value="<?= $row['nama_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pemilik_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" id="pemilik_kegiatan<?= $row['id_peminjaman']; ?>" value="<?= $row['pemilik_kegiatan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_user" value="<?= $row['id_user']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="nama_user<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_user" class="form-control" id="nama_user<?= $row['id_peminjaman']; ?>" value="<?= $row['nama_user']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_ruangan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" id="nama_ruangan<?= $row['id_peminjaman']; ?>" value="<?= $row['nama_ruangan']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jumlah_orang<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" id="jumlah_orang<?= $row['id_peminjaman']; ?>" value="<?= $row['jumlah_orang']; ?> Orang" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jadwal<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="input" name="jadwal" class="form-control" id="jadwal<?= $row['id_peminjaman']; ?>" value="<?php echo $row['jadwal'] ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Waktu Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="text" name="waktu" class="form-control" value="<?php echo $row['waktu'] ?>" disabled/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="deskripsi_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" id="deskripsi_kegiatan<?= $row['id_peminjaman']; ?>"disabled><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="keterangan_tambahan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" id="keterangan_tambahan<?= $row['id_peminjaman']; ?>" disabled><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_admin<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" id="nama_admin<?= $row['id_peminjaman']; ?>" value="<?= $row['nama_admin']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control" value="<?= $row['status']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pesan_admin<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" id="pesan_admin<?= $row['id_peminjaman']; ?>" disabled><?= $row['pesan_admin']; ?></textarea>
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
                                                                                <label for="nama_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Nama Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan<?= $row['id_peminjaman']; ?>" placeholder="Nama Kegiatan" value="<?= $row['nama_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pemilik_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Pemilik Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="pemilik_kegiatan" class="form-control" id="pemilik_kegiatan<?= $row['id_peminjaman']; ?>" placeholder="Pemilik Kegiatan" value="<?= $row['pemilik_kegiatan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_user" value="<?= $row['id_user']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="nama_user<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Peminjam</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_user" class="form-control" id="nama_user<?= $row['id_peminjaman']; ?>" placeholder="Peminjam" value="<?= $row['nama_user']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <input type="hidden" name="id_ruangan" value="<?= $row['id_ruangan']; ?>">
                                                                            <div class="form-group row">
                                                                                <label for="nama_ruangan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_ruangan" class="form-control" id="nama_ruangan<?= $row['id_peminjaman']; ?>" placeholder="Ruangan" value="<?= $row['nama_ruangan']; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jumlah_orang<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Jumlah Orang</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="jumlah_orang" class="form-control" id="jumlah_orang<?= $row['id_peminjaman']; ?>" placeholder="Jumlah Orang" value="<?= $row['jumlah_orang']; ?> Orang">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="jadwal<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Jadwal Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="date" name="jadwal" class="form-control" id="jadwal<?= $row['id_peminjaman']; ?>" value="<?php echo $row['jadwal'] ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="waktu<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Waktu Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <div class="input-group date" id="timepicker" data-target-input="nearest">
                                                                                        <input type="text" name="waktu" class="form-control datetimepicker-input" data-target="#timepicker" value="<?php echo $row['waktu'] ?>" />
                                                                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                                                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group row">
                                                                                <label for="deskripsi_kegiatan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Deskripsi Kegiatan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="deskripsi_kegiatan" class="form-control" id="deskripsi_kegiatan<?= $row['id_peminjaman']; ?>" placeholder="Deskripsi Kegiatan"><?= $row['deskripsi_kegiatan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="keterangan_tambahan<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Keterangan Tambahan</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="keterangan_tambahan" class="form-control" id="keterangan_tambahan<?= $row['id_peminjaman']; ?>" placeholder="Keterangan Tambahan"><?= $row['keterangan_tambahan']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="nama_admin<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Verifikator</label>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" name="nama_admin" class="form-control" id="nama_admin<?= $row['id_peminjaman']; ?>" value="<?= $this->session->userdata('login_data')['userdata']['name'] ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="status" class="col-sm-4 col-form-label">Status</label>
                                                                                <div class="col-sm-8">
                                                                                <select id="status" class="form-control" type="text" name="status" placeholder="Masukan Status">
                                                                                    <option value="<?= $row['status']; ?>" selected disabled><?= $row['status']; ?></option>
                                                                                    <option value="approved">Disetujui</option>
                                                                                    <option value="rejected">Tidak Disetujui</option>
                                                                                </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="pesan_admin<?= $row['id_peminjaman']; ?>" class="col-sm-4 col-form-label">Pesan Admin</label>
                                                                                <div class="col-sm-8">
                                                                                    <textarea type="text" name="pesan_admin" class="form-control" id="pesan_admin<?= $row['id_peminjaman']; ?>" placeholder="Pesan Admin"><?= $row['pesan_admin']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-success">Save</button>
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
                                                <td colspan="5" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
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
</div>

<script>
    $(function() {

        //Timepicker
        $('#timepicker').datetimepicker({
            format: 'LT'
        })

        $('#timepicker2').datetimepicker({
            format: 'LT'
        })

    })
</script>