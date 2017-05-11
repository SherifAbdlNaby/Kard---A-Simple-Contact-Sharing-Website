-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: pset7
-- ------------------------------------------------------
-- Server version	5.5.46-0ubuntu0.14.04.2

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
-- Table structure for table `history`
--

DROP TABLE IF EXISTS `history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `symbol` text NOT NULL,
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `shares` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `history`
--

LOCK TABLES `history` WRITE;
/*!40000 ALTER TABLE `history` DISABLE KEYS */;
INSERT INTO `history` VALUES (1,9,0,'2016-09-28 13:45:29','free','FreeSeas Inc.',1,12),(2,9,1,'2016-09-28 13:48:39','free','FreeSeas Inc.',1,10),(3,9,0,'2016-09-28 14:05:25','free','FreeSeas Inc.',1,6),(4,9,0,'2016-09-28 14:05:39','free','FreeSeas Inc.',1,12),(5,9,1,'2016-09-28 14:14:44','free','FreeSeas Inc.',1,5020),(6,9,0,'2016-09-28 14:15:08','goog','Alphabet Inc.',777,12),(7,9,1,'2016-09-28 14:15:25','goog','Alphabet Inc.',777,12),(8,9,0,'2016-09-28 14:15:53','MSF.BE','MICROSOFT',51,10),(9,9,1,'2016-09-28 14:16:02','MSF.BE','MICROSOFT',51,5),(10,24,0,'2016-09-28 14:44:36','GOOG','Alphabet Inc.',778,12),(11,24,1,'2016-09-28 14:47:34','GOOG','Alphabet Inc.',778,12),(12,24,0,'2016-09-28 14:48:04','GOOG','Alphabet Inc.',778,12),(13,24,1,'2016-09-28 14:48:20','GOOG','Alphabet Inc.',778,12),(16,24,0,'2016-09-28 14:50:23','FREE','FreeSeas Inc.',1,1000),(17,24,1,'2016-09-28 14:50:57','FREE','FreeSeas Inc.',1,999),(18,24,1,'2016-09-28 14:51:30','FREE','FreeSeas Inc.',1,1),(19,27,0,'2016-09-28 15:06:12','GOOG','Alphabet Inc.',777,12),(20,27,1,'2016-09-28 15:06:28','GOOG','Alphabet Inc.',777,12),(21,27,0,'2016-09-28 15:06:32','GOOG','Alphabet Inc.',777,12),(22,27,1,'2016-09-28 15:06:36','GOOG','Alphabet Inc.',777,12),(23,27,0,'2016-09-28 15:07:03','GOOG','Alphabet Inc.',777,12),(24,27,1,'2016-09-28 15:07:09','GOOG','Alphabet Inc.',777,12),(25,27,0,'2016-09-28 15:07:17','GOOG','Alphabet Inc.',777,12),(26,27,1,'2016-09-28 15:07:23','GOOG','Alphabet Inc.',777,12),(27,27,0,'2016-09-28 15:07:40','GOOG','Alphabet Inc.',777,12),(28,27,1,'2016-09-28 15:07:48','GOOG','Alphabet Inc.',777,12),(29,30,0,'2016-09-28 16:48:23','GOOG','Alphabet Inc.',778,12),(30,30,1,'2016-09-28 16:48:26','GOOG','Alphabet Inc.',778,12),(31,30,0,'2016-09-28 16:48:30','GOOG','Alphabet Inc.',778,12),(32,30,1,'2016-09-28 16:48:32','GOOG','Alphabet Inc.',778,12),(33,30,0,'2016-09-28 16:48:33','GOOG','Alphabet Inc.',778,12),(34,30,1,'2016-09-28 16:48:35','GOOG','Alphabet Inc.',778,12),(35,30,0,'2016-09-28 16:48:36','GOOG','Alphabet Inc.',778,12),(36,30,1,'2016-09-28 16:48:37','GOOG','Alphabet Inc.',778,12),(37,30,0,'2016-09-28 16:48:39','GOOG','Alphabet Inc.',778,12),(38,30,1,'2016-09-28 16:48:41','GOOG','Alphabet Inc.',778,12),(39,30,0,'2016-09-28 16:48:42','GOOG','Alphabet Inc.',778,12),(40,30,1,'2016-09-28 16:48:44','GOOG','Alphabet Inc.',778,12),(41,30,0,'2016-09-28 16:48:45','GOOG','Alphabet Inc.',778,12),(42,30,1,'2016-09-28 16:48:47','GOOG','Alphabet Inc.',778,12),(43,30,0,'2016-09-28 16:48:54','GOOG','Alphabet Inc.',778,12),(44,30,1,'2016-09-28 16:49:11','GOOG','Alphabet Inc.',778,12),(45,30,0,'2016-09-28 16:49:21','GOOG','Alphabet Inc.',778,12),(46,30,1,'2016-09-28 16:49:24','GOOG','Alphabet Inc.',778,12),(47,30,0,'2016-09-28 16:49:26','GOOG','Alphabet Inc.',778,12),(48,30,1,'2016-09-28 16:49:28','GOOG','Alphabet Inc.',778,12),(49,30,0,'2016-09-28 16:49:29','GOOG','Alphabet Inc.',778,12),(50,30,1,'2016-09-28 16:49:31','GOOG','Alphabet Inc.',778,12),(51,30,0,'2016-09-28 16:49:32','GOOG','Alphabet Inc.',778,12),(52,30,1,'2016-09-28 16:49:32','GOOG','Alphabet Inc.',778,12),(53,30,0,'2016-09-28 16:49:34','GOOG','Alphabet Inc.',778,12),(54,30,1,'2016-09-28 16:49:35','GOOG','Alphabet Inc.',778,12),(55,30,0,'2016-09-28 16:49:36','GOOG','Alphabet Inc.',778,12),(56,30,1,'2016-09-28 16:49:38','GOOG','Alphabet Inc.',778,12),(57,30,0,'2016-09-28 16:49:39','GOOG','Alphabet Inc.',778,12),(58,30,1,'2016-09-28 16:49:41','GOOG','Alphabet Inc.',778,12),(59,30,0,'2016-09-28 16:49:41','GOOG','Alphabet Inc.',778,12),(60,30,1,'2016-09-28 16:49:42','GOOG','Alphabet Inc.',778,12),(61,30,0,'2016-09-28 16:49:43','GOOG','Alphabet Inc.',778,12),(62,30,1,'2016-09-28 16:49:44','GOOG','Alphabet Inc.',778,12),(63,30,0,'2016-09-28 16:49:45','GOOG','Alphabet Inc.',778,12),(64,30,1,'2016-09-28 16:49:46','GOOG','Alphabet Inc.',778,12),(65,30,0,'2016-09-28 16:49:47','GOOG','Alphabet Inc.',778,12),(66,30,1,'2016-09-28 16:49:48','GOOG','Alphabet Inc.',778,12),(67,30,0,'2016-09-28 16:49:50','GOOG','Alphabet Inc.',778,12),(68,30,1,'2016-09-28 16:49:51','GOOG','Alphabet Inc.',778,12),(69,30,0,'2016-09-28 16:49:52','GOOG','Alphabet Inc.',778,12),(70,30,1,'2016-09-28 16:49:53','GOOG','Alphabet Inc.',778,12),(71,30,0,'2016-09-28 16:49:54','GOOG','Alphabet Inc.',778,12),(72,30,1,'2016-09-28 16:49:55','GOOG','Alphabet Inc.',778,12),(73,30,0,'2016-09-28 16:49:57','GOOG','Alphabet Inc.',778,12),(74,30,1,'2016-09-28 16:50:09','GOOG','Alphabet Inc.',777,12),(75,30,0,'2016-09-28 16:52:14','GOOG','Alphabet Inc.',777,12),(76,30,1,'2016-09-28 16:52:20','GOOG','Alphabet Inc.',777,12),(77,30,0,'2016-09-28 16:56:58','GOOG','Alphabet Inc.',778,12),(78,30,1,'2016-09-28 16:58:08','goOg','Alphabet Inc.',778,12),(79,30,0,'2016-09-28 16:58:25','GOog','Alphabet Inc.',778,12),(80,30,1,'2016-09-28 16:59:54','goog','Alphabet Inc.',778,12),(81,30,0,'2016-09-28 17:00:01','GOOG','Alphabet Inc.',779,12),(82,30,1,'2016-09-28 17:00:41','GOOG','Alphabet Inc.',779,12),(83,30,0,'2016-09-28 17:17:01','GOOG','Alphabet Inc.',779,12),(84,9,0,'2016-09-28 19:09:39','FREE','FreeSeas Inc.',1,34),(85,9,0,'2016-09-28 19:10:03','MSF.BE','MICROSOFT',51,12),(86,9,0,'2016-09-28 19:10:20','APPL','',0,21),(87,9,1,'2016-09-28 19:11:31','APPL','',0,21),(88,9,0,'2016-09-28 19:12:52','GOOG','Alphabet Inc.',780,3),(89,31,0,'2016-09-28 19:15:43','GOOG','Alphabet Inc.',781,10),(90,9,1,'2016-10-08 12:34:32','GOOG','Alphabet Inc.',775,3);
/*!40000 ALTER TABLE `history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shares`
--

DROP TABLE IF EXISTS `shares`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userID` int(10) unsigned NOT NULL,
  `symbol` char(10) NOT NULL,
  `shares` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shares`
--

LOCK TABLES `shares` WRITE;
/*!40000 ALTER TABLE `shares` DISABLE KEYS */;
INSERT INTO `shares` VALUES (15,9,'MSF.BE',17),(18,25,'goog',2),(52,30,'GOOG',12),(53,9,'FREE',34),(56,31,'GOOG',10);
/*!40000 ALTER TABLE `shares` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `cash` decimal(65,4) unsigned NOT NULL DEFAULT '0.0000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'andi','$2y$10$c.e4DK7pVyLT.stmHxgAleWq4yViMmkwKz3x8XCo4b/u3r8g5OTnS',10000.0000),(2,'caesar','$2y$10$0p2dlmu6HnhzEMf9UaUIfuaQP7tFVDMxgFcVs0irhGqhOxt6hJFaa',10000.0000),(3,'eli','$2y$10$COO6EnTVrCPCEddZyWeEJeH9qPCwPkCS0jJpusNiru.XpRN6Jf7HW',10000.0000),(4,'hdan','$2y$10$o9a4ZoHqVkVHSno6j.k34.wC.qzgeQTBHiwa3rpnLq7j2PlPJHo1G',10000.0000),(5,'jason','$2y$10$ci2zwcWLJmSSqyhCnHKUF.AjoysFMvlIb1w4zfmCS7/WaOrmBnLNe',10000.0000),(6,'john','$2y$10$dy.LVhWgoxIQHAgfCStWietGdJCPjnNrxKNRs5twGcMrQvAPPIxSy',10000.0000),(7,'levatich','$2y$10$fBfk7L/QFiplffZdo6etM.096pt4Oyz2imLSp5s8HUAykdLXaz6MK',10000.0000),(8,'rob','$2y$10$3pRWcBbGdAdzdDiVVybKSeFq6C50g80zyPRAxcsh2t5UnwAkG.I.2',10000.0000),(9,'skroob','$2y$10$JTy1GRjlqNgnUCwMx0gY3.v.HQYfgylsqe9ANQQneTKggGB7E2S46',9074.0980),(10,'zamyla','$2y$10$UOaRF0LGOaeHG4oaEkfO4O7vfI34B1W23WqHr9zCpXL68hfQsS3/e',10000.0000),(11,'SherifFirst','$2y$10$0oy1RztovCjpykZkb95uXe6dXhEptijT3dzkJbK71kR2fljom1Gpi',10000.0000),(12,'sherif','$2y$10$b5IShL9G2AKzW8Cp1l8uau/yQBYE7fS.SYwaOjgK.mhj4e/AUVOz6',10000.0000),(14,'loka','$2y$10$ZVIVJaimjCME9O5eeQNWjexSOOiKia.6dd0Mn7k3HsRONaB1OlRvq',10000.0000),(16,'heka','$2y$10$hy./9MMM6/kkBklL70tSIOxnFctT37Jh8SjWwGnQusAch/d38lm8S',10000.0000),(17,'Hoba','$2y$10$JAmgL2YCLUtmWBTAtjtrYOBM8YJrSbUtjOnji29tCmUUw8yXOlgGe',10000.0000),(18,'Sheko','$2y$10$D5QEfOK.937eqwU7gurss.uOtQ4g14e1w8wJ1P9YjRprtrwJOIRsO',10000.0000),(19,'look','$2y$10$bR738sbWESVFVfaFIrBE6u4u9F44hxuxk0kE1N3fCCGfjLn3yeUoi',10000.0000),(20,'123','$2y$10$y6mQoCTZPQ8fvB9qCBUg1uUeLeVq8HRKUEyZq9SN7kpx8eZ.jyOU6',10000.0000),(22,'Hey!!','$2y$10$XM0XXfW6C4iOM6qkuBRf/eQ1HuP5rqCKOzzP9a1Gt0m0fme1rPG4W',10000.0000),(23,'assface','$2y$10$9pNKrjMCT4avpeZAPAc72.wiR2EVzEPcrWmoQPQtq.JWjOEgg4tWG',10000.0000),(24,'helloagain','$2y$10$K6UaiEv62khFlNRaZfxduuqpyVHFW8.79F74VEqaqmvgtNfXgI5EW',10003.2400),(25,'mostafa5600','$2y$10$3FqHS.jWaavdUtR8fj0ofO9jMLttWUOhnzkWgepr0IsuPCXobR7BK',8442.1200),(27,'looko','$2y$10$t.fQt4Ipa/waJGDMkuY2n.mzSm.1kwVYA26KFs01QEAdCL6rhSzM6',10006.6400),(28,'Look1234','$2y$10$dMnjYA/mv5Sgb1Np4OWPAeR7BKe.rz0xRVFkiCtU1a/GCbO6PP0nS',10000.0000),(29,'LASDH','$2y$10$axLLX0OP92l3pDtkbnZk3.sZTOnCIReYXIAnMggWWU23nS7qQmxwu',10000.0000),(30,'Youg','$2y$10$QZJiEadJu/FBDGXLLYx2Fej1mfXKu7Z62vEvHWcBP89V1KpBI210a',655.5100),(31,'omak','$2y$10$P0cxtB6MGZ91nM5cLC3OseDpLQ9AcafOsFttQLuGO.iKiv0vWsjV6',2189.4000),(32,'omar5112','$2y$10$Y9KT4o0LAN43fMOxUqawbO7sY6sVvm4XfxNxCgiv6KxOjRJQUITiO',10000.0000);
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

-- Dump completed on 2016-10-11 17:08:47
