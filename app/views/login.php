<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PerpustakaanDigital | Log in</title>

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
<div  class="login-box">
  <img style="border-radius: 50%; width:80px; height:80px; margin-left: 135px; margin-top: 9px;"src="https://static.vecteezy.com/system/resources/previews/004/853/320/non_2x/book-read-library-study-line-icon-illustration-logo-template-suitable-for-many-purposes-free-vector.jpg">
  <div style="height: 300px;" class="card mb-9  ">
    <div style="border-radius: 10px;
    border-radius: 23px;
background: #e0e0e0;
box-shadow:  12px 12px 26px #9b9b9b,
             -12px -12px 26px #ffffff;
    " class="card-body login-card-body bg-secondary">
      <p class="login-box-msg">Selamat Datang</p>

      <form action="<?= urlTo('/login/login'); ?>" method="post">
        <div class="input-group mb-4">
          <input style="border-radius: 10px;"type="text" class="form-control" name="Username" placeholder="Username">
          <div class="input-group-append">
            <div style="border-radius:50%; "class="input-group-text">
              <span style="color: white;" class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input style="border-radius: 10px;" type="password" class="form-control" name="Password" placeholder="Password">
          <div class="input-group-append">
            <div style="border-radius: 50%;" class="input-group-text">
              <span style="color: white;" class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-5">
            
          </div>
          <!-- /.col -->
          <div class="col-8 ">
            <button style=" width: 120px;margin-left: 85px;"type="submit" class="btn btn-success mb-2">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a  style=" margin-bottom: 10px; margin-left: 110px;" class="btn btn-primary" href="<?= urlTo('/login/register'); ?>"class="btn btn-alert">Daftar</a>
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
