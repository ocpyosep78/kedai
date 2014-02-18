2014-01-22 :
- ALTER TABLE `user` ADD `membership_date` DATE NOT NULL AFTER `register_date` ;
- ALTER TABLE  `user` DROP  `fullname`;
- ALTER TABLE  `user` CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
- ALTER TABLE  `user` ADD  `first_name` VARCHAR( 50 ) NOT NULL AFTER  `alias` , ADD  `last_name` VARCHAR( 50 ) NOT NULL AFTER  `first_name`;

2014-01-23 :
- ALTER TABLE `user_membership` CHANGE `is_approve` `status` INT( 11 ) NOT NULL COMMENT '{ 0: pending, 1: approve, 2: reject }';
- ALTER TABLE `user_membership` CHANGE `status` `status` VARCHAR( 11 ) NOT NULL COMMENT 'pending / approve / reject';
- ALTER TABLE `user` ADD `advert_count` INT NOT NULL AFTER `bb_pin` ;

2014-01-24 :
- ALTER TABLE `advert` ADD `condition_id` INT NOT NULL AFTER `city_id` ;
- CREATE TABLE IF NOT EXISTS `condition` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
- INSERT INTO `condition` (`id`, `name`) VALUES (1, 'New'), (2, 'Second');

2014-01-27 :
- ALTER TABLE `advert` ADD `address` VARCHAR( 255 ) NOT NULL AFTER `content` ;
- ALTER TABLE `advert` ADD `metadata` LONGTEXT NOT NULL AFTER `negotiable` ;

2014-01-28 :
- CREATE TABLE IF NOT EXISTS `vehicle_brand` ( `id` int(11) NOT NULL AUTO_INCREMENT, `name` varchar(50) NOT NULL, `alias` varchar(50) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
- CREATE TABLE IF NOT EXISTS `vehicle_type` ( `id` int(11) NOT NULL AUTO_INCREMENT, `vehicle_brand_id` int(11) NOT NULL, `name` varchar(50) NOT NULL, `alias` varchar(50) NOT NULL, PRIMARY KEY (`id`) ) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

2014-02-17 : here
- ALTER TABLE `city` ADD `alias` VARCHAR( 50 ) NOT NULL;
- ALTER TABLE `advert` ADD `view_count` INT NOT NULL AFTER `negotiable`;
- ALTER TABLE `advert` ADD `alias` VARCHAR( 200 ) NOT NULL AFTER `name`;
