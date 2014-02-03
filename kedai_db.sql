-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2014 at 04:19 PM
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
  `condition_id` int(11) NOT NULL,
  `advert_type_id` int(11) NOT NULL,
  `advert_status_id` int(11) NOT NULL,
  `category_sub_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(25) NOT NULL,
  `content` longtext NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `negotiable` int(11) NOT NULL,
  `metadata` longtext NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  `post_time` datetime NOT NULL,
  `sold_time` datetime NOT NULL,
  `is_delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `user_id`, `city_id`, `condition_id`, `advert_type_id`, `advert_status_id`, `category_sub_id`, `name`, `code`, `content`, `address`, `price`, `negotiable`, `metadata`, `thumbnail`, `post_time`, `sold_time`, `is_delete`) VALUES
(1, 2, 5, 0, 1, 2, 10, 'Name 1', 'XXXX', 'Ad Desc (statis)', 'Address (statis)', 125000, 1, '{"vehicle_brand_id":"2","vehicle_type_id":"5"}', '2014/02/03/20140203_093955_3605.jpg', '2014-02-03 11:45:13', '0000-00-00 00:00:00', 0),
(2, 2, 4, 2, 2, 2, 8, 'Name 2 - Title Ad', 'YYYY', 'Hello World', 'Kota Malang', 15000, 1, '[]', '2014/02/03/20140203_101843_4166.jpg', '2014-02-03 10:18:44', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advert_pic`
--

CREATE TABLE IF NOT EXISTS `advert_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `advert_pic`
--

INSERT INTO `advert_pic` (`id`, `advert_id`, `thumbnail`) VALUES
(76, 2, '2014/02/03/20140203_101843_4166.jpg'),
(82, 1, '2014/02/03/20140203_093957_6600.jpg'),
(81, 1, '2014/02/03/20140203_093955_3605.jpg'),
(80, 1, '2014/02/03/20140203_093953_5353.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `advert_type_sub`
--

INSERT INTO `advert_type_sub` (`id`, `advert_type_id`, `category_sub_id`) VALUES
(1, 1, 6),
(2, 2, 6),
(3, 3, 6),
(4, 4, 7),
(5, 3, 7),
(6, 1, 10),
(7, 2, 10),
(8, 3, 10),
(9, 1, 8),
(10, 2, 8),
(11, 4, 8);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `alias`, `name`) VALUES
(12, 'z-property', 'Z Property'),
(11, 'vehicles', 'Vehicles');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `category_input`
--

INSERT INTO `category_input` (`id`, `parent_id`, `input_type_id`, `advert_type_sub_id`, `title`, `label`, `is_required`, `max_length`, `value`) VALUES
(10, 0, 2, 1, 'Select On', 'Select Label', 1, 0, ',Option 1,Option 2'),
(9, 0, 1, 1, 'Text Title', 'Text Label', 1, 0, ''),
(11, 0, 4, 1, 'Check Box Title', 'Check Box Label', 0, 0, 'Value No 1, Value No 2, Value No 3, Value No 4, Value No 5, Value No 6'),
(12, 0, 3, 1, 'Text Area 01', 'Text Area Label 01', 1, 0, ''),
(13, 0, 5, 1, 'Parent 01', 'Parent 01', 0, 0, ''),
(14, 13, 1, 1, 'Hello Title 2', 'Hello Title 2', 0, 0, ''),
(15, 0, 6, 6, 'Car', 'Car', 0, 0, ''),
(16, 0, 6, 7, 'Car', 'Car', 0, 0, ''),
(17, 0, 6, 8, 'Car', 'Car', 0, 0, '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_price`
--

INSERT INTO `category_price` (`id`, `category_sub_id`, `price_type`, `price`) VALUES
(1, 8, 1, 100000),
(2, 8, 1, 500000),
(3, 8, 1, 1000000),
(4, 8, 2, 500000),
(5, 8, 2, 1000000),
(6, 8, 2, 5000000);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category_sub`
--

INSERT INTO `category_sub` (`id`, `category_id`, `alias`, `name`, `link_override`) VALUES
(8, 11, 'sparepart', 'Sparepart', ''),
(7, 11, 'audio-mobil', 'Audio Mobil', ''),
(6, 11, 'aksesoris-mobil', 'Aksesoris Mobil', ''),
(9, 11, 'velg-ban', 'Velg & Ban', ''),
(10, 11, 'mobil-bekas', 'Mobil Bekas', '');

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
-- Table structure for table `condition`
--

CREATE TABLE IF NOT EXISTS `condition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `condition`
--

INSERT INTO `condition` (`id`, `name`) VALUES
(1, 'New'),
(2, 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `input_type`
--

CREATE TABLE IF NOT EXISTS `input_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `input_type`
--

INSERT INTO `input_type` (`id`, `name`) VALUES
(1, 'text'),
(2, 'select'),
(3, 'textarea'),
(4, 'checkbox'),
(5, 'parent'),
(6, 'car');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_count` int(11) NOT NULL,
  `advert_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `advert_count`, `advert_time`) VALUES
(1, 20, '3 Month'),
(2, 30, '6 Month');

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
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `report_type_id` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `post_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `report_type`
--

CREATE TABLE IF NOT EXISTS `report_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `report_type`
--

INSERT INTO `report_type` (`id`, `name`) VALUES
(1, 'Artikel tidak sesuai peraturan'),
(2, 'Artikel duplikat dari artikel lain'),
(3, 'Artikel dipasang di kategori yang salah'),
(4, 'Lainnya');

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
  `email` varchar(255) DEFAULT NULL,
  `alias` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `bb_pin` varchar(50) NOT NULL,
  `advert_count` int(11) NOT NULL,
  `register_date` datetime NOT NULL,
  `membership_date` date NOT NULL,
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

INSERT INTO `user` (`id`, `user_type_id`, `email`, `alias`, `first_name`, `last_name`, `passwd`, `address`, `phone`, `bb_pin`, `advert_count`, `register_date`, `membership_date`, `reset_key`, `verify_profile`, `verify_email`, `verify_address`, `thumbnail_profile`, `thumbnail_banner`, `ic_number`, `is_ic_number`, `is_active`, `is_delete`) VALUES
(2, 1, '7B9ZyD0ZsT16kbsjHOiHyAwcdoarmIaHUWwq3MVGnJA', 'her0satr', 'Herry', 'Satrio', 'fe30fa79056939db8cbe99c8d601de74', '-', '', '', 120, '2013-10-17 03:17:56', '2014-10-23', '', 0, 0, 0, '', '', '', 0, 1, 0);

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
  `post_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user_id`, `sender_id`, `name`, `email`, `phone`, `message`, `post_time`) VALUES
(1, 2, 2, 'Herry Satrio', 'her0satr@yahoo.com', 'asd', 'asd', '2014-02-03 14:50:08');

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
  `status` varchar(11) NOT NULL COMMENT 'pending / approve / reject',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_membership`
--

INSERT INTO `user_membership` (`id`, `user_id`, `membership_id`, `request_time`, `status`) VALUES
(1, 2, 1, '2014-01-01 00:00:00', 'pending'),
(2, 2, 2, '2014-01-23 00:00:00', 'approve');

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
-- Table structure for table `vehicle_brand`
--

CREATE TABLE IF NOT EXISTS `vehicle_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `vehicle_brand`
--

INSERT INTO `vehicle_brand` (`id`, `name`, `alias`) VALUES
(1, 'Toyota', 'toyota'),
(2, 'Nissan', 'nissan');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE IF NOT EXISTS `vehicle_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_brand_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `alias` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`id`, `vehicle_brand_id`, `name`, `alias`) VALUES
(1, 1, 'Vios', 'vios'),
(2, 1, 'Alpard', 'alpard'),
(3, 1, 'Avanza', 'avanza'),
(5, 2, 'Avalia', 'avalia'),
(6, 2, 'March', 'march'),
(7, 2, 'Livina', 'livina');

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
