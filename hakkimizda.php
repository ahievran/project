<?php
session_start();
$_SESSION["sayfa"] = "hakkimizda";
$_SESSION["title"] = "Hakkımızda";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Hakkımızda";
include 'header.php'; ?>

    <main class="page">
        <section class="clean-block about-us">
            <div class="heading-page header-text">
                <section class="page-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-content">
                                    <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                    <h2>Hakkımızda</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6"><img src="assets/img/about-img.jpg"
                                                style="width: 103%;padding-bottom: 14px;padding-top: 14px;"></div>
                    <div class="col-xxl-6" style="padding-right: 24px;padding-left: 24px;">
                        <?php
                        $sql = "SELECT * FROM hakkimizda ORDER BY hakkinda_id ASC";
                        $result = $db->query($sql);
                        while ($row = $result->fetch_array()) { ?>
                            <ul class="list-unstyled">
                                <li style="position: relative"><i class="icon ion-android-checkmark-circle"
                                                                  style="font-size: 20px;color: var(--bs-teal);"></i> <?php echo $row["hakkinda_icerik"]; ?>
                                    <br></li>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section class="wrapper container">
            <div class="container-fostrap">
                <div class="row">
                    <img class="col-md-2" src="assets/img/pnglogo.png" id="haber-logo" class="fostrap-logo"/>
                    <h1 class="col-md-8 text-info" style="margin-top:4%;">
                        Erasmus & Farabi & Mevlana Değişim Programları
                    </h1>
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM programlar order by program_id";
                            $result = $db->query($sql);
                            while ($row = $result->fetch_array()) { ?>
                                <div class="col-xs-12 col-sm-4">
                                    <div class="card">
                                        <a class="img-card" href="<?php echo $row['program_link'] ?>">
                                            <img src="admin/<?php echo $row['program_img'] ?>">
                                        </a>
                                        <div class="card-content">
                                            <h4 class="card-title">
                                                <a href="<?php echo $row['program_link'] ?>">
                                                    <?php echo $row['program_ad'] ?>
                                                </a>
                                            </h4>
                                            <p class="">
                                                <?php echo $row['program_aciklama'] ?>
                                            </p>
                                        </div>
                                        <div class="card-read-more btn-warning">
                                            <a href="https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus" class="btn btn-link btn-block text-light">
                                                Detaylı Bilgi
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>