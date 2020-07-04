
DROP DATABASE IF EXISTS shopping_demo;
CREATE DATABASE shopping_demo DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

use shopping_demo;

-- Bảng Danh Mục
CREATE TABLE IF NOT EXISTS `category` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status Tinyint NULL DEFAULT '0'
);

-- Bảng sản phẩm
CREATE TABLE IF NOT EXISTS `product` (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL UNIQUE,
  status Tinyint NULL DEFAULT '0',
  price float (11,3) NOT NULL,
  sale_price float DEFAULT '0',
  category_id int NOT NULL,

  FOREIGN KEY (category_id) REFERENCES category(id)
);

-- Bảng khánh hàng
CREATE TABLE IF NOT EXISTS customer (
  id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE,
  phone VARCHAR(30) NOT NULL UNIQUE,
  address VARCHAR(150) NOT NULL,
  gender VARCHAR(5) NOT NULL
);


-- Bảng đơn hàng
CREATE TABLE IF NOT EXISTS `orders`  (
  id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
  customer_id int NOT NULL,
  status Tinyint DEFAULT '1',
  FOREIGN KEY (customer_id) REFERENCES customer (id)
);

CREATE TABLE IF NOT EXISTS `order_detail` (
  order_id int NOT NULL,
  product_id int NOT NULL,
  total_many float NOT NULL,
  quantity int NOT NULL,
  FOREIGN KEY (order_id) REFERENCES orders(id),
  FOREIGN KEY (product_id) REFERENCES product(id)

);



-- Bảng Danh Mục Sản Phẩm có những dữ liệu
INSERT INTO category(name, status) VALUES
('Quần','1'), 
('Áo','1'), 
('Ba Lô','0'), 
('Đồng Hồ','0'), 
('Ví Da','1'), 
('Giầy Da','1'), 
('Giây Lưng','0');

-- Bảng Sản Phẩm có những dữ liệu
INSERT INTO product(name, status, price, sale_price, category_id)
VALUES
('Quần âu','1','500000','0','1'),
('Quần Jeans','1','700000','0','1'),
('Quần Tây','1','1200000','0','1'),
('Quần Jogger','1','550,000','0','1'),
('Quần Thể Thao','1','200000','0','1'),
('Quần Baggy','1','600000','0','1'),
('Quần Short','1','450000','0','1'),
('Quần Kaki','1','900000','0','1'),
('ÁO Thun','1','500000','0','2'),
('ÁO Ba Lỗ','1','200000','0','2'),
('ÁO Khoác Da','1','1200000','0','2'),
('ÁO Bò Nam','1','550000','0','2'),
('ÁO Sơ Mi','1','1000000','0','2'),
('ÁO Gió','1','600000','0','2'),
('ÁO Vest','1','2050000','0','2'),
('ÁO Hoodie','1','900000','0','2'),
('Balo Laptop Tresette','1','1600000','0','3'),
('Balo Laptop Mikkor The Eli','1','30000','0','3'),
('Balo Laptop Nam','1','59000','0','3'),
('Balo Du Lịch','1','950000','0','3'),
('Balo Tocano Cratere Storty','1','1000000','0','3'),
('Đồng Hồ Omega','1',',26000000','0','4'),
('Đồng Hồ Ogival','1','28000000','0','4'),
('Đồng Hồ Seiko ','1','14000000','0','4'),
('Đồng Hồ Olym Pianus','1','40050000','0','4'),
('Đồng Hồ Orient','1','1000000','0','4'),
('Ví Da Handmade','1',',260000','0','5'),
('Ví Da Card Saffiano','1','18000','0','5'),
('Ví Da Bò Nam Dáng Đứng Màu Đen ','1','95000','0','5'),
('Ví Da Da Cá Sấu','1','350000','0','5'),
('Ví Da Nam Dáng Ngang','1','380000','0','5');


INSERT INTO customer(name, email, phone, address, gender) VALUES
('Út','huyenkn@gmail.com','012345689','Cầu Giấy - Hà Nội','Nữ'),
('TrịnhPhong','dattn98@gmail.com','012356789','Hải Dương','Nam'),
('Mì','vananhnt@gmail.com','012456789','Thanh Hóa','Nữ')
('WindsTony','daiub1998@gmail.com','0393366664','Uông Bí - Quảng Ninh','Nam'),
