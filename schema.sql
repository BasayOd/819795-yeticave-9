CREATE DATABASE yeticave
    DEFAULT CHARACTER SET utf8;
USE yeticave;
CREATE TABLE categories (
                            id INT AUTO_INCREMENT PRIMARY KEY,
                            category_name CHAR(128),
                            category_id CHAR(64)

);
INSERT INTO categories
(category_name,category_id) VALUES ('Доски и лыжи', 'boards'),('Крепления', 'attachment'),
                                   ('Ботинки', 'boots'), ('Одежда', 'clothing'), ('Инструменты', 'tools'), ('Разное', 'other');
CREATE TABLE lots (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      dt_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      lot_name TEXT UNIQUE NOT NULL,
                      lot_description MEDIUMTEXT NOT NULL,
                      lot_picture TEXT NOT NULL,
                      start_price FLOAT NOT NULL,
                      dt_end DATETIME NOT NULL ,
                      bet_step INT NOT NULL ,
                      user_id INT,
                      winner_id INT,
                      category_id INT
);

CREATE TABLE bets (
                      id INT AUTO_INCREMENT PRIMARY KEY,
                      bet_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                      bet_amount FLOAT,
                      user_id INT,
                      lot_id INT
);

CREATE TABLE users (
                       id INT AUTO_INCREMENT PRIMARY KEY,
                       dt_rg TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                       email CHAR(128) UNIQUE NOT NULL,
                       user_name CHAR  UNIQUE NOT NULL,
                       password CHAR(64) NOT NULL,
                       avatar TEXT,
                       contact TEXT NOT NULL,
                       lot_id CHAR(128),
                       bet_id CHAR(128)

);