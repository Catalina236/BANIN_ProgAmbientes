-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 09-10-2024 a las 12:03:35
-- Versión del servidor: 10.6.19-MariaDB-cll-lve
-- Versión de PHP: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cidesafc_banin_pa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignacion_instructores`
--

CREATE TABLE `asignacion_instructores` (
  `cod_vacante` varchar(30) NOT NULL,
  `numero_documento_instructor` varchar(79) NOT NULL,
  `fecha_asignacion` timestamp NOT NULL DEFAULT current_timestamp(),
  `observaciones` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignacion_instructores`
--

INSERT INTO `asignacion_instructores` (`cod_vacante`, `numero_documento_instructor`, `fecha_asignacion`, `observaciones`) VALUES
('1234', '12345', '2024-10-09 16:58:49', 'Asignación adicional'),
('1234', '79408514', '2024-10-09 16:58:49', 'Asignación inicial'),
('1234', '79965721', '2024-10-09 16:58:49', 'Asignación inicial'),
('26378', '79408514', '2024-10-09 16:58:49', 'Asignación inicial'),
('26378', '79965721', '2024-10-09 16:58:49', 'Asignación inicial'),
('27486', '79408514', '2024-10-09 16:58:49', 'Asignación inicial'),
('32900', '52294893', '2024-10-09 16:58:49', 'Asignación inicial'),
('32900', '79408514', '2024-10-09 16:58:49', 'Asignación inicial'),
('32926', '19220321', '2024-10-09 16:58:49', 'Asignación inicial'),
('32926', '79408514', '2024-10-09 16:58:49', 'Asignación inicial');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE `candidato` (
  `id_coordinacion_inicial` varchar(10) NOT NULL,
  `id_coordinacion_final` varchar(10) DEFAULT NULL,
  `traslado` varchar(255) DEFAULT NULL,
  `reclamacion` varchar(255) DEFAULT NULL,
  `proteccion` varchar(255) DEFAULT NULL,
  `id_aspiracion` varchar(50) DEFAULT NULL,
  `tipo_doc` varchar(100) DEFAULT NULL,
  `numero_documento` varchar(100) NOT NULL,
  `nombre_completo` varchar(200) DEFAULT NULL,
  `estadoBANIN` varchar(50) DEFAULT NULL,
  `cod_vacante` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`id_coordinacion_inicial`, `id_coordinacion_final`, `traslado`, `reclamacion`, `proteccion`, `id_aspiracion`, `tipo_doc`, `numero_documento`, `nombre_completo`, `estadoBANIN`, `cod_vacante`) VALUES
