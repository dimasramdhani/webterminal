-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2019 pada 20.14
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobaterminal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwalbis`
--

CREATE TABLE `jadwalbis` (
  `jadwal_id` int(11) NOT NULL,
  `jadwal_terminal` varchar(30) NOT NULL,
  `jadwal_singgah` time NOT NULL,
  `jadwal_pergi` time NOT NULL,
  `jadwal_keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwalbis`
--

INSERT INTO `jadwalbis` (`jadwal_id`, `jadwal_terminal`, `jadwal_singgah`, `jadwal_pergi`, `jadwal_keterangan`) VALUES
(1, 'Terminal Cileungsi', '05:00:00', '08:00:00', 'BIS AC 48 SEAT\r\nNO.POL D.3333.AC'),
(2, 'Ter.bojonegoro', '00:00:00', '15:00:00', 'BIS 1'),
(3, 'TERMINAL TEGAL', '20:35:00', '20:40:00', 'BIS AC');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `nohp` text COLLATE utf8mb4_unicode_ci,
  `alamat` text COLLATE utf8mb4_unicode_ci,
  `updated_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` text COLLATE utf8mb4_unicode_ci,
  `kuota` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `nama`, `email`, `nohp`, `alamat`, `updated_at`, `created_at`, `tarif`, `kuota`) VALUES
(30, 'Terminal Bojonegoro', '12.10', '12.10', 'MGI', '2019-04-21 10:41:35', '2019-04-21 10:41:35', 'Rp.20.000', '40'),
(31, 'TERMINAL PURWODADI', '15.35', NULL, 'Sumber Kencono', '2019-04-21 10:56:07', '2019-04-21 10:56:07', 'Rp.30.000', '40'),
(32, 'Terminal Tegal', '20.40', NULL, 'MGI', '2019-04-21 10:58:22', '2019-04-21 10:58:22', 'Rp.50.000', '40'),
(33, 'Terminal Pekalongan', '18.00', NULL, 'Sumber Kencono No.35', '2019-04-21 11:01:00', '2019-04-21 11:01:00', 'Rp.20.000', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('vapersinfo.dev@gmail.com', '$2y$10$KJPEKLpf0S3f9EPC3it23OsUH7MgB4k0PU9gy/JhRiALdwhvAQjoe', '2019-04-10 04:51:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'adminadmin@gmail.com', '$2y$10$05bEWbZMNrV2AAlut.UjdeKjhKZlcAZaFbJUA.noMAN/RwNz8ZmQK', 'JQihCFPSNPkwLNBTbVZHUAnYc5iRYaWz9embSrEMZ3wGcghns73PH0sPDXbi', '2019-04-16 08:54:22', '2019-04-16 08:54:22'),
(2, 'domas', 'fauziah_27@yahoo.com', '$2y$10$ysDCcmExlsBFrEm7Cp38ueVui7pqJ8h1OeYl0pjNptjmJGUWFGiWG', NULL, '2019-05-26 10:54:47', '2019-05-26 10:54:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwalbis`
--
ALTER TABLE `jadwalbis`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwalbis`
--
ALTER TABLE `jadwalbis`
  MODIFY `jadwal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
