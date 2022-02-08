-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2022 pada 02.40
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_1904030036`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_anggota`
--

CREATE TABLE `db_anggota` (
  `id` int(10) NOT NULL,
  `id_anggota` int(20) NOT NULL,
  `nama_anggota` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` int(100) NOT NULL,
  `gambar_anggota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_anggota`
--

INSERT INTO `db_anggota` (`id`, `id_anggota`, `nama_anggota`, `alamat`, `no_hp`, `gambar_anggota`) VALUES
(1, 101, 'Nisa', 'Rajeg', 62856876, 'foto1.png'),
(2, 102, 'Nurul', 'Cikupa', 62856788, 'foto2.png'),
(3, 103, 'Gilang', 'Cimone', 62838224, 'foto3.png'),
(4, 104, 'Rifky', 'Curug', 62838134, 'foto4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `db_buku`
--

CREATE TABLE `db_buku` (
  `id` int(10) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `gambar_buku` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `db_buku`
--

INSERT INTO `db_buku` (`id`, `id_buku`, `judul_buku`, `pengarang`, `penerbit`, `tahun_terbit`, `gambar_buku`) VALUES
(1, 121, 'Dasar Dasar Uroginekologi', 'Pribakti B', 'Sagung Seto', '2011', '1.png'),
(2, 122, 'Kesehjateraan Sosial', 'Isbandi Rukminto Adi', 'Rajagrafindo Persada	', '2015', '2.png'),
(3, 123, 'Metode Riset Bisnis Edisi II', 'Suliyanto', 'Andi Offset', '2009', '3.png'),
(4, 124, 'Manajemen Penerbitan Jurnal Ilmiah', 'Lukman S', 'Sagung Seto', '2012', '4.png'),
(5, 125, 'Kupas Tuntas : Microsoft Windows 8.1', 'Madcoms', 'Andi Offset', '2014', '5.png'),
(6, 126, 'Panduan Praktis Sistem Kendali Digital', 'Azwardi Dan Cekmas Cekdin', 'Andi Offset', '2015', '6.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `db_anggota`
--
ALTER TABLE `db_anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `db_buku`
--
ALTER TABLE `db_buku`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