('1', '1', 'Traslado aprobado', '', '', '175637', 'CC', '1000121831', 'Candidato 1', 'No cumple', '1234'),
('2', '2', 'Pendiente de aprobación', '', '', '202007', 'CC', '1000235523', 'Candidato 2', 'No cumple', '26378'),
('2', '2', 'Observación importante', '', '', '139753', 'CC', '10004680265', 'Candidato 3', 'Seleccionado', '27486'),
('3', '2', 'Traslado realizado', '', '', '201692', 'CC', '1000576994', 'Candidato 4', 'Si cumple', '32900'),
('3', '3', 'Necesita seguimiento', '', '', '164555', 'CC', '10006862905', 'Candidato 5', 'Seleccionado', '32926'),
('1', '3', 'Observación adicional', '', '', '184287', 'CC', '1001347425', 'Candidato 6', 'No cumple', '1234'),
('2', '1', 'Requiere aprobación', '', '', '161549', 'CC', '1010162787', 'Candidato 7', 'No cumple', '27486'),
('3', '3', 'Sin observaciones', '', '', '169339', 'CC', '1010167370', 'Candidato 8', 'Si cumple', '32900');

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

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`nro_contrato`, `fecha_inicio`, `fecha_fin`, `tiempo_contratacion`, `valor_dia`, `honorario_mensual`, `valor_total`, `cod_vacante`, `numero_documento`) VALUES
('C001', '2024-01-01 08:00:00', '2024-12-31 17:00:00', 12, 100, 3000, 36000, '1234', '1000121831'),
('C002', '2024-02-01 08:00:00', '2024-07-31 17:00:00', 6, 150, 4500, 27000, '26378', '1000235523'),
('C003', '2024-03-01 08:00:00', '2024-09-30 17:00:00', 7, 120, 3600, 25200, '27486', '10004680265'),
('C004', '2024-04-01 08:00:00', '2024-10-31 17:00:00', 7, 130, 3900, 27300, '32900', '1000576994'),
('C005', '2024-05-01 08:00:00', '2024-11-30 17:00:00', 7, 140, 4200, 29400, '32926', '10006862905'),
('C006', '2024-06-01 08:00:00', '2024-08-31 17:00:00', 3, 110, 3300, 9900, '1234', '1001347425'),
('C007', '2024-07-01 08:00:00', '2024-09-30 17:00:00', 3, 125, 3750, 11250, '27486', '1010162787'),
('C008', '2024-08-01 08:00:00', '2024-10-31 17:00:00', 3, 135, 4050, 12150, '32900', '1010167370');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinacion`
--

CREATE TABLE `coordinacion` (
  `id_coordinacion` varchar(10) NOT NULL,
  `nombre_c` varchar(90) DEFAULT NULL,
  `id_tipof` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `coordinacion`
--

INSERT INTO `coordinacion` (`id_coordinacion`, `nombre_c`, `id_tipof`) VALUES
('1', 'TITULADA', '2'),
('2', 'ARTICULACIÓN', '1'),
('3', 'SER', '3'),
('4', 'COMPLEMENTARIA', '1');

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

--
-- Volcado de datos para la tabla `criterio_evaluacion`
--

INSERT INTO `criterio_evaluacion` (`cod_vacante`, `T_experiencia`, `T_poblacion_vulnerable`, `T_arraigo`, `T_certificacion_c`, `T_formacion_l`, `T_educacion`, `Total`, `Id_tipo`) VALUES
('1234', 8.5, 7, 6.5, 9, 8, 7.5, 46.5, '1'),
('26378', 7.5, 8, 7, 8.5, 7, 8, 46, '1'),
('27486', 9, 8.5, 8, 9.5, 8.5, 9, 52.5, '1'),
('32900', 7, 6.5, 7.5, 7, 6.5, 7.5, 42, '3'),
('32926', 8, 7.5, 8.5, 8, 7.5, 8.5, 48, '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` varchar(10) NOT NULL,
  `nombre_rol` varchar(100) DEFAULT NULL
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
  `id_tipof` varchar(10) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipo_formacion`
--

INSERT INTO `tipo_formacion` (`id_tipof`, `descripcion`) VALUES
('1', 'Formación para el trabajo'),
('2', 'Educación Formal'),
('3', 'SER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `traslado`
--

CREATE TABLE `traslado` (
  `documento_candidato` varchar(100) NOT NULL,
  `cod_vacante` varchar(30) NOT NULL,
  `cod_vacante_solicitado` varchar(30) NOT NULL,
  `id_coordinacion_final` varchar(10) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `numero_documento_coordinador` varchar(79) NOT NULL,
  `observacion` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `traslado`
--

INSERT INTO `traslado` (`documento_candidato`, `cod_vacante`, `cod_vacante_solicitado`, `id_coordinacion_final`, `fecha`, `numero_documento_coordinador`, `observacion`) VALUES
('1000121831', '1234', '26378', '2', '2024-09-01 10:00:00', '123', 'Traslado aprobado'),
('1000235523', '26378', '27486', '2', '2024-09-02 11:30:00', '1234', 'Pendiente de aprobación'),
('10004680265', '27486', '32900', '3', '2024-09-03 09:45:00', '12345', 'Observación importante'),
('1000576994', '32900', '32926', '3', '2024-09-04 14:20:00', '19220321', 'Traslado realizado'),
('10006862905', '32926', '1234', '1', '2024-09-05 16:15:00', '52294893', 'Necesita seguimiento'),
('1001347425', '1234', '27486', '2', '2024-09-06 08:50:00', '79408514', 'Observación adicional'),
('1010162787', '27486', '32900', '3', '2024-09-07 13:10:00', '79431471', 'Requiere aprobación'),
('1010167370', '32900', '32926', '3', '2024-09-08 12:00:00', '79965721', 'Sin observaciones');

--
-- Disparadores `traslado`
--
DELIMITER $$
CREATE TRIGGER `after_traslado_delete` AFTER DELETE ON `traslado` FOR EACH ROW BEGIN
    UPDATE candidato 
    SET traslado = NULL 
    WHERE numero_documento = OLD.documento_candidato;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_traslado_insert` AFTER INSERT ON `traslado` FOR EACH ROW BEGIN
    UPDATE candidato 
    SET traslado = NEW.observacion 
    WHERE numero_documento = NEW.documento_candidato;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_traslado_update` AFTER UPDATE ON `traslado` FOR EACH ROW BEGIN
    UPDATE candidato 
    SET traslado = NEW.observacion 
    WHERE numero_documento = NEW.documento_candidato;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `numero_documento` varchar(79) NOT NULL,
  `tipo_doc` varchar(100) NOT NULL,
  `nombre_completo` varchar(300) DEFAULT NULL,
  `contraseña` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id_rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`numero_documento`, `tipo_doc`, `nombre_completo`, `contraseña`, `email`, `telefono`, `id_rol`) VALUES
('123', 'Cédula de ciudadanía', 'Usuario 123', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '123@gmail.com', '123', '2'),
('1234', 'Cédula de ciudadanía', 'Usuario 1234', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '1234@gmail.com', '1234', '1'),
('12345', 'Cédula de ciudadanía', 'Usuario 12345', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '12345@gmail.com', '12345', '3'),
('19220321', 'Cédula de ciudadanía', 'Miguel Antonio Morales Sánchez', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'migue2333@gmail.com', '344444444', '1'),
('52294893', 'Cédula de ciudadanía', 'Luz Helena Quintana', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'luz67@gmail.com', '33467897890', '1'),
('79408514', 'Cédula de ciudadanía', 'Héctor Eliseo Menjura Saavedra', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'hectore34@gmail.com', '4333333333', '3'),
('79431471', 'Cédula de ciudadanía', 'Fabio Ernesto Sánchez', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'fabio89@gmail.com', '3222222222', '2'),
('79965721', 'Cédula de ciudadanía', 'Mauricio Cañas López', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', 'mauricio54@gmail.com', '31111111111', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `cod_vacante` varchar(30) NOT NULL,
  `id_coordinacion` varchar(10) NOT NULL,
  `nombre_vacante` varchar(200) NOT NULL,
  `perfil_vacante` varchar(500) NOT NULL,
  `nro_instr_req` int(11) DEFAULT NULL,
  `id_tipof` varchar(10) DEFAULT NULL,
  `modalidad` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`cod_vacante`, `id_coordinacion`, `nombre_vacante`, `perfil_vacante`, `nro_instr_req`, `id_tipof`, `modalidad`) VALUES
('1234', '1', 'Vacante 1234', 'Perfil vacante 1234', 4, '1', NULL),
('26378', '2', 'Vacante 26378', 'Perfil vacante 26378', 4, '1', NULL),
('27486', '2', 'Vacante 27486', 'Perfil vacante 27486', 1, NULL, NULL),
('32900', '3', 'Vacante 32900', 'Perfil vacante 32900', 3, '3', NULL),
('32926', '3', 'Vacante 32926', 'Perfil vacante 32926', 2, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignacion_instructores`
--
ALTER TABLE `asignacion_instructores`
  ADD PRIMARY KEY (`cod_vacante`,`numero_documento_instructor`),
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `numero_documento_instructor` (`numero_documento_instructor`);

