/CREATE DATABASE `fixmystreet`;

-- -----------------------------------------------------
-- Table `fixmystreet`.`Users`
-- -----------------------------------------------------
CREATE TABLE `users` (
  `u_id` INT(255) NOT NULL AUTO_INCREMENT,
  `fullname` VARCHAR(45) NOT NULL,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `gender` ENUM('Male', 'Female') NOT NULL,
  `nickname` VARCHAR(45) NOT NULL,
  `wardname` INT(25) NOT NULL,
  PRIMARY KEY (`u_id`)
  );


-- -----------------------------------------------------
-- Table `fixmystreet`.`Province`
-- -----------------------------------------------------
CREATE TABLE `province` (
  `p_id` INT(255) NOT NULL AUTO_INCREMENT,
  `p_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`p_id`)
  );


-- -----------------------------------------------------
-- Table `fixmystreet`.`District`
-- -----------------------------------------------------
CREATE TABLE `district` (
  `d_id` INT(255) NOT NULL AUTO_INCREMENT,
  `p_id` INT(25) NOT NULL,
  `d_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`d_id`),
  FOREIGN KEY (`p_id`) REFERENCES `province` (`p_id`) ON UPDATE CASCADE ON DELETE CASCADE
);


-- -----------------------------------------------------
-- Table `fixmystreet`.`Ward`
-- -----------------------------------------------------
CREATE TABLE `ward` (
  `w_id` INT(255) NOT NULL AUTO_INCREMENT,
  `w_name` VARCHAR(45) NOT NULL,
  `d_id` INT(15) NOT NULL,
  PRIMARY KEY (`w_id`),
  FOREIGN KEY (`d_id`)REFERENCES `district` (`d_id`) ON UPDATE CASCADE ON DELETE CASCADE
);


-- -----------------------------------------------------
-- Table `fixmystreet`.`Problem_category`
-- -----------------------------------------------------
CREATE TABLE `problem_category` (
  `pro_id` INT(255) NOT NULL AUTO_INCREMENT,
  `problem_name` VARCHAR (120) NOT NULL,
  PRIMARY KEY (`pro_id`)
);


-- -----------------------------------------------------
-- Table `fixmystreet`.`Report_problem`
-- -----------------------------------------------------
CREATE TABLE `report_problem` (
  `rp_id` INT(255) NOT NULL AUTO_INCREMENT,
  `pro_id` INT(25) NOT NULL,
  `problem_description` TEXT(400) NOT NULL,
  `image1` VARCHAR(255) NOT NULL,
  `image2` VARCHAR(255) NOT NULL,
  `image3` VARCHAR(255)NOT NULL,
  `status` ENUM('no', 'yes') NOT NULL,
  `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  PRIMARY KEY (`rp_id`),
  FOREIGN KEY (`pro_id`) REFERENCES `problem_category` (`pro_id`) ON UPDATE CASCADE ON DELETE CASCADE
);
