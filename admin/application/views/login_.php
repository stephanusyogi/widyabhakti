<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | Closebuy</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>/assets/dist/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>/assets/dist/favicon/favicon-16x16.png">
</head>

<body class="hold-transition login-page">
  <!-- <div class="speech-bubble">
    <p>Company Profile Admin ?</p>
    <a href="http://gasplus.uniteksolusi.com/admin_profile">click here!</a>
  </div> -->
  <div class="login-box">
    <div class="login-logo">
      <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" width="350" />
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form action="<?php echo base_url() ?>auth" method="post">
          <div class="input-group mb-3">
            <input type="text" name="username" class="form-control" placeholder="Username">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <?php
              $error = $this->session->flashdata('err');
              if ($error) {
              ?>
                <label for="remember" class="login-message">
                  <?php echo $error; ?>
                </label>

              <?php }
              ?>

            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
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
  <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url(); ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>

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

  <?php
  $error = $this->session->flashdata('error');
  if ($error) {
  ?>
    <script type="text/javascript">
      const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        type: 'error',
        title: '<?php echo $error; ?>'
      })
    </script>

  <?php }
  ?>
</body>

</html>