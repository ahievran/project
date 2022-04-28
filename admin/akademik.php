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
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Akademik Personel</h3>
                            <a href="personeladd.php">
                                <button style="float:right" class="btn btn-success ">Personel Ekle</button>
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
                                while ($row = $result->fetch_array()) { ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo $row["personel_id"] ?>.
                                            </td>
                                            <td>
                                                <img src="" alt="">
                                            </td>
                                            <td>
                                                <?php echo $row["personel_isim_soyisim"]; ?></td>
                                            </td>
                                            <td>
                                                <?php echo $row["personel_email"]; ?>
                                            </td>
                                            <form method="post" action="personelgoruntule.php">
                                                <td>
                                                    <input type='hidden' name="personel_id" value='<?php echo $row["personel_id"]; ?>'>
                                                    <input type='hidden' name="personel_ad" value='<?php echo $row["personel_isim_soyisim"]; ?>'>
                                                    <input type="hidden" name="personel_fakulte" value="<?php echo $row["personel_fakülte"]; ?>">
                                                    <input type="hidden" name="personel_bolum" value="<?php echo $row["personel_bölüm"]; ?>">
                                                    <input type="hidden" name="personel_ofis" value="<?php echo $row["personel_ofis"]; ?>">
                                                    <input type="hidden" name="personel_telefon" value="<?php echo $row["personel_telefon"]; ?>">
                                                    <input type="hidden" name="personel_email" value="<?php echo $row["personel_email"]; ?>">
                                                    <input type="hidden" name="personel_hakkinda" value="<?php echo $row["personel_hakkında"]; ?>">
                                                    <input type="hidden" name="personel_img" value="<?php echo $row["personel_img"]; ?>">
                                                    <button class="btn btn-primary" name="see">
                                                        Görüntüle
                                                    </button>
                                                </td>
                                            </form>
                                            <form method='post' action='akademik_sil.php'>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["personel_id"]; ?>' name='silinecek_id'>
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
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>