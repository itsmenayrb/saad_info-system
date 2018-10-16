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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `address` */

insert  into `address`(`id`,`block`,`street`,`subdivision`,`barangay`,`city`,`province`,`country`,`zipcode`) values 
(1,'asldkjasldkj','asldkj','asdlkj','Salitran II','Dasmariñas','Cavite','Philippines',4114);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `TokenSum` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Token` varchar(255) NOT NULL,
  `TokenSum` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

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
  `Age` int(11) NOT NULL,
  `Bplace` varchar(256) NOT NULL,
  `Homeaddress` varchar(256) NOT NULL,
  `TelephoneNumber` VARCHAR(20) NOT NULL,
  `CellphoneNumber` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

insert  into `residents`(`user_ID`,`Prefix`,`FirstName`,`MiddleName`,`LastName`,`Suffix`,`Sex`,`Bday`,`Age`,`Bplace`,`Homeaddress`,`TelephoneNumber`,`CellphoneNumber`) values 
(1,'Mr','bryan','villanueva','balaga','Jr','Male','1994-10-13',24,'oaisdaosdj','asldkjasldkj asldkj asdlkj Barangay Salitran II, DasmariÃ±as City, Cavite, Philippines, 4114. ',0,0);

/*Table structure for table `subusers` */

DROP TABLE IF EXISTS `subusers`;

CREATE TABLE `subusers` (
  `id` int(11) NOT NULL,
  `relationship` varchar(25) NOT NULL,
  `prefix` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `suffix` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `homeaddress` varchar(255) NOT NULL,
  `telephonenumber` bigint(11) NOT NULL,
  `cellphonenumber` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subusers` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SecurityQuestion1` varchar(255) NOT NULL,
  `AnswerOne` varchar(255) NOT NULL,
  `SecurityQuestion2` varchar(255) NOT NULL,
  `AnswerTwo` varchar(255) NOT NULL,
  `Token` varchar(255),
  `TokenSum` varchar(255),
  `DateCreated` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `relationship`;

CREATE TABLE `relationship` (
  `FromUser` INTEGER NOT NULL,
  `Relation` INTEGER NOT NULL,
  `ToUser` INTEGER NOT NULL
);

/*Data for the table `users` */

insert  into `users`(`id`,`Username`,`Password`,`Email`,`SecurityQuestion1`,`AnswerOne`,`SecurityQuestion2`,`AnswerTwo`,`Token`,`TokenSum`,`DateCreated`) values 
(1,'bryan','$2y$10$7uggTOWb.vqjbpYOVfx4WuN0HZvc5jjK.UfvLYv8wFh4b97wIiPMK','bryan@gmail.com','Name_First_Pet','123','Father_Middle_Name','123','','','2018-10-15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
