-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Set-2018 às 00:21
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
-- Database: `asvinici_sindojusac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `addressid` int(11) NOT NULL AUTO_INCREMENT,
  `useraddress` int(11) NOT NULL,
  `street` varchar(50) NOT NULL,
  `number` varchar(10) NOT NULL,
  `district` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL,
  `ref` text NOT NULL,
  PRIMARY KEY (`addressid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) COLLATE utf8_bin NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_bin NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `news` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `emailauthor` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `covenants`
--

CREATE TABLE IF NOT EXISTS `covenants` (
  `covenantsid` int(11) NOT NULL AUTO_INCREMENT,
  `company` varchar(50) NOT NULL,
  `covenantdescription` text NOT NULL,
  `covenantmain` varchar(50) NOT NULL,
  `covenantmini` varchar(50) NOT NULL,
  `signaturedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`covenantsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `photoid` int(11) NOT NULL AUTO_INCREMENT,
  `phototitle` varchar(50) NOT NULL,
  `photodate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `photoaddress` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`photoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) NOT NULL,
  `title` varchar(255) NOT NULL,
  `abstract` text NOT NULL,
  `content` text NOT NULL,
  `main` varchar(50) NOT NULL,
  `thumb` varchar(50) NOT NULL,
  `internal` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `officer`
--

CREATE TABLE IF NOT EXISTS `officer` (
  `officerid` int(11) NOT NULL AUTO_INCREMENT,
  `userofficer` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `homestate` varchar(50) NOT NULL,
  `hometown` varchar(50) NOT NULL,
  `birth` date NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `rg` varchar(11) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `schooling` varchar(50) NOT NULL,
  `voterstitle` varchar(20) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `registration` varchar(15) NOT NULL,
  `office` varchar(50) NOT NULL,
  `crowd` varchar(20) NOT NULL,
  `county` varchar(20) NOT NULL,
  `trustpos` tinyint(4) NOT NULL,
  PRIMARY KEY (`officerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `partnerships`
--

CREATE TABLE IF NOT EXISTS `partnerships` (
  `partnershipsid` int(11) NOT NULL AUTO_INCREMENT,
  `partnername` varchar(50) NOT NULL,
  `partnerdescription` text NOT NULL,
  `partnermain` varchar(50) NOT NULL,
  `partnermini` varchar(50) NOT NULL,
  `signaturedate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`partnershipsid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `phoneid` int(11) NOT NULL AUTO_INCREMENT,
  `userphone` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  PRIMARY KEY (`phoneid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
