-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Jun 2019 pada 09.04
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alitahotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakamar`
--

CREATE TABLE `datakamar` (
  `id_kamar` int(5) NOT NULL,
  `nama_kamar` varchar(25) NOT NULL,
  `jenis_kamar` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `tarif_kamar` int(10) NOT NULL,
  `foto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakamar`
--

INSERT INTO `datakamar` (`id_kamar`, `nama_kamar`, `jenis_kamar`, `deskripsi`, `tarif_kamar`, `foto`) VALUES
(1, 'Reguler Room', 'Reguler', 'Deskripsi Kamar Reguler : </br>\r\n- Tamu			: 2 Tamu / Kamar </br>\r\n- Jenis Tempat Tidur 	: 1 Kasur Besar </br>\r\n- Luas Ruangan		: 16sqm </br>\r\n</br>\r\nFasilitas Kamar Reguler : </br>\r\n- AC (Air Conditioning) </br>\r\n- Coffee / Tea Maker </br>\r\n- Televisi </br>\r\n- Telepon </br>\r\n- Air Kemasan Gratis </br>\r\n- Wifi Gratis </br>\r\n- Tiket Makan Reguler </br>', 1800000, 'reguler.jpg'),
(2, 'Eksklusif Room', 'Eksklusif', 'Deskripsi Kamar Eksklusif : </br>\r\n- Tamu			: 2 Tamu / Kamar </br>\r\n- Jenis Tempat Tidur 	: 1 Kasur Besar </br>\r\n- Luas Ruangan		: 36sqm </br>\r\n</br>\r\nFasilitas Kamar Ekslusif : </br>\r\n- AC (Air Conditioning) </br>\r\n- Bathtub </br>\r\n- Coffee / Tea Maker </br>\r\n- Televisi </br>\r\n- Telepon </br>\r\n- Air Kemasan Gratis </br>\r\n- Wifi Gratis </br>\r\n- Meja </br>\r\n- Tiket Makan Eksklusif </br>', 2700000, 'eksklusif.jpg'),
(3, 'VIP Room', 'VIP', 'Deskripsi Kamar VIP : </br>\r\n- Tamu			: 2 Tamu / Kamar </br>\r\n- Jenis Tempat Tidur 	: 1 Kasur Besar </br>\r\n- Luas Ruangan		: 72sqm </br>\r\n</br>\r\nFasilitas Kamar VIP : </br>\r\n- AC (Air Conditioning) </br>\r\n- Bathtub </br>\r\n- Coffee / Tea Maker </br>\r\n- Televisi </br>\r\n- Telepon </br>\r\n- Teras / Balcony </br>\r\n- Air Kemasan Gratis </br>\r\n- Wifi Gratis </br>\r\n- Meja </br>\r\n- Tiket Makan VIP </br>', 3900000, 'vip.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapemesan`
--

CREATE TABLE `datapemesan` (
  `id_pemesan` int(5) NOT NULL,
  `nama_pemesan` varchar(25) NOT NULL,
  `no_id` int(16) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` int(13) NOT NULL,
  `id_akun` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(5) NOT NULL,
  `nama_fasilitas` varchar(25) NOT NULL,
  `jenis_fasilitas` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `tarif_fasilitas` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `jenis_fasilitas`, `deskripsi`, `tarif_fasilitas`) VALUES
(1, 'Tidak Pakai', 'Tidak Pakai', 'Tidak Memakai Fasilitas Tambahan', 0),
(2, 'Fasilitas Meeting Room', 'Meeting Room', 'Deskripsi Fasilitas Meeting Room : </br>\r\n- Jml Kursi		: 20 Kursi </br>\r\n- Jenis Meja	 	: 1 Meja Besar </br>\r\n- Luas Ruangan		: 72sqm </br>\r\n</br>\r\nFasilitas Meeting Room : </br>\r\n- AC (Air Conditioning) </br>\r\n- Proyektor </br>\r\n- LCD Presentation </br>\r\n- Air Kemasan Gratis </br>\r\n- Wifi Gratis </br>', 900000),
(3, 'Fasilitas Romantic Dinner', 'Romantic Dinner', 'Deskripsi Fasilitas Romantic Dinner : </br>\r\n- Tempat Makan Romantis </br>\r\n- 1 Paket Makan Malam Romantis </br> \r\n- 1 Botol Minuman Anggur </br>\r\n- Pemandangan Laut </br>\r\n- Lagu Romantis </br>', 1500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(5) NOT NULL,
  `id_pemesan` int(5) NOT NULL,
  `id_kamar` int(5) NOT NULL,
  `id_fasilitas` int(5) NOT NULL,
  `jml_kamar` int(5) NOT NULL,
  `mulai_inap` date NOT NULL,
  `selesai_inap` date NOT NULL,
  `lama_inap` varchar(10) NOT NULL,
  `total_tagihan` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `datakamar`
--
ALTER TABLE `datakamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `datapemesan`
--
ALTER TABLE `datapemesan`
  ADD PRIMARY KEY (`id_pemesan`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `datakamar`
--
ALTER TABLE `datakamar`
  MODIFY `id_kamar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `datapemesan`
--
ALTER TABLE `datapemesan`
  MODIFY `id_pemesan` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(5) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
