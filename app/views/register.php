<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PERPUS RPL| Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/fontawesome-free/css/all.min.css'); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
  <!-- sweetalert2 -->
  <link rel="stylesheet" type="text/css" href="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.css'); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= urlTo('/public/adminlte/css/adminlte.min.css'); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div style="border-radius: 16px;
background: #e0e0e0;
box-shadow:  19px 19px 31px #9b9b9b,
             -19px -19px 31px #ffffff;" class="card">
    <div style="border-radius: 10px; "class="card-body login-card-body bg-secondary">
   

      <form action="<?= urlTo('/login/registers'); ?>" method="post">
        <div class="input-group mb-3">
          <input style="border-radius: 10px;"type="text" class="form-control" name="Username" placeholder="Username" required>
          <div class="input-group-append">
            <div style="border-radius: 50%;" class="input-group-text">
              <span style="color:white;" class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">

          <input style="border-radius: 10px;"type="email" class="form-control" name="Email" placeholder="Email" required>
          <div class="input-group-append">
            <div  style="border-radius: 50%;" class="input-group-text">
              <span style="color:white;" class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">

          <input style="border-radius: 10px;" type="text" class="form-control" name="NamaLengkap" placeholder="Nama Lengkap" required>
          <div class="input-group-append">
            <div style="border-radius: 50%;"class="input-group-text">
              <span style="color:white;"class="fas fa-user"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">

          <input style="border-radius: 10px;" type="text" class="form-control" name="Alamat" placeholder="Alamat" required>
          <div class="input-group-append">
            <div style="border-radius: 50%;" class="input-group-text">
              <span style="color:white;" class="fas fa-home"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">

        <input style="border-radius: 10px;" type="password" name="Password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div style="border-radius: 50%;" class="input-group-text">
              <span style="color:white;" class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="input-group mb-3">

          <input style="border-radius: 10px;" type="password" name="PasswordConfirm" class="form-control" placeholder="Konfirmasi Password">
          <div class="input-group-append">
            <div style="border-radius: 50%;"class="input-group-text">
              <span style="color:white;"class="fas fa-lock"></span>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button style="margin-left:-122px; margin-bottom: 8px; width: 90px; " type="submit" class="btn btn-primary">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a style="margin-left: 110px;"href="<?= urlTo('/login'); ?>" class="btn btn-success">Login</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- sweetalert2 -->
<script src="<?= urlTo('/public/adminlte/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
<!-- jQuery -->
<script src="<?= urlTo('/public/adminlte/plugins/jquery/jquery.min.js'); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= urlTo('/public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
<!-- AdminLTE App -->
<script src="<?= urlTo('/public/adminlte/js/adminlte.min.js'); ?>"></script>
<?php if (isset($_COOKIE['alert'])): ?>
  <?php $data = unserialize($_COOKIE['alert']); ?>
  <script>
    Swal.fire({
      title: "<?= $data[1]; ?>",
      icon: "<?= $data[0]; ?>",
      showConfirmButton: false,
      timer:2000
    });
  </script>
<?php endif ?>
</body>
</html>
