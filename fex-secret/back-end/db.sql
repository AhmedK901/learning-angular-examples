-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 23, 2015 at 12:35 AM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `fex_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

CREATE TABLE `secrets` (
`secret_id` int(11) NOT NULL,
  `secret_content` text COLLATE utf8_unicode_ci NOT NULL,
  `secret_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `secrets`
--

INSERT INTO `secrets` (`secret_id`, `secret_content`, `secret_created_at`) VALUES
(1, 'You are awesome!', '2015-03-20 00:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
`user_id` int(11) NOT NULL,
  `user_email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `user_pass` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_email`, `user_pass`, `user_token`) VALUES
(1, 'example@example.com', '44fbfffe5ffc7618de5dd2c3c464f295', 'otw97fl91nv6h5ya6ewpcp8xfk6eogdpmac2qtldj6lrqrifmx'),
(2, 'ahmed@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'otw97fl91nv6h5ya6ewpcp8xfk6eogdpmac2qtldj6lrqrifmx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `secrets`
--
ALTER TABLE `secrets`
 ADD PRIMARY KEY (`secret_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `secrets`
--
ALTER TABLE `secrets`
MODIFY `secret_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
