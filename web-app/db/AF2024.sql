DROP DATABASE IF EXISTS `AF2024`;
CREATE DATABASE `AF2024`;
USE `AF2024`;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(4) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;