-- Create Database
CREATE DATABASE IF NOT EXISTS bakery_db;
USE bakery_db;

-- Products Table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    category ENUM('Cakes', 'Sandwiches', 'Cookies', 'Breads') NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Orders Table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    item_name VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    card_holder VARCHAR(255) NOT NULL,
    card_number VARCHAR(20) NOT NULL,
    expiry VARCHAR(10) NOT NULL,
    cvv VARCHAR(5) NOT NULL,
    status ENUM('Pending', 'Processing', 'Delivered', 'Cancelled') DEFAULT 'Pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Contact Messages Table
CREATE TABLE IF NOT EXISTS contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin Table
CREATE TABLE IF NOT EXISTS admins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

-- Insert Sample Products
INSERT INTO products (name, price, description, category, image_url) VALUES
('Chocolate Muffin', 12.00, 'Delicious chocolate muffins baked fresh.', 'Cookies', 'images/muffins.jpg'),
('Classic Waffles', 12.00, 'Crispy waffles served with syrup.', 'Breads', 'images/waffles.jpg'),
('Fluffy Pancakes', 12.00, 'Soft pancakes with maple syrup.', 'Breads', 'images/pancake.jpg'),
('Strawberry Cheesecake', 12.00, 'Creamy cheesecake with strawberry topping.', 'Cakes', 'images/piece cake.jpg');

-- Insert default admin (password: admin123)
INSERT INTO admins (username, password) VALUES ('admin', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');
