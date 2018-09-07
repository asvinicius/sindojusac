-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Set-2018 às 20:46
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

--
-- Extraindo dados da tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('bhg612bl2oiuejlelj4oerq7uq1t0750', '192.168.0.14', 1536078104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363037383130343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('dmk557c1ui67snok0e5e8a1f47ehmbas', '192.168.0.14', 1536078510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363037383531303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('qtn7s2d8nm8i3l7qiac4vdacqq0a58u1', '192.168.0.14', 1536078907, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363037383930373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('3rljftpru2sp5oorplcola3mi57qqqv2', '192.168.0.14', 1536079236, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363037393233363b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('69v18mokqke7gs1kt9tbafkpm3eun059', '192.168.0.14', 1536079726, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363037393732363b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('5e0m1iak0tph9ip7o5h14ea02ra3jq3f', '192.168.0.14', 1536080504, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038303530343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('spu7pjrq9e592rp4nrmu8hoj5vp2c2q0', '192.168.0.14', 1536081387, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038313338373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('9grgpu7mc4on9a4j8nekngsrftj8chmh', '192.168.0.14', 1536081913, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038313931333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('jooffge6cdep476rgvb4n41pmmcf9dj5', '192.168.0.14', 1536082542, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038323534323b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('rhbdit41vucc1q4gjh2ked7lic2e7co9', '192.168.0.14', 1536083246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038333234363b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('l2p4dlhk2cc1l4rqmj7cg8md32n5r1rf', '192.168.0.14', 1536083635, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038333633353b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('ngoti56mc1n7ea4pno8cflo04nlucv90', '192.168.0.14', 1536083951, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038333935313b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('2mouvsebgv0dom9l034dh87tc117rtq4', '192.168.0.14', 1536087055, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363038373035353b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('5kac8p0fmn6n522i2so7tvmgp4umff2l', '192.168.0.14', 1536093206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039333230363b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('1669ju2ln44kphc07st8n0v00qcoai09', '192.168.0.14', 1536093804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039333830343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('7ot8knju7707pe65thvff7g5bf6i1eri', '192.168.0.14', 1536094138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039343133383b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('hp3985bqov199k49aq8oqj7vgnvuluor', '192.168.0.14', 1536098417, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039383431373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('n7hhj29ltk1di7n4rdf85b57da7qcrf5', '192.168.0.14', 1536098773, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039383737333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('tciaq5g8ucjojsmm7oi6qnmbnmu4cp8j', '192.168.0.14', 1536099654, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039393635343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('43488s1san44sllfu6ie2a59md74tduv', '192.168.0.14', 1536099932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363039393635343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('m800m946me7ktrdkqfsbq0uc7ffdc8c7', '192.168.0.14', 1536164194, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136343139343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('pnjg9j8gt5u0k7o0p6rlv2q6aa12kpqf', '192.168.0.14', 1536164522, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136343532323b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('lg4nj1ekjcubv9cpti4hvibs2o0khvk6', '192.168.0.14', 1536165143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136353134333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('31ddqdprtbtm7gb3kt7uu753ugpuv1rg', '192.168.0.14', 1536165591, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136353539313b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('dp28p51rq82inb5memkupvs2atnv0nej', '192.168.0.14', 1536167760, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136373736303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('98ovh2leqhfcj2ns0mc2niq05cutou5f', '192.168.0.14', 1536169733, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363136393733333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('rm80j4r35ltv6fov88146g06lu77fnt8', '192.168.0.14', 1536170049, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137303034393b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('4qb0ve22fcefp38rro8tb6c19up0fb37', '192.168.0.14', 1536170831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137303833313b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('irnqtikdmlrgkk3mh2ie9tcica61u93h', '192.168.0.14', 1536171230, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137313233303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('qhbp2hk491akg55b5aakbls22qkm7p22', '192.168.0.14', 1536171540, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137313534303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('tkc6ad4f18kmil7cf8or6n14lr7i3dqg', '192.168.0.14', 1536172023, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137323032333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('rs7lpr5ok63tuq2bns7h8lf2ij7996vr', '192.168.0.14', 1536172427, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137323432373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('dfcetvtk59pc80mhebifvut66d926dcu', '192.168.0.14', 1536172808, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137323830383b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('uaot4b8tc300pt1ilm9vkmq0k3rp4f7l', '192.168.0.14', 1536173207, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137333230373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('o8l4h77mmu8lneohnk3o1jk2f8p7idv7', '192.168.0.14', 1536173509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137333530393b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('50hahh41bq03td6itcqp1d4r7usgnb3p', '192.168.0.14', 1536174580, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137343538303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('ukiaa3bo44veeor9nnt45qllj92nrq8i', '192.168.0.14', 1536174977, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137343937373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('oqjc93ncqlkmge7ctgg7dql9bv91lhj1', '192.168.0.14', 1536175307, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137353330373b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('elftbq9jeqmvugeckm4gm2veh4a3lvvv', '192.168.0.14', 1536175610, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137353631303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('fjm9l683a5sk2s70pqa6rqiura4lejif', '192.168.0.14', 1536175962, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137353936323b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('s0uhkkq8017c5k5dh8lm7g3ps3q7hbc2', '192.168.0.14', 1536178153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137383135333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('9lmk34qa8gl0n0iu5hpavlq7uj6vqp18', '192.168.0.14', 1536179068, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363137393036383b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('jrcrpq2vradgse9iecjjossflg4a3qnj', '192.168.0.14', 1536182719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138323731393b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('fn8bd07t1jg50s0f21q0br3au4609jbc', '192.168.0.14', 1536183334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138333333343b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('amsrgoitelpl2vuu20oekgdmaj5p026f', '192.168.0.14', 1536183738, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138333733383b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('erb4qvdpni0b8thmlu8duhva62ncfhgn', '192.168.0.14', 1536184745, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138343734353b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('8qgumeh4nua4shh4aoufhvvp5rdk6fk4', '192.168.0.14', 1536185753, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138353735333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('tb945n7k2qgsuctitm776lnckp2me4hk', '192.168.0.14', 1536186543, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138363534333b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('26n31ch05n7pmce7kajk9dg3dctsk3m6', '192.168.0.14', 1536186960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138363936303b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('jo8nmkosalse174a6qr3qr4h5fmq529v', '192.168.0.14', 1536187265, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138373236353b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('9gvsn86jjc21agie4lijed8q2dqvhfse', '192.168.0.14', 1536187418, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363138373236353b7573657269647c733a313a2231223b6e616d657c733a32313a2256494e494349555320414e4a4f532053414e544f53223b726f6c657c733a313a2231223b6c6f676765647c623a313b),
('29q8olnufm0b45ca1nfufufu2q8ip6b0', '192.168.0.14', 1536268224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363236383232343b),
('phlhekim6k61a6aitmic4baokla12tuv', '192.168.0.14', 1536268531, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363236383533313b),
('fv6ct3l8ogbaal02sp0spo1aje80las5', '192.168.0.14', 1536269322, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363236393332323b),
('f6olfu6t8shkh9cnki6g4vk0om8p9rk8', '192.168.0.14', 1536270440, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237303434303b),
('gpr3ihc1r1m1329u9ai5gdqg1rr3t1e9', '192.168.0.14', 1536271504, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237313530343b),
('3pbhbmkte2o0fngcn0u62c00hgoh3m72', '192.168.0.14', 1536272358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237323335383b),
('82i5km1urd9k8f83jcjq0gjnha6t1cap', '192.168.0.14', 1536272765, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237323736353b),
('mhfml3a5nh499lkeh5h89vkjbmpnmbu5', '192.168.0.14', 1536273066, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237333036363b),
('n5kh5658v9unh3fof7etre4s83f5vtl7', '192.168.0.14', 1536273365, 0x5f5f63695f6c6173745f726567656e65726174657c693a313533363237333036363b);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comment`
--

INSERT INTO `comment` (`commentid`, `news`, `author`, `emailauthor`, `message`, `date`, `status`) VALUES
(3, 4, 'Vinícius Anjos Santos', 'anjos.vinicius@hotmail.com', 'Que belo teste. Parabéns!', '2018-09-06 22:35:00', 1);

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`newsid`, `type`, `title`, `abstract`, `content`, `main`, `thumb`, `internal`, `date`) VALUES
(1, 1, 'Fundação do SINDOJUS-AC', 'Em 8 de dezembro de 2017, reunidos em Assembleia Geral, os oficiais de Justiça do Acre fundaram o Sindojus-AC (Sindicato dos Oficiais de Justiça do Acre). O objetivo é a representação sindical específica da categoria dos Oficiais de Justiça no Estado do Acre. A Assembleia também elegeu a diretoria e o conselho fiscal da primeira gestão da organização. O primeiro presidente eleito é o oficial de Justiça James Cley Nascimento Borges e para vice foi eleito o oficial de Justiça Cleido Rodrigues da Silva e Silva.', '<p align=\"justify\">\r\n                                    Em 8 de dezembro de 2017, reunidos em Assembleia Geral, \r\n                                    os oficiais de Justiça do Acre fundaram o Sindojus-AC \r\n                                    (Sindicato dos Oficiais de Justiça do Acre). O objetivo \r\n                                    é a representação sindical específica da categoria dos \r\n                                    Oficiais de Justiça no Estado do Acre.\r\n                                    A Assembleia também elegeu a diretoria e o conselho fiscal \r\n                                    da primeira gestão da organização. O primeiro presidente \r\n                                    eleito é o oficial de Justiça James Cley Nascimento Borges \r\n                                    e para vice foi eleito o oficial de Justiça Cleido Rodrigues \r\n                                    da Silva e Silva.\r\n                                </p>', 'bg-1.jpg', 'bg-1.jpg', 'bg-1.jpg', '2018-09-05 18:50:20'),
(2, 1, 'SINDOJUS-AC presente na visita da FOJEBRA à PF', 'Representantes do SINDOJUS-AC estiveram juntos com dirigentes da FOJEBRA em reunião com a Dra. Silvana Borges, Diretora Executiva do DIREX, órgão auxiliar da Polícia Federal, e com o Dr. Tony Gean de Castro, Chefe da Divisão Nacional de Armas (DARM). \r\nO presidente da FOJEBRA, Edvaldo Lima, abriu a reunião apresentando a Federação, seus estados componentes, e fazendo um breve histórico do tema “Porte de Arma para os Oficiais de Justiça”.', '<p align=\"justify\">\r\n                                    Os dirigentes da FOJEBRA estiveram em reunião na terça-feira (13/03), \r\n                                    na parte da tarde, com a Dra. Silvana Borges, Diretora Executiva do DIREX, \r\n                                    órgão auxiliar da Polícia Federal, e com o Dr. Tony Gean de Castro, Chefe da \r\n                                    Divisão Nacional de Armas (DARM).\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    O presidente da FOJEBRA, Edvaldo Lima, abriu a reunião apresentando a Federação, \r\n                                    seus estados componentes, e fazendo um breve histórico do tema “Porte de Arma para \r\n                                    os Oficiais de Justiça”.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Oficiais de Justiça de 14 estados do Brasil estiveram presentes e expuseram as \r\n                                    dificuldades específicas encontradas em suas regiões no cumprimento das ordens \r\n                                    judicias. Os diretores da Polícia Federal afirmaram que a instituição está ciente \r\n                                    dessas dificuldades e salientaram que medidas já estão sendo adotadas pelo órgão, \r\n                                    inclusive o Direx já enviou ofício às superintendências regionais tratando do assunto.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Segundo a Dra. Silvana, a atividade dos Oficiais de Justiça “é uma das tarefas mais \r\n                                    difíceis do Poder Judiciário e entendo que o pedido é justo pela natureza do trabalho \r\n                                    que eu conheço muito bem”. A  delegada acrescentou também que o Diretor Geral da PF, \r\n                                    Dr. Rogério Augusto Viana Galloro, também é sensível ao pedido da categoria.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Já o Chefe da Divisão Nacional de Armas, Dr. Tony, elogiou o dossiê elaborado pela \r\n                                    Federação sobre crimes cometidos contra Oficiais de Justiça e afirmou que o \r\n                                    PLC 30/2007 ainda é o melhor caminho para a conquista do pleito pela categoria, \r\n                                    porque a Polícia Federal não pode suprir o papel do legislador, mas fez o que estava \r\n                                    ao alcance da instituição lançando o Ofício Circular 05/2017 através da DIREX.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Foi discutida, ainda, a possibilidade de alteração na Instrução Normativa 23/2005, \r\n                                    com o intuito de deixar o texto mais favorável a essa pretensão dos Oficiais de \r\n                                    Justiça, o que acabou parecendo a todos uma boa solução.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Aproveitando o gancho, o Diretor de Assuntos Legislativos da FOJEBRA, Joselito \r\n                                    Bandeira Vicente, ressaltou o alto índice de violência contra Oficiais de Justiça \r\n                                    no Brasil. “Desde o Estatuto do Desarmamento, tivemos 31 Oficiais mortos, um número \r\n                                    superior até às mortes de Policiais Federais, que foram 10”, disse o dirigente.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Demais presidentes de entidades fizeram suas colocações complementando as falas e \r\n                                    enriquecendo o debate.\r\n                                </p>\r\n                                <p align=\"justify\">\r\n                                    Na oportunidade, o Presidente da FOJEBRA, Edvaldo Lima, agradeceu a receptividade, \r\n                                    o empenho da PF, e se prontificou a ajudar no que for preciso.\r\n                                </p>', 'bg-2.jpg', 'bg-2.jpg', 'bg-2.jpg', '2018-09-05 18:48:44'),
(3, 1, 'SINDOJUS-AC presente em assembléia da FOJEBRA em Brasília', 'Diretores das entidades sindicais de norte a sul do país, estiveram reunidos na sede da Fojebra em Brasília, para realização da assembleia extraordinária convocada para data do dia 09 de julho. Diversos pontos foram deliberados, inclusive medidas eficácias contra entidades sindicais que tentar inibir o trabalho realizado pela Fojebra, inclusive por questões políticas.', '<p align=\"justify\">\r\n                                    Diretores das entidades sindicais de norte a sul do país, estiveram reunidos \r\n                                    na sede da Fojebra em Brasília, para realização da assembleia extraordinária \r\n                                    convocada para data do dia 09 de julho. Diversos pontos foram deliberados, \r\n                                    inclusive medidas eficácias contra entidades sindicais que tentar inibir o \r\n                                    trabalho realizado pela Fojebra, inclusive por questões políticas. Tal postura \r\n                                    anti sindicais vem atrapalhando o desenvolvimento dos Oficiais de Justiça no \r\n                                    Brasil e no Estado referente a essas entidades. É preciso que os Oficiais de \r\n                                    Justiça de alguns Estados da Federação acompanhem o que seus diretores andam \r\n                                    fazendo, explicou Edvaldo Lima. A pedido de um dos coordenadores do “Conojus”, \r\n                                    foi colocado em votação a participação dos membros da Fojebra no referido \r\n                                    Congresso que acontecerá na cidade do Espírito Santo, por unanimidade os 16 \r\n                                    Estados votaram pela não participação no evento. A Fojebra ratifica seus \r\n                                    compromissos com a ética e moral e dentro dos seus quadros de filiados só \r\n                                    aceitará entidades que de fato tenham compromisso com a categoria dos Oficias \r\n                                    de Justiça e que zele pelo bom nome da justiça. Por fim, foi apresentado a \r\n                                    todos os participantes o novo aplicativo, desenvolvido pelo Sindojus-AL que \r\n                                    auxiliará o Oficial de Justiça na resolução dos conflitos. O presidente da \r\n                                    Federação agradeceu a confiança e participação de todos presentes.\r\n                                </p>', 'bg-3.jpg', 'bg-3.jpg', 'bg-3.jpg', '2018-09-05 18:49:46'),
(4, 0, 'Notícia de teste', 'Este é um resumo da notícia de teste', '<p align=\"justify\">\r\n\r\nEste é o conteúdo da notícia de teste.\r\n                                </p>', '383be1935485454903561e7f8a6cc4eb.jpg', 'fa64568983499e9dacbcffb7382645a7.jpg', '5bdcbff057735a844884e66b12af7282.jpg', '2018-09-05 18:50:54');

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
-- Estrutura da tabela `phone`
--

CREATE TABLE IF NOT EXISTS `phone` (
  `phoneid` int(11) NOT NULL AUTO_INCREMENT,
  `userphone` int(11) NOT NULL,
  `number` varchar(255) NOT NULL,
  PRIMARY KEY (`phoneid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `phone`
--

INSERT INTO `phone` (`phoneid`, `userphone`, `number`) VALUES
(1, 1, '68992038448');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `username`, `password`, `role`, `status`) VALUES
(1, 'VINICIUS ANJOS SANTOS', 'anjos.vinicius@hotmail.com', 'asvinicius', '5eb9d15d46050eaa888e15d8d143d2c8', 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
