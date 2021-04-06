/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.5.42 : Database - flexi_web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`flexi_web` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `flexi_web`;

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` int(19) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `cp` int(10) unsigned DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telf1` int(10) unsigned DEFAULT NULL,
  `telf2` int(10) unsigned DEFAULT NULL,
  `n_tarjeta` int(10) unsigned DEFAULT NULL,
  `cvv` int(10) unsigned DEFAULT NULL,
  `caducidad` varchar(45) DEFAULT NULL,
  `alta_desde_dia` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`usuario`,`nombre`,`direccion`,`poblacion`,`provincia`,`cp`,`pais`,`email`,`telf1`,`telf2`,`n_tarjeta`,`cvv`,`caducidad`,`alta_desde_dia`) values 
(1,3,'Francisco Rodriguez Pons','asdasdadadsa','sdasdasda','sdada',13123,'España','email@prueba.com',312311,3131,NULL,NULL,NULL,'2021-01-05 09:29:36');

/*Table structure for table `codigos_ofertas` */

DROP TABLE IF EXISTS `codigos_ofertas`;

CREATE TABLE `codigos_ofertas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel` varchar(45) DEFAULT NULL,
  `oferta` varchar(45) DEFAULT NULL,
  `codigo_general` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `desc_general` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `codigos_ofertas` */

insert  into `codigos_ofertas`(`id`,`hotel`,`oferta`,`codigo_general`,`estado`,`desc_general`) values 
(2,'1','10','ANOTNIO',NULL,NULL),
(3,'1','10','navidad',NULL,NULL),
(4,'','','',NULL,NULL);

/*Table structure for table `conexiones` */

DROP TABLE IF EXISTS `conexiones`;

CREATE TABLE `conexiones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IP` varchar(45) DEFAULT NULL,
  `FECHA` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `conexiones` */

/*Table structure for table `datos_general` */

DROP TABLE IF EXISTS `datos_general`;

CREATE TABLE `datos_general` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desde` datetime DEFAULT NULL,
  `hasta` datetime DEFAULT NULL,
  `precio_fee` int(10) unsigned DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `forma` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `datos_general` */

/*Table structure for table `emails` */

DROP TABLE IF EXISTS `emails`;

CREATE TABLE `emails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `origen` varchar(45) DEFAULT NULL,
  `destino` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `cuerpo` varchar(45) DEFAULT NULL,
  `ficheros` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `emails` */

/*Table structure for table `equipamientos_hotel` */

DROP TABLE IF EXISTS `equipamientos_hotel`;

CREATE TABLE `equipamientos_hotel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel` varchar(500) DEFAULT NULL,
  `equipamiento` varchar(500) DEFAULT NULL,
  `coste_extra` varchar(500) DEFAULT NULL,
  `marca` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

/*Data for the table `equipamientos_hotel` */

insert  into `equipamientos_hotel`(`id`,`hotel`,`equipamiento`,`coste_extra`,`marca`) values 
(77,'3','55',NULL,NULL),
(78,'3','53',NULL,NULL),
(79,'3','44',NULL,NULL),
(80,'3','46',NULL,NULL),
(81,'3','27',NULL,NULL),
(82,'3','45',NULL,NULL),
(83,'3','48',NULL,NULL);

/*Table structure for table `fechas_hoteles` */

DROP TABLE IF EXISTS `fechas_hoteles`;

