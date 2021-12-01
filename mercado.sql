/*
SQLyog Community v13.1.7 (64 bit)
MySQL - 10.4.21-MariaDB : Database - mercado
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mercado` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mercado`;

/*Table structure for table `formulariocliente` */

DROP TABLE IF EXISTS `formulariocliente`;

CREATE TABLE `formulariocliente` (
  `id_formulario` int(11) NOT NULL AUTO_INCREMENT,
  `sector` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_puesto` int(255) DEFAULT NULL,
  `canon` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nombres` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellidos` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dni` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domicilio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `localidad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provincia` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cp` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaInicio` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fechaFinal` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_formulario`),
  KEY `fk_formularioClientePuestos_idx` (`id_puesto`),
  CONSTRAINT `fk_formularioClientePuestos` FOREIGN KEY (`id_puesto`) REFERENCES `puestos` (`id_puesto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `formulariocliente` */

insert  into `formulariocliente`(`id_formulario`,`sector`,`id_puesto`,`canon`,`nombres`,`apellidos`,`dni`,`domicilio`,`localidad`,`provincia`,`cp`,`telefono`,`fechaInicio`,`fechaFinal`,`mail`) values 
(11,'frutas',1,'15000','LEONARDO ','GIMENEZ','26041508','LISANDRO MOYANO 782','MAIPU','MENDOZA','5515','2615533457','28-10-2021','28-10-2023','leogimenez44@hotmail.com'),
(12,'Carnes',2,'30000','IVANA','RIVERO','29425751','RAMOS MEJIA 532','GODOY CRUZ','MENDOZA','5501','2613802613','28-10-2021','28-10-2023','ivanarivero@gmail.com'),
(13,'Pescaderia',3,'25000','IGNACIO','QUIROGA','28055421','SAN MARTIN 1380','LUJAN DE CUYO','MENDOZA','5505','2615684259','28-10-2021','28-10-2023','nachoq@gmail.com'),
(16,'frutas',1,'15000','prueba','prueba','26041508','LISANDRO MOYANO 782','prueba','MENDOZA','2323','2615533457','28-10-2021','28-10-2023','leogimenez44@hotmail.com');

/*Table structure for table `puestos` */

DROP TABLE IF EXISTS `puestos`;

CREATE TABLE `puestos` (
  `id_puesto` int(255) NOT NULL,
  `id_sector` int(11) DEFAULT NULL,
  `numero` varchar(100) NOT NULL,
  `numeroSector` int(11) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `servicios` varchar(100) NOT NULL,
  `canon` varchar(50) NOT NULL,
  `superficie` varchar(50) NOT NULL,
  PRIMARY KEY (`id_puesto`),
  KEY `fk_puestosSector_idx` (`numeroSector`),
  KEY `fk_puestosSectores_idx` (`id_sector`),
  CONSTRAINT `fk_puestosSectores` FOREIGN KEY (`id_sector`) REFERENCES `sectores` (`id_sector`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `puestos` */

insert  into `puestos`(`id_puesto`,`id_sector`,`numero`,`numeroSector`,`ubicacion`,`servicios`,`canon`,`superficie`) values 
(1,33,'1',1,'Frutas y Verduras','luz, gas, agua, wifi','15000','25'),
(2,33,'2',1,'Frutas y Verduras','luz, gas, agua, wifi','10000','20'),
(3,38,'3',3,'Pescaderia','luz, gas, agua, wifi','25000','25'),
(4,35,'4',2,'Carnes y Lacteos','luz, gas, agua, wifi','30000','30'),
(5,57,'5',4,'Polleria','luz, gas, agua, wifi','20000','25'),
(6,57,'6',4,'Polleria','luz, gas, agua, wifi','20000','25'),
(7,62,'7',5,'Panaderia','luz, gas, agua, wifi','18000','20'),
(8,62,'8',5,'Panaderia','luz, gas, agua, wifi','23000','25');

/*Table structure for table `sectores` */

DROP TABLE IF EXISTS `sectores`;

CREATE TABLE `sectores` (
  `id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `numeroSector` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `servicios` text NOT NULL,
  `puestos` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sector`),
  KEY `fk_puesto` (`puestos`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sectores` */

insert  into `sectores`(`id_sector`,`numeroSector`,`nombre`,`ubicacion`,`servicios`,`puestos`) values 
(33,1,'frutas y verduras','centro','luz, gas, agua, wifi','2'),
(35,2,'Carnes y Lacteos','sur','luz, gas, agua, wifi','1'),
(38,3,'Pescaderia','norte','luz, gas, agua, wifi','1'),
(57,4,'Polleria','oeste','luz, gas, agua, wifi','2'),
(62,5,'Panadesria','este','luz, gas, agua, wifi','2');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`id_usuario`,`nombre_usuario`,`clave`,`rol`) values 
(1,'admin','admin','admin'),
(2,'cliente','cliente','cliente');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
