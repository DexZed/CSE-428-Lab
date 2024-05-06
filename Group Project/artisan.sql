-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2024 at 04:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artisan`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `username`, `comment`, `created_at`) VALUES
(80, 5, 'toasty genie', 'username update', '2024-04-26 14:20:59'),
(81, 5, 'Shadman Sakib', 'username update 1', '2024-04-26 14:23:25'),
(82, 6, 'Shadman Sakib', 'new comment\r\n', '2024-05-04 09:22:18'),
(83, 9, 'toasty genie', 'updated ui', '2024-05-04 14:27:14'),
(84, 9, 'tester1', 'new change', '2024-05-04 16:40:00'),
(89, 9, 'toasty genie', 'test', '2024-05-04 18:57:21'),
(90, 9, 'toasty genie', 'realtime update\r\n', '2024-05-04 18:57:44'),
(91, 9, 'toasty genie', '2', '2024-05-04 19:00:27'),
(92, 9, 'Shadman Sakib', 'checking realtime for both users', '2024-05-04 19:01:39'),
(93, 8, 'toasty genie', 'test', '2024-05-04 19:18:18'),
(94, 9, 'Shadman Sakib', 'its done, 5s interval', '2024-05-04 19:18:59'),
(95, 8, 'toasty genie', 'no u', '2024-05-04 19:21:23'),
(96, 8, 'toasty genie', '5s?', '2024-05-04 19:23:21'),
(97, 8, 'toasty genie', '10s?\r\n', '2024-05-04 19:24:15'),
(98, 4, 'toasty genie', 'new', '2024-05-04 19:25:17'),
(99, 6, 'toasty genie', 'new', '2024-05-04 19:25:32'),
(100, 9, 'toasty genie', 'fetching is bugged', '2024-05-04 20:10:46'),
(101, 8, 'toasty genie', 'a', '2024-05-05 12:33:08'),
(102, 6, 'Shadman Sakib', 'b', '2024-05-05 12:57:28'),
(103, 4, 'toasty genie', '123', '2024-05-05 13:17:08'),
(104, 4, 'toasty genie', '456', '2024-05-05 13:23:04'),
(105, 4, 'toasty genie', '789', '2024-05-05 13:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `access` varchar(255) NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `upload_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `access`, `image_url`, `upload_time`) VALUES
(4, 'test', 'testing 123', 'public', 'uploads/ai.jpg', '2024-04-21 14:58:06'),
(5, 'test 2', 'testing 456', 'exclusive', 'uploads/ai1.png', '2024-04-21 15:05:08'),
(6, 'test 3', 'testing 789', 'public', 'uploads/intro.png', '2024-04-21 15:06:53'),
(7, 'Test 4', 'lorem ispum...', 'exclusive', 'uploads/3.png', '2024-04-22 06:25:30'),
(8, 'Test 5', 'testing changes', 'public', 'uploads/4.png', '2024-04-22 06:30:33'),
(9, 'Demo', 'Lorem', 'public', 'uploads/6.jpeg', '2024-04-22 08:50:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `user_type`) VALUES
('Shadman Sakib', 'shadman.sakib11@northsouth.edu', '$2y$10$cGZiXMy9eL8C6nDRIoRlDuHiw.Lm6Ja5xd42tLycdjMJPDKP4FBY2', 2),
('tester1', 'sadmansakib@gmail.com', '$2y$10$8kgSfVtP/79dBo4qjAY7NuT6uLDk1KJmfEdD9wQmMhFYg47K5mBmq', 1),
('toasty genie', 'toastthegenie@gmail.com', '$2y$10$4jikWJaunIBw6//fs3NzK.8sMfE.yzi2QPCg/7J0tPZD/r6PPR/1i', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
