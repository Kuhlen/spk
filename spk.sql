-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 20 Jun 2020 pada 19.53
-- Versi Server: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_alternatif`
--

CREATE TABLE `tabel_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_alternatif`
--

INSERT INTO `tabel_alternatif` (`id_alternatif`, `nama`, `c1`, `c2`, `c3`, `c4`) VALUES
(1, 'Indra', 70, 50, 80, 60),
(2, 'Roni', 50, 60, 82, 70),
(3, 'Putri', 85, 55, 80, 75),
(4, 'Dani', 82, 70, 65, 85),
(5, 'Ratna', 75, 75, 85, 74),
(6, 'Mira', 62, 50, 75, 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_bobot`
--

CREATE TABLE `tabel_bobot` (
  `id_bobot` int(11) NOT NULL,
  `w1` double NOT NULL,
  `w2` double NOT NULL,
  `w3` double NOT NULL,
  `w4` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_bobot`
--

INSERT INTO `tabel_bobot` (`id_bobot`, `w1`, `w2`, `w3`, `w4`) VALUES
(1, 0.35, 0.25, 0.25, 0.15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_alternatif`
--
ALTER TABLE `tabel_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tabel_bobot`
--
ALTER TABLE `tabel_bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
