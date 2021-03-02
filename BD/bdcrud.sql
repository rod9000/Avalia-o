-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2021 às 12:26
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdcrud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `clientes_id` int(11) NOT NULL,
  `cl_nome` varchar(50) NOT NULL,
  `cl_cpf` int(15) NOT NULL,
  `cl_endereco` varchar(50) NOT NULL,
  `cl_email` varchar(20) NOT NULL,
  `cl_datadenascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`clientes_id`, `cl_nome`, `cl_cpf`, `cl_endereco`, `cl_email`, `cl_datadenascimento`) VALUES
(3, 'teste', 12313123, 'teste', 'teste@teste.com', '1233-03-12'),
(6, 'rodrigo2', 123456, '123456', '123456@123456.com', '1222-02-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `pedidos_id` int(11) NOT NULL,
  `pdd_cliente` varchar(50) NOT NULL,
  `pdd_produtos` varchar(50) NOT NULL,
  `pdd_valor` decimal(10,3) NOT NULL,
  `pdd_quantitade` int(15) NOT NULL,
  `pdd_total` decimal(10,2) NOT NULL,
  `pdd_datadecadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`pedidos_id`, `pdd_cliente`, `pdd_produtos`, `pdd_valor`, `pdd_quantitade`, `pdd_total`, `pdd_datadecadastro`) VALUES
(5, 'Rodrigo', 'colher de prata', '15.000', 2, '30.00', '1111-11-11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `produtos_id` int(11) NOT NULL,
  `pd_nome` varchar(50) NOT NULL,
  `pd_codigodebarras` int(50) NOT NULL,
  `pd_descricao` varchar(200) NOT NULL,
  `pd_valor` decimal(10,2) NOT NULL,
  `pd_quantidade` int(11) NOT NULL,
  `pd_datadecadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`produtos_id`, `pd_nome`, `pd_codigodebarras`, `pd_descricao`, `pd_valor`, `pd_quantidade`, `pd_datadecadastro`) VALUES
(1, 'colher de prata', 123456789, 'colher de prata', '12.99', 12, '1212-12-22'),
(4, 'prato azul', 123388821, 'prato azul', '12.80', 12, '2021-02-03'),
(5, 'caneta azul', 2147483647, 'caneta azul', '1.50', 20, '2021-02-03'),
(6, 'caneta preta', 2147483647, 'caneta preta', '1.50', 20, '2021-02-05'),
(10, 'caneta luxuosa', 1233399921, 'caneta de luxo bicmaster', '1220.20', 15, '2000-12-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_login` varchar(30) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `user_full_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `password_hash`, `user_full_name`, `user_email`) VALUES
(1, 'admin', '$2y$10$mjs0xu0h6aeh7ynUVyBryOjwS/pRYrr72xNKPD3/PXkJfGKHQ0r62', 'Udemy', 'admin@domain.com'),
(3, 'admin1', '$2y$10$P7qAMIbfAygz9B6pTKeD7.PvhwBpZQFpL9RTNOAP6GtHE8V/HPCGi', 'admin1', 'admin1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`clientes_id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`pedidos_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`produtos_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `clientes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `pedidos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `produtos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
