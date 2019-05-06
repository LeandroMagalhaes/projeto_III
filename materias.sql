-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Maio-2018 às 16:16
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `materias1.1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alternativa`
--

CREATE TABLE `alternativa` (
  `cod_alternativa` int(11) NOT NULL,
  `cod_questoes` int(11) NOT NULL,
  `alternativas` varchar(50) NOT NULL,
  `correta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `cod_curso` int(11) DEFAULT NULL,
  `cod_rst` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `cod_curso` int(11) NOT NULL,
  `nome_curso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursomateria`
--

CREATE TABLE `cursomateria` (
  `cod_materia` int(11) DEFAULT NULL,
  `cod_curso` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `cod_materia` int(11) NOT NULL,
  `nome_materia` varchar(50) DEFAULT NULL,
  `carga_horaria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiaprova`
--

CREATE TABLE `materiaprova` (
  `cod_materia` int(11) DEFAULT NULL,
  `cod_prova` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prova`
--

CREATE TABLE `prova` (
  `cod_prova` int(11) NOT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `qtd_questoes` int(11) DEFAULT NULL,
  `materia` varchar(50) DEFAULT NULL,
  `nivel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `provaquestoes`
--

CREATE TABLE `provaquestoes` (
  `cod_questoes` int(11) DEFAULT NULL,
  `cod_prova` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE `questoes` (
  `cod_questoes` int(11) NOT NULL,
  `curso` varchar(50) DEFAULT NULL,
  `materia` varchar(50) NOT NULL,
  `questao` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoesalternativa`
--

CREATE TABLE `questoesalternativa` (
  `cod_questoes` int(11) DEFAULT NULL,
  `cod_alternativa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `respostas`
--

CREATE TABLE `respostas` (
  `cod_resposta` int(11) NOT NULL,
  `cod_prova` int(11) DEFAULT NULL,
  `cod_aluno` int(11) DEFAULT NULL,
  `resp_aluno` varchar(5) DEFAULT NULL
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
-- Indexes for dumped tables
--

--
-- Indexes for table `alternativa`
--
ALTER TABLE `alternativa`
  ADD PRIMARY KEY (`cod_alternativa`);

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`cod_aluno`),
  ADD KEY `cod_rst` (`cod_rst`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indexes for table `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cod_curso`);

--
-- Indexes for table `cursomateria`
--
ALTER TABLE `cursomateria`
  ADD KEY `cod_materia` (`cod_materia`),
  ADD KEY `cod_curso` (`cod_curso`);

--
-- Indexes for table `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`cod_materia`);

--
-- Indexes for table `materiaprova`
--
ALTER TABLE `materiaprova`
  ADD KEY `cod_materia` (`cod_materia`),
  ADD KEY `cod_prova` (`cod_prova`);

--
-- Indexes for table `prova`
--
ALTER TABLE `prova`
  ADD PRIMARY KEY (`cod_prova`);

--
-- Indexes for table `provaquestoes`
--
ALTER TABLE `provaquestoes`
  ADD KEY `cod_questoes` (`cod_questoes`);

--
-- Indexes for table `questoes`
--
ALTER TABLE `questoes`
  ADD PRIMARY KEY (`cod_questoes`);

--
-- Indexes for table `questoesalternativa`
--
ALTER TABLE `questoesalternativa`
  ADD KEY `cod_questoes` (`cod_questoes`),
  ADD KEY `cod_alternativa` (`cod_alternativa`);


--
-- Indexes for table `respostas`
--
ALTER TABLE `respostas`
  ADD PRIMARY KEY (`cod_resposta`);

  
--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cod_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternativa`
--
ALTER TABLE `alternativa`
  MODIFY `cod_alternativa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `cod_aluno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `curso`
--
ALTER TABLE `curso`
  MODIFY `cod_curso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `materia`
--
ALTER TABLE `materia`
  MODIFY `cod_materia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prova`
--
ALTER TABLE `prova`
  MODIFY `cod_prova` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questoes`
--
ALTER TABLE `questoes`
  MODIFY `cod_questoes` int(11) NOT NULL AUTO_INCREMENT;

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

--
-- Limitadores para a tabela `cursomateria`
--
ALTER TABLE `cursomateria`
  ADD CONSTRAINT `cursomateria_ibfk_1` FOREIGN KEY (`cod_materia`) REFERENCES `materia` (`cod_materia`),
  ADD CONSTRAINT `cursomateria_ibfk_2` FOREIGN KEY (`cod_curso`) REFERENCES `curso` (`cod_curso`);

--
-- Limitadores para a tabela `materiaprova`
--
ALTER TABLE `materiaprova`
  ADD CONSTRAINT `materiaprova_ibfk_1` FOREIGN KEY (`cod_materia`) REFERENCES `materia` (`cod_materia`),
  ADD CONSTRAINT `materiaprova_ibfk_2` FOREIGN KEY (`cod_prova`) REFERENCES `prova` (`cod_prova`);

--
-- Limitadores para a tabela `provaquestoes`
--
ALTER TABLE `provaquestoes`
  ADD CONSTRAINT `provaquestoes_ibfk_1` FOREIGN KEY (`cod_questoes`) REFERENCES `questoes` (`cod_questoes`);

--
-- Limitadores para a tabela `questoesalternativa`
--
ALTER TABLE `questoesalternativa`
  ADD CONSTRAINT `questoesalternativa_ibfk_1` FOREIGN KEY (`cod_questoes`) REFERENCES `questoes` (`cod_questoes`),
  ADD CONSTRAINT `questoesalternativa_ibfk_2` FOREIGN KEY (`cod_alternativa`) REFERENCES `alternativa` (`cod_alternativa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
