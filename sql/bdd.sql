
--
-- Base de données: `bddracoin`
--
CREATE DATABASE IF NOT EXISTS `bddracoin` DEFAULT CHARACTER SET utf8;
USE `bddracoin`;

-- --------------------------------------------------------



--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idcateg` int(10) NOT NULL,
  `labelcateg` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idcateg`)
);

--
-- Structure de la table utilisateur
--

create table if not exists `utilisateur` (
	`idutil` int(10) not null AUTO_INCREMENT,
	`nom` varchar(40) not null,
	`prenom` varchar(40) not null,
	`ville` varchar(40) not null,
	`codepost` int(5) not null,
	`departement` varchar(40) not null,
	`mail` varchar(40) not null,
	`motdepasse` int(40) not null,
	`telephone` int(10),
	PRIMARY KEY (`idutil`)
);

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `idannonce` int(10) NOT NULL AUTO_INCREMENT,
  `titreannonce` varchar(40) NOT NULL,
  `descriptifannonce` text NOT NULL,
  `prixannonce` int(10) NOT NULL,
  `dateannonce`datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `villeannonce` varchar(400) NOT NULL,
  `codepostalannonce` varchar(400) NOT NULL,
  `motdepasseannonce` int(10) NOT NULL,
  `idutil` int(10) NOT NULL,
  `idcateg` int(10) NOT NULL,
  PRIMARY KEY (`idannonce`),
  foreign key (`idcateg`) references categorie(`idcateg`)
);


--
-- Structure de la table photo
--

create table if not exists `photo` (
	`idphoto` int(10) not null AUTO_INCREMENT,
	`nomphoto` varchar(100) not null,
	`cheminfull` varchar(100) not null,
	`cheminthum` varchar(100) not null,
	`idannonce` int(10) not null,
	PRIMARY KEY (`idphoto`),
	foreign key (`idannonce`) references annonce(idannonce)
);

INSERT INTO categorie (idcateg, labelcateg) VALUES (1, 'Automobiles');
INSERT INTO categorie (idcateg, labelcateg) VALUES (2, 'Vélos');
INSERT INTO categorie (idcateg, labelcateg) VALUES (3, 'Utilitaires');
INSERT INTO categorie (idcateg, labelcateg) VALUES (4, 'Equipement véhicule');
INSERT INTO categorie (idcateg, labelcateg) VALUES (5, 'Ventes Immo');
INSERT INTO categorie (idcateg, labelcateg) VALUES (6, 'Locations Immo');
INSERT INTO categorie (idcateg, labelcateg) VALUES (7, 'Colocations');
INSERT INTO categorie (idcateg, labelcateg) VALUES (8, 'Vacances');
INSERT INTO categorie (idcateg, labelcateg) VALUES (9, 'Informatiques');
INSERT INTO categorie (idcateg, labelcateg) VALUES (11, 'Images & son');
INSERT INTO categorie (idcateg, labelcateg) VALUES (12, 'Jeux Vidéos');
INSERT INTO categorie (idcateg, labelcateg) VALUES (13, 'Téléphonie');
INSERT INTO categorie (idcateg, labelcateg) VALUES (14, 'Jardinage');
INSERT INTO categorie (idcateg, labelcateg) VALUES (15, 'Electroménagers');
INSERT INTO categorie (idcateg, labelcateg) VALUES (16, 'Bébés');
INSERT INTO categorie (idcateg, labelcateg) VALUES (17, 'Vétements');
INSERT INTO categorie (idcateg, labelcateg) VALUES (18, 'Livres');
INSERT INTO categorie (idcateg, labelcateg) VALUES (19, 'Sports');
INSERT INTO categorie (idcateg, labelcateg) VALUES (20, 'Musiques');
INSERT INTO categorie (idcateg, labelcateg) VALUES (21, 'Animaux');
INSERT INTO categorie (idcateg, labelcateg) VALUES (22, 'Empois');
INSERT INTO categorie (idcateg, labelcateg) VALUES (23, 'Billeteries');
INSERT INTO categorie (idcateg, labelcateg) VALUES (24, 'Evenements');
INSERT INTO categorie (idcateg, labelcateg) VALUES (25, 'Cours particuliers');
INSERT INTO categorie (idcateg, labelcateg) VALUES (26, 'Autres & Divers');

INSERT INTO utilisateur (idutil, nom, prenom, ville, codepost, departement, mail, motdepasse, telephone) 
VALUES (1,'Dupont','Bertrand','Chaumont',52000,'Haute-Marne','b.dupont@hotmail.com',123456,0325321400);
INSERT INTO utilisateur (idutil, nom, prenom, ville, codepost, departement, mail, motdepasse, telephone) 
VALUES (2,'Bourgeois','Maxime','Paris',75000,'Ile de France','maxime.bourgeois@hotmail.com',123456,0654891478);

INSERT INTO annonce (idannonce, titreannonce, descriptifannonce, prixannonce, dateannonce, villeannonce, codepostalannonce, motdepasseannonce, idutil, idcateg) 
VALUES (1,'VTT Decathlon','un méga super beau VTT décathlon presque pas volé',90,2013-12-15,'Nancy',54000, 123456, 1,2);
INSERT INTO annonce (idannonce, titreannonce, descriptifannonce, prixannonce, dateannonce, villeannonce, codepostalannonce, motdepasseannonce, idutil, idcateg) 
VALUES (2,'BMW 335i','Je vend ma super BMW à pas cher parce que voilà',9000,2013-12-11,'Nancy',54000, 123456,2,1);













