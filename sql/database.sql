CREATE TABLE anime (
  id INT AUTO_INCREMENT PRIMARY KEY,
  tit VARCHAR(100) NOT NULL,
  lan VARCHAR(100) NOT NULL,
  ep INT(10) UNSIGNED NOT NULL,
  est VARCHAR(100) NOT NULL,
  continua VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('ONE PIECE', '1999-10-20', '1096', 'TOEI ANIMATION' , 'EN EMISION');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('DRAGON BALL', '1984-11-20', '583', 'TOEI ANIMATION', 'EN EMISION');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('BLEACH', '2004-10-05', '392', 'PIERROT' , 'FINALIZADO');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('JUJUTSU KAISEN', '2020-10-03', '45', 'MAPPA', 'EN EMISION');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('KIMETSU NO YAIBA', '2019-03-29', '58', 'UFOTABLE', 'EN EMISION');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('FAIRY TAIL', '2009-10-12', '328', 'A-1 PICTURES', 'FINALIZADO');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('NANATSU NO TAIZAI', '2014-10-05', '104', 'A-1 PICTURES', 'FINALIZADO');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('TOKYO GHOUL', '2014-07-04', '54', 'PIERROT', 'FINALIZADO');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('TOKYO REVENGERS', '2021-04-10', '74', 'LIDEN FILMS', 'EN EMISION');
INSERT INTO anime (tit, lan, ep, est, continua ) VALUES('ORE DAKE LEVEL UP NA KEN', '2024-01-07', '12', 'A-1 PICTURES');

