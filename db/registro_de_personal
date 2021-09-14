-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-09-2021 a las 06:11:53
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_de_personal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comerciantes`
--

CREATE TABLE `comerciantes` (
  `id_com` int(11) NOT NULL,
  `numero_caseta_com` varchar(10) DEFAULT NULL,
  `nombres_com` varchar(50) DEFAULT NULL,
  `apellidos_com` varchar(50) DEFAULT NULL,
  `codigo_com` varchar(30) DEFAULT NULL,
  `carnet_com` int(11) DEFAULT NULL,
  `direccion_com` varchar(150) DEFAULT NULL,
  `observaciones_com` text DEFAULT NULL,
  `id_rubro` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comerciantes`
--

INSERT INTO `comerciantes` (`id_com`, `numero_caseta_com`, `nombres_com`, `apellidos_com`, `codigo_com`, `carnet_com`, `direccion_com`, `observaciones_com`, `id_rubro`) VALUES
(1, '522', 'Henry perez gumiel', '', 'En Tramite', 6768, 'av. huayna kapac', '', 'Arquitecto'),
(2, '25', 'henry perez gumiel', '', 'En Tramite', 5251334, 'colcapirhua', '', 'Arquitecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `id_kardex` int(11) NOT NULL,
  `nombres_kardex` varchar(50) DEFAULT NULL,
  `apellido_paterno_kardex` varchar(200) NOT NULL,
  `apellido_materno_kardex` varchar(200) NOT NULL,
  `codigo_afiliado_kardex` varchar(15) DEFAULT NULL,
  `codigo_licencia_kardex` varchar(15) DEFAULT NULL,
  `lugar_nacimiento_kardex` varchar(100) DEFAULT NULL,
  `nacimiento_kardex` date DEFAULT NULL,
  `ci_kardex` varchar(15) DEFAULT NULL,
  `ci_exp_kardex` varchar(5) NOT NULL,
  `estado_civil_kardex` varchar(20) DEFAULT NULL,
  `profesion_kardex` varchar(100) DEFAULT NULL,
  `antiguedad_kardex` date DEFAULT NULL,
  `domicilio_kardex` varchar(150) DEFAULT NULL,
  `telefonos_kardex` varchar(50) DEFAULT NULL,
  `comercializa_kardex` varchar(100) DEFAULT NULL,
  `ubicacion_puesto_kardex` varchar(100) DEFAULT NULL,
  `caseta_numero_kardex` varchar(15) DEFAULT NULL,
  `observacion_kardex` varchar(200) DEFAULT NULL,
  `fecha_kardex` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`id_kardex`, `nombres_kardex`, `apellido_paterno_kardex`, `apellido_materno_kardex`, `codigo_afiliado_kardex`, `codigo_licencia_kardex`, `lugar_nacimiento_kardex`, `nacimiento_kardex`, `ci_kardex`, `ci_exp_kardex`, `estado_civil_kardex`, `profesion_kardex`, `antiguedad_kardex`, `domicilio_kardex`, `telefonos_kardex`, `comercializa_kardex`, `ubicacion_puesto_kardex`, `caseta_numero_kardex`, `observacion_kardex`, `fecha_kardex`) VALUES
(1, 'henry', 'perez', 'gumiel', '2132', '1231', 'oruro', '2017-10-25', '5251334', 'CB', 'casado', '', '2017-10-26', 'huaynaca', '70307735', 'pantalones', '', '', '', '2017-10-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubro`
--

CREATE TABLE `rubro` (
  `id_rubro` int(11) NOT NULL,
  `nombre_rubro` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rubro`
--

INSERT INTO `rubro` (`id_rubro`, `nombre_rubro`) VALUES
(1, 'Ingeniero'),
(4, 'Ama de casa'),
(5, 'Arquitecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usu` int(11) NOT NULL,
  `login_usu` varchar(20) NOT NULL,
  `pass_usu` varchar(20) NOT NULL,
  `email_usu` varchar(50) NOT NULL,
  `tipo_usu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usu`, `login_usu`, `pass_usu`, `email_usu`, `tipo_usu`) VALUES
(9, 'pamela', 'pamela123', 'pamela@pame.com', 2),
(10, 'admin', 'admin', 'admin@gmail.com', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comerciantes`
--
ALTER TABLE `comerciantes`
  ADD PRIMARY KEY (`id_com`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`id_kardex`);

--
-- Indices de la tabla `rubro`
--
ALTER TABLE `rubro`
  ADD PRIMARY KEY (`id_rubro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comerciantes`
--
ALTER TABLE `comerciantes`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `kardex`
--
ALTER TABLE `kardex`
  MODIFY `id_kardex` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rubro`
--
ALTER TABLE `rubro`
  MODIFY `id_rubro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
