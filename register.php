<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="shop/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="shop/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="shop/dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="shop/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>

<body class="hold-transition login-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Admin</b>LTE</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register</p>
      <form action="conf/register1.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="user name" name="username"> 
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
     
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="password2">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
        
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    

      <a href="index.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="shop/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>
<?php
if(isset($_GET['error'])){
$x = $_GET['error'];
    if($x==1){
      echo  "
      <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'center-top',
        showConfirmButton: false,
        timer: 3000
      }); 
        Toast.fire({
          icon: 'error',
          title: 'input ulang pasword tidak sama!!'
        })
        </script>";
    }
    else if($x==2){
      echo  "
      <script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'center-top',
        showConfirmButton: false,
        timer: 3000
      }); 
        Toast.fire({
          icon: 'warning',
          title: 'user name telah tersedia , ganti yang lain!!!'
        })
        </script>";
      }
      else if($x==3){
        echo  "
        <script>
        var Toast = Swal.mixin({
          toast: true,
          position: 'center-top',
          showConfirmButton: false,
          timer: 3000
        }); 
          Toast.fire({
            icon: 'warning',
            title: 'isi dulu user name dan nama!!!'
          })
          </script>";
    }
    else{
      echo'';
    }
    }
?>
</html>
