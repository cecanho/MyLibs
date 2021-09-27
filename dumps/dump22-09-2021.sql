-- MySQL dump 10.16  Distrib 10.1.13-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: savepass
-- ------------------------------------------------------
-- Server version	10.1.13-MariaDB

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
-- Table structure for table `senhas`
--

DROP TABLE IF EXISTS `senhas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site` varchar(128) DEFAULT NULL,
  `login` varchar(64) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senhas`
--

LOCK TABLES `senhas` WRITE;
/*!40000 ALTER TABLE `senhas` DISABLE KEYS */;
INSERT INTO `senhas` VALUES (4,'Z21haWwuY29t','cHJvZi5jZWNhbmhvQGdtYWlsLmNvbQ==','UGluZ29DZWNhbmhvMjAyMQ=='),(5,'Z21haWwuY29t','Y2VjYW5ob0BnbWFpbC5jb20=','Q2VjYW5ob1BpbmdvMjAyMQ=='),(6,'NHNoYXJlZC5jb20=','Y2VjYW5obw==','T3BhbGEyMDIx'),(7,'aHR0cHM6Ly9jYXRhbGFnby5ncnVwb2EuZWR1Y2F0aW9u','cHJvZi5jZWNhbmhv','MjAyMVVuaWNlcA=='),(8,'c3VibWFyaW5vLmNvbS5icg==','Y2VjYW5ob0BnbWFpbC5jb20=','RnJlZGVyaWNvMjAyMQ=='),(9,'Y29tbXVuaXR5Lmphc3BlcnNvZnQuY29t','Y2VjYW5ob0BnbWFpbC5jb20=','Q3Jpcy4xOTc2'),(10,'ZGV0cmFuLnNwLmdvdi5icg==','MjUyLjQ2OS45NjgtNDA=','UGluZ28yMDIx'),(11,'ZW1iYXJjYWRlcm8uY29t','cHJvZi5jZWNhbmhvQGdtYWlsLmNvbQ==','Y3JpczE5NzY='),(12,'Z2l0aHViLmNvbQ==','Y2VjYW5obw==','Y0pjMjAyMWM='),(13,'aWRlbnRpdHkuZ2V0cG9zdG1hbi5jb20=','Y2VjYW5ob0BnbWFpbC5jb20=','Y3JpczE5NzY='),(14,'aWRwLnJvY2t3ZWxsYXV0b21hdGlvbi5jb20=','Y2VjYW5ob0BnbWFpbC5jb20=','Q3JpczE5NzY='),(15,'bWVnYS5pbw==','Y2VjYW5ob0BnbWFpbC5jb20=','MjAyMSpDZWNhbmhv'),(16,'bWVyY2Fkb2xpdnJlLmNvbQ==','Y2VjYW5ob0BnbWFpbC5jb20=','UGluZ28jMjAyMQ=='),(17,'bW9vYy5jcHMuc3AuZ292LmJy','Y2NlY2FuaG8=','MjAyMV9QaW5nbw=='),(18,'bW9vZGxlLmFzc2VyLmNvbS5icg==','Y2NlY2FuaG8=','MTk3Nl9QaW5nbw=='),(19,'bW9vZGxlLmFzc2VyLmNvbS5icg==','YWRtaW4=','MjAyMS5hc3Nlcl9TSQ=='),(20,'c2FsYXZpcnR1YWwuZWR1LmJy','Y2NlY2FuaG8=','MTk3NmNyaXM='),(21,'dW5pY2VwLmVkdS5ici9yaW9jbGFybw==','Y3Jpc3RpYW5v','amNlY2FuaG8='),(22,'cGFyYWdvbi5jb20uYnI=','Y2VjYW5ob0BnbWFpbC5jb20=','Q3Jpcy4xOTc2'),(23,'cG9ydGFsZG9wYXJ0aWNpcGFudGUuY3BzLnNwLmdvdi5icg==','Y3Jpc3RpYW5vLmNlY2FuaG9AZXRlYy5zcC5nb3YuYnI=','TG9ybzE5NzZDcmlzdGlhbm8='),(24,'cHJvc29sdGVjbm9sb2dpYS5jb20uYnI=','YXNzZXJyYyAyNTI0Njk5Njg0MA==','Y0pjMTk3NnA='),(25,'cmVnaXN0cm9icg==','MjUyNDY5OTY4NDAgQ1JKQ0U0','UGluZ28jQ2VjYW5obw=='),(26,'dWRlbXkuY29t','Y2VjYW5ob0BnbWFpbC5jb20=','TG9sb0NyaXMxOTc2'),(27,'a2FidW0uY29tLmJy','Y2VjYW5ob0BnbWFpbC5jb20=','UHJlc3RvUHJvdGVnZTIwMjE='),(28,'dHdpdGMuY29t','Y2VjYW5ob0BnbWFpbC5jb20=','UC5jcmlzLjE5NzY=');
/*!40000 ALTER TABLE `senhas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-22 14:15:16
