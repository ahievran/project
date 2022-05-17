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
                                        <div class="col-lg-12 animate__animated animate__zoomIn">
                                            <div class="blog-post">
                                                <div class="event-thumb">
                                                    <img src="admin/uploads/events/cerenAkman.jpeg">
                                                </div>
                                                <div class="down-content">
                                                    <span>Kırşehir Ahi Evran Üniversitesi</span>
                                                    <a href="#">
                                                        <h4>Etkinlik Başlık</h4>
                                                    </a>
                                                    <ul class="post-info">
                                                        <li>MMF - Bilgisayar Mühendisliği </li>
                                                        <li>Etkinlik Tarihi</li>
                                                    </ul>
                                                    <p>Etkinlik İçerik</p>
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
<?php include 'footer.php'; ?>