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
                                                    <td><?php echo $row['nama']; ?> || Lantai : <?= ($row['lantai']=='0') ? 'Ground' : $row['lantai']; ?></td>
                                                    <td><?php echo $row['kapasitas']; ?> Orang</td>
                                                    <td><?php echo $row['luas']; ?></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id_ruangan']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Ruangan || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('ruangan/ubah'); ?>/<?= $row['id_ruangan']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $row['id_ruangan']; ?>">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Lantai Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="lantai" class="form-control" value="<?= $row['lantai']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="kapasitas" class="form-control" value="<?= $row['kapasitas']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Luas Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="luas" class="form-control" value="<?= $row['luas']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Deskripsi Ruangan</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea type="text" name="deskripsi" class="form-control"><?= $row['deskripsi']; ?></textarea>
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
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_ruangan']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Ruangan || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-md-6" style="display:flex;align-items:center;padding:0px 25px;">
                                                                        <!-- Carousel -->
                                                                        <div class="container">
                                                                            <div id="carousel-thumb<?= $row['id_ruangan']; ?>" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
                                                                                <!--Slides-->
                                                                                <div class="carousel-inner carousel-resp text-center" role="listbox">
                                                                                    <?php foreach ($ruangan['data'][0]['photos'] as $key => $photos) { ?>
                                                                                        <div class="carousel-item <?php if ($key == 0) {
                                                                                                                        echo 'active';
                                                                                                                    } ?>">
                                                                                            <img style="width: 600px;" class="" src="<?php echo base_url().'/uploads/img_ruangan/'.$photos['src'] ?>" height="350px" style="object-fit:contain; width:;">
                                                                                        </div>
                                                                                    <?php } ?>
                                                                                </div>
                                                                                <!--/.Slides-->
                                                                                <!--Controls-->
                                                                                <a class="carousel-control-prev" style="position: absolute; font-size:xx-large; 
                                                                                color:#8C2D25;" href="#carousel-thumb<?= $row['id_ruangan']; ?>" role="button" data-slide="prev">
                                                                                    <i class="fas fa-chevron-circle-left btn-detail-left"></i>
                                                                                    <span class="sr-only">prev</span>
                                                                                </a>
                                                                                <a class="carousel-control-next" style="position: absolute; font-size:xx-large; 
                                                                                color:#8C2D25;" href="#carousel-thumb<?= $row['id_ruangan']; ?>" role="button" data-slide="next">
                                                                                    <i class="fas fa-chevron-circle-right btn-detail-right"></i>
                                                                                    <span class="sr-only">Next</span>
                                                                                </a>
                                                                                <!--/.Controls-->
                                                                                <ol class="carousel-indicators" style="border-radius: 50%;">
                                                                                    <?php foreach ($ruangan['data'][0]['photos'] as $key => $photos) { ?>
                                                                                        <li style="border-radius: 50%; width:10px; height:10px; border:1px solid white;" data-target="#carousel-thumb<?= $row['id_ruangan']; ?>a-slide-to="<?php echo $key ?>">
                                                                                            <img src="<?php echo base_url().'/uploads/img_ruangan/'.$photos['src'] ?>" width="100">
                                                                                        </li>
                                                                                    <?php } ?>
                                                                                </ol>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <form method="GET" enctype="multipart/form-data">
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Nama Ruangan</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="nama" class="form-control" value="<?= $row['nama']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Lantai Ruangan</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="lantai" class="form-control" value="<?= $row['lantai']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="kapasitas" class="form-control" value="<?= $row['kapasitas']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Luas Ruangan</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" name="luas" class="form-control" value="<?= $row['luas']; ?>" disabled>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Deskripsi Ruangan</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea type="text" name="deskripsi" class="form-control" disabled><?= $row['deskripsi']; ?></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label for="" class="col-sm-2 col-form-label">Thumbnail Ruangan</label>
                                                                                <div class="col-sm-8">
                                                                                    <img src="<?= base_url('/uploads/img_ruangan') ?>/<?= $row['thumbnail']; ?>" width="250" class="img-thumbnail" style="margin-top:10px;">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
                        <label for="" class="col-sm-2 col-form-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Lantai Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="lantai" class="form-control" id="lantai" placeholder="Masukkan Lantai Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Kapasitas Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="kapasitas" class="form-control" id="kapasitas" placeholder="Masukkan Kapasitas Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Luas Ruangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="luas" class="form-control" id="luas" placeholder="Masukkan Luas Ruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Deskripsi Ruangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="deskripsi" class="form-control" id="deskripsi" placeholder="Masukkan Deskripsi Ruangan"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-sm-2 col-form-label">Thumbnail Ruangan</label>
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
                            <label for="">Images Ruangan (Max : 4)</label>
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