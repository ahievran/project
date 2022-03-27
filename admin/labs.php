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
                    <h1>Laboratuvarlarımız</h1>
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
                            <h3 class="card-title">Laboratuvarlarımız</h3>
                            <a href="labadd.php">
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
                                            Laboratuvar Adı
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
                                $sql = "SELECT * FROM laboratuvar ORDER BY lab_id ASC";
                                $result = $db->query($sql);
                                while ($row = $result->fetch_array()) { ?>
                                <form method="post" action="lab-goruntule-sil.php">
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row["lab_id"]; ?></td>
                                            <td>
                                                <i class="icon ion-android-globe" style="font-size: 40px;"></i>
                                            </td>
                                            <td><?php echo $row["lab_ad"]; ?></td>
                                            <td>
                                                <input type="hidden" name="sil_id" value="<?php echo $row["lab_id"];  ?>">
                                                <input type="hidden" name="goruntulencek_resim" value="<?php echo $row["lab_resim"];  ?>">
                                                
                                                    <button name="see"  class="btn btn-primary">
                                                        Görüntüle
                                                    </button>
                                                
                                            </td>
                                            <td>
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