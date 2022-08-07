-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2022 a las 06:09:48
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `university`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido1` varchar(50) DEFAULT NULL,
  `Apellido2` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Puesto` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Correo`, `Puesto`) VALUES
(0, 'Pergamanazio', 'Quinteros', 'Hierra', 'QuinterosHierraP@correo.com', 'RH'),
(12, 'MarÃ­a', 'Cervantes', 'Boix', 'CervantesBoixM@utags.edu.mx', 'Secretaria'),
(15, 'Julio', 'Figueroa', 'Nogales', 'FigueroaNogalesJ@utags.edu.mx', 'Rector'),
(26, 'Elias', 'Viera', 'Prat', 'VieraPratE@utags.edu.mx', 'Consultor general'),
(34, 'Carolina', 'Robles', 'Perello', 'RoblesPerelloC@utags.edu.mx', 'Cajera'),
(48, 'Ian', 'Ruano', 'Guerra', 'RuanoGuerraI@utags.edu.mx', 'Transportista'),
(50, 'Juan', 'Villalba', 'Royo', 'VillalbaRoyoJ@utags.edu.mx', 'Contador'),
(52, 'Salah', 'Orozco', 'Planas', 'OrozcoPlanasS@utags.edu.mx', 'Tesorero'),
(56, 'Marina', 'Freire', 'Pino', 'FreirePinoM@utags.edu.mx', 'Supervisora'),
(97, 'Orlando', 'Tejada', 'Varela', 'TejadaVarelaO@utags.edu.mx', 'Transportista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Apellido1` varchar(100) DEFAULT NULL,
  `Apellido2` varchar(100) DEFAULT NULL,
  `Carrera` varchar(50) DEFAULT NULL,
  `Correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Carrera`, `Correo`) VALUES
(1, 'Luis', 'Patlan', 'Estrada', 'TIAIRD', '210509@utags.edu.mx'),
(2, 'Juan', 'Reyes', 'Robledo', 'TIAIRD', '206157@correo.com'),
(4, 'Juan Pablo', 'Calderon', 'Escobar', 'TIAIRD', '210609@utags.edu.mx'),
(5, 'Alexis', 'Tortosa', 'Espinoza', 'TIAIRD', '210757@utags.edu.mx'),
(6, 'Cintia', 'Teruel', 'Casas', 'TIAIRD', '210973@utags.edu.mx'),
(7, 'Elsa', 'Pica<o', 'Andreu', 'TIAIRD', '210248@utags.edu.mx'),
(8, 'Flora', 'Pallares', 'Guerrero', 'TIAIRD', '210248@utags.edu.mx'),
(9, 'Paula', 'de la Cruz', 'Sandoval', 'TIAIRD', '218451@utags.edu.mx'),
(10, 'Hassan', 'Novo', 'Puig', 'TIAIRD', '211520@utags.edu.mx'),
(11, 'Confusio', 'Guadarrama', 'Espinoza', 'PM', '206157@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido1` varchar(50) DEFAULT NULL,
  `Apellido2` varchar(50) DEFAULT NULL,
  `Materia` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`ID`, `Nombre`, `Apellido1`, `Apellido2`, `Materia`, `Correo`) VALUES
(1, 'Carmela', 'Martin', 'Gonzales', 'Matematicas', 'CarmelaMartin@utags.edu.mx'),
(3, 'Ignasi', 'Sierra', 'del Carmen', 'DHPL', 'IgnasiSierra@utags.edu.mx'),
(4, 'Jose', 'Vasquez', 'Alcazar', 'Redes', 'JoseVasquez@utags.edu.mx'),
(5, 'Ibai', 'Abreu', 'Llamas', 'Aplicaciones Web', 'IbaiAbreu@utags.edu.mx'),
(6, 'Esmeralda', 'Escribano', 'Carrion', 'Formacion sociocultural', 'EsmeraldaEscribano@utags.edu.mx'),
(7, 'Dylan', 'Zamorano', 'de la Fuente', 'Redes', 'DylanZamorano@utags.edu.mx'),
(8, 'Salvador', 'Calleja', 'Matas', 'Sistemas Operativos', 'SalvadorCalleja@utags.edu.mx'),
(9, 'German', 'Portela', 'Espinosa', 'Centros de datos', 'GermanPortela@utags.edu.mx'),
(10, 'David', 'Toro', 'Pico', 'Centros de datos', 'DavidToro@utags.edu.mx'),
(11, 'Armando', 'Hernandez', 'Casas', 'Geografia', 'ArmandoHernandez@correo.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Mensaje` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID`, `Nombre`, `Correo`, `Mensaje`) VALUES
(1, 'Pablo', 'nuevo@correo.com', 'Quiero estudiar en esta universidad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
