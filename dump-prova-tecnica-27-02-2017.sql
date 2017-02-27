/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.17 : Database - prova_bd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prova_bd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prova_bd`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2015_12_29_144205_create_tb_acesso_modulo_categoria_table',1),('2015_12_29_144205_create_tb_acesso_modulo_table',1),('2015_12_29_144205_create_tb_acesso_table',1),('2015_12_29_144205_create_tb_acesso_tipo_table',1),('2015_12_29_144205_create_tb_filial_table',1),('2015_12_29_144205_create_tb_ibge_cidade_table',1),('2015_12_29_144205_create_tb_ibge_uf_table',1),('2015_12_29_144205_create_tb_login_categoria_table',1),('2015_12_29_144205_create_tb_login_table',1),('2015_12_29_144207_add_foreign_keys_to_tb_acesso_modulo_categoria_table',1),('2015_12_29_144207_add_foreign_keys_to_tb_acesso_modulo_table',1),('2015_12_29_144207_add_foreign_keys_to_tb_acesso_table',1),('2015_12_29_144207_add_foreign_keys_to_tb_ibge_cidade_table',1),('2015_12_29_144207_add_foreign_keys_to_tb_login_table',1),('2016_02_03_144658_create_tb_ponto_turistico',2),('2016_02_03_145306_create_tb_roteiro_turistico_categoria',2),('2016_02_03_145315_create_tb_roteiro_turistico',2),('2016_02_03_150119_create_tb_video',2),('2016_02_03_150131_create_tb_servico',2),('2016_02_03_150145_create_tb_atuacao_parlamentar',2),('2016_02_03_150155_create_tb_noticia',2),('2014_10_12_000000_create_users_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values ('sabrina_rocha77@hotmail.com','79498e1d439b8cf7fd403d82330740ccefd1de46e08fb5c8ba43eada719946f8','2016-05-30 12:32:45');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Leticia','leticiascalco.info@gmail.com','$2y$10$AjOZST1Iw/tf4VZq5nv8iuLYbbVfsO6cjRze..wTZxIU.0XcOYiDu','lDVaHbLUQvaz814X1oPSCRSFC5IY0g8qPDExpnazVBzVG5ykt2xaU2G373Bv','2017-02-26 03:46:11','2017-02-26 03:46:30');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
