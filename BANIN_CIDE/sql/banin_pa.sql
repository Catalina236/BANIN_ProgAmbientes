-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 15:37:45
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

--
-- Volcado de datos para la tabla `tipo_formacion`
--

INSERT INTO `tipo_formacion` (`Id_tipoF`, `Descripcion`) VALUES
('1', 'Formación para el trabajo'),
('2', 'Educación Formal'),
('3', 'SER');

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
  `nombre_vacante` varchar(200) NOT NULL,
  `perfil_vacante` varchar(500) NOT NULL,
  `estado_BANIN` varchar(50) NOT NULL,
  `num_doc_evaluador` varchar(79) DEFAULT NULL,
  `nro_instr_req` int(11) DEFAULT NULL,
  `num_doc_candidato` varchar(79) DEFAULT NULL,
  `Id_tipoF` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`cod_vacante`, `nombre_vacante`, `perfil_vacante`, `estado_BANIN`, `num_doc_evaluador`, `nro_instr_req`, `num_doc_candidato`, `Id_tipoF`) VALUES
('26378', 'CONTABILIZACION DE OPERACIONES COMERCIALES Y FINANCIERAS.		', 'Requisitos académicos: opción 1titulo de profesional comomédico veterinario, médico veterinario y zootecnista, zootecnista. Opción 2tecnólogo y/o técnico enproducción animal, producción agropecuaria. Experiencia laboral: experiencia comprobada en producción animal, sanidad animal, agroecología y/o desarrollo rural como mínimo 6 meses en docencia y un año en el área', 'Por evaluar', '79408514', 2, '19220321', '1'),
('32900', 'EMPRENDEDOR EN PRODUCCION DE DERIVADOS CARNICOS		\r\n', '\"Requisitos academicos: Técnico O Tecnólogo Con Formación Específica En Áreas De Negocios, Mercadeo, Administrativas Y Afines. Profesionales En Áreas De Negocios, Mercadeo, Administrativas Y Afines. Experiencia Laboral Doce (12) Meses Con Experiencia Demostrada En Elaboración De Planes De Comercialización, Planes De Negocio, Conformación De Microempresas Y En Mercadeo De Productos Agrícolas, Pecuarios, Artesanales, Agroindustriales O De Servicios, Y Mínimo Seis (6) Meses De Experiencia Pedagógic', 'Por evaluar', '52294893', 3, '79431471', '3'),
('32926', 'EMPRENDEDOR EN ALTERNATIVAS AGROPECUARIAS PARA UNA PRODUCCION SOSTENIBLE		\r\n		\r\n', 'Requisitos académicos: opción 1titulo de profesional comomédico veterinario, médico veterinario y zootecnista, zootecnista. Opción 2tecnólogo y/o técnico enproducción animal, producción agropecuaria. Experiencia laboral: experiencia comprobada en producción animal, sanidad animal, agroecología y/o desarrollo rural como mínimo 6 meses en docencia y un año en el area', 'Por evaluar', '19220321', 2, '79965721', '2');

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
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`cod_vacante`),
  ADD KEY `num_doc_evaluador` (`num_doc_evaluador`),
  ADD KEY `num_doc_candidato` (`num_doc_candidato`),
  ADD KEY `foranea` (`Id_tipoF`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD CONSTRAINT `contrato_ibfk_1` FOREIGN KEY (`cod_vacante`) REFERENCES `vacante` (`cod_vacante`),
  ADD CONSTRAINT `contrato_ibfk_2` FOREIGN KEY (`numero_documento`) REFERENCES `usuario` (`numero_documento`);

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
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `rol` (`id_rol`);

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `foranea` FOREIGN KEY (`Id_tipoF`) REFERENCES `tipo_formacion` (`Id_tipoF`),
  ADD CONSTRAINT `vacante_ibfk_1` FOREIGN KEY (`num_doc_evaluador`) REFERENCES `usuario` (`numero_documento`),
  ADD CONSTRAINT `vacante_ibfk_2` FOREIGN KEY (`num_doc_candidato`) REFERENCES `usuario` (`numero_documento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
