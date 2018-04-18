-- ############ SQL script for Sophia prosjektet, ############
-- ############ kjøres lokalt på xampp database.  ############




--
--  ############ DROP * IF EXISTS ############
--
-- Slett tabeller hvis de eksisterer fra før
DROP TABLE IF EXISTS Preferanser;
DROP TABLE IF EXISTS Treningsøkt;
DROP TABLE IF EXISTS Bruker;

-- Slett triggere hvis de eksisterer fra før
DROP TRIGGER IF EXISTS ny_bruker_registrert;

-- Slett lagrede rutiner hvis de eksisterer fra før
DROP PROCEDURE IF EXISTS NyBruker;
DROP PROCEDURE IF EXISTS HentBruker;
DROP PROCEDURE IF EXISTS NyTreningsøkt;
DROP PROCEDURE IF EXISTS AlleTreningsøkter;
DROP PROCEDURE IF EXISTS DatoTreningsøkter;
DROP PROCEDURE IF EXISTS EndrePreferanser;
DROP PROCEDURE IF EXISTS HentPreferanser;
DROP PROCEDURE IF EXISTS HentTopp10;








--
--  ############ Tabellstrukturer ############
--
-- Tabellstruktur for Bruker
CREATE TABLE IF NOT EXISTS Bruker (
  BNr int(5) NOT NULL AUTO_INCREMENT,
  Epost varchar(40) UNIQUE NOT NULL,
  Brukernavn varchar(20) NOT NULL,
  Passord varchar(255) DEFAULT NULL,
  PRIMARY KEY (BNr)
) ENGINE=InnoDB;


