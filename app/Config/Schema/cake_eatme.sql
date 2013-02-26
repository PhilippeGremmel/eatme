# ************************************************************
# Sequel Pro SQL dump
# Version 3408
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.25)
# Database: cake_eatme
# Generation Time: 2013-02-26 09:48:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`)
VALUES
	(1,'hetero'),
	(2,'homoM'),
	(3,'homoF'),
	(4,'heteroF');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table messages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `dest_id` int(11) unsigned NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;

INSERT INTO `messages` (`id`, `content`, `user_id`, `dest_id`, `created`)
VALUES
	(1,'salut je trouve cool sur le plan emotionnel\n',1,2,'0000-00-00 00:00:00');

/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pictures
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pictures`;

CREATE TABLE `pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `url` varchar(100) DEFAULT NULL,
  `legend` varchar(100) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pictures` WRITE;
/*!40000 ALTER TABLE `pictures` DISABLE KEYS */;

INSERT INTO `pictures` (`id`, `url`, `legend`, `created`)
VALUES
	(1,'tomate.jpg','je sus une tomate',NULL),
	(2,'carrot.jpg','je suis une carotte',NULL);

/*!40000 ALTER TABLE `pictures` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table questions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `questions`;

CREATE TABLE `questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;

INSERT INTO `questions` (`id`, `content`)
VALUES
	(1,'Comment aimes tu la cuisson de ton steacks ?\n'),
	(2,'comment aimes tu la viande ?');

/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sexs
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sexs`;

CREATE TABLE `sexs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `sexs` WRITE;
/*!40000 ALTER TABLE `sexs` DISABLE KEYS */;

INSERT INTO `sexs` (`id`, `name`)
VALUES
	(1,'man'),
	(2,'woman');

/*!40000 ALTER TABLE `sexs` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(100) DEFAULT NULL,
  `password` char(100) DEFAULT NULL,
  `email` char(100) DEFAULT NULL,
  `picture_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `sexe_id` varchar(10) DEFAULT NULL,
  `group_id` int(11) NOT NULL,
  `bio` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `email`, `picture_id`, `created`, `sexe_id`, `group_id`, `bio`)
VALUES
	(1,'phil','pass','phil@gmail.com',1,NULL,'1',1,'je suis cool et hetero\n'),
	(2,'jessica','pass','jess@gmail.com',2,NULL,'2',1,'je suis mega bonnasse hetero\n'),
	(3,'jeanhyve','pass','jeanhyve@gmail.com',NULL,'2013-02-26 09:01:43',NULL,0,'je suis jeanhyve un mec droit.'),
	(4,'marc-louis','pass','marc@gmail.com',NULL,'2013-02-26 09:14:14',NULL,3,'je suis un monarque batard'),
	(5,'gasp','8970d4551eb1cc7a8a4921088cd064c287c90d36','gasp@ha.com',NULL,'2013-02-26 09:33:12',NULL,3,'oui, biologique');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
