-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 20 août 2018 à 08:22
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dimitri-testjuin`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `idarticle` int(11) NOT NULL AUTO_INCREMENT,
  `thetitle` varchar(150) NOT NULL,
  `thetext` text NOT NULL,
  `thedate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `authoridauthor` int(11) NOT NULL,
  `categoryidcategory` int(11) NOT NULL,
  PRIMARY KEY (`idarticle`),
  KEY `fk_article_author_idx` (`authoridauthor`),
  KEY `fk_article_category1_idx` (`categoryidcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`idarticle`, `thetitle`, `thetext`, `thedate`, `authoridauthor`, `categoryidcategory`) VALUES
(3, 'troisieme text', 'and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first li', '2018-06-28 03:21:23', 1, 3),
(4, 'hello world success', 'hello world Succes ajout dans categ autres', '2018-06-29 08:13:07', 1, 4),
(5, 'deuxieme texte', 'fdsdfdsfdsfdsfdsfdsf', '2018-06-29 09:09:14', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `idauthor` int(11) NOT NULL AUTO_INCREMENT,
  `thelogin` varchar(80) NOT NULL,
  `thename` varchar(160) NOT NULL,
  `thepwd` char(64) NOT NULL,
  PRIMARY KEY (`idauthor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `author`
--

INSERT INTO `author` (`idauthor`, `thelogin`, `thename`, `thepwd`) VALUES
(1, 'shaban', 'shaban', '39386282cdd62aa090cd639c56da531ba0e3b2bce517c657a40087ed426bd511'),
(2, 'artem', 'artem', 'ffb622df7e9926a3b77284dcb024a2ca667e1c474dd644321e90a16330107519'),
(3, 'romain', 'romain', 'eb459aedab226f507f25f3a191c40f3ff4ffb951f126a53fd881c966dfc003a5');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `idcategory` int(11) NOT NULL AUTO_INCREMENT,
  `thecategtitle` varchar(60) NOT NULL,
  PRIMARY KEY (`idcategory`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcategory`, `thecategtitle`) VALUES
(1, 'HTML5 / CSS'),
(2, 'JavaScript /jQuery'),
(3, 'PHP / MySQL'),
(4, 'Autres');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `fk_article_author` FOREIGN KEY (`authoridauthor`) REFERENCES `author` (`idauthor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_article_category1` FOREIGN KEY (`categoryidcategory`) REFERENCES `category` (`idcategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
