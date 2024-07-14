-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2024 at 08:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `app_application_complaint`
--

CREATE TABLE `app_application_complaint` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_complaint`
--

INSERT INTO `app_application_complaint` (`id`, `name`, `created_at`) VALUES
(1, 'Short supply of water', '2024-07-12 08:58:06'),
(2, 'Chock in main drain ', '2024-07-12 08:58:06'),
(3, 'Drinking water not available', '2024-07-12 08:58:06'),
(4, 'Unclean toilets', '2024-07-12 08:58:06'),
(5, 'Door/window/staircase etc. found broken', '2024-07-12 08:58:06'),
(6, 'No electricity supply ', '2024-07-12 08:58:06'),
(7, 'Lamp , tube light etc ., to be replaced ', '2024-07-12 08:58:06'),
(8, 'Furniture found broken in classes', '2024-07-12 08:58:06'),
(9, 'Found encroachment in the school premises', '2024-07-12 08:58:06'),
(10, 'No teacher/ staff', '2024-07-12 08:58:06'),
(11, 'No warning /alarm system', '2024-07-12 08:58:06'),
(12, 'Overflow of waste material', '2024-07-12 08:58:06'),
(13, 'Pan /guthkha hawker near school premises', '2024-07-12 08:58:06'),
(14, 'Bad quality of material given to students', '2024-07-12 08:58:06'),
(15, 'Unauthorized dealer ', '2024-07-12 08:58:06'),
(16, 'Wrong assessment', '2024-07-12 08:58:06'),
(17, 'Unauthorized storage of explosive', '2024-07-12 08:58:06'),
(18, 'Stock of material', '2024-07-12 08:58:06'),
(19, 'Storage and sale of plastic bag', '2024-07-12 08:58:06'),
(20, 'Trade without license', '2024-07-12 08:58:06'),
(21, 'Unauthorized banner/ advertisement/ boards on roads/ footpath', '2024-07-12 08:58:06'),
(22, 'Unauthorized stalls on road ,footpath or SWD ', '2024-07-12 08:58:06'),
(23, 'Nuisance due to mills', '2024-07-12 08:58:06'),
(24, 'Air pollution', '2024-07-12 08:58:06'),
(25, 'Pollution due to chemical effluents', '2024-07-12 08:58:06'),
(26, 'Unauthorized factory', '2024-07-12 08:58:06'),
(27, 'Non reception of Scholarship', '2024-07-12 08:58:06'),
(28, 'Non reception of Financial Assistance of Schemes', '2024-07-12 08:58:06'),
(29, 'Senior Citizen Center', '2024-07-12 08:58:06'),
(30, 'Unauthorized construction and development', '2024-07-12 08:58:06'),
(31, 'Straying/Roaming of animals other than dogs', '2024-07-12 08:58:06'),
(32, 'Issues related to Stray Dogs Sterilisation', '2024-07-12 08:58:06'),
(33, 'Illegal meat shop and issues related to unhyegene ', '2024-07-12 08:58:06'),
(34, 'Nuisance due to rodents', '2024-07-12 08:58:06'),
(35, 'Unlicensed pet dog', '2024-07-12 08:58:06'),
(36, 'Illegal slaughter house', '2024-07-12 08:58:06'),
(37, 'Cruelty to animals', '2024-07-12 08:58:06'),
(38, 'Nuisance due to stables', '2024-07-12 08:58:06'),
(39, 'Mosquito nuisance', '2024-07-12 08:58:06'),
(40, 'Suspected malaria/dengue cases', '2024-07-12 08:58:06'),
(41, 'irregular anti-larval activity', '2024-07-12 08:58:06'),
(42, 'stangnant water bodies', '2024-07-12 08:58:06'),
(43, 'Smoking at Public places (like hotels, Hospitals, Educational Institute, Religious places)', '2024-07-12 08:58:06'),
(44, 'Issue related to water borne diseases', '2024-07-12 08:58:06'),
(45, 'Others', '2024-07-12 08:58:06'),
(46, 'Careless treatment at facility', '2024-07-12 08:58:06'),
(47, 'Issue related to Biomedical waste disposal', '2024-07-12 08:58:06'),
(48, 'Non Availability of Medicine', '2024-07-12 08:58:06'),
(49, 'Patient Diet & Canteen Services in Hospitals', '2024-07-12 08:58:06'),
(50, 'Patient & Hospital Linen & Laundry Service', '2024-07-12 08:58:06'),
(51, 'Sonography Service', '2024-07-12 08:58:06'),
(52, 'General Cleanliness in NMMC Hospital', '2024-07-12 08:58:06'),
(53, 'Negligence of Service by Medical & Paramedical Staff', '2024-07-12 08:58:06'),
(54, 'Improper behaviour of NMMC Hospital staff', '2024-07-12 08:58:06'),
(55, 'Issues ralated to qualified Nursing staff', '2024-07-12 08:58:06'),
(56, 'Issues related to Running unregistered hospital', '2024-07-12 08:58:06'),
(57, 'Issued related to running unregistered sonography centre', '2024-07-12 08:58:06'),
(58, 'Disclosure of sex of baby to patient/relatives by any means or in any way', '2024-07-12 08:58:06'),
(59, 'Issues related to runing unregistered MTP centre', '2024-07-12 08:58:06'),
(60, 'Suspicion about degree of general medical practioner (Bogus Doctor) in nmmc area.', '2024-07-12 08:58:06'),
(61, 'Staff behavior is not good', '2024-07-12 08:58:06'),
(62, 'Damaged buses', '2024-07-12 08:58:06'),
(63, 'Incorrect details in receipt', '2024-07-12 08:58:06'),
(64, 'Illegal transfer of property', '2024-07-12 08:58:06'),
(65, 'No receipt given after payment', '2024-07-12 08:58:06'),
(66, 'Dispute related to bills', '2024-07-12 08:58:06'),
(67, 'Applied for assessment but still not done', '2024-07-12 08:58:06'),
(68, 'Online payment made but not posted', '2024-07-12 08:58:06'),
(69, 'Encroachment on municipal land / road/ footpath/ gutter', '2024-07-12 08:58:06'),
(70, 'Unauthorized hawkers on footpath', '2024-07-12 08:58:06'),
(71, 'Encroachment inside society', '2024-07-12 08:58:06'),
(72, 'Unauthorized banner/ advertisement/ boards on roads/ footpath', '2024-07-12 08:58:06'),
(73, 'Unauthorized stalls on road ,footpath or SWD ', '2024-07-12 08:58:06'),
(74, 'Illegal debris dumping on open plot road and footpath', '2024-07-12 08:58:06'),
(75, 'Illegal construction on private property', '2024-07-12 08:58:06'),
(76, 'Pertaining to rent', '2024-07-12 08:58:06'),
(77, 'Unauthorized construction plot / room', '2024-07-12 08:58:06'),
(78, 'Unauthorized use of room', '2024-07-12 08:58:06'),
(79, 'Non maintenance of premises', '2024-07-12 08:58:06'),
(80, 'Pending transfer cases', '2024-07-12 08:58:06'),
(81, 'Unauthorized addition / alteration in the premises', '2024-07-12 08:58:06'),
(82, 'Unauthorized material / furniture found', '2024-07-12 08:58:06'),
(83, 'Extension in the premises without permission', '2024-07-12 08:58:06'),
(84, 'Slab fallen down', '2024-07-12 08:58:06'),
(85, 'Unauthorized shed on building in premises', '2024-07-12 08:58:06'),
(86, 'Illegal cutting of trees', '2024-07-12 08:58:06'),
(87, 'Trimming of branches', '2024-07-12 08:58:06'),
(88, 'Insufficient Light ', '2024-07-12 08:58:06'),
(89, 'Benches are not clean', '2024-07-12 08:58:06'),
(90, 'Fallen tree', '2024-07-12 08:58:06'),
(91, 'Maintenance of garden', '2024-07-12 08:58:06'),
(92, 'Unavailability of kids playing rides', '2024-07-12 08:58:06'),
(93, 'Unavailability of benches', '2024-07-12 08:58:06'),
(94, 'Benches are not clean', '2024-07-12 08:58:06'),
(95, 'Area around garbage bin dirty', '2024-07-12 08:58:06'),
(96, 'Garbage bin overflow', '2024-07-12 08:58:06'),
(97, 'Collection points not attend properly', '2024-07-12 08:58:06'),
(98, 'Garbage not lifted from Society', '2024-07-12 08:58:06'),
(99, 'Garbage not lifted from municipal market', '2024-07-12 08:58:06'),
(100, 'Garbage Vehicle not reported for service', '2024-07-12 08:58:06'),
(101, 'Sweeping of roads not done', '2024-07-12 08:58:06'),
(102, 'Debrege to be lifted', '2024-07-12 08:58:06'),
(103, 'Burning of garbage ', '2024-07-12 08:58:06'),
(104, 'Littering in open plot', '2024-07-12 08:58:06'),
(105, 'Pot holes on roads', '2024-07-12 08:58:06'),
(106, 'Unauthorized digging on roads', '2024-07-12 08:58:06'),
(107, 'Water Logging on the road', '2024-07-12 08:58:06'),
(108, 'Lane painting has gone dull', '2024-07-12 08:58:06'),
(109, 'Repairs / resurfacing of roads /footpaths', '2024-07-12 08:58:06'),
(110, 'Removal of rank regulation on roads', '2024-07-12 08:58:06'),
(111, 'Reinstatement of trenches', '2024-07-12 08:58:06'),
(112, 'Unavailability of name plates to the roads', '2024-07-12 08:58:06'),
(113, 'Speed breakers ', '2024-07-12 08:58:06'),
(114, 'Signals', '2024-07-12 08:58:06'),
(115, 'Street lighting', '2024-07-12 08:58:06'),
(116, 'Permission for street cutting ', '2024-07-12 08:58:06'),
(117, 'Trimming of branches', '2024-07-12 08:58:06'),
(118, 'Unauthorized stalls on road', '2024-07-12 08:58:06'),
(119, 'Fallen tree on road ', '2024-07-12 08:58:06'),
(120, 'Clearing of water logging on road', '2024-07-12 08:58:06'),
(121, 'Parking line required', '2024-07-12 08:58:06'),
(122, 'Signage required', '2024-07-12 08:58:06'),
(123, 'Zebra crossing required', '2024-07-12 08:58:06'),
(124, 'Dangerous tree', '2024-07-12 08:58:06'),
(125, 'Drainage chocks And Blockages', '2024-07-12 08:58:06'),
(126, 'Overflowing Drains or manholes', '2024-07-12 08:58:06'),
(127, 'Odour form drains', '2024-07-12 08:58:06'),
(128, 'Cleaning of septic tank ', '2024-07-12 08:58:06'),
(129, 'Closing open manhole', '2024-07-12 08:58:06'),
(130, 'Problem regarding STP', '2024-07-12 08:58:06'),
(131, 'Raising Of manholes except in monsoon', '2024-07-12 08:58:06'),
(132, 'Repairs of pipe sewers/ main sewers', '2024-07-12 08:58:06'),
(133, 'Replacement of missing /damaged manhole', '2024-07-12 08:58:06'),
(134, 'Stopping leakage of drainage water in nalla', '2024-07-12 08:58:06'),
(135, 'Repairing of broken chambers', '2024-07-12 08:58:06'),
(136, 'Stopping leakage of drainage water in river', '2024-07-12 08:58:06'),
(137, 'Damaged footpath', '2024-07-12 08:58:06'),
(138, 'Unauthorized parking of vehicles on footpath', '2024-07-12 08:58:06'),
(139, 'Repairs / resurfacing of footpaths', '2024-07-12 08:58:06'),
(140, 'Open defecation in public area', '2024-07-12 08:58:06'),
(141, 'Odour form toilets', '2024-07-12 08:58:06'),
(142, 'No attendant at public toilets', '2024-07-12 08:58:06'),
(143, 'Toilets are not clean', '2024-07-12 08:58:06'),
(144, 'Odour (foul )  smell from sewer', '2024-07-12 08:58:06'),
(145, 'Damaged/ missing chamber', '2024-07-12 08:58:06'),
(146, 'Open manhole', '2024-07-12 08:58:06'),
(147, 'Pre monsoon work halted', '2024-07-12 08:58:06'),
(148, 'Damage /missing grating manhole cover', '2024-07-12 08:58:06'),
(149, ' Damaged open SWD', '2024-07-12 08:58:06'),
(150, 'Unauthorized stalls and huts on Nalas', '2024-07-12 08:58:06'),
(151, 'Flooding During monsoon', '2024-07-12 08:58:06'),
(152, 'Cleaning of open SWD', '2024-07-12 08:58:06'),
(153, 'Insufficient Light ', '2024-07-12 08:58:06'),
(154, 'Providing new lights', '2024-07-12 08:58:06'),
(155, 'Electric shock in street light ', '2024-07-12 08:58:06'),
(156, 'Setting up of electric pole ', '2024-07-12 08:58:06'),
(157, 'Removing damaged pole obstructing road', '2024-07-12 08:58:06'),
(158, 'Starting street lights during night ', '2024-07-12 08:58:06'),
(159, 'Repair of light ', '2024-07-12 08:58:06'),
(160, 'Not working ', '2024-07-12 08:58:06'),
(161, 'Closing /removal of open Terminal Box is open', '2024-07-12 08:58:06'),
(162, 'Lightning Schedule not followed  ', '2024-07-12 08:58:06'),
(163, 'Leakage in water lines', '2024-07-12 08:58:06'),
(164, 'Low pressure', '2024-07-12 08:58:06'),
(165, 'Pipeline leakage', '2024-07-12 08:58:06'),
(166, 'Dispute in water bill', '2024-07-12 08:58:06'),
(167, 'Burst water main ', '2024-07-12 08:58:06'),
(168, 'Contaminated water supply', '2024-07-12 08:58:06'),
(169, 'Shortage of water supply', '2024-07-12 08:58:06'),
(170, 'Unauthorized tapping of water connection', '2024-07-12 08:58:06'),
(171, 'Unauthorized use of water-change of user', '2024-07-12 08:58:06'),
(172, 'Removal of water meter', '2024-07-12 08:58:06'),
(173, 'Use of booster pump', '2024-07-12 08:58:06'),
(174, 'Non receipt of water bills', '2024-07-12 08:58:06'),
(175, 'Providing water by tankers', '2024-07-12 08:58:06'),
(176, 'Overflow of overhead tank', '2024-07-12 08:58:06'),
(177, 'Valve leakage', '2024-07-12 08:58:06'),
(178, 'Water supply during non -supply hours', '2024-07-12 08:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_departments`
--

