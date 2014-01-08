
--
-- Base de données: `bddracoin`
--
CREATE DATABASE IF NOT EXISTS `bddracoin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
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

create table if not exists utilisateur (
	idutil int(10) not null,
	nom varchar(40) not null,
	prenom varchar(40) not null,
	ville varchar(40) not null,
	codepost int(5) not null,
	departement varchar(40) not null,
	mail varchar(40) not null,
	telephone int(10),
	PRIMARY KEY (idutil)
);

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `idannonce` int(10) NOT NULL,
  `titreannonce` varchar(40) NOT NULL,
  `descriptifannonce` varchar(400) NOT NULL,
  `prixannonce` int(10) NOT NULL,
  `dateannonce` date NOT NULL,
  `idutil` int(10) NOT NULL,
  `idcateg` int(10) NOT NULL,
  PRIMARY KEY (`idannonce`),
  foreign key (idcateg) references categorie(idcateg)
);


--
-- Structure de la table photo
--

create table if not exists photo (
	idphoto int(10) not null,
	url varchar(100) not null,
	idannonce int(10) not null,
	PRIMARY KEY (idphoto),
	foreign key (idannonce) references annonce(idannonce)
);

INSERT INTO categorie (idcateg, labelcateg) VALUES (1    , 'automobiles');
INSERT INTO categorie (idcateg, labelcateg) VALUES (2    , 'velo');

INSERT INTO utilisateur (idutil, nom, prenom, ville, codepost, departement, mail, telephone) VALUES (1,'Dupont','Bertrand','Chaumont',52000,'Haute-Marne','b.dupont@hotmail.com',0325321400);
INSERT INTO utilisateur (idutil, nom, prenom, ville, codepost, departement, mail, telephone) VALUES (2,'Bourgeois','Maxime','Paris',75000,'Ile de France','maxime.bourgeois@hotmail.com',0654891478);

INSERT INTO annonce (idannonce, titreannonce, descriptifannonce, prixannonce, dateannonce, idutil, idcateg) VALUES (1,'VTT Decathlon','un méga super beau VTT décathlon presque pas volé',90,2013-12-15,1,2);
INSERT INTO annonce (idannonce, titreannonce, descriptifannonce, prixannonce, dateannonce, idutil, idcateg) VALUES (2,'BMW 335i','Je vend ma super BMW à pas cher parce que voilà',9000,2013-12-11,2,1);













