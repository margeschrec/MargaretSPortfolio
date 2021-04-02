CREATE DATABASE `artportfolio`;

USE `artportfolio`;

CREATE TABLE `artportfolio`.`portfolio` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `date` year NOT NULL,
  `size` varchar(20) NOT NULL,
  `medium` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
);
