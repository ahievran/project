-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bdevxikdmuguf3i0fs2i-mysql.services.clever-cloud.com:3306
-- Generation Time: Jul 08, 2022 at 09:17 AM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdevxikdmuguf3i0fs2i`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_giris`
--

CREATE TABLE `admin_giris` (
  `admin_id` int NOT NULL,
  `admin_kadi` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_sifre` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `admin_giris`
--

INSERT INTO `admin_giris` (`admin_id`, `admin_kadi`, `admin_sifre`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `akademik_personel`
--

CREATE TABLE `akademik_personel` (
  `personel_id` int NOT NULL,
  `personel_isim_soyisim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_fakülte` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_bölüm` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_ofis` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_telefon` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_video_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_hakkında` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_img` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `akademik_personel`
--

INSERT INTO `akademik_personel` (`personel_id`, `personel_isim_soyisim`, `personel_fakülte`, `personel_bölüm`, `personel_ofis`, `personel_telefon`, `personel_email`, `personel_video_url`, `personel_hakkında`, `personel_img`) VALUES
(1, 'Doç. Dr. Mustafa Yağcı(Bölüm Başkanı)\r\n', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-------', '--------', 'mustafayagci@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/dce4744b-51fe-4518-b580-ac14b49a524e', 'assets/img/Doç. Dr. Mustafa YAĞCI.jpg'),
(2, 'Dr. Öğr. Üyesi Mustafa AKSU', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-----', '------', 'mustafa.aksu@ahievran.edu.tr', '', '----', 'assets/img/Dr. Öğr. Üyesi MUSTAFA AKSU.jpg'),
(3, 'Dr.Öğr. Üyesi Gülsüm AKKUZU KAYA	', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '-----', '------', 'gulsum.akkuzukaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-7efdb36d-017f-43f3087a-000d', 'assets/img/Dr. Öğr. Üyesi Gülsüm AKKUZU KAYA.jpg'),
(4, 'Dr. Öğr. Üyesi Mehmet Ali YALÇINKAYA', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', 'mehmetyalcinkaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/d745db4d-28b4-430a-8fdd-4fb21681ebc0', 'assets/img/Dr. Öğr. Üyesi Mehmet Ali YALÇINKAYA.jpg'),
(5, 'Dr. Öğr. Üyesi Murat IŞIK', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '-----', 'muratisik@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/e6bba358-b78c-4e0d-849c-90fac5d50f82', 'assets/img/Dr. Öğr. Üyesi Murat IŞIK.jpg'),
(6, 'Dr. Öğr. Üyesi Volkan GÜNEŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-------', 'volkan.gunes@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6afe0e72-016b-4f8d8475-0000', 'assets/img/Dr. Öğr. Üyesi Volkan GÜNEŞ.jpg'),
(7, 'Dr. Öğr. Üyesi Ayla KAYABAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', '------', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-7f502f30-017f-685e7dc9-0008', 'assets/img/Dr. Öğr. Üyesi Ayla KAYABAŞ.jpeg'),
(8, 'Araş. Gör. Abdurrahman Yavuz ASLANTAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'a.aslantas@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-7121ae31-0012', 'assets/img/Arş. Gör. Abdurrahman Yavuz ASLANTAŞ.jpg'),
(9, 'Araş. Gör. İbrahim ŞANLIALP', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'ibrahim.sanlialp@ahievran.edu.tr\r\n', '', 'https://akademik.ahievran.edu.tr/personel/bbf6ed7e-c2d7-42f9-b064-54b23f3fae86', 'assets/img/Arş. Gör. Dr. İbrahim ŞANLIALP.jpg'),
(10, 'Araş. Gör. Ahmet ÖZDİL', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '----', '----', 'ahmet.ozdil@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-68b92809-0168-db3a7c17-0001', 'assets/img/Arş. Gör. Ahmet ÖZDİL.jpg'),
(11, 'Araş. Gör. Ceren AKMAN', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '------', 'ceren.akman@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6a96d815-016a-9b510e89-0001', 'assets/img/Arş. Gör. Ceren AKMAN.jpg'),
(12, 'Araş. Gör. Sümeyye Sena ÜNALDI', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-----', 'sena.unaldi@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-710ccc80-0011', 'assets/img/Arş. Gör. Sümeyye Sena ÜNALDI.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ders_icerik`
--

CREATE TABLE `ders_icerik` (
  `dersicerik_id` int NOT NULL,
  `dersicerik_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `ders_icerik`
--

INSERT INTO `ders_icerik` (`dersicerik_id`, `dersicerik_url`) VALUES
(10, 'tesssst'),
(11, 'https://drive.google.com/file/d/1Yb06Gk6EkdBtBqWi571LP36LchOooLb_/view');

-- --------------------------------------------------------

--
-- Table structure for table `duyuru`
--

CREATE TABLE `duyuru` (
  `duyuru_id` int NOT NULL,
  `duyuru_baslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_tarih` date NOT NULL,
  `duyuru_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlik_id` int NOT NULL,
  `etkinlik_baslik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_icerik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_text` text COLLATE utf8mb4_turkish_ci,
  `etkinlik_tarih` date NOT NULL,
  `etkinlik_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `etkinlikler`
--

INSERT INTO `etkinlikler` (`etkinlik_id`, `etkinlik_baslik`, `etkinlik_icerik`, `etkinlik_text`, `etkinlik_tarih`, `etkinlik_resim`) VALUES
(44, '2020/2021 Eğitim-Öğretim Yılı Uyum Programı', '2020/2021 Eğitim-Öğretim yılı Güz döneminde Bilgisayar Mühendisliği Bölümüne yerleşen 1. sınıf öğrencilerine 02.10.2020 tarihinde AYDEP üzerinden uyum(oryantasyon)...', '<p>2020/2021 Eğitim-&Ouml;ğretim yılı G&uuml;z d&ouml;neminde Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml;ne yerleşen 1. sınıf &ouml;ğrencilerine 02.10.2020 tarihinde AYDEP &uuml;zerinden uyum(oryantasyon) programı d&uuml;zenlenmiştir.</p>\r\n\r\n<p>Uyum programı &ccedil;er&ccedil;evesinde aşağıda yer alan konu başlıkları doğrultusunda &ouml;ğrencilerimiz bilgilendirilmiştir.</p>\r\n\r\n<p>1. Bu yıla ait g&uuml;z/bahar d&ouml;nem derslerinin i&ccedil;erikleri ve ama&ccedil;ları ile ilgili bilgi vermek.</p>\r\n\r\n<p>2. Zorunlu/Se&ccedil;meli derslerin mesleki/bireysel gelişime olan katkıları ile ilgili &ouml;ğrencilere bilgi verildi.</p>\r\n\r\n<p>3. Akademik başarının &ouml;nemi hakkında bilgi verilecektir.</p>\r\n\r\n<p>4. Eğitim/&Ouml;ğretimde isteklerin rahat ulaştırılabilmesi i&ccedil;in b&ouml;l&uuml;m sayfasındaki iletişim kısmı kullanılabileceği bilgisi vermek.</p>\r\n\r\n<p>5. Kurulan yeni laboratuvarlar ile ilgili bilgi verilecektir.</p>\r\n\r\n<p>6. Devamsızlıklar ile ilgili bilgi vermek.</p>\r\n\r\n<p>7. B&ouml;l&uuml;m hedefleri ile ilgili bilgi vermek.</p>\r\n\r\n<p>8. Staj s&uuml;reci hakkında bilgi verilecektir.</p>\r\n\r\n<p>9. Mevl&acirc;na/Farabi/Erasmus programları ile ilgili bilgi vermek.</p>\r\n\r\n<p>10. Akademik y&uuml;kselme i&ccedil;in girilecek sınavlar hakkında bilgi vermek.</p>\r\n\r\n<p>11. Dersten ge&ccedil;me/kalma/şartlı ders ge&ccedil;me vb&hellip; konular hakkında bilgiler vermek.</p>\r\n\r\n<p>12. Yatay ge&ccedil;iş hakkında bilgi vermek.</p>\r\n\r\n<p>13. Sınav duyurularının/Sonu&ccedil; ilanlarının yapılacağı zaman dilimi hakkında bilgi vermek.</p>\r\n\r\n<p>14. Mazeret sınavları hakkında bilgi vermek.</p>\r\n\r\n<p>15. Not ortalamasının nasıl hesaplanacağına dair bilgi vermek.</p>\r\n\r\n<p>16. Uzaktan Eğitim hakkında bilgi vermek.</p>\r\n\r\n<p>17. AYDEP hakkında bilgi vermek.</p>\r\n', '2020-10-02', '../admin/uploads/events/oryantasyon21.png    '),
(45, 'Kişisel Gelişimde Hedef Seçimi', 'Bilgisayar Mühendisliği tarafından gerçekleştirilen etkinlikler kapsamında gazeteci, yazar ve karakter eğitimi uzmanı olan Fahri SARRAFOĞLU 23.10.2020 tarihinde AYDEP üzerinden...', '<p>Bilgisayar M&uuml;hendisliği tarafından ger&ccedil;ekleştirilen etkinlikler kapsamında gazeteci, yazar ve karakter eğitimi uzmanı olan Fahri SARRAFOĞLU 23.10.2020 tarihinde AYDEP &uuml;zerinden eğitim vermiştir. SARRAFOĞLU ve bilgisayar m&uuml;hendisliği &ouml;ğrencileri ile ger&ccedil;ekleştirilen buluşmada hedef belirleme ve şartlara rağmen hedefe ulaşma konularına değinilmiştir.</p>\r\n\r\n<p>Yeni eğitim &ouml;ğretim yılında &ouml;ğrencilerimize kişisel gelişimde hedef se&ccedil;imi konulu eğitim ile kaliteli eğitimin &uuml;retimine katkısından &ouml;t&uuml;r&uuml; Fahri SARRAFOĞLU&#39; na teşekk&uuml;r eder, gelecek etkinliklerde g&ouml;r&uuml;şmek &uuml;zere kendilerine başarılar dileriz.</p>\r\n', '2020-10-23', '../admin/uploads/events/fahri_sarrafoglu3-1.jpg    '),
(46, 'Android Eğitimi Etkinliği', 'Bilgisayar Mühendisliği bölümü hocalarından Arş. Gör. Ceren AKMAN Bursa Teknik Üniversitesi Developer Student Clubs (DSC) tarafından düzenlenen Android Eğitim ....', '<p>Bilgisayar M&uuml;hendisliği b&ouml;l&uuml;m&uuml; hocalarından Arş. G&ouml;r. Ceren AKMAN Bursa Teknik &Uuml;niversitesi Developer Student Clubs (DSC) tarafından d&uuml;zenlenen Android Eğitim programını 15 Kasım 2020 Saat: 15:00 Dsc_btu youtube sayfasından canlı olarak ger&ccedil;ekleştirmiştir.</p>\r\n\r\n<p>Arş. G&ouml;r. Ceren AKMAN hocamıza b&ouml;l&uuml;m&uuml;m&uuml;ze verdiği katkılardan &ouml;t&uuml;r&uuml; teşekk&uuml;r ederiz.</p>\r\n', '2020-11-15', '../admin/uploads/events/cerenAkman.jpeg    '),
(47, 'Sektör-Öğrenci Buluşması', 'Bilgisayar Mühendisliği tarafından gerçekleştirilen etkinlikler arasında olan Sektör ve Öğrenci buluşması hız kesmeden devam etmektedir. Bu kapsamda, kariyerini GittiGidiyor\'da....', '<p>Bilgisayar M&uuml;hendisliği tarafından ger&ccedil;ekleştirilen etkinlikler arasında olan Sekt&ouml;r ve &Ouml;ğrenci buluşması hız kesmeden devam etmektedir. Bu kapsamda, &ouml;zel sekt&ouml;rde &ccedil;eşitli firmalarda yazılım geliştirici, takım lideri, BT sorumlusu, veri bilimi ve analizi m&uuml;d&uuml;r&uuml; gibi pozisyonlarda &ccedil;alıştıktan sonra kariyerini GittiGidiyor&#39;da B&uuml;y&uuml;k Veri ve YZ Y&ouml;neticisi olarak s&uuml;rd&uuml;ren Remzi D&Uuml;ZAĞA&Ccedil;, elde ettiği bu birikimi 31.03.2021 tarihinde ger&ccedil;ekleştirdiğimiz &ccedil;evrimi&ccedil;i konferans ile Ahi Evran &Uuml;niversitesi Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml; &ouml;ğrencilerine sekt&ouml;rle ilgili bilgi ve tecr&uuml;be paylaşımında bulunmuştur.</p>\r\n\r\n<p>Remzi D&Uuml;ZAĞA&Ccedil;&#39;a b&ouml;l&uuml;m&uuml;m&uuml;z &ouml;ğrencilerine sağladığı katkılardan &ouml;t&uuml;r&uuml; teşekk&uuml;r ederiz.</p>\r\n', '2021-03-31', '../admin/uploads/events/remzi.jpg    '),
(50, 'Fakülte Öğrenci Kalite Elçimiz ve Öğrenci Kalite Temsilcilerimiz ile Toplantı Yapıldı', 'Fakültemiz kalite temsilcileri ve bölüm kalite temsilcileri dekan yardımcımız Doç. Dr. Emre Yavuzer’e ziyarette bulundular...\r\n', '<p>Fak&uuml;ltemiz kalite temsilcileri ve b&ouml;l&uuml;m kalite temsilcileri dekan yardımcımız Do&ccedil;. Dr. Emre Yavuzer&rsquo;e ziyarette bulundular. Birim kalite faaliyetlerimiz ve kurumsal akreditasyon programı ile ilgili s&uuml;re&ccedil;lerimizin ilerleyişi &ouml;ğrencilerimiz ile paylaşıldı. Ayrıca &ouml;ğrencilerimizin sorunları dinlenerek &ccedil;&ouml;z&uuml;m planlamaları yapıldı.&nbsp;</p>\r\n', '2021-10-26', '../admin/uploads/events/kaliteZiyaret (1).jpg    '),
(51, '“TEKNOFEST Havacılık, Uzay ve Teknoloji Festivali” Tanıtım Programı Düzenlendi', 'Türkiye Teknoloji Takımı Vakfı ile Sanayi ve Teknoloji Bakanlığı tarafından düzenlenen ve Türkiye’nin millî teknolojilerini geliştirmeyi hedefleyen...', '<p>T&uuml;rkiye Teknoloji Takımı Vakfı ile Sanayi ve Teknoloji Bakanlığı tarafından d&uuml;zenlenen ve T&uuml;rkiye&rsquo;nin mill&icirc; teknolojilerini geliştirmeyi hedefleyen ilk ve tek festival olan TEKNOFEST&rsquo;e katılımı artırmak i&ccedil;in bir tanıtım programı ger&ccedil;ekleştirildi.</p>\r\n\r\n<p>Fak&uuml;ltemiz Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml; b&uuml;nyesinde ger&ccedil;ekleştirilen etkinlikte 30 Ağustos &ndash; 4 Eyl&uuml;l 2022 tarihlerinde Samsun &Ccedil;arşamba Havalimanında ger&ccedil;ekleştirilecek olan &lsquo;TEKNOFEST Yarışmaları&rsquo; hakkında yapılan a&ccedil;ıklamalardan sonra katılımın &ouml;nemi ve nasıl başvuru yapılacağı anlatıldı.</p>\r\n', '2022-02-14', '../admin/uploads/events/teknofest.jpg    '),
(52, 'Bilgisayar Mühendisliği Bölümü Erasmus Tanıtım Programı', 'Bilgisayar Mühendisliği Bölümü tarafından bölüm öğrencilerine 23 Şubat 2022 Çarşamba günü Erasmus programının...\r\n\r\n\r\n', '<p><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6581/Kanit2.jpg\" alt=\"\">\r\n</div></p>\r\n\r\n<p>Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml; tarafından b&ouml;l&uuml;m &ouml;ğrencilerine 23 Şubat 2022 &Ccedil;arşamba g&uuml;n&uuml; Erasmus programının amacını, başvuru şeklini ve fırsatlarını konu alan &ldquo;Erasmus Tanıtım Programı&rdquo; d&uuml;zenlendi.</p>\r\n', '2022-02-24', '../admin/uploads/events/Kanit1.jpg    '),
(53, 'Ağ Ve Siber Güvenlik Kulübü Temsilcilerinden Dekanlığımıza Ziyaret', 'Fakültemiz Bilgisayar Mühendisliği bölümü öğrencileri tarafından kurulan ve danışmanlığını Dr. Öğr. Üyesi Mehmet Ali YALÇINKAYA’nın...\r\n', '<p>Fak&uuml;ltemiz Bilgisayar M&uuml;hendisliği b&ouml;l&uuml;m&uuml; &ouml;ğrencileri tarafından kurulan ve danışmanlığını Dr. &Ouml;ğr. &Uuml;yesi Mehmet Ali YAL&Ccedil;INKAYA&rsquo;nın yaptığı Ağ ve Siber G&uuml;venlik Kul&uuml;b&uuml; başkan ve &uuml;yeleri fak&uuml;ltemizde yapılacak olan etkinlikler hakkında bilgi vermek i&ccedil;in Dekan Yardımcımız Do&ccedil;. Dr. Emre YAVUZER&rsquo;e ziyarette bulundular. Kul&uuml;p &uuml;yeleri ilerleyen haftalarda Ağ ve Siber G&uuml;venlik ile ilgili Fak&uuml;ltemizde yapılması planlanan faaliyetler hakkında bilgi verdiler.</p>\r\n\r\n<p>Ağ ve Siber G&uuml;venlik Kul&uuml;b&uuml; Kayıt Formu:&nbsp;<a href=\"https://forms.gle/9MCKvYqaYEc7WDB59\" target=\"_blank\">https://forms.gle/9MCKvYqaYEc7WDB59</a></p>\r\n', '2022-04-18', '../admin/uploads/events/165002241861_2.jpg    '),
(54, 'Bilgisayar Mühendisliği 4. Sınıf Öğrencileri Tarafından Bitirme Projesi Sergisi Düzenlendi', '26 Mayıs 2022 Perşembe günü Bilgisayar Mühendisliği Bölümü 4. sınıf öğrencileri tarafından fakültemizin giriş holünde bitirme projeleri...\r\n', '<p><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6609/20220526_140611.jpg\" alt=\"\">\r\n</div><br><br><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6609/20220526_134225.jpg\" alt=\"\">\r\n</div></p>\r\n\r\n<p>26 Mayıs 2022 Perşembe g&uuml;n&uuml; Bilgisayar M&uuml;hendisliği B&ouml;l&uuml;m&uuml; 4. sınıf &ouml;ğrencileri tarafından fak&uuml;ltemizin giriş hol&uuml;nde bitirme projeleri sunulmuştur. Ger&ccedil;ekleştirilen etkinlik akademik personel ve &ouml;ğrenciler tarafından yoğun ilgi g&ouml;rm&uuml;şt&uuml;r.</p>\r\n', '2022-05-28', '../admin/uploads/events/20220526_135200.jpg    '),
(55, 'Yazılım ve Robotik Kulübü tarafından “Oyun Geliştirmeye Giriş” etkinliği gerçekleştirildi', 'Bilgisayar Mühendisliği alanında yükselen trendleri takip eden Yazılım ve Robotik Kulübü tarafından “Oyun Geliştirmeye Giriş” etkinliği...\r\n', '<p>Bilgisayar M&uuml;hendisliği alanında y&uuml;kselen trendleri takip eden Yazılım ve Robotik Kul&uuml;b&uuml; tarafından &ldquo;Oyun Geliştirmeye Giriş&rdquo; etkinliği 25 Mayıs 2022 &Ccedil;arşamba g&uuml;n&uuml;&nbsp; ger&ccedil;ekleştirildi.</p>\r\n', '2022-06-02', '../admin/uploads/events/WhatsApp_Image_2022-05-28_at_20.14.53.jpg    '),
(56, 'Siber Güvenlik Ve Ağ Topluluğundan “Siber Güvenliğe Giriş” Etkinliği', 'Siber Güvenlik ve Ağ Topluluğu tarafından “Siber Güvenliğe Giriş” etkinliği gerçekleştirildi...', '<p>Siber G&uuml;venlik ve Ağ Topluluğu tarafından &ldquo;Siber G&uuml;venliğe Giriş&rdquo; etkinliği ger&ccedil;ekleştirildi. Son yılların y&uuml;kselen trendi olması ile Bilgisayar M&uuml;hendisliği &ouml;ğrencileri tarafından yoğun ilgi g&ouml;rm&uuml;şt&uuml;r.</p>\r\n', '2022-06-02', '../admin/uploads/events/WhatsApp_Image_2022-05-20_at_7.35.44_AM_1.jpg    '),
(57, 'Lise Öğrencilerinin Kariyer Planlamalarına Fakültemizden Rehberlik', 'Kırşehir Sosyal bilimler Lisesi, Sayısal Sınıf öğrencileri Fakültemizin Elektrik Elektronik, Makine, Bilgisayar ve İnşaat Mühendisliği Laboratuvarlarını...\r\n', '<p><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6613/1654496262138.jpg\" alt=\"\">\r\n</div><br><br><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6613/1654496262019.jpg\" alt=\"\">\r\n</div><br><br><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6613/1654496261999.jpg\" alt=\"\">\r\n</div><br><br><div class=\"event-thumb\">\r\n<img src=\"https://mf.ahievran.edu.tr/uploads/6613/1654496262056.jpg\" alt=\"\">\r\n</div></p>\r\n\r\n<p>Kırşehir Sosyal bilimler Lisesi, Sayısal Sınıf &ouml;ğrencileri Fak&uuml;ltemizin Elektrik Elektronik, Makine, Bilgisayar ve İnşaat M&uuml;hendisliği Laboratuvarlarını inceleyerek b&ouml;l&uuml;mler hakkında bilgiler aldı. B&ouml;l&uuml;mlerin ders i&ccedil;erikleri, &ccedil;alışma koşulları ve uygulama &uuml;niteleri hakkında bilgi edinen &ouml;ğrenciler dersliklerimizi ve fak&uuml;ltemiz diğer birimlerini de incelediler.</p>\r\n', '2022-06-06', '../admin/uploads/events/1654496262187.jpg    ');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int NOT NULL,
  `galeri_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`galeri_id`, `galeri_resim`) VALUES
(2, 'assets/img/scenery/gallery-1.jpg'),
(3, 'assets/img/scenery/gallery-2.jpg'),
(4, 'assets/img/scenery/gallery-3.jpg'),
(5, 'assets/img/scenery/gallery-4.jpg'),
(6, 'assets/img/scenery/gallery-5.jpg'),
(7, 'assets/img/scenery/gallery-6.jpg'),
(8, 'assets/img/scenery/gallery-7.jpg'),
(9, 'assets/img/scenery/gallery-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkinda_id` int NOT NULL,
  `hakkinda_baslik` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkinda_icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`hakkinda_id`, `hakkinda_baslik`, `hakkinda_icerik`) VALUES
(1, '', '2018-2019 eğitim öğretim yılı güz döneminde, Mühendislik Mimarlık Fakültesi bünyesinde öğrenci alımına başlayan bölümümüz; 1 Doçent, 6 doktor öğretim üyesi ve 5 araştırma görevlisi ile eğitim öğretime devam etmektedir.'),
(2, '', 'Bölümümüze öğrenci kabulü; Yükseköğretim Kurumu (YÖK) tarafından belirlenen yönetmelikler çerçevesinde, merkezi sınav sistemi ile yapılmaktadır. Öğrenciler, öğrenim görmek istedikleri program tercihlerini bildirdikten sonra bu sınavdan aldıkları puana göre ÖSYM tarafından ilgili programlara yerleştirilmektedir.'),
(3, '', 'Bölümümüz 2 öğrenci okul birincisi kontenjanı olmak üzere toplam 62 öğrenci kontenjanına sahip olmakla birlikte açıldığı eğitim öğretim yılından bu yana %100 ilk yerleştirme oranına sahiptir. İlaveten bölümümüzde 2020-2021 eğitim öğretim yılı itibarıyla 222 öğrencimiz öğrenim görmektedir.'),
(4, '', 'Bölümümüzü başarı ile tamamlayan öğrenciler Bilgisayar Mühendisliği alanında lisans derecesi almaya hak kazanmaktadırlar.'),
(5, '', 'Öğrencilerimizin mezun olabilmeleri için asgari 240 AKTS’lik (4 yıl - 159 ulusal kredi) müfredatı, en az 2.00 ağırlıklı genel not ortalaması ile azami 7 yılda, 60 işgünü zorunlu staj ile birlikte tamamlamış olmaları gerekmektedir.'),
(6, '', 'Öğrencilerimiz eğitim süreleri boyunca alacakları zorunlu derslerin yanında, 47 farklı seçmeli ders içerisinden seçecekleri dersler sayesinde yazılım geliştirme, elektronik, yapay zeka, siber güvenlik gibi birçok alanda uzmanlaşabileceklerdir.'),
(7, '', 'Programımızdan mezun olacak bilgisayar mühendisleri, gerek kamu kurum ve kuruluşlarında, gerekse hem yurt içi hemde yurt dışında; mobil, web veya masaüstü uygulama geliştirme, sistem yöneticiliği, bilgi güvenliği gibi alanlarda görev alabilecek, ayrıca kendi bilişim firmalarını kurarak ülke ekonomisinin gelişmesinde aktif rol oynayabileceklerdir.'),
(8, '', 'Bölümümüzden mezun olan öğrenciler, lisansüstü programlarda öğrenim görmek üzere başvuruda bulunabilirler.');

-- --------------------------------------------------------

--
-- Table structure for table `hatali_giris`
--

CREATE TABLE `hatali_giris` (
  `hatali_giris_id` int NOT NULL,
  `hatali_giris_ip` text NOT NULL,
  `hatali_giris_tarih` text,
  `admin_kadi` text,
  `admin_sifre` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hatali_giris`
--

INSERT INTO `hatali_giris` (`hatali_giris_id`, `hatali_giris_ip`, `hatali_giris_tarih`, `admin_kadi`, `admin_sifre`) VALUES
(2, '::1', '18.05.2022 / 13:02:17', 'admin', 'b394c813f6e3fe545d9e968b5b993045'),
(3, '::1', '18.05.2022 / 13:03:18', 'asdsadsadsadsadsad', NULL),
(4, '::1', '18.05.2022 / 13:03:45', 'asdsadsadsad', '1111111'),
(5, '10.1.16.13', '26.05.2022 / 10:51:50', '\'OR=', '\'OR='),
(6, '10.1.9.254', '26.05.2022 / 10:52:00', '\'OR=\'', '\'OR='),
(7, '10.1.29.231', '26.05.2022 / 13:54:19', 'sa', 'sa'),
(8, '10.1.29.231', '26.05.2022 / 13:54:19', '', ''),
(9, '10.1.29.231', '26.05.2022 / 13:54:23', 'sa', 'sa'),
(10, '10.1.29.231', '26.05.2022 / 13:54:26', 'asss', 'sa'),
(11, '10.1.29.231', '26.05.2022 / 13:54:31', 'ssa', 'ass'),
(12, '10.1.29.231', '26.05.2022 / 13:54:34', 'sasa', 'sasasa'),
(13, '10.1.29.231', '26.05.2022 / 13:54:39', 'sasas', 'sasasas'),
(14, '10.1.29.231', '26.05.2022 / 13:54:44', 'sasasasa', 'ssasasas'),
(15, '10.1.29.231', '26.05.2022 / 13:54:49', 'sasass', 'sasassa'),
(16, '10.1.29.231', '26.05.2022 / 13:54:55', 'sasasas', 'sasasss'),
(17, '10.1.29.231', '26.05.2022 / 13:54:59', 'sasasas', 'sasasasa'),
(18, '10.1.29.231', '26.05.2022 / 13:55:06', 'sasasss', 'asasasassss'),
(19, '10.1.29.231', '26.05.2022 / 13:55:11', 'sasasa', 'ssasasas'),
(20, '10.1.29.231', '26.05.2022 / 13:55:17', 'sasass', 'sasasass'),
(21, '10.1.29.231', '26.05.2022 / 13:55:18', '', ''),
(22, '10.1.29.231', '26.05.2022 / 13:55:21', 'sasasa', 'sasasa'),
(23, '::1', '20.06.2022 / 14:24:59', 'admin', '12345'),
(24, '10.1.32.137', '01.07.2022 / 05:44:18', 'admin', '123'),
(25, '10.1.13.135', '01.07.2022 / 06:44:04', 'admin', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `hedeflerimiz`
--

CREATE TABLE `hedeflerimiz` (
  `hedef_id` int NOT NULL,
  `hedef_icon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_baslik` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `hedeflerimiz`
--

INSERT INTO `hedeflerimiz` (`hedef_id`, `hedef_icon`, `hedef_icerik`, `hedef_baslik`) VALUES
(1, '', 'Bilgisayar Mühendisliği alanında standartların oluşturulduğu ulusal ve uluslar arası çalışmalara katkı ve destek sağlamak.', 'Uluslararası Araştırmalar'),
(2, '', 'Üniversite ve sanayi işbirliğini en üst seviyelere taşımak, sanayinin ve bilişim sektörünün ihtiyaçlarına göre araştırmalar yaparak projeler geliştirmek', 'Üniversite ve Sanayi İşbirliği'),
(3, '', 'Gerek kamu kurum ve kuruluşlarında, gerekse yurt içi/ yurt dışı firmalarda; mobil, web veya masaüstü uygulama geliştirme, sistem yöneticiliği, bilgi güvenliği gibi alanlarda görev alabilecek yetenekli bilgisayar mühendisleri yetiştirmek.', 'Sektör İhtiyaçlarını Giderme'),
(4, '', 'Programlama, yapay zeka, makine öğrenmesi, derin öğrenme, siber güvenlik gibi alanlarda yeterlilik sahibi bilgisayar mühendisleri yetiştirerek, farklı anabilim dallarının katılımı ile gerçekleştirilecek disiplinler arası birçok projede aktif olarak yer almalarını sağlamak.', 'Disiplinler Arası Çalışma');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int NOT NULL,
  `maps_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_adres` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_email` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_telefon` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `maps_url`, `iletisim_adres`, `iletisim_email`, `iletisim_telefon`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6188.876546779659!2d34.1203697!3d39.1420122!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7f131464dc8c810c!2zTcO8aGVuZGlzbGlrIE1pbWFybMSxayBGYWvDvGx0ZXNp!5e0!3m2!1str!2str!4v1655119917421!5m2!1str!2str', 'Ahi Evran Üniversitesi, Bağbaşı Yerleşkesi, Mühendislik-Mimarlık Fakültesi, Merkez/KIRŞEHİR', 'bilmuh@ahievran.edu.tr', '0386 280 38 00');

-- --------------------------------------------------------

--
-- Table structure for table `laboratuvar`
--

CREATE TABLE `laboratuvar` (
  `lab_id` int NOT NULL,
  `lab_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_ad` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_aciklama` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `laboratuvar`
--

INSERT INTO `laboratuvar` (`lab_id`, `lab_resim`, `lab_ad`, `lab_aciklama`) VALUES
(4, 'admin/uploads/labs/lab-1.jpg', 'Yazılım Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin web, masaüstü ve mobil tabanlı yazılım geliştirme amaçlı kullanabilecekleri 40 ve 25 bilgisayar kapasiteli 2 adet bilgisayar laboratuvarı bulunmaktadır.'),
(5, 'admin/uploads/labs/lab-4.jpg', 'Sayısal Sistemler Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin analog (AC-DC) ve digital devreler ile ilgili uygulamalar yapabileceği sayısal sistemler laboratuvarı bulunmaktadır.'),
(6, 'admin/uploads/labs/lab-2.jpg', 'Yazılım Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin web, masaüstü ve mobil tabanlı yazılım geliştirme amaçlı kullanabilecekleri 40 ve 25 bilgisayar kapasiteli 2 adet bilgisayar laboratuvarı bulunmaktadır.'),
(7, 'admin/uploads/labs/lab-3.jpg', 'Donanım Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin lojik devreler gibi çeşitli uygulamaları yapabileceği dc güç kaynağı, osiloskop, multimetre, dijital uygulamalar eğitim seti gibi bileşenleri içeren donanım laboratuvarı bulunmaktadır. '),
(8, 'admin/uploads/labs/lab-5.jpg', 'Mikroişlemci ve Mikrodenetleyici Laboratuvarı ', 'Bölümümüz bünyesinde, öğrencilerimizin mikrodenetleyici programlama ve devre tasarımları gibi uygulamaları içeren mikrodenetleyici laboratuvarı bulunmaktadır. '),
(9, 'admin/uploads/labs/lab-6.jpg', 'Bilgisayar Ağları Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin çeşitli ağ uygulamalarını gerçekleştirebilecekleri, hub, switch, firewall, bridge gibi cihazların bulunduğu bilgisayar ağları laboratuvarı bulunmaktadır. '),
(10, 'admin/uploads/labs/lab-7.jpg', 'Robotik Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin çeşitli robotik uygulamalarını gerçekleştirebilecekleri, sensör(ivme,ısı vb.), drone uçuş kartı, ardunio ve raspberry gibi malzemelerin bulunduğu robotik laboratuvarı bulunmaktadır. ');

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `mesaj_id` int NOT NULL,
  `mesaj_isim_soyisim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_konu` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_tarih` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `mesaj_isim_soyisim`, `mesaj_konu`, `mesaj_email`, `mesaj_icerik`) VALUES
(16, 'Samet Adsan', 'İtiraz dilekçesi (1 adet dilekçe belgesi, 2 adet ek belge)', 'ogr.samet.adsan@ahievran.edu.tr', 'deneme mesajıdır test test test'),
(17, 'Kutluhan Azaflı', 'test', 'test@test.com', 'selam');

-- --------------------------------------------------------

--
-- Table structure for table `programlar`
--

CREATE TABLE `programlar` (
  `program_id` int NOT NULL,
  `program_ad` varchar(50) NOT NULL,
  `program_aciklama` text NOT NULL,
  `program_img` text NOT NULL,
  `program_link` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `programlar`
--

INSERT INTO `programlar` (`program_id`, `program_ad`, `program_aciklama`, `program_img`, `program_link`) VALUES
(1, 'Erasmus Programı', 'Üniversitemiz Erasmus programını desteklemektedir. Detaylı bilgi için Tıklayınız', 'uploads/program/erasmus.png', 'https://foreignaffairs.ahievran.edu.tr/icerik/adimadimerasmus'),
(3, 'Farabi Programı', 'Üniversitemiz Farabi programını desteklemektedir. Detaylı bilgi için Tıklayınız', 'uploads/program/farabi.png', 'https://foreignaffairs.ahievran.edu.tr/icerik/farabidegisim'),
(4, 'Mevlana Programı', 'Üniversitemiz Mevlana programını desteklemektedir. Detaylı bilgi için Tıklayınız', 'uploads/program/mevlana.png', 'https://foreignaffairs.ahievran.edu.tr/icerik/nedir');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int NOT NULL,
  `slider_ustmetin` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_altmetin` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_ustmetin`, `slider_altmetin`, `slider_url`) VALUES
(17, 'Mühendislik-Mimarlık Fakültesi', 'Fakültede Kış Mevsimi', '../admin/uploads/slider/kis.jpeg'),
(18, 'Mühendislik-Mimarlık Fakültesi', 'Fakültede Kış Mevsimi', '../admin/uploads/slider/kis2.jpeg'),
(19, 'Mühendislik-Mimarlık Fakültesi', '', '../admin/uploads/slider/fakulte.jpeg'),
(20, 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Laboratuvarı', '../admin/uploads/slider/lab.jpeg'),
(21, 'Mühendislik-Mimarlık Fakültesi', 'Amfimizde Siber Güvenliğe Giriş Eğitimi Verildi', '../admin/uploads/slider/WhatsApp_Image_2022-05-20_at_7.35.44_AM_1.jpg'),
(22, 'Mühendislik-Mimarlık Fakültesi', '4. Sınıf Öğrencileri Bitirme Projelerini Sundu', '../admin/uploads/slider/20220526_135200.jpg'),
(23, 'Mühendislik-Mimarlık Fakültesi', 'Fakültemiz Standına 4. Geleneksel Üniversite-Şehir Buluşmasında Yoğun İlgi', '../admin/uploads/slider/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `soru_cevap`
--

CREATE TABLE `soru_cevap` (
  `soru_id` int NOT NULL,
  `soru_metin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `cevap_metin` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_giris`
--
ALTER TABLE `admin_giris`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `akademik_personel`
--
ALTER TABLE `akademik_personel`
  ADD PRIMARY KEY (`personel_id`);

--
-- Indexes for table `ders_icerik`
--
ALTER TABLE `ders_icerik`
  ADD PRIMARY KEY (`dersicerik_id`);

--
-- Indexes for table `duyuru`
--
ALTER TABLE `duyuru`
  ADD PRIMARY KEY (`duyuru_id`);

--
-- Indexes for table `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`etkinlik_id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkinda_id`);

--
-- Indexes for table `hatali_giris`
--
ALTER TABLE `hatali_giris`
  ADD PRIMARY KEY (`hatali_giris_id`);

--
-- Indexes for table `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  ADD PRIMARY KEY (`hedef_id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Indexes for table `laboratuvar`
--
ALTER TABLE `laboratuvar`
  ADD PRIMARY KEY (`lab_id`);

--
-- Indexes for table `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Indexes for table `programlar`
--
ALTER TABLE `programlar`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `soru_cevap`
--
ALTER TABLE `soru_cevap`
  ADD PRIMARY KEY (`soru_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_giris`
--
ALTER TABLE `admin_giris`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `akademik_personel`
--
ALTER TABLE `akademik_personel`
  MODIFY `personel_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ders_icerik`
--
ALTER TABLE `ders_icerik`
  MODIFY `dersicerik_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `duyuru`
--
ALTER TABLE `duyuru`
  MODIFY `duyuru_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `etkinlik_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkinda_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hatali_giris`
--
ALTER TABLE `hatali_giris`
  MODIFY `hatali_giris_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  MODIFY `hedef_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `laboratuvar`
--
ALTER TABLE `laboratuvar`
  MODIFY `lab_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `programlar`
--
ALTER TABLE `programlar`
  MODIFY `program_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `soru_cevap`
--
ALTER TABLE `soru_cevap`
  MODIFY `soru_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
