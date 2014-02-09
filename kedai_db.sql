-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2014 at 07:33 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kedai_db`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `user_id`, `city_id`, `condition_id`, `advert_type_id`, `advert_status_id`, `category_sub_id`, `name`, `code`, `content`, `address`, `price`, `negotiable`, `metadata`, `thumbnail`, `post_time`, `sold_time`, `is_delete`) VALUES
(1, 2, 5, 0, 1, 5, 10, 'Name 1', 'XXXX', 'Ad Desc (statis)', 'Address (statis)', 125000, 1, '{"vehicle_brand_id":"2","vehicle_type_id":"5"}', '2014/02/03/20140203_093955_3605.jpg', '2013-02-04 11:03:02', '0000-00-00 00:00:00', 0),
(2, 2, 4, 2, 2, 3, 8, 'Name 2 - Title Ad', 'YYYY', 'Hello World', 'Kota Malang', 15000, 1, '[]', '2014/02/03/20140203_101843_4166.jpg', '2014-02-03 10:18:44', '0000-00-00 00:00:00', 0),
(4, 0, 4, 0, 4, 1, 7, '-', '', '-', '-', 0, 1, '{"user_action":"member_register","fullname":"Your Name","email":"mail@mail.com","passwd":"","is_ic_number":"1","ic_number":"123456","phone":"Phone Number","bb_pin":"BB Pin"}', '2014/02/07/20140207_152122_5738.jpg', '2014-02-07 15:21:25', '0000-00-00 00:00:00', 1),
(5, 2, 4, 0, 4, 2, 7, '-', '', '-', '-', 0, 1, '{"user_action":"member_login","fullname":"Your Name","email":"her0satr@yahoo.com","passwd":"qwertyui","is_ic_number":"1","ic_number":"123456","phone":"Phone Number","bb_pin":"BB Pin"}', '2014/02/07/20140207_152245_8516.png', '2014-02-07 15:37:11', '0000-00-00 00:00:00', 1),
(6, 10, 4, 0, 3, 1, 7, '-', '', '0', '-', 0, 1, '{"user_action":"member_register","fullname":"Your Name","email":"test@mail.com","passwd":"","is_ic_number":"1","ic_number":"123456","phone":"-","bb_pin":"-"}', '2014/02/07/20140207_154502_3162.png', '2014-02-07 15:45:20', '0000-00-00 00:00:00', 1),
(7, 2, 5, 0, 4, 3, 7, '-', '', '-', '-', 0, 1, '{"user_action":"member_login","fullname":"","email":"her0satr@yahoo.com","passwd":"qwertyui","is_ic_number":"0","ic_number":"","phone":"","bb_pin":""}', '2014/02/07/20140207_154945_7169.jpg', '2014-02-07 15:49:51', '0000-00-00 00:00:00', 0),
(14, 2, 4, 0, 1, 3, 10, 'Cari Mobil', '', '-', 'Johor 1', 1000000, 1, '{"vehicle_brand_id":"2","vehicle_type_id":"5","jenis-mobil":"Sport"}', '2014/02/09/20140209_095901_8859.jpg', '2014-02-09 11:07:41', '0000-00-00 00:00:00', 0),
(15, 2, 4, 0, 1, 2, 6, '--', '', '-', '-', 15000, 1, '{"text-title":"Test","select-on":"Option 2","text-area-01":"Textarea","check-box-title":["Value No 1"," Value No 2","0","0","0","0"],"hello-title-2":"Hello Title 2"}', '2014/02/09/20140209_112834_1100.jpg', '2014-02-09 11:28:52', '0000-00-00 00:00:00', 1),
(16, 2, 0, 0, 0, 1, 0, '', '', '', '', 0, 0, '[]', '', '2014-02-09 13:01:59', '0000-00-00 00:00:00', 1),
(17, 2, 4, 0, 0, 3, 12, '12345', '', '', '', 0, 0, '[]', '', '2014-02-09 13:04:19', '0000-00-00 00:00:00', 0),
(18, 2, 4, 0, 3, 3, 6, '-', '', '', '-', 0, 1, '[]', '', '2014-02-09 16:07:46', '0000-00-00 00:00:00', 0),
(19, 10, 4, 0, 3, 1, 7, '-----', '', '', '-', 0, 0, '[]', '', '2013-02-09 16:37:48', '0000-00-00 00:00:00', 1),
(22, 2, 4, 0, 2, 3, 8, '123456', '899380209', '', '-', 0, 1, '[]', '', '2014-02-09 17:22:47', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advert_pic`
--

