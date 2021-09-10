SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Database: `ktmmart`

-- Table structure for table `people`

CREATE TABLE `people` (
  `userid` int(20) NOT NULL AUTO_INCREMENT ,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
   PRIMARY KEY(userid)
);

-- Dumping data for table `people`

INSERT INTO `people` (`userid`, `name`, `email`, `pass`, `role`) VALUES
(1, 'admin', 'admin', 'admin123', 'admin'),
(2, 'hari', 'hari234@gmail.com', 'h@ri12', 'user'),
(3, 'alex', 'alex789@gmail.com', '@lex12', 'user');


-- Table structure for table `product`

CREATE TABLE `product` (
  `productid` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` varchar(30) DEFAULT NULL,
  `imgloca` varchar(50) DEFAULT NULL,
  `sub` varchar(30) DEFAULT NULL,
    PRIMARY KEY(productid)
);

-- Dumping data for table `product`
--C:\xampp\htdocs\ktmmart\cartconfig\upload

INSERT INTO `product` (`productid`, `name`, `type`, `price`, `imgloca`, `sub`) VALUES
(101, 'Iphone 12', 'apple', '110000', 'cartconfig/upload/iphone12.png', 'apple'),
(102, 'Iphone 8', 'apple', '85000', 'cartconfig/upload/iphone8.png', 'apple'),
(103, 'Iphone X max Gold', 'apple', '95000', 'cartconfig/upload/xsmaxgold.png', 'apple'),
(104, 'Redmi 9', 'mi', '18000', 'cartconfig/upload/redmi9.png', 'mi'),
(105, 'Redmi K20', 'mi', '28000', 'cartconfig/upload/redmik20.png', 'mi'),
(106, 'Redmi Note 10', 'mi', '32000', 'cartconfig/upload/redminote10.png', 'mi'),
(107, 'Bomber Jacket', 'jack', '2500', 'cartconfig/upload/Bomber.png', 'jack'),
(108, 'Leather Jacket', 'jack', '3500', 'cartconfig/upload/leatherjack.png', 'jack'),
(109, 'Out Fits Jacket', 'jack', '4000', 'cartconfig/upload/outfitsjack.png', 'jack'),
(110, 'Burton Fade', 'tshirt', '1500', 'cartconfig/upload/burtonfade.png', 'tshirt'),
(111, 'Mens Casual T-shirt ', 'tshirt', '1000', 'cartconfig/upload/casual.png', 'tshirt'),
(112, 'Liseaven Brand', 'tshirt', '1800', 'cartconfig/upload/liseaven.png', 'tshirt'),
(113, 'Denim faded', 'jeans', '2200', 'cartconfig/upload/denimfaded.png', 'jeans'),
(114, 'Half White', 'jeans', '2500', 'cartconfig/upload/halfwhite.png', 'jeans'),
(115, 'Regular Nepai Jeans', 'jeans', '2800', 'cartconfig/upload/regularnepali.png', 'jeans'),
(116, 'Bacardi limon Rum', 'rum', '5000', 'cartconfig/upload/bacardilimonrum.png', 'rum'),
(117, 'Coronation Khukuri Rum', 'rum', '6000', 'cartconfig/upload/coronationrum.png', 'rum'),
(118, 'Chivas Royal Salute', 'whiskey', '15000', 'cartconfig/upload/chivasroyalsalute.png', 'whiskey'),
(119, 'Johney Walker Red Level', 'whiskey', '9000', 'cartconfig/upload/johneyywalkerredlevel.png', 'whiskey'),
(120, 'Dewars Whiskey', 'whiskey', '12000', 'cartconfig/upload/dewars.png', 'whiskey'),
(121, 'Samsung galaxy a12', 'samsung', '22000', 'cartconfig/upload/galaxya12.png', 'samsung'),
(122, 'Samsung galaxy a70', 'samsung', '33000', 'cartconfig/upload/galaxya70.png', 'samsung'),
(123, 'Samsung galaxy 10 plus', 'samsung', '110000', 'cartconfig/upload/galaxys10plus.png', 'samsung');


