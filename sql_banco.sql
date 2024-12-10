-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para cibite
CREATE DATABASE IF NOT EXISTS `cibite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cibite`;


-- Copiando estrutura para tabela cibite.tbcli
CREATE TABLE IF NOT EXISTS `tbcli` (
  `codcli` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `endereço` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `datnasc` date DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`codcli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cibite.tbcli: 0 rows
/*!40000 ALTER TABLE `tbcli` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbcli` ENABLE KEYS */;


-- Copiando estrutura para tabela cibite.tbpro
CREATE TABLE IF NOT EXISTS `tbpro` (
  `codpro` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(30) DEFAULT NULL,
  `grupo` int(3) DEFAULT NULL,
  `precocusto` double(9,2) DEFAULT '0.00',
  `precovenda` double(9,2) DEFAULT '0.00',
  `estoque` int(5) DEFAULT '0',
  PRIMARY KEY (`codpro`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela cibite.tbpro: 6 rows
/*!40000 ALTER TABLE `tbpro` DISABLE KEYS */;
INSERT INTO `tbpro` (`codpro`, `descricao`, `grupo`, `precocusto`, `precovenda`, `estoque`) VALUES
	(1, 'CAfé Pilao', 1, 5.00, 6.00, 10),
	(2, 'Queijo Mussarela', 2, 18.00, 22.00, 2),
	(3, 'Granola com frutas', 2, 5.00, 7.00, 0),
	(17, 'AGUA SANITÁRIA DRAGAO', 1, 0.00, 5.00, 20),
	(13, 'Desifetante YPE', 1, 0.00, 6.00, 10),
	(18, 'DETERGENTE YPE', 1, 0.00, 7.00, 10);
/*!40000 ALTER TABLE `tbpro` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
