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
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(isset($datadmin['data'])){ ?>
                                            <?php foreach ($datadmin['data'] as $row) { ?>
                                                <tr>
                                                    <td>
                                                        <a data-toggle="modal" data-target="#editModal<?= $row['id']; ?>" style="margin-left: 10px;cursor: pointer;"><i class="fas fa-pencil-alt" style="color: green;"></i></a>
                                                        <a href="<?= base_url('admin/hapus'); ?>/<?= $row['id']; ?>" class="tombol-hapus" style="margin-left: 10px;"><i class="fas fa-trash-alt" style="color: red;"></i></a>
                                                    </td>
                                                    <td><?php echo $row['name']; ?></td>
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo date('m/d/Y H:i:s',strtotime($row['created_at'])); ?></td>
                                                </tr>
                                                <!-- Modal Edit -->
                                                <div class="modal fade" id="editModal<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="addModalLabel">Data Admin || Edit</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?= base_url('admin/ubah'); ?>/<?= $row['id']; ?>" method="POST"  enctype="multipart/form-data">
                                                                    <input type="hidden" name="id" value="<?= $row['id']; ?>">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nama Admin</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="name" class="form-control" placeholder="Nama Admin" value="<?= $row['name']; ?>">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Username Admin</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" name="username" class="form-control" placeholder="Email Admin" value="<?= $row['username']; ?>">
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
                                                <td colspan="4" style="text-align:center;"><p style="color:grey;font-size:18px;">Data Belum Tersedia</p></td>
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
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Data Admin || Add</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('admin/tambah'); ?>" method="POST">
                <div class="form-group row">
                    <label for="nama" class="col-sm-4 col-form-label">Nama Admin</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control" id="nama" placeholder="Masukan Nama Admin" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="username" class="col-sm-4 col-form-label">Username Admin</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" class="form-control" id="username" placeholder="Masukan Email Admin" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-4 col-form-label">Password Admin</label>
                    <div class="col-sm-8">
                        <input type="text" name="password" class="form-control" id="password" placeholder="Masukan Password Admin" required>
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
