-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 07 nov. 2022 à 13:49
-- Version du serveur : 5.7.31
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `user_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprentissage`
--

DROP TABLE IF EXISTS `apprentissage`;
CREATE TABLE IF NOT EXISTS `apprentissage` (
  `id_apprentissage` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `Volonte` varchar(255) NOT NULL,
  `Apprendre` varchar(255) NOT NULL,
  `evaluation` varchar(255) NOT NULL,
  `Controle` varchar(255) NOT NULL,
  `Autonomie` varchar(255) NOT NULL,
  `Esprit` varchar(255) NOT NULL,
  `Curiosite` varchar(255) NOT NULL,
  `Methodologie` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_apprentissage`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `apprentissage`
--

INSERT INTO `apprentissage` (`id_apprentissage`, `name_user`, `Volonte`, `Apprendre`, `evaluation`, `Controle`, `Autonomie`, `Esprit`, `Curiosite`, `Methodologie`, `id`) VALUES
(3, 'Didier deschamps', '70', ' 40 ', '20', '70', ' 100', '70', '40', '100', 4),
(4, 'Harry Potter', '40', ' 100 ', '70', '100', ' 100', '100', '70', '100', 3);

-- --------------------------------------------------------

--
-- Structure de la table `communication`
--

DROP TABLE IF EXISTS `communication`;
CREATE TABLE IF NOT EXISTS `communication` (
  `id_comm` int(11) NOT NULL AUTO_INCREMENT,
  `orale` varchar(255) NOT NULL,
  `ecrite` varchar(255) NOT NULL,
  `nonverbale` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_comm`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `communication`
--

INSERT INTO `communication` (`id_comm`, `orale`, `ecrite`, `nonverbale`, `active`, `name_user`, `id`) VALUES
(2, '70', '40', ' 40 ', '100', 'Didier deschamps', 4),
(3, '100', '100', ' 100 ', '100', 'Harry Potter', 3);

-- --------------------------------------------------------

--
-- Structure de la table `interpersonnelles`
--

DROP TABLE IF EXISTS `interpersonnelles`;
CREATE TABLE IF NOT EXISTS `interpersonnelles` (
  `id_inter` int(11) NOT NULL AUTO_INCREMENT,
  `travailequipe` varchar(255) NOT NULL,
  `collectif` varchar(255) NOT NULL,
  `coordination` varchar(255) NOT NULL,
  `conflit` varchar(255) NOT NULL,
  `fiabilite` varchar(255) NOT NULL,
  `flexibilite` varchar(255) NOT NULL,
  `respect` varchar(255) NOT NULL,
  `assertivite` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `politesse` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_inter`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `interpersonnelles`
--

INSERT INTO `interpersonnelles` (`id_inter`, `travailequipe`, `collectif`, `coordination`, `conflit`, `fiabilite`, `flexibilite`, `respect`, `assertivite`, `feedback`, `politesse`, `name_user`, `id`) VALUES
(2, '40', ' 70', ' 100', '70', '100', '40', '100', '70', '40', '100', 'Didier deschamps', 4),
(3, '100', ' 70', ' 40', '70', '20', '100', '70', '100', '100', '100', 'Harry Potter', 3);

-- --------------------------------------------------------

--
-- Structure de la table `intrapersonnelles`
--

DROP TABLE IF EXISTS `intrapersonnelles`;
CREATE TABLE IF NOT EXISTS `intrapersonnelles` (
  `id_intra` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `positive` varchar(255) NOT NULL,
  `ethique` varchar(255) NOT NULL,
  `temps` varchar(255) NOT NULL,
  `pression` varchar(255) NOT NULL,
  `stress` varchar(255) NOT NULL,
  `presence` varchar(255) NOT NULL,
  `motivation` varchar(255) NOT NULL,
  `faire_confiance` varchar(255) NOT NULL,
  `confiance_soi` varchar(255) NOT NULL,
  `resilience` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_intra`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `intrapersonnelles`
--

INSERT INTO `intrapersonnelles` (`id_intra`, `name_user`, `positive`, `ethique`, `temps`, `pression`, `stress`, `presence`, `motivation`, `faire_confiance`, `confiance_soi`, `resilience`, `id`) VALUES
(2, 'Didier deschamps', ' 70', ' 40', '40', '100', '100', '70', '100', '70', '40', '100', 4),
(3, 'Harry Potter', ' 100', ' 100', '100', '100', '100', '100', '100', '100', '100', '100', 3);

-- --------------------------------------------------------

--
-- Structure de la table `leadership`
--

DROP TABLE IF EXISTS `leadership`;
CREATE TABLE IF NOT EXISTS `leadership` (
  `id_lead` int(11) NOT NULL AUTO_INCREMENT,
  `responsabilite` varchar(255) NOT NULL,
  `incertitude` varchar(255) NOT NULL,
  `vision` varchar(255) NOT NULL,
  `strategique` varchar(255) NOT NULL,
  `decision` varchar(255) NOT NULL,
  `integrite` varchar(255) NOT NULL,
  `audace` varchar(255) NOT NULL,
  `negociation` varchar(255) NOT NULL,
  `emotionnelle` varchar(255) NOT NULL,
  `professionnalisme` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_lead`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `leadership`
--

INSERT INTO `leadership` (`id_lead`, `responsabilite`, `incertitude`, `vision`, `strategique`, `decision`, `integrite`, `audace`, `negociation`, `emotionnelle`, `professionnalisme`, `name_user`, `id`) VALUES
(1, '40', ' 70', ' 100', '40', '100', '40', '100', '70', '100', '100 ', 'Didier deschamps', 4),
(2, '100', ' 70', ' 100', '100', '70', '100', '70', '100', '100', '100 ', 'Harry Potter', 3);

-- --------------------------------------------------------

--
-- Structure de la table `reflexion`
--

DROP TABLE IF EXISTS `reflexion`;
CREATE TABLE IF NOT EXISTS `reflexion` (
  `id_reflexion` int(11) NOT NULL AUTO_INCREMENT,
  `resolution` varchar(255) NOT NULL,
  `analytique` varchar(255) NOT NULL,
  `critique` varchar(255) NOT NULL,
  `creativite` varchar(255) NOT NULL,
  `ouverture` varchar(255) NOT NULL,
  `intuition` varchar(255) NOT NULL,
  `name_user` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_reflexion`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reflexion`
--

INSERT INTO `reflexion` (`id_reflexion`, `resolution`, `analytique`, `critique`, `creativite`, `ouverture`, `intuition`, `name_user`, `id`) VALUES
(2, '40', '20', '  100 ', '20', ' 100', ' 70', 'Didier deschamps', 4),
(3, '40', '100', '  20 ', '20', ' 100', ' 40', 'Harry Potter', 3);

-- --------------------------------------------------------

--
-- Structure de la table `roue`
--

DROP TABLE IF EXISTS `roue`;
CREATE TABLE IF NOT EXISTS `roue` (
  `id_roue` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(255) NOT NULL,
  `apprentissage` varchar(50) NOT NULL,
  `competenceIntra` varchar(50) NOT NULL,
  `reflexion` varchar(50) NOT NULL,
  `communication` varchar(50) NOT NULL,
  `competenceInter` varchar(50) NOT NULL,
  `leadership` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id_roue`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `roue`
--

INSERT INTO `roue` (`id_roue`, `name_user`, `apprentissage`, `competenceIntra`, `reflexion`, `communication`, `competenceInter`, `leadership`, `id`) VALUES
(3, 'Didier deschamps', '63', ' 73', '58', '62', ' 73', '76', 4),
(4, 'Harry Potter', '85', ' 100', '53', '100', ' 77', '91', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user_form`
--

DROP TABLE IF EXISTS `user_form`;
CREATE TABLE IF NOT EXISTS `user_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `phone`, `password`, `user_type`) VALUES
(1, 'Andy Vespuce', 'vespuceandy@gmail.com', '0777050882', 'a915cf5b966385c6bae586b1340f4e9e', 'user'),
(2, 'Admin', 'admin@gmail.com', '0666666666', 'e3afed0047b08059d0fada10f400c1e5', 'admin'),
(3, 'Harry Potter', 'harry@gmail.com', '0777050882', 'db05833c29e688b5ab54d5e8608a72ec', 'user'),
(4, 'Didier deschamps', 'didier@gmail.com', '0675476332', '5740d1d16840c56c1402081c170c9221', 'user'),
(5, 'Philipe estebesth', 'philipe@gmail.com', '0965453421', 'f830fd9770b11ee0d412a3ed72798b76', 'user'),
(9, 'Jessy Jess', 'jessy@gmail.com', '06542668189', 'b90d8036739e855bc7cbd181a94eac57', 'user');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `apprentissage`
--
ALTER TABLE `apprentissage`
  ADD CONSTRAINT `apprentissage_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `communication`
--
ALTER TABLE `communication`
  ADD CONSTRAINT `communication_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `interpersonnelles`
--
ALTER TABLE `interpersonnelles`
  ADD CONSTRAINT `interpersonnelles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intrapersonnelles`
--
ALTER TABLE `intrapersonnelles`
  ADD CONSTRAINT `intrapersonnelles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `leadership`
--
ALTER TABLE `leadership`
  ADD CONSTRAINT `leadership_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reflexion`
--
ALTER TABLE `reflexion`
  ADD CONSTRAINT `reflexion_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `roue`
--
ALTER TABLE `roue`
  ADD CONSTRAINT `roue_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user_form` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
