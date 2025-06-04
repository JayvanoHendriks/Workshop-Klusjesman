-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2025 at 09:40 AM
-- Server version: 5.7.17
-- PHP Version: 8.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klusjesman`
--
CREATE DATABASE IF NOT EXISTS `klusjesman` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `klusjesman`;

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `telefooonnummer` varchar(20) DEFAULT NULL,
  `emailadres` varchar(100) DEFAULT NULL,
  `straat` varchar(100) DEFAULT NULL,
  `postcode` varchar(10) DEFAULT NULL,
  `plaats` varchar(100) DEFAULT NULL,
  `Adres` varchar(75) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`id`, `name`, `telefooonnummer`, `emailadres`, `straat`, `postcode`, `plaats`, `Adres`) VALUES
(1, 'Anna von Smiths', '06 25217445', 'BottenJager@gmail.com', NULL, NULL, NULL, 'LeenbakkerStraat 123, 6801 BJ, Duiven'),
(2, 'Bas', '06 25217445', 'Jayvano.hendriks@gmail.com', NULL, NULL, NULL, 'Willem De zwijgerlaan 225, 6904 CK, Zevenaar'),
(3, 'Bas', '06 25217445', 'BottenJager@gmail.com', NULL, NULL, NULL, 'Willem De zwijgerlaan 227, 6904 CK, Zevenaar'),
(4, 'Jayvano Hendriks', '06 25217445', 'Jayvano.hendriks@gmail.com', NULL, NULL, NULL, 'Willem De zwijgerlaan 225, 6904 CK, Zevenaar'),
(5, 'Jelle huz', '234567890', 'jelle@gamil.com', NULL, NULL, NULL, 'Kampstraat, 6103 HG, Zevenaar'),
(6, 'Melle Boldik', '06 25217445', 'Melle@gmail.com', 'LeenbakkerStraat 3412', '6801 BJ', 'Lobith', NULL),
(7, 'Melle Boldik', '06 25217445', 'Melle@gmail.com', NULL, NULL, NULL, 'LeenbakkerStraat 123, 6904 CK, Lobith'),
(8, 'Melle Boldik', '06 25217445', 'Jayvano.hendriks@gmail.com', NULL, NULL, NULL, 'Willem De zwijgerlaan 227, 6801 BJ, Duiven');

-- --------------------------------------------------------

--
-- Table structure for table `klus`
--

CREATE TABLE `klus` (
  `id` int(11) NOT NULL,
  `klantid` int(11) DEFAULT NULL,
  `adres` varchar(150) DEFAULT NULL,
  `gewerkteMinuten` int(11) DEFAULT NULL,
  `voorrijkosten` float(10,2) DEFAULT NULL,
  `uurtarief` float(10,2) DEFAULT NULL,
  `inkopenNodig` tinyint(1) DEFAULT NULL,
  `extraKosten` float(10,2) DEFAULT NULL,
  `totaalBedrag` float(10,2) DEFAULT NULL,
  `omschijving` varchar(255) DEFAULT NULL,
  `wanneerIetsGedaan` date NOT NULL,
  `WatGedaan` varchar(150) DEFAULT NULL,
  `opmerkingen` text,
  `gefactureerd` tinyint(1) DEFAULT NULL,
  `betaald` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `klus`
--

INSERT INTO `klus` (`id`, `klantid`, `adres`, `gewerkteMinuten`, `voorrijkosten`, `uurtarief`, `inkopenNodig`, `extraKosten`, `totaalBedrag`, `omschijving`, `wanneerIetsGedaan`, `WatGedaan`, `opmerkingen`, `gefactureerd`, `betaald`) VALUES
(45, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(37, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-07', 'Bakken vervangen', NULL, NULL, NULL),
(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-17', 'Bakken vervangen', NULL, NULL, NULL),
(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-17', 'Bakken vervangen', NULL, NULL, NULL),
(32, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-20', 'Bakken vervangen', NULL, NULL, NULL),
(31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-05-20', 'Bakken vervangen', NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-02-13', 'Bakken vervangen', NULL, NULL, NULL),
(59, 4, 'Willem De zwijgerlaan 228, 6904 CK, Zevenaar', 0, 0.00, 0.00, 0, 0.00, 0.00, 'test', '2025-05-21', 'Geholpen met verstopte wc', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `klus_materialen`
--

CREATE TABLE `klus_materialen` (
  `id` int(11) NOT NULL,
  `klus_id` int(11) NOT NULL,
  `materiaal_id` int(11) NOT NULL,
  `aantal_gebruikt` int(11) NOT NULL,
  `TotaalPrijs` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materialen`
--

CREATE TABLE `materialen` (
  `id` int(11) NOT NULL,
  `naam` varchar(100) NOT NULL,
  `aantal_op_vooraad` int(11) NOT NULL,
  `prijs_per_stuk` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materialen`
--

INSERT INTO `materialen` (`id`, `naam`, `aantal_op_vooraad`, `prijs_per_stuk`) VALUES
(1, 'Metaal', 502, '2.10'),
(2, 'Houten Balk', 23, '3.40'),
(3, 'Schroeven M5', 169, '0.05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klus`
--
ALTER TABLE `klus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klus_materialen`
--
ALTER TABLE `klus_materialen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materialen`
--
ALTER TABLE `materialen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `klus`
--
ALTER TABLE `klus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `klus_materialen`
--
ALTER TABLE `klus_materialen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materialen`
--
ALTER TABLE `materialen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
