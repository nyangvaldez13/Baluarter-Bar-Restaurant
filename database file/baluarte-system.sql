-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 12:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baluarte-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `bs_loyalty`
--

CREATE TABLE `bs_loyalty` (
  `loyalty_id` varchar(25) NOT NULL,
  `l_firstname` varchar(25) NOT NULL,
  `l_lastname` varchar(25) NOT NULL,
  `l_card` varchar(20) NOT NULL,
  `no_of_visits` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bs_loyalty`
--

INSERT INTO `bs_loyalty` (`loyalty_id`, `l_firstname`, `l_lastname`, `l_card`, `no_of_visits`, `created_at`) VALUES
('01lylb3', 'Jennie', 'Kim', '20230424', 0, '2023-04-24 12:29:12'),
('02lylb3', 'Lalisa', 'Manoban', '20230425', 0, '2023-04-24 12:29:53'),
('03lylb3', 'Chaeyoung', 'Park', '20230426', 0, '2023-04-24 12:32:19'),
('04lylb3', 'Jisoo', 'Kim', '20230427', 0, '2023-04-24 12:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `bs_user`
--

CREATE TABLE `bs_user` (
  `user_id` varchar(200) NOT NULL,
  `user_firstname` varchar(200) NOT NULL,
  `user_lastname` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `security_code` varchar(20) NOT NULL,
  `card_nickname` varchar(20) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bs_user`
--

INSERT INTO `bs_user` (`user_id`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `card_number`, `security_code`, `card_nickname`, `created_at`) VALUES
('001b3', 'Juan', 'Dela Cruz', 'jdelacruz@mail.com', 'DelaCruz001b3', '402-664-842-001', 'weFhxx_01', 'juancutee', '2023-04-23 13:44:48.783506'),
('002b3', 'Walter', 'White', '', 'WhiteW002b3', '402-664-842-002', 'weFhxx_02', 'heisenberg', '2023-04-23 14:35:56.162938'),
('003b3', 'Jessie', 'Pinkman', 'jpinkman@mail.com', 'PinkmanJ003b3', '402-664-842-003', 'weFhxx_03', 'heisenberg', '2023-04-23 14:45:12.447291'),
('004b3', 'Michael', 'Scoffield', 'mscoffield@mail.com', 'ScoffieldM004b3', '402-664-842-004', 'weFhxx_04', 'kael', '2023-04-24 11:29:53.929345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bs_user`
--
ALTER TABLE `bs_user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