-- Tabellstruktur for Preferanser
CREATE TABLE IF NOT EXISTS Preferanser (
  BNr int(5) DEFAULT NULL,
  Mål varchar(20) NOT NULL,
  Aktivitetsnivå varchar(20) NOT NULL,
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









--
--  ############ Lagrede Rutiner ############
--
-- Rutine som oppretter en ny Bruker
DELIMITER $$
CREATE PROCEDURE NyBruker
(
  IN b_epost    varchar(40),
  IN b_navn     varchar(20),
  IN b_passord  varchar(255)
)
BEGIN
  INSERT INTO Bruker (Epost, Brukernavn, Passord) 
  VALUES (b_epost, b_navn, b_passord);
END$$
DELIMITER ;


-- Rutine som henter data til gitt Brukernavn
DELIMITER $$
CREATE PROCEDURE HentBruker
(
  IN b_navn     varchar(20)
)
BEGIN
  SELECT * FROM bruker WHERE Brukernavn = b_navn;
END$$
DELIMITER ;


-- Rutine som oppretter en ny Treningsøkt
DELIMITER $$
CREATE PROCEDURE NyTreningsøkt
(
  IN t_dato   date,
  IN t_bnr    int(5),
  IN t_øvelse varchar(20),
  IN t_min    int(5),
  IN t_ant    int(5)
)
BEGIN
  INSERT INTO Treningsøkt (Dato, BNr, Øvelse, Minutter, Antall)
  VALUES (t_dato, t_bnr, t_øvelse, t_min, t_ant);
END$$
DELIMITER ;


-- Rutine som henter samtlige Treningsøkter til gitt bruker
DELIMITER $$
CREATE PROCEDURE AlleTreningsøkter
(
  IN t_bnr    int(5)
)
BEGIN
  SELECT * FROM Treningsøkt WHERE BNr = t_bnr;
END$$
DELIMITER ;



-- Rutine som henter samtlige Treningsøkter til gitt bruker på gitt dato
DELIMITER $$
CREATE PROCEDURE DatoTreningsøkter
(
  IN t_bnr    int(5),
  IN t_dato   date
)
BEGIN
  SELECT * FROM Treningsøkt WHERE BNr = t_bnr AND Dato = t_dato;
END$$
DELIMITER ;


-- Rutine som endrer brukerens preferanser
DELIMITER $$
CREATE PROCEDURE EndrePreferanser
(
  IN p_bnr       int(5),
  IN p_mål       varchar(20),
  IN p_aktivitet varchar(20)
)
BEGIN
  UPDATE Preferanser 
  SET Mål = p_mål, Aktivitetsnivå = p_aktivitet WHERE BNr = p_bnr;
END$$
DELIMITER ;


-- Rutine som henter brukerens preferanser
DELIMITER $$
CREATE PROCEDURE HentPreferanser
(
  IN p_bnr       int(5)
)
BEGIN
  SELECT * FROM Preferanser WHERE BNr = p_bnr;
END$$
DELIMITER ;


-- Rutine som henter brukere til 'Topp 10' listen
DELIMITER $$
CREATE PROCEDURE HentTopp10()
BEGIN
  SELECT bruker.Brukernavn, treningsøkt.BNr, SUM(Minutter) 
  FROM Treningsøkt 
  INNER JOIN bruker ON treningsøkt.BNr=bruker.BNr 
  GROUP BY BNr 
  ORDER BY SUM(Minutter) 
  DESC LIMIT 10;
END$$
DELIMITER ;











--
--  ############ Triggere ############
--
-- Trigger som oppretter preferanser for ny bruker
DELIMITER $$
CREATE TRIGGER ny_bruker_registrert
AFTER INSERT ON bruker
FOR EACH ROW
BEGIN
  INSERT INTO Preferanser (BNr, Mål, Aktivitetsnivå)
  VALUES (new.BNr, 'Ikke valgt', 'Ikke valgt');
END$$
DELIMITER ;











--
--  ############ Tabell-Data ############
--
-- Data for tabell Bruker
-- BNr er autonummerert (!)
INSERT INTO Bruker (Epost, Brukernavn, Passord) VALUES
('admin@admin.com', 'admin', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('arne@gmail.com', 'Arne', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('bjørn@gmail.com', 'Bjørn', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('cathrine@gmail.com', 'Cathrine', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('daniel@gmail.com', 'Daniel', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('erik@gmail.com', 'Erik', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('frida@gmail.com', 'Frida', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('geir@gmail.com', 'Geir', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('hanne@gmail.com', 'Hanne', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.'),
('ida@gmail.com', 'Ida', '$2y$10$abv9pRRmWCntXL42.HIBSuCNmFqvl7BSJGqMtDivzXMYsUU8D5xQ.');


-- Data for tabell Treningsøkt
-- ØktNr er autonummerert (!)
INSERT INTO Treningsøkt (Dato, BNr, Øvelse, Minutter, Antall) VALUES
('2018-04-05', 1, 'Svømming', 60, 6),
('2018-04-06', 2, 'Vektløfting', 20, 3),
('2018-04-07', 3, 'Svømming', 31, 3),
('2018-04-08', 4, 'Løping', 30, 4),
('2018-04-09', 6, 'Sykling', 45, 4),
('2018-04-10', 7, 'Vektløfting', 20, 2),
('2018-04-11', 8, 'Vektløfting', 60, 6),
('2018-04-12', 9, 'Vektløfting', 40, 3),
('2018-04-13', 10, 'Svømming', 30, 4),
('2018-04-14', 4, 'Svømming', 30, 4),
('2018-04-15', 5, 'Vektløfting', 30, 4),
('2018-04-16', 2, 'Svømming', 30, 4),
('2018-04-17', 2, 'Svømming', 30, 4),
('2018-04-18', 2, 'Vektløfting', 30, 4),
('2018-04-19', 2, 'Svømming', 30, 4),
('2018-04-20', 2, 'Vektløfting', 30, 4),
('2018-04-21', 1, 'Svømming', 60, 6),
('2018-04-22', 1, 'Vektløfting', 20, 3),
('2018-04-23', 1, 'Svømming', 31, 3),
('2018-04-24', 3, 'Løping', 30, 4),
('2018-04-25', 4, 'Sykling', 45, 4),
('2018-04-26', 5, 'Vektløfting', 20, 2),
('2018-04-27', 5, 'Vektløfting', 60, 6),
('2018-04-28', 6, 'Vektløfting', 40, 3),
('2018-04-29', 3, 'Svømming', 30, 4),
('2018-04-30', 3, 'Svømming', 30, 4),
('2018-04-01', 3, 'Vektløfting', 30, 4),
('2018-04-02', 5, 'Svømming', 30, 4),
('2018-04-03', 6, 'Svømming', 30, 4),
('2018-04-04', 6, 'Vektløfting', 30, 4),
('2018-04-05', 1, 'Svømming', 30, 4),
('2018-04-06', 2, 'Vektløfting', 30, 4),
('2018-04-07', 4, 'Svømming', 60, 6),
('2018-04-08', 4, 'Vektløfting', 20, 3),
('2018-04-09', 4, 'Svømming', 31, 3),
('2018-04-10', 4, 'Løping', 30, 4),
('2018-04-11', 2, 'Sykling', 45, 4),
('2018-04-12', 2, 'Vektløfting', 20, 2),
('2018-04-13', 3, 'Vektløfting', 60, 6),
('2018-04-14', 3, 'Vektløfting', 40, 3),
('2018-04-15', 3, 'Svømming', 30, 4),
('2018-04-16', 3, 'Svømming', 30, 4),
('2018-04-17', 1, 'Vektløfting', 30, 4),
('2018-04-18', 5, 'Svømming', 30, 4),
('2018-04-19', 5, 'Svømming', 30, 4),
('2018-04-20', 5, 'Vektløfting', 30, 4),
('2018-04-21', 1, 'Svømming', 30, 4),
('2018-04-22', 1, 'Vektløfting', 30, 4),
('2018-04-23', 1, 'Svømming', 30, 4);










--
--  ############ Fremmednøkler ############
--
--
-- Fremmednøkler for tabell Treningsøkt
--
ALTER TABLE Treningsøkt
  ADD CONSTRAINT TreningsøktBrukerFK FOREIGN KEY (BNr) REFERENCES Bruker (BNr);


--
-- Fremmednøkler for tabell Preferanser
--
ALTER TABLE Preferanser
  ADD CONSTRAINT PreferanserBrukerFK FOREIGN KEY (BNr) REFERENCES Bruker (BNr);




