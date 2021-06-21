-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 12.55
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_astraland`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumah`
--

CREATE TABLE `tb_rumah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `hak_kepemilikan` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `luas_tanah` varchar(255) NOT NULL,
  `luas_rumah` varchar(255) NOT NULL,
  `jumlah_lantai` varchar(255) NOT NULL,
  `status_rumah` varchar(255) NOT NULL,
  `fasilitas_lainnya` varchar(255) NOT NULL,
  `type_rumah` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_agen` varchar(255) NOT NULL,
  `id_pemilik` varchar(255) NOT NULL,
  `status_byagen` varchar(2) NOT NULL DEFAULT '0',
  `harga` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rumah`
--

INSERT INTO `tb_rumah` (`id`, `judul`, `hak_kepemilikan`, `lokasi`, `kodepos`, `luas_tanah`, `luas_rumah`, `jumlah_lantai`, `status_rumah`, `fasilitas_lainnya`, `type_rumah`, `image`, `id_agen`, `id_pemilik`, `status_byagen`, `harga`) VALUES
(4, 'Jual Rumah Mewah', 'saya sendiri', 'dalung', '80361', '100', '100', '2', 'DI Sewakan', 'ac, televisi , parabola', 'Minimalis', '', '22', '25', '0', 100000000000),
(7, 'Dijual rumah gak berhuni', 'saya sendiri', 'dalung', '80361', '100', '100', '3', 'Di Jual', 'ac, televisi , parabola', 'Minimalis', '1623645431.png', '22', '25', '1', 100000000000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `deskripsi` longtext DEFAULT NULL,
  `total_property` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `email`, `alamat`, `no_tlp`, `gender`, `level`, `deskripsi`, `total_property`) VALUES
(19, 'admin', 'admin', '0192023a7bbd73250516f069df18b500', 'admin@gmail.com', 'denpasar', '0', 'Laki-laki', '0', '', NULL),
(21, 'Dinda', 'dinda', 'a1b7b1ddfd296af4899e8ba338657e9d', 'dinda@gmail.com', 'Denpasar', '2147483647', 'Perempuan', '2', '', NULL),
(22, 'Putu ', 'putu', 'd13b9e9c50b60960602ebad14b7790d9', 'putu@gmail.com', 'kuta', '6282144239500', 'Perempuan', '1', 'Saya sudah lama di dunia property', NULL),
(25, 'Wahyu Ari', 'arip', 'bb83d246fb39192ad202b6b3168d4b95', 'arip@gmail.com', 'Batu Bulan', '6282146828939', 'Laki-laki', '2', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_rumah`
--
ALTER TABLE `tb_rumah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_rumah`
--
ALTER TABLE `tb_rumah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
