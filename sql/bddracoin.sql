-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 21 Janvier 2014 à 10:30
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `bddracoin`
--
CREATE DATABASE IF NOT EXISTS `bddracoin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bddracoin`;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `idannonce` int(10) NOT NULL AUTO_INCREMENT,
  `titreannonce` varchar(40) NOT NULL,
  `descriptifannonce` text NOT NULL,
  `prixannonce` int(10) NOT NULL,
  `dateannonce` datetime NOT NULL,
  `villeannonce` varchar(400) NOT NULL,
  `codepostalannonce` varchar(400) NOT NULL,
  `motdepasseannonce` varchar(100) NOT NULL,
  `idutil` int(10) NOT NULL,
  `idcateg` int(10) NOT NULL,
  `emailannonce` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`idannonce`),
  KEY `idcateg` (`idcateg`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`idannonce`, `titreannonce`, `descriptifannonce`, `prixannonce`, `dateannonce`, `villeannonce`, `codepostalannonce`, `motdepasseannonce`, `idutil`, `idcateg`, `emailannonce`) VALUES
(1, 'VTT Decathlon TT', 'un m&eacute;ga super beau VTT d&eacute;cathlon presque pas vol&eacute;', 1020, '0000-00-00 00:00:00', 'Nancy', '54000', 'e10adc3949ba59abbe56e057f20f883e', 1, 2, 'test@test.fr'),
(2, 'BMW 335i', 'Je vend ma super BMW à pas cher parce que voilà', 9000, '0000-00-00 00:00:00', 'Nancy', '54000', '123456', 2, 1, NULL),
(3, 'Test Titre', 'Test descr idcate = 1', 999, '2014-01-12 14:58:58', 'Nancy', '54000', '0', 0, 2, NULL),
(4, 'Test Titre', 'Test descr idcate = 1', 999, '2014-01-12 15:07:03', 'Nancy', '54000', '0', 0, 2, NULL),
(5, 'Test', 'Test Desc', 98745, '2014-01-12 16:15:21', 'Testtt', '77', '0', 3, 12, 'boubou@se.fr'),
(6, '', '', 0, '2014-01-12 16:25:37', '', '', '0', 4, 1, ''),
(7, '', '', 0, '2014-01-12 16:27:08', '', '', '4', 5, 1, ''),
(8, '', '', 0, '2014-01-12 16:28:14', '', '', '0', 6, 1, ''),
(9, '', '', 0, '2014-01-12 16:37:53', '', '', '0', 7, 1, ''),
(10, '', '', 0, '2014-01-12 16:41:58', '', '', '0', 8, 1, ''),
(11, 'sdfsdf', 'dsfsdf', 0, '2014-01-14 13:32:35', '', '', '0', 9, 1, ''),
(12, 'sdfsdf', 'dsfsdf', 0, '2014-01-14 13:41:06', '', '', '0', 10, 1, ''),
(13, '', '', 0, '2014-01-14 13:41:27', '', '', '0', 11, 1, ''),
(14, '', '', 0, '2014-01-14 13:42:45', '', '', '0', 12, 1, ''),
(15, '', '', 0, '2014-01-14 13:43:40', '', '', '0', 13, 1, ''),
(16, '', '', 0, '2014-01-14 13:51:00', '', '', '0', 14, 1, ''),
(17, '', '', 0, '2014-01-14 13:51:00', '', '', '0', 15, 1, ''),
(18, '', '', 0, '2014-01-14 13:51:00', '', '', '0', 16, 1, ''),
(19, '', '', 0, '2014-01-14 13:56:05', '', '', '0', 17, 1, ''),
(20, '', '', 0, '2014-01-14 13:58:06', '', '', '0', 18, 1, ''),
(21, '', '', 0, '2014-01-14 13:58:06', '', '', '0', 19, 1, ''),
(22, '', '', 0, '2014-01-14 13:58:06', '', '', '0', 20, 1, ''),
(23, '', '', 0, '2014-01-14 13:58:06', '', '', '0', 21, 1, ''),
(24, '', '', 0, '2014-01-14 14:05:56', '', '', '0', 22, 1, ''),
(25, '', '', 0, '2014-01-14 14:20:02', '', '', '0', 23, 1, ''),
(26, '', '', 0, '2014-01-14 14:25:45', '', '', '0', 24, 1, ''),
(27, '', '', 0, '2014-01-14 14:26:00', '', '', '0', 25, 1, ''),
(28, 'dgfdfgd', 'dfgdfg', 0, '2014-01-14 14:26:26', '', '', '0', 26, 1, ''),
(29, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 27, 1, ''),
(30, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 28, 1, ''),
(31, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 29, 1, ''),
(32, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 30, 1, ''),
(33, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 31, 1, ''),
(34, '', '', 0, '2014-01-14 15:21:27', '', '', '0', 32, 1, ''),
(35, '', '', 0, '2014-01-14 15:37:28', '', '', '0', 33, 1, ''),
(36, '', '', 0, '2014-01-14 15:37:51', '', '', '0', 34, 1, ''),
(37, '', '', 0, '2014-01-14 15:49:23', '', '', '0', 35, 1, ''),
(38, '', '', 0, '2014-01-14 15:50:01', '', '', '0', 36, 1, ''),
(39, '', '', 0, '2014-01-14 15:50:01', '', '', '0', 37, 1, ''),
(40, '', '', 0, '2014-01-14 15:54:28', '', '', '0', 38, 1, ''),
(41, 'dsfsdfdsf', '', 0, '2014-01-14 15:56:05', '', '', '0', 39, 1, ''),
(42, 'fxhg', '', 2, '2014-01-14 16:02:40', 'gsh', 'sshh', '0', 40, 3, 'sgh@pd'),
(43, 'Test annonce photo', 'Test annonce photo', 1, '2014-01-21 10:09:41', 'Nancy', '54000', 'e10adc3949ba59abbe56e057f20f883e', 41, 1, 'test@test.fr');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idcateg` int(10) NOT NULL,
  `labelcateg` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idcateg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idcateg`, `labelcateg`) VALUES
