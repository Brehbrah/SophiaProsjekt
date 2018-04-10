-- SQL script som oppretter databasetabeller for Sophia prosjektet

-- Slett tabeller hvis de eksisterer fra før
DROP TABLE IF EXISTS Bruker;



-- Tabellstruktur for Bruker
CREATE TABLE IF NOT EXISTS Bruker (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Epost varchar(40) UNIQUE NOT NULL,
  Brukernavn varchar(20) NOT NULL,
  Passord varchar(20) DEFAULT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;



-- Data for tabell Bruker
-- BNr autonummerert (!)
INSERT INTO Bruker (Epost, Brukernavn, Passord) VALUES
('vidaraarvik@gmail.com', 'vidaraarvik', 'test');