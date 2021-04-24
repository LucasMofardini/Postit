CREATE TABLE `artigo` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`titulo` VARCHAR(100) NOT NULL DEFAULT '0',
	`conteudo` VARCHAR(250) NOT NULL DEFAULT '0',
	`horario_publicacao` DATETIME NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
ENGINE=InnoDB
AUTO_INCREMENT=13;

# Adicionando entidade na tabela
INSERT INTO artigo(titulo,conteudo, horario_publicacao) VALUES('Teste1', 'Testeeeee1', CURRENT_TIMESTAMP());
INSERT INTO artigo(titulo,conteudo, horario_publicacao) VALUES('Teste2', 'Testeeeee2', CURRENT_TIMESTAMP());
INSERT INTO artigo(titulo,conteudo, horario_publicacao) VALUES('Teste3', 'Testeeeee3', CURRENT_TIMESTAMP());
