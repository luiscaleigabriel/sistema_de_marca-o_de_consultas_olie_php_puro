-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 29, 2024 at 01:13 PM
-- Server version: 5.7.40
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clinica`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `email` varchar(250) NOT NULL,
  `mensagem` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nome`, `email`, `mensagem`) VALUES
(1, 'Manuel Fonseca', 'manuelfonseca@gmail.com', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem est, eaque magnam facilis perferendis perspiciatis distinctio ratione similique minus dicta harum voluptatem aliquid? Doloribus voluptates laudantium debitis in, quam minima.'),
(2, 'Carvalho de Oliveira', 'carvalho@example.com', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem est, eaque magnam facilis perferendis perspiciatis distinctio ratione similique minus dicta harum voluptatem aliquid? Doloribus voluptates laudantium debitis in, quam minima.'),
(3, 'Fulano de tal', 'manuel@gmail.com', 'gostei muito do vosso serviÃ§o porem gostaria que melhoracem o vosso atendimento presencial\r\n'),
(4, 'Luis Gabriel', 'luis@gmail.com', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem est, eaque magnam facilis perferendis perspiciatis distinctio ratione similique minus dicta harum voluptatem aliquid? Doloribus voluptates laudantium debitis in, quam minima.');

-- --------------------------------------------------------

--
-- Table structure for table `marcacao`
--

DROP TABLE IF EXISTS `marcacao`;
CREATE TABLE IF NOT EXISTS `marcacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datamarcacao` datetime NOT NULL,
  `atoclinico` varchar(100) NOT NULL,
  `tipoconsulta` varchar(150) NOT NULL,
  `idpaciente` int(11) NOT NULL,
  `idmedico` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idpaciente` (`idpaciente`),
  KEY `idmedico` (`idmedico`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marcacao`
--

INSERT INTO `marcacao` (`id`, `datamarcacao`, `atoclinico`, `tipoconsulta`, `idpaciente`, `idmedico`) VALUES
(3, '2024-04-02 14:22:00', 'Consulta', 'Cardiologia', 1, 6),
(4, '2024-03-31 14:22:00', 'Consulta', 'Medicina EstÃ©tica', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `medico`
--

DROP TABLE IF EXISTS `medico`;
CREATE TABLE IF NOT EXISTS `medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `especialidade` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medico`
--

INSERT INTO `medico` (`id`, `nome`, `email`, `especialidade`) VALUES
(1, 'Dr. Savannah Nguyem', 'savannah@gmail.com', 'Psiquiatra'),
(2, 'Dr. Laurindo Bala', 'bala@gmail.com', 'Médicina Interna'),
(3, 'Dr. Jhon Matheus', 'matheus@gmail.com', 'Neurologista'),
(4, 'Dr. Jorge Mupembe', 'mupembe@gmail.com', 'Cardiologista'),
(5, 'Dr. Virgilio Steward', 'steward@gmail.com', 'Pediatra'),
(6, 'Dr. Donana Lemos', 'donana@gmail.com', 'Médicina Familiar');

-- --------------------------------------------------------

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `endereco` text NOT NULL,
  `sexo` set('M','F') NOT NULL,
  `datanascimento` date NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paciente`
--

INSERT INTO `paciente` (`id`, `nome`, `endereco`, `sexo`, `datanascimento`, `telefone`, `email`) VALUES
(2, 'Manuel Fonseca', 'Bendica/Mundial', 'M', '2000-07-20', '929379920', 'luiscaleigabriel@gmail.com'),
(3, 'Manuel Fonseca', 'Bendica/Mundial', 'M', '2004-02-02', '929379920', 'luiscaleigabriel@gmail.com'),
(4, 'Manuel Fonseca', 'Bendica/Mundial', 'M', '2000-01-22', '929379920', 'luiscaleigabriel@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Jorge Mupembe', 'jorge@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu'),
(2, 'Laurindo Bala', 'laurindo@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu'),
(3, 'Virgilio', 'virgilio@gmail.com', '$2y$10$uCigVcGiLYG3kd2WcyuI9.f1JUKX7rdTd.VfCS23gi1VDwkBdoARu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
