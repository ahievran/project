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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Oku</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">Mesajı Oku</h3>

                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool" title="Previous"><i class="fas fa-chevron-left"></i></a>
                                    <a href="#" class="btn btn-tool" title="Next"><i class="fas fa-chevron-right"></i></a>
                                </div>
                            </div>
                            <?php
                            if(isset($_POST["message_see"])){
                                $isim =$_POST["mesaj_isim"];
                                $konu = $_POST["mesaj_konu"];
                                $mesajTarihi = $_POST["mesaj_date"];
                                $mesajIcerik = $_POST["mesaj_icerik"];
                            ?>
                            <div class="card-body p-0">
                                <div class="mailbox-read-info">
                                    <h5>Mesajın Konusu : <?php echo $konu; ?></h5>
                                    <h6>Kimden: <?php echo $isim; ?>
                                        <span class="mailbox-read-time float-right">Gönderme Saati : <?php echo $mesajTarihi; ?></span>
                                    </h6>
                                </div>
                                <div class="mailbox-read-message">
                                    <p><?php echo $mesajIcerik; ?></p>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="card-footer">
                                <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Sil
                                </button>
                                <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Yazdır
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once 'footer.php'; ?>