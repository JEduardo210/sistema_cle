-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2023 a las 06:19:33
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_cle`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `matricula` varchar(255) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `calterno` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `id_users`, `matricula`, `carrera`, `calterno`, `telefono`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, '220I0100', 'Ingeniería en Sistemas Computacionales', 'victor@gmail.com', '7821152365', 'Activo', '2023-10-21 04:19:59', '2023-10-21 04:19:59'),
(2, 8, '190i0108', 'Selecciona una opción', 'cesar@gmail.com', '7821152365', 'Selecciona una opción', '2023-10-26 04:49:14', '2023-10-26 09:00:57'),
(3, 9, '190i0101', 'Ingeniería en Gestión Empresarial (Mixto)', 'jesus@gmail.com', '7821152365', 'Activo', '2023-10-26 06:34:26', '2023-10-26 06:34:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`id`, `id_users`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 7, 'Caja2', '2023-10-21 04:26:14', '2023-10-21 04:26:27'),
(2, 10, 'caja2', '2023-10-27 09:09:07', '2023-10-27 09:09:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificacions`
--

CREATE TABLE `calificacions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_grupo` bigint(20) UNSIGNED NOT NULL,
  `cal_fin` varchar(255) DEFAULT NULL,
  `constancias` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `calificacions`
--

INSERT INTO `calificacions` (`id`, `id_users`, `id_grupo`, `cal_fin`, `constancias`, `created_at`, `updated_at`) VALUES
(2, 3, 2, NULL, NULL, '2023-10-23 10:54:10', '2023-10-23 10:54:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_modulo` bigint(20) UNSIGNED NOT NULL,
  `id_docente` bigint(20) UNSIGNED NOT NULL,
  `id_dia` bigint(20) UNSIGNED NOT NULL,
  `id_periodo` bigint(20) UNSIGNED NOT NULL,
  `id_horario` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`id`, `id_modulo`, `id_docente`, `id_dia`, `id_periodo`, `id_horario`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '2023-10-21 04:24:30', '2023-10-21 04:24:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Lunes', NULL, NULL),
(2, 'Martes', NULL, NULL),
(3, 'Miércoles', NULL, NULL),
(4, 'Jueves', NULL, NULL),
(5, 'Viernes', NULL, NULL),
(6, 'Sábado', NULL, NULL),
(7, 'Domingo', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `nivel` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `alterno` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `id_users`, `nivel`, `telefono`, `alterno`, `created_at`, `updated_at`) VALUES
(1, 4, 'C2', '7821152365', 'fernando@gmail.com', '2023-10-21 04:21:58', '2023-10-21 04:21:58'),
(2, 12, 'C2', '78211523651', 'alfonso1@gmail.com', '2023-10-27 09:31:47', '2023-10-27 09:31:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est__externos`
--

CREATE TABLE `est__externos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `est__externos`
--

INSERT INTO `est__externos` (`id`, `id_users`, `telefono`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, '78211523651', 'Activo', '2023-10-21 04:20:35', '2023-10-27 09:16:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_clase` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `id_clase`, `descripcion`, `created_at`, `updated_at`) VALUES
(2, 1, 'A-11', '2023-10-23 10:54:05', '2023-10-23 10:54:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historials`
--

CREATE TABLE `historials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_alumnos` bigint(20) UNSIGNED NOT NULL,
  `id_est_externos` bigint(20) UNSIGNED NOT NULL,
  `id_calificacion` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hora_ini` time NOT NULL,
  `hora_term` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id`, `hora_ini`, `hora_term`, `created_at`, `updated_at`) VALUES
