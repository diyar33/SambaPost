<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
    if (isset($_SESSION["duzenle"])){
        if ($_SESSION["duzenle"]=="basari"){
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
        else if ($_SESSION["duzenle"]=="hatali"){

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
        $_SESSION["duzenle"]="";
    }

    ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Firmalar</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Ana Sayfa</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Firma Kayıtları Listesi</h3>
                        </div>
                        <?php
                        $sql=mysqli_query($db,"SELECT * FROM firmalar");

                        ?>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Firma Adı</th>
                                    <th>Temsilci</th>
                                    <th>İletişim Numarası</th>
                                    <th>Ip Adresi</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while ($data=mysqli_fetch_array($sql)){


                                ?>
                                    <tr>
                                    <td><?php echo $data["isim"]; ?></td>
                                    <td><?php echo $data["temsilci"]; ?>
                                    </td>
                                    <td><?php echo $data["telefon"]; ?></td>
                                    <td> <?php echo $data["ip"]; ?></td>
                                    <td>
                                        <a href="edit-<?php echo $data["id"]; ?>.html"><i class="fa fa-edit"></i></a>&emsp;
                                        <a href="delete_page.php?gelenId=<?php echo $data["id"]; ?>"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Firma Adı</th>
                                    <th>Temsilci</th>
                                    <th>İletişim Numarası</th>
                                    <th>Ip Adresi</th>
                                    <th></th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
