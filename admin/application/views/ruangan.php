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
                            <a class="btn btn-success btn-sm float-right" style="color: white;cursor: pointer;"><i class="far fa-file-excel"></i> Export</a>
                            <div class="row">
                                <a style="color: white;cursor: pointer;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Add</a>&nbsp;
                            </div>
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Nama Ruangan</th>
                                            <th>Kapasitas</th>
                                            <th>Luas Ruangan</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($ruangan['data'])){ ?>
                                            <?php foreach ($ruangan['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_ruangan']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_ruangan']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('ruangan/hapus'); ?>/<?= $row['id_ruangan']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['nama']; ?></td>
                                                    <td><?php echo $row['kapasitas']; ?></td>
                                                    <td><?php echo $row['luas']; ?></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_ruangan']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Ruangan || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="GET" enctype="multipart/form-data">
                                                                    <div class="form-group row">
                                                                        <label for="nama<?= $row['id_ruangan']; ?>" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="nama" class="form-control" id="nama<?= $row['id_ruangan']; ?>" value="<?= $row['nama']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="kapasitas<?= $row['id_ruangan']; ?>" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="kapasitas" class="form-control" id="kapasitas<?= $row['id_ruangan']; ?>" value="<?= $row['kapasitas']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="luas<?= $row['id_ruangan']; ?>" class="col-sm-2 col-form-label">Luas Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="luas" class="form-control" id="luas<?= $row['id_ruangan']; ?>" value="<?= $row['luas']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="deskripsi<?= $row['id_ruangan']; ?>" class="col-sm-2 col-form-label">Deskripsi Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi<?= $row['id_ruangan']; ?>" disabled><?= $row['deskripsi']; ?></textarea>
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
<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Data Ruangan || Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('ruangan/tambah'); ?>" method="POST" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kapasitas" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="luas" class="col-sm-2 col-form-label">Luas Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="luas" class="form-control" id="luas" placeholder="Masukkan Luas Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Ruangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Ruangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="file_image" class="col-sm-2 col-form-label">Thumbnail Ruangan</label>
                        <div class="col-sm-8 row">
                            <div class="col-md-6">
                                <input type="file" name="file_image_thumbnail" class="form-control" id="sampul" onchange="previewImg()">
                            </div>
                            <div class="col-md-6">
                                <img src="" width="250" class="img-thumbnail img-preview" style="margin-top:10px;">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-2">
                            <label for="file_image">Images Ruangan (Max : 4)</label>
                        </div>
                        <div class="col-md-10">
                            <input type="file" name="file_image[]" class="form-control" multiple="">
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


<script>
function previewImg() {
    const sampul = document.querySelector('#sampul');
    const imgPreview = document.querySelector('.img-preview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
function previewImg_edit(id) {
    const sampule = document.querySelector('#sampul-edit' + id);
    const imgPreview = document.querySelector('.img-preview-edit' + id);

    const fileSampule = new FileReader();
    fileSampule.readAsDataURL(sampule.files[0]);

    fileSampule.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
</script>