(1, '08:00:00', '10:00:00', '2023-10-21 04:21:25', '2023-10-21 04:21:25'),
(2, '23:53:00', '12:53:00', '2023-10-23 10:53:54', '2023-10-23 10:53:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcions`
--

CREATE TABLE `inscripcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_users` bigint(20) UNSIGNED NOT NULL,
  `id_periodo` bigint(20) UNSIGNED NOT NULL,
  `id_modulo` varchar(255) NOT NULL,
  `consmodulo` varchar(255) DEFAULT NULL,
  `status_modulo` varchar(255) DEFAULT NULL,
  `vaucher` varchar(255) DEFAULT NULL,
  `status_vaucher` varchar(255) DEFAULT NULL,
  `nota` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inscripcions`
--

INSERT INTO `inscripcions` (`id`, `id_users`, `id_periodo`, `id_modulo`, `consmodulo`, `status_modulo`, `vaucher`, `status_vaucher`, `nota`, `created_at`, `updated_at`) VALUES
(13, 3, 1, '2', 'consmodulos/1697915806-CONSTANCIA1.pdf', 'No Aceptado', 'vaucher/1697915806-VAUCHER1.pdf', 'No Aceptado', 'NO SE VE', '2023-10-22 01:16:46', '2023-10-22 07:48:06'),
(14, 2, 1, '4', 'consmodulos/1697939512-CONSTANCIA2.pdf', 'Aceptado', 'vaucher/1697939512-VAUCHER2.pdf', 'Aceptado', 'BIEN', '2023-10-22 07:51:52', '2023-10-26 10:02:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_07_212223_create_historials_table', 1),
(7, '2023_10_07_212223_create_rols_table', 1),
(8, '2023_10_07_212224_create_calificacions_table', 1),
(9, '2023_10_07_212224_create_grupos_table', 1),
(10, '2023_10_07_212224_create_modulos_table', 1),
(11, '2023_10_07_212224_create_va__modulos_table', 1),
(12, '2023_10_07_212225_create_clases_table', 1),
(13, '2023_10_07_212225_create_status_inscripcions_table', 1),
(14, '2023_10_07_212225_create_va__pagos_table', 1),
(15, '2023_10_07_212226_create_est__externos_table', 1),
(16, '2023_10_07_212226_create_horarios_table', 1),
(17, '2023_10_07_212226_create_inscripcion_table', 1),
(18, '2023_10_07_212227_create_caja_table', 1),
(19, '2023_10_07_212227_create_dias_table', 1),
(20, '2023_10_07_212227_create_docentes_table', 1),
(21, '2023_10_07_212227_create_periodos_table', 1),
(22, '2023_10_07_212228_create_alumnos_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Módulo 1', NULL, NULL),
(2, 'Módulo 2', NULL, NULL),
(3, 'Módulo 3', NULL, NULL),
(4, 'Módulo 4', NULL, NULL),
(5, 'Módulo 5', NULL, NULL),
(6, 'Módulo 6', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('190i0101@tecmartinez.edu.mx', '$2y$10$IKlOZz4wv0H.ckBHuSaJIefCt/qSvawfEgEgMapWrZLNREm07ZVXa', '2023-10-26 07:03:24'),
('190i0108@tecmartinez.edu.mx', '$2y$10$ICazgvNz80bJNgZ8RL/iJuI0DA9VIKJZSFO7AEu784Kum96eXy6/2', '2023-10-26 05:00:46'),
('admin@tecmartinez.edu.mx', '$2y$10$2DygbNo1RJMecptTtJiW6OaA9QeP2Suzu3XrJkOoOarPkQX2br.3a', '2023-10-26 06:33:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fech_ini` date NOT NULL,
  `fech_term` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `fech_ini`, `fech_term`, `created_at`, `updated_at`) VALUES
