-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2021 at 09:34 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `semoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_company`
--

CREATE TABLE `user_company` (
  `id_user_company` varchar(20) NOT NULL,
  `id_company` varchar(20) NOT NULL,
  `user_fullname` text NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `user_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_company`
--

INSERT INTO `user_company` (`id_user_company`, `id_company`, `user_fullname`, `user_phone`, `user_email`, `username`, `passwd`, `user_type`) VALUES
('user_001', '1', 'Yulia Wulandari', '085156430801', 'pinkmylovely@gmail.com', 'wulandariy', '12345', ''),
('user_002', '1', 'Kezia', '085156430801', 'pinkmylovely@gmail.com', 'KEZIA.3311', '1234566', ''),
('user_003', '1', 'Cyntya', '085156430801', 'pinkmylovely@gmail.com', 'cyntya.331', '12345', ''),
('user_004', '1', 'silvi', '085156430801', 'pinkmylovely@gmail.com', 'ipiikss', '12345', ''),
('user_005', '1', 'Yulia Wulandari', '085156430801', 'pinkmylovely@gmail.com', 'KEZIA.3311', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_company`
--
ALTER TABLE `user_company`
  ADD PRIMARY KEY (`id_user_company`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
