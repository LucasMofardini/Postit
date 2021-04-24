CREATE TABLE `artigo` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(100) NOT NULL DEFAULT '0',
	`conteudo` VARCHAR(250) NOT NULL DEFAULT '0',
	`horario_publicacao` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=15
;


INSERT INTO artigo(titulo,conteudo, horario_publicacao) 
VALUES('Dia 14/03', 'Conteudos: Regra de 3, Fórmula de Baskara, Funcões de 1º Grau ', CURRENT_TIMESTAMP());

INSERT INTO artigo(titulo,conteudo, horario_publicacao) 
VALUES('Comprar na papelaria', 'Tesoura, Cartolina verde, Barbante, Tinta e Pincel', CURRENT_TIMESTAMP());

INSERT INTO artigo(titulo,conteudo, horario_publicacao) 
VALUES('Receita Bolo de Cenoura', 'Ovo, Leite, Açucar, Manteiga, Cenoura, Fermento', CURRENT_TIMESTAMP());

INSERT INTO artigo(titulo,conteudo, horario_publicacao) 
VALUES('Musicas favoritas', 'Tempo perdido, Eduardo e Monica, Lanterna dos Afogados, O Segundo Sol', CURRENT_TIMESTAMP());


INSERT INTO artigo(titulo,conteudo, horario_publicacao) 
VALUES('Melhores amigos', 'Flavio, Roberta, Juliano, Thomas, Caique, Teresa, Erica', CURRENT_TIMESTAMP());