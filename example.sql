# ************************************************************
# Sequel Pro SQL dump
# バージョン 4500
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# ホスト: 127.0.0.1 (MySQL 5.5.42)
# データベース: cats
# 作成時刻: 2016-02-03 06:39:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# テーブルのダンプ breeds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `breeds`;

CREATE TABLE `breeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `attribute` text,
  `created_user_id` int(10) unsigned DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `breeds_created_user_id_foreign` (`created_user_id`),
  KEY `breeds_updated_user_id_foreign` (`updated_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `breeds` WRITE;
/*!40000 ALTER TABLE `breeds` DISABLE KEYS */;

INSERT INTO `breeds` (`id`, `name`, `attribute`, `created_user_id`, `updated_user_id`, `created_at`, `updated_at`)
VALUES
	(1,'Domestic',NULL,1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,'Persian',NULL,2,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,'Siamese',NULL,3,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,'Abyssinian',NULL,4,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,'Akida1',NULL,5,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,'Akida2',NULL,6,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,'Akida3',NULL,7,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,'Akida4',NULL,8,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,'Akida5',NULL,9,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,'Akida6',NULL,10,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(11,'test','test in cathome.tk',NULL,NULL,'2015-06-11 00:20:22','2015-06-11 00:20:22'),
	(12,'test','test attribute',NULL,NULL,'2015-06-26 03:04:28','2015-06-26 03:04:28');

/*!40000 ALTER TABLE `breeds` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ cats
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cats`;

CREATE TABLE `cats` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `sex` enum('male','female') DEFAULT NULL,
  `price` double DEFAULT NULL,
  `attribute` text,
  `breed_id` int(10) unsigned DEFAULT NULL,
  `created_user_id` int(10) unsigned DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `is_public` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'false:private, true:public',
  `is_sell` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'false:unsell, ture:sell',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cats_breed_id_foreign` (`breed_id`),
  KEY `cats_created_user_id_foreign` (`created_user_id`),
  KEY `cats_updated_user_id_foreign` (`updated_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `cats` WRITE;
/*!40000 ALTER TABLE `cats` DISABLE KEYS */;

INSERT INTO `cats` (`id`, `name`, `date_of_birth`, `sex`, `price`, `attribute`, `breed_id`, `created_user_id`, `updated_user_id`, `is_public`, `is_sell`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Domestic1','1991-03-22','male',20000,NULL,1,1,NULL,0,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(2,'Persian1','1992-03-22','female',2000,NULL,2,2,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(3,'Siamese1','1993-03-22','male',200,NULL,3,3,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(4,'Abyssinian1','1994-03-22','female',20,NULL,4,4,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(5,'pet Akida1','1994-03-22','male',2,NULL,5,5,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(6,'pet Akida2','1994-03-22','male',2,NULL,6,5,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(7,'pet Akida3','1994-03-22','male',2,NULL,7,5,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(8,'pet Akida4','1994-03-22','male',2,NULL,8,5,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(9,'pet Akida5','1994-03-22','male',2,NULL,9,11,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(10,'pet Akida6','1994-03-22','male',2,NULL,10,11,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(11,'shu1','1994-03-22','male',2,NULL,10,5,NULL,1,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(12,'shu2','1994-03-22','male',2,'',4,11,NULL,1,0,'0000-00-00 00:00:00','2015-07-03 13:55:11',NULL),
	(13,'shu3','1994-03-22','male',2,'',2,11,NULL,1,0,'0000-00-00 00:00:00','2015-07-01 21:23:52',NULL),
	(102,'1','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-15 21:44:56','2015-06-15 21:44:56',NULL),
	(103,'test-edit1111','0000-00-00','male',0,'',2,11,11,1,0,'2015-06-16 04:45:22','2015-06-16 23:21:20',NULL),
	(104,'png','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 04:49:02','2015-06-16 04:49:02',NULL),
	(105,'test','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 19:18:25','2015-06-16 19:18:25',NULL),
	(106,'123','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 22:39:36','2015-06-16 22:39:36',NULL),
	(107,'test','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 22:42:13','2015-06-16 22:42:13',NULL),
	(108,'22','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 23:35:03','2015-06-16 23:35:03',NULL),
	(109,'222','0000-00-00','male',0,'',2,11,NULL,1,0,'2015-06-16 23:35:18','2015-06-16 23:35:18',NULL),
	(110,'omnibus-cat','2001-01-01','male',1,'2',2,11,NULL,1,0,'2015-06-17 00:48:24','2015-06-17 00:48:24',NULL),
	(111,'creators-match','2007-10-01','male',16000000,'2',10,11,NULL,1,0,'2015-06-17 00:50:42','2015-06-17 00:50:42',NULL),
	(112,'名称未确定12','0000-00-00','male',11,'一二三1',10,11,11,1,0,'2015-06-17 03:28:44','2015-06-26 04:19:37',NULL),
	(113,'sdfa','0000-00-00','male',0,'',4,11,NULL,1,0,'2015-10-27 10:19:42','2015-10-27 10:19:42',NULL),
	(114,'cat','0000-00-00','male',0,'',4,11,NULL,1,0,'2015-10-27 10:19:56','2015-10-27 10:19:56',NULL);

/*!40000 ALTER TABLE `cats` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ cats_breeds
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cats_breeds`;

CREATE TABLE `cats_breeds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `attribute` text,
  `created_user_id` int(10) unsigned DEFAULT NULL,
  `updated_user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cats_breeds_created_user_id_foreign` (`created_user_id`),
  KEY `cats_breeds_updated_user_id_foreign` (`updated_user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `cats_breeds` WRITE;
/*!40000 ALTER TABLE `cats_breeds` DISABLE KEYS */;

INSERT INTO `cats_breeds` (`id`, `name`, `attribute`, `created_user_id`, `updated_user_id`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'Domestic',NULL,1,NULL,'0000-00-00 00:00:00','2015-06-13 02:26:15','2015-06-13 02:26:15'),
	(2,'Persian',NULL,2,NULL,'0000-00-00 00:00:00','2015-07-02 08:27:13','2015-07-02 08:27:13'),
	(3,'Siamese',NULL,3,NULL,'0000-00-00 00:00:00','2015-07-02 08:31:12','2015-07-02 08:31:12'),
	(4,'Abyssinian','1231',4,NULL,'0000-00-00 00:00:00','2015-07-03 14:25:32',NULL),
	(5,'Akida1',NULL,5,NULL,'0000-00-00 00:00:00','2015-07-01 21:39:38','2015-07-01 21:39:38'),
	(6,'Akida2',NULL,6,NULL,'0000-00-00 00:00:00','2015-07-02 08:26:07','2015-07-02 08:26:07'),
	(7,'Akida3','123',7,NULL,'0000-00-00 00:00:00','2015-07-03 02:27:59',NULL),
	(8,'Akida4',NULL,8,NULL,'0000-00-00 00:00:00','2015-07-01 20:51:15','2015-07-01 20:51:15'),
	(9,'Akida5',NULL,9,NULL,'0000-00-00 00:00:00','2015-07-02 13:01:16','2015-07-02 13:01:16'),
	(10,'shu1',NULL,10,NULL,'0000-00-00 00:00:00','2015-07-02 17:17:28','2015-07-02 17:17:28'),
	(11,'shu2',NULL,11,NULL,'0000-00-00 00:00:00','2015-07-02 12:28:14','2015-07-02 12:28:14'),
	(12,'shu3',NULL,11,NULL,'0000-00-00 00:00:00','2015-07-02 09:54:13','2015-07-02 09:54:13'),
	(13,'shu4',NULL,11,NULL,'0000-00-00 00:00:00','2015-06-29 22:57:27','2015-06-29 22:57:27');

/*!40000 ALTER TABLE `cats_breeds` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ file
# ------------------------------------------------------------

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_cd` varchar(10) DEFAULT NULL COMMENT 'file type(use in what)',
  `resource_id` int(10) unsigned DEFAULT NULL COMMENT 'the using place(cat''s id, pet''s id, user''s id...)',
  `save_path` varchar(255) DEFAULT NULL COMMENT 'save path',
  `real_name` varchar(255) DEFAULT NULL COMMENT 'real name',
  `save_name` varchar(255) DEFAULT NULL COMMENT 'save name',
  `type` varchar(255) DEFAULT NULL COMMENT 'file type(img/jpg..)',
  `remark` text COMMENT 'file''s comment',
  `user_id` int(10) unsigned NOT NULL COMMENT 'save user',
  `size` int(10) unsigned NOT NULL COMMENT 'save user',
  `deleted_user_id` int(10) unsigned NOT NULL COMMENT 'delete user id',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `file` WRITE;
/*!40000 ALTER TABLE `file` DISABLE KEYS */;

INSERT INTO `file` (`id`, `file_cd`, `resource_id`, `save_path`, `real_name`, `save_name`, `type`, `remark`, `user_id`, `size`, `deleted_user_id`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,NULL,NULL,NULL,NULL,NULL,NULL,'cat icon',0,0,0,NULL,'2015-06-16 03:48:47','2015-06-16 03:48:47'),
	(2,NULL,NULL,NULL,NULL,NULL,NULL,'cat icon',0,0,0,NULL,'2015-06-16 03:52:29','2015-06-16 03:52:29'),
	(3,'1',NULL,'/uploaded/11','20150615183047.csv',NULL,'text/csv','cat icon',11,2579,0,NULL,'2015-06-16 03:54:03','2015-06-16 03:54:03'),
	(4,'1',NULL,'/uploaded/11','20150615183047.csv',NULL,'text/csv','cat icon',11,2579,0,NULL,'2015-06-16 03:58:37','2015-06-16 03:58:37'),
	(5,'1',NULL,'/uploaded/11',NULL,NULL,'text/csv','cat icon',11,2579,0,NULL,'2015-06-16 04:03:15','2015-06-16 04:03:15'),
	(6,'1',NULL,'/uploaded/11','20150615183047.csv','2015-06-15 19-03-51_11_20150615183047.csv','text/csv','cat icon',11,2579,0,NULL,'2015-06-16 04:03:51','2015-06-16 04:03:51'),
	(7,'1',NULL,'/uploaded/11','cloud.docx','2015-06-15 19-04-35_11_cloud.docx','application/vnd.openxmlformats-officedocument.wordprocessingml.document','cat icon',11,181810,0,NULL,'2015-06-16 04:04:35','2015-06-16 04:04:35'),
	(8,'1',NULL,'/uploaded/11','cloud.docx','2015-06-15 19-38-41_11_cloud.docx','application/vnd.openxmlformats-officedocument.wordprocessingml.document','cat icon',11,181810,0,NULL,'2015-06-16 04:38:41','2015-06-16 04:38:41'),
	(9,'1',109,'/uploaded/11','cloud.docx','2015-06-15 19-39-17_11_cloud.docx','application/vnd.openxmlformats-officedocument.wordprocessingml.document','cat icon',11,181810,0,NULL,'2015-06-16 04:39:17','2015-06-16 04:39:17'),
	(10,'1',NULL,'/uploaded/11','1.gif','2015-06-15 19-45-22_11_1.gif','image/gif','cat icon',11,1762321,0,NULL,'2015-06-16 04:45:22','2015-06-16 04:45:22'),
	(11,'1',NULL,'/uploaded/11','screencapture-console-developers-google-com-project-adroit-booth-93808-apiui-credential-1433321709891.png','2015-06-15 19-49-02_11_screencapture-console-developers-google-com-project-adroit-booth-93808-apiui-credential-1433321709891.png','image/png','cat icon',11,175013,0,NULL,'2015-06-16 04:49:02','2015-06-16 04:49:02'),
	(12,'1',NULL,'/uploaded/11','20150615183047.csv','2015-06-16 10-18-25_11_20150615183047.csv','text/csv','cat icon',11,2579,0,NULL,'2015-06-16 19:18:25','2015-06-16 19:18:25'),
	(13,'1',109,'/uploaded/11','20150615180426.csv','2015-06-16 13-39-36_11_20150615180426.csv','text/csv','cat icon',11,537,0,NULL,'2015-06-16 22:39:36','2015-06-16 22:39:36'),
	(14,'1',NULL,'/uploaded/11','20150615181313.csv','2015-06-16 13-42-13_11_20150615181313.csv','text/csv','cat icon',11,2387,0,NULL,'2015-06-16 22:42:13','2015-06-16 22:42:13'),
	(15,'1',109,'/uploaded/11','22.gif','2015-06-16 14-35-18_11_22.gif','image/gif','cat icon',11,64291,0,NULL,'2015-06-16 23:35:18','2015-06-16 23:35:18'),
	(16,'1',110,'/uploaded/11','omnibusあ.gif','2015-06-16 15-48-24_11_omnibus.gif','image/gif','cat icon',11,494576,0,NULL,'2015-06-17 00:48:24','2015-06-17 00:48:24'),
	(17,'1',111,'/uploaded/11','名称未設定.png','2015-06-16 15-50-42_11_名称未設定.png','image/png','cat icon',11,35207,0,NULL,'2015-06-17 00:50:42','2015-06-17 00:50:42'),
	(18,'1',112,'/uploaded/11','名称未設定.png','2015-06-16 18-28-44_11_?????.png','image/png','cat icon',11,35207,0,NULL,'2015-06-17 03:28:44','2015-06-17 03:28:44'),
	(19,NULL,112,'/uploaded/11','1.jpg','2015-06-25 19-19-37_11_1.jpg','image/jpeg',NULL,11,10756,0,NULL,'2015-06-26 04:19:37','2015-06-26 04:19:37'),
	(20,NULL,13,'/uploaded/11','1.jpg','2015-07-01 12-23-52_11_1.jpg','image/jpeg',NULL,11,10756,0,NULL,'2015-07-01 21:23:52','2015-07-01 21:23:52'),
	(21,'1',12,'/uploaded/11','1.jpg','2015-07-03 13-55-11_11_1.jpg','image/jpeg','cat icon',11,10756,0,NULL,'2015-07-03 13:55:11','2015-07-03 13:55:11'),
	(22,'1',114,'/uploaded/11','1.jpg','2015-10-27 10-19-56_11_1.jpg','image/jpeg','cat icon',11,10756,0,NULL,'2015-10-27 10:19:56','2015-10-27 10:19:56');

/*!40000 ALTER TABLE `file` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2015_05_20_070422_create_breeds_table',1),
	('2015_05_21_053425_create_cats_table',1),
	('2015_05_21_075348_creat_test_table',1),
	('2015_06_09_123750_create_pet_relations_table',1),
	('2015_06_10_185150_create_pet_diary_table',1),
	('2015_06_10_195420_create_file_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# テーブルのダンプ pet_diary
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pet_diary`;

CREATE TABLE `pet_diary` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pet_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL COMMENT 'writed user',
  `is_public` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'pet''s daily life',
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `pet_diary` WRITE;
/*!40000 ALTER TABLE `pet_diary` DISABLE KEYS */;

INSERT INTO `pet_diary` (`id`, `pet_id`, `user_id`, `is_public`, `title`, `content`, `deleted_at`, `created_at`, `updated_at`)
VALUES
	(1,1,1,1,'title1','content1',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(2,2,2,1,'title2','content2',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(3,3,3,1,'title3','content3',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(4,4,4,1,'title4','content4',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(5,5,5,1,'title5','content5',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(6,6,6,1,'title6','content6',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(7,7,7,1,'title7','content7',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(8,8,8,1,'title8','content8',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(9,9,9,0,'title9','content9',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(10,10,10,1,'title10','content10',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(11,11,11,1,'title11','content11',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(12,12,11,0,'title12','content12',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),
	(13,13,11,1,'title13','content13',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `pet_diary` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ pet_relations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pet_relations`;

CREATE TABLE `pet_relations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned DEFAULT NULL,
  `pet_id` int(10) unsigned DEFAULT NULL,
  `pet_type` varchar(1) DEFAULT NULL COMMENT 'the kind of pet, 0:other, 1:cat, 2:dog',
  `pet_type_name` varchar(255) DEFAULT NULL COMMENT 'the name of pet''s kind',
  `begin_at` datetime NOT NULL,
  `end_at` datetime DEFAULT NULL,
  `status` varchar(2) DEFAULT '1' COMMENT 'the status of pet, 0:died, 1:keeping, 2:sold, 3:last',
  `remark` text NOT NULL,
  `is_public` tinyint(1) NOT NULL COMMENT ' false:no public, true:public',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pet_relations_owner_id_foreign` (`owner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `pet_relations` WRITE;
/*!40000 ALTER TABLE `pet_relations` DISABLE KEYS */;

INSERT INTO `pet_relations` (`id`, `owner_id`, `pet_id`, `pet_type`, `pet_type_name`, `begin_at`, `end_at`, `status`, `remark`, `is_public`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,1,'1','cat','2015-01-27 18:31:13','2015-06-01 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(2,2,2,'1','cat','2015-01-27 18:31:13','2015-06-02 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(3,3,3,'1','cat','2015-01-27 18:31:13','2015-06-03 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(4,4,4,'1','cat','2015-01-27 18:31:13','2015-06-04 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(5,5,5,'1','cat','2015-01-27 18:31:13','2015-06-05 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(6,6,6,'1','cat','2015-01-27 18:31:13','2015-06-06 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(7,7,7,'1','cat','2015-01-27 18:31:13','2015-06-07 11:12:03','1','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(8,8,8,'1','cat','2015-01-27 18:31:13','2015-06-08 11:12:03','1','',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(9,9,9,'1','cat','2015-01-27 18:31:13','2015-06-09 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(10,10,10,'1','cat','2015-01-27 18:31:13','2015-06-10 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(11,11,11,'1','cat','2015-01-27 18:31:13','2015-06-10 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(12,11,12,'1','cat','2015-01-27 18:31:13','2015-06-10 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(13,11,13,'1','cat','2015-01-27 18:31:13','2015-06-10 11:12:03','1','',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL);

/*!40000 ALTER TABLE `pet_relations` ENABLE KEYS */;
UNLOCK TABLES;


# テーブルのダンプ test
# ------------------------------------------------------------

DROP TABLE IF EXISTS `test`;

CREATE TABLE `test` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;



# テーブルのダンプ users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(60) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_type` varchar(1) NOT NULL COMMENT 'user account''s kind, 0:common, 1:admin, 2:manage',
  `is_public` tinyint(1) NOT NULL COMMENT 'user account''s kind, false:no public, true:public',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `address`, `user_type`, `is_public`, `remember_token`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,'user1','1@1.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(2,'user2','2@2.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(3,'user3','3@3.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(4,'user4','4@4.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(5,'user5','5@5.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(6,'user6','6@6.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(7,'user7','7@7.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',1,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(8,'user8','8@8.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(9,'user9','9@9.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(10,'user10','10@10.com','$2y$10$c8zh6gVb2JAYLpVsgtLV0OeMVyN6/tuOFKkCfLJLD1YcZAoqN5vzC',NULL,'',0,NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00',NULL),
	(11,'shu','shu@c-m.co.jp','$2y$10$voxt.lntgnf.QdYfIt0mvuTdAa7ves/TPf1IJgriJpjkzR5XvQrpO',NULL,'2',0,'28e6Gxqb8EDKrDDcQS6zZALMi7hfQmwSRQsK94cUP3OZNfKlBoPz0Yh7sN6n','0000-00-00 00:00:00','2015-06-16 22:52:41',NULL);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
