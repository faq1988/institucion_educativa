-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.26-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for institucion_educativa
CREATE DATABASE IF NOT EXISTS `institucion_educativa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `institucion_educativa`;

-- Dumping structure for table institucion_educativa.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.aula: ~0 rows (approximately)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.contacto
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `comentario` varchar(500) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.contacto: ~1 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`, `fechahora`) VALUES
	(1, 'asdf', 'asdf', 'asd@asd.com', '11231231', 'asfdafsasfd', '2017-10-20 12:39:49'),
	(2, 'asfd', 'fads', 'asfd@asdf.com', '123123456', 'afsdafsdafsd', '2017-10-20 12:40:12');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.persona
CREATE TABLE IF NOT EXISTS `persona` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(50) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.persona: ~2 rows (approximately)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `tipo`, `nombre`, `apellido`, `edad`, `nacimiento`, `dni`, `email`, `direccion`, `ciudad`) VALUES
	(2, 'ALUMNO', 'asf', 'asdfa', 12, NULL, NULL, NULL, NULL, NULL),
	(3, 'ALUMNO', 'asdfsafd', 'asdfafd', 12, NULL, '32123123', 'facasdc', 'asdfa 25', 'fasdfa'),
	(4, 'ALUMNO', 'alfredo', 'uno', 14, NULL, '32432234', 'asd@asd.com', 'calle 1', 'bahia blanca');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_persona` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.usuario: ~1 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `username`, `password`, `id_persona`) VALUES
	(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
