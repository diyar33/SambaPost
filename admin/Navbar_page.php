  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
      <?php
      $kullanici_id=$_SESSION["kullanici"];
      $data=mysqli_fetch_array(mysqli_query($db,"select isim from kullanici where id='$kullanici_id'"));
$isim=$data["isim"];
      ?>
      <ul class="navbar-nav ml-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                <?php echo $isim; ?>  <i class="far fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      Kullanıcı Ayarları
                      <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      Destek İletişim
                      <!-- Message End -->
                  </a>

                  <div class="dropdown-divider"></div>
                  <a href="exit" class="dropdown-item">
                      <!-- Message Start -->
                      Çıkış Yap
                      <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>

              </div>
          </li>

      </ul>

    <!-- Right navbar links -->
  </nav>