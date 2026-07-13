-- =============================================
-- Brankey Store - Clean SQL for InfinityFree
-- Database: if0_42314098_jasaintro
-- =============================================

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- ============================================
-- Table: migrations (CodeIgniter)
-- ============================================
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2026-07-01-133345', 'App\\Database\\Migrations\\CreateProductsTable', 'default', 'App', 1751374431, 1),
(2, '2026-07-12-214548', 'App\\Database\\Migrations\\CreateOrdersTable', 'default', 'App', 1752360356, 2);

-- ============================================
-- Table: products
-- ============================================
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) NOT NULL,
  `nama_paket` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `fitur` text NULL,
  `link` varchar(500) NULL,
  `file_media` varchar(255) NULL,
  `created_at` datetime NULL,
  `updated_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- ============================================
-- Table: orders
-- ============================================
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(150) NOT NULL,
  `nomor_wa` varchar(150) NOT NULL,
  `paket` varchar(150) NOT NULL,
  `harga` int(11) NOT NULL DEFAULT 0,
  `catatan` text NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `created_at` datetime NULL,
  `updated_at` datetime NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
