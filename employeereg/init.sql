-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3008
-- Generation Time: Feb 20, 2024 at 06:30 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_name` varchar(255) DEFAULT NULL,
  `employee_id` int(100) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_name`, `employee_id`, `department`, `dob`, `gender`, `designation`, `salary`) VALUES
('Rashmitha', 6, 'Finance', '2024-02-16', 'female', 'technical', 3000000),
('Rashmitha', 16, 'Finance', '2024-02-08', 'female', 'werrt', 30000000),
('Rashmitha', 16, 'Finance', '2024-02-08', 'female', 'werrt', 30000000),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
(NULL, 0, '', '0000-00-00', '', '', 0),
('srashmitha', 89, 'IT', '2024-02-11', 'female', 'technical', 1234566);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
