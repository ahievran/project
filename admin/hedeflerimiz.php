<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hedeflerimiz</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Simple Tables</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Hedeflerimiz</h3>
                                <a href="hedefadd.php">
                                    <button style="float:right" class="btn btn-success ">Ekle</button>
                                </a>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped projects">
                                    <thead>
                                    <tr>
                                        <th>
                                            #
                                        </th>
                                        <th>
                                            İcon
                                        </th>
                                        <th>
                                            Başlık
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
                                    $sql = "SELECT * FROM hedeflerimiz ORDER BY hedef_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>

                                        <tbody>
                                        <tr>
                                            <td><?php echo $row["hedef_id"]; ?></td>
                                            <td><i class="icon ion-android-globe" style="font-size: 40px;"></i></td>
                                            <td><?php echo $row["hedef_baslik"]; ?></td>
                                            <form method='post' action='hedeflerimizicerik.php'>
                                                <td>
                                                    <input type='hidden' name="hedef_id" value='<?php echo $row["hedef_id"]; ?>'>
                                                    <input type='hidden' name="hedef_baslik" value='<?php echo $row["hedef_baslik"]; ?>'>
                                                    <input type='hidden' name="hedef_icerik" value='<?php echo $row["hedef_icerik"]; ?>'>
                                                    <input type='hidden' name="hedef_icon" value='<?php echo $row["hedef_icon"]; ?>'>
                                                    <button name="see" class="btn btn-primary">
                                                        Görüntüle
                                                    </button>
                                                </td>
                                            </form>
                                            <form method='post' action='hedeflerimiz_sil.php'>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["hedef_id"]; ?>' name='silinecek_id'>
                                                    <a>
                                                        <button class="btn btn-danger" name='sil'>
                                                            Sil
                                                        </button>
                                                    </a>
                                                </td>
                                            </form>
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