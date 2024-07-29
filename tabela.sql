-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/07/2024 às 22:42
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viacep`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tabela`
--

CREATE TABLE `tabela` (
  `id` int(11) NOT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `cidade` varchar(11) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tabela`
--

INSERT INTO `tabela` (`id`, `cep`, `endereco`, `bairro`, `cidade`, `estado`) VALUES
(4, '04657000', 'Avenida Yervant Kissajikian', 'Vila Constança', '0', 'SP'),
(5, '04657000', 'Avenida Yervant Kissajikian', 'Vila Constança', '0', 'SP'),
(6, '04658000', 'Rua Vicente Pereira de Assunção', 'Vila Constança', 'São Paulo', 'SP');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tabela`
--
ALTER TABLE `tabela`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tabela`
--
ALTER TABLE `tabela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
