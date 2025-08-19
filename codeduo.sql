-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 19 Ağu 2025, 04:03:42
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `codeduo`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `numara` varchar(15) NOT NULL,
  `hat_turu` enum('Faturalı','Kontörlü') NOT NULL,
  `mevcut_paket` varchar(100) DEFAULT NULL,
  `kalan_dk` int(11) DEFAULT 0,
  `kalan_sms` int(11) DEFAULT 0,
  `kalan_gb` decimal(5,2) DEFAULT 0.00,
  `harcanan_dk` int(11) DEFAULT 0,
  `harcanan_sms` int(11) DEFAULT 0,
  `harcanan_gb` decimal(5,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `kalan_gun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `adi`, `soyadi`, `numara`, `hat_turu`, `mevcut_paket`, `kalan_dk`, `kalan_sms`, `kalan_gb`, `harcanan_dk`, `harcanan_sms`, `harcanan_gb`, `created_at`, `updated_at`, `kalan_gun`) VALUES
(1, 'Ayşe', 'Yılmaz', '05531234567', 'Faturalı', 'Genç Tarifesi', 350, 500, 8.50, 150, 100, 1.50, '2025-08-18 21:12:38', '2025-08-18 23:16:18', 3),
(2, 'Elif', 'Kara', '05349876543', 'Kontörlü', 'Standart Paket', 200, 300, 5.00, 100, 50, 2.00, '2025-08-18 21:12:38', '2025-08-18 23:16:25', 7),
(3, 'Ahmet', 'Demir', '05071234567', 'Faturalı', 'Süper Paket', 400, 1000, 12.00, 200, 50, 3.00, '2025-08-18 21:12:38', '2025-08-18 23:16:31', 10),
(4, 'Mehmet', 'Çelik', '05429876543', 'Kontörlü', 'Ekonomi Paket', 150, 200, 4.00, 80, 30, 1.00, '2025-08-18 21:12:38', '2025-08-18 23:16:38', 30);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `paket_adi` varchar(100) NOT NULL,
  `dakika` int(11) NOT NULL,
  `sms` int(11) NOT NULL,
  `internet` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `paket`
--

INSERT INTO `paket` (`id`, `paket_adi`, `dakika`, `sms`, `internet`) VALUES
(1, 'Genç Tarifesi', 750, 1000, 10.00),
(2, 'Kontörlü Ekonomi 4GB', 500, 250, 4.00),
(3, 'Süper Paket', 600, 1500, 15.00),
(4, 'Ekonomi Paket', 1000, 300, 10.00),
(5, 'Standart Paket', 500, 500, 7.00);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
