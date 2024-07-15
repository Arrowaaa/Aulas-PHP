-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12/07/2024 às 22:09
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
-- Banco de dados: `bd_perfil`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `t_perfil`
--

CREATE TABLE `t_perfil` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `profissao` varchar(60) NOT NULL,
  `descricao` varchar(400) NOT NULL,
  `instagram` varchar(300) NOT NULL,
  `twitter` varchar(300) NOT NULL,
  `facebook` varchar(300) NOT NULL,
  `linkedin` varchar(300) NOT NULL,
  `youtube` varchar(300) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `fundo` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `t_perfil`
--

INSERT INTO `t_perfil` (`id`, `nome`, `profissao`, `descricao`, `instagram`, `twitter`, `facebook`, `linkedin`, `youtube`, `senha`, `foto`, `fundo`, `email`) VALUES
(3, 'Luke Skywalker', 'Jedi', 'Luke Skywalker é o protagonista da trilogia original da série Star Wars, faz participação em Star Wars: O Despertar da Força em Star Wars: Os Últimos Jedi. É interpretado pelo ator norte-americano Mark Hamill.', '', '', 'https://www.facebook.com/LukeSkywalkerOfStarWars/', 'https://www.linkedin.com/uas/login-submit', 'https://www.youtube.com/watch?v=IPBevIAv3Zo', 'e10adc3949ba59abbe56e057f20f883e', '1677887999.jpg', 'img/fundo1.jpg', 'vagnerinfo@yahoo.com.br'),
(9, 'Yoda', 'Jedi', 'Medindo 76 centímetros de altura, Yoda é um membro de uma espécie de nome desconhecido. Ele foi o Grão Mestre da Ordem Jedi durante as Guerras Clônicas, um dos membros mais importantes do Alto Conselho Jedi nos últimos dias da República Galáctica, e um dos mais sábios e poderosos Jedi de todos os tempos. Tendo vivido por muito tempo (veio a falecer com aprox. 900 anos de idade).', 'https://www.instagram.com/babyyoda.official/', '', '', '', 'https://www.youtube.com/watch?v=bfmKtxZiB6I', 'e10adc3949ba59abbe56e057f20f883e', '1677888732.png', 'img/fundo3.jpg', 'vagner@yahoo.com.br'),
(10, 'Batman', 'Justiceiro', 'Enquanto Bruce Wayne é despreocupado e irresponsável, Batman é frio, determinado e implacável. Além do uniforme e da personalidade, Bruce Wayne também altera sua voz significativamente quando torna-se Batman, tanto para disfarçar como para intimidar.', '', '', '', '', '', '123456', '1720698123.jpg', 'img/fundo2.jpg', 'vagnerinfo@yahoo.com.br'),
(11, 'Lanterna Verde', 'Policial Galatico', 'A principal fonte de poder do Lanterna Verde é um Anel do Poder. Também conhecido como a arma mais poderosa do universo DC, ele funciona à base de força de vontade e imaginação. Quando ativado, o anel é capaz de gerar um campo de força que oferece várias habilidades a seu portador. Dessa maneira, o Lanterna é capaz de voar, ficar sob a água', '', '', '', '', '', '123', '1720811725.jpg', 'img/fundo2.jpg', '123@yahoo.com.br');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `t_perfil`
--
ALTER TABLE `t_perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
