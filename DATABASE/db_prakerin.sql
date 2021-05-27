-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 04:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_pengelola` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `nomer_admin` int(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_pengelola`, `nama_admin`, `email_admin`, `nomer_admin`, `alamat`) VALUES
(1, 'ss', 'ss', 2, 's');

-- --------------------------------------------------------

--
-- Table structure for table `dudi`
--

CREATE TABLE `dudi` (
  `id_dudi` int(100) NOT NULL,
  `id_guru` int(100) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_dudi` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `logo_dudi` varchar(100) DEFAULT NULL,
  `foto_dudi` varchar(100) DEFAULT NULL,
  `kepala_perusahaan` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `nama_pembimbing` varchar(100) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dudi`
--

INSERT INTO `dudi` (`id_dudi`, `id_guru`, `id_jurusan`, `nama_dudi`, `alamat`, `tentang`, `no_telepon`, `logo_dudi`, `foto_dudi`, `kepala_perusahaan`, `email`, `website`, `nama_pembimbing`, `lon`, `lat`, `create_at`) VALUES
(25, NULL, 1, 'tes', 'malang jawa timur\"\"', 'tes\"\"', '018123', 'file_1621840275.jpg', 'file_1621840253.jpg', NULL, 'hewo@hewo.com', NULL, 'uzi', '112.63183594', '-7.99123753', '2021-05-24 07:11:15'),
(37, NULL, 1, 'sdcs', '', '', '', 'file_1621839621.jpg', 'file_1621936320.PNG', NULL, '', NULL, 'JCKJBDCJ', '110.364917', '-7.8011945', '2021-05-25 09:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nip` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(100) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto_kegiatan` varchar(100) DEFAULT NULL,
  `kegiatan` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_siswa`, `tanggal`, `foto_kegiatan`, `kegiatan`, `create_at`) VALUES
(72, 151, '2021-05-26', 'file_1622029908.jpg', 'tes', '2021-05-26 11:51:48'),
(73, 151, '2021-05-26', 'file_1622029938.jpg', 'ngeng', '2021-05-26 11:52:18'),
(74, 151, '2021-05-26', 'file_1622029950.jpg', '', '2021-05-26 11:52:30'),
(75, 152, '2021-05-26', 'file_1622030166.jpg', 'tes', '2021-05-26 11:56:06'),
(76, 152, '2021-05-26', 'file_1622030182.PNG', 'najnaj', '2021-05-26 11:56:22'),
(77, 151, '2021-05-25', 'file_1622030838.jpg', 'ascac', '2021-05-26 12:07:18'),
(78, 151, '2021-05-25', 'file_1622030866.png', 'ddd', '2021-05-26 12:07:46'),
(79, 152, '2021-05-27', 'file_1622077743.jpg', 'mamamama', '2021-05-27 01:09:03');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `create_at`) VALUES
(1, 'REKAYASA PERANGKAT LUNAK', '2021-03-01 03:55:43'),
(2, 'TEKNIK JARINGAN', '2021-03-01 03:56:03'),
(3, 'TEKNIK KENDARAAN RINGAN', '2021-05-25 06:24:59'),
(4, 'TEKNIK BISNIS DAN SEPEDA MOTOR', '2021-05-25 06:25:23'),
(5, 'TEKNIK ELEKTRO INFORMASI', '2021-05-25 06:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(100) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `logo_kelas` varchar(500) DEFAULT NULL,
  `foto` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`, `logo_kelas`, `foto`, `create_at`) VALUES
(52, 2, 'XI TKJ 1', 'file_1617610922.jpg', 'file_1617610947.jpg', '2021-04-05 08:22:27'),
(53, 1, 'XI RPL 2', 'file_1617610970.jpg', 'file_1617610979.jpg', '2021-04-05 08:22:59'),
(54, 2, 'XI TKJ 2', 'file_1617611010.jpg', 'file_1621936249.jpg', '2021-05-25 09:50:49'),
(55, 1, 'XI RPL 3', 'file_1617611038.jpg', 'file_1617611049.jpg', '2021-04-05 08:24:09'),
(56, 2, 'XI TKJ 3', 'file_1617611069.jpg', 'file_1617611080.jpg', '2021-04-05 08:24:40'),
(57, 1, 'XI RPL 1', 'file_1617771267.jpg', 'file_1617771249.jpg', '2021-04-07 04:54:50');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(100) NOT NULL,
  `id_user` int(100) DEFAULT NULL,
  `judul_pengumuman` varchar(100) DEFAULT NULL,
  `tertuju` varchar(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `ctreate_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul_pengumuman`, `tertuju`, `tanggal`, `isi_pengumuman`, `ctreate_at`) VALUES
(12, NULL, 'adadadad', 'siswa', NULL, 'rfeferf', '2021-03-31 07:24:27'),
(16, NULL, 'sdf', 'siswa', NULL, 'eeeeefffffffff', '2021-03-31 07:24:38'),
(17, NULL, 's', 'guru', NULL, 'freeeeeeeeeeeeeeee', '2021-03-31 07:24:51');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `judul_pesan` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `judul_pesan`, `tanggal_pesan`, `isi_pesan`) VALUES
(1, 'Uzi', 'Terima Kasih', '2021-03-14', 'contoh Pesan,kesan,serta kritik dan saran untuk kakak kelas MOS\r\nPesan : Saya ingin berteirmakasih untuk kakak pendamping MOS yang sudah mendampingi dan membimbing saya dalam kegiatan MOS ini sehingga saya lebih mengenal lingkungan sekolah ini. \r\nKesan : Saya merasa terbimbing oleh kakak dan merasa aman karena kaka selalu mendampingi saya dan mengarahkan saya di lingkungan yang baru ini. \r\nKritik: Meskipun begitu kakak sepertinya sering tampak panik pasa masa orientasi dan seringkali memberikan pengumuman secara mendadak dan tiba-tiba\r\nSaran : mungkin sebaiknya kakak lebih tenang dan jangan merasa panik karena kakak sudah melakukan tugas kakak dengan baik dan sebaiknya jika ingin memberikan pengumuman jangan mendadak. Terimakasih kak\r\n\r\nPembahasan lebih lanjut\r\nPesan : merupakan isi yang ingin disampaikan kepada yang tertuju\r\nKesan : Hal-hal yang dialami dan dirasakan biasanya merupakan hal yang baik karena memberi kesan membekas\r\nKritik : Mengungkapkan hal-hal yang dianggap tidak sesuai, tidak berkenan atau tidak baik kepada yang tertuju. Ketika mengungkapkan kritik sebaiknya menggunakan bahasa yang sopan agar tidak menyakiti yang tertuju dan harus memiliki alasan yang logis dan objektif. \r\nSaran: Solusi atau penyelsaian masalah yang diberikan dan bersifat membangun dan jugamendidik\r\n\r\nSemoga jawaban ini dapat membantu yaa...\r\n\r\nKelas : 7 SMP\r\nMata pelajaran : Bahasa Indonesia\r\nKategori : Kritik\r\nKata kunci : Pesan, kesan, kritik, saran\r\nKode sesuai kurikulum KTSP : 7.1.9'),
(2, 'tes', 'judul', '2021-03-16', 'edfwedwe'),
(3, 'dita sari', 'untuk ceramah', '2021-03-08', 'hahahahahahahahahahahaha');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_kelasssss` int(11) DEFAULT NULL,
  `id_dudi` int(11) DEFAULT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `dudi` varchar(50) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) DEFAULT NULL,
  `masuk_p` varchar(30) NOT NULL,
  `keluar_p` varchar(30) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_kelasssss`, `id_dudi`, `nama_siswa`, `no_telepon`, `email`, `alamat`, `nisn`, `dudi`, `logo`, `jenis_kelamin`, `tempat_tanggal_lahir`, `masuk_p`, `keluar_p`, `create_at`) VALUES
