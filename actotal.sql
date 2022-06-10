-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-03-2021 a las 19:33:49
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `actotal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `name` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`name`, `email`, `phone`, `Date`) VALUES
('234234234', 'nachoanime1@hotmail.com', '92135263', '2021-03-19 07:32:48'),
('3434', 'gallardoignacio1995@gmail.com', '92135263', '2021-03-19 07:32:45'),
('aaaaaa', 'nachoanime1@hotmail.com', '92135263', '2021-03-19 07:29:32'),
('asd', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:25:30'),
('asdasdasdasd', 'gallardoignacio1995@gmail.com', '92135263', '2021-03-19 07:31:26'),
('aseasease', 'a@asdas.com', '99293924', '2021-03-19 07:32:26'),
('ddd', 'nachoanime1@hotmail.com', '92135263', '2021-03-19 07:31:22'),
('dddddd', 'gallardoignacio1995@gmail.com', '92135263', '2021-03-19 07:31:58'),
('dedededed', 'nachoanime1@hotmail.com', '99293924', '2021-03-19 07:32:22'),
('dfdfdf', 'a@asdas.com', 'sd', '2021-03-19 07:32:07'),
('fdfdf', 'gallardoignacio1995@gmail.com', '92135263', '2021-03-19 07:32:03'),
('fefef', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:32:18'),
('ignacioeee', 'gallardoignacio1995@gmail.com', '98001120', '2021-03-19 07:31:46'),
('laura ', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:28:24'),
('laura aaaaa', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:31:53'),
('q', 'nachoanime1@hotmail.com', 'q', '2021-03-19 07:32:39'),
('qqq', 'tecnicomvd@sanmiguelglobal.com', '92135263', '2021-03-19 07:31:40'),
('sss', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:31:19'),
('werwer', 'gallardoignacio1995@gmail.com', '99293924', '2021-03-19 07:32:57'),
('wwww', 'a@asdas.com', '92078197', '2021-03-19 07:31:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
