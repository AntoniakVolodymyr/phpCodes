CREATE DATABASE IF NOT EXISTS specialdb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE specialdb;

CREATE TABLE pages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO pages (title, slug, content) VALUES
('Main Page', 'home', 'Wellcome to my website'),
('About us', 'about', '*some information*'),
('Contacts', 'contact', 'Write to admin in discord'),
('PHP', 'php', 'Its might working once i finish it');