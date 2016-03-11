/*


*/


CREATE DATABASE `inventario_maquinas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE inventario_maquinas;



CREATE TABLE IF NOT EXISTS `departamentos` (
cod_depto int NOT NULL ,
nombre_depto varchar (20) NOT NULL,
PRIMARY KEY (cod_depto) NOT NULL,
FOREIGN KEY (id_n_proceso) REFERENCES depto_pers (n_proceso) 


)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS `depto_pers` (
n_proceso int NOT NULL AUTO_INCREMENT UNIQUE,
fecha_inicio date NOT NULL,
fecha_entrega date NOT NULL,
PRIMARY KEY (n_proceso),
FOREIGN KEY (id_cedula) REFERENCES personal (cedula)



)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;





CREATE TABLE IF NOT EXISTS `personal` (
cedula int(8) NOT NULL UNIQUE,
nombre varchar(30) NOT NULL,
apellido varchar(30) NOT NULL,
PRIMARY KEY (cedula),
INDEX (cedula)

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `esp_hard` (
 cod_hard int NOT NULL UNIQUE AUTO_INCREMENT,
 serial_ varchar(30) NOT NULL UNIQUE,
 marca_eh varchar(30) NOT NULL,
 estado varchar(30) NOT NULL,
 f_ingreso date NOT NULL,
 f_retiro date,
PRIMARY KEY (cod_hard),
FOREIGN KEY (id_tp_hwr_) REFERENCES tipo_hardw (cod_hwr),
FOREIGN KEY (id_esp_cpu) REFERENCES esp_cpu (cod_esp_cpu)


)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS `tipo_hardw` (
 
cod_tp_hwr int NOT NULL,
tipo_h_nombre varchar(30) NOT NULL,

PRIMARY KEY (cod_cpu),

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;





CREATE TABLE IF NOT EXISTS `esp_cpu` (

 cod_esp_cpu int NOT NULL,
 especificacion varchar(30) NOT NULL,
 marca_ec varchar(30) NOT NULL,
PRIMARY KEY (cod_cpu),
FOREIGN KEY (id_h_cpu) REFERENCES tipo_hardw_cpu (cod_h_cpu)


)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `tipo_hardw_cpu` (
 cod_h_cpu int NOT NULL,
 tipo_hdc_nombre varchar(30) NOT NULL,
PRIMARY KEY(cod_h_cpu),

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;


