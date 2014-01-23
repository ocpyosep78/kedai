2014-01-22 :
- ALTER TABLE `user` ADD `membership_date` DATE NOT NULL AFTER `register_date` ;
- ALTER TABLE  `user` DROP  `fullname`;
- ALTER TABLE  `user` CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
- ALTER TABLE  `user` ADD  `first_name` VARCHAR( 50 ) NOT NULL AFTER  `alias` , ADD  `last_name` VARCHAR( 50 ) NOT NULL AFTER  `first_name`;

2014-01-23 :
- ALTER TABLE `user_membership` CHANGE `is_approve` `status` INT( 11 ) NOT NULL COMMENT '{ 0: pending, 1: approve, 2: reject }';
- ALTER TABLE `user_membership` CHANGE `status` `status` VARCHAR( 11 ) NOT NULL COMMENT 'pending / approve / reject';
- ALTER TABLE `user` ADD `advert_count` INT NOT NULL AFTER `bb_pin` ;
