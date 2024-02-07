-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 07 fév. 2024 à 17:39
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
-- Structure de la table `message_absence`
--

CREATE TABLE `message_absence` (
  `id` int(11) NOT NULL,
  `datedebut` date NOT NULL,
  `datefin` date DEFAULT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `message_absence`
--

INSERT INTO `message_absence` (`id`, `datedebut`, `datefin`, `message`) VALUES
(1, '2024-02-01', '2024-02-21', 'Chers clients,\r\nce samedi 21 février, ce message devrait etre affiché.\r\nVotre magasin fermera exceptionnellement ses portes à 14h00.\r\nMerci pour votre compréhension.'),
(2, '2024-02-21', '2024-02-23', 'Chers clients,\r\nce vendredi 09 juillet, ce message ne devrait pas etre affiché à 09h00.\r\nMerci pour votre compréhension.'),
(3, '2024-01-21', '2024-01-23', 'Chers clients,\r\nce vendredi 15 janvier, ce message ne devrait pas etre affiché à 14h31.\r\nMerci pour votre compréhension.');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `message_absence`
--
ALTER TABLE `message_absence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `message_absence`
--
ALTER TABLE `message_absence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
