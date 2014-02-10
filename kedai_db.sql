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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

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
(22, 2, 4, 0, 2, 1, 8, '123456', '899380209', '----', '-', 0, 1, '[]', '2014/02/10/20140210_122650_7705.jpg', '2014-02-10 12:33:28', '0000-00-00 00:00:00', 0),
(23, 10, 4, 0, 1, 3, 12, 'Ini Untuk Dijual', '908115160', '-', '-', 1500, 1, '{"numeric":"","letter":""}', '2014/02/10/20140210_135807_9666.png', '2014-02-10 13:58:10', '2014-02-10 14:03:28', 0),
(24, 2, 4, 0, 2, 3, 22, 'Jual Rumah Mewah', '377112620', '-', '', 500000, 1, '{"kondisi-rumah":"Baru","alamat-lokasi":"-","fasilitas":["Garasi","0","0","0","0","0"," kandang ayam"],"t-type-rumah":"Type 36","kamar-mandi":"1","luas-bangunan-sq-ft":"","status-kepemilikan":"SHM"}', '2014/02/10/20140210_150138_2455.jpg', '2014-02-10 15:01:47', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `advert_pic`
--

CREATE TABLE IF NOT EXISTS `advert_pic` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `advert_id` int(11) NOT NULL,
  `thumbnail` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

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
(105, 15, '2014/02/09/20140209_112834_1100.jpg'),
(143, 22, '2014/02/10/20140210_122650_7705.jpg'),
(142, 22, '2014/02/10/20140210_122647_2126.jpg'),
(141, 22, '2014/02/10/20140210_122644_5649.png'),
(144, 23, '2014/02/10/20140210_135807_9666.png'),
(145, 24, '2014/02/10/20140210_150138_2455.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(11, 4, 8),
(12, 1, 13),
(13, 2, 12),
(14, 1, 12),
(15, 2, 22);

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
  `is_numeric` int(11) NOT NULL,
  `is_letter` int(11) NOT NULL,
  `no_uppercase` int(11) NOT NULL,
  `no_special_char` int(11) NOT NULL,
  `max_length` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `category_input`
--

INSERT INTO `category_input` (`id`, `parent_id`, `input_type_id`, `advert_type_sub_id`, `title`, `label`, `order_no`, `is_required`, `is_searchable`, `is_numeric`, `is_letter`, `no_uppercase`, `no_special_char`, `max_length`, `value`) VALUES
(10, 0, 2, 1, 'Select On', 'Select Label', 2, 1, 0, 0, 0, 0, 0, 0, ',Option 1,Option 2'),
(9, 0, 1, 1, 'Text Title', 'Text Label', 1, 1, 0, 0, 0, 0, 0, 20, ''),
(11, 0, 4, 1, 'Check Box Title', 'Check Box Label', 4, 0, 0, 0, 0, 0, 0, 0, 'Value No 1, Value No 2, Value No 3, Value No 4, Value No 5, Value No 6'),
(12, 0, 3, 1, 'Text Area 01', 'Text Area Label 01', 3, 1, 0, 0, 0, 0, 0, 0, ''),
(13, 0, 5, 1, 'Parent 01', 'Parent 01', 5, 0, 0, 0, 0, 0, 0, 0, ''),
(14, 13, 1, 1, 'Hello Title 2', 'Hello Title 2', 1, 0, 0, 0, 0, 0, 0, 0, ''),
(15, 0, 6, 6, 'Car', 'Car', 1, 0, 1, 0, 0, 0, 0, 0, ''),
(16, 0, 6, 7, 'Car', 'Car', 0, 0, 0, 0, 0, 0, 0, 0, ''),
(17, 0, 6, 8, 'Car', 'Car', 1, 0, 0, 0, 0, 0, 0, 0, ''),
(18, 0, 2, 6, 'Jenis Mobil', 'Jenis Mobil', 2, 0, 1, 0, 0, 0, 0, 0, ',Classic,Modern,Sport'),
(19, 0, 1, 14, 'Numeric', 'Numeric', 1, 0, 0, 1, 0, 0, 0, 0, ''),
(20, 0, 1, 14, 'Letter', 'Letter', 2, 0, 0, 0, 1, 0, 0, 0, ''),
(21, 0, 1, 13, ' Uppercase', ' Uppercase', 1, 0, 0, 0, 0, 1, 0, 0, ''),
(22, 0, 1, 13, 'No Special Character', 'No Special Character', 2, 0, 0, 0, 0, 0, 1, 0, ''),
(23, 0, 2, 15, 'Kondisi Rumah', 'Kondisi Rumah', 1, 1, 1, 0, 0, 0, 0, 0, 'Baru, Bekas, Ada Hantu, Rawan Banjir'),
(24, 0, 3, 15, 'Alamat lokasi', 'Alamat lokasi', 2, 1, 0, 0, 0, 0, 0, 60, ''),
(25, 0, 4, 15, 'Fasilitas', 'Fasilitas', 3, 1, 0, 0, 0, 0, 0, 0, 'Garasi, Kandang Kambing, kandang sapi, pontapa, bath up, shower, kandang ayam'),
(26, 0, 2, 15, 'T type rumah', 'T type rumah', 4, 0, 0, 0, 0, 0, 0, 0, 'Type 36, Type 40, Type 70'),
(27, 0, 2, 15, 'Kamar Mandi', 'Label Kamar Mandi', 5, 1, 0, 0, 0, 0, 0, 0, '1,2,3,4,5,6,7,8,9,10,11,12,13,15,16'),
(28, 0, 1, 15, 'Luas Bangunan sq.ft', 'Luas Bangunan sq.ft', 6, 0, 0, 0, 0, 0, 0, 0, ''),
(29, 0, 2, 15, 'Status Kepemilikan', 'Status Kepemilikan', 7, 1, 1, 0, 0, 0, 0, 0, 'SHM, Petok D, Surat Jual Beli');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

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
(21, 15, 'digitar-slr-camera', 'Digitar SLR Camera', ''),
(22, 12, 'house', 'House', ''),
(23, 12, 'apartment', 'Apartment', '');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city_ip`
--

INSERT INTO `city_ip` (`id`, `ip`, `name`, `content`) VALUES
(1, '', '', ''),
(2, '175.45.189.139', 'Malang', '{\n  "ip": "175.45.189.139",\n  "hostname": "No Hostname",\n  "city": "Malang",\n  "region": "Jawa Timur",\n  "country": "ID",\n  "loc": "-7.9797,112.6304",\n  "org": "AS46019 Universitas Brawijaya"\n}');

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
-- Table structure for table `ip_banned`
--

CREATE TABLE IF NOT EXISTS `ip_banned` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `ip_banned`
--

INSERT INTO `ip_banned` (`id`, `ip_address`) VALUES
(1, '::1'),
(2, '::1'),
(3, '::1'),
(4, '::1'),
(5, '::1'),
(6, '::1'),
(7, '::1'),
(8, '::1'),
(9, '::1'),
(10, '::1'),
(11, '::1'),
(12, '::1'),
(13, '::1'),
(14, '::1'),
(15, '::1'),
(16, '::1'),
(17, '::1'),
(18, '::1'),
(19, '::1'),
(20, '::1'),
(21, '::1'),
(22, '::1'),
(23, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `ip_log`
--

CREATE TABLE IF NOT EXISTS `ip_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  `request_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=399 ;

--
-- Dumping data for table `ip_log`
--

INSERT INTO `ip_log` (`id`, `ip_address`, `request_time`) VALUES
(1, '::1', '2014-02-10 13:13:00'),
(2, '::1', '2014-02-10 13:13:03'),
(3, '::1', '2014-02-10 13:13:03'),
(4, '::1', '2014-02-10 13:13:04'),
(5, '::1', '2014-02-10 13:13:43'),
(6, '::1', '2014-02-10 13:15:03'),
(7, '::1', '2014-02-10 13:15:25'),
(8, '::1', '2014-02-10 13:15:43'),
(9, '::1', '2014-02-10 13:15:49'),
(10, '::1', '2014-02-10 13:16:15'),
(11, '::1', '2014-02-10 13:18:00'),
(12, '::1', '2014-02-10 13:18:01'),
(13, '::1', '2014-02-10 13:18:01'),
(14, '::1', '2014-02-10 13:18:02'),
(15, '::1', '2014-02-10 13:18:03'),
(16, '::1', '2014-02-10 13:18:04'),
(17, '::1', '2014-02-10 13:18:05'),
(18, '::1', '2014-02-10 13:18:06'),
(19, '::1', '2014-02-10 13:18:12'),
(20, '::1', '2014-02-10 13:18:13'),
(21, '::1', '2014-02-10 13:18:13'),
(22, '::1', '2014-02-10 13:18:13'),
(23, '::1', '2014-02-10 13:18:14'),
(24, '::1', '2014-02-10 13:18:14'),
(25, '::1', '2014-02-10 13:18:14'),
(26, '::1', '2014-02-10 13:18:14'),
(27, '::1', '2014-02-10 13:18:14'),
(28, '::1', '2014-02-10 13:18:21'),
(29, '::1', '2014-02-10 13:18:22'),
(30, '::1', '2014-02-10 13:18:22'),
(31, '::1', '2014-02-10 13:18:23'),
(32, '::1', '2014-02-10 13:18:48'),
(33, '::1', '2014-02-10 13:18:49'),
(34, '::1', '2014-02-10 13:18:50'),
(35, '::1', '2014-02-10 13:18:51'),
(36, '::1', '2014-02-10 13:18:52'),
(37, '::1', '2014-02-10 13:18:52'),
(38, '::1', '2014-02-10 13:18:54'),
(39, '::1', '2014-02-10 13:20:05'),
(40, '::1', '2014-02-10 13:20:07'),
(41, '::1', '2014-02-10 13:20:08'),
(42, '::1', '2014-02-10 13:20:10'),
(43, '::1', '2014-02-10 13:20:17'),
(44, '::1', '2014-02-10 13:20:22'),
(45, '::1', '2014-02-10 13:20:31'),
(46, '::1', '2014-02-10 13:20:33'),
(47, '::1', '2014-02-10 13:20:33'),
(48, '::1', '2014-02-10 13:20:34'),
(49, '::1', '2014-02-10 13:20:41'),
(50, '::1', '2014-02-10 13:21:26'),
(51, '::1', '2014-02-10 13:21:27'),
(52, '::1', '2014-02-10 13:21:28'),
(53, '::1', '2014-02-10 13:21:36'),
(54, '::1', '2014-02-10 13:21:36'),
(55, '::1', '2014-02-10 13:21:37'),
(56, '::1', '2014-02-10 13:21:40'),
(57, '::1', '2014-02-10 13:21:40'),
(58, '::1', '2014-02-10 13:21:42'),
(59, '::1', '2014-02-10 13:22:23'),
(60, '::1', '2014-02-10 13:22:25'),
(61, '::1', '2014-02-10 13:22:41'),
(62, '::1', '2014-02-10 13:22:43'),
(63, '::1', '2014-02-10 13:29:42'),
(64, '::1', '2014-02-10 13:29:42'),
(65, '::1', '2014-02-10 13:56:33'),
(66, '::1', '2014-02-10 13:56:36'),
(67, '::1', '2014-02-10 13:56:42'),
(68, '::1', '2014-02-10 13:56:45'),
(69, '::1', '2014-02-10 13:56:55'),
(70, '::1', '2014-02-10 13:56:56'),
(71, '::1', '2014-02-10 13:56:57'),
(72, '::1', '2014-02-10 13:57:11'),
(73, '::1', '2014-02-10 13:57:11'),
(74, '::1', '2014-02-10 13:57:14'),
(75, '::1', '2014-02-10 13:57:17'),
(76, '::1', '2014-02-10 13:57:22'),
(77, '::1', '2014-02-10 13:57:29'),
(78, '::1', '2014-02-10 13:57:35'),
(79, '::1', '2014-02-10 13:57:35'),
(80, '::1', '2014-02-10 13:57:38'),
(81, '::1', '2014-02-10 13:57:38'),
(82, '::1', '2014-02-10 13:57:40'),
(83, '::1', '2014-02-10 13:57:40'),
(84, '::1', '2014-02-10 13:57:40'),
(85, '::1', '2014-02-10 13:57:42'),
(86, '::1', '2014-02-10 13:57:43'),
(87, '::1', '2014-02-10 13:57:44'),
(88, '::1', '2014-02-10 13:57:48'),
(89, '::1', '2014-02-10 13:58:10'),
(90, '::1', '2014-02-10 13:58:15'),
(91, '::1', '2014-02-10 13:58:16'),
(92, '::1', '2014-02-10 13:58:23'),
(93, '::1', '2014-02-10 13:58:24'),
(94, '::1', '2014-02-10 13:58:25'),
(95, '::1', '2014-02-10 13:58:30'),
(96, '::1', '2014-02-10 13:58:30'),
(97, '::1', '2014-02-10 13:58:35'),
(98, '::1', '2014-02-10 13:58:37'),
(99, '::1', '2014-02-10 13:58:40'),
(100, '::1', '2014-02-10 13:58:45'),
(101, '::1', '2014-02-10 14:00:32'),
(102, '::1', '2014-02-10 14:01:37'),
(103, '::1', '2014-02-10 14:01:37'),
(104, '::1', '2014-02-10 14:01:37'),
(105, '::1', '2014-02-10 14:02:08'),
(106, '::1', '2014-02-10 14:02:09'),
(107, '::1', '2014-02-10 14:02:09'),
(108, '::1', '2014-02-10 14:02:09'),
(109, '::1', '2014-02-10 14:02:09'),
(110, '::1', '2014-02-10 14:02:10'),
(111, '::1', '2014-02-10 14:02:11'),
(112, '::1', '2014-02-10 14:03:26'),
(113, '::1', '2014-02-10 14:03:26'),
(114, '::1', '2014-02-10 14:03:26'),
(115, '::1', '2014-02-10 14:03:26'),
(116, '::1', '2014-02-10 14:03:26'),
(117, '::1', '2014-02-10 14:03:28'),
(118, '::1', '2014-02-10 14:03:28'),
(119, '::1', '2014-02-10 14:03:28'),
(120, '::1', '2014-02-10 14:04:31'),
(121, '::1', '2014-02-10 14:04:31'),
(122, '::1', '2014-02-10 14:04:32'),
(123, '::1', '2014-02-10 14:04:32'),
(124, '::1', '2014-02-10 14:04:32'),
(125, '::1', '2014-02-10 14:04:33'),
(126, '::1', '2014-02-10 14:04:43'),
(127, '::1', '2014-02-10 14:04:43'),
(128, '::1', '2014-02-10 14:04:43'),
(129, '::1', '2014-02-10 14:04:43'),
(130, '::1', '2014-02-10 14:04:43'),
(131, '::1', '2014-02-10 14:04:45'),
(132, '::1', '2014-02-10 14:04:47'),
(133, '::1', '2014-02-10 14:04:47'),
(134, '::1', '2014-02-10 14:04:47'),
(135, '::1', '2014-02-10 14:04:47'),
(136, '::1', '2014-02-10 14:04:47'),
(137, '::1', '2014-02-10 14:04:49'),
(138, '::1', '2014-02-10 14:04:56'),
(139, '::1', '2014-02-10 14:04:56'),
(140, '::1', '2014-02-10 14:04:57'),
(141, '::1', '2014-02-10 14:04:57'),
(142, '::1', '2014-02-10 14:04:57'),
(143, '::1', '2014-02-10 14:04:58'),
(144, '::1', '2014-02-10 14:05:08'),
(145, '::1', '2014-02-10 14:05:09'),
(146, '::1', '2014-02-10 14:05:12'),
(147, '::1', '2014-02-10 14:05:12'),
(148, '::1', '2014-02-10 14:05:12'),
(149, '::1', '2014-02-10 14:05:12'),
(150, '::1', '2014-02-10 14:05:12'),
(151, '::1', '2014-02-10 14:05:14'),
(152, '::1', '2014-02-10 14:05:24'),
(153, '::1', '2014-02-10 14:05:25'),
(154, '::1', '2014-02-10 14:05:26'),
(155, '::1', '2014-02-10 14:05:29'),
(156, '::1', '2014-02-10 14:05:29'),
(157, '::1', '2014-02-10 14:05:31'),
(158, '::1', '2014-02-10 14:06:49'),
(159, '::1', '2014-02-10 14:06:49'),
(160, '::1', '2014-02-10 14:06:51'),
(161, '::1', '2014-02-10 14:06:56'),
(162, '::1', '2014-02-10 14:06:58'),
(163, '::1', '2014-02-10 14:06:59'),
(164, '::1', '2014-02-10 14:07:51'),
(165, '::1', '2014-02-10 14:08:05'),
(166, '::1', '2014-02-10 14:08:32'),
(167, '::1', '2014-02-10 14:08:40'),
(168, '::1', '2014-02-10 14:09:02'),
(169, '::1', '2014-02-10 14:09:28'),
(170, '::1', '2014-02-10 14:09:28'),
(171, '::1', '2014-02-10 14:09:30'),
(172, '::1', '2014-02-10 14:09:30'),
(173, '::1', '2014-02-10 14:09:38'),
(174, '::1', '2014-02-10 14:09:41'),
(175, '::1', '2014-02-10 14:09:41'),
(176, '::1', '2014-02-10 14:09:42'),
(177, '::1', '2014-02-10 14:09:49'),
(178, '::1', '2014-02-10 14:09:49'),
(179, '::1', '2014-02-10 14:09:52'),
(180, '::1', '2014-02-10 14:10:00'),
(181, '::1', '2014-02-10 14:10:19'),
(182, '::1', '2014-02-10 14:10:19'),
(183, '::1', '2014-02-10 14:10:22'),
(184, '::1', '2014-02-10 14:10:22'),
(185, '::1', '2014-02-10 14:10:22'),
(186, '::1', '2014-02-10 14:10:22'),
(187, '::1', '2014-02-10 14:10:22'),
(188, '::1', '2014-02-10 14:10:24'),
(189, '::1', '2014-02-10 14:10:31'),
(190, '::1', '2014-02-10 14:10:31'),
(191, '::1', '2014-02-10 14:10:32'),
(192, '::1', '2014-02-10 14:10:32'),
(193, '::1', '2014-02-10 14:10:33'),
(194, '::1', '2014-02-10 14:11:08'),
(195, '::1', '2014-02-10 14:11:08'),
(196, '::1', '2014-02-10 14:11:10'),
(197, '::1', '2014-02-10 14:11:13'),
(198, '::1', '2014-02-10 14:11:14'),
(199, '::1', '2014-02-10 14:11:15'),
(200, '::1', '2014-02-10 14:12:38'),
(201, '::1', '2014-02-10 14:14:17'),
(202, '::1', '2014-02-10 14:14:40'),
(203, '::1', '2014-02-10 14:15:49'),
(204, '::1', '2014-02-10 14:15:51'),
(205, '::1', '2014-02-10 14:15:55'),
(206, '::1', '2014-02-10 14:15:57'),
(207, '::1', '2014-02-10 14:16:11'),
(208, '::1', '2014-02-10 14:16:13'),
(209, '::1', '2014-02-10 14:16:22'),
(210, '::1', '2014-02-10 14:16:24'),
(211, '::1', '2014-02-10 14:16:41'),
(212, '::1', '2014-02-10 14:16:43'),
(213, '::1', '2014-02-10 14:17:15'),
(214, '::1', '2014-02-10 14:17:17'),
(215, '::1', '2014-02-10 14:17:17'),
(216, '::1', '2014-02-10 14:17:19'),
(217, '::1', '2014-02-10 14:17:19'),
(218, '::1', '2014-02-10 14:17:21'),
(219, '::1', '2014-02-10 14:17:21'),
(220, '::1', '2014-02-10 14:17:23'),
(221, '::1', '2014-02-10 14:17:23'),
(222, '::1', '2014-02-10 14:17:25'),
(223, '::1', '2014-02-10 14:17:25'),
(224, '::1', '2014-02-10 14:17:27'),
(225, '::1', '2014-02-10 14:17:27'),
(226, '::1', '2014-02-10 14:17:29'),
(227, '::1', '2014-02-10 14:17:29'),
(228, '::1', '2014-02-10 14:17:31'),
(229, '::1', '2014-02-10 14:17:31'),
(230, '::1', '2014-02-10 14:17:33'),
(231, '::1', '2014-02-10 14:17:36'),
(232, '::1', '2014-02-10 14:17:38'),
(233, '::1', '2014-02-10 14:17:47'),
(234, '::1', '2014-02-10 14:17:49'),
(235, '::1', '2014-02-10 14:17:49'),
(236, '::1', '2014-02-10 14:17:51'),
(237, '::1', '2014-02-10 14:18:32'),
(238, '::1', '2014-02-10 14:18:32'),
(239, '::1', '2014-02-10 14:18:34'),
(240, '::1', '2014-02-10 14:18:35'),
(241, '::1', '2014-02-10 14:18:37'),
(242, '::1', '2014-02-10 14:18:39'),
(243, '::1', '2014-02-10 14:18:40'),
(244, '::1', '2014-02-10 14:18:41'),
(245, '::1', '2014-02-10 14:18:43'),
(246, '::1', '2014-02-10 14:19:21'),
(247, '::1', '2014-02-10 14:19:23'),
(248, '::1', '2014-02-10 14:19:40'),
(249, '::1', '2014-02-10 14:19:40'),
(250, '::1', '2014-02-10 14:19:42'),
(251, '::1', '2014-02-10 14:19:42'),
(252, '::1', '2014-02-10 14:19:44'),
(253, '::1', '2014-02-10 14:25:25'),
(254, '::1', '2014-02-10 14:25:25'),
(255, '::1', '2014-02-10 14:25:27'),
(256, '::1', '2014-02-10 14:25:30'),
(257, '::1', '2014-02-10 14:25:33'),
(258, '::1', '2014-02-10 14:25:41'),
(259, '::1', '2014-02-10 14:25:58'),
(260, '::1', '2014-02-10 14:26:04'),
(261, '::1', '2014-02-10 14:26:04'),
(262, '::1', '2014-02-10 14:26:06'),
(263, '::1', '2014-02-10 14:26:10'),
(264, '::1', '2014-02-10 14:26:12'),
(265, '::1', '2014-02-10 14:26:18'),
(266, '::1', '2014-02-10 14:26:18'),
(267, '::1', '2014-02-10 14:26:20'),
(268, '::1', '2014-02-10 14:26:20'),
(269, '::1', '2014-02-10 14:26:30'),
(270, '::1', '2014-02-10 14:26:34'),
(271, '::1', '2014-02-10 14:26:35'),
(272, '::1', '2014-02-10 14:26:36'),
(273, '::1', '2014-02-10 14:26:39'),
(274, '::1', '2014-02-10 14:27:04'),
(275, '::1', '2014-02-10 14:27:41'),
(276, '::1', '2014-02-10 14:27:47'),
(277, '::1', '2014-02-10 14:27:47'),
(278, '::1', '2014-02-10 14:27:47'),
(279, '::1', '2014-02-10 14:28:07'),
(280, '::1', '2014-02-10 14:28:12'),
(281, '::1', '2014-02-10 14:28:13'),
(282, '::1', '2014-02-10 14:28:21'),
(283, '::1', '2014-02-10 14:29:18'),
(284, '::1', '2014-02-10 14:31:05'),
(285, '::1', '2014-02-10 14:31:24'),
(286, '::1', '2014-02-10 14:31:37'),
(287, '::1', '2014-02-10 14:31:38'),
(288, '::1', '2014-02-10 14:32:18'),
(289, '::1', '2014-02-10 14:32:20'),
(290, '::1', '2014-02-10 14:34:20'),
(291, '::1', '2014-02-10 14:34:55'),
(292, '::1', '2014-02-10 14:36:23'),
(293, '::1', '2014-02-10 14:37:54'),
(294, '::1', '2014-02-10 14:38:03'),
(295, '::1', '2014-02-10 14:38:54'),
(296, '::1', '2014-02-10 14:42:27'),
(297, '::1', '2014-02-10 14:42:33'),
(298, '::1', '2014-02-10 14:48:08'),
(299, '::1', '2014-02-10 14:49:22'),
(300, '::1', '2014-02-10 14:49:56'),
(301, '::1', '2014-02-10 14:50:40'),
(302, '::1', '2014-02-10 14:50:46'),
(303, '::1', '2014-02-10 14:50:51'),
(304, '::1', '2014-02-10 14:50:52'),
(305, '::1', '2014-02-10 14:50:53'),
(306, '::1', '2014-02-10 14:50:53'),
(307, '::1', '2014-02-10 14:50:54'),
(308, '::1', '2014-02-10 14:55:09'),
(309, '::1', '2014-02-10 14:55:10'),
(310, '::1', '2014-02-10 14:55:11'),
(311, '::1', '2014-02-10 14:55:21'),
(312, '::1', '2014-02-10 14:55:34'),
(313, '::1', '2014-02-10 14:55:34'),
(314, '::1', '2014-02-10 14:55:36'),
(315, '::1', '2014-02-10 14:55:43'),
(316, '::1', '2014-02-10 14:56:34'),
(317, '::1', '2014-02-10 14:56:44'),
(318, '::1', '2014-02-10 14:56:55'),
(319, '::1', '2014-02-10 14:56:55'),
(320, '::1', '2014-02-10 14:57:13'),
(321, '::1', '2014-02-10 14:57:13'),
(322, '::1', '2014-02-10 14:57:19'),
(323, '::1', '2014-02-10 14:57:21'),
(324, '::1', '2014-02-10 14:57:29'),
(325, '::1', '2014-02-10 14:57:56'),
(326, '::1', '2014-02-10 14:57:56'),
(327, '::1', '2014-02-10 14:58:20'),
(328, '::1', '2014-02-10 14:58:20'),
(329, '::1', '2014-02-10 14:58:42'),
(330, '::1', '2014-02-10 14:58:42'),
(331, '::1', '2014-02-10 14:59:04'),
(332, '::1', '2014-02-10 14:59:04'),
(333, '::1', '2014-02-10 14:59:29'),
(334, '::1', '2014-02-10 14:59:30'),
(335, '::1', '2014-02-10 14:59:50'),
(336, '::1', '2014-02-10 14:59:51'),
(337, '::1', '2014-02-10 14:59:53'),
(338, '::1', '2014-02-10 14:59:55'),
(339, '::1', '2014-02-10 14:59:57'),
(340, '::1', '2014-02-10 14:59:57'),
(341, '::1', '2014-02-10 15:00:18'),
(342, '::1', '2014-02-10 15:00:18'),
(343, '::1', '2014-02-10 15:00:20'),
(344, '::1', '2014-02-10 15:00:22'),
(345, '::1', '2014-02-10 15:00:31'),
(346, '::1', '2014-02-10 15:00:32'),
(347, '::1', '2014-02-10 15:00:36'),
(348, '::1', '2014-02-10 15:01:47'),
(349, '::1', '2014-02-10 15:01:55'),
(350, '::1', '2014-02-10 15:01:56'),
(351, '::1', '2014-02-10 15:01:57'),
(352, '::1', '2014-02-10 15:01:57'),
(353, '::1', '2014-02-10 15:02:01'),
(354, '::1', '2014-02-10 15:02:01'),
(355, '::1', '2014-02-10 15:02:19'),
(356, '::1', '2014-02-10 15:02:19'),
(357, '::1', '2014-02-10 15:02:25'),
(358, '::1', '2014-02-10 15:02:25'),
(359, '::1', '2014-02-10 15:02:27'),
(360, '::1', '2014-02-10 15:02:31'),
(361, '::1', '2014-02-10 15:02:31'),
(362, '::1', '2014-02-10 15:02:33'),
(363, '::1', '2014-02-10 15:02:34'),
(364, '::1', '2014-02-10 15:02:49'),
(365, '::1', '2014-02-10 15:02:52'),
(366, '::1', '2014-02-10 15:02:58'),
(367, '::1', '2014-02-10 15:03:33'),
(368, '::1', '2014-02-10 15:03:59'),
(369, '::1', '2014-02-10 15:04:02'),
(370, '::1', '2014-02-10 15:04:09'),
(371, '::1', '2014-02-10 15:04:10'),
(372, '::1', '2014-02-10 15:04:16'),
(373, '::1', '2014-02-10 15:04:18'),
(374, '::1', '2014-02-10 15:04:25'),
(375, '::1', '2014-02-10 15:04:28'),
(376, '::1', '2014-02-10 15:04:31'),
(377, '::1', '2014-02-10 15:04:31'),
(378, '::1', '2014-02-10 15:04:33'),
(379, '::1', '2014-02-10 15:04:36'),
(380, '::1', '2014-02-10 15:04:38'),
(381, '::1', '2014-02-10 15:04:40'),
(382, '::1', '2014-02-10 15:04:43'),
(383, '::1', '2014-02-10 15:04:45'),
(384, '::1', '2014-02-10 15:04:47'),
(385, '::1', '2014-02-10 15:04:49'),
(386, '::1', '2014-02-10 15:05:04'),
(387, '::1', '2014-02-10 15:05:39'),
(388, '::1', '2014-02-10 15:05:45'),
(389, '::1', '2014-02-10 15:05:55'),
(390, '::1', '2014-02-10 15:06:04'),
(391, '::1', '2014-02-10 15:06:28'),
(392, '::1', '2014-02-10 15:06:32'),
(393, '::1', '2014-02-10 15:08:20'),
(394, '::1', '2014-02-10 15:08:25'),
(395, '::1', '2014-02-10 15:08:27'),
(396, '::1', '2014-02-10 15:08:32'),
(397, '::1', '2014-02-10 15:08:37'),
(398, '::1', '2014-02-10 15:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `ip_pass`
--

CREATE TABLE IF NOT EXISTS `ip_pass` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ip_pass`
--

INSERT INTO `ip_pass` (`id`, `ip_address`) VALUES
(2, '::1');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `city_id`, `user_type_id`, `email`, `alias`, `first_name`, `last_name`, `passwd`, `passwd_reset_key`, `address`, `phone`, `bb_pin`, `postal_code`, `user_about`, `user_info`, `advert_count`, `register_date`, `membership_date`, `reset_key`, `verify_profile`, `verify_email`, `verify_address`, `thumbnail_profile`, `thumbnail_banner`, `ic_number`, `is_ic_number`, `is_active`, `is_delete`) VALUES
(2, 6, 1, '7B9ZyD0ZsT16kbsjHOiHyAwcdoarmIaHUWwq3MVGnJA', 'her0satr', 'Herry', 'Satrio', 'fe30fa79056939db8cbe99c8d601de74', '', 'Malang', '0341 1', '123456 2', '55555', 'Artist 4', 'Ini user info saya :)', 10, '2013-10-17 03:17:56', '2014-11-23', '', 0, 0, 1, '2014/02/10/20140210_081800_3321.jpg', '2014/02/10/20140210_081712_7314.png', '', 0, 1, 0),
(9, 0, 2, 'x5fmoFeYb_gxTNh0s4JKUYXgXZkb3pzJilYhqt1NKF8', 'her0satr1', 'Your', 'Name', 'fe30fa79056939db8cbe99c8d601de74', '', '', 'Phone Number', 'BB Pin', '', '', '', 0, '2014-02-07 15:30:35', '0000-00-00', '', 0, 0, 0, '', '', '123456', 1, 1, 0),
(10, 0, 3, 'FSfJY0ySM-5sLWyv78HXTra032vVFpyBWXr9WHrjUQc', 'test', 'Your', 'Name', 'fe30fa79056939db8cbe99c8d601de74', '', '', 'Phone', 'BB PIN', '', 'About', 'Info', 50, '2014-02-07 15:45:20', '2014-11-08', '', 0, 0, 0, '2014/02/10/20140210_141937_8036.jpg', '2014/02/10/20140210_141939_2145.jpg', '123456', 1, 1, 0),
(13, 0, 3, '', 'saddd', '', '', '', '', '', '', '', '', '', '', 0, '2014-02-10 09:43:09', '0000-00-00', '', 0, 0, 0, '', '', '', 0, 0, 1);

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
  `ip_address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_contact`
--

INSERT INTO `user_contact` (`id`, `user_id`, `sender_id`, `advert_id`, `name`, `email`, `phone`, `title`, `message`, `is_read`, `post_time`, `ip_address`, `city`) VALUES
(4, 2, 2, 1, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone 02', 'Title 02', 'Pesan 02', 1, '2014-02-05 14:42:22', '', ''),
(3, 2, 2, 1, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone 01', 'Title 01', 'Pesan 01', 1, '2014-02-05 14:42:09', '', ''),
(6, 2, 2, 2, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone Number', 'Contact Pemilik Iklan', '-', 0, '2014-02-10 14:32:18', '', ''),
(7, 2, 2, 2, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone Number', 'Contact Pemilik Iklan', '-', 0, '2014-02-10 14:32:20', '', ''),
(8, 2, 2, 2, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone Number', 'Contact Pemilik Iklan', '-', 0, '2014-02-10 14:42:27', '', ''),
(9, 2, 2, 2, 'Herry Satrio', 'her0satr@yahoo.com', 'Phone Number', 'Contact Pemilik Iklan', '-', 0, '2014-02-10 14:50:46', '::1', 'localhost');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

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
(25, 2, '2014-02-09 19:20:31', 'localhost', '::1'),
(26, 2, '2014-02-10 07:41:40', 'Malang', '::1'),
(27, 2, '2014-02-10 09:30:39', 'Malang', '::1'),
(28, 2, '2014-02-10 10:58:27', 'Malang', '::1'),
(29, 9, '2014-02-10 13:21:40', 'Malang', '::1'),
(30, 10, '2014-02-10 13:57:38', 'Malang', '::1'),
(31, 10, '2014-02-10 14:10:22', 'Malang', '::1'),
(32, 10, '2014-02-10 14:11:13', 'Malang', '::1'),
(33, 10, '2014-02-10 14:18:32', 'Malang', '::1'),
(34, 2, '2014-02-10 14:26:04', 'Malang', '::1');

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
(4, 'Widget 1', 'widget-1', 'Sooon .....'),
(5, 'Widget 2', 'widget-2', 'Content');
