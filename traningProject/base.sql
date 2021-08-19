-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.12-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных phptraning
CREATE DATABASE IF NOT EXISTS `phptraning` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `phptraning`;

-- Дамп структуры для таблица phptraning.phptable
CREATE TABLE IF NOT EXISTS `phptable` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.phptable: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `phptable` DISABLE KEYS */;
INSERT INTO `phptable` (`id`, `first_name`, `last_name`, `username`) VALUES
	(1, 'Mark', 'Otto', '@mdo'),
	(2, 'Jacob	', 'Thornton', '@fat'),
	(3, 'Larry', 'the Bird', '@twitter'),
	(4, 'Larry the Bird', 'Bird', '@twitter2');
/*!40000 ALTER TABLE `phptable` ENABLE KEYS */;

-- Дамп структуры для таблица phptraning.text9
CREATE TABLE IF NOT EXISTS `text9` (
  `post_text` text COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.text9: ~12 rows (приблизительно)
/*!40000 ALTER TABLE `text9` DISABLE KEYS */;
INSERT INTO `text9` (`post_text`) VALUES
	('проверка'),
	('привет'),
	('gggg'),
	('aaaaaaaaaaaaaa'),
	('гет запрос'),
	('123666'),
	('приии'),
	('проверка через пост'),
	('проверка текста'),
	('1234'),
	('123'),
	('154'),
	('1йц23у4к');
/*!40000 ALTER TABLE `text9` ENABLE KEYS */;

-- Дамп структуры для таблица phptraning.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `address` text COLLATE utf8mb4_bin DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `role` varchar(50) COLLATE utf8mb4_bin DEFAULT 'user',
  `competence` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `vk` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `instagram` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `telegram` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.users: ~14 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `avatar`, `first_name`, `last_name`, `position`, `phone`, `email`, `address`, `username`, `password`, `role`, `competence`, `twitter`, `vk`, `instagram`, `telegram`, `status`) VALUES
	(1, 'img/demo/authors/sunny.png', 'Sunny', 'A.', 'Lead Author', '+1 317-456-2501', 'admin@admin.lol', '10 Charist St, Detroit, MI, 48212, USA', 'myorange', '21232f297a57a5a743894a0e4a801fc3', 'admin', '(UI/UX Expert)', '@myplaneticket', NULL, NULL, NULL, 'active'),
	(2, 'img/demo/authors/josh.png', 'Jos', 'K.', 'Partner &amp; Contributor', '+1 317-456-2502', '1@1.lol', '111 Hamtrammac, Detroit, MI, 48314, USA', 'Walapa', '21232f297a57a5a743894a0e4a801fc3', 'user', '(ASP.NET Developer)', '@atlantez', NULL, NULL, NULL, 'disabled'),
	(3, 'img/demo/authors/jovanni.png', 'Jovanni', 'Lo', 'Partner &amp; Contributor', '+1 317-456-2503', '2@2.lol', '89 Smyth Rd, Detroit, MI, 48341, USA', 'lodev09', '21232f297a57a5a743894a0e4a801fc3', 'user', '(PHP Developer)', '@lodev09', NULL, NULL, NULL, 'disabled'),
	(4, 'img/demo/authors/roberto.png', 'Roberto', 'R.', 'Partner &amp; Contributor', '+1 317-456-2504', '3@3.lol', '130 Jamie Rd, Detroit, MI, 48313, USA', 'sildur', '21232f297a57a5a743894a0e4a801fc3', 'user', '(Rails Developer)', '@sildur', NULL, NULL, NULL, 'active'),
	(12, 'img/demo/avatars/avatar-b.png', 'Oliver', 'Kopyov ', 'IT Director, Gotbootstrap Inc.', '+1 317-456-2564', 'oliver.kopyov@smartadminwebapp.com', '15 Charist St, Detroit, MI, 48212, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Kopyov', 'Kopyov ', 'Kopyov ', '@Kopyov ', 'active'),
	(13, 'img/demo/avatars/avatar-c.png', 'Alita', 'Gray', 'Project Manager, Gotbootstrap Inc.', '+1 313-461-1347', 'Alita@smartadminwebapp.com', '134 Hamtrammac, Detroit, MI, 48314, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Alita', 'Alita', 'Alita', '@Alita', 'active'),
	(14, 'img/demo/avatars/avatar-e.png', 'Dr. John', 'Cook PhD', 'Human Resources, Gotbootstrap Inc.', '+1 313-779-1347', 'john.cook@smartadminwebapp.com', '55 Smyth Rd, Detroit, MI, 48341, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@DrJohn', 'DrJohn', 'DrJohn', '@DrJohn', 'active'),
	(15, 'img/demo/avatars/avatar-k.png', 'Jim', 'Ketty', 'Staff Orgnizer, Gotbootstrap Inc.', '+1 313-779-3314', 'jim.ketty@smartadminwebapp.com', '134 Tasy Rd, Detroit, MI, 48212, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Ketty', 'Ketty', 'Ketty', '@Ketty', 'active'),
	(16, 'img/demo/avatars/avatar-g.png', 'Dr. John', 'Oliver', 'Oncologist, Gotbootstrap Inc.', '+1 313-779-8134', 'john.oliver@smartadminwebapp.com', '134 Gallery St, Detroit, MI, 46214, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Oliver', 'Oliver', 'Oliver', '@Oliver', 'active'),
	(17, 'img/demo/avatars/avatar-h.png', 'Sarah', 'McBrook', 'Xray Division, Gotbootstrap Inc.', '+1 313-779-7613', 'sarah.mcbrook@smartadminwebapp.com', '13 Jamie Rd, Detroit, MI, 48313, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@McBrook', 'McBrook', 'McBrook', '@McBrook', 'active'),
	(18, 'img/demo/avatars/avatar-i.png', 'Jimmy', 'Fellan', 'Accounting, Gotbootstrap Inc.', '+1 313-779-4314', 'jimmy.fallan@smartadminwebapp.com', '55 Smyth Rd, Detroit, MI, 48341, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Fellan', 'Fellan', 'Fellan', '@Fellan', 'active'),
	(19, 'img/demo/avatars/avatar-j.png', 'Arica', 'Grace', 'Accounting, Gotbootstrap Inc', '+1 313-779-3347', 'arica.grace@smartadminwebapp.com', '798 Smyth Rd, Detroit, MI, 48341, USA', NULL, '21232f297a57a5a743894a0e4a801fc3', 'user', NULL, '@Arica', 'Arica', 'Arica', '@Arica', 'active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
