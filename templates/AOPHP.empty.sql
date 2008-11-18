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
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `apps`
--

LOCK TABLES `apps` WRITE;
/*!40000 ALTER TABLE `apps` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `apps` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `bloc_contents`
--

DROP TABLE IF EXISTS `bloc_contents`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `bloc_contents` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `author` int(10) unsigned NOT NULL,
  `title` varchar(40) NOT NULL,
  `content` mediumtext NOT NULL,
  `type` enum('podcast','blog','wiki','message','thread') NOT NULL default 'podcast',
  `tags` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `bloc_contents`
--

LOCK TABLES `bloc_contents` WRITE;
/*!40000 ALTER TABLE `bloc_contents` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `bloc_contents` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `bloc_embed_sources`
--

DROP TABLE IF EXISTS `bloc_embed_sources`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `bloc_embed_sources` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bloc_id` int(10) unsigned NOT NULL,
  `type` enum('image','audio','video','embed','iframe') NOT NULL default 'image',
  `uri` varchar(255) NOT NULL,
  `blob` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `bloc_embed_sources`
--

LOCK TABLES `bloc_embed_sources` WRITE;
/*!40000 ALTER TABLE `bloc_embed_sources` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `bloc_embed_sources` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `bloc_enclosures`
--

DROP TABLE IF EXISTS `bloc_enclosures`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `bloc_enclosures` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `bloc_id` int(10) unsigned NOT NULL,
  `type` enum('image','audio','video','xml','document') NOT NULL default 'audio',
  `uri` varchar(255) NOT NULL,
  `blob` mediumblob NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `bloc_enclosures`
--

LOCK TABLES `bloc_enclosures` WRITE;
/*!40000 ALTER TABLE `bloc_enclosures` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `bloc_enclosures` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `layers`
--

DROP TABLE IF EXISTS `layers`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `layers` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `namespace` varchar(60) NOT NULL,
  `GUID` varchar(255) NOT NULL,
  `version` float unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `layers`
--

LOCK TABLES `layers` WRITE;
/*!40000 ALTER TABLE `layers` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `layers` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `settings_address`
--

LOCK TABLES `settings_address` WRITE;
/*!40000 ALTER TABLE `settings_address` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `settings_address` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `settings_applications`
--

LOCK TABLES `settings_applications` WRITE;
/*!40000 ALTER TABLE `settings_applications` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `settings_applications` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `user_profiles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `first_name` varchar(90) NOT NULL,
  `middle_name` varchar(90) NOT NULL,
  `last_name` varchar(90) NOT NULL,
  `b-day` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `user_profiles`
--

LOCK TABLES `user_profiles` WRITE;
/*!40000 ALTER TABLE `user_profiles` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `user_profiles` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `users_logins`
--

LOCK TABLES `users_logins` WRITE;
/*!40000 ALTER TABLE `users_logins` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `users_logins` ENABLE KEYS */;
UNLOCK TABLES;
commit;

--
-- Table structure for table `xhtml_layouts`
--

DROP TABLE IF EXISTS `xhtml_layouts`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `xhtml_layouts` (
  `id` int(10) NOT NULL auto_increment,
  `title` varchar(40) NOT NULL,
  `header` mediumtext NOT NULL,
  `body` mediumtext NOT NULL,
  `footer` mediumtext NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `xhtml_layouts`
--

LOCK TABLES `xhtml_layouts` WRITE;
/*!40000 ALTER TABLE `xhtml_layouts` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `xhtml_layouts` ENABLE KEYS */;
UNLOCK TABLES;
commit;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2008-11-18  2:04:28
