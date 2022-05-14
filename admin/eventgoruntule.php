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
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active">Etkinlik</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                            <?php if (isset($_POST["see"])) {
                            $etkinlik_baslik = $_POST["etkinlik_baslik"];
                            $etkinlik_icerik = $_POST["etkinlik_icerik"];
                            $etkinlik_resim = $_POST["etkinlik_resim"];
                            $etkinlik_tarih = $_POST["etkinlik_tarih"];
                            ?>
                            <div class="col-12">
                                <img src="<?php echo $etkinlik_resim ?>" class="product-image" alt="Laboratuvar Resim">
                            </div>
                        </div>
                        <div class="col-1">
                        </div>
                        <div class="col-6">
                            <h3 class="my-3">Etkinlik Adı: <?php echo $etkinlik_baslik ?></h3>
                            <p>Etkinlik Açıklaması: <?php echo $etkinlik_icerik ?></p>
                            <p>Etkinlik Tarihi: <?php echo $etkinlik_tarih ?></p>
                        </div>
                        <?php } ?>
                    </div>
                </div>
        </section>
    </div>

<?php require_once 'footer.php'; ?>