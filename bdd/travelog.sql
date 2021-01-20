-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 jan. 2021 à 17:06
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
(1, 'Duis eget justo mauris.', 7, 1),
(2, 'Aenean scelerisque sollicitudin sodales.', 1, 2),
(3, 'Sed non tellus felis. ', 4, 3),
(4, 'Cras id tristique libero.', 9, 5),
(5, 'Sed sollicitudin aliquam sollicitudin.', 13, 6),
(6, 'Aliquam in pulvinar massa.', 14, 7),
(7, 'Quisque tempus volutpat aliquet.', 15, 8),
(8, 'Vivamus a molestie arcu.', 17, 4),
(9, 'Etiam eu ipsum augue.', 7, 9),
(10, 'Aenean a nibh eget odio condimentum luctus a sit amet lectus.', 11, 10),
(11, 'Sed quis metus lorem.', 11, 1);

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
(1, 1, 9, 'N'),
(2, 2, 3, 'N'),
(3, 15, 11, 'Y'),
(4, 4, 14, 'Y'),
(5, 5, 6, 'N'),
(7, 8, 17, 'N'),
(8, 10, 13, 'Y'),
(9, 11, 12, 'Y'),
(10, 16, 17, 'N'),
(12, 7, 1, 'N'),
(13, 4, 1, 'N'),
(14, 9, 1, 'N');

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
(1, 'Donec dapibus est diam. ', 'Fusce ut ex eget turpis bibendum suscipit et sed mi. Phasellus orci risus, porta quis scelerisque molestie, porttitor in nisl. Mauris efficitur leo orci, nec venenatis quam rutrum non. Nunc odio ante, ullamcorper quis mollis non, faucibus eget est. Curabitur tellus urna, posuere vel placerat sed, suscipit eu sem. Maecenas euismod aliquet commodo. '),
(2, 'Curabitur condimentum urna ipsum, eget p', 'Vivamus viverra convallis felis, sed laoreet ipsum posuere ut. Nam eu consequat sem, sit amet feugiat eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur auctor risus urna, rhoncus porta nisl molestie in. Sed laoreet viverra nisl. Praesent quam tellus, suscipit ut ipsum ut, fermentum facilisis tortor. Curabitur mauris ligula, tincidunt sit amet pulvinar ut, venenatis a ex. Nunc non ipsum nec libero posuere cursus a sed quam. '),
(3, 'Quisque at dui sapien.', 'Sed vel sollicitudin felis, eget dignissim odio. Nunc tempus pulvinar neque nec consequat. Nullam dictum erat et tincidunt hendrerit. In id sapien ex. Donec id velit a lectus aliquet pharetra. Maecenas et porta nunc, id bibendum felis. Aliquam vel dictum diam. Sed bibendum quam sit amet tortor imperdiet dictum. Aenean ac urna eget lacus porttitor imperdiet. Maecenas volutpat lectus in scelerisque euismod. Ut nec blandit massa, id ultrices felis. Donec tincidunt arcu erat, id dapibus nisl faucibu'),
(4, 'Sed vitae purus interdum, faucibus tellu', 'Nunc dui metus, porta ac accumsan ut, suscipit eget urna. Donec feugiat dignissim nulla. Integer luctus porttitor arcu in aliquet. Donec egestas, nisl sed dignissim gravida, dui enim venenatis mauris, vitae hendrerit lorem massa nec nulla. Nam sit amet mollis ante. Ut lacinia erat turpis, a fringilla ante dapibus quis. Sed et pellentesque augue. Sed sed ante rutrum justo tristique pharetra. '),
(5, 'Donec luctus tincidunt lectus, vitae luc', 'In id nisl non neque egestas pulvinar quis vel lacus. Aenean felis risus, finibus ultricies euismod vel, convallis ut leo. Fusce consequat congue nisi, quis euismod diam feugiat quis. Nam lacinia ante in magna eleifend, quis viverra sapien fermentum. Nullam faucibus odio eget mauris ultricies, eu mattis velit congue. Morbi sit amet magna lectus. Pellentesque commodo faucibus facilisis. '),
(6, 'Etiam quis aliquet turpis. ', 'Vivamus lacinia mattis justo, ac tempus risus vestibulum vel. Praesent in posuere ex. Donec in turpis ipsum. Quisque mattis justo vel venenatis dignissim. Etiam in sollicitudin diam, in porttitor felis. Vivamus a eros vel dui tristique accumsan eget quis augue. Nunc eu massa vitae dolor fermentum hendrerit porttitor eget felis. Ut et ultricies lectus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin malesuada eros sit amet massa gravida, non tempor lec'),
(7, 'usce vestibulum tellus id sem mattis fer', 'Integer faucibus lobortis ante, eget lobortis nunc laoreet sit amet. Sed pharetra sem sit amet nibh gravida, vitae porta risus lobortis. Donec suscipit est vel eros imperdiet, at tincidunt ipsum dignissim. Cras placerat sodales augue non feugiat. Sed porta dignissim ipsum eget rhoncus. Nunc justo mauris, sagittis vel tortor eu, ullamcorper hendrerit magna. Nullam vulputate bibendum dictum. '),
(8, 'Duis a ante molestie, varius est in, lob', 'Aliquam erat volutpat. Aenean convallis euismod dui sit amet feugiat. Aliquam at hendrerit mi. Etiam laoreet lobortis sapien, eget rhoncus eros rhoncus vel. Cras congue magna sem, sed accumsan lacus feugiat in. Vivamus iaculis metus non eros imperdiet, in pretium diam imperdiet. Cras et turpis nulla. '),
(9, 'Mauris id tortor eget diam efficitur orn', 'Donec sit amet massa eu arcu efficitur tempus a sed lorem. Nulla vel tortor sit amet lorem volutpat elementum. Nulla facilisi. Nulla posuere nibh eu aliquam hendrerit. Nulla gravida, eros sodales congue convallis, quam lectus tincidunt nisi, consequat sodales velit tellus eget sem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. '),
(10, 'Donec lorem erat, porttitor vel vehicula', 'Integer a nisl condimentum, vestibulum ipsum ac, rutrum neque. Morbi eu tincidunt diam. Suspendisse luctus est egestas consectetur pretium. Nulla luctus sapien nec urna laoreet auctor. Sed posuere pretium mauris, ac imperdiet erat consequat vel. Praesent non auctor neque, vel iaculis lectus. Nullam eu tempus mi. Duis luctus efficitur eros at aliquam. '),
(11, 'Phasellus sit amet bibendum leo. ', 'Aenean augue turpis, rhoncus ut vulputate a, interdum in dui. Etiam semper nulla semper massa porta, quis feugiat tellus finibus. Aliquam erat volutpat. Duis facilisis tellus eu est ornare feugiat. Aenean mollis eros ut lorem porttitor placerat. Aenean erat lectus, hendrerit non turpis ultrices, eleifend scelerisque ligula. Vivamus a mollis augue, sit amet convallis nunc. '),
(12, ' Donec iaculis orci lacus, ac bibendum a', 'Suspendisse potenti. Suspendisse et posuere augue. Duis tristique eros augue, ut fringilla arcu lacinia sit amet. Sed quis metus at orci auctor tempor efficitur ut ipsum. Donec fringilla at lectus eget sodales. Ut pellentesque dignissim velit, sed porta dui laoreet non. Nulla vitae sollicitudin risus, vitae ornare neque. Integer mattis, tortor ut tincidunt varius, ligula purus laoreet nibh, ac semper neque nunc ut elit. Nunc lacinia, diam non tristique placerat, lectus nisl accumsan velit, sempe'),
(13, 'Donec dignissim porttitor interdum. ', ' Donec justo lacus, auctor et lacinia id, porta et massa. Curabitur et erat laoreet, convallis nibh sed, varius sapien. Nunc blandit ante auctor, porta leo vitae, viverra nibh. Vivamus vulputate faucibus vulputate. Quisque vitae ornare tortor, eu pretium erat. Nullam id nunc sem. Praesent a enim quam. Praesent gravida lorem at fermentum iaculis. Nulla non libero turpis. Nam porttitor lobortis semper. Etiam consectetur justo id pellentesque pellentesque. Fusce scelerisque dolor eget tincidunt vul'),
(14, 'Mauris elit nisi, luctus sed quam a, tin', 'Sed id aliquet mauris. Phasellus sagittis urna nibh, eget ultricies leo efficitur non. Praesent et eleifend risus. Vivamus efficitur massa vitae ex vehicula volutpat. Maecenas pretium neque non pulvinar euismod. Pellentesque eget sem nunc.'),
(15, 'Vivamus vel interdum urna.', 'Aenean vel tempus velit, at semper odio. Curabitur gravida nec sapien et ultricies. Suspendisse dui nisi, efficitur at nisl sit amet, suscipit facilisis augue. Ut ornare vehicula diam, a semper dui commodo nec. Fusce dignissim consequat massa id pellentesque. Duis non ligula vitae nisi sollicitudin porttitor eu vel ipsum. '),
(16, 'Aliquam sit amet vulputate nulla.', 'Integer arcu leo, luctus eu efficitur ut, ullamcorper eget eros. Vivamus non blandit eros. Etiam facilisis elementum lacus, id efficitur odio vestibulum a. Quisque odio quam, rutrum a tortor quis, euismod tempus leo. In hac habitasse platea dictumst. Nunc mattis quis purus in egestas. Duis ac porta risus. Nunc nec justo elementum, elementum tortor ut, auctor ex. '),
(17, 'Orci varius natoque penatibus et magnis ', 'Morbi sagittis luctus augue, eu commodo quam dictum sit amet. Fusce dignissim massa vitae ligula dignissim consequat. Duis ornare aliquam mi, nec maximus neque. Duis non massa vehicula, gravida urna ac, tincidunt velit. Integer vitae velit sed sapien feugiat ornare at porta eros. Curabitur ultricies pellentesque massa, sit amet luctus lectus tempor sit amet. Mauris pretium nisi libero, aliquet interdum metus imperdiet et. In ullamcorper eros sed risus congue pellentesque. '),
(18, 'Donec quis odio pulvinar, eleifend nulla', 'Morbi et magna nec libero porttitor dignissim ac sit amet nisi. Vestibulum finibus condimentum neque, dapibus pulvinar quam. Maecenas sed faucibus arcu. Sed facilisis felis quis magna interdum hendrerit. Nullam posuere, risus id vulputate rhoncus, nisi sem pharetra leo, nec facilisis sapien turpis et erat. Fusce interdum tempus nisl, ac vulputate nunc luctus eu. Curabitur hendrerit rutrum bibendum. Vivamus ipsum eros, pellentesque non nibh at, auctor commodo magna. Maecenas non mauris sed nunc p'),
(19, 'Nam vestibulum nunc orci, eu rhoncus nun', 'Maecenas placerat dolor eu massa ullamcorper, non volutpat dolor tempor. In metus metus, porta ac urna in, interdum faucibus arcu. Pellentesque consequat quam nec elementum rhoncus. Fusce at lectus quam. Sed at metus et massa gravida tincidunt. Sed auctor orci mi. Sed ac nibh felis. Cras eu ligula non tortor vehicula gravida. Nam dapibus quis sapien sit amet pretium. Praesent mi dolor, tincidunt vitae finibus ut, varius ut massa.'),
(20, 'Vestibulum pellentesque neque non magna ', 'Vestibulum eleifend ut elit quis porttitor. Praesent eu cursus elit. Quisque consectetur enim a nunc volutpat, id bibendum justo imperdiet. Cras ipsum est, lacinia at rhoncus at, dictum eget velit. Donec ultrices ex eget pellentesque porta. Fusce eget nunc et tellus blandit varius. '),
(21, 'Fusce non aliquam mi. ', 'Phasellus fringilla metus vel placerat scelerisque. Quisque vel ante feugiat, placerat augue eu, dignissim nisi. Sed a dolor metus. In bibendum tincidunt varius. Vivamus sagittis, nisl ac dapibus efficitur, justo lectus rutrum nisl, sed volutpat lorem justo ac leo. Maecenas ornare blandit purus, vitae vestibulum dolor pellentesque ac. Praesent viverra nisl a est fringilla suscipit. ');

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
  `code_comm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`code_notif`, `date`, `id`, `code_comm`) VALUES
(1, '2021-01-20', 1, 1),
(2, '2021-01-19', 2, 2),
(3, '2021-01-18', 3, 3),
(4, '2021-01-17', 4, 4),
(5, '2021-01-16', 5, 5),
(6, '2021-01-15', 6, 6),
(7, '2021-01-14', 7, 7),
(8, '2021-01-13', 8, 8),
(9, '2021-01-12', 9, 9),
(10, '2021-01-11', 10, 10),
(11, '0000-00-00', 1, 11);

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
(1, 'Mylene', 'mylene.brieux@gmail.com', '$2y$10$ms85yUO9G1pM11g3AybiB.vadS4Yg84ZjIbEEK2LnM01PsP5B/gsa', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(2, 'karma_deux', 'romain.wyon@gmail.com', '$2y$10$XWYEWbzLkijmkHg2sxxgLuvCcq7SblRIIH2xg0iqi/YgBIRhelqry', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(3, 'karma_trois', 'karma@gmail.com', '$2y$10$aJAY0SwTnePNxGZwXT9sN.2CMr80.0R/szKTJyELdBoDzsgmlSW7K', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(4, 'Klara', 'klara@gmail.com', '$2y$10$mkO8X6ZBC4BvoqlAlOzvHepZ6xx9wktsTvt.APcodUtn.G/bV4S7O', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(5, 'mymy', 'm.brieux@gmail.com', '$2y$10$4dYPcG3aT3h9qHDG3KYnVe0vUCGwDMn.CdcB/5ZiNaz1okysRkB8y', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(6, 'myleneb', 'm.b@gmail.com', '$2y$10$28PJqsUcZzdbjOjNiHm4duVDcSTMX6g/x3UX/La4lHddhxnDVHNFC', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(7, 'Doniphan', 'doniphan.olivier@gmail.com', '$2y$10$eM3rbdK53FQ9BwWKZK/J2uYt6BW1CkvgSElRxCf0FCGNaPGWjnf2W', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(8, 'David', 'david@gmail.com', '$2y$10$BcxKYFxMCerc0CqyX4erQ.rnAkWrCGzCRminXRdwNChQNsNxIWPrO', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(9, 'SuperRomain', 'superromain@gmail.com', '$2y$10$KZDw.OYpJHkkJ.6eYnB9H.TlvKwgFZWPEgDnrfnaAbVX8r8S8Dm9W', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(10, 'Sensei', 'maitresensei@gmail.com', '$2y$10$48VNbY.5MvSIy2zBiHrKsOMmCsvvKjJfb5Slq3SP04bx8ha0nnSZK', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(11, 'Thomas', 'thomas@gmail.com', '$2y$10$q8wBSFrnN1Z6MRsC/Iryje0HHeVFJZRp8G.EARaWviinSW94akzQG', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(12, 'Felix', 'felix@gmail.com', '$2y$10$llP0p8HO0c3WQ2zZjyUHxO647FhEiLW.5k6qnuBgLIbq/KKnqSHNG', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(13, 'Nath', 'nath@gmail.com', '$2y$10$GvgsfyrIUK9xTvQreGuJE.TmxHMSBKLOf8P6KWL/hp8ihlfja9NTO', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(14, 'Yoan', 'yoan@gmail.com', '$2y$10$Xb9t62UuYp4I7QcT3MvUm.8D3bHX5JIsidC9CxvNoD/x/iC.IRRkG', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(15, 'Andhromede', 'andhromede@gmail.com', '$2y$10$CbWWL5zJY52GFLE6TRfm4OsZa4G1L3RPXGsOkw/g5RajuKNhhhbXO', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(16, 'Marhalt', 'marhalt@gmail.com', '$2y$10$pHoUOF04d3ZBGJW0cD55y.lMNmQ55kdt/KeEky7ftnc4IAORSwhZK', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1),
(17, 'Lydlus', 'lydlus@gmail.com', '$2y$10$m6ZMks7Aimn3bPpaDEKO9eG4UDhggw9QgQ7SFjFmARRbWt4Vn1PvW', NULL, 0x70686f746f, NULL, NULL, 'Y', 'Y', 1);

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
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Vivamus sit amet facilisis mi. Aenean sit amet enim at orci tempor mattis. Aenean sit amet ultrices libero. Mauris egestas, nisl a volutpat rutrum, orci erat volutpat dolor, sit amet accumsan risus turpis congue augue. ', '2019-06-17', '2019-06-23', 'Afrique', 'Maroc', 'Agadir', 0x6d61726f632e6a7067, 'Public', 0, 3, 1, 1),
(2, 'Nullam finibus interdum nunc. ', 'Ut dapibus ut nisi volutpat mollis. Integer nec fringilla diam. Suspendisse a nisi sed mauris suscipit luctus. Ut sed iaculis ligula. ', '2020-12-30', '2021-01-02', 'Asie', 'Emirats Arabes Unis', 'Dubai', 0x64756261692e6a7067, 'Public', 0, 1, 2, 2),
(3, 'Proin feugiat pulvinar pulvinar.', 'Aenean ut tincidunt mauris, finibus vestibulum diam. Sed consequat, felis sit amet faucibus maximus, orci urna euismod lorem, ac fringilla dui lacus at metus.', '2020-08-01', '2020-08-16', 'Amerique du Sud', 'Bresil', 'Rio', 0x62726573696c2e6a7067, 'Public', 0, 0, 3, 3),
(4, 'Vestibulum ante ipsum primis.', 'Cras ullamcorper sapien nibh, nec vehicula magna molestie imperdiet. Praesent convallis egestas risus, id tempor neque auctor venenatis.', '2020-09-14', '2020-09-30', 'Asie', 'Chine', 'Pekin', 0x6368696e612e6a7067, 'Public', 0, 0, 4, 4),
(5, 'Nullam nec maximus ipsum.', 'In convallis pellentesque scelerisque. Fusce at varius nunc. Proin eu urna imperdiet, consequat odio eu, consequat purus. ', '2020-07-01', '2020-07-05', 'Afrique', 'Egypte', 'Le Caire', 0x6567797074652e6a7067, 'Public', 0, 0, 5, 5),
(6, 'Aliquam fermentum viverra porta.', ' Vivamus luctus iaculis nibh. Quisque lobortis ipsum sed suscipit molestie.', '2020-02-01', '2020-02-29', 'Amerique du Nord', 'Etats-Unis', 'Dallas', 0x65746174732d756e69732e6a7067, 'Public', 0, 0, 6, 6),
(7, 'Donec cursus nunc vel neque posuere, in pharetra n', 'Sed vulputate feugiat lobortis. Maecenas semper commodo justo, vitae elementum dolor aliquet et.', '2020-05-29', '2020-05-31', 'Europe', 'Grece', 'Athene', 0x67726563652e6a7067, 'Public', 0, 0, 7, 7),
(8, 'Maecenas blandit cursus risus, quis ultrices turpi', 'Phasellus sed nulla dolor. Phasellus et fringilla eros. Vestibulum at urna velit. Etiam nec tellus tincidunt, aliquet turpis vitae, placerat nulla.', '2021-01-15', '2021-01-17', 'Europe', 'Allemagne', 'Hambourg', 0x68616d626f7572672e6a7067, 'Public', 0, 0, 8, 8),
(9, 'Suspendisse enim diam.', 'Suspendisse fringilla vitae odio a convallis. Proin ut ex eu lacus ultrices euismod. Vivamus ultrices lectus erat, vel mattis purus placerat et.', '2019-05-01', '2019-05-31', 'Asie', 'Inde', 'Bombay', 0x696e6469612e6a7067, 'Public', 0, 0, 9, 9),
(10, 'Phasellus iaculis viverra bibendum.', 'Integer bibendum bibendum libero. Mauris vitae blandit magna, non mattis quam. Integer mattis odio at mi convallis, egestas suscipit quam pretium. ', '2019-10-01', '2019-10-31', 'Asie', 'Japon', 'Tokyo', 0x6a61706f6e2e6a7067, 'Public', 0, 0, 10, 10),
(11, 'Duis rutrum nulla id quam cursus, eu aliquam nisl ', 'Curabitur leo leo, sagittis sed augue quis, semper convallis augue. Donec sed turpis vitae ex pretium congue quis ut nisi. ', '2021-01-02', '2021-01-03', 'Europe', 'France', 'Annecy', 0x6c61632e6a7067, 'Public', 0, 0, 11, 11),
(12, 'Nullam auctor nulla ipsum, laoreet volutpat urna f', ' In tempus vitae nisi eu dignissim. Nunc ut viverra eros, vel malesuada arcu. Nullam et metus in ex maximus varius. ', '2019-12-23', '2019-12-26', 'Europe', 'Angleterre', 'Londres', 0x6c6f6e647265732e6a7067, 'Public', 0, 0, 12, 12),
(13, 'In vehicula ex nec tellus faucibus tincidunt. ', 'Mauris felis ipsum, auctor ac suscipit suscipit, viverra non ipsum. Pellentesque neque massa, placerat maximus vestibulum quis, elementum et diam.', '2016-06-12', '2016-06-26', 'Amerique du Sud', 'Perou', 'Lima', 0x7065726f752e6a7067, 'Public', 0, 0, 13, 13),
(14, 'Nunc elementum dictum diam a posuere.', 'Vivamus at mauris eros. Aenean accumsan arcu non est finibus volutpat. Mauris vel ligula vitae erat finibus porta.', '2017-08-01', '2017-08-31', 'Oceanie', 'Nouvelle-Zelande', 'Auckland', 0x6e65777a65616c616e642e6a7067, 'Public', 0, 0, 14, 14),
(15, 'Vestibulum eget nisl a lectus maximus laoreet ac v', 'Aenean ullamcorper vehicula scelerisque. Nullam dignissim, ex et finibus rutrum, diam mauris euismod nulla, sed bibendum quam enim vel lectus.', '2018-12-20', '2019-01-10', 'Asie', 'Japon', 'Osaka', 0x6f73616b612e6a7067, 'Public', 0, 0, 15, 15),
(16, 'Pellentesque ut cursus quam, rhoncus convallis lac', 'Cras id erat sed lacus gravida maximus. Maecenas quis rhoncus mi. In a magna odio. Duis eu vehicula sem. ', '2018-06-20', '2018-06-30', 'Europe', 'Portugal', 'Lisbonne', 0x706f72747567616c2e6a7067, 'Public', 0, 0, 17, 16),
(17, 'Pellentesque rhoncus sapien arcu, quis auctor orci', 'Suspendisse quis tellus libero. Nullam dignissim venenatis dolor, id interdum quam rhoncus ac. Nunc hendrerit erat orci, ut elementum justo tincidunt nec. ', '2020-06-14', '2020-06-29', 'Oceanie', 'Australie', 'Sydney', 0x7379646e65792e6a7067, 'Public', 0, 0, 1, 17),
(18, 'Pellentesque id metus at magna elementum blandit. ', 'Etiam id leo ultrices risus viverra luctus. Nam scelerisque augue turpis, et vestibulum quam eleifend et. Sed est massa, suscipit at elit vitae, hendrerit tincidunt tortor. ', '2020-05-27', '2020-06-15', 'Asie', 'Taiwan', 'Taipei', 0x74616977616e2e6a7067, 'Public', 0, 0, 9, 18),
(19, 'Suspendisse iaculis cursus finibus. ', 'Mauris gravida nisi aliquam nisl ornare ornare. Pellentesque diam ligula, lobortis finibus ultrices in, mattis sed mauris. ', '2020-08-01', '2020-08-02', 'Europe', 'Italie', 'Rome', 0x74726576692e6a7067, 'Public', 0, 0, 13, 19),
(20, 'Sed placerat laoreet euismod.', 'Vivamus ultrices, nisi id condimentum ullamcorper, nulla justo sodales lorem, vitae auctor nulla justo sed sem. ', '2020-08-20', '2020-08-21', 'Europe', 'Italie', 'Vatican', 0x7661746963616e2e6a7067, 'Public', 0, 0, 14, 20),
(21, 'Curabitur eu libero ac ipsum pretium rhoncus quis ', ' Maecenas aliquam imperdiet est. Nunc quis eros eu quam convallis commodo sit amet eu leo. Duis convallis pretium dui vel mattis. ', '2021-01-07', '2021-01-10', 'Europe', 'Italie', 'Venise', 0x76656e6973652e6a7067, 'Public', 0, 0, 17, 21);

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
  MODIFY `code_comm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `demande_ami`
--
ALTER TABLE `demande_ami`
  MODIFY `code_ami` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `etape`
--
ALTER TABLE `etape`
  MODIFY `code_etape` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `code_notif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `voyages`
--
ALTER TABLE `voyages`
  MODIFY `code_voyage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
