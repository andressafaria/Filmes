-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20-Jun-2015 às 05:52
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administracao`
--

CREATE TABLE IF NOT EXISTS `administracao` (
  `id_adm` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(20) NOT NULL,
  PRIMARY KEY (`id_adm`),
  UNIQUE KEY `id_adm` (`id_adm`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `administracao`
--

INSERT INTO `administracao` (`id_adm`, `nome`, `email`, `login`, `senha`) VALUES
(6, 'administrador', 'andressa_faria18@hotmail.com', '123', '123'),
(20, 'SebastiÃ£o Francisco da Silva', 'asa', 'andressa', 'aaa'),
(21, 'c', 'b', 'b', 'b'),
(22, 'f', 'f', 'ff', 'f');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) NOT NULL,
  PRIMARY KEY (`id_categoria`),
  UNIQUE KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `categoria`) VALUES
(24, 'LanÃ§amentos'),
(25, 'Terror');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE IF NOT EXISTS `filmes` (
  `id_filme` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) DEFAULT NULL,
  `id_subcategoria` int(11) DEFAULT NULL,
  `filme` varchar(200) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id_filme`),
  UNIQUE KEY `id_filme` (`id_filme`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id_filme`, `id_categoria`, `id_subcategoria`, `filme`, `foto`, `descricao`) VALUES
(1, 0, 0, '', '235b7bcb37.png', ''),
(2, 0, 0, 'oi', 'b23d344922.png', ''),
(3, 22, 0, 'yrdyr', '2fb62cc003.png', ''),
(4, 22, 7, 'oito', 'c7bb8369be.png', ''),
(5, 22, 7, 'Filmes', '11c1cca2ac.png', ''),
(6, 22, 7, 'oito', 'fef1a33159.png', 'oi'),
(7, 23, 7, 'AÃ§ao', 'd29cd9a802.png', 'oi'),
(8, 23, 0, 'oito', '4ba53572c7.png', ''),
(9, 23, 0, 'io', '6d34fa76d1.png', 'oi'),
(10, 23, NULL, 'oito', 'bcb4115271.png', 'oioi'),
(11, 24, NULL, 'Outros', '0423a5efa9.png', 'ola'),
(12, 24, NULL, 'teste', 'd07e17a060.png', 'testando');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id_subcategoria` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `subcategoria` varchar(200) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_subcategoria`),
  UNIQUE KEY `id_subcategoria` (`id_subcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `subcategorias`
--

INSERT INTO `subcategorias` (`id_subcategoria`, `subcategoria`, `id_categoria`) VALUES
(3, 'teste', 0),
(4, 'Filmes', 0),
(5, 'oooo', 0),
(6, 'testandoo', 0),
(7, 'dez', 0),
(8, 'Outros', 0),
(9, 'ovo', 0),
(10, 'oi', 0),
(11, 'uiui', 0),
(12, 'nove', 0),
(13, 'oi', 0),
(14, 'oi', 0),
(18, 'oito', 23);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
