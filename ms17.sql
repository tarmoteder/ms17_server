-- MySQL dump 10.16  Distrib 10.1.36-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: ms17
-- ------------------------------------------------------
-- Server version	10.1.36-MariaDB

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
-- Table structure for table `nimekiri`
--

DROP TABLE IF EXISTS `nimekiri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nimekiri` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `EesNimi` varchar(30) NOT NULL,
  `PereNimi` varchar(30) NOT NULL,
  `id_code` char(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nimekiri`
--

LOCK TABLES `nimekiri` WRITE;
/*!40000 ALTER TABLE `nimekiri` DISABLE KEYS */;
INSERT INTO `nimekiri` VALUES (2,'Tarmo','Teder','35404211234','2018-09-11 11:01:26'),(13,'Endel','EesvÃ¤rav','32132231234','2018-09-18 12:01:31'),(14,'Endel','EesvÃ¤rav','32132231234','2018-09-18 12:01:36'),(15,'Endel','EesvÃ¤rav','32132231234','2018-11-06 12:10:37'),(16,'Endel','EesvÃ¤rav','32132231234','2018-11-08 11:19:58'),(17,'Endel','EesvÃ¤rav','32132231234','2018-11-08 11:21:01'),(18,'Endel','EesvÃ¤rav','32132231234','2018-11-08 11:23:02');
/*!40000 ALTER TABLE `nimekiri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nimekiri1`
--

DROP TABLE IF EXISTS `nimekiri1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nimekiri1` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `EesNimi` varchar(30) NOT NULL,
  `PereNimi` varchar(30) NOT NULL,
  `id_code` char(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nimekiri1`
--

LOCK TABLES `nimekiri1` WRITE;
/*!40000 ALTER TABLE `nimekiri1` DISABLE KEYS */;
/*!40000 ALTER TABLE `nimekiri1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `passw0rd` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kasutaja',''),(2,'kasutaja2',NULL),(5,'juku','d41e98d1eafa6d6011d3a70f1a5b92f0'),(6,'4242','432423'),(7,'55252','dgsgsgd'),(9,'1233','123'),(11,'qwert','asd'),(12,'qwerty','asdfg'),(13,'asd','a384b6463fc216a5f8ecb6670f86456a'),(16,'karl','c4ca4238a0b923820dcc509a6f75849b'),(17,'tarmo','c20ad4d76fe97759aa27a0c99bff6710');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-04 14:48:21
