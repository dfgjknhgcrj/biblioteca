-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2025 às 13:10
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `serie` varchar(5) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `serie`, `email`) VALUES
(1, 'henry', '3d', 'henry@gmai.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `emprestimos`
--

CREATE TABLE `emprestimos` (
  `id` int(11) NOT NULL,
  `aluno_id` int(30) NOT NULL,
  `professor_id` int(11) NOT NULL,
  `livro_id` int(11) NOT NULL,
  `data_retirada` date NOT NULL,
  `data_devolucao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `emprestimos`
--

INSERT INTO `emprestimos` (`id`, `aluno_id`, `professor_id`, `livro_id`, `data_retirada`, `data_devolucao`) VALUES
(1, 1, 1, 9, '2025-06-11', '2025-06-27');

-- --------------------------------------------------------

--
-- Estrutura para tabela `livros`
--

CREATE TABLE `livros` (
  `id` int(11) NOT NULL,
  `nome_livro` varchar(35) NOT NULL,
  `nome_autor` varchar(30) NOT NULL,
  `isbn` int(13) NOT NULL,
  `capa` varchar(700) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `livros`
--

INSERT INTO `livros` (`id`, `nome_livro`, `nome_autor`, `isbn`, `capa`) VALUES
(1, 'O Alquimista', 'Paulo Coelho', 978, NULL),
(9, 'Sobrevivendo no inferno', 'Racionais MC&#39;s', 0, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `professor`
--

INSERT INTO `professor` (`id`, `nome`, `cpf`, `senha`, `email`) VALUES
(1, 'henry', '2147483647', '$2y$10$vUcLXCJ13mdTuwqN1K7T5essF', 'henry@gmai.com'),
(2, 'henry', '2147483647', '$2y$10$ISz7dGWbyRbji9LZKv/ApO4eW', 'henry@gmai.com'),
(3, 'henry', '2147483647', '$2y$10$kDBmsBoUXq9/Jx0TYpu55OXg6', 'henry@gmai.com'),
(4, 'henry', '2147483647', '$2y$10$eAIjTm3sfwWQIeKg0BKxTOi13', 'henry@gmai.com'),
(5, 'henry', '2147483647', '$2y$10$jK7pqiYN1cRMmOz5QwLtYO/g5', 'henry@gmai.com'),
(6, 'henry', '2147483647', '$2y$10$xrOMp9FVFIXFSRgH1WP6cunQo', 'henry@gmai.com'),
(7, 'henry', '2147483647', '$2y$10$ITqJGBl9MaRvFkM3xnZhEeeiM', 'henry@gmai.com'),
(8, 'henry', '2147483647', '$2y$10$DfkFRAVjRlL5vqUzC.O9DOK6u', 'henry@gmai.com'),
(9, 'henry', '2147483647', '$2y$10$.KliofMQHOgtjOqPxfmhFuym9', 'henry@gmai.com'),
(10, 'henry666', '2147483647', '$2y$10$lqxCzlPefruXp1L.XWC0fOGOR', 'henry@gmai.com'),
(11, 'henry', '2147483647', '$2y$10$z5zkrSus01hsTs1/m8ztnuEtC', 'henry@gmai.com'),
(12, 'henry', '2147483647', '$2y$10$27K7fECOZrtlgjJYx7hpdOQBm', 'henry@gmai.com'),
(13, 'henry', '2147483647', '$2y$10$JetHwXExJFsvIwuMKpE2O.oFg', 'henry@gmai.com'),
(14, 'Fernando', '2147483647', '$2y$10$w2rjV6lEli.MvS.Zwff7Su.qd', 'henry@gmai.com'),
(15, 'henry', '21', '$2y$10$xaAGMnAZ0z14Sf8fM.Y/f.7vQ', 'gabrielhenry623@gmail.com'),
(16, 'henry', '2147483647', '$2y$10$AKg9vNkXVCLxmTBeV1ji5OTR6', 'henry@gmai.com'),
(17, 'henry', '2147483647', '$2y$10$KCRaCyJiokaIaZ28B8a1huYOH', 'henry@gmai.com'),
(18, 'henry', '2147483647', '$2y$10$7WLq0VnavBsXtBMI1IFW.Ou.G', 'gabrielhenry623@gmail.com'),
(19, 'henry', '2147483647', '$2y$10$LIg9VgVsxEVpcHI9SCwAzuKg4', 'gabrielhenry623@gmail.com'),
(20, 'professor11', '2147483647', '$2y$10$u8vZKXb6C4DdfIdc9r66seoUQ', 'preofgdvgrh@sbfgjhsb');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_aluno_id` (`aluno_id`),
  ADD KEY `fk_livro_id` (`livro_id`),
  ADD KEY `fk_professor_id` (`professor_id`);

--
-- Índices de tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `emprestimos`
--
ALTER TABLE `emprestimos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `emprestimos`
--
ALTER TABLE `emprestimos`
  ADD CONSTRAINT `fk_aluno_id` FOREIGN KEY (`aluno_id`) REFERENCES `alunos` (`id`),
  ADD CONSTRAINT `fk_livro_id` FOREIGN KEY (`livro_id`) REFERENCES `livros` (`id`),
  ADD CONSTRAINT `fk_professor_id` FOREIGN KEY (`professor_id`) REFERENCES `professor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
