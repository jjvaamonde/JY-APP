-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-02-2017 a las 18:18:07
-- Versión del servidor: 5.7.14
-- Versión de PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jy-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `anuncioID` int(11) NOT NULL,
  `Vendedor` int(11) NOT NULL,
  `Sub_Categoria` int(100) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Clasificacion` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `DireccionVendedor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Cantidad_Articulo` int(11) NOT NULL DEFAULT '0',
  `Calificacion_Vendedor` int(11) NOT NULL DEFAULT '0',
  `Fecha_Publicacion` date NOT NULL,
  `Fecha_Caducidad` bigint(20) NOT NULL,
  `CantImagen` int(50) NOT NULL,
  `status_anuncio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `usuarioid` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoriaID` int(11) NOT NULL,
  `Nombre_Categ` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Cate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cantidad_SubCategoria` int(50) NOT NULL,
  `status_cate` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_credito`
--

CREATE TABLE `cuota_credito` (
  `cuota_CreditoID` int(11) NOT NULL,
  `Cod_Pago` int(11) NOT NULL DEFAULT '0',
  `Monto_Cuota` double NOT NULL DEFAULT '0',
  `Fecha_Cuota` date NOT NULL,
  `status_cuota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinanunciototipo_anuncio`
--

CREATE TABLE `joinanunciototipo_anuncio` (
  `tipo_AnuncioID` int(11) DEFAULT NULL,
  `anuncioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinanunciotousuario`
--

CREATE TABLE `joinanunciotousuario` (
  `usuarioID` int(11) DEFAULT NULL,
  `anuncioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joincuota_creditotopago_usuario`
--

CREATE TABLE `joincuota_creditotopago_usuario` (
  `pago_UsuarioID` int(11) DEFAULT NULL,
  `cuota_CreditoID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinpago_usuariotousuario`
--

CREATE TABLE `joinpago_usuariotousuario` (
  `usuarioID` int(11) DEFAULT NULL,
  `pago_UsuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinpublicidadtotipo_pubicidad`
--

CREATE TABLE `joinpublicidadtotipo_pubicidad` (
  `tipo_PubicidadID` int(11) DEFAULT NULL,
  `publicidadID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinsub_categoriatoanuncio`
--

CREATE TABLE `joinsub_categoriatoanuncio` (
  `anuncioID` int(11) DEFAULT NULL,
  `sub_CategoriaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinsub_categoriatocategoria`
--

CREATE TABLE `joinsub_categoriatocategoria` (
  `categoriaID` int(11) DEFAULT NULL,
  `sub_CategoriaID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jointipo_anunciotopaquete_premium`
--

CREATE TABLE `jointipo_anunciotopaquete_premium` (
  `paquete_PremiumID` int(11) DEFAULT NULL,
  `tipo_AnuncioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinusuariototipo_usuario`
--

CREATE TABLE `joinusuariototipo_usuario` (
  `tipo_UsuarioID` int(11) DEFAULT NULL,
  `usuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joinventas_usuariotousuario`
--

CREATE TABLE `joinventas_usuariotousuario` (
  `usuarioID` int(11) DEFAULT NULL,
  `ventas_UsuarioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1484881217),
('m140506_102106_rbac_init', 1484881528),
('m140602_111327_create_menu_table', 1484881232),
('m160312_050000_create_user', 1484881232);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `operacionID` int(11) NOT NULL,
  `nombre_op` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `operacion`
--

INSERT INTO `operacion` (`operacionID`, `nombre_op`) VALUES
(1, 'site-about');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_usuario`
--

CREATE TABLE `pago_usuario` (
  `pago_UsuarioID` int(11) NOT NULL,
  `UsuarioID` int(100) NOT NULL,
  `Cuotas` int(100) NOT NULL,
  `Tipo_Pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Monto_Total` double NOT NULL DEFAULT '0',
  `Monto_Cancelado` double NOT NULL DEFAULT '0',
  `Nombre_ServicioComprado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `Periodo_Cobro` int(11) NOT NULL,
  `status_p_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_premium`
--

