SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `corretor` (
  `cod_corretor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `celular` varchar(30) NOT NULL,
  `img_corretor` varchar(50) NOT NULL,
  PRIMARY KEY (`cod_corretor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `corretor` (`cod_corretor`, `nome`, `email`, `senha`, `celular`, `img_corretor`) VALUES
(1, 'Isabela de Ponte', 'isabelapnt01@gmail.com', 'senha', '5516997578768', 'isa_q.jpg'),
(2, 'Livia Oliveira Martins', 'livia@gmail.com', 'livia', '5516997554713', 'livia.jpg'),
(3, 'Julia Gomes Bento da Silva', 'julia@gmail.com', 'julia', '5516997627963', 'julia.jpg'),
(8, 'Vinicius Alves Valentim', 'vinicius@gmail.com', 'senha', '5516997008655', 'viniboi.jpeg'),
(6, 'JoÃ£o Inoue', 'inoue@gmail.com', 'senha', '5516996150592', 'inque.jpg');

CREATE TABLE IF NOT EXISTS `imovel` (
  `cod_imovel` int(11) NOT NULL AUTO_INCREMENT,
  `end` varchar(50) NOT NULL,
  `num_end` int(11) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `status_aluguel` varchar(20) DEFAULT NULL,
  `status_venda` varchar(20) DEFAULT NULL,
  `valor_aluguel` decimal(10,2) DEFAULT NULL,
  `valor_venda` decimal(10,2) DEFAULT NULL,
  `tipo` varchar(15) NOT NULL,
  `forma_contrato` varchar(20) NOT NULL,
  `area` int(10) NOT NULL,
  `qnt_comodos` int(6) NOT NULL,
  `dormitorios` int(5) NOT NULL,
  `img_imovel` varchar(50) NOT NULL,
  `id_corretor` int(11) NOT NULL,
  PRIMARY KEY (`cod_imovel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

INSERT INTO `imovel` (`cod_imovel`, `end`, `num_end`, `cep`, `cidade`, `status_aluguel`, `status_venda`, `valor_aluguel`, `valor_venda`, `tipo`, `forma_contrato`, `area`, `qnt_comodos`, `dormitorios`, `img_imovel`, `id_corretor`) VALUES
(8, 'Av. Leopoldo Silva', 565, '14810234', 'Araraquara', 'Aluguel nÃ£o concedi', 'NÃ£o comprado', '0.00', '40000.00', 'Casa', 'Compra', 500, 5, 2, '16.jpg', 6),
(9, 'Av. Doutor SavÃ©rio Lia', 5555, '14802789', 'Araraquara', 'NÃ£o alugado', 'Compra nÃ£o concedid', '1200.00', '0.00', 'Apartamento', 'Aluguel', 253, 3, 1, '06-ap.jpg', 2),
(7, 'Av. Gumercindo Siqueira ', 111, '14806726', 'Araraquara', 'NÃ£o alugado', 'Compra nÃ£o concedid', '1000.00', '0.00', 'Apartamento', 'Aluguel', 302, 4, 2, '07-ap.jpg', 3),
(23, 'Av. Oscar de Souza Siqueira', 185, '14808-616', 'Araraquara', 'Aluguel nÃ£o concedi', 'NÃ£o comprado', '0.00', '20000.00', 'Casa', 'Compra', 500, 4, 2, '002.jpg', 2),
(19, 'Rua Bahia', 265, '14810234', 'Araraquara', 'Aluguel nÃ£o concedi', 'NÃ£o comprado', '0.00', '20000.00', 'Casa', 'Compra', 655, 6, 3, '17.jpg', 8),
(24, 'Av. Gumercindo Siqueira ', 1130, '14802-790', 'Araraquara', 'NÃ£o alugado', 'Compra nÃ£o concedid', '600.00', '0.00', 'Apartamento', 'Aluguel', 100, 4, 1, '0001.jpg', 3),
(26, 'Rua Argemiro GonÃ§alves da Rocha', 155, '14808-605', 'Araraquara', 'Aluguel nÃ£o concedi', 'NÃ£o comprado', '0.00', '120000.00', 'Casa', 'Compra', 500, 4, 3, '000.jpg', 8);

CREATE TABLE IF NOT EXISTS `inquilinos` (
  `cod_inquilino` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(12) NOT NULL,
  PRIMARY KEY (`cod_inquilino`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `proprietario` (
  `cod_prop` int(11) NOT NULL AUTO_INCREMENT,
  `cpf` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(15) NOT NULL,
  `senha` int(10) NOT NULL,
  PRIMARY KEY (`cod_prop`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

