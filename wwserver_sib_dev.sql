-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 19 2024 г., 16:03
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wwserver_sib_dev`
--

-- --------------------------------------------------------

--
-- Структура таблицы `apartments`
--

CREATE TABLE `apartments` (
  `id` int NOT NULL,
  `complex` varchar(256) NOT NULL,
  `stage` int NOT NULL,
  `house` int NOT NULL,
  `apartment` int NOT NULL,
  `image` varchar(256) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `number_of_rooms` int DEFAULT NULL,
  `area` decimal(5,2) NOT NULL,
  `balcony` tinyint(1) NOT NULL,
  `dressing_room` tinyint(1) NOT NULL,
  `undershirt_2` tinyint(1) NOT NULL,
  `undershirt_3` tinyint(1) NOT NULL,
  `guest_bathroom` tinyint(1) NOT NULL,
  `kitchen_living_room` tinyint(1) NOT NULL,
  `studio` tinyint(1) NOT NULL,
  `commerce` tinyint(1) NOT NULL,
  `floor` int NOT NULL,
  `entrance` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='таблица квартир';

--
-- Дамп данных таблицы `apartments`
--

INSERT INTO `apartments` (`id`, `complex`, `stage`, `house`, `apartment`, `image`, `price`, `number_of_rooms`, `area`, `balcony`, `dressing_room`, `undershirt_2`, `undershirt_3`, `guest_bathroom`, `kitchen_living_room`, `studio`, `commerce`, `floor`, `entrance`) VALUES
(115, 'Сосновый', 2, 3, 1, 'kv-1.jpg', '3700000.00', 1, '37.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(116, 'Сосновый', 1, 1, 2, 'kv-2.jpg', '3700000.00', 1, '37.00', 1, 1, 0, 0, 0, 1, 0, 0, 1, 1),
(117, 'Сосновый', 1, 1, 3, 'kv-3.jpg', '3900000.00', 1, '39.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(118, 'Сосновый', 1, 1, 4, 'kv-4.jpg', '4000000.00', 1, '40.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(119, 'Сосновый', 1, 1, 5, 'kv-5.jpg', '4200000.00', 1, '42.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(120, 'Сосновый', 1, 1, 6, 'kv-6.jpg', '4200000.00', 1, '42.00', 1, 0, 1, 0, 0, 1, 0, 0, 1, 1),
(121, 'Сосновый', 1, 1, 7, 'kv-7.jpg', '4200000.00', 1, '42.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(122, 'Сосновый', 1, 1, 8, 'kv-8.jpg', '5500000.00', 2, '55.00', 1, 0, 1, 0, 0, 0, 0, 0, 1, 1),
(123, 'Сосновый', 1, 1, 9, 'kv-9.jpg', '6000000.00', 2, '60.00', 1, 1, 0, 0, 0, 0, 0, 0, 1, 1),
(124, 'Сосновый', 1, 1, 10, 'kv-10.jpg', '4300000.00', 2, '43.00', 1, 0, 1, 0, 0, 1, 0, 0, 1, 1),
(125, 'Сосновый', 1, 1, 11, 'kv-11.jpg', '5600000.00', 1, '56.00', 1, 0, 1, 0, 0, 1, 0, 0, 1, 1),
(126, 'Сосновый', 1, 1, 12, 'kv-12.jpg', '5900000.00', 2, '59.00', 1, 0, 0, 1, 0, 1, 0, 0, 1, 1),
(127, 'Сосновый', 1, 1, 13, 'kv-13.jpg', '8000000.00', 3, '80.00', 1, 0, 1, 0, 0, 1, 0, 0, 1, 1),
(128, 'Сосновый', 1, 1, 14, 'kv-14.jpg', '7400000.00', 3, '74.00', 1, 0, 1, 0, 1, 1, 0, 0, 1, 1),
(129, 'Сосновый', 1, 1, 15, 'kv-15.jpg', '5800000.00', 3, '58.00', 1, 1, 0, 0, 0, 1, 0, 0, 1, 1),
(130, 'Сосновый', 1, 1, 16, 'kv-16.jpg', '5900000.00', 3, '59.00', 1, 0, 0, 0, 0, 1, 0, 0, 1, 1),
(131, 'Сосновый', 1, 1, 17, 'kv-17.jpg', '6300000.00', 3, '63.00', 1, 0, 1, 0, 0, 1, 0, 0, 1, 1),
(132, 'Сосновый', 1, 1, 18, 'kv-18.jpg', '6300000.00', 3, '63.00', 1, 1, 1, 0, 0, 1, 0, 0, 1, 1),
(133, 'Сосновый', 1, 1, 19, 'kv-19.jpg', '2600000.00', 1, '26.00', 1, 0, 0, 0, 0, 1, 1, 0, 1, 1),
(134, 'Сосновый', 1, 1, 20, 'kv-20.jpg', '2600000.00', 1, '26.00', 1, 0, 0, 0, 0, 1, 1, 0, 1, 1),
(135, 'Сосновый', 1, 1, 21, 'kv-21.jpg', '3200000.00', 1, '32.00', 1, 0, 0, 0, 0, 1, 1, 0, 1, 1),
(136, 'Сосновый', 1, 1, 22, 'kv-22.jpg', '3200000.00', 1, '32.00', 1, 0, 0, 0, 0, 1, 1, 0, 1, 1),
(137, 'Сосновый', 1, 1, 100, 'kom-1.jpg', '30200000.00', 6, '151.00', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1),
(138, 'Сосновый', 1, 1, 101, 'kom-2.jpg', '41800000.00', 9, '209.00', 0, 0, 0, 0, 0, 0, 0, 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `map-code` varchar(3000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `address`, `map-code`, `status`, `publish`) VALUES
(1, 'Основные контакты', '8 (3452) 611-157', 'sosnovy@siberiadev.ru', 'Россия, Тюмень, ул. Клары Цеткин 61, к2\r\nЕжедневно: 10:00-17:00', '<!--LiveInternet counter--><script>\r\nnew Image().src = \"https://counter.yadro.ru/hit?r\"+\r\nescape(document.referrer)+((typeof(screen)==\"undefined\")?\"\":\r\n\";s\"+screen.width+\"*\"+screen.height+\"*\"+(screen.colorDepth?\r\nscreen.colorDepth:screen.pixelDepth))+\";u\"+escape(document.URL)+\r\n\";h\"+escape(document.title.substring(0,150))+\r\n\";\"+Math.random();</script><!--/LiveInternet-->\r\n', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` datetime NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `title`, `date`, `time`, `image`, `description`, `status`, `publish`) VALUES
(1, 'акция1', 'акция1 акция1 акция1', '2024-08-03', '2024-08-26 17:40:32', 'event-img-1.jpg', 'акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1акция1 акция1 акция1', 1, 1),
(2, 'акция2', 'акция2 акция2', '2024-08-05', '2024-09-20 17:40:32', 'event-img-2.jpg', 'акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2акция2 акция2', 1, 1),
(3, 'акция3', 'акция3 акция3 акция3', '2024-08-01', '2024-08-22 17:40:32', 'event-img-3.jpg', 'акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3акция3 акция3 акция3', 1, 1),
(4, 'акция4', 'акция4 акция4 акция4', '2024-08-02', '2024-08-31 17:40:32', 'event-img-3.jpg', 'акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4акция4 акция4 акция4', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(3000) NOT NULL,
  `photo` varchar(256) NOT NULL,
  `image-1` varchar(256) NOT NULL,
  `image-2` varchar(256) NOT NULL,
  `image-3` varchar(256) NOT NULL,
  `image-4` varchar(256) NOT NULL,
  `image-5` varchar(256) NOT NULL,
  `image-6` varchar(256) NOT NULL,
  `image-7` varchar(256) NOT NULL,
  `image-8` varchar(256) NOT NULL,
  `image-9` varchar(256) NOT NULL,
  `image-10` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `date`, `description`, `photo`, `image-1`, `image-2`, `image-3`, `image-4`, `image-5`, `image-6`, `image-7`, `image-8`, `image-9`, `image-10`, `status`, `publish`) VALUES
