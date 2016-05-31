﻿# Host: localhost  (Version: 5.5.47)
# Date: 2016-05-31 17:18:57
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "zx_users"
#

DROP TABLE IF EXISTS `zx_users`;
CREATE TABLE `zx_users` (
  `uid` mediumint(9) NOT NULL AUTO_INCREMENT,
  `fatherid` mediumint(9) DEFAULT NULL,
  `sysname` varchar(255) DEFAULT NULL,
  `isleftchild` tinyint(3) DEFAULT NULL,
  `isrightchild` tinyint(3) DEFAULT NULL,
  `leftchildid` mediumint(9) DEFAULT NULL,
  `rightchildid` mediumint(9) DEFAULT NULL,
  `tjparentid` mediumint(9) DEFAULT NULL,
  `realname` varchar(255) DEFAULT NULL,
  `member1000level` double DEFAULT NULL,
  `member_nowlevel` double DEFAULT NULL,
  `rigistedatetime` varchar(255) DEFAULT NULL,
  `logindatetime` varchar(255) DEFAULT NULL,
  `n_chashu` double DEFAULT NULL,
  `y1y` smallint(6) DEFAULT NULL,
  `x0x` smallint(6) DEFAULT NULL,
  `x0x1` mediumint(9) DEFAULT NULL,
  `x1x1` float DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8;

#
# Data for table "zx_users"
#

/*!40000 ALTER TABLE `zx_users` DISABLE KEYS */;
INSERT INTO `zx_users` VALUES (1,-1,'CRA0',0,0,2,3,NULL,NULL,90000,99000,NULL,NULL,2,1,100,400,100),(2,1,'AB1',1,NULL,4,5,NULL,NULL,1000,3000,NULL,NULL,2,2,-100,340,NULL),(3,1,'AB2',NULL,1,6,7,NULL,NULL,1000,3000,NULL,NULL,2,2,100,460,NULL),(4,2,'a1',1,NULL,8,9,1,NULL,1000,3000,NULL,NULL,2,3,-150,270,NULL),(5,2,'b1',NULL,1,10,11,1,NULL,1000,3000,NULL,NULL,2,3,-50,330,NULL),(6,3,'c1',1,NULL,12,13,3,NULL,1000,3000,NULL,NULL,2,3,50,470,NULL),(7,3,'d1',NULL,1,14,15,3,NULL,1000,3000,NULL,NULL,2,3,150,530,NULL),(8,4,'a2a1',1,NULL,16,17,2,NULL,1000,3000,NULL,NULL,2,4,-175,130,NULL),(9,4,'a2a2',NULL,1,18,19,2,NULL,1000,3000,NULL,NULL,2,4,-125,170,NULL),(10,5,'b2b1',1,NULL,20,21,NULL,NULL,1000,3000,NULL,NULL,2,4,-75,230,NULL),(11,5,'b2b2',NULL,1,22,23,NULL,NULL,1000,3000,NULL,NULL,2,4,-25,270,NULL),(12,6,'c2c1',1,NULL,24,25,NULL,NULL,1000,3000,NULL,NULL,2,4,25,330,NULL),(13,6,'c2c2',NULL,1,26,27,NULL,NULL,1000,3000,NULL,NULL,2,4,75,370,NULL),(14,7,'d2d1',1,NULL,28,29,NULL,NULL,1000,3000,NULL,NULL,2,4,125,430,NULL),(15,7,'d2d2',NULL,1,30,31,NULL,NULL,1000,3000,NULL,NULL,2,4,175,470,NULL),(16,8,'a3a1',1,NULL,33,34,NULL,NULL,1000,3000,NULL,NULL,2,5,-185,102,NULL),(17,8,'a3a2',NULL,1,35,36,NULL,NULL,1000,3000,NULL,NULL,2,5,-165,132,NULL),(18,9,'a3b1',1,NULL,37,38,NULL,NULL,1000,3000,NULL,NULL,2,5,-135,168,NULL),(19,9,'a3b2',NULL,1,39,40,NULL,NULL,1000,3000,NULL,NULL,2,5,-115,198,NULL),(20,10,'b3b1',1,NULL,41,42,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,202,NULL),(21,10,'b3b2',NULL,1,43,44,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,232,NULL),(22,11,'b3c1',1,NULL,45,46,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,268,NULL),(23,11,'b3c2',NULL,1,47,48,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,298,NULL),(24,12,'c3c1',1,NULL,49,50,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,302,NULL),(25,12,'c3c2',NULL,1,51,52,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,332,NULL),(26,13,'c3d1',1,NULL,53,54,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,368,NULL),(27,13,'c3d2',NULL,1,55,56,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,398,NULL),(28,14,'d3d1',1,NULL,57,58,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,402,NULL),(29,14,'d3d2',NULL,1,59,60,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,432,NULL),(30,15,'d3e1',1,NULL,61,62,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,468,NULL),(31,15,'d3e2',NULL,1,63,64,NULL,NULL,1000,3000,NULL,NULL,2,5,NULL,498,NULL),(32,NULL,NULL,NULL,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,NULL,NULL,NULL,NULL),(33,16,'a4a1',1,NULL,65,66,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,-20,NULL),(34,16,'a4a2',NULL,1,67,68,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,4,NULL),(35,17,'a4b1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,30,NULL),(36,17,'a4b2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,54,NULL),(37,18,'a4c1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,46,NULL),(38,18,'a4c2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,70,NULL),(39,19,'a4d1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,96,NULL),(40,19,'a4d2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,120,NULL),(41,20,'b4b1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,80,NULL),(42,20,'b4b2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,104,NULL),(43,21,'b4c1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,130,NULL),(44,21,'b4c2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,154,NULL),(45,22,'b4d1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,146,NULL),(46,22,'b4d2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,170,NULL),(47,23,'b4e1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,196,NULL),(48,23,'b4e2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,220,NULL),(49,24,'c4c1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,180,NULL),(50,24,'c4c2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,204,NULL),(51,25,'c4d1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,230,NULL),(52,25,'c4d2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,254,NULL),(53,26,'c4e1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,246,NULL),(54,26,'c4e2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,270,NULL),(55,27,'c4f1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,296,NULL),(56,27,'c4f2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,320,NULL),(57,28,'d4d1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,280,NULL),(58,28,'d4d2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,304,NULL),(59,29,'d4e1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,330,NULL),(60,29,'d4e2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,354,NULL),(61,30,'d4f1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,346,NULL),(62,30,'d4f2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,370,NULL),(63,31,'d4g1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,396,NULL),(64,31,'d4g2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,420,NULL),(65,33,'a5a1a1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,-138,NULL),(66,33,'a5a1a2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,-118,NULL),(67,34,'a5a2a1',1,NULL,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,-98,NULL),(68,34,'a5a2aa2',NULL,1,-1,-2,NULL,NULL,1000,3000,NULL,NULL,2,6,NULL,-78,NULL);
/*!40000 ALTER TABLE `zx_users` ENABLE KEYS */;
