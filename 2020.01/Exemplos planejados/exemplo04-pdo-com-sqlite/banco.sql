CREATE TABLE usuarios (
	id INTEGER PRIMARY KEY,
	nome TEXT,
	login TEXT,
	senha TEXT
);

INSERT INTO usuarios VALUES (1, 'Michel Temer', 'temer', '123');
INSERT INTO usuarios VALUES (2, 'Dilma Rousseff', 'dilma', '123');
INSERT INTO usuarios VALUES (3, 'Luiz Inácio Lula da  Silva', 'lula', '123');

CREATE TABLE noticias (
	id INTEGER PRIMARY KEY,
	usuario INTEGER,
	titulo TEXT,
	conteudo TEXT,
	FOREIGN KEY(usuario) REFERENCES usuarios(id)
);

PRAGMA foreign_keys = ON;

INSERT INTO noticias VALUES (1, 2, 'A teoria do golpe', 'Se houvesse um jeito para estocar o vento...');
INSERT INTO noticias VALUES (2, 3, 'O grande político', 'Político é a profissão mais honesta, por mais ladrão que ele seja...');
INSERT INTO noticias VALUES (3, 1, 'Gerenciando a economia', 'A capacidade da mulher em indicar os desajustes de preços do mercado...');
INSERT INTO noticias VALUES (4, 4, 'Saindo da crise', '... ?');