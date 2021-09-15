-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 21:05
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
-- Base de données : `espace_admin`
--

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement_admin`
--

CREATE TABLE `enregistrement_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `repeat_password` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enregistrement_admin`
--

INSERT INTO `enregistrement_admin` (`id`, `email`, `password`, `repeat_password`, `status`) VALUES
(1, 'admin@admin.com', '$2y$10$95GrxroAb6NrCr6y8rV7Y.CMiLE/8EWrG9LzzTTp8to5Tp3veplfm', '$2y$10$Oy7NyUJxSJiuPxMeQ9JAiunEhveE5aUzxphHdXyy9vvqsYxgjtiQK', 'admin'),
(2, 'mfbendafi@gmail.com             ', '$2y$10$sRy.5Y.2J1d/Z85R57TOSOwsHW3UonYEj7872Fsrc6E/ll90iLPTO', '$2y$10$QLkBqkXF3QZiPQZqHMMYceJCbXXODACX7RwMLr1QwMNLYBA1IHBe2', 'user'),
(3, 'bendafiantoine@gmail.com', '$2y$10$PEYkl6IhkjILATKcj3JpGu8cvL.H5xuHIsNTsK.nqfbNtjG.BJChq', '$2y$10$KR09SIwVuwCQgfCFtlkegO1B7rW39/NEVEmPv72askhHeb4POPDga', 'user'),
(4, 'bendafischulmann@gmail.com', '$2y$10$r3N7Z7JCxsQylwf0Pr3MI.lwGh0lLklVrKs4tUB11p5fXQWdZI05O', '$2y$10$3muXhGy9OtUolK/mvQIyA.ClxIhb1jh2I3kZHyN0errCAYHLFrTLm', 'user'),
(7, 'juju.bendafi@gmail.com', '$2y$10$BePR2nJU67QbARLPodOLtO13ogufrbblrYGV0eXuchjVEySSiBpvy', '$2y$10$8lZyYAJFh9tgtBRqFBbvpuscHFyxVqw7/nz/sRd3ExAc4/JS6B3ty', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `enregistrement_admin`
--
ALTER TABLE `enregistrement_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `enregistrement_admin`
--
ALTER TABLE `enregistrement_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
