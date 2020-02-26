-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 06:29 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foosel`
--

-- --------------------------------------------------------

--
-- Table structure for table `identitas`
--

CREATE TABLE `identitas` (
  `id_identitas` int(11) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `kode_pos` varchar(6) DEFAULT NULL,
  `penerima` varchar(60) NOT NULL,
  `lokasi_detail` text DEFAULT NULL,
  `lokasi_GPS` text DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `username_akses` varchar(60) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_akses` set('admin','user') DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `gender` set('L','P') DEFAULT NULL,
  `foto` tinyblob DEFAULT NULL,
  `handphone` varchar(30) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas`
--

INSERT INTO `identitas` (`id_identitas`, `nama`, `kode_pos`, `penerima`, `lokasi_detail`, `lokasi_GPS`, `username`, `username_akses`, `password`, `user_akses`, `email`, `gender`, `foto`, `handphone`, `id_transaksi`) VALUES
(1, '', '0', '', '', '', '', '', '', '', '', '', '', '', 1),
(5, 'I Gusti Ngurah Agung Widiaksa Putra', '0', '', 'unud', '', 'widiaksa putra admin', '', '$2y$10$URBhDYiQ.1NYhoVVKm5P4.G6XAb8BbpEQIG3Yibrr2wf49zOXAG0G', 'admin', 'widiaksajaya.WIP@gmail.com', 'L', '', '085333295221', 1),
(6, 'Sanjaya Wibawa', '0', '', 'sadjkasbkjd', '', 'sanjaya', '', '$2y$10$RBei2z4xuXBHVpPvj7Jju.75UpEuV5WjKSKvq9EWcAhz1iOmY60q.', 'admin', 'jbxkj@kjsabka', 'L', '', '085333295221', 1),
(7, 'Jokowi Dodo', '0', '', 'sadjbkas', '', 'jokowi', '', '$2y$10$lA645cJXX3KEyvhI7poKC.H9LNkjFHUC.7LNSoGX1ANfbOUpNZOyq', 'user', 'kjdgajdgd@gmail.com', 'L', '', '085333295221', 1),
(8, 'BJ Habibi', '0', '', 'qwe', '', 'habibi', '', '$2y$10$H2iCTYxIbig4c1xXx5.Qm.U9mPcbk1FCZ7/HXIL57A9EgShZu0IP6', 'user', 'widiaksajaya.WIP@gmail.com', 'L', '', '085333295221', 1),
(9, 'made klenteng', '0', '', 'awd', '', 'klenteng', '', '$2y$10$/Xx8WYLbFfPa8eCptZMa/OmpfjVYSx1lvyStvJOFYrRHTEKyd342y', 'user', 'kjdgajdgd@gmail.com', 'L', '', '085333295221', 1),
(42, 'I Gusti Ngurah Agung Widiaksa Putra', '0', '', 'qwertyuiop', '', 'widiaksa putra', '', '$2y$10$m315Suk/oClMeOoLhRHbg.fsEMtAlBaZec4wf/qEiR5vaalLVXbVm', 'user', 'widiaksajaya.WIP@gmail.com', 'L', '', '085333295224', 1),
(106, '', '80361', 'I Gusti Ngurah Agung Widiaksa Putra', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 54),
(107, '', '80361', 'vani', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 55),
(108, '', '80361', 'dodi', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 56),
(109, '', '80361', 'dido', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 57),
(110, '', '80361', 'I Gusti Ngurah Agung Widiaksa Putra', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 58),
(114, '', '80361', 'vina', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 61),
(115, '', '80361', 'vani', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 62),
(117, '', '80361', 'aldi', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 64),
(118, '', '80361', 'didi', 'qwertyuiop', '', '', 'widiaksa putra', '', 'user', '', '', '', '085333295224', 65);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_art`
--

