
<div class="content-wrapper">
    <?php
    if (isset($_SESSION["kayit"])){
        if ($_SESSION["kayit"]=="basari"){
    ?>
            <div class="col-sm-12">
                <div class="card bg-gradient-success">
                    <div class="card-header">
                        <h3 class="card-title">Kayıt Tamamlandı</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                       Kayıt İşlemi Başarıyla Tamamlanmıştır.
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
    <?php

        }
        else if ($_SESSION["kayit"]=="hatali"){

    ?>
    <div class="col-sm-12">
        <div class="card bg-gradient-danger">
            <div class="card-header">
                <h3 class="card-title">Kayıt Tamamlanamadı</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                Kayıt İşlemi Başarısız Oldu.
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
        <?php

    }
        $_SESSION["kayit"]="";
    }

    ?>

<section class="content">
    <div class="container-fluid">

        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Firma Ekle</h3>
                    </div>
                    <!-- /.card-header -->
                    <?php
$data=mysqli_fetch_array(mysqli_query($db,"select * from firmalar where id='$gelenId'"));
                    ?>
                    <!-- form start -->
                    <form method="post" action="save_edit">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Firma Adı</label>
                                <input name="isim" type="text" class="form-control" value="<?php if ($data){ echo $data["isim"]; } ?>"  placeholder="Firma Adı" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Kullanıcı Adı</label>
                                <input name="kullanici" type="text" class="form-control" value="<?php if ($data){ echo $data["kullanici_adi"]; } ?>"  placeholder="Kullanıcı Adınızı Giriniz" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sifre</label>
                                <input name="sifre" type="text" class="form-control" value="<?php if ($data){ echo $data["sifre"]; } ?>"  placeholder="Sifre Giriniz" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Firma Temsilci Bilgisi</label>
                                <input name="temsilci" type="text" class="form-control" value="<?php if ($data){ echo $data["temsilci"]; } ?>"  placeholder="Adı ve Soyadı" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Firna İletişim Numarası</label>
                                <input name="telefon" type="text" class="form-control" value="<?php if ($data){ echo $data["telefon"]; } ?>" placeholder="05xx xxx xx xx" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Firna Ip Adresi</label>
                                <input name="ip" type="text" class="form-control" value="<?php if ($data){ echo $data["ip"]; } ?>"  placeholder="Firma Ip Adresi Giriniz" required>
                                <?php
                                if ($data){ echo '<input type="hidden" name="id" value="'.$gelenId.'">';}
                                ?>

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Kaydet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
