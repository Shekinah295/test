CREATE TABLE `account_type`(
    `act_id` INT(10) NOT NULL AUTO_INCREMENT,
    `act_name` VARCHAR(20) NOT NULL,
    `act_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
    PRIMARY KEY(`act_id`)
);
INSERT INTO `account_type` VALUES (`user`),(`council`),(`government`);

ALTER TABLE `users`
ADD COLUMN `act_id` INT(3) NOT NULL DEFAULT 1,
ADD FOREIGN KEY(`act_id`) REFERENCES `account_type`(`act_id`) ON UPDATE CASCADE ON DELETE CASCADE;