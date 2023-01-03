-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2022 a las 03:33:57
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT 1,
  `nombre_admin` varchar(50) DEFAULT NULL,
  `pass_admin` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `id_rol`, `nombre_admin`, `pass_admin`) VALUES
(1, 1, 'oloCastro', 'admin-01'),
(2, 1, 'ivaniel', 'admin-02'),
(3, 1, 'neriberto', 'admin-03'),
(4, 1, 'test', 'test12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `id_cita` int(11) NOT NULL,
  `email_fk` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mascotaNombre` varchar(50) NOT NULL,
  `especie` varchar(50) NOT NULL,
  `raza` varchar(50) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `vacuna` varchar(50) NOT NULL,
  `fechaCita` varchar(15) DEFAULT NULL,
  `horaCita` varchar(15) DEFAULT NULL,
  `servicios` varchar(50) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'No atendido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`id_cita`, `email_fk`, `nombre`, `mascotaNombre`, `especie`, `raza`, `sexo`, `vacuna`, `fechaCita`, `horaCita`, `servicios`, `observacion`, `estado`) VALUES
(9, 'juanPerez@gmail.com', 'Juan Perez', 'Mochi', 'Perro', 'Buldog', 'Macho', 'No', '2022-11-15', '12:31', 'veterinaria', '', 'Atendido'),
(10, 'juanPerez@gmail.com', 'Juan Perez', 'Mochi', 'Perro', 'Buldog', 'Macho', 'No', '2022-12-05', '00:31', 'peluqería', '', 'No atendido'),
(11, 'luisgomez@gmail.com', 'Luis Gomez', 'kity', 'Gato', 'Chihuahua ', 'macho', 'si', '2022-11-29', '12:42', 'peluqería', 'Es alérgico al champú que contenga avena.', 'No atendido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contact` int(11) NOT NULL,
  `nombre_contac` varchar(50) DEFAULT NULL,
  `correo_contac` varchar(50) DEFAULT NULL,
  `telefono_contac` varchar(30) DEFAULT NULL,
  `mensaje` varchar(100) DEFAULT NULL,
  `estado` varchar(20) NOT NULL DEFAULT 'No respondido'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contact`, `nombre_contac`, `correo_contac`, `telefono_contac`, `mensaje`, `estado`) VALUES
(1, 'Gabriel Herrera', 'apiprueba@yopmail.com', '6111-2222', 'Mensaje de Prueba', 'Respondido'),
(2, 'maría Belén', 'belen@gmail.com', '6111-1111', 'Mensaje de prueba número 2, para saber si está funcionando correctamente bien el código.', 'No respondido'),
(3, 'Ivan Diaz', 'diaz@gmail.com', '6111-3333', 'Tercer mensaje de prueba', 'No respondido'),
(4, 'Daniel Gonzalez', 'danigz@gmail.com', '6277777', 'Mensaje de prueba para seguir probando el código.', 'No respondido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `id_rol` int(11) DEFAULT 2,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` text DEFAULT NULL,
  `mascotaNombre` varchar(50) DEFAULT NULL,
  `especie` varchar(50) DEFAULT NULL,
  `raza` varchar(50) DEFAULT NULL,
  `size` text DEFAULT NULL,
  `fechaNacimiento` varchar(15) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `vacuna` varchar(5) DEFAULT NULL,
  `color` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `id_rol`, `nombre`, `apellido`, `telefono`, `email`, `pass`, `mascotaNombre`, `especie`, `raza`, `size`, `fechaNacimiento`, `sexo`, `vacuna`, `color`) VALUES
(1, 2, 'Juan', 'Perez', '233-555', 'juanPerez@gmail.com', 'user12345', 'Mochi', 'Perro', 'Buldog', '32cm', '18/11/2023', 'Macho', 'Si', 'Chocolate y Blanco'),
(2, 2, 'Luis', 'Gomez', '6255-3333', 'luisgomez@gmail.com', '456', 'kity', 'Gato', 'Chihuahua ', '7cm', '2022-11-02', 'macho', 'si', 'blanco'),
(5, 2, 'Guillermo', 'Smith', '6277777', 'guilllermo@gmail.com', 'c789', 'firulay', 'Perro', 'Chihuahua ', '5cm', '2020-02-04', 'Macho', 'si', 'blanco'),
(6, 2, 'David', 'James', '6377-8888', 'davidjames@hotmail.com', 'd12345', 'colmillo', 'Perro', 'Husky Siberiano', 'grande', '2022-11-11', 'macho', 'si', 'Blanco y negro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `fk_id_roles` (`id_rol`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`id_cita`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cita`
--
ALTER TABLE `cita`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `fk_id_roles` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
