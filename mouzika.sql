-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 19 mai 2021 à 02:37
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mouzika`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'root', '$2y$10$hDXhVquMpUIHgoF8u.qvI.RgHZIx8fGWkH/MCCkixqmaeUMGXcqxi'),
(3, 'jacksss', '123456'),
(4, 'admin', '$2y$10$8E8cJWU7lEmAr0k.FabEZumKST8ZxePngkvVFeKck34ZGxBgBpnle');

-- --------------------------------------------------------

--
-- Structure de la table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `number_of_songs` int(255) NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=77778 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `albums`
--

INSERT INTO `albums` (`id`, `title`, `cover_image`, `number_of_songs`, `release_date`, `genre`, `artist`, `length`) VALUES
(111, 'Genesis', 'images/70828631_1218837408320063_4177261226172088320_o.jpg', 12, '2021-05-13', '    Indie Pop', 'Malek Labidi', '   1 heure 30'),
(756, 'Yuma', 'images/yuma.jpg', 11, '2021-04-25', 'Indie Pop', 'Yuma', '2 heures'),
(5555, 'test boutton ajout', 'images/70777623_1218837378320066_7548963815145078784_o.jpg', 5, '2021-05-18', 'test button ajout', 'test button ajout', '1 heure 30'),
(6666, 'break', 'images/71115180_1218837391653398_280511851769364480_o.jpg', 6, '2021-05-04', 'rock', 'test front', ' 1 hour'),
(10555, 'testg', 'images/among us.jpg', 6, '2021-05-19', '             mvc', 'testtt', '             2 heures'),
(55555, 'break', 'images/hgfh.png', 12, '2021-05-04', 'Indie Pop', 'malekk', ' 1 hour'),
(77777, 'break', 'images/firas.jpg', 555, '2021-05-12', 'test image', 'test image', '2 heures');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `date_com` datetime NOT NULL,
  `id_patient` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_post` (`id_post`),
  KEY `id_patient` (`id_patient`),
  KEY `nom` (`nom`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `nom`, `comment`, `date_com`, `id_patient`, `id_post`) VALUES
(1, 'Utilisateur X', 'sdsds', '2021-04-26 00:49:54', 1, 4),
(2, 'admin', 'admin', '2021-04-26 17:37:33', 1, 2),
(4, 'admin', 'azd', '2021-04-26 17:44:44', 1, 10),
(5, 'Utilisateur X', 'j\'adoreee !', '2021-04-27 01:29:15', 1, 11),
(6, 'admin', 'Merci X', '2021-04-27 01:29:39', 1, 11),
(8, 'Utilisateur X', 'bonjour', '2021-04-27 10:40:04', 1, 11),
(9, 'admin', 'salut', '2021-04-27 10:41:11', 1, 11),
(13, 'admin', 'sympa cet article!', '2021-05-04 02:26:29', 1, 26),
(15, 'Utilisateur X', 'chahba', '2021-05-04 04:56:20', 1, 24),
(23, 'Utilisateur X', 'sdfsdf', '2021-05-04 05:20:13', 1, 24),
(26, 'Utilisateur X', 'hey', '2021-05-04 05:23:49', 1, 26),
(27, 'Utilisateur X', 'hey', '2021-05-04 05:27:34', 1, 26),
(28, 'Utilisateur X', 'hey', '2021-05-04 05:28:53', 1, 26),
(34, 'admin', 'i like this', '2021-05-16 13:49:58', 1, 33),
(35, 'admin', 'i like this', '2021-05-16 14:02:17', 1, 34),
(45, 'admin', 'lkl', '2021-05-18 16:19:38', 1, 24);

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_cours` varchar(15) NOT NULL,
  `type_cours` varchar(150) NOT NULL,
  `prix_cours` int(5) NOT NULL,
  `description_cours` varchar(150) NOT NULL,
  `photo_cours` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `nom_cours`, `type_cours`, `prix_cours`, `description_cours`, `photo_cours`) VALUES
(16, 'majdouch', 'Chants', 984, 'olala', '../pdp_cours/4f43aa2ee4553b91ee4bb0d242dbb4e5d.jpg'),
(9, 'majdi', 'Instruments', 980, 'waaaaw', 'pdp_cours/99ac5667c7bf5b9993ce667aef8115a94.png'),
(15, 'chta9tinii', 'Instruments', 85, 'fok', '../pdp_cours/2684f4b83cd2871562ed724e0533dc31product11.jpg'),
(12, 'mahmoud', 'Les deux', 54, 'ultimatum', 'pdp_cours/1cca52ebe265d60b9dded069043d3329product9.jpg'),
(7, 'guitare', 'Instruments', 98, 'prodige', 'pdp_cours/a5a8327814d306fc6a1af24d5ae4d6a23.png'),
(13, 'mahmoud', 'Les deux', 54, 'ultimatum', 'pdp_cours/dc8645a3775951a9525faeb682c70e37product9.jpg'),
(14, 'dhia', 'Chants', 65, 'bbbbbb', 'pdp_cours/c8623987bbc53ee21a753d3a18dfeda9product8.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `dislikes`
--

DROP TABLE IF EXISTS `dislikes`;
CREATE TABLE IF NOT EXISTS `dislikes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_membre` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_articlee` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

