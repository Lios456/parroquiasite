-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-11-2024 a las 00:14:22
-- Versión del servidor: 8.3.0
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parroquia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catequista`
--

DROP TABLE IF EXISTS `catequista`;
CREATE TABLE IF NOT EXISTS `catequista` (
  `id_cate` int NOT NULL AUTO_INCREMENT,
  `id_per` varchar(10) NOT NULL,
  `curso_cate` int DEFAULT NULL,
  PRIMARY KEY (`id_cate`,`id_per`),
  KEY `fk_catequista_persona` (`id_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_not` int NOT NULL AUTO_INCREMENT,
  `titulo_not` text,
  `descripcion_not` text,
  `fecha_not` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `autor_not` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_not`),
  KEY `fk_noticia_persona` (`autor_not`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_not`, `titulo_not`, `descripcion_not`, `fecha_not`, `autor_not`) VALUES
(1, 'Noticia 1', 'Hola Mundo', '2024-10-30 18:08:12', NULL),
(2, '<strong>Nueva</strong> página de la Parroquia', 'Noticia de Prueba', '2024-10-30 18:08:12', NULL),
(3, 'Hola', 'Noticia de Prueba', '2024-10-30 18:08:12', NULL),
(6, 'Hola Mundo, nueva noticia', '<p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/5FrhtahQiRc\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>', '2024-11-06 21:38:45', NULL),
(7, 'Nuevo presidente en el Barrio', '<h1 class=\"\">El nuevo presidente del Barrio</h1><p class=\"\">El nuevo presidente del barrio corresponde a __________________</p>', '2024-11-06 21:50:53', NULL),
(8, 'Horario', '', '2024-11-07 07:01:35', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

DROP TABLE IF EXISTS `persona`;
CREATE TABLE IF NOT EXISTS `persona` (
  `cedula_per` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre_per` text NOT NULL,
  `apellido1_per` text NOT NULL,
  `apellido2_per` text NOT NULL,
  `celular_per` varchar(10) DEFAULT NULL,
  `imagen_per` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`cedula_per`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catequista`
--
ALTER TABLE `catequista`
  ADD CONSTRAINT `fk_catequista_persona` FOREIGN KEY (`id_per`) REFERENCES `persona` (`cedula_per`);

--
-- Filtros para la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `fk_noticia_persona` FOREIGN KEY (`autor_not`) REFERENCES `persona` (`cedula_per`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
