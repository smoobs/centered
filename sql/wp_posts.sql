-- MySQL dump 10.13  Distrib 5.5.34, for Win32 (x86)
--
-- Host: localhost    Database: c0wshedyoga
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
-- Table structure for table `wp_posts`
--

DROP TABLE IF EXISTS `wp_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_posts` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(20) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) unsigned NOT NULL DEFAULT '0',
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `post_name` (`post_name`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  KEY `post_parent` (`post_parent`),
  KEY `post_author` (`post_author`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_posts`
--

LOCK TABLES `wp_posts` WRITE;
/*!40000 ALTER TABLE `wp_posts` DISABLE KEYS */;
INSERT INTO `wp_posts` VALUES (2,1,'2014-07-23 17:51:51','2014-07-23 17:51:51','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://centered.co.uk/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','trash','open','open','','sample-page','','','2014-08-07 17:48:28','2014-08-07 17:48:28','',0,'http://centered.co.uk/?page_id=2',0,'page','',0);
INSERT INTO `wp_posts` VALUES (7,1,'2014-08-07 17:21:51','2014-08-07 17:21:51','','Media','','private','closed','closed','','media','','','2014-08-07 17:21:51','2014-08-07 17:21:51','',0,'http://centered.co.uk/?option-tree=media',0,'option-tree','',0);
INSERT INTO `wp_posts` VALUES (8,1,'2014-08-07 17:32:04','2014-08-07 17:32:04','<h2>Iyengar Yoga</h2>\r\n[caption id=\"attachment_44\" align=\"alignleft\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption] [caption id=\"attachment_45\" align=\"alignright\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','publish','closed','closed','','iyengar-yoga','','','2014-08-07 19:08:26','2014-08-07 19:08:26','',0,'http://centered.co.uk/?post_type=onepage&#038;p=8',2,'onepage','',0);
INSERT INTO `wp_posts` VALUES (9,1,'2014-08-07 17:32:04','2014-08-07 17:32:04','The practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 17:32:04','2014-08-07 17:32:04','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (10,1,'2014-08-07 17:42:00','2014-08-07 17:42:00','<h2>The Studio</h2>\r\nThe Studio is located on the outskirts of Stroud in the picturesque Slad Valley. It is housed in a renovated 17th Century cowshed within the walled garden and grounds of a Georgian manor house.\r\n\r\nThe clean, bright and heated practice room is fully equipped with yoga mats and all the props necessary for the <a href=\"#iyengar-yoga\">Iyengar method</a>.\r\n\r\nWith separate male and female changing rooms and WC, the studio makes a comfortable, dedicated setting for the practice of Iyengar Yoga.\r\n','The Studio','','publish','closed','closed','','the-studio','','','2014-08-07 19:06:52','2014-08-07 19:06:52','',0,'http://centered.co.uk/?post_type=onepage&#038;p=10',4,'onepage','',0);
INSERT INTO `wp_posts` VALUES (11,1,'2014-08-07 17:42:00','2014-08-07 17:42:00','<div id=\"content\">\r\n\r\nThe Studio is located on the outskirts of Stroud in the picturesque Slad Valley. It is housed in a renovated 17th Century cowshed within the walled garden and grounds of a Georgian manor house.\r\n\r\nThe clean, bright and heated practice room is fully equipped with yoga mats and all the props necessary for the <a href=\"http://www.centered.co.uk/iyengar_yoga/index.php\">Iyengar method</a>.\r\n\r\nWith separate male and female changing rooms and WC, the studio makes a comfortable, dedicated setting for the practice of Iyengar Yoga.\r\n\r\n</div>','The Studio','','inherit','closed','closed','','10-revision-v1','','','2014-08-07 17:42:00','2014-08-07 17:42:00','',10,'http://centered.co.uk/10-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (12,1,'2014-08-07 17:42:23','2014-08-07 17:42:23','The Studio is located on the outskirts of Stroud in the picturesque Slad Valley. It is housed in a renovated 17th Century cowshed within the walled garden and grounds of a Georgian manor house.\r\n\r\nThe clean, bright and heated practice room is fully equipped with yoga mats and all the props necessary for the <a href=\"http://www.centered.co.uk/iyengar_yoga/index.php\">Iyengar method</a>.\r\n\r\nWith separate male and female changing rooms and WC, the studio makes a comfortable, dedicated setting for the practice of Iyengar Yoga.\r\n','The Studio','','inherit','closed','closed','','10-revision-v1','','','2014-08-07 17:42:23','2014-08-07 17:42:23','',10,'http://centered.co.uk/10-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (13,1,'2014-08-07 17:45:39','2014-08-07 17:45:39','The practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','publish','closed','closed','','iyengar-yoga','','','2014-08-07 17:45:39','2014-08-07 17:45:39','',0,'http://centered.co.uk/?page_id=13',0,'page','',0);
INSERT INTO `wp_posts` VALUES (14,1,'2014-08-07 17:45:39','2014-08-07 17:45:39','The practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','13-revision-v1','','','2014-08-07 17:45:39','2014-08-07 17:45:39','',13,'http://centered.co.uk/13-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (15,1,'2014-08-07 17:46:39','2014-08-07 17:46:39','','Centered Yoga Studio','','publish','closed','closed','','centered-yoga-studio','','','2014-08-07 17:46:39','2014-08-07 17:46:39','',0,'http://centered.co.uk/?page_id=15',0,'page','',0);
INSERT INTO `wp_posts` VALUES (16,1,'2014-08-07 17:46:39','2014-08-07 17:46:39','','Centered Yoga Studio','','inherit','closed','closed','','15-revision-v1','','','2014-08-07 17:46:39','2014-08-07 17:46:39','',15,'http://centered.co.uk/15-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (17,1,'2014-08-07 17:48:28','2014-08-07 17:48:28','This is an example page. It\'s different from a blog post because it will stay in one place and will show up in your site navigation (in most themes). Most people start with an About page that introduces them to potential site visitors. It might say something like this:\n\n<blockquote>Hi there! I\'m a bike messenger by day, aspiring actor by night, and this is my blog. I live in Los Angeles, have a great dog named Jack, and I like pi&#241;a coladas. (And gettin\' caught in the rain.)</blockquote>\n\n...or something like this:\n\n<blockquote>The XYZ Doohickey Company was founded in 1971, and has been providing quality doohickeys to the public ever since. Located in Gotham City, XYZ employs over 2,000 people and does all kinds of awesome things for the Gotham community.</blockquote>\n\nAs a new WordPress user, you should go to <a href=\"http://centered.co.uk/wp-admin/\">your dashboard</a> to delete this page and create new pages for your content. Have fun!','Sample Page','','inherit','closed','closed','','2-revision-v1','','','2014-08-07 17:48:28','2014-08-07 17:48:28','',2,'http://centered.co.uk/2-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (18,1,'2014-08-07 17:49:43','2014-08-07 17:49:43','Classes are taught to the standards laid out by the Iyengar Association of the UK qualification introductory levels 1 and 2.\r\n\r\nIntroductory level 1 is for newcomers to Yoga and Iyengar Yoga. Introductory level 2 is suitable for students who have some experience of Iyengar Yoga and are looking to progress in their established practise and can hold a steady head balance.\r\n\r\nDuration of the class is 1½ hours.\r\n\r\nClasses can be attended on a drop-in basis or block booked in advance by term. For class times see Timetable, for prices see Costs','Classes','','publish','closed','closed','','classes','','','2014-08-07 19:51:51','2014-08-07 19:51:51','',0,'http://centered.co.uk/?post_type=onepage&#038;p=18',6,'onepage','',0);
INSERT INTO `wp_posts` VALUES (19,1,'2014-08-07 17:49:43','2014-08-07 17:49:43','Classes are taught to the standards laid out by the Iyengar Association of the UK qualification introductory levels 1 and 2.\r\n\r\nIntroductory level 1 is for newcomers to Yoga and Iyengar Yoga. Introductory level 2 is suitable for students who have some experience of Iyengar Yoga and are looking to progress in their established practise and can hold a steady head balance.\r\n\r\nDuration of the class is 1½ hours.\r\n\r\nClasses can be attended on a drop-in basis or block booked in advance by term. For class times see Timetable, for prices see Costs','Classes','','inherit','closed','closed','','18-revision-v1','','','2014-08-07 17:49:43','2014-08-07 17:49:43','',18,'http://centered.co.uk/18-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (20,1,'2014-08-07 17:50:59','2014-08-07 17:50:59','Contact Ian Hibbs at Centered Yoga Studio using the form below: \r\n\r\n[contact-form-7 id=\"22\" title=\"Contact form 1\"]','Contact','','publish','closed','closed','','contact','','','2014-08-07 18:36:08','2014-08-07 18:36:08','',0,'http://centered.co.uk/?post_type=onepage&#038;p=20',8,'onepage','',0);
INSERT INTO `wp_posts` VALUES (21,1,'2014-08-07 17:50:59','2014-08-07 17:50:59','Contact Ian Hibbs at Centered Yoga Studio using the form below: ','Contact','','inherit','closed','closed','','20-revision-v1','','','2014-08-07 17:50:59','2014-08-07 17:50:59','',20,'http://centered.co.uk/20-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (22,1,'2014-08-07 17:55:11','2014-08-07 17:55:11','<p>Your Name (required)<br />\r\n    [text* your-name] </p>\r\n\r\n<p>Your Email (required)<br />\r\n    [email* your-email] </p>\r\n\r\n<p>Subject<br />\r\n    [text your-subject] </p>\r\n\r\n<p>Your Message<br />\r\n    [textarea your-message] <br />\r\n[quiz quiz-111 2/1 id:quizq class:quiz \"3 + 4 = | 7\"] <span class=\"small\">Please answer this question to prevent spam being sent from this form</span></p>\r\n\r\n<p>[submit \"Send\"]</p>\n[your-subject]\n[your-name] <[your-email]>\nFrom: [your-name] <[your-email]>\r\nSubject: [your-subject]\r\n\r\nMessage Body:\r\n[your-message]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Centered Yoga Studio (http://centered.co.uk)\nsam@mrstth.com\n\n\n\n\n\n[your-subject]\n[your-name] <[your-email]>\nMessage Body:\r\n[your-message]\r\n\r\n--\r\nThis e-mail was sent from a contact form on Centered Yoga Studio (http://centered.co.uk)\n[your-email]\n\n\n\n\nYour message was sent successfully. Thanks.\nFailed to send your message. Please try later or contact the administrator by another method.\nValidation errors occurred. Please confirm the fields and submit it again.\nFailed to send your message. Please try later or contact the administrator by another method.\nPlease accept the terms to proceed.\nPlease fill the required field.\nYour entered code is incorrect.\nNumber format seems invalid.\nThis number is too small.\nThis number is too large.\nEmail address seems invalid.\nURL seems invalid.\nTelephone number seems invalid.\nYour answer is not correct.\nDate format seems invalid.\nThis date is too early.\nThis date is too late.\nFailed to upload file.\nThis file type is not allowed.\nThis file is too large.\nFailed to upload file. Error occurred.','Contact form 1','','publish','closed','closed','','contact-form-1','','','2014-08-07 18:00:46','2014-08-07 18:00:46','',0,'http://centered.co.uk/?post_type=wpcf7_contact_form&#038;p=22',0,'wpcf7_contact_form','',0);
INSERT INTO `wp_posts` VALUES (23,1,'2014-08-07 18:03:20','2014-08-07 18:03:20','Contact Ian Hibbs at Centered Yoga Studio using the form below: \n\n[contact-form-7 id=\"22\" title=\"Contact form 1\"]','Contact','','inherit','closed','closed','','20-autosave-v1','','','2014-08-07 18:03:20','2014-08-07 18:03:20','',20,'http://centered.co.uk/20-autosave-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (24,1,'2014-08-07 18:03:20','2014-08-07 18:03:20','','','','inherit','closed','closed','','olympus-digital-camera','','','2014-08-07 18:03:20','2014-08-07 18:03:20','',0,'http://centered.co.uk/wp-content/uploads/2014/08/P5033444.jpg',0,'attachment','image/jpeg',0);
INSERT INTO `wp_posts` VALUES (25,1,'2014-08-07 18:03:51','2014-08-07 18:03:51','Contact Ian Hibbs at Centered Yoga Studio using the form below: \r\n\r\n[contact-form-7 id=\"22\" title=\"Contact form 1\"]','Contact','','inherit','closed','closed','','20-revision-v1','','','2014-08-07 18:03:51','2014-08-07 18:03:51','',20,'http://centered.co.uk/20-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (26,1,'2014-08-07 18:29:57','2014-08-07 18:29:57','<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/centered-yoga-logo.png\" alt=\"centered-yoga-logo\" width=\"1024\" height=\"552\" class=\"alignnone size-full wp-image-27\" />','Centered Yoga','','publish','closed','closed','','centered-yoga','','','2014-08-07 18:32:12','2014-08-07 18:32:12','',0,'http://centered.co.uk/?post_type=onepage&#038;p=26',0,'onepage','',0);
INSERT INTO `wp_posts` VALUES (27,1,'2014-08-07 18:22:14','2014-08-07 18:22:14','','centered-yoga-logo','','inherit','closed','closed','','centered-yoga-logo','','','2014-08-07 18:22:14','2014-08-07 18:22:14','',0,'http://centered.co.uk/wp-content/uploads/2014/08/centered-yoga-logo.png',0,'attachment','image/png',0);
INSERT INTO `wp_posts` VALUES (28,1,'2014-08-07 18:22:56','2014-08-07 18:22:56','','centered-yoga-slad-valley','','inherit','closed','closed','','centered-yoga-slad-valley','','','2014-08-07 18:22:56','2014-08-07 18:22:56','',0,'http://centered.co.uk/wp-content/uploads/2014/08/centered-yoga-slad-valley.jpg',0,'attachment','image/jpeg',0);
INSERT INTO `wp_posts` VALUES (29,1,'2014-08-07 18:29:57','2014-08-07 18:29:57','<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/centered-yoga-logo.png\" alt=\"centered-yoga-logo\" width=\"1024\" height=\"552\" class=\"alignnone size-full wp-image-27\" />','Centered Yoga','','inherit','closed','closed','','26-revision-v1','','','2014-08-07 18:29:57','2014-08-07 18:29:57','',26,'http://centered.co.uk/26-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (30,1,'2014-08-07 18:36:25','0000-00-00 00:00:00','','Auto Draft','','auto-draft','closed','closed','','','','','2014-08-07 18:36:25','0000-00-00 00:00:00','',0,'http://centered.co.uk/?post_type=onepage&p=30',0,'onepage','',0);
INSERT INTO `wp_posts` VALUES (31,1,'2014-08-07 18:37:11','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:37:11','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=31',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (32,1,'2014-08-07 18:37:12','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:37:12','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=32',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (33,1,'2014-08-07 18:37:12','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:37:12','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=33',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (34,1,'2014-08-07 18:47:44','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:47:44','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=34',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (35,1,'2014-08-07 18:47:45','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:47:45','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=35',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (36,1,'2014-08-07 18:47:45','0000-00-00 00:00:00',' ','','','draft','closed','closed','','','','','2014-08-07 18:47:45','0000-00-00 00:00:00','',0,'http://centered.co.uk/?p=36',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (37,1,'2014-08-07 18:50:01','2014-08-07 18:50:01','','Iyengar Yoga','','publish','closed','closed','','iyengar-yoga','','','2014-08-07 18:51:04','2014-08-07 18:51:04','',0,'http://centered.co.uk/?p=37',2,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (38,1,'2014-08-07 18:50:01','2014-08-07 18:50:01','','The Studio','','publish','closed','closed','','the-studio','','','2014-08-07 18:51:04','2014-08-07 18:51:04','',0,'http://centered.co.uk/?p=38',3,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (39,1,'2014-08-07 18:50:01','2014-08-07 18:50:01','','Classes','','publish','closed','closed','','classes','','','2014-08-07 18:51:04','2014-08-07 18:51:04','',0,'http://centered.co.uk/?p=39',4,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (40,1,'2014-08-07 18:50:01','2014-08-07 18:50:01','','Contact','','publish','closed','closed','','contact','','','2014-08-07 18:51:04','2014-08-07 18:51:04','',0,'http://centered.co.uk/?p=40',5,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (41,1,'2014-08-07 18:51:04','2014-08-07 18:51:04','','Home','','publish','closed','closed','','home','','','2014-08-07 18:51:04','2014-08-07 18:51:04','',0,'http://centered.co.uk/?p=41',1,'nav_menu_item','',0);
INSERT INTO `wp_posts` VALUES (42,1,'2014-08-07 19:07:32','2014-08-07 19:07:32','<h2>Iyengar Yoga</h2>\n\n\n[caption id=\"attachment_44\" align=\"alignright\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\n\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\n\n[caption id=\"attachment_45\" align=\"alignleft\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\n\n\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-autosave-v1','','','2014-08-07 19:07:32','2014-08-07 19:07:32','',8,'http://centered.co.uk/8-autosave-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (44,1,'2014-08-07 18:59:48','2014-08-07 18:59:48','','Yogacharya Sri B.K.S. Iyengar','Yogacharya Sri B.K.S. Iyengar','inherit','closed','closed','','yogacharya-sri-b-k-s-iyengar2','','','2014-08-07 18:59:48','2014-08-07 18:59:48','',0,'http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg',0,'attachment','image/jpeg',0);
INSERT INTO `wp_posts` VALUES (45,1,'2014-08-07 18:59:51','2014-08-07 18:59:51','','Yogacharya Sri B.K.S. Iyengar','Yogacharya Sri B.K.S. Iyengar','inherit','closed','closed','','yogacharya-sri-b-k-s-iyengar','','','2014-08-07 18:59:51','2014-08-07 18:59:51','',0,'http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg',0,'attachment','image/jpeg',0);
INSERT INTO `wp_posts` VALUES (46,1,'2014-08-07 19:01:03','2014-08-07 19:01:03','<h2>Iyengar Yoga</2>\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\n[caption id=\"attachment_44\" align=\"aligncenter\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\n[caption id=\"attachment_45\" align=\"aligncenter\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 19:01:03','2014-08-07 19:01:03','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (47,1,'2014-08-07 19:01:24','2014-08-07 19:01:24','<h2>Iyengar Yoga</h2>\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\n[caption id=\"attachment_44\" align=\"aligncenter\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\n[caption id=\"attachment_45\" align=\"aligncenter\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 19:01:24','2014-08-07 19:01:24','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (48,1,'2014-08-07 19:02:25','2014-08-07 19:02:25','<h2>Iyengar Yoga</h2>\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\n[caption id=\"attachment_45\" align=\"alignleft\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\n[caption id=\"attachment_44\" align=\"alignright\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 19:02:25','2014-08-07 19:02:25','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (49,1,'2014-08-07 19:04:39','2014-08-07 19:04:39','<h2>The Studio</h2>\r\nThe Studio is located on the outskirts of Stroud in the picturesque Slad Valley. It is housed in a renovated 17th Century cowshed within the walled garden and grounds of a Georgian manor house.\r\n\r\nThe clean, bright and heated practice room is fully equipped with yoga mats and all the props necessary for the <a href=\"#iyengar-yoga\">Iyengar method</a>.\r\n\r\nWith separate male and female changing rooms and WC, the studio makes a comfortable, dedicated setting for the practice of Iyengar Yoga.\r\n','The Studio','','inherit','closed','closed','','10-revision-v1','','','2014-08-07 19:04:39','2014-08-07 19:04:39','',10,'http://centered.co.uk/10-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (50,1,'2014-08-07 19:05:31','2014-08-07 19:05:31','','The Studio','The Studio','inherit','closed','closed','','olympus-digital-camera-2','','','2014-08-07 19:05:31','2014-08-07 19:05:31','',0,'http://centered.co.uk/wp-content/uploads/2014/08/P5033393.jpg',0,'attachment','image/jpeg',0);
INSERT INTO `wp_posts` VALUES (51,1,'2014-08-07 19:07:53','2014-08-07 19:07:53','<h2>Iyengar Yoga</h2>\r\n[caption id=\"attachment_44\" align=\"alignleft\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption] [caption id=\"attachment_45\" align=\"alignright\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\n[caption id=\"attachment_45\" align=\"alignleft\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 19:07:53','2014-08-07 19:07:53','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (52,1,'2014-08-07 19:08:26','2014-08-07 19:08:26','<h2>Iyengar Yoga</h2>\r\n[caption id=\"attachment_44\" align=\"alignleft\" width=\"335\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"335\" height=\"425\" class=\"size-full wp-image-44\" /> Yogacharya Sri B.K.S. Iyengar[/caption] [caption id=\"attachment_45\" align=\"alignright\" width=\"472\"]<img src=\"http://centered.co.uk/wp-content/uploads/2014/08/yogacharya-sri-b.k.s-iyengar.jpg\" alt=\"Yogacharya Sri B.K.S. Iyengar\" width=\"472\" height=\"426\" class=\"size-full wp-image-45\" /> Yogacharya Sri B.K.S. Iyengar[/caption]\r\n\r\nThe practice of Yoga has long been known to be a good source for physical and mental health benefits. Today, perhaps more than ever the practice of Yoga is becoming widely accepted as a non religious, universal practice and a practical approach to good health and spiritual and mental equanimity.\r\n\r\nPioneered by B.K.S. Iyengar, the Iyengar method of Yoga is a safe, strong, physical practice that utilises props and equipment to enable the student to attain good postural alignment and extension in the poses or Asanas.\r\n\r\nFor more information about B.K.S. Iyengar and Iyengar Yoga, visit <a href=\"http://www.bksiyengar.com/modules/Guruji/guru.htm\">www.bksiyengar.com</a> and <a href=\"http://www.iyengaryoga.org.uk/\">www.iyengaryoga.org.uk</a>','Iyengar Yoga','','inherit','closed','closed','','8-revision-v1','','','2014-08-07 19:08:26','2014-08-07 19:08:26','',8,'http://centered.co.uk/8-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (53,1,'2014-08-07 19:32:01','2014-08-07 19:32:01','<h2>Classes</h2>\r\nClasses are taught to the standards laid out by the Iyengar Association of the UK qualification introductory levels 1 and 2.\r\n\r\nIntroductory level 1 is for newcomers to Yoga and Iyengar Yoga. Introductory level 2 is suitable for students who have some experience of Iyengar Yoga and are looking to progress in their established practise and can hold a steady head balance.\r\n\r\nDuration of the class is 1½ hours.\r\n\r\nClasses can be attended on a drop-in basis or block booked in advance by term. For class times see Timetable, for prices see Costs','Classes','','inherit','closed','closed','','18-revision-v1','','','2014-08-07 19:32:01','2014-08-07 19:32:01','',18,'http://centered.co.uk/18-revision-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (54,1,'2014-08-07 19:51:48','2014-08-07 19:51:48','Classes are taught to the standards laid out by the Iyengar Association of the UK qualification introductory levels 1 and 2.\n\nIntroductory level 1 is for newcomers to Yoga and Iyengar Yoga. Introductory level 2 is suitable for students who have some experience of Iyengar Yoga and are looking to progress in their established practise and can hold a steady head balance.\n\nDuration of the class is 1½ hours.\n\nClasses can be attended on a drop-in basis or block booked in advance by term. For class times see Timetable, for prices see Costs','Classes','','inherit','closed','closed','','18-autosave-v1','','','2014-08-07 19:51:48','2014-08-07 19:51:48','',18,'http://centered.co.uk/18-autosave-v1/',0,'revision','',0);
INSERT INTO `wp_posts` VALUES (55,1,'2014-08-07 19:51:51','2014-08-07 19:51:51','Classes are taught to the standards laid out by the Iyengar Association of the UK qualification introductory levels 1 and 2.\r\n\r\nIntroductory level 1 is for newcomers to Yoga and Iyengar Yoga. Introductory level 2 is suitable for students who have some experience of Iyengar Yoga and are looking to progress in their established practise and can hold a steady head balance.\r\n\r\nDuration of the class is 1½ hours.\r\n\r\nClasses can be attended on a drop-in basis or block booked in advance by term. For class times see Timetable, for prices see Costs','Classes','','inherit','closed','closed','','18-revision-v1','','','2014-08-07 19:51:51','2014-08-07 19:51:51','',18,'http://centered.co.uk/18-revision-v1/',0,'revision','',0);
/*!40000 ALTER TABLE `wp_posts` ENABLE KEYS */;
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