--
-- Indices de la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `id_coordinacion_inicial` (`id_coordinacion_inicial`);

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
  ADD KEY `id_tipof` (`id_tipof`);

--
-- Indices de la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `Id_tipo` (`Id_tipo`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tipo_formacion`
--
ALTER TABLE `tipo_formacion`
  ADD PRIMARY KEY (`id_tipof`);

--
-- Indices de la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD PRIMARY KEY (`documento_candidato`),
  ADD KEY `cod_vacante` (`cod_vacante`),
  ADD KEY `cod_vacante_solicitado` (`cod_vacante_solicitado`),
  ADD KEY `id_coordinacion_final` (`id_coordinacion_final`),
  ADD KEY `numero_documento_coordinador` (`numero_documento_coordinador`),
  ADD KEY `fk_traslado_cod_vacante_solicitado_id_coordinacion_final` (`cod_vacante_solicitado`,`id_coordinacion_final`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`cod_vacante`),
  ADD UNIQUE KEY `unique_cod_vacante_id_coordinacion` (`cod_vacante`,`id_coordinacion`),
  ADD KEY `id_coordinacion` (`id_coordinacion`),
  ADD KEY `id_tipof` (`id_tipof`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignacion_instructores`
--
ALTER TABLE `asignacion_instructores`
  ADD CONSTRAINT `fk_asignacion_instructor` FOREIGN KEY (`numero_documento_instructor`) REFERENCES `usuario` (`numero_documento`),
  ADD CONSTRAINT `fk_asignacion_vacante` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`);

--
-- Filtros para la tabla `candidato`
--
ALTER TABLE `candidato`
  ADD CONSTRAINT `fk_candidato_id_coordinacion_inicial` FOREIGN KEY (`id_coordinacion_inicial`) REFERENCES `coordinacion` (`id_coordinacion`),
  ADD CONSTRAINT `fk_candidato_vacante` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`);

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `fk_contrato_candidato` FOREIGN KEY (`numero_documento`) REFERENCES `candidato` (`numero_documento`),
  ADD CONSTRAINT `fk_contrato_vacante` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`);

--
-- Filtros para la tabla `coordinacion`
--
ALTER TABLE `coordinacion`
  ADD CONSTRAINT `fk_coordinacion_tipo_formacion` FOREIGN KEY (`id_tipof`) REFERENCES `tipo_formacion` (`id_tipof`);

--
-- Filtros para la tabla `criterio_evaluacion`
--
ALTER TABLE `criterio_evaluacion`
  ADD CONSTRAINT `fk_criterio_tipo_formacion` FOREIGN KEY (`Id_tipo`) REFERENCES `tipo_formacion` (`id_tipof`),
  ADD CONSTRAINT `fk_criterio_vacante` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`);

--
-- Filtros para la tabla `traslado`
--
ALTER TABLE `traslado`
  ADD CONSTRAINT `fk_traslado_candidato` FOREIGN KEY (`documento_candidato`) REFERENCES `candidato` (`numero_documento`),
  ADD CONSTRAINT `fk_traslado_cod_vacante_solicitado_id_coordinacion_final` FOREIGN KEY (`cod_vacante_solicitado`,`id_coordinacion_final`) REFERENCES `vacante` (`cod_vacante`, `id_coordinacion`),
  ADD CONSTRAINT `fk_traslado_usuario` FOREIGN KEY (`numero_documento_coordinador`) REFERENCES `usuario` (`numero_documento`),
  ADD CONSTRAINT `fk_traslado_vacante` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`),
  ADD CONSTRAINT `fk_traslado_vacante_solicitado` FOREIGN KEY (`cod_vacante_solicitado`) REFERENCES `vacante` (`cod_vacante`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_rol` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_vacante_coordinacion` FOREIGN KEY (`id_coordinacion`) REFERENCES `coordinacion` (`id_coordinacion`),
  ADD CONSTRAINT `fk_vacante_tipo_formacion` FOREIGN KEY (`id_tipof`) REFERENCES `tipo_formacion` (`id_tipof`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
