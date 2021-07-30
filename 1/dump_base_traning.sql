-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.4.12-MariaDB-log - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.2.0.6213
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
  `user_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.phptable: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `phptable` DISABLE KEYS */;
INSERT INTO `phptable` (`id`, `first_name`, `last_name`, `user_name`) VALUES
	(1, 'Mark', 'Otto', '@mdo'),
	(2, 'Jacob	', 'Thornton', '@fat'),
	(3, 'Larry', 'the Bird', '@twitter'),
	(4, 'Larry the Bird', 'Bird', '@twitter2');
/*!40000 ALTER TABLE `phptable` ENABLE KEYS */;

-- Дамп структуры для таблица phptraning.text9
CREATE TABLE IF NOT EXISTS `text9` (
  `post_text` text COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.text9: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `text9` DISABLE KEYS */;
INSERT INTO `text9` (`post_text`) VALUES
	('проверка'),
	('привет'),
	('gggg'),
	('aaaaaaaaaaaaaa'),
	('гет запрос'),
	('123666');
/*!40000 ALTER TABLE `text9` ENABLE KEYS */;

-- Дамп структуры для таблица phptraning.users
CREATE TABLE IF NOT EXISTS `users` (
  `img` text COLLATE utf8mb4_bin DEFAULT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `status_in_company` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `twitter` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `user_name` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Дамп данных таблицы phptraning.users: ~4 rows (приблизительно)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`img`, `first_name`, `last_name`, `position`, `status_in_company`, `twitter`, `user_name`, `status`) VALUES
	('img/demo/authors/sunny.png', 'Sunny', 'A.', '(UI/UX Expert)', 'Lead Author', '@myplaneticket', 'myorange', 'active'),
	('img/demo/authors/josh.png', 'Jos', 'K.', '(ASP.NET Developer)', 'Partner &amp; Contributor', '@atlantez', 'Walapa', 'active'),
	('img/demo/authors/jovanni.png', 'Jovanni', 'Lo', '(PHP Developer)', 'Partner &amp; Contributor', '@lodev09', 'lodev09', 'disabled'),
	('img/demo/authors/roberto.png', 'Roberto', 'R.', '(Rails Developer)', 'Partner &amp; Contributor', '@sildur', 'sildur', 'disabled');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
