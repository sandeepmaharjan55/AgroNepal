-- MySQL dump 10.13  Distrib 5.1.57, for redhat-linux-gnu (x86_64)
--
-- Host: localhost    Database: a3502683_agrodb
-- ------------------------------------------------------
-- Server version	5.1.57

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
-- Table structure for table `admin_tb`
--

DROP TABLE IF EXISTS `admin_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_tb` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_tb`
--

LOCK TABLES `admin_tb` WRITE;
/*!40000 ALTER TABLE `admin_tb` DISABLE KEYS */;
INSERT INTO `admin_tb` VALUES (1,'team4s','team4s');
/*!40000 ALTER TABLE `admin_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `adminlog_tb`
--

DROP TABLE IF EXISTS `adminlog_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `adminlog_tb` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adminlog_tb`
--

LOCK TABLES `adminlog_tb` WRITE;
/*!40000 ALTER TABLE `adminlog_tb` DISABLE KEYS */;
INSERT INTO `adminlog_tb` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `adminlog_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` smallint(6) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `position` smallint(6) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Category1','',2),(0,'Category2','',3);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_loc`
--

DROP TABLE IF EXISTS `data_loc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_loc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(200) NOT NULL,
  `crops` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_loc`
--

LOCK TABLES `data_loc` WRITE;
/*!40000 ALTER TABLE `data_loc` DISABLE KEYS */;
INSERT INTO `data_loc` VALUES (1,'Unnamed Road, Tokha 44600, Nepal','Wheat, Barley, Maize, Banana, Potato'),(3,'Dhapakhel Rd, Patan 44700, Nepal','Orange, sugarcane, pineapple, apple, carrot'),(4,'Unnamed Road, Patan 44700, Nepal','carrot, raddish, potato'),(5,'Satdobato-Godavari Rd, Patan 44700, Nepal','Paddy, Orange, Maize, Wheat');
/*!40000 ALTER TABLE `data_loc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `mem_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`mem_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'sandeep','maharjan',''),(17,'sae','sae','sandeep@g.com'),(19,'srijana','srijana','srijana@gmail.com'),(20,'manika','manika','mankia@g.com'),(22,'wer','wer','we@g.b'),(23,'sandeep55','sandeep11','sandeepmaharjan55@gmail.com'),(24,'xcvx','sadzxc','cxv@d.f'),(25,'dsf','16163','teasa@g.com');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `market_tb`
--

DROP TABLE IF EXISTS `market_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `market_tb` (
  `product_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `disc` varchar(500) NOT NULL,
  `Category` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `pro_img` varchar(225) NOT NULL,
  `count` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `market_tb`
--

LOCK TABLES `market_tb` WRITE;
/*!40000 ALTER TABLE `market_tb` DISABLE KEYS */;
INSERT INTO `market_tb` VALUES (1,'sunflower',50,'','',8,'sunflower.jpg',0),(3,'potato',20,'sashdas','Fertilizer',1,'potato.PNG',2),(5,'Tomato',10,'asdas','Seeds',6,'tomato.jpg',1),(6,'oranges',45,'vhjhh ','seeds',0,'oranges.jpg',0),(13,'maize',20,' healthy','Mobile Phones',0,'agro244049maize.jpg',0),(14,'paddy',35,' healthy','Mobile Phones',0,'agro825257paddy.jpg',0),(15,'rose',40,' beautiful','Mobile Phones',0,'agro189392rose.jpg',0);
/*!40000 ALTER TABLE `market_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pm`
--

DROP TABLE IF EXISTS `pm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pm` (
  `id` bigint(20) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `user1` bigint(20) NOT NULL,
  `user2` bigint(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` int(10) NOT NULL,
  `user1read` varchar(3) NOT NULL,
  `user2read` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pm`
--

LOCK TABLES `pm` WRITE;
/*!40000 ALTER TABLE `pm` DISABLE KEYS */;
INSERT INTO `pm` VALUES (1,1,'a',2,1,'anskjnasklnl',1471491525,'yes','yes');
/*!40000 ALTER TABLE `pm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_tb`
--

DROP TABLE IF EXISTS `post_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post_tb` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_header` varchar(100) NOT NULL,
  `post_cont` varchar(1000) NOT NULL,
  `post_date` date NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_tb`
--

LOCK TABLES `post_tb` WRITE;
/*!40000 ALTER TABLE `post_tb` DISABLE KEYS */;
INSERT INTO `post_tb` VALUES (9,'oranges','','2016-08-10','oranges.jpg'),(10,'wheat','','2016-08-12','wheat.jpg');
/*!40000 ALTER TABLE `post_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reg_tb`
--

DROP TABLE IF EXISTS `reg_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reg_tb` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reg_tb`
--

LOCK TABLES `reg_tb` WRITE;
/*!40000 ALTER TABLE `reg_tb` DISABLE KEYS */;
INSERT INTO `reg_tb` VALUES (3,'sandeep55','Female','erwe@kl.com','qwerty'),(5,'asafa','Male','afdafdafd@gmail.com','sdfsdfsdf'),(6,'manika','Female','mankia@g.com','manika'),(7,'wer','Male','we@g.b','wer'),(8,'saujan','Female','saujan@gmail.com','saujan'),(9,'sanjeev','Male','sanje@d.com','sanjeev'),(10,'sandeep55','Male','sandeepmaharjan55@gmail.com','sandeep11'),(11,'sae','Male','sandeep@g.com','sae'),(12,'srijana','Female','srijana@gmail.com','srijana'),(13,'xcvx','Female','cxv@d.f','sadzxc'),(14,'dsf','Female','teasa@g.com','16163');
/*!40000 ALTER TABLE `reg_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_tb`
--

DROP TABLE IF EXISTS `sales_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales_tb` (
  `s_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_id` int(100) NOT NULL,
  `qunt` int(100) NOT NULL,
  `loc` varchar(100) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `product_id` (`product_id`),
  KEY `product_id_2` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_tb`
--

LOCK TABLES `sales_tb` WRITE;
/*!40000 ALTER TABLE `sales_tb` DISABLE KEYS */;
INSERT INTO `sales_tb` VALUES (1,3,3,'ktm'),(2,3,2,'ktm'),(3,3,2,'ktm'),(4,1,4,'ktm'),(5,1,0,''),(6,1,2,''),(7,1,0,''),(8,1,2,''),(9,3,4,''),(10,3,10,''),(11,3,4,''),(12,3,10,''),(13,3,5,''),(14,3,1,''),(15,3,1,''),(16,3,1,'ktm'),(17,3,1,'ktm'),(18,5,4,'');
/*!40000 ALTER TABLE `sales_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `search`
--

DROP TABLE IF EXISTS `search`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `search` (
  `id` int(10) NOT NULL,
  `name` text NOT NULL,
  `link` varchar(300) NOT NULL,
  `description` varchar(25000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `search`
--

LOCK TABLES `search` WRITE;
/*!40000 ALTER TABLE `search` DISABLE KEYS */;
INSERT INTO `search` VALUES (1,'Crops In Mountain','http://www.webpages.uidaho.edu/arch499/nonwest/nepal/images/finalnepalmap_copy.jpg','1.	 Maize - Vegetable - Fallow\r\n2.	Potato - Potato - Fallow\r\n3.	Maize - Wheat - Fallow\r\n4.	Niger - Potato - Fallow\r\n5.	Maize - Fallow - Fallow\r\n'),(2,'Crop in Hilly','http://www.webpages.uidaho.edu/arch499/nonwest/nepal/images/finalnepalmap_copy.jpg','A.	Irrigated Lowland\r\n1.	Rice - Wheat - Maize\r\n2.	Rice - Potato - Maize\r\n3.	Rice - Wheat - Vegetable\r\n4.	Rice - Lentils - Vegetables\r\n5.	Rice - Vegetables - Rice\r\nB.	Upland\r\n1.	Maize + Millet - Black gram - Fallow\r\n2.	Maize - Millet - Vegetables\r\n3.	Maize + Legumes - Potato - Fallow\r\n4.	Maize + Ghaiya - Vegetables - Fallow\r\n5.	Ghaiya - Legumes - Fallow\r\n'),(3,'Crops in Terai','http://www.webpages.uidaho.edu/arch499/nonwest/nepal/images/finalnepalmap_copy.jpg','A.	Irrigated Lowland\r\n1.	Rice - Wheat - Maize\r\n2.	Rice - Potato - Vegetables\r\n3.	Rice - Peas - Rice\r\n4.	Rice - Lentil - Vegetables\r\n5.	Rice - Mustard/Peas - Vegetables\r\nB.	Unirrigated Lowland\r\n1.	Rice - Wheat - Fallow\r\n2.	Rice - Mustard/Peas - Fallow\r\n3.	Rice - Lentils - Fallow\r\n4.	Sugar cane\r\nC.	Upland\r\n1. Maize - Mustard\r\n');
/*!40000 ALTER TABLE `search` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topics` (
  `parent` smallint(6) NOT NULL,
  `id` int(11) NOT NULL,
  `id2` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `message` longtext NOT NULL,
  `authorid` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `timestamp2` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id2`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topics`
--

LOCK TABLES `topics` WRITE;
/*!40000 ALTER TABLE `topics` DISABLE KEYS */;
INSERT INTO `topics` VALUES (1,2,1,'Transportation','Manage transportation',3,1471571478,1471934301),(1,2,2,'','how to manage transportation',3,1471571539,1471571539),(1,1,1,'Pesticide and Insecticide','In what amount it should be used?',2,1471570238,1472455987),(1,2,3,'','fjgk',1,1471934301,1471934301),(1,1,2,'','how',1,1472321564,1472321564),(1,1,3,'','hello sir',2,1472442168,1472442168),(1,3,1,'how to farm','hellos ir',2,1472442276,1472444170),(1,3,2,'','asdasnkj',2,1472442319,1472442319),(1,3,3,'','hello',2,1472442334,1472442334),(1,3,4,'','sada',2,1472442416,1472442416),(1,3,5,'','hello sir',2,1472442468,1472442468),(1,4,1,'sadsadsasad','sadas',2,1472442523,1472444091),(1,4,2,'','hello<br />\r\n',2,1472442638,1472442638),(1,4,3,'','hknlanlksml',2,1472442665,1472442665),(1,4,4,'','vjjh',2,1472442834,1472442834),(1,4,5,'','sabjbask',2,1472442889,1472442889),(1,4,6,'','ashksa',2,1472442999,1472442999),(1,4,7,'','asdnkjasn',2,1472443075,1472443075),(1,4,8,'','asnhkdjasnk',2,1472443503,1472443503),(1,4,9,'','bkjbn',2,1472443651,1472443651),(1,4,10,'','assa',2,1472443852,1472443852),(1,4,11,'','sadsa',2,1472444091,1472444091),(1,3,6,'','sakjlnslandla',2,1472444170,1472444170),(1,1,4,'','bkjb',2,1472444903,1472444903),(1,1,5,'','asdsa',2,1472445067,1472445067),(1,1,6,'','wer',2,1472445106,1472445106),(1,1,7,'','danalkns',2,1472445166,1472445166),(1,5,1,'wer','sasdas',2,1472445436,1472455961),(1,5,2,'',';)',11,1472455961,1472455961),(1,1,8,'','hello',11,1472455987,1472455987);
/*!40000 ALTER TABLE `topics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (44,'sanjeev','sanjeev','sanje@d.com');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tb`
--

DROP TABLE IF EXISTS `user_tb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tb` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `E-mail` int(11) NOT NULL,
  `Password` text NOT NULL,
  `Address` text NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `E-mail` (`E-mail`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tb`
--

LOCK TABLES `user_tb` WRITE;
/*!40000 ALTER TABLE `user_tb` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` text NOT NULL,
  `signup_date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (11,'srijana','4f25cf7a9dde73d37e991ed9b0b5be10584228ba','srijana@gmail.com','',1472454686);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `webchat_lines`
--

DROP TABLE IF EXISTS `webchat_lines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `webchat_lines` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `text` varchar(255) NOT NULL,
  `ts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM AUTO_INCREMENT=90 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `webchat_lines`
--

LOCK TABLES `webchat_lines` WRITE;
/*!40000 ALTER TABLE `webchat_lines` DISABLE KEYS */;
INSERT INTO `webchat_lines` VALUES (88,'Sandeep','72fa294dbc197df04b525975d1cce172','Hello','2017-04-01 13:43:41'),(89,'Sandeep','72fa294dbc197df04b525975d1cce172','How are you','2017-04-01 13:43:52');
/*!40000 ALTER TABLE `webchat_lines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `webchat_users`
--

DROP TABLE IF EXISTS `webchat_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `webchat_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `gravatar` varchar(32) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `last_activity` (`last_activity`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `webchat_users`
--

LOCK TABLES `webchat_users` WRITE;
/*!40000 ALTER TABLE `webchat_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `webchat_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-09  0:49:33
