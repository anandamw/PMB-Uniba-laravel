-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2024 at 09:04 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb_uniba_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE `beasiswa` (
  `id_beasiswa` int UNSIGNED NOT NULL,
  `token_beasiswa` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_beasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `token_beasiswa`, `nama_beasiswa`, `deskripsi_beasiswa`, `foto_beasiswa`, `created_at`, `updated_at`) VALUES
(1, '91dlUNPmNDfX', 'Beasiswa Regular Tahun 2024', 'Uniba ingin mengeluarkan jumlah mahasiswa yang menampung mahasuswa yang mempunya berbagai prestasi dan kekuasaan tersendiri', '65d1f62690e55.png', '2024-02-18 05:20:54', '2024-02-18 05:20:54');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jalur_penerimaan`
--

CREATE TABLE `jalur_penerimaan` (
  `id_jalur_penerimaan` int UNSIGNED NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jalur` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_mulai` date NOT NULL,
  `jadwal_selesai` date NOT NULL,
  `file_jalur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_jalur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jalur_penerimaan`
--

INSERT INTO `jalur_penerimaan` (`id_jalur_penerimaan`, `token`, `nama_jalur`, `jadwal_mulai`, `jadwal_selesai`, `file_jalur`, `foto_jalur`, `created_at`, `updated_at`) VALUES
(1, 'sfhghshfhfhfgfgtr44', 'Jalur prestasi', '2024-01-31', '2024-02-29', '65d1f64cec26f.ai', '65d1f64cec26f.jpg', '2024-02-18 05:21:33', '2024-02-18 05:21:33'),
(2, '65d267cf5db74', 'Jalur ordal', '2024-02-02', '2024-02-13', '65d267cf5db74.ai', '65d267cf5db74.jpg', '2024-02-18 13:25:51', '2024-02-18 13:25:51');

-- --------------------------------------------------------

--
-- Table structure for table `master_berita`
--

CREATE TABLE `master_berita` (
  `id_berita` int UNSIGNED NOT NULL,
  `token_berita` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_berita` date NOT NULL,
  `judul_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_berita`
--

INSERT INTO `master_berita` (`id_berita`, `token_berita`, `tanggal_berita`, `judul_berita`, `foto_berita`, `isi_berita`, `id_kategori`, `status`, `created_at`, `updated_at`) VALUES
(4, 'uSb0jbmXffZ9D', '2024-02-10', 'jakarta dilanda banjir', '65d1f608ba1e1.jpg', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium dignissimos harum animi saepe quibusdam vitae vel quaerat, temporibus tempore, doloremque consectetur quas iure ab alias quia sed nesciunt veniam recusandae?</p><p>&nbsp;</p>', 1, 1, '2024-02-18 05:20:24', '2024-02-18 05:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `master_kategori`
--

CREATE TABLE `master_kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_kategori`
--

INSERT INTO `master_kategori` (`id_kategori`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'horor', '2024-02-18 05:10:13', '2024-02-18 05:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_05_043014_create_jalur_penerimaans_table', 1),
(6, '2024_02_05_043036_create_team_pmbs_table', 1),
(7, '2024_02_05_043101_create_beasiswas_table', 1),
(8, '2024_02_05_043916_create_master_kategoris_table', 1),
(9, '2024_02_05_044855_create_master_beritas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_pmb`
--

CREATE TABLE `team_pmb` (
  `id_team_pmb` int UNSIGNED NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_tim` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_tim` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_tim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_pmb`
--

INSERT INTO `team_pmb` (`id_team_pmb`, `token`, `nama_tim`, `jabatan_tim`, `foto_tim`, `created_at`, `updated_at`) VALUES
(1, '', 'team turbo', 'developer handal', '65d1f66a8a34e.jpg', '2024-02-18 05:22:02', '2024-02-18 05:22:02'),
(2, '65d26c4e6c504', 'tim turbo R10', 'all in pokonya ...', '65d26c4e6c504.jpg', '2024-02-18 13:45:02', '2024-02-18 13:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
-- Indexes for table `beasiswa`
--
ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id_beasiswa`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jalur_penerimaan`
--
ALTER TABLE `jalur_penerimaan`
  ADD PRIMARY KEY (`id_jalur_penerimaan`);

--
-- Indexes for table `master_berita`
--
ALTER TABLE `master_berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `master_kategori`
--
ALTER TABLE `master_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `team_pmb`
--
ALTER TABLE `team_pmb`
  ADD PRIMARY KEY (`id_team_pmb`);

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
-- AUTO_INCREMENT for table `beasiswa`
--
ALTER TABLE `beasiswa`
  MODIFY `id_beasiswa` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jalur_penerimaan`
--
ALTER TABLE `jalur_penerimaan`
  MODIFY `id_jalur_penerimaan` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_berita`
--
ALTER TABLE `master_berita`
  MODIFY `id_berita` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_kategori`
--
ALTER TABLE `master_kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_pmb`
--
ALTER TABLE `team_pmb`
  MODIFY `id_team_pmb` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `master_berita`
--
ALTER TABLE `master_berita`
  ADD CONSTRAINT `master_berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `master_kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
