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
-- Table structure for table `wp_postmeta`
--

DROP TABLE IF EXISTS `wp_postmeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`meta_id`),
  KEY `post_id` (`post_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=InnoDB AUTO_INCREMENT=177 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_postmeta`
--

LOCK TABLES `wp_postmeta` WRITE;
/*!40000 ALTER TABLE `wp_postmeta` DISABLE KEYS */;
INSERT INTO `wp_postmeta` VALUES (1,2,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (6,8,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (7,8,'_edit_lock','1407444921:1');
INSERT INTO `wp_postmeta` VALUES (8,8,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (9,8,'container_width','default');
INSERT INTO `wp_postmeta` VALUES (10,8,'background_type','image');
INSERT INTO `wp_postmeta` VALUES (11,8,'background_color','#FFFFFF');
INSERT INTO `wp_postmeta` VALUES (12,10,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (13,10,'_edit_lock','1407444920:1');
INSERT INTO `wp_postmeta` VALUES (14,10,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (15,10,'container_width','default');
INSERT INTO `wp_postmeta` VALUES (16,10,'background_type','image');
INSERT INTO `wp_postmeta` VALUES (17,10,'background_color','#FFFFFF');
INSERT INTO `wp_postmeta` VALUES (18,13,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (19,13,'_edit_lock','1407433407:1');
INSERT INTO `wp_postmeta` VALUES (20,13,'_wp_page_template','default');
INSERT INTO `wp_postmeta` VALUES (21,13,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (22,15,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (23,15,'_edit_lock','1407433467:1');
INSERT INTO `wp_postmeta` VALUES (24,15,'_wp_page_template','page_onepage.php');
INSERT INTO `wp_postmeta` VALUES (25,15,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (26,2,'_wp_trash_meta_status','publish');
INSERT INTO `wp_postmeta` VALUES (27,2,'_wp_trash_meta_time','1407433708');
INSERT INTO `wp_postmeta` VALUES (28,18,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (29,18,'_edit_lock','1407444920:1');
INSERT INTO `wp_postmeta` VALUES (30,18,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (31,18,'container_width','default');
INSERT INTO `wp_postmeta` VALUES (32,18,'background_type','image');
INSERT INTO `wp_postmeta` VALUES (33,18,'background_color','#FFFFFF');
INSERT INTO `wp_postmeta` VALUES (34,20,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (35,20,'_edit_lock','1407443146:1');
INSERT INTO `wp_postmeta` VALUES (36,20,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (37,20,'container_width','default');
INSERT INTO `wp_postmeta` VALUES (38,20,'background_type','color');
INSERT INTO `wp_postmeta` VALUES (39,20,'background_color','#FFFFFF');
INSERT INTO `wp_postmeta` VALUES (43,22,'_form','<p>Your Name (required)<br />\n    [text* your-name] </p>\n\n<p>Your Email (required)<br />\n    [email* your-email] </p>\n\n<p>Subject<br />\n    [text your-subject] </p>\n\n<p>Your Message<br />\n    [textarea your-message] <br />\n[quiz quiz-111 2/1 id:quizq class:quiz \"3 + 4 = | 7\"] <span class=\"small\">Please answer this question to prevent spam being sent from this form</span></p>\n\n<p>[submit \"Send\"]</p>');
INSERT INTO `wp_postmeta` VALUES (44,22,'_mail','a:8:{s:7:\"subject\";s:14:\"[your-subject]\";s:6:\"sender\";s:26:\"[your-name] <[your-email]>\";s:4:\"body\";s:179:\"From: [your-name] <[your-email]>\nSubject: [your-subject]\n\nMessage Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Centered Yoga Studio (http://centered.co.uk)\";s:9:\"recipient\";s:14:\"sam@mrstth.com\";s:18:\"additional_headers\";s:0:\"\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}');
INSERT INTO `wp_postmeta` VALUES (45,22,'_mail_2','a:9:{s:6:\"active\";b:0;s:7:\"subject\";s:14:\"[your-subject]\";s:6:\"sender\";s:26:\"[your-name] <[your-email]>\";s:4:\"body\";s:121:\"Message Body:\n[your-message]\n\n--\nThis e-mail was sent from a contact form on Centered Yoga Studio (http://centered.co.uk)\";s:9:\"recipient\";s:12:\"[your-email]\";s:18:\"additional_headers\";s:0:\"\";s:11:\"attachments\";s:0:\"\";s:8:\"use_html\";b:0;s:13:\"exclude_blank\";b:0;}');
INSERT INTO `wp_postmeta` VALUES (46,22,'_messages','a:21:{s:12:\"mail_sent_ok\";s:43:\"Your message was sent successfully. Thanks.\";s:12:\"mail_sent_ng\";s:93:\"Failed to send your message. Please try later or contact the administrator by another method.\";s:16:\"validation_error\";s:74:\"Validation errors occurred. Please confirm the fields and submit it again.\";s:4:\"spam\";s:93:\"Failed to send your message. Please try later or contact the administrator by another method.\";s:12:\"accept_terms\";s:35:\"Please accept the terms to proceed.\";s:16:\"invalid_required\";s:31:\"Please fill the required field.\";s:17:\"captcha_not_match\";s:31:\"Your entered code is incorrect.\";s:14:\"invalid_number\";s:28:\"Number format seems invalid.\";s:16:\"number_too_small\";s:25:\"This number is too small.\";s:16:\"number_too_large\";s:25:\"This number is too large.\";s:13:\"invalid_email\";s:28:\"Email address seems invalid.\";s:11:\"invalid_url\";s:18:\"URL seems invalid.\";s:11:\"invalid_tel\";s:31:\"Telephone number seems invalid.\";s:23:\"quiz_answer_not_correct\";s:27:\"Your answer is not correct.\";s:12:\"invalid_date\";s:26:\"Date format seems invalid.\";s:14:\"date_too_early\";s:23:\"This date is too early.\";s:13:\"date_too_late\";s:22:\"This date is too late.\";s:13:\"upload_failed\";s:22:\"Failed to upload file.\";s:24:\"upload_file_type_invalid\";s:30:\"This file type is not allowed.\";s:21:\"upload_file_too_large\";s:23:\"This file is too large.\";s:23:\"upload_failed_php_error\";s:38:\"Failed to upload file. Error occurred.\";}');
INSERT INTO `wp_postmeta` VALUES (47,22,'_additional_settings','');
INSERT INTO `wp_postmeta` VALUES (48,22,'_locale','en_US');
INSERT INTO `wp_postmeta` VALUES (49,24,'_wp_attached_file','2014/08/P5033444.jpg');
INSERT INTO `wp_postmeta` VALUES (50,24,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:2000;s:6:\"height\";i:1500;s:4:\"file\";s:20:\"2014/08/P5033444.jpg\";s:5:\"sizes\";a:15:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"P5033444-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"P5033444-300x225.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:21:\"P5033444-1024x768.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"post-thumb\";a:4:{s:4:\"file\";s:20:\"P5033444-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-thumb\";a:4:{s:4:\"file\";s:21:\"P5033444-690x1000.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:1000;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:20:\"P5033444-228x160.jpg\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:20:\"P5033444-472x295.jpg\";s:5:\"width\";i:472;s:6:\"height\";i:295;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:18:\"P5033444-75x75.jpg\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:20:\"P5033444-300x100.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:20:\"P5033444-285x280.jpg\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:20:\"P5033444-290x280.jpg\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:20:\"P5033444-690x330.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:330;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-image\";a:4:{s:4:\"file\";s:20:\"P5033444-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:20:\"P5033444-370x208.jpg\";s:5:\"width\";i:370;s:6:\"height\";i:208;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"post-thumb-blogroll\";a:4:{s:4:\"file\";s:21:\"P5033444-1100x450.jpg\";s:5:\"width\";i:1100;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";d:4.4000000000000003552713678800500929355621337890625;s:6:\"credit\";s:12:\"Sam_Urquhart\";s:6:\"camera\";s:5:\"E-PM1\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:1399119761;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"25\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:9:\"0.0015625\";s:5:\"title\";s:22:\"OLYMPUS DIGITAL CAMERA\";}}');
INSERT INTO `wp_postmeta` VALUES (52,26,'_edit_last','1');
INSERT INTO `wp_postmeta` VALUES (53,26,'_edit_lock','1407436380:1');
INSERT INTO `wp_postmeta` VALUES (54,27,'_wp_attached_file','2014/08/centered-yoga-logo.png');
INSERT INTO `wp_postmeta` VALUES (55,27,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:1024;s:6:\"height\";i:552;s:4:\"file\";s:30:\"2014/08/centered-yoga-logo.png\";s:5:\"sizes\";a:14:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-150x150.png\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:9:\"image/png\";}s:6:\"medium\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-300x161.png\";s:5:\"width\";i:300;s:6:\"height\";i:161;s:9:\"mime-type\";s:9:\"image/png\";}s:10:\"post-thumb\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-800x450.png\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"portfolio-thumb\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-690x552.png\";s:5:\"width\";i:690;s:6:\"height\";i:552;s:9:\"mime-type\";s:9:\"image/png\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-228x160.png\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:9:\"image/png\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-472x295.png\";s:5:\"width\";i:472;s:6:\"height\";i:295;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:28:\"centered-yoga-logo-75x75.png\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-300x100.png\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:9:\"image/png\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-285x280.png\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-290x280.png\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:9:\"image/png\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-690x330.png\";s:5:\"width\";i:690;s:6:\"height\";i:330;s:9:\"mime-type\";s:9:\"image/png\";}s:15:\"portfolio-image\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-800x450.png\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:30:\"centered-yoga-logo-370x208.png\";s:5:\"width\";i:370;s:6:\"height\";i:208;s:9:\"mime-type\";s:9:\"image/png\";}s:19:\"post-thumb-blogroll\";a:4:{s:4:\"file\";s:31:\"centered-yoga-logo-1024x450.png\";s:5:\"width\";i:1024;s:6:\"height\";i:450;s:9:\"mime-type\";s:9:\"image/png\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";i:0;s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:0;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";i:0;s:3:\"iso\";i:0;s:13:\"shutter_speed\";i:0;s:5:\"title\";s:0:\"\";}}');
INSERT INTO `wp_postmeta` VALUES (56,28,'_wp_attached_file','2014/08/centered-yoga-slad-valley.jpg');
INSERT INTO `wp_postmeta` VALUES (57,28,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:2560;s:6:\"height\";i:1336;s:4:\"file\";s:37:\"2014/08/centered-yoga-slad-valley.jpg\";s:5:\"sizes\";a:15:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-300x156.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:156;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:38:\"centered-yoga-slad-valley-1024x534.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:534;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"post-thumb\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-thumb\";a:4:{s:4:\"file\";s:38:\"centered-yoga-slad-valley-690x1000.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:1000;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-228x160.jpg\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-472x295.jpg\";s:5:\"width\";i:472;s:6:\"height\";i:295;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:35:\"centered-yoga-slad-valley-75x75.jpg\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-300x100.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-285x280.jpg\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-290x280.jpg\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-690x330.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:330;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-image\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:37:\"centered-yoga-slad-valley-370x208.jpg\";s:5:\"width\";i:370;s:6:\"height\";i:208;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"post-thumb-blogroll\";a:4:{s:4:\"file\";s:38:\"centered-yoga-slad-valley-1100x450.jpg\";s:5:\"width\";i:1100;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";i:0;s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:0;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";i:0;s:3:\"iso\";i:0;s:13:\"shutter_speed\";i:0;s:5:\"title\";s:0:\"\";}}');
INSERT INTO `wp_postmeta` VALUES (58,26,'slide_template','');
INSERT INTO `wp_postmeta` VALUES (59,26,'container_width','default');
INSERT INTO `wp_postmeta` VALUES (60,26,'background_type','image');
INSERT INTO `wp_postmeta` VALUES (61,26,'background_image','http://centered.co.uk/wp-content/uploads/2014/08/centered-yoga-slad-valley.jpg');
INSERT INTO `wp_postmeta` VALUES (62,26,'background_color','#FFFFFF');
INSERT INTO `wp_postmeta` VALUES (63,26,'background_parallax','1');
INSERT INTO `wp_postmeta` VALUES (64,31,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (65,31,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (66,31,'_menu_item_object_id','15');
INSERT INTO `wp_postmeta` VALUES (67,31,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (68,31,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (69,31,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (70,31,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (71,31,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (72,31,'_menu_item_orphaned','1407436632');
INSERT INTO `wp_postmeta` VALUES (73,32,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (74,32,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (75,32,'_menu_item_object_id','15');
INSERT INTO `wp_postmeta` VALUES (76,32,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (77,32,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (78,32,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (79,32,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (80,32,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (81,32,'_menu_item_orphaned','1407436632');
INSERT INTO `wp_postmeta` VALUES (82,33,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (83,33,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (84,33,'_menu_item_object_id','13');
INSERT INTO `wp_postmeta` VALUES (85,33,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (86,33,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (87,33,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (88,33,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (89,33,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (90,33,'_menu_item_orphaned','1407436632');
INSERT INTO `wp_postmeta` VALUES (91,34,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (92,34,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (93,34,'_menu_item_object_id','15');
INSERT INTO `wp_postmeta` VALUES (94,34,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (95,34,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (96,34,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (97,34,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (98,34,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (99,34,'_menu_item_orphaned','1407437265');
INSERT INTO `wp_postmeta` VALUES (100,35,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (101,35,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (102,35,'_menu_item_object_id','15');
INSERT INTO `wp_postmeta` VALUES (103,35,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (104,35,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (105,35,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (106,35,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (107,35,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (108,35,'_menu_item_orphaned','1407437265');
INSERT INTO `wp_postmeta` VALUES (109,36,'_menu_item_type','post_type');
INSERT INTO `wp_postmeta` VALUES (110,36,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (111,36,'_menu_item_object_id','13');
INSERT INTO `wp_postmeta` VALUES (112,36,'_menu_item_object','page');
INSERT INTO `wp_postmeta` VALUES (113,36,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (114,36,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (115,36,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (116,36,'_menu_item_url','');
INSERT INTO `wp_postmeta` VALUES (117,36,'_menu_item_orphaned','1407437265');
INSERT INTO `wp_postmeta` VALUES (118,37,'_menu_item_type','custom');
INSERT INTO `wp_postmeta` VALUES (119,37,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (120,37,'_menu_item_object_id','37');
INSERT INTO `wp_postmeta` VALUES (121,37,'_menu_item_object','custom');
INSERT INTO `wp_postmeta` VALUES (122,37,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (123,37,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (124,37,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (125,37,'_menu_item_url','/#iyengar-yoga');
INSERT INTO `wp_postmeta` VALUES (127,38,'_menu_item_type','custom');
INSERT INTO `wp_postmeta` VALUES (128,38,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (129,38,'_menu_item_object_id','38');
INSERT INTO `wp_postmeta` VALUES (130,38,'_menu_item_object','custom');
INSERT INTO `wp_postmeta` VALUES (131,38,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (132,38,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (133,38,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (134,38,'_menu_item_url','/#the-studio');
INSERT INTO `wp_postmeta` VALUES (136,39,'_menu_item_type','custom');
INSERT INTO `wp_postmeta` VALUES (137,39,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (138,39,'_menu_item_object_id','39');
INSERT INTO `wp_postmeta` VALUES (139,39,'_menu_item_object','custom');
INSERT INTO `wp_postmeta` VALUES (140,39,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (141,39,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (142,39,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (143,39,'_menu_item_url','/#classes');
INSERT INTO `wp_postmeta` VALUES (145,40,'_menu_item_type','custom');
INSERT INTO `wp_postmeta` VALUES (146,40,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (147,40,'_menu_item_object_id','40');
INSERT INTO `wp_postmeta` VALUES (148,40,'_menu_item_object','custom');
INSERT INTO `wp_postmeta` VALUES (149,40,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (150,40,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (151,40,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (152,40,'_menu_item_url','/#contact');
INSERT INTO `wp_postmeta` VALUES (154,41,'_menu_item_type','custom');
INSERT INTO `wp_postmeta` VALUES (155,41,'_menu_item_menu_item_parent','0');
INSERT INTO `wp_postmeta` VALUES (156,41,'_menu_item_object_id','41');
INSERT INTO `wp_postmeta` VALUES (157,41,'_menu_item_object','custom');
INSERT INTO `wp_postmeta` VALUES (158,41,'_menu_item_target','');
INSERT INTO `wp_postmeta` VALUES (159,41,'_menu_item_classes','a:1:{i:0;s:0:\"\";}');
INSERT INTO `wp_postmeta` VALUES (160,41,'_menu_item_xfn','');
INSERT INTO `wp_postmeta` VALUES (161,41,'_menu_item_url','/');
INSERT INTO `wp_postmeta` VALUES (164,44,'_wp_attached_file','2014/08/yogacharya-sri-b.k.s-iyengar2.jpg');
INSERT INTO `wp_postmeta` VALUES (165,44,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:335;s:6:\"height\";i:425;s:4:\"file\";s:41:\"2014/08/yogacharya-sri-b.k.s-iyengar2.jpg\";s:5:\"sizes\";a:10:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-236x300.jpg\";s:5:\"width\";i:236;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-228x160.jpg\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-335x295.jpg\";s:5:\"width\";i:335;s:6:\"height\";i:295;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:39:\"yogacharya-sri-b.k.s-iyengar2-75x75.jpg\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-300x100.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-285x280.jpg\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-290x280.jpg\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-335x330.jpg\";s:5:\"width\";i:335;s:6:\"height\";i:330;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:41:\"yogacharya-sri-b.k.s-iyengar2-335x208.jpg\";s:5:\"width\";i:335;s:6:\"height\";i:208;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";i:0;s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:0;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";i:0;s:3:\"iso\";i:0;s:13:\"shutter_speed\";i:0;s:5:\"title\";s:0:\"\";}}');
INSERT INTO `wp_postmeta` VALUES (166,45,'_wp_attached_file','2014/08/yogacharya-sri-b.k.s-iyengar.jpg');
INSERT INTO `wp_postmeta` VALUES (167,45,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:472;s:6:\"height\";i:426;s:4:\"file\";s:40:\"2014/08/yogacharya-sri-b.k.s-iyengar.jpg\";s:5:\"sizes\";a:10:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-300x270.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:270;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-228x160.jpg\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-472x295.jpg\";s:5:\"width\";i:472;s:6:\"height\";i:295;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:38:\"yogacharya-sri-b.k.s-iyengar-75x75.jpg\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-300x100.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-285x280.jpg\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-290x280.jpg\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-472x330.jpg\";s:5:\"width\";i:472;s:6:\"height\";i:330;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:40:\"yogacharya-sri-b.k.s-iyengar-370x208.jpg\";s:5:\"width\";i:370;s:6:\"height\";i:208;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";i:0;s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:0;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";i:0;s:3:\"iso\";i:0;s:13:\"shutter_speed\";i:0;s:5:\"title\";s:0:\"\";}}');
INSERT INTO `wp_postmeta` VALUES (168,45,'_wp_attachment_image_alt','Yogacharya Sri B.K.S. Iyengar');
INSERT INTO `wp_postmeta` VALUES (169,44,'_wp_attachment_image_alt','Yogacharya Sri B.K.S. Iyengar');
INSERT INTO `wp_postmeta` VALUES (170,50,'_wp_attached_file','2014/08/P5033393.jpg');
INSERT INTO `wp_postmeta` VALUES (171,50,'_wp_attachment_metadata','a:5:{s:5:\"width\";i:2000;s:6:\"height\";i:1500;s:4:\"file\";s:20:\"2014/08/P5033393.jpg\";s:5:\"sizes\";a:15:{s:9:\"thumbnail\";a:4:{s:4:\"file\";s:20:\"P5033393-150x150.jpg\";s:5:\"width\";i:150;s:6:\"height\";i:150;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:6:\"medium\";a:4:{s:4:\"file\";s:20:\"P5033393-300x225.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:225;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:5:\"large\";a:4:{s:4:\"file\";s:21:\"P5033393-1024x768.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:768;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"post-thumb\";a:4:{s:4:\"file\";s:20:\"P5033393-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-thumb\";a:4:{s:4:\"file\";s:21:\"P5033393-690x1000.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:1000;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:12:\"four-columns\";a:4:{s:4:\"file\";s:20:\"P5033393-228x160.jpg\";s:5:\"width\";i:228;s:6:\"height\";i:160;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:11:\"two-columns\";a:4:{s:4:\"file\";s:20:\"P5033393-472x295.jpg\";s:5:\"width\";i:472;s:6:\"height\";i:295;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"thumbnail-large\";a:4:{s:4:\"file\";s:18:\"P5033393-75x75.jpg\";s:5:\"width\";i:75;s:6:\"height\";i:75;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:14:\"thumbnail-wide\";a:4:{s:4:\"file\";s:20:\"P5033393-300x100.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:100;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"main-image\";a:4:{s:4:\"file\";s:20:\"P5033393-285x280.jpg\";s:5:\"width\";i:285;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"main-image-pictures\";a:4:{s:4:\"file\";s:20:\"P5033393-290x280.jpg\";s:5:\"width\";i:290;s:6:\"height\";i:280;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"lead-image\";a:4:{s:4:\"file\";s:20:\"P5033393-690x330.jpg\";s:5:\"width\";i:690;s:6:\"height\";i:330;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:15:\"portfolio-image\";a:4:{s:4:\"file\";s:20:\"P5033393-800x450.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:10:\"news-image\";a:4:{s:4:\"file\";s:20:\"P5033393-370x208.jpg\";s:5:\"width\";i:370;s:6:\"height\";i:208;s:9:\"mime-type\";s:10:\"image/jpeg\";}s:19:\"post-thumb-blogroll\";a:4:{s:4:\"file\";s:21:\"P5033393-1100x450.jpg\";s:5:\"width\";i:1100;s:6:\"height\";i:450;s:9:\"mime-type\";s:10:\"image/jpeg\";}}s:10:\"image_meta\";a:10:{s:8:\"aperture\";d:3.5;s:6:\"credit\";s:12:\"Sam_Urquhart\";s:6:\"camera\";s:5:\"E-PM1\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";i:1399118898;s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"14\";s:3:\"iso\";s:3:\"200\";s:13:\"shutter_speed\";s:8:\"0.000625\";s:5:\"title\";s:22:\"OLYMPUS DIGITAL CAMERA\";}}');
INSERT INTO `wp_postmeta` VALUES (172,50,'_wp_attachment_image_alt','The Studio');
INSERT INTO `wp_postmeta` VALUES (173,10,'background_image','http://centered.co.uk/wp-content/uploads/2014/08/P5033393.jpg');
INSERT INTO `wp_postmeta` VALUES (174,10,'background_parallax','1');
INSERT INTO `wp_postmeta` VALUES (175,18,'page_custom_title','Classes');
INSERT INTO `wp_postmeta` VALUES (176,18,'title_color','#c14413');
/*!40000 ALTER TABLE `wp_postmeta` ENABLE KEYS */;
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
