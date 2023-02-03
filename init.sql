
-- Délétion de tables
DROP TABLE IF EXISTS Facturation;
DROP TABLE IF EXISTS Reservation;
DROP TABLE IF EXISTS Formule;
DROP TABLE IF EXISTS Semaine;
DROP TABLE IF EXISTS Habitation;
DROP TABLE IF EXISTS Client;

-- Création de tables

CREATE TABLE Habitation(
    id_habitation SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nb_place SMALLINT NOT NULL,
-- CLEFS
    PRIMARY KEY(id_habitation)
);

CREATE TABLE Client(
    id_client SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    nom VARCHAR(40) NOT NULL,
    tel VARCHAR(40) NOT NULL,
    email VARCHAR(255) NOT NULL,
-- CLEFS
    PRIMARY KEY(id_client)
);

CREATE TABLE Semaine(
    id_semaine SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    est_weekend BOOLEAN DEFAULT false,
    date_debut DATE NOT NULL,
    date_fin DATE NOT NULL,
    saison VARCHAR(70),
-- CLEFS
    PRIMARY KEY(id_semaine),
-- CHECKS
    CHECK(date_debut < date_fin)
);

CREATE TABLE Formule(
    id_formule SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
    option_menage BOOLEAN,
    option_draps BOOLEAN,
    id_habitation SMALLINT UNSIGNED NOT NULL,
-- CLEFS
    PRIMARY KEY(id_formule),
    FOREIGN KEY(id_habitation) REFERENCES Habitation(id_habitation)
);

CREATE TABLE Reservation(
    id_client SMALLINT UNSIGNED NOT NULL,
    id_semaine SMALLINT UNSIGNED NOT NULL,
    id_formule SMALLINT UNSIGNED NOT NULL,
    prix SMALLINT UNSIGNED DEFAULT 0,
-- CLEFS
    PRIMARY KEY(id_client, id_semaine, id_formule),
    FOREIGN KEY(id_client) REFERENCES Client(id_client),
    FOREIGN KEY(id_semaine) REFERENCES Semaine(id_semaine),
    FOREIGN KEY(id_formule) REFERENCES Formule(id_formule)
);

CREATE TABLE Facturation(
    id_client SMALLINT UNSIGNED NOT NULL,
    id_semaine SMALLINT UNSIGNED NOT NULL,
    id_formule SMALLINT UNSIGNED NOT NULL,
    prix SMALLINT UNSIGNED DEFAULT 0,
-- CLEFS
    PRIMARY KEY(id_client, id_semaine, id_formule),
    FOREIGN KEY(id_client) REFERENCES Client(id_client),
    FOREIGN KEY(id_semaine) REFERENCES Semaine(id_semaine),
    FOREIGN KEY(id_formule) REFERENCES Formule(id_formule)
);