CREATE TABLE IF NOT EXISTS `advert_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

--
-- Dumping data for table `advert_pic`
--

INSERT INTO `advert_pic` (`id`, `advert_id`, `thumbnail`) VALUES
(76, 2, '2014/02/03/20140203_101843_4166.jpg'),
(83, 4, '2014/02/07/20140207_152122_5738.jpg'),
(88, 5, '2014/02/07/20140207_152245_8516.png'),
(89, 6, '2014/02/07/20140207_154502_3162.png'),
(90, 7, '2014/02/07/20140207_154945_7169.jpg'),
(91, 8, '2014/02/09/20140209_095901_8859.jpg'),
(92, 9, '2014/02/09/20140209_095901_8859.jpg'),
(93, 10, '2014/02/09/20140209_095901_8859.jpg'),
(94, 11, '2014/02/09/20140209_095901_8859.jpg'),
(95, 12, '2014/02/09/20140209_095901_8859.jpg'),
(96, 13, '2014/02/09/20140209_095901_8859.jpg'),
(103, 14, '2014/02/09/20140209_095901_8859.jpg'),
(105, 15, '2014/02/09/20140209_112834_1100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `advert_status`
--

CREATE TABLE IF NOT EXISTS `advert_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `advert_status`
--

INSERT INTO `advert_status` (`id`, `name`) VALUES
(1, 'Review'),
(2, 'Re Review'),
(3, 'Approve'),
(4, 'Reject'),
(5, 'Re Submit');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `post_time` datetime NOT NULL,
  `update_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `name`, `alias`, `content`, `post_time`, `update_time`) VALUES
(3, 'Pengumuman 1', 'pengumuman-1', 'Content 1', '2014-02-07 13:50:18', '2014-02-07 14:02:01'),
(4, 'Pengumuman 2', 'pengumuman-2', 'Content 2', '2014-02-07 13:50:24', '2014-02-07 14:02:05'),
(5, 'Pengumuman 3', 'pengumuman-3', 'Content 3', '2014-02-07 13:50:33', '2014-02-07 14:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `alias`, `name`, `thumbnail`) VALUES
(12, 'property', 'Property', ''),
(11, 'vehicles', 'Vehicles', ''),
(14, 'appliance', 'Appliance', '2014/02/04/20140204_115744_7328.png'),
(15, 'camera-camcoder', 'Camera & Camcoder', '2014/02/04/20140204_115750_2058.png');

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
  `order_no` int(11) NOT NULL,
  `is_required` int(11) NOT NULL,
  `is_searchable` int(11) NOT NULL,
  `max_length` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `category_input`
--

INSERT INTO `category_input` (`id`, `parent_id`, `input_type_id`, `advert_type_sub_id`, `title`, `label`, `order_no`, `is_required`, `is_searchable`, `max_length`, `value`) VALUES
(10, 0, 2, 1, 'Select On', 'Select Label', 2, 1, 0, 0, ',Option 1,Option 2'),
(9, 0, 1, 1, 'Text Title', 'Text Label', 1, 1, 0, 20, ''),
(11, 0, 4, 1, 'Check Box Title', 'Check Box Label', 4, 0, 0, 0, 'Value No 1, Value No 2, Value No 3, Value No 4, Value No 5, Value No 6'),
(12, 0, 3, 1, 'Text Area 01', 'Text Area Label 01', 3, 1, 0, 0, ''),
(13, 0, 5, 1, 'Parent 01', 'Parent 01', 5, 0, 0, 0, ''),
(14, 13, 1, 1, 'Hello Title 2', 'Hello Title 2', 1, 0, 0, 0, ''),
(15, 0, 6, 6, 'Car', 'Car', 1, 0, 1, 0, ''),
(16, 0, 6, 7, 'Car', 'Car', 0, 0, 0, 0, ''),
(17, 0, 6, 8, 'Car', 'Car', 1, 0, 0, 0, ''),
(18, 0, 2, 6, 'Jenis Mobil', 'Jenis Mobil', 2, 0, 1, 0, ',Classic,Modern,Sport');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `category_sub`
--

INSERT INTO `category_sub` (`id`, `category_id`, `alias`, `name`, `link_override`) VALUES
(8, 11, 'sparepart', 'Sparepart', ''),
(7, 11, 'audio-mobil', 'Audio Mobil', ''),
(6, 11, 'aksesoris-mobil', 'Aksesoris Mobil', 'asd'),
(9, 11, 'velg-ban', 'Velg & Ban', ''),
(10, 11, 'mobil-bekas', 'Mobil Bekas', ''),
(12, 14, 'coffee-maker', 'Coffee Maker', ''),
(13, 14, 'cooking', 'Cooking', ''),
(14, 14, 'oven', 'Oven', ''),
(15, 14, 'espresso', 'Espresso', ''),
(16, 14, 'warmer', 'Warmer', ''),
(17, 14, 'refrigeration', 'Refrigeration', ''),
(18, 15, 'camera', 'Camera', ''),
(19, 15, 'camcoder', 'Camcoder', ''),
(20, 15, 'camera-lense', 'Camera Lense', ''),
(21, 15, 'digitar-slr-camera', 'Digitar SLR Camera', '');

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
-- Table structure for table `city_ip`
--

CREATE TABLE IF NOT EXISTS `city_ip` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `city_ip`
--

INSERT INTO `city_ip` (`id`, `ip`, `name`, `content`) VALUES
(1, '', '', '');

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
-- Table structure for table `mass_email`
--

CREATE TABLE IF NOT EXISTS `mass_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `sent_offset` int(11) NOT NULL,
  `sent_limit` int(11) NOT NULL,
  `update_time` datetime NOT NULL,
  `status` varchar(50) NOT NULL COMMENT 'draft / done',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `mass_email`
