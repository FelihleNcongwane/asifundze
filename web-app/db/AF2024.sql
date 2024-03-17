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



CREATE TABLE `que` (
  `QueID` int(10) NOT NULL,
  `UserID` int(10) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




CREATE TABLE `ans` (
  `ExpertID` int(6) NOT NULL,
  `UserID` int(6) NOT NULL,
  `QueID` int(10) NOT NULL,
  `Question` varchar(500) NOT NULL,
  `Answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `expert_info` (
  `Expert_id` int(2) NOT NULL,
  `FirstName` varchar(20) NOT NULL DEFAULT '',
  `LastName` varchar(20) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `que` (`QueID`, `UserID`, `UserName`, `Description`) VALUES
(1, 13, 'parth', 'What is HTML?');


ALTER TABLE `que`
  ADD PRIMARY KEY (`QueID`);
  

ALTER TABLE `que`
  MODIFY `QueID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


INSERT INTO `ans` (`ExpertID`, `UserID`, `QueID`, `Question`, `Answer`) VALUES
(1, 13, 1, 'What is CSS?', 'Cascading StyleSheetmyboi');

ALTER TABLE `expert_info`
ADD PRIMARY KEY (`Expert_id`);
  
  ALTER TABLE `expert_info`
  MODIFY `Expert_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  
  INSERT INTO `expert_info` (`Expert_id`, `FirstName`, `LastName`, `Email_id`,  `UserName`, `Password`) VALUES
(1, 'victor', 'Quagrine', 'victor@gmail.com', 'Victorgoat', 'Qwerty12345');