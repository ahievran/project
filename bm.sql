-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bdevxikdmuguf3i0fs2i-mysql.services.clever-cloud.com:3306
-- Generation Time: May 27, 2022 at 08:44 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


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
(1, 'Doç. Dr. Mustafa Yağcı(Bölüm Başkanı)\r\n', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-------', '--------', 'mustafayagci@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/dce4744b-51fe-4518-b580-ac14b49a524e', 'assets/img/akademik-1.jpg'),
(2, 'Dr. Öğr. Üyesi Mustafa AKSU', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-----', '------', 'mustafa.aksu@ahievran.edu.tr', '', '----', 'assets/img/akademik-null.jpg'),
(3, 'Dr.Öğr. Üyesi Gülsüm AKKUZU KAYA	', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '-----', '------', 'gulsum.akkuzukaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-7efdb36d-017f-43f3087a-000d', 'assets/img/akademik-null.jpg'),
(4, 'Dr. Öğr. Üyesi Mehmet Ali YALÇINKAYA', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', 'mehmetyalcinkaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/d745db4d-28b4-430a-8fdd-4fb21681ebc0', 'assets/img/akademik-4.jpg'),
(5, 'Dr. Öğr. Üyesi Murat IŞIK', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '-----', 'muratisik@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/e6bba358-b78c-4e0d-849c-90fac5d50f82', 'assets/img/akademik-5.jpg'),
(6, 'Dr. Öğr. Üyesi Volkan GÜNEŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-------', 'volkan.gunes@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6afe0e72-016b-4f8d8475-0000', 'assets/img/akademik-6.jpg'),
(7, 'Dr. Öğr. Üyesi Ayla KAYABAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', '------', '', '----', 'assets/img/akademik-null.jpg'),
(8, 'Araş. Gör. Abdurrahman Yavuz ASLANTAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'a.aslantas@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-7121ae31-0012', 'assets/img/akademik-null.jpg'),
(9, 'Araş. Gör. İbrahim ŞANLIALP', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'ibrahim.sanlialp@ahievran.edu.tr\r\n', '', 'https://akademik.ahievran.edu.tr/personel/bbf6ed7e-c2d7-42f9-b064-54b23f3fae86', 'assets/img/akademik-9.jpg'),
(10, 'Araş. Gör. Ahmet ÖZDİL', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '----', '----', 'ahmet.ozdil@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-68b92809-0168-db3a7c17-0001', 'assets/img/akademik-10.jpg'),
(11, 'Araş. Gör. Ceren AKMAN', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '------', 'ceren.akman@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6a96d815-016a-9b510e89-0001', 'assets/img/akademik-11.jpg'),
(12, 'Araş. Gör. Sümeyye Sena ÜNALDI', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-----', 'sena.unaldi@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-710ccc80-0011', 'assets/img/akademik-12.jpg');

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
  `etkinlik_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_link` text COLLATE utf8mb4_turkish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `etkinlikler`
--

INSERT INTO `etkinlikler` (`etkinlik_id`, `etkinlik_baslik`, `etkinlik_icerik`, `etkinlik_text`, `etkinlik_tarih`, `etkinlik_resim`, `etkinlik_link`) VALUES
(20, 'Sınav Takvimi', 'Bahar Dönemi Sınav Takvimi', '<p>TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST</p>\r\n', '2022-05-17', '../admin/uploads/events/ahievran_logo.png    ', 'https://ahisinav.ahievran.edu.tr/sinavlar/Butunleme/dpgwh5_Butunleme_6.pdf'),
(21, 'Sınav Takvimi', 'Bahar Dönemi Sınav Takvimi', '<p>TESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTESTTEST</p>\r\n', '2022-05-17', '../admin/uploads/events/aeummf2.jpg    ', 'https://ahisinav.ahievran.edu.tr/sinavlar/Butunleme/dpgwh5_Butunleme_6.pdf');

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
(1, '', '2018-2019 eğitim öğretim yılı güz döneminde, Mühendislik Mimarlık Fakültesi bünyesinde öğrenci alımına başlayan bölümümüz; 1 Doçent, 4 doktor öğretim üyesi ve 3 araştırma görevlisi ile eğitim öğretime devam etmektedir.'),
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
(22, '10.1.29.231', '26.05.2022 / 13:55:21', 'sasasa', 'sasasa');

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
(10, 'admin/uploads/labs/lab-7.jpg', 'Robotik Laboratuvarı', 'Bölümümüz bünyesinde, öğrencilerimizin çeşitli robotik uygulamalarını gerçekleştirebilecekleri, sensör(ivme,ısı vb.), drone uçuş kartı, ardunio ve raspberry gibi malzemelerin bulunduğu robotik laboratuvarı bulunmaktadır. '),
(16, 'admin/uploads/labs/erasmus.png', 'Test', 'Test'),
(17, 'admin/uploads/labs/erasmus.png', 'Test', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `mesaj_id` int NOT NULL,
  `mesaj_isim_soyisim` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_konu` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_email` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_icerik` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `mesaj`
--

INSERT INTO `mesaj` (`mesaj_id`, `mesaj_isim_soyisim`, `mesaj_konu`, `mesaj_email`, `mesaj_icerik`) VALUES
(1, 'Samet Adsan', 'ssl sertifikası kurulumu', 'adsan.samet.06@gmail.com', 'adssda'),
(2, 'Samet Adsan', 'denemee', 'adsan.samet.06@gmail.com', 'asddas'),
(3, 'Samet Adsan', 'ssl sertifikası kurulumu', 'ogr.samet.adsan@ahievran.edu.tr', 'sdasda'),
(4, 'Samet Adsan', 'denemee', 'ogr.samet.adsan@ahievran.edu.tr', 'Sjjsjs');

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
  `slider_ad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_resim` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_url` text CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_sira` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

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
  MODIFY `etkinlik_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `hatali_giris_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  MODIFY `hedef_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratuvar`
--
ALTER TABLE `laboratuvar`
  MODIFY `lab_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `programlar`
--
ALTER TABLE `programlar`
  MODIFY `program_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soru_cevap`
--
ALTER TABLE `soru_cevap`
  MODIFY `soru_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
