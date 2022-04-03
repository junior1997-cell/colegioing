-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2021 a las 01:15:45
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `etrisa_colegioingmoyo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `idalquiler` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text NOT NULL,
  `capacidad` text NOT NULL,
  `direccion` text NOT NULL,
  `condiciones` text NOT NULL,
  `foto` text NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idalquiler`, `nombre`, `descripcion`, `capacidad`, `direccion`, `condiciones`, `foto`, `estado`) VALUES
(1, 'Coliseo Multiusos CIP Moyobamba', 's un bien del Colegio de Ingenieros del Perú – Consejo Departamental de Cajamarca, diseñado y construido para la práctica de actividades deportivas, recreación, culturales y artísticas.\r\n\r\nEl Coliseo cuenta con una plataforma deportiva para la realización de los deportes de Fulbito, Vóley, Básquet y otros cuyo ejercicio resulte técnicamente posible; También cuenta con salas de: Tenis de mesa, Billas y Billar, Gimnasio, Ajedrez y Sapo.', '135', 'Jr. Alfonso Ugarte N° 983', 'Se debe ingresar a la plataforma deportiva con zapatillas de planta de goma.\r\n\r\nNo se permitirá la realización de parrilladas, polladas, anticuchadas u otras actividades \r\n relacionadas dentro de las instalaciones del Coliseo.\r\n\r\nEsta prohibido usar pancartas, símbolos, emblemas o leyendas que por su contenido o significado pueda incitar a la violencia.\r\n\r\nEsta prohibido todo tipo de discriminación.', '4161265953735.png', '0'),
(2, 'Auditorio Principal CIP', 'Es un bien del Colegio de Ingenieros del Perú – Consejo Departamental de Cajamarca, diseñado y construido para la realización de eventos académicos tales como conferencias, seminarios, talleres y cursos; Ceremonias protocolares; Y otros cuyo ejercicio resulte técnicamente posible.\r\n\r\nEl auditorio cuenta: 1 atril, 1 mesa principal, 200 sillas, 2 micrófonos inalámbricos, 1 pizarra, internet, equipo de audio, 1 televisor, 1 proyector y ecran.', '200', 'l Jr. Alfonso Ugarte N° 973 tercer piso', 'El auditorio es de uso exclusivo para eventos académicos.\r\nEsta prohibido usar pancartas, símbolos, emblemas o leyendas que por su contenido o significado pueda incitar a la violencia.\r\nEsta prohibido todo tipo de discriminación.', '2161265950837.png', '0'),
(3, 'Sala de Audiovisuales', 'Es un bien del Colegio de Ingenieros del Perú – Consejo Departamental de Cajamarca, diseñado y construido para la realización de eventos académicos tanto virtuales como presenciales tales como cursos de especialización, charlas, talleres y otros cuyo ejercicio resulte técnicamente posible.\r\n\r\nLa sala de audiovisuales cuenta con: Atril, sillas, pizarra, internet, equipo de audio, proyector y ecran.', '12000', 'Jr. Alfonso Ugarte N° 973 segundo piso', 'Se debe ingresar a la plataforma deportiva\r\ncon zapatillas de planta de goma.\r\n\r\nNo se permitirá la realización de parrilladas, polladas, anticuchadas u otras actividades relacionadas dentro de las instalaciones del Coliseo.\r\n\r\nEsta prohibido usar pancartas, símbolos, emblemas o leyendas que por su contenido o significado pueda incitar a la violencia.\r\n\r\nEsta prohibido todo tipo de discriminación.', '0161265946935.png', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

CREATE TABLE `capacitaciones` (
  `idcapacitacion` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `costo` text NOT NULL,
  `fecha` date NOT NULL,
  `foto` text NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`idcapacitacion`, `titulo`, `descripcion`, `costo`, `fecha`, `foto`, `estado`) VALUES
(1, 'LAS CAPACITACIONES NO SE DETIENEN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate\r\n mollitia harum natus enim, voluptate reiciendis facilis error \r\n			et totam nulla minima blanditiis temporibus recusandae sint velit cu', '120.50', '2021-02-03', '10161239955730.JPG', '0'),
(2, 'LAS CAPACITACIONES NO SE DETIENEN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate mollitia harum natus enim, voluptate reiciendis facilis error et totam nulla minima blanditiis temporibus recusandae sint velit cu', '00.00', '2021-03-10', '20161231685937.png', '1'),
(3, 'Contabilidad', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate mollitia harum natus enim, voluptate reiciendis facilis error et totam nulla minima blanditiis temporibus recusandae sint velit\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate mollitia harum natus enim, voluptate reiciendis facilis error et totam nulla minima blanditiis temporibus recusandae sint velit', '300', '2021-02-24', '10161231753035.png', '0'),
(4, 'Contabilidad', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate mollitia harum natus enim, voluptate reiciendis facilis error et totam nulla minima blanditiis temporibus recusandae sint velit', '', '2021-02-10', '16161231760636.png', '1'),
(5, 'LAS CAPACITACIONES NO SE DETIENEN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate\r\n mollitia harum natus enim, voluptate reiciendis facilis error et totam nulla minima blanditiis temporibus recusandae sint velit cu', '100.00', '2010-00-00', '19161231793724.png', '0'),
(6, 'LAS CAPACITACIONES NO SE DETIENEN', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore cupiditate\r\n mollitia harum natus enim, voluptate reiciendis facilis error \r\n			et totam nulla minima blanditiis temporibus recusandae sint velit cu', '50.00', '2021-02-16', '7161247734641.jpg', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `idcapitulos` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `foto` text NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`idcapitulos`, `titulo`, `descripcion`, `foto`, `estado`) VALUES
(1, 'AMBIENTALES Y AFINES', 'El Capítulo de Ingenieros Ambientales y Afines congrega a los profesionales formados con un enfoque integral humanístico y social, su rol principal es ser investigador y promotor de los procesos de planificación y desarrollo sostenible de nuestras regiones, con visión de futuro y liderazgo. Promueve modelos alternativos de desarrollo, que garantice a la generación de hoy, crecimiento económico, equidad social y aprovechamiento adecuado de los recursos naturales, humanos y ambientales, sin perjudicar los intereses ni posibilidad de desarrollo a las generaciones futuras. La diferencia que marca el Ingeniero Ambiental, está en el manejo y dominio de estrategias en base a amplia visión y participación activa, coordinación permanente, flexibilidad y arte de concertación. La ética profesional del Ingeniero Ambiental, se fortalece en base a las capacidades cognoscitivas, afectivas y creativas, que le permita promover acciones conjuntas, construir una sociedad justa compatible al ambiente.', '2161133664224.jpg', '0'),
(2, 'AGRÓNOMOS Y AFINES', 'El Capítulo de Ingenieros Agrónomos y Afines congrega a los profesionales formados para planificar, evaluar y monitorear los procesos en cadenas productivas y labores agrícolas; para diseñar, organizar y administrar proyectos de su especialidad; para gerenciar empresas agropecuarias; para conducir y realizar investigación científica y tecnológica; para gerenciar proyectos; hacer uso racional y sostenible de los recursos naturales. Formado en valores humanísticos y ejercicio de liderazgo.', '7161133886823.jpg', '0'),
(3, 'INDUSTRIALES Y AFINES', 'El Capítulo de Ingenieros Industriales y Afines congrega a los profesionales formados para planificar, evaluar y controlar los procesos de conservación y/o transformación de productos agrícolas, pecuarios, forestales, hidrobiológicos y los desechos Agroindustriales; capacidad para diseñar, organizar y administrar empresas agro-industriales. Formular planes y políticas de desarrollo agro-industrial, acorde con la realidad y perspectiva de la Región Amazónica; capacidad de afianzar conocimientos de ingeniería; capacidad para conducir y realizar investigación científica y tecnológica; responsabilidad social y ambiental; capacidad de toma de decisiones; capacidad de liderazgo; emprendedor, creativo, innovador; y con dominio de manejo tecnológico e informático.', '17161133889222.jpg', '0'),
(4, 'CIVILES', 'El Capítulo de Ingeniería Civil congrega a los profesionales formados para elaborar, planificar, evaluar, supervisar, construir y hacer el mantenimiento de obras civiles. \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nEstudia los materiales y técnicas de construcción empleando conocimientos de diseños de ingeniería, según el tipo de obras (casas, carreteras, irrigaciones, etc.). \r\n\r\nRealiza levantamientos topográficos, evalúa las condiciones del lugar, prepara presupuesto de obra y toda la documentación técnica y administrativa requerida para el proyecto y/o licitación. \r\n\r\n\r\nResponsabilidad social y ambiental; capacidad de toma de decisiones; capacidad de liderazgo; manejo de Software aplicado a la especialidad; capacidad de comunicación verbal y escrita a todo nivel.', '17161133890939.jpg', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `idcarousel` int(11) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `carousel`
--

INSERT INTO `carousel` (`idcarousel`, `foto`, `titulo`, `estado`) VALUES
(2, '6161129088635.jpg', 'Colegio de ingenieros del Perú', '0'),
(5, '17161129111821.jpg', 'CIP San Martin-Moyobamba', '0'),
(6, '4161129101925.jpg', 'Ciudad de las orquídeas', '0'),
(9, '8161129081526.jpg', 'ee', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certifhabilidad`
--

CREATE TABLE `certifhabilidad` (
  `idcertifhabilidad` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `foto` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `certifhabilidad`
--

INSERT INTO `certifhabilidad` (`idcertifhabilidad`, `titulo`, `descripcion`, `foto`, `fecha`, `estado`) VALUES
(1, 'TIPO &quot;A&quot; SIMPLE', 'Se otorga, a solicitud del profesional, para acreditar que se encuentra habilitado para ejercer la profesión.', '10161007839031.png', '2021-01-08 03:59:49', '0'),
(2, 'TIPO &quot;B&quot; RESIDENCIAS DE OBRAS Y/O SUPERVISIÓN', 'Es utilizado para la firma de contratos en obras públicas. Para su emisión, deberá presentar copia simple del otorgamiento de la Buena Pro, así como estar al día en sus cuotas institucionales, inclusive al mes que lo solicita; el valor del Certificado dependerá del monto de la obra. El Reglamento definirá los requisitos.', '12161007840037.png', '2021-01-08 04:00:00', '0'),
(3, 'TIPO &quot;C&quot; PROYECTOS Y/O LICENCIAS DE CONSTRUCCIÓN', 'Es utilizado para certificar la realización de un proyecto. Es usado ante las Municipalidades Provinciales y Distritales para la obtención de la licencia de proyecto. El Reglamento definirá los requisitos.', '4161007841021.png', '2021-01-21 02:15:21', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegiatura`
--

CREATE TABLE `colegiatura` (
  `idcolegiatura` int(11) NOT NULL,
  `mordinario` text NOT NULL,
  `mtemporal` text NOT NULL,
  `mvitalico` text NOT NULL,
  `sespecializacion` text NOT NULL,
  `ctemporal` text NOT NULL,
  `cdepartamental` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colegiatura`
--

INSERT INTO `colegiatura` (`idcolegiatura`, `mordinario`, `mtemporal`, `mvitalico`, `sespecializacion`, `ctemporal`, `cdepartamental`) VALUES
(1, 'Son aquellos incorporados al CIP, que cuentan con Título Profesional expedido por Universidad Peruana, que acreditan cinco años de estudios o diez (10) semestres académicos, de acuerdo a la Ley Universitaria. Su registro es único y permanente.\r\n\r\nAsimismo, son Ingenieros Ordinarios los peruanos que han concluido estudios de ingeniería en universidades extranjeras, internacionalmente acreditadas, que cuenten con cinco años de estudios o diez (10) semestres académicos o cuyo título ha sido revalidado por universidad peruana autorizada por Ley.\r\n\r\nTambién podrán incorporarse como Ingenieros Ordinarios los profesionales en ingeniería registrados en Colegios Profesionales del extranjero con los cuales el CIP tiene convenios específicos de mutuo reconocimiento.', 'Son los ingenieros extranjeros a quienes la Superintendencia Nacional de Educación Superior Universitaria o la entidad que cumpla dicha función reconoce su título profesional en ingeniería.\r\n\r\nEl CIP, previa evaluación de los requisitos del reglamento, otorga el registro para el ejercicio temporal de la profesión. Su registro es único y temporal.\r\n\r\nLos Ingenieros Temporales podrán obtener la categoría de Ordinario siempre que cuenten con la calidad migratoria de Residente Permanente de acuerdo a Ley y que hayan ejercido la profesión con registro temporal por más de tres (03) años consecutivos y cumplan con lo establecido en las normas respectivas.', 'Son aquellos ingenieros ordinarios que han aportado sus cuotas institucionales por 30 años. Al adquirir la condición de ingeniero vitalicio, su habilitación para el ejercicio de la profesión es permanente, salvo sanción institucional o judicial. Mantendrán el número de registro de su incorporación.', 'Se puede solicitar el reconocimiento para obtener colegiatura en más de una segunda especialidad cuando se ha seguido una carrera de ingeniería diferente dela que dio origen a la colegiatura en el CIP.', '', 'Se puede solicitar el cambio de circunscripción territorial por haber variado el domicilio o el lugar de trabajo del colegiado.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `idcomunicado` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `foto` text DEFAULT NULL,
  `estado` char(1) NOT NULL DEFAULT '1',
  `fecha` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`idcomunicado`, `titulo`, `descripcion`, `foto`, `estado`, `fecha`) VALUES
(1, 'IMPORTANCIA DE CONTAR CON UN USUARIO EN EL CIPVIRTUAL', 'Podrá realizar: Cambio de Sede, Solicitar su Correo Institucional, Participar de Bolsa de Trabajo, Registrar Carta Declaratoria de Beneficiario ISS y Nueva Especialidad. Mayor Información llámenos.', '1161401084025.png', '0', '22/2/2021'),
(2, 'LAS CAPACITACIONES NO SE DETIENEN', 'El CIP Moyobamba viene desarrollando el Curso de manera virtual a través de la plataforma Zoom &quot;Diseño con tecnología BIM en REVIT 2019&quot;', '', '0', '30/12/2020'),
(3, 'LAS CAPACITACIONES NO SE DETIENEN', 'El CIP Moyobamba viene desarrollando el Curso de manera virtual a través de la plataforma Zoom &quot;Diseño con tecnología BIM en REVIT 2019&quot;', '14161334057221.png', '1', '23/2/2021'),
(4, 'IMPORTANCIA DE CONTAR CON UN USUARIO EN EL CIPVIRTUAL', 'Podrá realizar: Cambio de Sede, Solicitar su Correo Institucional, Participar de Bolsa de Trabajo, Registrar Carta Declaratoria de Beneficiario ISS y Nueva Especialidad. Mayor Información llámenos.', '', '0', '7/2/2021'),
(5, 'Ingeniería', 'La ingeniería es el conjunto de conocimientos científicos y tecnológicos para la innovación, invención, desarrollo y mejora de técnicas y herramientas para satisfacer las nssasassasasdwedwedwdwedwdd dwdw', '', '1', '22/2/2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

CREATE TABLE `contactanos` (
  `idcontactanos` int(11) NOT NULL,
  `coordenadas` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`idcontactanos`, `coordenadas`, `direccion`, `email`, `telefono`) VALUES
(1, '-5.940087, -77.307217', 'Jr. Pedro Canga #390 - Moyobamba', 'cipmoyobamba@cip.org.pe', '(042) 352654 / 973532762');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenios`
--

CREATE TABLE `convenios` (
  `idconvenio` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha` timestamp NULL DEFAULT current_timestamp(),
  `estado` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `convenios`
--

INSERT INTO `convenios` (`idconvenio`, `nombre`, `foto`, `descripcion`, `fecha`, `estado`) VALUES
(2, 'Sunat', '14160981489626.png', 'Sunat Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-01 21:00:33', '0'),
(3, 'Ministerio de economía y finanzas', '18160980241232.jpg', 'Ministerio de economía y finanzas Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-01 21:16:57', '0'),
(4, 'sunedu', '3160979993537.png', 'convenio con sunedu Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-01 22:00:28', '0'),
(5, 'El Peruano', '17160981465336.png', 'El Peruano Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-05 02:44:12', '0'),
(6, 'Organismo supervisión de las contrataciones d', '9160981503732.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-05 02:50:36', '0'),
(7, 'Asociación de municipalidades del Perú', '15160981538722.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-05 02:56:26', '0'),
(8, 'Gobierno regional San Martin', '11160981556034.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-05 02:59:20', '0'),
(9, 'Sunarp', '14160981566623.png', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio consequuntur unde animi, quasi voluptatum, \r\nfacilis esse quidem tenetur, ducimus rerum illum odit. Magnam, cum doloribus nobis eius sit quae perferendis.', '2021-01-05 03:01:06', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `decano`
--

CREATE TABLE `decano` (
  `id_decano` int(11) NOT NULL,
  `decano_periodo` varchar(50) NOT NULL,
  `decano_nom_ape` text NOT NULL,
  `decano_profesion` varchar(100) NOT NULL,
  `decano_cip` varchar(20) NOT NULL,
  `estado_decano` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `decano`
--

INSERT INTO `decano` (`id_decano`, `decano_periodo`, `decano_nom_ape`, `decano_profesion`, `decano_cip`, `estado_decano`) VALUES
(1, '1988 - 1989', 'Eduardo Díaz Acosta', 'Ing. Economista', '16924', 0),
(2, '1990 – 1991', 'Eduardo Díaz Acosta', 'Ing. Economista', '16924', 0),
(3, '1992 – 1993', 'Eduardo Díaz Acosta', 'Ing. Economista', '16924', 0),
(4, '1994 – 1995', 'Henry Cárdenas Bardáles', 'Ing. Forestal', '10553', 0),
(5, '1996 – 1997', 'Telésforo Ramos Huancas', 'Ing. Agrónomo', '25669', 0),
(6, '1998 – 1999', 'Vitaliano Vegas Rivera', 'Ing. Civil', '15624', 0),
(7, '2000 - 2001', 'Llery Gardini Terrones', 'Ing. Químico', '29811', 0),
(8, '2002 - 2003', 'Tomás Juan Pérez Ursúa', 'Ing. Agrónomo', '13813', 0),
(9, '2004 - 2005', 'Tomás Juan Pérez Ursúa', 'Ing. Agrónomo', '13813', 0),
(10, '2006 - 2007', 'Julio César De La Rosa Ríos', 'Ing. Geólogo', '15627', 0),
(11, '2008 -2009', 'Jorge Vela Rojas', 'Ing. Agrónomo', '9206', 0),
(12, '2010-2012', 'Erbin Jorge Díaz Navarro', 'Ing. Civil', '30522', 0),
(13, '2013', 'Eduardo Díaz Acosta', 'Ing. Economista', '16924', 0),
(14, '2014-2015', 'Yrwin Francisco Azabache Liza (Vicedecano asume la decanatura por fallecimiento del Decano electo)', 'Ing. Químico', '55688', 0),
(15, '2016-2018', 'Rubén Ruiz Valles', 'Ing. Forestal', '48609', 0),
(16, '2019 -2021', 'Rafael Rengifo del Castillo', 'Ing. Ambiental', '73032', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directiva`
--

CREATE TABLE `directiva` (
  `id_directiva` int(11) NOT NULL,
  `cip_directiva` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `cargo_directiva` text COLLATE utf8_spanish_ci NOT NULL,
  `miembro_directiva` text COLLATE utf8_spanish_ci NOT NULL,
  `correo_directiva` text COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo_directiva` int(11) NOT NULL,
  `estado_directiva` int(11) NOT NULL DEFAULT 0,
  `fecha_directiva` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `directiva`
--

INSERT INTO `directiva` (`id_directiva`, `cip_directiva`, `cargo_directiva`, `miembro_directiva`, `correo_directiva`, `id_tipo_directiva`, `estado_directiva`, `fecha_directiva`) VALUES
(1, '73032', 'DECANO', 'Rengifo Del Castillo RAFAEL', 'rafaelrc_2000@yahoo.com', 1, 0, '2021-01-05 04:22:47'),
(2, '87187', 'VICE DECANO', 'Vásquez Vásquez HENRY HAROLD', 'henry.h.vasquez.v@gmail.com', 1, 0, '2021-01-05 04:22:47'),
(4, '96104', 'DIR. SECRETARIO', 'García Tello JUAN', 'Juangarciat24@gmail.com', 1, 0, '2021-01-08 03:30:06'),
(5, '88807', 'DIR. PRO SECRETARIO', 'Egoavil Flores MIRALIZ', 'megoavilf@gmail.com', 1, 0, '2021-01-08 03:31:05'),
(6, '101070', 'DIR. TESORERO', 'Céliz Díaz LUDVING', 'ludvingcd@gmail.com', 1, 0, '2021-01-08 03:39:00'),
(7, '96848', 'DIR. PRO TESORERO', 'Delgado Vásquez JAIME EFRAIN', 'delgado.eei@gmail.com', 1, 0, '2021-01-08 03:39:52'),
(8, '122725', 'PRESIDENTE', 'Meléndez Rojas JOSE ANTONIO', 'melendez67@hotmail.com', 2, 0, '2021-01-08 03:46:39'),
(9, '110732', 'VICE - PRESIDENTE', 'Collazos Marina HANNS LIMMER', 'hannslimmer@gmail.com', 2, 0, '2021-01-08 03:49:28'),
(10, '105551', 'SECRETARIO', 'Gonzáles Pinedo LUIS GUILLERMO', 'luisgonzales1@hotmail.com', 2, 0, '2021-01-08 03:51:20'),
(11, '167121', 'PRO SECRETARIO', 'Ramos Bardález MARIA ELENA', 'mramosbardales@gmail.com', 2, 0, '2021-01-08 03:57:37'),
(12, '30786', 'VOCAL', 'Zuta Becerril JUAN JUVER', 'juverzb@hotmail.com', 2, 0, '2021-01-08 03:59:03'),
(13, '89757', 'PRESIDENTE', 'Pezo Seijas JOSE AUGUSTO', 'josepzoucv@gmail.com', 3, 1, '2021-01-08 03:59:55'),
(14, '147590', 'VICE - PRESIDENTE', 'Vilca Lucana RITA', 'ritinia10@hotmail.com', 3, 0, '2021-01-08 04:00:18'),
(15, '100153', 'SECRETARIO', 'Carranza Dávila LUCAS', 'lcarranzad@gmail.com', 3, 0, '2021-01-08 04:00:42'),
(16, '177961', 'PRO SECRETARIO', 'Neira Ruiz REINER', 'neira_18_92@hotmail.com', 3, 0, '2021-01-08 04:01:15'),
(17, '177954', 'VOCAL 1', 'Rodriguez Celiz SERGIO', 'srodriguezceliz@gmail.com', 3, 0, '2021-01-08 04:01:50'),
(18, '96849', 'VOCAL 2', 'Ocampo Casique BLANCA', 'bocampoc@gmail.com', 3, 0, '2021-01-08 04:02:14'),
(19, '65033', 'PRESIDENTE', 'Rojas Mesía TEODORO', 'teorojas2014@gmail.com', 4, 0, '2021-01-08 04:13:14'),
(20, '115215', 'VICE - PRESIDENTE', 'Daza Santa María CARMEN VERONICA', 'carverdsm@gmail.com', 4, 0, '2021-01-08 04:13:41'),
(21, '91913', 'SECRETARIO', 'Torres Pinedo HUGO RODOLFO', 'hugtopin@gmail.com', 4, 0, '2021-01-08 04:14:14'),
(22, '122728', 'PRO SECRETARIO', 'Vásquez Riva ROBINSON', 'ingrvr@gmail.com', 4, 0, '2021-01-08 04:14:39'),
(23, '151066', 'VOCAL 1', 'Arce Haya JOSE FAUSTINO', 'josearcehayaa@gmail.com', 4, 0, '2021-01-08 04:15:02'),
(24, '135733', 'VOCAL 2', 'Sánchez Vallejos WILSON', 'wsanchezvallejos@gmail.com', 4, 0, '2021-01-08 04:15:30'),
(25, '64547', 'PRESIDENTE', 'Aycachi Inga LUIS ALBERTO', 'luaying20@gmail.com', 5, 0, '2021-01-08 04:16:09'),
(26, '144121', 'VICE - PRESIDENTE', 'Mozombite Correa ESLANDER', 'eslash27@gmail.com', 5, 0, '2021-01-08 04:16:31'),
(27, '160246', 'SECRETARIO', 'Sánchez Yajahuanca RENÉ', 'constru_lider@hotmail.com', 5, 0, '2021-01-08 04:18:25'),
(28, '164813', 'PRO SECRETARIO', 'Linares Bocanegra JANS JHONY', 'jans.linares@gmail.com', 5, 0, '2021-01-08 04:18:52'),
(29, '114074', 'VOCAL 1', 'Gonzáles Flores JORGE LUIS', 'jgonzales051285@gmail.com', 5, 0, '2021-01-08 04:19:16'),
(30, '67778', 'VOCAL 2', 'Elizarbe Ramos LUIS VICTOR', 'luverunim@gmail.com', 5, 0, '2021-01-08 04:19:41'),
(33, '66666', '66666', '666666', '666666@gmail.com', 4, 0, '2021-01-22 04:34:40'),
(34, '96848', 'DIR. PRO TESORERO', 'Delgado Vásquez JAIME EFRAIN', 'delgado.eei@gmail.com', 1, 0, '2021-02-24 16:32:21'),
(35, '30786', 'VOCAL', 'Zuta Becerril JUAN JUVER', 'juverzb@hotmail.com', 2, 0, '2021-02-24 16:32:48'),
(36, '30786', 'VOCAL', 'Zuta Becerril JUAN JUVER', 'juverzb@hotmail.com', 2, 0, '2021-02-24 16:36:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docnorma`
--

CREATE TABLE `docnorma` (
  `id_docnorma` int(11) NOT NULL,
  `doc_doc` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_doc` text COLLATE utf8_spanish_ci NOT NULL,
  `idtipodoc` int(11) NOT NULL,
  `estado_doc` int(11) NOT NULL DEFAULT 0,
  `fecha_doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `docnorma`
--

INSERT INTO `docnorma` (`id_docnorma`, `doc_doc`, `nombre_doc`, `idtipodoc`, `estado_doc`, `fecha_doc`) VALUES
(1, 'recursos/pdf/5161088907741.pdf', 'Reglamento Nacional para la Acreditacin de Inspectores Municipales de Obra del CIP', 1, 0, '2021-01-17 13:09:49'),
(2, 'recursos/pdf/9161088910431.pdf', 'Reglamento del Tribunal AD HOC Profesional Nacional del CIP', 1, 0, '2021-01-17 13:11:43'),
(3, 'recursos/pdf/1161088912733.pdf', 'Reglamento del Instituto de Servicios Sociales - ISS', 1, 0, '2021-01-17 13:12:07'),
(4, 'recursos/pdf/0161088918625.pdf', 'Reglamento del Instituto de Prospectiva y Desarrollo Estratégico del CIP IPYDE-CIP', 1, 0, '2021-01-17 13:13:06'),
(5, 'recursos/pdf/15161088922425.pdf', 'Reglamento del Instituto de Estudios Profesionales de Ingeniera IEPI-CIP', 1, 0, '2021-01-17 13:13:44'),
(6, 'recursos/pdf/16161088925230.pdf', 'Reglamento del Consejo Nacional CIP', 1, 0, '2021-01-17 13:14:12'),
(7, 'recursos/pdf/4161088927630.pdf', 'Reglamento del Centro de Arbitraje del CIP', 1, 0, '2021-01-17 13:14:36'),
(8, 'recursos/pdf/0161088931335.pdf', 'Reglamento de Viaticos del CIP', 1, 0, '2021-01-17 13:15:12'),
(9, 'recursos/pdf/3161088933328.pdf', 'Reglamento de Transferencias de Cargos del CIP', 1, 0, '2021-01-17 13:15:33'),
(10, 'recursos/pdf/5161088936128.pdf', 'Reglamento de Sesiones del Congreso Nacional de Consejos Departamentales CNCD', 1, 0, '2021-01-17 13:16:00'),
(11, 'recursos/pdf/15161088939139.pdf', 'Reglamento de Premiación y Condecoraciones del CIP', 1, 0, '2021-01-17 13:16:30'),
(12, 'recursos/pdf/4161088942231.pdf', 'Reglamento de Peritos Judiciales del CIP', 1, 0, '2021-01-17 13:17:01'),
(13, 'recursos/pdf/13161088944828.pdf', 'Reglamento de los Órganos de Control del CIP', 1, 0, '2021-01-17 13:17:28'),
(14, 'recursos/pdf/4161088948821.pdf', 'Reglamento de los Consejos Consultivos del CIP', 1, 0, '2021-01-17 13:18:07'),
(15, 'recursos/pdf/10161088951535.pdf', 'Reglamento de los Centros de Peritaje del CIP', 1, 0, '2021-01-17 13:18:34'),
(16, 'recursos/pdf/10161088954330.pdf', 'Reglamento de las Comisiones de Defensa Profesional CIP', 1, 0, '2021-01-17 13:19:03'),
(17, 'recursos/pdf/7161088956730.pdf', 'Reglamento de las Comisiones de Colegiación del CIP', 1, 0, '2021-01-17 13:19:27'),
(18, 'recursos/pdf/15161088959432.pdf', 'Reglamento de Elecciones Generales del CIP', 1, 0, '2021-01-17 13:19:54'),
(19, 'recursos/pdf/9161088961341.pdf', 'Reglamento de Comités Locales CIP', 1, 0, '2021-01-17 13:20:13'),
(20, 'recursos/pdf/3161088964332.pdf', 'Reglamento de Comisión de Asuntos Municipales del CIP', 1, 0, '2021-01-17 13:20:42'),
(21, 'recursos/pdf/6161089003835.pdf', 'Reglamento de Asamblea Departamental y Consejos Departamentales del CIP', 1, 0, '2021-01-17 13:27:18'),
(22, 'recursos/pdf/5161089005737.pdf', 'Reglamento de Colegiación CIP', 1, 0, '2021-01-17 13:27:37'),
(23, 'recursos/pdf/1161089007831.pdf', 'Reglamento de Capítulos del CIP', 1, 0, '2021-01-17 13:27:58'),
(24, 'recursos/pdf/9161089011438.pdf', 'Ley del Profesional de Ingeniera - Ley Nro 28858', 2, 0, '2021-01-17 13:28:33'),
(25, 'recursos/pdf/13161089013131.pdf', 'Ley Nro 16053', 2, 0, '2021-01-17 13:28:51'),
(26, 'recursos/pdf/19161089015541.pdf', 'Reglamento de la Ley Nro 28858 - Ley que complementa la Ley Nro 16053', 2, 0, '2021-01-17 13:29:14'),
(27, 'recursos/pdf/2161089018238.pdf', 'Nuevo Estatuto del CIP 2018', 3, 0, '2021-01-17 13:29:41'),
(28, 'recursos/pdf/15161089020227.pdf', 'Comisión Nacional de Opinión Técnica del CIP- CNOT', 3, 0, '2021-01-17 13:30:01'),
(29, 'recursos/pdf/11161089023623.pdf', 'Código de Ética del CIP', 3, 0, '2021-01-17 13:30:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doc_benficio_cole`
--

CREATE TABLE `doc_benficio_cole` (
  `idbeneficio` int(11) NOT NULL,
  `nombre_doc` text NOT NULL,
  `documento` varchar(130) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `doc_benficio_cole`
--

INSERT INTO `doc_benficio_cole` (`idbeneficio`, `nombre_doc`, `documento`, `estado`) VALUES
(1, 'Reglamento del Instituto de Servicios Sociales – 2020', 'recursos/pdf/beneficio_cole/8161273963227.pdf', '0'),
(2, 'Formatos de declaración jurada para los trámites de Asignaciones que brinda el ISS-CIP', 'recursos/pdf/beneficio_cole/16161273150340.pdf', '0'),
(3, 'Formato de Carta Declaratoria de Beneficiarios', 'recursos/pdf/beneficio_cole/8161273175341.pdf', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `idempresa` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `mision` text DEFAULT NULL,
  `vision` text DEFAULT NULL,
  `valores` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`idempresa`, `nombre`, `descripcion`, `mision`, `vision`, `valores`) VALUES
(1, 'Consejo Departamental San Martín - Moyobamba', 'El Colegio de Ingenieros del Perú es una institución autónoma con personería jurídica de derecho público interno representativa de la profesión de ingeniería en el Perú, integrada por los profesionales de las distintas especialidades de la ingeniería creadas o por crearse, graduados en universidades oficialmente autorizadas para otorgar o revalidar, a nombre de la Nación, el título de ingeniero.', 'Institución deontológica, sin fines de lucro, que representa y agrupa a los ingenieros profesionales del Perú, de todas las especialidades, que cautela y preserva el comportamiento ético de sus miembros, y debe asegurar al Perú que cuenta con una profesión nacional que ejerce la ingeniería en un contexto de orden, respeto, competitividad, calidad y ética, para el desarrollo regional y Nacional y que está enraizada en sus valores sociales, culturales y políticos, como base fundamental en el proceso de desarrollo de la nación.', 'Institución deontológica, sin fines de lucro, que representa y agrupa a los ingenieros profesionales del Perú, de todas las especialidades, que cautela y preserva el comportamiento ético de sus miembros, y debe asegurar al Perú que cuenta con una profesión nacional que ejerce la ingeniería en un contexto de orden, respeto, competitividad, calidad y ética, para el desarrollo regional y Nacional y que está enraizada en sus valores sociales, culturales y políticos, como base fundamental en el proceso de desarrollo de la nación.', 'Promover el avance permanente de la ingeniería como medio para contribuir al desarrollo técnico, humano y conceptual del ingeniero, así como al desarrollo sostenible del país.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especializacion_ing`
--

CREATE TABLE `especializacion_ing` (
  `idespecializacion` int(11) NOT NULL,
  `peritaje` text NOT NULL,
  `arbitraje` text NOT NULL,
  `certificacion_calidad` text NOT NULL,
  `asuntos_municipales` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especializacion_ing`
--

INSERT INTO `especializacion_ing` (`idespecializacion`, `peritaje`, `arbitraje`, `certificacion_calidad`, `asuntos_municipales`) VALUES
(1, 'MISIÓN\r\nInstitución deontológica, sin fines de lucro, que representa y agrupa a los ingenieros profesionales del Perú, de todas las especialidades, que cautela y preserva el comportamiento ético de sus miembros, y debe asegurar al Perú que cuenta con una profesión nacional que ejerce la ingeniería en un contexto de orden, respeto, competitividad, calidad y ética, para el desarrollo regional y Nacional y que está enraizada en sus valores sociales, culturales y políticos, como base fundamental en el proceso de desarrollo de la nación.\r\n\r\nVISIÓN\r\nSer reconocida como una institución sólida, que patrocina el manejo eficiente del conocimiento, con la finalidad de orientar a la sociedad peruana en las grandes decisiones, fomentando la práctica de valores y comportamiento ético de los ingenieros profesionales, así como elevando la calidad de la ingeniería, apoyando el crecimiento del país en el contexto de la globalización.\r\n\r\nOBJETIVOS\r\nPromover el avance permanente de la ingeniería como medio para contribuir al desarrollo técnico, humano y conceptual del ingeniero, así como al desarrollo sostenible del país.', 'MISIÓN\r\nInstitución deontológica, sin fines de lucro, que representa y agrupa a los ingenieros profesionales del Perú, de todas las especialidades, que cautela y preserva el comportamiento ético de sus miembros, y debe asegurar al Perú que cuenta con una profesión nacional que ejerce la ingeniería en un contexto de orden, respeto, competitividad, calidad y ética, para el desarrollo regional y Nacional y que está enraizada en sus valores sociales, culturales y políticos, como base fundamental en el proceso de desarrollo de la nación.\r\n\r\nVISIÓN\r\nSer reconocida como una institución sólida, que patrocina el manejo eficiente del conocimiento, con la finalidad de orientar a la sociedad peruana en las grandes decisiones, fomentando la práctica de valores y comportamiento ético de los ingenieros profesionales, así como elevando la calidad de la ingeniería, apoyando el crecimiento del país en el contexto de la globalización.\r\n\r\nOBJETIVOS\r\nPromover el avance permanente de la ingeniería como medio para contribuir al desarrollo técnico, humano y conceptual del ingeniero, así como al desarrollo sostenible del país.', 'MISIÓN\r\nInstitución deontológica, sin fines de lucro, que representa y agrupa a los ingenieros profesionales del Perú, de todas las especialidades, que cautela y preserva el comportamiento ético de sus miembros, y debe asegurar al Perú que cuenta con una profesión nacional que ejerce la ingeniería en un contexto de orden, respeto, competitividad, calidad y ética, para el desarrollo regional y Nacional y que está enraizada en sus valores sociales, culturales y políticos, como base fundamental en el proceso de desarrollo de la nación.\r\n\r\nVISIÓN\r\nSer reconocida como una institución sólida, que patrocina el manejo eficiente del conocimiento, con la finalidad de orientar a la sociedad peruana en las grandes decisiones, fomentando la práctica de valores y comportamiento ético de los ingenieros profesionales, así como elevando la calidad de la ingeniería, apoyando el crecimiento del país en el contexto de la globalización.\r\n\r\nOBJETIVOS\r\nPromover el avance permanente de la ingeniería como medio para contribuir al desarrollo técnico, humano y conceptual del ingeniero, así como al desarrollo sostenible del país.', 'CENTROS DE PERITAJE\r\nEs el órgano de apoyo del Consejo Departamental, en las que estén constituidos, encargado de organizar y administrar las solicitudes de peritajes, efectuadas por personas naturales o jurídicas no estatales y derivarlas a los especialistas en cada materia para emitir los informes periciales de parte respectivos.\r\n\r\nCENTROS DE ARBITRAJE\r\nEs el encargado de organizar y administrar los arbitrajes relacionados con la ingeniería, y no resuelve por sí mismo las disputas o controversias derivadas entre las partes, pues actúa prestando asesoramiento y asistencia en su desarrollo conforme a la Ley General de Arbitraje.\r\n\r\nCENTROS DE CERTIFICACIÓN DE CALIDAD\r\nEs el órgano de apoyo del Consejo Departamental para completar la formación profesional y capacitar a ingenieros técnicamente competentes en los procesos de calidad en el manejo de los sistemas de gestión de calidad, en las especialidades y versiones reconocidas basados en estándares mundialmente aceptados.\r\n\r\nCOMISIÓN DE ASUNTOS MUNICIPALES\r\nEs el Órgano especializado cuyo objeto es velar el cumplimiento de las normas técnicas de edificaciones a nivel nacional. Los Consejos Departamentales acreditan a sus Delegados ante las Municipalidades, según sus especialidades, mediante Concursos Públicos cada año, a fin de cubrir las necesidades de las comunas de su jurisdicción, en cumplimiento a las leyes, normas y reglamentos vigentes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `idevento` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `tipopublicacion` varchar(30) NOT NULL,
  `fecha` date NOT NULL,
  `foto` varchar(45) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`idevento`, `titulo`, `descripcion`, `tipopublicacion`, `fecha`, `foto`, `estado`) VALUES
(4, 'Contabilidad para todos', 'Estamos probando', 'Evento', '2021-02-14', '5160972765231.png', '0'),
(5, 'charla virtual', 'Retos y desafíos en el sector del agua y saneamiento', 'Noticia', '2021-02-14', '11160972764139.png', '0'),
(6, 'Contabilidad', 'jjjjj', 'Noticia', '2021-02-14', '14160972775135.jpg', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `idgaleria` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idgaleria`, `titulo`, `descripcion`, `foto`, `estado`) VALUES
(1, 'imagen 1', 'estamos en modo prueba 1', '11161034475128.png', '0'),
(2, 'imagen 2', 'estamos en modo prueba 2', '19161034493736.png', '0'),
(3, 'imagen 3', 'estamos en modo prueba 3', '20161034495940.png', '0'),
(4, 'imagen 4', 'estamos en modo prueba 4', '1161034497929.png', '0'),
(5, 'iamgen 5', 'estamos en modo prueba 5', '16161034499626.png', '0'),
(6, 'imagen 6', 'andamos bien en lo nuestro con ganancias, forex es lo bueno. binarias pierdo :v', '13161034501229.png', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia`
--

CREATE TABLE `historia` (
  `id` int(11) NOT NULL,
  `reseña_historia` text NOT NULL,
  `himno` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historia`
--

INSERT INTO `historia` (`id`, `reseña_historia`, `himno`) VALUES
(1, '<p style=\"\">Con la creación del Colegio de Ingenieros del Perú mediante la Ley 14086, promulgada el 08 de junio de 1962 por el Presidente Constitucional de la República Dr. Manuel Prado Ugarteche. Un grupo de ingenieros, en el año de 1963 convocado por el Ing. Uriel Llanos Allende acuerdan formar la Filial CIP – Moyobamba, en la ciudad capital del Departamento de San Martín, cuyos integrantes fueron los siguientes Ingenieros:<br></p><ul style=\"\"><li style=\"padding: 10px 0px;\">Ing. Olmedo Milciades Ruiz Vásquez.</li><li style=\"padding: 10px 0px;\">Ing. Jorge Torres Rios.</li><li style=\"padding: 10px 0px;\">Ing. Hernán Díaz Arteaga.</li><li style=\"padding: 10px 0px;\">Ing. Leonardo Maldonado.</li><li style=\"padding: 10px 0px;\">Ing. Ricardo Valcárcel Postigo.</li><li style=\"padding: 10px 0px;\">Ing. Alberto Suárez - Defreitas y Noriega.</li></ul><p style=\"\">Por los años de 1960, se iniciaron las primeras obras públicas en el Departamento de San Martín; mediante la Junta Departamental de Obras Públicas donde los ingenieros cumplieron una importante labor en Obras: viales, de saneamiento, eléctricas y agrícolas.</p><p style=\"\">Dada la Ley N° 24648, publicada el 22 de enero de 1987, el CIP se estructura en forma descentralizada. Por lo que, en octubre de 1987 se instala la Asamblea Departamental San Martín – Moyobamba con sede en la ciudad de MOYOBAMBA, Capital del Departamento de San Martín; y se elige al Ing. Eduardo Díaz Acosta Presidente de la Comisión Organizadora del Consejo Departamental de San Martín – Moyobamba; quien realiza las gestiones ante el Consejo Nacional en el año 1988, siendo Decano Nacional el señor Ing. Marco Fernández – Baca Carrasco.</p><p style=\"\">El 22 de agosto de 1988, el Director del Consejo Nacional señor Ing. César Flores Cosío, tomó juramento de honor a los miembros de la primera Junta Directiva del Consejo Departamental San Martín – Moyobamba, y el Decano del Consejo Departamental de La Libertad – Ing. Anibal Meléndez Córdova:</p><p style=\"\"><br></p><table class=\"table \" style=\"background-color: rgb(255, 255, 255); width: 1100px; color: rgb(255, 255, 255); font-family: Arial;\"><tbody><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">1</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Decano Departamental</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Eduardo Díaz Acosta.</td></tr><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">2</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Vicedecano Departamental</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Leonardo Márquez Alabarca.</td></tr><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">3</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Secretario</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Tomás Juan Pérez Ursúa.</td></tr><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">4</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Por Secretario</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Carlos Hugo Egoavil De La Cruz.</td></tr><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">5</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Tesorero</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Olmedo M. Ruiz Vásquez.</td></tr><tr><th scope=\"row\" style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">6</th><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Pro Tesorero</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">:</td><td style=\"color: rgb(0, 0, 0); vertical-align: middle; border-top-color: rgb(221, 221, 221); line-height: 1.42857; white-space: nowrap;\">Ing. Olmedo M. Ruiz Vásquez.</td></tr></tbody></table>', '<p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><b style=\"font-family: inherit; font-size: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">CORO</span></b><br></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">SOMOS EL COLEGIO DE INGENIEROS SOMOS CONSTRUCTORES DEL PERÚ TRABAJANDO JUNTOS LOGRAREMOS (bis) DESARROLLO Y PAZ EN EL PERÚ</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;Source Sans Pro&quot;; margin: 0px; outline: none; padding: 0px; border: 0px; vertical-align: baseline;\"><b>ESTROFAS</b></span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">LOS DESIERTOS SIEMPRE CULTIVAREMOS,</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">CONVERTIREMOS&nbsp; AGUA EN VIVA LUZ, SIN CESAR, LOS ANDES TRASPASAREMOS, DANDO REAL SUSTENTO A MULTITUD. VIDA DE LOS PUEBLOS MEJORAMOS</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Y EL FUTURO DE LA JUVENTUD.</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">SOMOS EL COLEGIO… </span><b><span style=\"font-family: &quot;Source Sans Pro&quot;;\">(</span><span style=\"font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;Source Sans Pro&quot;; margin: 0px; outline: none; padding: 0px; border: 0px; vertical-align: baseline;\">coro</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">)</span></b></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">NUEVA CIENCIA Y TECNICA APLICAMOS CON PRUDENCIA Y MUCHA RECTITUD, CON CUIDADO AL MAR COSECHAMOS, CONSERVAMOS PURO EL AIRE AZUL</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Y PERUANA SELVA DISFRUTAMOS SIN DAÑAR SU VIDA EN PLENITUD</span></p><p align=\"center\" style=\"color: rgb(68, 68, 68); font-size: medium; margin-bottom: 0px; outline: none; font-family: OpenSans-l; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 20px; vertical-align: baseline; text-align: center;\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">SOMOS EL COLEGIO…</span><b><span style=\"font-family: &quot;Source Sans Pro&quot;;\">(</span><span style=\"font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: &quot;Source Sans Pro&quot;; margin: 0px; outline: none; padding: 0px; border: 0px; vertical-align: baseline;\">coro</span><span style=\"font-family: &quot;Source Sans Pro&quot;;\">)</span></b></p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_beneficio_cole`
--

CREATE TABLE `info_beneficio_cole` (
  `idInfobc` int(11) NOT NULL,
  `servicios_sociales` text NOT NULL,
  `integran_iss_cip` text NOT NULL,
  `derechos_iss_cip` text NOT NULL,
  `serv_act` text NOT NULL,
  `importantes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `info_beneficio_cole`
--

INSERT INTO `info_beneficio_cole` (`idInfobc`, `servicios_sociales`, `integran_iss_cip`, `derechos_iss_cip`, `serv_act`, `importantes`) VALUES
(1, 'El Instituto de Servicios Sociales del Colegio de Ingenieros del Perú, cuya denominación abreviada es ISS, es el encargado de los Servicios Sociales, Mutual, Previsión, Seguridad, Recreación y otros similares que brinda a sus colegiados y sus familiares directos.', '• Todos los Ingenieros colegiados Ordinarios y Vitalicios habilitados del CIP.\r\n\r\n\r\n• Es importante que el colegiado tenga conocimiento que la subsistencia organizacional y económica del ISS-CIP, así como el cumplimiento de sus objetivos, se sustenta en los S/. 2.50 soles que los ingenieros aportan dentro del pago de su cuota social mensual a su Consejo Departamental correspondiente.\r\n\r\n\r\n• Cabe indicar que los ingenieros VITALICIOS no están exonerados de aportar este monto.', '• Según Articulo Nº 20 del Reglamento vigente del ISS-CIP que a la letra indica: “Tendrán derecho a los beneficios del ISS todos los ingenieros Ordinarios y Vitalicios, a nivel nacional, que se encuentren al día en sus cuotas institucionales (ordinarias y vitalicias) hasta tres meses antes del evento y cumplan con los requisitos que señale el presente Reglamento.\r\n\r\n• Quedarán exceptuados de esta obligación los Miembros Vitalicios mayores de 70 años o cualquier Miembro de la Orden con diagnóstico de enfermedad terminal o invalidez permanente que haya cotizado por lo menos 20 años.', '• Asignación por Fallecimiento de Titular.\r\n\r\n• Asignación por Fallecimiento de Cónyuge.\r\n\r\n• Asignación por Fallecimiento de Hijos menores de 18 años.\r\n\r\n• Asignación por Invalidez Permanente del Titular.\r\n\r\n• Asignación por Apoyo Solidario del Titular.', 'CARTA DECLARATORIA DE BENEFICIARIO para la Asignación por fallecimiento del Titular deberá imprimir formato, llenar sus datos, legalizar notarialmente y entregarla a su Consejo Departamental (Formato podrá descargar a través del CIP VIRTUAL, registrar por la web CIP o solicitar en su Consejo Departamental).');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `montoscertif`
--

CREATE TABLE `montoscertif` (
  `idmontos` int(11) NOT NULL,
  `idCertifhabilidad` int(11) NOT NULL,
  `cost_por_obra` text NOT NULL,
  `monto` int(11) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `montoscertif`
--

INSERT INTO `montoscertif` (`idmontos`, `idCertifhabilidad`, `cost_por_obra`, `monto`, `estado`) VALUES
(1, 1, 'costo', 25, '0'),
(2, 2, 'Hasta S/. 200,000', 25, '0'),
(3, 2, 'De S/. 200,001 a S/. 500,000', 50, '0'),
(4, 2, 'De S/. 500,001 a S/. 1\'000,000', 100, '0'),
(5, 2, 'De S/. 1\'000,001 a S/. 5’000,000', 150, '0'),
(6, 2, 'De S/. 5’000.001 a más', 250, '0'),
(7, 3, 'costo', 25, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oplaboral`
--

CREATE TABLE `oplaboral` (
  `idoplaboral` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descripcion` text NOT NULL,
  `vigencia` text NOT NULL,
  `entidad` text NOT NULL,
  `estado` varchar(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `oplaboral`
--

INSERT INTO `oplaboral` (`idoplaboral`, `titulo`, `descripcion`, `vigencia`, `entidad`, `estado`) VALUES
(1, 'Se necesita personal para la comunidad del colegio de ingenieros', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. \r\nAccusamus ea aliquam voluptatibus architecto reiciendis ab natus quaerat \r\nconsequatur accusantium quibusdam quas, quo nam ipsam ad voluptas eos nisi atque oluta.', '30/01/2021', 'colegio de ingenieros moyobamba', '0'),
(2, 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus ea aliquam voluptatibus architecto reiciendis ab natus quaerat consequatur accusantium quibusdam quas, quo nam ipsam ad voluptas eos nisi atque oluta.', '05/02/2021', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.', '0'),
(3, 'Lorem, ipsum dolor sit amet', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur adipisicing elit.Lorem, ipsum dolor sit amet consectetur adipisicing elit.', '2021-02-10', 'Torem, ipsum dolor sit amet consectetur', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `idpaquetes` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `precio` double(11,2) DEFAULT NULL,
  `dp` varchar(45) DEFAULT NULL,
  `intinerario` text DEFAULT NULL,
  `incluye` text DEFAULT NULL,
  `noincluye` text DEFAULT NULL,
  `aclaraciones` text DEFAULT NULL,
  `informacion_general` text NOT NULL,
  `foto1` varchar(45) DEFAULT NULL,
  `foto2` varchar(45) DEFAULT NULL,
  `foto3` varchar(45) DEFAULT NULL,
  `estado` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`idpaquetes`, `nombre`, `precio`, `dp`, `intinerario`, `incluye`, `noincluye`, `aclaraciones`, `informacion_general`, `foto1`, `foto2`, `foto3`, `estado`) VALUES
(3, 'ALTO MAYO  FULL NATURALEZA', 0.00, '3 Días /2 Noches', 'Día 01\r\nSANTA ELENA + CUEVAS DE PALESTINA + MARIPOSARIO\r\n-  Salida  5:30 am- 5:00 pm\r\n-  Recojo en el hotel y salida hacia la reserva Santa Elena.\r\n-  Recorrido se realiza en canoas en forma silenciosa para escuchar el canto de la fauna. \r\n-  Almuerzo en el Complejo Turístico Yacumama\r\n-  Visitar las cuevas de Palestina + Mariposario. \r\n-  Observación del interior las estalactitas, estalagmitas, columnas, etc.\r\n-  Retorno\r\n\r\nDIA 02\r\nCASCADA DE PACCHA  + ORQUIDEARIO.\r\n-  Salida    8:00 am- 4:00 pm\r\n-  Desayuno en el hotel   \r\n-  Recojo en el hotel y salida a la ciudad de  Moyobamba. \r\n-  Visita al Centro Poblado Nuevo San Miguel, Distrito de Jepelacio.\r\n-  Recorrido la cascada de Paccha \r\n-  Inicio de la caminata (40 minutos)\r\n-  Llegada a la catarata \r\n-  Baño/ Relax\r\n-  Almuerzo\r\n-  retorno a la ciudad de Moyobamba \r\n-  A continuación visitaremos el Orquideario y punta de Tauhishco.\r\n\r\nDIA 03\r\nNACIENTE DEL RIO TIOYACU + CHUCHUCENTER + MUSEO ETNOLOGICO TOE \r\n-  Salida   8:30 am- 6:00 pm\r\n-  Desayuno en el hotel\r\n-  Recojo del hotel\r\n-  Visita a la Naciente del Rio Tioyacu. \r\n-  Visita a Chuchucenter\r\n-  Visita al Museo Etnológico Toe\r\n-  Almuerzo \r\n-  Visitar el Embarcadero puerto de tahuisco  (Paseo en el bote)\r\n-  Retorno\r\n\r\n***Fin De Nuestros Servicios***', '-  Trasporte compartido \r\n-  02 noches Alojamiento \r\n-  03 Desayunos\r\n-  03 Almuerzos \r\n-  Guía de turismo \r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '-  Gastos extra\r\n-  Cenas \r\n-  Boletos aéreos \r\n-  Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '1.-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.-  Vestir ropa cómoda  y zapatillas para caminar.\r\n3.-  Llevar agua, Artículos y documentos personal\r\n4.-  No te distancies del grupo sin antes avisar al guía a cargo\r\n5.- Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '7153936072136.jpg', '52153936091577.jpg', '3115393607215.jpg', '0'),
(4, 'EL REFUGIO DE LA NATURALEZA -ALTOMAYO', 0.00, '4 Dias /3 Noches', 'DIA 01\r\nMUSEO ETNOLOGICO TOE + CHUCHUCENTE + TIOYACU\r\n- Salida    9:00 a.m. a 5:30 p.m.\r\n- Desayuno en el hotel\r\n- Recojo en el hotel \r\n- Visita al Museo Toé y Chuchu Center\r\n-  Almuerzo en el Recreo Turístico Yacumama\r\n-  Visita al Atractivo turístico Naciente del rio Tioyacu \r\n- Retorno \r\n\r\nDIA 02\r\nBAÑOS TERMALES DE SAN MATEO + EMBARCADERO PUERTO DE TAHUISCO + ORQUIDEARIO.\r\n-  Salida  08:30 a.m.  5:00 pm\r\n-  Desayuno en el hotel\r\n-  Paseo de full Day a Moyobamba, embarcadero de Tahuishco paseo en bote en el Río Mayo.\r\n-  Almuerzo en el Recreo Ecoturistico  Milán\r\n-  Visita al vivero de Orquídeas Amazónicas\r\n-  Visita a los Baños Termales de San Mateo\r\n-  Retorno al hotel\r\n\r\nDIA 03\r\nRESERVA ECOLOGICA TINGANA\r\n-  Salida   5:30 am   5:00pm\r\n-  Desayuno en la reserva\r\n-  Recojo en el hotel\r\n-  Visita al distrito de Yántalo (boca del rio Huascayacu) para   dirigirnos a la Reserva Tingana\r\n-  Paseo en canoa por pantanos y renacales\r\n-  Observación de flora y fauna\r\n-  Almuerzo en la reserva ecológica.\r\n-  Retorno al hotel.\r\n\r\nDIA  04\r\nCUEVAS DE PALESTINA + MARIPOSARIO\r\n-  Salida   8:00 am   2:00 pm\r\n-  Desayuno en el hotel \r\n-  Recojo en el hotel\r\n-  Traslado a las cuevas de palestina donde se podrá apreciar las estalactitas y estalagmitas.\r\n-  A continuación visita al mariposario.\r\n-  Almuerzo en Recreo Turístico el Bosque.\r\n-  Retorno a Tarapoto.\r\n\r\n***Fin De Nuestros Servicios***', '-  Trasporte todo el recorrido\r\n -  03 noches Alojamiento \r\n-  04 Desayunos\r\n-  04 Almuerzos \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '-  Gastos extra\r\n-  Cenas \r\n-  Boletos aéreos \r\n-  Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '1.-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.-  Vestir ropa cómoda  y zapatillas para caminar.\r\n3.-  Llevar agua, Artículos y documentos personal\r\n4.-  No te distancies del grupo sin antes avisar al guía a cargo\r\n5.-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.-  La partida es puntual.', 'Nota: \r\n- Los precios varían en función al número de personas.\r\n- Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '20153935894436.jpg', '50153935825574.jpg', '2415393588130.jpg', '0'),
(5, 'PARQUE NACIONAL DEL RIO ABISEO-JUANJUI', 0.00, 'Full day', 'Partimos desde Tarapoto a Juanjui, degustamos de un desayuno ligero para partir a la reserva del Breo, aprox a 2 horas y 30 min llegamos al puesto de control El Breo, donde los guarda parques nos informaran en que consiste la reserva y todas las medidas de seguridad a seguir, posterior pasamos a ingresar a la reserva visualizando una majestuosa vegetación, Visitamos la Catarata el Breo, Cascada Caja ñahui, cascada Vicky y cascada Velo de Novia, disfrutando de un baño relajante para luego regresar al Puesto de control y degustar de un suculento almuerzo, regrese a Juanjui y posterior a Tarapoto llegando aprox. 7:00 pm.', '- Transporte  Tarapoto -Juanjui\r\n- Traslado todo el Tours\r\n- Desayuno\r\n- Almuerzo\r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.\r\n- Actividades opcionales como canopy o moto acuática', '1.- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.- Vestir ropa cómoda  y zapatillas para caminar.\r\n3.- Llevar agua, Artículos y documentos personal\r\n4.- No te distancies del grupo sin antes avisar al guía a cargo\r\n5.- Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.- La partida es puntual.', 'Nota: \r\n- Los precios varían en función al número de personas.\r\n- Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '16153668042728.jpg', '62153935698370.jpg', '4115393569836.jpg', '0'),
(7, 'BAÑOS TERMALES-CHUCHUCENTER- TIOYACU- ORQUIDE', 75.00, 'Full day', '- Recojo del hotel \r\n- Salida 8.00 am- 5:00 pm\r\n- Visita a los Baños Termales de San Mateo\r\n- Visita al Orquidiario de Moyobamba.\r\n-  Almuerzo en Recreo Turístico Millan\r\n-  Visita al Chu Chu Center\r\n-  Traslado a  la Naciente del Rio Tio Yacu  para disfrutar de sus hermosas aguas y \r\n     darse un Baño  Relax\r\n-  Retorno.\r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del Hotel \r\n- Trasporte compartido \r\n- Almuerzo \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente.', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '-  Llevar gafas de sol, Gorra o sombrero, Cámara Filmadora, Bloqueador solar, Repelente.\r\n-  Vestir ropa cómoda  y zapatillas para caminar.\r\n-  Llevar agua, Artículos y documentos personal\r\n-  No te distancies del grupo sin antes avisar al guía a cargo\r\n-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n-  La partida es puntual.', 'Nota: \r\n- Los precios varían en función al número de personas.\r\n- Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '1153860131426.jpg', '50153860131472.JPG', '27153860131410.jpg', '0'),
(8, 'CASCADA DE LEJIAYACU  y/o PACCHA -ORQUIDARIO', 90.00, 'Full day', '- Salida    8:00 am- 5:00 Pm.\r\n- Recojo en el hotel y salida rumbo a la cascada Lejiayacu.\r\n- Visita al Centro Poblado de Pacaypite, Distrito de Jepelacio.\r\n- Caminata (40 minutos) hasta la cascada.\r\n- Baño/ Relax, toma de fotografías.\r\n- Retorno a Moyobamba\r\n-  Almuerzo \r\n- Visita a Orquídeas Amazónicas, Punta de Tahuishco.\r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del Hotel \r\n- Trasporte compartido \r\n- Box lunch  \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n- Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n- Preséntate 15 minutos antes de la hora de inicio del tour\r\n- La partida es puntual.', 'Nota: \r\n- Los precios varían en función al número de personas.\r\n- Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '11153860303941.JPG', '57153860303974.jpg', '28153860303915.JPG', '0'),
(9, 'CUEVAS DE PALESTINA- MARIPOSARIO-  TIOYACU', 90.00, 'Full day', '-  Recojo del hotel.\r\n- Salida  8:00 am- 4:00 pm\r\n-  Visitar las Cuevas o Cavernas de Palestina. \r\n-  Observación del interior las estalactitas, estalagmitas, columnas, etc.\r\n-  Visita al Mariposario.para la observación de la metamorfosis de las mariposas.\r\n-  Almuerzo\r\n-  Finalmente visita al Naciente del Río Tioyacu para darse un refrescante baño relax.\r\n\r\n***Fin De Nuestros Servicios***', '- Recojo en el hotel\r\n- Trasporte compartido \r\n- Almuerzo \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente.', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n- Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n- Preséntate 15 minutos antes de la hora de inicio del tour\r\n-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '10153860418840.jpg', '44153860418871.jpg', '34153860418815.jpg', '0'),
(10, 'TURISMO RURAL COMUNITARIO SANTA ELENA - CUEVA', 110.00, 'Full day', '- Salida  5:30 am- 4:00 pm\r\n- Recojo en el hotel y salida hacia la Reserva de Santa Elena\r\n- Desayuno en la Reserva.\r\n- Recorrido en canoa, por el río Romero y aguajales donde  observaremos la flora y fauna de la reserva.\r\n- Almuerzo \r\n- Visitar las Cuevas o Cavernas de Palestina. \r\n- Observación del interior las estalactitas, estalagmitas, columnas, etc.\r\n- Retorno \r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del  Hotel \r\n- Trasporte compartido \r\n - Desayuno y Almuerzo \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n- Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n- Preséntate 15 minutos antes de la hora de inicio del tour\r\n- La partida es puntual.', 'Nota: \r\n- Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '2153860779522.jpg', '51153860779583.jpg', '21153860779516.jpg', '0'),
(11, 'MORRO DE CALZADA - BAÑOS SULFUROSOS OROMINA', 70.00, 'Full day', '- Salida  8.00 am- 5:00 pm\r\n- Recojo en el hotel \r\n - Caminata al Morro de calzada durante el recorrido  observación de paisajes,  flora \r\n        y fauna, compra de variedad de productos artesanales.\r\n - Almuerzo en Milán\r\n- Baños Sulforosos de Oromina.\r\n- Cascada Asnayacu \r\n- Retorno\r\n                         \r\n                    ***Fin De Nuestros Servicios***', '- Recojo del Hotel \r\n- Trasporte compartido \r\n-  Almuerzo \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, \r\n        Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n- Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n- Preséntate 15 minutos antes de la hora de inicio del tour\r\n- La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '6153860884230.jpg', '56153860884272.jpg', '2815386088426.jpg', '0'),
(12, 'EMBARCADERO PTO TAHUISCO - BAÑOS TERMALES', 85.00, 'Full day', '- Salida  8.00 am- 5:00 pm\r\n - Recojo en el hotel \r\n - Nos conducimos a la Plaza de Armas Moyobamba\r\n - Luego al Embarcadero Turístico Puerto de Tahuishco para realizar un paseo en bote motor \r\n - A continuación Visita a Orquídeas amazónicas y Punta de Tahuishco \r\n - Almuerzo  en Milán\r\n - Visita a los Baños termales de San Mateo\r\n - Baño/ Relax. \r\n - Retorno\r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del  Hotel \r\n - Trasporte compartido \r\n - Almuerzo \r\n - Guía de turismo \r\n - Entradas a los Atractivos turísticos \r\n - Asistencia Permanente', '- Gastos extra\r\n - Bebidas alcohólicas\r\n - Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n- Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n- Preséntate 15 minutos antes de la hora de inicio del tour\r\n- Partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '19153920376231.JPG', '60153920362078.jpg', '2315392037620.jpg', '0'),
(13, 'RESERVA ECOLOGICA SANTA ELENA – CHAHUARYACU', 90.00, 'Full day', '- Salida    6:00 am- 5:00 pm\r\n - Recojo en el hotel\r\n- Salida hacia la Reserva de Santa Elena\r\n- Desayuno en la Reserva.\r\n- Recorrido en canoa, por el río Romero y aguajales donde  observaremos la flora y fauna de la reserva.\r\n- Traslado a la Finca Ecológica Shahuaryacu\r\n - Almuerzo en Shahuaryacu. \r\n - Disfrutar de sus instalaciones de la finca ecológica tomando  un refrescante Baño/ Relax en piscinas naturales, pozas de barro terapéutico, observación de Flora y Fauna.\r\n\r\n**Fin De Nuestros Servicios***', '- Recojo del  Hotel \r\n- Trasporte compartido \r\n - Almuerzo \r\n- Guía de turismo \r\n- Entradas a los Atractivos turísticos \r\n- Asistencia Permanente', '- Gastos extra\r\n- Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n - Vestir ropa cómoda  y zapatillas para caminar.\r\n - Llevar agua, Artículos y documentos personal\r\n - No te distancies del grupo sin antes avisar al guía a cargo\r\n - Preséntate 15 minutos antes de la hora de inicio del tour\r\n - La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '2153920449733.jpg', '52153920449783.jpg', '40153920449711.jpg', '0'),
(14, 'RESERVA ECOLOGICA SANTA ELENA  –TIOYACU', 105.00, 'Full day', '- Salida 5:30 am- 5:00 pm\r\n- Recojo en el hotel \r\n- Salida hacia la Reserva de Santa Elena\r\n- Desayuno en la Reserva.\r\n- Recorrido en canoa, por el río Romero y aguajales donde  observaremos la flora y fauna de la reserva.\r\n- Almuerzo \r\n- Visita a Tioyacu   \r\n- Recreo Turístico Chuchu Center\r\n\r\n\r\n**Fin De Nuestros Servicios***', '- Traslado - Hotel \r\n-  Trasporte compartido \r\n - Almuerzo \r\n-  Guía de turismo \r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '- Gastos extra\r\n - Bebidas alcohólicas\r\n- Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n - Vestir ropa cómoda  y zapatillas para caminar.\r\n - Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n - La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '8153920588735.jpg', '58153920588778.jpg', '23153920588713.jpg', '0'),
(15, 'CUEVAS DE PALESTINA- TIOYACU-TOE- CHUCHUCENTE', 115.00, 'Full day', '- Salida 8:00 am- 4:00 pm\r\n- Recojo del hotel\r\n- Visitar las Cuevas o Cavernas de Palestina. \r\n- Observación del interior las estalactitas, estalagmitas, columnas, etc.\r\n- Visita al  Naciente del Río  Tioyacu para darse un refrescante baño relax.\r\n- Almuerzo en el Recreo Turístico Villa María.\r\n- Museo etnológico Toé\r\n- Muestra El arte riojano y la expresión artística que sigue cambiando constante.\r\n - Visita a el Chu Chu Center\r\n\r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del  Hotel \r\n- Trasporte compartido \r\n-  Almuerzo \r\n- Guía de turismo \r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '- Gastos extra\r\n- Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n-  Vestir ropa cómoda  y zapatillas para caminar.\r\n-  Llevar agua, Artículos y documentos personal\r\n-  No te distancies del grupo sin antes avisar al guía a cargo\r\n -  Preséntate 15 minutos antes de la hora de inicio del tour\r\n-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '12153920650623.jpg', '48153920650665.jpg', '2115392065067.jpg', '0'),
(16, 'BOSQUE DE LAS NUWAS- AWAJÚN  - TIOYACU', 150.00, 'Full day', '-  Salida  8:00 am- 4:00 pm\r\n-  Recojo del hotel \r\n-  Recepción en la comunidad nativa Awajún de Shampuyacu\r\n-  Visita centro de rescate productivo: vivero, planta procesadora de yuca\r\n -  Visita a la restauración ribereña del río Naranjillo\r\n -   Visita a la parcela agroforestal de cacao\r\n-   Visita al vivero de Bajo Túmbaro, centro de investigación de plantas medicinales   \r\n-   Visita a la parcela centro de rescate de las variedades de mama (yuca)\r\n-  Tour en la reserva comunal: Centro de Rescate de la Sabiduría Awajún del Alto Mayo, más conocido como el “Bosque de las Nuwas”\r\n-  Recepción y entrega de un presente (artesanía)\r\n-  Guiado sobre plantas medicinales\r\n-  Bufete amazónico Awajún\r\n-  Recorrido en el área del Bosque de las Nuwas, disfrute del río Túmbaro y los columpios\r\n-  Almuerzo típico Awajún\r\n-  Presentación de danza Awajún\r\n-  Despedida \r\n-  Visita al Naciente del Rio Tioyacu\r\n-   Refrescante Baño Relax\r\n-   Retorno \r\n\r\n***Fin De Nuestros Servicios***', '- Recojo del hotel\r\n- Trasporte compartido \r\n-  Almuerzo \r\n-  Guía de turismo \r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '-  Gastos extra\r\n-   Bebidas alcohólicas\r\n-   Otros no especificados  en el programa.', '-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n-  Vestir ropa cómoda  y zapatillas para caminar.\r\n-  Llevar agua, Artículos y documentos personal\r\n-  No te distancies del grupo sin antes avisar al guía a cargo\r\n-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '8153922026736.jpg', '42153922026779.jpg', '41153922026717.jpg', '0'),
(17, 'AGUAJALES Y RENACALES DEL TINGANA', 130.00, 'Full day', 'Se visitará el Área de Conservación de Aguajales y Renacales del Alto Mayo, uno de los pulmones de la región San Martin, donde se conocerá la forma de vida de los pobladores que habitan el sector Tingana, con quienes iniciaremos nuestro recorrido hacia uno de los parajes más hermosos del Alto Mayo, bosques temporalmente inundables que albergan una amplia variedad de especies con fuerte presencia de renacos y aguajales. \r\n\r\n 05:45: Salida a Tingana desde la Boca de Huascayacu.\r\n 07:00: Llegada y desayuno regional.\r\n 08:00: Paseo en canoa para la observación de fauna, renacales y/o aguajales.\r\n 13:00: Fin del paseo en canoa. \r\n 13:00: Almuerzo regional.\r\n 13:30: Visita al vivero comunitario.\r\n 15:00 Retorno a la Boca de Huascayacu.\r\n 16:00 Retorno a Nueva Cajamarca.\r\n\r\n***Fin De Nuestros Servicios***', '- Traslado fluvial desde el puerto la boca de Huascayacu hasta Tingana.\r\n-  Boleto de ingreso a Tingana.\r\n-  Alimentación.\r\n-  Paseos en canoas por los renacales y aguajales \r\n -  Visita al vivero comunitario.\r\n-  Orientadores turísticos locales (español).', '- Gastos extra\r\n - Bebidas alcohólicas\r\n - Otros no especificados  en el programa.', '- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n- Vestir ropa cómoda  y zapatillas para caminar.\r\n-  Llevar agua, Artículos y documentos personal\r\n- No te distancies del grupo sin antes avisar al guía a cargo\r\n-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '8153937377523.jpg', '43153937394865.jpg', '23153937377511.jpg', '0'),
(18, 'NATURALEZA Y AVENTURA-TARAPOTO Y ALTO MAYO', 0.00, '4 Dias /3 Noches', 'DIA 01\r\nLAMAS  - CATARATA AHUASHIYACU\r\n-  Salida    9:00 a.m. a 5:30 p.m.\r\n-  Traslado al  Hotel\r\n-  Recojo en el hotel y salida hacia la Catarata Ahuashiyacu\r\n-  Parada en el mirador natural\r\n-  Paseo hasta llegar a la catarata\r\n-  Baño  y relax en la catarata\r\n-  Retorno a Tarapoto \r\n -  Almuerzo \r\n-  Salida hacia la ciudad de Lamas\r\n-  Visita y recorrido guiado por el Museo indígena\r\n-  Paseo por el Castillo \r\n-  Recorrido por el Barrio Huayco y su plaza de armas\r\n-  Retorno y traslado al hotel a Tarapoto \r\n\r\n DIA 02\r\nLAGUNA DE SAUCE  \r\n-  Salida  8:00 am- 5:00 pm\r\n-  Desayuno en el hotel   \r\n-  Recojo en el hotel y salida hacia la laguna de Sauce\r\n-  Parada en el Mirador la punta del Gallinazo\r\n-  Pasaremos el río Huallaga en una Balsa Cautiva\r\n-  Paseo en bote por la laguna\r\n-  Almuerzo (menú turístico)\r\n-  Baño y actividades \r\n- Retorno y traslado al hotel a Tarapoto para dirigirnos al Alto Mayo- Nueva Cajamarca.\r\n\r\nDIA 03\r\nRESERVA ECOLÓGICA TINGANA\r\n-  Salida   5:30 am   5:00 pm\r\n-  Desayuno en la Reserva  Ecológica\r\n-  Recojo en el hotel\r\n-  Visita al distrito de Yántalo (boca del rio Huascayacu) para dirigirnos a la Reserva Tingana\r\n-  Paseo en canoa por pantanos y renacales\r\n-  Observación de flora y fauna\r\n-  Almuerzo en la reserva\r\n-  Retorno al hotel.\r\n\r\nDÍA  04\r\nCUEVAS DE PALESTINA +MARIPOSARIO\r\n-  Salida   8:00 am   2:00pm\r\n-  Desayuno en el hotel \r\n-  Recojo en el hotel\r\n-  Traslado a las cuevas de palestina y mariposario donde se podrá apreciar las estalactitas y estalagmitas.\r\n-  Almuerzo en el Recreo  el Bosque.\r\n-  Retorno.\r\n\r\n***Fin De Nuestros Servicios***', '- Traslado Aeropuerto - Hotel \r\n-  Trasporte compartido \r\n-  03 noches Alojamiento \r\n-  04 Desayunos\r\n-  04 Almuerzos \r\n-  Guía de turismo \r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '-  Gastos extra\r\n-  Cenas \r\n-  Boletos aéreos \r\n-  Bebidas alcohólicas\r\n-   Otros no especificados  en el programa.', '1.-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.-  Vestir ropa cómoda  y zapatillas para caminar.\r\n3.-  Llevar agua, Artículos y documentos personal\r\n4.-  No te distancies del grupo sin antes avisar al guía a cargo\r\n5.-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '16153937298341.jpg', '49153937305581.jpg', '27153937332917.jpg', '0'),
(19, 'ALTO MAYO  TIERRA   ENCANTADORA', 0.00, '2 Días /1 Noche', 'Día 01\r\nBAÑOS TERMALES + TOE + MUSEO CHOCOLATE + ORQUIDEARIO + EMBARCADERO PUERTO DE TAHUISCO.\r\n-  Salida  8:00 am - 5:00 pm\r\n- Recojo del hotel\r\n-  Recorrido plaza de Armas \r\n-  Visita al Museo chocolate y Orquideario, \r\n-  Luego a la Punta de San Juan, Punta de Tahuishco, Embarcadero puerto de Tahuisco para un paseo en bote.\r\n-  Finalmente Baños Termales de San Mateo.\r\n-  Retorno.\r\n\r\nDIA 02\r\nCUEVAS DE PALESTINA + MARIPOSARIO + CHUCHUCENTER\r\n-  Salida 8:00 am - 5:00 pm\r\n-  Recojo del hotel\r\n-  Visita a las Cuevas de Palestina, donde se podrá apreciar las estalactitas y estalagmitas.\r\n-  A continuación visita al mariposario \r\n-  Posteriormente a la Naciente del Rio Tioyacu, \r\n-  Almuerzo en Villa María\r\n-  Finalmente al Chuchú Center.\r\n\r\n***Fin De Nuestros Servicios***', '-  Traslado Aeropuerto - Hotel \r\n-  Trasporte compartido \r\n-  01 noche Alojamiento \r\n-  02 Desayunos\r\n-  02 Almuerzos \r\n-  Guía de turismo \r\n-  Paseo en bote\r\n-  Entradas a los Atractivos turísticos \r\n-  Asistencia Permanente', '-  Gastos extra\r\n-  Cenas \r\n-  Boletos aéreos \r\n-  Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '1.-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.-  Vestir ropa cómoda  y zapatillas para caminar.\r\n3.-  Llevar agua, Artículos y documentos personal\r\n4.-  No te distancies del grupo sin antes avisar al guía a cargo\r\n5.-  Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '11153937106725.jpg', '56153937106763.jpg', '41153937106712.jpg', '0'),
(20, 'TINGANA RESERVA ECOLÓGICA', 0.00, '2 Días /1 Noche', 'DESCRIPCION\r\nRESERVA ECOLOGICA TINGANA \r\nSe visitará el Área de Conservación de Aguajales y Renacales del Alto Mayo, uno de los pulmones de la región San Martin, donde se conocerá la forma de vida de los pobladores que habitan el sector Tingana, con quienes iniciaremos nuestro recorrido hacia uno de los parajes más hermosos del Alto Mayo, bosques temporalmente inundables que albergan una amplia variedad de especies con fuerte presencia de renacos y aguajales. \r\n\r\nDIA 01\r\n-  05: 30 Salida rumbo a los aguajales y renacales del TINGANA\r\n-  Salida a Tingana desde la Boca de Huascayacu.\r\n-  07:00: Llegada y desayuno regional.\r\n-  08:00: Paseo en canoa para la observación de fauna, renacales y/o aguajales.\r\n-  13:00: Fin del paseo en canoa.\r\n-  13:30: Almuerzo regional.\r\n-  14:00: Visita al vivero comunitario.\r\n-  15:00: Visita a las parcelas agroecológicas.\r\n-  19:00: Cena regional.\r\n-  20:00: Paseo nocturno.\r\n-  22:00: Pernocte.\r\n\r\nDIA 02\r\n- 07:00 Desayuno regional.\r\n-  09:00 Retorno a la Boca de Huascayacu.\r\n-  10:00 Retorno a Moyobamba.\r\n\r\n ***Fin De Nuestros Servicios**', '- Traslado ida y vuelta \r\n-  Traslado fluvial desde el puerto la boca de Huascayacu hasta Tingana.\r\n-  Boleto de ingreso a Tingana.\r\n-  Alimentación según itinerario.\r\n-  Paseos en canoas por los renacales y aguajales \r\n-  Visita al vivero comunitario y parcelas ecológicas.\r\n-  Paseo nocturno.\r\n-  Hospedaje.\r\n-  Orientadores turísticos locales (español).', '-  Gastos extra\r\n-  Boletos aéreos \r\n-  Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '1.-  Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.-  Vestir ropa cómoda  y zapatillas para caminar.\r\n3.-  Llevar agua, Artículos y documentos personal\r\n4.-  No te distancies del grupo sin antes avisar al guía a cargo\r\n5.-  Cada visitante debe de regresar sus residuos plásticos solo permite dejar residuos orgánicos \r\n6.- Preséntate 15 minutos antes de la hora de inicio del tour\r\n7.-  La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '16153937261136.jpg', '54153937269174.jpg', '3615393726912.png', '0'),
(21, 'AVENTURA PARQUE NACIONAL DEL RIO ABISEO', 0.00, '3 DÍAS / 2 NOCHES', 'DIA 01\r\nCATARATA SHIHUI, CATARATA MAQUIZAPA Y CASCADA EL TIMON\r\n\r\n-  Partida de Tarapoto a las 05:00 am, llegada al distrito de Huicungo, desayuno y visita al Centro de Interpretación duración aproximada de 30 min, partimos al albergue turístico para luego degustar de un suculento almuerzo en el Albergue Turístico. \r\n\r\n- Por la tarde circuito de agua visitaremos la catarata Shihui, catarata Maquizapa, terminaremos con la visita a la cascada timón donde disfrutaran de un baño súper refrescante y relajante, regreso al puesto para la cena, luego disfrutamos de una fogata, cuento de chistes anécdotas a cargo de los guías y guarda parques, luego de una rueda de intercambios de experiencias y degustación de tragos típicos con un programa divertido.\r\n\r\nDIA 02\r\n-  CUEVA DE LOS FRANCESES Y OTORONGO -QUEBRADA CHURO\r\n\r\n 07:00 am Desayuno Campestre, visita las cueva de los Franceses y Otorongo una camita de 2hora, regreso almuerzo en la tarde visitamos la quebrada Churo, cena noche de fogata. \r\n\r\nDIA  03\r\nCATARATAS DEL BREO-CASCADAS EL VELO DE LANOVIA, CAJA ÑAHUI Y VICKY \r\n 	Muy temprano desayunamos y partimos a las y sus maravillas a 1hora y 30 min llegamos al puesto de control Breo luego partimos al circuito de agua que concierne en la visita de un conjunto de cascadas como el Velo de Novia, Caja Ñahui y Vicky, para luego impresionarnos con la Catarata del Breo, realizar el baño respectivo, de regreso al puesto de control para el almuerzo y posterior el regreso a Juanjui. \r\n\r\n***Fin De Nuestros Servicios***', '-  Traslados Tarapoto - Juanjui \r\n-  Transporte vía Fluvial – PNRA \r\n-  Dos (2) noches Albergue Turístico. \r\n-  Tres (3) desayunos \r\n-  Tres (3) almuerzos \r\n-  Dos (2) Cenas \r\n-  Entradas a los lugares que se mencionan en el programa. \r\n-  Chalecos salvavidas. \r\n-  Guiado. \r\n-  Equipos de primeros auxilios.', '	Gastos extra\r\n	Bebidas alcohólicas\r\n	Otros no especificados  en el programa.', '	Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n	Vestir ropa cómoda  y zapatillas para caminar.\r\n	Llevar agua, Artículos y documentos personal\r\n	No te distancies del grupo sin antes avisar al guía a cargo\r\n	Preséntate 15 minutos antes de la hora de inicio del tour\r\n	La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '17153938205426.jpg', '50153938205464.jpg', '21153938205413.jpg', '0'),
(22, 'CHACHAPOYAS...NATURALEZA Y ARQUEOLOGÍA', 0.00, '3 Días /2 Noches', 'DIA 01\r\nCITY TOUR\r\n\r\n- Salida de Nueva Cajamarca con destino a la ciudad de Chachapoyas\r\n- Desayuno \r\n- Instalación en el hotel \r\n- Nos trasladamos  rumbo al pueblo de Huancas allí visitaremos la plaza principal, iglesia, tiendas de artesanía.\r\n-  Posteriormente nos trasladamos al mirador del cañón del río Sonche \r\n-Luego el cañón de Huanca Urco desde donde podremos divisar a la distancia la Catarata de Gocta,\r\n- Visita a la zona arqueológica de Pueblo de los muertos y el cañón del Utcubamba, en el trayecto de retorno realizaremos una pausa en el Mirador de Luya Urco desde donde avistaremos los barrios de la ciudad de Chachapoyas.\r\n- A continuacion  visitaremos  el pozo de yana-yacu (fuente del amor), monumento a los triunfadores de Higos Urco, plazuela de burgos.\r\n-  Plazuela Belén, mini museo del INC, Plaza de Armas.\r\n\r\nDIA 02\r\nCIUDAD FORTIFICADA DE KUELAP MARAVILLA DEL PERU\r\n-  Desayuno en el hotel\r\n-  8:00 am Salida  de visita a las ruinas de macro\r\n-  Traslado en teleférico al Ingreso a la fortaleza de Kuelap\r\n-  Salida de Kuelap\r\n-  Almuerzo\r\n-  Retorno a Chachapoyas.\r\n\r\nDIA 03\r\nCATARATA DE GOCTA\r\n-  Desayuno en el hotel\r\n-  Salida de visita  pueblo de Cocachimba\r\n-  Visita a la catarata Gocta (caminata 2:30 )\r\n-  Almuerzo\r\n-  Retorno\r\n-  Llegada a Chachapoyas\r\n\r\n***Fin De Nuestros Servicios***', '- Transporte turístico para circuitos internos\r\n-  Boletos turísticos a los sitios a visitar\r\n-  Telecabina Kuelap (teleférico)\r\n-  02 Noche de alojamiento \r\n-  03 Almuerzo\r\n-  03 desayunos \r\n-  02 cenas\r\n-  Guía de turismo\r\n-  Asistencia permanente', '-  Gastos extra\r\n-  Bebidas alcohólicas\r\n-  Otros no especificados  en el programa.', '1.- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.- Vestir ropa cómoda  y zapatillas para caminar.\r\n3.- Llevar agua, Artículos y documentos personal\r\n4.- No te distancies del grupo sin antes avisar al guía a cargo\r\n 5.- Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.- La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '19153969893441.jpg', '54153969893472.jpg', '37153969934717.png', '0'),
(23, '“CAJAMARCA TURÍSTICA Y CULTURAL “', 0.00, '4 Dias /3 Noches', 'DIA 01 :   CITY  TOUR - CHICLAYO\r\n-  Llegada a la ciudad de Chiclayo\r\n-  Acomodación en el hotel  \r\n-  Desayuno \r\n-  City tour \r\n-  Almuerzo \r\n-  Tarde libre\r\n- 10:00 pm Salida a Cajamarca \r\n\r\nDIA 2:		CAJAMARCA.\r\n-  Arribo a Cajamarca. Traslado al hotel seleccionado -  3* Turista\r\n-  Desayuno en el hotel\r\n-  Tour a Cumbemayo. Bosque de piedras (frailones) – Santuario, Acueducto, Piedras de Sacrificios, petroglifos.\r\n-  Almuerzo Tipico en Baños del Inca\r\n-  Tour a los Baños del Inca – Incluye: Cascada de Llacanora – Campiña La Collpa y los Baños del Inca.\r\n-  Retorno al hotel\r\n-  Cena\r\n\r\nDIA 3:		CAJAMARCA.\r\n-  Desayuno en el hotel\r\n- Tour a Granja Porcòn.- Visitaremos primeramente Huambocancha, donde son especialistas en trabajaos de piedra marmolina.\r\n-  Almuerzo campestre en Porcòn\r\n-  Tour a Otuzco.- Visitamos las famosas ventanillas de Otuzco, luego el tradicional Jardìn de Hortensias y terminamos en el Fundo Los Alpes.\r\n-  Retorno al hotel.\r\n-  Cena\r\n-  Pernocte.\r\n\r\nDIA 4:		CAJAMARCA – CHICLAYO.\r\n-  Desayuno en el hotel\r\n-  City Tour: Plaza de Armas, Catedral, San Francisco, Complejo Belén, Museo de Arqueologìa y Santa Apolonia.\r\n-  Tiempo indicado para compras y arreglo de equipajes.\r\n-  Almuerzo turístico en el hotel\r\n- Viaje de retorno a Chiclayo.\r\n-   Arribo a Chiclayo.\r\n\r\n***Fin De Nuestros Servicios***', '	PASAJES TERRESTRES: CHICLAYO – CAJAMARCA – CHICLAYO.\r\nTRANSPORTES CHICLAYO / DIAZ / MOVIL TOURS..\r\n	TRASLADOS: TERMINAL – HOTEL – TERMINAL EN CAJAMARCA.\r\n	02 NOCHES DE ALOJAMIENTO EN HOTELES 3* TURISTA.\r\n	FULL ALIMENTACION: 03 DESAYUNOS + 03 ALMUERZOS + 03 CENAS \r\n	TRANSPORTE PRIVADO PARA LOS SERVICIOS INTERNOS EN CAJAMARCA.\r\n	05 TOURS DETALLADOS: CITY TOUR COLONIAL + CUMBEMAYO + GRANJA PORCÓN + VENTANILLAS DE OTUZCO + BAÑOS DEL INCA.\r\n	INGRESOS A LOS LUGARES A VISITAR.\r\n	GUIAS DE TURISMO ACREDITADOS.\r\n	ASISTENCIA MÉDICA PERMANENTE – BOTIQUIN DE PRIMEROS AUXILIOS.', '    Gastos extra\r\n	Bebidas alcohólicas\r\n	Otros no especificados  en el programa.', '1.- Llevar gafas de sol, Gorra o sombrero, Cámara filmadora, Bloqueador solar, Repelente.\r\n2.- Vestir ropa cómoda  y zapatillas para caminar.\r\n3.- Llevar agua, Artículos y documentos personal\r\n4.- No te distancies del grupo sin antes avisar al guía a cargo\r\n 5.- Preséntate 15 minutos antes de la hora de inicio del tour\r\n6.- La partida es puntual.', 'Nota: \r\n-  Los precios varían en función al número de personas.\r\n-  Si requiere GUÍA TURÍSTICO en otro idioma solicitarlo con anticipación.', '7155076772827.jpg', '53153970107974.jpg', '3715397010797.jpeg', '0'),
(24, '298429', 8294.00, '292849', '82948', '92849284', '94', '2984', '9829', '', '45154489554072.jpg', '', '1'),
(25, 'Cascadas de Carpishuyacu - TARAPOTO', 200.00, '2', '21', '12', '12', '12', '12', '14155966820941.jpg', '62155966820972.jpg', '37155966820915.jpg', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requisitos_coleg`
--

CREATE TABLE `requisitos_coleg` (
  `id_requisito` int(11) NOT NULL,
  `nombre_requisito` longtext COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 0,
  `fecha_requisito` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `requisitos_coleg`
--

INSERT INTO `requisitos_coleg` (`id_requisito`, `nombre_requisito`, `estado`, `fecha_requisito`) VALUES
(1, '<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"box-title\" style=\"text-align: center;\"><h4 style=\"font-family: Helvetica, Arial, sans-serif; font-weight: 900; color: rgb(51, 51, 51); text-decoration-line: underline;\">COLEGIACIÓN VIRTUAL EN CIP MOYOBAMBA</h4></div>\r\n</div>\r\n<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"box-title-left\"><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 900; color: rgb(51, 51, 51);\">Paso # 01.</h5></div>\r\n    <div class=\"col-sm-12\" style=\"width: 1240px;\">\r\n        <div class=\"box-description\">\r\n            <p style=\"text-align: justify;\">\r\n                Hacer clic en el ícono COLÉGIATE para crear una cuenta de PRE COLEGIADO, hacer clic en:\r\n                <a href=\"https://cipvirtual.cip.org.pe/sicecolegiacionweb/altas/\" target=\"_blank\" style=\"color: rgb(218, 77, 77); transition: all 0.2s ease-out 0s;\">https://cipvirtual.cip.org.pe/sicecolegiacionweb/altas/</a>&nbsp;allí deberá completar los datos solicitados.\r\n            </p>\r\n            <p style=\"text-align: justify;\">Nota: Es imprescindible que usted cuente con un correo electrónico válido ya que en ella recibirá y su código de usuario y clave de acceso al módulo de colegiación.</p>\r\n            <p style=\"text-align: justify;\">Finalmente validar su código para ingreso al CIPVIRTUAL V1.0 para continuar el proceso de colegiación.</p><p style=\"text-align: justify;\"><br></p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"box-title-left\"><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 900; color: rgb(51, 51, 51);\">Paso # 02.</h5></div>\r\n    <div class=\"col-sm-12\" style=\"width: 1240px;\">\r\n        <div class=\"box-description\">\r\n            <p style=\"text-align: justify;\">Subir los siguientes archivos:</p>\r\n            <ul>\r\n                <li style=\"padding: 10px 0px;\">FOTO DIGITAL: color con fondo blanco y vestimenta formal.</li>\r\n                <li style=\"padding: 10px 0px;\">FIRMA DIGITAL: con fondo blanco y lapicero de color negro – recuadro de 8cm x 8cm.</li>\r\n                <li style=\"padding: 10px 0px;\">DNI: (anverso y reverso), Carné de Extranjería o Pasaporte (anverso).</li>\r\n                <li style=\"padding: 10px 0px;\">TÍTULO UNIVERSITARIO: (anverso y reverso)</li>\r\n            </ul>\r\n            NOTA: Todos estos documentos tienen que estar previamente escaneados en formato JPG.</div><div class=\"box-description\"><br></div><div class=\"box-description\"><p style=\"text-align: justify;\"></p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"box-title-left\"><h5 style=\"font-family: Roboto, Helvetica, Arial, sans-serif; font-weight: 900; color: rgb(51, 51, 51);\">Paso # 03.</h5></div>\r\n    <div class=\"col-sm-12\" style=\"width: 1240px;\">\r\n        <div class=\"box-description\">\r\n            <p style=\"text-align: justify;\">\r\n                Ingrese al sistema con su código de usuario y contraseña, haciendo clic en:&nbsp;\r\n                <a href=\"https://cipvirtual.cip.org.pe/\" target=\"_blank\" style=\"color: rgb(218, 77, 77); transition: all 0.2s ease-out 0s;\">https://cipvirtual.cip.org.pe/&nbsp;</a>para completar o actualizar su información personal:\r\n            </p>\r\n            <ul>\r\n                <li style=\"padding: 10px 0px;\">DATOS GENERALES (Estado Civil, Medios de Contacto, Dirección).</li>\r\n                <li style=\"padding: 10px 0px;\">DATOS ACADÉMICOS.</li>\r\n                <li style=\"padding: 10px 0px;\">Adjunte sus Imágenes escaneadas con un tamaño individual de cada imagen de máximo 02 MB.</li>\r\n                <li style=\"padding: 10px 0px;\">\r\n                    RESOLUCIÓN o CONSTANCIA DE SUNEDU&nbsp;\r\n                    <a href=\"https://enlinea.sunedu.gob.pe/constanciadeinscripcion\" target=\"_blank\" style=\"color: rgb(218, 77, 77); transition: all 0.2s ease-out 0s;\">https://enlinea.sunedu.gob.pe/constanciadeinscripcion</a>&nbsp;.\r\n                </li>\r\n                <li style=\"padding: 10px 0px;\">DATOS LABORALES (opcionales).</li>\r\n                <li style=\"padding: 10px 0px;\">REGISTRAR SOLICITUD DE INCORPORACIÓN AL CIP.</li>\r\n                <li style=\"padding: 10px 0px;\">\r\n                    IMPRIMIR SOLICITUD DE INCORPORACIÓN: firmar (Lapicero color negro) colocar su huella digital (índice derecho) con huellero color negro, escanear y enviar al correo&nbsp;\r\n                    <a href=\"http://www.cipmoyobamba.org/cipmoyobamba@cip.org.pe\" target=\"_blank\" style=\"color: rgb(218, 77, 77); transition: all 0.2s ease-out 0s;\">cipmoyobamba@cip.org.pe</a>\r\n                </li>\r\n            </ul>\r\n            <p style=\"text-align: justify;\"></p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"col-sm-12\" style=\"width: 1240px;\">\r\n        <div class=\"box-description\"><p class=\"text-success\" style=\"text-align: justify;\">Pago por Derecho de colegiación: S/. 1,000.00</p></div>\r\n    </div>\r\n</div>\r\n<div class=\"box-content\" style=\"color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"col-xs-12 col-md-10 col-sm-4\" style=\"width: 1033.33px;\">\r\n        <div class=\"box-description\">\r\n            <p style=\"text-align: justify;\"></p>\r\n            <table class=\"table\" style=\"width: 1003px;\">\r\n                <tbody>\r\n                    <tr>\r\n                        <td colspan=\"3\" style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">DEPOSITAR EN LA CUENTA CORRIENTE – BBVA CONTINENTAL</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">Cuenta N°</td>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">:</td>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">0011- 0314- 0100051858 27</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">CCI N°</td>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">:</td>\r\n                        <td style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\">011 - 314 - 000100051858 - 27</td>\r\n                    </tr>\r\n                    <tr>\r\n                        <td colspan=\"3\" style=\"line-height: 1.42857; border-top-color: rgb(221, 221, 221);\"></td>\r\n                    </tr>\r\n                </tbody>\r\n            </table>\r\n            <p style=\"text-align: justify;\"></p>\r\n        </div>\r\n    </div>\r\n</div>\r\n<div class=\"box-content\" style=\"transition: all 0.2s ease-in-out 0s; transform: translateX(5px); animation-name: inicio-middle; animation-duration: 1s; color: rgb(85, 85, 85); font-family: Roboto, Helvetica, Arial, sans-serif;\">\r\n    <div class=\"col-sm-12\" style=\"width: 1240px;\">\r\n        <div class=\"box-description\"><p class=\"text-success\" style=\"text-align: justify;\">La cuota mensual para todos los Ingenieros colegiados es: S/. 18.00</p></div>\r\n    </div>\r\n</div>\r\n', 0, '2021-02-23 04:43:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifario`
--

CREATE TABLE `tarifario` (
  `id_tarifario` int(11) NOT NULL,
  `doc_tarifario` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre_tarifario` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_tarifario` int(11) NOT NULL DEFAULT 0,
  `fecha_tarifario` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tarifario`
--

INSERT INTO `tarifario` (`id_tarifario`, `doc_tarifario`, `nombre_tarifario`, `estado_tarifario`, `fecha_tarifario`) VALUES
(1, 'recursos/pdf/tarifario/14161213749233.pdf', 'Tarifarioaa', 0, '2021-01-31 23:49:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodirectiva`
--

CREATE TABLE `tipodirectiva` (
  `id_td` int(11) NOT NULL,
  `nombre_td` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_td` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipodirectiva`
--

INSERT INTO `tipodirectiva` (`id_td`, `nombre_td`, `estado_td`) VALUES
(1, 'Miembro del Consejo Departamental', 0),
(2, 'Miembro del CAP. Agrónomos y Fines', 0),
(3, 'Miembro del CAP. Ambiental y Fines', 0),
(4, 'Miembro del CAP. Industrial y Fines', 0),
(5, 'Miembro del CAP. Civiles', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `id_tipo_doc` int(11) NOT NULL,
  `nombre_tipo_doc` text COLLATE utf8_spanish_ci NOT NULL,
  `estado_tipo_doc` int(11) NOT NULL DEFAULT 0,
  `fecha_tipo_doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`id_tipo_doc`, `nombre_tipo_doc`, `estado_tipo_doc`, `fecha_tipo_doc`) VALUES
(1, 'REGLAMENTO', 0, '2021-01-11 01:04:06'),
(2, 'LEYES', 0, '2021-01-11 01:04:06'),
(3, 'ESTATUTOS', 0, '2021-01-11 01:04:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `clave` varchar(100) DEFAULT NULL,
  `estado` char(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `clave`, `estado`) VALUES
(1, '@creativecode', 'lE5jRFU1KJX3WJpc4ulbwA==', '0'),
(2, 'admin', 'IXM7lXNKvXfXkYW5R0tWpw==', '0'),
(3, '@jaexpeditions', 'LgddRJmqXt/8os5QI/dpvg==', '1'),
(4, 'junior', 'IXM7lXNKvXfXkYW5R0tWpw==', '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idalquiler`);

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`idcapacitacion`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`idcapitulos`);

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`idcarousel`);

--
-- Indices de la tabla `certifhabilidad`
--
ALTER TABLE `certifhabilidad`
  ADD PRIMARY KEY (`idcertifhabilidad`);

--
-- Indices de la tabla `colegiatura`
--
ALTER TABLE `colegiatura`
  ADD PRIMARY KEY (`idcolegiatura`);

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`idcomunicado`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`idcontactanos`);

--
-- Indices de la tabla `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`idconvenio`);

--
-- Indices de la tabla `decano`
--
ALTER TABLE `decano`
  ADD PRIMARY KEY (`id_decano`);

--
-- Indices de la tabla `directiva`
--
ALTER TABLE `directiva`
  ADD PRIMARY KEY (`id_directiva`);

--
-- Indices de la tabla `docnorma`
--
ALTER TABLE `docnorma`
  ADD PRIMARY KEY (`id_docnorma`);

--
-- Indices de la tabla `doc_benficio_cole`
--
ALTER TABLE `doc_benficio_cole`
  ADD PRIMARY KEY (`idbeneficio`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`idempresa`);

--
-- Indices de la tabla `especializacion_ing`
--
ALTER TABLE `especializacion_ing`
  ADD PRIMARY KEY (`idespecializacion`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`idevento`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`idgaleria`);

--
-- Indices de la tabla `historia`
--
ALTER TABLE `historia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `info_beneficio_cole`
--
ALTER TABLE `info_beneficio_cole`
  ADD PRIMARY KEY (`idInfobc`);

--
-- Indices de la tabla `montoscertif`
--
ALTER TABLE `montoscertif`
  ADD PRIMARY KEY (`idmontos`);

--
-- Indices de la tabla `oplaboral`
--
ALTER TABLE `oplaboral`
  ADD PRIMARY KEY (`idoplaboral`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idpaquetes`);

--
-- Indices de la tabla `requisitos_coleg`
--
ALTER TABLE `requisitos_coleg`
  ADD PRIMARY KEY (`id_requisito`);

--
-- Indices de la tabla `tarifario`
--
ALTER TABLE `tarifario`
  ADD PRIMARY KEY (`id_tarifario`);

--
-- Indices de la tabla `tipodirectiva`
--
ALTER TABLE `tipodirectiva`
  ADD PRIMARY KEY (`id_td`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`id_tipo_doc`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `idcapacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  MODIFY `idcapitulos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `idcarousel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `certifhabilidad`
--
ALTER TABLE `certifhabilidad`
  MODIFY `idcertifhabilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colegiatura`
--
ALTER TABLE `colegiatura`
  MODIFY `idcolegiatura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `idcomunicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `idcontactanos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `convenios`
--
ALTER TABLE `convenios`
  MODIFY `idconvenio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `decano`
--
ALTER TABLE `decano`
  MODIFY `id_decano` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `directiva`
--
ALTER TABLE `directiva`
  MODIFY `id_directiva` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `docnorma`
--
ALTER TABLE `docnorma`
  MODIFY `id_docnorma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `doc_benficio_cole`
--
ALTER TABLE `doc_benficio_cole`
  MODIFY `idbeneficio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `idempresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `especializacion_ing`
--
ALTER TABLE `especializacion_ing`
  MODIFY `idespecializacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `idevento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `idgaleria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `historia`
--
ALTER TABLE `historia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `info_beneficio_cole`
--
ALTER TABLE `info_beneficio_cole`
  MODIFY `idInfobc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `montoscertif`
--
ALTER TABLE `montoscertif`
  MODIFY `idmontos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `oplaboral`
--
ALTER TABLE `oplaboral`
  MODIFY `idoplaboral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `idpaquetes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `requisitos_coleg`
--
ALTER TABLE `requisitos_coleg`
  MODIFY `id_requisito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tarifario`
--
ALTER TABLE `tarifario`
  MODIFY `id_tarifario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipodirectiva`
--
ALTER TABLE `tipodirectiva`
  MODIFY `id_td` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  MODIFY `id_tipo_doc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
