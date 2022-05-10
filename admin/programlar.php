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
                        <h1>Programlar</h1>
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
                                <h3 class="card-title">Programlar</h3>
                                <a href="programadd.php">
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
                                        Program Adı
                                        </th>
                                        <th >
                                            Açıklama
                                        </th>
                                        <th>
                                            Link
                                        </th>
                                        <th>
                                            Sil
                                        </th>
                                    </tr>
                                    </thead>
                                    <?php
                                    $sql = "SELECT * FROM programlar ORDER BY program_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                        <form method="post" action="labgoruntule.php">
                                            <tbody>
                                            <tr>
                                                <td><?php echo $row["program_id"]; ?></td>
                                                <td style="width:250px">
                                                    <img src="<?php echo $row["program_img"] ?>" style="width: 150px;">
                                                </td>
                                                <td><?php echo $row["program_ad"]; ?></td>
                                                <td>
                                                   <?php echo $row["program_aciklama"]?> 
                                                </td>
                                                <td>
                                                    <?php echo $row["program_link"];?>
                                                </td>
                                        </form>
                                        <form method="post" action="programsil.php">
                                            <td>
                                                <input type='hidden' value='<?php echo $row["program_id"]; ?>' name='silinecek_id'>
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
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>