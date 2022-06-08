CREATE DATABASE IF NOT EXISTS logs;

USE logs;

CREATE TABLE logs (

username varchar(255) NOT NULL,

password varchar(255) NOT NULL,

PRIMARY KEY(username)

);
