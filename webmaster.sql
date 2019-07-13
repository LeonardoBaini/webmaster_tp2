-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2019 a las 08:42:19
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webmaster`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `descripcion`) VALUES
(1, 'Almacen'),
(2, 'Ropa'),
(3, 'Servicios'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `gasto_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`gasto_id`, `usuario_id`, `categoria_id`, `monto`, `fecha`) VALUES
(1, 1, 1, 1000, '2019-07-06 00:00:00'),
(2, 1, 2, 2000, '2019-07-06 00:00:00'),
(3, 1, 4, 4327, '2019-07-06 00:00:00'),
(4, 1, 3, 2300, '2019-07-06 00:00:00'),
(5, 1, 4, 1500, '2019-07-06 00:00:00'),
(6, 1, 2, 234, '2019-07-06 00:00:00'),
(7, 1, 2, 344, '2019-07-06 00:00:00'),
(16, 1, 1, 11111, '0000-00-00 00:00:00'),
(17, 1, 1, 11111, '2019-07-06 01:52:29'),
(18, 1, 1, 11111, '2019-07-06 01:52:36'),
(19, 1, 1, 11111, '2019-07-06 01:53:18'),
(20, 1, 1, 11111, '2019-07-06 01:53:22'),
(21, 1, 3, 5000, '2019-07-06 02:17:49'),
(22, 1, 2, 6000, '2019-07-06 02:18:06'),
(23, 1, 3, 7000, '2019-07-06 02:20:03'),
(24, 1, 3, 7000, '2019-07-06 02:28:15'),
(25, 1, 1, 23, '2019-07-06 02:32:44'),
(26, 1, 3, 1000, '2019-07-06 12:32:57'),
(27, 1, 2, 4505050, '2019-07-12 23:49:49'),
(28, 1, 3, 9090, '2019-07-13 02:31:50'),
(29, 1, 2, 6000, '2019-07-13 02:53:59'),
(30, 1, 3, 333, '2019-07-13 03:29:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `user_id` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`user_id`, `usuario`, `password`, `mail`) VALUES
(1, 'lbaini', 'leo123', 'bainileonardo@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`gasto_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `gasto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