(1, '2023-08-30', '2023-12-15', '2023-10-21 04:21:02', '2023-10-21 04:21:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', NULL, NULL),
(2, 'Estudiante', NULL, NULL),
(3, 'Docente', NULL, NULL),
(4, 'Caja', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `status_inscripcions`
--

CREATE TABLE `status_inscripcions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_va_pago` bigint(20) UNSIGNED NOT NULL,
  `id_va_modulo` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_rol` bigint(20) UNSIGNED NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_rol`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hernández Quevedo Andrea', 'admin@tecmartinez.edu.mx', 1, NULL, '$2y$10$ouFtx/UgL7VSAOwn74bGxOoMmc/vSVhk591/BzkG1I5jJ.uZdYT.y', 'imfm1iSmnTPMIiu2kJPPVPsSQXpgkd9fOMVobmZw9VlnqYaHCbNzrvmeQEGP', NULL, '2023-10-27 10:17:52'),
(2, 'Aguilar Gonzalez Victor de Jesus', '220i0100@tecmartinez.edu.mx', 2, NULL, '$2y$10$5k9oFWEDE8U3cFf5aNtsn.FLMFUF3C3UPbBLRuVcTHCIFVTtlV1JK', NULL, '2023-10-21 04:19:59', '2023-10-21 04:19:59'),
(3, 'Córdova Hernández Claudia Iveth', 'claudia@gmail.com', 2, NULL, '$2y$10$j/X8n1z6SfJQcBdJ9zw/IuuWpIYSk6E8VyTAj3pCc2ksPg2lQ7jrq', NULL, '2023-10-21 04:20:35', '2023-10-27 08:54:00'),
(4, 'Luna Salazar Luis Fernando', 'fernando@tecmartinez.edu.mx', 3, NULL, '$2y$10$jlgLzKAge9kbWUdTniLVK.d.BisoDfLJkdYMGyQKFoxSBu7B6ILMy', NULL, '2023-10-21 04:21:58', '2023-10-21 04:21:58'),
(7, 'Hamin Torres', 'caja@tecmartinez.edu.mx', 4, NULL, '$2y$10$IGAXLN96Hs/aPjvrTxUnKuTo6Rigtqc.Jl/zcw8MPbLWMIq3HG506', 'VDGoDSq1E8Ea7yLM424Op66QAoYDvNq58gqK839OPyrOcYRvDihSv3boXh93', '2023-10-21 04:26:14', '2023-10-27 09:25:12'),
(8, 'Rojas Juárez César Osvaldo', '190i0108@tecmartinez.edu.mx', 2, NULL, '$2y$10$12P5bq3ODsn8tz.oB.sUT.kgBviBE1IM2N8dodppo2c2G/9sMJqwe', NULL, '2023-10-26 04:49:14', '2023-10-27 08:50:58'),
(9, 'Enriquez Avila Jesus Eduardo', '190i0101@tecmartinez.edu.mx', 2, NULL, '$2y$10$JDVpi.g9.QshddtMCHA7tOP.fSUFq.9R38Eh1Wa7mp7OAtK2gkdW6', NULL, '2023-10-26 06:34:26', '2023-10-27 09:18:34'),
(10, 'prueba', 'caja2@tecmartinez.edu.mx', 4, NULL, '$2y$10$YTQ.Bj0ZJXAVTPWL.qojHeC05gsJ35.jq5I0roqULkFqpXFgk9yMG', NULL, '2023-10-27 09:09:07', '2023-10-27 09:09:07'),
(12, 'Sánchez Pérez Alfonso', 'alfonso@tecmartinez.edu.mx', 3, NULL, '$2y$10$nfwoOT3brNbuu7XjgahYKOUp/CSl6pEvlg1XXtc2ahvrrJsOsGNFC', NULL, '2023-10-27 09:31:47', '2023-10-27 09:47:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `va__modulos`
--

CREATE TABLE `va__modulos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_inscripcion` int(11) NOT NULL,
  `consmodulo` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `va__pagos`
--

CREATE TABLE `va__pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_inscripcion` bigint(20) UNSIGNED NOT NULL,
  `vaucher` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nota` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calificacions`
--
ALTER TABLE `calificacions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `est__externos`
--
ALTER TABLE `est__externos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `historials`
--
ALTER TABLE `historials`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `status_inscripcions`
--
ALTER TABLE `status_inscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `va__modulos`
--
ALTER TABLE `va__modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `va__pagos`
--
ALTER TABLE `va__pagos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `calificacions`
--
ALTER TABLE `calificacions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `est__externos`
--
ALTER TABLE `est__externos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `historials`
--
ALTER TABLE `historials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `status_inscripcions`
--
ALTER TABLE `status_inscripcions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `va__modulos`
--
ALTER TABLE `va__modulos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `va__pagos`
--
ALTER TABLE `va__pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
