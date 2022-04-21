<?php include 'header.php'; ?>
    <main class="page blog-post-list">
        <section class="clean-block clean-blog-list dark">
            <div class="container-fluid">
                <div class="block-heading">
                    <h2 class="text-info">Etkinlikler</h2>
                </div>
            </div>
            <section class="article-list">
                <div class="container">
                    <div class="intro"></div>
                    <div class="row articles">
                        <?php
                        $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id ASC";
                        $result = $db->query($sql);
                        while ($row = $result->fetch_array()) { ?>
                            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/cerenAkman.jpeg" style="height: 315px;width: 415px;"></a>
                                <h3 class="name"><?php echo $row["etkinlik_baslik"]; ?><br></h3>
                                <p class="description"><?php echo $row["etkinlik_icerik"]; ?><br></p><button class="btn btn-primary" type="button" style="margin-top: 21px;color: var(--bs-gray-900);background: rgba(13,110,253,0);border-color: var(--bs-gray-500);">Devamını Oku</button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
        </section>
    </main>
<?php include 'footer.php'; ?>