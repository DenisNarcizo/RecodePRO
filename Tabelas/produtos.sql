-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2020 às 03:00
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fullstack_eletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `descricao` varchar(70) NOT NULL,
  `preco_venda` double NOT NULL,
  `nome_imagem` varchar(45) NOT NULL,
  `preco_normal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nome`, `descricao`, `preco_venda`, `nome_imagem`, `preco_normal`) VALUES
(1, 'Geladeira Brastemp', 'Geladeira Frost Free Brastemp 540 litros', 5019, 'imagens/Produtos/geladeira_brastemp.PNG', 6389),
(2, 'Geladeira Eleltrolux', 'Geladeira Electrolux Cycle Defrost 362 Litros DC44 Branco - 127V', 1850.5, 'imagens/Produtos/Geladeira_eletrolux.PNG', 2099.5),
(3, 'Geladeira Samsung', 'Geladeira Samsung Family Hub Frost Free', 19000, 'imagens/Produtos/Geladeira_samsung.PNG', 21339),
(4, 'Fogão Brastemp', 'Fogão Brastemp 5 Bocas Inox Com Botões Removíveis', 1199, 'imagens/Produtos/fogão_brastemp.PNG', 1359.99),
(5, 'Fogão Eletrolux', 'Fogão 5 Bocas Electrolux Branco Automático com Tripla Chama', 1099, 'imagens/Produtos/Fogão_eletrolux.JPG', 1299),
(6, 'Forno microondas eletrolux', 'Forno micro-ondas Electrolux Mdiv30 20 litros 220v', 299, 'imagens/Produtos/microondas_eletrolux.JPG', 469.99),
(7, 'Microondas Midea', 'Micro-ondas Midea 20L MTFB21 - Branco', 377.91, 'imagens/Produtos/microondas_midea.JPG', 499),
(8, 'Lavadora Samsung', 'Lavadora Samsung com Motor Digital Inverter', 2294.1, 'imagens/Produtos/lavadora_samsung.JPG', 3899),
(9, 'Lavadora Eletrolux', 'Lavadora Turbo Electrolux 17 Kg Branca', 1709.05, 'imagens/Produtos/lavadora_eletrolux.JPG', 1799),
(10, 'Microondas Philco', 'Micro-ondas Philco Pmo21', 399.99, 'imagens/Produtos/microondas_philco.JPG', 429.99),
(11, 'Lava louças Brastemp', 'Lava Louça Compacta 8 Serviços Branca - 127V Brastemp', 1599, 'imagens/Produtos/louca_brastemp.JPG', 1699.99),
(12, 'Lava louças Eletrolux', 'Lava Louças Inox 10 Serviços (LV10X) - 220V', 3134.05, 'imagens/Produtos/loucas_eletrolux.png', 3999);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
