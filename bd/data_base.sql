/*


*/


CREATE DATABASE `inventario_maquinas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE inventario_maquinas;



CREATE TABLE IF NOT EXISTS `departamentos` (
id_departamento
departamento varchar (20) NOT NULL,
PRIMARY KEY (id_departamento) NOT NULL AUTO_INCREMENT,

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;




CREATE TABLE IF NOT EXISTS `dep_pers` (
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





CREATE TABLE IF NOT EXISTS `tipo` (
 
cod_cpu varchar (30) NOT NULL, cpu varchar (30) NOT NULL,
cod_monitor varchar (30) NOT NULL, monitor varchar (30) NOT NULL,
cod_teclado varchar (30) NOT NULL, teclado varchar (30) NOT NULL,
cod_mouse varchar (30) NOT NULL, mouse varchar (30) NOT NULL,
cod_cornetas varchar (30) NOT NULL, cornetas varchar (30) NOT NULL,
cod_impresora varchar (30) NOT NULL, impresora varchar (30) NOT NULL,
cod_camara varchar (30) NOT NULL, camara varchar (30) NOT NULL,


PRIMARY KEY ()

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `quit_equipo` (
 

PRIMARY KEY ()

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



CREATE TABLE IF NOT EXISTS `auditoria_maquinas` (
 

sistema_operativo varchar (30) NOT NULL,
punto_red varchar (30) NOT NULL,
procesador  varchar (30) NOT NULL,
tarjeta_madre varchar (30) NOT NULL,
memoria_ram varchar (30) NOT NULL,
tarjeta_red varchar (30),tarjeta_red2 varchar (30),
tarjeta_wifi  varchar (30),
Fuente_poder varchar (30) NOT NULL,
cd_dvd varchar (30),
disco_duro varchar (30) NOT NULL,disco_duro2 varchar (30),
CASE_PC varchar (30) NOT NULL,
tarjeta_video varchar (30),




)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;



