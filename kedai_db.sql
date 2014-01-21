-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2014 at 01:24 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kedai_db`
--
CREATE DATABASE IF NOT EXISTS `kedai_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kedai_db`;

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `advert_type_id` int(11) NOT NULL,
  `advert_status_id` int(11) NOT NULL,
  `category_sub_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(25) NOT NULL,
  `content` longtext NOT NULL,
  `price` int(11) NOT NULL,
  `negotiable` int(11) NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  `post_time` datetime NOT NULL,
  `sold_time` datetime NOT NULL,
  `is_delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `user_id`, `city_id`, `advert_type_id`, `advert_status_id`, `category_sub_id`, `name`, `code`, `content`, `price`, `negotiable`, `thumbnail`, `post_time`, `sold_time`, `is_delete`) VALUES
(1, 0, 0, 0, 0, 0, '', '', '', 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advert_pic`
--

CREATE TABLE IF NOT EXISTS `advert_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert_pic`
--

INSERT INTO `advert_pic` (`id`, `advert_id`, `thumbnail`) VALUES
(1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `advert_status`
--

CREATE TABLE IF NOT EXISTS `advert_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `advert_status`
--

INSERT INTO `advert_status` (`id`, `name`) VALUES
(1, 'Review'),
(2, 'Re Review'),
(3, 'Approve'),
(4, 'Reject');

-- --------------------------------------------------------

--
-- Table structure for table `advert_tag`
--

CREATE TABLE IF NOT EXISTS `advert_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `advert_tag`
--

INSERT INTO `advert_tag` (`id`, `tag_id`, `advert_id`, `update_time`) VALUES
(1, 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `advert_type`
--

CREATE TABLE IF NOT EXISTS `advert_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `advert_type`
--

INSERT INTO `advert_type` (`id`, `name`) VALUES
(1, 'Dicari'),
(2, 'Dijual'),
(3, 'Disewakan'),
(4, 'Jasa');

-- --------------------------------------------------------

--
-- Table structure for table `advert_type_sub`
--

CREATE TABLE IF NOT EXISTS `advert_type_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_type_id` int(11) NOT NULL,
  `category_sub_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `advert_type_sub`
--

INSERT INTO `advert_type_sub` (`id`, `advert_type_id`, `category_sub_id`) VALUES
(2, 2, 2),
(3, 2, 3),
(4, 1, 3),
(5, 3, 3),
(6, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `alias`, `name`) VALUES
(12, 'tempat-tinggal', 'Tempat Tinggal'),
(11, 'mobil', 'Mobil');

-- --------------------------------------------------------

--
-- Table structure for table `category_input`
--

CREATE TABLE IF NOT EXISTS `category_input` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `input_type_id` int(11) NOT NULL,
  `advert_type_sub_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `label` varchar(50) NOT NULL,
  `is_required` int(11) NOT NULL,
  `max_length` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category_input`
--

INSERT INTO `category_input` (`id`, `parent_id`, `input_type_id`, `advert_type_sub_id`, `title`, `label`, `is_required`, `max_length`, `value`) VALUES
(1, 0, 0, 0, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `category_price`
--

CREATE TABLE IF NOT EXISTS `category_price` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_sub_id` int(11) NOT NULL,
  `price_type` int(11) NOT NULL COMMENT '{ 1: price_min, 2: price_max }',
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category_price`
--

INSERT INTO `category_price` (`id`, `category_sub_id`, `price_type`, `price`) VALUES
(4, 3, 1, 12345),
(5, 2, 1, 15000),
(6, 3, 1, 55555),
(7, 3, 2, 1000111),
(8, 3, 2, 2000222);

-- --------------------------------------------------------

--
-- Table structure for table `category_sub`
--

CREATE TABLE IF NOT EXISTS `category_sub` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `alias` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `link_override` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category_sub`
--

INSERT INTO `category_sub` (`id`, `category_id`, `alias`, `name`, `link_override`) VALUES
(2, 11, 'livina', 'Livina', ''),
(3, 11, 'jazz', 'Jazz', ''),
(4, 12, 'kost', 'Kost', ''),
(5, 12, 'rumah', 'Rumah', '');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `region_id`, `name`) VALUES
(4, 4, 'Johor 1'),
(5, 4, 'Johor 2'),
(6, 5, 'Serawak 1');

-- --------------------------------------------------------

--
-- Table structure for table `input_type`
--

CREATE TABLE IF NOT EXISTS `input_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `input_type`
--

INSERT INTO `input_type` (`id`, `name`) VALUES
(1, 'text'),
(2, 'select'),
(3, 'textarea'),
(4, 'checkbox');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_count` int(11) NOT NULL,
  `advert_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `advert_count`, `advert_time`) VALUES
(1, 20, '3 Month'),
(2, 30, '6 Month'),
(11, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `page_static`
--

CREATE TABLE IF NOT EXISTS `page_static` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`) VALUES
(4, 'Johor'),
(5, 'Serawak'),
(6, 'Sabah');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `alias` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`, `alias`) VALUES
(1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_type_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `alias` varchar(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `bb_pin` varchar(50) NOT NULL,
  `register_date` datetime NOT NULL,
  `reset_key` varchar(75) NOT NULL,
  `verify_profile` int(11) NOT NULL,
  `verify_email` int(11) NOT NULL,
  `verify_address` int(11) NOT NULL,
  `thumbnail_profile` varchar(75) NOT NULL,
  `thumbnail_banner` varchar(75) NOT NULL,
  `ic_number` varchar(50) NOT NULL,
  `is_ic_number` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `is_delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type_id`, `email`, `alias`, `fullname`, `passwd`, `address`, `phone`, `bb_pin`, `register_date`, `reset_key`, `verify_profile`, `verify_email`, `verify_address`, `thumbnail_profile`, `thumbnail_banner`, `ic_number`, `is_ic_number`, `is_active`, `is_delete`) VALUES
(2, 1, 'her0satr@yahoo.com', '', 'Herry', 'fe30fa79056939db8cbe99c8d601de74', '-', '', '', '2013-10-17 03:17:56', '', 0, 0, 0, '', '', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE IF NOT EXISTS `user_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(75) NOT NULL,
  `message` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user_id`, `sender_id`, `name`, `email`, `phone`, `message`) VALUES
(1, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_follow`
--

CREATE TABLE IF NOT EXISTS `user_follow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL COMMENT 'follower',
  `follow_id` int(11) NOT NULL COMMENT 'leader',
  `follow_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_follow`
--

INSERT INTO `user_follow` (`id`, `user_id`, `follow_id`, `follow_time`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `log_time` datetime NOT NULL,
  `location` varchar(255) NOT NULL,
  `ip_remote` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `user_id`, `log_time`, `location`, `ip_remote`) VALUES
(1, 0, '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_membership`
--

CREATE TABLE IF NOT EXISTS `user_membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `membership_id` int(11) NOT NULL,
  `request_time` datetime NOT NULL,
  `is_approve` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_membership`
--

INSERT INTO `user_membership` (`id`, `user_id`, `membership_id`, `request_time`, `is_approve`) VALUES
(1, 0, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_note`
--

CREATE TABLE IF NOT EXISTS `user_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `note_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_note`
--

INSERT INTO `user_note` (`id`, `user_id`, `content`, `note_update`) VALUES
(1, 0, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_setting`
--

CREATE TABLE IF NOT EXISTS `user_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email_follow` int(11) NOT NULL,
  `email_notify` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_setting`
--

INSERT INTO `user_setting` (`id`, `user_id`, `email_follow`, `email_notify`) VALUES
(1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(1, 'Administrator'),
(2, 'Editor'),
(3, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `verify_address`
--

CREATE TABLE IF NOT EXISTS `verify_address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `request_time` datetime NOT NULL,
  `code` varchar(50) NOT NULL,
  `confirm` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `verify_address`
--

INSERT INTO `verify_address` (`id`, `user_id`, `request_time`, `code`, `confirm`) VALUES
(1, 0, '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE IF NOT EXISTS `widget` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `name`, `alias`, `content`) VALUES
(4, 'Widget 1', 'widget-1', 'Content'),
(5, 'Widget 2', 'widget-2', 'Content');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
