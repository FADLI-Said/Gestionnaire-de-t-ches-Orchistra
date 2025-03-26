-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 25 mars 2025 à 16:02
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `orchista`
--

-- --------------------------------------------------------

--
-- Structure de la table `76_categories`
--

CREATE TABLE `76_categories` (
  `categorie_id` int NOT NULL,
  `categorie_nom` varchar(50) NOT NULL,
  `categorie_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `76_commentaire`
--

CREATE TABLE `76_commentaire` (
  `commentaire_id` int NOT NULL,
  `commentaire_texte` varchar(1000) DEFAULT NULL,
  `commentaire_timestamp` varchar(10) DEFAULT NULL,
  `user_id` int NOT NULL,
  `tache_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `76_taches`
--

CREATE TABLE `76_taches` (
  `tache_id` int NOT NULL,
  `tache_titre` varchar(100) DEFAULT NULL,
  `tache_description` varchar(255) DEFAULT NULL,
  `tache_timestamp_debut` varchar(10) DEFAULT NULL,
  `tache_timestamp_fin` varchar(10) NOT NULL,
  `tache_statut` varchar(50) NOT NULL,
  `propriete_id` int NOT NULL,
  `categorie_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `76_users`
--

CREATE TABLE `76_users` (
  `user_id` int NOT NULL,
  `user_nom` varchar(100) DEFAULT NULL,
  `user_prenom` varchar(100) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `user_mdp` varchar(100) DEFAULT NULL,
  `user_date_naissance` varchar(50) DEFAULT NULL,
  `user_timestamp_creation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `76_users`
--

INSERT INTO `76_users` (`user_id`, `user_nom`, `user_prenom`, `user_mail`, `user_mdp`, `user_date_naissance`, `user_timestamp_creation`) VALUES
(1, 'test', 'test', 'test@test.com', '$2y$10$xpqfO.Ymd8dzNWx7GQzI/O01oOUcyLgei3oxFlKP2d03cqK.h5ahi', '1111-11-11', '1742918369');

-- --------------------------------------------------------

--
-- Structure de la table `priorite`
--

CREATE TABLE `priorite` (
  `propriete_id` int NOT NULL,
  `propriete_nom` varchar(50) DEFAULT NULL,
  `propriete_description` varchar(1000) NOT NULL,
  `propriete_couleur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `76_categories`
--
ALTER TABLE `76_categories`
  ADD PRIMARY KEY (`categorie_id`),
  ADD UNIQUE KEY `categorie_nom` (`categorie_nom`);

--
-- Index pour la table `76_commentaire`
--
ALTER TABLE `76_commentaire`
  ADD PRIMARY KEY (`commentaire_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `tache_id` (`tache_id`);

--
-- Index pour la table `76_taches`
--
ALTER TABLE `76_taches`
  ADD PRIMARY KEY (`tache_id`),
  ADD KEY `propriete_id` (`propriete_id`),
  ADD KEY `categorie_id` (`categorie_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `76_users`
--
ALTER TABLE `76_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `priorite`
--
ALTER TABLE `priorite`
  ADD PRIMARY KEY (`propriete_id`),
  ADD UNIQUE KEY `propriete_nom` (`propriete_nom`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `76_categories`
--
ALTER TABLE `76_categories`
  MODIFY `categorie_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `76_commentaire`
--
ALTER TABLE `76_commentaire`
  MODIFY `commentaire_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `76_taches`
--
ALTER TABLE `76_taches`
  MODIFY `tache_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `76_users`
--
ALTER TABLE `76_users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `priorite`
--
ALTER TABLE `priorite`
  MODIFY `propriete_id` int NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `76_commentaire`
--
ALTER TABLE `76_commentaire`
  ADD CONSTRAINT `76_commentaire_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `76_users` (`user_id`),
  ADD CONSTRAINT `76_commentaire_ibfk_2` FOREIGN KEY (`tache_id`) REFERENCES `76_taches` (`tache_id`);

--
-- Contraintes pour la table `76_taches`
--
ALTER TABLE `76_taches`
  ADD CONSTRAINT `76_taches_ibfk_1` FOREIGN KEY (`propriete_id`) REFERENCES `priorite` (`propriete_id`),
  ADD CONSTRAINT `76_taches_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `76_categories` (`categorie_id`),
  ADD CONSTRAINT `76_taches_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `76_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
