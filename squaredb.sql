-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 02 mai 2021 à 15:44
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `squaredb`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(2) NOT NULL,
  `nom_cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_sujet`
--

CREATE TABLE `categorie_sujet` (
  `id_cat` int(2) NOT NULL,
  `nom_cat` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `games`
--

CREATE TABLE `games` (
  `game_id` int(2) NOT NULL,
  `name` varchar(15) NOT NULL,
  `shortname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `items_boutique`
--

CREATE TABLE `items_boutique` (
  `id_item` int(3) NOT NULL,
  `nom` varchar(3) NOT NULL,
  `cat_id` int(2) NOT NULL,
  `description` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantité` int(11) NOT NULL,
  `photos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `message_forum`
--

CREATE TABLE `message_forum` (
  `id` int(3) NOT NULL,
  `date` int(11) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `page` varchar(10) NOT NULL,
  `contenu` text NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `post_forum`
--

CREATE TABLE `post_forum` (
  `id_post` int(3) NOT NULL,
  `date_post` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `page` varchar(10) NOT NULL,
  `sujet` varchar(40) NOT NULL,
  `cat_sujet_post` int(3) NOT NULL,
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `questions`
--

CREATE TABLE `questions` (
  `id` int(3) NOT NULL,
  `question` varchar(40) NOT NULL,
  `quiz_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(2) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `game_id` int(11) NOT NULL,
  `difficulty` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user_connecté`
--

CREATE TABLE `user_connecté` (
  `id_user` int(3) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `role` varchar(15) NOT NULL,
  `hash_mdp` varchar(250) NOT NULL,
  `add_date` int(11) NOT NULL,
  `adress` varchar(30) NOT NULL,
  `img_profil` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `categorie_sujet`
--
ALTER TABLE `categorie_sujet`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Index pour la table `items_boutique`
--
ALTER TABLE `items_boutique`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `id_cat` (`cat_id`);

--
-- Index pour la table `message_forum`
--
ALTER TABLE `message_forum`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_forum`
--
ALTER TABLE `post_forum`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `cat_id` (`cat_sujet_post`),
  ADD KEY `user_id` (`id_user`);

--
-- Index pour la table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_quiz_id` (`quiz_id`);

--
-- Index pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_game_id` (`game_id`);

--
-- Index pour la table `user_connecté`
--
ALTER TABLE `user_connecté`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie_sujet`
--
ALTER TABLE `categorie_sujet`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `items_boutique`
--
ALTER TABLE `items_boutique`
  MODIFY `id_item` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `message_forum`
--
ALTER TABLE `message_forum`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `post_forum`
--
ALTER TABLE `post_forum`
  MODIFY `id_post` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user_connecté`
--
ALTER TABLE `user_connecté`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `items_boutique`
--
ALTER TABLE `items_boutique`
  ADD CONSTRAINT `id_cat` FOREIGN KEY (`cat_id`) REFERENCES `categorie` (`id_cat`);

--
-- Contraintes pour la table `post_forum`
--
ALTER TABLE `post_forum`
  ADD CONSTRAINT `cat_id` FOREIGN KEY (`cat_sujet_post`) REFERENCES `categorie_sujet` (`id_cat`),
  ADD CONSTRAINT `user_id` FOREIGN KEY (`id_user`) REFERENCES `user_connecté` (`id_user`);

--
-- Contraintes pour la table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `question_quiz_id` FOREIGN KEY (`quiz_id`) REFERENCES `quiz` (`id`);

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_game_id` FOREIGN KEY (`game_id`) REFERENCES `games` (`game_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
