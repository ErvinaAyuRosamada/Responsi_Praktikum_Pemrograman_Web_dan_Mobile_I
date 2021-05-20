/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.19-MariaDB : Database - responsi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`responsi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `responsi`;

/*Table structure for table `detail_bayar` */

DROP TABLE IF EXISTS `detail_bayar`;

CREATE TABLE `detail_bayar` (
  `Id_Detail` int(11) NOT NULL AUTO_INCREMENT,
  `Id_HP` int(11) DEFAULT NULL,
  `Jumlah_Beli` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Detail`),
  KEY `Id_HP` (`Id_HP`),
  CONSTRAINT `detail_bayar_ibfk_1` FOREIGN KEY (`Id_HP`) REFERENCES `handphone` (`Id_HP`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_bayar` */

/*Table structure for table `handphone` */

DROP TABLE IF EXISTS `handphone`;

CREATE TABLE `handphone` (
  `Id_HP` int(11) NOT NULL AUTO_INCREMENT,
  `Type_HP` int(11) DEFAULT NULL,
  `Warna` varchar(30) DEFAULT NULL,
  `Stok` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_HP`),
  KEY `Type_HP` (`Type_HP`),
  CONSTRAINT `handphone_ibfk_1` FOREIGN KEY (`Type_HP`) REFERENCES `type_` (`Type_HP`)
) ENGINE=InnoDB AUTO_INCREMENT=329 DEFAULT CHARSET=utf8mb4;

/*Data for the table `handphone` */

