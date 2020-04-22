-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2020 at 06:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `phone` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `comments` varchar(30) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `lname`, `phone`, `email`, `country`, `city`, `state`, `zipcode`, `Status`, `type`, `comments`, `date`) VALUES
(12, 'gur', 'sharan', '1234567890', 'g@g.com', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'Without Extra Cheese', '2020-04-15 13:48:41'),
(14, 'tarndeep', 'singh', '1234567890', 't@gmail.com', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'peanut allergic', '2020-04-17 13:50:09'),
(16, 'kamal', 'jot', '1234567089', 'kamal@gmail.com', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'with extra cheese', '2020-04-20 19:15:00'),
(20, 'gur', 'kaur', '1234567089', 't@gmail.com', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'Add pineapple topping', '2020-04-23 19:15:52'),
(21, 'Jaskaran', 'Singh', '6476129778', 'g@g.com', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'Add 1 extra creamy garlic', '2020-04-24 19:18:49'),
(22, 'gursharan', 'kaur', '6476129778', 'Ggursharankaur2669@conestogac.on.ca', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'unread', 'Order', 'Without Extra Cheese', '2020-04-10 19:13:51'),
(23, 'Gurneet', 'Kaur', '1234567890', 'Ggursharankaur2669@conestogac.on.ca', 'Canada', 'brampton', 'Ontario', 'L6Z4R6', 'read', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `description` varchar(400) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `description`, `image`) VALUES
(1, 'Cauliflower Crust ', 12.79, 'Sometimes we even impress ourselves. Pizza Pizza\'s Cauliflower Crust is gluten-free, vegan,  \"/n\" contains two servings of vegetables, and tastes awesome! Available in Medium only.', 'images/1.jpg'),
(2, 'Keto Crust ', 13.99, 'Get your pizza fix with less carbs! Create your own by selecting any toppings of your choice.\"/n\" Made with certified Keto Uncrust.See About our \"/n\" Food page for nutritional info. Available in Small only.', 'images/2.jpg'),
(3, 'Spicy BBQ ', 13.29, 'Saddle up for a slice - It\'s a showdown at Flavour Corral, with grilled chicken, hot banana peppers, red onions, Texas BBQ sauce and mozzarella cheese. Wanna amp it up even more? Add Frank\'s Red Hot!', 'images/3.jpg'),
(4, 'Drinks', 8.99, 'Choose from a variety of Coke products. Available in 355 mL cans.', 'images/Coke.jpg'),
(5, ' Cauli Blanca', 16.49, 'You\'ve never had a veggie pizza like this before! Our Cauliflower Crust, is drizzled with olive oil and topped with artichokes, grilled zucchini, roasted garlic, mozzarella cheese, parmesan and Italiano blend seasoning. Available in Medium only.', 'images/5.jpg'),
(6, 'Chicken Bruschetta', 14.79, 'A Twist on Italian Taste - What can make bruschetta better? How about grilled chicken? Add roasted garlic, Italiano Blend Seasoning, parmesan and mozzarella, and it\'s molto deliziosa.', 'images/6.jpg'),
(7, 'Thin Pesto Amore', 7.29, 'Fall in love with pesto all over again with this 10\" thin crust topped with spinach, red onions, fire roasted red peppers, goat cheese, mozzarella and pesto sauce.', 'images/9.jpg'),
(8, 'Half Moon Bread', 5.19, 'Take a 10-inch round of our signature dough, fold it over, then lather it in garlic butter and a delicious four-cheese blend and bake to perfection. Watch people go TOTALLY CRAZY. Any questions??', 'images/11.jpg'),
(9, 'Chipotle Chicken', 11.69, 'Smoky, zesty and bold - This Southwest-style flavor-bomb is set off with smoky chipotle sauce, then topped with chipotle chicken, zesty red onions, and melty mozzarella. Me gusta?', 'images/7.jpg'),
(10, 'Greek', 13.79, 'Say \"Opa\" and grab a slice - This delicious, Greek-inspired pie is legendary, taking you on an odyssey of salty kalamata olives, fresh spinach, tangy red onions, and crumbly feta cheese.', 'images/10.jpg'),
(11, 'Garlic Bread', 4.49, 'Is there a more classically crushable side-dish to go with a hot pizza? We think not, sir. Tear off a chunk of our thick-cut, country-style bread, brushed with rich garlic butter.', 'images/8.jpg'),
(12, 'Mexican Green', 14.99, 'A pizza loaded with crunchy onions, crisp capsicum, juicy tomatoes and jalapeno with a liberal sprinkling of exotic Mexican herbs.\r\n\r\n', 'images/17.jpg'),
(13, 'Garden Salad', 5.85, 'There\'s nothing like a market-fresh green salad! Enjoy cucumber slices, and ripe red grape tomatoes on a bed of fresh crisp iceberg lettuce. All with the dressing of your choice.', 'images/13.jpg'),
(14, 'Chicken Bites', 9.99, 'Boneless chunks of tender all-white meat, baked with a crispy,breading. Served with your choice of dipping sauce.', 'images/14.jpg'),
(15, 'Twin Pizza', 13.29, 'Create two masterpieces with our huge range of crusts, toppings and sauces.', 'images/15.jpg'),
(43, 'Mcflurry', 12, 'Oreo delight with ice cream scoop', 'mcdonalds-oreo-mcflurry.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `id` int(10) NOT NULL,
  `username` char(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `isadmin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`id`, `username`, `password`, `confirmpassword`, `email`, `isadmin`) VALUES
(0, 'gursharan', 'admin123', 'admin123', 'Ggursharankaur2669@conestogac.on.ca', 0),
(2, 'admin', 'admin123', 'admin123', 'gursharan@gmail.com', 1),
(0, 'gur', 'Randhawa_89', 'Randhawa_89', 'Ggursharankaur2669@conestogac.on.ca', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
