-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2017 at 02:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xuyuanshu`
--

-- --------------------------------------------------------

--
-- Table structure for table `x_list`
--

CREATE TABLE `x_list` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `xtitle` varchar(255) NOT NULL,
  `xpic` varchar(255) NOT NULL,
  `xdetail` varchar(255) NOT NULL,
  `num` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `x_list`
--

INSERT INTO `x_list` (`id`, `userid`, `username`, `xtitle`, `xpic`, `xdetail`, `num`) VALUES
(3, 2, 'jiwei', '爱你永远', '2017-01-13/58783efa1d8e0.jpg', '爱娟', 9),
(4, 2, 'jiwei', '我希望世界充满爱', '2017-01-13/587841983368d.jpg', '做自己认为对的事情', 5),
(5, 1, 'cuicui', '你好，我就开心', '2017-01-13/587841fbbdf86.jpg', '我希望我爱的人也爱我', 6),
(7, 1, 'cuicui', '与你携手共度此生', '2017-01-13/5878c0fa93799.jpg', '<p>最浪漫的事就是送你DR钻戒，共度今生！<br/></p>', 2),
(6, 1, 'cuicui', '我有一个梦想', '2017-01-13/587892eb96f26.jpg', '<p>爱在心口难开<br/></p>', 1),
(8, 6, 'juanzi', '娟子的一个梦想', '2017-01-13/5878ddf6b442b.jpg', '我希望自己每天开开心心的，眼前的一切就是最好的安排！', 1),
(9, 6, 'juanzi', '娟子的第二个梦想', '2017-01-13/5878df43a46e1.jpg', '想要与自己喜欢的人共同去遨游世界，感受大自然的美！', 1);

-- --------------------------------------------------------

--
-- Table structure for table `x_user`
--

CREATE TABLE `x_user` (
  `xid` int(11) NOT NULL,
  `xname` varchar(255) NOT NULL,
  `xpwd` varchar(32) NOT NULL,
  `xphone` varchar(16) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `x_user`
--

INSERT INTO `x_user` (`xid`, `xname`, `xpwd`, `xphone`, `status`) VALUES
(1, 'cuicui', '666666', '15538091431', '1'),
(2, 'jiwei', '555555', '15538091420', '0'),
(3, 'juan', '999999999', '15538091430', '1'),
(6, 'juanzi', '666666', '15538195648', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `x_list`
--
ALTER TABLE `x_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `x_user`
--
ALTER TABLE `x_user`
  ADD PRIMARY KEY (`xid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `x_list`
--
ALTER TABLE `x_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `x_user`
--
ALTER TABLE `x_user`
  MODIFY `xid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
