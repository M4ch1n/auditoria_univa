-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-12-2014 a las 23:25:40
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `auditoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `surveys`
--

DROP TABLE IF EXISTS `surveys`;
CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_personal_data` int(10) unsigned NOT NULL,
  `id_question` int(10) unsigned NOT NULL,
  `id_answer` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Volcado de datos para la tabla `surveys`
--

INSERT INTO `surveys` (`id`, `id_personal_data`, `id_question`, `id_answer`) VALUES
(2, 0, 2, 6),
(3, 0, 3, 7),
(4, 0, 4, 10),
(5, 0, 5, 13),
(6, 0, 6, 17),
(7, 0, 7, 23),
(8, 0, 8, 25),
(9, 0, 9, 28),
(10, 0, 10, 30),
(11, 0, 11, 33),
(12, 0, 1, 3),
(13, 0, 1, 3),
(15, 0, 1, 3),
(17, 0, 1, 4),
(18, 0, 1, 4),
(21, 0, 2, 6),
(22, 0, 3, 9),
(23, 0, 4, 11),
(24, 0, 5, 14),
(25, 0, 6, 19),
(26, 0, 7, 23),
(27, 0, 8, 26),
(28, 0, 9, 29),
(29, 0, 10, 32),
(30, 0, 11, 35),
(31, 0, 1, 3),
(32, 0, 2, 5),
(33, 0, 3, 8),
(34, 0, 4, 12),
(35, 0, 5, 15),
(36, 0, 6, 19),
(37, 0, 7, 22),
(38, 0, 8, 25),
(39, 0, 9, 29),
(40, 0, 10, 30),
(41, 0, 11, 35),
(42, 0, 1, 4),
(43, 0, 2, 5),
(44, 0, 3, 8),
(45, 0, 4, 10),
(46, 0, 5, 13),
(47, 0, 6, 20),
(48, 0, 7, 21),
(49, 0, 8, 24),
(50, 0, 9, 29),
(51, 0, 10, 30),
(52, 0, 11, 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
