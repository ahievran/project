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
                    <h1>Hakkımızda</h1>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hakkımızda</h3>
                            <a href="aboutadd.php">
                                <button style="float:right" class="btn btn-success ">Hakkımızda Ekle</button>
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
                                            Hakkında İçerik
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
                                    $sql = "SELECT * FROM hakkimizda ORDER BY hakkinda_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                        <form method='post' action='hakkimizda_sil.php'>
                                            <tr>
                                                <td><?php echo $row["hakkinda_id"]; ?></td>
                                                <td><?php echo $row["hakkinda_icerik"]; ?></td>
                                                <td>
                                                    <a>
                                                        <button type="button" class="btn btn-primary">
                                                            Görüntüle
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["hakkinda_id"]; ?>' name='silinecek_id'>
                                                    <a>
                                                        <button class="btn btn-danger" name="sil">Sil</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        </form>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>