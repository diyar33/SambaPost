-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ağu 2020, 17:29:21
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sambapost`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `firmalar`
--

CREATE TABLE `firmalar` (
  `id` int(11) NOT NULL,
  `isim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `temsilci` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(11) COLLATE utf8_turkish_ci NOT NULL,
  `ip` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_tarih` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `firmalar`
--

INSERT INTO `firmalar` (`id`, `isim`, `temsilci`, `telefon`, `ip`, `kayit_tarih`) VALUES
(1, 'Diyar', 'Diyar Aydın', '05532690409', '192168.1112345647897', '2020-08-23 19:08:33'),
(2, 'Nalannnnn', 'Nalan Aydın', '05532690409', '192.168.1.1', '2020-08-23 19:10:01'),
(3, 'Diyar Aydın', 'Diyar Aydın', '05394490565', '192.168.2.1', '2020-08-23 19:14:23'),
(4, 'Diyar Aydın', 'Yüsra', '05394490565', '192.168.2.1', '2020-08-23 19:27:01'),
(5, 'Diyar Aydın', 'Diyar Aydın', '05394490565', '192.168.2.11111111', '2020-08-23 19:35:43'),
(6, 'Diyar Aydın', 'Diyar Aydın', '05394490565', '192.168.2.1', '2020-08-23 19:39:33'),
(7, 'Diyar Aydın', 'Yüsra', '05532690409', '192.168.1.1', '2020-08-23 19:42:10'),
(8, 'Diyar', 'Diyar Aydın', '2147483647', '192168.11', '2020-08-23 23:01:23'),
(9, 'asda', 'Diyar ', 'asda', 'asda', '2020-08-23 23:03:30'),
(10, 'Diyar ', 'Yüsra', '2518', '192168.11', '2020-08-23 23:09:14'),
(11, 'asdasdasd', '1215646', 'asd', 'asdasd', '2020-08-23 23:16:05'),
(15, 'Diyar Aydın', 'diyar', 'asd', 'asdasd', '2020-08-23 23:48:20'),
(16, 'sad', 'asda', 'afasd', 'fgdsrgd', '2020-08-24 00:03:02'),
(17, 'Diyar Aydın', 'Diyar Aydın', '05394490565', '192.168.2.1', '2020-08-24 00:07:52'),
(18, 'yeni', 'yeni', 'tyei', 'yeni', '2020-08-24 00:49:46'),
(19, 'Diyar Aydın', 'Diyar Aydın', '05532690409', '192.168.1.11111111111111111111111111111111111', '2020-08-24 00:52:32');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullanici_ad` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `isim` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `kayit_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `guvenlik_soru` text COLLATE utf8_turkish_ci DEFAULT NULL,
  `guvenlik_cevap` text COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici_ad`, `kullanici_sifre`, `isim`, `kayit_tarih`, `guvenlik_soru`, `guvenlik_cevap`) VALUES
(1, 'diyar', '12345', 'Diyar Aydın ', '2020-08-23 19:50:28', 'İlk Evcil Hayvanımın Adı', 'kaşar'),
(2, 'yusra', '123456', 'Yüsra Dede', '2020-08-23 19:51:47', 'İlkokul Numaram', '1817');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `firmalar`
--
ALTER TABLE `firmalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `firmalar`
--
ALTER TABLE `firmalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
