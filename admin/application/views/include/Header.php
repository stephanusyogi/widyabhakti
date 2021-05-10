<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WidyaBhakti | Dashboard</title>
  <link rel="icon" href="<?php echo base_url('/public/dist/img/logo.png') ?>">

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Toast -->
  <link rel="stylesheet" href="<?php echo base_url('/public/plugins'); ?>/toastr/toastr.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/summernote/summernote-bs4.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
  <?php $error = $this->session->flashdata('errorMsg');
    if ($error) { ?>
      <script type="text/javascript">
      // console.log('test');
        $(function() {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });

          Toast.fire({
            icon: 'error',
            title: '&nbsp;<?php echo $error ?>'
          })
        });
      </script>

    <?php } ?>
    <?php $success = $this->session->flashdata('successMsg');
    if ($success) { ?>
      <script type="text/javascript">
        $(function() {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
          });
          Toast.fire({
            icon: 'success',
            title: '&nbsp;<?php echo $success ?>'
          })
        });
        console.log('<?php echo $success ?>');
      </script>
    <?php } ?>
</head>
<style>
  .control-sidebar-content{
    display:none!important;
  }
</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>/public/dist/img/logo.png" alt="WidyaBhaktiLogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo base_url() ?>" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-user-circle"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>/public/dist/img/logo.png" alt="WidyaBhakti Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Widya Bhakti</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>/public/dist/img/avatar2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?php echo site_url();?>" class="nav-link">
                    <i class="fas fa-home"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-header">USER</li>
            <li class="nav-item">
            <a href="<?php echo site_url('user');?>" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>Data User</p>
            </a>
            </li>
            <li class="nav-header">ADMIN</li>
            <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-user-tie"></i>
                <p>Data Admin</p>
            </a>
            </li>
            <li class="nav-header">PEMINJAMAN</li>
            <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-file-alt"></i>
                <p>Data Peminjaman</p>
            </a>
            </li>
            <li class="nav-header">RUANGAN</li>
            <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-building"></i>
                <p>Data Ruangan</p>
            </a>
            </li>
            <li class="nav-header">BERITA</li>
            <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
                <i class="nav-icon fas fa-newspaper"></i>
                <p>Data Berita & Artikel</p>
            </a>
            </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
