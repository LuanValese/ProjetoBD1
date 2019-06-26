-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jun-2019 às 17:20
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
  `mensalidade` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `cpf`, `nome`, `telefone`, `mensalidade`) VALUES
(46, '46948498833', 'Luan Henrique de Castro Valese', '44991140744', '200.00'),
(47, '06044254810', 'Vinicius OtÃ¡vio Rafael Monteiro', '4898645527', '110.00'),
(48, '02179932812', 'Eduarda Olivia Brenda da Mota', '11985743500', '210.00'),
(49, '53700146809', 'Yasmin Vanessa Emilly Drumond', '45984073161', '110.00'),
(50, '46948498833', 'JoÃ£o Gustavo Thiago Souza', '11984058266', '90.00'),
(51, '39170652821', 'AlÃ­cia Rafaela Corte Real', '17995227777', '125.00'),
(52, '1087203731', 'Ian Bento Erick Rocha', '41994325053', '110.00'),
(53, '03247597891', 'Josefa Aline Lara Brito', '11987180756', '110.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `CPF` varchar(12) CHARACTER SET utf8 NOT NULL,
  `modalidade` varchar(20) CHARACTER SET utf8 NOT NULL,
  `mensalidade` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `matricula`
--

INSERT INTO `matricula` (`id`, `nome`, `CPF`, `modalidade`, `mensalidade`) VALUES
(8, 'Luan Henrique de Castro Valese', '46948498833', 'tÃ©cnica vocal', '110.00'),
(9, 'Luan Henrique de Castro Valese', '46948498833', 'violÃ£o', '90.00'),
(10, 'Vinicius OtÃ¡vio Rafael Monteiro', '06044254810', 'guitarra', '110.00'),
(11, 'Eduarda Olivia Brenda da Mota', '02179932812', 'teclado', '100.00'),
(12, 'Eduarda Olivia Brenda da Mota', '46948498833', 'baixo', '110.00'),
(13, 'Yasmin Vanessa Emilly Drumond', '53700146809', 'bateria', '110.00'),
(14, 'JoÃ£o Gustavo Thiago Souza', '46476217828', 'violÃ£o', '90.00'),
(15, 'AlÃ­cia Rafaela Corte Real', '39170652821', 'piano', '125.00'),
(16, 'Ian Bento Erick Rocha', '1087203731', 'guitarra', '110.00'),
(17, 'Josefa Aline Lara Brito', '03247597891', 'tÃ©cnica vocal', '110.00');

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
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
