SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `tabla1` (
	`id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `materia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tabla1` (`id`, `nombre`, `apellido`, `materia`) VALUES
(1, ' JESUS', 'PETRO', 'Desarrollo Web'),
(2, 'ESTEBAN', 'JOSE', 'Desarrollo Web'),
(3, ' JESUS', 'VEGA', 'Desarrollo Web'),
(4, ' MANUEL', ' SOLANO', 'Desarrollo Web'),
(5, ' MANUEL', 'LLORENTE', 'Desarrollo Web'),
(6, 'JESSID', ' COGOLLO', 'Desarrollo Web'),
(7, ' ERNEY', 'SANCHEZ', 'Desarrollo Web'),
(8, ' ESTEBAN', 'CASTRO PADILLA', 'Desarrollo Web'),
(9, 'ELKIN JOSE', 'SIERRA GOMEZ', 'Desarrollo Web'),
(10, 'LUIS MIGUEL', 'RAMOS MARQUEZ', 'Desarrollo Web'),
(11, 'ENRIQUE MANUEL', 'MESTRA BERROCAL', 'Desarrollo Web'),
(12, 'ANGEL MIGUEL', 'TABORDA MIRANDA', 'Desarrollo Web'),
(13, 'RODOLFO NO', 'ROHATAN BASSIL', 'Desarrollo Web'),
(14, 'LILIANA ANDREA', 'ORTEGA MERCADO', 'Desarrollo Web'),
(15, 'CRISTIAN JOSE', 'MARTINEZ POLO', 'Desarrollo Web'),
(16, 'JOSE NICOLAS', 'PEREIRA GALARCIO', 'Desarrollo Web'),
(17, 'JUAN DANIEL', 'GARCIA CARDOZO', 'Desarrollo Web'),
(18, 'JHONATAN', 'BANDA RODRÍGUEZ', 'Desarrollo Web');

CREATE TABLE `tabla2` ( 
    `id` int NOT NULL AUTO_INCREMENT,
  `idtabla1` int NOT NULL,
  `apodo` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `aniversario` datetime DEFAULT NULL,
  `cumpleaños` date DEFAULT NULL,
  `estatura` float DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  
  PRIMARY KEY (`id`),
  KEY `IdTabla1_idx` (`idtabla1`),
  CONSTRAINT `IdTabla1_fk` FOREIGN KEY (`idtabla1`) REFERENCES `tabla1` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tabla2` (`id`, `idtabla1`, `apodo`, `ciudad`, `aniversario`, `cumpleaños`, `estatura`, `email`) VALUES
(1, 1, 'juan', 'barrancabermeja', '0000-00-00 00:00:00', '0000-00-00', 200, 'effff@gmail.com'),
(2, 2, 'jose', 'ultramar', '0000-00-00 00:00:00', '0000-00-00', 190, 'effff@gmail.com'),
(3, 3, 'mige', 'sampues', '0000-00-00 00:00:00', '0000-00-00', 100, 'effff@gmail.com'),
(4, 4, 'ddd', 'monteria', '0000-00-00 00:00:00', '0000-00-00', 170, 'effff@gmail.com'),
(5, 5, 'ddd', 'sincelejo', '0000-00-00 00:00:00', '0000-00-00', 170, 'effff@gmail.com'),
(6, 6, 'Hodddmbre', 'tokyo', '0000-00-00 00:00:00', '0000-00-00', 167, 'effff@gmail.com'),
(7, 7, 'ddd', 'dorado', '0000-00-00 00:00:00', '0000-00-00', 169, 'effff@gmail.com'),
(8, 8, 'Hdomdddbre', 'cerete', '0000-00-00 00:00:00', '0000-00-00', 170, 'effff@gmail.com'),
(9, 9, 'dHodddmbre', 'miami', '0000-00-00 00:00:00', '0000-00-00', 800, 'effff@gmail.com'),
(10, 10, 'dMdujeyyr', 'londres', '0000-00-00 00:00:00', '0000-00-00', 1100, 'effff@gmail.com'),
(11, 1, 'juan', 'barrancabermeja', '0000-00-00 00:00:00', '0000-00-00', 180, 'effff@gmail.com'),
(12, 2, 'jose', 'ultramar', '0000-00-00 00:00:00', '0000-00-00', 170, 'effff@gmail.com'),
(13, 3, 'mige', 'sampues', '0000-00-00 00:00:00', '0000-00-00', 156, 'effff@gmail.com'),
(14, 4, 'ddd', 'monteria', '0000-00-00 00:00:00', '0000-00-00', 175, 'effff@gmail.com'),
(15, 5, 'ddd', 'sincelejo', '0000-00-00 00:00:00', '0000-00-00', 172, 'effff@gmail.com'),
(16, 6, 'Hodddmbre', 'tokyo', '0000-00-00 00:00:00', '0000-00-00', 163, 'effff@gmail.com'),
(17, 7, 'ddd', 'dorado', '0000-00-00 00:00:00', '0000-00-00', 164, 'effff@gmail.com'),
(18, 8, 'Hdomdddbre', 'cerete', '0000-00-00 00:00:00', '0000-00-00', 170, 'effff@gmail.com'),
(19, 9, 'dHodddmbre', 'miami', '0000-00-00 00:00:00', '0000-00-00', 180, 'effff@gmail.com'),
(20, 10, 'dMdujeyyr', 'londres', '0000-00-00 00:00:00', '0000-00-00', 167, 'effff@gmail.com');


  
  
  