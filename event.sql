-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2022 at 04:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `event_name` varchar(255) DEFAULT NULL,
  `event_venue` varchar(255) DEFAULT NULL,
  `event_details` longtext DEFAULT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `sport` int(11) DEFAULT NULL,
  `event_fee` float(10,2) DEFAULT NULL,
  `player_fee` float(10,2) DEFAULT NULL,
  `visitor_fee` float(10,2) DEFAULT NULL,
  `event_image` longtext DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `event_venue`, `event_details`, `event_date`, `sport`, `event_fee`, `player_fee`, `visitor_fee`, `event_image`, `created_at`) VALUES
(1, 'อีเว้น 1', 'rajkot', 'lorem lipsum content', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(2, 'lorem lipsum 1', 'rajkot', 'lorem lipsum content 1', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(3, 'lorem lipsum 2', 'rajkot', 'lorem lipsum content 2', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(4, 'lorem lipsum 3', 'rajkot', 'lorem lipsum content 3', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(5, 'lorem lipsum 4', 'rajkot', 'lorem lipsum content 4', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(6, 'lorem lipsum 5', 'rajkot', 'lorem lipsum content 5', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(7, 'lorem lipsum 6', 'rajkot', 'lorem lipsum content 6', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(8, 'lorem lipsum 7', 'rajkot', 'lorem lipsum content 7', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(9, 'lorem lipsum 8', 'rajkot', 'lorem lipsum content 8', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(10, 'lorem lipsum 9', 'rajkot', 'lorem lipsum content 9', '2020-03-18', 0, 100.00, 0.00, 0.00, '1584160487_event-img.jpg', '2020-03-14 10:04:47'),
(11, 'lorem lipsum 0', 'rajkot', 'lorem lipsum content 0', '2020-03-16', 1, 0.00, 1.00, 2.00, '1584160487_event-img.jpg', '2020-03-16 11:57:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
