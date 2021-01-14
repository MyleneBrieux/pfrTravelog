-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 14 jan. 2021 à 10:43
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `travelog`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `code_comm` int(11) NOT NULL,
  `commentaire` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `demande_ami`
--

CREATE TABLE `demande_ami` (
  `code_ami` int(11) NOT NULL,
  `id_ami` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `accepte` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `demande_ami`
--

INSERT INTO `demande_ami` (`code_ami`, `id_ami`, `id`, `accepte`) VALUES
(1, 44, 42, 'Y'),
(2, 42, 44, 'Y'),
(3, 43, 42, 'Y'),
(4, 42, 43, 'Y');

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `code_etape` int(11) NOT NULL,
  `sous_titre` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL,
  `likesEtape` int(11) DEFAULT NULL,
  `code_comm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etape`
--

INSERT INTO `etape` (`code_etape`, `sous_titre`, `description`, `likesEtape`, `code_comm`) VALUES
(1, '&eacute;tape 1', 'Premi&egrave;re &eacute;tape', 0, NULL),
(2, '&eacute;tape 1', 'Premi&egrave;re &eacute;tape', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `code_img` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `code_voyage` int(11) NOT NULL,
  `code_etape` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `langues`
--

CREATE TABLE `langues` (
  `code_langue` int(11) NOT NULL,
  `type_langue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `langues`
--

INSERT INTO `langues` (`code_langue`, `type_langue`) VALUES
(1, 'anglais'),
(2, 'français'),
(3, 'chinois'),
(4, 'arabe'),
(5, 'espagnol'),
(6, 'hindi'),
(7, 'portugais'),
(8, 'russe'),
(9, 'japonais'),
(10, 'coreen'),
(11, 'allemand'),
(12, 'turc'),
(13, 'vietnamien'),
(14, 'italien'),
(15, 'polonais'),
(16, 'neerlandais'),
(17, 'grec'),
(18, 'thai'),
(19, 'bengali'),
(20, 'pendjabi');

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `code_notif` int(11) NOT NULL,
  `date` date NOT NULL,
  `id` int(11) NOT NULL,
  `code_voyage` int(11) NOT NULL,
  `code_comm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `signalements`
--

CREATE TABLE `signalements` (
  `code_signal` int(11) NOT NULL,
  `code_com` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` varchar(500) DEFAULT NULL,
  `photoprofil` longblob DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `nation` varchar(50) DEFAULT NULL,
  `contact` varchar(1) NOT NULL,
  `notifmail` varchar(1) NOT NULL,
  `code_langue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `mail`, `password`, `description`, `photoprofil`, `birthday`, `nation`, `contact`, `notifmail`, `code_langue`) VALUES
(38, 'mylene', 'mylene.brieux@gmail.com', '$2y$10$ZtuxhdTaRYssZHfUE/amN.Vg3VS4mBCwt1kV.NWgNSbAFT.oXFpom', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(39, 'karma', 'romain_wyon@orange.fr', '$2y$10$Au2zN2kQEKylV7TU21xW7.E5gtjdLMYSzMmENCBtelW1s31YY2RTC', '', '', '1999-01-11', 'Fran&ccedil;ais', 'Y', 'Y', 2),
(40, 'karma_deux', 'romain@orange.fr', '$2y$10$d89zho/bkViGNv3ZZEFCNOvms8EFUoFQlWePml14Sda1b9w/J1LVG', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(41, 'karma_trois', 'karma_trois@azerty.com', '$2y$10$VsExGZnbGxJ/OxVczCKGiuUduFFsW.QHYmC3HaEb5f5GGvqGTYKIS', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(42, 'Yoan', 'yoann.deco@gmail.com', '$2y$10$hK0cWLLpFiCt/AjaGALl3el2v4m11XTM0Ky/.QeRmI7VTyfPeWmm2', 'J\'aime les voyages.', '', '1999-07-15', '', 'Y', 'Y', 2),
(43, 'Klara', 'KlaraK@gmail.com', '$2y$10$kZNxxvo0Eb5zfCf/aE./QeFsOPKd8FHUZtTxlLyz0w5Cz2hBZMve6', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(44, 'Clement', 'ClementR@gmail.com', '$2y$10$TRGjytzjK/AVt/r7/WVef.ds4fZFVDskasEqSvneIQAwv1J0xleLy', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1);

-- --------------------------------------------------------

--
-- Structure de la table `voyages`
--

CREATE TABLE `voyages` (
  `code_voyage` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `resume` varchar(500) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `continent` varchar(20) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `couverture` mediumblob NOT NULL,
  `statut` varchar(6) NOT NULL DEFAULT '''N''',
  `likes` int(12) DEFAULT NULL,
  `vues` int(12) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `code_etape` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `voyages`
--

INSERT INTO `voyages` (`code_voyage`, `titre`, `resume`, `date_debut`, `date_fin`, `continent`, `pays`, `ville`, `couverture`, `statut`, `likes`, `vues`, `id`, `code_etape`) VALUES
(1, 'Venise', 'Voyage Venise.', '2021-01-14', '2021-01-15', 'Europe', 'Italie', 'Venise', 0x76656e6973652e6a7067, '', 0, 0, 42, 1),
(2, 'Vatican', 'Voyage Vatican.', '2021-01-15', '2021-01-16', 'Europe', 'Italie', 'Rome', 0x7661746963616e2e6a7067, '', 0, 0, 42, 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`code_comm`),
  ADD KEY `cle_secondaire` (`id`);

--
-- Index pour la table `demande_ami`
--
ALTER TABLE `demande_ami`
  ADD PRIMARY KEY (`code_ami`),
  ADD KEY `id_utilisateur` (`id`),
  ADD KEY `id_ami` (`id_ami`);

--
-- Index pour la table `etape`
--
ALTER TABLE `etape`
  ADD PRIMARY KEY (`code_etape`),
  ADD KEY `code_comm` (`code_comm`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`code_img`),
  ADD KEY `codeEtape` (`code_etape`),
  ADD KEY `codeVoyage` (`code_voyage`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`code_langue`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`code_notif`),
  ADD KEY `id_utilisateur` (`id`),
  ADD KEY `code_voyage` (`code_voyage`),
  ADD KEY `code_comm` (`code_comm`);

--
-- Index pour la table `signalements`
--
ALTER TABLE `signalements`
  ADD PRIMARY KEY (`code_signal`),
  ADD KEY `foreign key 2 le retour` (`code_com`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_langue` (`code_langue`);

--
-- Index pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD PRIMARY KEY (`code_voyage`),
  ADD KEY `foreign key` (`id`),
  ADD KEY `code_etape` (`code_etape`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `code_comm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `demande_ami`
--
ALTER TABLE `demande_ami`
  MODIFY `code_ami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `code_etape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `code_img` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `code_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `code_notif` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `signalements`
--
ALTER TABLE `signalements`
  MODIFY `code_signal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `code_voyage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `cle_secondaire` FOREIGN KEY (`id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `etape`
--
ALTER TABLE `etape`
  ADD CONSTRAINT `code_comm` FOREIGN KEY (`code_comm`) REFERENCES `commentaires` (`code_comm`);

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `codeEtape` FOREIGN KEY (`code_etape`) REFERENCES `etape` (`code_etape`),
  ADD CONSTRAINT `codeVoyage` FOREIGN KEY (`code_voyage`) REFERENCES `voyages` (`code_voyage`);

--
-- Contraintes pour la table `signalements`
--
ALTER TABLE `signalements`
  ADD CONSTRAINT `foreign key 2 le retour` FOREIGN KEY (`code_com`) REFERENCES `commentaires` (`code_comm`);

--
-- Contraintes pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD CONSTRAINT `code_langue` FOREIGN KEY (`code_langue`) REFERENCES `langues` (`code_langue`);

--
-- Contraintes pour la table `voyages`
--
ALTER TABLE `voyages`
  ADD CONSTRAINT `code_etape` FOREIGN KEY (`code_etape`) REFERENCES `etape` (`code_etape`),
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`id`) REFERENCES `utilisateurs` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
