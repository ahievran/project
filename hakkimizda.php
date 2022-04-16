<?php include 'header.php'; ?>

    <main class="page">
        <section class="clean-block about-us">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Hakkımızda</h2>
                </div>

                <div class="row">
                    <div class="col-xxl-6"><img src="assets/img/about-img.jpg" style="width: 103%;padding-bottom: 14px;padding-top: 14px;"></div>
                    <div class="col-xxl-6" style="padding-right: 24px;padding-left: 24px;">
                        <?php
                        $sql = "SELECT * FROM hakkimizda ORDER BY hakkinda_id ASC";
                        $result = $db->query($sql);
                        while ($row = $result->fetch_array()) { ?>
                        <ul class="list-unstyled">
                            <li style="position: relative"><i class="icon ion-android-checkmark-circle" style="font-size: 20px;color: var(--bs-teal);"></i> <?php echo $row["hakkinda_icerik"]; ?><br></li>
                        </ul>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>