DROP TABLE IF EXISTS `evenement`;
CREATE TABLE IF NOT EXISTS `evenement` (
  `id_even` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `emplacement` varchar(100) NOT NULL,
  `capacite` int(11) NOT NULL,
  `date` date NOT NULL,
  `artiste` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_even`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_even`, `nom`, `emplacement`, `capacite`, `date`, `artiste`, `image`) VALUES
(0, '0', '0', 0, '2021-05-01', '0', '0'),
(1, 'Evenement', 'Avenue Habib Bourguiba, Ariana', 200, '2021-05-18', 'Black coffee', 'display_even/aff.png '),
(4, 'Evenement 2', 'Ennasr 1 Bus Stop, avenue de l’Ère Nouvelle, Ariana, Tunisie', 100, '2021-05-21', 'Fawzi', 'display_even/affiche_nsitni.jpg'),
(7, 'Evenement 3', '4 Avenue Khezama, Sousse', 250, '2021-05-12', 'Iheb / Mohsen', 'display_even/splash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

DROP TABLE IF EXISTS `formulaire`;
CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `birthdate` varchar(15) NOT NULL,
  `gsm` char(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `birthdate`, `gsm`, `mail`) VALUES
(10, 'hama ', 'ghrab', '25807/2000', '52525252', 'hamaghrab@gmail.com'),
(6, 'mahmoud', 'chebil', '65/05/2000', '54545454', 'mahmoudchebil@esprit.tn'),
(8, 'gabtni', 'dhia', '25/07/2000', '52525252', 'dhiagabtni@esprit.tn');

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `id_article` int(11) NOT NULL,
  `id_membre` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) DEFAULT NULL,
  `categorie` varchar(100) NOT NULL,
  `post` longtext NOT NULL,
  `image` varchar(100) NOT NULL,
  `date_post` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `titre`, `categorie`, `post`, `image`, `date_post`) VALUES
