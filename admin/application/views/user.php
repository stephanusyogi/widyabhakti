

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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Organisasi</th>
                                            <th>Nomor HP</th>
                                            <th>Data Created</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($datauser['data'])){ ?>
                                            <?php foreach ($datauser['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a href="<?= base_url('user/hapus'); ?>/<?= $row['id']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo $row['organisasi']; ?></td>
                                                    <td><?php echo $row['nohp']; ?></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data User || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('user/ubah'); ?>/<?= $row['id']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                                    <div class="form-group row">
                                                                        <label for="nama<?= $row['id']; ?>" class="col-sm-4 col-form-label">Name</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="name" class="form-control" id="nama<?= $row['id']; ?>" placeholder="Name" value="<?= $row['name']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="email<?= $row['id']; ?>" class="col-sm-4 col-form-label">Email Aktif</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="email" class="form-control" id="email<?= $row['id']; ?>" placeholder="Email" value="<?= $row['email']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="username<?= $row['id']; ?>" class="col-sm-4 col-form-label">Username</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="username" class="form-control" id="username<?= $row['id']; ?>" placeholder="Username" value="<?= $row['username']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="organisasi<?= $row['id']; ?>" class="col-sm-4 col-form-label">Organisasi / Lembaga / Komunitas</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="organisasi" class="form-control" id="organisasi<?= $row['id']; ?>" value="<?= $row['organisasi']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="nohp<?= $row['id']; ?>" class="col-sm-4 col-form-label">Nomor Handphone Aktif</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="nohp" class="form-control" id="nohp<?= $row['id']; ?>" value="<?= $row['nohp']; ?>">
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