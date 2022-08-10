-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 04-Ago-2022 às 16:35
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rede_fotos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `foto`
--

DROP TABLE IF EXISTS `foto`;
CREATE TABLE IF NOT EXISTS `foto` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `fk_usuario_email` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_usuario_email` (`fk_usuario_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `foto`
--
ALTER TABLE `foto`
  ADD CONSTRAINT `foto_ibfk_1` FOREIGN KEY (`fk_usuario_email`) REFERENCES `usuario` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
