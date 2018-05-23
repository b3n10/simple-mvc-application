DROP DATABASE IF EXISTS simplemvc;

CREATE DATABASE simplemvc;

USE simplemvc;

CREATE TABLE users (
	id int(5) not null AUTO_INCREMENT PRIMARY KEY,
	username varchar(20),
	email varchar(20)
);
