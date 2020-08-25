-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2020 às 15:37
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `encontreseupet`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `encontrados`
--

CREATE TABLE `encontrados` (
  `id_pet` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `porte` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perdidos`
--

CREATE TABLE `perdidos` (
  `id_pet` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `porte` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `encontrados`
--
ALTER TABLE `encontrados`
  ADD PRIMARY KEY (`id_pet`);

--
-- Índices para tabela `perdidos`
--
ALTER TABLE `perdidos`
  ADD PRIMARY KEY (`id_pet`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `encontrados`
--
ALTER TABLE `encontrados`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `perdidos`
--
ALTER TABLE `perdidos`
  MODIFY `id_pet` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
