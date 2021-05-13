<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/jquery.min.js') ?>"></script>

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
            timer: 5000
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
            timer: 5000
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
<body>
    <!-- Section Menu -->
    <section class="section-menu">
        <div class="container">
            <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light">
                <a class="navbar-brand title-brand" href="#">
                <img class="img-fluid" src="<?php echo base_url('assets/img/logo.png') ?>" width="50" height="30" alt="">
                <span class="title-wb">Widya Bhakti</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item nav-hover nav-active">
                            <a class="nav-link" href="#">Beranda</a>
                        </li>
                        <li class="nav-item nav-hover">
                            <a class="nav-link" href="<?php echo base_url('main/tentang') ?>">Tentang Kami</a>
                        </li>
                        <li class="nav-item nav-hover">
                            <a class="nav-link" href="<?php echo base_url('main/fasilitas') ?>">Fasilitas</a>
                        </li>
                        <li class="nav-item nav-hover nav-right">
                            <a class="nav-link" href="<?php echo base_url('main/berita') ?>">Berita</a>
                        </li>
                        <li class="item-button mr-2">
                            <button class="btn-infopinjam">
                                <a class="nav-link" href="#">Informasi Peminjaman</a>
                            </button>
                        </li>
                        <li class="br-line"><i class="fas fa-grip-lines-vertical" style="color:#8C2D25;font-size:40px;"></i></li>
                        <?php if ($this->session->userdata('isLoggedIn')) { ?>
                        <li class="item-button">
                            <div class="dropdown">
                                <button style="color:white;padding:10px 15px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-login dropdown-toggle">
                                <i class="fas fa-user"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item">Profil Saya</a>
                                    <a href="<?php echo base_url('logout'); ?>" class="dropdown-item log_out">Log out</a>
                                </div>
                            </div>
                        </li>
                        <?php }else{?>
                        <li class="item-button">
                            <button class="btn-login">
                                <a class="nav-link" data-toggle="modal" data-target="#loginModal">Login</a>
                            </button>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Modal Login -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-title text-center mb-4">
                <h4>Login</h4>
                </div>
                <div class="d-flex flex-column text-center">
                    <form class="form-login" method="POST" action="<?php echo base_url() ?>/auth" enctype="multipart/form-data">
                        <div class="form-group">
                        <input type="email" name="email" class="wb-form-control" id="email1" placeholder="Masukkan Email Anda">
                        </div>
                        <div class="form-group">
                        <input type="password" name="password" class="wb-form-control" id="password1" placeholder="Masukkan Password">
                        </div>
                        <button type="submit" class="btn btn-block btn-round" style="background:#8C2D25!important;">Login</button>
                    </form>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-center">
                <div class="signup-section">Belum memiliki akun? <a style="color:#8C2D25!important;" href="#" class="text-info"> Daftar</a>.</div>
            </div>
            </div>
        </div>
    </div>