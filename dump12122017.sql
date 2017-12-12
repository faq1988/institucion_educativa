-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.28-MariaDB - mariadb.org binary distribution
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

-- Dumping structure for table institucion_educativa.alumnos_por_clase
CREATE TABLE IF NOT EXISTS `alumnos_por_clase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_clase` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `fecha_hora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.alumnos_por_clase: ~0 rows (approximately)
/*!40000 ALTER TABLE `alumnos_por_clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `alumnos_por_clase` ENABLE KEYS */;

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

-- Dumping structure for table institucion_educativa.autorizaciones
CREATE TABLE IF NOT EXISTS `autorizaciones` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `asunto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `leido` bit(1) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.autorizaciones: ~0 rows (approximately)
/*!40000 ALTER TABLE `autorizaciones` DISABLE KEYS */;
INSERT INTO `autorizaciones` (`id`, `id_tutor`, `id_alumno`, `fechahora`, `asunto`, `descripcion`, `leido`, `estado`) VALUES
	(1, 6, 4, '2017-12-02 20:30:14', 'Comida', 'Solicito autorización para comer papas fritas', b'0', 'RECHAZADO');
/*!40000 ALTER TABLE `autorizaciones` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.clase
CREATE TABLE IF NOT EXISTS `clase` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.clase: ~0 rows (approximately)
/*!40000 ALTER TABLE `clase` DISABLE KEYS */;
/*!40000 ALTER TABLE `clase` ENABLE KEYS */;

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

-- Dumping data for table institucion_educativa.contacto: ~2 rows (approximately)
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` (`id`, `nombre`, `apellido`, `email`, `telefono`, `comentario`, `fechahora`) VALUES
	(1, 'asdf', 'asdf', 'asd@asd.com', '11231231', 'asfdafsasfd', '2017-10-20 12:39:49'),
	(2, 'asfd', 'fads', 'asfd@asdf.com', '123123456', 'afsdafsdafsd', '2017-10-20 12:40:12');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.evento
CREATE TABLE IF NOT EXISTS `evento` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  `accion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.evento: ~9 rows (approximately)
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

-- Dumping structure for table institucion_educativa.hijos_por_tutores
CREATE TABLE IF NOT EXISTS `hijos_por_tutores` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `id_alumno` bigint(20) DEFAULT NULL,
  `vinculo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.hijos_por_tutores: ~0 rows (approximately)
/*!40000 ALTER TABLE `hijos_por_tutores` DISABLE KEYS */;
/*!40000 ALTER TABLE `hijos_por_tutores` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.institucion
CREATE TABLE IF NOT EXISTS `institucion` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) DEFAULT NULL,
  `domicilio` varchar(200) DEFAULT NULL,
  `ciudad` varchar(200) DEFAULT NULL,
  `pais` varchar(200) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `mail` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.institucion: ~0 rows (approximately)
/*!40000 ALTER TABLE `institucion` DISABLE KEYS */;
INSERT INTO `institucion` (`id`, `nombre`, `domicilio`, `ciudad`, `pais`, `telefono`, `mail`) VALUES
	(1, 'Establecimiento uno', 'calle y numero', 'Bahia Blanca', 'Argentina', '123456', 'asd@asd.com');
/*!40000 ALTER TABLE `institucion` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.mensajes_alumnos
CREATE TABLE IF NOT EXISTS `mensajes_alumnos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_tutor` bigint(20) DEFAULT NULL,
  `mensaje` varchar(200) DEFAULT NULL,
  `asunto` varchar(100) DEFAULT NULL,
  `fechahora` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.mensajes_alumnos: ~3 rows (approximately)
/*!40000 ALTER TABLE `mensajes_alumnos` DISABLE KEYS */;
INSERT INTO `mensajes_alumnos` (`id`, `id_tutor`, `mensaje`, `asunto`, `fechahora`) VALUES
	(1, 6, 'algo pasa con su hijo', 'suceso extraño', '2017-11-01 16:36:10'),
	(2, 6, 'deberia tener mas cuidado con el niño, es muy peligroso', 'peligro al volante', '2017-11-02 16:52:53'),
	(3, 6, 'el niño se porta muy mal, no puedo controlarlo todo el tiempo', 'mala conducta', '2017-11-02 16:53:54'),
	(4, 6, 'vengan urgente al colegio, ha sufrido un accidente muy grave', 'urgencia', '2017-11-02 16:54:59');
/*!40000 ALTER TABLE `mensajes_alumnos` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.menu_semanal
CREATE TABLE IF NOT EXISTS `menu_semanal` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `desayuno` varchar(100) DEFAULT NULL,
  `almuerzo` varchar(100) DEFAULT NULL,
  `merienda` varchar(100) DEFAULT NULL,
  `cena` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.menu_semanal: ~0 rows (approximately)
/*!40000 ALTER TABLE `menu_semanal` DISABLE KEYS */;
INSERT INTO `menu_semanal` (`id`, `fecha`, `desayuno`, `almuerzo`, `merienda`, `cena`) VALUES
	(1, '2017-10-24', 'cafe con leche y medialunas', 'arroz con pollo', 'te con masitas', 'fideos con manteca'),
	(2, '2017-12-01', 'te con pan', 'bife con pure', 'jugo con torta', 'verduras');
/*!40000 ALTER TABLE `menu_semanal` ENABLE KEYS */;

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.persona: ~3 rows (approximately)
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id`, `tipo`, `nombre`, `apellido`, `edad`, `nacimiento`, `dni`, `email`, `direccion`, `ciudad`) VALUES
	(2, 'ALUMNO', 'asf', 'asdfa', 12, NULL, '23141242', 'asd', 'das', 'asd'),
	(3, 'ALUMNO', 'asdfsafd', 'asdfafd', 12, NULL, '32123123', 'facasdc', 'asdfa 25', 'fasdfa'),
	(4, 'ALUMNO', 'alfredo', 'uno', 14, NULL, '32432234', 'asd@asd.com', 'calle 1', 'bahia blanca'),
	(5, 'MAESTRO', 'alfredo', 'perez', 34, NULL, '12123123', 'asd@asd.com', 'algo 123', 'bahia blanca'),
	(6, 'TUTOR', 'juan', 'lopez', 33, NULL, '31212323', 'fdsfsadfds', 'fdsfsad 123', 'bahia blanca');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Dumping structure for table institucion_educativa.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_persona` bigint(20) DEFAULT NULL,
  `rol` varchar(50) DEFAULT NULL,
  `id_establecimiento` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table institucion_educativa.usuario: ~2 rows (approximately)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id`, `username`, `password`, `id_persona`, `rol`, `id_establecimiento`) VALUES
	(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL, 'SUPERUSER', NULL),
	(2, 'padre', 'fe01ce2a7fbac8fafaed7c982a04e229', 6, 'TUTOR', 1),
	(3, 'establecimiento', 'fe01ce2a7fbac8fafaed7c982a04e229', NULL, 'ESTABLECIMIENTO', 1),
	(4, 'maestro', 'fe01ce2a7fbac8fafaed7c982a04e229', 5, 'MAESTRO', 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
