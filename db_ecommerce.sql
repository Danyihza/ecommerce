-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2020 at 06:03 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Joko', 'jojoko', 'joko');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `tanggal_artikel` date NOT NULL,
  `foto_artikel` varchar(256) NOT NULL,
  `status_artikel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dtransaksi`
--

CREATE TABLE `dtransaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_produk` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sirah'),
(2, 'Muslimah'),
(3, 'Anak');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_kmn` int(11) NOT NULL,
  `id_artikel` int(11) NOT NULL,
  `nama_kmn` varchar(100) NOT NULL,
  `email_kmn` varchar(100) NOT NULL,
  `isi_kmn` text NOT NULL,
  `waktu_kmn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(128) NOT NULL,
  `stok_produk` int(11) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `diskon_produk` int(11) DEFAULT NULL,
  `gambar_produk` varchar(255) NOT NULL,
  `kategori` int(11) NOT NULL,
  `link` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `harga_produk`, `diskon_produk`, `gambar_produk`, `kategori`, `link`) VALUES
(1, 'Nolan W. Murphy', 19, 30000, NULL, 'foto_cover.jpg', 1, ''),
(2, 'Indigo N. Whitaker', 12, 35000, NULL, 'foto_cover.jpg', 1, ''),
(3, 'Judith K. Golden', 1, 40000, NULL, 'foto_cover.jpg', 3, ''),
(4, 'Pandora G. Keller', 3, 45000, NULL, 'foto_cover.jpg', 3, ''),
(5, 'Velma L. Tanner', 11, 50000, NULL, 'foto_cover.jpg', 3, ''),
(6, 'Candace J. Herrera', 7, 55000, NULL, 'foto_cover.jpg', 3, ''),
(7, 'Herman M. Forbes', 3, 60000, NULL, 'foto_cover.jpg', 2, ''),
(8, 'Macey Y. Russo', 18, 65000, NULL, 'foto_cover.jpg', 3, ''),
(9, 'April F. Griffith', 13, 70000, NULL, 'foto_cover.jpg', 2, ''),
(10, 'Wayne N. Johnston', 5, 75000, NULL, 'foto_cover.jpg', 3, ''),
(11, 'Chaney Z. Mosley', 12, 80000, NULL, 'foto_cover.jpg', 1, ''),
(12, 'Zephania V. Byrd', 10, 85000, NULL, 'foto_cover.jpg', 1, ''),
(13, 'Lionel N. Mccullough', 1, 90000, NULL, 'foto_cover.jpg', 1, ''),
(14, 'Jasmine Z. Atkinson', 5, 95000, NULL, 'foto_cover.jpg', 1, ''),
(15, 'Nina J. Burton', 2, 100000, NULL, 'foto_cover.jpg', 3, ''),
(16, 'Brenna U. Macias', 13, 105000, NULL, 'foto_cover.jpg', 2, ''),
(17, 'Amos Z. Baker', 8, 110000, NULL, 'foto_cover.jpg', 1, ''),
(18, 'Hector U. Abbott', 9, 115000, NULL, 'foto_cover.jpg', 1, ''),
(19, 'Tatum R. Burnett', 8, 120000, NULL, 'foto_cover.jpg', 3, ''),
(20, 'Nathan U. Vargas', 20, 125000, NULL, 'foto_cover.jpg', 3, ''),
(21, 'Wanda M. Carney', 20, 130000, NULL, 'foto_cover.jpg', 2, ''),
(22, 'Echo M. Wilcox', 17, 135000, NULL, 'foto_cover.jpg', 2, ''),
(23, 'Rosalyn X. Collier', 16, 140000, NULL, 'foto_cover.jpg', 2, ''),
(24, 'Preston R. Potter', 2, 145000, NULL, 'foto_cover.jpg', 1, ''),
(25, 'Jessamine M. Gomez', 12, 150000, NULL, 'foto_cover.jpg', 3, ''),
(26, 'Jesse V. Cummings', 14, 155000, NULL, 'foto_cover.jpg', 2, ''),
(27, 'Gwendolyn X. Schmidt', 18, 160000, NULL, 'foto_cover.jpg', 2, ''),
(28, 'Wang H. Mcclure', 2, 165000, NULL, 'foto_cover.jpg', 3, ''),
(29, 'Cecilia P. Weaver', 10, 170000, NULL, 'foto_cover.jpg', 1, ''),
(30, 'Lane R. Ball', 11, 175000, NULL, 'foto_cover.jpg', 3, ''),
(31, 'Jordan F. Sargent', 4, 180000, NULL, 'foto_cover.jpg', 3, ''),
(32, 'Leonard A. Salinas', 16, 185000, NULL, 'foto_cover.jpg', 3, ''),
(33, 'Bertha T. Quinn', 8, 190000, NULL, 'foto_cover.jpg', 1, ''),
(34, 'Reese G. Guthrie', 20, 195000, NULL, 'foto_cover.jpg', 2, ''),
(35, 'Jaime U. Raymond', 16, 200000, NULL, 'foto_cover.jpg', 3, ''),
(36, 'Lois E. Butler', 11, 205000, NULL, 'foto_cover.jpg', 1, ''),
(37, 'Olympia U. Mcknight', 20, 210000, NULL, 'foto_cover.jpg', 2, ''),
(38, 'Jillian U. Bush', 17, 215000, NULL, 'foto_cover.jpg', 1, ''),
(39, 'Cooper O. Sweeney', 2, 220000, NULL, 'foto_cover.jpg', 1, ''),
(40, 'Dustin X. Madden', 18, 225000, NULL, 'foto_cover.jpg', 3, ''),
(41, 'Kirsten E. Kline', 14, 230000, NULL, 'foto_cover.jpg', 2, ''),
(42, 'Lane B. Fisher', 20, 235000, NULL, 'foto_cover.jpg', 3, ''),
(43, 'Darryl N. Armstrong', 19, 240000, NULL, 'foto_cover.jpg', 2, ''),
(44, 'Igor P. Williamson', 18, 245000, NULL, 'foto_cover.jpg', 2, ''),
(45, 'Desiree H. Blair', 8, 250000, NULL, 'foto_cover.jpg', 3, ''),
(46, 'Russell T. Key', 9, 255000, NULL, 'foto_cover.jpg', 3, ''),
(47, 'Gary C. Sweet', 11, 260000, NULL, 'foto_cover.jpg', 1, ''),
(48, 'Hasad C. Chen', 10, 265000, NULL, 'foto_cover.jpg', 1, ''),
(49, 'Geraldine O. Grimes', 3, 270000, NULL, 'foto_cover.jpg', 3, ''),
(50, 'Edan H. Tucker', 1, 275000, NULL, 'foto_cover.jpg', 1, ''),
(51, 'Kirk S. Weeks', 9, 280000, NULL, 'foto_cover.jpg', 1, ''),
(52, 'May Z. Tyson', 1, 285000, NULL, 'foto_cover.jpg', 3, ''),
(53, 'Peter X. Rollins', 4, 290000, NULL, 'foto_cover.jpg', 3, ''),
(54, 'Helen L. Gardner', 3, 295000, NULL, 'foto_cover.jpg', 1, ''),
(55, 'Xander A. Finley', 16, 300000, NULL, 'foto_cover.jpg', 1, ''),
(56, 'Joshua D. Hernandez', 8, 305000, NULL, 'foto_cover.jpg', 2, ''),
(57, 'Hakeem C. Dixon', 12, 310000, NULL, 'foto_cover.jpg', 1, ''),
(58, 'Renee Z. Wilkinson', 8, 315000, NULL, 'foto_cover.jpg', 1, ''),
(59, 'Wing Q. Booker', 15, 320000, NULL, 'foto_cover.jpg', 3, ''),
(60, 'Joshua B. Crane', 12, 325000, NULL, 'foto_cover.jpg', 2, ''),
(61, 'Amy F. Campbell', 6, 330000, NULL, 'foto_cover.jpg', 1, ''),
(62, 'Kylynn P. Spears', 19, 335000, NULL, 'foto_cover.jpg', 3, ''),
(63, 'Dillon G. Gomez', 6, 340000, NULL, 'foto_cover.jpg', 3, ''),
(64, 'Quincy N. Booth', 9, 345000, NULL, 'foto_cover.jpg', 2, ''),
(65, 'Alma G. Baxter', 10, 350000, NULL, 'foto_cover.jpg', 2, ''),
(66, 'Connor X. Morton', 18, 355000, NULL, 'foto_cover.jpg', 2, ''),
(67, 'Desiree J. Rhodes', 1, 360000, NULL, 'foto_cover.jpg', 1, ''),
(68, 'Uta S. Bender', 2, 365000, NULL, 'foto_cover.jpg', 2, ''),
(69, 'Colette A. Humphrey', 11, 370000, NULL, 'foto_cover.jpg', 2, ''),
(70, 'Carlos C. Stein', 16, 375000, NULL, 'foto_cover.jpg', 3, ''),
(71, 'Meghan A. Shaw', 7, 380000, NULL, 'foto_cover.jpg', 3, ''),
(72, 'Venus C. Guerrero', 19, 385000, NULL, 'foto_cover.jpg', 3, ''),
(73, 'Sophia L. Swanson', 7, 390000, NULL, 'foto_cover.jpg', 2, ''),
(74, 'Debra F. Hubbard', 11, 395000, NULL, 'foto_cover.jpg', 1, ''),
(75, 'Bianca I. Becker', 3, 400000, NULL, 'foto_cover.jpg', 2, ''),
(76, 'Colby K. Robertson', 18, 405000, NULL, 'foto_cover.jpg', 3, ''),
(77, 'Echo Z. Wallace', 18, 410000, NULL, 'foto_cover.jpg', 1, ''),
(78, 'Chanda C. Bryan', 4, 415000, NULL, 'foto_cover.jpg', 1, ''),
(79, 'Macey E. Carney', 18, 420000, NULL, 'foto_cover.jpg', 2, ''),
(80, 'Hector X. Nolan', 18, 425000, NULL, 'foto_cover.jpg', 3, ''),
(81, 'Heidi W. Foster', 19, 430000, NULL, 'foto_cover.jpg', 1, ''),
(82, 'Mannix X. Price', 20, 435000, NULL, 'foto_cover.jpg', 1, ''),
(83, 'Piper Q. Mccall', 12, 440000, NULL, 'foto_cover.jpg', 1, ''),
(84, 'Yen I. Baird', 16, 445000, NULL, 'foto_cover.jpg', 2, ''),
(85, 'Plato R. Downs', 6, 450000, NULL, 'foto_cover.jpg', 3, ''),
(86, 'Iris W. Sanford', 8, 455000, NULL, 'foto_cover.jpg', 2, ''),
(87, 'Kerry R. Griffith', 5, 460000, NULL, 'foto_cover.jpg', 3, ''),
(88, 'Florence J. Thomas', 18, 465000, NULL, 'foto_cover.jpg', 3, ''),
(89, 'Hamish W. Blanchard', 11, 470000, NULL, 'foto_cover.jpg', 3, ''),
(90, 'Denise A. Leblanc', 12, 475000, NULL, 'foto_cover.jpg', 2, ''),
(91, 'Ali J. Herrera', 6, 480000, NULL, 'foto_cover.jpg', 2, ''),
(92, 'Arsenio K. Prince', 12, 485000, NULL, 'foto_cover.jpg', 3, ''),
(93, 'Kamal W. Spears', 6, 490000, NULL, 'foto_cover.jpg', 2, ''),
(94, 'Clark N. Joyner', 20, 495000, NULL, 'foto_cover.jpg', 2, ''),
(95, 'Eric E. Mejia', 3, 500000, NULL, 'foto_cover.jpg', 2, ''),
(96, 'Derek Q. Perkins', 2, 505000, NULL, 'foto_cover.jpg', 3, ''),
(97, 'Cedric L. Rivera', 1, 510000, NULL, 'foto_cover.jpg', 2, ''),
(98, 'John X. Yates', 20, 515000, NULL, 'foto_cover.jpg', 2, ''),
(99, 'Tatum A. Mcconnell', 8, 520000, NULL, 'foto_cover.jpg', 3, ''),
(100, 'Solomon E. Navarro', 11, 525000, NULL, 'foto_cover.jpg', 2, 'solomon-e-navarro');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `email_pembeli` varchar(100) NOT NULL,
  `alamat_pembeli` varchar(256) NOT NULL,
  `kab_pembeli` varchar(100) NOT NULL,
  `kec_pembeli` varchar(100) NOT NULL,
  `no_pembeli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `nama_ulasan` varchar(100) NOT NULL,
  `isi_ulasan` varchar(256) NOT NULL,
  `rating_ulasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `dtransaksi`
--
ALTER TABLE `dtransaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_kmn`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_kmn` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dtransaksi`
--
ALTER TABLE `dtransaksi`
  ADD CONSTRAINT `detail_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
