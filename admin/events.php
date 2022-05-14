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
                        <h1>Etkinlikler</h1>
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
                                <h3 class="card-title">Etkinlik</h3>
                                <a href="eventsadd.php">
                                    <button style="float:right" class="btn btn-success ">Etkinlik Ekle</button>
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
                                            Başlık
                                        </th>

                                        <th>
                                            İçerik
                                        </th>
                                        <th>
                                            Tarih
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
                                    $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id ASC";
                                    $result = $db->query($sql);
                                    while ($row = $result->fetch_array()) { ?>
                                        <tbody>
                                        <tr>
                                            <td><?php echo $row["etkinlik_id"] ?>.</td>
                                            <td><img src="<?php echo $row["etkinlik_resim"] ?>" style="max-width: 150px;" alt=""></td>
                                            <td><?php echo $row["etkinlik_baslik"]; ?></td>
                                            </td>
                                            <td>
                                                <?php echo $row["etkinlik_icerik"]; ?>
                                            </td>
                                            <td> <?php echo $row["etkinlik_tarih"]; ?>
                                            </td>
                                            <form method="post" action="eventgoruntule.php">
                                                <td>
                                                    <input type='hidden' name="etkinlik_id" value='<?php echo $row["etkinlik_id"]; ?>'>
                                                    <input type='hidden' name="etkinlik_resim" value='<?php echo $row["etkinlik_resim"]; ?>'>
                                                    <input type="hidden" name="etkinlik_baslik" value="<?php echo $row["etkinlik_baslik"]; ?>">
                                                    <input type="hidden" name="etkinlik_icerik" value="<?php echo $row["etkinlik_icerik"]; ?>">
                                                    <input type="hidden" name="etkinlik_tarih" value="<?php echo $row["etkinlik_tarih"]; ?>">
                                                    <button class="btn btn-primary" name="see">
                                                        Görüntüle
                                                    </button>
                                                </td>
                                            </form>
                                            <form method='post' action='events_sil.php'>
                                                <td>
                                                    <input type='hidden' value='<?php echo $row["etkinlik_id"]; ?>' name='silinecek_id'>
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