-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2013 at 05:00 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phonebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataphonebook`
--

CREATE TABLE IF NOT EXISTS `dataphonebook` (
  `id_phonebook` int(11) NOT NULL AUTO_INCREMENT,
  `nama_phonebook` varchar(255) NOT NULL,
  `telepon_phonebook` varchar(15) NOT NULL,
  `alamat_phonebook` text NOT NULL,
  PRIMARY KEY (`id_phonebook`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `dataphonebook`
--

INSERT INTO `dataphonebook` (`id_phonebook`, `nama_phonebook`, `telepon_phonebook`, `alamat_phonebook`) VALUES
(7, 'Gunawan', '08138722222', 'Jalan Jakarta No 13'),
(8, 'Bayumi', '081287777888777', 'Jalan Berjamaah beribadah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
