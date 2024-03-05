CREATE DATABASE bd_sistema_alejandro;

CREATE TABLE CENTRO(
    id INT AUTO_INCREMENT,
    descripcion varchar(200),
    telefono varchar(12),
    primary key(id)
)

CREATE TABLE USUARIO(
    cedula varchar(20),
    nombre_apellido varchar(100),
    telefono varchar(12),
    centro_id  int

);

ALTER TABLE USUARIO ADD CONSTRAINT PK_USUARIO
PRIMARY KEY(cedula);

ALTER TABLE USUARIO ADD CONSTRAINT  FK_USUARIO_CENTRO
FOREIGN KEY (centro_id) REFERENCES CENTRO(id)

CREATE TABLE CLIENTE (
    cedula varchar(7),
    nombre_apellido varchar(100),
    telefono varchar(12),
    direccion varchar(200),
    usuario_id varchar(7)
)

ALTER TABLE CLIENTE ADD CONSTRAINT PK_CLIENTE
PRIMARY KEY(cedula);

ALTER TABLE CLIENTE ADD CONSTRAINT FK_CLIENTE_USUARIO
FOREIGN KEY (usuario_id) REFERENCES USUARIO(cedula)




