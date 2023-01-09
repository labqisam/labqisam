-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2023 pada 14.01
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `umur1`
--

CREATE TABLE `umur1` (
  `id` int(2) NOT NULL,
  `nama_penyakit` varchar(100) NOT NULL,
  `jumlah_pria` int(6) NOT NULL,
  `jumlah_wanita` int(6) NOT NULL,
  `jumlah_pria2` int(6) NOT NULL,
  `jumlah_wanita2` int(6) NOT NULL,
  `jumlah_pria3` int(6) NOT NULL,
  `jumlah_wanita3` int(6) NOT NULL,
  `jumlah_pria4` int(6) NOT NULL,
  `jumlah_wanita4` int(6) NOT NULL,
  `jumlah_pria5` int(6) NOT NULL,
  `jumlah_wanita5` int(6) NOT NULL,
  `jumlah_pria6` int(6) NOT NULL,
  `jumlah_wanita6` int(6) NOT NULL,
  `jumlah_pria7` int(6) NOT NULL,
  `jumlah_wanita7` int(6) NOT NULL,
  `jumlah_pria8` int(6) NOT NULL,
  `jumlah_wanita8` int(6) NOT NULL,
  `jumlah_pria9` int(6) NOT NULL,
  `jumlah_wanita9` int(6) NOT NULL,
  `jumlah_pria10` int(6) NOT NULL,
  `jumlah_wanita10` int(6) NOT NULL,
  `jumlah1` int(6) NOT NULL,
  `jumlah2` int(6) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `umur1`
--

INSERT INTO `umur1` (`id`, `nama_penyakit`, `jumlah_pria`, `jumlah_wanita`, `jumlah_pria2`, `jumlah_wanita2`, `jumlah_pria3`, `jumlah_wanita3`, `jumlah_pria4`, `jumlah_wanita4`, `jumlah_pria5`, `jumlah_wanita5`, `jumlah_pria6`, `jumlah_wanita6`, `jumlah_pria7`, `jumlah_wanita7`, `jumlah_pria8`, `jumlah_wanita8`, `jumlah_pria9`, `jumlah_wanita9`, `jumlah_pria10`, `jumlah_wanita10`, `jumlah1`, `jumlah2`, `jumlah`) VALUES
(12, 'Kolera', 123, 123, 111, 11, 21, 4, 2, 4, 3, 4, 2, 4, 3, 9, 78, 67, 56, 55, 89, 678, 488, 959, 1447),
(13, 'Diare', 1, 1, 1, 5, 4, 5, 6, 5, 7, 6, 4, 5, 0, 0, 0, 0, 0, 0, 0, 0, 23, 27, 50),
(14, 'Diare Berdarah', 12, 13, 15, 12, 65, 8, 89, 6, 56, 66, 45, 93, 22, 22, 22, 1, 22, 1, 33, 1, 381, 223, 604),
(15, 'Tipus Perut Klinis', 35, 44, 67, 23, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 171),
(16, 'TBC Paru BTA (+)', 23, 23, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 51),
(17, 'Tersangka TBC Paru', 54, 64, 2, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 124),
(31, 'Malaria Falcifarum', 1, 1, 9, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 12),
(63, 'Malaria Mix', 3, 3, 6, 5, 7, 8, 7, 6, 5, 4, 3, 5, 6, 7, 8, 6, 6, 2, 7, 8, 58, 54, 112),
(64, 'Demam Berdarah Dengue', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 30, 30, 60),
(65, 'Demam Dengue', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 20, 20, 40),
(66, 'Pneumonia', 4, 4, 3, 3, 2, 2, 6, 6, 7, 7, 2, 2, 3, 3, 4, 4, 5, 5, 3, 3, 39, 39, 78);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$C7CgEpPuEa8v3DMefhKv/.ZT88hDxueGN.kd1es4uwV20Ygb6lklS');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `umur1`
--
ALTER TABLE `umur1`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `umur1`
--
ALTER TABLE `umur1`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
