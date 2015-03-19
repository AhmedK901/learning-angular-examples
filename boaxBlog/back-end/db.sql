-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 19, 2015 at 11:13 PM
-- Server version: 5.5.38
-- PHP Version: 5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `boax_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
`post_id` int(11) NOT NULL,
  `post_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `post_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `post_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_author` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_name`, `post_title`, `post_content`, `post_created_at`, `post_author`) VALUES
(1, 'first_post', 'First Post', '<p>This is a content for a post</p>', '2015-03-11 20:13:30', 'Ahmed Alkatheeri'),
(2, 'another_post', 'Another post', '<p>This is another post content!</p>\r\n\r\n<p>However, you can edit this area.</p>', '2015-03-11 20:53:21', 'Ahmed Alkatheeri'),
(3, 'the-game-is-out', 'The game is out!', 'Your game is out!', '0000-00-00 00:00:00', 'Ahmed Alkatheeri'),
(4, 'tic-tac-toe.2-beta-0-3-6-released', 'Tic Tac Toe 2beta.0.3.6 is released', '<p>Just released the beta version</p>\n<strong>Download from GitHub!</strong>', '2015-03-18 20:04:23', 'Ahmed Alkatheeri'),
(5, 'demo-topic', 'Demo topic', '<p>This is a testing topic</p>', '2015-03-18 20:08:07', 'Ahmed Alkatheeri'),
(6, 'another-demo', 'Another demo', '...', '2015-03-18 20:09:09', 'Ahmed Alkatheeri'),
(7, 'testing', 'Testing', 'Just a post', '2015-03-19 21:51:55', 'John'),
(8, 'just-a-post', 'Just a post', 'nothing!', '2015-03-19 22:10:01', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
`setting_id` int(11) NOT NULL,
  `setting_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `setting_value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`setting_id`, `setting_key`, `setting_value`) VALUES
(1, 'blog_title', 'Boax Blog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
 ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
 ADD PRIMARY KEY (`setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
MODIFY `setting_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
