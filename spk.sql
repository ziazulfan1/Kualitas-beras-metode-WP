-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 11:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id_alternatif` varchar(20) NOT NULL,
  `alternatif` varchar(50) NOT NULL,
  `k1` varchar(20) NOT NULL,
  `k2` varchar(20) NOT NULL,
  `k3` varchar(20) NOT NULL,
  `k4` varchar(20) NOT NULL,
  `k5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `k1`, `k2`, `k3`, `k4`, `k5`) VALUES
('13', 'Rumoh Aceh', '5', '3', '5', '4', '4'),
('14', 'Hekagata', '5', '3', '3', '3', '2'),
('15', 'Cap Garuda Emas', '4', '3', '3', '3', '2'),
('175721', 'Ramos Mutiara Wangi', '4', '3', '4', '3', '3'),
('179352', 'Cap Ayam Merah', '4', '2', '3', '3', '2'),
('220093', 'Ramos Mutiara Special', '5', '3', '4', '4', '3'),
('222962', 'Ramos Mutiara Pase', '5', '3', '4', '3', '3'),
('878357', 'Rajawali', '4', '2', '3', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` varchar(20) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `kepentingan` varchar(20) NOT NULL,
  `cost_benefit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `kepentingan`, `cost_benefit`) VALUES
('1', 'c1 Bentuk', '4', 'benefit'),
('2', 'c2 Kebersihan', '5', 'benefit'),
('3', 'c3 harga', '4', 'cost'),
('4', 'c4 Warna', '4', 'benefit'),
('5', 'c5 Kepulenan', '3', 'benefit');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `foto`, `deskripsi`) VALUES
(6, 'Rumoh Aceh', 'h.jpg', 'Beras rumoh aceh bentuknya utuh, bersih, dan berwarna putih dari segi kepulenan beras rumoh aceh ini sangat pulen harga kisaran lebih dari 15.000'),
(7, 'Hekagata', 'r.jpeg', 'Beras hekagata bentuknya utuh, bersih, dan berwarna putih kekuningan dari segi kepulenan beras hekagata ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000'),
(8, 'Cap Garuda Emas', 'b.jpeg', 'Beras cap garuda emas bentuknya patah, bersih, dan berwarna putih kekuningan dari segi kepulenan beras cap garuda emas ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000'),
(9, 'Ramos Mutiara Wangi', 'c.jpeg', 'Beras ramos mutiara wangi bentuknya patah, bersih, dan berwarna putih kekuningan dari segi kepulenan beras ramos mutiara wangi ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000'),
(10, 'Cap Ayam Merah', 'a.jpeg', 'Beras cap ayam merah bentuknya patah, kurang bersih, dan berwarna putih kekuningan dari segi kepulenan beras cap ayam merah ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000'),
(11, 'Ramos Mutiara Special', 'e.jpeg', 'Beras ramos mutiara special bentuknya utuh, bersih, dan berwarna putih dari segi kepulenan beras ramos mutiara special ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000'),
(12, 'Ramos Mutiara Pase', 'd.jpeg', 'Beras ramos mutiara pase bentuknya utuh, bersih, dan berwarna putih kekuningan dari segi kepulenan beras ramos mutiara pase ini pulen harga kisaran lebih dari 12.000 dan kurang dari 15.000'),
(13, 'Rajawali', '8856754_eeebab5a-0e0a-4714-90cb-af12ef6cffad_1057_1057.jpg', 'Beras rajawali bentuknya patah, kurang bersih, dan berwarna kuning muda dari segi kepulenan beras rajawali ini cukup pulen harga kisaran lebih dari 10.000 dan kurang dari 12.000');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `komen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`id`, `nama`, `email`, `komen`) VALUES
(7, 'riani', 'riani@gmail.com', 'website responsive dan mudah dimengerti.'),
(9, 'sriwahyuni', 'sriwahyuni@gmail.com', 'website sangat menarik saya bisa menyampaikan suatu hal yang saya ingin sampaikan untuk instansi pemerintah, semoga kedepan bisa ditambahkan fitur-fiturnya'),
(11, 'susanti', 'susanti@gmail.com', 'sistem ini sangat membantu para konsumen'),
(12, 'siska', 'siska@gmail.com', 'sistem ini sangat membantu dalam pemilihan kualitas beras di kilang padi aceh utara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('User') NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `email`, `nama`) VALUES
(43, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'User', 'ex@ex.com', 'admin'),
(47, 'rika', 'e32994c67f9a773e841f9e97bd26f014', 'User', 'rikaaulia150219@gmail.com', 'Rika Aulia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
