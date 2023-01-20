
-- Délétion de tables

DROP TABLE IF EXISTS Reservation;
DROP TABLE IF EXISTS Habitation;
DROP TABLE IF EXISTS Client;
DROP TABLE IF EXISTS Tarif;

-- Création de tables

CREATE TABLE IF NOT EXISTS Habitation(
    id_habitation SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nb_place SMALLINT NOT NULL,
    prix_base_par_jour SMALLINT,
-- CLEFS
    PRIMARY KEY(id_habitation)
);

CREATE TABLE Client(
    id_client SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40) NOT NULL,
    prenom VARCHAR(40) NOT NULL,
    tel VARCHAR(40) NOT NULL,
    email VARCHAR(255) NOT NULL,
-- CLEFS
    PRIMARY KEY(id_client)
);

CREATE TABLE Tarif(
    id_tarif SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom VARCHAR(60) NOT NULL,
    pourcentage SMALLINT UNSIGNED DEFAULT 100,
    debut_saison DATE,
    fin_saison DATE,
-- CLEFS
    PRIMARY KEY(id_tarif)
);

CREATE TABLE Reservation(
    id_client SMALLINT UNSIGNED NOT NULL,
    id_habitation SMALLINT UNSIGNED NOT NULL,
    id_tarif SMALLINT UNSIGNED NOT NULL,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    option_menage BOOLEAN DEFAULT false,
    option_draps BOOLEAN DEFAULT false,
    reduction SMALLINT UNSIGNED DEFAULT 0,
-- CLEFS
    PRIMARY KEY(id_client, id_habitation, id_tarif),
    FOREIGN KEY(id_client) REFERENCES Client(id_client),
    FOREIGN KEY(id_habitation) REFERENCES Habitation(id_habitation),
    FOREIGN KEY(id_tarif) REFERENCES Tarif(id_tarif),
-- CHECKS
    CHECK (date_debut < date_fin)
);

DELIMITER ;;
CREATE PROCEDURE IF NOT EXISTS check_dates(IN new_date_deb DATE, IN new_date_fin DATE, IN new_id_hab INT)
BEGIN
DECLARE date_deb DATE;
DECLARE date_fin DATE;
DECLARE id_hab INT;
DECLARE nbRow INT;
DECLARE index INT;
SELECT COUNT(*) FROM Reservation INTO nbRow;
SET index = 0;
WHILE index < nbRow DO
    SET date_deb = SELECT date_debut FROM Reservation LIMIT index, 1;
    SET date_fin = SELECT date_fin FROM Reservation LIMIT index, 1;
    SET id_hab = SELECT id_habitation FROM Reservation LIMIT index, 1;
    -- condition représentant des dates qui se superposent
    IF ( ( ( (date_deb < new_date_deb) AND (date_fin > new_date_deb) ) OR ( (date_deb < new_date_fin) AND (date_fin > new_date_fin) ) ) AND (id_hab = new_id_hab) ) THEN
        SIGNAL SQLSTATE '-20000';
        SET MESSAGE_TEXT = 'Les dates des deux reservation se chevauchent';
    END IF;
    SET index = index + 1;
END WHILE;
END;;
DELIMITER ;


-- Les triggers

-- refuse l'insert si ( (old.dateDeb < new.dateDeb && old.dateFin > new.dateDeb ) || (old.dateDeb < new.dateFin && old.dateFin > new.dateFin ) ) && old.id_habitation === new.ide_habitation <=> quand deux dates de réservation s'interpose
CREATE TRIGGER Reservation_Overlap
BEFORE INSERT ON Reservation
BEGIN
CALL check_dates(new.date_debut, new.date_fin, new.id_habitation);
END;