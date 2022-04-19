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
                    <h1>Galeri</h1>
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
                            <h3 class="card-title">Galeri</h3>
                            <a href="galleryadd.php">
                                <button style="float:right" class="btn btn-success ">Görsel Ekle</button>
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <?php
                        $sql = "SELECT * FROM galeri ORDER BY galeri_id DESC";
                        $result = $db->query($sql);?>
                            <form method='post' action='galeri_resim_sil.php'>
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
                                                    Sil
                                                </th>
                                            </tr>
                                        </thead>
                                       <?php while ($row = $result->fetch_array()) { ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row["galeri_id"]; ?></td>
                                                <td>
                                                    <img src="../<?php echo $row["galeri_resim"]; ?>" width="20%">
                                                </td>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["galeri_id"]; ?>' name='silinecek_id'>
                                                    <a>
                                                        <button class="btn btn-danger" name='sil'>Sil</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <?php } ?>

                                    </table>
                                </div>
                            </form>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<?php
require_once 'footer.php'; ?>