CREATE DATABASE nama_database;

USE nama_database;

CREATE TABLE users (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  role ENUM('admin_ganjil', 'user_ganjil') NOT NULL DEFAULT 'user_ganjil'
);

INSERT INTO users (username, password, role) VALUES ('admin_ganjil', 'admin_ganjil_password', 'admin_ganjil');
INSERT INTO users (username, password, role) VALUES ('user_ganjil', 'user_ganjil_password', 'user_ganjil');