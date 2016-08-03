-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 06:39 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `factura`
--

INSERT INTO `factura` (`fact_id`, `date`, `company`, `price`, `tip`, `card`, `comment`, `ext`, `owner`, `created_date`, `created_by`) VALUES
(5, '2016-03-06', 'Rest. Mathilda', 1920, 100, 2136, 'Cena despues de cata Inprotec (turismo)', 'pdf', '1', '2016-04-01', 2),
(6, '2016-04-04', 'Colmado', 70, 0, 9674, 'Compra de hielo reunion Monin (efectivo)', 'pdf', '1', '2016-04-04', 2),
(16, '2016-04-20', 'Blue Jacktar hotel', 3718.4, 200, 2136, 'Cena visita Karla Castro', 'pdf', '1', '2016-04-25', 1),
(17, '2016-04-22', 'Kilometro Cero', 1511, 0, 2136, 'Almuerzo visita Karla Castro', 'pdf', '1', '2016-04-25', 1),
(18, '2016-05-03', 'Kilometro Cero', 896, 0, 2136, 'Visita por sesion de fotos, del 03 al 05 de mayo 2016', '', '1', '0000-00-00', 0),
(19, '2016-05-03', 'La Tarappa de Franz', 473, 100, 2136, 'Visita por sesion de fotos, del 03 al 05 de mayo 2016', '', '1', '0000-00-00', 0),
(20, '2016-05-05', 'Restaurante Tipico B', 659, 100, 2136, 'Visita por sesion de fotos, del 03 al 05 de mayo 2016 ', '', '1', '0000-00-00', 0),
(21, '2016-05-25', 'Restaurante Tipico B', 761, 0, 2136, 'Cena viaje bloggers de Carnival', '', '1', '0000-00-00', 0),
(22, '2016-05-25', 'La Tarapa de Franz', 473, 100, 2136, 'Almuerzo visita bloggers POP Carnival', '', '1', '0000-00-00', 0),
(23, '2016-05-25', 'Shell Poza Castill', 1807, 0, 2136, 'Viaje visita bloggers POP Carnival', '', '1', '0000-00-00', 0),
(24, '2016-06-06', 'Farmacia Carol ', 1052, 0, 2136, 'Compra de medicamentos para Botiquin, Brand Inmersion', '', '1', '0000-00-00', 0),
(25, '2016-06-08', 'Ocean World', 912, 100, 2136, 'Salida con grupo Brand Inmersion', '', '1', '0000-00-00', 0),
(26, '2016-06-08', 'Shell La Rada', 1150, 0, 9674, 'Gasolina SDQ - POP ', '', '1', '0000-00-00', 0),
(27, '2016-06-10', 'La Carichuela', 626, 0, 2136, 'Salida con grupo Brand Inmersion', '', '1', '0000-00-00', 0),
(28, '2016-06-10', 'Rest. Tipico Bonao', 761, 100, 2136, 'Almuerzo regreso BI', '', '1', '0000-00-00', 0),
(29, '2016-06-10', 'La Esquina de Chalo', 1300, 300, 2136, 'Salida con grupo BI', '', '1', '0000-00-00', 0),
(30, '2016-06-09', 'La Tarappa de Franz', 8755, 200, 2136, 'Almuerzo grupo Brand Inmersion, mas Eglys Martinez y Miguel Ripoll', '', '1', '0000-00-00', 0),
(31, '2016-06-08', 'Rest. Las Palmas', 3827, 100, 2136, 'Almuerzo llegada a BI con David Baxter y Kas khikikk', '', '1', '0000-00-00', 0),
(32, '2016-06-08', 'Bottles', 564, 100, 2136, 'Sin comprobante fiscal', '', '1', '0000-00-00', 0),
(33, '2016-05-29', 'Kilometro Cero', 448, 0, 2136, 'Almuerzo visita EE.UU', '', '1', '0000-00-00', 0),
(34, '2016-05-31', 'Tipico Bonao', 947, 100, 2136, 'Cena con Cindy Hache', '', '1', '0000-00-00', 0),
(35, '2016-06-22', 'TARAPA DE FRANZ', 768, 100, 2136, 'ALMUERZO DESPUES DE VISITA POP', '', '1', '0000-00-00', 0),
(36, '2016-06-23', 'BLUE JACK TAR', 1280, 100, 2136, 'ALMUERZO DESPUES DE ENTRENAMIENTO WEBB', '', '1', '0000-00-00', 0),
(37, '2016-06-22', 'RAGONZA INVERSIONES', 2497, 0, 2136, 'COMPRA INGREDIENTES ENTRENAMIENTO WEBB', '', '1', '0000-00-00', 0),
(38, '2016-06-22', 'BLUE JACK TAR', 1510, 100, 2136, 'CENA ANTES DE ENTRENAMIENTO WEBB', '', '1', '0000-00-00', 0),
(39, '2016-06-30', 'Sonoma Bistro Pianti', 1996, 100, 2136, 'Cena horario extendido Jose Inoa, ayudante y Pavol Kazimir.', 'jpeg', '1', '0000-00-00', 0),
(40, '2016-07-19', 'Restaurate Tipico Bo', 992, 100, 2136, 'Cena de vuelta del POP evaluacion guias.', '', '1', '0000-00-00', 0),
(41, '2016-07-19', 'La Tarappa de Franz', 1228, 100, 2136, 'Almuerzo antes evaluacion guias POP\r\nMiguel Ripoll y Pavol Kazimir', '', '1', '0000-00-00', 0);

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
