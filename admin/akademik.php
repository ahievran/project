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
                                            Fakülte
                                        </th>
                                        <th>
                                            Bölüm
                                        </th>
                                        <th>
                                            Ofis
                                        </th>
                                        <th>
                                            Telefon
                                        </th>
                                        <th>
                                            E-posta
                                        </th>
                                        <th>
                                            Hakkında
                                        </th>
                                        <th>
                                            Link
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
                                        <td>1.</td>
                                        <td><i class="icon ion-android-globe" style="font-size: 40px;"></i></td>
                                        <td><?php echo $row["personel_isim_soyisim"]; ?></td>
                                        <td>
                                            <?php echo $row["personel_fakülte"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_bölüm"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_ofis"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_telefon"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["personel_hakkında"]; ?>
                                        </td>
                                        <td>
                                            <a>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal">
                                                    Link
                                                </button>
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">
                                                                    İçerik</h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                        aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                https://akademik.ahievran.edu.tr/personel/dce4744b-51fe-4518-b580-ac14b49a524e
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Kapat
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>

                                        <td>
                                            <a>
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