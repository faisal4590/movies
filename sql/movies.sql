-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2019 at 07:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `movie_id`, `name`, `comment`, `comment_date`) VALUES
(1, 6, 'faisal4590', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum avai', '2019-02-01'),
(2, 3, 'salman', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.There are many variations of passages of Lorem Ipsum available.', '2019-02-01'),
(3, 3, '', 'This beloved McDonald\'s employee is retiring after 32 years at the restaurant, where he paved the way for others with Down syndrome', '2019-02-01'),
(4, 3, '', 'This handy tool helps you create dummy text for all your layout needs.', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `rating` int(11) NOT NULL,
  `ticket_price` double NOT NULL,
  `country` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `description`, `release_date`, `rating`, `ticket_price`, `country`, `genre`, `photo`) VALUES
(2, 'Swiss Army Man', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', '2010-02-20', 4, 1233, 'Australia', 'Biography', 'm1.jpg'),
(3, 'Me Before you', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.', '2017-02-11', 3, 4122, 'America', 'Romance', '22.jpg'),
(4, 'Deadpool', 'DeadpoolDeadpoolDeadpoolDeadpoolDeadpoolDeadpoolDeadpoolDeadpoolDeadpoolDeadpool', '2015-01-29', 5, 3122, 'England', 'Action', 'm3.jpg'),
(5, 'Rogue One', 'Rogue OneRogue OneRogue OneRogue OneRogue OneRogue OneRogue OneRogue OneRogue One', '2006-02-11', 2, 1231, 'Germany', 'Horror', 'm4.jpg'),
(6, 'Storks', 'StorksStorksStorksStorksStorksStorksStorksStorksStorksStorks', '2011-02-19', 5, 4212, 'France', 'Animation', 'm5.jpg'),
(7, 'Hopeless', 'HopelessHopelessHopelessHopelessHopelessHopelessHopelessHopelessHopelessHopeless', '1999-09-16', 3, 3121, 'Canada', 'Sci-fi', 'm6.jpg'),
(8, 'Mechanic', 'MechanicMechanicMechanicMechanicMechanicMechanic', '2017-02-26', 4, 4209, 'America', 'Action', 'm7.jpg'),
(9, 'Timeless', 'TimelessTimelessTimelessTimelessTimelessTimelessTimelessTimelessTimelessTimelessTimelessTimeless', '2010-02-07', 4, 3122, 'India', 'Vintage', 'm8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'faisal4590', 'optimizedfaisal42@gmail.com', 'googlemaniac420'),
(2, 'tamim', 'tamim@gmail.com', 'tamim'),
(3, 'admin', 'admin@gmail.com', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
