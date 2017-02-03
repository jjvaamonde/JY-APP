--
-- Base de datos: `jy-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `arr_Imagen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Categoria` int(11) NOT NULL,
  `Clasificacion` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `DireccionVendedor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Nombre_Vendedor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cantidad_Articulo` int(11) NOT NULL DEFAULT '0',
  `Calificacion_Vendedor` int(11) NOT NULL DEFAULT '0',
  `Fecha_Publicacion` date NOT NULL,
  `Fecha_Caducidad` bigint(20) NOT NULL,
  `anuncioID` int(11) NOT NULL
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
  `Nombre_Categ` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Cate` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `arr_SubCategoria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `categoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuota_credito`
--

CREATE TABLE `cuota_credito` (
  `Cod_Pago` int(11) NOT NULL DEFAULT '0',
  `Monto_Cuota` double NOT NULL DEFAULT '0',
  `Fecha_Cuota` datetime NOT NULL,
  `cuota_CreditoID` int(11) NOT NULL
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
-- Estructura de tabla para la tabla `pago_usuario`
--

CREATE TABLE `pago_usuario` (
  `Tipo_Pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Monto_Total` double NOT NULL DEFAULT '0',
  `Monto_Cancelado` double NOT NULL DEFAULT '0',
  `Cod_Usuario` int(11) NOT NULL,
  `Nombre_ServicioComprado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_Pago` date NOT NULL,
  `arr_Cuotas` int(11) NOT NULL,
  `Periodo_Cobro` int(11) NOT NULL,
  `pago_UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquete_premium`
--

CREATE TABLE `paquete_premium` (
  `Nombre_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Precio_PP` double NOT NULL,
  `Duracion_PP` int(11) NOT NULL,
  `Tipo_PP` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `paquete_PremiumID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio`
--

CREATE TABLE `premio` (
  `Nombre_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Tipo_Premio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Duracion` int(11) NOT NULL,
  `Valor_Premio` int(11) NOT NULL,
  `premioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `Titulo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cod_Usuario` int(11) NOT NULL,
  `Fecha_Inicial` date NOT NULL,
  `Fecha_Final` date NOT NULL,
  `Imagen_Publicitaria` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Duracion` time NOT NULL,
  `Enlace` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `publicidadID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamos`
--

CREATE TABLE `reclamos` (
  `Fecha` datetime NOT NULL,
  `Motivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Estatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reclamosID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

