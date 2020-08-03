-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 10:47 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `check_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

-- --------------------------------------------------------

--
-- Table structure for table `checkout_tab`
--

CREATE TABLE `checkout_tab` (
  `email` varchar(30) COLLATE utf32_bin NOT NULL,
  `phone` int(11) NOT NULL,
  `names` varchar(50) COLLATE utf32_bin NOT NULL,
  `address` varchar(100) COLLATE utf32_bin NOT NULL,
  `city` varchar(20) COLLATE utf32_bin NOT NULL,
  `country` varchar(20) COLLATE utf32_bin NOT NULL,
  `zip` int(11) NOT NULL,
  `v1` int(11) NOT NULL,
  `v2` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `checkout_tab`
--

INSERT INTO `checkout_tab` (`email`, `phone`, `names`, `address`, `city`, `country`, `zip`, `v1`, `v2`, `total`) VALUES
('dineshvenkatm@gmail.com', 2147483647, 'Dinesh Kumar Sai M', '353,Chittoor High Road,Amirthapuram,Tiruttani', 'Thiruvallur', 'India', 631209, 2, 4, 429);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
