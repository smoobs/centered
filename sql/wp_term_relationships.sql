-- MySQL dump 10.13  Distrib 5.5.34, for Win32 (x86)
--
-- Host: localhost    Database: rf
-- ------------------------------------------------------
-- Server version	5.5.34

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
-- Table structure for table `wp_term_relationships`
--

DROP TABLE IF EXISTS `wp_term_relationships`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_taxonomy_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `term_order` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  KEY `term_taxonomy_id` (`term_taxonomy_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_term_relationships`
--

LOCK TABLES `wp_term_relationships` WRITE;
/*!40000 ALTER TABLE `wp_term_relationships` DISABLE KEYS */;
INSERT INTO `wp_term_relationships` VALUES (2234,3,0);
INSERT INTO `wp_term_relationships` VALUES (2258,3,0);
INSERT INTO `wp_term_relationships` VALUES (2232,3,0);
INSERT INTO `wp_term_relationships` VALUES (2231,3,0);
INSERT INTO `wp_term_relationships` VALUES (2233,3,0);
INSERT INTO `wp_term_relationships` VALUES (2230,3,0);
INSERT INTO `wp_term_relationships` VALUES (2228,3,0);
INSERT INTO `wp_term_relationships` VALUES (2235,3,0);
INSERT INTO `wp_term_relationships` VALUES (2236,3,0);
INSERT INTO `wp_term_relationships` VALUES (2239,3,0);
INSERT INTO `wp_term_relationships` VALUES (2259,3,0);
INSERT INTO `wp_term_relationships` VALUES (2240,3,0);
INSERT INTO `wp_term_relationships` VALUES (2241,3,0);
INSERT INTO `wp_term_relationships` VALUES (2242,3,0);
INSERT INTO `wp_term_relationships` VALUES (2243,3,0);
INSERT INTO `wp_term_relationships` VALUES (2244,3,0);
INSERT INTO `wp_term_relationships` VALUES (2245,3,0);
INSERT INTO `wp_term_relationships` VALUES (2267,3,0);
INSERT INTO `wp_term_relationships` VALUES (4285,5,0);
INSERT INTO `wp_term_relationships` VALUES (4284,3,0);
INSERT INTO `wp_term_relationships` VALUES (2268,3,0);
INSERT INTO `wp_term_relationships` VALUES (2251,3,0);
INSERT INTO `wp_term_relationships` VALUES (2252,3,0);
INSERT INTO `wp_term_relationships` VALUES (2253,3,0);
INSERT INTO `wp_term_relationships` VALUES (2254,3,0);
INSERT INTO `wp_term_relationships` VALUES (2269,4,0);
INSERT INTO `wp_term_relationships` VALUES (2270,4,0);
INSERT INTO `wp_term_relationships` VALUES (2271,4,0);
INSERT INTO `wp_term_relationships` VALUES (2273,5,0);
INSERT INTO `wp_term_relationships` VALUES (2302,5,0);
INSERT INTO `wp_term_relationships` VALUES (2303,5,0);
INSERT INTO `wp_term_relationships` VALUES (2274,5,0);
INSERT INTO `wp_term_relationships` VALUES (2275,5,0);
INSERT INTO `wp_term_relationships` VALUES (2276,5,0);
INSERT INTO `wp_term_relationships` VALUES (2277,5,0);
INSERT INTO `wp_term_relationships` VALUES (2278,5,0);
INSERT INTO `wp_term_relationships` VALUES (2279,5,0);
INSERT INTO `wp_term_relationships` VALUES (2280,5,0);
INSERT INTO `wp_term_relationships` VALUES (2283,5,0);
INSERT INTO `wp_term_relationships` VALUES (2304,5,0);
INSERT INTO `wp_term_relationships` VALUES (2284,5,0);
INSERT INTO `wp_term_relationships` VALUES (2285,5,0);
INSERT INTO `wp_term_relationships` VALUES (2286,5,0);
INSERT INTO `wp_term_relationships` VALUES (2287,5,0);
INSERT INTO `wp_term_relationships` VALUES (2288,5,0);
INSERT INTO `wp_term_relationships` VALUES (2289,5,0);
INSERT INTO `wp_term_relationships` VALUES (2305,5,0);
INSERT INTO `wp_term_relationships` VALUES (2306,5,0);
INSERT INTO `wp_term_relationships` VALUES (2307,5,0);
INSERT INTO `wp_term_relationships` VALUES (2308,5,0);
INSERT INTO `wp_term_relationships` VALUES (2309,5,0);
INSERT INTO `wp_term_relationships` VALUES (2310,5,0);
INSERT INTO `wp_term_relationships` VALUES (2311,5,0);
INSERT INTO `wp_term_relationships` VALUES (2312,5,0);
INSERT INTO `wp_term_relationships` VALUES (4281,3,0);
INSERT INTO `wp_term_relationships` VALUES (4280,5,0);
INSERT INTO `wp_term_relationships` VALUES (2313,5,0);
INSERT INTO `wp_term_relationships` VALUES (2295,5,0);
INSERT INTO `wp_term_relationships` VALUES (2296,5,0);
INSERT INTO `wp_term_relationships` VALUES (2297,5,0);
INSERT INTO `wp_term_relationships` VALUES (2314,6,0);
INSERT INTO `wp_term_relationships` VALUES (2315,6,0);
INSERT INTO `wp_term_relationships` VALUES (2316,6,0);
INSERT INTO `wp_term_relationships` VALUES (2397,3,0);
INSERT INTO `wp_term_relationships` VALUES (2398,5,0);
INSERT INTO `wp_term_relationships` VALUES (2414,7,0);
INSERT INTO `wp_term_relationships` VALUES (2473,1,0);
INSERT INTO `wp_term_relationships` VALUES (3161,3,0);
INSERT INTO `wp_term_relationships` VALUES (3162,5,0);
INSERT INTO `wp_term_relationships` VALUES (2799,5,0);
INSERT INTO `wp_term_relationships` VALUES (2800,3,0);
INSERT INTO `wp_term_relationships` VALUES (3290,1,0);
INSERT INTO `wp_term_relationships` VALUES (3292,1,0);
INSERT INTO `wp_term_relationships` VALUES (3295,1,0);
INSERT INTO `wp_term_relationships` VALUES (3301,1,0);
INSERT INTO `wp_term_relationships` VALUES (3305,1,0);
INSERT INTO `wp_term_relationships` VALUES (3307,1,0);
INSERT INTO `wp_term_relationships` VALUES (3367,3,0);
INSERT INTO `wp_term_relationships` VALUES (3368,5,0);
INSERT INTO `wp_term_relationships` VALUES (3371,5,0);
INSERT INTO `wp_term_relationships` VALUES (3372,3,0);
INSERT INTO `wp_term_relationships` VALUES (3956,1,0);
INSERT INTO `wp_term_relationships` VALUES (3959,1,0);
INSERT INTO `wp_term_relationships` VALUES (3965,1,0);
INSERT INTO `wp_term_relationships` VALUES (3973,1,0);
INSERT INTO `wp_term_relationships` VALUES (3976,1,0);
INSERT INTO `wp_term_relationships` VALUES (3979,1,0);
INSERT INTO `wp_term_relationships` VALUES (3987,1,0);
INSERT INTO `wp_term_relationships` VALUES (4352,9,0);
INSERT INTO `wp_term_relationships` VALUES (4366,10,0);
INSERT INTO `wp_term_relationships` VALUES (4996,5,0);
INSERT INTO `wp_term_relationships` VALUES (4997,3,0);
INSERT INTO `wp_term_relationships` VALUES (5136,1,0);
INSERT INTO `wp_term_relationships` VALUES (5342,3,0);
INSERT INTO `wp_term_relationships` VALUES (5216,1,0);
INSERT INTO `wp_term_relationships` VALUES (5251,1,0);
INSERT INTO `wp_term_relationships` VALUES (5271,1,0);
INSERT INTO `wp_term_relationships` VALUES (5274,1,0);
INSERT INTO `wp_term_relationships` VALUES (5340,3,0);
INSERT INTO `wp_term_relationships` VALUES (5446,3,0);
INSERT INTO `wp_term_relationships` VALUES (5447,3,0);
INSERT INTO `wp_term_relationships` VALUES (5521,1,0);
/*!40000 ALTER TABLE `wp_term_relationships` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
