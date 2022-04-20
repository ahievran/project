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
                        <li class="breadcrumb-item active">Akademik Personel</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-body">
            <div class="row">
                <div class="col-12 w-100">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Akademisyen
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-8">
                                    <?php if (isset($_POST["see"])) {
                                        $personel_id = $_POST["personel_id"];
                                        $personel_ad = $_POST["personel_ad"];
                                        $personel_fakulte = $_POST["personel_fakulte"];
                                        $personel_bolum = $_POST["personel_bolum"];
                                        $personel_ofis = $_POST["personel_ofis"];
                                        $personel_telefon = $_POST["personel_telefon"];
                                        $personel_email = $_POST["personel_email"];
                                        $personel_hakkinda = $_POST["personel_hakkinda"];
                                        $personel_img = $_POST["personel_img"];
                                        ?>
                                        <h2 class="lead"><b><?php echo $personel_ad ?></b></h2>
                                        <ul class="ml-4 fa-ul text-muted">
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-building"></i></span>
                                                Fakülte: <?php echo $personel_fakulte ?>
                                            </li>
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-book"></i></span>
                                                Bölüm: <?php echo $personel_bolum ?>
                                            </li>
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-door-closed"></i></span>
                                                Ofis: <?php echo $personel_ofis ?>
                                            </li>
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-phone"></i></span>
                                                Telefon: <?php echo $personel_telefon ?>
                                            </li>
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-envelope"></i></span>
                                                E-Mail: <?php echo $personel_email ?>
                                            </li>
                                            <li class="large"><span class="fa-li"><i
                                                            class="fas fa-lg fa-info-circle"></i></span>
                                                Hakkında: <?php echo $personel_hakkinda ?>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </div>
                                <div class="col-4 text-right">
                                    <img src="../<?php echo $personel_img?>" alt="Personel-Foto" class="img-fluid" width="50%">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
require_once 'footer.php'; ?>
