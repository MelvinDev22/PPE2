-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 10 jan. 2020 à 08:08
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données :  `ppe2`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id_membre` bigint(20) UNSIGNED NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `user_enabled` tinyint(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `Prenom`, `Nom`, `Email`, `password`, `nom_utilisateur`, `birthdate`, `user_enabled`) VALUES
(19, 'Melvin', 'Henaff', 'mhenaff05@gmail.com', '$2y$10$ZKM0VLpC4lMH2ORTCE2vvetiQN/jJgmsqX4jbRdNVRz/vXpNfMJJi', 'Melvin Henaff', '2019-12-04', 1),
(22, 'qsdqsdqsd', 'qsdqsdqsd', 'asdxwxc@gmail.com', '$2y$10$6wWWsc3fK0YzH2yFDZlFEOXmB6EPLpIqGIGzRy6vn87H7Ni7Q9YyK', 'aqswdc', '2019-12-10', 1),
(23, 'âzertyui', 'azertyuiop', 'mlkjhbgvc@gmail.com', '$2y$10$N7flm2pspcTQdXxePmt.aupACA0ZzwRhwlnrsivaDiyDSuSvBu2FW', 'aqwzsx', '2019-12-06', 1),
(24, 'qsdqsdqsd', 'qsdqsdq', 'qsdqdqsdqsdqsdqsd@gmail.com', '$2y$10$loLlpUrkU3Y6BWzcvyu5ZeU27rmdWEflIR2RkhsHInDhRWrrq/CIu', 'qsqsdqsdqsdqs', '2019-12-11', 1),
(25, 'jhfqkjsdkjqsd', 'qsdklqjdkjqs', 'melmel@gmail.com', '$2y$10$E//K5lEzfYd2Hb7osr64H.frjrhPmWoR9W8b7dpG52q3SPXOGu6n.', 'mlmlmlmlml', '2019-12-04', 1),
(26, 'Melvin', 'Henaff', 'mhenafqsdf05@gmail.com', '$2y$10$j7p.kTgoYoPuAzfcNw0yYO4zjbgEj.JY0pnK0aUcl/.fMbDWh0286', 'Melvin Henaff', '2019-12-06', 1),
(27, 'sdsdsds', 'zezeze', 'zdzdakdnsqd@gmail.com', '$2y$10$TtfqSclrnWMTbJqyeAkhp.BZr3Kh4JQldV0CRUJWLkx5oZCqA.Seq', 'qsdssdsds', '2020-01-16', 1),
(28, 'wxcwxcw', 'qsdqsdqds', 'Ftyu123e@gmail.com', '$2y$10$2EwPK4MGq6XANMYp3wtrd.82HBtQe9cHfnu1/NnwdbrFV26Pmc2Hu', 'qsdsdq', '2020-01-02', 1);


--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id_membre`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id_membre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;
