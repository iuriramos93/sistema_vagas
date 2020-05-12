-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.8-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para jobfinder
CREATE DATABASE IF NOT EXISTS `jobfinder` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jobfinder`;

-- Copiando estrutura para tabela jobfinder.tb_area
CREATE TABLE IF NOT EXISTS `tb_area` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=221 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jobfinder.tb_area: ~220 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_area` DISABLE KEYS */;
INSERT IGNORE INTO `tb_area` (`id`, `nome`) VALUES
	(1, 'Administração'),
	(2, 'Administração Pública'),
	(3, 'Agronegócio e Agropecuária'),
	(4, 'Ciências Contábeis'),
	(5, 'Ciências Econômicas'),
	(6, 'Comércio Exterior'),
	(7, 'Defesa e Gestão Estratégica Internacional'),
	(8, 'Gastronomia'),
	(9, 'Gestão Comercial'),
	(10, 'Gestão de Recursos Humanos'),
	(11, 'Gestão de Segurança Privada'),
	(12, 'Gestão de Seguros'),
	(13, 'Gestâo de Turismo'),
	(14, 'Gestão Financeira'),
	(15, 'Gestão Pública'),
	(16, 'Hotelaria'),
	(17, 'Logística'),
	(18, 'Marketing'),
	(19, 'Negócios Imobiliários'),
	(20, 'Pilotagem profissional de aeronaves'),
	(21, 'Processos Gerenciais'),
	(22, 'Segurança Pública'),
	(23, 'Turismo'),
	(24, 'Animação'),
	(25, 'Arquitetura e Urbanismo'),
	(26, 'Artes Visuais'),
	(27, 'Comunicação das Artes do Corpo'),
	(28, 'Conservação e Restauro'),
	(29, 'Dança'),
	(30, 'Designer'),
	(31, 'Designer de Games'),
	(32, 'Designer de Interiores'),
	(33, 'Designer de Moda'),
	(34, 'Fotografia'),
	(35, 'História da Arte'),
	(36, 'Jogos digitais'),
	(37, 'Luteria'),
	(38, 'Música'),
	(39, 'Produção Cênica'),
	(40, 'Produção Fonográfica'),
	(41, 'Teatro'),
	(42, 'Agroecologia'),
	(43, 'Agronomia'),
	(44, 'Alimentos'),
	(45, 'Biocombustíveis'),
	(46, 'Biotecnologia'),
	(47, 'Biotecnologia e Bioquímica'),
	(48, 'Ciência e Tecnologia de Alimentos'),
	(49, 'Ciências Agrárias'),
	(50, 'Ciências Biológicas'),
	(51, 'Ciências Naturais e Exatas'),
	(52, 'Ecologia'),
	(53, 'Geofísica'),
	(54, 'Geologia'),
	(55, 'Gestão Ambiental'),
	(56, 'Medicina Veterinária'),
	(57, 'Meteorologia'),
	(58, 'Oceanografia'),
	(59, 'Produção de Bebidas'),
	(60, 'Produção Sucroalcooleira'),
	(61, 'Rochas Ornamentais'),
	(62, 'Zootecnia'),
	(63, 'Ciências Exatas e Informática'),
	(64, 'Análise e Desenvolvimento de Sistemas'),
	(65, 'Astronomia'),
	(66, 'Banco de Dados'),
	(67, 'Ciência da Computação'),
	(68, 'Ciência e Tecnologia'),
	(69, 'Computação'),
	(70, 'Estatística'),
	(71, 'Física'),
	(72, 'Gestão da Tecnologia da Informação'),
	(73, 'Informática Biomédica'),
	(74, 'Matemática'),
	(75, 'Nanotecnologia'),
	(76, 'Química'),
	(77, 'Redes de Computadores'),
	(78, 'Segurança da Informação'),
	(79, 'Sistemas de Informação'),
	(80, 'Sistemas para Internet'),
	(81, 'Ciências Sociais e Humanas'),
	(82, 'Arqueologia'),
	(83, 'Ciências do Consumo'),
	(84, 'Ciências Humanas'),
	(85, 'Ciências Sociais'),
	(86, 'Cooperativismo'),
	(87, 'Direito'),
	(88, 'Escrita Criativa'),
	(89, 'Estudos de Gênero e Diversidade'),
	(90, 'Filosofia'),
	(91, 'Geografia'),
	(92, 'Gestão de Cooperativas'),
	(93, 'História'),
	(94, 'Letras'),
	(95, 'Libras'),
	(96, 'Linguística'),
	(97, 'Museologia'),
	(98, 'Pedagogia'),
	(99, 'Psicopedagogia'),
	(100, 'Relações Internacionais'),
	(101, 'Serviço Social'),
	(102, 'Serviços Judiciários e Notariais'),
	(103, 'Teologia'),
	(104, 'Tradutor e Intérprete'),
	(105, 'Comunicação e Informação'),
	(106, 'Arquivologia'),
	(107, 'Biblioteconomia'),
	(108, 'Cinema e Audiovisual'),
	(109, 'Comunicação em Mídias Digitais'),
	(110, 'Comunicação Institucional'),
	(111, 'Comunicação Organizacional'),
	(112, 'Educomunicação'),
	(113, 'Estudos de Mídia'),
	(114, 'Eventos'),
	(115, 'Gestão da Informação'),
	(116, 'Jornalismo'),
	(117, 'Produção Audiovisual'),
	(118, 'Produção Cultural'),
	(119, 'Produção Editorial'),
	(120, 'Produção Multimídia'),
	(121, 'Produção Publicitária'),
	(122, 'Publicidade e Propaganda'),
	(123, 'Rádio, TV e Internet'),
	(124, 'Relações Públicas'),
	(125, 'Secretariado'),
	(126, 'Secretariado Executivo'),
	(127, 'Engenharia e Produção'),
	(128, 'Agrimensura'),
	(129, 'Aquicultura'),
	(130, 'Automação Industrial'),
	(131, 'Construção Civil'),
	(132, 'Construção Naval'),
	(133, 'Eletrônica Industrial'),
	(134, 'Eletrotécnica Industrial'),
	(135, 'Energias Renováveis'),
	(136, 'Engenharia Acústica'),
	(137, 'Engenharia Aeronáutica'),
	(138, 'Engenharia Agrícola'),
	(139, 'Engenharia Ambiental e Sanitária'),
	(140, 'Engenharia Biomédica'),
	(141, 'Engenharia Bioquímica, de Bioprocessos e Biotecnol'),
	(142, 'Engenharia Cartográfica e de Agrimensura'),
	(143, 'Engenharia Civil'),
	(144, 'Engenharia da Computação'),
	(145, 'Engenharia de Alimentos'),
	(146, 'Engenharia de Biossistemas'),
	(147, 'Engenharia de Controle e Automação'),
	(148, 'Engenharia de Energia'),
	(149, 'Engenharia de Inovação'),
	(150, 'Engenharia de Materiais'),
	(151, 'Engenharia de Minas'),
	(152, 'Engenharia de Pesca'),
	(153, 'Engenharia de Petróleo'),
	(154, 'Engenharia de Produção'),
	(155, 'Engenharia de Segurança no Trabalho'),
	(156, 'Engenharia de Sistemas'),
	(157, 'Engenharia de Software'),
	(158, 'Engenharia de Telecomunicações'),
	(159, 'Engenharia de Transporte e da Mobilidade'),
	(160, 'Engenharia Elétrica'),
	(161, 'Engenharia Eletrônica'),
	(162, 'Engenharia Física'),
	(163, 'Engenharia Florestal'),
	(164, 'Engenharia Hídrica'),
	(165, 'Engenharia Industrial Madeireira'),
	(166, 'Engenharia Mecânica'),
	(167, 'Engenharia Mecatrônica'),
	(168, 'Engenharia Metalúrgica'),
	(169, 'Engenharia Naval'),
	(170, 'Engenharia Nuclear'),
	(171, 'Engenharia Química'),
	(172, 'Engenharia Têxtil'),
	(173, 'Fabricação Mecânica'),
	(174, 'Geoprocessamento'),
	(175, 'Gestão da Produção Industrial'),
	(176, 'Gestão da Qualidade'),
	(177, 'Irrigação e Drenagem'),
	(178, 'Manutenção de aeronaves'),
	(179, 'Manutenção Industrial (T/L)'),
	(180, 'Materiais'),
	(181, 'Mecatrônica Industrial'),
	(182, 'Mineração'),
	(183, 'Papel e Celulose'),
	(184, 'Petróleo e Gás'),
	(185, 'Processos Metalúrgicos'),
	(186, 'Processos Químicos'),
	(187, 'Produção Têxtil'),
	(188, 'Saneamento Ambiental'),
	(189, 'Segurança no Trabalho'),
	(190, 'Silvicultura'),
	(191, 'Sistemas Biomédicos'),
	(192, 'Sistemas de Telecomunicações'),
	(193, 'Sistemas Elétricos'),
	(194, 'Sistemas Embarcados'),
	(195, 'Transporte'),
	(196, 'Biomedicina'),
	(197, 'Educação Física'),
	(198, 'Enfermagem'),
	(199, 'Esporte'),
	(200, 'Estética e Cosmética'),
	(201, 'Farmácia'),
	(202, 'Fisioterapia'),
	(203, 'Fonoaudiologia'),
	(204, 'Gerontologia'),
	(205, 'Gestão Desportiva e de Lazer'),
	(206, 'Gestão em Saúde'),
	(207, 'Gestão Hospitalar'),
	(208, 'Medicina'),
	(209, 'Musicoterapia'),
	(210, 'Naturologia'),
	(211, 'Nutrição'),
	(212, 'Obstetrícia'),
	(213, 'Odontologia'),
	(214, 'Oftálmica'),
	(215, 'Optometria'),
	(216, 'Psicologia'),
	(217, 'Quiropraxia'),
	(218, 'Radiologia'),
	(219, 'Saúde Coletiva'),
	(220, 'Terapia Ocupacional');
