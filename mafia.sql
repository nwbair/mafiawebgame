-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 05:38 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mafia`
--
CREATE DATABASE IF NOT EXISTS `mafia` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mafia`;

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `tid` int(11) NOT NULL,
  `topictype` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sitestats`
--

CREATE TABLE `sitestats` (
  `admins` text NOT NULL,
  `admins_ip` text NOT NULL,
  `cars` text NOT NULL,
  `hdo` text NOT NULL,
  `id` int(11) NOT NULL,
  `mods` text NOT NULL,
  `mods_ip` text NOT NULL,
  `ranks` text NOT NULL,
  `wealth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `date` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `locked` char(1) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `topicstate` char(0) NOT NULL,
  `type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userip` varchar(50) NOT NULL DEFAULT '',
  `signup_ip` varchar(255) NOT NULL,
  `login_count` varchar(10) NOT NULL DEFAULT '0',
  `login_ip` text NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `account_type` char(1) NOT NULL DEFAULT '1',
  `password` varchar(50) NOT NULL DEFAULT '',
  `sitestate` char(1) NOT NULL DEFAULT '0',
  `signup` varchar(255) NOT NULL DEFAULT '',
  `money` varchar(20) NOT NULL DEFAULT '1500',
  `exp` varchar(20) NOT NULL DEFAULT '0',
  `rank` char(2) DEFAULT '0',
  `health` char(3) NOT NULL DEFAULT '100',
  `points` varchar(10) NOT NULL DEFAULT '0',
  `mail` varchar(100) NOT NULL DEFAULT '',
  `lastactive` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitestats`
--
ALTER TABLE `sitestats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
