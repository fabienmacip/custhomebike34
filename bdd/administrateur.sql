-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 fév. 2024 à 17:27
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `custhomebike34`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `date_creation` date NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `administrateur` mdp_id1 => totototo
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `mail`, `date_creation`, `mot_de_passe`) VALUES
(1, 'MACIP', 'Fabien', 'fabien.macip@gmail.com', '2024-02-06', '$2y$10$Y6aXByINTa8ApOoWmUpGMOw2B6IW/ikcji4Beyux4pWFdGmqz3U8u'),
(2, 'DIETRICH', 'Raphaël', 'motorsservicerapide34@gmail.com', '2024-02-06', '$2y$10$/GVDAzzPjpHrSj8LxLdH8.KOm0Y0i2V/55ACEOUquZf3yBBnledPm'),
(3, 'CONDAT', 'Cédric', 'contact@custhomebike34', '2024-02-06', '$2y$10$/GVDAzzPjpHrSj8LxLdH8.KOm0Y0i2V/55ACEOUquZf3yBBnledPm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