--

INSERT INTO `mass_email` (`id`, `name`, `content`, `sent_offset`, `sent_limit`, `update_time`, `status`) VALUES
(5, 'Hello 2', 'Hello 2', 3, 3, '2014-02-08 18:55:00', 'done'),
(4, 'Hello 1', 'Hello 1', 3, 3, '2014-02-08 18:54:54', 'done'),
(6, 'Hello 3', '123', 3, 3, '2014-02-08 18:55:14', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `advert_count` int(11) NOT NULL,
  `advert_time` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `title`, `advert_count`, `advert_time`) VALUES
(1, 'Basic', 20, '3 Month'),
(2, 'Premium', 30, '6 Month'),
(14, 'Free', 10, '1 Month');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `page_static`
--

INSERT INTO `page_static` (`id`, `name`, `alias`, `content`) VALUES
(19, 'Privacy Policy', 'privacy-policy', 'Page&nbsp;Privacy Policy<br>'),
(20, 'About Us', 'about-us', 'Page About Us'),
(21, 'Delivery Information', 'delivery-information', 'Page&nbsp;Delivery Information'),
(22, 'Terms & Conditions', 'terms-conditions', 'Page&nbsp;Terms &amp; Conditions'),
(23, 'Brands', 'brands', 'Page&nbsp;Brands'),
(24, 'Gift Vouchers', 'gift-vouchers', 'Page&nbsp;Gift Vouchers'),
(25, 'Specials', 'specials', 'Page Specials');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(75) NOT NULL,
  `name` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `alias`, `name`) VALUES
(4, 'johor', 'Johor'),
(5, 'serawak', 'Serawak'),
(6, 'sabah', 'Sabah'),
(8, 'kedah', 'Kedah'),
(9, 'kelantan', 'Kelantan'),
(10, 'kuala-lumpur', 'Kuala Lumpur'),
(11, 'melaka', 'Melaka'),
(12, 'n-sembilan', 'N. Sembilan'),
(13, 'pahang', 'Pahang'),
(14, 'penang', 'Penang'),
(15, 'perak', 'Perak'),
(16, 'perlis', 'Perlis'),
(17, 'selangor', 'Selangor'),
(18, 'terengganu', 'Terengganu');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `user_id`, `advert_id`, `report_type_id`, `detail`, `email`, `post_time`) VALUES
(1, 2, 1, 4, 'Tolong bantu', 'her0satr@yahoo.com', '2014-02-07 13:34:02');

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
  `city_id` int(11) NOT NULL,
  `user_type_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `alias` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `passwd` varchar(100) NOT NULL,
  `passwd_reset_key` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `bb_pin` varchar(50) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `user_about` varchar(255) NOT NULL,
  `user_info` varchar(255) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `city_id`, `user_type_id`, `email`, `alias`, `first_name`, `last_name`, `passwd`, `passwd_reset_key`, `address`, `phone`, `bb_pin`, `postal_code`, `user_about`, `user_info`, `advert_count`, `register_date`, `membership_date`, `reset_key`, `verify_profile`, `verify_email`, `verify_address`, `thumbnail_profile`, `thumbnail_banner`, `ic_number`, `is_ic_number`, `is_active`, `is_delete`) VALUES
(2, 6, 1, '7B9ZyD0ZsT16kbsjHOiHyAwcdoarmIaHUWwq3MVGnJA', 'her0satr', 'Herry', 'Satrio', 'fe30fa79056939db8cbe99c8d601de74', '', 'Malang', '0341', '', '55555', 'Artist', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.', 10, '2013-10-17 03:17:56', '2014-11-23', '', 0, 0, 1, '', '', '', 0, 1, 0),
(9, 0, 2, 'x5fmoFeYb_gxTNh0s4JKUYXgXZkb3pzJilYhqt1NKF8', 'her0satr1', 'Your', 'Name', 'fe30fa79056939db8cbe99c8d601de74', '', '', 'Phone Number', 'BB Pin', '', '', '', 0, '2014-02-07 15:30:35', '0000-00-00', '', 0, 0, 0, '', '', '123456', 1, 1, 0),
(10, 0, 3, 'FSfJY0ySM-5sLWyv78HXTra032vVFpyBWXr9WHrjUQc', 'test', 'Your', 'Name', '911c7dd08405382113e216f6576f61db', '', '', '-', '-', '', '', '', 50, '2014-02-07 15:45:20', '2014-11-08', '', 0, 0, 0, '', '', '123456', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE IF NOT EXISTS `user_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `advert_id` int(11) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(75) NOT NULL,
  `phone` varchar(75) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `is_read` int(11) NOT NULL,
  `post_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user_id`, `sender_id`, `advert_id`, `name`, `email`, `phone`, `title`, `message`, `is_read`, `post_time`) VALUES
