-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 11 jan. 2021 à 10:41
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
-- Base de données : `car_location`
--

-- --------------------------------------------------------

--
-- Structure de la table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `mark` varchar(30) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `car`
--

INSERT INTO `car` (`id`, `name`, `color`, `mark`, `price`) VALUES
(1, 'amg 63 m', '#289741', 'mercedes', 1200),
(2, 'clio', '#000000', 'renault', 1000),
(3, '206', '#000000', 'Peugeot', 500),
(4, 'megane', '#b71f1f', 'renault', 1000),
(5, 'corsa', '#65e70d', 'opel', 900),
(6, 'C5', '#00ffe1', 'citroën', 1200),
(7, 'mustang', '#e60000', 'ford', 3500),
(8, '500', '#ff0000', 'fiat', 1200),
(9, 'panda', '#f90101', 'fiat', 800),
(10, 'punto', '#e1ff00', 'fiat', 400);

-- --------------------------------------------------------

--
-- Structure de la table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `car_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `locations`
--

INSERT INTO `locations` (`id`, `car_id`, `user_id`, `start_date`, `end_date`) VALUES
(3, 2, 6, '2021-01-22', '2021-01-29'),
(4, 2, 6, '2021-01-28', '2021-01-31'),
(5, 1, 6, '2021-01-14', '2021-01-22'),
(6, 9, 6, '2021-01-22', '2021-01-31'),
(7, 9, 6, '2021-03-18', '2021-07-23'),
(8, 4, 6, '2021-01-22', '2021-01-28'),
(9, 2, 6, '2021-01-14', '2021-01-31'),
(10, 7, 10, '2021-01-20', '2021-01-31'),
(11, 2, 10, '2021-01-15', '2021-01-30'),
(12, 6, 9, '2021-01-16', '2021-01-28'),
(13, 10, 9, '2021-02-07', '2021-03-12'),
(14, 6, 8, '2021-01-20', '2021-02-07'),
(15, 3, 7, '2021-06-03', '2021-07-04'),
(16, 5, 6, '2021-01-14', '2021-02-07');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `name`, `mail`, `password`, `is_admin`) VALUES
(1, 'louis', 'vandewalle', '', 'soihsoihg', 0),
(2, 'louis', 'Vandewalle', 'louis.vandewalle98@gmail.com', '$2y$10$Um5jO7xsNOAdS0q/.QQQ0uxOftgu.z2ZDoHENckg3uq/ThIVNd88K', 0),
(3, 'louis', 'vnd', 'souh@gmail.com', '$2y$10$fQjvelx0cxX34LZ.870rX.tUqcyXWa68NKnA0I.1n4ZCbf4./R9Xy', 0),
(4, 'louis', 'vnd', 'sosdfsuh@gmail.com', '$2y$10$SDnG25cXus2BqMf9TAUm6utkYwEwaEQOb9876uc5wDEiMWm6.lt0y', 0),
(5, 'louis', 'vnd', 'sossdsddfsuh@gmail.com', '$2y$10$oWNOQbQI76QkGd5qbaYlVuFaX4d.sWu3YR71Ddpw3zzzZCm6hI9im', 0),
(6, 'jolie', 'garcon', 'mdpoui@gmail.com', '$2y$10$mGL2x3afWnzZ/QwB21jWeO7woYaperNGQd3Covv010fAq0VPdNANW', 0),
(7, 'jean', 'dupont', 'mdpaaaa@gmail.com', '$2y$10$qh/lbV9LT2COqlagOV6N6.aIaLVFy/RWvmGKH6ZrmgL99O8hmu9wG', 0),
(8, 'jacque', 'ouille', 'mdplalala@gmail.com', '$2y$10$QDQ.3fr1VTsjjS.Dd5V4u..6bxwIreU4Z4hRu5/xkbzhk5u.T81qG', 0),
(9, 'jean', 'tertain', 'mdpnqnt@gmail.com', '$2y$10$J83whvMywIsmMgSuh.ul2uBgsupLWuzOJ5UXf7iCdWhbKq0vIyrGW', 0),
(10, 'leheuss', 'moulaga', 'mdpteh@gmail.com', '$2y$10$tTaRi7DfHZEiORMF1G/uue93mnMIyBuqp1tN6D47DUlM4TN859Bjq', 0),
(11, 'admin', 'admin', 'admin@admin.gmail', '$2y$10$9FrfQCebNw5iNsoRJ6m//Om1sSs5fi7aJKAi8CBgfMk6ZoPQs01PS', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `car`
--
ALTER TABLE `car`
  ADD KEY `id` (`id`);

--
-- Index pour la table `locations`
--
ALTER TABLE `locations`
  ADD KEY `id` (`id`),
  ADD KEY `FK_IdUser` (`user_id`),
  ADD KEY `FK_IdCar` (`car_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `locations`
--
ALTER TABLE `locations`
  ADD CONSTRAINT `FK_IdCar` FOREIGN KEY (`car_id`) REFERENCES `car` (`id`),
  ADD CONSTRAINT `FK_IdUser` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
