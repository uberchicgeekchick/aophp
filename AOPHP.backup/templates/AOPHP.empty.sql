-- MySQL dump 10.11
--
-- Host: localhost    Database: AOPHP
-- ------------------------------------------------------
-- Server version	5.0.67

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
-- Current Database: `AOPHP`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `AOPHP` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `AOPHP`;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `addresses` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `https` enum('off','on') NOT NULL default 'off',
  `subdomain` varchar(255) default NULL,
  `domain` varchar(255) NOT NULL,
  `path` varchar(255) default NULL,
  `query_string` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `apps` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `namespace` varchar(60) NOT NULL,
  `GUID` varchar(255) NOT NULL,
  `version` float unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `apps_pages`
--

DROP TABLE IF EXISTS `apps_pages`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `apps_pages` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `app_id` int(10) unsigned NOT NULL,
  `title` varchar(40) NOT NULL,
  `stylesheets_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `index-app_pages-theme_id` USING BTREE (`stylesheets_id`),
  KEY `index-app_pages-app_id` USING BTREE (`app_id`),
  CONSTRAINT `constraint_app_pages_app_id` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `constraint_app_pages_stylesheet_id` FOREIGN KEY (`stylesheets_id`) REFERENCES `stylesheets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `blocs`
--

DROP TABLE IF EXISTS `blocs`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blocs` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(60) NOT NULL,
  `theme_id` int(11) NOT NULL,
  `contents_id` int(11) NOT NULL,
  `multipart` enum('yes','no') NOT NULL default 'yes',
  PRIMARY KEY  (`id`),
  KEY `index:blocs:theme_id` (`theme_id`),
  KEY `index:blocs:contents_id` (`contents_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `blocs_binary`
--

DROP TABLE IF EXISTS `blocs_binary`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blocs_binary` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `type` enum('image','audio','video','embed') NOT NULL default 'image',
  `uri` varchar(255) NOT NULL,
  `blob` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `blocs_contents`
--

DROP TABLE IF EXISTS `blocs_contents`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blocs_contents` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `author` int(10) unsigned NOT NULL,
  `title` varchar(40) NOT NULL,
  `content` mediumtext NOT NULL,
  `type` enum('column','widget','podcast','blog','wiki','message','thread') NOT NULL default 'podcast',
  `tags` mediumtext,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `blocs_enclosures`
--

DROP TABLE IF EXISTS `blocs_enclosures`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blocs_enclosures` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `contents_id` int(10) unsigned NOT NULL,
  `binary_id` int(10) unsigned NOT NULL,
  `type` enum('image','audio','video','xml','document') NOT NULL default 'audio',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `blocs_themes`
--

DROP TABLE IF EXISTS `blocs_themes`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `blocs_themes` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(40) NOT NULL,
  `format` enum('xhtml','rss') NOT NULL,
  `before_title` mediumtext NOT NULL,
  `between_title_and_content` mediumtext NOT NULL,
  `after_content` mediumtext NOT NULL,
  `default` enum('no','yes') NOT NULL default 'no',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `settings` (
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `deliminator` varchar(4) NOT NULL default '}:{',
  PRIMARY KEY  (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `settings_address`
--

DROP TABLE IF EXISTS `settings_address`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `settings_address` (
  `address_id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `value` mediumtext NOT NULL,
  `deliminator` char(1) character set ucs2 NOT NULL,
  PRIMARY KEY  (`address_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `settings_applications`
--

DROP TABLE IF EXISTS `settings_applications`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `settings_applications` (
  `application_id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(40) NOT NULL,
  `value` mediumtext NOT NULL,
  `deliminator` char(1) character set ucs2 NOT NULL,
  PRIMARY KEY  (`application_id`,`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `stylesheets`
--

DROP TABLE IF EXISTS `stylesheets`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `stylesheets` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title` varchar(40) NOT NULL,
  `stylesheet` mediumtext NOT NULL,
  `type` enum('text/css','x-application-xml/xslt','x-application-xml/xul') NOT NULL default 'text/css',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users_logins`
--

DROP TABLE IF EXISTS `users_logins`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `users_logins` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `address_id` int(10) unsigned NOT NULL,
  `type` enum('local','openID','ldap','iChain') NOT NULL default 'local',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`,`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `users_profiles`
--

DROP TABLE IF EXISTS `users_profiles`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `users_profiles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `first_name` varchar(90) NOT NULL,
  `middle_name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `b-day` date NOT NULL,
  PRIMARY KEY  (`id`),
  CONSTRAINT `constraint_users_id` FOREIGN KEY (`id`) REFERENCES `users_logins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'AOPHP'
--
DELIMITER ;;
DELIMITER ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2008-11-26 21:26:45
