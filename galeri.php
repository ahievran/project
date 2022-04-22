<?php include 'header.php'; ?>
    <main class="page gallery-page">
        <section class="clean-block clean-gallery dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Galeri</h2>
                </div>
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM galeri ORDER BY galeri_id ASC";
                    $result = $db->query($sql);
                    while($row = $result->fetch_array()){ ?>
                        <div class="col-md-6 col-lg-4 item" style="height: 281px;max-height: 281px;"><a class="lightbox" href="<?php echo $row["galeri_resim"]; ?>"><img class="img-thumbnail img-fluid image" src="<?php echo $row["galeri_resim"]; ?>" style="height: 281px;width: 416px;"></a></div>
                    <?php  } ?>
                </div>
            </div>
        </section>
    </main>
<?php include 'footer.php'; ?>