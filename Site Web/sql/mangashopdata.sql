-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 18 mai 2022 à 21:15
-- Version du serveur : 8.0.20
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mangashopdata`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cat` varchar(30) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `prix` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `cat`, `nom`, `img`, `stock`, `prix`) VALUES
(1, 'Manga', 'TOME 1 ONE PIECE', './images/op1.jpg', 147, 5.99),
(2, 'Manga', 'TOME 2 ONE PIECE', './images/op2.jpg', 3, 5.99),
(3, 'Manga', 'TOME 3 ONE PIECE', './images/op3.jpg', 100, 5.99),
(4, 'Manga', 'TOME 4 ONE PIECE', './images/op4.jpg', 7, 5.99),
(5, 'Manga', 'TOME 5 ONE PIECE', './images/op5.jpg', 6, 5.99),
(6, 'Figurines', 'Figurine BNHA', './images/figurinedeku.png', 1, 64.99),
(7, 'Figurines', 'Figurine Naruto', './images/figurinenaruto.png', 49, 99.99),
(8, 'Figurines', 'Figurine DragonBall', './images/figurinevegeta.png', 7, 74.99),
(9, 'Figurines', 'Figurine OnePiece', './images/figurineop.png', 150, 88.99),
(10, 'Figurines', 'Figurine SailorMoon', './images/figurinesm.png', 15, 104.99),
(11, 'Poster', 'Poster HunterXHunter', './images/posterhxh.jpg', 4, 6.9),
(12, 'Poster', 'Poster HunterXHunter', './images/posternaruto.jpg', 8, 7.99),
(13, 'Poster', 'Poster YOUR NAME', './images/posteryn2.jpg', 11, 4.99),
(14, 'Poster', 'Poster HAKU', './images/posterchihiro.jpg', 9, 8.99),
(15, 'Poster', 'Poster OnePiece', './images/posterop.jpg', 13, 4.99);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
