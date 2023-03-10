CREATE DATABASE comic CHARACTER SET utf8 COLLATE utf8_general_ci;

use comic;

create table roles (
  id INT NOT NULL AUTO_INCREMENT,
  rol VARCHAR(20) NOT NULL,
  PRIMARY KEY (id)
)ENGINE=INNODB;

INSERT INTO roles (rol) VALUES ('admin');
INSERT INTO roles (rol) VALUES ('usuario');

CREATE TABLE usuarios (
	id INT NOT NULL AUTO_INCREMENT,
	rol_id INT NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(100) NOT NULL,
	telefono VARCHAR(40) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	CONSTRAINT fk_roles
	FOREIGN KEY (rol_id)
	REFERENCES roles (id)
)ENGINE=INNODB;

INSERT INTO usuarios (rol_id, nombre, email, password, telefono) VALUES 
	(1, 'Nilton Cesar', 'adm@g.com', '123', '9231983923'),
	(2, 'Angel Delcoro', 'user@g.com', '123', '54355353');

CREATE TABLE proyectos (
	id INT NOT NULL AUTO_INCREMENT,
	usuario_id INT NOT NULL,
	nombre VARCHAR(50) NOT NULL,
	genero VARCHAR(100) NOT NULL,
	tipo VARCHAR(100) NOT NULL,
	estado VARCHAR(40) NOT NULL,
	created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	updated_at DATETIME DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	CONSTRAINT fk_autor
	FOREIGN KEY (usuario_id)
	REFERENCES usuarios (id)
)ENGINE=INNODB;


INSERT INTO proyectos (usuario_id, nombre, genero, tipo, estado) VALUES 
	(1, 'After Pain novela', 'romance', 'digital', 'En emision'),
	(1, 'En la sombra', 'suspenso', 'digital', 'Completado');

CREATE TABLE pagos (
	id INT NOT NULL AUTO_INCREMENT,
	usuario_id INT NOT NULL,
	proyecto_id INT NOT NULL,
	monto VARCHAR(50) NOT NULL,
	modalidad VARCHAR(100) NOT NULL,
	fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (id),
	CONSTRAINT fk_pago_usuario
	FOREIGN KEY (usuario_id)
	REFERENCES usuarios (id),
	CONSTRAINT fk_pago_proyecto
	FOREIGN KEY (proyecto_id)
	REFERENCES proyectos (id)
)ENGINE=INNODB;


INSERT INTO pagos (usuario_id, proyecto_id, monto, modalidad) VALUES 
	(2, 1, 250, 'Paypal'),
	(2, 2,  210, 'Otro');