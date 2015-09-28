-- phpMyAdmin SQL Dump
-- version 4.4.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2015 at 04:55 AM
-- Server version: 5.5.42
-- PHP Version: 5.5.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `d7scraping`
--

-- --------------------------------------------------------

--
-- Table structure for table `pydream_scrap`
--

CREATE TABLE `pydream_scrap` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) CHARACTER SET latin1 NOT NULL,
  `url` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field_map` varchar(255) CHARACTER SET latin1 NOT NULL,
  `language` varchar(45) CHARACTER SET latin1 NOT NULL,
  `company` varchar(100) CHARACTER SET latin1 NOT NULL,
  `category` varchar(100) CHARACTER SET latin1 NOT NULL,
  `content_type` varchar(100) CHARACTER SET latin1 NOT NULL,
  `filter` varchar(100) CHARACTER SET latin1 NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image_src` varchar(255) CHARACTER SET latin1 NOT NULL,
  `src` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field1` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field2` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field3` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field4` varchar(255) CHARACTER SET latin1 NOT NULL,
  `field5` varchar(255) CHARACTER SET latin1 NOT NULL,
  `body` text CHARACTER SET latin1 NOT NULL,
  `schedule` varchar(45) CHARACTER SET latin1 NOT NULL,
  `item_limit` int(10) NOT NULL,
  `flag` int(10) NOT NULL DEFAULT '0',
  `created` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pydream_scrap`
--
ALTER TABLE `pydream_scrap`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pydream_scrap`
--
ALTER TABLE `pydream_scrap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;