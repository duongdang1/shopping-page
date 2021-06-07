

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apple shop`
CREATE TABLE `user` (
    `user_id` int(11) NOT NULL primary key AUTO_INCREMENT,
    `firstName` varchar(100) NOT NULL,
    `lastName` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `registerDate` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `cart` (

    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------
CREATE TABLE `history` (

    `user_id` int(11) NOT NULL,
    `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
--
-- Table structure for table `product`
--

CREATE TABLE `product` (
   `item_id` int(11) NOT NULL primary key AUTO_INCREMENT,
   `item_brand` varchar(200) NOT NULL,
   `item_name` varchar(255) NOT NULL,
   `item_price` double(10,2) NOT NULL,
   `item_image` varchar(255) NOT NULL,
   `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_register`) VALUES
(1, 'Iphone', 'Iphone 12', 829.00, './assets/products/1.jpg', '2021-05-20 11:08:57'), -- NOW()
(2, 'Iphone', 'Iphone 12 pro max', 999.00, './assets/products/2.png', '2021-05-20 11:08:57'),
(3, 'Iphone', 'Iphone 11', 814.00, './assets/products/3.jpeg', '2021-05-20 11:08:57'),
(4, 'Iphone', 'Iphone 11 pro max', 900.00, './assets/products/4.jpg', '2021-05-20 11:08:57'),
(5, 'Ipad', 'Ipad air', 599.00, './assets/products/5.jpg', '2021-05-20 11:08:57'),
(6, 'Ipad', 'Ipad pro', 799.00, './assets/products/6.jpg', '2021-05-20 11:08:57'),
(7, 'Macbook', 'Macbook air M1', 999.00, './assets/products/8.jpeg', '2021-05-20 11:08:57'),
(8, 'Macbook', 'Macbook pro M1', 1999.00, './assets/products/7.jpg', '2021-05-20 11:08:57'),
(9, 'mac', 'Imac', 699.00, './assets/products/10.jpg', '2021-05-20 11:08:57'),
(10, 'mac', 'mac mini M1', 1500.00, './assets/products/11.jpg', '2021-05-20 11:08:57');

-- --------------------------------------------------------
COMMIT;

