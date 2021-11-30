# Dinglis
La página para Dinglis+

Integrantes
- Jaider Rojas
- Omar García
- Javier Cantillo
- Stiven Otero

Grado: 11°1 Media Técnica Desarrollo de Software

Institución Educativa Héctor Abad Gómez
Institución Universitaria Pascual Bravo


Base de datos



```mysql
CREATE DATABASE proyecto;
CREATE TABLE registro(
	ID int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	Usuario varcVARCHARhar(20) NOT NULL UNIQUE,
	Nombre VARCHAR(30) NOT NULL,
	Clave VARCHAR(100) NOT NULL,
	Email VARCHAR(100) NOT NULL,
	Fecha_Nacimiento DATE NOT NULL,
	Fecha_Creacion DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE calificacion(
	Usuario VARCHAR(20) NOT NULL UNIQUE,
	PRIMARY KEY(Usuario),
	FOREIGN KEY (Usuario) REFERENCES registro(Usuario),
	Calificacion INT(2) NOT NULL,
	Fecha DATETIME DEFAULT CURRENT_TIMESTAMP
);
```