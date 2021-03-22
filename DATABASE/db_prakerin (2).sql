-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2021 pada 04.36
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.4

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
-- Struktur dari tabel `dudi`
--

CREATE TABLE `dudi` (
  `id_dudi` int(100) NOT NULL,
  `id_guru` int(100) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_dudi` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `tentang` varchar(500) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `kepala_perusahaan` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dudi`
--

INSERT INTO `dudi` (`id_dudi`, `id_guru`, `id_jurusan`, `nama_dudi`, `alamat`, `tentang`, `no_telepon`, `logo`, `foto`, `kepala_perusahaan`, `email`, `website`, `create_at`) VALUES
(6, NULL, 1, 'CV Hummasoft', 'Perum Permata Regency 1 Blok 10/28.\r\nPerum Gpa, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152', ' merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology) yang memiliki beberapa divisi layanan, diantaranya: Software Development (Website Application, Desktop Application, and Mobile Application), IT Course, IT Training, IT Research, and IT Services. Hummasoft berdiri sejak 21 Mei 2013. Perusahaan Hummasoft ini dibawah naungan badan usaha yang bernama Hummasoft Komputindo dan kemudian beralih menjadi Hummasoft Technology pada Oktober 2019.', '0821 3256 0566', 'file_1614573722.png', NULL, NULL, 'info@hummasoft.com', NULL, '2021-03-10 03:37:35'),
(8, NULL, 1, 'dadad', NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, '2021-03-10 03:20:32'),
(9, NULL, 2, 'angon data', NULL, NULL, NULL, NULL, NULL, NULL, 'angon@angon.com', NULL, '2021-03-10 03:39:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
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
-- Struktur dari tabel `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(100) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `foto_kegiatan` varchar(100) DEFAULT NULL,
  `kegiatan` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_siswa`, `tanggal`, `foto_kegiatan`, `kegiatan`, `create_at`) VALUES
(1, 8, '2021-03-10', 'sdfsdf', 'sdfsdf', '2021-03-10 08:11:51'),
(2, 4, '2021-03-04', '12', '211', '2021-03-10 08:15:57'),
(10, 4, '2021-03-04', 'rgdg', 'rgd', '2021-03-10 08:16:02'),
(12, 9, '2021-03-04', '23423', 'efwfw', '2021-03-10 08:10:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(100) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama`, `create_at`) VALUES
(1, 'REKAYASA PERANGKAT LUNAK', '2021-03-01 03:55:43'),
(2, 'TEKNIK JARINGAN', '2021-03-01 03:56:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
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
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `id_jurusan`, `nama_kelas`, `logo_kelas`, `foto`, `create_at`) VALUES
(1, 1, 'X', 'file_1616126078.jpg', 'file_1616136331.png', '2021-03-19 08:06:34'),
(2, 2, 'XI ', 'file_1616141210.png', 'file_1616136495.jpg', '2021-03-19 08:07:09'),
(38, 0, 'ff', 'kosong1.png', '', '2021-03-19 07:16:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(100) NOT NULL,
  `id_user` int(100) DEFAULT NULL,
  `judul_pengumuman` varchar(100) NOT NULL,
  `tertuju` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `ctreate_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul_pengumuman`, `tertuju`, `tanggal`, `isi_pengumuman`, `ctreate_at`) VALUES
(3, NULL, 'sefes', 'siswa', NULL, 'setest', '2021-03-19 09:44:02'),
(4, NULL, 'd', 'siswa', NULL, '', '2021-03-19 09:47:44'),
(5, NULL, 'ygvytftyf', 'guru', NULL, 'lakaf', '2021-03-19 09:53:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `judul_pesan` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `isi_pesan` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `judul_pesan`, `tanggal_pesan`, `isi_pesan`) VALUES
(1, 'dheiudh', 'wedwedwe', '2021-03-14', 'wefwefwef'),
(2, 'tes', 'judul', '2021-03-16', 'edfwedwe'),
(3, 'dita sari', 'untuk ceramah', '2021-03-08', 'hahahahahahahahahahahaha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_dudi` int(11) DEFAULT NULL,
  `id_jurusan` int(11) NOT NULL,
  `nama_siswa` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nisn` varchar(30) DEFAULT NULL,
  `dudi` varchar(50) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_dudi`, `id_jurusan`, `nama_siswa`, `no_telepon`, `email`, `alamat`, `nisn`, `dudi`, `logo`, `jenis_kelamin`, `tempat_tanggal_lahir`, `create_at`) VALUES
(4, 22, 6, 0, 'QQQQQ', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-19 02:39:50'),
(9, 22, 8, 0, 'wwww', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-10 06:35:28'),
(20, 2, NULL, 0, 'Uzi', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-16 05:48:03'),
(35, 0, NULL, 0, 'es', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-19 08:16:14'),
(36, 0, NULL, 0, 'd', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-19 08:19:35'),
(37, 2, NULL, 0, 'w', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-19 08:24:22'),
(41, 1, NULL, 0, 'Uziws', NULL, NULL, NULL, '', '', 'file_1616147516.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 03:34:17'),
(42, 1, NULL, 0, '12121', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 01:21:14'),
(43, NULL, NULL, 0, 'w', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 01:28:54'),
(44, NULL, NULL, 0, 'w', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 01:29:17'),
(45, NULL, NULL, 0, 'wqeqweqw', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 01:29:36'),
(46, NULL, NULL, 0, 'ddd', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-22 01:29:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
--

CREATE TABLE `tb_login` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_admin`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Somad', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'uzi', 'uzi', 'f2b545bd0099b1c89c3ef7acd0e4e1e50874bf74', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Indeks untuk tabel `dudi`
--
ALTER TABLE `dudi`
  ADD PRIMARY KEY (`id_dudi`),
  ADD UNIQUE KEY `id_guru` (`id_guru`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`,`id_dudi`),
  ADD KEY `id_dudi` (`id_dudi`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_guru` (`id_guru`,`id_siswa`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dudi`
--
ALTER TABLE `dudi`
  MODIFY `id_dudi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