CREATE TABLE `jenis_art` (
  `id_jenis_art` int(11) NOT NULL,
  `jenis_art` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_art`
--

INSERT INTO `jenis_art` (`id_jenis_art`, `jenis_art`) VALUES
(1, ''),
(2, 'illustration'),
(4, 'karikatur'),
(5, 'traditional'),
(7, 'animal');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_furniture`
--

CREATE TABLE `jenis_furniture` (
  `id_jenis_furniture` int(11) NOT NULL,
  `jenis_furniture` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_furniture`
--

INSERT INTO `jenis_furniture` (`id_jenis_furniture`, `jenis_furniture`) VALUES
(1, ''),
(2, 'lemari'),
(3, 'rak'),
(4, 'box'),
(5, 'jam'),
(6, 'sedotan'),
(7, 'woodcraft'),
(8, 'patung'),
(10, 'meja');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_interior`
--

CREATE TABLE `jenis_interior` (
  `id_jenis_interior` int(11) NOT NULL,
  `jenis_interior` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_interior`
--

INSERT INTO `jenis_interior` (`id_jenis_interior`, `jenis_interior`) VALUES
(1, ''),
(2, 'minimalis'),
(3, 'modern'),
(4, 'tradisional');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pengirim`
--

CREATE TABLE `jenis_pengirim` (
  `id_jenis_pengirim` int(11) NOT NULL,
  `jenis_pengirim` varchar(60) DEFAULT NULL,
  `Ongkir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pengirim`
--

INSERT INTO `jenis_pengirim` (`id_jenis_pengirim`, `jenis_pengirim`, `Ongkir`) VALUES
(1, '', 0),
(3, 'jne', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kode_pos`
--

CREATE TABLE `kode_pos` (
  `kode_pos` varchar(6) NOT NULL,
  `prov` varchar(30) DEFAULT NULL,
  `kab` varchar(30) DEFAULT NULL,
  `kec` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kode_pos`
--

INSERT INTO `kode_pos` (`kode_pos`, `prov`, `kab`, `kec`) VALUES
('0', '0', '0', '0'),
('80361', 'Bali', 'Badung', 'Kuta Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi_rekomendasi`
--

CREATE TABLE `lokasi_rekomendasi` (
  `id_lokasi_rekomendasi` int(11) NOT NULL,
  `lokasi_rekomendasi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi_rekomendasi`
--

INSERT INTO `lokasi_rekomendasi` (`id_lokasi_rekomendasi`, `lokasi_rekomendasi`) VALUES
(1, ''),
(2, 'ruang tamu'),
(3, 'dapur'),
(4, 'outdor'),
(5, 'ruang makan');

-- --------------------------------------------------------

--
-- Table structure for table `media_pembayaran`
--

CREATE TABLE `media_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `pembayaran` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media_pembayaran`
--

INSERT INTO `media_pembayaran` (`id_pembayaran`, `pembayaran`) VALUES
(1, ''),
(2, 'bank mandiri'),
(3, 'bank bca');

-- --------------------------------------------------------

--
-- Table structure for table `objek_foosel_admin`
--

CREATE TABLE `objek_foosel_admin` (
  `id` int(11) NOT NULL,
  `id_jenis_art` int(11) DEFAULT NULL,
  `gambar` tinyblob DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `id_warna_dominan` int(11) DEFAULT NULL,
  `id_lokasi_rekomendasi` int(11) DEFAULT NULL,
  `lokasi_pernah_diterapkan` text DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `ukuran_objek` varchar(30) DEFAULT NULL,
  `waktu` varchar(50) DEFAULT NULL,
  `id_type_bangunan` int(11) DEFAULT NULL,
  `jumlah_objek` int(11) DEFAULT NULL,
  `id_jenis_interior` int(11) DEFAULT NULL,
  `id_jenis_furniture` int(11) DEFAULT NULL,
  `status` enum('habis','tersedia') DEFAULT NULL,
  `objek` enum('art','furniture','interior') DEFAULT NULL,
  `identitas` int(11) NOT NULL,
  `user_akses` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objek_foosel_admin`
--

INSERT INTO `objek_foosel_admin` (`id`, `id_jenis_art`, `gambar`, `deskripsi`, `harga`, `id_warna_dominan`, `id_lokasi_rekomendasi`, `lokasi_pernah_diterapkan`, `nama`, `ukuran_objek`, `waktu`, `id_type_bangunan`, `jumlah_objek`, `id_jenis_interior`, `id_jenis_furniture`, `status`, `objek`, `identitas`, `user_akses`) VALUES
(1, 1, '', '', 0, 1, 1, '', '', '', '', 1, 0, 1, 1, '', '', 0, 'admin'),
(323, 1, 0x52616b204265736920496e647573747269616c2e6a7067, 'Rak besi yang elegan', 100000, 10, 1, '', 'Rak Besi Industrial', '1 X 1 M', '', 1, 0, 1, 3, 'tersedia', 'furniture', 5, 'admin'),
(325, 1, 0x52616b2054616c6920322054696e676b61742e6a7067, 'Rak elegan, terlihat elegan diruang tamu', 100000, 10, 1, '', 'Rak Tali 2 Tingkat', '700 x 700 cm', '', 1, 0, 1, 3, 'tersedia', 'furniture', 5, 'admin'),
(327, 1, 0x426f782041747269627574204c4f56452e6a7067, 'Cocok untuk pasangan anda, hadiah yang elegan ', 100000, 10, 1, '', 'Box Atribut LOVE', '300 X 300 CM ', '', 1, 0, 1, 4, 'tersedia', 'furniture', 5, 'admin'),
(328, 1, 0x426f78204174726962757420484f4d452e6a7067, 'Atribut yang sangat cocok untuk kamar kesayangan anda', 100000, 10, 1, '', 'Box Atribut HOME', '300 x 300 cM', '', 1, 0, 1, 4, 'tersedia', 'furniture', 5, 'admin'),
(329, 1, 0x50656e79696d70616e616e204e61747572652e6a7067, 'Kotak elegan, cocok untuk penyimpanan aksesoris dan lainnya dengan tempat yang elegan ', 50000, 10, 1, '', 'Penyimpanan Nature', '200 x 200 cm', '', 1, 0, 1, 4, 'tersedia', 'furniture', 5, 'admin'),
(335, 1, 0x5365646f74616e204e61747572652e6a7067, 'mulailah dari yang terkecil, jaga bumi dari sampah plastik', 30000, 10, 1, '', 'Sedotan Nature', '150 x 150 cm', '', 1, 0, 1, 6, 'tersedia', 'furniture', 5, 'admin'),
(336, 1, 0x52616b20466f6f732e6a7067, '', 0, 10, 1, '', 'Rak Foos', '6 x 4 m', '', 1, 0, 1, 3, 'habis', 'furniture', 5, 'admin'),
(337, 1, 0x56696c6c6120576f6f642e6a7067, '', 50000, 3, 1, '', 'Villa Wood', '500 x 500 cm', '', 1, 0, 1, 7, 'tersedia', 'furniture', 5, 'admin'),
(338, 1, 0x4d6f7469766174696f6e20576f6f64732e6a7067, '', 50000, 10, 1, '', 'Motivation Woods', '300 x 300 cm', '', 1, 0, 1, 7, 'tersedia', 'furniture', 5, 'admin'),
(339, 1, 0x4d656e6a616e67616e202e6a7067, '', 200000, 4, 1, '', 'Menjangan ', '500 x 500 cm', '', 1, 0, 1, 8, 'tersedia', 'furniture', 5, 'admin'),
(340, 2, 0x416e696d616c204e6174757265202e6a7067, '', 400000, 4, 4, 'Restoran Alamm', 'Animal Nature ', '3 x 2 m', '4 jam', 2, 0, 1, 1, '', 'art', 5, 'admin'),
(341, 2, 0x4d6f6e6b7920536d696c652e6a7067, '', 300000, 4, 4, 'Alila Villas', 'Monky Smile', '2 x 4 m', '4 jam', 3, 0, 1, 1, '', 'art', 5, 'admin'),
(342, 2, 0x4e617475726520427269642e6a7067, '', 0, 2, 2, '', 'Nature Brid', '3 x 3 m', '5 jam', 2, 0, 1, 1, '', 'art', 5, 'admin'),
(377, 1, 0x547261646974696f6e616c2e6a7067, 'mantapp', 5000000, 2, 2, 'ALILA', 'Traditional', '5 x 5 m', '2 hari', 2, 0, 2, 1, '', 'interior', 5, 'admin'),
(384, 1, 0x52616b204265736920496e647573747269616c2e6a7067, 'Rak besi yang elegan', 100000, 10, 1, '', 'Rak Besi Industrial', '1 X 1 M', '', 1, 1, 1, 3, 'tersedia', 'furniture', 42, 'user'),
(386, 1, 0x52616b204265736920496e647573747269616c2e6a7067, 'Rak besi yang elegan', 100000, 10, 1, '', 'Rak Besi Industrial', '1 X 1 M', '', 1, 1, 1, 3, 'tersedia', 'furniture', 116, 'user'),
(387, 2, 0x4d6f6e6b7920536d696c652e6a7067, '', 300000, 4, 4, 'Alila Villas', 'Monky Smile', '2 x 4 m', '4 jam', 2, 1, 1, 1, '', 'art', 106, 'user'),
(388, 5, '', 'asjdsajhgd', 50000000, 6, 4, '', '', '4 x 3 m', '2 hari', 4, 2, 1, 1, '', 'art', 107, 'user'),
(390, 1, 0x446f6b206261727520323031392d30372d33302030372e34372e30335f362e6a7067, 'dgjhsda', 5000000, 2, 2, '', '', '4 x 3 m', '2 hari', 1, 1, 4, 1, '', 'interior', 111, 'user'),
(394, 1, 0x2e6a7067, 'adassda', 500000, 2, 2, '', '', '5 x 5 m', '2 hari', 1, 1, 2, 1, '', 'interior', 113, 'user'),
(398, 1, '', 'sjhdgjhsadg siipp', 4000000, 2, 2, '', '', '5 x 5 m', '2 hari', 1, 1, 2, 1, '', 'interior', 118, 'user'),
(399, 5, '', 'mtapapssshh', 3000000, 2, 3, '', '', '4 x 3 m', '2 hari', 4, 1, 1, 1, '', 'art', 118, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `kisaran_budget` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `sudah_dibayar` int(11) NOT NULL,
  `gambar_transfer` tinyblob NOT NULL,
  `id_jenis_pengiriman` int(11) NOT NULL,
  `status` set('lunas','belum lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kisaran_budget`, `id_pembayaran`, `sudah_dibayar`, `gambar_transfer`, `id_jenis_pengiriman`, `status`) VALUES
(1, 0, 1, 0, '', 1, ''),
(54, 0, 3, 150000, '', 3, 'belum lunas'),
(55, 0, 3, 25000000, '', 3, 'belum lunas'),
(56, 0, 3, 4000000, '', 3, 'lunas'),
(57, 0, 3, 2500000, '', 3, 'belum lunas'),
(58, 0, 3, 0, '', 3, 'belum lunas'),
(61, 0, 3, 2000000, '', 3, 'belum lunas'),
(62, 0, 3, 2000000, '', 3, 'lunas'),
(64, 0, 3, 2000000, '', 3, 'belum lunas'),
(65, 0, 3, 3000000, '', 3, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `type_bangunan`
--

CREATE TABLE `type_bangunan` (
  `id_type_bangunan` int(11) NOT NULL,
  `type_bangunan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_bangunan`
--

INSERT INTO `type_bangunan` (`id_type_bangunan`, `type_bangunan`) VALUES
(1, ''),
(2, 'rumah tinggal'),
(3, 'apartemen'),
(4, 'restoran'),
(5, 'kantor');

-- --------------------------------------------------------

--
-- Table structure for table `warna_dominan`
--

CREATE TABLE `warna_dominan` (
  `id_warna_dominan` int(11) NOT NULL,
  `warna_dominan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warna_dominan`
--

INSERT INTO `warna_dominan` (`id_warna_dominan`, `warna_dominan`) VALUES
(1, ''),
(2, 'merah'),
(3, 'hitam'),
(4, 'hijau'),
(5, 'pink'),
(6, 'kuning'),
(7, 'biru'),
(8, 'orange'),
(9, 'coklat'),
(10, 'kayu'),
(13, 'abu-abu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `identitas`
--
ALTER TABLE `identitas`
  ADD PRIMARY KEY (`id_identitas`),
  ADD KEY `kode_pos` (`kode_pos`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `jenis_art`
--
ALTER TABLE `jenis_art`
  ADD PRIMARY KEY (`id_jenis_art`);

--
-- Indexes for table `jenis_furniture`
--
ALTER TABLE `jenis_furniture`
  ADD PRIMARY KEY (`id_jenis_furniture`);

--
-- Indexes for table `jenis_interior`
--
ALTER TABLE `jenis_interior`
  ADD PRIMARY KEY (`id_jenis_interior`);

--
-- Indexes for table `jenis_pengirim`
--
ALTER TABLE `jenis_pengirim`
  ADD PRIMARY KEY (`id_jenis_pengirim`);

--
-- Indexes for table `kode_pos`
--
ALTER TABLE `kode_pos`
  ADD PRIMARY KEY (`kode_pos`);

--
-- Indexes for table `lokasi_rekomendasi`
--
ALTER TABLE `lokasi_rekomendasi`
  ADD PRIMARY KEY (`id_lokasi_rekomendasi`);

--
-- Indexes for table `media_pembayaran`
--
ALTER TABLE `media_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `objek_foosel_admin`
--
ALTER TABLE `objek_foosel_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_bangunan` (`id_type_bangunan`),
  ADD KEY `id_lokasi_rekomendasi` (`id_lokasi_rekomendasi`),
  ADD KEY `id_warna_dominan` (`id_warna_dominan`),
  ADD KEY `id_jenis_art` (`id_jenis_art`),
  ADD KEY `id_jenis_interior` (`id_jenis_interior`),
  ADD KEY `id_jenis_furniture` (`id_jenis_furniture`),
  ADD KEY `identitas` (`identitas`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pembayaran` (`id_pembayaran`),
  ADD KEY `id_jenis_pengiriman` (`id_jenis_pengiriman`);

--
-- Indexes for table `type_bangunan`
--
ALTER TABLE `type_bangunan`
  ADD PRIMARY KEY (`id_type_bangunan`);

--
-- Indexes for table `warna_dominan`
--
ALTER TABLE `warna_dominan`
  ADD PRIMARY KEY (`id_warna_dominan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `identitas`
--
ALTER TABLE `identitas`
  MODIFY `id_identitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `jenis_art`
--
ALTER TABLE `jenis_art`
  MODIFY `id_jenis_art` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_furniture`
--
ALTER TABLE `jenis_furniture`
  MODIFY `id_jenis_furniture` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_interior`
--
ALTER TABLE `jenis_interior`
  MODIFY `id_jenis_interior` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_pengirim`
--
ALTER TABLE `jenis_pengirim`
  MODIFY `id_jenis_pengirim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lokasi_rekomendasi`
--
ALTER TABLE `lokasi_rekomendasi`
  MODIFY `id_lokasi_rekomendasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media_pembayaran`
--
ALTER TABLE `media_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `objek_foosel_admin`
--
ALTER TABLE `objek_foosel_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=400;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `type_bangunan`
--
ALTER TABLE `type_bangunan`
  MODIFY `id_type_bangunan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `warna_dominan`
--
ALTER TABLE `warna_dominan`
  MODIFY `id_warna_dominan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `identitas`
--
ALTER TABLE `identitas`
  ADD CONSTRAINT `identitas_ibfk_1` FOREIGN KEY (`kode_pos`) REFERENCES `kode_pos` (`kode_pos`),
  ADD CONSTRAINT `identitas_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `objek_foosel_admin`
--
ALTER TABLE `objek_foosel_admin`
  ADD CONSTRAINT `objek_foosel_admin_ibfk_13` FOREIGN KEY (`id_jenis_art`) REFERENCES `jenis_art` (`id_jenis_art`),
  ADD CONSTRAINT `objek_foosel_admin_ibfk_14` FOREIGN KEY (`id_jenis_furniture`) REFERENCES `jenis_furniture` (`id_jenis_furniture`),
  ADD CONSTRAINT `objek_foosel_admin_ibfk_16` FOREIGN KEY (`id_warna_dominan`) REFERENCES `warna_dominan` (`id_warna_dominan`),
  ADD CONSTRAINT `objek_foosel_admin_ibfk_5` FOREIGN KEY (`id_type_bangunan`) REFERENCES `type_bangunan` (`id_type_bangunan`),
  ADD CONSTRAINT `objek_foosel_admin_ibfk_6` FOREIGN KEY (`id_lokasi_rekomendasi`) REFERENCES `lokasi_rekomendasi` (`id_lokasi_rekomendasi`),
  ADD CONSTRAINT `objek_foosel_admin_ibfk_9` FOREIGN KEY (`id_jenis_interior`) REFERENCES `jenis_interior` (`id_jenis_interior`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_pembayaran`) REFERENCES `media_pembayaran` (`id_pembayaran`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_jenis_pengiriman`) REFERENCES `jenis_pengirim` (`id_jenis_pengirim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
