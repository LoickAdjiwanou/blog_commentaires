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
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `dates` varchar(20) NOT NULL,
  `temps` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`id`, `titre`, `contenu`, `dates`, `temps`) VALUES
(1, 'PHP à la conquête du monde !', 'C\'est officiel, l\'éléPHPant a annoncé hier soir \"J\'ai l\'intention de conquérir le monde !\".\r\nIl a en outre précisé que le monde serait à sa botte en moins de temps qu\'il n\'en fallait pour dire \"éléPHPant\". Pas dur ceci dit entre nous... ', '14-09-2021', '19:24'),
(2, 'Bienvenu sur mon blog !', 'Je vous souhaite à toutes et à tous la bienvenue sur mon blog qui parlera de...PHP bien sur !', '14-09-2021', '20:28'),
(3, 'La première de notre aventure PHP !', 'Nous allons sans attendre commencer la grande évadée PHP. Je vous propose de vous concentrer...à vos claviers !', '14-09-2021', '20:31'),
(4, 'PHP à la tête du monde !', 'PHP, le premier langage de cette année (après le classement de l\'IEEE) encore une fois...quelle surprise :-)', '14-09-2021', '20:32'),
(5, 'On ne peut plus s\'en passer !!!', 'PHP est devenu très rapidement le langage coté serveur le plus utilisé dans le monde, et dire qu\'il nous avait prévenu \"l\'éléPHPant\" !', '14-09-2021', '20:34');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