CREATE TABLE `app_application_departments` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_departments`
--

INSERT INTO `app_application_departments` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Accounts', '', '2024-07-14 11:21:11'),
(2, 'Administration', '', '2024-07-14 11:21:11'),
(3, 'Disaster Management', '', '2024-07-14 11:21:11'),
(4, 'Public Relation Department', '', '2024-07-14 11:21:11'),
(5, 'Education', '', '2024-07-14 11:21:11'),
(6, 'ETC', '', '2024-07-14 11:21:11'),
(7, 'LBT', '', '2024-07-14 11:21:11'),
(8, 'Licenses', '', '2024-07-14 11:21:11'),
(9, 'Social Welfare', '', '2024-07-14 11:21:11'),
(10, 'Sports And Cultural', '', '2024-07-14 11:21:11'),
(11, 'Town Planning', '', '2024-07-14 11:21:11'),
(12, 'Vehicle Department', '', '2024-07-14 11:21:11'),
(13, 'Health', '', '2024-07-14 11:21:11'),
(14, 'Transport (NMMT)', '', '2024-07-14 11:21:11'),
(15, 'Property Tax', '', '2024-07-14 11:21:11'),
(16, 'Encroachment', '', '2024-07-14 11:21:11'),
(17, 'Estate / Property', '', '2024-07-14 11:21:11'),
(18, 'Garden', '', '2024-07-14 11:21:11'),
(19, 'Play Ground', '', '2024-07-14 11:21:11'),
(20, 'Solid Waste Management', '', '2024-07-14 11:21:11'),
(21, 'Road', '', '2024-07-14 11:21:11'),
(22, 'Drainage', '', '2024-07-14 11:21:11'),
(23, 'Footpath', '', '2024-07-14 11:21:11'),
(24, 'Public Toilet', '', '2024-07-14 11:21:11'),
(25, 'Sewerage', '', '2024-07-14 11:21:11'),
(26, 'Storm Water Drain', '', '2024-07-14 11:21:11'),
(27, 'Street Light', '', '2024-07-14 11:21:11'),
(28, 'Water', '', '2024-07-14 11:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_roles`
--

