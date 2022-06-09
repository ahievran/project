<?php
session_start();
$_SESSION["sayfa"] = "labs";
$_SESSION["title"] = "Laboratuvarlarımız";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Laboratuvarlarımız";
include 'header.php'; ?>
<style>
    .hoverImg {
        position: relative;
        display: inline-block;
        overflow: hidden;
    }

    .hoverImg * {
        -webkit-transition: all 0.35s;
        transition: all 0.35s;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .hoverImg img {
        max-width: 100%;
        vertical-align: top;
    }

    .hoverImg:hover img,
    .hoverImg.hover img {
        -webkit-transform: scale(1.3) rotate(5deg);
        transform: scale(1.3) rotate(5deg);
    }

</style>
    <main class="page testimonials">
        <section class="clean-block clean-testimonials dark">
            <section class="clean-block about-us">
                <div class="heading-page header-text">
                    <section class="page-heading">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-content">
                                        <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                        <h2>Laboratuvarlarımız</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $sql = "SELECT * FROM laboratuvar ORDER BY lab_id ASC";
                            $result = $db->query($sql);
                            while ($row = $result->fetch_array()) { ?>
                                <div class="col-lg-4 animate__animated animate__zoomIn">
                                    <div class="card clean-testimonial-item border-0 rounded-0">
                                        <div class="card-body">
                                            <div class="hoverImg"><img class="img-fluid rounded mx-auto d-block" src="<?php echo $row["lab_resim"];  ?>" style="width: 400px; height:300px;width: auto;display: block;margin: 0 auto;"></div>
                                            <h3 style="text-align: center;margin-top: 28px;margin-bottom: 0px;"><?php echo $row["lab_ad"]; ?></h3>
                                            <p style="text-align: center;margin-top: 15px;margin-bottom: 0px;"><?php echo $row["lab_aciklama"] ?> </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
            </section>
    </main>
<?php include 'footer.php'; ?>