-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 juin 2021 à 21:03
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
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `systeme_blog`
--

CREATE TABLE `systeme_blog` (
  `id_article` int(11) NOT NULL,
  `nom` varchar(500) NOT NULL,
  `article` text NOT NULL,
  `img_link` text NOT NULL,
  `link` varchar(200) NOT NULL,
  `date_heure_article` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `systeme_blog`
--

INSERT INTO `systeme_blog` (`id_article`, `nom`, `article`, `img_link`, `link`, `date_heure_article`) VALUES
(1, 'RIOT PRÉSENTE PYKE, LE NOUVEAU CHAMPION DE LEAGUE OF LEGENDS', 'Pyke est un assassin qui estropie et tue tous ceux qui le doublent, à savoir tout le monde. Commencez par suivre vos victimes avec Plongée spectrale, en restant à la limite de leur champ de vision. Refaites surface avec un rapide Harponnage pour blesser plusieurs ennemis à bout portant. Retenez votre lame un petit peu plus longtemps pour ne harponner qu\'un ennemi, l\'attirer sur votre terrain et le vider comme un poisson.\r\n\r\nDevenez encore plus agressif en fonçant sur l\'ennemi avec un Ressac fantôme et en le paralysant de terreur pendant que vos coéquipiers approchent. Quand vous sentez l\'odeur du sang dans l\'eau, donnez le coup de grâce avec Exécution abyssale et rayez plusieurs noms de votre liste.', '', 'https://gamewave.fr/lol/riot-presente-pyke-le-nouveau-champion-de-league-of-legends/', '2021-05-31 09:42:47'),
(2, 'Guide du meilleur build de Pyke dans la saison 10 de League of Legends', 'Pyke est l’un des champions les plus fascinants de League of Legends. C’est un support qui se construit sur énormément de dégâts d’attaque et qui fonctionne comme un assassin, ce qui est une première pour un support dans le jeu. Son passif et ses délais de récupération faibles font de lui un excellent champion.\r\n\r\nComme avec tous les champions dans League of Legends, le champion aura besoin de différents objets et runes dépendant de sa situation en jeu. Ceci dit, Pyke a beaucoup d’objets qui fera de lui un personnage très puissant et qui amènera les meilleurs résultats en jeu.', '', 'https://dotesports.com/fr/league-of-legends/news/guide-du-meilleur-build-de-pyke-dans-la-saison-10-de-league-of-legends', '2021-05-31 10:14:45'),
(3, 'LOL : RIOT GAMES VEUT SUPPRIMER PYKE DES SOLOLANES, LA COMMUNAUTÉ RÉAGIT - PATCH PBE 9.13', 'L\'idée serait de retirer l\'AoE sur Harponnage (A) et de faire en sorte que Ressac fantôme (E) ne touche plus que les champions. Ainsi, Pyke ne pourrait plus waveclear efficacement, et ne serait plus qu\'un simple support, comme prévu lors de sa création. Un projet qui ne passe pas auprès de la communauté, puisque le pick a ses adeptes, et qu\'il apporte une solution à certains champions au top qui sont sinon trop puissants.\r\n\r\nAlors forcément, les réactions ont été nombreuses. De Voyboy à ocelote, nombreuses ont été les voix à s\'élever contre cette décision de la part de Riot Games. D\'autant plus que LoL est entré dans une ère de flexibilité et de déconstruction de la meta, dans laquelle Pyke s\'inscrit pleinement. Un vent de fraîcheur qui a fait beaucoup de bien à la scène compétitive, et qui est désormais menacé.\r\n\r\n', '', 'https://www.breakflip.com/fr/league-of-legends/actualites/lol-riot-games-veut-supprimer-pyke-des-sololanes-la-communaute-reagit-patch-pbe-9-13-14047', '2021-05-31 11:15:11'),
(4, 'League of Legends : Les compétences du nouveau champion Pyke révélées', 'Passif : Don des Noyés. Quand il n\'est pas vu pendant un moment, le champion regagne de la vie et des dégâts d\'attaque.\r\nA : Harponnage. Pyke lance un harpon qui peut soit ralentir les ennemis, soit en ramener un vers lui.\r\nZ : Plongée Spectrale. Il devient invisible en gagnant de la vitesse de déplacement sur une certaine distance. Il est possible de le voir malgré son invisibilité en s\'approchant de lui.\r\nE : Ressac Fantôme. Pyke laisse une traînée derrière lui en fonçant dans une direction ; après un moment, les ennemis dans la traînée sont étourdis et blessés.\r\nR (ultime) : Exécution Abyssale. C\'est un peu comme un ultime de Darius : il saute sur une zone en X en blessant les ennemis, mais aussi en exécutant ceux ayant très peu de vie. Un ennemi tué lui procure un nouveau saut gratuit... et le dernier assist gagne autant d\'or que pour un kill.', '', 'https://www.gameblog.fr/news/75313-league-of-legends-les-competences-du-nouveau-champion-pyke-r', '2021-05-31 11:16:54');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `systeme_blog`
--
ALTER TABLE `systeme_blog`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `systeme_blog`
--
ALTER TABLE `systeme_blog`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
