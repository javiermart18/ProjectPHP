CREATE DATABASE phproject;

USE phproject;

CREATE TABLE users(
user_id MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT ,
username VARCHAR( 20 ) NOT NULL ,
passCHAR( 128 ) NOT NULL ,
email VARCHAR( 60 ) NOT NULL ,
registration_date DATETIME NOT NULL ,
total_points INT,
PRIMARY KEY ( user_id )
)

create table quiz (
id_quiz MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
id_user int,
name varchar(100),
score int,
date DATETIME NOT NULL,
PRIMARY KEY (id_quiz)
)

/*
Relationships have been made from phpMyAdmin, indicating that table users is related to the quiz table where the referenced key is user_id from the users table and the foreign key is id_user from the quiz table. 
*/

