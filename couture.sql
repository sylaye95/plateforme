-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 19 août 2021 à 15:35
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `couture`
--

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DAT` varchar(15) NOT NULL,
  `NOM` varchar(15) NOT NULL,
  `ADRESSE` varchar(15) NOT NULL,
  `TELEPHONE` int(9) NOT NULL,
  `NVEHICULE` varchar(15) NOT NULL,
  `NOM_C` varchar(15) NOT NULL,
  `CLIENT` varchar(15) NOT NULL,
  `QUANTITE` int(15) NOT NULL,
  `DESIGNATION` varchar(15) NOT NULL,
  `PRIX_UNITAIRE` int(15) NOT NULL,
  `POID` int(11) NOT NULL,
  `NOMBRE_SACS` varchar(15) NOT NULL,
  `MONTANT_TRANS` int(11) NOT NULL,
  `AVANCE` int(11) NOT NULL,
  `RESTE` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `DAT`, `NOM`, `ADRESSE`, `TELEPHONE`, `NVEHICULE`, `NOM_C`, `CLIENT`, `QUANTITE`, `DESIGNATION`, `PRIX_UNITAIRE`, `POID`, `NOMBRE_SACS`, `MONTANT_TRANS`, `AVANCE`, `RESTE`) VALUES
(28, '28/02/2021', 'sy', 'khombol', 775769296, 'dk42a', 'ABDOU', 'LAYE', 50, 'ciment', 22, 45, '45', 555555, 6000, 60000);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LOGIN` varchar(25) NOT NULL,
  `MDP` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `LOGIN`, `MDP`) VALUES
(1, 'laye', 'sy');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
