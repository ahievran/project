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
                    <h1>Duyurular</h1>
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
                            <h3 class="card-title">Duyurular</h3>
                            <a href="hedefadd.php">
                                <button style="float:right" class="btn btn-success ">Ekle</button>
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
                                            Açıklama
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
                                $sql = "SELECT * FROM duyuru ORDER BY duyuru_id ASC";
                                $result = $db->query($sql);
                                while ($row = $result->fetch_array()) { ?>
                                <form method="post" action="duyurugoruntule.php">
                                <tbody>
                                    <tr>
                                        <td>
                                            <?php echo $row["duyuru_id"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["duyuru_resim"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["duyuru_baslik"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["duyuru_aciklama"]; ?>
                                        </td>
                                        <td>
                                            <input type="hidden" name="sil_id" value="<?php echo $row["duyuru_id"];  ?>">
                                            <input type="hidden" name="goruntulencek_resim" value="<?php echo $row["duyuru_resim"];  ?>">
                                            <input type="hidden" name="duyuruBaslik" value="<?php echo $row["duyuru_baslik"]; ?>"></input>
                                            <input type="hidden" name="duyuruAciklama" value="<?php echo $row["duyuru_aciklama"]; ?>"></input>
                                            <button name="see"  class="btn btn-primary">
                                                Görüntüle
                                            </button>
                                        </td>
                                    </form>
                                    <form method="post" action="duyuru_sil.php">
                                        <td>
                                            <input type='hidden' value='<?php echo $row["duyuru_id"]; ?>' name='silinecek_id'>
                                            <a>
                                                <button class="btn btn-danger" name="sil">Sil</button>
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


<?php require_once 'footer.php'; ?>