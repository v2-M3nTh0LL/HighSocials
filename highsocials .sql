-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2020 at 05:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `highsocials`
--

-- --------------------------------------------------------

--
-- Table structure for table `normal_instagram`
--

CREATE TABLE `normal_instagram` (
  `id` int(64) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_instagram`
--

INSERT INTO `normal_instagram` (`id`, `username`, `reg_date`) VALUES
(1, 'plosceac.alex', '2020-05-26 20:24:46'),
(2, 'cudlaradu', '2020-05-26 20:24:46'),
(3, 'jesus', '2020-05-26 20:26:46');

-- --------------------------------------------------------

--
-- Table structure for table `normal_youtube`
--

CREATE TABLE `normal_youtube` (
  `id` int(11) NOT NULL,
  `userLink` varchar(128) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `normal_youtube`
--

INSERT INTO `normal_youtube` (`id`, `userLink`, `userName`, `reg_date`) VALUES
(1, 'https://www.youtube.com/channel/UC3Md2A1m-k6Z-cq6IOIxVVQ', 'Lord VixxeN', '2020-05-26 21:41:50'),
(2, 'https://www.youtube.com/channel/UCZJiWlzzBjojABV4vOra7ng', 'CipFlixTV', '2020-05-26 21:41:50'),
(3, 'https://www.youtube.com/user/CodrinBradeaSatana', 'CodrinBradeaSatana', '2020-05-26 21:42:28');

-- --------------------------------------------------------

--
-- Table structure for table `premium_instagram`
--

CREATE TABLE `premium_instagram` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_instagram`
--

INSERT INTO `premium_instagram` (`id`, `username`, `reg_date`) VALUES
(1, 'plosceac.alex', '2020-05-26 20:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `premium_youtube`
--

CREATE TABLE `premium_youtube` (
  `id` int(11) NOT NULL,
  `userLink` varchar(128) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premium_youtube`
--

INSERT INTO `premium_youtube` (`id`, `userLink`, `userName`, `reg_date`) VALUES
(1, 'https://www.youtube.com/channel/UCG5O7HXNN_dKsgD22GoiGFw', 'Motor(Bike)', '2020-05-26 21:43:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `normal_instagram`
--
ALTER TABLE `normal_instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normal_youtube`
--
ALTER TABLE `normal_youtube`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_instagram`
--
ALTER TABLE `premium_instagram`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `premium_youtube`
--
ALTER TABLE `premium_youtube`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `normal_instagram`
--
ALTER TABLE `normal_instagram`
  MODIFY `id` int(64) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `normal_youtube`
--
ALTER TABLE `normal_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `premium_instagram`
--
ALTER TABLE `premium_instagram`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `premium_youtube`
--
ALTER TABLE `premium_youtube`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
