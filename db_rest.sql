-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 31 Mei 2018 pada 03.49
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rest`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_pembooking` varchar(80) NOT NULL,
  `no_hp` varchar(90) NOT NULL,
  `no_meja` varchar(50) NOT NULL,
  `tanggal` varchar(200) NOT NULL,
  `waktu` varchar(200) NOT NULL,
  `tgl_book` date NOT NULL,
  `status_booking` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pembooking`, `no_hp`, `no_meja`, `tanggal`, `waktu`, `tgl_book`, `status_booking`) VALUES
(20, 'frida', '087754322345', '1', '2018-05-31', '12:33', '2018-05-30', 'belum konfirmasi'),
(21, 'eko', '087754322343', '3', '2018-06-01', '00:00', '2018-05-30', 'belum konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `delivery`
--

CREATE TABLE `delivery` (
  `id_delivery` int(11) NOT NULL,
  `nama_pemesan` varchar(80) NOT NULL,
  `no_hp` varchar(80) NOT NULL,
  `alamat` text NOT NULL,
  `pesanan` text NOT NULL,
  `total` varchar(200) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status_delivery` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `delivery`
--

INSERT INTO `delivery` (`id_delivery`, `nama_pemesan`, `no_hp`, `alamat`, `pesanan`, `total`, `tgl_pesan`, `status_delivery`) VALUES
(13, 'Frida Ramdani Saputri', '087720765423', 'jl.gagal', 'mie spagethy 1<br>sususian 1<br>', '55,000.00', '2018-05-31', 'Belum Konfirmasi'),
(18, 'gilang', '087720765426', 'kp.babakan ', 'stik 1<br>', '40,000.00', '2018-05-31', 'Belum Konfirmasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(80) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `jenis` varchar(200) NOT NULL,
  `harga_menu` varchar(90) NOT NULL,
  `deskripsi` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `gambar`, `jenis`, `harga_menu`, `deskripsi`) VALUES
(10, 'mie spagethy', 'http://localhost/pro_restaurant//assets/deliv/1.jpg', 'makanan', '23000', 'Spagehty'),
(11, 'sususian', 'http://localhost/pro_restaurant//assets/deliv/2.jpg', 'makanan', '32000', 'susi ala ala indo'),
(12, 'stik', 'http://localhost/pro_restaurant//assets/deliv/3.jpg', 'makanan', '40000', 'setikkk italianhh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id_delivery`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id_delivery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
