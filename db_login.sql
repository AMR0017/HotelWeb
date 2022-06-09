-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2022 pada 12.16
-- Versi server: 8.0.27
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `rid` int NOT NULL,
  `rtype` varchar(50) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `duration` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `rstat` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`rid`, `rtype`, `check_in`, `check_out`, `duration`, `room`, `rstat`, `email`) VALUES
(5, 'Single Bed', '2022-06-09', '2022-06-11', '2 Nights', '1 Room', 'Check Out', 'azhar3@gmail.com'),
(6, 'Family Room', '2022-06-15', '2022-06-18', '3 Nights', '3 Rooms', 'Check In', 'admin_hotel@gmail.com'),
(7, 'Female Only Room', '2022-06-12', '2022-06-14', '2 Nights', '1 Room', 'Pending', 'siapa@gmail.com'),
(8, 'Single Bed', '2022-06-12', '2022-06-24', '12 Nights', '2 Rooms', 'Pending', 'azhar3@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` int NOT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(3, 'Pending'),
(4, 'Check In'),
(5, 'Check Out');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int NOT NULL,
  `date_birth` date NOT NULL,
  `tel` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `age`, `date_birth`, `tel`, `level`) VALUES
(1, 'admin', 'admin_hotel@gmail.com', 'admin', 19, '2002-11-09', '081234567812', 'admin'),
(5, 'akuSiapa3', 'siapa@gmail.com', 'akusiapa', 22, '2022-06-10', '0812-4241-3421', ''),
(6, 'azhar3', 'azhar3@gmail.com', '123azhar', 19, '2002-11-09', '0821-1231-1312', ''),
(7, 'amr', 'azhar17@gmail.com', 'akusiapa', 23, '2022-06-01', '0832-4231-4213', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`rid`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `reservation`
--
ALTER TABLE `reservation`
  MODIFY `rid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
