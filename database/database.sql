DROP DATABASE IF EXISTS mercalibre;
CREATE DATABASE mercalibre;
USE mercalibre;

# Usuario: mercalibre Contraseña: 172839123
# Privileges for `mercalibre`@`127.0.0.1`
GRANT USAGE ON *.* TO 'mercalibre'@'127.0.0.1' IDENTIFIED BY PASSWORD '*5512CCD32F99F9E94DE78231857F881A66E99F03';

# Usuario: mercalibre Contraseña: 172839123
# Privileges for `mercalibre`@`localhost`
GRANT USAGE ON *.* TO 'mercalibre'@'localhost' IDENTIFIED BY PASSWORD '*5512CCD32F99F9E94DE78231857F881A66E99F03';

# Dar acceso a base de datos mercalibre
GRANT ALL PRIVILEGES ON `mercalibre`.* TO 'mercalibre'@'localhost';

CREATE TABLE usuarios
(
    id INT(7) UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE KEY,
    contrasena VARCHAR(20) NOT NULL,
    nombre VARCHAR(30) NULL,
    apellido VARCHAR(30) NULL,
    rfc VARCHAR(12) NULL UNIQUE KEY,
    razon_social VARCHAR(50) NULL
) DEFAULT CHARSET = utf8;

CREATE TABLE direccion
(
	id int not null primary key auto_increment,
	id_usuario int(7) UNSIGNED not null,
	nombre_apellido varchar(50) not null,
	codigo_postal int not null,
	estado varchar(20) not null,
	municipio varchar(20) not null,
	colonia varchar(30) not null,
	calle varchar(30) not null,
	numero_exterior int not null,
	numero_interior int default 0,
	entre_calles varchar(60) default 'calle',
	referencias varchar(50) default 'referencia',
	telefono varchar(10) not null,
	foreign key (id_usuario) references usuarios(id)
);

create table productos(
	id int NOT NULL PRIMARY KEY auto_increment,
	nombre varchar(60) not null,
	imagen varchar(60),
	subcategoria varchar(20),
	precio int not null,
	vendidos int default 0,
	stock int not null
);

#Insert
INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Reloj Inteligente Impermeable Con Pantalla Táctil","reloj.webp","reloj",1061,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Nintendo Switch","switch.webp","Consola",5999,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Nintendo New 3ds Xl Solgaleo Lunala Pokemon","nintendo3ds.webp","Consola",4899,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Laptop Huawei Matebook X Pro I7 8gb + Mochila De Regalo","laptop.webp","Computadora",30000,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Oferta Lector Adaptador Micro Sd A Usb 2.0 En Blister Nuevo","AdaptadotMicro.webp","Tecnologia",3002,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Rodillera Elástica De Compresión Para Gimnasio Correr","rodillera.webp","Cosas",138,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Mochila Urbana Antirrobo De 30l Con Cargador Usb","mochila.webp","Cosas",499,0,1);

INSERT INTO `productos`(`nombre`, `imagen`, `subcategoria`, `precio`, `vendidos`, `stock`) VALUES ("Memoria Micro Sdxc 64gb Adata Clase 10 Video Full Hd V10 Juegos A1","memoriaMicro.webp","Memoria",151,0,1);