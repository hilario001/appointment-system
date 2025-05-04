CREATE TABLE user (
        id bigint unsigned PRIMARY KEY AUTO_INCREMENT,
        email varchar(64) UNIQUE NOT NULL,
        password varchar(64) NOT NULL
);

CREATE TABLE admin (
        id bigint unsigned PRIMARY KEY AUTO_INCREMENT,
        email varchar(64) UNIQUE NOT NULL,
        password varchar(64) NOT NULL
);
