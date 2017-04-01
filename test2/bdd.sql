-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 01 Avril 2017 à 19:01
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `test`
--

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `ID` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `subTitle` varchar(1024) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `logoLink` varchar(2083) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `id_form` int(11) DEFAULT NULL,
  `description` varchar(2083) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `cours`
--

INSERT INTO `cours` (`ID`, `title`, `subTitle`, `logoLink`, `id_form`, `description`) VALUES
(1, 'JavaScript', 'Le JS c\'est génial', 'https://www.sololearn.com/Icons/Courses/1024.png', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Angular JS', 'Angular aussi', 'https://angular.io/resources/images/logos/angular2/angular.svg', 1, 'Angular. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Node JS', 'Node -> serveur', 'https://cdn.worldvectorlogo.com/logos/nodejs-icon.svg', 1, 'Commodo elit sit deserunt magna pariatur nulla fugiat.'),
(4, 'C#', 'La prog !', 'https://rodriguevb.be/images/language.csharp.svg', 1, 'Proident aute fugiat labore exercitation sunt consectetur ea duis aliquip consectetur occaecat officia occaecat adipisicing. Aute sit veniam sint aliquip culpa laborum esse. Aute ea anim do voluptate. Aliquip nisi dolor veniam esse.'),
(5, 'HTML', 'Le langage du WEB', 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/HTML5_Badge.svg/600px-HTML5_Badge.svg.png', 1, 'L\'HTML est le langage permettant de réaliser la structure des sites WEB'),
(6, 'CSS', 'Le style de vos pages', 'http://io13-high-dpi.appspot.com/images/CSS3_Logo.svg', 1, 'izugeh zeg e'),
(7, 'JAVA', 'Je suis pas fan', 'https://www.shareicon.net/download/2016/09/23/833700_windows.svg', 1, 'qgq egeqg');

-- --------------------------------------------------------

--
-- Structure de la table `logoform`
--

CREATE TABLE `logoform` (
  `ID` int(11) NOT NULL,
  `className` varchar(36) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `logoform`
--

INSERT INTO `logoform` (`ID`, `className`) VALUES
(1, 'square'),
(2, 'round');

-- --------------------------------------------------------

--
-- Structure de la table `redirect`
--

CREATE TABLE `redirect` (
  `ID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `site` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `redirect`
--

INSERT INTO `redirect` (`ID`, `name`, `site`) VALUES
(1, 'Guillaume', 'www.google.fr');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `id_form` (`id_form`);

--
-- Index pour la table `logoform`
--
ALTER TABLE `logoform`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `redirect`
--
ALTER TABLE `redirect`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `logoform`
--
ALTER TABLE `logoform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `redirect`
--
ALTER TABLE `redirect`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
