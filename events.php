<?php
session_start();
$_SESSION["sayfa"] = "etkinlikler";
$_SESSION["title"] = "Etkinlikler";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Etkinlikler";
include 'header.php'; ?>
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
                                        <h2>Etkinlikler</h2>
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
                                            <?php
                                            $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id DESC";
                                            $result = $db->query($sql);
                                            while ($row = $result->fetch_array()) { ?>
                                                <div class="col-lg-6 animate__animated animate__zoomIn">
                                                    <div class="blog-post">
                                                        <div class="blog-thumb">
                                                            <img src="admin/<?php echo $row["etkinlik_resim"]; ?>" alt="Etkinlik resmi">
                                                        </div>
                                                        <div class="down-content">
                                                            <span>Kırşehir Ahi Evran Üniversitesi</span>
                                                            <a href="<?php echo $row["etkinlik_link"]?>">
                                                                <h4><?php echo $row["etkinlik_baslik"]; ?></h4>
                                                            </a>
                                                            <ul class="post-info">
                                                                <li>MMF - Bilgisayar Mühendisliği </li>
                                                                <li><?php echo $row["etkinlik_tarih"]; ?></li>
                                                            </ul>
                                                            <p><?php echo $row["etkinlik_icerik"]; ?></p>
                                                            <div class="post-options">
                                                                <div class='row'>
                                                                    <div class="col-lg-12">
                                                                        <div class="main-button" id='devami'>
                                                                            <a class='text-dark' href="">Devamını Oku</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> <?php } ?>

                                            <div class="col-lg-1"></div>
                    </section>
    </main>
<?php include 'footer.php'; ?>