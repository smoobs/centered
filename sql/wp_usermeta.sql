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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'first_name','Admin');
INSERT INTO `wp_usermeta` VALUES (2,1,'last_name','');
INSERT INTO `wp_usermeta` VALUES (3,1,'nickname','Admin');
INSERT INTO `wp_usermeta` VALUES (4,1,'description','');
INSERT INTO `wp_usermeta` VALUES (5,1,'rich_editing','true');
INSERT INTO `wp_usermeta` VALUES (6,1,'comment_shortcuts','false');
INSERT INTO `wp_usermeta` VALUES (7,1,'admin_color','fresh');
INSERT INTO `wp_usermeta` VALUES (8,1,'use_ssl','0');
INSERT INTO `wp_usermeta` VALUES (9,1,'show_admin_bar_front','true');
INSERT INTO `wp_usermeta` VALUES (10,1,'wp_capabilities','a:3:{s:13:\"administrator\";s:1:\"1\";s:17:\"gform_full_access\";s:1:\"1\";s:14:\"backwpup_admin\";b:1;}');
INSERT INTO `wp_usermeta` VALUES (11,1,'wp_user_level','10');
INSERT INTO `wp_usermeta` VALUES (12,1,'dismissed_wp_pointers','wp330_toolbar,wp330_media_uploader,wp330_saving_widgets,wp350_media,wp340_customize_current_theme_link,wp360_revisions');
INSERT INTO `wp_usermeta` VALUES (13,1,'show_welcome_panel','0');
INSERT INTO `wp_usermeta` VALUES (14,1,'wp_dashboard_quick_press_last_post_id','5713');
INSERT INTO `wp_usermeta` VALUES (15,1,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:172:\"dashboard_right_now,dashboard_recent_comments,dashboard_incoming_links,dashboard_plugins,dashboard_quick_press,dashboard_recent_drafts,dashboard_primary,dashboard_secondary\";s:4:\"side\";s:0:\"\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (16,1,'screen_layout_dashboard','1');
INSERT INTO `wp_usermeta` VALUES (17,1,'closedpostboxes_dashboard','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (18,1,'metaboxhidden_dashboard','a:4:{i:0;s:21:\"dashboard_quick_press\";i:1;s:17:\"dashboard_primary\";i:2;s:18:\"dashboard_activity\";i:3;s:18:\"rg_forms_dashboard\";}');
INSERT INTO `wp_usermeta` VALUES (19,1,'aim','');
INSERT INTO `wp_usermeta` VALUES (20,1,'yim','');
INSERT INTO `wp_usermeta` VALUES (21,1,'jabber','');
INSERT INTO `wp_usermeta` VALUES (22,1,'manageedit-postcolumnshidden','a:10:{i:0;s:6:\"author\";i:1;s:10:\"categories\";i:2;s:4:\"tags\";i:3;s:8:\"comments\";i:4;s:4:\"date\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (23,1,'manageedit-pagecolumnshidden','a:6:{i:0;s:6:\"author\";i:1;s:8:\"comments\";i:2;s:4:\"date\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (24,1,'closedpostboxes_acf','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (25,1,'metaboxhidden_acf','a:2:{i:0;s:7:\"postpsp\";i:1;s:7:\"slugdiv\";}');
INSERT INTO `wp_usermeta` VALUES (26,1,'manageedit-testimonialcolumnshidden','a:2:{i:0;s:4:\"date\";i:1;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (27,1,'closedpostboxes_testimonial','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (28,1,'metaboxhidden_testimonial','a:3:{i:0;s:7:\"postpsp\";i:1;s:10:\"postcustom\";i:2;s:7:\"slugdiv\";}');
INSERT INTO `wp_usermeta` VALUES (29,1,'manageuploadcolumnshidden','a:6:{i:0;s:6:\"author\";i:1;s:8:\"comments\";i:2;s:4:\"date\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (30,1,'wp_edit_page_per_page','50');
INSERT INTO `wp_usermeta` VALUES (31,1,'closedpostboxes_page','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (32,1,'metaboxhidden_page','a:15:{i:0;s:7:\"acf_248\";i:1;s:8:\"acf_4906\";i:2;s:10:\"postcustom\";i:3;s:16:\"commentstatusdiv\";i:4;s:11:\"commentsdiv\";i:5;s:7:\"slugdiv\";i:6;s:9:\"authordiv\";i:7;s:8:\"acf_1555\";i:8;s:6:\"acf_27\";i:9;s:8:\"acf_1366\";i:10;s:8:\"acf_1385\";i:11;s:6:\"acf_23\";i:12;s:8:\"acf_1386\";i:13;s:7:\"acf_157\";i:14;s:12:\"revisionsdiv\";}');
INSERT INTO `wp_usermeta` VALUES (33,1,'meta-box-order_page','a:3:{s:4:\"side\";s:39:\"submitdiv,pageparentdiv,acf_215,acf_248\";s:6:\"normal\";s:155:\"postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv,acf_260,acf_1555,acf_27,acf_1366,acf_1385,acf_23,acf_1386,wpseo_meta,postpsp,acf_157,revisionsdiv\";s:8:\"advanced\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (34,1,'screen_layout_page','2');
INSERT INTO `wp_usermeta` VALUES (35,1,'wp_user-settings','imgsize=large&hidetb=1&editor=html&urlbutton=none&align=left&wplink=1&libraryContent=browse&ed_size=736&dfw_width=822');
INSERT INTO `wp_usermeta` VALUES (36,1,'wp_user-settings-time','1405435006');
INSERT INTO `wp_usermeta` VALUES (37,1,'managenav-menuscolumnshidden','a:3:{i:0;s:11:\"link-target\";i:1;s:3:\"xfn\";i:2;s:11:\"description\";}');
INSERT INTO `wp_usermeta` VALUES (38,1,'metaboxhidden_nav-menus','a:5:{i:0;s:8:\"add-post\";i:1;s:15:\"add-testimonial\";i:2;s:12:\"add-category\";i:3;s:12:\"add-post_tag\";i:4;s:8:\"add-type\";}');
INSERT INTO `wp_usermeta` VALUES (39,1,'closedpostboxes_nav-menus','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (40,1,'nav_menu_recently_edited','3');
INSERT INTO `wp_usermeta` VALUES (41,1,'manageedit-projectcolumnshidden','a:2:{i:0;s:4:\"date\";i:1;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (42,1,'closedpostboxes_project','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (43,1,'metaboxhidden_project','a:13:{i:0;s:7:\"acf_248\";i:1;s:7:\"acf_215\";i:2;s:7:\"postpsp\";i:3;s:7:\"acf_260\";i:4;s:8:\"acf_1366\";i:5;s:8:\"acf_1385\";i:6;s:6:\"acf_27\";i:7;s:6:\"acf_23\";i:8;s:8:\"acf_1386\";i:9;s:7:\"acf_157\";i:10;s:11:\"postexcerpt\";i:11;s:10:\"postcustom\";i:12;s:7:\"slugdiv\";}');
INSERT INTO `wp_usermeta` VALUES (44,2,'first_name','Philip');
INSERT INTO `wp_usermeta` VALUES (45,2,'last_name','Davis');
INSERT INTO `wp_usermeta` VALUES (46,2,'nickname','phil');
INSERT INTO `wp_usermeta` VALUES (47,2,'description','');
INSERT INTO `wp_usermeta` VALUES (48,2,'rich_editing','true');
INSERT INTO `wp_usermeta` VALUES (49,2,'comment_shortcuts','false');
INSERT INTO `wp_usermeta` VALUES (50,2,'admin_color','fresh');
INSERT INTO `wp_usermeta` VALUES (51,2,'use_ssl','0');
INSERT INTO `wp_usermeta` VALUES (52,2,'show_admin_bar_front','true');
INSERT INTO `wp_usermeta` VALUES (53,2,'wp_capabilities','a:1:{s:6:\"editor\";s:1:\"1\";}');
INSERT INTO `wp_usermeta` VALUES (54,2,'wp_user_level','7');
INSERT INTO `wp_usermeta` VALUES (55,2,'dismissed_wp_pointers','wp330_toolbar,wp330_media_uploader,wp330_saving_widgets,wp350_media,wp360_revisions');
INSERT INTO `wp_usermeta` VALUES (56,3,'first_name','Renewables First');
INSERT INTO `wp_usermeta` VALUES (57,3,'last_name','Staff');
INSERT INTO `wp_usermeta` VALUES (58,3,'nickname','staff');
INSERT INTO `wp_usermeta` VALUES (59,3,'description','');
INSERT INTO `wp_usermeta` VALUES (60,3,'rich_editing','true');
INSERT INTO `wp_usermeta` VALUES (61,3,'comment_shortcuts','false');
INSERT INTO `wp_usermeta` VALUES (62,3,'admin_color','fresh');
INSERT INTO `wp_usermeta` VALUES (63,3,'use_ssl','0');
INSERT INTO `wp_usermeta` VALUES (64,3,'show_admin_bar_front','true');
INSERT INTO `wp_usermeta` VALUES (65,3,'wp_capabilities','a:1:{s:6:\"author\";s:1:\"1\";}');
INSERT INTO `wp_usermeta` VALUES (66,3,'wp_user_level','2');
INSERT INTO `wp_usermeta` VALUES (67,3,'dismissed_wp_pointers','wp330_toolbar,wp330_media_uploader,wp330_saving_widgets');
INSERT INTO `wp_usermeta` VALUES (68,2,'wp_dashboard_quick_press_last_post_id','5666');
INSERT INTO `wp_usermeta` VALUES (69,2,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:154:\"dashboard_right_now,dashboard_recent_comments,dashboard_incoming_links,dashboard_quick_press,dashboard_recent_drafts,dashboard_primary,dashboard_secondary\";s:4:\"side\";s:0:\"\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (70,2,'screen_layout_dashboard','1');
INSERT INTO `wp_usermeta` VALUES (71,2,'closedpostboxes_dashboard','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (72,2,'metaboxhidden_dashboard','a:6:{i:0;s:25:\"dashboard_recent_comments\";i:1;s:24:\"dashboard_incoming_links\";i:2;s:21:\"dashboard_quick_press\";i:3;s:23:\"dashboard_recent_drafts\";i:4;s:17:\"dashboard_primary\";i:5;s:19:\"dashboard_secondary\";}');
INSERT INTO `wp_usermeta` VALUES (73,2,'aim','');
INSERT INTO `wp_usermeta` VALUES (74,2,'yim','');
INSERT INTO `wp_usermeta` VALUES (75,2,'jabber','');
INSERT INTO `wp_usermeta` VALUES (76,3,'aim','');
INSERT INTO `wp_usermeta` VALUES (77,3,'yim','');
INSERT INTO `wp_usermeta` VALUES (78,3,'jabber','');
INSERT INTO `wp_usermeta` VALUES (79,2,'manageedit-postcolumnshidden','a:10:{i:0;s:6:\"author\";i:1;s:10:\"categories\";i:2;s:4:\"tags\";i:3;s:8:\"comments\";i:4;s:4:\"date\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (80,2,'closedpostboxes_post','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (81,2,'metaboxhidden_post','a:17:{i:0;s:16:\"tagsdiv-post_tag\";i:1;s:7:\"acf_215\";i:2;s:7:\"acf_248\";i:3;s:11:\"postexcerpt\";i:4;s:13:\"trackbacksdiv\";i:5;s:10:\"postcustom\";i:6;s:16:\"commentstatusdiv\";i:7;s:7:\"slugdiv\";i:8;s:9:\"authordiv\";i:9;s:7:\"acf_260\";i:10;s:8:\"acf_1366\";i:11;s:8:\"acf_1555\";i:12;s:6:\"acf_27\";i:13;s:8:\"acf_1385\";i:14;s:6:\"acf_23\";i:15;s:8:\"acf_1386\";i:16;s:7:\"acf_157\";}');
INSERT INTO `wp_usermeta` VALUES (82,2,'manageuploadcolumnshidden','a:6:{i:0;s:6:\"author\";i:1;s:8:\"comments\";i:2;s:4:\"date\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (83,2,'manageedit-pagecolumnshidden','a:6:{i:0;s:6:\"author\";i:1;s:8:\"comments\";i:2;s:4:\"date\";i:3;s:0:\"\";i:4;s:0:\"\";i:5;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (84,2,'manageedit-testimonialcolumnshidden','a:2:{i:0;s:4:\"date\";i:1;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (85,2,'manageedit-projectcolumnshidden','a:2:{i:0;s:4:\"date\";i:1;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (86,2,'closedpostboxes_project','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (87,2,'metaboxhidden_project','a:13:{i:0;s:7:\"acf_215\";i:1;s:7:\"acf_248\";i:2;s:7:\"postpsp\";i:3;s:11:\"postexcerpt\";i:4;s:10:\"postcustom\";i:5;s:7:\"slugdiv\";i:6;s:7:\"acf_260\";i:7;s:8:\"acf_1366\";i:8;s:6:\"acf_27\";i:9;s:8:\"acf_1385\";i:10;s:6:\"acf_23\";i:11;s:8:\"acf_1386\";i:12;s:7:\"acf_157\";}');
INSERT INTO `wp_usermeta` VALUES (88,2,'wp_edit_page_per_page','50');
INSERT INTO `wp_usermeta` VALUES (89,3,'wp_dashboard_quick_press_last_post_id','2389');
INSERT INTO `wp_usermeta` VALUES (90,3,'meta-box-order_dashboard','a:4:{s:6:\"normal\";s:128:\"dashboard_right_now,dashboard_incoming_links,dashboard_quick_press,dashboard_recent_drafts,dashboard_primary,dashboard_secondary\";s:4:\"side\";s:0:\"\";s:7:\"column3\";s:0:\"\";s:7:\"column4\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (91,3,'screen_layout_dashboard','1');
INSERT INTO `wp_usermeta` VALUES (92,3,'closedpostboxes_dashboard','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (93,3,'metaboxhidden_dashboard','a:5:{i:0;s:24:\"dashboard_incoming_links\";i:1;s:21:\"dashboard_quick_press\";i:2;s:23:\"dashboard_recent_drafts\";i:3;s:17:\"dashboard_primary\";i:4;s:19:\"dashboard_secondary\";}');
INSERT INTO `wp_usermeta` VALUES (94,3,'manageuploadcolumnshidden','a:8:{i:0;s:6:\"author\";i:1;s:6:\"parent\";i:2;s:8:\"comments\";i:3;s:4:\"date\";i:4;s:0:\"\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (95,3,'manageedit-projectcolumnshidden','a:2:{i:0;s:4:\"date\";i:1;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (96,3,'manageedit-postcolumnshidden','a:10:{i:0;s:6:\"author\";i:1;s:10:\"categories\";i:2;s:4:\"tags\";i:3;s:8:\"comments\";i:4;s:4:\"date\";i:5;s:0:\"\";i:6;s:0:\"\";i:7;s:0:\"\";i:8;s:0:\"\";i:9;s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (97,3,'closedpostboxes_post','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (98,3,'metaboxhidden_post','a:17:{i:0;s:16:\"tagsdiv-post_tag\";i:1;s:7:\"acf_215\";i:2;s:7:\"acf_248\";i:3;s:7:\"postpsp\";i:4;s:11:\"postexcerpt\";i:5;s:13:\"trackbacksdiv\";i:6;s:10:\"postcustom\";i:7;s:16:\"commentstatusdiv\";i:8;s:7:\"slugdiv\";i:9;s:7:\"acf_260\";i:10;s:8:\"acf_1366\";i:11;s:8:\"acf_1555\";i:12;s:6:\"acf_27\";i:13;s:8:\"acf_1385\";i:14;s:6:\"acf_23\";i:15;s:8:\"acf_1386\";i:16;s:7:\"acf_157\";}');
INSERT INTO `wp_usermeta` VALUES (99,3,'closedpostboxes_project','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (100,3,'metaboxhidden_project','a:13:{i:0;s:7:\"acf_215\";i:1;s:7:\"acf_248\";i:2;s:7:\"postpsp\";i:3;s:11:\"postexcerpt\";i:4;s:10:\"postcustom\";i:5;s:7:\"slugdiv\";i:6;s:7:\"acf_260\";i:7;s:8:\"acf_1366\";i:8;s:6:\"acf_27\";i:9;s:8:\"acf_1385\";i:10;s:6:\"acf_23\";i:11;s:8:\"acf_1386\";i:12;s:7:\"acf_157\";}');
INSERT INTO `wp_usermeta` VALUES (101,2,'closedpostboxes_testimonial','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (102,2,'metaboxhidden_testimonial','a:11:{i:0;s:7:\"acf_215\";i:1;s:10:\"postcustom\";i:2;s:7:\"slugdiv\";i:3;s:7:\"acf_260\";i:4;s:8:\"acf_1366\";i:5;s:8:\"acf_1555\";i:6;s:6:\"acf_27\";i:7;s:8:\"acf_1385\";i:8;s:6:\"acf_23\";i:9;s:8:\"acf_1386\";i:10;s:7:\"acf_157\";}');
INSERT INTO `wp_usermeta` VALUES (103,2,'wp_user-settings','editor=tinymce&hidetb=1&align=center&imgsize=thumbnail&libraryContent=browse&mfold=o&ed_size=625');
INSERT INTO `wp_usermeta` VALUES (104,2,'wp_user-settings-time','1405411838');
INSERT INTO `wp_usermeta` VALUES (107,1,'wp_tablepress_user_options','{\"user_options_db_version\":14,\"admin_menu_parent_page\":\"middle\",\"plugin_language\":\"auto\",\"message_first_visit\":true}');
INSERT INTO `wp_usermeta` VALUES (105,1,'meta-box-order_project','a:3:{s:4:\"side\";s:34:\"submitdiv,ptypediv,acf_248,acf_215\";s:6:\"normal\";s:115:\"postpsp,acf_1555,wpseo_meta,acf_260,acf_1366,acf_1385,acf_27,acf_23,acf_1386,acf_157,postexcerpt,postcustom,slugdiv\";s:8:\"advanced\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (106,1,'screen_layout_project','2');
INSERT INTO `wp_usermeta` VALUES (108,1,'managetablepress_listcolumnshidden','a:1:{i:0;s:22:\"table_last_modified_by\";}');
INSERT INTO `wp_usermeta` VALUES (109,1,'edit_page_per_page','50');
INSERT INTO `wp_usermeta` VALUES (110,1,'closedpostboxes_post','a:0:{}');
INSERT INTO `wp_usermeta` VALUES (111,1,'metaboxhidden_post','a:16:{i:0;s:7:\"acf_248\";i:1;s:7:\"acf_215\";i:2;s:8:\"acf_1555\";i:3;s:7:\"acf_260\";i:4;s:8:\"acf_1366\";i:5;s:8:\"acf_1385\";i:6;s:6:\"acf_27\";i:7;s:6:\"acf_23\";i:8;s:8:\"acf_1386\";i:9;s:7:\"acf_157\";i:10;s:11:\"postexcerpt\";i:11;s:13:\"trackbacksdiv\";i:12;s:10:\"postcustom\";i:13;s:16:\"commentstatusdiv\";i:14;s:7:\"slugdiv\";i:15;s:9:\"authordiv\";}');
INSERT INTO `wp_usermeta` VALUES (112,1,'meta-box-order_post','a:3:{s:4:\"side\";s:54:\"submitdiv,categorydiv,tagsdiv-post_tag,acf_248,acf_215\";s:6:\"normal\";s:182:\"acf_1555,acf_4906,wpseo_meta,acf_260,acf_1366,acf_1385,acf_27,acf_23,acf_1386,acf_157,postexcerpt,trackbacksdiv,postcustom,commentstatusdiv,commentsdiv,slugdiv,authordiv,revisionsdiv\";s:8:\"advanced\";s:0:\"\";}');
INSERT INTO `wp_usermeta` VALUES (113,1,'screen_layout_post','2');
INSERT INTO `wp_usermeta` VALUES (114,1,'wpseo_title','');
INSERT INTO `wp_usermeta` VALUES (115,1,'wpseo_metadesc','');
INSERT INTO `wp_usermeta` VALUES (116,1,'wpseo_metakey','');
INSERT INTO `wp_usermeta` VALUES (117,1,'googleplus','');
INSERT INTO `wp_usermeta` VALUES (118,1,'twitter','');
INSERT INTO `wp_usermeta` VALUES (119,1,'_yoast_wpseo_profile_updated','1400686184');
INSERT INTO `wp_usermeta` VALUES (120,2,'_yoast_wpseo_profile_updated','1400687693');
INSERT INTO `wp_usermeta` VALUES (121,3,'_yoast_wpseo_profile_updated','1375494754');
INSERT INTO `wp_usermeta` VALUES (156,2,'googleplus','');
INSERT INTO `wp_usermeta` VALUES (157,2,'twitter','');
INSERT INTO `wp_usermeta` VALUES (158,2,'facebook','');
INSERT INTO `wp_usermeta` VALUES (153,2,'wpseo_title','');
INSERT INTO `wp_usermeta` VALUES (154,2,'wpseo_metadesc','');
INSERT INTO `wp_usermeta` VALUES (155,2,'wpseo_metakey','');
INSERT INTO `wp_usermeta` VALUES (152,1,'facebook','');
INSERT INTO `wp_usermeta` VALUES (159,5,'first_name','Arun');
INSERT INTO `wp_usermeta` VALUES (160,5,'last_name','Cappi');
INSERT INTO `wp_usermeta` VALUES (161,5,'nickname','arun');
INSERT INTO `wp_usermeta` VALUES (162,5,'description','');
INSERT INTO `wp_usermeta` VALUES (163,5,'rich_editing','true');
INSERT INTO `wp_usermeta` VALUES (164,5,'comment_shortcuts','false');
INSERT INTO `wp_usermeta` VALUES (165,5,'admin_color','fresh');
INSERT INTO `wp_usermeta` VALUES (166,5,'use_ssl','0');
INSERT INTO `wp_usermeta` VALUES (167,5,'show_admin_bar_front','true');
INSERT INTO `wp_usermeta` VALUES (168,5,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}');
INSERT INTO `wp_usermeta` VALUES (169,5,'wp_user_level','10');
INSERT INTO `wp_usermeta` VALUES (170,5,'dismissed_wp_pointers','wp350_media,wp360_revisions,wp360_locks,wp390_widgets');
INSERT INTO `wp_usermeta` VALUES (171,5,'wp_dashboard_quick_press_last_post_id','5690');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
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
