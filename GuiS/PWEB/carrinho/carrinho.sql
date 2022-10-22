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
-- Banco de Dados: `loja`
--

DROP DATABASE IF EXISTS `loja`;
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `loja`;

-- --------------------------------------------------------

-- --------------------------------------------------------


--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `data_compra` date NOT NULL,
  `valor_total` float NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_item`
--

DROP TABLE IF EXISTS `pedido_item`;
CREATE TABLE IF NOT EXISTS `pedido_item` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_pedido` int(11) DEFAULT NULL,
  `codigo_produto` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `total_parcial` float DEFAULT NULL,
  PRIMARY KEY (`codigo`),
  KEY `codigo_pedido` (`codigo_pedido`),
  KEY `codigo_produto` (`codigo_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) NOT NULL,
  `preco` float NOT NULL,
  `codcategoria` int(11) NOT NULL,
  `imagem` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `descricao`, `preco`, `codcategoria`, `imagem`) VALUES
(6, 'Azus Zenphone 5z', 2300, 3, '20220802_115003.jpg'),
(7, 'Azus Zenphone 6', 2600, 3, '20220802_115118.jpg'),
(8, 'Iphone 8', 1900, 4, '20220802_115144.png'),
(9, 'Iphone 8 Plus', 2000, 4, '20220802_115159.jpg'),
(10, 'Iphone 10R', 3200, 4, '20220802_115237.jpg'),
(11, 'Iphone 11', 3400, 4, '20220802_115312.jpg'),
(12, 'Moto G7 Plus', 1400, 5, '20220802_115351.jpg'),
(13, 'Moto G8 Plus', 1500, 5, '20220802_115428.jpg'),
(14, 'Moto G8 Play', 1550, 5, '20220802_115449.jpg'),
(15, 'Moto G8 Power', 2000, 5, '20220802_115529.jpg'),
(16, 'Moto Razr', 4000, 5, '20220802_115553.jpg'),
(17, 'Moto Z3', 2000, 5, '20220802_115614.jpg'),
(18, 'Samsung Galaxy S7', 1200, 2, '20220802_115645.jpg'),
(19, 'Samsung Galaxy S9', 1400, 2, '20220802_115705.jpg'),
(20, 'Samsung Galaxy S10', 1700, 2, '20220802_115725.jpg'),
(21, 'Samsung Galaxy S20', 1950, 2, '20220802_115751.jpg');

--
-- Restrições para as tabelas dumpadas
--

--
-- Restrições para a tabela `pedido_item`
--
ALTER TABLE `pedido_item`
  ADD CONSTRAINT `pedido_item_ibfk_1` FOREIGN KEY (`codigo_pedido`) REFERENCES `pedido` (`codigo`),
  ADD CONSTRAINT `pedido_item_ibfk_2` FOREIGN KEY (`codigo_produto`) REFERENCES `produtos` (`codigo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
