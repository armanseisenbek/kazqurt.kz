-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 09 2020 г., 09:25
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.1.22
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  AUTOCOMMIT = 0;
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- База данных: `kazqurtkz`
  --
  -- --------------------------------------------------------
  --
  -- Структура таблицы `users`
  --
  CREATE TABLE `users` (
    `id` int(11) NOT NULL,
    `email` varchar(55) NOT NULL,
    `password` varchar(60) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
INSERT INTO `users` (`id`, `email`, `password`)
VALUES(1, 'admin', 'admin');
-- --------------------------------------------------------
  --
  -- Структура таблицы `products`
  --
  CREATE TABLE `products` (
    `id` int(11) NOT NULL,
    `title` varchar(255) NOT NULL,
    `cover` varchar(255) NOT NULL,
    `cover_info` varchar(255) NOT NULL,
    `banner` varchar(255) NOT NULL,
    `banner_info` varchar(255) NOT NULL,
    `product_info` varchar(255) NOT NULL,
    `gallery_title` varchar(100) NOT NULL,
    `info` varchar(500) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
--
  -- Дамп данных таблицы `products`
  --
INSERT INTO `products` (
    `id`,
    `title`,
    `cover`,
    `cover_info`,
    `banner`,
    `banner_info`,
    `product_info`,
    `gallery_title`,
    `info`
  )
VALUES
  (
    1,
    'Qurt',
    'product-cover-qurt.jpg',
    'Натуральный домашний курт. Изготовлен по древнейшим рецептам кочевников. Содержит в своем составе кальций, белки и ценные микроэлементы. ',
    'product-banner-qurt.jpg',
    'Qurt is a Kazakh dry fermented milk product',
    'цена - 50 тг шт',
    'qurt',
    'Qurt is a traditional product that belongs to the Kazakh culture. It is made by drying fermented milk, from which "Airan" is also obtained. Right after milking, the milk is put in a container and left to go sour. When it becomes thick, we work the fermented milk to make its characteristic round shape. All of the balls are then left to dry outdoors. Once dried, the Qurt is stored inside cloths, making it easier to transport'
  ),
  (
    2,
    'Butter',
    'product-cover-maslo.jpg',
    'Молочный жир хорошо усваивается, сразу дает человеку энергию. Вот почему бутерброд со сливочным маслом считается отличным завтраком. Он дает нам силы и укрепляет организм.',
    'product-banner-maslo.jpg',
    'Butter is a dairy product made from the fat and protein components of milk or cream',
    'цена maslo',
    'maslo',
    'Butter is a dairy product made from the fat and protein components of milk or cream. It is a semi-solid emulsion at room temperature, consisting of approximately 80% butterfat. To make butter - after milking, the liquid was poured into a large bowl and put on even place. When it had sour cream accumulate it, then shaking or stirring it for long hours. Butter has to be kept in a cold place. Nowadays butter in the shops seems not as nutritious and tasty as that processed without machines by saba. So people prefer hand-made butter'
  ),
  (
    3,
    'Kaymak',
    'product-cover-smetana.jpg',
    'Сметана благодаря большому содержанию жира является очень питательным продуктом. В сметане содержится лецитин, который не дает образовываться отложениям холестерина в сосудах.',
    'product-banner-smetana.jpg',
    'Kaymak is a creamy dairy product similar to clotted cream',
    'smetana product info',
    'smetana',
    'Kaymak is a dairy product similar to clotted cream, composed of about 60% milkfat.  It looks creamy, it is white in color, and it tastes particularly sweet. Kaymak was traditionally used to give energy and provided the daily requirements of minerals and vitamins. It is a popular breakfast food and can be spread on bread or eaten with honey.'
  );
-- order table
  CREATE TABLE `orders` (
    `id` int(11) NOT NULL,
    `product_name` varchar(100) NULL,
    `customer_email` varchar(100) NULL,
    `quantity` int(11) NULL,
    `date` datetime NULL,
    `status` varchar(255) NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- Индексы сохранённых таблиц
  --
  --
  -- Индексы таблицы `users`
  --
ALTER TABLE `users`
ADD
  PRIMARY KEY (`id`);
--
  -- Индексы таблицы `products`
  --
ALTER TABLE `products`
ADD
  PRIMARY KEY (`id`);
--
  -- Индексы таблицы `orders`
ALTER TABLE `orders`
ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT для сохранённых таблиц
  --
  --
  -- AUTO_INCREMENT для таблицы `users`
  --
ALTER TABLE `users`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 2;
--
  -- AUTO_INCREMENT для таблицы `users`
ALTER TABLE `orders`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT;
--
  -- AUTO_INCREMENT для таблицы `products`
  --
ALTER TABLE `products`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;
COMMIT;
--
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;