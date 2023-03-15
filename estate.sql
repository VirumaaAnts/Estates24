-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 15 2023 г., 01:54
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `estate`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `countyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `name`, `countyId`) VALUES
(1, 'Tallinn', 1),
(2, 'Tartu', 10),
(3, 'Narva', 3),
(4, 'Pärnu', 7),
(5, 'Kohtla-Järve', 3),
(6, 'Viljandi', 12),
(7, 'Maardu', 1),
(8, 'Rakvere', 5),
(9, 'Kuressaare', 9),
(10, 'Sillamäe', 3),
(11, 'Valga', 11),
(12, 'Võru', 13),
(13, 'Jõhvi', 3),
(14, 'Keila', 1),
(15, 'Haapsalu', 15),
(16, 'Paide', 14),
(17, 'Tapa', 5),
(18, 'Elva', 10),
(19, 'Saue', 1),
(20, 'Kiviõli', 3),
(21, 'Põlva', 6),
(22, 'Türi', 14),
(23, 'Jõgeva', 4),
(24, 'Rapla', 8),
(25, 'Põltsa', 4),
(26, 'Paldiski', 1),
(27, 'Sindi', 7),
(28, 'Kärdla', 2),
(29, 'Kunda', 5),
(30, 'Kehra', 1),
(31, 'Tõrva', 11),
(32, 'Narva-Jõesuu', 3),
(33, 'Räpina', 6),
(34, 'Tamsalu', 5),
(35, 'Järveküla', 1),
(36, 'Otepää', 11),
(37, 'Randvere', 1),
(38, 'Muraste', 1),
(39, 'Pärnamäe', 1),
(40, 'Kilingi-Nõmme', 7),
(41, 'Alliku', 1),
(42, 'Lohkva', 10),
(43, 'Karksi-Nuia', 12),
(44, 'Tammiste', 7),
(45, 'Antsla', 13),
(46, 'Püünsi', 1),
(47, 'Võhma', 12),
(48, 'Lihula', 15),
(49, 'Mustvee', 4),
(50, 'Vastse-Kuuste', 6),
(51, 'Rae', 1),
(52, 'Suurupi', 1),
(53, 'Vääna-Jõesuu', 1),
(54, 'Soinaste', 10),
(55, 'Papsaare', 7),
(56, 'Tiskre', 1),
(57, 'Suure-Jaani', 12),
(58, 'Abja-Paluoja', 12),
(59, 'Uulu', 7),
(60, 'Kuusalu', 1),
(61, 'Kurepalu', 10),
(62, 'Linaküla', 7),
(63, 'Liiva', 9),
(64, 'Ruhnu', 9),
(65, 'Hullo', 15),
(66, 'Jõelähtme', 1),
(67, 'Loksa', 1),
(68, 'Viimsi', 1),
(69, 'Kohila', 8),
(70, 'Saku', 1),
(71, 'Väike-Maarja', 5),
(72, 'Kadrina', 5),
(73, 'Märja', 8),
(74, 'Ülenurme', 10),
(75, 'Jüri', 1),
(76, 'Kose', 1),
(77, 'Vändra', 7),
(78, 'Aruküla', 1),
(79, 'Sõmeru', 5),
(80, 'Nõo', 10),
(81, 'Järva-Jaani', 14),
(82, 'Kiili', 1),
(83, 'Iisaku', 3),
(84, 'Rõuge', 13),
(85, 'Toila', 3),
(86, 'Haljala', 5),
(87, 'Luunja', 10),
(88, 'Alatskivi', 10),
(89, 'Pajusti', 5),
(90, 'Harku', 1),
(91, 'Järvakandi', 8),
(92, 'Kanepi', 6),
(93, 'Värska', 6),
(94, 'Kõrveküla', 10),
(95, 'Taebla', 15);

-- --------------------------------------------------------

--
-- Структура таблицы `county`
--

CREATE TABLE `county` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `county`
--

INSERT INTO `county` (`id`, `name`) VALUES
(1, 'Harju'),
(2, 'Hiiu'),
(3, 'Ida-Viru'),
(4, 'Jõgeva'),
(5, 'Lääne-Viru'),
(6, 'Põlva'),
(7, 'Pärnu'),
(8, 'Rapla'),
(9, 'Saare'),
(10, 'Tartu'),
(11, 'Valga'),
(12, 'Viljandi'),
(13, 'Võru'),
(14, 'Järva'),
(15, 'Lääne');

-- --------------------------------------------------------

--
-- Структура таблицы `fav`
--

CREATE TABLE `fav` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `objectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `object`
--

