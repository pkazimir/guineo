# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: guineo
# Generation Time: 2016-04-04 22:28:13 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table factura
# ------------------------------------------------------------

DROP TABLE IF EXISTS `factura`;

CREATE TABLE `factura` (
  `fact_id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `company` varchar(20) NOT NULL DEFAULT '',
  `price` float NOT NULL,
  `tip` float DEFAULT NULL,
  `card` int(11) NOT NULL,
  `comment` text,
  `owner` int(11) NOT NULL,
  PRIMARY KEY (`fact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `factura` WRITE;
/*!40000 ALTER TABLE `factura` DISABLE KEYS */;

INSERT INTO `factura` (`fact_id`, `date`, `company`, `price`, `tip`, `card`, `comment`, `owner`)
VALUES
	(5,'2016-03-06','Rest. Mathilda',1920,100,2136,'Cena despues de cata Inprotec (turismo)',1),
	(6,'2016-04-04','Colmado',70,0,9674,'Compra de hielo reunion Monin (efectivo)',1);

/*!40000 ALTER TABLE `factura` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;

INSERT INTO `user` (`user_id`, `username`)
VALUES
	(1,'pkazimir'),
	(2,'aaguero'),
	(3,'kgarcia');

/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
