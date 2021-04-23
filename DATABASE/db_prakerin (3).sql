-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Apr 2021 pada 08.14
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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_pengelola` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `nomer_admin` int(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_pengelola`, `nama_admin`, `email_admin`, `nomer_admin`, `alamat`) VALUES
(1, 'ss', 'ss', 2, 's');

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
  `logo_dudi` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `kepala_perusahaan` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dudi`
--

INSERT INTO `dudi` (`id_dudi`, `id_guru`, `id_jurusan`, `nama_dudi`, `alamat`, `tentang`, `no_telepon`, `logo_dudi`, `foto`, `kepala_perusahaan`, `email`, `website`, `create_at`) VALUES
(6, NULL, 1, 'Hummasoft.', NULL, ' merupakan sebuah perusahaan yang bergerak dibidang IT (Information Technology) yang memiliki beberapa divisi layanan, diantaranya: Software Development (Website Application, Desktop Application, and Mobile Application), IT Course, IT Training, IT Research, and IT Services. Hummasoft berdiri sejak 21 Mei 2013. Perusahaan Hummasoft ini dibawah naungan badan usaha yang bernama Hummasoft Komputindo dan kemudian beralih menjadi Hummasoft Technology pada Oktober 2019.', NULL, 'file_1614573722.png', NULL, NULL, NULL, NULL, '2021-04-23 03:24:34'),
(9, NULL, 0, NULL, NULL, NULL, NULL, 'file_1614573722.png', NULL, NULL, NULL, NULL, '2021-04-23 03:14:57'),
(11, NULL, 2, 'Lalala.', NULL, NULL, NULL, 'file_1618977868.png', NULL, NULL, NULL, NULL, '2021-04-23 03:24:41');

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
  `kegiatan` text DEFAULT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_siswa`, `tanggal`, `foto_kegiatan`, `kegiatan`, `create_at`) VALUES
(37, 57, '2021-04-06', 'kosong1.png', NULL, '2021-04-23 02:30:30'),
(38, 57, '2021-04-23', 'file_1619143270.jpg', 'aaaaa', '2021-04-23 02:22:26'),
(39, 57, '2021-04-23', 'file_1619145745.jpg', 'hjkhjkhjk', '2021-04-23 02:42:26');

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
(40, 0, 'trgrtgrtg', 'kosong1.png', '', '2021-03-24 06:54:48'),
(52, 2, 'XI TKJ 1', 'file_1617610922.jpg', 'file_1617610947.jpg', '2021-04-05 08:22:27'),
(53, 1, 'XI RPL 2', 'file_1617610970.jpg', 'file_1617610979.jpg', '2021-04-05 08:22:59'),
(54, 2, 'XI TKJ 2', 'file_1617611010.jpg', 'file_1618976638.png', '2021-04-21 03:43:58'),
(55, 1, 'XI RPL 3', 'file_1617611038.jpg', 'file_1617611049.jpg', '2021-04-05 08:24:09'),
(56, 2, 'XI TKJ 3', 'file_1617611069.jpg', 'file_1617611080.jpg', '2021-04-05 08:24:40'),
(57, 1, 'XI RPL 1', 'file_1617771267.jpg', 'file_1617771249.jpg', '2021-04-07 04:54:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
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
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `id_user`, `judul_pengumuman`, `tertuju`, `tanggal`, `isi_pengumuman`, `ctreate_at`) VALUES
(12, NULL, 'adadadad', 'siswa', NULL, 'rfeferf', '2021-03-31 07:24:27'),
(16, NULL, 'sdf', 'siswa', NULL, 'eeeeefffffffff', '2021-03-31 07:24:38'),
(17, NULL, 's', 'guru', NULL, 'freeeeeeeeeeeeeeee', '2021-03-31 07:24:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama_pengirim` varchar(100) NOT NULL,
  `judul_pesan` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `isi_pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama_pengirim`, `judul_pesan`, `tanggal_pesan`, `isi_pesan`) VALUES
