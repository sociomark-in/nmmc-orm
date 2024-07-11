-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2024 at 12:08 PM
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
-- Database: `nmmc_orm`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_application_departments`
--

CREATE TABLE `app_application_departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_departments`
--

INSERT INTO `app_application_departments` (`id`, `name`) VALUES
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
-- Table structure for table `app_application_wards`
--

CREATE TABLE `app_application_wards` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_wards`
--

INSERT INTO `app_application_wards` (`id`, `name`, `slug`) VALUES
(1, 'Belapur', 'belapur'),
(2, 'Nerul', 'nerul'),
(3, 'Vashi', 'vashi'),
(4, 'Turbhe', 'turbhe'),
(5, 'Koperkhairane', 'koperkhairane'),
(6, 'Ghansoli', 'ghansoli'),
(7, 'Airoli', 'airoli'),
(8, 'Digha', 'digha');

-- --------------------------------------------------------

--
-- Table structure for table `app_complaint_tickets`
--

CREATE TABLE `app_complaint_tickets` (
  `id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `type_of_complaint` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `source_link` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_complaint_tickets`
--

INSERT INTO `app_complaint_tickets` (`id`, `source`, `department_id`, `ward_id`, `type_of_complaint`, `message`, `source_link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=1', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(2, 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=2', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(3, 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=3', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(4, 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=4', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(5, 'facebook', 2, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=5', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(6, 'facebook', 2, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=6', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(7, 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=7', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(8, 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=8', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(9, 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=9', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(10, 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=10', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(11, 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=11', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(12, 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=12', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(13, 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=13', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(14, 'instagram', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=14', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(15, 'instagram', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=15', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(16, 'instagram', 4, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=16', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(17, 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=17', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(18, 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=18', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(19, 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=19', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(20, 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=20', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(21, 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=21', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(22, 'instagram', 5, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=22', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(23, 'instagram', 5, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=23', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(24, 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=24', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(25, 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=25', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(26, 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=26', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(27, 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=27', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(28, 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=28', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(29, 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=29', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(30, 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=30', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(31, 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=31', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(32, 'twitter', 7, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=32', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(33, 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=33', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(34, 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=34', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(35, 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=35', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(36, 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=36', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(37, 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=37', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(38, 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=38', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(39, 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=39', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(40, 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=40', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(41, 'twitter', 9, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=41', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(42, 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=42', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(43, 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=43', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(44, 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=44', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(45, 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=45', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(46, 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=46', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(47, 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=47', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(48, 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=48', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(49, 'twitter', 11, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=49', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(50, 'instagram', 11, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=50', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(51, 'instagram', 11, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=51', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(52, 'instagram', 12, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=52', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(53, 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=53', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(54, 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=54', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(55, 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=55', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(56, 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=56', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(57, 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=57', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(58, 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=58', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(59, 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=59', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(60, 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=60', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(61, 'facebook', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=61', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(62, 'facebook', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=62', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(63, 'facebook', 15, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=63', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(64, 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=64', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(65, 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=65', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(66, 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=66', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(67, 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=67', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(68, 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=68', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(69, 'facebook', 17, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=69', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(70, 'facebook', 17, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=70', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(71, 'facebook', 17, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=71', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(72, 'facebook', 17, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=72', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(73, 'facebook', 17, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=73', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(74, 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=74', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(75, 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=75', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(76, 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=76', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(77, 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=77', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(78, 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=78', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(79, 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=79', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(80, 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=80', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(81, 'instagram', 20, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=81', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(82, 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=82', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(83, 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=83', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(84, 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=84', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(85, 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=85', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(86, 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=86', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(87, 'instagram', 21, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=87', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(88, 'instagram', 21, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=88', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(89, 'instagram', 21, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=89', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(90, 'instagram', 21, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=90', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(91, 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=91', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(92, 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=92', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(93, 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=93', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(94, 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=94', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(95, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=95', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(96, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=96', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(97, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=97', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(98, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=98', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(99, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=99', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(100, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=100', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(101, 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=101', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(102, 'instagram', 14, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=102', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(103, 'instagram', 14, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=103', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(104, 'instagram', 14, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=104', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(105, 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=105', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(106, 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=106', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(107, 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=107', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(108, 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=108', 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(109, 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=109', 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(110, 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=110', 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(111, 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=111', 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_application_departments`
--
ALTER TABLE `app_application_departments`
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
-- Indexes for table `app_application_wards`
--
ALTER TABLE `app_application_wards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_complaint_tickets`
--
ALTER TABLE `app_complaint_tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_application_departments`
--
ALTER TABLE `app_application_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
-- AUTO_INCREMENT for table `app_application_wards`
--
ALTER TABLE `app_application_wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `app_complaint_tickets`
--
ALTER TABLE `app_complaint_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
