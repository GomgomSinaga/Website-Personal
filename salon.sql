-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2023 pada 16.22
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
-- Database: `salon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbbooking`
--

CREATE TABLE `tbbooking` (
  `nik` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `instagram` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `member` varchar(30) NOT NULL,
  `perawatan` varchar(30) NOT NULL,
  `diskon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbbooking`
--

INSERT INTO `tbbooking` (`nik`, `nama`, `alamat`, `instagram`, `hp`, `tanggal`, `member`, `perawatan`, `diskon`) VALUES
('123', 'Rio Rivaldo Sinuhaji', 'JL. NABUUNG SURBAKTI GG.SILALAHI NO.05', '@riooorivaldooo', '0813611535', '2023-10-31', 'Member', 'I2PL ACNE DAN WHITENING', 438750),
('321123', 'juy', 'jalan jalan', '@barunih', '0909414', '2023-11-19', 'Tidak member', 'I2PL ACNE', 405000),
('767644546568780986', 'bayu', 'tambakk bayan', 'bayuu', '88767', '2023-11-22', 'Member', 'I2PL WHITENING REJUVE', 337500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `iduser` bigint(20) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role` varchar(30) NOT NULL,
  `photo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`iduser`, `username`, `password`, `role`, `photo`) VALUES
(13, 'rio123', 'rio123', '', 'fotopaten.png'),
(14, 'rio12345', 'rio12345', '', 'WIN_20230814_00_47_44_Pro.jpg'),
(15, 'aril123', 'aril123', '', 'WIN_20230814_00_47_44_Pro.jpg'),
(16, 'admin', 'admin', 'admin', ''),
(21, 'rio', 'rio', '', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbbooking`
--
ALTER TABLE `tbbooking`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `iduser` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
