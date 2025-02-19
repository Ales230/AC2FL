-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 04 jan. 2024 à 19:46
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdl-ac2fl`
--

-- --------------------------------------------------------

--
-- Structure de la table `bdl_adherent`
--

CREATE TABLE `bdl_adherent` (
  `id_adherent` int(11) NOT NULL,
  `civilite` varchar(10) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `activites_demandees` varchar(200) DEFAULT NULL,
  `role` varchar(50) DEFAULT 'membre'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bdl_adherent`
--

INSERT INTO `bdl_adherent` (`id_adherent`, `civilite`, `nom`, `prenom`, `date_naissance`, `adresse`, `email`, `telephone`, `activites_demandees`, `role`) VALUES
(6596, 'Mme.', 'rger', 'ergre', '0000-00-00', ',  ', 'aleszek01@gmail.com', '', '', 'membre'),
(65936, 'M.', 'Dupont', 'Jean', '1990-05-15', '123 Rue de la Liberté', 'jean@example.com', '0123456789', 'Vol en avion', 'membre'),
(65942, '', '', '', '0000-00-00', '', 'efvshgfe7587@ac2fl.com', '', NULL, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `bdl_avions`
--

CREATE TABLE `bdl_avions` (
  `id_avion` int(11) NOT NULL,
  `type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bdl_avions`
--

INSERT INTO `bdl_avions` (`id_avion`, `type`) VALUES
(1, 'Type d\'avion A'),
(2, 'Boeing 747'),
(3, 'Airbus A320'),
(4, 'Cessna 172');

-- --------------------------------------------------------

--
-- Structure de la table `bdl_demandes`
--

CREATE TABLE `bdl_demandes` (
  `id_demande` int(50) NOT NULL,
  `id_adherent` int(11) DEFAULT NULL,
  `debut` date DEFAULT NULL,
  `fin` date DEFAULT NULL,
  `id_avion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bdl_demandes`
--

INSERT INTO `bdl_demandes` (`id_demande`, `id_adherent`, `debut`, `fin`, `id_avion`) VALUES
(6613, 6596, '2024-01-04', '2024-01-11', 1);

-- --------------------------------------------------------

--
-- Structure de la table `bdl_pilotes`
--

CREATE TABLE `bdl_pilotes` (
  `id_pilote` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `numero_licence` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bdl_pilotes`
--

INSERT INTO `bdl_pilotes` (`id_pilote`, `nom`, `prenom`, `numero_licence`) VALUES
(1, 'Doe', 'John', 'PL123456'),
(2, 'Smith', 'Alice', 'PL789012'),
(3, 'Johnson', 'Michael', 'PL345678');

-- --------------------------------------------------------

--
-- Structure de la table `bdl_reservations`
--

CREATE TABLE `bdl_reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_adherent` int(11) DEFAULT NULL,
  `id_pilote` int(11) DEFAULT NULL,
  `id_avion` int(11) DEFAULT NULL,
  `debut` date NOT NULL,
  `fin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bdl_reservations`
--

INSERT INTO `bdl_reservations` (`id_reservation`, `id_adherent`, `id_pilote`, `id_avion`, `debut`, `fin`) VALUES
(10, 6596, 1, 1, '2024-01-04', '2024-01-11');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bdl_adherent`
--
ALTER TABLE `bdl_adherent`
  ADD PRIMARY KEY (`id_adherent`);

--
-- Index pour la table `bdl_avions`
--
ALTER TABLE `bdl_avions`
  ADD PRIMARY KEY (`id_avion`);

--
-- Index pour la table `bdl_demandes`
--
ALTER TABLE `bdl_demandes`
  ADD PRIMARY KEY (`id_demande`),
  ADD KEY `id_adherent` (`id_adherent`),
  ADD KEY `fk_bdl_pilotes_bdl_avions` (`id_avion`);

--
-- Index pour la table `bdl_pilotes`
--
ALTER TABLE `bdl_pilotes`
  ADD PRIMARY KEY (`id_pilote`);

--
-- Index pour la table `bdl_reservations`
--
ALTER TABLE `bdl_reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_pilote` (`id_pilote`),
  ADD KEY `id_avion` (`id_avion`),
  ADD KEY `id_adherent` (`id_adherent`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bdl_adherent`
--
ALTER TABLE `bdl_adherent`
  MODIFY `id_adherent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=659584949;

--
-- AUTO_INCREMENT pour la table `bdl_avions`
--
ALTER TABLE `bdl_avions`
  MODIFY `id_avion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `bdl_demandes`
--
ALTER TABLE `bdl_demandes`
  MODIFY `id_demande` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6614;

--
-- AUTO_INCREMENT pour la table `bdl_pilotes`
--
ALTER TABLE `bdl_pilotes`
  MODIFY `id_pilote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `bdl_reservations`
--
ALTER TABLE `bdl_reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bdl_demandes`
--
ALTER TABLE `bdl_demandes`
  ADD CONSTRAINT `bdl_demandes_ibfk_1` FOREIGN KEY (`id_adherent`) REFERENCES `bdl_adherent` (`id_adherent`),
  ADD CONSTRAINT `fk_bdl_pilotes_bdl_avions` FOREIGN KEY (`id_avion`) REFERENCES `bdl_avions` (`id_avion`);

--
-- Contraintes pour la table `bdl_reservations`
--
ALTER TABLE `bdl_reservations`
  ADD CONSTRAINT `bdl_reservations_ibfk_1` FOREIGN KEY (`id_adherent`) REFERENCES `bdl_adherent` (`id_adherent`),
  ADD CONSTRAINT `bdl_reservations_ibfk_3` FOREIGN KEY (`id_avion`) REFERENCES `bdl_avions` (`id_avion`),
  ADD CONSTRAINT `bdl_reservations_ibfk_4` FOREIGN KEY (`id_adherent`) REFERENCES `bdl_adherent` (`id_adherent`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
