-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 10:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_giris`
--

CREATE TABLE `admin_giris` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_sifre` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `akademik_personel`
--

CREATE TABLE `akademik_personel` (
  `personel_id` int(11) NOT NULL,
  `personel_isim_soyisim` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_fakülte` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_bölüm` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_ofis` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_telefon` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_email` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_video_url` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `personel_hakkında` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `akademik_personel`
--

INSERT INTO `akademik_personel` (`personel_id`, `personel_isim_soyisim`, `personel_fakülte`, `personel_bölüm`, `personel_ofis`, `personel_telefon`, `personel_email`, `personel_video_url`, `personel_hakkında`) VALUES
(1, 'Doç. Dr. Mustafa Yağcı(Bölüm Başkanı)\r\n', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-------', '--------', 'mustafayagci@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/dce4744b-51fe-4518-b580-ac14b49a524e'),
(2, 'Dr. Öğr. Üyesi Mustafa AKSU', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı	', '-----', '------', 'mustafa.aksu@ahievran.edu.tr', '', '#'),
(3, 'Dr.Öğr. Üyesi Gülsüm AKKUZU KAYA	', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '-----', '------', 'gulsum.akkuzukaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-7efdb36d-017f-43f3087a-000d'),
(4, 'Dr. Öğr. Üyesi Mehmet Ali YALÇINKAYA', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', 'mehmetyalcinkaya@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/d745db4d-28b4-430a-8fdd-4fb21681ebc0'),
(5, 'Dr. Öğr. Üyesi Murat IŞIK', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '-----', 'muratisik@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/e6bba358-b78c-4e0d-849c-90fac5d50f82'),
(6, 'Dr. Öğr. Üyesi Volkan GÜNEŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-------', 'volkan.gunes@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6afe0e72-016b-4f8d8475-0000'),
(7, 'Dr. Öğr. Üyesi Ayla KAYABAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '------', '------', '', '----'),
(8, 'Araş. Gör. Abdurrahman Yavuz ASLANTAŞ', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'a.aslantas@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-7121ae31-0012'),
(9, 'Araş. Gör. İbrahim ŞANLIALP', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Donanımı', '----', '------', 'ibrahim.sanlialp@ahievran.edu.tr\r\n', '', 'https://akademik.ahievran.edu.tr/personel/bbf6ed7e-c2d7-42f9-b064-54b23f3fae86'),
(10, 'Araş. Gör. Ahmet ÖZDİL', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '----', '----', 'ahmet.ozdil@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-68b92809-0168-db3a7c17-0001'),
(11, 'Araş. Gör. Ceren AKMAN', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '-----', '------', 'ceren.akman@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-6a96d815-016a-9b510e89-0001'),
(12, 'Araş. Gör. Sümeyye Sena ÜNALDI', 'Mühendislik-Mimarlık Fakültesi', 'Bilgisayar Yazılımı', '------', '-----', 'sena.unaldi@ahievran.edu.tr', '', 'https://akademik.ahievran.edu.tr/personel/cffb52c6-76cdd752-0177-710ccc80-0011');

-- --------------------------------------------------------

--
-- Table structure for table `ders_icerik`
--

CREATE TABLE `ders_icerik` (
  `dersicerik_id` int(11) NOT NULL,
  `dersicerik_url` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duyuru`
--

CREATE TABLE `duyuru` (
  `duyuru_id` int(11) NOT NULL,
  `duyuru_baslik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `duyuru_tarih` datetime NOT NULL,
  `duyuru_resim` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlik_id` int(11) NOT NULL,
  `etkinlik_baslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_icerik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resim` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkinda_id` int(11) NOT NULL,
  `hakkinda_baslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkinda_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
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
-- Table structure for table `hedeflerimiz`
--

CREATE TABLE `hedeflerimiz` (
  `hedef_id` int(11) NOT NULL,
  `hedef_icon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_baslik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `maps_url` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_email` char(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_telefon` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratuvar`
--

CREATE TABLE `laboratuvar` (
  `lab_id` int(11) NOT NULL,
  `lab_resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_ad` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mesaj`
--

CREATE TABLE `mesaj` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_isim_soyisim` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_konu` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_email` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `slider_ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_url` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `slider_sira` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `soru_cevap`
--

CREATE TABLE `soru_cevap` (
  `soru_id` int(11) NOT NULL,
  `soru_metin` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `cevap_metin` text COLLATE utf8mb4_turkish_ci NOT NULL
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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akademik_personel`
--
ALTER TABLE `akademik_personel`
  MODIFY `personel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ders_icerik`
--
ALTER TABLE `ders_icerik`
  MODIFY `dersicerik_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duyuru`
--
ALTER TABLE `duyuru`
  MODIFY `duyuru_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `etkinlik_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkinda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  MODIFY `hedef_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratuvar`
--
ALTER TABLE `laboratuvar`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `soru_cevap`
--
ALTER TABLE `soru_cevap`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
