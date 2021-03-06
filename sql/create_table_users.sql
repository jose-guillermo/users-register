DROP DATABASE IF EXISTS register;

CREATE DATABASE register;

USE register;

DROP TABLE IF EXISTS users;

CREATE TABLE users(
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(99) NOT NULL,
    user_email VARCHAR(99) UNIQUE NOT NULL,
    user_password VARCHAR(99) NOT NULL,
    user_state INT(1) DEFAULT 1,
    user_time_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_time_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
