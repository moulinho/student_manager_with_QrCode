-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 07 fév. 2021 à 10:57
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `scolarite`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `CODE` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `MONTANT` varchar(255) NOT NULL,
  `CLASSE` varchar(255) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `PHOTO` varchar(30) NOT NULL,
  `info` varchar(255) NOT NULL,
  PRIMARY KEY (`CODE`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`CODE`, `NOM`, `PRENOM`, `CONTACT`, `MONTANT`, `CLASSE`, `EMAIL`, `PHOTO`, `info`) VALUES
(1, 'blabla', 'sereme ', 2789622, '380000 ', '', 'bgjhg@gmail.com ', 'te10.jpg', 'QR/blablasereme 601fc4946dc32.png'),
(2, 'qsqq', 'sereme', 22589714, '100000', '4e', 'moulinho13@gmail.com', 'te7.jpg', 'QR/qsqqsereme601fc4872bf0e.png'),
(3, 'dolli', 'BGTY', 35436788, '14141411', '1e', 'dolli@gmail.com', 'N3.jpg', 'QR/dolliBGTY601fc4d506d07.png'),
(4, 'jhony', 'kevin', 35436788, '35000', '5e', 'blabal@gmail.com', 'N10.jpg', 'QR/jhonykevin601fc56e246ae.png'),
(5, 'badi', 'kevin', 35436788, '17000', '2nd', 'badi@gmail.com', 'te2.jpg', 'QR/badikevin601fc5dc663b5.png'),
(6, 'toto', 'test', 2789622, '100000', '6e', 'toto@gmail.com', 'te5.jpg', 'QR/tototest601fc6463d3a5.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `LOGI` varchar(255) NOT NULL,
  `PWD` varchar(255) NOT NULL,
  `ROLE` varchar(255) NOT NULL,
  PRIMARY KEY (`LOGI`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--
/*
*LOGIN = admin
*PWD = admin
*
*LOGIN = etudiant
*PWD = etudiant
*
*/

INSERT INTO `users` (`LOGI`, `PWD`, `ROLE`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'SCOLARITE'),
('etudiant', '0bbf31d9da625147cbe69f7b1f5af704a8105f12', 'ETUDIANT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
