-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2021 at 02:04 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idiscuss`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(8) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_discription` varchar(255) NOT NULL,
  `createAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_discription`, `createAt`) VALUES
(1, 'Python', 'Python is an interpreted high-level general-purpose programming language. Its design philosophy emphasizes code readability with its use of significant indentation', '2021-12-15 10:51:55'),
(2, 'JavaScript', 'JavaScript, often abbreviated JS, is a programming language that is one of the core technologies of the World Wide Web, alongside HTML and CSS.', '2021-12-15 10:52:38'),
(3, 'Django', 'This is a Python framework.', '2021-12-15 14:47:16'),
(4, 'Flask', 'This is another Python Framework.', '2021-12-15 14:47:16');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(8) NOT NULL,
  `comment_content` text NOT NULL,
  `thread_id` int(8) NOT NULL,
  `comment_by` int(8) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES
(1, 'ssss', 1, 0, '2021-12-16 15:11:50'),
(3, 'new comment', 1, 0, '2021-12-16 16:25:23'),
(4, 'qqqqqqqqqq', 1, 0, '2021-12-16 16:27:47'),
(5, 'qqqqqqqqqq', 1, 0, '2021-12-16 16:30:38'),
(6, 'add', 1, 0, '2021-12-16 16:30:42'),
(7, 'add', 1, 0, '2021-12-16 16:34:49'),
(8, 'add', 1, 0, '2021-12-16 16:35:16'),
(9, 'add', 1, 0, '2021-12-16 16:40:57'),
(10, 'add', 1, 0, '2021-12-16 16:41:32'),
(11, 'add', 1, 0, '2021-12-16 16:42:07'),
(12, 'add', 1, 0, '2021-12-16 16:45:20'),
(13, 'add', 1, 0, '2021-12-16 16:45:44'),
(14, 'add', 1, 0, '2021-12-16 16:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `thread_id` int(7) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_desc` text NOT NULL,
  `thread_cat_id` int(7) NOT NULL,
  `thread_user_id` int(7) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`thread_id`, `thread_title`, `thread_desc`, `thread_cat_id`, `thread_user_id`, `timestamp`) VALUES
(1, 'unable to install by audio', 'i am not able to install it by audio', 1, 0, '2021-12-15 18:30:01'),
(2, 'Not able to use Python', 'please Help me', 1, 0, '2021-12-15 18:54:16'),
(3, 'edfdfdf', 'dfdfd', 1, 0, '2021-12-16 13:54:03'),
(6, 'new title', ' new desc', 2, 0, '2021-12-16 13:57:27'),
(9, 'qqqq', ' qqqq', 2, 0, '2021-12-16 14:05:40'),
(10, 'qqqq', ' qqqq', 2, 0, '2021-12-16 14:19:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(8) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_cpassword` varchar(20) NOT NULL,
  `createdAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_cpassword`, `createdAt`) VALUES
(1, 'abc', 'abc@gmail.com', 'abc123', 'abc123', '2021-12-16 17:43:17'),
(2, 'qqq', 'qqq@gmail.com', 'a', 'a', '2021-12-16 18:19:12'),
(3, 'a', 'a@a.com', 'a', 'a', '2021-12-16 18:20:58'),
(5, 'praju', 'praju@gmail.com', 'praju', 'praju', '2021-12-16 18:32:42'),
(6, 'praju', 'praju@gmail.com', 'a', 'a', '2021-12-16 18:33:02'),
(7, 'praju', 'praju@gmail.com', 'a', 'a', '2021-12-16 18:33:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `thread_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
