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
                                <a style="color: white;cursor: pointer;" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addModal"><i class="fas fa-plus"></i> Post</a>&nbsp;
                            </div>
                            <div class="row table-responsive" style="margin-top: 20px;">
                                <table class="table table-bordered table-striped fancyTable">
                                    <thead>
                                        <tr>
                                            <th>Action</th>
                                            <th>Title</th>
                                            <th>Excerpt Content</th>
                                            <th>Publisher</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($berita['data'])){ ?>
                                            <?php foreach ($berita['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id_berita']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a data-toggle="modal" data-target="#detailModal<?= $row['id_berita']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-eye" style="color:darkblue;"></i></i></a>
                                                        <a href="<?= base_url('berita/hapus'); ?>/<?= $row['id_berita']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['title']; ?></td>
                                                    <td><?php echo $row['excerpt']; ?></td>
                                                    <td><?php echo $row['nama_admin']; ?></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Detail -->
                                                <div class="modal fade" id="detailModal<?= $row['id_berita']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Berita & Artikel || Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="GET" enctype="multipart/form-data">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Title Berita</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" name="title" class="form-control" value="<?= $row['title']; ?>" disabled>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Content Berita</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea type="text" name="content" class="form-control" disabled><?= strip_tags($row['content']); ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Excerpt Berita</label>
                                                                        <div class="col-sm-10">
                                                                            <textarea type="text" name="excerpt" class="form-control" disabled><?= strip_tags($row['excerpt']); ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Thumbnail Berita</label>
                                                                        <div class="col-sm-8">
                                                                            <img src="<?= base_url('/uploads/img_thumbnail_berita') ?>/<?= $row['img_dir']; ?>" width="250" class="img-thumbnail" style="margin-top:10px;">
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
                                                <div class="modal fade" id="editModal<?= $row['id_berita']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Berita & Artikel || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('berita/ubah'); ?>/<?= $row['id_berita']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $row['id_berita']; ?>">
                                                                        <div class="form-group row">
                                                                            <label for="" class="col-sm-2 col-form-label">Title Berita</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" name="title" class="form-control" placeholder="Masukkan Title Berita" value="<?= $row['title']; ?>">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="" class="col-sm-2 col-form-label">Content Berita</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea type="text" name="content" class="ckeditor form-control" id="ckeditor" placeholder="Masukkan Content Berita"><?= $row['content']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="" class="col-sm-2 col-form-label">Excerpt Berita</label>
                                                                            <div class="col-sm-10">
                                                                                <textarea type="text" name="excerpt" class="ckeditor form-control" id="ckeditor" placeholder="Masukkan Excerpt Berita"><?= $row['excerpt']; ?></textarea>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label for="" class="col-sm-2 col-form-label">Thumbnail Berita</label>
                                                                            <div class="col-sm-8 row">
                                                                                <div class="col-md-6">
                                                                                    <input type="hidden" name="thumbnail" value="<?= $row['img_dir']; ?>">
                                                                                    <input type="file" name="file_image_edit" class="form-control" onchange="previewImg_edit(<?= $row['id_berita']; ?>)">
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <img src="<?= base_url('/uploads/img_thumbnail_berita') ?>/<?= $row['img_dir']; ?>" width="250" class="img-thumbnail img-preview-edit<?= $row['id_berita']; ?>" style="margin-top:10px;">
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
</div>
<!-- Modal Add -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Data Berita & Artikel || Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('berita/tambah'); ?>" method="POST" enctype=multipart/form-data>
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label">Title Berita</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" id="title" placeholder="Masukkan Title Berita" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-sm-2 col-form-label">Content Berita</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="content" class="ckeditor form-control" id="ckeditor" placeholder="Masukkan Content Berita" required></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="excerpt" class="col-sm-2 col-form-label">Excerpt Berita</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="excerpt" class="ckeditor form-control" id="ckeditor" placeholder="Masukkan Excerpt Berita" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="file_image">Thumbnail Berita</label>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="file" name="file_image" class="form-control" id="sampul" onchange="previewImg()" required>
                            </div>
                            <div class="col-md-4">
                                <img src="" class="img-thumbnail img-preview">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Publish</button>
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