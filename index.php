<?php
session_start();
ob_start();
include 'veri.php';
if (isset($_SESSION["uye"])){
    header("Location:main");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Samba Post | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">

              <h1>Giriş Sayfası</h1>

              <form method="post">
              <div>
                <input name="adi" type="text" class="form-control" placeholder="Kullanıcı Adınızı Giriniz" required>
              </div>
              <div>
                <input name="sifre" type="password" class="form-control" placeholder="Şifrenizi Giriniz" required>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Giriş Yap</button>
                <a class="reset_pass" href="#">Şifremi Unuttum!</a>
</form>

              </div>
          <?php
          if(isset($_POST["adi"])){
              $kullanici_adi=$_POST["adi"];
              $kullanici_sifre=$_POST["sifre"];
              $sql=mysqli_query($db,"select kullanici_adi,sifre,id from firmalar where kullanici_adi='$kullanici_adi' and sifre='$kullanici_sifre'");
              $data=mysqli_fetch_array($sql);
              if (mysqli_num_rows($sql)==1){
                  echo '                       <div class="col-12">
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
                  $_SESSION["uye"]=true;
                  $_SESSION["uye"]=$data["id"];
                  header("Refresh: 2; url=main");
              }
              else{
                  echo '           <div class="col-12">
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

              <div class="clearfix"></div>

              <div class="separator">


                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> SambaPost</h1>
                  <p>Copyright &copy; 2020 <a href="#">Diyar Aydın</a></p>
                </div>
              </div>
          </section>
        </div>

      </div>
    </div>


  </body>
</html>
