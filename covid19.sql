-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2021 pada 19.20
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(3) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jeniskelamin` varchar(15) DEFAULT NULL,
  `usia` varchar(3) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `jawaban1` varchar(15) DEFAULT NULL,
  `jawaban2` varchar(15) DEFAULT NULL,
  `jawaban3` varchar(15) DEFAULT NULL,
  `jawaban4` varchar(15) DEFAULT NULL,
  `jawaban5` varchar(15) DEFAULT NULL,
  `jawaban6` varchar(15) DEFAULT NULL,
  `suhu` double NOT NULL,
  `hasil` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kondisi`
--

INSERT INTO `kondisi` (`id_kondisi`, `nama`, `jeniskelamin`, `usia`, `alamat`, `telp`, `jawaban1`, `jawaban2`, `jawaban3`, `jawaban4`, `jawaban5`, `jawaban6`, `suhu`, `hasil`) VALUES
(27, 'Manusia manusia', 'P', '24', 'jalan pisang', '1234567890', 'terdeteksi', 'terdeteksi', 'aman', 'terdeteksi', 'terdeteksi', 'terdeteksi', 38, 'terdeteksi'),
(28, 'dw', 'L', '50', 'jalan mawar', '12345690', 'aman', 'aman', 'aman', 'aman', 'aman', 'aman', 32, 'aman'),
(32, 'Belva Talitha Dwiyanti', 'P', '16', 'Jalan Simpang Dirgantara VII B7/32', '1234567890', 'aman', 'aman', 'aman', 'aman', 'aman', 'aman', 32, 'aman'),
(33, 'Manusia manusia', 'L', '24', 'jalan Allah', '1234567890', 'terdeteksi', 'terdeteksi', 'terdeteksi', 'terdeteksi', 'terdeteksi', 'terdeteksi', 37, 'terdeteksi'),
(34, '', '', '', '', '', '', '', '', '', '', '', 34, 'aman'),
(35, '', '', '', '', '', '', '', '', '', '', '', 38, 'terdeteksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `usia` varchar(5) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` varchar(13) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `id_level` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `usia`, `alamat`, `telp`, `username`, `password`, `id_level`) VALUES
(2, 'user1', '20', 'jalan melati', '1234567890', 'user1', 'user1', 'user'),
(6, 'ptg2', '35', 'jalan bandung', '12345678', 'ptg2', 'ptg2', 'petugas'),
(13, 'ptg3', '35', 'jalan mawar', '1234567890', 'ptg3', 'ptg3', 'petugas'),
(14, 'Belva Talitha', '16', 'Malang', '1234567890', 'belva', 'belva', 'petugas'),
(15, 'ptg5', '35', 'surabaya', '1234567890', 'ptg5', 'ptg5', 'petugas'),
(16, 'ptg6', '35', 'jalan mawar', '1234567890', 'ptg6', 'ptg6', 'petugas'),
(17, 'ptg7', '24', 'jalan pisang', '1234567890', 'ptg7', 'ptg7', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
