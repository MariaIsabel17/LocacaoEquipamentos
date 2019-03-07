-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 28-Fev-2019 às 15:36
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcpf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE `equipamento` (
  `id_equipamento` int(100) NOT NULL,
  `nome_equipamento` varchar(100) NOT NULL,
  `foto_equipamento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id_equipamento`, `nome_equipamento`, `foto_equipamento`) VALUES
(0, 'TV 01', 'tv01.jpg'),
(1, 'cabo hdmi 01', 'cabohdmi.jpg'),
(2, 'cabo rj45 01', 'caborj45.jpg'),
(3, 'cabo usb 01', 'cabousb.jpg'),
(4, 'datashow  01', 'datashow01.jpg'),
(5, 'datashow  02', 'datashow02.jpg'),
(6, 'datashow  03', 'datashow03.jpg'),
(7, 'datashow  04', 'datashow04.jpg'),
(8, 'datashow  05', 'datashow05.jpg'),
(9, 'Notebook 01', 'notebook01.jpg'),
(10, 'Notebook 02', 'notebook02.jpg'),
(11, 'Notebook 03', 'notebook03.jpg'),
(12, 'Notebook 04', 'notebook04.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `espaco`
--

CREATE TABLE `espaco` (
  `id_espaco` int(100) NOT NULL,
  `nome_espaco` varchar(100) NOT NULL,
  `foto_espaco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `espaco`
--

INSERT INTO `espaco` (`id_espaco`, `nome_espaco`, `foto_espaco`) VALUES
(1, 'lab. informatica', 'laboratoriodeinformatica.jpg'),
(2, 'lab. quimica', 'laboratoriodequimica.jpg'),
(3, 'lab. fisica', 'laboratoriodefisica.jpg'),
(4, 'lab. biologia', 'laboratoriodebiologia.jpg'),
(6, 'quadra', 'quadra.jpg'),
(7, 'sala de danca', 'saladedanca.jpg'),
(10, 'sala de teatro', 'saladeteatro.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id_professor` int(100) NOT NULL,
  `nome_professor` varchar(100) NOT NULL,
  `email_professor` varchar(100) NOT NULL,
  `senha_professor` varchar(100) NOT NULL,
  `foto_professor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id_professor`, `nome_professor`, `email_professor`, `senha_professor`, `foto_professor`) VALUES
(123, 'francisco manoel carvalho', '123', '123', 'manoel.png'),
(345, 'francisco vanderly de oliveira', '456', '456', 'vanderly.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

CREATE TABLE `reservas` (
  `id_reserva` int(100) NOT NULL,
  `id_professor` varchar(100) NOT NULL,
  `id_equipamento` varchar(100) NOT NULL,
  `data_reserva` varchar(100) NOT NULL,
  `aula_reserva` varchar(100) NOT NULL,
  `tipo_reserva` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reservas`
--

INSERT INTO `reservas` (`id_reserva`, `id_professor`, `id_equipamento`, `data_reserva`, `aula_reserva`, `tipo_reserva`) VALUES
(237, '123', '1', '2019-02-28', '2', 'espaco'),
(238, '123', '1', '2019-02-28', '3', 'espaco'),
(245, '123', '1', '2019-02-28', '1', 'espaco'),
(246, '123', '1', '2019-02-28', '4', 'espaco'),
(247, '123', '1', '2019-02-28', '5', 'espaco'),
(248, '123', '1', '2019-02-28', '6', 'espaco'),
(249, '123', '1', '2019-02-28', '7', 'espaco'),
(250, '123', '1', '2019-02-28', '8', 'espaco'),
(251, '123', '1', '2019-02-28', '9', 'espaco'),
(252, '123', '3', '2019-02-28', '1', 'espaco'),
(253, '123', '3', '2019-02-28', '2', 'espaco'),
(254, '123', '3', '2019-02-28', '3', 'espaco'),
(255, '123', '3', '2019-02-28', '4', 'espaco'),
(256, '123', '3', '2019-02-28', '5', 'espaco'),
(258, '123', '3', '2019-02-28', '7', 'espaco'),
(259, '123', '3', '2019-02-28', '8', 'espaco'),
(260, '123', '3', '2019-02-28', '9', 'espaco'),
(261, '345', '2', '2019-02-28', '1', 'espaco'),
(263, '345', '2', '2019-02-28', '3', 'espaco'),
(264, '345', '2', '2019-02-28', '5', 'espaco'),
(265, '345', '2', '2019-02-28', '7', 'espaco'),
(266, '345', '2', '2019-02-28', '9', 'espaco');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipamento`
--
ALTER TABLE `equipamento`
  ADD PRIMARY KEY (`id_equipamento`);

--
-- Indexes for table `espaco`
--
ALTER TABLE `espaco`
  ADD PRIMARY KEY (`id_espaco`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id_professor`);

--
-- Indexes for table `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id_reserva`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id_professor` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=346;

--
-- AUTO_INCREMENT for table `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id_reserva` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
