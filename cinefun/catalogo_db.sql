-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Dez-2021 às 00:35
-- Versão do servidor: 5.7.36-log
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `catalogo_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes_tb`
--

CREATE TABLE `filmes_tb` (
  `id_filme` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `classificacao` varchar(5) NOT NULL,
  `ano_de_lancamento` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filmes_tb`
--

INSERT INTO `filmes_tb` (`id_filme`, `titulo`, `genero`, `classificacao`, `ano_de_lancamento`) VALUES
(7, 'Eu Sou A Lenda', 'FicÃ§Ã£o cientÃ­fica/Terror', '16', 2007),
(8, 'Senhor dos Aneis - A Sociedade do Anel', 'Fantasia/Aventura', '12', 2001),
(13, 'Taxi Driver', 'Drama', '14', 1976),
(14, 'O Iluminado', 'Terror/MistÃ©rio', '14', 1980),
(15, 'O Lobo de Wall Street', 'Drama/Humor Ã¡cido', '18', 2013),
(18, 'Os IncrÃ­veis', 'Infantil/ComÃ©dia', 'Livre', 2004),
(19, 'Homem-Aranha no Aranhaverso', 'Infantil/AÃ§Ã£o', '12', 2018),
(20, 'Gladiador', 'AÃ§Ã£o/Aventura', '16', 2000),
(21, 'Onde os Fracos NÃ£o TÃªm Vez', 'Crime/Faroeste', '16', 2007),
(22, 'Forrest Gump - O Contador de HistÃ³rias', 'Drama/Romance', '14', 1994),
(23, 'Titanic', 'Romance/Drama', '12', 1997),
(24, 'Rocky: Um Lutador', 'Esporte/Drama', '12', 1976),
(25, 'O Poderoso ChefÃ£o', 'Crime/Drama', '14', 1972);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_tb`
--

CREATE TABLE `usuarios_tb` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios_tb`
--

INSERT INTO `usuarios_tb` (`id_usuario`, `usuario`, `senha`) VALUES
(1, 'admin', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `filmes_tb`
--
ALTER TABLE `filmes_tb`
  ADD PRIMARY KEY (`id_filme`);

--
-- Índices para tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes_tb`
--
ALTER TABLE `filmes_tb`
  MODIFY `id_filme` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios_tb`
--
ALTER TABLE `usuarios_tb`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
