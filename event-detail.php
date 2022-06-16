<?php
session_start();
$_SESSION["sayfa"] = "etkinlikler";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Etkinlikler";
include 'header.php'; ?>

<?php if (isset($_GET["see"])) {
    $_SESSION["title"] = $_GET["etkinlik_baslik"];
    $etkinlik_id = $_GET["etkinlik_id"];
    $etkinlik_baslik = $_GET["etkinlik_baslik"];
    $sql = "SELECT * FROM etkinlikler WHERE etkinlik_id=$etkinlik_id";
    $result = $db->query($sql);
    while ($row = $result->fetch_array()) { 
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
                                        <h2><?php echo $row["etkinlik_baslik"]; ?></h2>
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
                                                        
                                                            <img src="admin/<?php echo $row["etkinlik_resim"]; ?>"
                                                                 alt="Etkinlik Resim">
                                                    
                                                    </div>
                                                    <div class="down-content">
                                                        <span>Kırşehir Ahi Evran Üniversitesi</span>
                                                        <a href="#">
                                                            <h4><?php echo $row["etkinlik_baslik"]; ?></h4>
                                                        </a>
                                                        <ul class="post-info">
                                                            <li>MMF - Bilgisayar Mühendisliği</li>
                                                            <li><?php echo $row["etkinlik_tarih"]; ?></li>
                                                        </ul>
                                                        <p><?php echo $row["etkinlik_icerik"]; ?></p>
                                                        <div class="event-text">
                                                            <?php echo $row["etkinlik_text"]; ?>
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
<?php } } else{ ?>
    
    <div class="alert alert-danger col-md-7" style='margin:20%;'>
  <strong>Uyarı !</strong> Aradığınız sayfa bulunamadı.. Site geliştiricileri ile iletişime geçin veya <a class='text-success' href='index.php'> Anasayfaya dönmek için tıklayınız.</a>
</div>
    
<?php } ?>

<?php include 'footer.php'; ?>