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
-- Dumping data for table `apps_pages`
--

LOCK TABLES `apps_pages` WRITE;
/*!40000 ALTER TABLE `apps_pages` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `apps_pages` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `blocs`
--

LOCK TABLES `blocs` WRITE;
/*!40000 ALTER TABLE `blocs` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `blocs` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `blocs_binary`
--

LOCK TABLES `blocs_binary` WRITE;
/*!40000 ALTER TABLE `blocs_binary` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `blocs_binary` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `blocs_contents`
--

LOCK TABLES `blocs_contents` WRITE;
/*!40000 ALTER TABLE `blocs_contents` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `blocs_contents` VALUES (1,1,'My fave podcast','					<ul>\n						<lh>~Programming~</lh>\n						<li><a href=\'http://HackerPublicRadio.Org/\'>HackerPublicRadio</a></li>\n						<li><a href=\'http://TheCommandLine.Net/\'>The Command Line Podcast</a></li>\n						<li><a href=\'http://SE-Radio.Net/\'>Software Enginering Radio</a></li>\n					</ul><br/><ul>\n						<lh><em>~Social Media~</em></lh>\n						<li><a href=\'http://OpenMediaReview.Com/\'>http://OpenMediaReview.Com/</a></li>\n					</ul><br/><ul>\n						<lh><em>*NSFW*</em></lh>\n						<li><a href=\'http://LinuxCranks.Info/\'>Linux Cranks</a></li>\n					</ul>','column',NULL),(2,1,'Where I&#039;m @ online','					<ul>\n						<lh>~My Art Works~</lh>\n						<li><a href=\'http://github.com/uberchicgeekchick/\'><img src=\'./graphics/icons/art/github.png\' alt=\'githubt&#039;s logo: linking to the git repos for my open source projects.\' title=\'My open source projects &mdash; hosted on github.\' class=\'favicon_link\'/></a>\n						<a href=\'http://uberchicgeekchick.deviantart.com/\'><img src=\'./graphics/icons/art/deviantart.png\' alt=\'deviantArt&#039;s logo: linking to my graphic design portfolio there.\' title=\'My graphic design portfolio over at deviantArt.\' class=\'favicon_link\'/></a>\n						<a href=\'http://hackerpublicradio.org/correspondents.php?hostid=95\'><img src=\'./graphics/icons/art/hpr.png\' alt=\'HackerPublicRadio.Org&#039;s logo linking to audio contributions.\' title=\'My audio contributions to HackerPublicRadio.Org.\' class=\'favicon_link\'/></a>\n						<a href=\'http://www.archive.org/search.php?query=creator%3A%22Kaity%20G.%20B.%22&sort=-publicdate\'><img src=\'./graphics/icons/art/archive.org.png\' alt=\'The Internet Archive&#039;s logo linking to my graphic design portfolio there.\' title=\'My multimedia uploads to the Internet Archive.\' class=\'favicon_link\'/></a>\n						<a href=\'http://profile.imageshack.us/user/sparklingdreams/\'><img src=\'./graphics/icons/art/imageshack.png\' alt=\'ImageShack&#039;s logo: linking to my graphic design portfolio &amp;photos there.\' title=\'My graphic design portfolio &amp;photos over at ImageShack.\' class=\'favicon_link\'/></a>\n						<a href=\'http://www.flickr.com/photos/uberchicgeekchick\'><img src=\'./graphics/icons/art/flickr.png\' alt=\'Flickr&#039;s logo: linking to my photos.\' title=\'My photos on Flickr.\' class=\'favicon_link\'/></a>\n						<a href=\'http://pipes.yahoo.com/uberchicgeekchick\'><img src=\'./graphics/icons/art/yahoopipes.png\' alt=\'Pipes.Yahoo.Com&#039;s logo: linking to my customized RSS &amp; Atom feeds.\' title=\'My RSS &amp; Atom feed hacks on Pipes.Yahoo.Com.\' class=\'favicon_link\'/></a></li>\n					</ul><ul>\n						<lh>~Micro-Blogging~</lh>\n						<li><a href=\'http://twitter.com/uberChick\'><img src=\'./graphics/icons/web2.0/twitter.png\' alt=\'Twitter&#039;s logo: where you can read my programming &amp; over-sharing tweets.\' title=\'Read my programming &amp; over-sharing tweets.\' class=\'favicon_link\'/></a>\n						<a href=\'http://identi.ca/uberchick\'><img src=\'./graphics/icons/web2.0/identi.ca.png\' alt=\'identi.ca&#039;s logo: where you can read my programming &amp; over-sharing micro-blogging.\' title=\'Follow my programming &amp; over-sharing micro-blogging on identi.ca.\' class=\'favicon_link\'/></a>\n						<a href=\'http://friendfeed.com/uberchick\'><img src=\'./graphics/icons/web2.0/friendfeed.png\' alt=\'FriendFeed&#039;s logo: letting you read my many feeds, babblings, blogs, updates, &amp; feeds.\' title=\'Follow my programming &amp; over-sharing tweets.\' class=\'favicon_link\'/></a></li>\n					</ul><ul>\n						<lh>~Open Media~</lh>\n						<li><a href=\'http://www.thesixtyone.com/uberChick/\'><img src=\'./graphics/icons/media/thesixtyone.png\' alt=\'TheSixtyOne.Com&#039;s logo: linking to my creative commons music fangirl profile at my fave creative commons music community.\' title=\'My creative commons music fangirl profile on TheSixtyOne.Com my fave creative commons music community.\' class=\'favicon_link\'/></a>\n						<a href=\'http://www.ted.com/index.php/profiles/view/id/47950\'><img src=\'./graphics/icons/media/ted.com.png\' alt=\'TED.Com&#039;s logo: linking to my profile with my fave presentations.\' title=\'My favorite presentations from the famous TED conference.\' class=\'favicon_link\'/></a>\n						<a href=\'http://www.jamendo.com/en/user/uberChicGeekChick\'><img src=\'./graphics/icons/media/jamendo.png\' alt=\'Jamendo.Com&#039;s logo: linking to my creative commons music fangirl profile.\' title=\'My fave artists, albums, &amp;songs at Jamendo.Com which is another creative commons music community.\' class=\'favicon_link\'/></a></li>\n					</ul><ul>\n						<lh>~Social Networks~</lh>\n						<li><a href=\'http://mugshot.org/person?who=bTJKAMsm3hh43M\'><img src=\'./graphics/icons/web2.0/mugshot.png\' alt=\'MugShot.Org&#039;s logo: linking to my profile on the original social network.\' title=\'My MugShot.Org profile.&nbsp; BTW, MugShot.Org is *the* original social network\' class=\'favicon_link\'></a>\n						<a href=\'http://www.linkedin.com/in/uberchicgeekchick\'><img src=\'./graphics/icons/web2.0/linkedin.png\' alt=\'LinkedIn.Com&#039;s logo: linking to my profile on the professional network.\' title=\'MugShot.Org - The original social network\' class=\'favicon_link\'></a>\n						<a href=\'http://myspace.com/uberchicgeekchick\'><img src=\'./graphics/icons/web2.0/myspace.png\'alt=\'MySpace.Com&#039;s logo: linking to my profile on this social network.\' title=\'My profile on MySpace.Com&#039; social network\' class=\'favicon_link\'/></a>\n						<a href=\'http://brightkite.com/people/uberChick/\'><img src=\'./graphics/icons/web2.0/brightkite.png\' alt=\'BrightKite.Com&#039;s logo: linking to my profile on this social network.\' title=\'My profile on BrightKite.Com&#039; social network.\' class=\'favicon_link\'/></a>\n						<a href=\'http://www.facebook.com/profile.php?id=716379174\'><img src=\'./graphics/icons/web2.0/facebook.png\' alt=\'Facebook.Com&#039;s logo: linking to my profile on this social network.\' title=\'My profile on Facebook.Com&#039; social network.\' class=\'favicon_link\'/></a></li>\n					</ul>\n					others to come...','column',NULL),(3,1,'My Projects','					<ul class=\'my_websites_listing\'>\n						<lh>~Websites~</lh>\n						<li class=\'my_websites\'><a href=\'http://uberChicGeekChick.Com/\'>Expressive Programming</a></li>\n						<li claass=\'my_websites\'><a href=\'http://Dystonia-DREAMS.Org/\'>Dystonia-DREAMS.Org</a></li>\n						<li class=\'my_websites\'><a href=\'http://uberChicks.Net/\'>uberChicks.Net</a> <!--&ndash; <a href=\'javascript:show_info(\"uberChicks_Net\");\' id=\'uberChicks_Net_About_Link\'>[&darr;]</a>--></li>\n					</ul><br/>\n					<ul class=\'my_programming_projects\'>\n						<lh>~Projects~</lh>\n						<li class=\'my_projects\'><a href=\'./?Projects=GTK-PHP-IDE\' title=\'GTK-PHP-IDE is a GTK+/GNOME PHP IDE/Editor\'>Expressive Programming</a></li>\n						<li claass=\'my_projects\'><a href=\'./?Projects=AOPHP\' title=\'AOPHP is an aspect oriented PHP application platform.  While it currently only supports PHP.&nbsp; Support for other languages are planned.\'>AOPHP</a></li>\n						<li class=\'my_projects\'><a href=\'./?Projects=Alacast\' title=\'Alacast is a Linux focused online media manager designed to handle browsing, recording, watching, &amp;listening to online media but using a more accessible and user friendly UI.&nbsp; It is styled after cable, satalite, &amp; DVR.\'>Alacast</a><!--&ndash; <a href=\'javascript:show_info(\"project_alacast\");\'>[&darr;]</a><div id=\'about_project_alacast\'>Alacast is a Linux focused online media manager designed to handle browsing, recording, watching, &amp;listening to online media but using a more accessible and user friendly UI.&nbsp; It is styled after cable, satalite, &amp; DVR.</div>--></li>\n					</ul><br/>\n					<ul class=\'github_repo_listing\'>\n						<lh>~My github repos~</lh>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/alacast/tree\'>alacast</a></li>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/gtk-php-ide/tree\'>gtk-php-ide</a></li>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/speaking-out/tree\'>speaking-out</a></li>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/realfriends/tree\'>realfriends</a></li>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/uberchicks-oss-social-network/tree\'>uberchicks-oss-social-network</a></li>\n						<li class=\'github_repo\'><a href=\'https://www.github.com/uberchicgeekchick/women.opensuse.org/tree\'>women.opensuse.org</a></li>\n					</ul>','column',NULL);
/*!40000 ALTER TABLE `blocs_contents` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `blocs_enclosures`
--

LOCK TABLES `blocs_enclosures` WRITE;
/*!40000 ALTER TABLE `blocs_enclosures` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `blocs_enclosures` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `blocs_themes`
--

LOCK TABLES `blocs_themes` WRITE;
/*!40000 ALTER TABLE `blocs_themes` DISABLE KEYS */;
set autocommit=0;
INSERT INTO `blocs_themes` VALUES (1,'Expressive Programming','xhtml','			<div class=\'bloc\'>\n				<div class=\'bloc_title\'>','				</div>\n				<div class=\'bloc_content\'>','				</div>\n				<div class=\'bloc_extra\'>&nbsp;</div>\n			</div>','yes');
/*!40000 ALTER TABLE `blocs_themes` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
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
-- Dumping data for table `stylesheets`
--

LOCK TABLES `stylesheets` WRITE;
/*!40000 ALTER TABLE `stylesheets` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `stylesheets` ENABLE KEYS */;
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
-- Dumping data for table `users_profiles`
--

LOCK TABLES `users_profiles` WRITE;
/*!40000 ALTER TABLE `users_profiles` DISABLE KEYS */;
set autocommit=0;
/*!40000 ALTER TABLE `users_profiles` ENABLE KEYS */;
UNLOCK TABLES;
commit;

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

-- Dump completed on 2008-11-26 21:26:57