CREATE TABLE `fechas_hoteles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `tipo_habitacion` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `fechas_hoteles` */

/*Table structure for table `hoteles` */

DROP TABLE IF EXISTS `hoteles`;

CREATE TABLE `hoteles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` int(10) DEFAULT NULL,
  `categoria` varchar(400) DEFAULT NULL,
  `nombre_hotel` varchar(45) DEFAULT NULL,
  `nombre_fiscal` varchar(45) DEFAULT NULL,
  `nif` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `poblacion` varchar(45) DEFAULT NULL,
  `provincia` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `pais` varchar(45) DEFAULT NULL,
  `localicacion1` varchar(45) DEFAULT NULL,
  `localicacion2` varchar(45) DEFAULT NULL,
  `localicacion3` varchar(45) DEFAULT NULL,
  `email1` varchar(45) DEFAULT NULL,
  `quien_email1` varchar(45) DEFAULT NULL,
  `tlf1` varchar(45) DEFAULT NULL,
  `cargo1` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `quien_email2` varchar(45) DEFAULT NULL,
  `tlf2` varchar(45) DEFAULT NULL,
  `cargo2` varchar(45) DEFAULT NULL,
  `email3` varchar(45) DEFAULT NULL,
  `quien_email3` varchar(45) DEFAULT NULL,
  `tlf3` varchar(45) DEFAULT NULL,
  `cargo3` varchar(45) DEFAULT NULL,
  `tipo_hotel1` varchar(45) DEFAULT NULL,
  `tipo_prioridad1` int(11) DEFAULT NULL,
  `tipo_hotel2` varchar(45) DEFAULT NULL,
  `tipo_prioridad2` int(11) DEFAULT NULL,
  `tipo_hotel3` varchar(45) DEFAULT NULL,
  `tipo_prioridad3` int(11) DEFAULT NULL,
  `n_habitaciones` int(10) unsigned DEFAULT NULL,
  `pagina_web` varchar(45) DEFAULT NULL,
  `obser1` varchar(45) DEFAULT NULL,
  `obser2` varchar(45) DEFAULT NULL,
  `obser3` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `on_request` varchar(45) DEFAULT NULL,
  `text1` varchar(500) DEFAULT NULL,
  `text2` varchar(500) DEFAULT NULL,
  `text3` varchar(500) DEFAULT NULL,
  `foto1` varchar(45) DEFAULT NULL,
  `text4` varchar(500) DEFAULT NULL,
  `foto2` varchar(45) DEFAULT NULL,
  `marcavisiblehotel` varchar(1) DEFAULT NULL,
  `foto3` varchar(45) DEFAULT NULL,
  `foto4` varchar(45) DEFAULT NULL,
  `hotel_prioridad` int(11) DEFAULT NULL,
  `subtitulo3` varchar(100) DEFAULT NULL,
  `subtitulo4` varchar(100) DEFAULT NULL,
  `titulo3` varchar(100) DEFAULT NULL,
  `titulo4` varchar(100) DEFAULT NULL,
  `maps` varchar(200) DEFAULT NULL,
  `tripad` varchar(300) DEFAULT NULL,
  `foto5` varchar(45) DEFAULT NULL,
  `foto6` varchar(45) DEFAULT NULL,
  `foto7` varchar(45) DEFAULT NULL,
  `foto8` varchar(45) DEFAULT NULL,
  `foto9` varchar(45) DEFAULT NULL,
  `foto10` varchar(45) DEFAULT NULL,
  `foto11` varchar(45) DEFAULT NULL,
  `foto12` varchar(45) DEFAULT NULL,
  `foto13` varchar(45) DEFAULT NULL,
  `foto14` varchar(45) DEFAULT NULL,
  `foto15` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `hoteles` */

insert  into `hoteles`(`id`,`usuario`,`categoria`,`nombre_hotel`,`nombre_fiscal`,`nif`,`direccion`,`poblacion`,`provincia`,`cp`,`pais`,`localicacion1`,`localicacion2`,`localicacion3`,`email1`,`quien_email1`,`tlf1`,`cargo1`,`email2`,`quien_email2`,`tlf2`,`cargo2`,`email3`,`quien_email3`,`tlf3`,`cargo3`,`tipo_hotel1`,`tipo_prioridad1`,`tipo_hotel2`,`tipo_prioridad2`,`tipo_hotel3`,`tipo_prioridad3`,`n_habitaciones`,`pagina_web`,`obser1`,`obser2`,`obser3`,`estado`,`on_request`,`text1`,`text2`,`text3`,`foto1`,`text4`,`foto2`,`marcavisiblehotel`,`foto3`,`foto4`,`hotel_prioridad`,`subtitulo3`,`subtitulo4`,`titulo3`,`titulo4`,`maps`,`tripad`,`foto5`,`foto6`,`foto7`,`foto8`,`foto9`,`foto10`,`foto11`,`foto12`,`foto13`,`foto14`,`foto15`) values 
(1,2,'★★★★★','hotel pepe','hotelpepe','','Lo que sea mi calle','inca','mallorca','073600','asdasd','Lloseta','Lloseta','Lloseta','sf','fsdfdsf','sf','','','sdfsdfsdfsdf','ffdsf','','sdfsdfsdfsd','fdsfsdf','','','Cicloturismo',4,'agroturismo',3,'agroturismo',3,50,NULL,'hola',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,9,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(3,7,'★★★★★','hotel 1','','',NULL,'dasda','dasaas',NULL,'asdasda','','','','','','','','','','','','','','','','agroturismo',2,'agroturismo',2,'agroturismo',2,NULL,NULL,'',NULL,NULL,NULL,'','fsdfsdf','sdfdsfsdfs','fsdfsf','imagenes_hoteles/3_1.jpg','sfsdsd','imagenes_hoteles/3_2.jpg','','imagenes_hoteles/3_galeria_3.jpg','imagenes_hoteles/3_galeria_4.jpg',3,'dasdad','sdfdsf','adad','fsfsdf','Plaza%20españa,%20mallorca','','imagenes_hoteles/3_galeria_5.jpg','imagenes_hoteles/3_galeria_6.jpg','imagenes_hoteles/3_galeria_7.jpg','imagenes_hoteles/3_galeria_8.jpg','imagenes_hoteles/3_galeria_9.jpg','imagenes_hoteles/3_galeria_10.jpg','imagenes_hoteles/3_galeria_11.jpg','imagenes_hoteles/3_galeria_12.jpg',NULL,NULL,NULL),
(4,8,'★★★★','fdfdsfsdf','','',NULL,'','',NULL,'','','','','','','','','','','','','','','','','agroturismo',1,'agroturismo',1,'agroturismo',1,NULL,NULL,'',NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `linea_reserva` */

DROP TABLE IF EXISTS `linea_reserva`;

CREATE TABLE `linea_reserva` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_reserva` int(10) unsigned DEFAULT NULL,
  `linea` int(10) unsigned DEFAULT NULL,
  `desde` datetime DEFAULT NULL,
  `hasta` datetime DEFAULT NULL,
  `servicio` varchar(45) DEFAULT NULL,
  `tipo_de_hab` varchar(45) DEFAULT NULL,
  `n_personas` varchar(45) DEFAULT NULL,
  `oferta` varchar(45) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `linea_reserva` */

