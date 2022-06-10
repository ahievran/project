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
                        <h1>Slider</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Slider</li>
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
                                <h3 class="card-title">Slider</h3>
                                <a href="slideradd.php">
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
                                            Resim
                                        </th>
                                        <th>
                                            Üst Metin
                                        </th>
                                        <th>
                                            Alt Metin
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM slider ORDER BY slider_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>

                                        <tbody>
                                        <tr>
                                            <td><?php echo $row["slider_id"]; ?></td>
                                            <td style="width: 30%"><img src="../admin/<?php echo $row["slider_url"] ?>" width="50%"></td>
                                            <td><?php echo $row["slider_ustmetin"] ?></td>
                                            <td><?php echo $row["slider_altmetin"] ?></td>
                                            <form method='post' action='slider.php'>
                                                <td>
                                                    <input type='hidden' name="slider_id"
                                                           value='<?php echo $row["slider_id"]; ?>'>
                                                    <input type='hidden' name="hedef_baslik"
                                                           value='<?php echo $row["slider_ustmetin"]; ?>'>
                                                    <input type='hidden' name="hedef_icerik"
                                                           value='<?php echo $row["slider_altmetin"]; ?>'>
                                                    <input type='hidden' name="hedef_icon"
                                                           value='<?php echo $row["slider_ustmetin"]; ?>'>
                                                </td>
                                            </form>
                                            <form method='post' action='slider_sil.php'>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["slider_id"]; ?>'
                                                           name='silinecek_id'>
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