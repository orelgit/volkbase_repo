-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 28, 2022 at 05:46 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+03:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volks`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `b_blog` varchar(600) NOT NULL,
  `b_img` varchar(150) NOT NULL,
  `u_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`b_id`),
  KEY `fk_blogs_categuries` (`c_id`),
  KEY `fk_blogs_users` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(100) NOT NULL,
  `c_note` varchar(600) NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_comment` varchar(600) NOT NULL,
  `c_ip_address` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_users`
--

DROP TABLE IF EXISTS `contact_users`;
CREATE TABLE IF NOT EXISTS `contact_users` (
  `cu_id` int(11) NOT NULL AUTO_INCREMENT,
  `cu_email` varchar(100) NOT NULL,
  `cu_desc` varchar(600) NOT NULL,
  `ot_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`cu_id`),
  KEY `fk_contact_users_order_types` (`ot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `l_id` int(11) NOT NULL AUTO_INCREMENT,
  `l_action` varchar(150) NOT NULL,
  `l_link` varchar(150) NOT NULL,
  `l_fun_name` varchar(100) NOT NULL,
  `l_controller_name` varchar(100) NOT NULL,
  `l_ip_address` varchar(100) NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`l_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order_types`
--

DROP TABLE IF EXISTS `order_types`;
CREATE TABLE IF NOT EXISTS `order_types` (
  `ot_id` int(11) NOT NULL AUTO_INCREMENT,
  `ot_name` varchar(100) NOT NULL,
  `ot_note` varchar(600) NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `privilages`
--

DROP TABLE IF EXISTS `privilages`;
CREATE TABLE IF NOT EXISTS `privilages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` varchar(100) NOT NULL,
  `p_note` varchar(600) NOT NULL DEFAULT 'N/A',
  `ut_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`p_id`),
  KEY `fk_privilages_privilages` (`ut_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_logs`
--

DROP TABLE IF EXISTS `sys_logs`;
CREATE TABLE IF NOT EXISTS `sys_logs` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `sl_action` varchar(150) NOT NULL,
  `sl_link` varchar(150) NOT NULL,
  `sl_fun_name` varchar(100) NOT NULL,
  `sl_controller_name` varchar(100) NOT NULL,
  `u_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sl_id`),
  KEY `fk_sys_logs_users` (`u_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(100) NOT NULL,
  `b_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`t_id`),
  KEY `fk_tags_blogs` (`b_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(100) NOT NULL,
  `u_mobile` varchar(15) NOT NULL,
  `u_pass` varchar(100) NOT NULL,
  `u_email` varchar(150) NOT NULL,
  `u_photo` varchar(100) DEFAULT NULL,
  `ut_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`u_id`),
  KEY `fk_users_users` (`ut_id`)
) ;

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE IF NOT EXISTS `user_types` (
  `ut_id` int(11) NOT NULL AUTO_INCREMENT,
  `ut_name` varchar(100) NOT NULL,
  `ut_note` varchar(600) NOT NULL DEFAULT 'N/A',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`ut_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_blogs_categuries` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_blogs_users` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `contact_users`
--
ALTER TABLE `contact_users`
  ADD CONSTRAINT `fk_contact_users_order_types` FOREIGN KEY (`ot_id`) REFERENCES `order_types` (`ot_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `privilages`
--
ALTER TABLE `privilages`
  ADD CONSTRAINT `fk_privilages_privilages` FOREIGN KEY (`ut_id`) REFERENCES `user_types` (`ut_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `sys_logs`
--
ALTER TABLE `sys_logs`
  ADD CONSTRAINT `fk_sys_logs_users` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `fk_tags_blogs` FOREIGN KEY (`b_id`) REFERENCES `blogs` (`b_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_users` FOREIGN KEY (`ut_id`) REFERENCES `user_types` (`ut_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