/*Table structure for table `lineas_newsletters` */

DROP TABLE IF EXISTS `lineas_newsletters`;

CREATE TABLE `lineas_newsletters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `newletter` varchar(45) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `H_C_U` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `lineas_newsletters` */

/*Table structure for table `localizaciones` */

DROP TABLE IF EXISTS `localizaciones`;

CREATE TABLE `localizaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `localizacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `localizaciones` */

insert  into `localizaciones`(`id`,`localizacion`) values 
(2,'Lloseta');

/*Table structure for table `newsletters` */

DROP TABLE IF EXISTS `newsletters`;

CREATE TABLE `newsletters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `envios` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `asunto` varchar(45) DEFAULT NULL,
  `cuerpo` varchar(45) DEFAULT NULL,
  `tipo_de_envio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `newsletters` */

/*Table structure for table `pagina_principal` */

DROP TABLE IF EXISTS `pagina_principal`;

CREATE TABLE `pagina_principal` (
  `id` int(11) NOT NULL,
  `foto1` varchar(1000) DEFAULT NULL,
  `titulo1` varchar(1000) DEFAULT NULL,
  `texto1` varchar(1000) DEFAULT NULL,
  `texto2` varchar(1000) DEFAULT NULL,
  `texto3` varchar(1000) DEFAULT NULL,
  `texto4` varchar(1000) DEFAULT NULL,
  `titulo5` varchar(1000) DEFAULT NULL,
  `texto5` varchar(1000) DEFAULT NULL,
  `foto5` varchar(1000) DEFAULT NULL,
  `titulo6` varchar(1000) DEFAULT NULL,
  `texto6` varchar(1000) DEFAULT NULL,
  `tipo_hotel6` varchar(1000) DEFAULT NULL,
  `titulo7` varchar(1000) DEFAULT NULL,
  `texto7` varchar(1000) DEFAULT NULL,
  `foto7` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `pagina_principal` */

insert  into `pagina_principal`(`id`,`foto1`,`titulo1`,`texto1`,`texto2`,`texto3`,`texto4`,`titulo5`,`texto5`,`foto5`,`titulo6`,`texto6`,`tipo_hotel6`,`titulo7`,`texto7`,`foto7`) values 
(1,'img_pagina_principal/Golf1.jpg','Le enviamos de vacaciones y le regalamos el precio de habitación','Flexidreams ofrece una selección de hoteles exclusivos, con un toque\r\nespecial. Permítase un descanso y disfrute de momentos maravillosos\r\nen las posadas más bellas - flexidreams le regala el precio de habitación','Elija uno de nuestros hoteles o resorts seleccionados. Solo paga su consumo mínimo, que se indica en la página de cada hotel.','El precio representa su saldo de crédito en el hotel, que puede gastar libremente durante su estancia. Dejase inspirar por nuestras sugerencias y descubra la manera moderna de viajar.\r\n','Si reserva su viaje a través de nosotros, le regalamos la noche - ¡Es así de fácil!\r\n','Experimente hoteles gourmet como nunca antes los ha experimentado','Todos nuestros hoteles te dan la posibilidad de disfrutar de su excelente comida canjeando tu consumo mínimo y sin pagar extra. Eche un vistazo a nuestros hoteles gourmet para encontrar el restaurante del hotel que mejor se adapte a sus gustos.','img_pagina_principal/2.jpg','Descubra nuestros hoteles Cicloturismo','Con flexidreams puede darse un capricho y convertir sus vacaciones en algo excepcional – sin problemas de conciencia.','Cicloturismo','¿Le apetece un viaje solo para adultos?','¿Quiere viajar solo o con su pareja y disfrutar de la paz y la tranquilidad durante sus vacaciones? Flexidreams tiene cooperaciones con una variedad de hoteles.\r\n<br><br>\r\nCon nosotros puede de elegir el hotel que mejor se adapte a sus preferencias de viaje.        ','img_pagina_principal/4.jpg');

/*Table structure for table `precios_ofertas` */

DROP TABLE IF EXISTS `precios_ofertas`;

CREATE TABLE `precios_ofertas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_oferta` varchar(45) DEFAULT NULL,
  `desde` date DEFAULT NULL,
  `hasta` date DEFAULT NULL,
  `desde_reserva` date DEFAULT NULL,
  `hasta_reserva` date DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `numero_dias` int(11) DEFAULT NULL,
  `tipo_habitacion` varchar(45) DEFAULT NULL,
  `max_personas` varchar(45) DEFAULT NULL,
  `min_personas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `precios_ofertas` */