CREATE TABLE `object` (
  `id` int(11) NOT NULL,
  `type` enum('House','Apartment','Garage','Part','Land','Summer house') NOT NULL,
  `address` varchar(250) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `roomCount` int(11) DEFAULT NULL,
  `floorCount` int(11) DEFAULT NULL,
  `floor` int(11) DEFAULT NULL,
  `area` decimal(11,1) DEFAULT NULL,
  `territory` decimal(11,1) DEFAULT NULL,
  `conditions` enum('good','need repair','need overhaul') DEFAULT NULL,
  `heatSystem` enum('water','air','electric','gas') DEFAULT NULL,
  `basement` tinyint(1) NOT NULL,
  `description` text DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `price` decimal(11,2) DEFAULT 0.00,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `offer` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `object`
--

INSERT INTO `object` (`id`, `type`, `address`, `ownerId`, `cityId`, `roomCount`, `floorCount`, `floor`, `area`, `territory`, `conditions`, `heatSystem`, `basement`, `description`, `year`, `price`, `active`, `offer`) VALUES
(1, 'Land', 'asda 43', 1, 4, NULL, NULL, NULL, NULL, 2147483647, 'good', NULL, 0, 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\"s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \"Content here, content here\", making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \"lorem ipsum\" will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 1200, 123220000, 1, 0),
(2, 'House', 'kgkgk 8t', 1, 2, 10, 20, NULL, 130, 250, 'good', 'water', 0, 'GOOOOOOOOD\"S HOUSE', 1995, 250000, 1, 0),
(3, 'Garage', 'ffgfh 7', 1, 2, 1, 1, 1, 100, 120, 'need repair', 'electric', 0, 'jggjghjjghjggjgjhgjgj', 1999, 5000, 1, 0),
(4, 'Apartment', 'ghjkb 667', 1, 9, NULL, NULL, NULL, 100000, 1000000000, NULL, 'water', 0, 'fhh h ghg ghv hgv gvh vgh gvh ghv ', NULL, 2147483647, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `houseId` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `photo`, `houseId`, `description`) VALUES
(1, 'buildings-with-trees-001.webp', 1, ''),
(2, 'gherkin.webp', 1, ''),
(3, 'p0db81jf.jpg', 1, ''),
(4, 'p01btjdf.jpg', 1, ''),
(5, '71k0BMp4U1L._AC_UF894,1000_QL80_.jpg', 2, ''),
(6, 'flat,750x,075,f-pad,750x1000,f8f8f8.jpg', 2, ''),
(7, 'DuAbz54WkAES3SD.jpg', 3, ''),
(8, 'p01btjdf.jpg', 3, ''),
(9, 'animated-gif-wallpaper-pixel-city-posted-by-michelle-simpson.gif', 4, ''),
(10, 'blue_robot1.png', 4, ''),
(11, 'blue_robot2.png', 4, ''),
(12, 'cipher-chillxpanic-pixel-art-by-weilard-on-deviantart-.gif', 4, ''),
(13, 'cipher-f9eaf-chillxpanic-542e1-pixel-c6a29-art-78c14-by-6ccea-weilard-203d1-on-365f7-deviantart-195fc-.gif', 4, ''),
(14, 'ef6f24a8d3ff577a99c19c42026a7a24.gif', 4, ''),
(15, 'green_robot1.png', 4, ''),
(16, 'green_robot2.png', 4, ''),
(17, 'ICO.png', 4, '');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `surname` varchar(250) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `mackler` tinyint(1) NOT NULL DEFAULT 0,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `phone`, `mackler`, `photo`) VALUES
(1, 'Aleksei', 'Kozlov', 'MiFista', 'aleksei22891@gmail.com', '$2y$10$XOJ.puAWB1KhaApyG7VDfOpPg4ietxLZ/trNfPNLd2tklXgCfZhiC', '59024698', 0, 'about.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_county` (`countyId`);

--
-- Индексы таблицы `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectId` (`objectId`),
  ADD KEY `userId` (`userId`);

--
-- Индексы таблицы `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityId` (`cityId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `houseId` (`houseId`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `county`
--
ALTER TABLE `county`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `fav`
--
ALTER TABLE `fav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_county` FOREIGN KEY (`countyId`) REFERENCES `county` (`id`);

--
-- Ограничения внешнего ключа таблицы `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_1` FOREIGN KEY (`objectId`) REFERENCES `object` (`id`),
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `object_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `object_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`houseId`) REFERENCES `object` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
