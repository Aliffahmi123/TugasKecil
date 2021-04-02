-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Apr 2021 pada 05.21
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajarci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudimk`
--

CREATE TABLE `crudimk` (
  `NIM` int(12) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Jenjang` varchar(4) NOT NULL,
  `No Handphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `crudimk`
--

INSERT INTO `crudimk` (`NIM`, `Nama`, `Fakultas`, `Jenjang`, `No Handphone`) VALUES
(181402011, 'Mhd.Alif Fahmi', 'Fasilkom-TI', 's1', '081289xxxxxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudimk2`
--

CREATE TABLE `crudimk2` (
  `NIM` int(12) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Jenjang` varchar(4) NOT NULL,
  `Program_Studi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `crudimkk`
--

CREATE TABLE `crudimkk` (
  `nim` int(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `telp` varchar(4) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` varchar(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`) VALUES
('181402098', 'juan', 'Laki-laki', '63633383', 'JL.LAMA');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crudimk`
--
ALTER TABLE `crudimk`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `crudimk2`
--
ALTER TABLE `crudimk2`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crudimk`
--
ALTER TABLE `crudimk`
  MODIFY `NIM` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181402012;

--
-- AUTO_INCREMENT untuk tabel `crudimk2`
--
ALTER TABLE `crudimk2`
  MODIFY `NIM` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
