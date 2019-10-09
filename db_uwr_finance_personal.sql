-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Dez-2018 às 07:20
-- Versão do servidor: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uwr_finance_personal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

DROP TABLE IF EXISTS `despesa`;
CREATE TABLE IF NOT EXISTS `despesa` (
  `des_id` int(11) NOT NULL AUTO_INCREMENT,
  `des_descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `des_valor` float NOT NULL,
  `des_juros` float NOT NULL,
  `des_datavenc` date NOT NULL,
  `des_datapag` date NOT NULL,
  `des_status` tinyint(1) NOT NULL,
  `td_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`des_id`),
  KEY `td_id` (`td_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

DROP TABLE IF EXISTS `receita`;
CREATE TABLE IF NOT EXISTS `receita` (
  `rec_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_descricao` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rec_valor` float NOT NULL,
  `rec_juros` float NOT NULL,
  `rec_datavenc` date NOT NULL,
  `rec_datapag` date NOT NULL,
  `rec_status` tinyint(1) NOT NULL,
  `tr_id` int(11) NOT NULL,
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`rec_id`),
  KEY `tr_id` (`tr_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_despesa`
--

DROP TABLE IF EXISTS `tipo_despesa`;
CREATE TABLE IF NOT EXISTS `tipo_despesa` (
  `td_id` int(11) NOT NULL AUTO_INCREMENT,
  `td_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`td_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_receita`
--

DROP TABLE IF EXISTS `tipo_receita`;
CREATE TABLE IF NOT EXISTS `tipo_receita` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `tr_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usu_id` int(11) NOT NULL,
  PRIMARY KEY (`tr_id`),
  KEY `usu_id` (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usu_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `usu_senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `despesa`
--
ALTER TABLE `despesa`
  ADD CONSTRAINT `despesa_ibfk_1` FOREIGN KEY (`td_id`) REFERENCES `tipo_despesa` (`td_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `despesa_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `receita`
--
ALTER TABLE `receita`
  ADD CONSTRAINT `receita_ibfk_1` FOREIGN KEY (`tr_id`) REFERENCES `tipo_receita` (`tr_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `receita_ibfk_2` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tipo_despesa`
--
ALTER TABLE `tipo_despesa`
  ADD CONSTRAINT `tipo_despesa_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tipo_receita`
--
ALTER TABLE `tipo_receita`
  ADD CONSTRAINT `tipo_receita_ibfk_1` FOREIGN KEY (`usu_id`) REFERENCES `usuarios` (`usu_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
