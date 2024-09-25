-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2024 a las 18:58:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banin_pa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `nro_contrato` varchar(20) NOT NULL,
  `fecha_inicio` datetime NOT NULL,
  `fecha_fin` datetime DEFAULT NULL,
  `tiempo_contratacion` int(11) DEFAULT NULL,
  `valor_dia` float DEFAULT NULL,
  `honorario_mensual` float DEFAULT NULL,
  `valor_total` float DEFAULT NULL,
  `cod_vacante` varchar(30) DEFAULT NULL,
  `numero_documento` varchar(79) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

CREATE TABLE `coordinacion` (
  `id_coordinacion` varchar(10) NOT NULL,
  `nombre_c` varchar(90) DEFAULT NULL,
  `Id_tipoF` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `criterio_evaluacion`
--

CREATE TABLE `criterio_evaluacion` (
  `cod_vacante` varchar(30) DEFAULT NULL,
  `T_experiencia` float DEFAULT NULL,
  `T_poblacion_vulnerable` float DEFAULT NULL,
  `T_arraigo` float DEFAULT NULL,
  `T_certificacion_c` float DEFAULT NULL,
  `T_formacion_l` float DEFAULT NULL,
  `T_educacion` float DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `Id_tipo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `numero_documento` varchar(79) NOT NULL,
  `tipo_doc` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id_rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`numero_documento`, `tipo_doc`, `nombres`, `apellidos`, `email`, `telefono`, `id_rol`) VALUES
('19220321', 'Cédula de ciudadanía', 'Miguel Antonio', 'Morales Sánchez', 'migue2333@gmail.com', '344444444', '1'),
('52294893', 'Cédula de ciudadanía', 'Luz Helena', 'Quintana', 'luz67@gmail.com', '33467897890', '1'),
('79431471', 'Cédula de ciudadanía', 'Fabio', 'Sánchez', 'fabio89@gmail.com', '3222222222', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(10) NOT NULL,
  `nombre_rol` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
('1', 'Administrador'),
('2', 'Coordinador'),
('3', 'Instructor evaluador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_formacion`
--

CREATE TABLE `tipo_formacion` (
  `Id_tipoF` varchar(10) NOT NULL,
  `Descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `nombre_usuario` varchar(100) NOT NULL,
  `numero_documento` varchar(79) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`nombre_usuario`, `numero_documento`, `contraseña`) VALUES
('Fabio Ernesto', '79431471', '$2y$16$t4m85ckYBdlAF3TQUfvQ7OxfEnNyQ5t2IuPkZ5y1Le/Xwp0As5TVy'),
('Luz34', '52294893', '$2y$16$pDx4sxIoXRmgg8BPAIsHg.e/ZH6guSQ.c9ZQ8mwpVpfV6Kai8tlAy'),
('Miguel', '19220321', '$2y$16$jmpSd89/TKjNEBjTPftnR.17vDaETZcEDTMrhm1IkY.lXNYDgKOJ2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `cod_vacante` varchar(30) NOT NULL,
  `nombre_vacante` varchar(200) NOT NULL,
  `perfil_vacante` varchar(500) NOT NULL,
  `estado_BANIN` varchar(50) NOT NULL,
  `num_doc_evaluador` varchar(79) DEFAULT NULL,
  `nro_instr_req` int(11) DEFAULT NULL,
  `num_doc_candidato` varchar(79) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`nro_contrato`),
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `numero_documento` (`numero_documento`);

--
-- Indices de la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  ADD PRIMARY KEY (`id_coordinacion`),
  ADD KEY `Id_tipoF` (`Id_tipoF`);

--
-- Indices de la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `Id_tipo` (`Id_tipo`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_formacion`
--
ALTER TABLE `tipo_formacion`
  ADD PRIMARY KEY (`Id_tipoF`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`nombre_usuario`),
  ADD KEY `lfc` (`numero_documento`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`cod_vacante`),
  ADD KEY `num_doc_evaluador` (`num_doc_evaluador`),
  ADD KEY `num_doc_candidato` (`num_doc_candidato`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`numero_documento`) REFERENCES `persona` (`numero_documento`);

--
-- Filtros para la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  ADD CONSTRAINT `coordinacion_ibfk_1` FOREIGN KEY (`Id_tipoF`) REFERENCES `tipo_formacion` (`Id_tipoF`);

--
-- Filtros para la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  ADD CONSTRAINT `criterio_evaluacion_ibfk_1` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`),
  ADD CONSTRAINT `criterio_evaluacion_ibfk_2` FOREIGN KEY (`Id_tipo`) REFERENCES `tipo_formacion` (`Id_tipoF`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `lfc` FOREIGN KEY (`numero_documento`) REFERENCES `persona` (`numero_documento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `vacante_ibfk_1` FOREIGN KEY (`num_doc_evaluador`) REFERENCES `persona` (`numero_documento`),
  ADD CONSTRAINT `vacante_ibfk_2` FOREIGN KEY (`num_doc_candidato`) REFERENCES `persona` (`numero_documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
