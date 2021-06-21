-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 يونيو 2021 الساعة 09:04
-- إصدار الخادم: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `first_project`
--

-- --------------------------------------------------------

--
-- بنية الجدول `articles`
--

CREATE TABLE `articles` (
  `blogid` int(11) NOT NULL,
  `blog_title` varchar(250) DEFAULT NULL,
  `blog_desc` text DEFAULT NULL,
  `blog_img` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT 'unpublished=>0  published=>1',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `articles`
--

INSERT INTO `articles` (`blogid`, `blog_title`, `blog_desc`, `blog_img`, `status`, `created_on`, `updated_on`) VALUES
(7, 'tetstsetstt', '<h3 style=\"color:#aaaaaa; font-style:italic\"><em><strong>dsadwqd</strong></em></h3>\r\n\r\n<h3><em><strong>sadcsacsacx</strong></em></h3>\r\n', 'assets/upload/blogimg/i31.png', 1, '2021-06-19 20:27:27', '2021-06-21 06:57:35'),
(9, 'asdasdsad aaaaa ', '<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong><em>Something short and leading about the collection below&mdash;its contents, the creator, etc. Make it short and sweet, but not too short so folks don&rsquo;t simply skip over it entirely.</em></strong></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong><em>Something short and leading about the collection below&mdash;its contents, the creator, etc. Make it short and sweet, but not too short so folks don&rsquo;t simply skip over it entirely.</em></strong></div>\r\n\r\n<div style=\"background:#eeeeee; border:1px solid #cccccc; padding:5px 10px\"><strong><em>Something short and leading about the collection below&mdash;its contents, the creator, etc. Make it short and sweet, but not too short so folks don&rsquo;t simply skip over it entirely.</em></strong></div>\r\n', 'assets/upload/blogimg/i3.png', 1, '2021-06-20 14:44:11', '2021-06-21 06:57:10'),
(10, 'testtest', '<p>Something short and leading about the collection below&mdash;its contents, the creator, etc. Make it short and sweet, but not too short so folks don&rsquo;t simply skip over it entirely.</p>\r\n', 'assets/upload/blogimg/i1.jpg', 1, '2021-06-20 14:44:35', '2021-06-21 06:53:52');

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=>active 0=>blocked '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `status`) VALUES
(1, 'admin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `blogid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
