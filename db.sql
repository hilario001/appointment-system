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

CREATE TABLE service (
    id bigint unsigned PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(64) UNIQUE NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image VARCHAR(64) NOT NULL
);

INSERT INTO service (name, description, price, image)
VALUES (
    'TestTestTestTestTestTestTestTestTestTest',
    'Test',
    15.00,
    'pdp.png'
);

