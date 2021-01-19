-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 jan. 2021 à 20:59
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.2.34

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
  `id` int(11) NOT NULL,
  `code_etape` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`code_comm`, `commentaire`, `id`, `code_etape`) VALUES
(1, 'Je suis un commentaire test.', 42, 0),
(2, 'cc', 40, 5),
(3, '2e commentaire', 41, 5);

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
(2, 42, 44, 'N'),
(3, 43, 42, 'N'),
(6, 42, 45, 'Y'),
(7, 39, 38, 'N');

-- --------------------------------------------------------

--
-- Structure de la table `etape`
--

CREATE TABLE `etape` (
  `code_etape` int(11) NOT NULL,
  `sous_titre` varchar(40) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etape`
--

INSERT INTO `etape` (`code_etape`, `sous_titre`, `description`) VALUES
(1, '&eacute;tape 1', 'Premi&egrave;re &eacute;tape'),
(2, '&eacute;tape 1', 'Premi&egrave;re &eacute;tape'),
(3, 'Lorem ipsum dolor sit amet, consectetur ', 'Nullam et congue ligula. Vestibulum sapien sem, suscipit non dui eget, vulputate pellentesque nisi. Duis sit amet leo scelerisque nulla finibus hendrerit. Cras eget magna quis leo blandit consequat posuere vitae quam. Nulla sodales consequat massa eget rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(4, 'Lorem ipsum dolor sit amet, consectetur ', 'Nullam et congue ligula. Vestibulum sapien sem, suscipit non dui eget, vulputate pellentesque nisi. Duis sit amet leo scelerisque nulla finibus hendrerit. Cras eget magna quis leo blandit consequat posuere vitae quam. Nulla sodales consequat massa eget rutrum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. '),
(5, 'Cras ac ex felis. ', 'Aenean quis elementum enim, sit amet convallis enim. Mauris eget tortor porttitor, tempor orci at, efficitur sem. Cras molestie, nisi ullamcorper hendrerit facilisis, dolor lectus feugiat nunc, eget tempor ipsum nibh eget massa. Vestibulum in gravida ligula. Ut suscipit nisl eget nulla pretium, in bibendum velit posuere. Cras porta diam eget consectetur ultrices. '),
(6, 'In hac habitasse platea dictumst. ', 'Nullam est orci, pretium rutrum tempor non, volutpat eu ipsum. Vestibulum id urna eget ante consectetur fringilla vitae sed lorem. Curabitur auctor interdum lobortis. Quisque ullamcorper mi tellus, vehicula molestie ante pellentesque id. Curabitur ac ante non tortor dignissim malesuada eu eu tortor. '),
(7, 'Donec ut nulla sed velit imperdiet vehic', 'Etiam ut lectus pellentesque, fringilla erat et, ultricies tellus. Nulla commodo ornare odio, eget sagittis purus feugiat ac. Vivamus et sem vitae purus sagittis consectetur nec ut risus. Morbi consectetur, quam quis sodales viverra, odio neque dignissim arcu, in consequat lorem metus id quam. Pellentesque luctus malesuada fermentum. Duis pulvinar libero at sapien ornare, nec sollicitudin purus luctus. '),
(8, ' Donec nisi ante, scelerisque non libero', 'Aenean fringilla lacinia suscipit. Fusce tempor sit amet ipsum vitae iaculis. Donec lacinia posuere vehicula. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas euismod leo vitae pharetra egestas. Nam tincidunt orci eu purus commodo feugiat. Etiam sit amet laoreet dui. Pellentesque tincidunt vitae arcu non sodales. '),
(9, 'Duis quis auctor ipsum.', 'Vivamus eros quam, gravida id urna sed, accumsan pharetra massa. Sed id lobortis quam. Suspendisse lacinia tempus mattis. In imperdiet neque sed nibh gravida ullamcorper. Vestibulum eu efficitur enim, id consequat dui. Duis vestibulum rhoncus diam at suscipit. Morbi faucibus, diam ac ultricies venenatis, urna odio ornare odio, id hendrerit neque tortor sit amet ligula. Curabitur ut diam et sem molestie tristique vitae ac nisi. '),
(10, 'Vivamus nec leo a libero eleifend commod', 'n quis dui sit amet purus tempor pretium. Donec iaculis libero nec lectus varius, vel mattis odio facilisis. Cras in leo quam. Suspendisse malesuada ornare est, quis varius ante dapibus at. Morbi nulla est, finibus vitae condimentum in, sagittis nec felis. Sed et mauris nec urna faucibus interdum. Aenean dictum in mauris sit amet sodales. Maecenas pharetra semper dui, sed facilisis eros scelerisque ac. ');

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
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id_like` int(11) NOT NULL,
  `code_voyage` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`code_notif`, `date`, `id`, `code_voyage`, `code_comm`) VALUES
