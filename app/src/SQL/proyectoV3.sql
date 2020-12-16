-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-12-2020 a las 18:17:38
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `AlumnoId` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `Apellidos` varchar(200) NOT NULL,
  `GrupoId` int(11) NOT NULL,
  `TutorId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `RolId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`AlumnoId`, `Nombre`, `Apellidos`, `GrupoId`, `TutorId`, `created_at`, `updated_at`, `RolId`) VALUES
(3, 'Leonardo', 'Del Rio Ayerbe', 5, 5, '2020-12-14 12:38:45', '2020-12-14 06:38:45', 4),
(4, 'Marcela ', 'García Rueda ', 5, 7, '2020-12-14 13:12:51', '2020-12-14 07:12:51', 4),
(5, 'María Natalia', 'Cervantes Luna', 6, 8, '2020-12-14 07:33:46', '2020-12-14 01:33:46', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `AsignaturaId` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `GradoId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`AsignaturaId`, `Nombre`, `GradoId`, `created_at`, `updated_at`) VALUES
(1, 'Español  ', 1, '2020-12-12 07:01:39', '2020-12-12 01:01:39'),
(2, 'Matemáticas ', 1, '2020-12-12 07:30:16', '2020-12-12 01:30:16'),
(3, 'Exploración de la Naturaleza y la Sociedad  ', 1, '2020-12-12 07:32:24', '2020-12-12 01:32:24'),
(4, 'Formación Cívica y Ética ', 1, '2020-12-12 07:32:48', '2020-12-12 01:32:48'),
(5, 'Educación Artística', 1, '2020-12-12 07:33:04', '2020-12-12 01:33:04'),
(6, 'Educación Física', 1, '2020-12-12 07:33:20', '2020-12-12 01:33:20'),
(7, 'Español ', 2, '2020-12-12 07:46:13', '2020-12-12 01:46:13'),
(8, 'Matemáticas ', 2, '2020-12-12 07:46:37', '2020-12-12 01:46:37'),
(9, 'Exploración de la Naturaleza y la Sociedad   ', 2, '2020-12-12 07:46:49', '2020-12-12 01:46:49'),
(10, 'Formación Cívica y Ética ', 2, '2020-12-12 07:47:03', '2020-12-12 01:47:03'),
(11, 'Educación Artística', 2, '2020-12-12 07:47:14', '2020-12-12 01:47:14'),
(12, 'Educación Física', 2, '2020-12-12 07:47:38', '2020-12-12 01:47:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `CalificacionId` int(11) NOT NULL,
  `AsignaturaId` int(11) NOT NULL,
  `AlumnoId` int(11) NOT NULL,
  `Calificacion` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`CalificacionId`, `AsignaturaId`, `AlumnoId`, `Calificacion`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '10', '2020-12-16 08:32:56', '2020-12-16 02:32:56'),
(2, 2, 3, '9', '2020-12-16 08:34:12', '2020-12-16 02:34:12'),
(3, 3, 3, '8', '2020-12-16 08:44:35', '2020-12-16 02:44:35'),
(4, 4, 3, '10', '2020-12-16 08:44:48', '2020-12-16 02:44:48'),
(5, 5, 3, '7', '2020-12-16 08:45:10', '2020-12-16 02:45:10'),
(6, 6, 3, '10', '2020-12-16 08:50:11', '2020-12-16 02:50:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grados`
--

CREATE TABLE `grados` (
  `GradoId` int(11) NOT NULL,
  `Valor` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grados`
--

INSERT INTO `grados` (`GradoId`, `Valor`, `created_at`, `updated_at`) VALUES
(1, '1', '2020-12-10 05:18:11', '2020-12-09 23:18:11'),
(2, '2', '2020-12-10 05:18:25', '2020-12-09 23:18:25'),
(3, '3', '2020-12-10 05:18:31', '2020-12-09 23:18:31'),
(4, '4', '2020-12-10 05:18:38', '2020-12-09 23:18:38'),
(5, '5', '2020-12-10 05:18:44', '2020-12-09 23:18:44'),
(6, '6', '2020-12-10 05:18:49', '2020-12-09 23:18:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `GrupoId` int(11) NOT NULL,
  `Valor` varchar(50) DEFAULT NULL,
  `GradoId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ProfesorId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`GrupoId`, `Valor`, `GradoId`, `created_at`, `updated_at`, `ProfesorId`) VALUES
(5, '1A-M-2020', 1, '2020-12-14 03:29:51', '2020-12-13 21:29:51', 5),
(6, '1A-V-2020', 1, '2020-12-14 03:43:53', '2020-12-13 21:43:53', 5),
(7, '2A-M-2020', 2, '2020-12-14 03:58:38', '2020-12-13 21:58:38', 4),
(8, '2A-V-2020', 2, '2020-12-14 03:58:38', '2020-12-13 21:58:38', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `ProfesorId` int(11) NOT NULL,
  `Nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Apellidos` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Profesion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`ProfesorId`, `Nombre`, `Apellidos`, `Profesion`, `UsuarioId`, `created_at`, `updated_at`) VALUES
(4, 'Juan ', 'Ramirez Hinojosa', 'Pedagogía ', 8, '2020-12-14 03:42:41', '2020-12-13 21:42:41'),
(5, 'Norverto Mario', 'Maya Oritz ', 'Geografia ', 9, '2020-12-10 10:55:02', '2020-12-10 04:55:02'),
(6, 'David', 'Rodriguez Almaraz', 'Pedagogía ', 10, '2020-12-14 03:43:01', '2020-12-13 21:43:01'),
(7, 'Agustin', 'Hernández Villa ', 'Pedagogia', 11, '2020-12-12 14:37:44', '2020-12-12 08:37:44'),
(8, 'Adriana Carolina ', 'Rey Sanchez', 'Pedagogia', 15, '2020-12-14 10:34:13', '2020-12-14 04:34:13'),
(9, 'Cinthya ', 'Dussan Gomes ', 'Español', 16, '2020-12-14 10:39:30', '2020-12-14 04:39:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `RolId` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`RolId`, `Nombre`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-12-05 12:33:15', '2020-12-05 06:33:15'),
(2, 'Tutor', '2020-12-05 12:34:19', '2020-12-05 06:34:19'),
(3, 'Profesor', '2020-12-08 06:24:17', '2020-12-08 00:24:17'),
(4, 'Alumno', '2020-12-08 06:24:44', '2020-12-08 00:24:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutor`
--

CREATE TABLE `tutor` (
  `TutorId` int(11) NOT NULL,
  `Nombre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `Telefono` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `UsuarioId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tutor`
--

INSERT INTO `tutor` (`TutorId`, `Nombre`, `Telefono`, `UsuarioId`, `created_at`, `updated_at`) VALUES
(5, 'Jose Martinez Alvares ', '5598235852', 4, '2020-12-09 13:03:56', '2020-12-09 07:03:56'),
(7, 'Angel Diaz Fernandez', '5569632145', 18, '2020-12-14 06:12:21', '2020-12-14 00:12:21'),
(8, 'German Cervantes Casas', '5532740285', 19, '2020-12-14 14:31:42', '2020-12-14 08:31:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int(11) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Clave` varchar(200) NOT NULL,
  `RolId` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `Email`, `Clave`, `RolId`, `created_at`, `updated_at`) VALUES
(1, 'mxdestructive@gmail.com', '123456', 1, '2020-12-14 02:37:58', '2020-12-13 20:37:58'),
(4, 'ejemplo@ejemplo.com', '12345', 2, '2020-12-09 13:03:56', '2020-12-09 07:03:56'),
(8, 'profesor@profesor.com', '12345', 3, '2020-12-09 13:17:26', '2020-12-09 07:17:26'),
(9, 'ortiznaca@ejemplo.com', '12345', 3, '2020-12-10 10:55:01', '2020-12-10 04:55:01'),
(10, 'nuevo@profesor.com', '12345', 3, '2020-12-10 12:45:40', '2020-12-10 06:45:40'),
(11, 'hernandez12@gmail.com', '12345', 3, '2020-12-12 14:37:43', '2020-12-12 08:37:43'),
(13, 'nuevoadmin@admin.com', '12345', 1, '2020-12-12 14:56:45', '2020-12-12 08:56:45'),
(15, 'profadrey@gmail.com', '12345', 3, '2020-12-14 10:34:13', '2020-12-14 04:34:13'),
(16, 'cinthyaduss@gmail.com', '12345', 3, '2020-12-14 10:39:30', '2020-12-14 04:39:30'),
(18, 'angeldiaz@gmail.com', '12345', 2, '2020-12-14 13:09:37', '2020-12-14 07:09:37'),
(19, 'germancervantes@gmail.com', '12345', 2, '2020-12-14 14:31:42', '2020-12-14 08:31:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`AlumnoId`),
  ADD KEY `GrupoId` (`GrupoId`),
  ADD KEY `TutorId` (`TutorId`),
  ADD KEY `RolId` (`RolId`);

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`AsignaturaId`),
  ADD KEY `GradoId` (`GradoId`);

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`CalificacionId`),
  ADD KEY `AsignaturaId` (`AsignaturaId`),
  ADD KEY `AlumnoId` (`AlumnoId`);

--
-- Indices de la tabla `grados`
--
ALTER TABLE `grados`
  ADD PRIMARY KEY (`GradoId`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`GrupoId`),
  ADD KEY `GradoId` (`GradoId`),
  ADD KEY `ProfesorId` (`ProfesorId`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`ProfesorId`),
  ADD KEY `UsuarioId` (`UsuarioId`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`RolId`);

--
-- Indices de la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`TutorId`),
  ADD KEY `UsuarioId` (`UsuarioId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`),
  ADD KEY `RolId` (`RolId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `AlumnoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  MODIFY `AsignaturaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `CalificacionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grados`
--
ALTER TABLE `grados`
  MODIFY `GradoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `GrupoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `ProfesorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `RolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tutor`
--
ALTER TABLE `tutor`
  MODIFY `TutorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`GrupoId`) REFERENCES `grupos` (`GrupoId`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`TutorId`) REFERENCES `tutor` (`TutorId`),
  ADD CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`RolId`) REFERENCES `roles` (`RolId`);

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_ibfk_1` FOREIGN KEY (`GradoId`) REFERENCES `grados` (`GradoId`);

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`AsignaturaId`) REFERENCES `asignatura` (`AsignaturaId`),
  ADD CONSTRAINT `calificaciones_ibfk_2` FOREIGN KEY (`AlumnoId`) REFERENCES `alumno` (`AlumnoId`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`GradoId`) REFERENCES `grados` (`GradoId`),
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`ProfesorId`) REFERENCES `profesor` (`ProfesorId`);

--
-- Filtros para la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);

--
-- Filtros para la tabla `tutor`
--
ALTER TABLE `tutor`
  ADD CONSTRAINT `tutor_ibfk_1` FOREIGN KEY (`UsuarioId`) REFERENCES `usuarios` (`UsuarioId`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`RolId`) REFERENCES `roles` (`RolId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
