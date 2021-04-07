-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 03:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web2021`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL,
  `full_name` varchar(750) NOT NULL,
  `username` varchar(750) NOT NULL,
  `email` varchar(750) NOT NULL,
  `password` varchar(750) NOT NULL,
  `message` varchar(750) NOT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`contact_id`, `full_name`, `username`, `email`, `password`, `message`, `date_add`) VALUES
(1, 'Flamur Gashi', 'Flag1', 'fg43409@ubt-uni.net', 'prizren', 'I want 3 pizza at street Ortakoll!', '2021-01-21 03:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `info_plus` varchar(500) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `date_add` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `title`, `description`, `info`, `info_plus`, `image`, `date_add`) VALUES
(1, 'ADDRESS:', '17 Awesome Street, Belgrade', 'SR 877900', '', '1611185805', '2021-01-20 23:33:17'),
(2, 'OPENING HOURS:', 'Monday - Friday......................................8:00am - 11:00 pm', 'Saturday - Sunday....................................8:00am - 10:00 pm', '', '1611185970', '2021-01-20 23:39:30'),
(5, 'WE ARE SOCIAL:', 'Feel free to check our social media', 'pages', '© 2017 - Fesco All Right Reserved', '1611186082', '2021-01-20 23:41:22'),
(6, 'Book a Tabel', 'Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.', 'CHOOSE A DATE:', '', '1611186945bacground3.jpg', '2021-01-20 23:52:04'),
(7, 'CHOOSE A TIME:', 'NUMBER OF PEOPLE:', '', '', '1611186841', '2021-01-20 23:54:01'),
(8, '08:00pm', '09:00pm', '10:00pm', '11:00am', '1611187020', '2021-01-20 23:57:00'),
(9, '2 People', '3 People', '4 People', '5 People', '1611187239', '2021-01-21 00:00:39'),
(10, 'Donec velit neque, auctor sit amet aliquam vel', 'ullamcorper sit amet ligula..............................', '', '', '1611188534', '2021-01-21 00:19:59'),
(11, 'CHICKEN', '$14', '', '', '1611189099', '2021-01-21 00:31:08'),
(12, 'HAWAIAN', '$18', '', '', '1611189421', '2021-01-21 00:36:31'),
(13, 'MARGHERITA', '$16', '', '', '1611189722', '2021-01-21 00:42:02'),
(14, 'MEXICANA', '$19', '', '', '1611189992', '2021-01-21 00:46:32'),
(15, '.......... DESSERTS ..........', 'PANNA COTTAS', '$14', '', '1611190746', '2021-01-21 00:57:04'),
(16, 'STICKY TOFFEE PUDDING', '$13', '', '', '1611191349', '2021-01-21 01:09:09'),
(17, 'BANOFFEE TIRAMISU', '$11', '', '', '1611191674', '2021-01-21 01:14:34'),
(18, 'CHOCOLATE HAZELNUT CHEESECAKE', '$7', '', '', '1611192764', '2021-01-21 01:32:44'),
(20, 'Our Menu', 'Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.', '.......... PIZZA ..........', '', '1611193472', '2021-01-21 01:42:32'),
(21, 'Our Specialities', 'Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla port or accumsan tincidunt', '', '', '1611194377bacground2.jpg', '2021-01-21 01:56:00'),
(22, 'Lasagna ............... 19.99$', '', '', '', '1612277715bacgroundflex2.jpg', '2021-01-21 02:06:35'),
(23, 'Lasagna ............... 19.99$', '', '', '', '1611195357bacgroundflex1.jpg', '2021-01-21 02:15:57'),
(24, 'Lasagna ............... 19.99$', '', '', '', '1611195704bacgroundflex3.jpg', '2021-01-21 02:21:44'),
(25, 'Lasagna ............... 19.99$', '', '', '', '1611195717bacgroundflex4.jpg', '2021-01-21 02:21:57'),
(26, '', '', '', '', '1611196093slider1.jpg', '2021-01-21 02:28:13'),
(27, '', '', '', '', '1611196452slider2.jpg', '2021-01-21 02:34:12'),
(28, '', '', '', '', '1611196580slider3.jpg', '2021-01-21 02:36:20'),
(29, '', '', '', '', '1611196589slider4.jpg', '2021-01-21 02:36:29'),
(30, 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices', 'posuere cubilia Curae.', 'Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elem', 'Curabitur aliquet quam id dui posuere blandit. Vivamus magna justo, lacinia eget consectetur sed, dictum porta.', '1611197187', '2021-01-21 02:46:27'),
(31, '', '', '', '', '1611197527bacground1.jpg', '2021-01-21 02:52:07'),
(32, '', '', '', '', '1611197815logo.png', '2021-01-21 02:56:55'),
(33, 'Making Food Taste Better', 'Italian Specialities', 'Vestibulum ante ipsura primis in faucibus orci luctues et ultracies posuere', 'cubilia curae', '1611198169icona.png', '2021-01-21 03:02:49'),
(34, 'Contact', 'Vestibulum ante ipsum in faucivus orciluctus', 'ADDRESS:', '17 Awesome Street, Belegrade', '1611198461', '2021-01-21 03:07:41'),
(35, 'SR 877900', 'OPENING HOURS:', 'Monday - Friday........................8:00am - 11:00 pm', 'Saturday - Sunday......................8:00am - 10:00 pm', '1611198662', '2021-01-21 03:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `name`, `surname`, `email`, `password`, `permission`) VALUES
(1, 'flag1', 'Flamur', 'Gashi', 'fg43409@ubt-uni.net', '$2y$10$om93et7kqnp5bFIqJbPSp.uHpe3yNnE47ovjOZnMtHybniD.8KZvm', 1),
(2, 'user', 'User', 'User', 'user@gmail.com', '$2y$10$g.iFpFifrO97m9Bq.vRoROOnd4YwWayRzV8izwbf6yrBUSPqIZu92', 0),
(3, 'user321', 'user', 'user', 'user@gmail.com', '$2y$10$SY2teVoQYZKAs4I0ZfBnGuWoeMpuvQL8LtQNz.tOVoZEsOAbNdeTy', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
