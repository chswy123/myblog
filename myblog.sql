/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.5.27 : Database - myblog
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`myblog` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `myblog`;

/*Table structure for table `love_admin` */

DROP TABLE IF EXISTS `love_admin`;

CREATE TABLE `love_admin` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL COMMENT '用户名',
  `password` varchar(150) NOT NULL COMMENT '密码',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `love_admin` */

insert  into `love_admin`(`id`,`username`,`password`) values (1,'admin','123');

/*Table structure for table `love_blog` */

DROP TABLE IF EXISTS `love_blog`;

CREATE TABLE `love_blog` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '标题',
  `keyword` varchar(100) NOT NULL COMMENT '关键词',
  `content` text COMMENT '内容',
  `tag` varchar(32) NOT NULL COMMENT '标签',
  `date` datetime NOT NULL COMMENT '添加时间',
  `dianzan` int(10) unsigned DEFAULT NULL COMMENT '点赞数',
  `image` varchar(200) NOT NULL COMMENT '图片路径',
  `image_small` varchar(200) NOT NULL COMMENT '缩略图路径',
  `is_show` tinyint(3) unsigned DEFAULT '1' COMMENT '1代表展示，0代表不展示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `love_blog` */

insert  into `love_blog`(`id`,`title`,`keyword`,`content`,`tag`,`date`,`dianzan`,`image`,`image_small`,`is_show`) values (1,'123','123','777','tours','2015-12-22 10:00:33',0,'Blog/2015-12-20/5676a772a8d73.jpg','',1),(2,'test1','tkey','tcontent','tours','2015-12-22 10:04:39',111,'Blog/2015-12-22/56795877d81fd.jpeg','',1),(3,'今天天气不错','天气不错','哎！都结婚了，我啥时候啊，今天天气不错，但是心里不好。','tours','2015-12-22 10:01:02',0,'Blog/2015-12-20/567650a827029.jpg','',1),(4,'aaaaaaaa','aaa','大发发鬼地方噶风格啥地方刚发给啥地方刚again打工干啥大锅饭地发嘎嘎更啥地方刚是打发啥地方刚 打工打工打工大嘎达是个','tours','2015-12-22 10:01:10',12,'Blog/2015-12-20/56765e910dc88.jpg','',0),(5,'123','11111111','1241dgsdfgs ','tours','2015-12-22 09:54:14',1,'Blog/2015-12-22/56795606b2d48.jpg','',1),(6,'sssss','df','df','tours','2015-12-22 10:00:11',0,'Blog/2015-12-22/56795758857fa.jpg','',1),(7,'sdfsd','sdf','sadf','tours','2015-12-22 10:01:42',123,'Blog/2015-12-22/567957c608900.jpg','',1),(8,'sadf','wef','sdf','tours','2015-12-22 10:02:07',123,'Blog/2015-12-22/567957df58819.jpg','',1),(9,'sdgsdfg','gadga','asdfasdf','tours','2015-12-22 10:02:25',44,'Blog/2015-12-22/567957f139817.jpg','',1),(10,'www','sssssss','sdfasdf','12','2016-01-15 11:13:15',12,'Blog/2016-01-15/56990c8b202cd.jpg','',1),(11,'1111','dsfasdf','asdfasdf','212','2016-01-15 11:13:35',222,'Blog/2016-01-15/56990c9fb51b9.jpg','',1);

/*Table structure for table `love_feeling` */

DROP TABLE IF EXISTS `love_feeling`;

CREATE TABLE `love_feeling` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(240) NOT NULL COMMENT '内容',
  `other` varchar(20) NOT NULL COMMENT '其他',
  `date` datetime NOT NULL COMMENT '添加时间',
  `is_show` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `love_feeling` */

insert  into `love_feeling`(`id`,`content`,`other`,`date`,`is_show`) values (1,'123','123','2015-12-22 21:04:56',1),(2,'hahhah ','123','2015-12-22 21:05:23',1),(3,'我病了，很难受啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊','滚滚滚','2015-12-22 21:05:54',1),(4,'123sdfasdf','123123','2016-01-23 00:44:46',1),(5,'asdfasdfasd','asdfsd','2016-01-23 00:44:58',1),(6,'asdfSDFASDF','asdgadga','2016-01-23 00:45:07',1);

/*Table structure for table `love_gallery` */

DROP TABLE IF EXISTS `love_gallery`;

CREATE TABLE `love_gallery` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL COMMENT '图片路径',
  `image_small` varchar(200) NOT NULL COMMENT '缩略图路径',
  `date` datetime NOT NULL COMMENT '上传时间',
  `is_show` tinyint(3) unsigned DEFAULT '1' COMMENT '1代表展示，0代表不展示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `love_gallery` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
