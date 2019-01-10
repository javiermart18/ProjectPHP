CREATE DATABASE phproject;

USE phproject;

CREATE TABLE users (
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
pass CHAR(128) NOT NULL,
email VARCHAR(60) NOT NULL,
registration_date DATETIME NOT NULL,
clashes INT NOT NULL,
points_clashes INT NOT NULL,
total_points INT NOT NULL,
PRIMARY KEY (user_id)
);

ALTER TABLE `quiz` ADD CONSTRAINT `fk_id_user_quiz` FOREIGN KEY (`id_user`) REFERENCES `users`(`user_id`) 
ON DELETE CASCADE ON UPDATE CASCADE;
