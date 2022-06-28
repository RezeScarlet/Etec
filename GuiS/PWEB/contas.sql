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
-- Banco de Dados: `contas`
--
CREATE DATABASE `contas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `contas`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE IF NOT EXISTS `caixa` (
  `CodLancamento` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(70) NOT NULL,
  `DataLancamento` date NOT NULL,
  `Valor` float NOT NULL,
  `Observacao` varchar(200) NOT NULL,
  PRIMARY KEY (`CodLancamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contaspagar`
--

CREATE TABLE IF NOT EXISTS `contaspagar` (
  `CodPagar` int(11) NOT NULL AUTO_INCREMENT,
  `CodCliente` int(11) NOT NULL,
  `DataVencimento` date NOT NULL,
  `DataPagamento` date NOT NULL,
  `ValorPagar` float NOT NULL,
  PRIMARY KEY (`CodPagar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contasreceber`
--

CREATE TABLE IF NOT EXISTS `contasreceber` (
  `CodReceber` int(11) NOT NULL AUTO_INCREMENT,
  `CodCliente` int(11) NOT NULL,
  `DataVencimento` date NOT NULL,
  `DataRecebimento` date NOT NULL,
  `ValorReceber` float NOT NULL,
  PRIMARY KEY (`CodReceber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `CodProduto` int(11) NOT NULL AUTO_INCREMENT,
  `Descricao` varchar(45) NOT NULL,
  `PrecoCusto` float NOT NULL,
  `PrecoVenda` float NOT NULL,
  `MargemLucro` float NOT NULL,
  `Fornecedor` varchar(70) NOT NULL,
  `DataUltimaCompra` date NOT NULL,
  `Estoque` int(11) NOT NULL,
  `EstoqueMinimo` int(11) NOT NULL,
  PRIMARY KEY (`CodProduto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
