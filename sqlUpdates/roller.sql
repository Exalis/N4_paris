-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 30 Septembre 2019 à 11:40
-- Version du serveur :  10.1.37-MariaDB-0+deb9u1
-- Version de PHP :  7.0.33-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `roller`
--

-- --------------------------------------------------------

--
-- Structure de la table `Joueur`
--

CREATE TABLE `Joueur` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Contenu de la table `Joueur`
--

INSERT INTO `Joueur` (`Id`, `Nom`) VALUES
(1, 'Bacon'),
(2, 'PlayMatt'),
(3, 'Boudi'),
(4, 'Mattos'),
(5, 'Coach Lio'),
(6, 'Arthur'),
(7, 'Florent'),
(8, 'Jérôme'),
(9, 'JB'),
(10, 'Guillaume'),
(11, 'Jo'),
(12, 'Flavian'),
(13, 'David'),
(14, 'Quentin'),
(15, 'Loic'),
(16, 'Cédric'),
(17, 'Flo (gardien)');

-- --------------------------------------------------------

--
-- Structure de la table `pari`
--

CREATE TABLE `pari` (
  `Id` int(11) NOT NULL,
  `Nom` varchar(9) NOT NULL,
  `PariSur` varchar(9) NOT NULL,
  `Pourquoi` text NOT NULL,
  `typePari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typePari`
--

CREATE TABLE `typePari` (
  `Id` int(11) NOT NULL,
  `NomPari` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typePari`
--

INSERT INTO `typePari` (`Id`, `NomPari`) VALUES
(1, 'Premier but'),
(2, 'Première pénalité'),
(3, 'meilleur passeur'),
(4, 'nombre de but (marqué)'),
(5, 'nombre de but (encaissé)');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Joueur`
--
ALTER TABLE `Joueur`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `pari`
--
ALTER TABLE `pari`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `typePari`
--
ALTER TABLE `typePari`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Joueur`
--
ALTER TABLE `Joueur`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT pour la table `pari`
--
ALTER TABLE `pari`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `typePari`
--
ALTER TABLE `typePari`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
