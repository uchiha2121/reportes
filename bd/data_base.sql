CREATE DATABASE `inventario_maquinas` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

USE inventario_maquinas;


CREATE TABLE IF NOT EXISTS `departamentos` (

departamento varchar (20) NOT NULL,
responsable varchar(30) NOT NULL,
PRIMARY KEY (id_departamento) NOT NULL AUTO_INCREMENT,

)ENGINE=MyISAM DEFAULT CHARACTER utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS `codigos_` (
 
cod_equipo varchar (30) NOT NULL,
cod_monitor varchar (30) NOT NULL,
cod_teclado varchar (30) NOT NULL,
cod_mouse varchar (30) NOT NULL,
cod_cornetas varchar (30) NOT NULL,
PRIMARY KEY (cod_equipo),

);

CREATE TABLE IF NOT EXISTS `auditoria_maquinas` (
 

sistema_operativo varchar (30) NOT NULL,
punto_red varchar (30) NOT NULL,
cpu varchar (30) NOT NULL,
procesador  varchar (30) NOT NULL,
tarjeta_madre varchar (30) NOT NULL,
memoria_ram varchar (30) NOT NULL,
tarjeta_red varchar (30),
tarjeta_wifi  varchar (30),
Fuente_poder varchar (30) NOT NULL,
CD_DVD varchar (30),
disco_duro varchar (30) NOT NULL,
CASE_PC varchar (30) NOT NULL,
monitor varchar (30) NOT NULL,
teclado varchar (30) NOT NULL,
mouse varchar (30) NOT NULL,
cornetas varchar (30) NOT NULL,
otros_1 varchar (30),
otros_2 varchar (30),

);



