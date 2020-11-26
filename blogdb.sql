-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 07:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `seo_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `seo_title`) VALUES
(1, 'Bootstrap', 'bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `has_category`
--

CREATE TABLE `has_category` (
  `post` int(11) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `seo_title` text NOT NULL,
  `content` text NOT NULL,
  `author` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `seo_title`, `content`, `author`, `date`) VALUES
(1, 'First paper', 'Nice title for seo', 'Some reallly really nice text abouyt something ahat is realy really nice', 0, '0000-00-00 00:00:00'),
(2, 'Second', 'SEO sec title', 'What is ghoin on here this is a nice topic', 2, '2020-11-11 09:50:52'),
(4, 'Third', 'Nice third', '', 1, '2020-11-11 06:49:18'),
(7, 'Forth', 'Fiorth nice', '', 1, '2020-11-11 06:51:54'),
(8, 'asdasd', 'asd', 'asdasdasdasd', 1, '2020-11-11 06:55:08'),
(9, 'asdasd2', 'asd2', 'asdasdasdasd2', 1, '2020-11-11 07:00:08'),
(78, 'Sometyhing', 'whoooo', 'Some bad text', 1, '2020-11-11 07:05:49'),
(93, 'John', 'Doe', 'casdasd asdasd ascasdasdasd', 0, '2020-11-24 11:24:07'),
(94, 'John', 'Doe', 'casdasd asdasd ascasdasdasd2', 0, '2020-11-24 11:25:00'),
(95, 'John', 'Doe', 'casdasd asdasd ascasdasdasd2', 0, '2020-11-24 11:25:16'),
(96, 'sdf', 'dfsdfsdfsdf', 'sdsdfsdfsdfsdfsdfsdfsdfsdf', 0, '2020-11-24 18:10:28'),
(97, 'Old Boat', 'Fucken boat', 'Folly words widow one downs few age every seven. If miss part by fact he park just shew. Discovered had get considered projection who favourable. Necessary up knowledge it tolerably. Unwilling departure education is be dashwoods or an. Use off agreeable law unwilling sir deficient curiosity instantly. Easy mind life fact with see has bore ten. Parish any chatty can elinor direct for former. Up as meant widow equal an share least. ', 0, '2020-11-24 18:11:31'),
(98, 'asd', 'asd', 'asdasdasdasd', 0, '2020-11-24 18:14:09'),
(99, '', '', '', 0, '2020-11-24 18:56:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPass` varchar(128) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPass`, `date`) VALUES
(1, 'Caty Bob', 'caty@tvnet.lv', 'NiceCatty789', 'fgg54gfdg45g545gtrgf', '2020-11-23 17:41:26'),
(2, 'Habib', 'khgabib', 'habibv@tv.lv', '$2y$10$zA8EVqK03puffEgaZDdmOO2pDJ.jvhD922zNZOB8zzxipKNr4W2iG', '2020-11-23 17:41:26'),
(3, 'dogy dgh', 'diigyyyy', 'dog@dog.com', '$2y$10$EQOTLAWfJxy8.a76xPve.OSENm1jeUOzpGPq72bymcE9chkyyTy8i', '2020-11-23 17:41:26'),
(4, 'asd', 'asd', 'asd@asd.lv', '$2y$10$XWvTuu8pcUvBLXayC0.CsehquyrXY386DZ6OmUAyXwDNATqxu7oU2', '2020-11-23 17:41:26'),
(5, 'zxc', 'zxc', 'zxc@zxc.lv', '$2y$10$/slzCOoXcU21CodCnosLvOFyux8xZul5jEJ4BAT4LnzkOxEcIq6Ma', '2020-11-23 17:41:26'),
(6, 'cactuss', 'lilcactus', 'cacatus@email.com', '$2y$10$mTI4uoa075X0WzJyYYQt4emDjyiRnYe77PlOcHHapd7SOMeyq/Pvi', '2020-11-23 17:42:15'),
(7, 'kaktus2', 'kaktus', 'kaktus@gm.lv', '$2y$10$q1/BgWLlITeuMc52Diwt.eqLzylygoZ0DFQUzBPCZyWDJ/HFXzsFG', '2020-11-23 17:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
