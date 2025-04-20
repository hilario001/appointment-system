DROP DATABASE appointment_system;
CREATE DATABASE appointment_system;

USE appointment_system;

CREATE TABLE user (
        id int PRIMARY KEY AUTO_INCREMENT,
        email varchar(50) UNIQUE NOT NULL,
        password varchar(255) NOT NULL
);

CREATE TABLE admin (
        id int PRIMARY KEY AUTO_INCREMENT,
        email varchar(50) UNIQUE NOT NULL,
        password varchar(255) NOT NULL
);
