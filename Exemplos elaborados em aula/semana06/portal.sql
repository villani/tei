PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE usuarios (
id INTEGER PRIMARY KEY,
nome TEXT,
email TEXT,
senha TEXT,
nivel INTEGER
);
INSERT INTO usuarios VALUES(1,'Bolsonaro','bolso@gmail.com','123',0);
INSERT INTO usuarios VALUES(2,'Temer','temer@ig.com.br','456',1);
INSERT INTO usuarios VALUES(3,'Dilma','dilma@bol.com.br','789',2);
INSERT INTO usuarios VALUES(5,'Lula','lula@pt.com.br','123',2);
CREATE TABLE teste (
nome TEXT
);
INSERT INTO teste VALUES('ALGUM valor');
CREATE TABLE categorias (
id INTEGER PRIMARY KEY,
usuario_id INTEGER,
nome TEXT,
FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
);
INSERT INTO categorias VALUES(1,4,'leitor');
INSERT INTO categorias VALUES(2,5,'autor');
COMMIT;
