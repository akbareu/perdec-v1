-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.byetcluster.com
-- Generation Time: Feb 09, 2021 at 04:44 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_27446078_akbareu`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `id_project` int(11) NOT NULL,
  `judul_gambar` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `id_project`, `judul_gambar`, `gambar`, `tanggal`) VALUES
(4, 5, 'data_project', 'dashboard.png', '2021-01-11 12:30:40'),
(3, 5, 'Login', 'login.png', '2021-01-11 12:30:06'),
(5, 5, 'dashboard', 'dashboard2.png', '2021-01-11 12:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(255) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(11) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `urutan`, `tanggal_update`) VALUES
(5, 'website', 'Website', 1, '2021-01-02 09:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int(11) NOT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  `keywords` text,
  `metatag` text,
  `deskripsi` text,
  `background` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `tagline`, `keywords`, `metatag`, `deskripsi`, `background`, `foto`, `icon`, `tanggal_update`) VALUES
(4, '', 'akbareu, http://akbareu.rf.gd, akbareu.rf.gd, akbar', 'Akbar Website 2021', 'Sebuah website yang ia ciptakan ketika dirinya meratapi kehidupan senangnya menganggur :(', 'Butterscotch', 'avataaars.png', 'Tulips.jpg', '2021-01-15 05:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `no_hp` text NOT NULL,
  `pesan` longtext NOT NULL,
  `tanggal_kirim` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `no_hp`, `pesan`, `tanggal_kirim`) VALUES
(24, 'Akbar Maulana', 'akbarbareu@gmail.com', '-', 'Hai !,Terima kasih telah menggunakan source code \"Personal Website\" yang saya buat ini semoga source code ini membantu :)', '2021-01-15 00:33:23');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode_project` varchar(20) NOT NULL,
  `judul_project` varchar(255) NOT NULL,
  `slug_project` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status_project` varchar(20) NOT NULL,
  `tanggal_post` datetime NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `id_user`, `id_kategori`, `kode_project`, `judul_project`, `slug_project`, `keterangan`, `gambar`, `status_project`, `tanggal_post`, `tanggal_update`) VALUES
(5, 4, 5, 'PERDEC#20', 'Personal Website v1.0', 'personal-website-v10-perdec20', '<p>Website ini dibuat oleh <em>Akbar Maulana</em><br />\r\nKomponen yang ia gunakan dalam pengerjaannya yaitu :<br />\r\n<strong>HTML</strong>,<strong>CSS</strong>,<strong>jQuery</strong>,<strong>Bootstrap v4</strong>,dan <strong>Codeigniter v3</strong>.</p>\r\n\r\n<p>Template :<br />\r\n<a href=\"https://startbootstrap.com/theme/freelancer\">Freelancer </a><br />\r\n<a href=\"https://startbootstrap.com/template/sb-admin\">Admin</a></p>\r\n', 'akbareu_rf_gd_.png', 'Ready', '2021-01-03 04:43:25', '2021-01-11 12:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bio` varchar(255) DEFAULT NULL,
  `profesi` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `github` varchar(255) DEFAULT NULL,
  `alamat` varchar(300) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(64) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `bio`, `profesi`, `email`, `instagram`, `facebook`, `github`, `alamat`, `username`, `password`, `akses_level`, `tanggal_update`) VALUES
(4, 'Akbar Maulana', '<p>Hai! Selamat datang di website sayaaa :)</p>\r\n', 'Web Developer', 'akbarbareu@gmail.com', 'https://instagram.com/akbareu_', 'https://facebook.com/bunkoha', 'https://github.com/akbareu', 'Jln Tanjung 04 no 20 Perumahan Rancaekek Kencana', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin', '2021-01-26 05:46:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD UNIQUE KEY `kode_project` (`kode_project`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
