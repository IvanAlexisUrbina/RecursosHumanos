-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-05-2022 a las 21:22:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gestorbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_actividades`
--

CREATE TABLE `tbl_actividades` (
  `id_actividades` int(11) NOT NULL,
  `act_nombre` varchar(200) NOT NULL,
  `id_area` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_actividades`
--

INSERT INTO `tbl_actividades` (`id_actividades`, `act_nombre`, `id_area`) VALUES
(1, 'Arco eléctrico (Arc Flash)', 1),
(2, 'Arranque de motores', 1),
(3, 'Cálculo de ajustes y coordinación de protecciones ', 1),
(4, 'Estudio de conexión de centrales generadoras y proyectos eléctricos', 1),
(5, 'Deslastre de carga', 1),
(6, 'Estabilidad transitoria, tensión y pequeña señal', 1),
(7, 'Estudio de proyección de demanda y análisis de operación para industrias', 1),
(8, 'Evaluación económica de proyectos eléctricos', 1),
(9, 'Flujos de carga', 1),
(10, 'Cortocircuito', 1),
(11, 'Pérdidas en sistemas eléctricos', 1),
(12, 'Planeación de sistemas eléctricos', 1),
(13, 'Saturación de transformadores de corriente', 1),
(14, 'Modelamiento de sistemas eléctricos en software de simulación', 1),
(15, 'Análisis de riesgo eléctrico', 2),
(16, 'Apantallamiento', 2),
(17, 'Civil y estructural asociado a sistemas eléctricos', 2),
(18, 'Conceptuales, básicos y de detalle', 2),
(19, 'Coordinación de aislamiento', 2),
(20, 'Estudios de impacto ambiental', 2),
(21, 'Generación de energía eléctrica y cogeneración', 2),
(22, 'Interventoría de proyectos', 2),
(23, 'Líneas de distribución de energía eléctrica de baja y media tensión', 2),
(24, 'Líneas de transmisión de energía eléctrica de alta y extra alta tensión', 2),
(25, 'Servicios auxiliares AC y DC', 2),
(26, 'Sistemas de control, medida y protección Sistemas de iluminación', 2),
(27, 'Sistemas de detección de incendios', 2),
(28, 'Sistemas de puesta a tierra', 2),
(29, 'Sistemas de control, medida y protección', 2),
(30, 'Sistemas eléctricos industriales y comerciales', 2),
(31, 'Sistemas eléctricos hospitalarios', 2),
(32, 'Sistemas eléctricos para áreas clasificadas a prueba de explosión', 2),
(33, 'Subestaciones eléctricas de baja, media, alta y extra alta tensión', 2),
(34, 'Pruebas y puesta en servicio a equipos en sistemas de baja, media y alta tensión', 3),
(35, 'Relés de protección eléctrica', 3),
(36, 'Interruptores de potencia', 3),
(37, 'Seccionadores', 3),
(38, 'TCs, TPs', 3),
(39, 'Descargadores de sobretensión', 3),
(40, 'Transformadores de potencia', 3),
(41, 'Generadores', 3),
(42, 'Sistemas de servicios auxiliares de AC y DC', 3),
(43, 'Bancos y cargadores de baterías', 3),
(44, 'Suministro, diseño y puesta en servicio de sistemas de control, medida y protección', 3),
(45, 'RTU´s, Gateway', 3),
(46, 'SCADA', 3),
(47, 'Controladores de bahía', 3),
(48, 'Gestión de protecciones y medida', 3),
(49, 'Modernización de subestaciones', 3),
(50, 'Capacitaciones', 3),
(51, 'Automatización basados en IEC 61850', 3),
(52, 'Cargabilidad de transformadores, motores y acometidas', 4),
(53, 'Chequeo RETIE de instalaciones eléctricas', 4),
(54, 'Estudios de armónicos – especificación de filtros', 4),
(55, 'Estudios de perturbaciones en sistemas eléctricos', 4),
(56, 'Estudios de compensación reactiva', 4),
(57, 'Levantamiento y actualización de diagramas unifilares', 4),
(58, 'Asesoría en implementación del sistema de gestión de energía ISO 50001', 5),
(59, 'Asesoría en negociación de tarifas de energía', 5),
(60, 'Asesoría regulatoria', 5),
(61, 'Caracterización energética', 5),
(62, 'Evaluación de potenciales de generación con energías renovables', 5),
(63, 'Generación de indicadores', 5),
(64, 'Identificación de oportunidades de ahorro', 5),
(65, 'Implementación de sistemas de monitoreo energético', 5),
(66, 'Mediciones de resistencia, resistividad y equipotencialidad', 6),
(67, 'Medición de tensiones de paso y de contacto', 6),
(68, 'Pruebas a dispositivos de protección contra sobretensiones en baja tensión', 6),
(69, 'Seguimiento de clientes.', 7),
(70, 'Conocer el mercado.', 7),
(71, 'Probar los productos.', 7),
(72, 'Comunicarse con el cliente y la empresa.', 7),
(73, 'Mantener un papel activo.', 7),
(74, 'Unificar intereses.', 7),
(75, 'Elaboración y desarrollo de cursos', 7),
(76, 'Diseño y análisis de puestos de trabajo.', 8),
(77, 'Contratación y selección de empleados.', 8),
(78, 'Formación y desarrollo de los empleados.', 8),
(79, 'Gestión del rendimiento de los empleados.', 8),
(80, 'Compensación y beneficios.', 8),
(81, 'Relaciones laborales.', 8),
(82, 'Compromiso de los empleados y comunicación.', 8),
(83, 'Normas de salud y seguridad', 8),
(84, 'Realizar informes financieros para los clientes a través de la revisión de libros contables, estados financieros, análisis de gastos e ingresos y la realización de balances.', 9),
(85, 'Hacer auditorías a empresas o particulares.', 9),
(86, 'Asesorar financiera y tributariamente a los clientes.', 9),
(87, 'Garantizar que el registro de ingresos y gastos esté debidamente documentado y soportado.', 9),
(88, 'Preparar presupuestos.', 9),
(89, 'Verificar que los libros contables cumplan con lo establecido en la ley.', 9),
(90, 'Elaborar inventarios', 9),
(91, 'Administrar recursos financieros.', 9),
(92, 'Utilizar un software contable como el de Contífico', 9),
(93, 'Conocer todas las especificaciones del proyecto de obra.', 10),
(94, 'Ser responsable de los documentos del proyecto y facilitarlas al equipo cuando sea necesario.', 10),
(95, 'Mantener constante comunicación con el representante del de la obra y las personas del equipo.', 10),
(96, 'Comprobar la calidad de los materiales a ser utilizados.', 10),
(97, 'Verificar que se cumplan los tiempos dentro de la obra, evitando cualquier retraso.', 10),
(98, 'Garantizar el cumplimiento de las normas de seguridad en la obra.', 10),
(99, 'Supervisar y coordinar la elaboración de los planos de construcción', 10),
(100, 'Liderar la obra, explicando a los trabajadores las especificaciones del proyecto.', 10),
(101, 'Asegurar que las actividades dentro de la obra se desarrollen de manera segura', 10),
(102, 'Comprobar la calidad de materiales y herramientas ser utilizadas, asegurándose que cumplan con las normas de seguridad.', 10),
(103, 'Reportar cualquier falla o accidente dentro de la obra.', 10),
(104, 'Diseñar, programar, aplicar y mantener sistemas informáticos.', 11),
(105, 'Administrar redes y sistemas de información.', 11),
(106, 'Optimizar los datos que maneja una empresa.', 11),
(107, 'Investigar para crear software y hardware en una empresa u organización', 11),
(108, 'Diseñar y mantener los sitios web.', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_area`
--

CREATE TABLE `tbl_area` (
  `id_area` int(11) NOT NULL,
  `are_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_area`
--

INSERT INTO `tbl_area` (`id_area`, `are_nombre`) VALUES
(1, 'Estudio de Sistemas Eléctricos'),
(2, 'Diseño e Ingeniería'),
(3, 'Pruebas Automatización y Control'),
(4, 'Calidad de potencia'),
(5, 'Eficiencia Energética'),
(6, 'Sistemas de Puesta a Tierra'),
(7, 'Comercial'),
(8, 'Recursos Humanos'),
(9, 'Contador'),
(10, 'Ingeniería Civil'),
(11, 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estadovacante`
--

CREATE TABLE `tbl_estadovacante` (
  `id_estadovacante` int(10) NOT NULL,
  `est_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_estadovacante`
--

INSERT INTO `tbl_estadovacante` (`id_estadovacante`, `est_nombre`) VALUES
(1, 'Activa'),
(2, 'Inactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_formacion`
--

CREATE TABLE `tbl_formacion` (
  `id_formacion` int(100) NOT NULL,
  `form_tituloname` varchar(100) NOT NULL,
  `form_titulo_profesional` varchar(256) NOT NULL,
  `form_nivel_de_educacion` varchar(30) NOT NULL,
  `form_nombre` varchar(60) NOT NULL,
  `form_conocimientos` varchar(256) NOT NULL,
  `form_fecha_fin` date NOT NULL,
  `usu_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_formacion`
--

INSERT INTO `tbl_formacion` (`id_formacion`, `form_tituloname`, `form_titulo_profesional`, `form_nivel_de_educacion`, `form_nombre`, `form_conocimientos`, `form_fecha_fin`, `usu_id`) VALUES
(1, 'INGENIERO EN SISTEMAS', '../web/certificadodeestudio/a.pdf', 'Educación Básica Secundaria', 'UNIVERSIDAD DEL VALLE', 'word', '2022-04-21', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historiadetalle`
--

CREATE TABLE `tbl_historiadetalle` (
  `id_historiadetalle` int(11) NOT NULL,
  `id_hist` int(30) DEFAULT NULL,
  `id_actividades` int(11) DEFAULT NULL,
  `usu_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_historiadetalle`
--

INSERT INTO `tbl_historiadetalle` (`id_historiadetalle`, `id_hist`, `id_actividades`, `usu_id`) VALUES
(1, 1, 15, 3),
(2, 1, 16, 3),
(3, 1, 18, 3),
(4, 1, 45, 3),
(5, 1, 48, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historial_de_trabajo`
--

CREATE TABLE `tbl_historial_de_trabajo` (
  `id_hist` int(30) NOT NULL,
  `hist_certificado` varchar(256) DEFAULT NULL,
  `hist_cargo` varchar(90) NOT NULL,
  `hist_empresa` varchar(30) NOT NULL,
  `hist_descripcion` varchar(1000) DEFAULT NULL,
  `hist_pais` varchar(60) NOT NULL,
  `hist_ciudad` varchar(60) NOT NULL,
  `hist_fecha_inicio` date NOT NULL,
  `hist_fecha_fin` date DEFAULT NULL,
  `hist_trabajoactual` varchar(10) DEFAULT NULL,
  `usu_id` int(100) NOT NULL,
  `hist_añosxp` int(10) DEFAULT NULL,
  `hist_mesxp` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_historial_de_trabajo`
--

INSERT INTO `tbl_historial_de_trabajo` (`id_hist`, `hist_certificado`, `hist_cargo`, `hist_empresa`, `hist_descripcion`, `hist_pais`, `hist_ciudad`, `hist_fecha_inicio`, `hist_fecha_fin`, `hist_trabajoactual`, `usu_id`, `hist_añosxp`, `hist_mesxp`) VALUES
(1, '../web/certificadodetrabajo/5e59d974-1b4e-45bc-9209-4ec36856f7f2.pdf', 'inspector de electricidad', 'GERS', '                          wwwerwqf', 'colombia', 'cali', '2022-04-07', '2022-04-20', 'si', 3, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_idiomas`
--

CREATE TABLE `tbl_idiomas` (
  `id_idioma` int(30) NOT NULL,
  `idi_nombre` varchar(30) NOT NULL,
  `idi_nivel` varchar(60) NOT NULL,
  `usu_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_rol`
--

CREATE TABLE `tbl_rol` (
  `rol_id` int(100) NOT NULL,
  `rol_nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_rol`
--

INSERT INTO `tbl_rol` (`rol_id`, `rol_nombre`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_seleccionado`
--

CREATE TABLE `tbl_seleccionado` (
  `id_seleccionado` int(10) NOT NULL,
  `selec_nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_seleccionado`
--

INSERT INTO `tbl_seleccionado` (`id_seleccionado`, `selec_nombre`) VALUES
(1, 'Seleccionado'),
(2, 'No seleccionado'),
(3, 'En proceso'),
(4, 'Aceptado para entrevista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `usu_id` int(100) NOT NULL,
  `usu_nombre` varchar(50) NOT NULL,
  `usu_apellido` varchar(50) NOT NULL,
  `usu_correo` varchar(50) NOT NULL,
  `usu_telefono` varchar(50) NOT NULL,
  `usu_pais_residencia` varchar(10) DEFAULT NULL,
  `usu_residencia` varchar(256) NOT NULL,
  `usu_direccion` varchar(255) NOT NULL,
  `usu_tipo_documento` varchar(50) NOT NULL,
  `usu_documento` varchar(50) NOT NULL,
  `usu_contraseña` varchar(255) NOT NULL,
  `usu_termino` int(10) NOT NULL,
  `rol_id` int(100) NOT NULL,
  `usu_token` varchar(256) DEFAULT NULL,
  `usu_hojadevida` varchar(256) DEFAULT NULL,
  `usu_fechahojadevida` timestamp NULL DEFAULT NULL,
  `usu_matricula` varchar(256) DEFAULT NULL,
  `usu_fechamatricula` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_id`, `usu_nombre`, `usu_apellido`, `usu_correo`, `usu_telefono`, `usu_pais_residencia`, `usu_residencia`, `usu_direccion`, `usu_tipo_documento`, `usu_documento`, `usu_contraseña`, `usu_termino`, `rol_id`, `usu_token`, `usu_hojadevida`, `usu_fechahojadevida`, `usu_matricula`, `usu_fechamatricula`) VALUES
(2, 'MAICOL', 'PATRICIO', 'lopez@gmail.com', '2132', NULL, 'sdfasdf', 'asfasdfasdfasd', 'asdfasdfasdfasdf', 'asdfasdfas', '$2y$10$cQSstxDCdXUum3oYxXF2teT5Hoo.HGCi.XHb4/IqMc4P70QJoO9Qi', 1, 1, NULL, NULL, '0000-00-00 00:00:00', NULL, NULL),
(3, 'IVAN ALEX', 'URBINA MELO ', 'alexis-crokis@hotmail.com ', '3007264043', 'colombia', 'cali', 'cra 67 # a oeste', 'Cédula ciudadania ', '1122341 ', '$2y$10$RM0qlj5RGyz0gVyb2doVd.Z1zuq.lScdIrQ0uHUV.D.1Jn8D4REdO', 1, 2, NULL, '../web/hojas/5e59d974-1b4e-45bc-9209-4ec36856f7f2.pdf', '2022-04-22 16:19:38', '../web/carta/5e59d974-1b4e-45bc-9209-4ec36856f7f2.pdf', '2022-04-22 16:19:54'),
(4, 'ivan ', 'alexis urbina ', 'alex@gmail.com ', '213423234 ', 'colombia', 'cali', 'callle 5 con octava', 'Cédula ciudadania ', '1144108604 ', '$2y$10$kTf/OD6i6dpX6uFRjcIqdeTUAyP6clM3tJBno0siFrU0AACkFUD7a', 1, 2, NULL, NULL, NULL, NULL, NULL),
(5, 'IVAN ALEXIS ', 'URBINA MELO ', 'ivan.urbina@gers.com.co ', '3007264043 ', 'colombia', 'cali', 'cra67#3a oeste 71', 'Cédula ciudadania ', '1144108604 ', '$2y$10$kTf/OD6i6dpX6uFRjcIqdeTUAyP6clM3tJBno0siFrU0AACkFUD7a', 1, 2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuariovacante`
--

CREATE TABLE `tbl_usuariovacante` (
  `ofer_id` int(50) NOT NULL,
  `usu_id` int(100) NOT NULL,
  `id_vacante` int(100) NOT NULL,
  `id_seleccionado` int(10) NOT NULL,
  `usu_viajar` varchar(4) NOT NULL,
  `usu_elegible` varchar(4) NOT NULL,
  `usu_cartapresentacion` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuariovacante`
--

INSERT INTO `tbl_usuariovacante` (`ofer_id`, `usu_id`, `id_vacante`, `id_seleccionado`, `usu_viajar`, `usu_elegible`, `usu_cartapresentacion`) VALUES
(1, 5, 1, 2, 'NO', 'NO', '../web/carta/'),
(2, 3, 2, 3, 'NO', 'NO', '../web/carta/'),
(3, 3, 3, 3, 'NO', 'NO', '../web/carta/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_vacante`
--

CREATE TABLE `tbl_vacante` (
  `id_vacante` int(100) NOT NULL,
  `vac_nombre` varchar(50) NOT NULL,
  `vac_descripcion` varchar(3000) NOT NULL,
  `vac_jornada_laboral` varchar(50) NOT NULL,
  `vac_tipo_contrato` varchar(30) NOT NULL,
  `vac_salario` varchar(50) NOT NULL,
  `vac_fecha` date NOT NULL,
  `vac_años_xp` int(10) NOT NULL,
  `vac_educacion` varchar(60) NOT NULL,
  `id_estadovacante` int(10) NOT NULL,
  `vac_publicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `vac_correosclientes` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_vacante`
--

INSERT INTO `tbl_vacante` (`id_vacante`, `vac_nombre`, `vac_descripcion`, `vac_jornada_laboral`, `vac_tipo_contrato`, `vac_salario`, `vac_fecha`, `vac_años_xp`, `vac_educacion`, `id_estadovacante`, `vac_publicacion`, `vac_correosclientes`) VALUES
(1, 'INGENIERO ELECTRICISTA', 'Perfil Ingeniero de soporte técnico y ventas.\r\n\r\nINGENIERO ELECTRICISTA\r\n\r\n \r\n\r\n·        Ingeniero electricista con al menos 2 años de experiencia técnica.\r\n\r\n·        Conocimientos y experiencia demostrable en proyectos de análisis de Calidad de potencia\r\n\r\n·        Conocimientos en diseño eléctrico en baja tensión\r\n\r\n·        Nivel de Inglés intermedio escrito\r\n\r\n·        Manejo de herramientas de simulación Neplan, Digsilent , ATP. Al menos una de ellas.\r\n\r\n·        Manejo intermedio de MS Word, Excel, Power Point\r\n\r\n·        Comunicación asertiva para una adecuada relación con los clientes internos y externos.\r\n\r\n·        Fortaleza en comunicación verbal y no verbal para realizar presentaciones técnicas y sustentar ofertas con un adecuado manejo de objeciones.\r\n\r\n·        Conocimientos en gestión de proyectos eléctricos y MS Project (deseable)\r\n\r\n·        Manejo de Autocad (Deseable)\r\n\r\n·        Experiencia en gestión comercial de clientes industriales (deseable).\r\n\r\n·        Motivación\r\n\r\n·        Disponibilidad para viajar\r\n\r\n·        Ciudad de base: Cali. Si vive en otra ciudad debe tener disponibilidad de traslado a Cali.\r\n\r\n \r\n\r\nEl tope de salario que tengo estimado para este cargo sería de 3 Millones.\r\n\r\n \r\n\r\nPero la idea sería tratar de negociar por un menor valor.', 'jornada completa', 'por horas', 'a convenir', '2021-12-27', 5, 'tecnico', 2, '2022-04-25 20:53:47', 1),
(2, 'INGENIERO ELECTRICISTA', 'Perfil Ingeniero de soporte técnico y ventas.\r\n\r\nINGENIERO ELECTRICISTA\r\n\r\n \r\n\r\n·        Ingeniero electricista con al menos 2 años de experiencia técnica.\r\n\r\n·        Conocimientos y experiencia demostrable en proyectos de análisis de Calidad de potencia\r\n\r\n·        Conocimientos en diseño eléctrico en baja tensión\r\n\r\n·        Nivel de Inglés intermedio escrito\r\n\r\n·        Manejo de herramientas de simulación Neplan, Digsilent , ATP. Al menos una de ellas.\r\n\r\n·        Manejo intermedio de MS Word, Excel, Power Point\r\n\r\n·        Comunicación asertiva para una adecuada relación con los clientes internos y externos.\r\n\r\n·        Fortaleza en comunicación verbal y no verbal para realizar presentaciones técnicas y sustentar ofertas con un adecuado manejo de objeciones.\r\n\r\n·        Conocimientos en gestión de proyectos eléctricos y MS Project (deseable)\r\n\r\n·        Manejo de Autocad (Deseable)\r\n\r\n·        Experiencia en gestión comercial de clientes industriales (deseable).\r\n\r\n·        Motivación\r\n\r\n·        Disponibilidad para viajar\r\n\r\n·        Ciudad de base: Cali. Si vive en otra ciudad debe tener disponibilidad de traslado a Cali.\r\n\r\n \r\n\r\nEl tope de salario que tengo estimado para este cargo sería de 3 Millones.\r\n\r\n \r\n\r\nPero la idea sería tratar de negociar por un menor valor.', 'jornada completa', 'por horas', 'a convenir', '2022-12-30', 5, 'tecnico', 1, '2022-04-26 15:33:30', NULL),
(3, 'INGENIERO ELECTRICISTA', 'Perfil Ingeniero de soporte técnico y ventas.\r\n\r\nINGENIERO ELECTRICISTA\r\n\r\n \r\n\r\n·        Ingeniero electricista con al menos 2 años de experiencia técnica.\r\n\r\n·        Conocimientos y experiencia demostrable en proyectos de análisis de Calidad de potencia\r\n\r\n·        Conocimientos en diseño eléctrico en baja tensión\r\n\r\n·        Nivel de Inglés intermedio escrito\r\n\r\n·        Manejo de herramientas de simulación Neplan, Digsilent , ATP. Al menos una de ellas.\r\n\r\n·        Manejo intermedio de MS Word, Excel, Power Point\r\n\r\n·        Comunicación asertiva para una adecuada relación con los clientes internos y externos.\r\n\r\n·        Fortaleza en comunicación verbal y no verbal para realizar presentaciones técnicas y sustentar ofertas con un adecuado manejo de objeciones.\r\n\r\n·        Conocimientos en gestión de proyectos eléctricos y MS Project (deseable)\r\n\r\n·        Manejo de Autocad (Deseable)\r\n\r\n·        Experiencia en gestión comercial de clientes industriales (deseable).\r\n\r\n·        Motivación\r\n\r\n·        Disponibilidad para viajar\r\n\r\n·        Ciudad de base: Cali. Si vive en otra ciudad debe tener disponibilidad de traslado a Cali.\r\n\r\n \r\n\r\nEl tope de salario que tengo estimado para este cargo sería de 3 Millones.\r\n\r\n \r\n\r\nPero la idea sería tratar de negociar por un menor valor.', 'jornada completa', 'por horas', 'a convenir', '2024-12-01', 5, 'tecnico', 1, '2022-04-26 15:43:32', NULL),
(4, 'INGENIERO ELECTRICISTA', 'Perfil Ingeniero de soporte técnico y ventas.\r\n\r\nINGENIERO ELECTRICISTA\r\n\r\n \r\n\r\n·        Ingeniero electricista con al menos 2 años de experiencia técnica.\r\n\r\n·        Conocimientos y experiencia demostrable en proyectos de análisis de Calidad de potencia\r\n\r\n·        Conocimientos en diseño eléctrico en baja tensión\r\n\r\n·        Nivel de Inglés intermedio escrito\r\n\r\n·        Manejo de herramientas de simulación Neplan, Digsilent , ATP. Al menos una de ellas.\r\n\r\n·        Manejo intermedio de MS Word, Excel, Power Point\r\n\r\n·        Comunicación asertiva para una adecuada relación con los clientes internos y externos.\r\n\r\n·        Fortaleza en comunicación verbal y no verbal para realizar presentaciones técnicas y sustentar ofertas con un adecuado manejo de objeciones.\r\n\r\n·        Conocimientos en gestión de proyectos eléctricos y MS Project (deseable)\r\n\r\n·        Manejo de Autocad (Deseable)\r\n\r\n·        Experiencia en gestión comercial de clientes industriales (deseable).\r\n\r\n·        Motivación\r\n\r\n·        Disponibilidad para viajar\r\n\r\n·        Ciudad de base: Cali. Si vive en otra ciudad debe tener disponibilidad de traslado a Cali.\r\n\r\n \r\n\r\nEl tope de salario que tengo estimado para este cargo sería de 3 Millones.\r\n\r\n \r\n\r\nPero la idea sería tratar de negociar por un menor valor.', 'jornada completa', 'por horas', 'a convenir', '2022-05-26', 5, 'tecnico', 1, '2022-05-03 21:01:13', NULL),
(5, 'INGENIERO ELECTRICISTA', 'Perfil Ingeniero de soporte técnico y ventas.\r\n\r\nINGENIERO ELECTRICISTA\r\n\r\n \r\n\r\n·        Ingeniero electricista con al menos 2 años de experiencia técnica.\r\n\r\n·        Conocimientos y experiencia demostrable en proyectos de análisis de Calidad de potencia\r\n\r\n·        Conocimientos en diseño eléctrico en baja tensión\r\n\r\n·        Nivel de Inglés intermedio escrito\r\n\r\n·        Manejo de herramientas de simulación Neplan, Digsilent , ATP. Al menos una de ellas.\r\n\r\n·        Manejo intermedio de MS Word, Excel, Power Point\r\n\r\n·        Comunicación asertiva para una adecuada relación con los clientes internos y externos.\r\n\r\n·        Fortaleza en comunicación verbal y no verbal para realizar presentaciones técnicas y sustentar ofertas con un adecuado manejo de objeciones.\r\n\r\n·        Conocimientos en gestión de proyectos eléctricos y MS Project (deseable)\r\n\r\n·        Manejo de Autocad (Deseable)\r\n\r\n·        Experiencia en gestión comercial de clientes industriales (deseable).\r\n\r\n·        Motivación\r\n\r\n·        Disponibilidad para viajar\r\n\r\n·        Ciudad de base: Cali. Si vive en otra ciudad debe tener disponibilidad de traslado a Cali.\r\n\r\n \r\n\r\nEl tope de salario que tengo estimado para este cargo sería de 3 Millones.\r\n\r\n \r\n\r\nPero la idea sería tratar de negociar por un menor valor.', 'jornada completa', 'por horas', 'a convenir', '0000-00-00', 5, 'tecnico', 2, '2022-05-03 21:33:00', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_actividades`
--
ALTER TABLE `tbl_actividades`
  ADD PRIMARY KEY (`id_actividades`),
  ADD KEY `id_area` (`id_area`);

--
-- Indices de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `tbl_estadovacante`
--
ALTER TABLE `tbl_estadovacante`
  ADD PRIMARY KEY (`id_estadovacante`);

--
-- Indices de la tabla `tbl_formacion`
--
ALTER TABLE `tbl_formacion`
  ADD PRIMARY KEY (`id_formacion`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_historiadetalle`
--
ALTER TABLE `tbl_historiadetalle`
  ADD PRIMARY KEY (`id_historiadetalle`),
  ADD KEY `id_actividades` (`id_actividades`,`id_hist`),
  ADD KEY `tbl_historiadetalle_ibfk_1` (`id_hist`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_historial_de_trabajo`
--
ALTER TABLE `tbl_historial_de_trabajo`
  ADD PRIMARY KEY (`id_hist`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_idiomas`
--
ALTER TABLE `tbl_idiomas`
  ADD PRIMARY KEY (`id_idioma`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_rol`
--
ALTER TABLE `tbl_rol`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `tbl_seleccionado`
--
ALTER TABLE `tbl_seleccionado`
  ADD PRIMARY KEY (`id_seleccionado`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `rol_id` (`rol_id`);

--
-- Indices de la tabla `tbl_usuariovacante`
--
ALTER TABLE `tbl_usuariovacante`
  ADD PRIMARY KEY (`ofer_id`),
  ADD KEY `id_vacante` (`id_vacante`),
  ADD KEY `id_seleccionado` (`id_seleccionado`),
  ADD KEY `usu_id` (`usu_id`);

--
-- Indices de la tabla `tbl_vacante`
--
ALTER TABLE `tbl_vacante`
  ADD PRIMARY KEY (`id_vacante`),
  ADD KEY `id_estadovacante` (`id_estadovacante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_actividades`
--
ALTER TABLE `tbl_actividades`
  MODIFY `id_actividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT de la tabla `tbl_area`
--
ALTER TABLE `tbl_area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tbl_estadovacante`
--
ALTER TABLE `tbl_estadovacante`
  MODIFY `id_estadovacante` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_formacion`
--
ALTER TABLE `tbl_formacion`
  MODIFY `id_formacion` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_historial_de_trabajo`
--
ALTER TABLE `tbl_historial_de_trabajo`
  MODIFY `id_hist` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tbl_idiomas`
--
ALTER TABLE `tbl_idiomas`
  MODIFY `id_idioma` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tbl_vacante`
--
ALTER TABLE `tbl_vacante`
  MODIFY `id_vacante` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_actividades`
--
ALTER TABLE `tbl_actividades`
  ADD CONSTRAINT `tbl_actividades_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `tbl_area` (`id_area`);

--
-- Filtros para la tabla `tbl_formacion`
--
ALTER TABLE `tbl_formacion`
  ADD CONSTRAINT `tbl_formacion_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`);

--
-- Filtros para la tabla `tbl_historiadetalle`
--
ALTER TABLE `tbl_historiadetalle`
  ADD CONSTRAINT `tbl_historiadetalle_ibfk_1` FOREIGN KEY (`id_hist`) REFERENCES `tbl_historial_de_trabajo` (`id_hist`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_historiadetalle_ibfk_2` FOREIGN KEY (`id_actividades`) REFERENCES `tbl_actividades` (`id_actividades`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_historiadetalle_ibfk_3` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_historial_de_trabajo`
--
ALTER TABLE `tbl_historial_de_trabajo`
  ADD CONSTRAINT `tbl_historial_de_trabajo_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`);

--
-- Filtros para la tabla `tbl_idiomas`
--
ALTER TABLE `tbl_idiomas`
  ADD CONSTRAINT `tbl_idiomas_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`);

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `tbl_rol` (`rol_id`);

--
-- Filtros para la tabla `tbl_usuariovacante`
--
ALTER TABLE `tbl_usuariovacante`
  ADD CONSTRAINT `tbl_usuariovacante_ibfk_1` FOREIGN KEY (`id_vacante`) REFERENCES `tbl_vacante` (`id_vacante`),
  ADD CONSTRAINT `tbl_usuariovacante_ibfk_3` FOREIGN KEY (`id_seleccionado`) REFERENCES `tbl_seleccionado` (`id_seleccionado`),
  ADD CONSTRAINT `tbl_usuariovacante_ibfk_4` FOREIGN KEY (`usu_id`) REFERENCES `tbl_usuario` (`usu_id`);

--
-- Filtros para la tabla `tbl_vacante`
--
ALTER TABLE `tbl_vacante`
  ADD CONSTRAINT `tbl_vacante_ibfk_1` FOREIGN KEY (`id_estadovacante`) REFERENCES `tbl_estadovacante` (`id_estadovacante`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
