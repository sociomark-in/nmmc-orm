-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 08:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socioproducts_sociocms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_application_posts`
--

CREATE TABLE `app_application_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` longtext NOT NULL,
  `excerpt` text DEFAULT NULL,
  `image_url` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `tags` text DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_desc` text DEFAULT NULL,
  `seo_thumb` text DEFAULT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uslug` text NOT NULL,
  `views` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_application_roles`
--

CREATE TABLE `app_application_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_roles`
--

INSERT INTO `app_application_roles` (`id`, `role`, `description`, `created_at`) VALUES
(1, 'superadmin', '', '2024-07-02 10:02:47'),
(2, 'admin', '', '2024-07-02 10:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_users`
--

CREATE TABLE `app_application_users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` mediumtext NOT NULL,
  `role` int(11) NOT NULL,
  `login_status` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_users`
--

INSERT INTO `app_application_users` (`id`, `username`, `password`, `role`, `login_status`, `status`, `created_at`) VALUES
(1, 'hemant@sociomark', '$2y$10$dOeYg9OV7dqTdYIVfkKJh.m0wxkcyIgtfdmeq6obs0h3pzapQfd9O', 2, 0, 1, '2024-07-01 18:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `app_post_categories`
--

CREATE TABLE `app_post_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `blog_count` int(11) NOT NULL DEFAULT 0,
  `uslug` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_post_categories`
--

INSERT INTO `app_post_categories` (`id`, `title`, `parent`, `blog_count`, `uslug`, `created_at`) VALUES
(1, 'Business', NULL, 0, 'business', '2024-06-26 16:22:51'),
(2, 'Consulting', NULL, 0, 'consulting', '2024-06-26 16:22:51'),
(4, 'Executive Marketing', NULL, 0, 'executive-marketing', '2024-06-26 16:23:23'),
(5, 'Human Resource', NULL, 0, 'human-resource', '2024-06-26 16:23:48'),
(6, 'Business Development', 1, 0, '', '2024-06-27 15:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `app_post_tags`
--

CREATE TABLE `app_post_tags` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `uslug` text NOT NULL,
  `blog_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_post_tags`
--

INSERT INTO `app_post_tags` (`id`, `title`, `uslug`, `blog_count`, `created_at`) VALUES
(1, 'Tag Name - 10', 'tag-name-10', 0, '2024-06-28 16:24:25'),
(2, 'Tag Name', 'tag-name', 0, '2024-07-02 15:48:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_application_posts`
--
ALTER TABLE `app_application_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_roles`
--
ALTER TABLE `app_application_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_users`
--
ALTER TABLE `app_application_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Unique Username` (`username`);

--
-- Indexes for table `app_post_categories`
--
ALTER TABLE `app_post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_post_tags`
--
ALTER TABLE `app_post_tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_application_posts`
--
ALTER TABLE `app_application_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `app_application_roles`
--
ALTER TABLE `app_application_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `app_application_users`
--
ALTER TABLE `app_application_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `app_post_categories`
--
ALTER TABLE `app_post_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `app_post_tags`
--
ALTER TABLE `app_post_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
