<?php 
session_start();
$_SESSION["sayfa"] = "galeri";
include 'header.php'; ?>
    <main class="page gallery-page">
        <section class="clean-block clean-gallery">
        <section class="clean-block about-us">
        <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                <h2>Galeri</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
            <div class="container">
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM galeri ORDER BY galeri_id ASC";
                    $result = $db->query($sql);
                    while($row = $result->fetch_array()){ ?>
                        <div class="col-md-6 col-lg-4 item animate__animated animate__zoomIn" style="height: 281px;max-height: 281px;"><a class="lightbox" href="<?php echo $row["galeri_resim"]; ?>"><img class="img-thumbnail img-fluid image" src="<?php echo $row["galeri_resim"]; ?>" style="height: 281px;width: 416px;"></a></div>
                    <?php  } ?>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>