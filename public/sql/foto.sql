-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 20 Nov 2023 pada 04.54
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-profile`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto`
--

CREATE TABLE `foto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `foto`
--

INSERT INTO `foto` (`id`, `judul`, `keterangan`, `pdf`, `gambar`, `created_at`, `updated_at`) VALUES
(5, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'bt6SWK7wOYsxnHhxdoTEO0lSN0blFRWKYQCN5Ar6.pdf', 'TbqPJXLQPuX8qBo1p8ZMXYNMs3TEwpRQJ5PvN5jg.png', '2023-11-19 06:20:59', '2023-11-19 06:22:24'),
(6, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'pTlN2kdffspifWBljGsMuxXeInODzqTme8cVzSfU.pdf', 'ot59HNT0OfchgYwGTmxyDBKIx1BtvfInPrIxnDrV.png', '2023-11-19 06:22:42', '2023-11-19 06:22:42'),
(7, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'pTXPoCXfqPMTThpmFL2AgEaYcZi9A9AsjBSEu3xz.pdf', 'zZvynJdPq5pTbyUhHkOkoRBM2dyvHygMmnj3mtXR.png', '2023-11-19 06:23:00', '2023-11-19 06:23:00'),
(8, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'Xwn4JZLWwgpymfwFYwfpsZveGz5p20XBDcW8OZgY.pdf', 'oyN7j6aKkgW2B9ZNrTnk687xVZUPUmn6PViOZoLw.svg', '2023-11-19 06:23:21', '2023-11-19 06:23:21'),
(9, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'dDn0vl95Vqi5anyL90ZcYNgGzKcGBMfp4JJOebgX.pdf', 'ibaFSerG1eRL42QtPmzUn7m6c5AEaPUS32zrf8D4.png', '2023-11-19 06:23:35', '2023-11-19 06:23:35'),
(10, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'ZwM7dWx5wEXrpwuWf9yvgHMuo8v0ukU8sT4AbGfF.pdf', 'VLmlXMjSOK6FDvXOtdYXISOrrRSyUQh6VSgpKlP9.png', '2023-11-19 06:23:49', '2023-11-19 06:23:49'),
(11, 'Dasar Pemrograman 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem quae qui tempore perspiciatis deleniti debitis error sunt fugiat cumque temporibus voluptate explicabo rem a labore nisi, odit rerum, nam neque.\r\nLorem ipsum, dolor sit amet consectetur adipisicing elit. Esse totam id necessitatibus quis ex vero voluptate dignissimos natus eum modi itaque est maxime excepturi iusto, libero non labore, suscipit saepe?', 'iB1Kxvk61xAcqAJFMPZ3wbE6WVb85AO0cMfjDGNv.pdf', 'UNcAia4MPD0aBuKp73ZHzZQngNJwNRG6Hp0nItv4.png', '2023-11-19 06:24:03', '2023-11-19 06:24:03');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `foto`
--
ALTER TABLE `foto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