insert  into `precios_ofertas`(`id`,`codigo_oferta`,`desde`,`hasta`,`desde_reserva`,`hasta_reserva`,`precio`,`numero_dias`,`tipo_habitacion`,`max_personas`,`min_personas`) values 
(3,'55','2021-01-01','2021-02-07','2021-01-12','2021-02-05',66,12,'1','33','12');

/*Table structure for table `reservas` */

DROP TABLE IF EXISTS `reservas`;

CREATE TABLE `reservas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `n_reserva` varchar(45) DEFAULT NULL,
  `n_subreserva` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `hotel` varchar(45) DEFAULT NULL,
  `fecha_inicial` datetime DEFAULT NULL,
  `fecha_actual` datetime DEFAULT NULL,
  `tarjeta` varchar(45) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `caduca` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `precio_t` int(11) DEFAULT NULL,
  `pago` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `reservas` */

/*Table structure for table `servicios_hotel` */

DROP TABLE IF EXISTS `servicios_hotel`;

CREATE TABLE `servicios_hotel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel` varchar(45) DEFAULT NULL,
  `servicio` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `servicios_hotel` */

insert  into `servicios_hotel`(`id`,`hotel`,`servicio`) values 
(8,'3','3');

/*Table structure for table `sublinea_reserva` */

DROP TABLE IF EXISTS `sublinea_reserva`;

CREATE TABLE `sublinea_reserva` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_reserva` varchar(45) DEFAULT NULL,
  `emails` varchar(45) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sublinea_reserva` */

/*Table structure for table `tipo_equipaminetos` */

DROP TABLE IF EXISTS `tipo_equipaminetos`;

CREATE TABLE `tipo_equipaminetos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) DEFAULT NULL,
  `equipamientos` varchar(45) DEFAULT NULL,
  `icono` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_equipaminetos` */

insert  into `tipo_equipaminetos`(`id`,`tipo`,`equipamientos`,`icono`) values 
(48,'Otra mas!','fdsfsdfdsf',''),
(27,'Restaurante','barra libre',''),
(47,'Otra mas!',NULL,''),
(26,'Restaurante',NULL,''),
(46,'Categoria 2','fdsfsdfsd',''),
(45,'Restaurante','barra libreVSD 2',''),
(44,'Categoria 2','fsds',''),
(43,'Categoria 2',NULL,''),
(49,'Otra mas!','dasdad',''),
(50,'lo que sea','',''),
(52,'fdsfds','',''),
(53,'fdsfds','sadasdsadasd',''),
(55,'fdsfsfs','sdadasdadasdsadsad','<i class=\"fab fa-acquisitions-incorporated\"></i>'),
(54,'fdsfsfs','','<i class=\"fab fa-acquisitions-incorporated\"></i>');

/*Table structure for table `tipo_hoteles` */

DROP TABLE IF EXISTS `tipo_hoteles`;

CREATE TABLE `tipo_hoteles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_de_hotel` varchar(45) DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `texto` varchar(222) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tipo_hoteles` */

