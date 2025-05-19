-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2025 at 06:23 AM
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
-- Database: `employee`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `department_id` int(11) NOT NULL,
  `department_name` text NOT NULL,
  `emp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(11) NOT NULL,
  `emp_firstname` text NOT NULL,
  `emp_lastname` text NOT NULL,
  `position` text NOT NULL,
  `salary` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `telephone` int(11) NOT NULL,
  `gender` text NOT NULL,
  `hired_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_firstname`, `emp_lastname`, `position`, `salary`, `address`, `telephone`, `gender`, `hired_date`) VALUES
(435, 'HAKIZIMANA', 'damour', 'security', '50,000', 'kicukiro,kagarama', 78998292, '', '2025-05-29');

-- --------------------------------------------------------

--
-- Table structure for table `gmanager`
--

CREATE TABLE `gmanager` (
  `Gmanager_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gmanager`
--

INSERT INTO `gmanager` (`Gmanager_id`, `username`, `password`) VALUES
(121, 'NSHUTI ', '12345'),
(121, 'NSHUTI ', '12345'),
(11, 'KARIZA', 'kate');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departement`
--
ALTER TABLE `departement`
  ADD CONSTRAINT `departement_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employees` (`emp_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
