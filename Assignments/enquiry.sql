-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2018 at 01:58 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `e_table`
--

CREATE TABLE `e_table` (
  `fname` varchar(256) NOT NULL,
  `lname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `postcode` int(255) NOT NULL,
  `product` varchar(256) NOT NULL,
  `date` varchar(255) NOT NULL,
  `duration` int(255) NOT NULL,
  `comment` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_table`
--

INSERT INTO `e_table` (`fname`, `lname`, `email`, `phone`, `address`, `city`, `state`, `postcode`, `product`, `date`, `duration`, `comment`) VALUES
('Jeff', 'Green', 'r@gmail.com', 1234567890, 'My house', 'Kuching', 'Sarawak', 98765, '911', '0000-00-00', 10, 'nid hlp');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
