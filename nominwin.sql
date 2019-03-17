-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-03-2019 a las 22:15:02
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nominwin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliar_nomina`
--

CREATE TABLE `auxiliar_nomina` (
  `id_mofijos` int(11) NOT NULL,
  `movtipnom` varchar(20) NOT NULL,
  `movnumtra` int(10) NOT NULL,
  `movnumpyd` int(5) NOT NULL,
  `movdepto` varchar(3) NOT NULL,
  `movtarifa` decimal(10,0) NOT NULL,
  `movcantidad` decimal(10,0) NOT NULL,
  `movimport` decimal(10,0) NOT NULL,
  `movindica` varchar(20) NOT NULL,
  `mocstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auxiliar_nomina`
--

INSERT INTO `auxiliar_nomina` (`id_mofijos`, `movtipnom`, `movnumtra`, `movnumpyd`, `movdepto`, `movtarifa`, `movcantidad`, `movimport`, `movindica`, `mocstatus`) VALUES
(1, 'SUELDO ORDINARIO', 2, 1, 'ven', '150', '15', '2100', 'D', ''),
(2, 'SUELDO ORDINARIO	', 3, 1, 'sop', '75', '15', '1125', 'D', ''),
(3, 'PGOPERMISOGOCESDO	', 2, 2, 'ven', '150', '1', '150', 'D', ''),
(4, 'PRIMA_DOMINICALAUT	', 3, 13, 'sop', '19', '2', '38', 'D', ''),
(5, 'HRS.EXTRAS	', 2, 9, 'ven', '19', '3', '56', 'D', ''),
(6, 'PREMIOPUNTUALIDAD	', 3, 103, 'sop', '300', '1', '300', 'D', ''),
(7, 'BONOS DE DESPENSA', 2, 101, 'ven', '300', '1', '300', 'D', ''),
(8, 'PREMIOASISTENCIA	', 3, 102, 'sop', '300', '1', '300', 'D', ''),
(9, 'PREMIOASISTENCIA', 2, 102, 'ven', '300', '1', '300', 'D', ''),
(10, 'BONOS DE DESPENSA', 3, 101, 'sop', '300', '1', '300', 'D', ''),
(11, 'PREMIOPUNTUALIDAD', 2, 103, 'ven', '300', '1', '300', 'D', ''),
(12, 'FONDO AHORRO RET.', 3, 512, 'sop', '150', '1', '150', 'D', ''),
(13, 'AUSENCIA C/PERMISO', 2, 506, 'ven', '150', '2', '300', 'D', ''),
(14, 'Subsidio al Empleo	', 3, 499, 'ven', '68', '1', '68', 'D', ''),
(15, 'SUELDO ORDINARIO', 123456789, 1, '1', '250', '15', '3750', 'D', ''),
(16, 'CUOTA SINDICAL', 2, 505, 'ven', '50', '1', '50', 'D', ''),
(17, 'I.S.P.T. RETENIDO	', 2, 500, 'ven', '120', '1', '120', 'D', ''),
(21, 'I.S.P.T. RETENIDO	', 123456789, 500, 'RH', '309', '1', '309', 'D', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catdefinicionmodulo`
--

