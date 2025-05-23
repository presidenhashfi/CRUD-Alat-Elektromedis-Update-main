-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2025 pada 07.49
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `kode_alat` varchar(50) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `tahun` int(4) NOT NULL,
  `merek` varchar(100) DEFAULT NULL,
  `lokasi` varchar(100) DEFAULT NULL,
  `kondisi` varchar(50) DEFAULT NULL,
  `tanggal_maintenance` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `kode_alat`, `nama_alat`, `tahun`, `merek`, `lokasi`, `kondisi`, `tanggal_maintenance`) VALUES
(1, 'AL-001', 'Monitor Tekanan Darah', 2021, 'Omron', 'Ruang IGD', 'Baik', '2024-12-10'),
(2, 'AL-002', 'ECG Portable', 2020, 'Philips', 'Ruang ICU', 'Perlu Service', '2024-11-01'),
(5, 'ALT-U1J2XV', 'Penimbang', 2025, 'Xiaomi', 'Surakarta', 'Rusak', '2025-05-22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
