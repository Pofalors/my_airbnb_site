CREATE DATABASE IF NOT EXISTS mmb_website;

USE mmb_website;

CREATE TABLE IF NOT EXISTS contact_form (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    subject VARCHAR(50) NOT NULL,
    booking_start_date DATE,
    booking_end_date DATE,
    room_type VARCHAR(50),
    message TEXT,
    file_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);