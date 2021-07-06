-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jul-2021 às 07:50
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudsimples`
--
CREATE DATABASE IF NOT EXISTS `crudsimples` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `crudsimples`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Admin'),
(2, 'Gerente'),
(3, 'Normal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `email`, `categoria_id`) VALUES
(1, 'Jorge da Silva', 'jorge@terra.com.br', 1),
(2, 'Flavia Monteiro', 'flavia@globo.com', 2),
(3, 'Marcos Frota Ribeiro', 'ribeiro@gmail.com', 2),
(4, 'Raphael Souza Santos', 'rsantos@gmail.com', 1),
(5, 'Pedro Paulo Mota', 'ppmota@gmail.com', 1),
(6, 'Winder Carvalho da Silva', 'winder@hotmail.com', 3),
(7, 'Maria da Penha Albuquerque', 'mpa@hotmail.com', 3),
(8, 'Rafael Garcia Souza', 'rgsouza@hotmail.com', 3),
(9, 'Tabata Costa', 'tabata_costa@gmail.com', 2),
(10, 'Ronil Camarote', 'camarote@terra.com.br', 1),
(11, 'Joaquim Barbosa', 'barbosa@globo.com', 1),
(12, 'Eveline Maria Alcantra', 'ev_alcantra@gmail.com', 2),
(13, 'João Paulo Vieira', 'jpvieria@gmail.com', 1),
(14, 'Carla Zamborlini', 'zamborlini@terra.com.br', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nome` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(164) NOT NULL,
  `email` varchar(100) NOT NULL,
  `funcao` enum('admin','gerente','normal') DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `data` datetime NOT NULL,
  `codigo` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `email`, `funcao`, `status`, `data`, `codigo`) VALUES
(1, 'Crud Admin', 'admin', 'effdecfeadf858e259e2a6bfa6b50dfe111460b5', 'darlecio.almeida@gmail.com', 'admin', 1, '0000-00-00 00:00:00', 0),
(12, 'Crud Normal', 'normal', 'effdecfeadf858e259e2a6bfa6b50dfe111460b5', 'crudadmin@gmail.com', 'normal', 1, '2021-07-01 01:01:48', 4294967295);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