(1, 'новость_1', '2024-08-01', 'новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1', 'news-img-1.jpg', 'news-1-img-1.jpg', 'news-1-img-2.jpg', 'news-1-img-3.jpg', 'news-1-img-4.jpg', 'news-1-img-5.jpg', 'news-1-img-6.jpg', 'news-1-img-7.jpg', 'news-1-img-8.jpg', 'news-1-img-9.jpg', 'news-1-img-10.jpg', 1, 1),
(3, 'новость_2', '2024-08-13', 'новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2', 'news-img-2.jpg', 'news-2-img-1.jpg', 'news-2-img-2.jpg', 'news-2-img-3.jpg', 'news-2-img-4.jpg', 'news-2-img-5.jpg', 'news-2-img-6.jpg', 'news-2-img-7.jpg', 'news-2-img-8.jpg', 'news-2-img-9.jpg', 'news-2-img-10.jpg', 1, 1),
(4, 'новость_3', '2024-08-12', 'новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3', 'news-img-3.jpg', 'news-3-img-1.jpg', 'news-3-img-2.jpg', 'news-3-img-3.jpg', 'news-3-img-4.jpg', 'news-3-img-5.jpg', 'news-3-img-6.jpg', 'news-3-img-7.jpg', 'news-3-img-8.jpg', 'news-3-img-9.jpg', 'news-3-img-10.jpg', 1, 1),
(5, 'новость_4', '2024-08-11', 'новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4', 'news-img-4.jpg', 'news-4-img-1.jpg', 'news-4-img-2.jpg', 'news-4-img-3.jpg', 'news-4-img-4.jpg', 'news-4-img-5.jpg', 'news-4-img-6.jpg', 'news-4-img-7.jpg', 'news-4-img-8.jpg', 'news-4-img-9.jpg', 'news-4-img-10.jpg', 1, 1),
(8, 'новость_5', '2024-08-01', 'новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1новость_1 новость_1', 'news-img-1.jpg', 'news-1-img-1.jpg', 'news-1-img-2.jpg', 'news-1-img-3.jpg', 'news-1-img-4.jpg', 'news-1-img-5.jpg', 'news-1-img-6.jpg', 'news-1-img-7.jpg', 'news-1-img-8.jpg', 'news-1-img-9.jpg', 'news-1-img-10.jpg', 1, 1),
(9, 'новость_6', '2024-08-13', 'новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2новость_2 новость_2', 'news-img-2.jpg', 'news-2-img-1.jpg', 'news-2-img-2.jpg', 'news-2-img-3.jpg', 'news-2-img-4.jpg', 'news-2-img-5.jpg', 'news-2-img-6.jpg', 'news-2-img-7.jpg', 'news-2-img-8.jpg', 'news-2-img-9.jpg', 'news-2-img-10.jpg', 1, 1),
(10, 'новость_7', '2024-08-12', 'новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3новость_3 новость_3', 'news-img-3.jpg', 'news-3-img-1.jpg', 'news-3-img-2.jpg', 'news-3-img-3.jpg', 'news-3-img-4.jpg', 'news-3-img-5.jpg', 'news-3-img-6.jpg', 'news-3-img-7.jpg', 'news-3-img-8.jpg', 'news-3-img-9.jpg', 'news-3-img-10.jpg', 1, 1),
(11, 'новость_8', '2024-08-11', 'новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4новость_4 новость_4', 'news-img-4.jpg', 'news-4-img-1.jpg', 'news-4-img-2.jpg', 'news-4-img-3.jpg', 'news-4-img-4.jpg', 'news-4-img-5.jpg', 'news-4-img-6.jpg', 'news-4-img-7.jpg', 'news-4-img-8.jpg', 'news-4-img-9.jpg', 'news-4-img-10.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `offices`
--

CREATE TABLE `offices` (
  `id` int NOT NULL,
  `name` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `publish` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `offices`
--

INSERT INTO `offices` (`id`, `name`, `description`, `address`, `phone`, `email`, `status`, `publish`) VALUES
(1, 'Офис продаж «Сосновый»', 'Скоро открытие', 'Россия, Тюмень, ул. Клары Цеткин 61, к2', '8 (3452) 611-157', 'sosnovy@siberiadev.ru', 1, 1),
(2, 'Главный офис', 'Ежедневно с 10:00-17:00 *', 'Тюмень, ул. Клары Цеткин, д. 61, к2', '8 (3452) 611-157', 'hello_sibir@yandex.ru', 1, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `offices`
--
ALTER TABLE `offices`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
