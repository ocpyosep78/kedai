2014-01-22 :
- ALTER TABLE `user` ADD `membership_date` DATE NOT NULL AFTER `register_date` ;

- ALTER TABLE  `user` DROP  `fullname`;
- ALTER TABLE  `user` CHANGE  `email`  `email` VARCHAR( 255 ) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL;
- ALTER TABLE  `user` ADD  `first_name` VARCHAR( 50 ) NOT NULL AFTER  `alias` , ADD  `last_name` VARCHAR( 50 ) NOT NULL AFTER  `first_name`;