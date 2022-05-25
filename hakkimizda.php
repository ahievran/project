<?php
session_start();
$_SESSION["sayfa"] = "hakkimizda";
$_SESSION["title"] = "Hakkımızda";
$_SESSION["description"] = "Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği Hakkımızda";
include 'header.php'; ?>

    <main class="page">
        <section class="clean-block about-us">
            <div class="heading-page header-text">
                <section class="page-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-content">
                                    <h4>Kırşehir Ahi Evran Üniversitesi - Bilgisayar Mühendisliği</h4>
                                    <h2>Hakkımızda</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xxl-6"><img src="assets/img/about-img.jpg"
                                                style="width: 103%;padding-bottom: 14px;padding-top: 14px;"></div>
                    <div class="col-xxl-6" style="padding-right: 24px;padding-left: 24px;">
                        <?php
                        $sql = "SELECT * FROM hakkimizda ORDER BY hakkinda_id ASC";
                        $result = $db->query($sql);
                        while ($row = $result->fetch_array()) { ?>
                            <ul class="list-unstyled">
                                <li style="position: relative"><i class="icon ion-android-checkmark-circle"
                                                                  style="font-size: 20px;color: var(--bs-teal);"></i> <?php echo $row["hakkinda_icerik"]; ?>
                                    <br></li>
                            </ul>
                        <?php } ?>
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
                                            <a href="https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus" class="btn btn-link btn-block text-light">
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
        <div class="container-xl">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-title">Sıkça Sorulan Sorular</h1>
			<div class="accordion" id="accordionExample">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h2 class="clearfix mb-0">
							<a class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bilgisayar mühendisliği nedir?<i class="material-icons">add</i></a>									
						</h2>
					</div>
					<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
						<div class="card-body">Bilgisayar sistemlerinin yapısı, tasarımı, geliştirilmesi, kullanılması ve periyodik bakımı konularında çalışan mühendislik dalıdır.

                        </div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bilgisayar mühendisliği eğitimi süresi ve içeriği nelerdir? <i class="material-icons">add</i></a>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">Bilgisayar mühendisliği eğitim süresi dört yıldır. Eğitimin ilk yılında matematik, fizik, bilgisayar mühendisliğine ve programlamaya giriş gibi dersler verilmektedir. Daha sonraki yıllarda ise donanım ve yazılım ile ilgili uzmanlık derslerine geçilmektedir. Nesneye Dayalı Programlama, Web Teknolojileri, Olasılık ve İstatistik, Mantık Tasarımı, Web Programlama, Veri Yapıları,Veritabanı Yönetim Sistemleri, Veri İletişimi, Mobil Uygulama Geliştirme, Bilgisayar Ağları, Yazılım Mühendisliği bu tür derslere örnek olarak gösterilebilir. Bölümümüzde ayrıca, öğrencilerin ilgi alanlarına yönelik BNesnelerin İnterneti ve Uygulamaları, Bilgisayar Grafiği, Veri Madenciliği, Bulanık Mantık ve Yapay Sinir Ağlarına Giriş, İnternet Mühendisliği, Sistem Yöneticiliği, Derin Öğrenme Ve Evrişimli Sinir Ağları, Robotik, Fiber Optik Ağlar, Siber Güvenliğe Girişe kadar değişen geniş bir yelpazade teknik seçmeli dersler sunulmaktadır.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Bu bölüme başladığımda bilgisayar programlama bilgisine sahip olmam gerekir mi? <i class="material-icons">add</i></a>                     
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">Hayır, bilgisayar programlama hakkında bilgiye sahip olmanız gerekli değildir, ancak daha önceden edindiğiniz bilginiz varsa, ilk yıl alacağınız programlamaya giriş derslerinde faydalı olacaktır.

                        </div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Bilgisayar mühendisliği eğitiminde zorunlu staj var mı? <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">Öğrencilerimizin bölümümüzden mezun olabilmeleri için 60 günlük stajlarını başarıyla tamamlamaları gerekmektedir.

                        </div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Zorunlu staj yapılacak yeri bölüm mü belirler? <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">Bölüm olarak öğrencilerimize staj yerleri sağlanması konusunda kamu kurum ve kuruluşlarının yanında özel sektör ile de işbirliğine gidilecek ve belirli kontenjanlar talep edilecektir. Ayrıca öğrencilerimiz kendi imkânları dâhilinde kriterlere uygun olarak staj yeri bulabileceklerdir.
                            
                        </div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingSix">
						<h2 class="mb-0">
							<a class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Bilgisayar Mühendisliği eğitimimin bir kısmını yurt dışında alabilir miyim? <i class="material-icons">add</i></a>                               
						</h2>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						<div class="card-body">Yeterli başarıyı gösteren öğrencilerimiz, Erasmus vb. programlar aracılığıyla derslerinin bazılarını yurt dışındaki üniversitelerden alabilmektedirler.
                            
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
    </main>
<?php include 'footer.php'; ?>