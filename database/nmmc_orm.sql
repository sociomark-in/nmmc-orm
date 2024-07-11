-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 11:09 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nmmc_orm`
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

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `type _of _complaint` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `source_link` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`) VALUES
(1, 'Accounts'),
(2, 'Administration'),
(3, 'Disaster Management'),
(4, 'Public Relation Department'),
(5, 'Education'),
(6, 'ETC'),
(7, 'LBT'),
(8, 'Licenses'),
(9, 'Social Welfare'),
(10, 'Sports And Cultural'),
(11, 'Town Planning'),
(12, 'Vehicle Department'),
(13, 'Health'),
(14, 'Transport (NMMT)'),
(15, 'Property Tax'),
(16, 'Encroachment'),
(17, 'Estate / Property'),
(18, 'Garden'),
(19, 'Play Ground'),
(20, 'Solid Waste Management'),
(21, 'Road'),
(22, 'Drainage'),
(23, 'Footpath'),
(24, 'Public Toilet'),
(25, 'Sewerage'),
(26, 'Storm Water Drain'),
(27, 'Street Light'),
(28, 'Water');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `id` int(11) NOT NULL,
  `ward_name` varchar(255) NOT NULL,
  `ward_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`id`, `ward_name`, `ward_slug`) VALUES
(1, 'Belapur', 'belapur'),
(2, 'Nerul', 'nerul'),
(3, 'Vashi', 'vashi'),
(4, 'Turbhe', 'turbhe'),
(5, 'Koperkhairane', 'koperkhairane'),
(6, 'Ghansoli', 'ghansoli'),
(7, 'Airoli', 'airoli'),
(8, 'Digha', 'digha');

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
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
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

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
