CREATE DATABASE pw2;
CREATE TABLE pessoa(
	id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(50) UNIQUE,
    nome varchar(50),
    telefone varchar(50),
    foto varchar(50)
)ENGINE=INNODB;

INSERT INTO `pessoa` (`id`, `email`, `nome`, `telefone`, `foto`) VALUES (NULL, 'camargoliveira@etec.sp.gov.br', 'Eliton Camargo', '(14)99988-9900', 'userEliton.png');