-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: mvc
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `pttt` varchar(10) NOT NULL,
  `ptgh` varchar(10) NOT NULL,
  `tongdon` int(11) NOT NULL,
  `ngaydat` datetime NOT NULL,
  `bill_status` int(11) NOT NULL DEFAULT 0 COMMENT '0:chờ duyệt,1:đã duyệt,Đang giao hàng,2:Đã nhận',
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill`
--

LOCK TABLES `bill` WRITE;
/*!40000 ALTER TABLE `bill` DISABLE KEYS */;
INSERT INTO `bill` VALUES (40,'tran cong minh','0123456789','minasjfwaeqwa','minh@gmail.com','1','1',56000,'2022-06-23 06:33:49',0,33),(41,'tran cong minh','0123456789','minasjfwaeqwa','minh@gmail.com','1','1',720000,'2022-06-23 14:16:48',0,33),(42,'tran cong minh','0123456789','minasjfwaeqwa','minh@gmail.com','1','1',297000,'2022-06-23 14:34:57',0,33),(43,'tran cong minh','0123456789','minasjfwaeqwa','minh@gmail.com','1','1',900000,'2022-06-23 15:13:51',0,33);
/*!40000 ALTER TABLE `bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Áo Nam'),(25,'Quần Nam'),(26,'Túi Xách'),(27,'Giày'),(28,'Áo Nữ'),(29,'Quần Nữ');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detailbill`
--

DROP TABLE IF EXISTS `detailbill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detailbill` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_pro` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `idbill` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_pro` (`id_pro`),
  KEY `id_user` (`id_user`),
  KEY `idbill` (`idbill`),
  CONSTRAINT `detailbill_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `product` (`id`),
  CONSTRAINT `detailbill_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  CONSTRAINT `detailbill_ibfk_3` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detailbill`
--

LOCK TABLES `detailbill` WRITE;
/*!40000 ALTER TABLE `detailbill` DISABLE KEYS */;
INSERT INTO `detailbill` VALUES (74,33,28,'item9.jpg','Áo Hồng',56000,1,56000,40),(75,33,20,'item1.jpg','Giày Da Nâu',50000,1,50000,41),(76,33,26,'item7.jpg','Jecket Nữ',670000,1,670000,41),(77,33,21,'item2.jpg','Áo khoác đen',99000,3,297000,42),(78,33,24,'item5.jpg','Jeans Nữ',450000,2,900000,43);
/*!40000 ALTER TABLE `detailbill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `iddm` int(11) NOT NULL,
  `view` int(11) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `sale` int(11) DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `iddm` (`iddm`),
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `category` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (20,'Giày Da Nâu',50000,'item1.jpg',27,0,'Giày tốt',0),(21,'Áo khoác đen',99000,'item2.jpg',28,0,'aaaa',0),(22,'Áo Khoác Nâu',78000,'item3.jpg',28,0,'aaaa',0),(23,'Giày Boot Da',1000000,'item4.jpg',27,0,'aaaa',0),(24,'Jeans Nữ',450000,'item5.jpg',29,0,'aa',0),(25,'Túi LV',999999,'item6.jpg',26,0,'aaa',0),(26,'Jecket Nữ',670000,'item7.jpg',28,0,'aaa',0),(27,'Túi Gucci',88888,'item8.jpg',26,0,'aa',0),(28,'Áo Hồng',56000,'item9.jpg',28,0,'sadasd',0),(29,'Quần Jeans Nữ Mới Nhất',999777,'item10.jpg',29,0,'aa',0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `sdt` varchar(10) DEFAULT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `role` tinyint(4) DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (33,'tran cong minh','minh@gmail.com','$2y$10$6lSDeQNL4ovSPD.C2YWt.OeRBN3T2vx1UepDY.npyALkDNZWRPTB2','0123456789','An Giang, Châu Phú',0,'download.jpg','Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate voluptas veritatis minima. Quaerat dolorum minus reprehenderit, impedit magni harum fuga id repudiandae! Eaque laboriosam provident obcaecati sit hic et est.'),(34,'ngoc tram','ngoctram@gmail.com','$2y$10$PEgQF5nGJta7W4CgAmEpq.sD82vJ/xskbv8KphcJnHRDx8S5hRtZK','0123456789','Bạc Liêu',0,'tram.jpg','');
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

-- Dump completed on 2022-06-24 16:38:34