CREATE TABLE `sub_categoria` (
  `Nombre_SubCat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion_Subcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cod_Categoria` int(11) NOT NULL,
  `sub_CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_anuncio`
--

CREATE TABLE `tipo_anuncio` (
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
  `tipo_AnuncioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_pubicidad`
--

CREATE TABLE `tipo_pubicidad` (
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
  `tipo_PubicidadID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `Nivel_Acceso` int(11) NOT NULL,
  `Prioridad` int(11) NOT NULL,
  `Descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Numero_Publicaciones` int(11) NOT NULL,
  `Nombre_Rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'jose', 'SqdA7cF09Ii9MLg8Pj6iI4yly1X3mAgu', '$2y$13$qn5R0Qo360JycpFUJWv/euHUJa1Z/S0pgUrlTiesRSZK90.9aTb5a', NULL, 'jjvg_12@hotmail.com', 10, 1485826575, 1485826575);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo_Electronico` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Rif_CI` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Login` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Clave` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET ascii NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `password_hash` varchar(255) CHARACTER SET ascii NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET ascii DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `Avatar` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Calificacion` int(11) NOT NULL,
  `Puntos` int(11) NOT NULL,
  `Rol` int(11) NOT NULL,
  `Fecha_UltimaConexion` date NOT NULL,
  `Cod_Referido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `usuarioID` int(11) NOT NULL,
  `paquete_PremiumID` int(11) DEFAULT NULL,
  `premioID` int(11) DEFAULT NULL,
  `publicidadID` int(11) DEFAULT NULL,
  `reclamosID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas_usuario`
--

CREATE TABLE `ventas_usuario` (
  `Cod_Vendedor` int(11) NOT NULL,
  `Fecha_Venta` date NOT NULL,
  `Monto` double NOT NULL,
  `Cod_Comprador` int(11) NOT NULL,
  `Tipo_Pago` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ventas_UsuarioID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`anuncioID`);

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
  ADD PRIMARY KEY (`categoriaID`);

--
-- Indices de la tabla `cuota_credito`
--
ALTER TABLE `cuota_credito`
  ADD PRIMARY KEY (`cuota_CreditoID`);

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
-- Indices de la tabla `pago_usuario`
--
ALTER TABLE `pago_usuario`
  ADD PRIMARY KEY (`pago_UsuarioID`);

--
-- Indices de la tabla `paquete_premium`
--
ALTER TABLE `paquete_premium`
  ADD PRIMARY KEY (`paquete_PremiumID`);

--
-- Indices de la tabla `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`premioID`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`publicidadID`);

--
-- Indices de la tabla `reclamos`
--
ALTER TABLE `reclamos`
  ADD PRIMARY KEY (`reclamosID`);

--
-- Indices de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD PRIMARY KEY (`sub_CategoriaID`),
  ADD UNIQUE KEY `Cod_Categoria` (`Cod_Categoria`);

--
-- Indices de la tabla `tipo_anuncio`
--
ALTER TABLE `tipo_anuncio`
  ADD PRIMARY KEY (`tipo_AnuncioID`);

--
-- Indices de la tabla `tipo_pubicidad`
--
ALTER TABLE `tipo_pubicidad`
  ADD PRIMARY KEY (`tipo_PubicidadID`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`tipo_UsuarioID`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioID`),
  ADD KEY `paquete_PremiumID` (`paquete_PremiumID`),
  ADD KEY `premioID` (`premioID`),
  ADD KEY `publicidadID` (`publicidadID`),
  ADD KEY `reclamosID` (`reclamosID`);

--
-- Indices de la tabla `ventas_usuario`
--
ALTER TABLE `ventas_usuario`
  ADD PRIMARY KEY (`ventas_UsuarioID`),
  ADD UNIQUE KEY `Cod_Vendedor` (`Cod_Vendedor`),
  ADD UNIQUE KEY `Cod_Comprador` (`Cod_Comprador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

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
-- Filtros para la tabla `joinusuariototipo_usuario`
--
ALTER TABLE `joinusuariototipo_usuario`
  ADD CONSTRAINT `Tipo_Usuario` FOREIGN KEY (`tipo_UsuarioID`) REFERENCES `tipo_usuario` (`tipo_UsuarioID`);

--
-- Filtros para la tabla `joinventas_usuariotousuario`
--
ALTER TABLE `joinventas_usuariotousuario`
  ADD CONSTRAINT `Usuario` FOREIGN KEY (`usuarioID`) REFERENCES `usuario` (`usuarioID`),
  ADD CONSTRAINT `Ventas_Usuario` FOREIGN KEY (`ventas_UsuarioID`) REFERENCES `ventas_usuario` (`ventas_UsuarioID`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD CONSTRAINT `ffk_categoriaID` FOREIGN KEY (`Cod_Categoria`) REFERENCES `categoria` (`categoriaID`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_Usuario_Paquete_Premium` FOREIGN KEY (`paquete_PremiumID`) REFERENCES `paquete_premium` (`paquete_PremiumID`),
  ADD CONSTRAINT `FK_Usuario_Premio` FOREIGN KEY (`premioID`) REFERENCES `premio` (`premioID`),
  ADD CONSTRAINT `FK_Usuario_Publicidad` FOREIGN KEY (`publicidadID`) REFERENCES `publicidad` (`publicidadID`),
  ADD CONSTRAINT `FK_Usuario_Reclamos` FOREIGN KEY (`reclamosID`) REFERENCES `reclamos` (`reclamosID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
