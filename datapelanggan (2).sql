-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2023 pada 04.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datapelanggan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapelanggan`
--

CREATE TABLE `datapelanggan` (
  `Id` int(11) NOT NULL,
  `Nama` char(100) NOT NULL,
  `Barang` varchar(100) NOT NULL,
  `Customer` varchar(100) NOT NULL,
  `Tanggal` date NOT NULL,
  `Keterangan` varchar(100) NOT NULL,
  `Lokasi` varchar(100) NOT NULL,
  `Aksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapelanggan`
--

INSERT INTO `datapelanggan` (`Id`, `Nama`, `Barang`, `Customer`, `Tanggal`, `Keterangan`, `Lokasi`, `Aksi`) VALUES
(82, 'Nama 1', 'Barang 1', 'Customer 1', '2023-02-09', 'Keterangan 1', 'Lokasi 1', 'Aksi 1'),
(83, 'Gede Pande', 'iphone 14', 'Grade1', '2023-02-22', 'Cek Unit', 'Bali', 'Cek Full'),
(84, 'Pqnde', 'Dita', 'Dita', '2023-02-01', 'Dita', 'Dita', 'Dita');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datapelanggan`
--
ALTER TABLE `datapelanggan`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datapelanggan`
--
ALTER TABLE `datapelanggan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