(4, 2, 2, 1, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone 02', 'Title 02', 'Pesan 02', 1, '2014-02-05 14:42:22'),
(3, 2, 2, 1, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone 01', 'Title 01', 'Pesan 01', 1, '2014-02-05 14:42:09');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_follow`
--

INSERT INTO `user_follow` (`id`, `user_id`, `follow_id`, `follow_time`) VALUES
(11, 2, 2, 2014);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `user_id`, `log_time`, `location`, `ip_remote`) VALUES
(1, 0, '0000-00-00 00:00:00', '', ''),
(2, 2, '2014-02-06 11:52:34', 'localhost', '::1'),
(3, 2, '2014-02-06 11:53:36', 'localhost', '::1'),
(4, 2, '2014-02-06 11:53:38', 'localhost', '::1'),
(5, 2, '2014-02-07 13:28:54', 'localhost', '::1'),
(6, 2, '2014-02-07 14:27:18', 'localhost', '::1'),
(7, 2, '2014-02-07 15:33:05', 'localhost', '::1'),
(8, 2, '2014-02-07 15:33:07', 'localhost', '::1'),
(9, 2, '2014-02-07 15:35:16', 'localhost', '::1'),
(10, 2, '2014-02-07 15:35:18', 'localhost', '::1'),
(11, 2, '2014-02-07 15:36:29', 'localhost', '::1'),
(12, 2, '2014-02-07 15:37:11', 'localhost', '::1'),
(13, 2, '2014-02-07 15:45:41', 'localhost', '::1'),
(14, 2, '2014-02-07 15:49:51', 'localhost', '::1'),
(15, 2, '2014-02-08 08:14:17', 'localhost', '::1'),
(16, 2, '2014-02-08 08:17:43', 'localhost', '::1'),
(17, 9, '2014-02-08 09:18:40', 'localhost', '::1'),
(18, 10, '2014-02-08 09:19:20', 'localhost', '::1'),
(19, 2, '2014-02-08 17:58:14', 'localhost', '::1'),
(20, 2, '2014-02-09 09:19:08', 'localhost', '::1'),
(21, 2, '2014-02-09 11:07:35', 'localhost', '::1'),
(22, 2, '2014-02-09 15:30:32', 'localhost', '::1'),
(23, 10, '2014-02-09 16:37:23', 'localhost', '::1'),
(24, 2, '2014-02-09 18:56:12', 'localhost', '::1'),
(25, 2, '2014-02-09 19:20:31', 'localhost', '::1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user_membership`
--

INSERT INTO `user_membership` (`id`, `user_id`, `membership_id`, `request_time`, `status`) VALUES
(1, 10, 1, '2014-02-08 09:42:17', 'approve'),
(5, 2, 14, '2014-02-09 13:58:40', 'approve'),
(4, 10, 2, '2014-02-08 10:28:41', 'approve');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `user_note`
--

INSERT INTO `user_note` (`id`, `user_id`, `content`, `note_update`) VALUES
(5, 2, 'Hello World 2 2 21\n2222 3333 225', '2014-02-08 09:14:24'),
(18, 2, 'asd 2', '2014-02-06 09:48:32'),
(17, 2, 'ssssss 2', '2014-02-06 09:46:01');

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
(1, 10, 1, 1);

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
  `status` varchar(10) NOT NULL COMMENT 'pending / deliver / confirm',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `verify_address`
--

INSERT INTO `verify_address` (`id`, `user_id`, `request_time`, `code`, `status`) VALUES
(2, 2, '2014-02-06 14:44:18', '8224-8873-5165', 'confirm');

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
