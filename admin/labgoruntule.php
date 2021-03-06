<?php
require_once '../admin/header.php';
require_once 'sidebar.php';
include '../baglanti.php';
?>
<?php if (isset($_POST["see"])) {
    $resimUrl = $_POST["goruntulencek_resim"];
    $labAdi = $_POST["labAdi"];
    $labAciklama = $_POST["labAciklama"];
    ?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo $labAdi ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $labAdi ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="card card-solid">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="col-12">
                                <img src="<?php echo $resimUrl; ?>" class="product-image" alt="Laboratuvar Resim">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3 class="my-3"><?php echo $labAdi ?></h3>
                            <p><?php echo $labAciklama ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php } else if (isset($_POST["sil"])) {
    $silinecek_id = $_POST["sil_id"];
    $sql = "DELETE FROM laboratuvar WHERE lab_id=$silinecek_id";
    if ($db->query($sql) === TRUE) {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Dosya başarı ile silinmiştir")';
        echo '</script>';
    } else {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Bir hata oluştu")';
        echo '</script>';
    }
} ?>
<?php require_once 'footer.php'; ?>