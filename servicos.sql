-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Jun-2023 às 00:41
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `servicos`
--
CREATE DATABASE IF NOT EXISTS `servicos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `servicos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `tipo` int(1) NOT NULL,
  `hectares` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `area`
--

INSERT INTO `area` (`id`, `nome`, `tipo`, `hectares`) VALUES
(1, 'Sitio Camolesi', 1, 100),
(2, 'Fazenda Santo Antonio', 2, 2000),
(3, 'Estancia Boa Agra', 2, 30),
(4, 'Chácara Agua Boa', 3, 1),
(5, 'almir', 1, 1233),
(6, 'Sitio Alegria', 2, 20),
(7, 'Estancia Boa Terra', 3, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `valor` float NOT NULL,
  `valorhora` float NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id`, `nome`, `marca`, `valor`, `valorhora`, `status`) VALUES
(1, 'Trator', 'Generica', 100000, 100, 'A'),
(2, 'Colhedora de Grãos', 'Genérica', 1000000, 500, 'A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `operador`
--

CREATE TABLE `operador` (
  `id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `aniversario` date NOT NULL,
  `salario` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `operador`
--

INSERT INTO `operador` (`id`, `nome`, `aniversario`, `salario`) VALUES
(33, 'Samuel', '2023-06-14', 3333),
(34, 'ana', '2023-05-25', 3333),
(35, 'Pedro', '2023-06-14', 4567),
(36, 'Gustavo', '2023-06-13', 10000),
(37, 'Kainan', '2023-06-05', 45000),
(38, 'anamaria', '2023-06-07', 34423);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `operador` int(11) NOT NULL,
  `equipamento` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `data` date NOT NULL,
  `qtdehrs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoarea`
--

CREATE TABLE `tipoarea` (
  `id` int(11) NOT NULL,
  `descricao` varchar(35) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `tipoarea`
--

INSERT INTO `tipoarea` (`id`, `descricao`, `quantidade`) VALUES
(1, 'Própria', 0),
(2, 'Arrendamento', 1),
(3, 'Parceria', 1),
(4, 'Desmatamento', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(10) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `senha`, `email`) VALUES
(1, 'camolesi', '1f88b714bc391ad4110a05ce6f7536fd', 'camolesi@fema.edu.br'),
(2, 'samuca', '1f88b714bc391ad4110a05ce6f7536fd', 'samuca@hotmail.com'),
(3, 'guilherme', '1f88b714bc391ad4110a05ce6f7536fd', 'guilherme@fema.edu.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `operador`
--
ALTER TABLE `operador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`),
  ADD KEY `servico_operador` (`operador`),
  ADD KEY `servico_area` (`area`),
  ADD KEY `servico_equipamento` (`equipamento`);

--
-- Índices para tabela `tipoarea`
--
ALTER TABLE `tipoarea`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `equipamento`
--
ALTER TABLE `equipamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `operador`
--
ALTER TABLE `operador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tipoarea`
--
ALTER TABLE `tipoarea`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `servico`
--
ALTER TABLE `servico`
  ADD CONSTRAINT `servico_area` FOREIGN KEY (`area`) REFERENCES `area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servico_equipamento` FOREIGN KEY (`equipamento`) REFERENCES `equipamento` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `servico_operador` FOREIGN KEY (`operador`) REFERENCES `operador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
