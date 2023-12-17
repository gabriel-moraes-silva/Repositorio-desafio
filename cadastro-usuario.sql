-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Tempo de geração: 17/12/2023 às 15:26
-- Versão do servidor: 8.2.0
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site1`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro-usuario`
--

DROP TABLE IF EXISTS `cadastro-usuario`;
CREATE TABLE IF NOT EXISTS `cadastro-usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpf` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cidade` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `complemento` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `cadastro-usuario`
--

INSERT INTO `cadastro-usuario` (`id`, `nome`, `email`, `senha`, `telefone`, `cpf`, `sexo`, `data_nascimento`, `cidade`, `bairro`, `rua`, `complemento`) VALUES
(1, 'joana montes', 'joaninham12@gmail.com', '123456', '991223212', '62773434554', 'feminino', '2013-12-18', 'vila nova', 'vila velha', 'nova vila', 'casa 4 atras do posto de abastecimento '),
(2, 'matheus', 'matheuszin20@gmail.com', '654321', '991223220', '03573832117', 'masculino', '2005-08-20', 'porto triste', 'mal inicio', 'patinetes', 'perto da confeitaria da tia vivi'),
(3, 'thiago', 'thiongos17@gmail.com', 'thiago123', '991223230', '71237218308', 'outro', '2016-04-13', 'são jackson', 'michael', 'monte das trilhas', 'segunda casa a direita no corredor');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
