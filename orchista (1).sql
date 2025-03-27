-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 27 mars 2025 à 14:44
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

--
-- Déchargement des données de la table `76_categories`
--

INSERT INTO `76_categories` (`categorie_id`, `categorie_nom`, `categorie_description`) VALUES
(1, 'Travail', 'Tâches liées au travail et projets professionnels'),
(2, 'Personnel', 'Tâches personnelles et vie quotidienne'),
(3, 'Santé', 'Rendez-vous médicaux et bien-être'),
(4, 'Loisirs', 'Temps libre et activités de détente');

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
-- Structure de la table `76_priorite`
--

CREATE TABLE `76_priorite` (
  `propriete_id` int NOT NULL,
  `propriete_nom` varchar(50) DEFAULT NULL,
  `propriete_description` varchar(1000) NOT NULL,
  `propriete_couleur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `76_priorite`
--

INSERT INTO `76_priorite` (`propriete_id`, `propriete_nom`, `propriete_description`, `propriete_couleur`) VALUES
(1, 'Urgent', 'À traiter immédiatement pour éviter tout blocage', 'Rouge'),
(2, 'Élevée', 'Important à réaliser rapidement', 'Orange'),
(3, 'Moyenne', 'Peut être planifié à moyen terme', 'Jaune'),
(4, 'Faible', 'Pas prioritaire, faire quand il reste du temps', 'Vert');

-- --------------------------------------------------------

--
-- Structure de la table `76_taches`
--

CREATE TABLE `76_taches` (
  `tache_id` int NOT NULL,
  `tache_titre` varchar(100) DEFAULT NULL,
  `tache_description` varchar(255) DEFAULT NULL,
  `tache_jour` varchar(50) NOT NULL,
  `tache_timestamp_debut` varchar(10) DEFAULT NULL,
  `tache_timestamp_fin` varchar(10) NOT NULL,
  `tache_statut` varchar(50) NOT NULL,
  `propriete_id` int NOT NULL,
  `categorie_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `76_taches`
--

INSERT INTO `76_taches` (`tache_id`, `tache_titre`, `tache_description`, `tache_jour`, `tache_timestamp_debut`, `tache_timestamp_fin`, `tache_statut`, `propriete_id`, `categorie_id`, `user_id`) VALUES
(2, 'FOOOOOTTT', 'Ptit foot tu connais', '27/03/2025', '13:00', '17:00', 'En attente', 3, 4, 4),
(4, 'Sport', 'Je dois faire du sport', '27/03/2025', '18:00', '23:00', 'En attente', 1, 2, 4),
(5, 'Foot', 'Super foot', '28/03/2025', '13:00', '17:00', 'En attente', 3, 2, 5),
(6, 'FOOOOOTTT', 'Sah quel match de zinzin', '27/03/2025', '23:45', '05:54', 'En cours', 3, 1, 5),
(7, 'Bac', 'Français', '28/03/2025', '08:00', '12:00', 'En attente', 2, 2, 5),
(8, 'FOOOOOTTT', 'Tah les oufs', '27/03/2025', '13:00', '17:00', 'En attente', 3, 2, 6),
(9, 'GTA 6', 'Sortie de gta 6', '03/09/2025', '08:00', '09:00', 'En attente', 1, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `76_users`
--

CREATE TABLE `76_users` (
  `user_id` int NOT NULL,
  `user_nom` varchar(100) DEFAULT NULL,
  `user_prenom` varchar(100) DEFAULT NULL,
  `user_mail` varchar(50) DEFAULT NULL,
  `user_avatar` varchar(1000) NOT NULL DEFAULT 'avatar.png',
  `user_mdp` varchar(100) DEFAULT NULL,
  `user_date_naissance` varchar(50) DEFAULT NULL,
  `user_timestamp_creation` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `76_users`
--

INSERT INTO `76_users` (`user_id`, `user_nom`, `user_prenom`, `user_mail`, `user_avatar`, `user_mdp`, `user_date_naissance`, `user_timestamp_creation`) VALUES
(4, 'FADLI', 'Saïd', 'saidfadli213@gmail.com', '67e551a5439b7.png', '$2y$10$z1tFdxfsMsgYKWoZ98478.2niqIy86GpLsa4hyYjO2xMNXCp4gGMG', '2002-07-04', '1742988904'),
(5, 'JOURDAIN', 'Ichem', 'tanjiro76610@outlook.fr', 'avatar.png', '$2y$10$S74Ku3BnO4LGwWiOkP5HfOa.qadp7AVGQwwd2emOxf8xP0UEGpuj2', '1995-09-27', '1743063227'),
(6, 'FADLI', 'Saïd', 'saidfadli224@gmail.com', 'avatar.png', '$2y$10$sQ0Dc2Z1esA1vQYZQEcGk.UhUMoGwoTaYARZ0IzyFbdPhL848.4Aa', '2002-07-04', '1743070423');

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
-- Index pour la table `76_priorite`
--
ALTER TABLE `76_priorite`
  ADD PRIMARY KEY (`propriete_id`),
  ADD UNIQUE KEY `propriete_nom` (`propriete_nom`);

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
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `76_categories`
--
ALTER TABLE `76_categories`
  MODIFY `categorie_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `76_commentaire`
--
ALTER TABLE `76_commentaire`
  MODIFY `commentaire_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `76_priorite`
--
ALTER TABLE `76_priorite`
  MODIFY `propriete_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `76_taches`
--
ALTER TABLE `76_taches`
  MODIFY `tache_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `76_users`
--
ALTER TABLE `76_users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  ADD CONSTRAINT `76_taches_ibfk_1` FOREIGN KEY (`propriete_id`) REFERENCES `76_priorite` (`propriete_id`),
  ADD CONSTRAINT `76_taches_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `76_categories` (`categorie_id`),
  ADD CONSTRAINT `76_taches_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `76_users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