/*!40000 ALTER TABLE `tb_area` ENABLE KEYS */;

-- Copiando estrutura para tabela jobfinder.tb_curriculo
CREATE TABLE IF NOT EXISTS `tb_curriculo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `curriculo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_curriculo_user` (`id_user`),
  CONSTRAINT `fk_curriculo_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jobfinder.tb_curriculo: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_curriculo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_curriculo` ENABLE KEYS */;

-- Copiando estrutura para tabela jobfinder.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `area` int(10) NOT NULL,
  `nivel` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nome` (`nome`),
  UNIQUE KEY `email` (`email`),
  KEY `id_area` (`area`),
  CONSTRAINT `FK_area_user` FOREIGN KEY (`area`) REFERENCES `tb_area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jobfinder.tb_user: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_user` DISABLE KEYS */;
INSERT IGNORE INTO `tb_user` (`id`, `nome`, `email`, `pass`, `area`, `nivel`) VALUES
	(1, 'teste', 'teste@teste.com', '202cb962ac59075b964b07152d234b70', 64, 1),
	(4, 'Iuri Ramos Malheiros', 'iuri.ramos41@gmail.com', '202cb962ac59075b964b07152d234b70', 64, 2),
	(5, 'TESTE Candidato', 'teste2@teste.com', '202cb962ac59075b964b07152d234b70', 64, 1);
/*!40000 ALTER TABLE `tb_user` ENABLE KEYS */;

-- Copiando estrutura para tabela jobfinder.tb_vagas
CREATE TABLE IF NOT EXISTS `tb_vagas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(55) NOT NULL DEFAULT '',
  `area` int(10) NOT NULL DEFAULT 0,
  `descricao` varchar(255) DEFAULT NULL,
  `remuneracao` decimal(10,2) DEFAULT NULL,
  `id_user` int(2) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `id_area` (`area`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `FK_area_vagas` FOREIGN KEY (`area`) REFERENCES `tb_area` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_user_vagas` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jobfinder.tb_vagas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_vagas` DISABLE KEYS */;
INSERT IGNORE INTO `tb_vagas` (`id`, `nome`, `area`, `descricao`, `remuneracao`, `id_user`) VALUES
	(1, 'Programador PHP', 64, 'Conhecimento em Laravel', 5000.00, 4),
	(10, 'Programador PHP', 64, 'JAVASCRIPT e CODE ENGINE', 5000.00, 4),
	(11, 'Programador JAVA', 64, 'DESKTOP', 3000.00, 4);
/*!40000 ALTER TABLE `tb_vagas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
