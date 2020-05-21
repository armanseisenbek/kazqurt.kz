-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2020 at 07:04 PM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazqurtkz`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `email`, `name`, `phone`, `city`, `review`, `password`) VALUES
(3, 'arman.seisenbek@gmail.com', 'arman', '87077777272', 'Almaty', '', '$2y$10$1zgdP7BRfYTDD/RU5ru7Y.pZPJRUPfD.0IMNTaVlTqvWmXHE36usu');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `cover_info` varchar(255) NOT NULL,
  `banner_info` varchar(255) NOT NULL,
  `product_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `info`, `cover_info`, `banner_info`, `product_info`) VALUES
(1, 'qurt', 'Kurt - This is a product prepared by the process of pressing thick sour cream. After boiling fermented sour milk, it was poured  it into a sack or bag. Here it would get rid of yellow water. Then the women would make kurts and put on the ore (discussed in  an earlier chapter). Kurt might be of different shapes and sizes; and that dried at the foot of a mountain would be white and  salty.  Kurt dried in deserts would be bitter and tough; biting it you could break your teeth. If it was bitter it was unpleasant to  eat, so women looked for a shady place to dry the kurt. It was also important to dry it in the windy place because in a shady  place without wind it could grow mouldy. Kazakhs used to drink tea with kurt. They also spread butter on it and ate it when they  had no bread.  In early times there was a tool to press kurt, but now nobody has one. After pressing it would be added to the broth or to wheat  porridge or drunk by itself. Usually Kazakhs and Kalmyks made kurt. Uigurs also used to make it, but neither group could make it  as well as Kazakhs. They dried kurts in the shape of hoop, but it wasn\'t as tasty and it was difficult to press. Today\'s machine  made kurts are even.', 'Натуральный домашний курт. Изготовлен по древнейшим рецептам кочевников. Содержит в своем составе кальций, белки и ценные микроэлементы. ', 'Kurt is a Kazakh dried fermented milk product.', ''),
(2, 'butter', 'Butter - Is made old milk. In ancient time Kazakh women used different methods of processing butter. After milking, the liquid  was poured into a large bowl and put on even place. When it had scums or sour cream they\'d accumulate it, then shaking or  stirring it for long hours. In hot weather it was difficult to process butter, so it had to be kept in cold place. For women who  owned a leather bag, the process was easier. They could start with sour milk and then just shake the bag.  In early times a Kazakh family might have two leather bags, one for processing kumiss the other for butter. Those who hadn\'t a  horse had only one saba (leather bag). After shaking well, they\'d put some salt in butter and then put it into sheep\'s dried  stomach. Every family had a cleaned and dried stomach for preserving butter. Here irkit or fermented sour milk would flow out,  leaving the butter behind. From fermented sour milk, Kazakhs brewed kurt which they would sometimes drink as a beverage. Kazakhs  stored winter food for summer pasture, especially several stomachs of butter, sacks of kurt, curds, thick sour milk. Together  with meat remaining from the previous winter slaughtering it would be enough for several months, Nowadays butter in the shops  seems not as nutritious and tasty as that processed without machines by saba. So people prefer and miss the old hand-made butter.', 'Молочный жир хорошо усваивается, сразу дает человеку энергию. Вот почему бутерброд со сливочным маслом считается отличным завтраком. Он дает нам силы и укрепляет организм.', 'Butter is a dairy product made from the fat and protein components of milk or cream.', ''),
(3, 'sour_cream', 'Kaimak (sour cream) - This is also made of milk, rendered as scum from boiled milk. Kazakhs used to drink tea with it. In fall,  when the grass was more nutritious, there was thick sour cream on the milk. This would be spread on bread, and kids enjoyed   eating it. Sometimes Kazakhs dried it and sent to children who lived in remote areas, usually in cans. So kaimak or scum   especially was a food of kids and elder.', 'Сметана благодаря большому содержанию жира является очень питательным продуктом. В сметане содержится лецитин, который не дает образовываться отложениям холестерина в сосудах.', 'Kaimak (sour cream) - This is also made of milk, rendered as scum from boiled milk. Kazakhs used to drink tea with it. ', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
