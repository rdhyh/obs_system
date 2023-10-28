-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for obs_system
CREATE DATABASE IF NOT EXISTS `obs_system` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `obs_system`;

-- Dumping structure for table obs_system.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(10) NOT NULL,
  `cust_id` int(11) NOT NULL DEFAULT '0',
  `cart_quantity` int(11) NOT NULL DEFAULT '0',
  `cart_price` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cart_id`),
  KEY `FK_cart_item` (`item_id`),
  KEY `FK_cart_customer` (`cust_id`),
  CONSTRAINT `FK_cart_customer` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  CONSTRAINT `FK_cart_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` (`cart_id`, `item_id`, `cust_id`, `cart_quantity`, `cart_price`) VALUES
	(1, 'IT001', 1, 1, 129);
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for table obs_system.category
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` varchar(10) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.category: ~4 rows (approximately)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`category_id`, `category_name`) VALUES
	('CT001', 'Cakes'),
	('CT002', 'Cookies'),
	('CT003', 'Muffins'),
	('CT004', 'Breads');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table obs_system.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) DEFAULT NULL,
  `cust_address` varchar(50) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.customer: ~2 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_address`, `cust_email`) VALUES
	(1, 'Liyana', 'No 23 Jalan Delima', 'liyana@gmail.com'),
	(2, 'Syahmi', 'No 12 Jalan Keli', 'syahmi@gmail.com');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

-- Dumping structure for table obs_system.item
CREATE TABLE IF NOT EXISTS `item` (
  `item_id` varchar(10) NOT NULL,
  `category_id` varchar(10) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `item_price` int(11) NOT NULL DEFAULT '0',
  `item_pic` blob NOT NULL,
  `item_details` varchar(300) NOT NULL,
  PRIMARY KEY (`item_id`),
  KEY `FK_item_category` (`category_id`),
  CONSTRAINT `FK_item_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.item: ~7 rows (approximately)
/*!40000 ALTER TABLE `item` DISABLE KEYS */;
INSERT INTO `item` (`item_id`, `category_id`, `item_name`, `item_price`, `item_pic`, `item_details`) VALUES
	('IT001', 'CT001', 'Blueberry Cheesecake', 129, _binary 0x75706C6F616465645F70686F746F2F20426C756562657272792043686565736563616B652E706E67, 'FINEST INGREDIENTS: We use only the finest fresh ingredients, including butter, biscuits crumbs, castor sugar, cheese, vanilla extract, eggs and blueberry topping.'),
	('IT002', 'CT001', 'Classic Tiramisu Mille Crepe Cake', 159, _binary 0x75706C6F616465645F70686F746F2F20436C617373696320546972616D697375204D696C6C652043726570652043616B652E706E67, 'FINEST INGREDIENTS: We use only the finest fresh ingredients including Butter, Egg, Flour, Sugar, Dairy Cream, Tiramisu, Cocoa Powder.'),
	('IT003', 'CT002', 'Gluten Free Bow Gift Boxes', 146, _binary 0x75706C6F616465645F70686F746F2F2062617463685F476C7574656E204672656520426F77204769667420426F7865732E6A7067, '12 Cookie Gluten Free Bow Box Includes: 4 Gluten Free Buttercream Frosted Sugar Cookies, 2 Gluten Free Chocolate Chip Cookies, 2 Gluten Free Oatmeal Raisin Cookies, 2 Gluten Free Snickerdoodle Cookies and 2 Gluten Free Fudge Brownies.'),
	('IT004', 'CT002', 'Gluten-Free Sugar Cookie Duo', 100, _binary 0x75706C6F616465645F70686F746F2F2062617463685F476C7574656E2D4672656520537567617220436F6F6B69652044756F2E6A7067, 'Gluten-free sugar cookies, 2 boxes (10 cookies, 7.5 oz each box), Net Weight: 15 oz.'),
	('IT005', 'CT003', 'Classic Cupcakes', 65, _binary 0x75706C6F616465645F70686F746F2F20436C61737369632043757063616B65732E6A7067, 'What\'s in it?\r\nFlour, butter, eggs, baking powder, margarine, whipping cream, chocolate, sugar, cocoa, mixed nuts, cinnamon, red colouring, Lotus Biscoff spread, Lotus Biscoff biscuits, Nutella spread, hazelnuts, Gula Melaka, pandan.\r\n'),
	('IT006', 'CT003', 'Original Chocolate Cupcakes', 108, _binary 0x75706C6F616465645F70686F746F2F204F726967696E616C2043686F636F6C6174652043757063616B65732E6A7067, 'What\'s in it?\r\nFlour, butter, eggs, sugar, milk, dairy cream, chocolate, cocoa powder, canola oil\r\n'),
	('IT007', 'CT004', 'Blueberry Almond Loaf', 95, _binary 0x75706C6F616465645F70686F746F2F20424C5545424552525920414C4D4F4E44204C4F41462E6A7067, 'Ingredients: Blueberries, Ground Almond, Australian Cream Cheese, Vanilla, Flour, Butter, Eggs, Sugar.'),
	('IT008', 'CT004', 'Lemon Thyme Loaf', 79, _binary 0x75706C6F616465645F70686F746F2F204C454D4F4E205448594D45204C4F41462E6A7067, 'Ingredients: Lemon, Fresh Lemon Juice, Thyme, Yogurt, Flour, Butter, Eggs, Sugar.');
/*!40000 ALTER TABLE `item` ENABLE KEYS */;

-- Dumping structure for table obs_system.order
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` varchar(10) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `order_price` int(11) NOT NULL DEFAULT '0',
  `order_date` varchar(21) NOT NULL,
  `order_status` varchar(10) NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `FK_order_item` (`item_id`),
  KEY `FK_order_customer` (`cust_id`),
  CONSTRAINT `FK_order_customer` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  CONSTRAINT `FK_order_item` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.order: ~0 rows (approximately)
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` (`order_id`, `item_id`, `cust_id`, `order_price`, `order_date`, `order_status`) VALUES
	(1, 'IT001', 1, 129, '15-Disember-21', 'Preparing');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;

-- Dumping structure for table obs_system.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table obs_system.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
