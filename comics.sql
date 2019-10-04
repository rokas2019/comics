-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2019 at 07:41 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comics`
--

-- --------------------------------------------------------

--
-- Table structure for table `pinigai`
--

CREATE TABLE `pinigai` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `earn` int(225) NOT NULL,
  `spend` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `pinigai`
--

INSERT INTO `pinigai` (`id`, `title`, `earn`, `spend`) VALUES
(1, 'Avengers Endgame', 2796, 356),
(2, 'Avengers Infinity War', 2048, 400),
(3, 'The Avengers', 1519, 220),
(5, 'Black Panther', 1347, 200),
(6, 'Avengers Age of Ultron', 1405, 100);

-- --------------------------------------------------------

--
-- Table structure for table `topheroes`
--

CREATE TABLE `topheroes` (
  `id` int(11) NOT NULL,
  `hero` text COLLATE utf8_lithuanian_ci NOT NULL,
  `movies` int(20) NOT NULL,
  `company` text COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `topheroes`
--

INSERT INTO `topheroes` (`id`, `hero`, `movies`, `company`) VALUES
(1, 'Batman', 12, 'DC'),
(2, 'Superman', 8, 'DC'),
(3, 'Wolverine', 7, 'Marvel'),
(4, 'Spider-Man', 7, 'Marvel'),
(5, 'Iron Man', 7, 'Marvel'),
(6, 'Professor X', 6, 'Marvel'),
(7, 'Mantego', 6, 'Marvel'),
(8, 'Mystique', 6, 'Marvel'),
(9, 'Jean Grey', 5, 'Marvel'),
(10, 'Storm', 5, 'Marvel'),
(11, 'Thor', 5, 'Marvel'),
(12, 'Captain America', 4, 'Marvel'),
(13, 'Rogue', 4, 'Marvel'),
(14, 'Cyclops', 4, 'Marvel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pinigai`
--
ALTER TABLE `pinigai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topheroes`
--
ALTER TABLE `topheroes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pinigai`
--
ALTER TABLE `pinigai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topheroes`
--
ALTER TABLE `topheroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
