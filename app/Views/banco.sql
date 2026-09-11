-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/09/2026 às 00:37
-- Versão do servidor: 10.11.18-MariaDB-0+deb12u1
-- Versão do PHP: 8.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a28351`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Conteudo`
--

CREATE TABLE `Conteudo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Conteudo`
--

INSERT INTO `Conteudo` (`Id`, `Titulo`, `Texto`) VALUES
(1, 'Teste 1', 'alguma coisa'),
(5, 'fernando', 'conteúdo da pagina '),
(6, 'contato', 'meus contatos '),
(7, 'Quem sou', 'quem eu sou'),
(8, 'produtos ', 'meus produtos');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
