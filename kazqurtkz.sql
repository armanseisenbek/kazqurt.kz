-- phpMyAdmin SQL Dump
-- version 5.0.2
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
  -- Структура таблицы `customers`
  --
  CREATE TABLE `customers` (
    `id` int(11) NOT NULL,
    `product_id` int(11) NOT NULL,
    `name` varchar(255) NOT NULL,
    `phone` varchar(255) NOT NULL,
    `message` text DEFAULT NULL,
    `date` datetime NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
-- --------------------------------------------------------
  --
  -- Структура таблицы `products`
  --
  CREATE TABLE `products` (
    `id` int(11) NOT NULL,
    `title` varchar(100) NOT NULL,
    `cover` varchar(255) NOT NULL,
    `cover_info` varchar(255) NOT NULL,
    `banner` varchar(255) NOT NULL,
    `banner_info` varchar(255) NOT NULL,
    `product_info` varchar(255) NOT NULL,
    `gallery_title` varchar(100) NOT NULL
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
    `gallery_title`
  )
VALUES
  (
    1,
    'Qurt',
    'product-cover-qurt.jpg',
    'Натуральный домашний курт. Изготовлен по древнейшим рецептам кочевников. Содержит в своем составе кальций, белки и ценные микроэлементы. ',
    'product-banner-qurt.jpg',
    'Курт — казахский сухой кисломолочный продукт.',
    'цена - 50 тг шт',
    'qurt'
  ),
  (
    2,
    'Butter',
    'product-cover-maslo.jpg',
    'Молочный жир хорошо усваивается, сразу дает человеку энергию. Вот почему бутерброд со сливочным маслом считается отличным завтраком. Он дает нам силы и укрепляет организм.',
    'product-banner-maslo.jpg',
    'Butter is a dairy product made from the fat and protein components of milk or cream',
    'цена maslo',
    'maslo'
  ),
  (
    3,
    'Kaymak',
    'product-cover-smetana.jpg',
    'Сметана благодаря большому содержанию жира является очень питательным продуктом. В сметане содержится лецитин, который не дает образовываться отложениям холестерина в сосудах.',
    'product-banner-smetana.jpg',
    'Kaymak is a creamy dairy product similar to clotted cream',
    'smetana product info',
    'smetana'
  );
-- Таблица заказов хранит заказы нужно даполнить
  -- CREATE TABLE `orders` (
  --   `id` int(11) NOT NULL,
  --   `product_id` int(11) NOT NULL,
  --   `customer_id` int(11) NOT NULL,
  --   `date` datetime NOT NULL
  -- ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
  -- Индексы сохранённых таблиц
  --
  --
  -- Индексы таблицы `customers`
  --
ALTER TABLE `customers`
ADD
  PRIMARY KEY (`id`);
--
  -- Индексы таблицы `products`
  --
ALTER TABLE `products`

ADD
  PRIMARY KEY (`id`);
--
  -- AUTO_INCREMENT для сохранённых таблиц
  --
  --
  -- AUTO_INCREMENT для таблицы `customers`
  --

ALTER TABLE `customers`
MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 3;
--
  -- AUTO_INCREMENT для таблицы `products`
  --
ALTER TABLE `products`

MODIFY
  `id` int(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 4;

COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;