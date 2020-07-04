	CREATE DATABASE `demo_project` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;

	use demo_project;


	CREATE TABLE IF NOT EXISTS `category` (
	  `id` INT PRIMARY KEY AUTO_INCREMENT,
	  `name` VARCHAR(100)
	) ENGINE = InnoDB;


	CREATE TABLE IF NOT EXISTS `product` (
	  `id` INT PRIMARY KEY AUTO_INCREMENT,
	  `name` VARCHAR(200) NOT NULL,
	  `image` VARCHAR(200) NOT NULL,
	  `price` float NOT NULL,
	  `sale_price` float NOT NULL,
	  `content` text NULL,
	  `category_id` INT NOT NULL,
	  FOREIGN KEY (`category_id`)  REFERENCES `category` (`id`)
	) ENGINE = InnoDB;


	CREATE TABLE IF NOT EXISTS `banner` (
	  `id` INT PRIMARY KEY AUTO_INCREMENT,
	  `name` VARCHAR(200) NOT NULL,
	  `image` VARCHAR(200) NOT NULL
	) ENGINE = InnoDB;


	INSERT INTO category(name) VALUES
	('Áo nam'),
	('Áo nữ'),
	('Quần bò'),
	('Quần ngố');


	INSERT INTO product(name, image, price, sale_price, category_id)
	VALUES
	('Áo đàm dạ hội 2019','Penguins.jpg',500000,0,2),
	('Áo vest nam 2019','Penguins.jpg',500000,0,1),
	('Quần ngố cao cấp nam','Penguins.jpg',500000,0,4),
	('Quần bồ thụy sỹ cao cấp','Penguins.jpg',500000,0,3);


	INSERT INTO banner(name, image)
	VALUES
	('Áo đàm dạ hội 2019','home-slider2.jpg'),
	('Áo vest nam 2019','home-slider2.jpg'),
	('Quần ngố cao cấp nam','home-slider2.jpg'),
	('Quần bồ thụy sỹ cao cấp','home-slider2.jpg');

