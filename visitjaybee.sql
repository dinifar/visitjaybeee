-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 02:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visitjaybee`
--

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(60) NOT NULL,
  `category` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `image`, `category`, `link`) VALUES
(42, 'Danga Bay Funfair', 'funfair.jpeg', 'Entertainment', 'https://shorturl.at/bhtyN'),
(45, 'Legoland', 'legoland.jpg', 'Entertainment', 'https://www.legoland.com.my/'),
(46, 'Skyscape Komtar JBCC', 'sky.jpg', 'Entertainment', 'https://shorturl.at/eELRV'),
(47, 'Blue Ice Skating Rink', 'skating.jpg', 'Entertainment', 'https://shorturl.at/isDY6'),
(48, 'Austin Heights Water & Adventure Park', 'austin.jpg', 'Entertainment', 'https://www.funtime.my/'),
(49, 'X Park Sunway Iskandar', 'xpark.jpg', 'Entertainment', 'https://www.xparkmalaysia.com/Index.aspx'),
(50, 'Jb Lost In The Haunted House', 'lost.jpg', 'Entertainment', 'https://lostinjb.com/en'),
(51, 'Dinosaurs Alive Water Theme Park', 'ksl.jpg', 'Entertainment', 'https://shorturl.at/knsH0'),
(53, 'Bazar Karat', 'bazar.jpg', 'Shopping Place', 'https://sikidang.com/pasar-karat-johor/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneNum` int(11) NOT NULL,
  `profileImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`, `phoneNum`, `profileImg`) VALUES
(1, 'qarin', 'qarin123', 'Nur Qarin Sofiya', 1345423565, 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
