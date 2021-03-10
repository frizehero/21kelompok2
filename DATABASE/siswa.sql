-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Mar 2021 pada 03.28
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
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
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
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_dudi`, `nama_siswa`, `no_telepon`, `email`, `alamat`, `nisn`, `dudi`, `logo`, `jenis_kelamin`, `tempat_tanggal_lahir`, `create_at`) VALUES
(17, 20, NULL, 'QQQQQ', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-08 06:24:16'),
(18, 22, NULL, 'wwww', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-08 08:09:58'),
(19, 20, NULL, 'somad', NULL, NULL, NULL, '121231', 'wawa', 'file_1615167514.jpg', 'Laki Laki', NULL, '2021-03-08 08:07:08'),
(20, 23, NULL, 'Uzi', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-08 09:00:20'),
(21, 21, NULL, 'lllolo', NULL, NULL, NULL, '', '', 'kosong1.png', 'Jenis Kelamin Anda', NULL, '2021-03-08 09:00:29'),
(22, NULL, NULL, 'hjdvej', NULL, NULL, NULL, '23123', 'jksadaksjdb', 'kosong1.png', 'Laki Laki', NULL, '2021-03-08 09:08:40');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`,`id_dudi`),
  ADD KEY `id_dudi` (`id_dudi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