CREATE TABLE `paquete_premium` (
  `paquete_PremiumID` int(11) NOT NULL,
  `Nombre_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_PP` double NOT NULL,
  `Duracion_PP` int(11) NOT NULL,
  `Tipo_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(2) NOT NULL DEFAULT '1',
  `statusPP` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE `premio` (
  `premioID` int(11) NOT NULL,
  `Nombre_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Valor_Premio` int(11) NOT NULL,
  `status_pre` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `premio`
--

INSERT INTO `premio` (`premioID`, `Nombre_Premio`, `Descripcion_Premio`, `Tipo_Premio`, `Duracion`, `Valor_Premio`, `status_pre`) VALUES
(1, 'Vendedor de oro', 'premio vendedor con mas ventas concretadas', 'Premio por desempeño', 30, 20000, 1),
(2, 'Premio de oro', 'premio por ser el vendedor con mas visitas', 'Premio por desempeño', 15, 20000, 1),
(3, 'Premio 2', 'ventas considerablemente buenas', 'premio por ventas', 10, 10000, 1),
(4, 'premio 3', 'premio medio', 'premio por ventas', 5, 10000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `publicidadID` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Inicial` date NOT NULL,
  `Fecha_Final` date NOT NULL,
  `Duracion` time NOT NULL,
  `Enlace` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Imagen_Publicitaria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_publi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `reclamosID` int(11) NOT NULL,
  `Usuario` int(100) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Motivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha` datetime NOT NULL,
  `Estado_reclamo` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'En Proceso',
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `rol_ID` int(11) NOT NULL,
  `nombre_rol` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`rol_ID`, `nombre_rol`) VALUES
(1, 'Alto ejecutivo'),
(2, 'Administrador'),
(3, 'Vendedor'),
(4, 'VendedorPremium'),
(5, 'Comprador'),
(6, 'Invitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_operacion`
--

CREATE TABLE `rol_operacion` (
  `rol_id` int(11) NOT NULL,
  `operacion_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `rol_operacion`
--

INSERT INTO `rol_operacion` (`rol_id`, `operacion_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

CREATE TABLE `sub_categoria` (
  `sub_CategoriaID` int(11) NOT NULL,
  `Cod_Categoria` int(11) NOT NULL,
  `Nombre_SubCat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Subcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_sub` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_anuncio`
--

CREATE TABLE `tipo_anuncio` (
  `tipo_AnuncioID` int(11) NOT NULL,
  `Nombre_TipoAnuncio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_TipoAnun` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cantidad_Imagenes` int(11) NOT NULL,
  `Ancho_TipoAnun` int(11) NOT NULL,
  `Alto_TipoAnun` int(11) NOT NULL,
  `Posicion_video` geometry NOT NULL,
  `Posicion_Info` geometry NOT NULL,
  `Posiscion_Imagen` geometry NOT NULL,
  `Posicion_Descripcion` geometry NOT NULL,
  `Posicion_Titulo` geometry NOT NULL,
  `status_tA` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pubicidad`
--

CREATE TABLE `tipo_pubicidad` (
  `tipo_PubicidadID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_TPubli` double NOT NULL,
  `Duracion_paraMostrar` time NOT NULL,
  `Caducidad` int(11) NOT NULL,
  `Lugar_Colocacion` geometry NOT NULL,
  `Tamano` geometry NOT NULL,
  `Colocacion_img` geometry NOT NULL,
  `Colocacion_Titulo` geometry NOT NULL,
  `Colocacion_enlace` geometry NOT NULL,
  `status_tP` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `tipo_UsuarioID` int(11) NOT NULL,
  `Nivel_Acceso` int(11) NOT NULL,
  `Prioridad` int(11) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_Publicaciones` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `usuarioID` int(11) NOT NULL,
  `Rif_CI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo_Electronico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET ascii NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `password_hash` varchar(255) CHARACTER SET ascii NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET ascii DEFAULT NULL,
  `Avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  `rol_id` int(11) NOT NULL,
  `Fecha_UltimaConexion` date NOT NULL,
  `Cod_Referido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `paquete_PremiumID` int(11) DEFAULT NULL,
  `premioID` int(11) DEFAULT NULL,
  `publicidadID` int(11) DEFAULT NULL,
  `reclamosID` int(11) DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_usuario`
--

CREATE TABLE `ventas_usuario` (
  `ventas_UsuarioID` int(100) NOT NULL,
  `Vendedor` int(11) NOT NULL,
  `Cod_Comprador` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  `Monto` double NOT NULL,
  `Tipo_Pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status_venta` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`anuncioID`),
  ADD UNIQUE KEY `IDVendedor` (`Vendedor`),
  ADD UNIQUE KEY `Sub_Categoria` (`Sub_Categoria`),
  ADD KEY `anuncioID` (`anuncioID`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`usuarioid`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoriaID`),
  ADD KEY `categoriaID` (`categoriaID`);

--
-- Indices de la tabla `cuota_credito`
--
ALTER TABLE `cuota_credito`
  ADD PRIMARY KEY (`cuota_CreditoID`),
  ADD UNIQUE KEY `Cod_Pago` (`Cod_Pago`),
  ADD KEY `cuota_CreditoID` (`cuota_CreditoID`);

--
-- Indices de la tabla `joinanunciototipo_anuncio`
--
ALTER TABLE `joinanunciototipo_anuncio`
  ADD KEY `tipo_AnuncioID` (`tipo_AnuncioID`),
  ADD KEY `anuncioID` (`anuncioID`);

--
-- Indices de la tabla `joinanunciotousuario`
--
ALTER TABLE `joinanunciotousuario`
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `anuncioID` (`anuncioID`);

--
-- Indices de la tabla `joincuota_creditotopago_usuario`
--
ALTER TABLE `joincuota_creditotopago_usuario`
  ADD KEY `pago_UsuarioID` (`pago_UsuarioID`),
  ADD KEY `cuota_CreditoID` (`cuota_CreditoID`);

--
-- Indices de la tabla `joinpago_usuariotousuario`
--
ALTER TABLE `joinpago_usuariotousuario`
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `pago_UsuarioID` (`pago_UsuarioID`);

--
-- Indices de la tabla `joinpublicidadtotipo_pubicidad`
--
ALTER TABLE `joinpublicidadtotipo_pubicidad`
  ADD KEY `tipo_PubicidadID` (`tipo_PubicidadID`),
  ADD KEY `publicidadID` (`publicidadID`);

--
-- Indices de la tabla `joinsub_categoriatoanuncio`
--
ALTER TABLE `joinsub_categoriatoanuncio`
  ADD KEY `anuncioID` (`anuncioID`),
  ADD KEY `sub_CategoriaID` (`sub_CategoriaID`);

--
-- Indices de la tabla `joinsub_categoriatocategoria`
--
ALTER TABLE `joinsub_categoriatocategoria`
  ADD KEY `categoriaID` (`categoriaID`),
  ADD KEY `sub_CategoriaID` (`sub_CategoriaID`);

--
-- Indices de la tabla `jointipo_anunciotopaquete_premium`
--
ALTER TABLE `jointipo_anunciotopaquete_premium`
  ADD KEY `paquete_PremiumID` (`paquete_PremiumID`),
  ADD KEY `tipo_AnuncioID` (`tipo_AnuncioID`);

--
-- Indices de la tabla `joinusuariototipo_usuario`
--
ALTER TABLE `joinusuariototipo_usuario`
  ADD KEY `tipo_UsuarioID` (`tipo_UsuarioID`),
  ADD KEY `usuarioID` (`usuarioID`);

--
-- Indices de la tabla `joinventas_usuariotousuario`
--
ALTER TABLE `joinventas_usuariotousuario`
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `ventas_UsuarioID` (`ventas_UsuarioID`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `operacion`
--
ALTER TABLE `operacion`
  ADD PRIMARY KEY (`operacionID`);

--
-- Indices de la tabla `pago_usuario`
--
ALTER TABLE `pago_usuario`
  ADD PRIMARY KEY (`pago_UsuarioID`),
  ADD UNIQUE KEY `UsuarioID` (`UsuarioID`),
  ADD KEY `pago_UsuarioID` (`pago_UsuarioID`);

--
-- Indices de la tabla `paquete_premium`
--
ALTER TABLE `paquete_premium`
  ADD PRIMARY KEY (`paquete_PremiumID`),
  ADD KEY `paquete_PremiumID` (`paquete_PremiumID`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`premioID`),
  ADD KEY `premioID` (`premioID`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`publicidadID`),
  ADD UNIQUE KEY `Cod_Usuario` (`fk_usuario`),
  ADD KEY `publicidadID` (`publicidadID`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`reclamosID`),
  ADD UNIQUE KEY `Usuario` (`Usuario`),
  ADD KEY `reclamosID` (`reclamosID`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`rol_ID`);

--
-- Indices de la tabla `rol_operacion`
--
ALTER TABLE `rol_operacion`
  ADD PRIMARY KEY (`rol_id`,`operacion_id`);

--
-- Indices de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD PRIMARY KEY (`sub_CategoriaID`),
  ADD UNIQUE KEY `Cod_Categoria` (`Cod_Categoria`),
  ADD KEY `sub_CategoriaID` (`sub_CategoriaID`);

--
-- Indices de la tabla `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  ADD PRIMARY KEY (`tipo_AnuncioID`),
  ADD KEY `tipo_AnuncioID` (`tipo_AnuncioID`);

--
-- Indices de la tabla `tipo_pubicidad`
--
ALTER TABLE `tipo_pubicidad`
  ADD PRIMARY KEY (`tipo_PubicidadID`),
  ADD KEY `tipo_PubicidadID` (`tipo_PubicidadID`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipo_UsuarioID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usuarioID`),
  ADD UNIQUE KEY `Rif_CI` (`Rif_CI`),
  ADD UNIQUE KEY `Login` (`Login`),
  ADD UNIQUE KEY `Clave` (`Clave`),
  ADD UNIQUE KEY `paquete_PremiumID_2` (`paquete_PremiumID`),
  ADD UNIQUE KEY `premioID_2` (`premioID`),
  ADD UNIQUE KEY `publicidadID_2` (`publicidadID`),
  ADD UNIQUE KEY `reclamosID_2` (`reclamosID`),
  ADD KEY `paquete_PremiumID` (`paquete_PremiumID`),
  ADD KEY `premioID` (`premioID`),
  ADD KEY `publicidadID` (`publicidadID`),
  ADD KEY `reclamosID` (`reclamosID`),
  ADD KEY `usuarioID` (`usuarioID`),
  ADD KEY `usuarioID_2` (`usuarioID`);

--
-- Indices de la tabla `ventas_usuario`
--
ALTER TABLE `ventas_usuario`
  ADD PRIMARY KEY (`ventas_UsuarioID`),
  ADD UNIQUE KEY `Cod_Vendedor` (`Vendedor`),
  ADD UNIQUE KEY `Cod_Comprador` (`Cod_Comprador`),
  ADD KEY `ventas_UsuarioID` (`ventas_UsuarioID`),
  ADD KEY `ventas_UsuarioID_2` (`ventas_UsuarioID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `anuncioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoriaID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cuota_credito`
--
ALTER TABLE `cuota_credito`
  MODIFY `cuota_CreditoID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `operacion`
--
ALTER TABLE `operacion`
  MODIFY `operacionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `pago_usuario`
--
ALTER TABLE `pago_usuario`
  MODIFY `pago_UsuarioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `paquete_premium`
--
ALTER TABLE `paquete_premium`
  MODIFY `paquete_PremiumID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `premio`
--
ALTER TABLE `premio`
  MODIFY `premioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `publicidadID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  MODIFY `reclamosID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `rol_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  MODIFY `sub_CategoriaID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  MODIFY `tipo_AnuncioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tipo_pubicidad`
--
ALTER TABLE `tipo_pubicidad`
  MODIFY `tipo_PubicidadID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `usuarioID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas_usuario`
--
ALTER TABLE `ventas_usuario`
  MODIFY `ventas_UsuarioID` int(100) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD CONSTRAINT `fk_sub_Categoria` FOREIGN KEY (`Sub_Categoria`) REFERENCES `sub_categoria` (`sub_CategoriaID`),
  ADD CONSTRAINT `fk_vendedor` FOREIGN KEY (`Vendedor`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cuota_credito`
--
ALTER TABLE `cuota_credito`
  ADD CONSTRAINT `fk_pago` FOREIGN KEY (`Cod_Pago`) REFERENCES `pago_usuario` (`pago_UsuarioID`);

--
-- Filtros para la tabla `joinanunciototipo_anuncio`
--
ALTER TABLE `joinanunciototipo_anuncio`
  ADD CONSTRAINT `fk_anuncio` FOREIGN KEY (`anuncioID`) REFERENCES `anuncio` (`anuncioID`),
  ADD CONSTRAINT `fk_tipoanuncio` FOREIGN KEY (`tipo_AnuncioID`) REFERENCES `tipo_anuncio` (`tipo_AnuncioID`);

--
-- Filtros para la tabla `joinanunciotousuario`
--
ALTER TABLE `joinanunciotousuario`
  ADD CONSTRAINT `fk_anuncioid` FOREIGN KEY (`anuncioID`) REFERENCES `anuncio` (`anuncioID`),
  ADD CONSTRAINT `fk_usuarioid` FOREIGN KEY (`usuarioID`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `joincuota_creditotopago_usuario`
--
ALTER TABLE `joincuota_creditotopago_usuario`
  ADD CONSTRAINT `fk_cuota` FOREIGN KEY (`cuota_CreditoID`) REFERENCES `cuota_credito` (`cuota_CreditoID`),
  ADD CONSTRAINT `fk_pagousuario` FOREIGN KEY (`pago_UsuarioID`) REFERENCES `pago_usuario` (`pago_UsuarioID`);

--
-- Filtros para la tabla `joinpago_usuariotousuario`
--
ALTER TABLE `joinpago_usuariotousuario`
  ADD CONSTRAINT `fk_pagousuarioid` FOREIGN KEY (`pago_UsuarioID`) REFERENCES `pago_usuario` (`pago_UsuarioID`),
  ADD CONSTRAINT `usuarioid` FOREIGN KEY (`usuarioID`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `joinpublicidadtotipo_pubicidad`
--
ALTER TABLE `joinpublicidadtotipo_pubicidad`
  ADD CONSTRAINT `publicidadid` FOREIGN KEY (`publicidadID`) REFERENCES `publicidad` (`publicidadID`),
  ADD CONSTRAINT `tipo_publicidadid` FOREIGN KEY (`tipo_PubicidadID`) REFERENCES `tipo_pubicidad` (`tipo_PubicidadID`);

--
-- Filtros para la tabla `joinsub_categoriatoanuncio`
--
ALTER TABLE `joinsub_categoriatoanuncio`
  ADD CONSTRAINT `anuncioid` FOREIGN KEY (`anuncioID`) REFERENCES `anuncio` (`anuncioID`),
  ADD CONSTRAINT `sub_categoriaid` FOREIGN KEY (`sub_CategoriaID`) REFERENCES `sub_categoria` (`sub_CategoriaID`);

--
-- Filtros para la tabla `joinsub_categoriatocategoria`
--
ALTER TABLE `joinsub_categoriatocategoria`
  ADD CONSTRAINT `categoriaid` FOREIGN KEY (`categoriaID`) REFERENCES `categoria` (`categoriaID`),
  ADD CONSTRAINT `fk_subcategoriaid` FOREIGN KEY (`sub_CategoriaID`) REFERENCES `sub_categoria` (`sub_CategoriaID`);

--
-- Filtros para la tabla `jointipo_anunciotopaquete_premium`
--
ALTER TABLE `jointipo_anunciotopaquete_premium`
  ADD CONSTRAINT `paquete_premiunid` FOREIGN KEY (`paquete_PremiumID`) REFERENCES `paquete_premium` (`paquete_PremiumID`),
  ADD CONSTRAINT `tipo_anuncioid` FOREIGN KEY (`tipo_AnuncioID`) REFERENCES `tipo_anuncio` (`tipo_AnuncioID`);

--
-- Filtros para la tabla `joinusuariototipo_usuario`
--
ALTER TABLE `joinusuariototipo_usuario`
  ADD CONSTRAINT `Tipo_Usuario` FOREIGN KEY (`tipo_UsuarioID`) REFERENCES `tipo_usuario` (`tipo_UsuarioID`),
  ADD CONSTRAINT `fkusuario` FOREIGN KEY (`usuarioID`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `joinventas_usuariotousuario`
--
ALTER TABLE `joinventas_usuariotousuario`
  ADD CONSTRAINT `fk_ventas_usuario` FOREIGN KEY (`ventas_UsuarioID`) REFERENCES `ventas_usuario` (`ventas_UsuarioID`),
  ADD CONSTRAINT `usuarios` FOREIGN KEY (`usuarioID`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago_usuario`
--
ALTER TABLE `pago_usuario`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`UsuarioID`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD CONSTRAINT `fk_usuario_dueño` FOREIGN KEY (`fk_usuario`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`Usuario`) REFERENCES `user` (`usuarioID`);

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `paquete` FOREIGN KEY (`paquete_PremiumID`) REFERENCES `paquete_premium` (`paquete_PremiumID`),
  ADD CONSTRAINT `premio` FOREIGN KEY (`premioID`) REFERENCES `premio` (`premioID`),
  ADD CONSTRAINT `publicidad` FOREIGN KEY (`publicidadID`) REFERENCES `publicidad` (`publicidadID`),
  ADD CONSTRAINT `reclamo` FOREIGN KEY (`reclamosID`) REFERENCES `reclamos` (`reclamosID`);

--
-- Filtros para la tabla `ventas_usuario`
--
ALTER TABLE `ventas_usuario`
  ADD CONSTRAINT `fk_comprador` FOREIGN KEY (`Cod_Comprador`) REFERENCES `user` (`usuarioID`),
  ADD CONSTRAINT `vendedor` FOREIGN KEY (`Vendedor`) REFERENCES `user` (`usuarioID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
