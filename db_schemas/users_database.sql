CREATE DATABASE phpmvc;
USE phpmvc;

CREATE TABLE users (
  user_id INT NOT NULL UNIQUE,
  username char(20) NOT NULL UNIQUE DEFAULT,
  first_name char(50) NOT NULL,
  last_name char(50) NOT NULL,
  email char(100) NOT NULL UNIQUE,
  password char(300) NOT NUll,
  roll INT NOT NULL DEFAULT 2,
  image char(50) NOT NULL DEFAULT "porfile.png";
  last_time_access DATETIME NOT NULL,
  registration_date DATETIME NOT NULL,
  PRIMARY KEY(user_id)
);
