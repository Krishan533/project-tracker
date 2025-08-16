
CREATE DATABASE IF NOT EXISTS project_tracker CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE project_tracker;

DROP TABLE IF EXISTS clients;
CREATE TABLE clients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id VARCHAR(50) UNIQUE,
    name VARCHAR(100),
    phone VARCHAR(20),
    email VARCHAR(100),
    address TEXT,
    project_status VARCHAR(50) DEFAULT 'Pending',
    files TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS admin_users;
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE,
    password VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO admin_users (username, password) VALUES
('admin', '$2b$12$0LoGVrKDT3L/4DeZvLSNbOkukA15oA9Ki6bTB.vpgBVJDtB8Pew1q');
