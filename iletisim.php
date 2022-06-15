<?php
session_start();
$_SESSION["sayfa"] = "iletisim";
$_SESSION["title"] ="İletişim Formu";
$_SESSION["description"] ="Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği İletişim Formu";
include 'header.php'; ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form">
            <section class="clean-block about-us">
                <div class="heading-page header-text">
                    <section class="page-heading mb-0">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-content">
                                        <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                        <h2>İletişim</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="container">
                        <div class="block-heading">
                            <p>Bölümümüz hakkındaki sorularınızı sağ tarafta verilen telefon numarası, e-posta adresleri ve iletişim formu üzerinden iletebilirsiniz. Ayrıca evrak gönderimi için açık adresimiz de verilmiştir.<br></p>
                            <?php if(!empty(($_SESSION["isim"])) && ($_SESSION["konu"] != "") && ($_SESSION["mesajbilgi"] != "")){ ?>
                            <br><div class="container animate__animated animate__zoomInDown">
                                <div class="row mt-5">
                                    <div class="col-md-2"></div>
                                    <div class="alert alert-success col-md-8 text-dark" style="text-align:center;box-shadow:5px 5px 5px grey;" role="alert"><?php echo "Merhaba <strong>" .$_SESSION["isim"]. " , ". $_SESSION["konu"]. "</strong> konulu <strong>".$_SESSION["mesajbilgi"]." </strong>"; ?></div>
                                </div><div class="col-md-2"> </div></div></div> <?php } ?>
                        <div class="row" style="padding-top: 38px;" >
                            <div class="col-sm-6 mb-4">
                                <form class="text-start bg-light" style="max-width: 550px;box-shadow:8px 8px 8px grey;"  action="iletisimform.php" method="POST">
                                    <div class="mb-3"><label class="form-label" for="name">İsim</label><input required class="form-control" type="text" id="name"  name="name"></div>
                                    <div class="mb-3"><label class="form-label" for="subject">Konu</label><input required class="form-control" type="text" id="subject"  name="subject"></div>
                                    <div class="mb-3"><label class="form-label" for="email">E-Mail</label><input required class="form-control" type="email" id="email" name="email"></div>
                                    <div class="mb-3"><label class="form-label" for="message">Mesaj</label><textarea required class="form-control" type="text" id="message"  name="message"></textarea></div>
                                    <div class="mb-3"><button class="btn btn-success" value="send" name="send"  type="submit">Gönder</button></div>
                                </form>
                            </div>
                            <div class="col-sm-6 mt-2">
                                <div class="row">
                                <?php
                            $sql = "SELECT * FROM iletisim ORDER BY iletisim_id=1";
                            $result = $db->query($sql);
                            while ($row = $result->fetch_array()) { ?>
                                    <div class="row col-xxl-12"><iframe class="col-xxl-12 mt-0" style="box-shadow:5px 5px 5px 5px grey;" src="<?php echo $row["maps_url"] ?>" width="inherit" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                                    <div class="col-xxl-12 mt-4"><i class="icon ion-ios-location" style="font-size: 21px;"></i><span>&nbsp;<?php echo $row["iletisim_adres"] ?><br></span></div>
                                    <div class="col-xxl-12"><i class="icon ion-android-mail" style="font-size: 21px;"></i><span>&nbsp;<a href="<?php echo $row["iletisim_email"] ?>"><?php echo $row["iletisim_email"] ?></a><br></span></div>
                                    <div class="col-xxl-12"><i class="icon ion-ios-telephone" style="font-size: 21px;"></i><span>&nbsp;<a href="t<?php echo $row["iletisim_telefon"] ?>"><?php echo $row["iletisim_telefon"] ?></a><br></span></div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </section>
    </main>
<?php include 'footer.php'; ?>
