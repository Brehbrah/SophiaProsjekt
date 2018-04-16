-- SQL script som oppretter databasetabeller for Sophia prosjektet

-- Slett tabeller hvis de eksisterer fra før
DROP TABLE IF EXISTS Preferanser;
DROP TABLE IF EXISTS Treningsøkt;
DROP TABLE IF EXISTS Bruker;
DROP TRIGGER IF EXISTS ny_bruker_registrert;


-- Tabellstruktur for Bruker
CREATE TABLE IF NOT EXISTS Bruker (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Epost varchar(40) UNIQUE NOT NULL,
  Brukernavn varchar(20) NOT NULL,
  Passord varchar(255) DEFAULT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;


-- Tabellstruktur for Treningsøkt
CREATE TABLE IF NOT EXISTS Treningsøkt (
  ØktNr int(10) NOT NULL AUTO_INCREMENT,
  Dato date NOT NULL,
  BNr int(5) DEFAULT NULL,
  Øvelse varchar(20) NOT NULL,
  Minutter int(5) NOT NULL,
  Antall int(5) NOT NULL,
  PRIMARY KEY (ØktNr)
) ENGINE=InnoDB;


-- Tabellstruktur for Preferanser
CREATE TABLE IF NOT EXISTS Preferanser (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Mål varchar(20) NOT NULL,
  Aktivitetsnivå varchar(20) NOT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;






--
-- Begrensninger for tabell Treningsøkt
--
ALTER TABLE Treningsøkt
  ADD CONSTRAINT TreningsøktBrukerFK FOREIGN KEY (BNr) REFERENCES Bruker (BNr);

--
-- Begrensninger for tabell Preferanser
--
ALTER TABLE Preferanser
  ADD CONSTRAINT PreferanserBrukerFK FOREIGN KEY (BNr) REFERENCES Bruker (BNr);

--
-- Trigger for Ny bruker
--
CREATE TRIGGER ny_bruker_registrert 
AFTER INSERT ON Bruker
FOR EACH ROW
  INSERT INTO Preferanser (BNr, Mål, Aktivitetsnivå)
  VALUES (new.BNr, 'Ikke valgt', 'Ikke valgt');





-- Data for tabell Bruker
-- BNr er autonummerert (!)
INSERT INTO Bruker (Epost, Brukernavn, Passord) VALUES
('testbruker@gmail.com', 'testbruker', 'test'),
('ola@gmail.com', 'ola', 'passord');


-- Data for tabell Treningsøkt
-- ØktNr er autonummerert (!)
INSERT INTO Treningsøkt (Dato, BNr, Øvelse, Minutter, Antall) VALUES
('2018-04-04', 1, 'Svømming', 60, 6),
('2018-04-04', 1, 'Vektløfting', 20, 3),
('2018-04-04', 1, 'Svømming', 31, 3),
('2018-04-04', 1, 'Løping', 30, 4),
('2018-04-04', 1, 'Sykling', 45, 4),
('2018-04-04', 1, 'Vektløfting', 20, 2),
('2018-04-04', 1, 'Vektløfting', 60, 6),
('2018-04-04', 1, 'Vektløfting', 40, 3),
('2018-04-05', 1, 'Svømming', 30, 4),
('2018-04-05', 1, 'Svømming', 30, 4),
('2018-04-05', 1, 'Vektløfting', 30, 4),
('2018-04-05', 1, 'Svømming', 30, 4),
('2018-04-05', 2, 'Svømming', 30, 4),
('2018-04-05', 2, 'Vektløfting', 30, 4),
('2018-04-05', 2, 'Svømming', 30, 4),
('2018-04-05', 2, 'Vektløfting', 30, 4),
('2018-04-05', 2, 'Svømming', 30, 4);



