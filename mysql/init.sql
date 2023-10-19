USE db1;
CREATE TABLE products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  category VARCHAR(255) NOT NULL,
  image VARCHAR(255) NULL
);

INSERT INTO products (name, price, category, image) VALUES ('Product 1', 10.00, 'Electronics', 'https://example.com/product1.jpg');
INSERT INTO products (name, price, category, image) VALUES ('Product 2', 20.00, 'Clothing', 'https://example.com/product2.jpg');
INSERT INTO products (name, price, category, image) VALUES ('Product 3', 30.00, 'Home Goods', 'https://example.com/product3.jpg');