CREATE DATABASE street_vendor;
USE street_vendor;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    role ENUM('vendor', 'supplier')
);

CREATE TABLE raw_materials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    price DECIMAL(10,2),
    quantity_available INT,
    supplier_id INT,
    FOREIGN KEY (supplier_id) REFERENCES users(id)
);
