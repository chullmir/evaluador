-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-10-2019 a las 23:08:09
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_plantilla1`
--

CREATE TABLE `evaluacion_plantilla1` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actitud1` int(11) NOT NULL,
  `actitud2` int(11) NOT NULL,
  `actitud3` int(11) NOT NULL,
  `actitud4` int(11) NOT NULL,
  `actitud5` int(11) NOT NULL,
  `actitud6` int(11) NOT NULL,
  `desempeno1` int(11) NOT NULL,
  `desempeno2` int(11) NOT NULL,
  `desempeno3` int(11) NOT NULL,
  `desempeno4` int(11) NOT NULL,
  `desempeno5` int(11) NOT NULL,
  `desempeno6` int(11) NOT NULL,
  `desempeno7` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_plantilla2`
--

CREATE TABLE `evaluacion_plantilla2` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actitud1` int(11) NOT NULL,
  `actitud2` int(11) NOT NULL,
  `actitud3` int(11) NOT NULL,
  `actitud4` int(11) NOT NULL,
  `actitud5` int(11) NOT NULL,
  `actitud6` int(11) NOT NULL,
  `desempeno1` int(11) NOT NULL,
  `desempeno2` int(11) NOT NULL,
  `desempeno3` int(11) NOT NULL,
  `desempeno4` int(11) NOT NULL,
  `desempeno5` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_plantilla3`
--

CREATE TABLE `evaluacion_plantilla3` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actitud1` int(11) NOT NULL,
  `actitud2` int(11) NOT NULL,
  `actitud3` int(11) NOT NULL,
  `actitud4` int(11) NOT NULL,
  `actitud5` int(11) NOT NULL,
  `actitud6` int(11) NOT NULL,
  `desempeno1` int(11) NOT NULL,
  `desempeno2` int(11) NOT NULL,
  `desempeno3` int(11) NOT NULL,
  `desempeno4` int(11) NOT NULL,
  `desempeno5` int(11) NOT NULL,
  `desempeno6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_plantilla4`
--

CREATE TABLE `evaluacion_plantilla4` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actitud1` int(11) NOT NULL,
  `actitud2` int(11) NOT NULL,
  `actitud3` int(11) NOT NULL,
  `actitud4` int(11) NOT NULL,
  `actitud5` int(11) NOT NULL,
  `actitud6` int(11) NOT NULL,
  `desempeno1` int(11) NOT NULL,
  `desempeno2` int(11) NOT NULL,
  `desempeno3` int(11) NOT NULL,
  `desempeno4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_plantilla5`
--

CREATE TABLE `evaluacion_plantilla5` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `desempeno1` int(11) NOT NULL,
  `desempeno2` int(11) NOT NULL,
  `desempeno3` int(11) NOT NULL,
  `desempeno4` int(11) NOT NULL,
  `desempeno5` int(11) NOT NULL,
  `desempeno6` int(11) NOT NULL,
  `desempeno7` int(11) NOT NULL,
  `desempeno8` int(11) NOT NULL,
  `desempeno9` int(11) NOT NULL,
  `desempeno10` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluacion_redactores`
--

