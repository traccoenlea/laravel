-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 07 avr. 2020 à 07:41
-- Version du serveur :  5.7.25
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `laravel`
--

-- --------------------------------------------------------

--
-- Structure de la table `ordinateur`
--

CREATE TABLE `ordinateur` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processeur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taille` int(11) DEFAULT NULL,
  `poids` int(11) DEFAULT NULL,
  `disque` int(11) DEFAULT NULL,
  `sdd` int(11) DEFAULT NULL,
  `graphique` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `autonomie` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `systeme` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dalle` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tactile` int(11) DEFAULT NULL,
  `resolution` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usba` int(11) DEFAULT NULL,
  `usbc` int(11) DEFAULT NULL,
  `jack` int(11) DEFAULT NULL,
  `hdmi` int(11) DEFAULT NULL,
  `sd` int(11) DEFAULT NULL,
  `microsd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ordinateur`
--

INSERT INTO `ordinateur` (`id`, `photo`, `name`, `processeur`, `taille`, `poids`, `disque`, `sdd`, `graphique`, `autonomie`, `ram`, `systeme`, `dalle`, `tactile`, `resolution`, `marque`, `usba`, `usbc`, `jack`, `hdmi`, `sd`, `microsd`) VALUES
(1, 'https://www.laptopspirit.fr/wp-content/uploads/new/2019/07/Acer-Aspire-A317-51K-33NX-1.jpg', 'Ordinateur portable Acer Aspire A317-51K-33NX Noir', 'Intel Core i3-7020U : 2,3 Ghz / 2 coeurs / 3 mo de cache', 17, 3, 1000, NULL, 'Intel HD Graphics 620', 6, 4, 'Windows 10', 'Ecran brillant', 0, '1600x900', 'Acer', 3, 1, 1, 1, 0, 0),
(2, 'https://static-pepper.dealabs.com/threads/thread_height_resolution_16x9/default/1771425_2.jpg', 'Ordinateur portable Asus Zenbook Duo UX481FA-BM023T', 'Intel Core i5-10210U : 1,6 GHz Turbo 4,2 GHz / 6 Mo de mémoire cache', 14, 2, NULL, 512, '0', 10, 8, 'Windows 10', 'Ecran mat', 0, '1920x1080', 'Asus', 2, 1, 0, 0, 0, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ordinateur`
--
ALTER TABLE `ordinateur`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
