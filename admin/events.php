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
                    <h1>Etkinlikler</h1>
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
                            <h3 class="card-title">Etkinlikler</h3>
                            <a href="eventsadd.php">
                                <button style="float:right" class="btn btn-success ">Etkinlik Ekle</button>
                            </a>
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
                                            Başlık
                                        </th>
                                        <th>
                                            İçerik
                                        </th>
                                        <th>
                                            Görüntüle
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                    <form method='post' action='events_sil.php'>
                                        <tr>
                                            <td><?php echo $row["etkinlik_id"]; ?></td>
                                            <td><i class="icon ion-android-globe" style="font-size: 40px;"></i></td>
                                            <td><?php echo $row["etkinlik_baslik"]; ?></td>
                                            <td>
                                                <?php echo $row["etkinlik_icerik"]; ?>
                                            </td>
                                            <td>
                                                <a href="eventgoruntule.php">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                        Görüntüle
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <input type='hidden' value='<?php echo $row["etkinlik_id"]; ?>' name='silinecek_id'>
                                                <a>
                                                    <button class="btn btn-danger" name="sil">Sil</button>
                                                </a>
                                            </td>
                                        </tr>
                                </tbody>
                            </form>
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