-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2026 at 08:03 AM
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
-- Database: `php_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `fname` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `number` int(15) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`fname`, `uname`, `email`, `number`, `password`) VALUES
(NULL, 'om', 'hari@gmail.com', 2147483647, '$2y$10$n0AxfFmCaYY.608rps0hSetvCqq9.essUDegGtnrW2KrorPj5buLS'),
(NULL, 'om', 'hari@gmail.com', 2147483647, '$2y$10$wdCjYOYw1ZvGWZmTR7lCvO8iU7QxjLPeTPEv285ZknLSB7sOYAwh.'),
(NULL, 'jaiswal', 'yug@gmail.com', 2147483647, '$2y$10$69zT.o8PwHIGbM83WKrDq.5qmDWNBvp42sneVrDlIU8IVcMRVhzR2'),
('yug', 'jaiswall', 'yug@gmail.com', 2147483647, '$2y$10$p5AEUpR4vBE72rGI/CnGb.d7b0X9Sie8u41qngHdal/VcagXt6ZgG');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
