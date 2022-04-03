-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Ago-2021 às 20:05
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pessoa_id` int DEFAULT NULL,
  `contato` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `pessoa_id` (`pessoa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `pessoa_id`, `contato`) VALUES
(1, NULL, '1111-1111'),
(2, NULL, '1111-6666'),
(3, NULL, '1111-7777'),
(4, NULL, '(00)00000-0000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

DROP TABLE IF EXISTS `contatos`;
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cidade` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contatos`
--

INSERT INTO `contatos` (`id`, `cidade`) VALUES
(1, 'Cidade 5'),
(2, 'Cidade 6'),
(3, 'Cidade 7'),
(4, 'Alguma aí');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pessoa_id` int DEFAULT NULL,
  `cidade_id` int DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `numero` int DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `pessoa_id` (`pessoa_id`),
  KEY `cidade_id` (`cidade_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`id`, `pessoa_id`, `cidade_id`, `endereco`, `numero`, `complemento`) VALUES
(1, NULL, NULL, 'Rua 5', 50, 'Complemento 5'),
(2, NULL, NULL, 'Rua 6', 666, 'Complemento 6'),
(3, NULL, NULL, 'Rua 7', 77, 'Complemento 7'),
(4, NULL, NULL, 'Rua 0', 1, 'Qualquer um');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` varchar(15) DEFAULT NULL,
  `rg` varchar(15) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `salario` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `cpf`, `rg`, `nome`, `data_nascimento`, `salario`) VALUES
(1, '000-000-000.00', '000.00.00-0', 'Eu Mesmo', '2005-05-05', 5555),
(2, '000-000-000.66', '000.00.00-6', 'Eu Mesmo 6', '2006-06-06', 6666),
(3, '000-000-000.77', '000.00.00-7', 'Eu Mesmo 7', '2007-07-07', 7777),
(4, '000.000.000-00', '000.00.00-0', 'Victor Barcelos', '2003-08-25', 10000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
