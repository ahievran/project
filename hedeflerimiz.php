<?php
session_start();
$_SESSION["sayfa"] = "hedeflerimiz";
$_SESSION["title"] = "Hedeflerimiz";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Hedeflerimiz";
include 'header.php'; ?>
    <main class="page">
        <section class="clean-block features">
            <section class="clean-block about-us">
                <div class="heading-page header-text">
                    <section class="page-heading">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-content">
                                        <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                        <h2>Hedeflerimiz</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container">
                        <div class="block-heading">
                            <div class="row">
                                <div class="col-md-5 col-lg-4"><img src="assets/img/product-features.png" style="width: 100%;">
                                </div>
                                <div class="col" style="padding-top: 27px;">
                                    <div class="row" style="width:90%; margin-left: 20px;">
                                        <?php
                                        $sql = "SELECT * FROM hedeflerimiz ORDER BY hedef_id ASC";
                                        $result = $db->query($sql);
                                        while ($row = $result->fetch_array()) { ?>
                                            <div class="col-md-6 col-lg-6"><i class="icon ion-android-globe" style="font-size: 40px;"></i>
                                                <h4><?php echo $row["hedef_baslik"]; ?>
                                                    <br>
                                                    <br>
                                                    <p style="text-align: center;"><?php echo $row["hedef_icerik"]; ?><br></p>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" id='caro'>
                        <div class="carousel col-md-12">
                            <div class="carousel__face"><span>Kırşehir</span></div>
                            <div class="carousel__face"><span>Ahi Evran</span></div>
                            <div class="carousel__face"><span>Üniversitesi</span></div>
                            <div class="carousel__face"><span>💻💻💻</span></div>
                            <div class="carousel__face"><span>Mühendislik</span></div>
                            <div class="carousel__face"><span>Mimarlık</span></div>
                            <div class="carousel__face"><span>Fakültesi</span></div>
                            <div class="carousel__face"><span>Bilgisayar Mühendisliği</span></div>
                            <div class="carousel__face"><span>Bölümü</span></div>
                        </div>
                    </div>
            </section>
    </main>
<?php include 'footer.php'; ?>