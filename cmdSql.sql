CREATE TABLE pessoa(
	id int PRIMARY KEY AUTO_INCREMENT,
    email varchar(50) UNIQUE,
    nome varchar(50),
    telefone varchar(50),
    foto varchar(50)
)ENGINE=INNODB;