CREATE TABLE Svetlana_Jugai_10142864 (
	id integer PRIMARY KEY auto_increment,
	nimi varchar(100) NOT NULL,
	firma varchar(100),
	telefon integer NOT NULL,
	email varchar(100) NOT NULL,
	yritus varchar(100),
	muuYritus varchar(100),
	koht varchar(100),
	kuup2ev date NOT NULL,
	hind integer DEFAULT 500,
	kommentaar varchar(300)
);