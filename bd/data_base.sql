/*


*/


CREATE DATABASE IF NOT EXISTS `inventario_maquinas` DEFAULT CHARSET =utf8 COLLATE=utf8_spanish_ci;

	USE inventario_maquinas;



CREATE TABLE IF NOT EXISTS `departamentos` (

		cod_depto varchar(4) NOT NULL UNIQUE,
		nombre_depto varchar (60) NOT NULL UNIQUE,
		PRIMARY KEY (cod_depto)


)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




CREATE TABLE IF NOT EXISTS `personal` (

		cedula int(8) UNSIGNED NOT NULL UNIQUE,
		nombre varchar(30) NOT NULL,
		apellido varchar(30) NOT NULL,
		telefono varchar(11) NOT NULL,
		id_depto varchar(4) NOT NULL ,
		PRIMARY KEY (cedula),
		FOREIGN KEY (id_depto) REFERENCES departamentos (cod_depto)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




CREATE TABLE IF NOT EXISTS `prestamo_equipo` (

		n_prestamo int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
		cedula int(8) UNSIGNED NOT NULL,
		fecha_inicio date NOT NULL,
		fecha_fin date NULL,
		estado varchar(1) NOT NULL,
		PRIMARY KEY(n_prestamo),
		FOREIGN KEY (cedula) REFERENCES personal (cedula)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE IF NOT EXISTS `cpu` (

		cod_cpu varchar(30)  NOT NULL,
		SO varchar(20) NOT NULL,
		procedencia varchar(30) NOT NULL,
		disponibilidad varchar(1) NOT NULL,
		estado varchar(1) NOT NULL,
		PRIMARY KEY(cod_cpu)


)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




CREATE TABLE IF NOT EXISTS `caracteristica_cpu` (

	 cod_carac int(5) NOT NULL AUTO_INCREMENT,
	 nombre_c varchar(50) NOT NULL,
	 especificacion varchar(50) NOT NULL, 
	 id_cpu varchar(30) NOT NULL,
	 PRIMARY KEY (cod_carac),
     FOREIGN KEY (id_cpu) REFERENCES cpu (cod_cpu)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE IF NOT EXISTS `prestamo_cpu` (

		cod_pres_cpu int(4)      NOT NULL AUTO_INCREMENT,
		id_prestamo  int(4) UNSIGNED  NOT NULL,
		id_cpu       varchar(30)      NOT NULL,
		PRIMARY KEY(cod_pres_cpu),
		FOREIGN KEY (id_prestamo) REFERENCES prestamo_equipo (n_prestamo),
		FOREIGN KEY (id_cpu) REFERENCES cpu (cod_cpu)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE IF NOT EXISTS `hardware` (

		 serial_h varchar(30) NOT NULL UNIQUE,
		 nombre_h varchar(50) NOT NULL,
		 especificacion varchar(50) NOT NULL,
		 disponibilidad varchar(1) NOT NULL,
		 estado varchar(1) NOT NULL,

		PRIMARY KEY (serial_h)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;



CREATE TABLE IF NOT EXISTS `prestamo_hrw` (

	 cod_pres_h int(4) NOT NULL AUTO_INCREMENT,
	 id_prestamo int(4) UNSIGNED NOT NULL,
	 id_serial_h varchar(30) NOT NULL UNIQUE,
	 PRIMARY KEY (cod_pres_h),
	 FOREIGN KEY (id_serial_h) REFERENCES  hardware (serial_h),
     FOREIGN KEY (id_prestamo) REFERENCES prestamo_equipo (n_prestamo)

)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