CREATE TABLE `app_application_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_roles`
--

INSERT INTO `app_application_roles` (`id`, `name`, `description`, `created_at`) VALUES
(1, 'superadmin', '', '2024-07-02 10:02:47'),
(2, 'admin', '', '2024-07-02 10:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_source`
--

CREATE TABLE `app_application_source` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_source`
--

INSERT INTO `app_application_source` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Facebook', 'facebook', '2024-07-12 08:58:06'),
(2, 'Instagram', 'instagram', '2024-07-12 08:58:06'),
(3, 'Twitter', 'twitter', '2024-07-12 08:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `app_application_status`
--

CREATE TABLE `app_application_status` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_application_status`
--

INSERT INTO `app_application_status` (`id`, `name`, `slug`, `created_at`) VALUES
(1, 'Resolved', 'resolved', '2024-07-12 08:56:50'),
(2, 'In process', 'in_process', '2024-07-12 08:56:50'),
(3, 'Unresolved', 'unresolved', '2024-07-12 08:56:50');

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
(1, 'hemant@sociomark', '$2y$10$dOeYg9OV7dqTdYIVfkKJh.m0wxkcyIgtfdmeq6obs0h3pzapQfd9O', 1, 1, 1, '2024-07-01 18:45:49'),
(2, 'grievance@nmmc', '$2y$10$H2.p9jq7D5sGoMXgyXe2WuzUhqVzXsjPbBgA3xoZPXzCGWdn1jcA2', 2, 0, 1, '2024-07-14 22:47:59');

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
  `name` varchar(200) NOT NULL,
  `source` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `type_of_complaint` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `source_link` varchar(255) NOT NULL,
  `sentiment` varchar(200) DEFAULT NULL,
  `comments` text DEFAULT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_complaint_tickets`
--

INSERT INTO `app_complaint_tickets` (`id`, `name`, `source`, `department_id`, `ward_id`, `type_of_complaint`, `message`, `source_link`, `sentiment`, `comments`, `status`, `created_at`, `updated_at`) VALUES
(1, '', 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=1', NULL, NULL, 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(2, '', 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=2', NULL, NULL, 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(3, '', 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=3', NULL, NULL, 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(4, '', 'facebook', 1, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=4', NULL, NULL, 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(5, '', 'facebook', 2, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=5', NULL, NULL, 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(6, '', 'facebook', 2, 1, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=6', NULL, NULL, 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(7, '', 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=7', NULL, NULL, 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(8, '', 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=8', NULL, NULL, 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(9, '', 'facebook', 2, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=9', NULL, NULL, 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(10, '', 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=10', NULL, NULL, 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(11, '', 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=11', NULL, NULL, 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(12, '', 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=12', NULL, NULL, 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(13, '', 'facebook', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=13', NULL, NULL, 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(14, '', 'instagram', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=14', NULL, NULL, 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(15, '', 'instagram', 3, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=15', NULL, NULL, 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(16, '', 'instagram', 4, 2, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=16', NULL, NULL, 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(17, '', 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=17', NULL, NULL, 'new', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(18, '', 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=18', NULL, NULL, 'resolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(19, '', 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=19', NULL, NULL, 'in_process', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(20, '', 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=20', NULL, NULL, 'unresolved', '2024-07-11 09:19:12', '2024-07-11 09:19:12'),
(21, '', 'instagram', 4, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=21', NULL, NULL, 'new', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(22, '', 'instagram', 5, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=22', NULL, NULL, 'resolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(23, '', 'instagram', 5, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=23', NULL, NULL, 'in_process', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(24, '', 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=24', NULL, NULL, 'unresolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(25, '', 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=25', NULL, NULL, 'new', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(26, '', 'instagram', 5, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=26', NULL, NULL, 'resolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(27, '', 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=27', NULL, NULL, 'in_process', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(28, '', 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=28', NULL, NULL, 'unresolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(29, '', 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=29', NULL, NULL, 'new', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(30, '', 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=30', NULL, NULL, 'resolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(31, '', 'instagram', 6, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=31', NULL, NULL, 'in_process', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(32, '', 'twitter', 7, 4, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=32', NULL, NULL, 'unresolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(33, '', 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=33', NULL, NULL, 'new', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(34, '', 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=34', NULL, NULL, 'resolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(35, '', 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=35', NULL, NULL, 'in_process', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(36, '', 'twitter', 7, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=36', NULL, NULL, 'unresolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(37, '', 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=37', NULL, NULL, 'new', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(38, '', 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=38', NULL, NULL, 'resolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(39, '', 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=39', NULL, NULL, 'in_process', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(40, '', 'twitter', 8, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=40', NULL, NULL, 'unresolved', '2024-06-11 09:19:12', '2024-06-11 09:19:12'),
(41, '', 'twitter', 9, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=41', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(42, '', 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=42', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(43, '', 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=43', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(44, '', 'twitter', 9, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=44', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(45, '', 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=45', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(46, '', 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=46', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(47, '', 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=47', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(48, '', 'twitter', 10, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=48', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(49, '', 'twitter', 11, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=49', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(50, '', 'instagram', 11, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=50', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(51, '', 'instagram', 11, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=51', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(52, '', 'instagram', 12, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=52', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(53, '', 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=53', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(54, '', 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=54', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(55, '', 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=55', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(56, '', 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=56', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(57, '', 'instagram', 13, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=57', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(58, '', 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=58', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(59, '', 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=59', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(60, '', 'instagram', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=60', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(61, '', 'facebook', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=61', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(62, '', 'facebook', 14, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=62', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(63, '', 'facebook', 15, 7, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=63', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(64, '', 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=64', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(65, '', 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=65', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(66, '', 'facebook', 15, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=66', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(67, '', 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=67', NULL, NULL, 'in_process', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(68, '', 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=68', NULL, NULL, 'unresolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(69, '', 'facebook', 17, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=69', NULL, NULL, 'new', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(70, '', 'facebook', 17, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=70', NULL, NULL, 'resolved', '2024-05-11 09:19:12', '2024-05-11 09:19:12'),
(71, 'Test', 'Facebook', 17, 8, 'Applied for assessment but still not done', '<p>lorum ipsum</p>', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=71', 'Positive', 'Office PC', 'Resolved', '2024-04-11 09:19:12', '2024-07-12 15:23:03'),
(72, '', 'facebook', 17, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=72', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(73, '', 'facebook', 17, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=73', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(74, '', 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=74', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(75, '', 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=75', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(76, '', 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=76', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(77, '', 'facebook', 18, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=77', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(78, '', 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=78', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(79, '', 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=79', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(80, '', 'instagram', 19, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=80', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(81, '', 'instagram', 20, 3, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=81', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(82, '', 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=82', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(83, '', 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=83', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(84, '', 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=84', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(85, '', 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=85', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(86, '', 'instagram', 20, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=86', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(87, '', 'instagram', 21, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=87', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(88, '', 'instagram', 21, 5, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=88', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(89, '', 'instagram', 21, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=89', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(90, '', 'instagram', 21, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=90', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(91, '', 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=91', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(92, '', 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=92', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(93, '', 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=93', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(94, '', 'instagram', 22, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=94', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(95, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=95', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(96, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=96', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(97, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=97', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(98, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=98', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(99, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=99', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(100, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=100', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(101, '', 'instagram', 23, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=101', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(102, '', 'instagram', 14, 6, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=102', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(103, '', 'instagram', 14, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=103', NULL, NULL, 'in_process', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(104, '', 'instagram', 14, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=104', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(105, '', 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=105', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(106, '', 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=106', NULL, NULL, 'resolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(108, '', 'facebook', 25, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=108', NULL, NULL, 'unresolved', '2024-04-11 09:19:12', '2024-04-11 09:19:12'),
(109, '', 'facebook', 16, 8, 'other', 'lorum ipsum', 'https://www.instagram.com/p/C9PmXQFPenA/?img_index=109', NULL, NULL, 'new', '2024-04-11 09:19:12', '2024-04-11 09:19:12');

-- --------------------------------------------------------

--
-- Table structure for table `app_sentiment_analysis`
--

CREATE TABLE `app_sentiment_analysis` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `app_sentiment_analysis`
--

INSERT INTO `app_sentiment_analysis` (`id`, `name`, `created_at`) VALUES
(1, 'Positive', '2024-07-12 12:27:07'),
(2, 'Negative', '2024-07-12 12:27:07'),
(3, 'Neutral', '2024-07-12 12:27:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app_application_complaint`
--
ALTER TABLE `app_application_complaint`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `app_application_source`
--
ALTER TABLE `app_application_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_application_status`
--
ALTER TABLE `app_application_status`
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
-- Indexes for table `app_sentiment_analysis`
--
ALTER TABLE `app_sentiment_analysis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_application_complaint`
--
ALTER TABLE `app_application_complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

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
-- AUTO_INCREMENT for table `app_application_source`
--
ALTER TABLE `app_application_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_application_status`
--
ALTER TABLE `app_application_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `app_application_users`
--
ALTER TABLE `app_application_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `app_application_wards`
--
ALTER TABLE `app_application_wards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `app_complaint_tickets`
--
ALTER TABLE `app_complaint_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `app_sentiment_analysis`
--
ALTER TABLE `app_sentiment_analysis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
