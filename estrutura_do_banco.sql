-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para postit
CREATE DATABASE IF NOT EXISTS `postit` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `postit`;

-- Copiando estrutura para tabela postit.artigo
CREATE TABLE IF NOT EXISTS `artigo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL DEFAULT '0',
  `conteudo` varchar(250) NOT NULL DEFAULT '0',
  `horario_publicacao` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela postit.artigo: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `artigo` DISABLE KEYS */;
INSERT IGNORE INTO `artigo` (`id`, `titulo`, `conteudo`, `horario_publicacao`) VALUES
	(15, 'Dia 14/03', 'Conteudos: Regra de 3, Fórmula de Baskara, Funcões de 1º Grau ', '2021-04-24 02:04:16'),
	(16, 'Comprar na papelaria', 'Tesoura, Cartolina verde, Barbante, Tinta e Pincel', '2021-04-24 02:08:42'),
	(17, 'Receita Bolo de Cenoura', 'Ovo, Leite, Açucar, Manteiga, Cenoura, Fermento', '2021-04-24 02:08:42'),
	(18, 'Musicas favoritas', 'Tempo perdido, Eduardo e Monica, Lanterna dos Afogados, O Segundo Sol', '2021-04-24 02:08:42'),
	(19, 'Melhores amigos', 'Flavio, Roberta, Juliano, Thomas, Caique, Teresa, Erica', '2021-04-24 02:08:42'),
	(20, 'Teste Adiciona', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2021-04-24 14:44:31'),
	(21, 'Teste Edita', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', '2021-04-24 14:45:55');
/*!40000 ALTER TABLE `artigo` ENABLE KEYS */;

-- Copiando estrutura para procedure postit.sp_adicionaArtigo
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_adicionaArtigo`(
	IN `pTitulo` VARCHAR(250),
	IN `pConteudo` VARCHAR(250)

)
BEGIN

	insert into artigo(titulo, conteudo, horario_publicacao) values(pTitulo, pConteudo, current_timestamp());

END//
DELIMITER ;

-- Copiando estrutura para procedure postit.sp_editaArtigo
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_editaArtigo`(
	IN `pIdArtigo` INT,
	IN `pTitulo` VARCHAR(50),
	IN `pConteudo` VARCHAR(250)
)
BEGIN

	update artigo set titulo = pTitulo, conteudo = pConteudo where id = pIdArtigo;

END//
DELIMITER ;

-- Copiando estrutura para procedure postit.sp_removeArtigo
DELIMITER //
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_removeArtigo`(
	IN `pIdArtigo` INT
)
BEGIN

	delete from artigo where id = pIdArtigo; 

END//
DELIMITER ;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
