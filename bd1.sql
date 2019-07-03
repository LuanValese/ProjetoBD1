-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Jul-2019 às 16:30
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `mensalidade` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `cpf`, `nome`, `telefone`, `mensalidade`) VALUES
(58, '47958468355', 'Vinicius OtÃ¡vio Rafael Monteiro', '44996640755', NULL),
(59, '36854574169', 'Rafael da Silva', '14999865762', '90.00'),
(60, '56748496512', 'Alice Freitas Melo', '44991160058', '100.00'),
(61, '46658716644', 'Fernanda Monteiro da Silva', '17996580047', '110.00'),
(62, '28947556411', 'JosÃ© Azevedo Maia', '47995488754', '215.00'),
(63, '24983154699', 'Lorena Vieira dos Santos', '45998654552', '200.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `curso` varchar(20) CHARACTER SET utf8 NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `cpf` varchar(12) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id`, `curso`, `preco`, `cpf`) VALUES
(75, 'guitarra', '100.00', '24983154699'),
(76, 'bateria', '100.00', '24983154699'),
(77, 'piano', '115.00', '28947556411'),
(78, 'tÃ©cnica vocal', '110.00', '46658716644'),
(79, 'baixo', '100.00', '56748496512'),
(80, 'violÃ£o', '90.00', '36854574169'),
(81, 'guitarra', '100.00', '28947556411');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modalidade`
--

CREATE TABLE `modalidade` (
  `id` int(11) NOT NULL,
  `curso` varchar(20) CHARACTER SET utf8 NOT NULL,
  `precoatual` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `modalidade`
--

INSERT INTO `modalidade` (`id`, `curso`, `precoatual`) VALUES
(10, 'guitarra', '100.00'),
(11, 'bateria', '100.00'),
(12, 'tÃ©cnica vocal', '110.00'),
(13, 'piano', '115.00'),
(14, 'violÃ£o', '90.00'),
(15, 'baixo', '100.00'),
(16, 'teclado', '100.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `modalidade`
--
ALTER TABLE `modalidade`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de tabela `modalidade`
--
ALTER TABLE `modalidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