(1, 'Automobiles'),
(2, 'Vélos'),
(3, 'Utilitaires'),
(4, 'Equipement véhicule'),
(5, 'Ventes Immo'),
(6, 'Locations Immo'),
(7, 'Colocations'),
(8, 'Vacances'),
(9, 'Informatiques'),
(11, 'Images & son'),
(12, 'Jeux Vidéos'),
(13, 'Téléphonie'),
(14, 'Jardinage'),
(15, 'Electroménagers'),
(16, 'Bébés'),
(17, 'Vétements'),
(18, 'Livres'),
(19, 'Sports'),
(20, 'Musiques'),
(21, 'Animaux'),
(22, 'Empois'),
(23, 'Billeteries'),
(24, 'Evenements'),
(25, 'Cours particuliers'),
(26, 'Autres & Divers');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idphoto` int(10) NOT NULL AUTO_INCREMENT,
  `nomphoto` varchar(100) NOT NULL,
  `cheminfull` varchar(100) NOT NULL,
  `cheminthum` varchar(100) NOT NULL,
  `idannonce` int(10) NOT NULL,
  PRIMARY KEY (`idphoto`),
  KEY `idannonce` (`idannonce`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`idphoto`, `nomphoto`, `cheminfull`, `cheminthum`, `idannonce`) VALUES
(1, 'golfr32-3.jpg', 'files/6104281e2d66a3b36003e95bbbf0d1e5.jpg', 'files/6104281e2d66a3b36003e95bbbf0d1e5.jpg', 25),
(2, 'golfr32-3.jpg', 'files/208b37d30470611e050f88b5da149884.jpg', 'files/thumb/9ed5110a166f91583f441ac451b3888c.jpg', 26),
(3, 'golfr32-3.jpg', 'files/682ac6bc7d05d71bda7b50adfdc399e8.jpg', 'files/thumb/4d2609a4b20b2031523875dd37f1aaa4.jpg', 27),
(4, 'fr.PNG', 'files/c9be0a39138cfae71428d2d576f49280.png', 'files/thumb/2a40b2958cab9323f9431b55922e1f9b.png', 27),
(5, 'fr.PNG', 'files/8df69f287b2715cbde1f7367f630f62b.png', 'files/thumb/5d0cdffcfec4da4798b8c96e354ed81a.png', 43),
(6, 'golfr32-1.jpg', 'files/eac98321055ce5d12c61b697e0766e55.jpg', 'files/thumb/20dd81d2a189aa3d687abfaa8af0285b.jpg', 43),
(7, 'golfr32-2.jpg', 'files/b3ab4cd426fd4b86b30fd770a745f160.jpg', 'files/thumb/b47c1de95aa0663477a558407393fc70.jpg', 43);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idutil` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `ville` varchar(40) NOT NULL,
  `codepost` int(5) NOT NULL,
  `departement` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `motdepasse` varchar(40) NOT NULL,
  `telephone` int(10) DEFAULT NULL,
  PRIMARY KEY (`idutil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idutil`, `nom`, `prenom`, `ville`, `codepost`, `departement`, `mail`, `motdepasse`, `telephone`) VALUES
(1, 'Dupont', 'Bertrand', 'Chaumont', 52000, 'Haute-Marne', 'b.dupont@hotmail.com', '123456', 325321400),
(2, 'Bourgeois', 'Maxime', 'Paris', 75000, 'Ile de France', 'maxime.bourgeois@hotmail.com', '123456', 654891478),
(3, 'Boubou', 'Max', 'Testtt', 77, 'osef', 'boubou@se.fr', '0', 352489658),
(4, '', '', '', 0, 'osef', '', '0', 0),
(5, '', '', '', 0, 'osef', '', '4', 0),
(6, '', '', '', 0, 'osef', '', '0c2f66f43752d47fb49abeea0badf47a', 0),
(7, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(8, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(9, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(10, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(11, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(12, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(13, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(14, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(15, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(16, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(17, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(18, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(19, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(20, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(21, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(22, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(23, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(24, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(25, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(26, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(27, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(28, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(29, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(30, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(31, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(32, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(33, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(34, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(35, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(36, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(37, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(38, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(39, '', '', '', 0, 'osef', '', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(40, 'shg', 'shh', 'gsh', 0, 'osef', 'sgh@pd', 'acc5f213cc66adeb25d9e7577b793f70', 0),
(41, 'test', 'test', 'Nancy', 54000, 'osef', 'test@test.fr', 'e10adc3949ba59abbe56e057f20f883e', 212131254);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `annonce_ibfk_1` FOREIGN KEY (`idcateg`) REFERENCES `categorie` (`idcateg`);

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`idannonce`) REFERENCES `annonce` (`idannonce`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
