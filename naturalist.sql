-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 mai 2021 à 02:05
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
-- Base de données : `naturalist`
--

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(30) NOT NULL,
  `type_animal` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id_animal`, `type_animal`) VALUES
(30, 'chien'),
(15, 'chat'),
(32, 'poulet');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `nom_blog` varchar(100) NOT NULL,
  `contenu_blog` text NOT NULL,
  `image_blog` blob NOT NULL,
  `date_blog` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id_blog`, `nom_blog`, `contenu_blog`, `image_blog`, `date_blog`) VALUES
(2, 'le chats sont malades', 'les chats sont vraiment malades', 0x626c6f672d332e6a7067, '2021-05-10 01:29:49');

-- --------------------------------------------------------

--
-- Structure de la table `blog_commentaire`
--

CREATE TABLE `blog_commentaire` (
  `id_commentaire` int(11) NOT NULL,
  `id_du_blog` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contenu` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog_commentaire`
--

INSERT INTO `blog_commentaire` (`id_commentaire`, `id_du_blog`, `nom`, `email`, `contenu`, `date`) VALUES
(3, 2, 'mahdi', 'ngueemmanuel.prof@gmail.com', 'moi aussi', '2021-05-10 03:01:24'),
(4, 2, 'aziz', 'ZEF', 'MOI AUSSIIII', '2021-05-10 03:02:28'),
(5, 3, 'emmanuel', 'ngueemmanuel.prof@gmail.com', 'je suis la ', '2021-05-10 03:03:44');

-- --------------------------------------------------------

--
-- Structure de la table `cathegorie`
--

CREATE TABLE `cathegorie` (
  `id_cath` int(30) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `type_animal` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cathegorie`
--

INSERT INTO `cathegorie` (`id_cath`, `designation`, `type_animal`) VALUES
(31, 'aliment pour poule', 'poulet'),
(30, 'Aliment pour chat', 'chat'),
(29, 'anti puce pour chien', 'chien'),
(28, 'Aliment pour chien', 'chien'),
(32, 'antiparasitaire pour poule', 'poulet'),
(33, 'accessoires et couveuses', 'poulet'),
(34, 'abre Ã  chat et griffoire', 'chat'),
(35, 'couchage pour chat', 'chien'),
(36, 'hygiÃ¨ne dentaire et soin pour chien', 'chien');

-- --------------------------------------------------------

--
-- Structure de la table `consultations`
--

CREATE TABLE `consultations` (
  `id_consultation` int(11) NOT NULL,
  `Objet` varchar(60) NOT NULL,
  `type_animal` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `description_con` text NOT NULL,
  `id_utilisateur` int(60) DEFAULT NULL,
  `date_consultation` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `consultations`
--

INSERT INTO `consultations` (`id_consultation`, `Objet`, `type_animal`, `age`, `description_con`, `id_utilisateur`, `date_consultation`) VALUES
(3, 'qsdqsdqs', 'sqdqsdqs', 'qsdqsdqsd', 'sqdqsdsqd', 0, '2021-05-03 00:28:06');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sujet` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `sujet`, `message`) VALUES
(1, 'user', 'flo@gmail.com', 'information', 'bcbdhcdhbchdbchdc c'),
(5, 'CALEB AKOA', 'akoacaleb10@gmail.com', 'information', 'ici chez nous'),
(6, 'CALEB Ak', 'akoacaleb10@gmail.com', 'information', 'veillez nous aidez'),
(9, 'Akoa', 'lepiratetouza@gmail.com', 'vos produits', 'vos produits sont ils adaptés?'),
(10, 'CALEB AKOA', 'akoacaleb10@gmail.com', 'vos produits', 'nos produits'),
(11, 'aaronn', 'lepiratetouza@gmail.com', 'documentation', 'icii');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `designation`, `prix`, `quantity`, `image`) VALUES
(11, 'patÃ©e pour chien adulte', 4, 1, 0x70726f647563742d332e6a7067),
(12, 'croquette pour chien', 6, 1, 0x70726f647563742d342e6a7067),
(13, 'collier anti-bactÃ©rien', 6, 1, 0x70726f647563742d352e6a7067),
(16, 'ComplÃ©ment Parasites Externes', 5, 1, 0x636f6d706c656d656e742d7061726173697465732d65787465726e65732d62696f63616e696e612d6d612d62617373652d636f75722e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int(30) NOT NULL,
  `cathegorie` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `marque` varchar(255) NOT NULL,
  `descriptionProd` text NOT NULL,
  `prix_achat` int(255) NOT NULL,
  `prix_vente` int(11) NOT NULL,
  `quantiteStock` int(30) NOT NULL,
  `img` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id_produit`, `cathegorie`, `designation`, `marque`, `descriptionProd`, `prix_achat`, `prix_vente`, `quantiteStock`, `img`) VALUES
(11, 'Aliment pour chien', 'patÃ©e pour chien adulte', 'Edgard &amp; Cooper', 'Votre chien va les adorer ! DÃ©couvrez les pÃ¢tÃ©es Edgard &amp; Cooper Adulte sans cÃ©rÃ©ales ! Elles conviennent aux chiens de toutes tailles et d\'Ã¢ge adulte. ComposÃ©es de viande et poisson frais, de lÃ©gumes, de fruits et d\'herbes fraÃ®ches, ces pÃ¢tÃ©es ne contiennent pas de farine de viande ni de colorants et d\'arÃ´mes artificiels. Plusieurs saveurs existent pour plaire Ã  tous les chiens gourmands : Poulet et dinde Agneau et bÅ“uf Gibier et canard Faites de votre chien un hÃ©ros ! Edgard &amp; Cooper soutient les animaux qui sont dans le besoin et reverse 1% de son chiffre d\'affaires Ã  un projet caritatif pour leur venir en aide.', 4, 6, 6, 0x70726f647563742d332e6a7067),
(12, 'Aliment pour chien', 'croquette pour chien', 'frontline', 'idÃ©al pour la digestion de votre chien', 6, 4, 7, 0x70726f647563742d342e6a7067),
(13, 'anti puce pour chien', 'collier anti-bactÃ©rien', 'Edgard &amp; Cooper', 'idÃ©al pour la lutte contre les puces et tiques sur votre chien', 6, 6, 6, 0x70726f647563742d352e6a7067),
(14, 'aliment pour poule', 'Aliment Complet Croissance', 'Magalli', 'Lâ€™Aliment Complet Croissance Magalli est spÃ©cialement conÃ§u pour les poulettes de lâ€™Ã¢ge de 6 semaines jusquâ€™Ã  leur entrÃ©e en ponte (ou jusqu\'Ã  la 18Ã¨me semaine). Il se prÃ©sente sous forme de Â« vermicelles Â» faciles Ã  consommer.\r\n\r\nCet aliment apporte tous les Ã©lÃ©ments nÃ©cessaires aux poulettes pour leur croissance et pour les prÃ©parer Ã  leur future vie de pondeuse :\r\n\r\ndes sources de protÃ©ines diversifiÃ©es pour un bon dÃ©veloppement des muscles\r\ndes minÃ©raux (calcium, phosphore) et de la vitamine D3 pour un squelette solide\r\ndes fibres (son de blÃ©, avoine) pour dÃ©velopper la taille du jabot et prÃ©parer les poulettes Ã  la future pÃ©riode de ponte\r\ndes vitamines et anti-oxydants pour un bon fonctionnement du systÃ¨me immunitaire\r\nPour un meilleur rationnement, vous pouvez utilisez la pince dosette prÃ©vue Ã  cet effet !', 7, 13, 101, 0x616c696d656e742d636f6d706c65742d63726f697373616e63652d6d6167616c6c692e6a7067),
(15, 'Aliment pour chat', 'patÃ©e pour chat', 'almo nature', 'PrÃ©parÃ©es et cuisinÃ©es en Italie, les pÃ¢tÃ©es en boÃ®te Almo Nature HFC Natural/Jelly Made In Italy Gluten Free sont Ã©laborÃ©es pour le chat adulte dâ€™un an et plus.\r\n\r\nCes deux recettes sans gluten proposent du savoureux filet de thon rouge Ã  dÃ©guster en sauce (Natural) ou en gelÃ©e (Jelly).\r\n\r\nLe terme HFC signifie quâ€™elles sont Ã©laborÃ©es avec de la viande fraÃ®che Ã  lâ€™origine propre Ã  la consommation humaine. Elles ne contiennent donc aucune farine animale et sont Ã©galement sans aditifs, conservateurs, colorants, arÃ´mes artificiels ou OGM.\r\n\r\nLes recettes comprennent peu dâ€™ingrÃ©dients justes cuits dans leur bouillon (et avec de la gÃ©latine vÃ©gÃ©tale naturelle pour la recette Jelly) pour en sauvegarder toute la saveur. La cuisson des pÃ¢tÃ©es Almo Nature HFC Natural/Jelly Made In Italy Gluten Free garantie une prÃ©servation des nutriments des ingrÃ©dients utilisÃ©s ce qui rend les protÃ©ines plus faciles Ã  digÃ©rer.', 5, 4, 100, 0x616c6d6f2d6e61747572652d6866632d6e61747572616c2d6a656c6c792d6d6164652d696e2d6974616c792d676c7574656e2d667265652d782d672d2e6a7067),
(16, 'antiparasitaire pour poule', 'ComplÃ©ment Parasites Externes', 'ma basse cour', 'Le complÃ©ment alimentaire Parasites Externes Biocanina est destinÃ© aux poules. Il est formulÃ© Ã  base de plantes, et contient de l\'extrait de thym.\r\n\r\nIl sâ€™emploie sous la forme de gouttes Ã  diluer dans l\'eau de boisson et agit sur les parasites externes, qui peuvent provoquer certaines maladies chez les poules.\r\n\r\nSes points forts : il aide Ã  rÃ©duire les infestations de poux rouges.\r\n\r\nLa gamme Biocanina Ma basse-cour contribue au bien-Ãªtre des poules en aidant Ã  prÃ©venir les infestations par les parasites externes.', 5, 3, 100, 0x636f6d706c656d656e742d7061726173697465732d65787465726e65732d62696f63616e696e612d6d612d62617373652d636f75722e6a7067),
(17, 'abre Ã  chat et griffoire', 'Griffoir Grifouille', 'bobby', 'Avec ce griffoir, finis les problÃ¨mes de griffures sur vos meubles ! Les chats, comme tous les animaux, ont leurs habitudes pour prendre leurs marques. Eux câ€™est en faisant leurs griffes sur vos meubles quâ€™ils se sentent chez eux. Cela contribue aussi de faÃ§on importante Ã  leur santÃ©. Pour Ã©pargner vos meubles, proposez Ã  votre chat une alternative amusante avec le griffoir grifouille !\r\n \r\n\r\nGrÃ¢ce aux bandes velcro, vous pourrez l\'accrocher oÃ¹ bon vous semble : au sol, sur un mur ou sur le bord d\'une fenÃªtre\r\nAttirer votre compagnon en le saupoudrant avec l\'herbe Ã  chat fournie\r\nAprÃ¨s usage le carton griffÃ© peut Ãªtre recyclÃ©. Une solution pratique, Ã©conomique et Ã©cologique qui va assurer paix et prospÃ©ritÃ© Ã  votre mobilier', 4, 3, 100, 0x67726966666f69722d677269666f75696c6c652d626f6262792e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `reponse_sujet`
--

CREATE TABLE `reponse_sujet` (
  `id` int(11) NOT NULL,
  `id_sujet` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `reponse` varchar(1000) NOT NULL,
  `date_R` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reponse_sujet`
--

INSERT INTO `reponse_sujet` (`id`, `id_sujet`, `id_utilisateur`, `reponse`, `date_R`) VALUES
(12, 41, 49, 'hey', '2021-05-12 01:49:49.000000'),
(13, 40, 49, 'nous faisons de notre mieux pour vous servir', '2021-05-12 01:50:29.000000'),
(14, 41, 51, 'c\'est facile?', '2021-05-12 01:51:38.000000'),
(15, 39, 51, 'la lenteur est leurs nature', '2021-05-12 01:52:11.000000');

-- --------------------------------------------------------

--
-- Structure de la table `sujet`
--

CREATE TABLE `sujet` (
  `id_sujet` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date_p` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sujet`
--

INSERT INTO `sujet` (`id_sujet`, `id_utilisateur`, `type`, `message`, `date_p`) VALUES
(38, 37, 'Critiques', 'vous etes lents', '2021-05-12 00:43:16.237851'),
(39, 52, 'Critiques', 'soyez rapide', '2021-05-12 07:44:16.000000'),
(40, 50, 'Critiques', 'trop d\'attentes', '2021-05-05 00:44:45.000000'),
(41, 49, 'Suggestions', 'ameliorer vos services', '2021-05-12 00:45:12.000316'),
(42, 51, 'Produits', 'besoin de connaitre vos promotions', '2021-05-12 01:57:46.000000'),
(43, 51, 'Produits', 'promotion produit', '2021-05-12 01:58:08.000000');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `type` tinyint(1) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `pass`, `email`, `type`, `image`) VALUES
(37, 'cedric', 'AZE123Aazert', 'cab12@gmail.com', 0, '../../images/florasffsdf.jpeg'),
(41, 'izout', 'Akoa2345', 'cab11@gmail.com', 1, '../../images/ici.jpg'),
(47, 'malgash', 'pzou1123SS', 'lordsoul@gmail.com', 1, '../../images/malgash.jpg'),
(48, 'paul simon', 'simonPouk23', 'houston@gmail.com', 1, '../../images/paulsimon.jpg'),
(49, 'forin', 'Akolo1234', 'ca@gmail.com', 0, '../../images/forin.jpg'),
(50, 'Taly', 'Dominique01', 'flot@gmail.com', 0, '../../images/taly.jpg'),
(51, 'caL', 'Dominique2', 'akoacaleb10@gmail.com', 0, '../../images/cal.jpg'),
(52, 'arian', 'Lost1234', 'caleb.akoa@esprit.tn', 0, '../../images/arian.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Index pour la table `blog_commentaire`
--
ALTER TABLE `blog_commentaire`
  ADD PRIMARY KEY (`id_commentaire`);

--
-- Index pour la table `cathegorie`
--
ALTER TABLE `cathegorie`
  ADD PRIMARY KEY (`id_cath`);

--
-- Index pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id_consultation`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- Index pour la table `reponse_sujet`
--
ALTER TABLE `reponse_sujet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_sujet` (`id_sujet`),
  ADD KEY `fk_id_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD PRIMARY KEY (`id_sujet`),
  ADD KEY `utilisateur_fk` (`id_utilisateur`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `blog_commentaire`
--
ALTER TABLE `blog_commentaire`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `cathegorie`
--
ALTER TABLE `cathegorie`
  MODIFY `id_cath` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id_consultation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `reponse_sujet`
--
ALTER TABLE `reponse_sujet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `sujet`
--
ALTER TABLE `sujet`
  MODIFY `id_sujet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `reponse_sujet`
--
ALTER TABLE `reponse_sujet`
  ADD CONSTRAINT `fk_id_sujet` FOREIGN KEY (`id_sujet`) REFERENCES `sujet` (`id_sujet`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_utilisateur` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `sujet`
--
ALTER TABLE `sujet`
  ADD CONSTRAINT `utilisateur_fk` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
