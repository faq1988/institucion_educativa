-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.21-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5144
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para institucion_educativa
CREATE DATABASE IF NOT EXISTS `institucion_educativa` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `institucion_educativa`;

-- Volcando estructura para tabla institucion_educativa.aula
CREATE TABLE IF NOT EXISTS `aula` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `capacidad` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla institucion_educativa.aula: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;

-- Volcando estructura para tabla institucion_educativa.contacto
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

-- Volcando datos para la tabla institucion_educativa.contacto: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`, `fechahora`) VALUES
	(1, 'asdf', 'asdf', 'asd@asd.com', '11231231', 'asfdafsasfd', '2017-10-20 12:39:49'),
	(2, 'asfd', 'fads', 'asfd@asdf.com', '123123456', 'afsdafsdafsd', '2017-10-20 12:40:12');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Volcando estructura para tabla institucion_educativa.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla institucion_educativa.evento: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `evento` DISABLE KEYS */;
INSERT INTO `evento` (`id`, `fechahora`, `accion`, `descripcion`, `id_alumno`) VALUES
	(1, '2017-10-23 21:16:59', 'Comer', 'Comio bien', 2),
	(2, '2017-10-23 21:31:57', 'Dormir', 'Durmio mal', 3),
	(4, '2017-10-23 22:43:17', 'Comer', NULL, 2),
	(5, '2017-10-23 22:43:17', 'Comer', NULL, 3),
	(6, '2017-10-23 22:43:17', 'Comer', NULL, 4),
	(7, '2017-10-23 22:53:25', 'Comer', NULL, 3),
	(8, '2017-10-23 22:53:39', 'Dormir', NULL, 2),
	(9, '2017-10-23 22:53:39', 'Dormir', NULL, 3),
	(10, '2017-10-24 10:09:42', 'Comer', 'Comio bien todo el dia', 2);
/*!40000 ALTER TABLE `evento` ENABLE KEYS */;

-- Volcando estructura para tabla institucion_educativa.menu_semanal
CREATE TABLE IF NOT EXISTS `menu_semanal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `desayuno` varchar(100) DEFAULT NULL,
  `almuerzo` varchar(100) DEFAULT NULL,
  `merienda` varchar(100) DEFAULT NULL,
  `cena` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla institucion_educativa.menu_semanal: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `menu_semanal` DISABLE KEYS */;
INSERT INTO `menu_semanal` (`id`, `fecha`, `desayuno`, `almuerzo`, `merienda`, `cena`) VALUES
	(1, '2017-10-24', 'cafe con leche y medialunas', 'arroz con pollo', 'te con masitas', 'fideos con manteca');
/*!40000 ALTER TABLE `menu_semanal` ENABLE KEYS */;

-- Volcando estructura para tabla institucion_educativa.persona
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

-- Volcando datos para la tabla institucion_educativa.persona: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `tipo`, `nombre`, `apellido`, `edad`, `nacimiento`, `dni`, `email`, `direccion`, `ciudad`) VALUES
	(2, 'ALUMNO', 'asf', 'asdfa', 12, NULL, '23141242', 'asd', 'das', 'asd'),
	(3, 'ALUMNO', 'asdfsafd', 'asdfafd', 12, NULL, '32123123', 'facasdc', 'asdfa 25', 'fasdfa'),
	(4, 'ALUMNO', 'alfredo', 'uno', 14, NULL, '32432234', 'asd@asd.com', 'calle 1', 'bahia blanca');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Volcando estructura para tabla institucion_educativa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_persona` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla institucion_educativa.usuario: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `username`, `password`, `id_persona`) VALUES
	(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
