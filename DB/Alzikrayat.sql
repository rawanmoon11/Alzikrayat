create database if not exists alzikrayat 
character set utf8mb4
collate utf8mb4_general_ci ;
use alzikrayat ;


create  table if not exists users  (
id INT AUTO_INCREMENT PRIMARY KEY ,
first_name VARCHAR(50) NOT NULL ,
last_name VARCHAR(50) NOT NULL,
email VARCHAR(100) unique NOT NULL ,
password   VARCHAR(255) NOT NULL,
location VARCHAR(100),
description TEXT ,
occupation VARCHAR(100)  
);


create table if not exists  photos (
id INT AUTO_INCREMENT PRIMARY KEY ,
user_id INT NOT NULL ,
file_name VARCHAR(255) NOT NULL,
title VARCHAR(200) NOT NULL ,
description TEXT ,
date_time TIMESTAMP default CURRENT_TIMESTAMP ,
 FOREIGN KEY (user_id) REFERENCES users (id) on delete Cascade 
);


create table if not exists  comments (
id INT AUTO_INCREMENT PRIMARY KEY ,
photo_id INT NOT NULL ,
user_id INT NOT NULL ,
comment TEXT NOT NULL  ,
date_time TIMESTAMP default CURRENT_TIMESTAMP ,
 FOREIGN KEY (photo_id) REFERENCES photos (id) on delete Cascade,
 FOREIGN KEY (user_id) REFERENCES users (id) on delete Cascade 
);