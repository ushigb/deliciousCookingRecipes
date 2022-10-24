-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24 окт 2022 в 17:43
-- Версия на сървъра: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deliciouscookingrecipes`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `city` varchar(250) NOT NULL,
  `postCode` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `userName` varchar(150) NOT NULL,
  `password` varchar(300) NOT NULL,
  `userType` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'No Active',
  `profilePic` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `city`, `postCode`, `email`, `userName`, `password`, `userType`, `status`, `profilePic`) VALUES
(3, 'Ivan', 'Chipriyanov', 'Gabrovo', '5300', 'ushi@abv.bg', 'ushi2203', '5d172597b9a4d6dcc6b2eae523f9e4aa', 'user', 'No Active', ''),
(4, 'Ð˜Ð²Ð°Ð½', 'Ð§Ð¸Ð¿Ñ€Ð¸ÑÐ½Ð¾Ð²', 'Ð“Ð°Ð±Ñ€Ð¾Ð²Ð¾', '5300', 'ushi15@abv.bg', 'Ushi', '5d172597b9a4d6dcc6b2eae523f9e4aa', 'Admin', 'Active', ''),
(5, 'Ivan', 'Chipriyanov', 'Gabrovo', '5300', 'ushi15@abv.bg', 'Ushi1', '5d172597b9a4d6dcc6b2eae523f9e4aa', 'user', 'No Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
