<?php
session_start();
$_SESSION["sayfa"] = "iletisim";
include 'header.php'; ?>


    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">İletişim</h2>
                    <p>Bölümümüz hakkındaki sorularınızı sağ tarafta verilen telefon numarası, e-posta adresleri ve iletişim formu üzerinden iletebilirsiniz. Ayrıca evrak gönderimi için açık adresimiz de verilmiştir.<br></p>
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
                                <div class="row col-xxl-12"><iframe class="col-xxl-12 mt-0" style="box-shadow:5px 5px 5px 5px grey;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8380.935294167457!2d34.12117306916829!3d39.14524954038606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d572d2fa7b2291%3A0x7f5b14385700cd72!2sK%C4%B1r%C5%9Fehir%20Ahi%20Evran%20%C3%9Cniversitesi!5e0!3m2!1str!2sus!4v1646663469798!5m2!1str!2sus" width="inherit" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                                <div class="col-xxl-12 mt-4"><i class="icon ion-ios-location" style="font-size: 21px;"></i><span>&nbsp;Ahi Evran Üniversitesi, Bağbaşı Yerleşkesi, Mühendislik-Mimarlık Fakültesi, Merkez/KIRŞEHİR<br></span></div>
                                <div class="col-xxl-12"><i class="icon ion-android-mail" style="font-size: 21px;"></i><span>&nbsp;bilmuh@ahievran.edu.tr<br></span></div>
                                <div class="col-xxl-12"><i class="icon ion-ios-telephone" style="font-size: 21px;"></i><span>&nbsp;0386 280 38 00<br></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php if(($_SESSION["isim"] != "") && ($_SESSION["konu"] != "") && ($_SESSION["mesajbilgi"] != "")){ ?>
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-2"></div>
                        <div class="alert alert-success col-md-8 text-dark" style="text-align:center;box-shadow:5px 5px 5px grey;" role="alert"><?php echo "Merhaba <strong>" .$_SESSION["isim"]. " , ". $_SESSION["konu"]. "</strong> konulu <strong>".$_SESSION["mesajbilgi"]." </strong>"; ?></div>
                    </div><div class="col-md-2"> </div></div></div> <?php } ?>
        </section>
    </main>
<?php include 'footer.php'; ?>