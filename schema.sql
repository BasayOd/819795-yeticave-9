CREATE DATABASE yeticave
    DEFAULT CHARACTER SET utf8
    DEFAULT  COLLATE  utf8_general_ci;
USE yeticave;
CREATE TABLE categories (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            name CHAR(128) UNIQUE,
                            icon CHAR(64)

);

CREATE TABLE lots (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      dt_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      name CHAR(128) UNIQUE,
                      description MEDIUMTEXT,
                      img CHAR(128),
                      price FLOAT,
                      dt_end DATETIME,
                      bet_step INT,
                      user_id INT,
                      winner_id INT,
                      category_id INT
);

CREATE TABLE bets (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      amount FLOAT,
                      user_id INT,
                      lot_id INT
);

CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       dt_rg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       email CHAR(128) UNIQUE,
                       name CHAR(128)  UNIQUE,
                       password CHAR(64),
                       avatar CHAR(128),
                       contact CHAR(128)

);