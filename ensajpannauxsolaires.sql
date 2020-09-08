-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 30 août 2020 à 11:19
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ensajcapfin`
--

-- --------------------------------------------------------

--
-- Structure de la table `alarmes`
--

CREATE TABLE `alarmes` (
  `id` int(11) NOT NULL,
  `Injectionreseau` varchar(255) NOT NULL,
  `onduleur` varchar(255) NOT NULL,
  `Pertecommunication` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `alarmes`
--

INSERT INTO `alarmes` (`id`, `Injectionreseau`, `onduleur`, `Pertecommunication`) VALUES
(1, '631', '330', '201');

-- --------------------------------------------------------

--
-- Structure de la table `blanceenergrtique`
--

CREATE TABLE `blanceenergrtique` (
  `id` int(11) NOT NULL,
  `Reseau` int(11) NOT NULL,
  `energiesolaire` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `blanceenergrtique`
--

INSERT INTO `blanceenergrtique` (`id`, `Reseau`, `energiesolaire`) VALUES
(1, 631, 459);

-- --------------------------------------------------------

--
-- Structure de la table `capteur`
--

CREATE TABLE `capteur` (
  `id` int(11) NOT NULL,
  `capteurv` varchar(255) NOT NULL,
  `capteurnam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `capteur`
--

INSERT INTO `capteur` (`id`, `capteurv`, `capteurnam`) VALUES
(1, '10kW', 'Réseau\r\n'),
(2, '631KWH/Février', 'Réseau\r\n'),
(3, '13.6 KWp(DC)', 'energie solaire'),
(4, '12.7 KW5AC', 'energie solaire'),
(5, '459 KWh/ Février', 'energie solaire'),
(6, '2.104 KWh /Février', 'energie solaire/Objective :'),
(7, '459 KWh', 'FEVRIER'),
(8, '4411 \'DH\'', 'FEVRIER'),
(9, '-257 Kg', 'FEVRIER'),
(10, '610.6 K/m2', 'Température solaire'),
(11, '19 c', 'Température amblante'),
(12, '44 c', 'Température des modules'),
(13, '24 m/s', 'Vitesse du vent'),
(14, '23.23 kW', 'Utilisation'),
(15, '5.773 kWh/Février', 'Utilisation');

-- --------------------------------------------------------

--
-- Structure de la table `fractionsolaire`
--

CREATE TABLE `fractionsolaire` (
  `id` int(11) NOT NULL,
  `moi` varchar(255) NOT NULL,
  `valeurss` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fractionsolaire`
--

INSERT INTO `fractionsolaire` (`id`, `moi`, `valeurss`) VALUES
(4, 'fevrier', 242);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alarmes`
--
ALTER TABLE `alarmes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blanceenergrtique`
--
ALTER TABLE `blanceenergrtique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fractionsolaire`
--
ALTER TABLE `fractionsolaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alarmes`
--
ALTER TABLE `alarmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `blanceenergrtique`
--
ALTER TABLE `blanceenergrtique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `capteur`
--
ALTER TABLE `capteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `fractionsolaire`
--
ALTER TABLE `fractionsolaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
