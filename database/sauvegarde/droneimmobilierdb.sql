-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 16 déc. 2023 à 11:52
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `droneimmobilierdb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int NOT NULL AUTO_INCREMENT,
  `id_membreFK` int NOT NULL,
  `poste` enum('admin','adjoint') DEFAULT 'adjoint',
  PRIMARY KEY (`id_admin`),
  KEY `fk_admin` (`id_membreFK`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `id_membreFK`, `poste`) VALUES
(1, 1, 'admin'),
(2, 2, 'adjoint');

-- --------------------------------------------------------

--
-- Structure de la table `bien`
--

DROP TABLE IF EXISTS `bien`;
CREATE TABLE IF NOT EXISTS `bien` (
  `id_Bien` int NOT NULL AUTO_INCREMENT,
  `id_adminFK` int NOT NULL,
  `reference_bien` varchar(150) NOT NULL,
  `titre_bien` varchar(250) NOT NULL,
  `description_bien` text NOT NULL,
  `location_vente` enum('location','vente') DEFAULT 'location',
  `prix_bien` float NOT NULL,
  `pays_bien` varchar(250) NOT NULL,
  `ville_bien` varchar(250) NOT NULL,
  `date_time_bien` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `lien_photo1` varchar(255) DEFAULT NULL,
  `lien_photo2` varchar(255) DEFAULT NULL,
  `lien_photo3` varchar(255) DEFAULT NULL,
  `lien_photo4` varchar(255) DEFAULT NULL,
  `lien_photo5` varchar(255) DEFAULT NULL,
  `lien_photo6` varchar(255) DEFAULT NULL,
  `lien_photo7` varchar(255) DEFAULT NULL,
  `lien_photo8` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_Bien`),
  KEY `fk_bien` (`id_adminFK`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `bien`
--

INSERT INTO `bien` (`id_Bien`, `id_adminFK`, `reference_bien`, `titre_bien`, `description_bien`, `location_vente`, `prix_bien`, `pays_bien`, `ville_bien`, `date_time_bien`, `lien_photo1`, `lien_photo2`, `lien_photo3`, `lien_photo4`, `lien_photo5`, `lien_photo6`, `lien_photo7`, `lien_photo8`) VALUES
(1, 2, 'bien051120231216', 'terrain à vendre 500 m²', 'terrain terrassé situé au centre ville', 'vente', 500000, 'cameroun', 'Yaounde', '2023-11-06 15:59:00', 'lien photo terrain', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'bien051120231222', 'Bureau à louer', 'Bureau situé au centre ville', 'location', 50000, 'cameroun', 'Douala', '2023-11-06 15:59:00', 'lien photo bureau', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 'bien051120231225', 'immeuble à vendre ', 'immeuble situé au centre ville', 'vente', 1500000, 'cameroun', 'Bafoussam', '2023-11-06 15:59:00', 'lien photo immeuble', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 2, 'bien051120231229', 'chambre à louer 50 m²', 'chambre situé au centre ville', 'location', 25000, 'cameroun', 'Douala', '2023-11-06 15:59:00', 'lien photo chambre', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 1, 'bien051120231230', 'studio à louer', 'studio situé au centre ville', 'location', 50000, 'cameroun', 'Maroua', '2023-11-06 15:59:00', 'lien photo studio', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 1, 'bien051120231230', 'appartement à louer', 'appartement situé au centre ville', 'location', 70000, 'cameroun', 'Ebolowa', '2023-11-06 15:59:00', 'lien photo appartement', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 'bien051120231237', 'maison à vendre', 'maison situé au centre ville', 'vente', 1800000, 'cameroun', 'Obala', '2023-11-06 15:59:00', 'lien photo maison', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 1, 'bien051120231236', 'Villa à vendre', 'Villa situé au centre ville', 'vente', 1700000, 'cameroun', 'Obala', '2023-11-06 15:59:00', 'lien photo villa', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
CREATE TABLE IF NOT EXISTS `chambre` (
  `id_chambre` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `superficie_chambre` float DEFAULT NULL,
  `moderne_chambre` enum('OUI','NON') DEFAULT 'OUI',
  PRIMARY KEY (`id_chambre`),
  KEY `fk_chambre` (`id_bienFK`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `id_bienFK`, `superficie_chambre`, `moderne_chambre`) VALUES
(1, 4, 40, 'OUI');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

DROP TABLE IF EXISTS `favoris`;
CREATE TABLE IF NOT EXISTS `favoris` (
  `id_favoris` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `id_membreFK` int NOT NULL,
  `date_time_favoris` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_favoris`),
  KEY `fk_favoris_bien` (`id_bienFK`),
  KEY `fk_favoris_membre` (`id_membreFK`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id_favoris`, `id_bienFK`, `id_membreFK`, `date_time_favoris`) VALUES
(1, 8, 4, '2023-11-09 04:42:11'),
(2, 6, 3, '2023-11-09 04:42:11'),
(3, 1, 4, '2023-11-09 04:42:11');

-- --------------------------------------------------------

--
-- Structure de la table `immeuble`
--

DROP TABLE IF EXISTS `immeuble`;
CREATE TABLE IF NOT EXISTS `immeuble` (
  `id_immeuble` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `superficie_terrain_immeuble` float NOT NULL DEFAULT '0',
  `nbre_etage` int NOT NULL,
  PRIMARY KEY (`id_immeuble`),
  KEY `fk_immeuble` (`id_bienFK`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `immeuble`
--

INSERT INTO `immeuble` (`id_immeuble`, `id_bienFK`, `superficie_terrain_immeuble`, `nbre_etage`) VALUES
(1, 3, 1000, 5);

-- --------------------------------------------------------

--
-- Structure de la table `magasin`
--

DROP TABLE IF EXISTS `magasin`;
CREATE TABLE IF NOT EXISTS `magasin` (
  `id_magasin` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `superficie_magasin` float NOT NULL,
  `nombre_piece_magasin` int NOT NULL,
  PRIMARY KEY (`id_magasin`),
  KEY `fk_magasin` (`id_bienFK`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `magasin`
--

INSERT INTO `magasin` (`id_magasin`, `id_bienFK`, `superficie_magasin`, `nombre_piece_magasin`) VALUES
(1, 2, 80, 2);

-- --------------------------------------------------------

--
-- Structure de la table `maison`
--

DROP TABLE IF EXISTS `maison`;
CREATE TABLE IF NOT EXISTS `maison` (
  `id_maison` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `nbre_piece` int NOT NULL DEFAULT '0',
  `nbre_chambre` int NOT NULL DEFAULT '0',
  `nbre_cuisine` int NOT NULL DEFAULT '0',
  `nbre_salon` int NOT NULL DEFAULT '0',
  `nbre_douche` int NOT NULL DEFAULT '0',
  `type_maison` enum('studio','appartement','maison','villa') DEFAULT NULL,
  `superficie_terrain` float DEFAULT '0',
  PRIMARY KEY (`id_maison`),
  KEY `fk_maison` (`id_bienFK`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `maison`
--

INSERT INTO `maison` (`id_maison`, `id_bienFK`, `nbre_piece`, `nbre_chambre`, `nbre_cuisine`, `nbre_salon`, `nbre_douche`, `type_maison`, `superficie_terrain`) VALUES
(1, 5, 3, 1, 1, 1, 1, 'studio', 50),
(2, 6, 3, 1, 1, 1, 1, 'appartement', 150),
(3, 7, 3, 1, 1, 1, 1, 'maison', 500),
(4, 8, 3, 1, 1, 1, 1, 'villa', 5000),
(5, 7, 3, 1, 1, 1, 1, 'maison', 500);

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int NOT NULL AUTO_INCREMENT,
  `id_visiteur_FK` int NOT NULL,
  `nom_membre` varchar(50) NOT NULL,
  `prenom_membre` varchar(50) DEFAULT NULL,
  `phone_membre` varchar(25) NOT NULL,
  `email_membre` varchar(100) NOT NULL,
  `pays_membre` varchar(100) NOT NULL,
  `ville_membre` varchar(100) NOT NULL,
  `mdp_membre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_membre`),
  KEY `fk_membre` (`id_visiteur_FK`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `id_visiteur_FK`, `nom_membre`, `prenom_membre`, `phone_membre`, `email_membre`, `pays_membre`, `ville_membre`, `mdp_membre`) VALUES
(1, 1, 'van', 'vanprenom', '237653695347', 'van2021@outlook.fr', 'canada', 'montreal', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(2, 2, 'bobo', 'boboprenom', '237695740639', 'bobo2021@outloo.fr', 'usa', 'newyork', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(3, 3, 'junior', 'juniorprenom', '237651006953', 'junior2021@outloo.fr', 'mboa', 'yaounde', '9cf95dacd226dcf43da376cdb6cbba7035218921'),
(4, 4, 'alice', 'aliceprenom', '237656857450', 'alice2021@outloo.fr', 'belgique', 'bruxelle', '9cf95dacd226dcf43da376cdb6cbba7035218921');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id_service` int NOT NULL AUTO_INCREMENT,
  `id_adminFK` int NOT NULL,
  `reference_service` varchar(200) NOT NULL,
  `titre_service` varchar(250) DEFAULT NULL,
  `description_service` text,
  `lien_photo_service` varchar(255) DEFAULT NULL,
  `categorie_service` varchar(200) NOT NULL,
  `date_time_service` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_service`),
  KEY `fk_service` (`id_adminFK`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id_service`, `id_adminFK`, `reference_service`, `titre_service`, `description_service`, `lien_photo_service`, `categorie_service`, `date_time_service`) VALUES
(1, 1, 'service05112023', 'Voyage pour le canada', 'Nous nous engageons à vous faire voyager pour le canada', 'lien photo flyer canada', 'recrutement etranger et tourisme', '2023-11-06 15:59:00'),
(2, 2, 'service051120231157', 'Conteneur à vendre', 'Votre conteneur de 40 pieds disponible', 'lien photo conteneur', 'commerce general', '2023-11-06 15:59:00'),
(3, 1, 'service051120231201', 'Agent d\' entretien disponible', 'Nous mettons à votre disposition des personnes pour prendre soin de vos bien', 'lien photo guide besoin', 'guide besoin', '2023-11-06 15:59:00'),
(4, 2, 'service051120231207', 'prestation de service', 'Confiez nous la construction de votre chantier et vous serrez satisfait', 'lien photo prestation service', 'construction & preservation', '2023-11-06 15:59:00');

-- --------------------------------------------------------

--
-- Structure de la table `terrain`
--

DROP TABLE IF EXISTS `terrain`;
CREATE TABLE IF NOT EXISTS `terrain` (
  `id_terrain` int NOT NULL AUTO_INCREMENT,
  `id_bienFK` int NOT NULL,
  `superficie_terrain` float NOT NULL,
  PRIMARY KEY (`id_terrain`),
  KEY `fk_terrain` (`id_bienFK`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `terrain`
--

INSERT INTO `terrain` (`id_terrain`, `id_bienFK`, `superficie_terrain`) VALUES
(1, 1, 500);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur`
--

DROP TABLE IF EXISTS `visiteur`;
CREATE TABLE IF NOT EXISTS `visiteur` (
  `id_visiteur` int NOT NULL AUTO_INCREMENT,
  `adresse_ip` varchar(250) DEFAULT NULL,
  `datevisiteur` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_visiteur`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`id_visiteur`, `adresse_ip`, `datevisiteur`) VALUES
(1, '192.168.10.178', '2023-11-06 15:59:00'),
(2, '192.168.10.179', '2023-11-06 15:59:00'),
(3, '192.168.10.180', '2023-11-06 15:59:00'),
(4, '192.168.10.181', '2023-11-06 15:59:00'),
(5, '192.168.10.182', '2023-11-06 15:59:00');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin` FOREIGN KEY (`id_membreFK`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `bien`
--
ALTER TABLE `bien`
  ADD CONSTRAINT `fk_bien` FOREIGN KEY (`id_adminFK`) REFERENCES `admin` (`id_admin`);

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `fk_chambre` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`);

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `fk_favoris_bien` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`),
  ADD CONSTRAINT `fk_favoris_membre` FOREIGN KEY (`id_membreFK`) REFERENCES `membre` (`id_membre`);

--
-- Contraintes pour la table `immeuble`
--
ALTER TABLE `immeuble`
  ADD CONSTRAINT `fk_immeuble` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`);

--
-- Contraintes pour la table `magasin`
--
ALTER TABLE `magasin`
  ADD CONSTRAINT `fk_magasin` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`);

--
-- Contraintes pour la table `maison`
--
ALTER TABLE `maison`
  ADD CONSTRAINT `fk_maison` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `fk_membre` FOREIGN KEY (`id_visiteur_FK`) REFERENCES `visiteur` (`id_visiteur`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_service` FOREIGN KEY (`id_adminFK`) REFERENCES `admin` (`id_admin`);

--
-- Contraintes pour la table `terrain`
--
ALTER TABLE `terrain`
  ADD CONSTRAINT `fk_terrain` FOREIGN KEY (`id_bienFK`) REFERENCES `bien` (`id_Bien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
