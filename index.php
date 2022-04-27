<?php
session_start();
$_SESSION["sayfa"] = "index";
include 'header.php'; ?>
<main class="page landing-page">
    <section class="clean-block clean-hero"
             style="background-image:url(&quot;assets/img/mmf.jpg&quot;);color:rgba(0,0,0, 0.6);">
        <div class="text">
<<<<<<< Updated upstream
            <h2 id="bolum-uni-yazi">Kırşehir Ahi Evran Üniversitesi Bilgisayar Mühendisliği</h2>
            <p id="fak-ismi">Mühendislik Mimarlık Fakültesi</p><a href="#hakkinda">
                <button class="btn btn-outline-light" id="hakkimizda-buton" type="button">Hakkımızda</button>
            </a>
=======
            <h2 class='animate__animated animate__zoomInDown' id="bolum-uni-yazi">Kırşehir Ahi Evran Üniversitesi Bilgisayar Mühendisliği</h2>
            <p class='animate__animated animate__zoomInUp' id="fak-ismi">Mühendislik Mimarlık Fakültesi</p><a href="#hakkinda"><button class="btn btn-outline-light animate__animated animate__fadeInDownBig" id="hakkimizda-buton" type="button">Hakkımızda</button></a>
>>>>>>> Stashed changes
        </div>
    </section>
    <div class="main-banner header-text" id='duyuru'>
        <h3 id='duyuruyazi'> Güncel Duyurular & Haberler & Etkinlikler</h3>
        <div class="container-fluid">
            <div class="owl-banner owl-carousel" style='padding-top:50px;'>
                <?php
                $sql = "SELECT * FROM etkinlikler ORDER BY etkinlik_id DESC";
                $result = $db->query($sql);
                while ($row = $result->fetch_array()) { ?>
                    <div class="item">
                        <img src="<?php echo $row["etkinlik_resim"]; ?>" alt="Etkinlik resmi">
                        <div class="item-content">
                            <div class="main-content">
                                <div class="meta-category">
                                    <span><?php echo $row["etkinlik_baslik"]; ?></span>
                                </div>
                                <a href="#"><h4><?php echo $row["etkinlik_icerik"]; ?></h4></a>
                                <ul class="post-info">
                                    <li><a href="#">İlgili Birim</a></li>
                                    <li><a href="#"><?php echo $row["etkinlik_tarih"]; ?></a></li>
                                    <li><a href="#">Bilgisayar Mühendisliği</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <section class="clean-block clean-info dark" id="hakkinda">
        <div class="container">
            <div class="row">
                <div class="block-heading col-sm-6">
                    <h2 class="text-info">Kırşehir Ahi Evran Üniversitesi Bilgisayar Mühendisliği Hakkında</h2>
                    <p>2018- 2019 eğitim öğretim yılı güz döneminde eğitim hayatına başlayan bölümümüzün hedefi;
                        “Öğrenme ve yeniliğe açık, proje odaklı, takım çalışmasına yatkın, iyi iletişim becerisine
                        sahip, güncel olarak en çok aranan teknolojik bilgiler ile donatılmış, problemlere farklı
                        çözümler üretebilen, ülkemizin ihtiyaçları doğrultusunda; endüstri, sanayi, akademi ve kamu
                        alanlarında hizmet verebilecek dürüst ve erdemli bilgisayar mühendislerini yetiştirmektir."</p>
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
                            döneminde, Mühendislik Mimarlık Fakültesi bünyesinde öğrenci alımına başlayan bölümümüz; 1
                            Doçent, 6 doktor öğretim üyesi ve 5 araştırma görevlisi ile eğitim öğretime devam
                            etmektedir.<br><br>

                            - Bölümümüze öğrenci kabulü; Yükseköğretim Kurumu (YÖK) tarafından belirlenen yönetmelikler
                            çerçevesinde, merkezi sınav sistemi ile yapılmaktadır. Öğrenciler, öğrenim görmek
                            istedikleri program tercihlerini bildirdikten sonra bu sınavdan aldıkları puana göre ÖSYM
                            tarafından ilgili programlara yerleştirilmektedir.<br><br>

                            - Bölümümüz 2 öğrenci okul birincisi kontenjanı olmak üzere toplam 62 öğrenci kontenjanına
                            sahip olmakla birlikte açıldığı eğitim öğretim yılından bu yana %100 ilk yerleştirme oranına
                            sahiptir. İlaveten bölümümüzde 2021-2022 eğitim öğretim yılı itibarıyla 319 öğrencimiz
                            öğrenim görmektedir.<br><br>

                            - Bölümümüzü başarı ile tamamlayan öğrenciler Bilgisayar Mühendisliği alanında lisans
                            derecesi almaya hak kazanmaktadırlar.<br><br>

                            - Öğrencilerimizin mezun olabilmeleri için asgari 240 AKTS’lik (4 yıl - 159 ulusal kredi)
                            müfredatı, en az 2.00 ağırlıklı genel not ortalaması ile azami 7 yılda, 60 işgünü zorunlu
                            staj ile birlikte tamamlamış olmaları gerekmektedir.<br><br>

                            - Öğrencilerimiz eğitim süreleri boyunca alacakları zorunlu derslerin yanında, 47 farklı
                            seçmeli ders içerisinden seçecekleri dersler sayesinde yazılım geliştirme, elektronik, yapay
                            zeka, siber güvenlik gibi birçok alanda uzmanlaşabileceklerdir.<br><br>

                            - Programımızdan mezun olacak bilgisayar mühendisleri, gerek kamu kurum ve kuruluşlarında,
                            gerekse hem yurt içi hemde yurt dışında; mobil, web veya masaüstü uygulama geliştirme,
                            sistem yöneticiliği, bilgi güvenliği gibi alanlarda görev alabilecek, ayrıca kendi bilişim
                            firmalarını kurarak ülke ekonomisinin gelişmesinde aktif rol oynayabileceklerdir.<br><br>

                            - Bölümümüzden mezun olan öğrenciler, lisansüstü programlarda öğrenim görmek üzere başvuruda
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
                <h2 class="text-info">Kulüpler</h2>
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
                    <p>“Çağın gözdesi olan yazılım ve robotik alanlarında faaliyet göstermek amacıyla Haziran 2019’da
                        üniversitemizden kuruluş onayını almış ve çalışmalarına başlamıştır. Kulübümüz ilgili alanlarda
                        sunum, konferans, teknik gezi gibi faaliyetlerle öğrencilerin bilgi edinmesini ve ayrıca takım
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
                <img class="col-md-2" src="assets/img/pnglogo.png" id="haber-logo" class="fostrap-logo"/>
                <h1 class="col-md-8 text-info" style="margin-top:4%;">
                    Erasmus & Farabi & Mevlana Değişim Programları
                </h1>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card"
                                   href="https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus">
                                    <img src="assets/img/erasmus.png"/>
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus"> Erasmus
                                            Programı
                                        </a>
                                    </h4>
                                    <p class="">
                                        Üniversitemiz Erasmus programını desteklemektedir. Detaylı bilgi için Tıklayınız
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="https://foreignaffairs.ahievran.edu.tr/icerik/farabidegisim">
                                    <img src="assets/img/farabi.png"/>
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="https://foreignaffairs.ahievran.edu.tr/icerik/farabidegisim"> Farabi
                                            Programı
                                        </a>
                                    </h4>
                                    <p class="">
                                        Üniversitemiz Farabi programını desteklemektedir. Detaylı bilgi için Tıklayınız
                                    </p>
                                </div>
                                <div class="card-read-more btn-warning">
                                    <a href="https://foreignaffairs.ahievran.edu.tr/icerik/farabidegisim"
                                       class="btn btn-link btn-block text-light">
                                        Detaylı Bilgi
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4">
                            <div class="card">
                                <a class="img-card" href="https://foreignaffairs.ahievran.edu.tr/icerik/nedir">
                                    <img src="assets/img/mevlana.png"/>
                                </a>
                                <div class="card-content">
                                    <h4 class="card-title">
                                        <a href="https://foreignaffairs.ahievran.edu.tr/icerik/nedir">Mevlana Programı
                                        </a>
                                    </h4>
                                    <p class="">
                                        Üniversitemiz Mevlana programını desteklemektedir. Detaylı bilgi için Tıklayınız
                                    </p>
                                </div>
                                <div class="card-read-more btn-warning">
                                    <a href="https://foreignaffairs.ahievran.edu.tr/icerik/nedir"
                                       class="btn btn-link btn-block text-light">
                                        Detaylı Bilgi
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clean-block slider dark">
        <div class="container-fluid">
            <div class="block-heading">
                <h2 class="text-info">Slider</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                    mattis vitae leo.</p>
            </div>
            <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/scenery/image1.jpg"
                                                           alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image4.jpg"
                                                    alt="Slide Image"></div>
                    <div class="carousel-item"><img class="w-100 d-block" src="assets/img/scenery/image6.jpg"
                                                    alt="Slide Image"></div>
                </div>
                <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span
                                class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span
                                class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a>
                </div>
                <ol class="carousel-indicators">
                    <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>
    <section class="clean-block about-us">
        <div class="container">
            <div class="block-heading">
                <h2 class="text-info">About Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna, dignissim nec auctor in,
                    mattis vitae leo.</p>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                  src="assets/img/avatars/avatar1.jpg">
                        <div class="card-body info">
                            <h4 class="card-title">John Smith</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                  src="assets/img/avatars/avatar2.jpg">
                        <div class="card-body info">
                            <h4 class="card-title">Robert Downturn</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="card text-center clean-card"><img class="card-img-top w-100 d-block"
                                                                  src="assets/img/avatars/avatar3.jpg">
                        <div class="card-body info">
                            <h4 class="card-title">Ally Sanders</h4>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="icons"><a href="#"><i class="icon-social-facebook"></i></a><a href="#"><i
                                            class="icon-social-instagram"></i></a><a href="#"><i
                                            class="icon-social-twitter"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<?php
include 'footer.php'; ?>
    