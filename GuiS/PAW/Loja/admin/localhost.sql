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
DROP DATABASE `loja`;
CREATE DATABASE `loja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

DROP TABLE IF EXISTS `administradores`;
CREATE TABLE IF NOT EXISTS `administradores` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`codigo`, `nome`, `email`, `senha`) VALUES
(1, 'Guilherme Henrique de Souza', 'guilherme.souza@etec.sp.gov.br', 'd41d8cd98f00b204e9800998ecf8427e'),
(2, 'Ricardo Akira Harada', 'ricardo.harada@etec.sp.gov.br', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'Gui', 'gui@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(6, 'gui', 'a', '0cc175b9c0f1b6a831c399e269772661');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`codigo`, `nome`) VALUES
(1, 'Apple'),
(2, 'Motorola'),
(3, 'Samsung'),
(4, 'Asus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `codigo_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `data_compra` date NOT NULL,
  `valortotal` float NOT NULL,
  PRIMARY KEY (`codigo_pedido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_item`
--

DROP TABLE IF EXISTS `pedido_item`;
CREATE TABLE IF NOT EXISTS `pedido_item` (
  `codigo_pedido_item` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_pedido` int(11) NOT NULL,
  `codigo_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `total_parcial` float NOT NULL,
  PRIMARY KEY (`codigo_pedido_item`)
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `descricao`, `preco`, `codcategoria`, `imagem`) VALUES
(1, 'Celular Asus Zenfone 5Z', 2300, 4, '20220802_114954.jpg'),
(2, 'Celular Asus Zenphone 6', 1100, 4, '20220802_115137.jpg'),
(3, 'Celular Iphone 8', 3000, 1, '20220802_115207.png'),
(4, 'Celular Iphone 8 Plus', 3500, 1, '20220802_115235.jpg'),
(5, 'Celular Iphone 10R', 4000, 1, '20220802_115306.jpg'),
(6, 'Celular Iphone 11', 10000, 1, '20220802_115332.jpg'),
(7, 'Celular Iphone 11 Pro', 6000, 1, '20220802_115401.jpg'),
(8, 'Celular Moto G7 Plus', 2300, 2, '20220802_115443.jpg'),
(9, 'Celular Moto G8 Play', 3020, 2, '20220802_115512.jpg'),
(10, 'Celular Moto G8 Plus', 3000, 2, '20220802_115548.jpg'),
(11, 'Celular Moto G8 Power', 1400, 2, '20220802_115618.jpg'),
(12, 'Celular Moto Razr', 6000, 2, '20220802_115645.jpg'),
(13, 'Celular Moto Z3', 5000, 2, '20220802_115708.jpg'),
(14, 'Celular Galaxy S7', 1100, 3, '20220802_115759.jpg'),
(15, 'Celular Galaxy S9', 7000, 3, '20220802_115827.jpg'),
(16, 'Celular Galaxy S10 ', 6400, 3, '20220802_115856.jpg'),
(17, 'Celular Galaxy S20', 4879, 3, '20220802_115918.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