CREATE TABLE `evaluacion_redactores` (
  `id` int(11) NOT NULL,
  `uidUser` int(11) NOT NULL,
  `uidEvalua` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `actitud1` int(11) NOT NULL,
  `actitud2` int(11) NOT NULL,
  `actitud3` int(11) NOT NULL,
  `redaccion1` int(11) NOT NULL,
  `redaccion2` int(11) NOT NULL,
  `redaccion3` int(11) NOT NULL,
  `redaccion4` int(11) NOT NULL,
  `rigurosidad1` int(11) NOT NULL,
  `rigurosidad2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `evaluacion_redactores`
--

INSERT INTO `evaluacion_redactores` (`id`, `uidUser`, `uidEvalua`, `year`, `month`, `actitud1`, `actitud2`, `actitud3`, `redaccion1`, `redaccion2`, `redaccion3`, `redaccion4`, `rigurosidad1`, `rigurosidad2`) VALUES
(1, 297, 34, 2019, 6, 5, 5, 5, 4, 5, 3, 4, 5, 4),
(2, 298, 34, 2019, 6, 4, 3, 3, 4, 4, 4, 4, 5, 4),
(3, 300, 34, 2019, 6, 4, 5, 4, 3, 4, 4, 4, 5, 4),
(4, 301, 34, 2019, 6, 4, 4, 3, 3, 4, 4, 4, 4, 3),
(5, 302, 34, 2019, 6, 5, 5, 4, 4, 4, 4, 4, 4, 3),
(6, 303, 34, 2019, 6, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(7, 304, 34, 2019, 6, 4, 5, 3, 3, 3, 4, 3, 5, 3),
(8, 297, 38, 2019, 6, 5, 5, 5, 5, 5, 4, 4, 5, 5),
(9, 298, 38, 2019, 6, 3, 2, 2, 4, 3, 5, 4, 4, 5),
(10, 299, 38, 2019, 6, 4, 4, 4, 2, 3, 2, 2, 3, 3),
(11, 300, 38, 2019, 6, 5, 5, 5, 2, 3, 2, 2, 3, 3),
(12, 301, 38, 2019, 6, 4, 4, 4, 4, 3, 5, 5, 5, 3),
(13, 302, 38, 2019, 6, 4, 4, 5, 5, 5, 3, 3, 5, 5),
(14, 303, 38, 2019, 6, 5, 5, 5, 5, 4, 5, 4, 5, 5),
(15, 304, 38, 2019, 6, 4, 4, 4, 2, 2, 2, 2, 4, 3),
(16, 305, 38, 2019, 6, 3, 4, 4, 3, 3, 3, 3, 3, 4),
(17, 306, 38, 2019, 6, 5, 5, 5, 2, 3, 2, 2, 4, 3),
(18, 307, 38, 2019, 6, 5, 5, 5, 4, 3, 3, 3, 4, 4),
(19, 308, 38, 2019, 6, 4, 3, 4, 4, 4, 5, 5, 4, 4),
(20, 309, 38, 2019, 6, 3, 2, 3, 3, 3, 2, 3, 3, 3),
(21, 310, 38, 2019, 6, 3, 2, 2, 3, 3, 2, 2, 3, 3),
(22, 311, 38, 2019, 6, 3, 3, 2, 3, 3, 4, 4, 3, 3),
(23, 312, 38, 2019, 6, 3, 3, 3, 3, 2, 3, 3, 3, 3),
(24, 313, 38, 2019, 6, 5, 5, 5, 4, 4, 4, 4, 5, 5),
(25, 314, 38, 2019, 6, 4, 3, 4, 3, 2, 2, 2, 5, 5),
(26, 315, 38, 2019, 6, 4, 4, 4, 3, 4, 4, 3, 5, 4),
(27, 40, 38, 2019, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(28, 316, 38, 2019, 6, 4, 4, 4, 5, 4, 5, 5, 5, 5),
(29, 317, 38, 2019, 6, 5, 5, 5, 5, 5, 5, 4, 5, 5),
(30, 320, 38, 2019, 6, 5, 5, 5, 5, 4, 3, 5, 5, 5),
(31, 318, 38, 2019, 6, 4, 4, 4, 2, 3, 2, 3, 3, 4),
(32, 321, 38, 2019, 6, 5, 5, 5, 3, 3, 3, 3, 5, 3),
(33, 322, 38, 2019, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(34, 297, 37, 2019, 6, 5, 2, 5, 4, 5, 2, 2, 5, 5),
(35, 298, 37, 2019, 6, 3, 2, 4, 3, 5, 4, 3, 4, 5),
(36, 300, 37, 2019, 6, 4, 5, 5, 3, 5, 2, 3, 3, 5),
(37, 301, 37, 2019, 6, 3, 3, 4, 5, 2, 3, 4, 3, 4),
(38, 302, 37, 2019, 6, 3, 5, 5, 3, 4, 4, 4, 5, 5),
(39, 303, 37, 2019, 6, 3, 4, 4, 3, 4, 2, 2, 5, 5),
(40, 304, 37, 2019, 6, 3, 5, 3, 3, 2, 2, 2, 4, 5),
(41, 305, 37, 2019, 6, 3, 4, 4, 3, 5, 3, 4, 3, 5),
(42, 306, 37, 2019, 6, 2, 3, 4, 4, 3, 2, 2, 3, 4),
(43, 307, 37, 2019, 6, 3, 4, 5, 4, 3, 2, 3, 3, 4),
(44, 309, 37, 2019, 6, 4, 3, 4, 3, 4, 2, 3, 3, 3),
(45, 310, 37, 2019, 6, 3, 3, 4, 3, 4, 2, 3, 5, 4),
(46, 311, 37, 2019, 6, 3, 2, 4, 4, 3, 4, 4, 3, 3),
(47, 312, 37, 2019, 6, 3, 2, 4, 3, 3, 2, 3, 4, 4),
(48, 313, 37, 2019, 6, 4, 3, 4, 3, 3, 2, 4, 5, 5),
(49, 314, 37, 2019, 6, 3, 3, 4, 2, 3, 2, 3, 5, 5),
(50, 315, 37, 2019, 6, 5, 4, 4, 3, 4, 2, 3, 5, 4),
(51, 40, 37, 2019, 6, 5, 5, 5, 4, 5, 4, 4, 4, 5),
(52, 316, 37, 2019, 6, 5, 5, 4, 4, 4, 4, 4, 5, 5),
(53, 317, 37, 2019, 6, 5, 5, 4, 3, 5, 4, 4, 4, 4),
(54, 318, 37, 2019, 6, 4, 4, 4, 3, 4, 2, 3, 4, 4),
(55, 321, 37, 2019, 6, 3, 3, 4, 3, 4, 3, 4, 4, 4),
(56, 318, 35, 2019, 6, 5, 5, 4, 2, 3, 3, 3, 1, 3),
(57, 317, 35, 2019, 6, 5, 5, 5, 3, 4, 4, 4, 2, 3),
(58, 316, 35, 2019, 6, 5, 5, 5, 4, 5, 4, 4, 5, 5),
(59, 40, 35, 2019, 6, 4, 5, 5, 4, 5, 5, 5, 4, 4),
(60, 315, 35, 2019, 6, 4, 4, 3, 3, 5, 4, 4, 3, 3),
(61, 309, 35, 2019, 6, 4, 4, 4, 3, 4, 3, 3, 3, 3),
(62, 308, 35, 2019, 6, 4, 4, 4, 4, 3, 4, 4, 2, 2),
(63, 303, 35, 2019, 6, 5, 5, 4, 4, 5, 4, 5, 5, 5),
(64, 300, 35, 2019, 6, 5, 5, 5, 2, 4, 3, 3, 3, 3),
(65, 302, 35, 2019, 6, 4, 5, 5, 4, 5, 4, 4, 5, 4),
(66, 305, 34, 2019, 6, 4, 4, 3, 4, 3, 2, 2, 5, 3),
(67, 298, 35, 2019, 6, 3, 3, 4, 3, 3, 4, 3, 2, 3),
(68, 306, 34, 2019, 6, 2, 4, 4, 3, 3, 3, 3, 4, 3),
(69, 307, 34, 2019, 6, 4, 5, 4, 2, 3, 2, 2, 5, 3),
(70, 309, 34, 2019, 6, 3, 3, 3, 3, 4, 3, 3, 4, 3),
(71, 310, 34, 2019, 6, 4, 4, 4, 3, 3, 3, 3, 4, 3),
(72, 311, 34, 2019, 6, 4, 4, 3, 4, 4, 4, 4, 4, 3),
(73, 312, 34, 2019, 6, 3, 4, 3, 3, 3, 3, 3, 4, 3),
(74, 313, 34, 2019, 6, 3, 4, 4, 3, 4, 3, 3, 5, 4),
(75, 314, 34, 2019, 6, 3, 3, 3, 3, 3, 3, 3, 5, 3),
(76, 315, 34, 2019, 6, 3, 4, 3, 3, 3, 3, 3, 4, 3),
(77, 40, 34, 2019, 6, 3, 4, 3, 4, 4, 3, 3, 4, 3),
(78, 316, 34, 2019, 6, 4, 5, 4, 4, 4, 4, 4, 5, 4),
(79, 317, 34, 2019, 6, 4, 5, 4, 4, 4, 4, 4, 4, 3),
(80, 162, 34, 2019, 6, 3, 2, 2, 4, 3, 3, 4, 5, 4),
(81, 320, 34, 2019, 6, 4, 2, 3, 4, 2, 2, 2, 5, 4),
(82, 318, 34, 2019, 6, 3, 4, 4, 3, 4, 4, 3, 4, 3),
(83, 321, 34, 2019, 6, 4, 5, 4, 3, 4, 3, 3, 4, 3),
(84, 322, 34, 2019, 6, 4, 4, 3, 4, 4, 4, 4, 4, 4),
(85, 306, 41, 2019, 6, 3, 3, 4, 1, 3, 1, 2, 4, 4),
(86, 307, 41, 2019, 6, 4, 4, 4, 2, 3, 2, 2, 3, 3),
(87, 310, 319, 2019, 6, 4, 5, 5, 3, 3, 3, 3, 4, 4),
(88, 322, 41, 2019, 6, 5, 4, 3, 5, 4, 5, 5, 5, 5),
(89, 305, 41, 2019, 6, 3, 3, 3, 3, 2, 3, 3, 4, 4),
(90, 297, 39, 2019, 6, 4, 3, 5, 5, 5, 5, 4, 4, 5),
(91, 299, 39, 2019, 6, 3, 5, 5, 3, 3, 1, 2, 2, 4),
(92, 302, 39, 2019, 6, 2, 4, 4, 5, 4, 5, 5, 5, 5),
(93, 303, 39, 2019, 6, 5, 3, 5, 5, 5, 5, 5, 5, 5),
(94, 305, 39, 2019, 6, 5, 5, 4, 4, 2, 3, 3, 4, 4),
(95, 306, 39, 2019, 6, 3, 2, 3, 3, 3, 2, 3, 3, 5),
(96, 308, 39, 2019, 6, 4, 4, 5, 3, 3, 4, 4, 4, 4),
(97, 309, 39, 2019, 6, 2, 2, 2, 2, 4, 2, 3, 2, 2),
(98, 310, 39, 2019, 6, 3, 3, 4, 3, 2, 1, 3, 4, 4),
(99, 312, 39, 2019, 6, 2, 2, 2, 3, 3, 3, 3, 3, 2),
(100, 314, 39, 2019, 6, 2, 3, 4, 2, 3, 2, 2, 4, 4),
(101, 315, 39, 2019, 6, 4, 5, 4, 4, 5, 5, 5, 4, 4),
(102, 40, 39, 2019, 6, 5, 5, 5, 5, 5, 5, 5, 5, 5),
(103, 316, 39, 2019, 6, 4, 4, 4, 5, 4, 5, 5, 5, 5),
(104, 317, 39, 2019, 6, 5, 5, 5, 4, 5, 5, 5, 3, 4),
(105, 162, 39, 2019, 6, 2, 3, 2, 4, 4, 3, 4, 4, 4),
(106, 320, 39, 2019, 6, 3, 3, 3, 4, 4, 4, 4, 4, 5),
(107, 321, 39, 2019, 6, 3, 3, 3, 3, 3, 2, 2, 3, 3),
(108, 322, 39, 2019, 6, 4, 4, 4, 5, 5, 5, 5, 5, 5),
(109, 297, 36, 2019, 6, 4, 4, 3, 3, 4, 4, 3, 5, 5),
(110, 298, 36, 2019, 6, 3, 2, 4, 4, 4, 3, 3, 3, 3),
(111, 311, 319, 2019, 6, 3, 4, 4, 4, 3, 4, 4, 4, 3),
(112, 312, 319, 2019, 6, 3, 4, 4, 3, 3, 4, 4, 4, 3),
(113, 313, 319, 2019, 6, 4, 4, 4, 3, 4, 3, 3, 4, 3),
(114, 299, 36, 2019, 6, 5, 5, 5, 3, 2, 3, 3, 2, 4),
(115, 300, 36, 2019, 6, 5, 5, 5, 2, 2, 3, 3, 3, 3),
(116, 301, 36, 2019, 6, 4, 4, 4, 4, 2, 4, 5, 4, 4),
(117, 302, 36, 2019, 6, 2, 2, 3, 3, 2, 5, 5, 5, 5),
(118, 303, 36, 2019, 6, 4, 4, 5, 4, 4, 4, 4, 5, 5),
(119, 304, 36, 2019, 6, 3, 5, 5, 2, 1, 2, 2, 5, 3),
(120, 305, 36, 2019, 6, 3, 4, 4, 3, 2, 3, 4, 4, 4),
(121, 306, 36, 2019, 6, 5, 4, 4, 3, 2, 2, 2, 4, 4),
(122, 307, 36, 2019, 6, 5, 5, 5, 2, 3, 2, 2, 3, 3),
(123, 308, 36, 2019, 6, 3, 3, 4, 3, 3, 5, 5, 3, 3),
(124, 309, 36, 2019, 6, 4, 3, 4, 3, 4, 3, 3, 3, 3),
(125, 310, 36, 2019, 6, 3, 3, 3, 3, 3, 4, 4, 5, 4),
(126, 311, 36, 2019, 6, 3, 3, 3, 5, 3, 5, 5, 3, 4),
(127, 312, 36, 2019, 6, 4, 4, 4, 2, 3, 4, 4, 3, 4),
(128, 313, 36, 2019, 6, 3, 4, 5, 3, 5, 3, 3, 5, 5),
(129, 314, 36, 2019, 6, 3, 3, 4, 2, 3, 3, 4, 5, 5),
(130, 315, 36, 2019, 6, 4, 2, 3, 3, 5, 4, 4, 4, 4),
(131, 304, 41, 2019, 6, 5, 5, 5, 3, 2, 2, 2, 4, 5),
(132, 40, 36, 2019, 6, 4, 4, 4, 4, 4, 4, 5, 5, 4),
(133, 316, 36, 2019, 6, 5, 5, 5, 5, 4, 5, 5, 5, 5),
(134, 317, 36, 2019, 6, 5, 5, 5, 3, 5, 4, 4, 4, 4),
(135, 162, 36, 2019, 6, 2, 2, 3, 4, 4, 5, 5, 5, 5),
(136, 320, 36, 2019, 6, 2, 3, 3, 5, 5, 1, 5, 5, 5),
(137, 318, 36, 2019, 6, 5, 5, 5, 3, 4, 2, 3, 3, 4),
(138, 321, 36, 2019, 6, 3, 2, 4, 2, 4, 2, 3, 4, 4),
(139, 322, 36, 2019, 6, 5, 5, 5, 5, 4, 4, 4, 5, 5),
(140, 299, 34, 2019, 6, 3, 4, 4, 3, 4, 3, 3, 4, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL,
  `sector` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(200) COLLATE utf8_bin NOT NULL,
  `email` varchar(200) COLLATE utf8_bin NOT NULL,
  `sectorJefe` varchar(500) COLLATE utf8_bin NOT NULL,
  `sectorEvaluado` varchar(300) COLLATE utf8_bin NOT NULL,
  `profile` varchar(200) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`uid`, `name`, `lastname`, `email`, `sectorJefe`, `sectorEvaluado`, `profile`) VALUES
(1, 'Paulo', 'Chullmir', 'paulochull@gmail.com', 'Redactor Web', '', 'superadmin'),
(2, 'Pastor', 'Albo', '', 'Camaras', 'PE y Jefes', ''),
(3, 'Juanjo', 'Berardone', '', 'Archivo', 'PE y Jefes', ''),
(4, 'Claudio', 'Caruso', '', 'Archivo,Camaras,Cronistas,Edicion', 'PE y Jefes', ''),
(5, 'Carlos', 'Christensen', '', 'Prod TN', 'PE y Jefes', ''),
(6, 'Ana', 'D\'Alonzo', '', 'Camaras,Mesa', 'Administracion', ''),
(7, 'German', 'Domingo', '', 'Archivo,Ingesta SAT', 'PE y Jefes', ''),
(8, 'Silvana', 'Ercolano', '', 'Sintesis,Telenoche', 'PE y Jefes', ''),
(9, 'Claudio', 'Esposito', '', 'Camaras,Conduc Column,Cronistas,Deportes,Edicion,Mesa,Prod Esp', 'PE y Jefes', ''),
(10, 'Diana', 'Fauluchi', '', 'Arriba,CAN,Cronistas,Deportes,Edicion,Noti 13', 'PE y Jefes', ''),
(11, 'Marcelo', 'Fiasche', '', 'Deportes', '', ''),
(12, 'Ruben', 'García', '', 'Arriba,Camaras,Ingesta SAT,Mesa,Noti 13', 'PE y Jefes', ''),
(13, 'Hernan', 'Gonzalez', '', 'Camaras,Edicion', 'PE y Jefes', ''),
(14, 'Fausto', 'Jaime', '', 'Prod TN', 'PE y Jefes', ''),
(15, 'Juliana', 'Koch', '', 'CAN', 'PE y Jefes', ''),
(16, 'Federico', 'Libonatti', '', 'Camaras', 'PE y Jefes', ''),
(17, 'Gonzalo', 'Manrique', '', 'Prod TN', 'PE y Jefes', ''),
(18, 'Jorge', 'Martorell', '', 'Promociones', 'PE y Jefes', ''),
(19, 'Hernan', 'Mastropasqua', '', 'Conduc Column,Directores', 'PE y Jefes', ''),
(20, 'Juan', 'Meiriño', '', 'CAN,Conduc Column,Cronistas,Deportes,Edicion,Ingesta SAT,Prod Esp', 'PE y Jefes', ''),
(21, 'Ignacio', 'Mendilaharzu', '', 'Administracion', '', ''),
(22, 'Marcelo', 'Molina', '', 'Conduc Column,Cronistas,PE y Jefes,Pgms TN,Prod Esp,Promociones', '', ''),
(23, 'Mariana', 'Montero', '', 'Pgms TN,Prod Esp,Promociones', 'PE y Jefes', ''),
(24, 'Lia', 'Mormina', 'lia_mormina@artear.com', 'Arriba,Conduc Column,Cronistas,Directores,Noti 13,PE y Jefes,Prod TN,Sintesis,Telenoche', '', ''),
(25, 'Sergio', 'Narvaiz', '', 'Conduc Column,Directores,Mesa,PE y Jefes,Pgms TN,Promociones', '', ''),
(26, 'Mauro', 'Palma', '', 'CAN', 'PE y Jefes', ''),
(27, 'Ricardo', 'Ravanelli', '', 'PE y Jefes,Prod TN', '', ''),
(28, 'Andrea', 'Rodriguez', '', 'Prod TN', '', ''),
(29, 'Cesar', 'Rodriguez', '', 'CAN,Cronistas,Deportes,Directores,Edicion,Mesa,Sintesis,Telenoche', 'PE y Jefes', ''),
(30, 'Exequiel', 'Sanitz', '', 'Conduc Column,Directores,Ingesta SAT,Pgms TN,Prod Esp', 'PE y Jefes', ''),
(31, 'Mariano', 'Sicher', '', 'Archivo', 'PE y Jefes', ''),
(32, 'Guillermo', 'Sierra', '', 'Archivo,Ingesta SAT', 'PE y Jefes', ''),
(33, 'Carlo', 'Torres', '', 'Camaras', 'PE y Jefes', ''),
(34, 'Fernanda', 'Alonso', '', 'Redactor Web', '', ''),
(35, 'Esteban', 'Rafele', '', 'Redactor Web', '', ''),
(36, 'Patricio', 'Caruso', '', 'Redactor Web', '', ''),
(37, 'Rodrigo', 'Pinto', '', 'Redactor Web', '', ''),
(38, 'Jessica', 'Fabaro', 'jfabaro@gmail.com', 'Redactor Web', '', ''),
(39, 'Joaquín', 'Garau', '', 'Redactor Web', '', ''),
(40, 'Virginia', 'Robetto', '', 'Redactor Web', '', ''),
(41, 'Alejo', 'Vetere', '', 'Redactor Web', '', ''),
(42, 'Martin', 'Pietruszka', '', '', 'Prod TN', ''),
(43, 'Hernan', 'Buzzella', '', '', 'Prod TN', ''),
(44, 'Nico', 'Castrovillari', '', '', 'Prod TN', ''),
(45, 'Gonzalo', 'Bañez Villar', '', '', 'Prod TN', ''),
(46, 'Valeria', 'Mercuri', '', '', 'Prod TN', ''),
(47, 'Julian', 'Bourgarel', '', '', 'Prod TN', ''),
(48, 'Maria Cecilia', 'Marti', '', '', 'Prod TN', ''),
(49, 'Mariana', 'Germiniani', '', '', 'Prod TN', ''),
(50, 'Ana Clara', 'Felice', '', '', 'Prod TN', ''),
(51, 'Silvina', 'Rossi', '', '', 'Prod TN', ''),
(52, 'Mariana', 'Coccaro', '', '', 'Prod TN', ''),
(53, 'Sebastian', 'Penone', '', '', 'Prod TN', ''),
(54, 'Laura', 'Andreacchio', '', '', 'Prod TN', ''),
(55, 'Aneris', 'Casassus', '', '', 'Prod TN', ''),
(56, 'Caterina', 'Quintieri', '', '', 'Prod TN', ''),
(57, 'Veronica', 'Niziolek', '', '', 'Prod TN', ''),
(58, 'M.Eugenia', 'Cazeneuve', '', '', 'Prod TN', ''),
(59, 'Nico', 'Sosa Tillard', '', '', 'Prod TN', ''),
(60, 'Verónica', 'Furlan', '', '', 'Prod TN', ''),
(61, 'Manuel', 'Jove', '', '', 'Prod TN', ''),
(62, 'Julian', 'Obaya', '', '', 'Prod TN', ''),
(63, 'Pamela', 'Aguirre', '', '', 'Prod TN', ''),
(64, 'Guido', 'Laham', '', '', 'Prod TN', ''),
(65, 'Andrea', 'Fernandez', '', '', 'Prod TN', ''),
(66, 'Cecilia', 'Millones', '', '', 'Prod TN', ''),
(67, 'Juan', 'Lombardero', '', '', 'Prod TN', ''),
(68, 'Damian', 'Martino', '', '', 'Prod TN', ''),
(69, 'Agustin', 'Del Hoyo', '', '', 'Prod TN', ''),
(70, 'Diego', 'Bueno', '', '', 'Prod TN', ''),
(71, 'Flavia Lis', 'Meira', '', '', 'Prod TN', ''),
(72, 'Miguel', 'Santiago', '', '', 'Prod TN', ''),
(73, 'Franco', 'Ramirez', '', '', 'Prod TN', ''),
(74, 'Gonzalo', 'Cores', '', '', 'Prod TN', ''),
(75, 'Bernabe', 'Fernandez', '', '', 'Prod TN', ''),
(76, 'Ren', 'Castro Orihuela', '', '', 'Prod TN', ''),
(77, 'Francisco', 'Anselmi', '', '', 'Pgms TN', ''),
(78, 'Noe', 'Zamora Gonzalez', '', '', 'Pgms TN', ''),
(79, 'Lorena', 'Ibaldi', '', '', 'Pgms TN', ''),
(80, 'Daniel', 'Balmaceda', '', '', 'Pgms TN', ''),
(81, 'Ariel Ignacio', 'Llaber', '', '', 'Pgms TN', ''),
(82, 'M. Virginia', 'Musante', '', '', 'Pgms TN', ''),
(83, 'Lourdes', 'Aguiar', '', '', 'Arriba', ''),
(84, 'Silvana', 'Amato', '', '', 'Arriba', ''),
(85, 'Yanina', 'Salvador', '', '', 'Arriba', ''),
(86, 'Damian', 'Hoffman', '', '', 'Arriba', ''),
(87, 'Manuel', 'Ruiz Bravo', '', '', 'Arriba', ''),
(88, 'Leonardo', 'Garcia', '', '', 'Noti 13', ''),
(89, 'Tomas', 'Vidal Adano', '', '', 'Noti 13', ''),
(90, 'Estefania', 'Palacio', '', '', 'Noti 13', ''),
(91, 'Rosa', 'Mourelle', '', '', 'Noti 13', ''),
(92, 'Guillermo', 'Fernandez Pagliera', '', '', 'Noti 13', ''),
(93, 'Carolina', 'Allen', '', '', 'Noti 13', ''),
(94, 'Federico', 'Figueras', '', '', 'Telenoche', ''),
(95, 'Enrique David', 'Garcia', '', '', 'Telenoche', ''),
(96, 'Vanina', 'Gasparotti', '', '', 'Telenoche', ''),
(97, 'Diego', 'Lewkowicz', '', '', 'Telenoche', ''),
(98, 'Federico', 'Llovera', '', '', 'Telenoche', ''),
(99, 'Maria Valeria', 'Lopez', '', '', 'Telenoche', ''),
(100, 'Jason Alan', 'Mayne', '', '', 'Telenoche', ''),
(101, 'Maria Sol', 'Musa', '', '', 'Telenoche', ''),
(102, 'Ruben Dario', 'Salas', '', '', 'Telenoche', ''),
(103, 'Anabella', 'Romero', '', '', 'Telenoche', ''),
(104, 'Francisco', 'Carrega', '', '', 'Telenoche', ''),
(105, 'Daniel', 'Malnatti', '', '', 'Telenoche', ''),
(106, 'Ariel', 'Wengerowsky', '', '', 'Sintesis', ''),
(107, 'Mariana', 'Szostak', '', '', 'Sintesis', ''),
(108, 'Carlos', 'Sayans', '', '', 'Cronistas', ''),
(109, 'Cecilia', 'Insinga', '', '', 'Cronistas', ''),
(110, 'Javier', 'Fabracci', '', '', 'Cronistas', ''),
(111, 'Dario', 'Lopreite', '', '', 'Cronistas', ''),
(112, 'Martin Edu', 'Gonzalez', '', '', 'Cronistas', ''),
(113, 'Gonzalo', 'Aziz', '', '', 'Cronistas', ''),
(114, 'Valeria', 'Sampedro', '', '', 'Cronistas', ''),
(115, 'Gustavo', 'Tubio', '', '', 'Cronistas', ''),
(116, 'Jose', 'Fulugonio', '', '', 'Cronistas', ''),
(117, 'Ignacio', 'Gonzalez Prieto', '', '', 'Cronistas', ''),
(118, 'Marcelo', 'Pelaez', '', '', 'Cronistas', ''),
(119, 'Marcos', 'Barroca', '', '', 'Cronistas', ''),
(120, 'Mariana', 'Segulin', '', '', 'Cronistas', ''),
(121, 'Nuria', 'Gonzalez Rouco', '', '', 'Cronistas', ''),
(122, 'Julio', 'Bazan', '', '', 'Cronistas', ''),
(123, 'Javier Pablo', 'Lozano', '', '', 'Cronistas', ''),
(124, 'Agustina', 'Muda', '', '', 'Cronistas', ''),
(125, 'Catalina', 'Bonadeo', '', '', 'Cronistas', ''),
(126, 'Marcela', 'Pagano', '', '', 'Cronistas', ''),
(127, 'Guido', 'Martinez', '', '', 'Conduc Column', ''),
(128, 'Fernando', 'Molinero', '', '', 'Conduc Column', ''),
(129, 'Jimena', 'Grandinetti', '', '', 'Conduc Column', ''),
(130, 'Jose Antoni', 'Gil Vidal', '', '', 'Conduc Column', ''),
(131, 'Ricardo', 'Angarano', '', '', 'Conduc Column', ''),
(132, 'Jose', 'Bianco', '', '', 'Conduc Column', ''),
(133, 'Matias', 'Bertolotti', '', '', 'Conduc Column', ''),
(134, 'Alejandra', 'Peñalva', '', '', 'Conduc Column', ''),
(135, 'Mariana', 'Mactas', '', '', 'Conduc Column', ''),
(136, 'Adrian', 'Ventura', '', '', 'Conduc Column', ''),
(137, 'Rosana', 'Vazquez', '', '', 'Conduc Column', ''),
(138, 'Marina', 'Fernandez', '', '', 'Conduc Column', ''),
(139, 'Marina', 'Abiuso', '', '', 'Conduc Column', ''),
(140, 'Edgardo', 'Alfano', '', '', 'Conduc Column', ''),
(141, 'Santiago', 'Do Rego', '', '', 'Conduc Column', ''),
(142, 'Fernan', 'Confessore', '', '', 'Conduc Column', ''),
(143, 'Lorena', 'Maciel', '', '', 'Conduc Column', ''),
(144, 'Guillermo', 'Lobo', '', '', 'Conduc Column', ''),
(145, 'Silvia Carmen', 'Martinez', '', '', 'Conduc Column', ''),
(146, 'Natalia', 'Marquiegui', '', '', 'Conduc Column', ''),
(147, 'Franco', 'Mercuriali', '', '', 'Conduc Column', ''),
(148, 'Sergio', 'Lapegüe', '', '', 'Conduc Column', ''),
(149, 'Norberto', 'Dupesso', '', '', 'Conduc Column', ''),
(150, 'Paula', 'Garcia Choren', '', '', 'Conduc Column', ''),
(151, 'Sandra', 'Borghi', '', '', 'Conduc Column', ''),
(152, 'Sebastian', 'Domenech', '', '', 'Conduc Column', ''),
(153, 'Sergio', 'Farella', '', '', 'Conduc Column', ''),
(154, 'Sergio', 'Rubin', '', '', 'Conduc Column', ''),
(155, 'Dominique', 'Metzger', '', '', 'Conduc Column', ''),
(156, 'Nazarena', 'Di Serio', '', '', 'Conduc Column', ''),
(157, 'Alejandro', 'Ramos', '', '', 'Conduc Column', ''),
(158, 'Eleo', 'Perez Caressi', '', '', 'Conduc Column', ''),
(159, 'Mario', 'Massaccesi', '', '', 'Conduc Column', ''),
(160, 'Federico', 'Seeber', '', '', 'Conduc Column', ''),
(161, 'Federico', 'Wiemeyer', '', '', 'Conduc Column', ''),
(162, 'Carolina', 'Amoroso', '', '', 'Conduc Column', ''),
(163, 'Nicolas', 'Wiñasky', '', '', 'Conduc Column', ''),
(164, 'Mario', 'Markic', '', '', 'Conduc Column', ''),
(165, 'Gustavo', 'Baabour', '', '', 'Deportes', ''),
(166, 'Pablo', 'Cecchini', '', '', 'Deportes', ''),
(167, 'Alex', 'Favieri Cavallo', '', '', 'Deportes', ''),
(168, 'Pablo', 'Brunetto', '', '', 'Deportes', ''),
(169, 'Sergio', 'Chiarito', '', '', 'Deportes', ''),
(170, 'Nicolas', 'Singer', '', '', 'Deportes', ''),
(171, 'Diego', 'Ruscitti', '', '', 'Deportes', ''),
(172, 'Juan', 'Butvilofsky', '', '', 'Deportes', ''),
(173, 'Leonardo', 'Paradizo', '', '', 'Deportes', ''),
(174, 'Enrique', 'Clur', '', '', 'Prod Esp', ''),
(175, 'Rodrigo', 'Alegre', '', '', 'Prod Esp', ''),
(176, 'Gustavo', 'Barco', '', '', 'Prod Esp', ''),
(177, 'Paula', 'Bernini', '', '', 'Prod Esp', ''),
(178, 'Gaston', 'Cavanagh', '', '', 'Prod Esp', ''),
(179, 'Daniel', 'Gordo Diaz', '', '', 'Prod Esp', ''),
(180, 'M.Eugenia', 'Duffard', '', '', 'Prod Esp', ''),
(181, 'Maxi', 'Heiderscheid', '', '', 'Prod Esp', ''),
(182, 'Yanina', 'Montanaro', '', '', 'Prod Esp', ''),
(183, 'Ignacio', 'Otero', '', '', 'Prod Esp', ''),
(184, 'Gerardo', 'Lozano', '', '', 'Camaras', ''),
(185, 'Marcelo', 'Funes', '', '', 'Camaras', ''),
(186, 'Mario', 'Sacchi', '', '', 'Camaras', ''),
(187, 'Adrian', 'Pomito', '', '', 'Camaras', ''),
(188, 'Hernan', 'Ramos', '', '', 'Camaras', ''),
(189, 'Martin', 'Villaverde', '', '', 'Camaras', ''),
(190, 'Daniel', 'Raichijk', '', '', 'Camaras', ''),
(191, 'Jorge', 'Soto Roa', '', '', 'Camaras', ''),
(192, 'David', 'Santistebe', '', '', 'Camaras', ''),
(193, 'Matias', 'Rebella', '', '', 'Camaras', ''),
(194, 'Ignacio', 'Marcalain', '', '', 'Camaras', ''),
(195, 'Javier', 'Kurcbart', '', '', 'Camaras', ''),
(196, 'Raul', 'Zambrani', '', '', 'Camaras', ''),
(197, 'Jorge', 'Sandoval', '', '', 'Camaras', ''),
(198, 'Gabriel', 'Sapori', '', '', 'Camaras', ''),
(199, 'Emilio', 'Tittamanti', '', '', 'Camaras', ''),
(200, 'Ernesto', 'Monzani', '', '', 'Camaras', ''),
(201, 'Osvaldo', 'Berisso', '', '', 'Camaras', ''),
(202, 'Oscar', 'Gonzalez', '', '', 'Camaras', ''),
(203, 'Carlos', 'Espiñeira', '', '', 'Camaras', ''),
(204, 'Carlos', 'Samaniego', '', '', 'Camaras', ''),
(205, 'Diego Alej', 'Garcia', '', '', 'Camaras', ''),
(206, 'Jose Luis', 'Mozzon', '', '', 'Camaras', ''),
(207, 'Eduardo', 'Esposito', '', '', 'Camaras', ''),
(208, 'German', 'Muñoz', '', '', 'Camaras', ''),
(209, 'Juan Pablo', 'Chaves', '', '', 'Camaras', ''),
(210, 'Federico', 'Gandolfi', '', '', 'Camaras', ''),
(211, 'Vicente', 'Tomeo', '', '', 'Camaras', ''),
(212, 'Mariano', 'La Gioia', '', '', 'Camaras', ''),
(213, 'Gaston', 'Presa', '', '', 'Camaras', ''),
(214, 'Fernando', 'Garcia', '', '', 'Camaras', ''),
(215, 'Diego', 'Spairani', '', '', 'Camaras', ''),
(216, 'Federico', 'Romero', '', '', 'Camaras', ''),
(217, 'Martin', 'Magaldi', '', '', 'Camaras', ''),
(218, 'Carlos', 'Sanchez Miguel', '', '', 'Camaras', ''),
(219, 'Nicolas', 'Gonzalez', '', '', 'Camaras', ''),
(220, 'Bruno', 'Mazzitelli', '', '', 'Camaras', ''),
(221, 'Leandro', 'Heredia', '', '', 'Camaras', ''),
(222, 'Victor', 'Gerardi', '', '', 'Edicion', ''),
(223, 'Oscar', 'Oliveri', '', '', 'Edicion', ''),
(224, 'Jonatan', 'Hurt', '', '', 'Edicion', ''),
(225, 'Mariano', 'Genova', '', '', 'Edicion', ''),
(226, 'Raul', 'Varela', '', '', 'Edicion', ''),
(227, 'Pablo', 'Carvajal', '', '', 'Edicion', ''),
(228, 'Oscar', 'Yannella', '', '', 'Edicion', ''),
(229, 'Brian', 'Psenne', '', '', 'Edicion', ''),
(230, 'Gonzalo', 'San Honorio', '', '', 'Edicion', ''),
(231, 'Natalia Ines', 'Fiori', '', '', 'Edicion', ''),
(232, 'Francisco', 'Alvarez', '', '', 'Edicion', ''),
(233, 'Alexis', 'Weimann', '', '', 'Edicion', ''),
(234, 'Alejandr', 'Pages Vila', '', '', 'Edicion', ''),
(235, 'Gladys', 'Zalazar', '', '', 'Edicion', ''),
(236, 'Hugo', 'Pereyra', '', '', 'Edicion', ''),
(237, 'Alejandro', 'Martinez', '', '', 'Edicion', ''),
(238, 'Fernando', 'Alhadeff', '', '', 'Directores', ''),
(239, 'Gustavo', 'Caperochipe', '', '', 'Directores', ''),
(240, 'Ezequiel', 'Rozados', '', '', 'Directores', ''),
(241, 'Sebastian', 'Romero', '', '', 'Directores', ''),
(242, 'Pab', 'Garcia De Weert', '', '', 'Directores', ''),
(243, 'Javier', 'Rosato', '', '', 'Directores', ''),
(244, 'Adrian', 'Rosende', '', '', 'Directores', ''),
(245, 'Javier Matias', 'Giusto', '', '', 'Directores', ''),
(246, 'Eugenio', 'Paschetto', '', '', 'Directores', ''),
(247, 'Fernando', 'Botto', '', '', 'Directores', ''),
(248, 'Fabian', 'Nievas', '', '', 'Directores', ''),
(249, 'Gustavo', 'Rivas', '', '', 'Directores', ''),
(250, 'Mariano', 'Martinez', '', '', 'Promociones', ''),
(251, 'Gaston', 'Cane', '', '', 'Promociones', ''),
(252, 'Ariel', 'Sopranzi', '', '', 'Promociones', ''),
(253, 'Leandro', 'Dorado', '', '', 'Promociones', ''),
(254, 'Alberto', 'Morelli', '', '', 'Archivo', ''),
(255, 'Marta', 'Urcola', '', '', 'Archivo', ''),
(256, 'Andrea', 'Raco', '', '', 'Archivo', ''),
(257, 'Fernando', 'Vigo', '', '', 'Archivo', ''),
(258, 'Grisel', 'Behocaray', '', '', 'Archivo', ''),
(259, 'Jose', 'Sanchez Duran', '', '', 'Archivo', ''),
(260, 'Manu', 'Lopez Otranto', '', '', 'Archivo', ''),
(261, 'Mauro', 'Maffei', '', '', 'Archivo', ''),
(262, 'M. Belen', 'Strassera', '', '', 'Archivo', ''),
(263, 'Guido Hugo', 'Fernandez', '', '', 'Archivo', ''),
(264, 'Christian', 'Busto', '', '', 'Archivo', ''),
(265, 'Mariela', 'Forto', '', '', 'Archivo', ''),
(266, 'Pablo Nahuel', 'Diaz', '', '', 'Archivo', ''),
(267, 'Dana', 'Di Vietro', '', '', 'Archivo', ''),
(268, 'Leandro', 'Sepulveda', '', '', 'Ingesta SAT', ''),
(269, 'Maria Cecilia', 'Ayesta', '', '', 'Ingesta SAT', ''),
(270, 'Debora', 'Loguercio', '', '', 'Ingesta SAT', ''),
(271, 'Ignacio', 'Mestrovic', '', '', 'Ingesta SAT', ''),
(272, 'Maria Laura', 'Vega', '', '', 'Ingesta SAT', ''),
(273, 'David', 'Marchetti', '', '', 'Ingesta SAT', ''),
(274, 'Ignac', 'Murillo Garay', '', '', 'Ingesta SAT', ''),
(275, 'Camila', 'Riaudo', '', '', 'Ingesta SAT', ''),
(276, 'Mayra', 'Riccardi', '', '', 'Ingesta SAT', ''),
(277, 'Sabrina', 'Tempo', '', '', 'Ingesta SAT', ''),
(278, 'Luis Maria', 'De Luca', '', '', 'CAN', ''),
(279, 'Anibal', 'Huerta', '', '', 'CAN', ''),
(280, 'Luis Martin', 'Avalos', '', '', 'CAN', ''),
(281, 'Diego', 'Sala', '', '', 'CAN', ''),
(282, 'Leonel', 'Stiuso', '', '', 'CAN', ''),
(283, 'Diego', 'Aguilera', '', '', 'CAN', ''),
(284, 'Andres', 'Candreva', '', '', 'CAN', ''),
(285, 'Paula', 'Funes', '', '', 'CAN', ''),
(286, 'Carlos', 'Verges', '', '', 'CAN', ''),
(287, 'Maria Laura', 'Diaz', '', '', 'CAN', ''),
(288, 'Guillermo', 'Victorica', '', '', 'CAN', ''),
(289, 'Guillermo', 'Rusconi', '', '', 'CAN', ''),
(290, 'Magali', 'Acosta Olivera', '', '', 'CAN', ''),
(291, 'Maria Soledad', 'Luque', '', '', 'Mesa', ''),
(292, 'Luciana', 'Golinelli', '', '', 'Mesa', ''),
(293, 'Emiliano', 'Santarelli', '', '', 'Mesa', ''),
(294, 'Belen', 'Cordero', '', '', 'Mesa', ''),
(295, 'Juan', 'Espinoza', '', '', 'Mesa', ''),
(296, 'Erika', 'Bonfanti', '', '', 'Administracion', ''),
(297, 'Yanina', 'Sibona', '', '', 'Redactor Web', ''),
(298, 'Stephan', 'Bailly', '', '', 'Redactor Web', ''),
(299, 'Martín', 'Pazos', '', '', 'Redactor Web', ''),
(300, 'Leandro', 'Chimenti', '', '', 'Redactor Web', ''),
(301, 'Luciana', 'Soria', '', '', 'Redactor Web', ''),
(302, 'Agustín', 'Ceruse', '', '', 'Redactor Web', ''),
(303, 'Mariano', 'Boettner', '', '', 'Redactor Web', ''),
(304, 'Pablo', 'Gravellone', '', '', 'Redactor Web', ''),
(305, 'Federico', 'Trabucci', '', '', 'Redactor Web', ''),
(306, 'Denis', 'Gerchkovich', '', '', 'Redactor Web', ''),
(307, 'Santiago', 'Alonso', '', '', 'Redactor Web', ''),
(308, 'Santiago', 'Martella', '', '', 'Redactor Web', ''),
(309, 'Alejo', 'Zagalsky', '', '', 'Redactor Web', ''),
(310, 'Damián', 'Blanco', '', '', 'Redactor Web', ''),
(311, 'Laura', 'Cabezas', '', '', 'Redactor Web', ''),
(312, 'Natalia', 'Sasso', '', '', 'Redactor Web', ''),
(313, 'Carlos', 'Iogna Prat', '', '', 'Redactor Web', ''),
(314, 'Marcela', 'Davin', '', '', 'Redactor Web', ''),
(315, 'Nicolás', 'Rocca', '', '', 'Redactor Web', ''),
(316, 'Bruno', 'Yacono', '', '', 'Redactor Web', ''),
(317, 'Andrés', 'Piccione', '', '', 'Redactor Web', ''),
(318, 'Oswaldo', 'Ramirez', '', '', 'Redactor Web', ''),
(319, 'Verónica', 'Pages', '', 'Redactor Web', '', ''),
(320, 'Miriam', 'Lewin', '', '', 'Redactor Web', ''),
(321, 'Agustín', 'Tonet', '', '', 'Redactor Web', ''),
(322, 'Jonathan', 'Wiktor', '', '', 'Redactor Web', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `evaluacion_plantilla1`
--
ALTER TABLE `evaluacion_plantilla1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_plantilla2`
--
ALTER TABLE `evaluacion_plantilla2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_plantilla3`
--
ALTER TABLE `evaluacion_plantilla3`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_plantilla4`
--
ALTER TABLE `evaluacion_plantilla4`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_plantilla5`
--
ALTER TABLE `evaluacion_plantilla5`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluacion_redactores`
--
ALTER TABLE `evaluacion_redactores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evaluacion_plantilla1`
--
ALTER TABLE `evaluacion_plantilla1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion_plantilla2`
--
ALTER TABLE `evaluacion_plantilla2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion_plantilla3`
--
ALTER TABLE `evaluacion_plantilla3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion_plantilla4`
--
ALTER TABLE `evaluacion_plantilla4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion_plantilla5`
--
ALTER TABLE `evaluacion_plantilla5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `evaluacion_redactores`
--
ALTER TABLE `evaluacion_redactores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
