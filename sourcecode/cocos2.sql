-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-05-2020 a las 19:49:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cocos2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `Nombre`, `Apellido`, `Correo`, `Telefono`) VALUES
(1, 'Adrian Salvador', 'peralta240807@gmail.com', '', '6461213384'),
(5, 'Berenice ', 'Castillo Rodriguez', 'castillo@gmial.com', '6468388388'),
(6, 'Berenice ', 'Castillo Rodriguez', 'castillo@gmial.com', '6468388388'),
(7, 'Antonio', 'Duarte', 'samdfkskdf', '123123123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `embarcaciones`
--

CREATE TABLE `embarcaciones` (
  `idEmbarcacion` int(11) NOT NULL,
  `NombreEmbarcacion` varchar(30) DEFAULT NULL,
  `TipoEmbarcacion` varchar(15) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL,
  `Foto` varchar(150) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `embarcaciones`
--

INSERT INTO `embarcaciones` (`idEmbarcacion`, `NombreEmbarcacion`, `TipoEmbarcacion`, `Descripcion`, `Foto`, `Precio`) VALUES
(1, 'EL COCO LOCO', 'BARCO', 'Capacidad 35 pasajeros, 55 pies de largo x 18 pies de ancho, Cuenta con 15 Camarotes, WC, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/ELCOCOLOCO.jpg', 800),
(2, 'LITTLE HORSE', 'BARCO', 'Capacidad 10 pasajeros, 28 pies de largo x 12 pies de ancho, Cuenta con 1 Camarote, WC, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/LittleHorse.jpg', 450),
(3, 'LIBERTAD II', 'BARCO', 'Capacidad 12 pasajeros, 32 pies de largo x 12 pies de ancho, Cuenta con 2 Camarotes, WC, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/Libertad.jpg', 500),
(4, 'ZEUS', 'BARCO', 'Capacidad 8 pasajeros, 26 pies de largo x 10 pies de ancho, Cuenta con 1 Camarote, WC, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/zeuz.jpeg', 380),
(5, 'CRAZY TUNA', 'PANGA', 'Capacidad 4 pasajeros, 24 pies de largo x 6 pies de ancho, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/CrazyTuna.jpg', 270),
(6, 'FRESH ONE!', 'PANGA', 'Capacidad 4 pasajeros, 26 pies de largo x 6 pies de ancho, Sistema de audio, GPS, Radar, Fish Finder.', 'uploads/Freshone.jpg', 270);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_usuario`
--

CREATE TABLE `registro_usuario` (
  `id_cliente` int(5) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `A_paterno` varchar(100) NOT NULL,
  `A_materno` varchar(100) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Email` varchar(500) NOT NULL,
  `Password` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_usuario`
--

INSERT INTO `registro_usuario` (`id_cliente`, `Nombre`, `A_paterno`, `A_materno`, `Telefono`, `Email`, `Password`, `role`) VALUES
(21, 'Adrian ', 'Peralta', 'Murillo', '6461213384', 'peraltaa@uabc.edu.mx', '$2y$10$Jo926FhJdPYNrL6HNrS4uO5Yd9be5qG3kWMvjHscmzBI3y/OxA4zm', 'ADMIN'),
(24, 'Carlos', 'Ramirez', 'Nuñez', '6461314328', 'carlos.ramirez12@uabc.edu.mx', '$2y$10$QkSHQ5NWiHkLsXdAUvyxiOvo6o8yvLRLt0zbyFg91tWTOqC0oFXyi', 'ADMIN'),
(25, 'Juan', 'Perez', 'Hernandez', '1111111111', 'juan@gmail.com', '$2y$10$EQU01Ia9eyyAg.ssS6kTweL182/1YNZQ550M13uS/jA1EjSRew3j2', 'ADMIN');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `idReservacion` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `Embarcacion` varchar(100) NOT NULL,
  `TipoViaje` varchar(100) NOT NULL,
  `Fecha` date NOT NULL,
  `HoraSalida` time NOT NULL,
  `HoraLlegada` time NOT NULL,
  `Precio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiposviajes`
--

CREATE TABLE `tiposviajes` (
  `idTipoViaje` int(11) NOT NULL,
  `TipoViaje` varchar(45) DEFAULT NULL,
  `HoraSalida` time NOT NULL,
  `HoraLlegada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tiposviajes`
--

INSERT INTO `tiposviajes` (`idTipoViaje`, `TipoViaje`, `HoraSalida`, `HoraLlegada`) VALUES
(1, 'PESCA DEPORTIVA', '07:00:00', '15:00:00'),
(2, 'AVISTAMIENTO DE BALLENAS', '12:00:00', '16:00:00'),
(3, 'PARTY BOAT', '12:00:00', '16:00:00'),
(4, 'SURFING', '08:00:00', '16:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `embarcaciones`
--
ALTER TABLE `embarcaciones`
  ADD PRIMARY KEY (`idEmbarcacion`);

--
-- Indices de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`idReservacion`);

--
-- Indices de la tabla `tiposviajes`
--
ALTER TABLE `tiposviajes`
  ADD PRIMARY KEY (`idTipoViaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `embarcaciones`
--
ALTER TABLE `embarcaciones`
  MODIFY `idEmbarcacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `registro_usuario`
--
ALTER TABLE `registro_usuario`
  MODIFY `id_cliente` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `idReservacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tiposviajes`
--
ALTER TABLE `tiposviajes`
  MODIFY `idTipoViaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
