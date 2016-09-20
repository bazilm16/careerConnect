-- MySQL dump 10.13  Distrib 5.7.15, for osx10.11 (x86_64)
--
-- Host: localhost    Database: cc_user_info
-- ------------------------------------------------------
-- Server version	5.7.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `companyAccounts`
--

DROP TABLE IF EXISTS `companyAccounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companyAccounts` (
  `accId` varchar(60) NOT NULL,
  `companyName` varchar(100) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(60) NOT NULL,
  `country` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `accountType` varchar(15) NOT NULL,
  `dateCreated` bigint(30) NOT NULL,
  PRIMARY KEY (`accId`),
  UNIQUE KEY `accId` (`accId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companyAccounts`
--

LOCK TABLES `companyAccounts` WRITE;
/*!40000 ALTER TABLE `companyAccounts` DISABLE KEYS */;
INSERT INTO `companyAccounts` VALUES ('','Xerroe','technology','','','','a@a.a','','a','company',1469463079),('57963eab3196957963eab31973','Xerroe Inc.','technology','','','','mupisiri@grinnell.edu','','$2y$10$Bc6G4q45W3fXvFS3nJgI9OCiw2rHlj5sVgPTBZLBWhZb2lUvXgh3i','company',1469464235),('57963ee32b48c57963ee32b498','Facebook Inc.','business','','','','mupisiri@grinnell.edu','','$2y$10$Bc6G4q45W3fXvFS3nJgI9OCiw2rHlj5sVgPTBZLBWhZb2lUvXgh3i','company',1469464291);
/*!40000 ALTER TABLE `companyAccounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `individualAccounts`
--

DROP TABLE IF EXISTS `individualAccounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `individualAccounts` (
  `accId` varchar(60) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `profilename` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `college` varchar(50) NOT NULL,
  `studies` varchar(50) NOT NULL,
  `currentCity` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `password` varchar(120) NOT NULL,
  `accountType` varchar(15) NOT NULL,
  `dateCreated` bigint(30) NOT NULL,
  PRIMARY KEY (`accId`),
  UNIQUE KEY `accId` (`accId`),
  UNIQUE KEY `accId_2` (`accId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individualAccounts`
--

LOCK TABLES `individualAccounts` WRITE;
/*!40000 ALTER TABLE `individualAccounts` DISABLE KEYS */;
INSERT INTO `individualAccounts` VALUES ('579636dd60b5d579636dd60b67','Bazil','','Mupisiri','Bazil Mupisiri','male','','','','mupisiri@grinnell.edu','','tendai10','individual',1469462237),('57963f2829a0957963f2829a23','Bazil','','Tendai','Bazil Tendai','male','','','','mupisiri@grinnell.edu','','$2y$10$Bc6G4q45W3fXvFS3nJgI9OCiw2rHlj5sVgPTBZLBWhZb2lUvXgh3i','individual',1469464360),('57963f4110b1a57963f4110b29','Fadzie','','Tendai','Fadzie Tendai','female','','','','mupisiri@grinnell.edu','','$2y$10$Bc6G4q45W3fXvFS3nJgI9OCiw2rHlj5sVgPTBZLBWhZb2lUvXgh3i','individual',1469464385),('57d415fa8d7a557d415fa8d7b4','b','','b','b b','male','','','','mupisiri@grinnell.edu','','$2y$10$Bc6G4q45W3fXvFS3nJgI9OoNyQzer9NrK39auNjbj8Vx4w.Ucehp6','individual',1473517050);
/*!40000 ALTER TABLE `individualAccounts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-20 13:40:32
