-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2019 a las 23:03:57
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `librosdecoolto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `estado` enum('ACTIVO','','','') COLLATE latin1_spanish_ci NOT NULL,
  `usuario_id` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_libro`
--

CREATE TABLE `carrito_libro` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `libro_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `carrito_id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `cantidad` int(6) NOT NULL,
  `precio` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `editorial` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `genero` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `idioma` enum('CASTELLANO','INGLES','','') COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `titulo` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `autor_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `genero_id` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `precio` double(4,2) NOT NULL,
  `editorial_id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `peso` int(3) NOT NULL,
  `edicion` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `idioma_id` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `activo` enum('SI','NO','','') COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_palabra`
--

CREATE TABLE `libro_palabra` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `libro_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `palabra_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras`
--

CREATE TABLE `palabras` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `palabra` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabra_palabra`
--

CREATE TABLE `palabra_palabra` (
  `id` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `palabra_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `silaba_id` varchar(50) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` varchar(15) COLLATE latin1_spanish_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `domicilio` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `admin` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `carrito_id` int(15) NOT NULL,
  `total` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `forma_de_pago` enum('MERCADO PAGO','TARJETA DE CREDITO','','') COLLATE latin1_spanish_ci NOT NULL,
  `tipo_de_envio` enum('MERCADO ENVIO','CORREO ARGENTINO','','') COLLATE latin1_spanish_ci NOT NULL,
  `descuento` enum('TARJETA 365','CLUB LA NACION','','') COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrito_libro`
--
ALTER TABLE `carrito_libro`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `libro_palabra`
--
ALTER TABLE `libro_palabra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `palabras`
--
ALTER TABLE `palabras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `palabra_palabra`
--
ALTER TABLE `palabra_palabra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
