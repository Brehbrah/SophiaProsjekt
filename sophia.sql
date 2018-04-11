-- SQL script som oppretter databasetabeller for Sophia prosjektet

-- Slett tabeller hvis de eksisterer fra før
DROP TABLE IF EXISTS Bruker;
DROP TABLE IF EXISTS Treningsøkt;



-- Tabellstruktur for Bruker
CREATE TABLE IF NOT EXISTS Bruker (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Epost varchar(40) UNIQUE NOT NULL,
  Brukernavn varchar(20) NOT NULL,
  Passord varchar(20) DEFAULT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;

-- Data for tabell Bruker
-- BNr er autonummerert (!)
INSERT INTO Bruker (Epost, Brukernavn, Passord) VALUES
('vidaraarvik@gmail.com', 'vidaraarvik', 'test');







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


-- Data for tabell Treningsøkt
-- ØktNr er autonummerert (!)
INSERT INTO Treningsøkt (Dato, BNr, Øvelse, Minutter, Antall) VALUES
('2018-04-11', 1, 'Svømming', 30, 4);






--
-- Begrensninger for tabell Treningsøkt
--
ALTER TABLE Treningsøkt
  ADD CONSTRAINT TreningsøktBrukerFK FOREIGN KEY (BNr) REFERENCES Bruker (BNr);
