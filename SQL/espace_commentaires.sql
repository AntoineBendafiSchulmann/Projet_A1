-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 21:07
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `espace_commentaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `pseudo` text NOT NULL,
  `commentaire` text NOT NULL,
  `date_heure_message` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `commentaire`, `date_heure_message`) VALUES
(1, 'Fan2Wejden', 'salut', '2021-05-28 11:33:52'),
(3, 'jean Mouloud', 'c l\'heure du futulu', '2021-05-28 11:35:22'),
(4, 'to1924', 'wesh', '2021-05-28 11:34:33'),
(5, 'titouan', 'rawe le dev', '2021-05-30 20:52:10'),
(6, 'antoine', 'a 2 doigts du suicide', '2021-06-02 21:18:25'),
(7, 'tayeb', 'php presque finnis', '2021-06-02 21:18:51'),
(8, 'fan d\'alexis', 'j\'aime ce prof', '2021-06-02 21:20:24'),
(9, 'csslife', 'tt refaire', '2021-06-02 21:21:07'),
(10, 'admin', 'dashboard a faire', '2021-06-02 21:21:34'),
(11, 'a', 'a', '2021-06-02 21:22:07'),
(12, 'a', 'a', '2021-06-02 21:22:18'),
(13, 'a', 'a', '2021-06-02 21:22:20'),
(14, 'a', 'a', '2021-06-02 21:22:22'),
(24, 'wesh alors', 'salut', '2021-06-04 18:15:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
