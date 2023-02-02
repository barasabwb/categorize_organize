-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table mod_organizer.tbl_categories
CREATE TABLE IF NOT EXISTS `tbl_categories` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL DEFAULT '0',
  `project` varchar(50) DEFAULT NULL,
  `project_image` varchar(255) DEFAULT 'sorting.png',
  `project_desctiption` varchar(255) DEFAULT NULL,
  `category_name` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mods` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created_at` varchar(100) DEFAULT NULL,
  `last_updated` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mod_organizer.tbl_categories: ~3 rows (approximately)
INSERT IGNORE INTO `tbl_categories` (`id`, `user_id`, `project`, `project_image`, `project_desctiption`, `category_name`, `mods`, `status`, `created_at`, `last_updated`) VALUES
	(9, '5', 'Project Uno', 'sorting.png', NULL, '{"mod3":{"name":"mod3","position":1,"mods":{"one":{"name":"one","position":1},"step one2":{"name":"step one2","position":2},"mod1":{"name":"mod1","position":3},"fsdfsdfsd":{"name":"fsdfsdfsd","position":4},"gdgrgrrg":{"name":"gdgrgrrg","position":5},"mod":{"name":"mod","position":6},"dsfasf":{"name":"dsfasf","position":7},"sfsfsfsfsf":{"name":"sfsfsfsfsf","position":8}}},"mod2":{"name":"mod2","position":2},"mod1":{"name":"mod1","position":3}}', NULL, 'active', NULL, NULL),
	(10, '5', 'Project 2', 'sorting.png', NULL, '{"mod3":{"name":"mod3","position":1,"mods":{"one":{"name":"one","position":1},"step one2":{"name":"step one2","position":2},"mod1":{"name":"mod1","position":3},"fsdfsdfsd":{"name":"fsdfsdfsd","position":4},"gdgrgrrg":{"name":"gdgrgrrg","position":5},"mod":{"name":"mod","position":6},"dsfasf":{"name":"dsfasf","position":7},"sfsfsfsfsf":{"name":"sfsfsfsfsf","position":8}}},"mod2":{"name":"mod2","position":2},"mod1":{"name":"mod1","position":3}}', NULL, 'active', NULL, NULL),
	(11, '5', 'Project 2', 'sorting.png', NULL, '{"mod3":{"name":"mod3","position":1,"mods":{"one":{"name":"one","position":1},"step one2":{"name":"step one2","position":2},"mod1":{"name":"mod1","position":3},"fsdfsdfsd":{"name":"fsdfsdfsd","position":4},"gdgrgrrg":{"name":"gdgrgrrg","position":5},"mod":{"name":"mod","position":6},"dsfasf":{"name":"dsfasf","position":7},"sfsfsfsfsf":{"name":"sfsfsfsfsf","position":8}}},"mod2":{"name":"mod2","position":2},"mod1":{"name":"mod1","position":3}}', NULL, 'active', NULL, NULL);

-- Dumping structure for table mod_organizer.tbl_settings
CREATE TABLE IF NOT EXISTS `tbl_settings` (
  `id` int NOT NULL,
  `side_navbar_options` longtext,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mod_organizer.tbl_settings: ~0 rows (approximately)

-- Dumping structure for table mod_organizer.tbl_users
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email_address` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` enum('active','inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table mod_organizer.tbl_users: ~7 rows (approximately)
INSERT IGNORE INTO `tbl_users` (`id`, `username`, `email_address`, `password`, `status`, `created_at`) VALUES
	(1, '2', '2', '2', 'active', '2022-11-29 17:41:20'),
	(2, '2', '2', '2', 'active', '2022-11-29 17:41:20'),
	(3, 'Brian', 'Brian', 'Brian', 'active', '2023-01-30 09:41:34'),
	(4, 'bdes', 'sfsfs@yahoo.com', '$2y$10$kb/K7utjbklE0Ufpv0jLbeJRV2VFHRhn4U3VrtbiA.Yo5pnOmnW9.', 'active', '2023-01-30 12:05:34'),
	(5, 'barasa_123', 'barasabwb17@gmail.com', '$2y$10$3XtwNGtMkX538HopvTM2rOodIc7Ji8MORZaIxttSHemP1hwqvE4zy', 'active', '2023-01-30 13:16:28'),
	(6, 'Kevo123', 'kevin@gmail.com', '$2y$10$lcdCC7Gm0VGwAdhDQPz9VOMfVcofXZ40scBN0jgyX.erMwG.x/IFy', 'active', '2023-01-31 07:26:42'),
	(7, 'Kevo1232', 'kevin2@gmail.com', '$2y$10$qLeskjjQN7rRzvELZvcib.bQWil0VzrJNKG7x5JRjWATKEHFSIbhe', 'active', '2023-01-31 07:30:17'),
	(8, 'marie12', 'marie12@gmail.com', '$2y$10$z7hYHXyJNHPEhKCF75dHnuNYTiifLtBYfjezPLq5yH2gPoK4NOpLe', 'active', '2023-01-31 07:31:38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
