CREATE DATABASE IF NOT EXISTS simple_php_mvc_test;

USE simple_php_mvc_test;

CREATE TABLE person(
id INT AUTO_INCREMENT,
name VARCHAR(20),
birthdate DATE,
PRIMARY KEY (id)
);
