CREATE TABLE sjugai_loomaaed(
	id integer PRIMARY KEY auto_increament,
	nimi varchar(100) NOT NULL,
	vanus integer NOT NULL,
	liik varchar(100),
	puur integer
);

INSERT INTO sjugai_loomaaed (nimi, vanus, liik, puur) VALUES ('Miisu', 4, 'tiiger', 1), 
('Liisa', 1, 'tiiger', 1), 
('Miko', 1, 'tiiger', 1), 
('Moonika', 5, 'hobune', 2),
('Karl', 6, 'hobune', 2),
('Kiko', 9, 'elevant', 3),
('Tiko', 7, 'elevant', 3),
('Tiki', 1, 'elevant', 3),
('Tiger', 3, 'lõvi', 4);

# mis loomad elavad puuris nr.3?
SELECT nimi, puur FROM sjugai_loomaaed WHERE puur=3;

# vanima ja noorima loomade vanused
SELECT max(vanus), min(vanus) FROM sjugai_loomaaed;

# puuri nr. koos selles elavate loomade arvuga
SELECT puur, count(*) FROM sjugai_loomaaed GROUP BY puur;

# kõiki tabelis olevaid vanuseid 1 aasta võrra suurendamine
UPDATE sjugai_loomaaed SET vanus=vanus + 1;