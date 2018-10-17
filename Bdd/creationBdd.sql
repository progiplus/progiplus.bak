DROP progiplus;

CREATE DATABASE progiplus;

use progiplus;

create table civilite(
	id_civilite int(10) PRIMARY KEY AUTO_INCREMENT,
	libelle VARCHAR(50) NOT NULL
);

CREATE TABLE tva(
	id_tva int (10) PRIMARY KEY AUTO_INCREMENT,
	taux DECIMAL(4,2) NOT NULL,
	actif TINYINT(2) NOT NULL,
	CONSTRAINT chk_taux CHECK (taux > 0 )
);

CREATE TABLE categorie_produit(
	id_categorie INT(10) PRIMARY KEY AUTO_INCREMENT,
	libelle VARCHAR(50) NOT NULL
);

CREATE TABLE concerner (
	id_categorie1 int(10) PRIMARY KEY NOT NULL,
   	id_categorie2 int(10) NOT NULL,
    CONSTRAINT FK_id_categorie1 FOREIGN KEY (id_categorie1) REFERENCES categorie(id_categorie),
    CONSTRAINT FK_id_categorie2 FOREIGN KEY (id_categorie2) REFERENCES categorie(id_categorie)
);

CREATE TABLE marque (
	id_marque int(10) PRIMARY KEY NOT NULL,
	libelle VARCHAR(100) not NULL
);

CREATE TABLE gamme (
	id_gamme int(10) PRIMARY KEY NOT NULL,
	libelle VARCHAR libelle VARCHAR(100) NOT NULL,
	id_marque int(10),
	CONSTRAINT FK_id_marque FOREIGN KEY (id_marque) REFERENCES marque(id_marque)
);

CREATE TABLE produit(
	id_produit INT(10) PRIMARY KEY AUTO_INCREMENT,
	reference VARCHAR(50) NOT NULL,
	designation VARCHAR(50) NOT NULL,
	prix_unitaire_ht DECIMAL(6,2) NOT NULL,
	id_categorie INT(10),
	id_gamme INT(10,)
	CONSTRAINT fk_categorieProduit FOREIGN KEY(id_categorie) REFERENCES categorie(id_categorie),
	CONSTRAINT FK_id_gamme FOREIGN KEY (id_gamme) REFERENCES gamme(id_gamme),
	CONSTRAINT chk_prixUHt CHECK (prix_unitaire_ht > 0 )
);






