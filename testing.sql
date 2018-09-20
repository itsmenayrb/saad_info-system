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

/*Table structure for table `residents` */

DROP TABLE IF EXISTS `residents`;

CREATE TABLE `residents` (
  `user_ID` int(11) NOT NULL AUTO_INCREMENT,
  `LastName` varchar(256) NOT NULL,
  `FirstName` varchar(256) NOT NULL,
  `MiddleName` varchar(256) NOT NULL,
  `Suffix` varchar(256) NOT NULL,
  `Bday` date NOT NULL,
  `Bplace` varchar(256) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `ContactNumber` int(11) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `Password` varchar(256) NOT NULL,
  `SecQuestion1` varchar(256) NOT NULL,
  `SecQuestion2` varchar(256) NOT NULL,
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `residents` */

insert  into `residents`(`user_ID`,`LastName`,`FirstName`,`MiddleName`,`Suffix`,`Bday`,`Bplace`,`Address`,`ContactNumber`,`Email`,`Username`,`Password`,`SecQuestion1`,`SecQuestion2`) values 
(8,'Balaga','Bryan','','','0000-00-00','','',0,'123@gmail.com','brybry','$2y$10$HQmpI2EM1J/rMm8U/itaReCQxqTMqUmJj1n7kFzHoOyVM6RDFen7O','',''),
(9,'Balaga','Bryan','','','0000-00-00','','',0,'asdasd','bryan','$2y$10$gk.Ttg23Kay6p6auf.YNsORjEbrTX/ItePbrxny2zoYu/bBsbDx7W','','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
