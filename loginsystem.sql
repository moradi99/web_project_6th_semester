-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2023 at 07:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Pass` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Pass`, `email`, `id`) VALUES
('654321', 'musawerdelair2020@gmail.com', 8),
('7654321', 'Musawerdelair2001@gmail.com', 9),
('654321', 'musawerdelair2001@gmail.com', 11);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Username` varchar(20) NOT NULL,
  `JobTitle` varchar(50) NOT NULL,
  `Company` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `coverletter` text NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Username`, `JobTitle`, `Company`, `Address`, `phonenumber`, `coverletter`, `id`) VALUES
('iiii', 'jfj', 'mudh', 'jjf', '9999999999', 'kjkljf\r\n\r\ndddddddddd', 2),
('iiii', 'jfj', 'mudh', 'jjf', '9999999999', 'kjkljf\r\n\r\ndddddddddd', 3);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `Lastname`, `Email`, `Gender`, `Username`, `pass`, `id`) VALUES
('', '', 'Musawerdelair2001@gmail.com', 'Male', '', '7654321', 12),
('', '', 'mm@gmail.com', 'JJJ', '', 'JJJJJJJJJ', 13),
('', '', 'musawerdelair2001@gmail.com', 'male', '', '654321', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