(26, 'the Structure of Musical Preferences: A Five-Factor Model', 'music&genres', 'Music is a cross-cultural universal, a ubiquitous activity found in every known human culture. \r\nIndividuals demonstrate manifestly different preferences in music, and yet relatively little is known about the underlying structure of those preferences. \r\nHere, we introduce a model of musical preferences based on listeners’ affective reactions to excerpts of music from a wide variety of musical genres.\r\n The findings from three independent studies converged to suggest that there exists a latent five-factor structure underlying music preferences that is genre-free, \r\nand reflects primarily emotional/affective responses to music. We have interpreted and labeled these factors as:\r\n 1) a Mellow factor comprising smooth and relaxing styles; 2) an Urban factor defined largely by rhythmic and percussive music, \r\nsuch as is found in rap, funk, and acid jazz; 3) a Sophisticated factor that includes classical, operatic, world, and jazz;\r\n 4) an Intense factor defined by loud, forceful, and energetic music; and 5) a Campestral factor comprising a variety of different styles of direct, and rootsy music such as is often found in country and singer-songwriter genres. The findings from a fourth study suggest that preferences for the MUSIC factors are affected by both the social and auditory characteristics of the music.', '../../../front/view/img/blog/4.jfif', '2021-05-04 02:25:40'),
(32, 'On Spotify, an Arranged Marriage Between Music and Podcasts', 'music&genres', 'Music-filled — and Spotify-exclusive — shows like “Black Girl Songbook” and “60 Songs That Explain the ’90s” dance around copyright constraints.\r\nDanyel Smith used to make a podcast in her kitchen. Smith, an author, journalist and former editor in chief of Vibe magazine, recorded it with her husband, Elliott Wilson, a fellow journalist and the founder of Rap Radar, between the sink and a bowl of fruit.\r\n\r\nAs one might expect of a show hosted by longtime music journalists, the podcast, “Relationship Goals,” which ran from 2015 to 2016, featured lots of music — in between playfully adversarial banter about domestic and professional headlines. The song placements, like the show itself, were done off the cuff — without much forethought, professional assistance or official permission.\r\n\r\n“It was a little bit of pirate podcasting,” Smith said. “We weren’t a part of a network, and this was before podcasting had become super popular. We would just sit at our little kitchen table and play music and talk about it.”\r\n\r\nIn its lack of authorized music, “Relationship Goals” wasn’t unusual — the process of licensing music from official rights holders often takes resources that many independent podcast publishers don’t have. But when Smith decided to start a new podcast last year, inspired by her work on a coming book about the history of Black women in pop music, she knew she wanted to do things differently.', '../../../front/view/img/blog/spotify.png', '2021-05-15 12:57:41'),
(34, 'Being James Brown: Inside the Private World of the Baddest Man Who Ever Lived', 'musicians', 'In Augusta, Georgia, in May 2005, they put up a bronze statue of James Brown, the Godfather of Soul, in the middle of Broad Street. During a visit to meet James Brown and observe him recording parts of his new album in an Augusta studio, I went and had a look at it. The James Brown statue is an odd one in several ways. For one, it is odd to see a statue standing not on a pedestal, flat on its feet on the ground. This was done at James Brown’s request, reportedly. The premise being: man of the people. The result, however: somewhat fake-looking statue. Another difficulty is that the statue is grinning. Members of James Brown’s band, present while he was photographed for reference by the statue’s sculptor, told me or their attempts to get James Brown to quit smiling for the photographs. A statue shouldn’t grin, they told him. Yet James Brown refused to do other than grin. It is the grin of a man who has succeeded, and as the proposed statue struck him as a measure of his success, he determined that it would measure him grinning. Otherwise, the statue is admirable: flowing bronze cape, helmetlike bronze hair perhaps not so much harder than the actual hair it depicts, and vintage bronze microphone with its base tipped, as if to make a kind of dance partner with James Brown, who is not shown in a dancing pose but nonetheless appears lithe, pert, ready.\r\n\r\n', '../../../front/view/img/blog/téléchargement.jpg', '2021-05-16 14:02:06');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `product_pricelow` int(5) NOT NULL,
  `product_qty` int(5) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_pricehigh` int(11) NOT NULL,
  `product_brand` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_pricelow`, `product_qty`, `product_image`, `product_category`, `product_description`, `product_pricehigh`, `product_brand`) VALUES
(18, '3ammar', 987, 1, 'pdp_cours/b2e42da637a380a911053beaee2bec40g7.png', ' Instruments', 'yesyeys', 546, 'luxlux'),
(19, 'malek', 984, 1, 'pdp_cours/9e20ce7247e975224e2b2da6a7734d06darr.PNG', ' Instruments', 'yikes', 845, 'labidi');

-- --------------------------------------------------------

