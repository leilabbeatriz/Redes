create database banco;
-- drop database banco;
use banco;

create TABLE users(
    id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    access INTEGER DEFAULT 1,
    password LONGTEXT
);

insert into users(password,email,firstname,lastname,access) values 
(123,'maria@maria','maria','maria',1),
(123,'gab@gab','gabriel','gabriel',1),
(123,'w@w','wand','wand',1)
;