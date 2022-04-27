<?php 
session_start();
$_SESSION["sayfa"] = "akademik";
include 'header.php'; ?>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container-fluid">
                <div class="block-heading animate__animated animate__zoomInRight" style="margin-bottom: 53px;">
                    <h2 class="text-info">Akademik Kadromuz</h2>
                </div>
                <div class="block-content">
                    <div class="clean-blog-post">
                        <?php
                        $sql = "SELECT * FROM akademik_personel ORDER BY personel_id ASC";
                        $result = $db->query($sql);
                        while($row = $result->fetch_array()){ ?>
                            <div class="row  animate__animated animate__fadeInLeft" style="margin-top:40px;box-shadow: 0px 0px 7px var(--bs-gray-400);">
                            <div class="col-md-auto col-lg-auto col-xl-auto"><img class="img-fluid" src="<?php echo $row["personel_img"]; ?>" style="width: 372px;"></div>
                            <div class="col">
                                <div class="row justify-content-end">
                                    <div class="col-xxl-12" style="padding-bottom: 15px;">
                                        <h1><?php echo $row["personel_isim_soyisim"]; ?><br></h1>
                                    </div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><strong>Fakülte:</strong><span style="margin-left: 5px;"><?php echo $row["personel_fakülte"]; ?></span></div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><strong>Ana Bilim Dalı:</strong><span style="margin-left: 5px;"><?php echo $row["personel_bölüm"]; ?> </span></div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><strong>Ofis:</strong><span style="margin-left: 5px;"><?php echo $row["personel_ofis"]; ?></span></div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><strong>Telefon:</strong><span style="margin-left: 5px;"><?php echo $row["personel_telefon"]; ?></span></div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><strong>E-posta:</strong><span style="margin-left: 5px;"><?php echo $row["personel_email"]; ?></span></div>
                                    <div class="col-xxl-12" style="padding-bottom: 7px;"><i class="fa fa-link fs-6"></i><a class="fs-5 text-dark" style="font-family:sans-serif;text-shadow:3px 3px 3px #9c9898;" href="<?php echo $row["personel_hakkında"]; ?>" target="_blank"><?php echo $row["personel_isim_soyisim"]; ?></a></div>
                                    <div class="col-lg-auto offset-md-11 offset-lg-7 offset-xl-10 offset-xxl-10 text-center"><button id="videobuton" class="btn" type="button" data-bs-target="#modal-1" data-bs-toggle="modal">Video Mesajı<i class="fa fa-play-circle" id="butonicon"></i></button></div>

                                </div>
                            </div>
                            </div><?php } ?>
                        <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h6 class="modal-title">Video Mesajı</h6><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div><video width="560" height="315" controls="" style="max-width: 100%;">
                                                <source type="video/mp4">
                                            </video></div>
                                    </div>
                                    <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Kapat</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>