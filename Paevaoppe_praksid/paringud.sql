# tabelite loomine

CREATE TABLE cats (
	id integer PRIMARY KEY auto_increment,
	name varchar(100) NOT NULL,
	age integer DEFAULT 1,
	gender ENUM('M', 'F') DEFAULT 'M',
	color varchar(200),
	owner_id integer
);

# selekteerimine, päringud

SELECT * FROM cats;
SELECT * FROM owners WHERE age<25;
SELECT * FROM owners WHERE age >15 AND age<25;
SELECT * FROM owners WHERE id = 2;

SELECT firstname, lastname FROM owners_m WHERE id = 2;

# sisestamine

INSERT INTO my_cats VALUES (NULL, 'Tom', 23, 'M', 'grey', 2);
INSERT INTO my_cats (name, gender, age, owner_id) VALUES ('Priscilla', 'F', 1, 3);
INSERT INTO my_cats (name, gender, age, color, owner_id) VALUES ('Murka', 'F', 2, 'oranž', 1), 
('Kõuts', 'M', 3, 'valge', 3),
('Garfield', 'M', 5, 'must', 1);

# uuendamine

UPDATE my_cats SET color='lilla', age=age+1 WHERE id=2;
UPDATE my_cats SET age=RAND()*10 WHERE id=3;

# kustutamine

DELETE FROM my_cats WHERE id=3;
TRUNCATE my_cats;

# sorteerimine

SELECT * FROM my_cats WHERE gender='F' ORDER BY age DESC;
SELECT * FROM my_cats ORDER BY age DESC;
SELECT * FROM my_cats WHERE gender='F' ORDER BY age DESC, id DESC;

# tulemuste piiramine

SELECT * FROM my_cats LIMIT 2, 2;

# arvutamine

SELECT CONCAT(firstname, ' ', lastname) as fullname FROM owners_m;
SELECT CONCAT(firstname, ' ', lastname) FROM owners_m;

SELECT count(*), sum(age), max(age), min(age) FROM my_cats;

SELECT owner_id, count(*) as kasse FROM my_cats;
SELECT owner_id, count(*) as kasse FROM my_cats GROUP BY owner_id;

# päring üle mitme tabeli

SELECT name, firstname FROM my_cats, owners_m WHERE owners_m.id=my_cats.owner_id;