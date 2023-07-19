-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 10:15 PM
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
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(20) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `phone`, `email`) VALUES
(1, '+265993505862', 'allancanto77@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `myportfolio`
--

CREATE TABLE `myportfolio` (
  `id` int(20) NOT NULL,
  `myportfolio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myportfolio`
--

INSERT INTO `myportfolio` (`id`, `myportfolio`) VALUES
(1, 'My name is Allan Kantombera, i am a self taught IoT Engineer and Robotics & Electronics Engineer. Am more interested in Robotics & Electronics engineering and also Internet of Things engineering (IoT). My journey started in 2018 when I start teaching myself more programming and robotics & electronics engineering. Since 2019 I have done couple of project in IoT engineering, Robotics & Electronics and also web development, person projects and group projects.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(20) NOT NULL,
  `smoke_detector` text NOT NULL,
  `solar_tracker` text NOT NULL,
  `music_site` text NOT NULL,
  `e-commerce` text NOT NULL,
  `egg_incubator` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `smoke_detector`, `solar_tracker`, `music_site`, `e-commerce`, `egg_incubator`) VALUES
(1, 'The Arduino Smoke Detector is a DIY project designed to detect smoke and alert users in the event of a potential fire. This project utilizes Arduino, a popular open-source electronics platform, to create a reliable and cost-effective smoke detection system.', 'This a Solar tracker, it an automated system that automatically Tilts the Solar panel towards where sunlight is coming from. this system improve efficiency by making the solar panels absorb light energy at 90` angle.', 'The Music Sharing and Discovery Website is a platform designed for music enthusiasts to discover, share, and explore a wide range of music genres and artists. It aims to create a community-driven space where users can connect with fellow music lovers, discover new music, and showcase their own musical interests.', 'The E-commerce Website is a robust online platform designed for businesses to sell products and services directly to customers over the internet. It provides a seamless shopping experience, enabling users to browse a wide range of products, make purchases securely, and manage their orders conveniently.', 'Egg Incubator, this a small egg incubator which is cheap and affordable to small holder farmers. It can also be powered by solar panel plus battery.');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(20) NOT NULL,
  `tools` text NOT NULL,
  `technologies` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `tools`, `technologies`) VALUES
(1, 'In Iot projects i use arduino microcontroller and supporting IDEs which i use to program the arduino.\nIn Robotics & Electronics projects i also use Arduino microcontroller.\nIn 3D modelling i use WINGS3D software and 3D Builder ..', 'In robotics is use C programming language which is the most used language in electronics projects');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