CREATE TABLE `catdefinicionmodulo` (
  `idmodulo` int(11) NOT NULL,
  `defnombre_empresa` varchar(60) NOT NULL,
  `defcalle_numero` varchar(50) DEFAULT NULL,
  `defcolonia` varchar(50) DEFAULT NULL,
  `defciudad` varchar(50) DEFAULT NULL,
  `defestado` varchar(50) DEFAULT NULL,
  `defcodigo_postal` varchar(15) DEFAULT NULL,
  `deftelefono_oficina` varchar(15) DEFAULT NULL,
  `deftelefono_celular` varchar(15) DEFAULT NULL,
  `deftelefono_otro` varchar(15) DEFAULT NULL,
  `def_fax` varchar(15) DEFAULT NULL,
  `defemail` varchar(50) DEFAULT NULL,
  `defrfc` varchar(20) DEFAULT NULL,
  `defregistro_imss` varchar(20) DEFAULT NULL,
  `defregistro_infonavit` varchar(20) DEFAULT NULL,
  `defmes_anoproceso` date DEFAULT NULL,
  `defarea_geografica` int(2) DEFAULT NULL,
  `defdigito_verificador` varchar(5) DEFAULT NULL,
  `defcalculo_destajo` varchar(20) DEFAULT NULL,
  `defproporcion_pagos` decimal(11,4) DEFAULT NULL,
  `deffondo_ahorro_retenido` varchar(20) DEFAULT NULL,
  `defmonto_retenido` decimal(11,4) DEFAULT NULL,
  `deffondo_ahorro_apartado` varchar(20) DEFAULT NULL,
  `defmonto_apartado` decimal(11,4) DEFAULT NULL,
  `defcuota_sindical` varchar(20) DEFAULT NULL,
  `defmonto_cuotasindical` decimal(11,4) DEFAULT NULL,
  `defotra_deduccion` varchar(20) DEFAULT NULL,
  `defmonto_deduccionfija` decimal(11,4) DEFAULT NULL,
  `defpagapremios_aucencias` varchar(5) DEFAULT NULL,
  `defbono_despensa` varchar(5) DEFAULT NULL,
  `defbonodespensa_semanal` varchar(5) DEFAULT NULL,
  `defbonodespensa_decemanal` varchar(5) DEFAULT NULL,
  `defbonodespensa_quincenal` varchar(5) DEFAULT NULL,
  `defbonodespensa_mensual` varchar(5) DEFAULT NULL,
  `defpremio_asistencia` varchar(5) DEFAULT NULL,
  `defpremioasistencia_semanal` varchar(5) DEFAULT NULL,
  `defpremioasistencia_decemanal` varchar(5) DEFAULT NULL,
  `defpremioasistencia_quincenal` varchar(5) DEFAULT NULL,
  `defpremioasistencia_mensual` varchar(5) DEFAULT NULL,
  `defpremio_puntualidad` varchar(5) DEFAULT NULL,
  `defpremiopuntualidad_semanal` varchar(5) DEFAULT NULL,
  `defpremiopuntualidad_decemanal` varchar(5) DEFAULT NULL,
  `defpremiopuntualidad_quincenal` varchar(5) DEFAULT NULL,
  `defpremiopuntualidad_mensual` varchar(5) DEFAULT NULL,
  `defperiodo_bono_despensa` varchar(30) DEFAULT NULL,
  `defreflejar_bono_puntualidad` varchar(5) DEFAULT NULL,
  `defdeducciones_nominapatronal` decimal(11,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `catdefinicionmodulo`
--

INSERT INTO `catdefinicionmodulo` (`idmodulo`, `defnombre_empresa`, `defcalle_numero`, `defcolonia`, `defciudad`, `defestado`, `defcodigo_postal`, `deftelefono_oficina`, `deftelefono_celular`, `deftelefono_otro`, `def_fax`, `defemail`, `defrfc`, `defregistro_imss`, `defregistro_infonavit`, `defmes_anoproceso`, `defarea_geografica`, `defdigito_verificador`, `defcalculo_destajo`, `defproporcion_pagos`, `deffondo_ahorro_retenido`, `defmonto_retenido`, `deffondo_ahorro_apartado`, `defmonto_apartado`, `defcuota_sindical`, `defmonto_cuotasindical`, `defotra_deduccion`, `defmonto_deduccionfija`, `defpagapremios_aucencias`, `defbono_despensa`, `defbonodespensa_semanal`, `defbonodespensa_decemanal`, `defbonodespensa_quincenal`, `defbonodespensa_mensual`, `defpremio_asistencia`, `defpremioasistencia_semanal`, `defpremioasistencia_decemanal`, `defpremioasistencia_quincenal`, `defpremioasistencia_mensual`, `defpremio_puntualidad`, `defpremiopuntualidad_semanal`, `defpremiopuntualidad_decemanal`, `defpremiopuntualidad_quincenal`, `defpremiopuntualidad_mensual`, `defperiodo_bono_despensa`, `defreflejar_bono_puntualidad`, `defdeducciones_nominapatronal`) VALUES
(1, 'empresa13', 'pez lt 34', 'lago', 'laguna', 'CDMX', '31561', '5557757130', '5518127057', '5557759584', '5123698745', 'empresa@gmail.com', 'ghvjg', 'hgvghv', 'hgvhjgv', '2018-10-10', 2, 'No', 'con_garantia', '10.0000', 'sin_cuota', '7.0000', 'cuota_fija_diaria', '2.0000', 'sin_cuota', '0.0000', 'cuota_fija_diaria', '5.0000', NULL, 'No', NULL, NULL, NULL, NULL, 'Si', NULL, NULL, NULL, NULL, 'Si', NULL, NULL, NULL, NULL, 'Ultimo Periodo del Mes', 'Si', '5.0000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `num_cat` int(5) NOT NULL,
  `desc_cat` varchar(50) NOT NULL,
  `sueldo_cat` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`num_cat`, `desc_cat`, `sueldo_cat`) VALUES
(201, 'gerente', '150'),
(202, 'subgerente', '120'),
(203, 'jefe depto', '110');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuotas_imss`
--

CREATE TABLE `cuotas_imss` (
  `idcoutas_imss` int(2) NOT NULL,
  `registro_patronal` varchar(20) DEFAULT NULL,
  `fija_patron` decimal(5,4) DEFAULT NULL,
  `fija_smdf` decimal(5,4) DEFAULT NULL,
  `excedente_patron` decimal(5,4) DEFAULT NULL,
  `excedente_empleado` decimal(5,4) DEFAULT NULL,
  `prestadinero_patron` decimal(5,4) DEFAULT NULL,
  `prestadinero_empleado` decimal(5,4) DEFAULT NULL,
  `pensionados_patron` decimal(5,4) DEFAULT NULL,
  `pensionados_empleado` decimal(5,4) DEFAULT NULL,
  `riesgotrabajo_patron` decimal(5,4) DEFAULT NULL,
  `riesgotrabajo_smdf` decimal(5,4) DEFAULT NULL,
  `invalidez_patron` decimal(5,4) DEFAULT NULL,
  `invalidez_empleado` decimal(5,4) DEFAULT NULL,
  `invalidez_smdf` decimal(5,4) DEFAULT NULL,
  `guarderia_patron` decimal(5,4) DEFAULT NULL,
  `guarderia_smdf` decimal(5,4) DEFAULT NULL,
  `retiro_patron` decimal(5,4) DEFAULT NULL,
  `retiro_smdf` decimal(5,4) DEFAULT NULL,
  `cesantia_patron` decimal(5,4) DEFAULT NULL,
  `cesantia_empleado` decimal(5,4) DEFAULT NULL,
  `cesantia_smdf` decimal(5,4) DEFAULT NULL,
  `infonavit_patron` decimal(5,4) DEFAULT NULL,
  `infonavit_smdf` decimal(5,4) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuotas_imss`
--

INSERT INTO `cuotas_imss` (`idcoutas_imss`, `registro_patronal`, `fija_patron`, `fija_smdf`, `excedente_patron`, `excedente_empleado`, `prestadinero_patron`, `prestadinero_empleado`, `pensionados_patron`, `pensionados_empleado`, `riesgotrabajo_patron`, `riesgotrabajo_smdf`, `invalidez_patron`, `invalidez_empleado`, `invalidez_smdf`, `guarderia_patron`, `guarderia_smdf`, `retiro_patron`, `retiro_smdf`, `cesantia_patron`, `cesantia_empleado`, `cesantia_smdf`, `infonavit_patron`, `infonavit_smdf`) VALUES
(1, 'negocios', '5.5550', '2.3000', '5.6000', '5.3000', '4.5000', '4.8000', '9.5000', '6.7000', '2.6000', '1.2000', '3.2000', '4.5000', '8.9000', '1.2000', '7.8000', '9.5000', '6.4000', '6.5000', '2.3000', '4.5000', '6.5000', '1.2000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `numDepto` int(2) DEFAULT NULL,
  `DescDepto` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`numDepto`, `DescDepto`) VALUES
(1, 'ventas'),
(2, 'Recusros Humanos'),
(3, 'soporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destajos`
--

CREATE TABLE `destajos` (
  `clave_destajo` int(5) NOT NULL,
  `desc_destajo` varchar(50) NOT NULL,
  `unidad_med` varchar(20) NOT NULL,
  `tarifa_unidad` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `destajos`
--

INSERT INTO `destajos` (`clave_destajo`, `desc_destajo`, `unidad_med`, `tarifa_unidad`) VALUES
(101, 'pantalon', 'pza', '10'),
(102, 'blusa', 'pza', '20'),
(103, 'short', '10', '15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `numero_empleado` int(10) NOT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_baja` date DEFAULT NULL,
  `appaterno` varchar(30) DEFAULT NULL,
  `apmaterno` varchar(30) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `rfc` varchar(20) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `edad` int(3) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  `estado_civil` varchar(20) DEFAULT NULL,
  `calle` varchar(30) DEFAULT NULL,
  `numero_interior` varchar(10) DEFAULT NULL,
  `numero_exterior` varchar(10) DEFAULT NULL,
  `colonia` varchar(40) DEFAULT NULL,
  `ciudad` varchar(40) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `seguro_social` varchar(15) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `numdepartamento` int(2) NOT NULL,
  `departamento` varchar(30) DEFAULT NULL,
  `categoria` varchar(10) DEFAULT NULL,
  `area_geografica` int(2) DEFAULT NULL,
  `tipo_empleado` varchar(15) DEFAULT NULL,
  `sindicalizado` varchar(4) DEFAULT NULL,
  `tipo_nomina` varchar(15) DEFAULT NULL,
  `tipo_sueldo` varchar(15) DEFAULT NULL,
  `sueldo` decimal(5,2) DEFAULT NULL,
  `salario_diario_integrado` decimal(5,2) DEFAULT NULL,
  `calculo_imss` varchar(4) DEFAULT NULL,
  `numero_cuenta` varchar(50) DEFAULT NULL,
  `banco` varchar(30) NOT NULL,
  `tipo_regimen` varchar(20) NOT NULL,
  `registro_patronal` varchar(15) NOT NULL,
  `riesgo_puesto` varchar(15) NOT NULL,
  `tipo_jornada` varchar(15) NOT NULL,
  `tipo_contrato` varchar(15) NOT NULL,
  `entidad_fed_segunsat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`numero_empleado`, `fecha_ingreso`, `fecha_baja`, `appaterno`, `apmaterno`, `nombre`, `rfc`, `fecha_nacimiento`, `edad`, `genero`, `estado_civil`, `calle`, `numero_interior`, `numero_exterior`, `colonia`, `ciudad`, `estado`, `telefono`, `email`, `seguro_social`, `curp`, `numdepartamento`, `departamento`, `categoria`, `area_geografica`, `tipo_empleado`, `sindicalizado`, `tipo_nomina`, `tipo_sueldo`, `sueldo`, `salario_diario_integrado`, `calculo_imss`, `numero_cuenta`, `banco`, `tipo_regimen`, `registro_patronal`, `riesgo_puesto`, `tipo_jornada`, `tipo_contrato`, `entidad_fed_segunsat`) VALUES
(2, '2018-10-01', '2018-10-02', '      sanchez', 'cardona', 'jose', 'sacc891017se8', '2018-10-01', 25, 'masculino', 'casado', '      perro', '26', '25', 'animales', 'zoologico', 'mexico', '57757130', 'carlos@gmailcom', '25625532681', 'bhbjsbdckjsbd', 0, 'ventas', 'vendedor', 2, 'Eventual', 'Si', 'Quincenal', 'Diario', '150.00', '150.00', 'Si', '16198165165', '16516161651', 'vjhhvghv', 'bjhuhjhbkub', 'jbgvubkjh', 'diurna', 'indefinido', '2'),
(3, '2018-11-01', '2018-11-30', 'garcia', 'gonzalez', 'yesenia', 'gagy900523se8', '1990-05-23', 29, 'femenino', 'casado', 'gato', '25', '16', 'animales', 'zoologico', 'mexico', '57757130', 'yesenia@gmailcom', '56535656325', 'gagy jasdjasdjjas', 2, 'ventas', 'vendesor', 2, 'Permanente', 'No', 'Semanal', 'Diario', '150.00', '150.00', 'Si', '5326589742', 'banamex', 'asdasd', 'asdasdasd', 'asdasd', 'diurna', 'indefinido', '2'),
(123456789, '2018-08-08', '2018-08-08', '  lopez', '  caste', '  carlos', '  jajsdkjsan', '2018-08-09', 25, 'masculino', 'casado', '  pez', '  26', '  27', '  laguna', '  lago', '  mexico', ' 2147483647', 'jorge@gmail.com', '  hbvjhgvg', '  hgvhjbjvbhjb', 0, '  vghvbjvhgkv', '  jlhbjvkh', 2, 'Eventual', 'Si', 'Semanal', 'Diario', '0.00', '0.00', 'Si', '  bjhbhjbljbhj', ' bancomer', '  no se', '  m hhjnhlbliun', '  clase1', '  nocturna', '  base', '  df');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movexcepcion`
--

CREATE TABLE `movexcepcion` (
  `id_mov_excep` int(11) NOT NULL,
  `num_perdec` int(3) NOT NULL,
  `desc_mov_excep` varchar(50) NOT NULL,
  `numemp_excep` varchar(5) NOT NULL,
  `dep_mov_excep` varchar(50) NOT NULL,
  `movimiento_en` varchar(20) NOT NULL,
  `importe_mov_excep` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movexcepcion`
--

INSERT INTO `movexcepcion` (`id_mov_excep`, `num_perdec`, `desc_mov_excep`, `numemp_excep`, `dep_mov_excep`, `movimiento_en`, `importe_mov_excep`) VALUES
(1, 1, 'salario', '2', 'ventas', 'D', 150),
(2, 1, 'salario', '3', 'ventas', 'D', 75);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movfijosempleado`
--

CREATE TABLE `movfijosempleado` (
  `id_mov` int(11) NOT NULL,
  `NumPerDec` int(5) DEFAULT NULL,
  `numero_emp` int(10) DEFAULT NULL,
  `concepto` varchar(100) DEFAULT NULL,
  `Total` int(2) DEFAULT NULL,
  `por_periodo` int(2) DEFAULT NULL,
  `aplicado` int(2) DEFAULT NULL,
  `por_aplicar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `movfijosempleado`
--

INSERT INTO `movfijosempleado` (`id_mov`, `NumPerDec`, `numero_emp`, `concepto`, `Total`, `por_periodo`, `aplicado`, `por_aplicar`) VALUES
(2, 1, 123456789, 'sueldo ordinario', 1, 1, 1, 1),
(3, 1, 2, 'suedo ordinario', 1, 1, 1, 1),
(4, 13, 2, 'primadominical', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametroscalculosemanal`
--

CREATE TABLE `parametroscalculosemanal` (
  `idCalSem` int(11) NOT NULL,
  `NumSemanasMes` int(2) DEFAULT NULL,
  `Semana` int(2) DEFAULT NULL,
  `FacDiasPagados` decimal(5,3) DEFAULT NULL,
  `NumPerceFijas` int(1) DEFAULT NULL,
  `NumDeducFijas` int(2) NOT NULL,
  `NumDiasCotizar` int(2) DEFAULT NULL,
  `SalSemaDeducible` decimal(5,3) DEFAULT NULL,
  `FormDescISPT` int(2) DEFAULT NULL,
  `NumTabMensISPT` int(2) DEFAULT NULL,
  `NumPeriodo` int(2) DEFAULT NULL,
  `FechaInicial` date DEFAULT NULL,
  `FechaFinal` date DEFAULT NULL,
  `NumDiasPagar` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parametroscalculosemanal`
--

INSERT INTO `parametroscalculosemanal` (`idCalSem`, `NumSemanasMes`, `Semana`, `FacDiasPagados`, `NumPerceFijas`, `NumDeducFijas`, `NumDiasCotizar`, `SalSemaDeducible`, `FormDescISPT`, `NumTabMensISPT`, `NumPeriodo`, `FechaInicial`, `FechaFinal`, `NumDiasPagar`) VALUES
(1, 5, 5, '4.000', 3, 3, 4, '1.000', 3, 2, 3, '2018-10-01', '2018-10-17', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pargenerales_calculo`
--

CREATE TABLE `pargenerales_calculo` (
  `idpargencalculo` int(2) DEFAULT NULL,
  `descuento_cuotas_imss` varchar(20) DEFAULT NULL,
  `salario_mensual` decimal(5,3) DEFAULT NULL,
  `bases_retencion_ISPT` varchar(10) DEFAULT NULL,
  `proceso_nomina` varchar(15) DEFAULT NULL,
  `ajuste_anual` varchar(30) DEFAULT NULL,
  `desc_fondo_ahorro` varchar(20) DEFAULT NULL,
  `redondeo_calculo` varchar(20) DEFAULT NULL,
  `calculo_pagosinfonavit` varchar(30) DEFAULT NULL,
  `calculopremio_asistencia` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pargenerales_calculo`
--

INSERT INTO `pargenerales_calculo` (`idpargencalculo`, `descuento_cuotas_imss`, `salario_mensual`, `bases_retencion_ISPT`, `proceso_nomina`, `ajuste_anual`, `desc_fondo_ahorro`, `redondeo_calculo`, `calculo_pagosinfonavit`, `calculopremio_asistencia`) VALUES
(1, 'IMSS_descontada', '30.416', '365 dias', 'especial', 'ajuste compensando diferencias', 'todos los empleados', 'sin redondeo', 'sobre salario diario integrado', 'salario diario integrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perce_deduc`
--

CREATE TABLE `perce_deduc` (
  `pydnumero` int(3) DEFAULT NULL,
  `pyddescri` varchar(20) DEFAULT NULL,
  `pydacptot` int(1) DEFAULT NULL,
  `pydacpgra` int(1) DEFAULT NULL,
  `pydacpgin` int(1) DEFAULT NULL,
  `pydacpptu` int(1) DEFAULT NULL,
  `pydacpsdi` int(1) DEFAULT NULL,
  `pydtipmov` varchar(1) DEFAULT NULL,
  `pydlimite` int(2) DEFAULT NULL,
  `pydporcen` int(1) DEFAULT NULL,
  `pydporce2` int(1) DEFAULT NULL,
  `pydformula` varchar(10) DEFAULT NULL,
  `iydcvecfdi` varchar(10) DEFAULT NULL,
  `gravaexcen` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perce_deduc`
--

INSERT INTO `perce_deduc` (`pydnumero`, `pyddescri`, `pydacptot`, `pydacpgra`, `pydacpgin`, `pydacpptu`, `pydacpsdi`, `pydtipmov`, `pydlimite`, `pydporcen`, `pydporce2`, `pydformula`, `iydcvecfdi`, `gravaexcen`) VALUES
(1, 'SUELDO ORDINARIO', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(2, 'PGO.PERMISO GOCE SDO', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(3, 'PGO.INCAP.RSGO PROF.', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(4, 'PGO.INCAP.ENFERMEDAD', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(5, 'PGO.INCAP.MATERNIDAD', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(6, 'DESC. TRABAJ. AUTOM.', 0, 0, 0, 0, 1, 'D', 0, 0, 0, '', '', ''),
(7, 'DESC. TRABAJ. EXENTO', 1, 0, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(8, 'DESC. TRABAJ. GRAVAB', 1, 1, 1, 1, 1, 'D', 0, 0, 0, '', '', ''),
(9, 'HRS.EXTRAS AUTOMATI.', 0, 0, 0, 0, 0, 'H', 9, 0, 0, '', '', ''),
(10, 'HS.EXTRAS EXENTAS', 1, 0, 0, 0, 0, 'H', 0, 0, 0, '', '', ''),
(11, 'HRS.EXTRAS GRAVABLES', 1, 1, 0, 0, 0, 'H', 0, 0, 0, '', '', ''),
(12, 'HRS.EXTRAS TRIPLES', 1, 1, 0, 0, 0, 'H', 0, 0, 0, '', '', ''),
(13, 'PRIMA DOMINICAL AUT.', 0, 0, 0, 0, 0, 'D', 1, 0, 0, '', '', ''),
(14, 'PRIMA DOMINICAL EXEN', 1, 0, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(15, 'PRIMA DOMINICAL GRAV', 1, 1, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(16, 'PRIMA VACACIONAL AUT', 0, 0, 0, 0, 0, 'D', 15, 0, 0, '', '', ''),
(17, 'PRIMA VACACIONAL EXE', 1, 0, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(18, 'PRIMA VACIONAL GRAV.', 1, 1, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(19, 'GRAT. ANUAL AUTOMAT.', 0, 0, 0, 0, 0, 'D', 30, 0, 0, '', '', ''),
(20, 'GRAT. ANUAL EXENTA', 1, 0, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(21, 'GRAT. ANUAL GRAVABLE', 1, 1, 1, 0, 0, 'D', 0, 0, 0, '', '', ''),
(22, 'RPTO. UTILIDAD AUTOM', 0, 0, 0, 0, 0, '$', 15, 0, 0, '', '', ''),
(23, 'RPTO.UTILIDAD EXENTO', 1, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(24, 'RPTO.UTILIDAD GRAVAB', 1, 1, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(25, 'DEVOLUCION I.S.P.T.', 0, 2, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(26, 'DESTAJO', 1, 1, 1, 1, 0, '$', 0, 0, 0, '', '', ''),
(101, 'BONOS DE DESPENSA', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(102, 'PREMIO P/ASISTENCIA', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(103, 'PREMIO P/PUNTUALIDAD', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(104, 'FONDO DE AHORRO', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(105, 'AYUDA PARA ALIMENTOS', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(106, 'RENTA DE CASA HABIT', 1, 0, 0, 0, 1, '$', 0, 0, 0, '', '', ''),
(499, 'Subsidio al Empleo', 1, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(500, 'I.S.P.T. RETENIDO', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(501, 'I.S.P.T. ADICIONAL', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(502, 'CUOTA OBRERA IMSS', 0, 0, 0, 0, 0, 'D', 0, 0, 0, '', '', ''),
(503, 'AMORTIZ PREST INFONA', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(504, '1% MANTENI INFONAVIT', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(505, 'CUOTA SINDICAL', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(506, 'AUSENCIA C/PERMISO', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(507, 'AUSENCIA S/PERMISO', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(508, 'AUSENCIA X CASTIGO', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(509, 'INCAPAC.RSGO.PROFES.', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(510, 'INCAPAC. ENFERMEDAD', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(511, 'INCAPAC. MATERNIDAD', 2, 2, 2, 2, 2, 'D', 0, 0, 0, '', '', ''),
(512, 'FONDO AHORRO RETEN.', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(513, 'OTRA DEDUCCION FIJA', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(514, 'PRESTAMO PERSONAL', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(515, 'CREDITO FONACOT', 0, 0, 0, 0, 0, '$', 0, 0, 0, '', '', ''),
(33, 'Vacaciones', 1, 1, 1, 1, 0, 'D', 0, 0, 0, '', '', ''),
(27, '  prueba', 1, 1, 1, 1, 1, 'D', NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idPersona` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `appaterno` varchar(30) NOT NULL,
  `apmaterno` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dni` char(8) NOT NULL,
  `fecnac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per_ded`
--

CREATE TABLE `per_ded` (
  `pydnumero` int(3) NOT NULL,
  `pyddescri` varchar(50) NOT NULL,
  `pydtipmov` varchar(10) NOT NULL,
  `pydacptot` int(1) NOT NULL,
  `pydacpgra` int(1) NOT NULL,
  `pydacpsdi` int(1) NOT NULL,
  `pydacpgin` int(1) NOT NULL,
  `pydacpptu` int(1) NOT NULL,
  `pydporcen` int(1) NOT NULL,
  `pydporce2` int(1) NOT NULL,
  `pydlimite` int(2) NOT NULL,
  `pydformula` varchar(20) NOT NULL,
  `iydcvecfdi` varchar(20) NOT NULL,
  `gravaexen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `per_ded`
--

INSERT INTO `per_ded` (`pydnumero`, `pyddescri`, `pydtipmov`, `pydacptot`, `pydacpgra`, `pydacpsdi`, `pydacpgin`, `pydacpptu`, `pydporcen`, `pydporce2`, `pydlimite`, `pydformula`, `iydcvecfdi`, `gravaexen`) VALUES
(1, 'salario', 'D', 1, 1, 1, 1, 1, 1, 1, 1, 'n', 'n', 'n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uma_tablas`
--

CREATE TABLE `uma_tablas` (
  `uma` decimal(5,3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `uma_tablas`
--

INSERT INTO `uma_tablas` (`uma`) VALUES
('88.360');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nomUsuario` varchar(30) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliar_nomina`
--
ALTER TABLE `auxiliar_nomina`
  ADD PRIMARY KEY (`id_mofijos`);

--
-- Indices de la tabla `catdefinicionmodulo`
--
ALTER TABLE `catdefinicionmodulo`
  ADD PRIMARY KEY (`idmodulo`);

--
-- Indices de la tabla `cuotas_imss`
--
ALTER TABLE `cuotas_imss`
  ADD PRIMARY KEY (`idcoutas_imss`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`numero_empleado`);

--
-- Indices de la tabla `movexcepcion`
--
ALTER TABLE `movexcepcion`
  ADD PRIMARY KEY (`id_mov_excep`);

--
-- Indices de la tabla `movfijosempleado`
--
ALTER TABLE `movfijosempleado`
  ADD PRIMARY KEY (`id_mov`),
  ADD KEY `numero_emp` (`numero_emp`);

--
-- Indices de la tabla `parametroscalculosemanal`
--
ALTER TABLE `parametroscalculosemanal`
  ADD PRIMARY KEY (`idCalSem`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idPersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idpersona` (`idpersona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliar_nomina`
--
ALTER TABLE `auxiliar_nomina`
  MODIFY `id_mofijos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `movexcepcion`
--
ALTER TABLE `movexcepcion`
  MODIFY `id_mov_excep` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `movfijosempleado`
--
ALTER TABLE `movfijosempleado`
  MODIFY `id_mov` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idPersona` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `movfijosempleado`
--
ALTER TABLE `movfijosempleado`
  ADD CONSTRAINT `movfijosempleado_ibfk_1` FOREIGN KEY (`numero_emp`) REFERENCES `empleados` (`numero_empleado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idPersona`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
