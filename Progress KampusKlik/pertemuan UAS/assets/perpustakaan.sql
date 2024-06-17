-- Buat database "perpustakaan"
CREATE DATABASE IF NOT EXISTS perpustakaan;

-- Gunakan database "perpustakaan"
USE perpustakaan;

DROP TABLE IF EXISTS users, buku, staff, pembaca;

CREATE TABLE IF NOT EXISTS users (
    -- id INT AUTO_INCREMENT PRIMARY KEY,
	id int(11) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
	username varchar(255) NOT NULL,
	name varchar(255) NOT NULL,
	photo varchar(255) NOT NULL DEFAULT 'default.svg',
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Buat tabel "buku"
CREATE TABLE IF NOT EXISTS buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    isbn VARCHAR(20) NOT NULL,
    unit INT NOT NULL,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Buat tabel baru "staff"
CREATE TABLE IF NOT EXISTS staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    telefon VARCHAR(20),
    email VARCHAR(255),
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- Buat tabel baru "pembaca"
CREATE TABLE IF NOT EXISTS pembaca (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(255) NOT NULL,
    npm BIGINT NOT NULL,
    nohp VARCHAR(255),
    program_studi VARCHAR(255) NOT NULL,
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
  
INSERT INTO buku (nama, isbn, unit, updated) 
VALUES ('Allfathers Conquest', '12321451', 5, '2024-04-27 09:34:19'),
    ('Lucifers Rebellion', '12321452', 7, '2024-04-27 09:34:21'),
	('Gods and Demons', '12321453', 25, '2024-04-27 09:34:23'),
	('Seven Princes of Hell, their Seven Deadly Sins and Nine Circles of Hell they rule', '12321454', 3, '2024-04-27 09:34:25'),
	('The Destroyer, the Preserver and the Creator', '12321455', 2003, '2024-04-27 09:34:27');

INSERT INTO staff (nama, telefon, email, updated) 
VALUES ('Odin Allfather', '087890127718', 'odin@gmail.com', '2024-04-27 09:34:23'),
	('Vishnu Vasudeva', '081878901231', 'vishnu@gmail.com', '2024-04-27 09:34:25'),
	('Zeus King of Gods', '081290264815', 'zeus@gmail.com', '2024-04-27 09:34:27'),
	('Lucifer Morningstar', '6281290264814', 'lucifer@gmail.com', '2024-04-27 09:34:29');

INSERT INTO pembaca (nama, npm, nohp, program_studi, updated) 
VALUES ('Farhan Assegaf', 1910631170019, '081290264814', 'Informatika', '2024-04-27 09:34:23'),
	('Nanda Sukarno', 2010631170010, '085591157190', 'Informatika', '2024-04-27 09:34:25'),
	('Raden Rishwan', 2010631170114, '085591157195', 'Informatika', '2024-04-27 09:34:27'),
	('Raditya Aji Sasmoyo', 2010631170111, '081290264815', 'Informatika', '2024-04-27 09:34:29');

INSERT INTO users (email, username, password, name, updated) 
VALUES ('2010631170111@student.unsika.ac.id', 'ajiradit', '$2y$10$tlKmgKFGzlVBq67a.NpXrOJa1UjhfLZJ29IJiIdTwcOhWgv9cllXC', 'Ajiradit', '2024-04-27 09:34:27');
-- VALUES ('2010631170111@student.unsika.ac.id', 'ajiradit', PASSWORD('ajiradit2503'), 'Ajiradit', '2024-04-27 09:34:27');