(144, 52, NULL, 40, 'adni', NULL, NULL, NULL, '13', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '', '', '2021-05-25 03:32:06'),
(145, 54, NULL, 40, 'uzi', NULL, NULL, NULL, '21', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '', '', '2021-05-25 03:33:46'),
(148, 53, NULL, 28, 'uhuh', NULL, NULL, NULL, '234', '', 'file_1621935032.jpg', 'Laki Laki', NULL, '2021-05-06', '2021-06-03', '2021-05-25 09:30:32'),
(149, 52, NULL, 0, 'uzi', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '', '', '2021-05-25 09:54:18'),
(150, 52, NULL, 25, 'uzi', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '', '', '2021-05-25 09:54:28'),
(151, 53, NULL, 25, 'anton', NULL, NULL, NULL, '1111', '', 'file_1622026307.jpg', 'Laki Laki', NULL, '2021-05-01', '2021-05-27', '2021-05-26 10:51:47'),
(152, 52, NULL, 25, 'hani', NULL, NULL, NULL, '11', '', 'file_1622030046.jpg', 'Laki Laki', NULL, '2021-05-01', '2021-06-03', '2021-05-26 11:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE `tb_login` (
  `id_admin` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pengelola` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_admin`, `id_siswa`, `id_pengelola`, `username`, `password`, `level`) VALUES
(33, 146, 0, 'uzi', 'f2b545bd0099b1c89c3ef7acd0e4e1e50874bf74', 2),
(34, 0, 0, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(35, 0, 0, 'dani', '3f547476e0ce8e681ded188f0322a4d5e0d56ec4', 2),
(36, 147, 0, 'dani', '3f547476e0ce8e681ded188f0322a4d5e0d56ec4', 2),
(37, 148, 0, 'jhdhd', '41bfcbe4ece038f4d63cbeb8959a5e8360e11aab', 2),
(38, 149, 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 2),
(39, 150, 0, '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', 2),
(40, 151, 0, 'anton', '14deb5e5e417133e888bf47bb6a3555c9bb7d81c', 2),
(41, 152, 0, 'hani', 'b7b8646782b3b69308a94ae3e347d39130a6f434', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `id_guru` int(100) DEFAULT NULL,
  `id_siswa` int(100) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `pasword` varchar(50) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_pengelola`);

--
-- Indexes for table `dudi`
--
ALTER TABLE `dudi`
  ADD PRIMARY KEY (`id_dudi`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_kelas` (`id_kelasssss`,`id_dudi`),
  ADD KEY `id_dudi` (`id_dudi`),
  ADD KEY `id_kelas_2` (`id_kelasssss`),
  ADD KEY `id_dudi_2` (`id_dudi`),
  ADD KEY `id_kelas_3` (`id_kelasssss`),
  ADD KEY `id_kelas_4` (`id_kelas`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pengelola` (`id_pengelola`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_guru` (`id_guru`,`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dudi`
--
ALTER TABLE `dudi`
  MODIFY `id_dudi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
