-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.24-log
-- Versão do PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `empresa`
--
CREATE DATABASE `empresa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `empresa`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `cod_produto` int(11) NOT NULL AUTO_INCREMENT,
  `produto` varchar(30) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_custo` float NOT NULL,
  `preco_venda` float NOT NULL,
  PRIMARY KEY (`cod_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

INSERT INTO `produtos` VALUES (1,'esse',586,24.35,81.13),(2,'expedita',736,2.89,85.7),(3,'nobis',80,70.32,70.24),(4,'voluptatem',558,1.57,35.52),(5,'deserunt',438,39.98,83.07),(6,'pariatur',287,39.32,17.9),(7,'aspernatur',203,44.23,55.65),(8,'dolorem',409,43.36,83.57),(9,'et',852,0.84,14.6),(10,'quis',692,79.4,8.98),(11,'ut',462,63.29,22.77),(12,'in',436,96.66,52.67),(13,'libero',792,92.09,13.59),(14,'dolores',33,73.85,47.07),(15,'impedit',522,55.68,99.5);
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
