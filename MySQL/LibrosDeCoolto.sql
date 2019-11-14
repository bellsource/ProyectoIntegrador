-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 14-11-2019 a las 21:37:32
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `LibrosDeCoolto`
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
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `domicilio` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `admin.` tinyint(1) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `domicilio`, `telefono`, `admin.`, `pass`) VALUES
(1, 'Anfres1', 'apellido', 'email@email', 'Lima 666', 1120671561, 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

