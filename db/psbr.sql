-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2020 pada 16.33
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'maulana', 'admin', 'Maulana Sarowis', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `idang` int(11) NOT NULL,
  `angkatan_ke` char(4) NOT NULL,
  `tahun` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`idang`, `angkatan_ke`, `tahun`) VALUES
(1, '73', 2016),
(2, '74', 2017),
(3, '75', 2017),
(4, '76', 2018);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daerah`
--

CREATE TABLE `tb_daerah` (
  `idda` int(11) NOT NULL,
  `nama_daerah` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daerah`
--

INSERT INTO `tb_daerah` (`idda`, `nama_daerah`) VALUES
(1, 'Kabupaten Asahan - Sumut'),
(2, 'Kabupaten Batubara -Sumut'),
(3, 'Kabupaten Padang Lawas - Sumut'),
(4, 'Kabupaten Padang Lawas Utara - Sumut'),
(5, 'Kota Binjai - Sumut'),
(6, 'Kota Padangsidempuan - Sumut'),
(7, 'Kabupaten Bengkalis - Riau'),
(8, 'Kabupaten Indragiri Hilir - Riau'),
(9, 'Kabupaten Indragiri Hulu - Riau'),
(10, 'Kabupaten Kampar - Riau'),
(11, 'Kabupaten Kepulauan Meranti - Riau'),
(12, 'Kabupaten Kuantan Singingi - Riau'),
(13, 'Kabupaten Pelalawan - Riau'),
(14, 'Kabupaten Rokan Hilir - Riau'),
(15, 'Kabupaten Rokan Hulu - Riau'),
(16, 'Kabupaten Siak - Riau'),
(17, 'Kota Dumai - Riau'),
(18, 'Kota Pekanbaru - Riau'),
(19, 'Kabupaten Bintan Kepulauan - Kepri'),
(20, 'Kabupaten Karimun - Kepri'),
(21, 'Kabupaten Kepulauan Anambas - Kepri'),
(22, 'Kabupaten Lingga - Kepri'),
(23, 'Kabupaten Natuna - Kepri'),
(24, 'Kota Batam - Kepri'),
(25, 'Kota Tanjung Pinang - Kepri'),
(26, 'Kabupaten Agam - Sumbar'),
(27, 'Kabupaten Dharmasraya - Sumbar'),
(28, 'Kabupaten Lima Puluh Kota - Sumbar'),
(29, 'Kabupaten Padang Pariaman - Sumbar'),
(30, 'Kabupaten Sijunjung - Sumbar'),
(31, 'Kota Bukittinggi - Sumbar'),
(32, 'Kota Padang - Sumbar'),
(33, 'Kota Payakumbuh - Sumbar'),
(34, 'Kabupaten Bungo - Jambi'),
(35, 'Kota Padang Panjang - Sumbar'),
(36, 'Kabupaten Pesisir Selatan - Sumbar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `idjur` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`idjur`, `nama_jurusan`) VALUES
(1, 'Otomotif'),
(2, 'Teknik Las'),
(3, 'Menjahit'),
(4, 'Tata Rias');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pm`
--

CREATE TABLE `tb_pm` (
  `idpm` int(11) NOT NULL,
  `nik` char(16) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(9) DEFAULT NULL,
  `tmptlahir` varchar(50) DEFAULT NULL,
  `tgllahir` date DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `nohp` char(12) DEFAULT NULL,
  `namabpk` varchar(50) DEFAULT NULL,
  `k_bpk` varchar(50) DEFAULT NULL,
  `namaibu` varchar(50) DEFAULT NULL,
  `k_ibu` varchar(50) DEFAULT NULL,
  `idjur` int(11) DEFAULT NULL,
  `idda` int(11) DEFAULT NULL,
  `idang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`idang`);

--
-- Indeks untuk tabel `tb_daerah`
--
ALTER TABLE `tb_daerah`
  ADD PRIMARY KEY (`idda`);

--
-- Indeks untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`idjur`);

--
-- Indeks untuk tabel `tb_pm`
--
ALTER TABLE `tb_pm`
  ADD PRIMARY KEY (`idpm`),
  ADD KEY `idjur` (`idjur`),
  ADD KEY `idda` (`idda`),
  ADD KEY `idang` (`idang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `idang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_daerah`
--
ALTER TABLE `tb_daerah`
  MODIFY `idda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `idjur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pm`
--
ALTER TABLE `tb_pm`
  MODIFY `idpm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_pm`
--
ALTER TABLE `tb_pm`
  ADD CONSTRAINT `tb_pm_ibfk_1` FOREIGN KEY (`idjur`) REFERENCES `tb_jurusan` (`idjur`),
  ADD CONSTRAINT `tb_pm_ibfk_2` FOREIGN KEY (`idda`) REFERENCES `tb_daerah` (`idda`),
  ADD CONSTRAINT `tb_pm_ibfk_3` FOREIGN KEY (`idang`) REFERENCES `tb_angkatan` (`idang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
