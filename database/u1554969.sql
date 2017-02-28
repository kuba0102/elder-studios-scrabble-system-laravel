-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2017 at 08:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1554969`
--

-- --------------------------------------------------------

--
-- Table structure for table `pl_members`
--

CREATE TABLE `pl_members` (
  `member_id` int(10) UNSIGNED NOT NULL,
  `member_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_date_joined` date NOT NULL,
  `member_mobile_number` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pl_members`
--

INSERT INTO `pl_members` (`member_id`, `member_name`, `member_last_name`, `member_date_joined`, `member_mobile_number`, `created_at`, `updated_at`) VALUES
(1, 'Mike', 'Smith', '2017-01-24', '2147483647', NULL, NULL),
(2, 'Luke', 'Morris', '2017-01-24', '2147483647', NULL, NULL),
(3, 'Tony', 'Winston', '2017-01-24', '2147483647', NULL, NULL),
(4, 'James', 'Car', '2017-01-24', '2147483647', NULL, NULL),
(5, 'James', 'Jones', '2017-01-24', '2147483647', NULL, NULL),
(6, 'Mamadu', 'Jordan', '2017-01-24', '2147483647', NULL, NULL),
(7, 'Jacub', 'Allan', '2017-01-24', '2147483647', NULL, NULL),
(8, 'Tim', 'Whitiker', '2017-01-24', '2147483647', NULL, NULL),
(9, 'Callum', 'Fudge', '2017-01-24', '2147483647', NULL, NULL),
(10, 'Luke', 'Right', '2017-01-24', '2147483647', NULL, NULL),
(11, 'Jakub', 'Chruslicki', '2017-01-27', '2147483647', NULL, NULL),
(12, 'Una', 'Davidson', '2017-02-28', '07542658741', '2017-02-28 18:03:48', '2017-02-28 18:03:48'),
(13, 'Joseph', 'Turner', '2017-02-28', '07562145987', '2017-02-28 18:04:07', '2017-02-28 18:04:07'),
(14, 'Lucas', 'Young', '2017-02-28', '07841987541', '2017-02-28 18:04:26', '2017-02-28 18:04:26'),
(15, 'Frank', 'Arnold', '2017-02-28', '07425487542', '2017-02-28 18:04:49', '2017-02-28 19:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `pl_results`
--

CREATE TABLE `pl_results` (
  `result_id` int(10) UNSIGNED NOT NULL,
  `result_member_id` int(10) UNSIGNED NOT NULL,
  `result_match_status` int(10) UNSIGNED NOT NULL,
  `result_match_id` int(10) UNSIGNED NOT NULL,
  `result_score` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pl_results`
--

INSERT INTO `pl_results` (`result_id`, `result_member_id`, `result_match_status`, `result_match_id`, `result_score`, `created_at`, `updated_at`) VALUES
(5, 1, 1, 1, 350, NULL, NULL),
(6, 2, 2, 1, 320, NULL, NULL),
(7, 1, 1, 2, 410, NULL, NULL),
(8, 3, 2, 2, 390, NULL, NULL),
(9, 6, 1, 3, 330, NULL, NULL),
(10, 3, 2, 3, 300, NULL, NULL),
(11, 9, 1, 4, 420, NULL, NULL),
(12, 10, 2, 4, 350, NULL, NULL),
(13, 3, 1, 5, 540, NULL, NULL),
(14, 8, 2, 5, 490, NULL, NULL),
(15, 11, 1, 6, 500, NULL, NULL),
(16, 7, 2, 6, 340, NULL, NULL),
(17, 4, 1, 7, 450, NULL, NULL),
(18, 1, 2, 7, 380, NULL, NULL),
(19, 11, 1, 8, 410, NULL, NULL),
(20, 4, 2, 8, 390, NULL, NULL),
(21, 7, 1, 9, 330, NULL, NULL),
(22, 11, 2, 9, 200, NULL, NULL),
(23, 7, 1, 10, 500, NULL, NULL),
(24, 3, 2, 10, 300, NULL, NULL),
(25, 5, 1, 11, 360, NULL, NULL),
(26, 10, 2, 11, 340, NULL, NULL),
(27, 6, 1, 12, 450, NULL, NULL),
(28, 9, 2, 12, 410, NULL, NULL),
(29, 9, 1, 13, 340, NULL, NULL),
(30, 5, 2, 13, 250, NULL, NULL),
(31, 10, 1, 14, 600, NULL, NULL),
(32, 7, 2, 14, 500, NULL, NULL),
(33, 4, 1, 15, 430, NULL, NULL),
(34, 2, 2, 15, 250, NULL, NULL),
(35, 1, 1, 16, 350, '2017-02-25 17:43:52', '2017-02-25 17:43:52'),
(36, 2, 2, 16, 200, '2017-02-25 17:43:52', '2017-02-25 17:43:52'),
(38, 1, 2, 17, 280, '2017-02-26 13:20:05', '2017-02-26 13:20:05'),
(40, 2, 2, 18, 200, '2017-02-26 16:45:12', '2017-02-26 16:45:12'),
(41, 1, 1, 19, 350, '2017-02-26 17:12:51', '2017-02-26 17:12:51'),
(42, 2, 2, 19, 280, '2017-02-26 17:12:51', '2017-02-26 17:12:51'),
(43, 12, 1, 20, 300, '2017-02-28 19:36:57', '2017-02-28 19:36:57'),
(44, 14, 2, 20, 280, '2017-02-28 19:36:57', '2017-02-28 19:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `pl_status`
--

CREATE TABLE `pl_status` (
  `status_id` int(10) UNSIGNED NOT NULL,
  `status_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pl_status`
--

INSERT INTO `pl_status` (`status_id`, `status_name`, `status_description`) VALUES
(1, 'Win', 'Player has scored more points then his opponent.'),
(2, 'Loss', 'Player has scored less points then his opponent.'),
(3, 'Draw', 'Both players have same score.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pl_members`
--
ALTER TABLE `pl_members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `pl_results`
--
ALTER TABLE `pl_results`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `fk_ess_members_esss_results` (`result_member_id`);

--
-- Indexes for table `pl_status`
--
ALTER TABLE `pl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pl_members`
--
ALTER TABLE `pl_members`
  MODIFY `member_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `pl_results`
--
ALTER TABLE `pl_results`
  MODIFY `result_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `pl_status`
--
ALTER TABLE `pl_status`
  MODIFY `status_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pl_results`
--
ALTER TABLE `pl_results`
  ADD CONSTRAINT `fk_pl_members_pl_results` FOREIGN KEY (`result_member_id`) REFERENCES `pl_members` (`member_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
