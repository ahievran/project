<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Akademik Personel</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Akademik Personel</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            Resim
                                        </th>
                                        <th>
                                            İsim Soyisim
                                        </th>

                                        <th>
                                            E-posta
                                        </th>

                                        <th>
                                            Görüntüle
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM akademik_personel ORDER BY personel_id ASC";
                                    $result = $db->query($sql);
                                    while($row = $result->fetch_array()){ ?>
                                    <tbody>
                                    <tr>
                                        <td><?php echo $row["personel_id"]?>.</td>
                                        <td><i class="icon ion-android-globe" style="font-size: 40px;"></i></td>
                                        <td><?php echo $row["personel_isim_soyisim"]; ?></td>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_email"]; ?>
                                        </td>
                                        <td>
                                            <a href="personelgoruntule.php?">
                                                <button type="button" class="btn btn-primary">
                                                    Görüntüle
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a>
                                                <button class="btn btn-danger">Sil</button>
                                            </a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
<?php
require_once 'footer.php'; ?>