insert  into `handphone`(`Id_HP`,`Type_HP`,`Warna`,`Stok`) values 
(24,1,'hitam',25),
(25,1,'putih',30),
(26,1,'biru',30),
(27,1,'merah',20),
(28,2,'hitam',25),
(29,2,'putih',35),
(30,2,'biru',25),
(31,2,'merah',35),
(32,3,'hitam',45),
(33,3,'putih',45),
(34,3,'biru',45),
(35,3,'merah',45),
(36,4,'hitam',20),
(37,4,'putih',20),
(38,4,'biru',20),
(39,4,'merah',20),
(40,5,'hitam',22),
(41,5,'putih',22),
(42,5,'biru',11),
(43,5,'merah',33),
(44,6,'hitam',44),
(45,6,'putih',23),
(46,6,'biru',21),
(47,6,'merah',34),
(48,7,'hitam',46),
(49,7,'putih',23),
(50,7,'biru',22),
(51,7,'merah',20),
(52,8,'hitam',33),
(53,8,'putih',34),
(54,8,'biru',54),
(55,8,'merah',22),
(56,9,'hitam',32),
(57,9,'putih',21),
(58,9,'biru',31),
(59,9,'merah',32),
(60,10,'hitam',11),
(61,10,'putih',12),
(62,10,'biru',43),
(63,10,'merah',23),
(64,11,'hitam',34),
(65,11,'putih',43),
(66,11,'biru',55),
(67,11,'merah',43),
(68,12,'hitam',35),
(69,12,'putih',25),
(70,12,'biru',15),
(71,12,'merah',17),
(72,13,'hitam',34),
(73,13,'putih',34),
(74,13,'biru',34),
(75,13,'merah',34),
(76,14,'hitam',32),
(77,14,'putih',34),
(78,14,'biru',56),
(79,14,'merah',52),
(80,15,'hitam',12),
(81,15,'putih',31),
(82,15,'biru',21),
(83,15,'merah',23),
(84,16,'hitam',23),
(85,16,'putih',44),
(86,16,'biru',32),
(87,16,'merah',11),
(88,17,'hitam',21),
(89,17,'putih',23),
(90,17,'biru',11),
(91,17,'merah',21),
(92,18,'hitam',43),
(93,18,'putih',24),
(94,18,'biru',35),
(95,18,'merah',44),
(96,19,'hitam',32),
(97,19,'putih',23),
(98,19,'biru',34),
(99,19,'merah',32),
(100,20,'hitam',33),
(101,20,'putih',25),
(102,20,'biru',24),
(103,20,'merah',16),
(104,21,'hitam',37),
(105,21,'putih',30),
(106,21,'biru',30),
(107,21,'merah',20),
(108,22,'hitam',10),
(109,22,'putih',45),
(110,22,'biru',32),
(111,22,'merah',12),
(112,23,'hitam',41),
(113,23,'putih',31),
(114,23,'biru',2),
(115,23,'merah',12),
(116,24,'hitam',44),
(117,24,'putih',32),
(118,24,'biru',56),
(119,24,'merah',43),
(120,25,'hitam',54),
(121,25,'putih',23),
(122,25,'biru',23),
(123,25,'merah',23),
(124,26,'hitam',60),
(125,26,'putih',56),
(126,26,'biru',45),
(127,26,'merah',42),
(128,27,'hitam',34),
(129,27,'putih',32),
(130,27,'biru',44),
(131,27,'merah',33),
(132,28,'hitam',65),
(133,28,'putih',45),
(134,28,'biru',32),
(135,28,'merah',12),
(136,29,'hitam',12),
(137,29,'putih',31),
(138,29,'biru',31),
(139,29,'merah',32),
(140,30,'hitam',25),
(141,30,'putih',23),
(142,30,'biru',54),
(143,30,'merah',76),
(144,31,'hitam',12),
(145,31,'putih',34),
(146,31,'biru',24),
(147,31,'merah',24),
(148,32,'hitam',42),
(149,32,'putih',74),
(150,32,'buru',22),
(151,32,'merah',44),
(152,33,'hitam',20),
(153,33,'putih',30),
(154,33,'biru',15),
(155,33,'merah',20),
(156,34,'hitam',20),
(157,34,'putih',20),
(158,34,'biru',20),
(159,34,'merah',20),
(160,35,'hitam',25),
(161,35,'putih',25),
(162,35,'biru',25),
(163,35,'merah',25),
(164,36,'hitam',30),
(165,36,'putih',25),
(166,36,'biru',25),
(167,36,'merah',30),
(168,37,'hitam',43),
(169,37,'putih',42),
(170,37,'biru',23),
(171,37,'merah',23),
(172,38,'hitam',23),
(173,38,'putih',23),
(174,38,'biru',23),
(175,38,'merah',23),
(176,39,'hitam',3),
(177,39,'putih',3),
(178,39,'biru',34),
(179,39,'merah',34),
(180,40,'hitam',34),
(181,40,'putih',3),
(182,40,'biru',3),
(183,40,'merah',2),
(184,41,'hitam',32),
(185,41,'putih',32),
(186,41,'biru',32),
(187,41,'merah',12),
(188,42,'hitam',90),
(189,42,'putih',80),
(190,42,'biru',50),
(191,42,'merah',40),
(192,43,'hitam',30),
(193,43,'putih',40),
(194,43,'biru',20),
(195,43,'merah',40),
(196,44,'hitam',30),
(197,44,'putih',50),
(198,44,'biru',60),
(199,44,'merah',45),
(200,45,'hitam',65),
(201,45,'putih',35),
(202,45,'biru',34),
(203,45,'merah',34),
(204,46,'hitam',32),
(205,46,'putih',12),
(206,46,'biru',21),
(207,46,'merah',12),
(208,47,'hitam',21),
(209,47,'putih',45),
(210,47,'biru',45),
(211,47,'merah',45),
(212,48,'hitam',35),
(213,48,'putih',35),
(214,48,'biru',35),
(215,48,'merah',6),
(216,49,'hitam',70),
(217,49,'putih',70),
(218,49,'biru',50),
(219,49,'merah',45),
(220,50,'hitam',45),
(221,50,'putih',35),
(222,50,'biru',65),
(223,50,'merah',45),
(224,51,'hitam',45),
(225,51,'putih',45),
(226,51,'biru',45),
(227,51,'merah',32),
(228,52,'hitam',32),
(229,52,'putih',14),
(230,52,'biru',24),
(231,52,'merah',43),
(232,53,'hitam',45),
(233,53,'putih',45),
(234,53,'biru',45),
(235,53,'merah',43),
(236,54,'hitam',42),
(237,54,'putih',46),
(238,54,'biru',64),
(239,54,'merah',31),
(240,55,'hitam',21),
(241,55,'putih',42),
(242,55,'biru',12),
(243,55,'merah',15),
(244,56,'hitam',34),
(245,56,'putih',34),
(246,56,'biru',33),
(247,56,'merah',23),
(248,57,'hitam',23),
(249,57,'putih',34),
(250,57,'biru',43),
(251,57,'merah',76),
(252,58,'hitam',59),
(253,58,'putih',70),
(254,58,'biru',67),
(255,58,'merah',66),
(256,59,'hitam',76),
(257,59,'putih',56),
(258,59,'biru',54),
(259,59,'merah',56),
(260,60,'hitam',34),
(261,60,'putih',32),
(262,60,'biru',14),
(263,60,'merah',32);

/*Table structure for table `header_bayar` */

DROP TABLE IF EXISTS `header_bayar`;

