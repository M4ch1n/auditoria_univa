-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2014 a las 07:07:26
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
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_question` int(10) unsigned NOT NULL,
  `answer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `answers`
--

INSERT INTO `answers` (`id`, `id_question`, `answer`, `rating`) VALUES
(1, 1, 'Satisfecho', 0),
(2, 1, 'No satisfecho', 0),
(3, 1, 'Satisfecho', 1),
(4, 1, 'No satisfecho', 2),
(5, 2, 'Si', 1),
(6, 2, 'No', 2),
(7, 3, 'Siempre', 1),
(8, 3, 'Algunas veces', 2),
(9, 3, 'Nunca', 3),
(10, 4, 'Completamente capacitado', 1),
(11, 4, 'Medianamente capactidad', 2),
(12, 4, 'No me siento capacitado', 3),
(13, 5, 'Se me da el tiempo necesario para aprender lo que necesito', 1),
(14, 5, 'Se me da poco tiempo', 2),
(15, 5, 'No se me da tiempo', 3),
(16, 6, 'Mensualmente', 1),
(17, 6, 'Trimestralmente', 2),
(18, 6, 'Semestralmente', 3),
(19, 6, 'Anualmente', 4),
(20, 6, 'No recibo capacitación', 5),
(21, 7, 'Si', 1),
(22, 7, 'No', 2),
(23, 7, 'Algunas veces', 3),
(24, 8, 'Si', 1),
(25, 8, 'No', 2),
(26, 8, 'Algunas veces', 3),
(27, 9, 'Si', 1),
(28, 9, 'No', 2),
(29, 9, 'Algunas veces', 3),
(30, 10, 'Si', 1),
(31, 10, 'No', 2),
(32, 10, 'Algunas veces', 3),
(33, 11, 'Si', 1),
(34, 11, 'No', 2),
(35, 11, 'Algunas veces', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_f` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name_m` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `work_years` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_28_021831_create_questions_table', 1),
('2014_10_28_041725_create_answers_table', 2),
('2014_10_28_041909_create_employees_table', 2),
('2014_10_28_041934_create_surveys_table', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `questions`
--

INSERT INTO `questions` (`id`, `question`, `order`) VALUES
(1, '¿Estas satisfecho con las responsabilidades de tu puesto?', 1),
(2, 'Tus responsabilidades, ¿están perfectamente delimitadas?', 2),
(3, 'Las tareas que ejerces, ¿son específicas del área en la que estas laborando?', 3),
(4, '¿Te sientes capacitado para realizar las tareas que se te encomiendan?', 4),
(5, 'Cuando se te plantea una nueva tarea que no conoces, ¿se te da el tiempo necesario para comprenderla?', 5),
(6, '¿Recibes capacitación por parte de la empresa?', 6),
(7, 'Cuando inicias un proyecto, ¿conoces con exactitud tus responsabilidades?', 7),
(8, 'Durante el transcurso de un proyecto, ¿han cambiado requerimientos que requieran habilidades distintas a las planteadas inicialmente', 8),
(9, 'Al terminar un proyecto, ¿cumples con los objetivos establecidos?', 9),
(10, 'Cuando finalizas un proyecto, ¿recibes retroalimentación de tu jefe inmediato?', 10),
(11, 'Ya que se libera un proyecto, ¿recibes retroalimentación por parte de los usuarios?', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `surveys`
--

CREATE TABLE IF NOT EXISTS `surveys` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_personal_data` int(10) unsigned NOT NULL,
  `id_question` int(10) unsigned NOT NULL,
  `id_answer` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
