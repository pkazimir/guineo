-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 11:59 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guineo`
--

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `fact_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `company` varchar(20) NOT NULL DEFAULT '',
  `price` float NOT NULL,
  `tip` float DEFAULT NULL,
  `card` int(11) NOT NULL,
  `comment` text,
  `ext` varchar(5) NOT NULL,
  `owner` varchar(20) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`fact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`fact_id`, `date`, `company`, `price`, `tip`, `card`, `comment`, `ext`, `owner`, `created_date`, `created_by`) VALUES
(5, '2016-03-06', 'Rest. Mathilda', 1920, 100, 2136, 'Cena despues de cata Inprotec (turismo)', 'pdf', '1', '2016-04-01', 2),
(6, '2016-04-04', 'Colmado', 70, 0, 9674, 'Compra de hielo reunion Monin (efectivo)', 'pdf', '1', '2016-04-04', 2),
(14, '2016-04-02', '123', 123, 123, 2136, '123', 'png', '1', '2016-04-07', 1),
(15, '2016-04-14', 'znova', 123, 123, 2136, '123', 'jpeg', '2', '2016-04-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`) VALUES
(1, 'pkazimir'),
(2, 'aaguero'),
(3, 'kgarcia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