insert  into `tipo_hoteles`(`id`,`tipo_de_hotel`,`foto`,`titulo`,`texto`) values 
(3,'agroturismo',NULL,NULL,NULL),
(4,'Cicloturismo',NULL,NULL,NULL),
(5,'Senderismo',NULL,NULL,NULL),
(6,'Cultura',NULL,NULL,NULL),
(7,'yyrtyr',NULL,NULL,NULL);

/*Table structure for table `tipos_de_habitaciones` */

DROP TABLE IF EXISTS `tipos_de_habitaciones`;

CREATE TABLE `tipos_de_habitaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hotel` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `foto1` varchar(45) DEFAULT NULL,
  `marca_foto1` varchar(1) DEFAULT NULL,
  `foto2` varchar(45) DEFAULT NULL,
  `marca_foto2` varchar(1) DEFAULT NULL,
  `observaciones` varchar(45) DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `suplemento_dia` varchar(45) DEFAULT NULL,
  `n_personas` varchar(45) DEFAULT NULL,
  `suplemento_3persona` varchar(45) DEFAULT NULL,
  `min_personas` int(11) DEFAULT NULL,
  `max_personas` int(11) DEFAULT NULL,
  `precio_dia_extra` int(45) DEFAULT NULL,
  `suplemento_doble_individual` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tipos_de_habitaciones` */

insert  into `tipos_de_habitaciones`(`id`,`hotel`,`tipo`,`foto1`,`marca_foto1`,`foto2`,`marca_foto2`,`observaciones`,`estado`,`suplemento_dia`,`n_personas`,`suplemento_3persona`,`min_personas`,`max_personas`,`precio_dia_extra`,`suplemento_doble_individual`) values 
(1,'1','Doble',NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `tipos_servicios` */

DROP TABLE IF EXISTS `tipos_servicios`;

CREATE TABLE `tipos_servicios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `servicio` varchar(45) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `tipos_servicios` */

insert  into `tipos_servicios`(`id`,`servicio`,`foto`) values 
(3,'Comer',NULL),
(4,'Desayunar',NULL);

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `pas1` varchar(45) DEFAULT NULL,
  `pas2` varchar(45) DEFAULT NULL,
  `pas3` varchar(45) DEFAULT NULL,
  `pas4` varchar(45) DEFAULT NULL,
  `desde` datetime DEFAULT NULL,
  `estado` varchar(1) DEFAULT NULL,
  `tipo` varchar(1) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `local1` varchar(45) DEFAULT NULL,
  `local2` varchar(45) DEFAULT NULL,
  `local3` varchar(45) DEFAULT NULL,
  `pregunta_seg` varchar(100) DEFAULT NULL,
  `respuesta_seg` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id`,`usuario`,`password`,`pas1`,`pas2`,`pas3`,`pas4`,`desde`,`estado`,`tipo`,`email`,`local1`,`local2`,`local3`,`pregunta_seg`,`respuesta_seg`) values 
(1,'FLEXI_WEB','123','123',NULL,NULL,NULL,NULL,NULL,'3',NULL,NULL,NULL,NULL,'',''),
(2,'3232322','1234566867','1234','1234566867',NULL,NULL,NULL,NULL,'2',NULL,NULL,NULL,NULL,'',''),
(8,'pepeantonio','4342342','4342342',NULL,NULL,NULL,NULL,NULL,'2',NULL,NULL,NULL,NULL,NULL,NULL),
(3,'retertre','1234566867','1234566867','1234566867',NULL,NULL,NULL,NULL,'2',NULL,NULL,NULL,NULL,'','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
