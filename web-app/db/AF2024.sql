DROP DATABASE IF EXISTS AF2024;
CREATE DATABASE AF2024 CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE AF2024;

SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(4) NOT NULL AUTO_INCREMENT,
    `email` varchar(100) NOT NULL,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    `password` varchar(255) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;


CREATE TABLE IF NOT EXISTS `discussions` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
#     `course_id` int(4) NOT NULL,
    `user_id` int(4) NOT NULL,
    `post` text NOT NULL,
    `p_time` timestamp DEFAULT CURRENT_TIMESTAMP,
    `likes` int(10) DEFAULT 0,
    `dislikes` int(10) DEFAULT 0,
    PRIMARY KEY (`id`),
    KEY `user_id` (`user_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE IF NOT EXISTS `replies` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `user_id` int(4) NOT NULL,
    `post_id` int(10) NOT NULL,
    `post` text NOT NULL,
    `p_time` timestamp DEFAULT CURRENT_TIMESTAMP,
    `likes` int(10) DEFAULT 0,
    `dislikes` int(10) DEFAULT 0,
    PRIMARY KEY (`id`),
    KEY `user_id` (`user_id`),
    KEY `post_id` (`post_id`),
    FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
    FOREIGN KEY (`post_id`) REFERENCES `discussions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
