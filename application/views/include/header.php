<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Official Website - WidyaBhakti Pastoral Center" />
    <meta property="og:image" content="<?php echo base_url('assets/img/logo.png') ?>" />
    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/922eb8e20d.js" crossorigin="anonymous"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500;900&display=swap" rel="stylesheet">

    <!-- CSS PopUp -->
    <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/magnific-popup.css') ?>">

    <!-- CSS -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/bootstrap/css/style.less') ?>" />

    <!-- Timepicker -->
    <link rel="stylesheet/less" type="text/css" href="<?php echo base_url('assets/plugins/datetimepicker/jquery.datetimepicker.css') ?>" />

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Toast -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/plugins'); ?>/toastr/toastr.min.css">
    
    <!-- Less JS -->
    <script src="//cdn.jsdelivr.net/npm/less@3.13" ></script>

    <!-- Swiper JS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <!-- JQuery -->
    <script src="<?php echo base_url('assets/bootstrap/js/jquery-3.5.1.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>
    
    <!-- TimePicker -->
    <script src="<?php echo base_url('assets/plugins'); ?>/datetimepicker/jquery.datetimepicker.full.min.js"></script>
    
    <!-- Fixed -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <title>Widya Bhakti | Pastoral Center Official Website</title>
    <link rel="icon" href="<?php echo base_url('assets/img/logo.png') ?>">

    <?php $error = $this->session->flashdata('errorMsg');
    if ($error) { ?>
      <script type="text/javascript">
      // console.log('test');
        $(function() {
          const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 4000
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
            timer: 4000
          });
          Toast.fire({
            icon: 'success',
            title: '&nbsp;<?php echo $success ?>'
          })
        });
      </script>
    <?php } ?>
</head>
<body>
    <!-- Section Menu -->
    <section class="section-menu">
        <div class="container">
            <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light">
                <a class="navbar-brand title-brand" href="<?php echo base_url();?>">
                <img class="img-fluid" src="<?php echo base_url('assets/img/logo.png') ?>" width="50" height="30" alt="">
                <span class="title-wb">Widya Bhakti</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav-hover <?php if($menuLink=='main') { echo 'nav-active'; } ?>">
                            <a class="nav-link" href="<?php echo site_url('main') ?>">Beranda</a>
                        </li>
                        <li class="nav-item nav-hover <?php if($menuLink=='tentang') { echo 'nav-active'; } ?>">
                            <a class="nav-link" href="<?php echo site_url('tentang') ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item nav-hover <?php if($menuLink=='fasilitas') { echo 'nav-active'; } ?>">
                            <a class="nav-link" href="<?php echo base_url('fasilitas') ?>">Fasilitas</a>
                        </li>
                        <li class="nav-item nav-hover <?php if($menuLink=='berita') { echo 'nav-active'; } ?> nav-right">
                            <a class="nav-link" href="<?php echo base_url('berita') ?>">Berita</a>
                        </li>
                        <li class="item-button mr-2">
                            <button class="btn-infopinjam">
                                <a class="nav-link" href="<?php echo base_url('peminjaman/informasi') ?>">Informasi Peminjaman</a>
                            </button>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </section>