-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 19 juin 2021 à 11:53
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tel` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `datedenaissance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `nom`, `prenom`, `email`, `pwd`, `tel`, `pays`, `sexe`, `photo`, `datedenaissance`) VALUES
(26, 'jael', 'baboule', 'jaelbaboule@gmail.com', 'ooo', 456, 'cameroun', 'feminin', 'Capture3.PNG', 2021),
(27, 's', 's', 'info@hydro4lifeworld.org', 'sd', 446, 'niger', 'feminin', 'Capture.PNG', 2021),
(28, 'kkd', 'jkk', 'dd@hu.com', 'ww', 456, 'senegal', 'feminin', 'Capture2.PNG', 2021),
(29, 'hdjr', 'jdj', 'info@hydro4lifeworld.org', 'yrie', 435, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(30, 'hdjr', 'jdj', 'info@hydro4lifeworld.org', 'yrie', 435, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(31, 'hdjr', 'jdj', 'info@hydro4lifeworld.org', 'yrie', 435, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(32, 'hdjr', 'jdj', 'info@hydro4lifeworld.org', 'yrie', 435, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(33, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', 'tfyu', 574, 'niger', 'feminin', 'Capture2.PNG', 2021),
(34, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', 'tfyu', 574, 'niger', 'feminin', 'Capture2.PNG', 2021),
(35, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', '', 574, 'niger', 'feminin', 'favicon.ico', 2021),
(36, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', '', 574, 'niger', 'feminin', 'favicon.ico', 2021),
(37, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', '', 574, 'niger', 'feminin', 'favicon.ico', 2021),
(38, 'gjfschkd', 'jldhlhcl', 'jaelbaboule@gmail.com', '', 574, 'niger', 'feminin', 'favicon.ico', 2021),
(39, 'tryur', 'yrtutru', 'jaelbaboule@gmail.com', 'yeye', 435, 'niger', 'feminin', 'Capture.PNG', 2021),
(40, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(41, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(42, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(43, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(44, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(45, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '12346789', 123, 'cameroun', 'feminin', 'Capture.PNG', 2021),
(46, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '', 123, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(47, 'stephane', 'BAURAIN', 'info@hydro4lifeworld.org', '', 123, 'cameroun', 'feminin', '1020x765.jpg', 2021),
(48, 'steaaa', 'BAURAIN', 'a@hydro4lifeworld.org', '', 123, 'cameroun', 'feminin', 'Capture dâ€™Ã©cran 2021-03-16 163027.png', 2021),
(49, 'steaaa', 'BAURAIN', 'a@hydro4lifeworld.org', '', 123, 'cameroun', 'feminin', 'Capture dâ€™Ã©cran 2021-03-16 163027.png', 2021),
(50, 'steaaa', 'BAURAIN', 'a@hydro4lifeworld.org', '', 123, 'cameroun', 'feminin', 'Capture dâ€™Ã©cran 2021-03-16 163027.png', 2021),
(51, 'gaek', 'ncb', 'kdk@hfk.ck', 'djjdjd', 546, 'niger', 'homme', 'Capture dâ€™Ã©cran 2021-04-07 123619.png', 2021),
(52, 'jjdkdfkjk', 'kffd', 'idid@hgjf', 'dkdm', 645, 'cameroun', 'homme', 'Capture1.PNG', 2021),
(53, 'jael', 'prenom', 'jaelbaboule@gmail.com', 'ksdjfokjdkojfso', 765, 'niger', 'homme', 'Capture2.PNG', 0),
(54, 'njjlhkhkl', 'aslkxka', 'jaelbaboule@gmail.com', 'hdsoaidhp', 234, 'niger', 'homme', 'Capture dâ€™Ã©cran 2021-03-16 163027.png', 2021),
(55, 'jbkss', 'kffd', 'baboule.jael@gmail.com', 'sshjdkddod', 657, 'niger', 'homme', '8177990.png', 2021),
(56, 'dwisuiadas', 'tdustf9uasua', 'jaelbaboule@gmail.com', 'tfutuewyuteufgsv', 435, 'cameroun', 'homme', 'Capture dâ€™Ã©cran 2021-03-16 163027.png', 2021),
(57, 'gjkshxz', 'jkxkxz', 'jaelbaboule@gmail.com', 'igdohds jz', 546, 'niger', 'homme', 'Capture2.PNG', 2021);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
