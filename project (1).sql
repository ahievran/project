-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Mar 2022, 17:03:12
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `project`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin_giris`
--

CREATE TABLE `admin_giris` (
  `admin_id` int(11) NOT NULL,
  `admin_kadi` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `admin_sifre` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `akademik_personel`
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ders_icerik`
--

CREATE TABLE `ders_icerik` (
  `dersicerik_id` int(11) NOT NULL,
  `dersicerik_url` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `duyuru`
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
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlik_id` int(11) NOT NULL,
  `etkinlik_baslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_icerik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_tarih` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_resim` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `hakkinda_id` int(11) NOT NULL,
  `hakkinda_baslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkinda_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hedeflerimiz`
--

CREATE TABLE `hedeflerimiz` (
  `hedef_id` int(11) NOT NULL,
  `hedef_icon` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_icerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_baslik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
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
-- Tablo için tablo yapısı `laboratuvar`
--

CREATE TABLE `laboratuvar` (
  `lab_id` int(11) NOT NULL,
  `lab_resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_ad` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_aciklama` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
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
-- Tablo için tablo yapısı `slider`
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
-- Tablo için tablo yapısı `soru_cevap`
--

CREATE TABLE `soru_cevap` (
  `soru_id` int(11) NOT NULL,
  `soru_metin` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `cevap_metin` text COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin_giris`
--
ALTER TABLE `admin_giris`
  ADD PRIMARY KEY (`admin_id`);

--
-- Tablo için indeksler `akademik_personel`
--
ALTER TABLE `akademik_personel`
  ADD PRIMARY KEY (`personel_id`);

--
-- Tablo için indeksler `ders_icerik`
--
ALTER TABLE `ders_icerik`
  ADD PRIMARY KEY (`dersicerik_id`);

--
-- Tablo için indeksler `duyuru`
--
ALTER TABLE `duyuru`
  ADD PRIMARY KEY (`duyuru_id`);

--
-- Tablo için indeksler `etkinlikler`
--
ALTER TABLE `etkinlikler`
  ADD PRIMARY KEY (`etkinlik_id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`galeri_id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`hakkinda_id`);

--
-- Tablo için indeksler `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  ADD PRIMARY KEY (`hedef_id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Tablo için indeksler `laboratuvar`
--
ALTER TABLE `laboratuvar`
  ADD PRIMARY KEY (`lab_id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Tablo için indeksler `soru_cevap`
--
ALTER TABLE `soru_cevap`
  ADD PRIMARY KEY (`soru_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin_giris`
--
ALTER TABLE `admin_giris`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `akademik_personel`
--
ALTER TABLE `akademik_personel`
  MODIFY `personel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `ders_icerik`
--
ALTER TABLE `ders_icerik`
  MODIFY `dersicerik_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `duyuru`
--
ALTER TABLE `duyuru`
  MODIFY `duyuru_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `etkinlikler`
--
ALTER TABLE `etkinlikler`
  MODIFY `etkinlik_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `hakkinda_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `hedeflerimiz`
--
ALTER TABLE `hedeflerimiz`
  MODIFY `hedef_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `laboratuvar`
--
ALTER TABLE `laboratuvar`
  MODIFY `lab_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `soru_cevap`
--
ALTER TABLE `soru_cevap`
  MODIFY `soru_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
