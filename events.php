<?php
session_start();
$_SESSION["sayfa"] = "etkinlikler";
include 'header.php'; ?>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Etkinlikler</h2>
                </div>
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
                        while($row = $result->fetch_array()){ ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="assets/img/bm-1.jpg" alt="">
                    </div>
                    <div class="down-content">
                      <span>Kırşehir Ahi Evran Üniversitesi</span>
                      <a href="#"><h4><?php echo $row["etkinlik_baslik"]; ?></h4></a>
                      <ul class="post-info">
                        <li><a href="#"></a>MMF - Bilgisayar Mühendisliği </li>
                        <li><a href="#"><?php echo $row["etkinlik_tarih"]; ?></a></li>
                      </ul>
                      <p><?php echo $row["etkinlik_icerik"]; ?></p>
                      <div class="post-options">
                       <div class='row'>
                       <div class="col-lg-12">
                  <div class="main-button" id='devami'>
                    <a class='text-dark' href="#">Devamını Oku</a>
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