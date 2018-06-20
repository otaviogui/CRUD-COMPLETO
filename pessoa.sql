-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 20-Jun-2018 às 20:42
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pessoa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `boot`
--

DROP TABLE IF EXISTS `boot`;
CREATE TABLE IF NOT EXISTS `boot` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  `rg` varchar(30) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `boot`
--

INSERT INTO `boot` (`id`, `nome`, `sobrenome`, `rg`, `cpf`) VALUES
(19, 'Otaviog', 'Guilherme', '52284118-1', '47305189855'),
(20, 'sdisjij', 'I', 'JIJSIOJIOJ', 'IJDIJDISJ'),
(3, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(5, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(6, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(7, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(8, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(9, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(10, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(11, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(12, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(13, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(14, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(15, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(16, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(17, 'amanda ferreira', 'dos santos', '56872684296', '255585-582'),
(18, 'amanda ferreira', 'dos santos', '56872684296', '255585-582');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

DROP TABLE IF EXISTS `dados`;
CREATE TABLE IF NOT EXISTS `dados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `sobrenome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `nome`, `sobrenome`) VALUES
(11, 'isabelaaaaaa maravilhosa', 'lindaaaaa'),
(7, 'gabriel abriel', 'vagabundoo'),
(12, 'Antoniooo ', 'mauricio');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `usuario`, `senha`) VALUES
(4, 'jsajsj', 'isjaijs'),
(5, NULL, NULL),
(6, 'guilherme ', 'freeea'),
(7, 'otaviooooo', 'hsauhsu'),
(8, 'otavioooooajaj', 'hsauhsu'),
(9, 'otavioooooajaj', 'hsauhsu'),
(10, 'dfefwe', 'feef'),
(11, 'dfefwe', 'feef'),
(12, 'dfefwe', 'feef'),
(13, 'ferrreira', 'fezzzaaa'),
(15, 'cad', 'kkkk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
