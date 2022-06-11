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
                                    <div class="row col-xxl-12"><iframe class="col-xxl-12 mt-0" style="box-shadow:5px 5px 5px 5px grey;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6188.876546779659!2d34.1203697!3d39.1420122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f131464dc8c810c!2zTcO8aGVuZGlzbGlrIE1pbWFybMSxayBGYWvDvGx0ZXNp!5e0!3m2!1str!2str!4v1654990395066!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" width="inherit" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                                    <div class="col-xxl-12 mt-4"><i class="icon ion-ios-location" style="font-size: 21px;"></i><span>&nbsp;Ahi Evran Üniversitesi, Bağbaşı Yerleşkesi, Mühendislik-Mimarlık Fakültesi, Merkez/KIRŞEHİR<br></span></div>
                                    <div class="col-xxl-12"><i class="icon ion-android-mail" style="font-size: 21px;"></i><span>&nbsp;<a href="mailto:bilmuh@ahievran.edu.tr">bilmuh@ahievran.edu.tr</a><br></span></div>
                                    <div class="col-xxl-12"><i class="icon ion-ios-telephone" style="font-size: 21px;"></i><span>&nbsp;<a href="tel:+903862803800">0386 280 38 00</a><br></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    </main>
<?php include 'footer.php'; ?>