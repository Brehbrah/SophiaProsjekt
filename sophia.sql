-- SQL script som oppretter databasetabeller for Sophia prosjektet
------------------------------------------------------------------

-- Slett tabeller hvis de eksisterer fra før
DROP TABLE IF EXISTS Bruker;



-- Tabellstruktur for Bruker
CREATE TABLE IF NOT EXISTS Bruker (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Epost varchar(40) UNIQUE NOT NULL,
  Passord varchar(20) DEFAULT NULL,
  Fornavn varchar(20) NOT NULL,
  Etternavn varchar(20) NOT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;



-- Data for tabell Bruker
-- BNr autonummerert (!)
INSERT INTO Bruker (Epost, Passord, Fornavn, Etternavn) VALUES
('vidar@abc.com', 'hemmelig', 'Vidar', 'Aarvik'),
('jola@xyz.no', 'ksn23h', 'Joakim', 'Laursen'),
('laur88@xyz.no', 'alen6s', 'Laurits', 'Eckhoff'),
('aasae@zzz.se', 's7wu2b', 'Åshild', 'Sætran'),
('toroe@xyz.no', 'mskw6e', 'Torgrim', 'Østbø');