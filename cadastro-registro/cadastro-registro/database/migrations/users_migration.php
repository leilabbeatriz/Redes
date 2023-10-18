<?php
$conn = connection();

$conn->exec(
"CREATE TABLE IF NOT EXISTS users (
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    access INTEGER DEFAULT 1,
    password LONGTEXT
    )"
);