(5, '0000-00-00', 38, 4, 1);

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
(44, 'Clement', 'ClementR@gmail.com', '$2y$10$TRGjytzjK/AVt/r7/WVef.ds4fZFVDskasEqSvneIQAwv1J0xleLy', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(45, 'mymy', 'm.brieux@gmail.com', '$2y$10$UC3ZcVv9D30htfGvoUcROuS23FTW.FwLyVhKj8z4.FgYEju5GcK4e', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(46, 'myleneb', 'm.b@hotmail.fr', '$2y$10$67F53shl5CzWaQA5NKRAwOfuAZynRRCOEO6MTdfxk5mO6dxH3iuNa', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1);

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
(4, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Sed lacinia, tortor id scelerisque pharetra, sapien libero vulputate sapien, id mattis augue nisl in mi. Mauris id porta nibh. Pellentesque eleifend ullamcorper tortor. Morbi ligula lacus, egestas a ante eget, facilisis vestibulum massa. Praesent vestibulum tempus egestas.', '2019-06-17', '2019-06-23', 'Afrique', 'Maroc', 'Agadir', 0x6d61726f632e6a7067, 'Public', 0, 18, 38, 4),
(5, 'Cras mattis diam ut cursus sollicitudin. ', 'Nulla placerat, orci ac pellentesque aliquet, erat nisi rhoncus dolor, non rhoncus nunc ex sit amet felis. Etiam rhoncus, nisi in feugiat aliquet, lacus ipsum dapibus leo, in scelerisque erat lectus eu ex.', '2020-12-18', '2020-12-20', 'Europe', 'Angleterre', 'Londres', 0x6c6f6e647265732e6a7067, 'Public', 0, 33, 38, 5),
(6, 'Ut vestibulum odio tincidunt, condimentum eros a, ', 'Pellentesque tristique, velit sit amet dignissim aliquet, nisi massa elementum nunc, quis eleifend magna enim feugiat nibh. ', '2020-05-14', '2020-05-17', 'Europe', 'Allemagne', 'Hambourg', 0x68616d626f7572672e6a7067, 'Public', 0, 4, 38, 6),
(7, 'Morbi metus purus, venenatis nec placerat vel, max', 'Nullam sagittis, nisi non aliquet cursus, lorem libero iaculis nulla, in vestibulum dolor neque sit amet elit. Nam dignissim urna nisl, nec sollicitudin arcu sodales non. Phasellus convallis, felis eu semper cursus, neque massa venenatis nisi, eu porttitor magna sem commodo eros. ', '2020-07-01', '2020-07-31', 'Am&eacute;rique du S', 'P&eacute;rou', 'Lima', 0x7065726f752e6a7067, 'Public', 0, 3, 45, 7),
(8, 'Sed molestie finibus nisl, ac viverra nulla commod', 'Vivamus ac tincidunt ipsum, vitae semper libero. Cras faucibus eu magna ut accumsan. In felis tellus, mattis eu ex molestie, malesuada tincidunt sem. ', '2019-08-01', '2019-08-31', 'Asie', 'Japon', 'Tokyo', 0x6a61706f6e2e6a7067, 'Public', 0, 0, 45, 8),
(9, 'Aliquam a pellentesque ante. ', 'Praesent eget sollicitudin diam, eget pulvinar sapien. Mauris dictum maximus sollicitudin. Mauris quis laoreet elit.', '2020-05-04', '2020-05-25', 'Am&eacute;rique du N', 'Etats-Unis', 'Dallas', 0x65746174732d756e69732e6a7067, 'Public', 0, 0, 46, 9),
(10, 'Phasellus convallis gravida laoreet. ', 'Sed eu mauris vestibulum, cursus mauris sit amet, laoreet ipsum. Morbi rutrum lorem eros, ac vestibulum est tincidunt in. ', '2021-01-02', '2021-01-03', 'Europe', 'Italie', 'Rome', 0x74726576692e6a7067, 'Public', 0, 9, 46, 10);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`code_comm`),
  ADD KEY `cle_secondaire` (`id`),
  ADD KEY `code_etape` (`code_etape`);

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
  ADD PRIMARY KEY (`code_etape`);

--
-- Index pour la table `langues`
--
ALTER TABLE `langues`
  ADD PRIMARY KEY (`code_langue`);

--
-- Index pour la table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id_like`),
  ADD KEY `IdVoyage` (`code_voyage`),
  ADD KEY `IdUser` (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`code_notif`),
  ADD KEY `id_utilisateur` (`id`),
  ADD KEY `code_voyage` (`code_voyage`),
  ADD KEY `code_comm` (`code_comm`);

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
  MODIFY `code_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `demande_ami`
--
ALTER TABLE `demande_ami`
  MODIFY `code_ami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `code_etape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `langues`
--
ALTER TABLE `langues`
  MODIFY `code_langue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `likes`
--
ALTER TABLE `likes`
  MODIFY `id_like` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `code_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `code_voyage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `cle_secondaire` FOREIGN KEY (`id`) REFERENCES `utilisateurs` (`id`);

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `IdUser` FOREIGN KEY (`id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `IdVoyage` FOREIGN KEY (`code_voyage`) REFERENCES `voyages` (`code_voyage`);

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
