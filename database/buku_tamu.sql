-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 03.54
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(3, 'admin', '$2y$10$oTfBGxxCOSamwYga.lBdqOLT1kf4LUVWGtquNcu62iGSrVDnjbEzO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `asal` enum('Instansi','umum') NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `hp` varchar(13) NOT NULL,
  `tujuan` enum('Pajak Bumi dan Bangunan','Bidang Pendapatan','Bidang Pajak dan Retribusi Daerah','Bidang Penetapan','Pembukuan','Pelaporan Pajak','Retribusi Daerah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `asal`, `alamat`, `jenis_kelamin`, `hp`, `tujuan`) VALUES
(1, 'bagas', 'Instansi', 'maros', 'Pria', '0821993909', 'Pajak Bumi dan Bangunan'),
(16, 'bambag', 'Instansi', 'makassar', 'Pria', '082199390993', 'Bidang Penetapan'),
(17, 'kurni', 'umum', 'palopo', '', '085246633378', 'Bidang Penetapan'),
(18, 'anggala putra', 'Instansi', 'maros', 'Pria', '085246678888', 'Pajak Bumi dan Bangunan'),
(19, 'anggala putra', 'umum', 'maros', 'Pria', '0821993909', 'Bidang Pajak dan Retribusi Daerah'),
(20, 'anggala putra', 'Instansi', 'maros', 'Pria', '085240877203', 'Pelaporan Pajak'),
(21, 'anggala putra', 'Instansi', 'maros', 'Pria', '085246633378', 'Bidang Penetapan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
