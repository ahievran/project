<?php
session_start();
$_SESSION["sayfa"] = "etkinlikler";
$_SESSION["title"] = "Etkinlikler";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Etkinlikler";
include 'header.php'; ?>

<?php if (isset($_POST["see"])) {
    $etkinlik_id = $_POST["etkinlik_id"];
    $etkinlik_baslik = $_POST["etkinlik_baslik"];
    $etkinlik_icerik = $_POST["etkinlik_icerik"];
    $etkinlik_text = $_POST["etkinlik_text"];
    $etkinlik_resim = $_POST["etkinlik_resim"];
    $etkinlik_link = $_POST["etkinlik_link"];
    $etkinlik_tarih = $_POST["etkinlik_tarih"];
    ?>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list">
            <section class="clean-block about-us">
                <div class="heading-page header-text">
                    <section class="page-heading">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-content">
                                        <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                        <h2><?php echo $etkinlik_baslik?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container-fluid">
                    </div>
                    <section class="blog-posts">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-10">
                                    <div class="all-blog-posts">
                                        <div class="row">
                                            <div class="col-lg-12 animate__animated animate__zoomIn">
                                                <div class="blog-post">
                                                    <div class="event-thumb">
                                                        <a href="<?php echo $etkinlik_link ?>">
                                                            <img src="admin/<?php echo $etkinlik_resim ?>"
                                                                 alt="Etkinlik Resim">
                                                        </a>
                                                    </div>
                                                    <div class="down-content">
                                                        <span>Kırşehir Ahi Evran Üniversitesi</span>
                                                        <a href="#">
                                                            <h4><?php echo $etkinlik_baslik ?></h4>
                                                        </a>
                                                        <ul class="post-info">
                                                            <li>MMF - Bilgisayar Mühendisliği</li>
                                                            <li><?php echo $etkinlik_tarih ?></li>
                                                        </ul>
                                                        <p><?php echo $etkinlik_icerik ?></p>
                                                        <div class="event-text">
                                                            <?php echo $etkinlik_text ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
        </section>
    </main>
<?php } ?>

<?php include 'footer.php'; ?>