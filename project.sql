-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 15 Mar 2022, 00:35:06
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
-- Tablo için tablo yapısı `dersicerikleri`
--

CREATE TABLE `dersicerikleri` (
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
  `duyuru_resim` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

CREATE TABLE `etkinlikler` (
  `etkinlik_id` int(11) NOT NULL,
  `etkinlik_baslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_icerik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_altbaslik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `etkinlik_alticerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
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
  `hakkinda_baslik` char(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkinda_icerik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hakkinda_alticerik` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hedeflerimiz`
--

CREATE TABLE `hedeflerimiz` (
  `hedef_id` int(11) NOT NULL,
  `hedef_resim` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_icerik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_alticerik` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `hedef_baslik` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `maps_url` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `iletisim_adres` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
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
  `lab_ad` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lab_aciklama` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `akademik_personel`
--
ALTER TABLE `akademik_personel`
  ADD PRIMARY KEY (`personel_id`);

--
-- Tablo için indeksler `dersicerikleri`
--
ALTER TABLE `dersicerikleri`
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
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `akademik_personel`
--
ALTER TABLE `akademik_personel`
  MODIFY `personel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `dersicerikleri`
--
ALTER TABLE `dersicerikleri`
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
