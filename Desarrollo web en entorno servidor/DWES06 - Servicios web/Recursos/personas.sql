-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para personas
CREATE DATABASE IF NOT EXISTS `personas` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `personas`;

-- Volcando estructura para tabla personas.person
CREATE TABLE IF NOT EXISTS `person` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstparent_id` int DEFAULT NULL,
  `secondparent_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `firstparent_id` (`firstparent_id`),
  KEY `secondparent_id` (`secondparent_id`),
  CONSTRAINT `person_ibfk_1` FOREIGN KEY (`firstparent_id`) REFERENCES `person` (`id`) ON DELETE SET NULL,
  CONSTRAINT `person_ibfk_2` FOREIGN KEY (`secondparent_id`) REFERENCES `person` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla personas.person: ~6 rows (aproximadamente)
INSERT INTO `person` (`id`, `firstname`, `lastname`, `firstparent_id`, `secondparent_id`) VALUES
	(5, 'Jack', 'Davis', NULL, NULL),
	(6, 'Jessica', 'Wilson', NULL, NULL),
	(7, 'Joseph', 'Martinez', NULL, NULL),
	(8, 'Julia', 'Garcia', NULL, NULL),
	(9, 'Jordan', 'Miller', NULL, NULL),
	(10, 'Jasmine', 'Taylor', NULL, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
