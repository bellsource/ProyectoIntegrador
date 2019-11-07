-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 04-11-2019 a las 20:47:57
-- Versión del servidor: 5.7.26-0ubuntu0.18.10.1
-- Versión de PHP: 7.2.19-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_libroscoolto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `nombre` text NOT NULL,
  `id` int(11) NOT NULL,
  `apellido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`nombre`, `id`, `apellido`) VALUES
('JK', 1, 'ROWLING'),
('STEPHEN', 2, 'KING');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` int(11) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_libro`
--

CREATE TABLE `carrito_libro` (
  `id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

CREATE TABLE `editoriales` (
  `id` int(11) NOT NULL,
  `editorial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `id` int(11) NOT NULL,
  `genero` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`id`, `genero`) VALUES
(1, 'Fantasia'),
(2, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idiomas`
--

CREATE TABLE `idiomas` (
  `id` int(11) NOT NULL,
  `idioma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `idiomas`
--

INSERT INTO `idiomas` (`id`, `idioma`) VALUES
(1, 'ingles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `autor_id` int(11) NOT NULL,
  `genero_id` int(11) NOT NULL,
  `precio` float NOT NULL,
  `editorial_id` int(11) NOT NULL,
  `peso` float NOT NULL,
  `edicion` date NOT NULL,
  `idioma_id` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`id`, `titulo`, `autor_id`, `genero_id`, `precio`, `editorial_id`, `peso`, `edicion`, `idioma_id`, `activo`) VALUES
(1, 'Harry Potter y la piedra filosofal', 1, 1, 3000, 1, 674, '2003-02-02', 1, 1),
(2, 'El resplandor', 2, 2, 4500, 2, 758, '1998-09-09', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro_palabra`
--

CREATE TABLE `libro_palabra` (
  `id` int(11) NOT NULL,
  `libro_id` int(11) NOT NULL,
  `palabra_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabras`
--

CREATE TABLE `palabras` (
  `id` int(11) NOT NULL,
  `palabra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `palabras`
--

INSERT INTO `palabras` (`id`, `palabra`) VALUES
(1, 'magia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `palabra_palabra`
--

CREATE TABLE `palabra_palabra` (
  `id` int(11) NOT NULL,
  `palabra_id` int(11) NOT NULL,
  `palabra_id2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `mail` text NOT NULL,
  `domicilio` int(11) NOT NULL,
  `telefono` text NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `carrito_id` int(11) NOT NULL,
  `total` float NOT NULL,
  `fecha` date NOT NULL,
  `forma_de_pago` text NOT NULL,
  `tipo_de_envio` text NOT NULL,
  `descuento` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autores`
--
ALTER TABLE `autores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carrito_libro`
--
ALTER TABLE `carrito_libro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `editoriales`
--
ALTER TABLE `editoriales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `idiomas`
--
ALTER TABLE `idiomas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libro_palabra`
--
ALTER TABLE `libro_palabra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `palabras`
--
ALTER TABLE `palabras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `palabra_palabra`
--
ALTER TABLE `palabra_palabra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
