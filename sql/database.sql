CREATE TABLE anime (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Titulo VARCHAR(100) NOT NULL,
  Lanzamiento DATE NOT NULL,
  Episodio INT(10) UNSIGNED NOT NULL,
  Estudio VARCHAR(100) NOT NULL,
  Continua VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('ONE PIECE', '1999-10-20', '1096', 'TOEI ANIMATION' , 'EN EMISION');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('DRAGON BALL', '1984-11-20', '583', 'TOEI ANIMATION', 'EN EMISION');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('BLEACH', '2004-10-05', '392', 'PIERROT' , 'FINALIZADO');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('JUJUTSU KAISEN', '2020-10-03', '45', 'MAPPA', 'EN EMISION');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('KIMETSU NO YAIBA', '2019-03-29', '58', 'UFOTABLE', 'EN EMISION');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('FAIRY TAIL', '2009-10-12', '328', 'A-1 PICTURES', 'FINALIZADO');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('NANATSU NO TAIZAI', '2014-10-05', '104', 'A-1 PICTURES', 'FINALIZADO');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('TOKYO GHOUL', '2014-07-04', '54', 'PIERROT', 'FINALIZADO');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('TOKYO REVENGERS', '2021-04-10', '74', 'LIDEN FILMS', 'EN EMISION');
INSERT INTO anime (Titulo, Lanzamiento, Episodio, Estudio, Continua ) VALUES('ORE DAKE LEVEL UP NA KEN', '2024-01-07', '12', 'A-1 PICTURES', 'EN EMISION');