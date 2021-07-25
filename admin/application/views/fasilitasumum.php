<style>
    .test-popup-link > img{
        object-fit: cover;
    }

    .cropgaleri {
        width: 80%;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 15px;
        position: relative;
    }
    .tombol-hapus{
        position: absolute;
        top:5%;
        right:5%;
    }
    .tombol-hapus > i:hover{
        cursor:pointer;
        color:#fff!important;
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
                <div class="card-body">
                    <div class="tab-content">
                        <div class="active tab-pane" id="menu1">
                            <div class="row">
                                <form action="<?= base_url('fasilitasumum/tambah'); ?>" method="POST" enctype="multipart/form-data" style="max-width:70%;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <input type="text" name="nama" class="form-control" placeholder="Nama Fasilitas" required>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="file" name="file_image" class="form-control" id="sampul" onchange="previewImg()" required>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="" class="img-thumbnail img-preview">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success" style="font-size:14px;">Tambah</button>
                                </form>
                            </div>
                            <div class="galeri-section" style="padding-top:25px;">
                            <?php if(isset($fasilitasumum['data'])){ ?>
                                <div class="row">
                                    <?php foreach($fasilitasumum['data'] as $rows){ ?>
                                        <div class="col-md-4">
                                            <div class="cropgaleri">
                                                <img class="img-fluid" src="<?= base_url()?>uploads/img_galeri/<?= $rows['img_dir'] ?> ?>">
                                                <h5 class="text-center mt-2"><?= $rows['nama'] ?></h5>
                                                <hr>
                                                <a href="<?= base_url('fasilitasumum/hapus'); ?>/<?= $rows['id_fasilitas']; ?>" class="tombol-hapus" ><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php }else{?>
                                <p style="color:grey;font-size:18px;text-align:center;">Data Belum Tersedia</p>
                            <?php } ?>
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
function previewImg() {
    const sampul = document.querySelector('#sampul');
    const imgPreview = document.querySelector('.img-preview');

    const fileSampul = new FileReader();
    fileSampul.readAsDataURL(sampul.files[0]);

    fileSampul.onload = function(e) {
        imgPreview.src = e.target.result;
    }
}
</script>