-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2024 at 05:47 AM
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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(30) NOT NULL,
  `comment` text NOT NULL,
  `gender` enum('female','male','other') NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `name`, `email`, `website`, `comment`, `gender`, `reg_date`) VALUES
(1, 'John', 'john@example.com', 'Doe', '', 'female', '2024-01-30 04:51:24'),
(2, 'Mamadou', 'mamadou@example.com', 'Bah', '', 'female', '2024-01-30 05:04:09'),
(4, '', '', '', '', 'female', '2024-01-30 05:18:01'),
(5, 'Mamadou Djouhe Bah', 'mdbah@student.apc.edu.ph', 'https://socitcloud.apc.edu.ph/', '', 'female', '2024-01-30 05:19:17'),
(6, '', '', '', '', '', '2024-02-02 04:42:00'),
(7, 'Mamadou Djouhe Bah', 'mdbah@student.apc.edu.ph', 'https://socitcloud.apc.edu.ph/', 'test', 'male', '2024-02-02 04:42:11'),
(8, '', '', '', '', '', '2024-02-02 04:44:31'),
(9, 'Mamadou Djouhe Bah', 'mdbah@student.apc.edu.ph', 'https://socitcloud.apc.edu.ph/', 'test', 'male', '2024-02-02 04:44:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
