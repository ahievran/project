<?php
session_start();
$_SESSION["sayfa"] = "index";
$_SESSION["title"] = "Anasayfa";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Anasayfa";
include 'baglanti.php';
include 'header.php'; ?>
<main class="page landing-page">
    <div class="owl-carousel owl-carousels owl-theme">
        <?php
            $sql = "SELECT * FROM slider ORDER BY slider_id ASC";
            $result = $db->query($sql);
            while ($row = $result->fetch_array()) { ?>
        <div class="owl-slide d-flex align-items-center cover"
            style="background-image: url(admin/<?php echo $row["slider_url"] ?>);">
            <div class="container">
                <div class="row justify-content-center justify-content-md-start">
                    <div class="col-10 col-md-6 static">
                        <div class="owl-slide-text">
                            <h2 class="owl-slide-animated owl-slide-title" style='color:white;text-shadow:5px 5px 5px black;font-size:40px;'><?php echo $row["slider_ustmetin"] ?></h2>
                            <div class="owl-slide-animated owl-slide-subtitle mb-3" style='color:white;text-shadow:5px 5px 5px black;font-size:28px;'>
                                <?php echo $row["slider_altmetin"] ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="main-banner header-text" style='margin-top:50px;' id='duyuru'>
        <section class="call-to-action">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <img style='width:auto;height:150px;' src='assets/img/pnglogo.png'>
                                </div>
                                <div class="col-md-4">
                                    <span>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</span>
                                    <h4>Haberler - Etkinlikler - Duyurular</h4>
                                </div>
                                <div class="col-md-4">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid">
            <div class="owl-banner owl-carousel" style='padding-top:50px;'>
                <?php
                    $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id DESC";
                    $result = $db->query($sql);
                    while ($row = $result->fetch_array()) { ?>
                <div class="item" style='padding-left:5%;padding-right:5%;'>
                    <img style="object-fit: contain" src="admin/<?php echo $row["etkinlik_resim"]; ?>"
                        alt="Etkinlik resmi">
                    <div class="item-content" style='text-align:left;'>
                        <div class="main-content">
                            <div class="meta-category">
                                <span><?php echo $row["etkinlik_baslik"]; ?></span>
                            </div>
                            <ul class="post-info">
                                <li><a href="#">Mühendislik Mimarlık Fakültesi</a></li>
                                <li><a href="#"><?php echo $row["etkinlik_tarih"]; ?></a></li>
                                <li><a href="#">Bilgisayar Mühendisliği</a></li>
                            </ul>
                        </div>
                        <form action="event-detail.php" method="get">
                            <div class="post-options mt-3">
                                <div class='row'>
                                    <div class="col-lg-12">
                                        <div class="main-button" id='devami'>
                                            <button class='col-md-12 btn' style='background-color: rgb(255, 220, 175);' name="see">
                                                Devamını Oku
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="etkinlik_id" value='<?php echo $row["etkinlik_id"] ?>'>
                            <input type="hidden" name="etkinlik_baslik" value='<?php echo $row["etkinlik_baslik"] ?>'>
                        </form>
                    </div>

                    <div class='row'>
                        <div style='background-color:inherit; height:200px;margin-top:0px;padding-top:0px;'
                            class='col-md-12'>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <section class="clean-block clean-info" id="hakkinda">
        <div class="container">
            <div class="row">
                <div class="block-heading col-sm-6">
                    <h2 class="text-info">Kırşehir Ahi Evran Üniversitesi Bilgisayar Mühendisliği Hakkında</h2>
                    <p>2018- 2019 eğitim öğretim yılı güz döneminde eğitim hayatına başlayan bölümümüzün hedefi;
                        “Öğrenme ve yeniliğe açık, proje odaklı, takım çalışmasına yatkın, iyi iletişim becerisine
                        sahip, güncel olarak en çok aranan teknolojik bilgiler ile donatılmış, problemlere farklı
                        çözümler üretebilen, ülkemizin ihtiyaçları doğrultusunda; endüstri, sanayi, akademi ve kamu
                        alanlarında hizmet verebilecek dürüst ve erdemli bilgisayar mühendislerini
                        yetiştirmektir."</p>
                </div>
                <div class="block-heading col-sm-6">
                    <h2 class="text-info"></h2>
                    <img src="assets/img/bm-1.jpg" style="box-shadow:10px 10px 10px grey;width:100%;height:100%;">
                </div>
            </div>

            <div class="row align-items-center">

                <div class="col-md-12">
                    <h3 style="font-size:30px;color:#292929;font-weight:400;">Tanıtım</h3>
                    <div class="getting-started-info">
                        <p style="font-size:15px;color:#292929;font-weight:200;">- 2018-2019 eğitim öğretim yılı güz
                            döneminde, Mühendislik Mimarlık Fakültesi bünyesinde öğrenci alımına başlayan bölümümüz;
                            1
                            Doçent, 6 doktor öğretim üyesi ve 5 araştırma görevlisi ile eğitim öğretime devam
                            etmektedir.<br><br>

                            - Bölümümüze öğrenci kabulü; Yükseköğretim Kurumu (YÖK) tarafından belirlenen
                            yönetmelikler
                            çerçevesinde, merkezi sınav sistemi ile yapılmaktadır. Öğrenciler, öğrenim görmek
                            istedikleri program tercihlerini bildirdikten sonra bu sınavdan aldıkları puana göre
                            ÖSYM
                            tarafından ilgili programlara yerleştirilmektedir.<br><br>

                            - Bölümümüz 2 öğrenci okul birincisi kontenjanı olmak üzere toplam 62 öğrenci
                            kontenjanına
                            sahip olmakla birlikte açıldığı eğitim öğretim yılından bu yana %100 ilk yerleştirme
                            oranına
                            sahiptir. İlaveten bölümümüzde 2021-2022 eğitim öğretim yılı itibarıyla 319 öğrencimiz
                            öğrenim görmektedir.<br><br>

                            - Bölümümüzü başarı ile tamamlayan öğrenciler Bilgisayar Mühendisliği alanında lisans
                            derecesi almaya hak kazanmaktadırlar.<br><br>

                            - Öğrencilerimizin mezun olabilmeleri için asgari 240 AKTS’lik (4 yıl - 159 ulusal
                            kredi)
                            müfredatı, en az 2.00 ağırlıklı genel not ortalaması ile azami 7 yılda, 60 işgünü
                            zorunlu
                            staj ile birlikte tamamlamış olmaları gerekmektedir.<br><br>

                            - Öğrencilerimiz eğitim süreleri boyunca alacakları zorunlu derslerin yanında, 47 farklı
                            seçmeli ders içerisinden seçecekleri dersler sayesinde yazılım geliştirme, elektronik,
                            yapay
                            zeka, siber güvenlik gibi birçok alanda uzmanlaşabileceklerdir.<br><br>

                            - Programımızdan mezun olacak bilgisayar mühendisleri, gerek kamu kurum ve
                            kuruluşlarında,
                            gerekse hem yurt içi hemde yurt dışında; mobil, web veya masaüstü uygulama geliştirme,
                            sistem yöneticiliği, bilgi güvenliği gibi alanlarda görev alabilecek, ayrıca kendi
                            bilişim
                            firmalarını kurarak ülke ekonomisinin gelişmesinde aktif rol
                            oynayabileceklerdir.<br><br>

                            - Bölümümüzden mezun olan öğrenciler, lisansüstü programlarda öğrenim görmek üzere
                            başvuruda
                            bulunabilirler.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block features">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">Topluluklar</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 feature-box"><i class="icon-star icon"></i>
                    <h4>Ağ ve Siber Güvenlik Topluluğu</h4>
                    </br>
                    <p>“Nesnelerin İnterneti dünyasında her geçen gün kurum ve insanlara yönelik
                        gerçekleştirilen siber saldırılarda ciddi oranda artış meydana gelmiştir. Bu sebeple siber
                        güvenlik
                        alanında uzmanlaşmış kişilere duyulan ihtiyaç ciddi oranda artmıştır. Ağ ve Siber Güvenlik
                        Topluluğunun en temel amacı ülkemize bu alanda hizmet verecek nitelikli ağ ve siber güvenlik
                        uzmanlarının yetiştirilmesidir. ”</p>
                </div>
                <div class="col-md-6 feature-box">
                    <img src="assets/img/siber-guvenlik.jpg"
                        style="width:100%;height:100%; box-shadow:10px 10px 10px grey;">
                </div>
                <div class="col-md-6 feature-box"><i class="icon-star icon"></i>
                    <h4>Yazılım ve Robotik Topluluğu</h4>
                    </br>
                    <p>Çağın gözdesi olan yazılım ve robotik alanlarında faaliyet göstermek amacıyla Haziran
                        2019’da
                        üniversitemizden kuruluş onayını almış ve çalışmalarına başlamıştır. Kulübümüz ilgili
                        alanlarda
                        sunum, konferans, teknik gezi gibi faaliyetlerle öğrencilerin bilgi edinmesini ve ayrıca
                        takım
                        çalışmaları ile öğrenciler arasında işbirliğini artırmayı amaçlamaktadır. </p>
                </div>
                <div class="col-md-6 feature-box">
                    <img src="assets/img/yazilim-robotik.jpg"
                        style="width:100%;height:100%;box-shadow:10px 10px 10px grey;">
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper container">
        <div class="container-fostrap">
            <div class="row">
                <img class="col-md-2" src="assets/img/pnglogo.png" id="haber-logo" class="fostrap-logo" />
                <h1 class="col-md-8 text-info" style="margin-top:4%;">
                    Erasmus & Farabi & Mevlana Değişim Programları
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <?php
                            $sql = "SELECT * FROM programlar order by program_id";
                            $result = $db->query($sql);
                            while ($row = $result->fetch_array()) { ?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="<?php echo $row['program_link'] ?>">
                                    <img src="admin/<?php echo $row['program_img'] ?>">
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="<?php echo $row['program_link'] ?>">
                                            <?php echo $row['program_ad'] ?>
                                        </a>
                                    </h4>
                                    <p class="">
                                        <?php echo $row['program_aciklama'] ?>
                                    </p>
                                </div>
                                <div class="card-read-more btn-warning">
                                    <a href="https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus"
                                        class="btn btn-link btn-block text-light">
                                        Detaylı Bilgi
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<?php
include 'footer.php'; ?>