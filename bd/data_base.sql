/*


*/


CREATE DATABASE `inventario_maquinas` DEFAULT CHARSET =utf8 COLLATE=utf8_spanish_ci;

	USE inventario_maquinas;



CREATE TABLE IF NOT EXISTS `departamentos` (

		cod_depto int NOT NULL ,
		nombre_depto varchar (20) NOT NULL,
		PRIMARY KEY (cod_depto)


)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE IF NOT EXISTS `personal` (

		cedula int(8) NOT NULL UNIQUE,
		nombre varchar(30) NOT NULL,
		apellido varchar(30) NOT NULL,
		PRIMARY KEY (cedula)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


CREATE TABLE IF NOT EXISTS `depto_pers` (

		n_proceso int NOT NULL,
		id_cedula int(8) NOT NULL UNIQUE,
		id_depto int NOT NULL ,
		PRIMARY KEY (n_proceso),
		FOREIGN KEY (id_cedula) REFERENCES personal (cedula),
		FOREIGN KEY (id_depto) REFERENCES departamentos (cod_depto)



)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;





CREATE TABLE IF NOT EXISTS `hardware` (

		 cod_har int NOT NULL,
		 n_prestamo int,
		 serial_h varchar(30) NOT NULL UNIQUE,
		 marca varchar(30) NOT NULL,
		 estado varchar(30) NOT NULL,
		 f_ingreso date NOT NULL,
		 f_retiro date,
		PRIMARY KEY (cod_har)


)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




CREATE TABLE IF NOT EXISTS `tipo_h` (
 
		cod_tp_h int NOT NULL,
		tipo_h_nombre varchar(30) NOT NULL,
		PRIMARY KEY (cod_tp_h)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;





CREATE TABLE IF NOT EXISTS `cpu` (

	 cod_cpu int NOT NULL,
	 n_prestamo int,
	 serial_cpu varchar(30) NOT NULL,
	 especificacion varchar(30) NOT NULL,
	 marca varchar(30) NOT NULL,
	 f_ingreso date NOT NULL,
	 f_retiro date,
	 PRIMARY KEY (cod_cpu)


)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE IF NOT EXISTS `tipo_c` (

		cod_tp_c int NOT NULL,
		tipo_c_nombre varchar(30) NOT NULL,
		PRIMARY KEY(cod_tp_c)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE IF NOT EXISTS `reporte` (

		cod_reporte int NOT NULL AUTO_INCREMENT,
		n_prestamo int NOT NULL AUTO_INCREMENT,
		fecha_inicio date NOT NULL,
		fecha_entrega date,
		id_harware int NOT NULL,
		id_tp_h int NOT NULL,
		id_cpu int NOT NULL,
		id_tp_c int NOT NULL,
		id_n_proceso int NOT NULL,
		PRIMARY KEY(cod_reporte),
		FOREIGN KEY (id_n_proceso) REFERENCES depto_pers (n_proceso),
		FOREIGN KEY (id_harware) REFERENCES hardware (cod_har),
		FOREIGN KEY (id_tp_h) REFERENCES tipo_h (cod_tp_h),
		FOREIGN KEY (id_cpu) REFERENCES cpu (cod_cpu),
		FOREIGN KEY (id_tp_c) REFERENCES tipo_c (cod_tp_c)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
