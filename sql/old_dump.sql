-- DUMPED ON 23/07/2021 at 15:35:25

-- MariaDB dump 10.19  Distrib 10.5.11-MariaDB, for Linux (x86_64)
--
-- Host: mariadb    Database: niwee
-- ------------------------------------------------------
-- Server version	10.5.11-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `niwee`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `niwee` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `niwee`;


CREATE TABLE `band` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(100) DEFAULT NULL,
  `qui` text DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL,
  `soundcloud` varchar(100) DEFAULT NULL,
  `bandcamp` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `band`
--

INSERT INTO `band` (`id`, `name`, `logo`, `qui`, `facebook`, `twitter`, `instagram`, `youtube`, `soundcloud`, `bandcamp`, `email`, `tel`) VALUES
(1, 'Opeth', 'logo-opeth.jpg', 'Opeth est un groupe de death metal progressif suÃ©dois, originaire de Stockholm. FondÃ© en 1990, le style d\'Opeth, basÃ© en grande partie sur la prÃ©sence continue du chanteur et guitariste Mikael Ã…kerfeldt, est bien ancrÃ© dans la tradition heavy metal. Le groupe est Ã©galement sous-classÃ© dans le death metal et le rock progressif (ou une combinaison de ces genres) selon l\'album et parfois la chanson Ã  laquelle le critique se rÃ©fÃ¨re. D\'une part, Opeth emprunte aux styles les plus brutaux Ã  travers des chants gutturaux et des sÃ©quences instrumentales trÃ¨s agressives tandis que de l\'autre, il se distingue par des sÃ©quences progressives mÃ©lodiques, trÃ¨s souvent douces et envoÃ»tantes. Cette apparente dichotomie est prÃ©sente dans tous les albums du groupe bien qu\'Ã  des degrÃ©s diffÃ©rents, ce qui rend sa classification dans un style musical d\'autant plus complexe.', 'https://fr-fr.facebook.com/Opeth/', 'https://twitter.com/OfficialOpeth', 'https://www.instagram.com/officialopeth/', 'https://www.youtube.com/opeth', 'https://soundcloud.com/roadrunnerrecords/02-opeth-the-devils-orchard', 'https://bandcamp.com/tag/opeth', 'opeth@niwee.fr', 473123456);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'will', '$2y$10$M4bTJkxcDbShsXUkCKTjKuqkabxpnOvGgb8dzkDzqXx07pUBoB58K'),
(3, 'admin2', '$2y$10$g3lW/Jwp1CoWqSsZvbdq6eZPUiQkLvLBmYq65D7lGqllxQ5lzpTLa'),
(4, 'prout', '$2y$10$G15ul.NwlBYZfu839hM1aunbqPoFiwyDpXL06u2g7UIOOALa.hwwW');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `band`
--
ALTER TABLE `band`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `band`
--
ALTER TABLE `band`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-23 13:35:27
