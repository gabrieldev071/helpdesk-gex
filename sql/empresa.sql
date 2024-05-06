-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/05/2024 às 02:54
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(16) NOT NULL,
  `matricula` int(16) NOT NULL,
  `aps` varchar(50) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `chamados`
--

INSERT INTO `chamados` (`id`, `nome`, `email`, `telefone`, `matricula`, `aps`, `categoria`, `descricao`, `foto`, `status`) VALUES
(9, 'Breno Farias do Santos', 'breno.souza@inss.gov.brrrrr', '82646546537978', 7799556, 'GEX', 'SABI/PRIMA/TOKEN', 'tive problemas para fazer reset de senha. ', '', ''),
(10, 'Eliphas SANTOS', 'eliphas@inss.gov.br', '83465987848', 132021, '13021040', 'Problema de Rede', 'teste', '', ''),
(12, 'Edmar Gomes Silva', 'ingss@gov.br', '4655354164', 1302456, 'GEX', 'Problema de Hardware', 'tive que asas', '', ''),
(39, 'Marizete', '2324@insgov.br', '23232323121212', 11213232, 'CATOLE', 'SABI/PRIMA/TOKEN', '10', '05-05-2024--02-31-54.jpg', ''),
(42, 'Marizete', '2324@insgov.br', '23232323121212', 11213232, 'CATOLE', 'SABI/PRIMA/TOKEN', '10', '05-05-2024--02-34-48.jpg', ''),
(50, 'Edmar Gomes Silva', 'marizete@Inss.gov.br', '13264997564', 13203164, 'GEX', 'Problema de Rede', '1', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `cod_pessoa` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `senha` varchar(200) DEFAULT NULL,
  `telefone` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aps` text DEFAULT NULL,
  `matricula` varchar(16) DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pessoas`
--

INSERT INTO `pessoas` (`cod_pessoa`, `nome`, `senha`, `telefone`, `email`, `aps`, `matricula`, `foto`) VALUES
(41, 'Jose Edmar Bezerra Da Silva', '43412312', '8396494326', 'jose.edmar@inss.gov.br', '13021030', '123231212', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`cod_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `cod_pessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