(1, 'Uzi', 'Terima Kasih', '2021-03-14', 'contoh Pesan,kesan,serta kritik dan saran untuk kakak kelas MOS\r\nPesan : Saya ingin berteirmakasih untuk kakak pendamping MOS yang sudah mendampingi dan membimbing saya dalam kegiatan MOS ini sehingga saya lebih mengenal lingkungan sekolah ini. \r\nKesan : Saya merasa terbimbing oleh kakak dan merasa aman karena kaka selalu mendampingi saya dan mengarahkan saya di lingkungan yang baru ini. \r\nKritik: Meskipun begitu kakak sepertinya sering tampak panik pasa masa orientasi dan seringkali memberikan pengumuman secara mendadak dan tiba-tiba\r\nSaran : mungkin sebaiknya kakak lebih tenang dan jangan merasa panik karena kakak sudah melakukan tugas kakak dengan baik dan sebaiknya jika ingin memberikan pengumuman jangan mendadak. Terimakasih kak\r\n\r\nPembahasan lebih lanjut\r\nPesan : merupakan isi yang ingin disampaikan kepada yang tertuju\r\nKesan : Hal-hal yang dialami dan dirasakan biasanya merupakan hal yang baik karena memberi kesan membekas\r\nKritik : Mengungkapkan hal-hal yang dianggap tidak sesuai, tidak berkenan atau tidak baik kepada yang tertuju. Ketika mengungkapkan kritik sebaiknya menggunakan bahasa yang sopan agar tidak menyakiti yang tertuju dan harus memiliki alasan yang logis dan objektif. \r\nSaran: Solusi atau penyelsaian masalah yang diberikan dan bersifat membangun dan jugamendidik\r\n\r\nSemoga jawaban ini dapat membantu yaa...\r\n\r\nKelas : 7 SMP\r\nMata pelajaran : Bahasa Indonesia\r\nKategori : Kritik\r\nKata kunci : Pesan, kesan, kritik, saran\r\nKode sesuai kurikulum KTSP : 7.1.9'),
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
(57, 51, 6, 'Muhmmad Kadafi', NULL, NULL, NULL, '12312', 'hummasoft', 'file_1617611381.jpg', 'Laki Laki', NULL, '2021-04-21 03:55:42'),
(58, 51, 7, 'udin', NULL, NULL, NULL, '3424', 'adasd', 'file_1617611769.jpeg', 'Perempuan', NULL, '2021-04-21 02:22:30'),
(59, 53, 8, 'asep', NULL, NULL, NULL, '', '', 'file_1618977160.jpeg', 'Jenis Kelamin Anda', NULL, '2021-04-21 03:58:51'),
(60, 57, 6, 'budi', NULL, NULL, NULL, '3423', 'humagang', 'file_1617771374.jpeg', 'Laki Laki', NULL, '2021-04-21 03:58:10'),
(61, 55, NULL, 'dafi', NULL, NULL, NULL, '656', 'gf', 'file_1617777245.jpeg', 'Laki Laki', NULL, '2021-04-07 06:34:05'),
(62, 53, NULL, 'wawa', NULL, NULL, NULL, '', '', 'file_1618976827.png', 'Jenis Kelamin Anda', NULL, '2021-04-21 03:53:14'),
(63, 53, NULL, 'hhh', NULL, NULL, NULL, '', '', 'file_1618976531.png', 'Jenis Kelamin Anda', NULL, '2021-04-21 03:53:17'),
(64, 53, 11, 'Uzi', NULL, NULL, NULL, '2013534', 'hummasoft', 'file_1618977677.png', 'Laki Laki', NULL, '2021-04-21 04:04:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_login`
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
-- Dumping data untuk tabel `tb_login`
--

INSERT INTO `tb_login` (`id_admin`, `id_siswa`, `id_pengelola`, `username`, `password`, `level`) VALUES
(2, 57, 0, 'dafi', 'ad0264553015a541693a5827cd89aed12952ae43', 2),
(3, 58, 0, 'udin', '0ff6f2c78c3f785fd15525e78e1fe9a223479ed1', 2),
(4, 0, 0, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1);

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
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_pengelola`);

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
  ADD KEY `id_dudi` (`id_dudi`);

--
-- Indeks untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pengelola` (`id_pengelola`);

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
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_pengelola` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `dudi`
--
ALTER TABLE `dudi`
  MODIFY `id_dudi` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT untuk tabel `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
