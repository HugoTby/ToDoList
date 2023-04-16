-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 16 avr. 2023 à 15:53
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
-- Base de données : `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `todolist`
--

DROP TABLE IF EXISTS `todolist`;
CREATE TABLE IF NOT EXISTS `todolist` (
  `id` int NOT NULL AUTO_INCREMENT,
  `content` varchar(300) NOT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `todolist`
--

INSERT INTO `todolist` (`id`, `content`, `status`) VALUES
(9, 'Rendre visite à un ami : prendre rendez-vous avec un ami que vous n&#039;avez pas vu depuis longtemps.', NULL),
(10, 'Faire le ménage : nettoyer la maison de fond en comble.', 1),
(11, 'Planifier un voyage : réserver des billets d&#039;avion ou de train pour partir en vacances.', 1),
(12, 'Acheter de la nourriture : faire une liste des ingrédients nécessaires pour préparer les repas de la semaine.', NULL),
(13, 'Apprendre quelque chose de nouveau : suivre un cours en ligne ou lire un livre sur un sujet inconnu.', NULL),
(14, 'Faire du bénévolat : trouver une association ou un organisme qui a besoin de bénévoles pour aider.', NULL),
(15, 'Organiser une soirée : inviter des amis pour une soirée chez soi, ou réserver une table dans un restaurant sympa.', 1),
(18, 'Se relaxer : prendre un bain chaud ou faire une séance de méditation.', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
