<?php

require_once __DIR__ . '/conn.php';

/**
 * CREATE USER 'trainingland'@'localhost'IDENTIFIED BY 'trainingland';
 * GRANT ALL PRIVILEGES ON *.* TO 'trainingland'@'localhost';
 * FLUSH PRIVILEGES;
 */

mysqli_query(
    $conn,
    'CREATE TABLE IF NOT EXISTS `user` (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        salt VARCHAR(63) NOT NULL,
        phone VARCHAR(63),
        gender TINYINT(1),
        birthday INT,
        PRIMARY KEY (id)
    )'
);

mysqli_query(
    $conn,
    'CREATE TABLE IF NOT EXISTS trainer (
        id INT NOT NULL AUTO_INCREMENT,
        user_id INT NOT NULL UNIQUE,
        expirience TEXT,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES `user`(id)
    )'
);
