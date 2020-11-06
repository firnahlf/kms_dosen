-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 02:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `anggota_grup`
--

CREATE TABLE `anggota_grup` (
  `id_anggota` int(10) NOT NULL,
  `id_grup` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_keilmuan`
--

CREATE TABLE `bidang_keilmuan` (
  `id_bk` int(10) NOT NULL,
  `nama_bk` varchar(50) NOT NULL,
  `deskripsi_bk` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidang_keilmuan`
--

INSERT INTO `bidang_keilmuan` (`id_bk`, `nama_bk`, `deskripsi_bk`) VALUES
(2, 'Teknologi Jaringan', ''),
(3, 'Sistem Informasi', ''),
(4, 'Rekayasa Perangkat Lunak', ''),
(5, 'Knowledge Management System', '');

-- --------------------------------------------------------

--
-- Table structure for table `daftar_penelitian`
--

CREATE TABLE `daftar_penelitian` (
  `id_penelitian` int(10) NOT NULL,
  `id_bk` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul_penelitian` varchar(50) NOT NULL,
  `kode_penelitian` varchar(255) NOT NULL,
  `jenis_penelitian` varchar(255) NOT NULL,
  `bidang_penelitian` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `publikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id_dokumen` int(10) NOT NULL,
  `id_user` int(10) NOT NULL,
  `judul_dokumen` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi_dokumen` varchar(255) NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_grup`
--

CREATE TABLE `dokumen_grup` (
  `id_dokumen_grup` int(10) NOT NULL,
  `id_grup` int(10) NOT NULL,
  `id_bk` int(10) NOT NULL,
  `judul_dokumen` varchar(50) NOT NULL,
  `file` varchar(255) NOT NULL,
  `deskripsi_dokumen` varchar(255) NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` int(10) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL,
  `alamat_fakultas` varchar(50) NOT NULL,
  `no_telepon` int(10) NOT NULL,
  `email_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(4, 'Prosedur', 'bagaimana prosedur penelitian? ', '', '2020-07-19 17:00:00'),
(6, 'Proposal Penelitian', 'bagaimana proposal penelitian terbaru?', '', '2020-11-04 17:00:00'),
(7, 'Proposal Penelitian', 'halo', '', '2020-11-04 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `forum_diskusi_grup`
--

CREATE TABLE `forum_diskusi_grup` (
  `id_forum_grup` int(10) NOT NULL,
  `id_grup` int(10) NOT NULL,
  `topik_diskusi` varchar(50) NOT NULL,
  `isi_diskusi` varchar(255) NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `grup_riset`
--

CREATE TABLE `grup_riset` (
  `id_grup` int(10) NOT NULL,
  `id_fakultas` int(10) NOT NULL,
  `id_prodi` int(10) NOT NULL,
  `id_bk` int(10) NOT NULL,
  `nama_grup` varchar(50) NOT NULL,
  `deskripsi_grup` varchar(255) NOT NULL,
  `tahun_grup` int(10) NOT NULL,
  `sk_grup` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grup_riset`
--

INSERT INTO `grup_riset` (`id_grup`, `id_fakultas`, `id_prodi`, `id_bk`, `nama_grup`, `deskripsi_grup`, `tahun_grup`, `sk_grup`) VALUES
(1, 0, 0, 0, 'Teknologi Informasi', 'ini adalah grup riset teknologi informasi', 2010, '45230');

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
(10, 3, 'Halo', 'admin', '2020-08-28 17:00:00'),
(11, 7, 'coba komentar', 'dosen', '2020-11-04 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_diskusi_grup`
--

CREATE TABLE `komentar_diskusi_grup` (
  `id_komentar_grup` int(10) NOT NULL,
  `id_forum_grup` int(10) NOT NULL,
  `isi_komentar` varchar(255) NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notulensi_rapat_grup`
--

CREATE TABLE `notulensi_rapat_grup` (
  `id_notulensi_grup` int(10) NOT NULL,
  `id_grup` int(10) NOT NULL,
  `judul_notulensi` varchar(50) NOT NULL,
  `isi_notulensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus_grup`
--

CREATE TABLE `pengurus_grup` (
  `id_pengurus` int(10) NOT NULL,
  `id_grup` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE `program_studi` (
  `id_prodi` int(10) NOT NULL,
  `nama_prodi` varchar(50) NOT NULL,
  `alamat_prodi` varchar(50) NOT NULL,
  `no_telepon` int(10) NOT NULL,
  `email_prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_dokumen`
--

CREATE TABLE `request_dokumen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_request` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_request` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_pembuatan` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_dokumen`
--

INSERT INTO `request_dokumen` (`id`, `judul_request`, `deskripsi_request`, `tgl_pembuatan`, `username`) VALUES
(2, 'Jurnal Kimia Valensi', ' wewewewewe', '2020-07-12 17:00:00', ''),
(3, 'Jurnal Kimia Valensi', ' q', '2020-07-19 17:00:00', 'yunisugiarti');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `program_studi` varchar(50) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `jenis_kelamin`, `jabatan`, `program_studi`, `fakultas`, `alamat`, `no_hp`, `email`, `username`, `password`, `level_user`) VALUES
(1, 'admin', 'wanita', 'admin', '-', '-', 'ciputat', '09684822749', 'admin@gmail.com', 'admin', 'admin123', 'admin'),
(2, 'wadek1', 'Pria', 'wakil dekan 1', '', '', 'Sawangan', '085893705258', 'wadek1@gmail.com', 'wadek1', 'wadek123', 'wadek'),
(3, 'dosen', 'Wanita', 'Dosen ', '', '', 'Sawangan', '085893705258', 'dosen@gmail.com', 'dosen', 'dosen123', 'Dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota_grup`
--
ALTER TABLE `anggota_grup`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indexes for table `bidang_keilmuan`
--
ALTER TABLE `bidang_keilmuan`
  ADD PRIMARY KEY (`id_bk`);

--
-- Indexes for table `daftar_penelitian`
--
ALTER TABLE `daftar_penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `dokumen_grup`
--
ALTER TABLE `dokumen_grup`
  ADD PRIMARY KEY (`id_dokumen_grup`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  ADD PRIMARY KEY (`id_forum`);

--
-- Indexes for table `forum_diskusi_grup`
--
ALTER TABLE `forum_diskusi_grup`
  ADD PRIMARY KEY (`id_forum_grup`);

--
-- Indexes for table `grup_riset`
--
ALTER TABLE `grup_riset`
  ADD PRIMARY KEY (`id_grup`);

--
-- Indexes for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar_diskusi_grup`
--
ALTER TABLE `komentar_diskusi_grup`
  ADD PRIMARY KEY (`id_komentar_grup`);

--
-- Indexes for table `notulensi_rapat_grup`
--
ALTER TABLE `notulensi_rapat_grup`
  ADD PRIMARY KEY (`id_notulensi_grup`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `request_dokumen`
--
ALTER TABLE `request_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota_grup`
--
ALTER TABLE `anggota_grup`
  MODIFY `id_anggota` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidang_keilmuan`
--
ALTER TABLE `bidang_keilmuan`
  MODIFY `id_bk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `daftar_penelitian`
--
ALTER TABLE `daftar_penelitian`
  MODIFY `id_penelitian` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id_dokumen` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dokumen_grup`
--
ALTER TABLE `dokumen_grup`
  MODIFY `id_dokumen_grup` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fakultas`
--
ALTER TABLE `fakultas`
  MODIFY `id_fakultas` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum_diskusi`
--
ALTER TABLE `forum_diskusi`
  MODIFY `id_forum` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum_diskusi_grup`
--
ALTER TABLE `forum_diskusi_grup`
  MODIFY `id_forum_grup` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grup_riset`
--
ALTER TABLE `grup_riset`
  MODIFY `id_grup` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar_diskusi`
--
ALTER TABLE `komentar_diskusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `komentar_diskusi_grup`
--
ALTER TABLE `komentar_diskusi_grup`
  MODIFY `id_komentar_grup` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notulensi_rapat_grup`
--
ALTER TABLE `notulensi_rapat_grup`
  MODIFY `id_notulensi_grup` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_studi`
--
ALTER TABLE `program_studi`
  MODIFY `id_prodi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_dokumen`
--
ALTER TABLE `request_dokumen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
