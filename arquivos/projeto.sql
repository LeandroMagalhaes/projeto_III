-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Maio-2019 às 00:08
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cod_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(100) DEFAULT NULL,
  `sexo` varchar(10) NOT NULL,
  `data_nascimento` varchar(10) DEFAULT NULL,
  `registro` varchar(10) NOT NULL,
  `data_matricula` varchar(10) DEFAULT NULL,
  `cod_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`cod_aluno`, `nome_aluno`, `sexo`, `data_nascimento`, `registro`, `data_matricula`, `cod_curso`) VALUES
(1, 'Jose', '1', '2000-01-01', '1', '2018-01-01', 2),
(2, 'Maria', '2', '2001-01-02', '2', '2018-01-04', 1),
(3, 'Pedro', '1', '1999-01-01', '3', '2017-01-01', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome_curso` varchar(50) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL,
  `qtd_periodo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`cod_curso`, `nome_curso`, `carga_horaria`, `qtd_periodo`) VALUES
(1, 'AdministraÃ§Ã£o', 2500, 2),
(2, 'Direito', 3000, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso_periodo`
--

CREATE TABLE `curso_periodo` (
  `cod_periodo` int(11) NOT NULL,
  `num_periodo` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso_periodo`
--

INSERT INTO `curso_periodo` (`cod_periodo`, `num_periodo`, `cod_curso`) VALUES
(5, 1, 2),
(6, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 1, 1),
(10, 2, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `grade`
--

CREATE TABLE `grade` (
  `cod_materia` int(11) DEFAULT NULL,
  `cod_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `grade`
--

INSERT INTO `grade` (`cod_materia`, `cod_curso`) VALUES
(1, 1),
(2, 1),
(3, 1),
(3, 2),
(2, 2),
(5, 2),
(2, 3),
(3, 3),
(4, 3),
(1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `cod_materia` int(11) NOT NULL,
  `nome_materia` varchar(50) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`cod_materia`, `nome_materia`, `carga_horaria`) VALUES
(1, 'Ã‰tica', 80),
(2, 'PortuguÃªs', 80),
(3, 'MatemÃ¡tica', 80),
(4, 'Banco de Dados', 80),
(5, 'ComunicaÃ§Ã£o Empresarial', 80),
(6, 'Fundamentos de Sistemas de InformaÃ§Ã£o', 80);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo_materia`
--

CREATE TABLE `periodo_materia` (
  `num_periodo` int(11) NOT NULL,
  `cod_curso` int(11) NOT NULL,
  `cod_materia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cod_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `senha_usuario` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod_usuario`, `nome_usuario`, `senha_usuario`) VALUES
(1, 'Leo', '111'),
(2, 'Leo', '111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cod_aluno`),
  ADD KEY `aluno_ibfk_2` (`cod_curso`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `curso_periodo`
--
ALTER TABLE `curso_periodo`
  ADD PRIMARY KEY (`cod_periodo`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD KEY `cod_materia` (`cod_materia`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`cod_materia`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `curso_periodo`
--
ALTER TABLE `curso_periodo`
  MODIFY `cod_periodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `cod_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `cod_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `aluno`
--
ALTER TABLE `aluno`
  ADD CONSTRAINT `aluno_ibfk_2` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`cod_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
