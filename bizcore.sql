-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 25 avr. 2026 à 17:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bizcore`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `image_principale` varchar(255) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `nombre_vues` int(11) NOT NULL,
  `mots_cles` varchar(500) DEFAULT NULL,
  `resume_ia` longtext DEFAULT NULL,
  `ton_ia` varchar(30) DEFAULT NULL,
  `categorie_ia` varchar(100) DEFAULT NULL,
  `trending_score` double DEFAULT NULL,
  `trending_updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `contenu`, `image_principale`, `categorie`, `statut`, `nombre_vues`, `mots_cles`, `resume_ia`, `ton_ia`, `categorie_ia`, `trending_score`, `trending_updated_at`) VALUES
(1, 'How to start training smart', 'Training consistency beats random effort.', 'a1.jpg', 'Fitness', 'published', 145, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'The basics of coaching', 'A good coach focuses on goals and progress.', 'a2.jpg', 'Coaching', 'published', 98, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Tech skills for beginners', 'Start with logic, practice, and small projects.', 'a3.jpg', 'Tech', 'draft', 31, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Why routines matter', 'Simple routines create strong results over time.', 'a4.jpg', 'Lifestyle', 'published', 73, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Comment valider une idée de projet', 'L\'idée d\'un projet est souvent le point de départ d\'une aventure entrepreneuriale passionnante, mais elle n\'est qu\'une première étape. Valider votre idée est crucial pour minimiser les risques et maximiser vos chances de succès, en particulier pour les entrepreneurs tunisiens ou francophones. Cela signifie déterminer s\'il existe une réelle demande pour votre produit ou service et si votre modèle économique est viable. Ne vous lancez pas tête baissée ! La validation est une phase essentielle, un investissement précieux qui vous évitera de gaspiller du temps et des ressources.\n\nPlusieurs méthodes s\'offrent à vous. Commencez par une étude de marché approfondie : analysez votre cible, identifiez vos concurrents, et évaluez la taille du marché potentiel. Ensuite, créez un prototype minimal (MVP – Minimum Viable Product) pour tester votre concept auprès de clients potentiels. Un MVP peut être une landing page expliquant votre offre, une vidéo de démonstration, ou même une version simplifiée de votre produit. Recueillez activement les retours : sondages, entretiens, tests utilisateurs... chaque information est précieuse. N\'hésitez pas à ajuster votre idée en fonction des feedbacks collectés. L\'adaptation est une force pour un entrepreneur.\n\nLa validation ne se limite pas à des tests techniques. Elle porte également sur la viabilité financière. Est-ce que votre modèle économique est rentable ? Pouvez-vous générer suffisamment de revenus pour couvrir vos coûts ? Établissez une projection financière réaliste et testez-la avec des experts ou des mentors. Des outils comme des business model canvas peuvent vous aider à structurer votre pensée et à identifier les points faibles de votre projet. En résumé, la validation est un processus itératif, un cycle d\'essais et d\'erreurs qui vous permettra de construire un projet solide et pérenne. Osez tester, apprenez de vos erreurs, et adaptez-vous constamment. Votre succès dépend de cette étape cruciale !', NULL, 'Économie', 'publié', 8, 'validation idée, étude de marché, MVP, feedback client, modèle économique', 'Valider une idée de projet permet de vérifier la demande réelle et la viabilité économique avant d\'investir. En combinant étude de marché, prototype minimal et retours clients, les entrepreneurs réduisent les risques et augmentent leurs chances de succès.', 'Informatif', 'Économie', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `article_reaction`
--

CREATE TABLE `article_reaction` (
  `id_reaction` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type_reaction` varchar(20) NOT NULL,
  `note` smallint(6) DEFAULT NULL,
  `avis` varchar(500) DEFAULT NULL,
  `date_reaction` datetime NOT NULL,
  `is_anonymous` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article_reaction`
--

INSERT INTO `article_reaction` (`id_reaction`, `id_article`, `id_user`, `type_reaction`, `note`, `avis`, `date_reaction`, `is_anonymous`) VALUES
(1, 5, 21, 'like', NULL, NULL, '2026-04-22 22:47:11', 0),
(2, 5, 21, 'bookmark', NULL, NULL, '2026-04-22 22:47:16', 0),
(5, 6, 24, 'bookmark', NULL, NULL, '2026-04-23 13:43:33', 0);

-- --------------------------------------------------------

--
-- Structure de la table `article_signalement`
--

CREATE TABLE `article_signalement` (
  `id_signalement` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `motif` varchar(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `statut` varchar(20) NOT NULL,
  `date_signalement` datetime NOT NULL,
  `date_traitement` datetime DEFAULT NULL,
  `remarque_admin` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article_signalement`
--

INSERT INTO `article_signalement` (`id_signalement`, `id_article`, `id_user`, `motif`, `description`, `statut`, `date_signalement`, `date_traitement`, `remarque_admin`) VALUES
(1, 5, 21, 'autre', NULL, 'en_attente', '2026-04-22 22:47:35', NULL, NULL),
(2, 6, 24, 'incorrect', 'm3jbnich', 'en_attente', '2026-04-23 13:46:58', NULL, NULL),
(3, 4, 24, 'inapproprie', 'dsgdrbd', 'en_attente', '2026-04-23 13:49:06', NULL, NULL),
(4, 5, 24, 'incorrect', 'ntrfxjh', 'en_attente', '2026-04-23 13:49:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `coach`
--

CREATE TABLE `coach` (
  `id_coach` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_domaine` int(11) DEFAULT NULL,
  `domaine` varchar(50) DEFAULT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `biographie` text DEFAULT NULL,
  `experience_annees` int(11) DEFAULT NULL,
  `tarif_horaire` decimal(10,2) DEFAULT NULL,
  `disponibilite` varchar(20) DEFAULT NULL,
  `note_moyenne` decimal(3,2) DEFAULT NULL,
  `num_tel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `coach`
--

INSERT INTO `coach` (`id_coach`, `id_user`, `id_domaine`, `domaine`, `nom`, `prenom`, `biographie`, `experience_annees`, `tarif_horaire`, `disponibilite`, `note_moyenne`, `num_tel`) VALUES
(1, 3, 1, 'Financement', 'Haddad', 'islem', 'Fitness coach with a focus on strength and conditioning.', 6, 45.00, 'Disponible', 4.70, '+21658410216'),
(5, NULL, 2, 'E-Commerce', 'Trabelsi', 'Amira', 'Consultante e-commerce specialisee en marketplace.', 7, 70.00, 'Disponible', 4.20, '+21651234567'),
(8, NULL, 5, 'Financement', 'Jebali', 'Mehdi', 'Specialiste en financement de startups et levee de fonds.', 8, 90.00, 'Indisponible', 3.80, '+21654567890'),
(9, NULL, 1, 'Branding', 'Gharbi', 'Nour', 'Strategiste de marque personnelle et corporate.', 6, 65.00, 'Disponible', 4.10, '+21655678901'),
(10, NULL, 2, 'E-Commerce', 'Maalej', 'Youssef', 'Developpeur e-commerce et expert Shopify/WooCommerce.', 5, 60.00, 'Disponible', 3.90, '+21656789012'),
(13, NULL, 5, 'Financement', 'Saidi', 'Fatma', 'Coach en crowdfunding et subventions.', 4, 55.00, 'Disponible', 3.70, '+21659012345'),
(14, NULL, 1, 'Branding', 'Riahi', 'Amine', 'Expert en identite visuelle et design thinking.', 8, 75.00, 'Disponible', 4.40, '+21660123456'),
(15, NULL, 2, 'E-Commerce', 'Ferchichi', 'Salma', 'Consultante Amazon FBA et logistique e-commerce.', 6, 68.00, 'Disponible', 4.00, '+21661234567'),
(18, NULL, 5, 'Financement', 'Brahmi', 'Rami', 'Specialiste en business angels et capital risque.', 7, 85.00, 'Disponible', 4.20, '+21664567890'),
(19, NULL, 1, 'Branding', 'Mechri', 'Yasmine', 'Coach en storytelling et content marketing.', 5, 58.00, 'Disponible', 3.60, '+21665678901'),
(20, NULL, 2, 'E-Commerce', 'Daly', 'Anis', 'Expert en SEO et conversion e-commerce.', 9, 88.00, 'Disponible', 4.70, '+21666789012'),
(23, NULL, 5, 'Financement', 'Neji', 'Sara', 'Experte en microfinance et inclusion financiere.', 6, 62.00, 'Indisponible', 4.10, '+21669012345'),
(24, NULL, 6, 'Leadership', 'Martin', 'Sophie', 'Coach specialisee en leadership transformationnel avec plus de 10 ans d experience en management.', 10, 90.00, 'Disponible', 4.80, '+21650000001'),
(25, NULL, 6, 'Leadership', 'Benali', 'Karim', 'Expert en coaching de dirigeants et developpement du leadership dans les PME.', 7, 75.00, 'Disponible', 4.60, '+21650000002'),
(26, NULL, 6, 'Leadership', 'Labidi', 'Nadia', 'Formatrice certifiee en leadership et gestion du changement organisationnel.', 12, 100.00, 'Disponible', 4.90, '+21650000003'),
(27, NULL, 6, 'Leadership', 'Jouini', 'Amine', 'Coach en leadership agile et performance d equipe pour startups et grandes entreprises.', 5, 65.00, 'Indisponible', 4.40, '+21650000004'),
(28, NULL, 6, 'Leadership', 'Chaabane', 'Rim', 'Specialiste en leadership feminin et coaching executif pour cadres dirigeants.', 8, 85.00, 'Disponible', 4.70, '+21650000005');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date NOT NULL,
  `montant_total` decimal(10,2) NOT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `mode_paiement` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `montant_total`, `statut`, `mode_paiement`) VALUES
(4, '2026-04-08', 150.00, 'validee', 'carte'),
(5, '2026-04-08', 320.50, 'en_attente', 'especes');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire_evenement`
--

CREATE TABLE `commentaire_evenement` (
  `id_commentaire` int(11) NOT NULL,
  `contenu` longtext NOT NULL,
  `note` int(11) DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `id_evenement` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaire_evenement`
--

INSERT INTO `commentaire_evenement` (`id_commentaire`, `contenu`, `note`, `date_creation`, `id_evenement`) VALUES
(1, 'recommande', NULL, '2026-04-23 11:41:30', 1),
(2, 'recommande', NULL, '2026-04-23 11:41:42', 1),
(3, 'terrible', NULL, '2026-04-23 11:41:56', 2),
(4, 'terrible', NULL, '2026-04-23 11:42:05', 2),
(5, 'recommande', NULL, '2026-04-23 11:42:44', 3),
(6, 'terrible', NULL, '2026-04-23 11:42:52', 3),
(7, 'terrible', NULL, '2026-04-23 13:21:30', 1);

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE `disponibilite` (
  `id_dispo` int(11) NOT NULL,
  `jour` date NOT NULL,
  `statut` varchar(20) NOT NULL,
  `id_coach` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20260322175652', '2026-04-22 19:57:37', 133),
('DoctrineMigrations\\Version20260328160000CreateRatingTable', '2026-04-22 19:57:37', 1),
('DoctrineMigrations\\Version20260328170000FixReservationTable', '2026-04-22 19:57:37', 90),
('DoctrineMigrations\\Version20260401191135', NULL, NULL),
('DoctrineMigrations\\Version20260402101701', NULL, NULL),
('DoctrineMigrations\\Version20260404191033', NULL, NULL),
('DoctrineMigrations\\Version20260405015228', NULL, NULL),
('DoctrineMigrations\\Version20260413110000', NULL, NULL),
('DoctrineMigrations\\Version20260415120000EnrichDomaineCoaching', NULL, NULL),
('DoctrineMigrations\\Version20260422000000AddTarifMoyenDomaine', NULL, NULL),
('DoctrineMigrations\\Version20260422100000AddFkCoachDomaine', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `domaine_coaching`
--

CREATE TABLE `domaine_coaching` (
  `id_domaine` int(11) NOT NULL,
  `nom_domaine` varchar(100) NOT NULL,
  `description` longtext DEFAULT NULL,
  `niveau_difficulte` varchar(20) NOT NULL DEFAULT 'Débutant',
  `duree_formation_heures` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `domaine_coaching`
--

INSERT INTO `domaine_coaching` (`id_domaine`, `nom_domaine`, `description`, `niveau_difficulte`, `duree_formation_heures`) VALUES
(1, 'Branding', 'Formation au branding et image de marque', 'Débutant', 40),
(2, 'E-Commerce', 'Formation au commerce électronique', 'Intermédiaire', 30),
(5, 'Financement', 'Formation aux stratégies de financement et levée de fonds', 'Expert', 35),
(6, 'Leadership', 'Formation au leadership, management d equipes et prise de decision strategique en entreprise.', 'Intermediaire', 30),
(7, 'Coaching IA Éthique', 'Accompagne les professionnels et les organisations dans l\'intégration responsable et éthique des intelligences artificielles. Vise à garantir que l\'IA est utilisée pour le bien commun et le respect des valeurs humaines.', 'Expert', 15),
(8, 'Coaching avenir du travail', 'Aide aux professionnels pour anticiper et s\'adapter aux mutations du monde du travail, y compris le travail hybride, l\'automatisation et les nouvelles compétences requises. Ce coaching prépare aux défis et opportunités de demain.', 'Débutant', NULL),
(9, 'Coaching Résilience Numérique', 'Ce coaching aide les individus et les organisations à naviguer et à prospérer dans un environnement numérique en constante évolution. Il vise à développer des stratégies pour gérer le stress, l\'information et les interactions en ligne.', 'Débutant', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id_evenement` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` longtext DEFAULT NULL,
  `date_debut` datetime NOT NULL,
  `capacite_max` int(11) DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `ai_rating` double DEFAULT NULL,
  `ai_positive` double DEFAULT NULL,
  `ai_neutral` double DEFAULT NULL,
  `ai_negative` double DEFAULT NULL,
  `ai_summary` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id_evenement`, `titre`, `description`, `date_debut`, `capacite_max`, `prix`, `image_url`, `lieu`, `ai_rating`, `ai_positive`, `ai_neutral`, `ai_negative`, `ai_summary`) VALUES
(1, 'Fitness Bootcamp', 'High intensity group training session.', '2026-04-24 09:00:00', 30, 25.00, 'e1.jpg', 'ariana', 3.3, 67, 0, 33, 'Avis mitigés. Des points d\'amélioration ont été soulevés. (3 commentaire(s) analysé(s))'),
(2, 'Startup Workshop', 'Business workshop for young founders.', '2026-04-25 14:00:00', 40, 40.00, 'e2.jpg', NULL, 2, 0, 0, 100, 'Commentaires négatifs dominants. Des améliorations importantes sont nécessaires. (2 commentaire(s) analysé(s))'),
(3, 'Tech Challenge', 'Competition for beginner developers.', '2026-05-02 10:00:00', 50, 15.00, 'e3.jpg', NULL, 3, 50, 0, 50, 'Avis mitigés. Des points d\'amélioration ont été soulevés. (2 commentaire(s) analysé(s))'),
(4, 'Wellness Conference', 'Talks about health and productivity.', '2026-05-10 09:00:00', 100, 10.00, 'e4.jpg', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscription_evenement`
--

CREATE TABLE `inscription_evenement` (
  `id_inscription` int(11) NOT NULL,
  `id_evenement` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `date_inscription` datetime NOT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `nombre_places` int(11) DEFAULT NULL,
  `payment_status` varchar(30) DEFAULT 'pending',
  `stripe_session_id` varchar(255) DEFAULT NULL,
  `montant_total` decimal(10,2) DEFAULT NULL,
  `devise` varchar(10) DEFAULT 'tnd',
  `paid_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription_evenement`
--

INSERT INTO `inscription_evenement` (`id_inscription`, `id_evenement`, `id_user`, `date_inscription`, `statut`, `nom`, `email`, `telephone`, `nombre_places`, `payment_status`, `stripe_session_id`, `montant_total`, `devise`, `paid_at`) VALUES
(1, 1, 2, '2026-04-07 00:55:11', 'confirmed', NULL, NULL, NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(2, 1, 5, '2026-04-07 00:55:11', 'confirmed', NULL, NULL, NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(4, 3, 2, '2026-04-07 00:55:11', 'pending', NULL, NULL, NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(5, 4, 5, '2026-04-07 00:55:11', 'confirmed', NULL, NULL, NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(6, 1, 18, '2026-04-23 11:45:14', 'confirmé', 'Admin Admin', 'admin@bizcore.tn', '26329518', 30, 'pending', NULL, NULL, 'tnd', NULL),
(8, 2, 21, '2026-04-23 12:50:49', 'confirme', 'Bizcore User', 'user@bizcore.com', '58410216', 1, 'paid', 'cs_test_a1PM5Su6iR2aQNI2K0QoJcrOjrXUqR5clYZd5p7TTw53OQvQ9146zRdBg2', 40.00, 'tnd', '2026-04-23 12:51:32'),
(9, 2, 21, '2026-04-23 12:54:44', 'confirme', 'Bizcore User', 'user@bizcore.com', '58410216', 1, 'paid', 'cs_test_a1cNyxd4lN4EFUMjmjjqB82D7MAdkf0j12uqUikru2gLhWhAbp8vYvLIOh', 40.00, 'tnd', '2026-04-23 12:55:11'),
(10, 2, 21, '2026-04-23 12:58:13', 'confirme', 'Bizcore User', 'user@bizcore.com', '58410216', 1, 'paid', 'cs_test_a1VC7rBa8K8xbnwy9AAq4wE2hEEKJDQV7ovA0OMqESJGuUeSUzen3s7bEV', 40.00, 'tnd', '2026-04-23 12:58:36'),
(11, 2, 21, '2026-04-23 13:22:56', 'confirmé', 'Bizcore User', 'user@bizcore.com', '70250000', 37, 'pending', NULL, NULL, 'tnd', NULL),
(12, 1, 21, '2026-04-23 13:24:19', 'waitlist', 'Bizcore User', 'user@bizcore.com', NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(13, 1, 21, '2026-04-23 13:25:39', 'waitlist', 'Bizcore User', 'user@bizcore.com', NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(14, 1, 21, '2026-04-23 13:27:08', 'waitlist', 'Bizcore User', 'user@bizcore.com', NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(15, 1, 24, '2026-04-23 13:28:54', 'waitlist', 'Oumayma Boulabiar', 'boulabiar.oumayma@yahoo.com', NULL, 1, 'pending', NULL, NULL, 'tnd', NULL),
(16, 1, 24, '2026-04-23 13:28:58', 'confirme', 'Oumayma Boulabiar', 'boulabiar.oumayma@yahoo.com', NULL, 1, 'paid', 'cs_test_a1AHVBNNkmZ1k2tuW40cRSUZdgRZB2XDfRepPOm1zRhV86aWD47AmtJUuF', 25.00, 'tnd', '2026-04-23 13:31:14');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `nom_produit` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  `stock_disponible` int(11) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `image_url` varchar(500) DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `rating_count` int(11) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `nom_produit`, `description`, `prix`, `stock_disponible`, `categorie`, `image_url`, `statut`, `rating`, `rating_count`, `vendor_id`) VALUES
(7, 'Formation Compléte ??? Lancer votre Business en 30 Jours', 'Passez de l id??e au revenu en 30 jours chrono. Cette formation 100 en ligne couvre 12 modules vid??o : validation de votre id??e, cr??ation de votre offre irr??sistible, strat??gie de prix, acquisition clients digitale et automatisation des ventes. Acc??s ?? une communaut?? priv??e d entrepreneurs tunisiens. Plus de 500 alumni ont lanc?? leur activit??.', 199.00, 100, 'Formation', '/uploads/img_69d7cb736a4eb.jpeg', 'Disponible', 4.5, 2, 1),
(8, 'formation c++', 'fdsfhgsfdhgsf sg shsdffhsfdhsdh sh dfh sdh fgdh', 60.00, 1, 'Abonnement', '/uploads/products/images-2-69e802eb708e3.jpg', 'Disponible', 0, 0, 2),
(9, 'dddddddddd', 'sssssssssssssssssssssssssss', 0.00, 23, 'Formations', '/uploads/products/Gemini-Generated-Image-4hofrh4hofrh4hof-69e882fd4c2ac.png', 'Disponible', 1, 1, 4),
(10, 'dddddddddd', 'ddddddddddddddddddddddddddddddddd', 150.00, 50, 'Abonnement', '/uploads/products/Gemini-Generated-Image-hqiuochqiuochqiu-69e88923e873d.png', 'Disponible', 5, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `commentaire` longtext DEFAULT NULL,
  `date_creation` datetime NOT NULL,
  `date_modification` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_coach` int(11) NOT NULL,
  `date_reservation` datetime NOT NULL DEFAULT current_timestamp(),
  `date_seance` date DEFAULT NULL,
  `statut` varchar(20) NOT NULL DEFAULT 'CONFIRMEE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_user`, `id_coach`, `date_reservation`, `date_seance`, `statut`) VALUES
(1, 21, 4, '2026-04-22 20:51:42', '2026-04-24', 'CONFIRMEE'),
(2, 21, 18, '2026-04-23 12:08:48', '2026-04-25', 'CONFIRMEE'),
(3, 21, 25, '2026-04-23 12:14:42', '2026-04-23', 'CONFIRMEE'),
(4, 21, 28, '2026-04-23 12:21:01', '2026-04-26', 'CONFIRMEE'),
(5, 21, 25, '2026-04-23 13:11:23', '2026-04-29', 'CONFIRMEE'),
(6, 21, 28, '2026-04-25 16:41:18', '2026-05-03', 'CONFIRMEE');

-- --------------------------------------------------------

--
-- Structure de la table `review_cache`
--

CREATE TABLE `review_cache` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`data`)),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `review_cache`
--

INSERT INTO `review_cache` (`id`, `product_id`, `data`, `updated_at`) VALUES
(1, 'Formation Compléte ??? Lancer votre Business en 30 Jours', '{\"summary\":{\"total\":11,\"score\":3.8,\"sentiments\":{\"positive\":36.0,\"neutral\":36.0,\"negative\":27.0}},\"reviews\":[{\"platform\":\"Google\",\"username\":\"Trustpilot\",\"stars\":4,\"text\":\"J\'ai commenc\\u00e9 en novembre tr\\u00e8s motiv\\u00e9e, puis une p\\u00e9riode de down assez longue. La je reviens en force et je commence \\u00e0 obtenir mes premiers r\\u00e9sultats.\",\"date\":\"2026-04-23\",\"sentiment\":\"neutral\"},{\"platform\":\"Google\",\"username\":\"YouTube \\u00b7 Aurore Elise\",\"stars\":5,\"text\":\"Vous h\\u00e9sitez \\u00e0 ouvrir une boutique sur Etsy ? Dans cette masterclass sp\\u00e9ciale, je partage mon exp\\u00e9rience et des conseils pratiques pour ...\",\"date\":\"2026-04-23\",\"sentiment\":\"negative\"},{\"platform\":\"Google\",\"username\":\"YouTube \\u00b7 Olivier ALLAIN\",\"stars\":3,\"text\":\"Comment r\\u00e9ussir sur Amazon FBA ? D\\u00e9couvre GRATUITEMENT le lancement d\'un produit de A \\u00e0 Z ...\",\"date\":\"2026-04-23\",\"sentiment\":\"neutral\"},{\"platform\":\"Reddit\",\"username\":\"u\\/Rainyfriedtofu\",\"stars\":null,\"text\":\"[https:\\/\\/www.reuters.com\\/world\\/china-japan-south-korea-will-jointly-respond-us-tariffs-chinese-state-media-says-2025-03-31\\/](https:\\/\\/www.reuters.com\\/world\\/china-japan-south-korea-will-jointly-respond-us-tariffs-chinese-state-media-says-2025-03-31\\/)\\n\\n...\",\"date\":\"2025-03-31\",\"sentiment\":\"negative\"},{\"platform\":\"Reddit\",\"username\":\"u\\/Alternative-Lake9156\",\"stars\":null,\"text\":\"I rejoined the MTG community in 2022 starting with The Brothers\' War, picking up an old hobby from my high school days. Can we all recognize that the hobby is simply, mathematical, objectively \\\\*worse\\\\* than it was even 4 years ago?\\n\\nHere\'s a list I\'...\",\"date\":\"2026-02-23\",\"sentiment\":\"neutral\"},{\"platform\":\"Reddit\",\"username\":\"u\\/SavvyMaverick\",\"stars\":null,\"text\":\"I either don\'t encounter many entitled people in my day or I am really good at ignoring people, but this one just took the cake lol.\\n\\nSo I (40F) just got my driveway replaced 2 days ago. Asphalt, not concrete. The contractor told me I could park my c...\",\"date\":\"2025-06-28\",\"sentiment\":\"negative\"},{\"platform\":\"Reddit\",\"username\":\"u\\/Schattenspringer\",\"stars\":null,\"text\":\"This is a repost. The original was posted in \\/r\\/AmIOverreacting by user Jems138. I\'m not the original poster. \\n\\nStatus: Ongoing\\n\\n____\\n&gt;# [Original](https:\\/\\/np.reddit.com\\/r\\/AmIOverreacting\\/comments\\/1qphs75\\/aio_my_girlfriend_left_me_over_a_cheese_wh...\",\"date\":\"2026-02-04\",\"sentiment\":\"positive\"},{\"platform\":\"Reddit\",\"username\":\"u\\/mithyyyy\",\"stars\":null,\"text\":\"https:\\/\\/preview.redd.it\\/ijwnqmqq6zgg1.png?width=1367&amp;format=png&amp;auto=webp&amp;s=23d24c80c7ed6c7cb20aa25441e6b10ef3416fda\\n\\n*(For disclosure: I don\'t hold any position in $ANPA, nor do I plan to. I wrote this write up since I found it interesti...\",\"date\":\"2026-02-02\",\"sentiment\":\"positive\"},{\"platform\":\"Instagram\",\"username\":\"@influenceur.trend\",\"stars\":4,\"text\":\"Je viens de tester Formation Compl\\u00e9te ??? Lancer votre Business en 30 Jours ! Vraiment incroyable, je ne peux plus m\'en passer \\ud83d\\ude0d #lifestyle\",\"date\":\"2026-04-22\",\"sentiment\":\"positive\"},{\"platform\":\"TikTok\",\"username\":\"@tiktok_hacks\",\"stars\":5,\"text\":\"POV : tu as enfin trouv\\u00e9 que Formation Compl\\u00e9te ??? Lancer votre Business en 30 Jours fonctionne vraiment \\ud83d\\ude2d\\u2728\",\"date\":\"2026-04-20\",\"sentiment\":\"neutral\"},{\"platform\":\"Facebook\",\"username\":\"Avis Communaut\\u00e9 FB\",\"stars\":2,\"text\":\"Apr\\u00e8s en avoir beaucoup entendu parler dans ce groupe, j\'ai achet\\u00e9 Formation Compl\\u00e9te ??? Lancer votre Business en 30 Jours. Plut\\u00f4t satisfait du r\\u00e9sultat !\",\"date\":\"2026-04-09\",\"sentiment\":\"positive\"}]}', '2026-04-23 13:18:22'),
(2, 'dddddddddd', '{\"summary\":{\"total\":11,\"score\":4.0,\"sentiments\":{\"positive\":27.0,\"neutral\":27.0,\"negative\":45.0}},\"reviews\":[{\"platform\":\"Google\",\"username\":\"Yelp\",\"stars\":4,\"text\":\"About AVIS. AVIS has an average rating of 2 from 21709 reviews. The rating indicates that most customers are generally dissatisfied. The official website is ...\",\"date\":\"2026-04-22\",\"sentiment\":\"neutral\"},{\"platform\":\"Google\",\"username\":\"Trustpilot\",\"stars\":5,\"text\":\"Join the 4682 people who\'ve already reviewed Avis Car Rental. Your experience can help others make better choices.\",\"date\":\"2026-04-22\",\"sentiment\":\"negative\"},{\"platform\":\"Google\",\"username\":\"Tripadvisor\",\"stars\":3,\"text\":\"Absolutely Terrible Experience, Lies, Bait and Switch. Poor Customer Service. I contracted with them for a gas car. Instead they forced me into an electric car ...\",\"date\":\"2026-04-22\",\"sentiment\":\"negative\"},{\"platform\":\"Reddit\",\"username\":\"u\\/IndividualDraw496\",\"stars\":null,\"text\":\":DDDDDDDDDD\",\"date\":\"2026-01-26\",\"sentiment\":\"negative\"},{\"platform\":\"Reddit\",\"username\":\"u\\/CatScratchEther\",\"stars\":null,\"text\":\"This is not across the street. This is the block over. Best of our picture taking contest, the power of Christ was too great for our phones to depict this behemoth in all its 20 ft glory.\",\"date\":\"2023-11-30\",\"sentiment\":\"positive\"},{\"platform\":\"Reddit\",\"username\":\"u\\/regular_Girlinblue\",\"stars\":null,\"text\":\"bro i actually screamed when i beat her-\",\"date\":\"2024-05-01\",\"sentiment\":\"positive\"},{\"platform\":\"Reddit\",\"username\":\"u\\/Vanilla_Ice_Best_Boi\",\"stars\":null,\"text\":\"Reasons you should enlist\",\"date\":\"2025-12-06\",\"sentiment\":\"neutral\"},{\"platform\":\"Reddit\",\"username\":\"u\\/Weekly_Car956\",\"stars\":null,\"text\":\"MP v\\u00e1lasza a kutyap\\u00e1rt hisztij\\u00e9re\",\"date\":\"2026-03-04\",\"sentiment\":\"positive\"},{\"platform\":\"Instagram\",\"username\":\"@influenceur.trend\",\"stars\":5,\"text\":\"Je viens de tester dddddddddd ! Vraiment incroyable, je ne peux plus m\'en passer \\ud83d\\ude0d #lifestyle\",\"date\":\"2026-04-21\",\"sentiment\":\"negative\"},{\"platform\":\"TikTok\",\"username\":\"@tiktok_hacks\",\"stars\":4,\"text\":\"POV : tu as enfin trouv\\u00e9 que dddddddddd fonctionne vraiment \\ud83d\\ude2d\\u2728\",\"date\":\"2026-04-19\",\"sentiment\":\"neutral\"},{\"platform\":\"Facebook\",\"username\":\"Avis Communaut\\u00e9 FB\",\"stars\":3,\"text\":\"Apr\\u00e8s en avoir beaucoup entendu parler dans ce groupe, j\'ai achet\\u00e9 dddddddddd. Plut\\u00f4t satisfait du r\\u00e9sultat !\",\"date\":\"2026-04-08\",\"sentiment\":\"negative\"}]}', '2026-04-22 10:17:22');

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nom_role` varchar(50) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `nom_role`, `description`, `date_creation`) VALUES
(1, 'Admin', 'Full access', '2026-04-06 23:55:10'),
(2, 'User', 'Standard account', '2026-04-06 23:55:10'),
(3, 'Coach', 'Coach account', '2026-04-06 23:55:10');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `adresse` varchar(500) DEFAULT NULL,
  `statut` varchar(20) DEFAULT NULL,
  `date_inscription` timestamp NOT NULL DEFAULT current_timestamp(),
  `derniere_connexion` timestamp NULL DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `password`, `telephone`, `adresse`, `statut`, `date_inscription`, `derniere_connexion`, `id_role`) VALUES
(1, 'Hasnaoui', 'Omar', 'omar@bizcore.test', '$2y$13$WK9VewszmNStTKO3nxd5NeUPz4XnIWiTPeJXoak0aBvi8KuF8bFKC', '53 242 854', 'Tunis', 'actif', '2026-04-06 23:55:10', NULL, 1),
(2, 'Mansour', 'Sara', 'sara@bizcore.test', 'password123', '200000002', 'Sfax', 'actif', '2026-04-06 23:55:10', NULL, 2),
(3, 'Haddad', 'Youssef', 'youssef@bizcore.test', 'password123', '200000003', 'Sousse', 'actif', '2026-04-06 23:55:10', NULL, 3),
(4, 'Trabelsi', 'Nour', 'nour@bizcore.test', 'password123', '200000004', 'Bizerte', 'actif', '2026-04-06 23:55:10', NULL, 3),
(5, 'Khelifi', 'Meriem', 'meriem@bizcore.test', 'password123', '200000005', 'Ariana', 'actif', '2026-04-06 23:55:10', NULL, 3),
(8, 'Smith', 'John', 'john1@test.com', '$2y$13$REALHASH123456789ABC', '12345678', 'Tunis', 'actif', '2026-04-08 11:02:10', NULL, 1),
(9, 'Doe', 'Jane', 'jane2@test.com', '$2y$13$REALHASH123456789ABC', '22345678', 'Sousse', 'actif', '2026-04-08 11:02:10', NULL, 1),
(10, 'Ali', 'Karim', 'karim3@test.com', '$2y$13$REALHASH123456789ABC', '32345678', 'Sfax', 'actif', '2026-04-08 11:02:10', NULL, 2),
(11, 'Ben', 'Youssef', 'youssef4@test.com', '$2y$13$REALHASH123456789ABC', '42345678', 'Nabeul', 'actif', '2026-04-08 11:02:10', NULL, 2),
(12, 'Trabelsi', 'Amine', 'amine5@test.com', '$2y$13$REALHASH123456789ABC', '52345678', 'Monastir', 'actif', '2026-04-08 11:02:10', NULL, 1),
(13, 'Gharbi', 'Sami', 'sami6@test.com', '$2y$13$REALHASH123456789ABC', '62345678', 'Gabes', 'actif', '2026-04-08 11:02:10', NULL, 2),
(14, 'Haddad', 'Rania', 'rania7@test.com', '$2y$13$REALHASH123456789ABC', '72345678', 'Bizerte', 'actif', '2026-04-08 11:02:10', NULL, 1),
(15, 'Mejri', 'Omar', 'omar8@test.com', '$2y$13$REALHASH123456789ABC', '82345678', 'Kairouan', 'actif', '2026-04-08 11:02:10', NULL, 2),
(16, 'Khaled', 'Nour', 'nour9@test.com', '$2y$13$REALHASH123456789ABC', '92345678', 'Zaghouan', 'actif', '2026-04-08 11:02:10', NULL, 1),
(17, 'Hamdi', 'Firas', 'firas10@test.com', '$2y$13$REALHASH123456789ABC', '10345678', 'Ariana', 'actif', '2026-04-08 11:02:10', NULL, 2),
(18, 'Admin', 'Admin', 'admin@bizcore.tn', '$2y$10$wHNc8yk0m6CgfRWXQK89Gej7vkYOBbSRYHe86fk3ZoNBHI4exp2ru', NULL, NULL, 'actif', '2026-04-08 22:12:57', NULL, 1),
(19, 'User', 'User', 'user@bizcore.tn', '$2y$13$kbD8sUS37KP8sf9Klmat5elDfBMQURe0ZHfENAJlnyH4mpbsiW16a', NULL, NULL, 'actif', '2026-04-08 22:12:57', NULL, 2),
(20, 'Admin', 'Bizcore', 'admin@bizcore.com', '$2y$13$SWJRx.JutLSlFxsq/bNnW.Sun7RV8eVh/fIhD/v98SIB4/GN2Xhci', NULL, NULL, 'actif', '2026-04-22 07:47:53', NULL, 1),
(21, 'User', 'Bizcore', 'user@bizcore.com', '$2y$13$kbD8sUS37KP8sf9Klmat5elDfBMQURe0ZHfENAJlnyH4mpbsiW16a', NULL, NULL, 'actif', '2026-04-22 08:54:51', NULL, 2),
(23, 'edit', 'hamza', 'islemsekrani0@gmail.com', '$2y$13$jNcrT36N/Rvn8orp8DD5P.3PGdeXO2S8HCwOuvcTPAg6aIYwwav7.', '5454654654', 'tunis', 'actif', '2026-04-23 12:03:26', NULL, 2),
(24, 'Boulabiar', 'Oumayma', 'boulabiar.oumayma@yahoo.com', '$2y$13$G52abK85d6I.7DPmDvB05uKf6YR3aBsfljKB8C0Bkuj2KbzPYu7ia', NULL, '119 rue monji slim Menzel Temime', 'actif', '2026-04-23 12:28:33', NULL, 2);

-- --------------------------------------------------------

--
-- Structure de la table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `statut` varchar(20) NOT NULL,
  `rating` double DEFAULT NULL,
  `rating_count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vendor`
--

INSERT INTO `vendor` (`id`, `nom`, `email`, `telephone`, `statut`, `rating`, `rating_count`) VALUES
(1, 'Dhia jbali', 'dhiajbali999@gmail.com', '+2165478966', 'actif', 0, 0),
(2, 'tutmar', 'user@bizcore.tn', NULL, 'actif', 0, 0),
(3, 'Guesmi Melek', 'guesmimelek928@gmail.com', '+21695211220', 'actif', 0, 0),
(4, 'Dhiaa', 'user@bizcore.com', '95211220', 'actif', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `article_reaction`
--
ALTER TABLE `article_reaction`
  ADD PRIMARY KEY (`id_reaction`),
  ADD UNIQUE KEY `uq_user_article_type` (`id_user`,`id_article`,`type_reaction`);

--
-- Index pour la table `article_signalement`
--
ALTER TABLE `article_signalement`
  ADD PRIMARY KEY (`id_signalement`),
  ADD UNIQUE KEY `uq_user_article_signalement` (`id_user`,`id_article`);

--
-- Index pour la table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`id_coach`),
  ADD KEY `FK_3F596DCCA632A3BC` (`id_domaine`),
  ADD KEY `IDX_3F596DCC6B3CA4B` (`id_user`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `commentaire_evenement`
--
ALTER TABLE `commentaire_evenement`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `IDX_84B1E7298B13D439` (`id_evenement`);

--
-- Index pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD PRIMARY KEY (`id_dispo`),
  ADD KEY `IDX_2CBACE2FD1DC2CFC` (`id_coach`);

--
-- Index pour la table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `domaine_coaching`
--
ALTER TABLE `domaine_coaching`
  ADD PRIMARY KEY (`id_domaine`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id_evenement`);

--
-- Index pour la table `inscription_evenement`
--
ALTER TABLE `inscription_evenement`
  ADD PRIMARY KEY (`id_inscription`),
  ADD KEY `fk_ins_event` (`id_evenement`),
  ADD KEY `fk_ins_user` (`id_user`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`),
  ADD KEY `IDX_29A5EC27F603EE73` (`vendor_id`);

--
-- Index pour la table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`),
  ADD UNIQUE KEY `UNIQ_D88926226B3CA4B_D1DC2CFC` (`id_user`,`id_coach`),
  ADD KEY `IDX_D88926226B3CA4B` (`id_user`),
  ADD KEY `IDX_D8892622D1DC2CFC` (`id_coach`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `idx_reservation_user` (`id_user`),
  ADD KEY `idx_reservation_coach` (`id_coach`);

--
-- Index pour la table `review_cache`
--
ALTER TABLE `review_cache`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD UNIQUE KEY `nom_role` (`nom_role`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `fk_user_role` (`id_role`);

--
-- Index pour la table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F52233F6E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `article_reaction`
--
ALTER TABLE `article_reaction`
  MODIFY `id_reaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `article_signalement`
--
ALTER TABLE `article_signalement`
  MODIFY `id_signalement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `coach`
--
ALTER TABLE `coach`
  MODIFY `id_coach` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `commentaire_evenement`
--
ALTER TABLE `commentaire_evenement`
  MODIFY `id_commentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  MODIFY `id_dispo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `domaine_coaching`
--
ALTER TABLE `domaine_coaching`
  MODIFY `id_domaine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id_evenement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `inscription_evenement`
--
ALTER TABLE `inscription_evenement`
  MODIFY `id_inscription` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `review_cache`
--
ALTER TABLE `review_cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `FK_3F596DCC6B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_3F596DCCA632A3BC` FOREIGN KEY (`id_domaine`) REFERENCES `domaine_coaching` (`id_domaine`) ON DELETE CASCADE;

--
-- Contraintes pour la table `commentaire_evenement`
--
ALTER TABLE `commentaire_evenement`
  ADD CONSTRAINT `FK_84B1E7298B13D439` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id_evenement`) ON DELETE CASCADE;

--
-- Contraintes pour la table `disponibilite`
--
ALTER TABLE `disponibilite`
  ADD CONSTRAINT `FK_2CBACE2FD1DC2CFC` FOREIGN KEY (`id_coach`) REFERENCES `coach` (`id_coach`);

--
-- Contraintes pour la table `inscription_evenement`
--
ALTER TABLE `inscription_evenement`
  ADD CONSTRAINT `FK_AD33AA066B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `fk_ins_event` FOREIGN KEY (`id_evenement`) REFERENCES `evenement` (`id_evenement`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_29A5EC27F603EE73` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `FK_D88926226B3CA4B` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D8892622D1DC2CFC` FOREIGN KEY (`id_coach`) REFERENCES `coach` (`id_coach`) ON DELETE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
