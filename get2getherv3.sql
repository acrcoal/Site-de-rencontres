-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 06:52 PM
-- Server version: 8.0.18
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `get2getherv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pseudo` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courriel` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motdepasse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sexe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `naissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ville` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `intention` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `pseudo`, `courriel`, `motdepasse`, `prenom`, `nom`, `sexe`, `naissance`, `pays`, `ville`, `intention`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Omar21', 'oaguilar@gmail.com', '$2y$10$ly2hZBlO6.jRp8tGDa5NneYX.CanXb1MDSB3oSBPzrUSIwtEd/RZ2', 'Omar', 'Aguilar ', 'Homme', '1985-11-28', 'MX', 'Monterrey', 'Sorties en groupe', './images/membres/h44.jpg', '\"\"\"\"\"\"\"\"Velo Velo\"\"\"\"\"\"\"\"', '2021-03-15 18:44:00', '2021-03-17 19:23:35'),
(2, 'Claudiu21', 'ctulba@gmail.com', '$2y$10$Z0K3/0NqOc2ksqmPt.lYF.ZspgLJcyAuIH4F.rUns6hoRjoJicKZ.', 'Claudiu', 'Tulba', 'Homme', '1974-08-19', 'AQ', 'Antartica', 'Sorties en groupe', './images/membres/h11.jpg', '\"skyting\"', '2021-03-17 06:51:04', '2021-03-17 06:52:57'),
(3, 'David21', 'davidr@gmail.com', '$2y$10$yGeKYwCi4OlJ9wJUmw/INuSnIdvu4vZa0Ktse2Ol1rq26A.kBWMv6', 'David', 'Ramirez', 'Homme', '1977-08-19', 'AU', 'DDO', 'Sorties en groupe', './images/membres/h22.jpg', '\"Run\"', '2021-03-17 19:13:59', '2021-03-17 19:15:39'),
(4, 'Lili19', 'lili@gmail.com', '$2y$10$HJhEuxT2rhNKihZ02mHbCeOPuEfPSKbpJDzR7Y/Bgzy5LFVSxSBSy', 'Lili', 'Shuttis', 'Femme', '1989-08-19', 'BD', 'Lituania', 'Sorties amicales', './images/membres/w3.jpg', '\"Dance\"', '2021-03-17 19:26:01', '2021-03-17 19:28:56'),
(5, 'Dino21', 'dino@gmail.com', '$2y$10$Jd3fVhLSCF72Ix7VXh2tju0r2SiqmLwwRdRcoJ7tDfDG0a6JpES7S', 'Dino', 'Reyes', 'Homme', '1985-07-19', 'IS', 'Newbridge', 'Sorties en groupe', './images/membres/h33.jpg', '\"Velo speed\"', '2021-03-17 19:34:59', '2021-03-17 19:37:54'),
(6, 'Laura21', 'laura@gmail.com', '$2y$10$SnUu77f7aUz1VKAovDPQqu1x41z/L1SoHpy.B6MOdv/LL0J/gMooO', 'Laura', 'Quintanilla', 'Femme', '1975-07-05', 'MX', 'Leon', 'Sorties en groupe', '/storage/users/3m4B7PXRYBxSJl6XacK7Kh2hmhqpcg7WXmjMLH7n.jpg', '\"Artist\"', '2021-03-22 21:39:37', '2021-05-07 03:28:51');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `membre`
--

CREATE TABLE `membre` (
  `pseudoMembre` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexe` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intention` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(52) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_10_044902_create_admins_table', 1),
(5, '2021_03_10_050313_membre', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_courriel_unique` (`courriel`),
  ADD UNIQUE KEY `admins_pseudo_unique` (`pseudo`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `membre`
--
ALTER TABLE `membre`
  ADD KEY `membre_pseudomembre_foreign` (`pseudoMembre`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `membre_pseudomembre_foreign` FOREIGN KEY (`pseudoMembre`) REFERENCES `admins` (`pseudo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
