-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 18 mai 2020 à 14:46
-- Version du serveur :  5.7.19
-- Version de PHP :  7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gest_soutenance`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `ID_ADMIN` int(11) NOT NULL,
  `NOM_ADMIN` varchar(250) DEFAULT NULL,
  `PRENOM_ADMIN` varchar(250) DEFAULT NULL,
  `ADRESSE_ADMIN` varchar(250) DEFAULT NULL,
  `EMAIL` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID_ADMIN`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `avoir`
--

DROP TABLE IF EXISTS `avoir`;
CREATE TABLE IF NOT EXISTS `avoir` (
  `ID_SESS` int(11) NOT NULL,
  `ID_SALLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_SESS`,`ID_SALLE`),
  KEY `FK_AVOIR_AVOIR_SALLE` (`ID_SALLE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `creneaux`
--

DROP TABLE IF EXISTS `creneaux`;
CREATE TABLE IF NOT EXISTS `creneaux` (
  `ID_CRE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SESS` int(11) NOT NULL,
  `JOUR` date DEFAULT NULL,
  `HEURE` time DEFAULT NULL,
  `ID_SALLE` int(11) NOT NULL,
  PRIMARY KEY (`ID_CRE`),
  KEY `FK_CRENEAUX_CONTENIR_SESSIONS` (`ID_SESS`),
  KEY `FK_DEROULE_SALLE` (`ID_SALLE`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `creneaux`
--

INSERT INTO `creneaux` (`ID_CRE`, `ID_SESS`, `JOUR`, `HEURE`, `ID_SALLE`) VALUES
(12, 1, '2020-04-07', '10:00:00', 4),
(11, 1, '2020-04-06', '09:00:00', 5),
(10, 2, '2020-04-07', '07:00:00', 5),
(9, 1, '2020-04-13', '04:11:00', 6),
(8, 2, '2020-04-07', '12:11:00', 6),
(7, 1, '2020-04-01', '02:06:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `ID_ENS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NOM_ENS` varchar(250) DEFAULT NULL,
  `PRENOM_ENS` varchar(250) DEFAULT NULL,
  `TEL_ENS` varchar(250) DEFAULT NULL,
  `ADRESSE_ENS` varchar(250) DEFAULT NULL,
  `EMAIL_ENS` varchar(250) DEFAULT NULL,
  `ROLE_ENS` varchar(250) DEFAULT NULL,
  `TYPE_USER` varchar(250) NOT NULL,
  `NUMERO_ENS` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_ENS`),
  KEY `FK_ENSEIGNA_INSCRIRE_ADMINIST` (`ID_ADMIN`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`ID_ENS`, `ID_ADMIN`, `NOM_ENS`, `PRENOM_ENS`, `TEL_ENS`, `ADRESSE_ENS`, `EMAIL_ENS`, `ROLE_ENS`, `TYPE_USER`, `NUMERO_ENS`) VALUES
(7, NULL, 'JEANS', 'Francois', '0605050505', '62 Rue Claudius-Antoine Serrassaint, ', 'abdouanfani1@gmail.com', 'Tuteur', 'enseignant', '20000');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID_ETU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_SESS` int(11) NOT NULL,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NOM_ETU` varchar(250) DEFAULT NULL,
  `PRENOM_ETU` varchar(250) DEFAULT NULL,
  `NUMERO_ETU` varchar(250) DEFAULT NULL,
  `EMAIL_ETU` varchar(250) DEFAULT NULL,
  `ADRESSE_ETU` varchar(250) DEFAULT NULL,
  `TEL_ETU` varchar(250) DEFAULT NULL,
  `TYPE_USER` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_ETU`),
  UNIQUE KEY `NUMERO_ETU` (`NUMERO_ETU`),
  KEY `FK_ETUDIANT_AJOUTER_ADMINIST` (`ID_ADMIN`),
  KEY `FK_ETUDIANT_CONCERNE_SESSIONS` (`ID_SESS`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_ETU`, `ID_SESS`, `ID_ADMIN`, `NOM_ETU`, `PRENOM_ETU`, `NUMERO_ETU`, `EMAIL_ETU`, `ADRESSE_ETU`, `TEL_ETU`, `TYPE_USER`) VALUES
(6, 2, NULL, 'Didier', 'Seba', '12345', 'essai@gmail.com', '62 Rue Claudius-Antoine Serrassaint, ', '0725366989', 'etudiant');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `ID_MOD` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_MOD` varchar(250) DEFAULT NULL,
  `NIVEAU` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_MOD`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`ID_MOD`, `NOM_MOD`, `NIVEAU`) VALUES
(1, 'RÃ©seaux', 'Licence 1'),
(5, 'Physique', 'Licence 1'),
(4, 'Anglais', 'Licence 2');

-- --------------------------------------------------------

--
-- Structure de la table `rendu`
--

DROP TABLE IF EXISTS `rendu`;
CREATE TABLE IF NOT EXISTS `rendu` (
  `ID_RENDU` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ETU` int(11) NOT NULL,
  `INTITULE_RENDU` varchar(250) DEFAULT NULL,
  `TYPE_RENDU` varchar(250) DEFAULT NULL,
  `FICHIER_RENDU` varchar(250) DEFAULT NULL,
  `NOTE_RENDU` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID_RENDU`),
  KEY `FK_RENDU_RENDRE_ETUDIANT` (`ID_ETU`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `rendu`
--

INSERT INTO `rendu` (`ID_RENDU`, `ID_ETU`, `INTITULE_RENDU`, `TYPE_RENDU`, `FICHIER_RENDU`, `NOTE_RENDU`) VALUES
(22, 7, 'Fiche', 'TEL', 'fiche_faisabilite_GMC.pdf', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `ID_SALLE` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NOM_SALLE` varchar(250) DEFAULT NULL,
  `BAT_SALLE` varchar(250) NOT NULL,
  PRIMARY KEY (`ID_SALLE`),
  KEY `FK_SALLE_SAISIR_ADMINIST` (`ID_ADMIN`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`ID_SALLE`, `ID_ADMIN`, `NOM_SALLE`, `BAT_SALLE`) VALUES
(5, NULL, '12', 'B'),
(4, NULL, '11', 'B'),
(6, NULL, '11', 'D');

-- --------------------------------------------------------

--
-- Structure de la table `session_sou`
--

DROP TABLE IF EXISTS `session_sou`;
CREATE TABLE IF NOT EXISTS `session_sou` (
  `ID_SESS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ENS` int(11) DEFAULT NULL,
  `ID_MOD` int(11) NOT NULL,
  `INTITULE_SESS` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID_SESS`),
  KEY `FK_SESSION_CONTIENT_MODULE` (`ID_MOD`),
  KEY `FK_SESSIONS_CREER_ENSEIGNA` (`ID_ENS`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session_sou`
--

INSERT INTO `session_sou` (`ID_SESS`, `ID_ENS`, `ID_MOD`, `INTITULE_SESS`) VALUES
(1, NULL, 1, 'Session informatique'),
(2, NULL, 1, 'informatique 2'),
(3, NULL, 4, 'informatique 3'),
(4, NULL, 4, 'Gestion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
