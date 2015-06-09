USE `labappdb`;
CREATE TABLE IF NOT EXISTS `testdaten` (
	`kategorie` varchar(255) NOT NULL,
    `wert` double
);

select kategorie, wert from testdaten;

insert into testdaten values 
('A', 100),
('B', 200);

insert into testdaten values 
('C', 300),
('D', 400);