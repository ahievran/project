<?php include 'header.php'; ?>
    <main class="page">
        <section class="clean-block features">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Hedeflerimiz</h2>
                    <div class="row">
                        <div class="col-md-5 col-lg-4"><img src="assets/img/product-features.png" style="width: 100%;">
                        </div>
                        <div class="col" style="padding-top: 27px;">
                            <div class="row" style="width:90%; margin-left: 20px;">
                                <?php
                                $sql = "SELECT * FROM hedeflerimiz ORDER BY hedef_id ASC";
                                $result = $db->query($sql);
                                while ($row = $result->fetch_array()) { ?>
                                    <div class="col-md-6 col-lg-6"><i class="icon ion-android-globe"
                                                                      style="font-size: 40px;"></i>
                                        <h4><?php echo $row["hedef_baslik"]; ?></h4>
                                        <p style="text-align: center;"><?php echo $row["hedef_icerik"]; ?><br></p>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>