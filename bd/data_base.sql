/*


*/


CREATE DATABASE `inventario_maquinas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE inventario_maquinas;



CREATE TABLE IF NOT EXISTS `departamentos` (
id_departamento int NOT NULL,
departamento varchar (20) NOT NULL,
PRIMARY KEY (id_departamento) NOT NULL AUTO_INCREMENT,

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS `dto_pers` (
n_proceso int NOT NULL,
fecha_de_inicio date NOT NULL,
fecha_de_entrega date NOT NULL,
PRIMARY KEY () NOT NULL AUTO_INCREMENT,

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;





CREATE TABLE IF NOT EXISTS `personal` (
cedula int(8) NOT NULL,
nombre varchar(30) NOT NULL,
apellido varchar(30) NOT NULL,
PRIMARY KEY () NOT NULL AUTO_INCREMENT,

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `esp_hard` (
 cod_hard int NOT NULL,
 serial_ varchar(30) NOT NULL,
 marca varchar(30) NOT NULL,
 estado varchar(30) NOT NULL,
 f_ingreso date NOT NULL,
 f_retiro date,

PRIMARY KEY ()

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS `tipo_hardw` (
 
cod_cpu int NOT NULL,
tipo_nombre varchar(30) NOT NULL,

PRIMARY KEY ()

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;





CREATE TABLE IF NOT EXISTS `especificacion_cpu` (
 id_cpu int NOT NULL,
 especificacion varchar(30) NOT NULL,




)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `tipo_hardw_cpu` (
 id_h_cpu int NOT NULL,
 tipo_nombre varchar(30) NOT NULL,


)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;


