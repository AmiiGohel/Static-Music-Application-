-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2024 at 09:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_app_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintbl`
--

CREATE TABLE `logintbl` (
  `EMAIL` varchar(162) NOT NULL,
  `CONTACTNO` bigint(20) NOT NULL,
  `PASSWORD` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logintbl`
--

INSERT INTO `logintbl` (`EMAIL`, `CONTACTNO`, `PASSWORD`) VALUES
('23msit013@charusat.edu.in', 6352605403, '123456'),
('amigohel303@gmail.com', 916352605403, '1234@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logintbl`
--
ALTER TABLE `logintbl`
  ADD PRIMARY KEY (`EMAIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
