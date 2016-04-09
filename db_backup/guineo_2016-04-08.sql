-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2016 at 12:14 AM
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
-- Table structure for table `card`
--

DROP TABLE IF EXISTS `card`;
CREATE TABLE IF NOT EXISTS `card` (
  `user_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `payment_id` int(11) DEFAULT NULL,
  UNIQUE KEY `number_2` (`number`),
  KEY `user_id` (`user_id`),
  KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`user_id`, `number`, `payment_id`) VALUES
(1, 2136, 2),
(1, 9674, 3);

-- --------------------------------------------------------

--
-- Table structure for table `factura`
--

DROP TABLE IF EXISTS `factura`;
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
(6, '2016-04-04', 'Colmado', 70, 0, 9674, 'Compra de hielo reunion Monin (efectivo)', 'pdf', '1', '2016-04-04', 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `type` int(11) NOT NULL,
  UNIQUE KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `name`, `type`) VALUES
(1, 'Efectivo', 1),
(2, 'Tarjeta Corporativa', 2),
(3, 'Tarjeta Personal', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
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
