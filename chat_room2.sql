-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016 年 1 朁E18 日 08:18
-- サーバのバージョン： 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat_room2`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `text` varchar(128) NOT NULL,
  `title_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `comments`
--

INSERT INTO `comments` (`id`, `modified`, `created`, `text`, `title_id`, `user_id`) VALUES
(2, '2016-01-14 11:06:17', '2016-01-09 09:42:05', 'ヤッホー', 2, 1),
(3, '2016-01-14 10:55:41', '2016-01-14 10:55:41', 'うあｗ', 2, 1),
(4, '2016-01-14 10:56:15', '2016-01-14 10:56:15', 'うううううああああああ', 2, 1),
(5, '2016-01-14 11:44:21', '2016-01-14 11:44:21', 'お腹すいた～', 3, 2),
(6, '2016-01-14 11:44:49', '2016-01-14 11:44:49', 'もっとだー！', 3, 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(11) NOT NULL,
  `modified` datetime NOT NULL,
  `created` datetime NOT NULL,
  `titel_name` varchar(64) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `titles`
--

INSERT INTO `titles` (`id`, `modified`, `created`, `titel_name`) VALUES
(2, '2016-01-09 09:41:39', '2016-01-09 09:41:39', '教室'),
(3, '2016-01-14 11:43:55', '2016-01-14 11:43:55', '晩御飯');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_name` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `users`
--

INSERT INTO `users` (`id`, `created`, `modified`, `user_name`) VALUES
(1, '2016-01-14 10:55:20', '2016-01-14 10:55:20', 'すずき'),
(2, '2016-01-14 11:43:18', '2016-01-14 11:43:18', 'あららら');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
