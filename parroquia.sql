-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-11-2024 a las 20:43:21
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
CREATE DATABASE IF NOT EXISTS `parroquia` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `parroquia`;

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
-- Estructura de tabla para la tabla `mensajes`
--

DROP TABLE IF EXISTS `mensajes`;
CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `email` text,
  `phone` varchar(10) DEFAULT NULL,
  `address` text,
  `message` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `name`, `email`, `phone`, `address`, `message`) VALUES
(1, 'Juan Perez', 'juan@juan.com', '5465416', 'no', 'no'),
(2, 'Juan Perez', 'juan@juan.com', '5465416', 'no', 'iohdsfls'),
(3, 'Juan Perez', 'juan@juan.com', '5465416', 'no', '¿Cuándo es la catequesis?'),
(4, 'Sonia Rojas', 'son@rojas.com', '097452', 'La Laguna', 'Hola, este es un mensaje de prueba'),
(5, 'John Doe', 'johndoe@example.com', '123-456-78', '123 Main St', 'This is a sample message 1'),
(6, 'Jane Smith', 'janesmith@example.com', '987-654-32', '456 Maple Ave', 'This is a sample message 2'),
(7, 'Robert Brown', 'robertbrown@example.com', '555-123-45', '789 Oak Dr', 'This is a sample message 3'),
(8, 'Emily Davis', 'emilydavis@example.com', '555-987-65', '101 Pine Ln', 'This is a sample message 4'),
(9, 'Michael Wilson', 'michaelwilson@example.com', '555-654-12', '202 Elm St', 'This is a sample message 5'),
(10, 'Sarah Johnson', 'sarahjohnson@example.com', '555-321-76', '303 Cedar Blvd', 'This is a sample message 6'),
(11, 'David Martinez', 'davidmartinez@example.com', '555-456-78', '404 Birch Rd', 'This is a sample message 7'),
(12, 'Jessica Lee', 'jessicalee@example.com', '555-123-09', '505 Willow Ct', 'This is a sample message 8'),
(13, 'Daniel Garcia', 'danielgarcia@example.com', '555-234-56', '606 Ash Dr', 'This is a sample message 9'),
(14, 'Karen Miller', 'karenmiller@example.com', '555-345-67', '707 Cherry St', 'This is a sample message 10'),
(15, 'Thomas Anderson', 'thomasanderson@example.com', '555-456-78', '808 Poplar Ave', 'This is a sample message 11'),
(16, 'Lisa Thompson', 'lisathompson@example.com', '555-567-89', '909 Walnut Pl', 'This is a sample message 12'),
(17, 'James Moore', 'jamesmoore@example.com', '555-678-90', '111 Chestnut Dr', 'This is a sample message 13'),
(18, 'Patricia Taylor', 'patriciataylor@example.com', '555-789-01', '222 Fir Ln', 'This is a sample message 14'),
(19, 'Charles Hernandez', 'charleshernandez@example.com', '555-890-12', '333 Spruce Rd', 'This is a sample message 15'),
(20, 'Barbara Clark', 'barbaraclark@example.com', '555-901-23', '444 Pineview St', 'This is a sample message 16'),
(21, 'Matthew Rodriguez', 'matthewrodriguez@example.com', '555-012-34', '555 Redwood Ave', 'This is a sample message 17'),
(22, 'Linda Lewis', 'lindalewis@example.com', '555-123-45', '666 Cypress Blvd', 'This is a sample message 18'),
(23, 'Christopher Walker', 'christopherwalker@example.com', '555-234-56', '777 Sequoia Dr', 'This is a sample message 19'),
(24, 'Nancy Hall', 'nancyhall@example.com', '555-345-67', '888 Dogwood Ct', 'This is a sample message 20'),
(25, 'Paul Allen', 'paulallen@example.com', '555-456-78', '999 Elmwood Rd', 'This is a sample message 21'),
(26, 'Sandra Young', 'sandrayoung@example.com', '555-567-89', '121 Maple Leaf St', 'This is a sample message 22'),
(27, 'Mark King', 'markking@example.com', '555-678-90', '131 Willow Bend', 'This is a sample message 23'),
(28, 'Donna Wright', 'donnawright@example.com', '555-789-01', '141 Oakview Ave', 'This is a sample message 24'),
(29, 'George Lopez', 'georgelopez@example.com', '555-890-12', '151 Birchwood Pl', 'This is a sample message 25'),
(30, 'Susan Hill', 'susanhill@example.com', '555-901-23', '161 Cedar Ln', 'This is a sample message 26'),
(31, 'Kevin Scott', 'kevinscott@example.com', '555-012-34', '171 Poplar Dr', 'This is a sample message 27'),
(32, 'Carol Green', 'carolgreen@example.com', '555-123-45', '181 Aspen Ct', 'This is a sample message 28'),
(33, 'Edward Adams', 'edwardadams@example.com', '555-234-56', '191 Oak St', 'This is a sample message 29'),
(34, 'Betty Baker', 'bettybaker@example.com', '555-345-67', '201 Elm Ave', 'This is a sample message 30'),
(35, 'Brian Gonzalez', 'briangonzalez@example.com', '555-456-78', '211 Maple Dr', 'This is a sample message 31'),
(36, 'Dorothy Nelson', 'dorothynelson@example.com', '555-567-89', '221 Pine Ln', 'This is a sample message 32'),
(37, 'Jason Carter', 'jasoncarter@example.com', '555-678-90', '231 Walnut St', 'This is a sample message 33'),
(38, 'Helen Mitchell', 'helenmitchell@example.com', '555-789-01', '241 Cherry Blvd', 'This is a sample message 34'),
(39, 'Gary Perez', 'garyperez@example.com', '555-890-12', '251 Dogwood Ave', 'This is a sample message 35'),
(40, 'Amy Roberts', 'amyroberts@example.com', '555-901-23', '261 Fir Ct', 'This is a sample message 36'),
(41, 'Steven Turner', 'steventurner@example.com', '555-012-34', '271 Redwood Rd', 'This is a sample message 37'),
(42, 'Ruth Phillips', 'ruthphillips@example.com', '555-123-45', '281 Cypress St', 'This is a sample message 38'),
(43, 'Frank Campbell', 'frankcampbell@example.com', '555-234-56', '291 Sequoia Blvd', 'This is a sample message 39'),
(44, 'Olivia Parker', 'oliviaparker@example.com', '555-345-67', '301 Aspen Ln', 'This is a sample message 40'),
(45, 'Henry Evans', 'henryevans@example.com', '555-456-78', '311 Elm Ct', 'This is a sample message 41'),
(46, 'Marie Edwards', 'marieedwards@example.com', '555-567-89', '321 Maple Ave', 'This is a sample message 42'),
(47, 'Philip Collins', 'philipcollins@example.com', '555-678-90', '331 Oak Dr', 'This is a sample message 43'),
(48, 'Gloria Stewart', 'gloriastewart@example.com', '555-789-01', '341 Cherry Rd', 'This is a sample message 44'),
(49, 'Walter Sanchez', 'waltersanchez@example.com', '555-890-12', '351 Pine Pl', 'This is a sample message 45'),
(50, 'Deborah Morris', 'deborahmorris@example.com', '555-901-23', '361 Fir Blvd', 'This is a sample message 46'),
(51, 'Dennis Rogers', 'dennisrogers@example.com', '555-012-34', '371 Willow St', 'This is a sample message 47'),
(52, 'Catherine Reed', 'catherinereed@example.com', '555-123-45', '381 Birch Ln', 'This is a sample message 48'),
(53, 'Andrew Cook', 'andrewcook@example.com', '555-234-56', '391 Spruce Ave', 'This is a sample message 49'),
(54, 'Megan Morgan', 'meganmorgan@example.com', '555-345-67', '401 Poplar Dr', 'This is a sample message 50');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_not`, `titulo_not`, `descripcion_not`, `fecha_not`, `autor_not`) VALUES
(1, 'Nueva página de la parroquia', '<h1 class=\"\">Ven y conoce la nueva página de la parroquia Eclesiástica Santísima Trinidad</h1>', '2024-11-08 09:21:10', NULL),
(2, 'Cambio de fecha en la fiesta <strong> Religiosa </strong> en honor a la Santísima Cruz', '<p>Detalle del cambio</p>', '2024-11-08 09:22:24', NULL),
(3, '', '', '2024-11-10 18:31:55', NULL);

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
