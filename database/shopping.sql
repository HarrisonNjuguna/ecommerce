SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
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
(1, 'Adidas', 'cartoon Astronaut T-Shirts', 78.00, 'img/products/f1.jpg', '2022-02-17 00:00:00'),
(2, 'Nike', 'Nike Tshirt', 122.00, 'img/products/f2.jpg', '2022-02-17 00:00:00'),
(3, 'Adidas', 'Cartoon Astronaut T-Shirts', 122.00, 'img/products/f3.jpg', '2022-02-17 00:00:00'),
(4, 'Adidas', 'Cartoon Astronaut T-Shirts', 132.00, 'img/products/f4.jpg', '2022-02-17 00:00:00'),
(5, 'Adidas', 'Cartoon Astronaut T-Shirts', 138.00, 'img/products/f5.jpg', '2022-02-17 00:00:00'),
(6, 'Adidas', 'Cartoon Astronaut T-Shirts', 160.00, 'img/products/f6.jpg', '2022-02-17 00:00:00'),
(7, 'Adidas', 'Cartoon Astronaut T-Shirts', 200.00, 'img/products/f6.jpg', '2022-02-17 00:00:00'),
(8, 'Adidas', 'Cartoon Astronaut T-Shirts', 232.00, 'img/products/f8.jpg', '2022-02-17 00:00:00'),
(9, 'Adidas', 'Cartoon Astronaut T-Shirts', 152.00, 'img/products/n1.jpg', '2022-02-17 00:00:00'),
(10, 'Adidas', 'Cartoon Astronaut T-Shirts', 78.00, 'img/products/n2.jpg', '2022-02-17 00:00:00'),
(11, 'Adidas', 'Cartoon Astronaut T-Shirts', 78.00, 'img/products/n3.jpg', '2022-02-17 00:00:00'),
(12, 'Adidas', 'Cartoon Astronaut T-Shirts', 78.00, 'img/products/n4.jpg', '2022-02-17 00:00:00'),
(13, 'Adidas', 'Cartoon Astronaut T-Shirts', 78.00, 'img/products/n5.jpg', '2022-02-17 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;