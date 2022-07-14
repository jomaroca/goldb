-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 09:32:54
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `goldb`
--
CREATE DATABASE IF NOT EXISTS `goldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `goldb`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entrenadores`
--

CREATE TABLE `entrenadores` (
  `ID_entrenador` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `ID_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `entrenadores`
--

INSERT INTO `entrenadores` (`ID_entrenador`, `Nombre`, `ID_equipo`) VALUES
(1, 'Johan Cruyff', 1),
(2, 'John Toshack', 2),
(3, 'Arrigo Sacchi', 3),
(4, 'Giovanni Trapattoni', 4),
(5, 'Alexander Ferguson', 5),
(6, 'Graeme Souness', 6),
(7, 'Dettmar Cramer', 7),
(8, 'Stefan Kovacs', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `ID_equipo` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Temporada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `equipos`
--

INSERT INTO `equipos` (`ID_equipo`, `Nombre`, `Temporada`) VALUES
(1, 'FC Barcelona', 1993),
(2, 'Real Madrid', 1989),
(3, 'AC Milan', 1989),
(4, 'Juventus FC', 1984),
(5, 'Manchester United', 1992),
(6, 'Liverpool FC', 1992),
(7, 'Bayern Munich', 1975),
(8, 'Ajax Ámsterdam', 1972);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugadores`
--

CREATE TABLE `jugadores` (
  `ID_jugador` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Posición` varchar(25) NOT NULL,
  `Edad` int(25) NOT NULL,
  `Partidos` int(25) NOT NULL,
  `Goles` int(25) NOT NULL,
  `ID_equipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jugadores`
--

INSERT INTO `jugadores` (`ID_jugador`, `Nombre`, `Posición`, `Edad`, `Partidos`, `Goles`, `ID_equipo`) VALUES
(1, 'Zubizarreta', 'POR', 32, 46, -49, 1),
(2, 'Ferrer', 'LTD', 23, 52, 0, 1),
(3, 'Koeman', 'DFC', 30, 50, 19, 1),
(4, 'Nadal', 'DFC', 27, 50, 0, 1),
(5, 'Sergi', 'LTI', 22, 35, 1, 1),
(6, 'Guardiola', 'MCD', 22, 48, 0, 1),
(7, 'Amor', 'MC', 26, 53, 11, 1),
(8, 'Bakero', 'MC', 30, 46, 8, 1),
(9, 'Laudrup', 'MCO', 29, 40, 6, 1),
(10, 'Stoichkov', 'SD', 27, 48, 24, 1),
(11, 'Romário', 'DC', 27, 47, 32, 1),
(12, 'Buyo', 'POR', 31, 46, -38, 2),
(13, 'Chendo', 'LTD', 28, 46, 1, 2),
(14, 'Ruggeri', 'DFC', 27, 39, 3, 2),
(15, 'Sanchis', 'DFC', 24, 45, 3, 2),
(16, 'Gordillo', 'LTI', 32, 41, 0, 2),
(17, 'Hierro', 'MCD', 21, 46, 7, 2),
(18, 'Míchel', 'MC', 26, 46, 10, 2),
(19, 'Martín Vázquez', 'MC', 24, 42, 15, 2),
(20, 'Schuster', 'MCO', 30, 36, 6, 2),
(21, 'Butragueño', 'SD', 26, 40, 14, 2),
(22, 'Hugo Sánchez', 'DC', 31, 44, 42, 2),
(23, 'Pazzagli', 'POR', 29, 24, -15, 3),
(24, 'Tassotti', 'LTD', 29, 39, 3, 3),
(25, 'Costacurta', 'DFC', 23, 36, 1, 3),
(26, 'Baresi', 'DFC', 29, 39, 1, 3),
(27, 'Maldini', 'LTI', 21, 41, 1, 3),
(28, 'Rijkaard', 'MCD', 27, 41, 4, 3),
(29, 'Ancelotti', 'MC', 30, 31, 3, 3),
(30, 'Donadoni', 'MD', 26, 30, 4, 3),
(31, 'Evani', 'MI', 26, 44, 6, 3),
(32, 'Gullit', 'MCO', 27, 3, 0, 3),
(33, 'Van Basten', 'DC', 25, 36, 23, 3),
(34, 'Tacconi', 'POR', 27, 18, -19, 4),
(35, 'Favero', 'LTD', 27, 40, 0, 4),
(36, 'Brio', 'DFC', 28, 22, 1, 4),
(37, 'Scirea', 'DFC', 31, 40, 2, 4),
(38, 'Cabrini', 'LTI', 27, 40, 0, 4),
(39, 'Bonini', 'MCD', 25, 39, 1, 4),
(40, 'Tardelli', 'MC', 30, 37, 3, 4),
(41, 'Platini', 'MCO', 29, 40, 25, 4),
(42, 'Boniek', 'ED', 28, 36, 9, 4),
(43, 'Briaschi', 'EI', 26, 37, 15, 4),
(44, 'Rossi', 'DC', 28, 37, 8, 4),
(45, 'Schmeichel', 'POR', 29, 43, -31, 5),
(46, 'Parker', 'LTD', 28, 32, 1, 5),
(47, 'Bruce', 'DFC', 32, 44, 5, 5),
(48, 'Pallister', 'DFC', 27, 44, 1, 5),
(49, 'Irwin', 'LTI', 27, 42, 5, 5),
(50, 'Ince', 'MCD', 25, 42, 6, 5),
(51, 'Robson', 'MC', 35, 15, 1, 5),
(52, 'Kanchelskis', 'MD', 23, 28, 3, 5),
(53, 'Sharpe', 'MI', 21, 27, 1, 5),
(54, 'Cantona', 'SD', 26, 22, 9, 5),
(55, 'Hughes', 'DC', 29, 43, 15, 5),
(56, 'Grobbelaar', 'POR', 35, 8, -15, 6),
(57, 'Jones', 'LTD', 21, 32, 0, 6),
(58, 'Nicol', 'DFC', 31, 34, 0, 6),
(59, 'Wright', 'DFC', 29, 37, 3, 6),
(60, 'Bjornebye', 'LTI', 23, 11, 0, 6),
(61, 'Redknapp', 'MCD', 19, 33, 2, 6),
(62, 'Molby', 'MC', 29, 12, 3, 6),
(63, 'Whelan', 'MC', 31, 18, 1, 6),
(64, 'McManaman', 'MD', 20, 34, 5, 6),
(65, 'Barnes', 'MI', 29, 27, 5, 6),
(66, 'Rush', 'DC', 31, 37, 20, 6),
(67, 'Maier', 'POR', 31, 45, -57, 7),
(68, 'Hansen', 'LTD', 32, 19, 0, 7),
(69, 'Schwarzenbeck', 'DFC', 27, 43, 1, 7),
(70, 'Beckenbauer', 'DFC', 30, 45, 5, 7),
(71, 'Horsmann', 'LTI', 23, 41, 1, 7),
(72, 'Roth', 'MCD', 29, 37, 7, 7),
(73, 'Dürnberger', 'MC', 22, 43, 8, 7),
(74, 'Kapellmann', 'MC', 26, 40, 6, 7),
(75, 'Hoeness', 'MCO', 23, 22, 4, 7),
(76, 'Rummenigge', 'SD', 20, 43, 11, 7),
(77, 'Gerd Müller', 'DC', 30, 28, 28, 7),
(78, 'Stuy', 'POR', 28, 45, -26, 8),
(79, 'Suurbier', 'LTD', 28, 45, 0, 8),
(80, 'Blankenburg', 'DFC', 25, 42, 1, 8),
(81, 'Hulshoff', 'DFC', 26, 43, 3, 8),
(82, 'Krol', 'LTI', 24, 46, 4, 8),
(83, 'Haan', 'MCD', 24, 44, 18, 8),
(84, 'Neeskens', 'MC', 21, 43, 8, 8),
(85, 'Mühren', 'MC', 27, 42, 14, 8),
(86, 'Rep', 'ED', 21, 34, 21, 8),
(87, 'Keizer', 'EI', 30, 41, 14, 8),
(88, 'Cruyff', 'SD', 26, 36, 22, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `Nombre`, `Email`, `Password`, `Enabled`) VALUES
(1, 'Jack Blue', 'jack@blue.com', '$2y$10$ePi4sgyEAFH8.3jvNzkC1eMGSXeps16n54hB6H8qdY7VMEmsW9Hlu', 1),
(2, 'Adam Smith', 'adam@smith.com', '$2y$10$5aWGjjzIao7X4ggSDKjj4.SHa9bdYH.VCmv26kNoDSZzwIhVdvBje', 0),
(3, 'Herman Finn', 'herman@suite.com', '$2y$10$01ZQsGF715li9yxIDUDrrugxjl9CZzwiAMRzAa.cB6H56qK9ug/fa', 0),
(4, 'William Defoe', 'william@defoe.com', '$2y$10$RJZHp5rm87cVZ5gEpZGBoOJ68fLBUenMpeRKRgJLrgaPSJmmlMaBa', 0),
(5, 'Burt Feynolds', 'burt@feynolds.com', '$2y$10$374hBH.P.q/i4zyuT10ZFuNA0FSrfwI8LEoYftWR05xJgNKCfdAiK', 0),
(6, 'Martin King', 'martin@king.com', '$2y$10$aZdR9cpbS1sUoyeFcaPpr.sRjc1U3YDh15aPqLdcLX136B2fCT7Am', 0),
(7, 'John Atbukle', 'john@atbukle.com', '$2y$10$KTBpELQ7iiNFlhBHgTriQuxiZFAkio0GDlgdLIf7fY8iUt9vvk6Eq', 0),
(8, 'Catherine Duck', 'catherine@duck.com', '$2y$10$TlxtdCl/YKZ6TXsiulYAheLHJH6hqBRTH2fXNQShkGAjMvloo/SEC', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD PRIMARY KEY (`ID_entrenador`),
  ADD UNIQUE KEY `ID_equipo` (`ID_equipo`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`ID_equipo`);

--
-- Indices de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD PRIMARY KEY (`ID_jugador`),
  ADD KEY `ID_equipo` (`ID_equipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  MODIFY `ID_entrenador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `ID_equipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `jugadores`
--
ALTER TABLE `jugadores`
  MODIFY `ID_jugador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entrenadores`
--
ALTER TABLE `entrenadores`
  ADD CONSTRAINT `entrenadores_ibfk_1` FOREIGN KEY (`ID_equipo`) REFERENCES `equipos` (`ID_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jugadores`
--
ALTER TABLE `jugadores`
  ADD CONSTRAINT `jugadores_ibfk_1` FOREIGN KEY (`ID_equipo`) REFERENCES `equipos` (`ID_equipo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
