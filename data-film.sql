/* Create Database and Table for Toko Online application */
CREATE DATABASE daftar_film;

USE daftar_film;
 
CREATE TABLE `film` (
  `id` INT NOT NULL auto_increment,
  `judul` VARCHAR(100),
  `genre` VARCHAR(100),
  `tahun` INT,
  `studio` VARCHAR(100),
  `sutradara` VARCHAR(100),
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
);