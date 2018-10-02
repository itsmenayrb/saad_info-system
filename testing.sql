/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.35-MariaDB : Database - barangaysalitranii
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`barangaysalitranii` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `barangaysalitranii`;

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `block` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `subdivision` varchar(255) NOT NULL,
  `barangay` varchar(255) DEFAULT 'Salitran II',
  `city` varchar(255) DEFAULT 'Dasmariñas',
  `province` varchar(255) DEFAULT 'Cavite',
  `country` varchar(255) DEFAULT 'Philippines',
  `zipcode` int(11) DEFAULT '4114',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `address` */

/*Table structure for table `residents` */

DROP TABLE IF EXISTS `residents`;

CREATE TABLE `residents` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Prefix` varchar(255) NOT NULL,
  `FirstName` varchar(256) NOT NULL,
  `MiddleName` varchar(256) NOT NULL,
  `LastName` varchar(256) NOT NULL,
  `Suffix` varchar(256) NOT NULL,
  `Sex` varchar(255) NOT NULL,
  `Bday` date NOT NULL,
  `Bplace` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `TelephoneNumber` bigint(11) NOT NULL,
  `CellphoneNumber` bigint(11) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SecurityQuestion1` varchar(255) NOT NULL,
  `SecurityQuestion2` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `TokenSum` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
