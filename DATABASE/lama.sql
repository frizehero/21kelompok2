-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2021 pada 05.43
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

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
  `alamat` varchar(50) DEFAULT NULL,
  `tentang` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(12) DEFAULT NULL,
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
(1, 1, 1, 'Hummasoft', 'malang', 'bagus', '1', NULL, 'uzi', NULL, NULL, NULL, '2021-03-01 03:55:00'),
(2, 2, 2, 'kodesoft', 'malang', 'syfuasvd', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-01 03:55:14'),
(3, NULL, 1, 'tes', NULL, NULL, '232', NULL, NULL, NULL, NULL, NULL, '2021-03-01 04:22:12'),
(4, NULL, 2, 'uzi', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, '2021-03-01 04:33:09'),
(5, NULL, 1, 'a', 'malang', NULL, '231', NULL, NULL, NULL, 'email@email.com', NULL, '2021-03-01 04:35:45'),
(6, NULL, 1, 'tes', 'malang', NULL, '12', 'file_1614573722.png', NULL, NULL, 'email@email.com', NULL, '2021-03-01 04:42:03');

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
  `id_siswa` int(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto_kegiatan` varchar(100) DEFAULT NULL,
  `kegiatan` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `id_jurusan` int(100) DEFAULT NULL,
  `nama_kelas` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(100) NOT NULL,
  `id_user` int(100) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `ctreate_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_dudi` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nis` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `id_kelas`, `id_dudi`, `nama`, `no_telepon`, `email`, `alamat`, `nis`, `foto`, `jenis_kelamin`, `tempat_tanggal_lahir`, `create_at`) VALUES
(1, 1, 1, 'uzi', '081', 'uzi', 'malang', '1', 'uzi.jpg', 'L', '22-Feb', '2021-03-01 03:04:39'),
(2, 2, 2, 'dafi', '11', 'uziuxi', NULL, NULL, NULL, NULL, NULL, '2021-03-01 03:40:59');

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
  ADD UNIQUE KEY `id_siswa` (`id_siswa`);

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
  ADD UNIQUE KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `id_kelas` (`id_kelas`,`id_dudi`),
  ADD KEY `id_dudi` (`id_dudi`);

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
  MODIFY `id_dudi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
