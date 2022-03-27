<?php include 'header.php'; ?>
    <main class="page testimonials">
        <section class="clean-block clean-testimonials dark">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Laboratuvarlarımız</h2>
                </div>
                <div class="row">
                <?php
                    $sql = "SELECT * FROM laboratuvar ORDER BY lab_id ASC";
                    $result = $db->query($sql);
                    while($row = $result->fetch_array()){ ?>
                    <div class="col-lg-4">
                        <div class="card clean-testimonial-item border-0 rounded-0">
                            <div class="card-body">
                                <div><img class="img-fluid" src="<?php echo $row["lab_resim"];  ?>" style="width: 400px; height:350px;"></div>
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