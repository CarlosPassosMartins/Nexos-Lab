CREATE DATABASE nexos_lab
    DEFAULT CHARACTER SET = 'utf8mb4';

USE nexos_lab

CREATE TABLE tag(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(25) NOT NULL UNIQUE
);

CREATE TABLE supplier(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    telephone CHAR(14) NOT NULL UNIQUE,
    email VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE product(
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    img_url VARCHAR(50) NOT NULL UNIQUE,
    description VARCHAR(500),
    amount INT NOT NULL CHECK(amount >= 0),
    preco DECIMAL(10, 2) NOT NULL CHECK(preco >= 0),
    supplier_id INT NOT NULL,
    tag_id INT,

    Foreign Key (supplier_id) REFERENCES supplier(id),
    Foreign Key (tag_id) REFERENCES tag(id)
);


INSERT INTO tag (name) VALUES 
('Cozinha'),
('Mesa Posta'),
('Decoração');

INSERT INTO supplier (name, telephone, email) VALUES 
('Artesanato Brasil Ltda', '(11)988765-4321', 'contato@artesanatobrasil.com'),
('Tecidos Finos S.A.',     '(21)981234-5678', 'vendas@tecidosfinos.com');

INSERT INTO product (id, name, img_url, description, amount, preco, supplier_id, tag_id) VALUES 
(1, 'Caneca de cerâmica', 'caneca.png', 'Esmalte areia, toque artesanal. Capacidade de 300 ml.', 10, 25.50, 1, 1),
(2, 'Bowl de cerâmica', 'Bowl.png', 'Para servir com simplicidade. Acabamento fosco, 16 cm.', 10, 59.90, 1, 1),
(3, 'Pano de linho', 'pano de linho.png', '', 10, 39.90, 2, 2);

