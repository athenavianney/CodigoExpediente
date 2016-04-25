# Host: localhost  (Version: 5.5.5-10.1.10-MariaDB)
# Date: 2016-04-21 19:31:27
# Generator: MySQL-Front 5.3  (Build 5.16)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "actualizar_paciente"
#

DROP TABLE IF EXISTS `actualizar_paciente`;
CREATE TABLE `actualizar_paciente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idPaciente` int(5) NOT NULL DEFAULT '0',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `nota` varchar(500) DEFAULT NULL,
  `receta` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "actualizar_paciente"
#


#
# Structure for table "cita"
#

DROP TABLE IF EXISTS `cita`;
CREATE TABLE `cita` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `idPaciente` int(11) NOT NULL DEFAULT '0',
  `nota` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "cita"
#


#
# Structure for table "info_paciente"
#

DROP TABLE IF EXISTS `info_paciente`;
CREATE TABLE `info_paciente` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `fecha` date NOT NULL DEFAULT '0000-00-00',
  `telefono` int(10) NOT NULL DEFAULT '0',
  `antecedentes` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "info_paciente"
#


#
# Structure for table "login"
#

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL DEFAULT '',
  `contrasena` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "login"
#

