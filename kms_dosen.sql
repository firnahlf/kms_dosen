-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2020 at 01:18 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kms_dosen`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_penelitian`
--

CREATE TABLE `dokumen_penelitian` (
  `id_dokumen` bigint(20) UNSIGNED NOT NULL,
  `nama_dokumen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_dokumen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dokumen_penelitian`
--

INSERT INTO `dokumen_penelitian` (`id_dokumen`, `nama_dokumen`, `kategori`, `deskripsi_dokumen`, `file`, `tgl_pembuatan`, `username`) VALUES
(16, 'jurnal naon', 'Jurnal Kimia Valensi', 'wwwww', '466-849-1-SM.pdf', '2020-07-19 17:00:00', 'yunisugiarti'),
(17, 'Jurnal Kimia', 'Jurnal Kimia Valensi', 'wwwww', '25-105-1-PB.pdf', '2020-07-19 17:00:00', 'yunisugiarti'),
(18, 'Jurnal apa', 'Jurnal Kimia Valensi', 'wwwww', '25-105-1-PB.pdf', '2020-07-19 17:00:00', 'yunisugiarti');

-- --------------------------------------------------------

--
-- Table structure for table `forum_diskusi`
--

CREATE TABLE `forum_diskusi` (
  `id_forum` bigint(20) UNSIGNED NOT NULL,
  `judul_diskusi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_diskusi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forum_diskusi`
--

INSERT INTO `forum_diskusi` (`id_forum`, `judul_diskusi`, `isi_diskusi`, `user`, `tgl_pembuatan`) VALUES
(3, 'Proposal Penelitian', 'ini contoh proposal', 'yunisugiarti', '2020-07-19 17:00:00'),
(4, 'Prosedur', 'bagaimana prosedur penelitian? ', '', '2020-07-19 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`) VALUES
(1, 'Jurnal Kimia Valensi', 'urnal Kimia Valensi is a biannual and peer-reviewed open access journal published by Department of Chemistry, Faculty of Science and Technology UIN Syarif Hidayatullah Jakarta.');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_diskusi`
--

CREATE TABLE `komentar_diskusi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_forum` int(11) NOT NULL,
  `isi_komentar` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komentar_diskusi`
--

INSERT INTO `komentar_diskusi` (`id`, `id_forum`, `isi_komentar`, `username`, `tgl_pembuatan`) VALUES
(3, 4, '', 'yunisugiarti', '2020-08-16 17:00:00'),
(4, 4, 'test', 'yunisugiarti', '2020-08-16 17:00:00'),
(5, 4, 'test', 'yunisugiarti', '2020-08-16 17:00:00'),
(6, 3, 'bagaimana contohnya?', 'yunisugiarti', '2020-08-22 17:00:00'),
(7, 3, 'test', 'yunisugiarti', '2020-08-22 17:00:00'),
(8, 3, 'Halo', 'admin', '2020-08-28 17:00:00'),
(9, 3, 'Halo', 'admin', '2020-08-28 17:00:00'),
(10, 3, 'Halo', 'admin', '2020-08-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_07_08_130444_create_dokumen_penelitian_table', 2),
(4, '2020_07_08_130518_create_kategori_table', 2),
(5, '2020_07_08_130545_create_request_dokumen_table', 2),
(6, '2020_07_08_130618_create_respon_request_table', 2),
(7, '2020_07_08_130722_create_forum_diskusi_table', 2),
(8, '2020_07_08_130750_create_komentar_diskusi_table', 2),
(9, '2020_07_08_130816_create_pesan_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pengirim` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penerima` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_pesan` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `pengirim`, `penerima`, `isi_pesan`, `tgl_pembuatan`) VALUES
(1, 'yunisugiarti', 'puslitpen uin jakarta', 'tidak bisa upload dokumen', '2020-08-25 17:00:00'),
(2, 'admin', 'yunisugiarti', 'sudah bisa bu', '2020-08-29 10:13:35'),
(3, 'yunisugiarti', 'Yuni Sugiarti', 'sudah bisa bu', '2020-08-28 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `request_dokumen`
--

CREATE TABLE `request_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_request` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_dokumen`
--

INSERT INTO `request_dokumen` (`id`, `kategori`, `deskripsi_request`, `tgl_pembuatan`, `username`) VALUES
(2, 'Jurnal Kimia Valensi', ' wewewewewe', '2020-07-12 17:00:00', ''),
(3, 'Jurnal Kimia Valensi', ' q', '2020-07-19 17:00:00', 'yunisugiarti');

-- --------------------------------------------------------

--
-- Table structure for table `respon_request`
--

CREATE TABLE `respon_request` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topik_diskusi`
--

CREATE TABLE `topik_diskusi` (
  `id` int(11) NOT NULL,
  `nama_topik` varchar(250) NOT NULL,
  `tgl_pembuatan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_lengkap`, `jenis_kelamin`, `jabatan`, `program_studi`, `fakultas`, `alamat`, `no_hp`, `email`, `username`, `password`, `level_user`) VALUES
(1, 'Yuni Sugiarti', 'Perempuan', 'Dosen', 'Sistem Informasi', 'Fakultas Sains dan Teknologi', 'Sawangan, Depok', '+6282124919622', 'yuni.sugiarti@uinjkt.ac.id', 'yunisugiarti', 'yuni123', 'Dosen'),
(3, 'A\'ang Subiyakto, M.Kom.', 'L', 'Kepala Prodi', 'Sistem Informasi', 'Fakultas Sains dan Teknologi', 'Ciputat', '08588858558', 'aang.subiyakto@uinjkt.ac.id', 'aangsubiyakto', 'aang123', 'Kaprodi'),
(4, 'Meinarini Catur Utami', 'Wanita', 'Dosen ', 'Sistem Informasi', 'Fakultas Sains dan Teknologi (FST)', 'Sawangan', '098678654467', 'meinarini.catur@uinjkt.ac.id', 'meidosen', 'mei123', 'Dosen'),
(5, 'puslitpen uin jakarta', 'Pria', 'admin', 'Program Studi', 'Fakultas', 'ciputat timur', '08937288472', 'admin@gmail.com', 'admin', 'admin123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen_penelitian`
--
ALTER TABLE `dokumen_penelitian`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_dokumen`
--
ALTER TABLE `request_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `respon_request`
--
ALTER TABLE `respon_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topik_diskusi`
--
ALTER TABLE `topik_diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_penelitian`
--
ALTER TABLE `dokumen_penelitian`
  MODIFY `id_dokumen` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  MODIFY `id_forum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request_dokumen`
--
ALTER TABLE `request_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `respon_request`
--
ALTER TABLE `respon_request`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topik_diskusi`
--
ALTER TABLE `topik_diskusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
