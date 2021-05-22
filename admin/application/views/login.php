<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log In WidyaBhakti Dashboard</title>
  <link rel="icon" href="<?php echo base_url('/public/dist/img/logo.png') ?>">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>/public/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>/public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>/public/dist/css/adminlte.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/public/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Toast -->
  <link rel="stylesheet" href="<?php echo base_url('/public/plugins'); ?>/toastr/toastr.min.css">
  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>/public/plugins/jquery/jquery.min.js"></script>
</head>
<?php
  $error = $this->session->flashdata('error');
  if ($error) {
  ?>
    <script type="text/javascript">
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
            console.log('test');
    </script>
  <?php }
  ?>
<style>
    .login-message{
      color: red;
      font-size: small;
      margin-left: 5px;
    }
    .speech-bubble {
      position: fixed;
      width: 200px;
      height: 150px;
      right: 45px;
      top: 50px;
      background: #777;
      border-radius: 50%;
      color: white;
      box-shadow: 10px 8px 5px 0px rgba(0, 0, 0, 0.6);
    }

    .speech-bubble>p {
      font-size: 15px;
      font-family: 'Poppins';
      margin-left: 25px;
      margin-top: 45px;
      margin-bottom: 20px;
      font-style: italic;
    }

    .speech-bubble>a {
      font-size: 14px;
      font-family: 'Poppins';
      border-radius: 5px;
      box-shadow: 0px 0px 5px 2px rgba(0, 0, 0, 0.3);
      background: #dc3545;
      color: white;
      border: 0;
      margin-left: 45px;
      padding: 3px 20px;
      border: 2px solid transparent;
    }

    .speech-bubble>a:hover {
      background: white;
      color: #dc3545;
      border: 2px solid #dc3545;
    }

    .speech-bubble::after {
      content: '';
      position: absolute;
      right: 0;
      top: 50%;
      width: 0;
      height: 0;
      border: 62px solid transparent;
      border-left-color: #777;
      border-right: 0;
      border-bottom: 0;
      margin-top: -21px;
      margin-right: -45px;
      box-shadow: 12px 8px 5px 0px rgba(0, 0, 0, 0.6);
    }

    .box-redir {
      display: none;
    }

    @media only screen and (max-width: 600px) {
      .speech-bubble {
        display: none;
      }

      .box-redir {
        display: flex;
        margin-top: 30px;
      }

      .box-redir>p,
      .box-redir>a {
        font-size: 15px;
        font-style: italic;
        margin: 0;
      }

      .box-redir>a {
        margin-left: 7px;
        font-style: normal;
        text-decoration: underline;
      }
    }
  </style>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo base_url(); ?>/public/dist/img/logo.png" width="100" />
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="<?php echo base_url() ?>auth" method="POST">
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-8">
            <?php
            $error = $this->session->flashdata('error');
            if ($error) {
            ?>
              <label for="remember" class="login-message">
                <?php echo $error; ?>
              </label>

            <?php }
            ?>
          </div>
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>/public/dist/js/adminlte.min.js"></script>
<!-- Toast -->
<script src="<?php echo base_url('public/plugins'); ?>/toastr/toastr.min.js"></script>  
<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
