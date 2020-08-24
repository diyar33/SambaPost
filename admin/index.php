<?php
session_start();
ob_start();
include '../veri.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Samba</b>Post</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Giriş Paneli</p>

            <form method="post">
                <div class="input-group mb-3">
                    <input type="text" name="adi" class="form-control" placeholder="Kullanıcı Adı">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="sifre" type="password" class="form-control" placeholder="Şifre">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>

</html>
<?php
if(isset($_POST["adi"])){
    $kullanici_adi=$_POST["adi"];
    $kullanici_sifre=$_POST["sifre"];
    $sql=mysqli_query($db,"select * from kullanici where kullanici_ad='$kullanici_adi' and kullanici_sifre='$kullanici_sifre'");
    $data=mysqli_fetch_array($sql);
    if (mysqli_num_rows($sql)==1){

        echo '                       <div class="col-md-3 col-sm-6 col-12">
            <div class="info-box bg-success">
              <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>

              <div class="info-box-content">
             
                <span class="info-box-number">Giriş Başarılı</span>
                <span class="progress-description">
                  Yölendiriliyor...
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
';
        $_SESSION["kullanici"]=true;
        $_SESSION["kullanici"]=$data["id"];
        header("Refresh: 2; url=main");

    }
    else
        {
            echo '           <div class="col-md-3">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Hatalı Giriş</h3>
              </div>
              <div class="card-body">
                Kullanıcı Adı veya Şifresi Hatalı
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
';
    }
}
?>
