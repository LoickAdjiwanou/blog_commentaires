-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 16 sep. 2021 à 16:12
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `base`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `dates` varchar(20) NOT NULL,
  `temps` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `id_billet`, `auteur`, `commentaire`, `dates`, `temps`) VALUES
(1, 1, 'richard', 'On attend de voir ca !', '14-09-2021', '20:37'),
(2, 1, 'cléopatre', 'Oula, très pessimiste comme approche.', '14-09-2021', '20:39'),
(3, 1, 'luc', 'Surement que ca arrivera vu qu\'il n\'y a pas vraiment de concurrent !', '14 -09-2021', '20:38'),
(6, 2, 'nam\'s', 'Merci, hâte de voir ce que tu nous propose !', '14 -09-2021', ' 20:41'),
(7, 2, 'moussa', 'Merci !!', '14 -09-2021', '20:54'),
(8, 2, 'clara', 'J\'espère ne pas être déçue.', '14 -09-2021', '20:57'),
(9, 3, 'karie', 'C\'est partit !', '14 -09-2021', '20:46'),
(10, 3, 'marc', 'Ok, ca marche.', '14 -09-2021', '20:49'),
(11, 3, 'lucie', 'Hâte de commencer !', '14 -09-2021', '20:56'),
(12, 4, 'kris', 'Pas étonnant.', '14 -09-2021', '20:48'),
(13, 4, 'julie', 'Je m\'y attendais !', '14 -09-2021', '20:54'),
(14, 4, 'lola', 'Grrr...bien, faut s\'y mettre, c\'est ca ?', '14 -09-2021', '20:58'),
(15, 5, 'paul', 'Heureux pour PHP !', '14 -09-2021', '20:50'),
(16, 5, 'victor', 'Voilà, il fallait s\'y attendre.', '14 -09-2021', '20:59'),
(17, 5, 'suzie', 'Super, quelle aventure !', '14 -09-2021', '21:05'),
(40, 5, 'luc', 'Super !!!', '16-09-2021', '14:08'),
(41, 2, 'lola', 'ok', '16-09-2021', '14:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