--
-- Structure de la table `producttb`
--

DROP TABLE IF EXISTS `producttb`;
CREATE TABLE IF NOT EXISTS `producttb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(25) NOT NULL,
  `product_price` float DEFAULT NULL,
  `product_image` varchar(100) DEFAULT NULL,
  `cart` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `producttb`
--

INSERT INTO `producttb` (`id`, `product_name`, `product_price`, `product_image`, `cart`) VALUES
(1, 'dress', 15, 'product_image/99c09244315b7f46e2a3b1ef3150a94bpistache.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id_promo` int(10) NOT NULL AUTO_INCREMENT,
  `id_artiste` varchar(10) NOT NULL,
  `id_even` int(11) DEFAULT NULL,
  `nom` varchar(100) NOT NULL,
  `reduction` varchar(10) NOT NULL,
  `duree` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_promo`),
  KEY `FK_event` (`id_even`)
) ENGINE=InnoDB AUTO_INCREMENT=1088 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id_promo`, `id_artiste`, `id_even`, `nom`, `reduction`, `duree`, `description`, `image`) VALUES
(1085, '77', 0, 'Promotion T SHIRT ', '14', '2021-05-05', 'Promotion sur le T SHIRT de X GRIS TAILLE S/M/L', 'display/shirt.png'),
(1086, '11', 7, 'Promotion Evenement !', '20', '2021-05-22', 'Promotion sur Evenement 3', 'display/splash.jpg'),
(1087, '12', 0, 'Nouvel Album', '23', '2021-05-18', 'Promotion sur le nouve lAlbum de X', 'display/album.png');

-- --------------------------------------------------------

--
-- Structure de la table `singles`
--

DROP TABLE IF EXISTS `singles`;
CREATE TABLE IF NOT EXISTS `singles` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  `single_name` varchar(255) NOT NULL,
  `artist_image` varchar(255) NOT NULL,
  `audio` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `rate` int(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=666666667 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `singles`
--

INSERT INTO `singles` (`id`, `artist`, `single_name`, `artist_image`, `audio`, `release_date`, `rate`, `genre`) VALUES
(12, 'test integration', 'integration', 'images/118654718_1506918159509448_3213476623075384694_n.jpg', 'audio/deep end.mp3', '2021-05-21', 5, 'integ'),
(456, 'Malek', 'test pagination', 'images/IMG_0345.jpeg', 'audio/deja_vu.mp3', '2021-05-18', 5, ' Indie Pop'),
(1111, 'test image', 'test ajout', 'images/3fb7bc16d7af89847e1627d42cbff7f5.png', 'audio/deja_vu.mp3', '2021-05-18', 1, 'mvc'),
(2224, 'audio test', 'audio testtt', 'images/malek5.jpg', 'audio/yuma.mp3', '2021-05-17', 3, '          audio test'),
(5826, 'test ajout', 'walid', 'images/hgfh.png', 'audio/deep end.mp3', '2021-05-12', 1, 'rock'),
(1111111, 'test pagination', 'test pagination', 'images/malek labidi.jpg', 'audio/deep end.mp3', '2021-05-28', 2, 'rock'),
(666666666, 'test image', 'test ajout', 'images/150487329_786386262231223_2635701451802188035_n.jpg', 'audio/chamaa tfet.mp3', '2021-06-02', 2, ' mvc');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`, `id`, `email`) VALUES
('admin', '$2y$10$zyW4tzKWNPv1KS8r0JfBD.CZu.axMkignc35XX9twCPCiU6trLX82', 8, 'admin@gmail.com');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `dislikes`
--
ALTER TABLE `dislikes`
  ADD CONSTRAINT `id_articlee` FOREIGN KEY (`id_article`) REFERENCES `post` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `id_article` FOREIGN KEY (`id_article`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `promotion`
--
ALTER TABLE `promotion`
  ADD CONSTRAINT `FK_event` FOREIGN KEY (`id_even`) REFERENCES `evenement` (`id_even`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
