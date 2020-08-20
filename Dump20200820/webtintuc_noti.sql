-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: webtintuc
-- ------------------------------------------------------
-- Server version	8.0.21

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `noti`
--

DROP TABLE IF EXISTS `noti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `noti` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` text,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `noti`
--

LOCK TABLES `noti` WRITE;
/*!40000 ALTER TABLE `noti` DISABLE KEYS */;
INSERT INTO `noti` VALUES (1,' syhung đã bình luận vào bài viết của bạn',1),(2,' syhung đã bình luận vào bài viết của bạn',1),(3,' syhung đã bình luận vào bài viết của bạn',1),(4,'syhung đã bình luận vào bài viết của bạn',1),(5,'syhung đã bình luận vào bài viết của bạn',1),(6,'syhung đã bình luận vào bài viết của bạn',1),(7,'syhung đã bình luận vào bài viết của bạn',1),(8,'hoangvu đã phản hồi bình luận của bạn',2),(9,'syhung đã bình luận vào bài viết của bạn',1),(10,'syhung đã phản hồi bình luận của bạn',2),(11,'syhung đã bình luận vào bài viết của bạn',1),(12,'syhung đã bình luận vào bài viết của bạn',1),(13,'syhung đã bình luận vào bài viết của bạn',1),(14,'syhung đã bình luận vào bài viết của bạn',1),(15,'syhung đã bình luận vào bài viết của bạn',1),(16,'syhung đã bình luận vào bài viết của bạn',1),(17,'syhung đã bình luận vào bài viết của bạn',1),(18,'syhung đã bình luận vào bài viết của bạn',1),(19,'syhung đã bình luận vào bài viết của bạn',1),(20,'syhung đã đăng một bài viết mới',1),(21,'hoangvu đã phê duyệt bài viết của bạn',2),(22,'syhung đã bình luận vào bài viết của bạn',2),(23,'hoangvu đã bình luận vào bài viết của bạn',2),(24,'hoangvu đã phản hồi bình luận của bạn',2);
/*!40000 ALTER TABLE `noti` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-08-20 10:23:09
