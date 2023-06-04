-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 mai 2023 à 10:29
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shop_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `image`, `quantity`) VALUES
(42, 3, 'pc ', '200', 'png-clipart-taco-new-zealand-industry-graphy-happy-person-tshirt-service-thumbnail.png', 3),
(54, 2, 'Red Dead Redemption 2 (PC) ', '18', '5bc41691ae653a49fd7f4e1b.jpg', 2),
(55, 2, 'Street Fighter 6 ', '46', '72f47e17f38445e981f301bf.avif', 1),
(57, 2, 'Cyberpunk 2077 (PC)', '20', '5d64d16146177c08243974c2.webp', 1),
(58, 1, 'Rust (PC)', '17', '9eb21ed6dfaf42c38024e4b0.webp', 1);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(22, 'Hogwarts Legacy | Deluxe Edition', '52', '313378393_1098895477427383_8110693431799735142_n.png'),
(23, 'Street Fighter 6 ', '46', '72f47e17f38445e981f301bf.avif'),
(24, 'Rust (PC)', '17', '9eb21ed6dfaf42c38024e4b0.webp'),
(25, 'Grand Theft Auto V (PC)', '13', '59e5efeb5bafe304c4426c47.webp'),
(26, 'Sekiro : Shadows Die Twice ', '16', '5b9bbc43ae653a2f8216634f.webp'),
(27, 'Cyberpunk 2077 (PC)', '20', '5d64d16146177c08243974c2.webp'),
(28, 'Red Dead Redemption 2 (PC) ', '18', '5bc41691ae653a49fd7f4e1b.jpg'),
(29, 'Sons Of The Forest (PC) ', '17', '7b3619bfb64c4dda9345b955.avif');

-- --------------------------------------------------------

--
-- Structure de la table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'Adem', 'med.adem.1999@gmail.com', '13085a63a2b3e4beb7ab10ee395aefe4', 'user'),
(2, 'admin', 'admin@admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(3, 'marwen', 'm@m', '13085a63a2b3e4beb7ab10ee395aefe4', 'user'),
(4, 'med', 'med@med', '0a5b3913cbc9a9092311630e869b4442', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
