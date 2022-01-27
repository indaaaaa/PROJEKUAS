-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 01:02 PM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_barang`
--

CREATE TABLE IF NOT EXISTS `table_barang` (
`id_barang` int(11) NOT NULL,
  `Nama_Barang` varchar(50) NOT NULL,
  `Harga_Jual` int(11) NOT NULL,
  `Harga_Beli` int(11) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Gambar` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `table_barang`
--

INSERT INTO `table_barang` (`id_barang`, `Nama_Barang`, `Harga_Jual`, `Harga_Beli`, `Deskripsi`, `Gambar`) VALUES
(12, 'Gel Hut Munt', 10000, 50000, 'Obat Komedo', 'Gel Hut Munt.jpg'),
(13, 'Aloevera', 10000, 5, 'Jerawat', 'Aloevera.jpg'),
(14, 'Masker Kunyit', 10000, 5000, 'Khusus Jerawat', 'Kunyit.jfif'),
(15, 'Masker Susu', 15, 10, 'Menghaluskan dan Mencerahkan Wajah', 'Susu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Hak_akses` enum('Admin','Kasir','','') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Nama`, `Username`, `Password`, `Hak_akses`) VALUES
(3, 'Indah', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_barang`
--
ALTER TABLE `table_barang`
 ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_barang`
--
ALTER TABLE `table_barang`
MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
