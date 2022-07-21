-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2021 a las 04:50:55
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `noticias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` bigint(20) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `img` text NOT NULL,
  `contenido` text NOT NULL,
  `categoria` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `titulo`, `img`, `contenido`, `categoria`, `fecha`) VALUES
(71, 'Torno nuevo!', 'torneria.jpg1637207017', ' El torno para madera es la máquina que hace girar la pieza de madera, sobre la que se utiliza la herramienta de corte para darle forma. Está compuesto por varias partes: ... Soporte para herramientas. ', 0, '2021-11-18 03:46:57'),
(72, 'Progresos Con el Aprendizaje Mecanico', 'cómo-funciona-un-mecánico.jpg1637207141', 'Un automóvil, también denominado coche, carro, auto, etc; es un vehículo motorizado con ruedas utilizado para el transporte.', 0, '2021-11-18 03:45:41'),
(73, 'Los chicos trabajan con Arduino	', 'wp2163549.jpg1637207306', 'El arduino es una placa que tiene todos los elementos necesarios para conectar periféricos a las entradas y salidas de un microcontrolador. Es decir, es una placa impresa con los componentes necesarios para que funcione el microcontrolador y su comunicación con un ordenador a través de la comunicación serial.', 0, '2021-11-18 03:48:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticias`z