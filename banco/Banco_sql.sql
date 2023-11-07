-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.5.20 - MySQL Community Server (GPL)
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para cinema
CREATE DATABASE IF NOT EXISTS `cinema` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cinema`;

-- Copiando estrutura para tabela cinema.filmes
CREATE TABLE IF NOT EXISTS `filmes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `classificacao` varchar(50) NOT NULL,
  `duracao` varchar(50) NOT NULL DEFAULT '',
  `sinopse` text,
  `genero` varchar(50) DEFAULT NULL,
  `foto_url` varchar(255) DEFAULT NULL,
  `trailler` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.filmes: ~6 rows (aproximadamente)
INSERT INTO `filmes` (`id`, `titulo`, `classificacao`, `duracao`, `sinopse`, `genero`, `foto_url`, `trailler`) VALUES
	(1, 'Five Nights At Freddy´s - O Pesadelo Sem Fim', '+14', '114 min', 'Você consegue sobreviver por cinco noites? O filme acompanha um guarda de segurança problemático que começa a trabalhar na Pizzaria Freddy Fazbear. Já no primeiro dia, ele percebe que o turno da noite no Freddy s não será tão fácil assim.', 'Terror', 'fotos/15559_medio.jpg_2023281011522166', 'https://www.youtube.com/embed/i8ZdjGk9HeA?si=lvr2e'),
	(2, 'Hypnotic - Ameaça Invisível', '+14', '93 min', 'Em HYPNOTIC - AMEAÇA INVISÍVEL, enquanto busca incansavelmente por sua filha desaparecida, o detetive Danny Rourke (Ben Affleck) se vê envolvido em uma conspiração criminosa que desafia a realidade. Nessa jornada, ele é confrontado por uma série de acontecimentos perturba', 'Terror,Suspense', 'fotos/14775_medio.jpg_2023281011554421', 'https://www.youtube.com/embed/5GJv2e7JY_4?si=vN0QF'),
	(3, ' O Protetor: Capítulo Final', '+18', '100 min', 'Robert McCall se sente em casa no sul da Itália, mas descobre que seus amigos estão sob o controle dos chefes do crime local. À medida que os eventos se tornam mortais, McCall sabe o que deve fazer: tornar-se o protetor de seus amigos enfrentando a máfia.', 'Crime,Aventura,Ação', 'fotos/15005_medio.jpg_2023281011590124', 'https://www.youtube.com/embed/3YIIXCfbYF4?si=6dSKX'),
	(4, 'Assassinos da Lua das Flores', '+14', '206 min', 'Membros da tribo Osage nos Estados Unidos são assassinados em circunstâncias misteriosas na década de 1920, o que levou a uma grande investigação envolvendo J. Edgar Hoover.', 'Policial,História,Drama', 'fotos/15425_medio.jpg_2023291012020069', 'https://www.youtube.com/embed/LQ7hKRn6MJo?si=s6lYl'),
	(5, 'Som da Liberdade', '+14', '131 min', 'Baseado em uma incrível história real, #SomDaLiberdade ilumina até os caminhos mais sombrios. Depois de resgatar um menino de traficantes implacáveis, um agente federal descobre que a irmã do garoto ainda está em cativeiro e decide embarcar em uma missão arriscada para salvá-la. Com o tempo se esgotando, ele deixa seu emprego e viaja para as profundezas da selva Colombiana, colocando sua vida em risco para libertá-la de um destino pior do que a morte.', 'Drama,Biografia,Ação', 'fotos/15614_medio.jpg_2023291012044417', 'https://www.youtube.com/embed/7JQ6E_BV5Xw?si=Yuqri'),
	(6, 'Trolls 3 - Juntos Novamente', 'Livre', ' 92 min', 'Nesta temporada de férias, prepare-se para uma reunião familiar cheia de ação, cheia de estrelas e com as cores do arco-iris, como nenhuma outra, com Anna Kendrick e Justin Timberlake retornando nas vozes originais e Jullie e Hugo Bonemer nas vozes brasileiras, para o novo capítulo da franquia musical de grande sucesso da DreamWorks Animation: Trolls 3 Juntos Novamente. Depois de dois filmes de amizade verdadeira e paquera implacável, Poppy e Tronco agora são oficialmente, finalmente, um casal.', 'Comédia,Animação', 'fotos/15067_medio.jpg_2023291012073635', 'https://www.youtube.com/embed/dgmk9Vbw0x0?si=ygc6P');

-- Copiando estrutura para tabela cinema.ingressos
CREATE TABLE IF NOT EXISTS `ingressos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sessao_id` int(11) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessao_id` (`sessao_id`),
  CONSTRAINT `ingressos_ibfk_1` FOREIGN KEY (`sessao_id`) REFERENCES `sessoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.ingressos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela cinema.pagamentos
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reserva_id` int(11) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `data_pagamento` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reserva_id` (`reserva_id`),
  CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`reserva_id`) REFERENCES `reservas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.pagamentos: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela cinema.reservas
CREATE TABLE IF NOT EXISTS `reservas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sessao_id` int(11) NOT NULL,
  `usuario_cpf` varchar(14) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessao_id` (`sessao_id`),
  KEY `usuario_cpf` (`usuario_cpf`),
  CONSTRAINT `reservas_ibfk_1` FOREIGN KEY (`sessao_id`) REFERENCES `sessoes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reservas_ibfk_2` FOREIGN KEY (`usuario_cpf`) REFERENCES `usuarios` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.reservas: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela cinema.sessoes
CREATE TABLE IF NOT EXISTS `sessoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filme_id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` time DEFAULT NULL,
  `sala` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `filme_id` (`filme_id`),
  CONSTRAINT `sessoes_ibfk_1` FOREIGN KEY (`filme_id`) REFERENCES `filmes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.sessoes: ~12 rows (aproximadamente)
INSERT INTO `sessoes` (`id`, `filme_id`, `data`, `hora`, `sala`) VALUES
	(1, 1, '2023-10-29', '19:00:00', '2'),
	(2, 1, '2023-10-28', '19:00:00', '2'),
	(3, 2, '2023-10-30', '20:00:00', '1'),
	(4, 2, '2023-11-01', '19:30:00', '3'),
	(5, 3, '2023-10-30', '22:00:00', '2'),
	(6, 3, '2023-10-11', '14:00:00', '4'),
	(7, 4, '2023-10-29', '13:30:00', '1'),
	(8, 4, '2023-10-30', '22:00:00', '2'),
	(9, 5, '2023-10-29', '19:45:00', '4'),
	(10, 5, '2023-10-29', '22:30:00', '5'),
	(11, 6, '2023-10-29', '15:50:00', '3'),
	(12, 1, '2023-10-30', '13:30:00', '3');

-- Copiando estrutura para tabela cinema.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela cinema.usuarios: ~2 rows (aproximadamente)
INSERT INTO `usuarios` (`cpf`, `nome`, `email`, `telefone`) VALUES
	('307.543.558-96', 'Creusa Rosario', 'Creusa398@gmail.com', ' +55(11)99811-2494'),
	('520.196.748-58', 'Juliano Cassimiro Dos Santos', 'Juliano.santos88@etec.sp.gov.br', '   +55(11)91484-7365');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