CREATE TABLE `header_bayar` (
  `No_Nota` int(11) NOT NULL AUTO_INCREMENT,
  `Tanggal_Waktu` datetime DEFAULT NULL,
  `Id_Detail` int(11) DEFAULT NULL,
  `Total_Bayar` int(11) DEFAULT NULL,
  `Bayar` int(11) DEFAULT NULL,
  `Sisa_Bayar` int(11) DEFAULT NULL,
  PRIMARY KEY (`No_Nota`),
  KEY `Id_Detail` (`Id_Detail`),
  CONSTRAINT `header_bayar_ibfk_1` FOREIGN KEY (`Id_Detail`) REFERENCES `detail_bayar` (`Id_Detail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `header_bayar` */

/*Table structure for table `merk` */

DROP TABLE IF EXISTS `merk`;

CREATE TABLE `merk` (
  `Id_Merk` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Merk` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id_Merk`)
) ENGINE=InnoDB AUTO_INCREMENT=146 DEFAULT CHARSET=utf8mb4;

/*Data for the table `merk` */

insert  into `merk`(`Id_Merk`,`Nama_Merk`) values 
(117,'Advan'),
(118,'Sony'),
(119,'Vivo'),
(120,'Oppo'),
(121,'Samsung'),
(122,'Nokia'),
(123,'Evercoss'),
(124,'Infinix'),
(125,'Realmi'),
(126,'Readmi'),
(127,'Xiomi'),
(128,'Mito'),
(129,'Cross'),
(130,'Lenovo'),
(144,'Finia');

/*Table structure for table `type_` */

DROP TABLE IF EXISTS `type_`;

CREATE TABLE `type_` (
  `Type_HP` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Merk` int(11) DEFAULT NULL,
  `Ukuran` char(30) DEFAULT NULL,
  `Harga` int(11) DEFAULT NULL,
  PRIMARY KEY (`Type_HP`),
  KEY `id_merk` (`Id_Merk`),
  CONSTRAINT `type__ibfk_1` FOREIGN KEY (`Id_Merk`) REFERENCES `merk` (`Id_Merk`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

/*Data for the table `type_` */

insert  into `type_`(`Type_HP`,`Id_Merk`,`Ukuran`,`Harga`) values 
(1,117,'240*320',4999009),
(2,117,'320*480',4750000),
(3,117,'480*854',5200000),
(4,117,'640*960',15000000),
(5,117,'720*1280',12900000),
(6,118,'480*854',3500000),
(7,118,'1920*1080',11999000),
(8,118,'720*1280',7600000),
(9,118,'240*320',3900000),
(10,118,'720*1280',9695000),
(11,119,'320*480',4999000),
(12,119,'1920*2160',12000000),
(13,119,'480*854',4600000),
(14,119,NULL,NULL),
(15,119,'240*320',NULL),
(16,120,NULL,NULL),
(17,120,NULL,NULL),
(18,120,'240*320',NULL),
(19,120,NULL,NULL),
(20,120,NULL,NULL),
(21,121,'240*320',NULL),
(22,121,NULL,NULL),
(23,121,NULL,NULL),
(24,121,NULL,NULL),
(25,121,NULL,NULL),
(26,122,NULL,NULL),
(27,122,NULL,NULL),
(28,122,'240*320',NULL),
(29,122,NULL,NULL),
(30,122,NULL,NULL),
(31,123,NULL,NULL),
(32,123,NULL,NULL),
(33,123,NULL,NULL),
(34,123,NULL,NULL),
(35,123,'240*320',NULL),
(36,124,NULL,NULL),
(37,124,NULL,NULL),
(38,124,NULL,NULL),
(39,124,NULL,NULL),
(40,124,NULL,NULL),
(41,125,NULL,NULL),
(42,125,NULL,NULL),
(43,125,'240*320',NULL),
(44,125,NULL,NULL),
(45,125,NULL,NULL),
(46,126,NULL,NULL),
(47,126,NULL,NULL),
(48,126,NULL,NULL),
(49,126,NULL,NULL),
(50,126,NULL,NULL),
(51,127,NULL,NULL),
(52,127,NULL,NULL),
(53,127,NULL,NULL),
(54,127,NULL,NULL),
(55,127,NULL,NULL),
(56,128,NULL,NULL),
(57,128,NULL,NULL),
(58,128,NULL,NULL),
(59,128,NULL,NULL),
(60,128,'240*320',NULL),
(80,117,'200*300',4500000);

/* Trigger structure for table `handphone` */

DELIMITER $$

/*!50003 DROP TRIGGER*//*!50032 IF EXISTS */ /*!50003 `Modul4` */$$

/*!50003 CREATE */ /*!50017 DEFINER = 'root'@'localhost' */ /*!50003 TRIGGER `Modul4` AFTER DELETE ON `handphone` FOR EACH ROW BEGIN
		delete from handphone where Id_HP=old.Id_HP;
    END */$$


DELIMITER ;

/* Function  structure for function  `Modul1` */

/*!50003 DROP FUNCTION IF EXISTS `Modul1` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `Modul1`(id int) RETURNS int(11)
BEGIN
		declare type_HP1 int;
		select type_HP from handphone where id_HP=id into type_HP1;
		return type_HP1;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Delete_HP` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Delete_HP` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Delete_HP`()
BEGIN
		DELETE FROM handphone WHERE id_HP=id_;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Delete_Merk` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Delete_Merk` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Delete_Merk`(id int)
BEGIN
		DELETE FROM merk WHERE id_merk=id;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Delete_Type` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Delete_Type` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Delete_Type`(typ int)
BEGIN
		DELETE FROM type_ WHERE Type_HP=typ;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Insert_HP` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Insert_HP` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Insert_HP`()
BEGIN
		INSERT INTO handphone VALUES(Id_HP, Type_HP, Warna, Stok);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Insert_Merk` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Insert_Merk` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Insert_Merk`()
BEGIN
		INSERT INTO Merk VALUES(id_merk, nama_merk);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Insert_Type` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Insert_Type` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Insert_Type`()
BEGIN
		INSERT INTO Type_ VALUES(Type_HP, Id_Merk, Ukuran, Harga);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Update_HP` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Update_HP` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Update_HP`(id_ int, typ int, warna varchar(30), stok int)
BEGIN
		UPDATE handphone SET Id_HP=id_, Type_HP=typ, Warna=warna, Stok=stok;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Update_Merk` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Update_Merk` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Update_Merk`(id int, nama varchar(30))
BEGIN
		UPDATE merk SET id_merk=id, nama_merk=nama;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul1_Update_Type` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul1_Update_Type` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul1_Update_Type`(typ int, id int, ukuran char, stok int)
BEGIN
		UPDATE type_ SET Type_HP=typ, Id_Merk=id, Ukuran=ukuran, Harga=harga;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul2_Count_Harga_Tinggi` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul2_Count_Harga_Tinggi` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul2_Count_Harga_Tinggi`()
BEGIN
		SELECT Nama_Merk AS 'Merk Handphone', Harga AS 'harga'
		FROM type_
		JOIN Merk ON type_.Id_Merk= Merk.Id_Merk
		WHERE harga=(SELECT MAX(harga) FROM type_);
	END */$$
DELIMITER ;

/* Procedure structure for procedure `Modul2_Count_Merk` */

/*!50003 DROP PROCEDURE IF EXISTS  `Modul2_Count_Merk` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `Modul2_Count_Merk`(id int)
BEGIN
		select count (type_HP) from type_;
	END */$$
DELIMITER ;

/*Table structure for table `modul3_daftar_hp` */

DROP TABLE IF EXISTS `modul3_daftar_hp`;

/*!50001 DROP VIEW IF EXISTS `modul3_daftar_hp` */;
/*!50001 DROP TABLE IF EXISTS `modul3_daftar_hp` */;

/*!50001 CREATE TABLE  `modul3_daftar_hp`(
 `nama` varchar(30) ,
 `ukuran` char(30) 
)*/;

/*Table structure for table `modul3_daftar_type2` */

DROP TABLE IF EXISTS `modul3_daftar_type2`;

/*!50001 DROP VIEW IF EXISTS `modul3_daftar_type2` */;
/*!50001 DROP TABLE IF EXISTS `modul3_daftar_type2` */;

/*!50001 CREATE TABLE  `modul3_daftar_type2`(
 `Type_HP` int(11) ,
 `Ukuran` char(30) ,
 `Harga` int(11) ,
 `Warna` varchar(30) ,
 `Stok` int(11) 
)*/;

/*View structure for view modul3_daftar_hp */

/*!50001 DROP TABLE IF EXISTS `modul3_daftar_hp` */;
/*!50001 DROP VIEW IF EXISTS `modul3_daftar_hp` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `modul3_daftar_hp` AS (select `merk`.`Nama_Merk` AS `nama`,`type_`.`Ukuran` AS `ukuran` from (`merk` join `type_` on(`merk`.`Id_Merk` = `type_`.`Id_Merk`)) group by `merk`.`Nama_Merk`) */;

/*View structure for view modul3_daftar_type2 */

/*!50001 DROP TABLE IF EXISTS `modul3_daftar_type2` */;
/*!50001 DROP VIEW IF EXISTS `modul3_daftar_type2` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `modul3_daftar_type2` AS (select `type_`.`Type_HP` AS `Type_HP`,`type_`.`Ukuran` AS `Ukuran`,`type_`.`Harga` AS `Harga`,`handphone`.`Warna` AS `Warna`,`handphone`.`Stok` AS `Stok` from (`type_` join `handphone` on(`type_`.`Type_HP` = `handphone`.`Type_HP`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
