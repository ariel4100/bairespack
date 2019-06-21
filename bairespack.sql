-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2019 a las 21:43:55
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bairespack`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bags`
--

CREATE TABLE `bags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `contents`
--

INSERT INTO `contents` (`id`, `section`, `type`, `text`, `order`, `created_at`, `updated_at`) VALUES
(1, 'home', 'texto', '{\"image\": \"uploads/home/img/BXvUstXsIicezkNXagT7aKgzNib8ej7xvteBCELg.png\", \"footer\": null, \"header\": null, \"favicon\": null, \"text_en\": null, \"text_es\": \"<h3><span style=\\\"color:#000000\\\">Proyectos adecuados a los</span></h3>\\r\\n\\r\\n<h3><span style=\\\"color:#000000\\\">requerimientos de nuestros clientes</span></h3>\", \"title_en\": null, \"title_es\": \"Máxima calidad, garantía y confiabilidad\"}', NULL, NULL, NULL),
(2, 'nosotros', 'texto', '{\"ficha\": {}, \"image\": null, \"footer\": null, \"header\": null, \"favicon\": null, \"text_en\": null, \"text_es\": \"<p>Baires Pack es una empresa dedicada a la fabricaci&oacute;n de equipos para embalaje en pel&iacute;culas termocontra&iacute;bles. La empresa cuenta con la distribuci&oacute;n de productos de la firma Sealed Air Argentina S.A. para la comercializaci&oacute;n de su material Cryovac. Contamos con un gran porcentaje del mercado de media producci&oacute;n en Argentina, manteniendo una imagen institucional de m&aacute;xima seriedad, garant&iacute;a y confiabilidad. Asimismo, todo cliente cuenta con un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.</p>\", \"title_en\": null, \"title_es\": \"NUESTRA HISTORIA\", \"mision_en\": null, \"mision_es\": \"misión\", \"valores_en\": null, \"valores_es\": \"valores\", \"misiontext_en\": null, \"misiontext_es\": \"<p>Integrada por j&oacute;venes Ingenieros y t&eacute;cnicos que est&aacute;n al tanto de las necesidades en el heterog&eacute;neo mundo del packaging, Baires Pack trabaja constantemente para evolucionar a la misma velocidad que el mundo de hoy d&iacute;a.</p>\", \"valorestext_en\": null, \"valorestext_es\": \"<p>Baires Pack es consciente de que cada empresa tiene distintas necesidades. De este modo, resulta indispensable el di&aacute;logo y la participaci&oacute;n del cliente en el desarrollo de sus requerimientos. Esta caracter&iacute;stica se ha convertido en nuestro desaf&iacute;o personal.</p>\"}', NULL, NULL, NULL),
(3, 'logos', 'texto', '{\"image\": null, \"footer\": \"uploads/logos/img/7lGh6BqTH5aSEVxXlCoUZut6jaNh20rSQp4wpAZY.png\", \"header\": \"uploads/logos/img/sEU2dFvhGrTBH7Lq2VUZtlCT3RMKMyy3ezDtVFgY.png\", \"favicon\": \"uploads/logos/img/Yne8cbOMHSv3XNPbTzH5qQIy3NeGkztMYcCcNI4g.png\"}', NULL, NULL, NULL),
(4, 'venta', 'texto', '{\"image\": null, \"footer\": null, \"header\": null, \"favicon\": null, \"text_en\": null, \"text_es\": \"<p>Ofrecemos a nuestros clientes un servicio de mantenimiento y asistencia t&eacute;cnica constante provisto por nuestra red de distribuidores. Nuestro departamento de asistencia t&eacute;cnica est&aacute; integrado por un equipo humano especializado para brindar el servicio que una empresa moderna necesita, con rapidez y eficiencia. Todos los que integramos Baires Pack estamos totalmente identificados con el concepto de calidad y servicio, y a eso le agregamos el respeto que sentimos hacia nuestros clientes.</p>\", \"title_en\": null, \"title_es\": \"POST-VENTA\", \"subtext_en\": null, \"subtext_es\": \"<h2><span style=\\\"color:#ffb800\\\">Servicio de asistencia t&eacute;cnica y</span></h2>\\r\\n\\r\\n<h2><span style=\\\"color:#ffb800\\\">garant&iacute;a de nuestros productos</span></h2>\"}', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `families`
--

INSERT INTO `families` (`id`, `text`, `image`, `order`, `general_id`, `created_at`, `updated_at`) VALUES
(1, '{\"order\":\"aa\",\"title_es\":\"Solidos\",\"title_en\":\"Solid\",\"image\":\"uploads\\/familia\\/ZdD3Yu0ZTEJuzkdOEWrreqWJ0MBdrSycqlewRutA.png\"}', NULL, 'aa', 2, '2019-06-21 15:02:52', '2019-06-21 15:33:34'),
(2, '{\"general_id\":\"1\",\"order\":\"aa\",\"title_es\":\"Verticales\",\"title_en\":null,\"type_es\":\"Bolsa\",\"type_en\":null,\"image\":\"uploads\\/familia\\/baJo4qgjZgjWGpV8QvnXkcxyfyEy44AmqU0Xebf9.png\"}', NULL, 'aa', 1, '2019-06-21 16:29:39', '2019-06-21 16:29:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padre_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `generals`
--

INSERT INTO `generals` (`id`, `text`, `order`, `padre_id`, `created_at`, `updated_at`) VALUES
(1, '{\"title_es\":\"Envasadoras\",\"title_en\":\"Envasadoras_en\"}', 'aa', NULL, NULL, NULL),
(2, '{\"title_es\":\"Dosificadoras\",\"title_en\":\"Dosificadoras_en\"}', 'bb', NULL, NULL, NULL),
(3, '{\"title_es\":\"Accesorios\",\"title_en\":\"Accesorios_en\"}', 'cc', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_06_07_154320_create_contents_table', 1),
(4, '2019_06_10_190152_create_sliders_table', 1),
(5, '2019_06_13_121456_create_generals_table', 1),
(6, '2019_06_13_122231_create_families_table', 1),
(7, '2019_06_13_122419_create_subfamilies_table', 1),
(8, '2019_06_13_122635_create_products_table', 1),
(9, '2019_06_19_112253_create_bags_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subfamily_id` bigint(20) UNSIGNED DEFAULT NULL,
  `family_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `text`, `image`, `order`, `subfamily_id`, `family_id`, `created_at`, `updated_at`) VALUES
(1, '{\"_method\":\"PUT\",\"title_es\":\"14 cabezas\",\"title_en\":null,\"text_es\":\"<p>Cantidad de Cabezales: 14 unidades de pesado.\\u0003 Construido totalmente en ACERO INOXIDABLE. Superficies de contacto pulido espejo. Sistema de doble apertura y estructura desarmable sin herramientas para f&aacute;cil limpieza.\\u0003Manejo mediante Pantalla T&aacute;ctil de cristal l&iacute;quido (LCD) para controlar las funciones b&aacute;sicas del equipo de pesado, diagn&oacute;stico e informaci&oacute;n del estado del mismo y la posibilidad de grabar hasta 99 programas<\\/p>\",\"text_en\":null,\"titlec_es\":null,\"titlec_en\":null,\"caracteristica_es\":null,\"caracteristica_en\":null,\"titlet_es\":null,\"titlet_en\":null,\"tabla_es\":null,\"tabla_en\":null,\"video\":\"0VO9L3zMd3U\"}', NULL, NULL, 1, 1, '2019-06-21 16:54:31', '2019-06-21 19:49:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `section`, `text`, `order`, `created_at`, `updated_at`) VALUES
(1, 'uploads/sliders/F76df3yZ6eEliWjvBIZ3Pul7VYqBVD9Gzt9zNVsr.png', 'home', '{\"text_en\": null, \"text_es\": \"<p><span style=\\\"color:#000000\\\">BAIRES PACK SISTEMAS DE EMBALAJE</span></p>\\r\\n\\r\\n<h2><span style=\\\"color:#000000\\\">Soluciones integrales</span></h2>\\r\\n\\r\\n<h2><span style=\\\"color:#000000\\\">en envasado&nbsp;</span></h2>\"}', 'aa', NULL, NULL),
(2, 'uploads/sliders/wnhlsb8AjtqDjPsmtIC5THJHTVRrZcgvg9XwSY2z.png', 'nosotros', '{\"text_en\": null, \"text_es\": \"<p><span style=\\\"color:#ffffff\\\">SOMOS FABRICANTES</span></p>\\r\\n\\r\\n<h2><span style=\\\"color:#ffffff\\\">Innovaci&oacute;n y tecnolog&iacute;a</span></h2>\\r\\n\\r\\n<h2><span style=\\\"color:#ffffff\\\">de vanguardia</span></h2>\"}', 'aa', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subfamilies`
--

CREATE TABLE `subfamilies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `image` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `general_id` bigint(20) UNSIGNED DEFAULT NULL,
  `family_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subfamilies`
--

INSERT INTO `subfamilies` (`id`, `text`, `image`, `order`, `general_id`, `family_id`, `created_at`, `updated_at`) VALUES
(1, '{\"title_es\":\"Multicabezal  de pesados\",\"title_en\":null,\"image\":\"uploads\\/familia\\/CAcEpinaqyubHg5J3vGV23CZriDToOwKDbVl0ble.png\"}', NULL, 'aa', 2, 1, '2019-06-21 15:51:22', '2019-06-21 15:51:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'pablo', 'pablo', 'pablo@local.test', NULL, '$2y$10$LXC.sMFig5KoPhdMDvPVGO7S0q0FXqQ0eZEivJsUrw9otoULHIEAK', NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bags`
--
ALTER TABLE `bags`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subfamilies`
--
ALTER TABLE `subfamilies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bags`
--
ALTER TABLE `bags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `subfamilies`
--
ALTER TABLE `subfamilies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
