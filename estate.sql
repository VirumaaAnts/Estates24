-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 11 2023 г., 23:49
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `fav`
--

INSERT INTO `fav` (`id`, `userId`, `objectId`) VALUES
(1, 2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `object`
--

CREATE TABLE `object` (
  `id` int(11) NOT NULL,
  `type` enum('house','flat','garage','business') NOT NULL,
  `address` varchar(250) NOT NULL,
  `ownerId` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `roomCount` int(11) NOT NULL,
  `floorCount` int(11) NOT NULL,
  `floor` int(11) DEFAULT NULL,
  `area` int(11) NOT NULL,
  `territory` int(11) DEFAULT NULL,
  `conditions` enum('good','need repair','need overhaul') NOT NULL,
  `heatSystem` enum('water','air','electric','gas') NOT NULL,
  `basement` tinyint(1) NOT NULL,
  `description` varchar(3000) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `offer` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `object`
--

INSERT INTO `object` (`id`, `type`, `address`, `ownerId`, `cityId`, `roomCount`, `floorCount`, `floor`, `area`, `territory`, `conditions`, `heatSystem`, `basement`, `description`, `year`, `price`, `active`, `offer`) VALUES
(1, 'house', 'Aia tn 17', 1, 1, 20, 2, 2, 127, 1200, 'good', 'electric', 1, 'Это уютное и привлекательное место для проведения зимнего отпуска или отдыха на выходных. Дом расположен в красивом месте, окруженном заснеженными лесами и горами, что создает прекрасную атмосферу для отдыха и расслабления.\n\nВнутри дома есть все необходимое для комфортного проживания: просторная кухня с полным набором кухонной утвари и бытовой техникой, уютная гостиная с дровяной печью, где можно насладиться теплом камина и красивым видом на зимнюю природу.\n\nДом оборудован всеми необходимыми удобствами, включая современную ванную комнату с горячей водой и душем. В спальнях имеются удобные кровати, что обеспечивает хороший сон и отдых.', 1999, 1469900, 1, 1),
(2, 'house', 'ROCCA TOWERS II-III', 2, 1, 4, 4, 4, 38861, NULL, 'good', 'gas', 0, NULL, 2012, 12000000, 1, 0),
(3, 'flat', 'Pirnipuu pst 184', 1, 7, 4, 2, 2, 101, NULL, 'good', 'electric', 1, 'Новостройка Пирнипуу Коду - идеальное место для молодых семей с детьми. Это тихий и безопасный район. Каждая квартира имеет продуманную планировку, 2 парковочных места (одно с навесом), собственную террасу и сауну.', 1999, 315000, 1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `houseId` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `photo`, `houseId`, `description`) VALUES
(1, '1.jpg', 1, 'Lorem'),
(2, '2.jpg', 1, ''),
(3, '3.jpg', 1, ''),
(4, '4.jpg', 1, ''),
(5, '1.jpg', 2, ''),
(6, '2.jpg', 2, ''),
(7, '3.jpg', 2, ''),
(8, '4.jpg', 2, ''),
(9, '5.jpg', 2, ''),
(10, '6.jpg', 2, ''),
(11, '1.jpg', 3, ''),
(12, '2.jpg', 3, ''),
(13, '3.jpg', 3, ''),
(14, '4.jpg', 3, ''),
(15, '5.jpg', 3, ''),
(16, '6.jpg', 3, '');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `phone`, `mackler`, `photo`) VALUES
(1, 'aleksei', 'kozlov', '', 'aleksei22891@gmail.com', '12345', '+37259024698', 0, NULL),
(2, 'dima', 'kreivald', '', 'kreivald@gmail.com', 'kreivald', '+37241523698', 0, NULL),
(3, 'max@gmail.com', 'max@gmail.com', 'max@gmail.com', 'max@gmail.com', '$2y$10$gwkfOpuwef1CTKws83J9buTAIf1ECb9xaTtgLsh5m.BZDsE53FasS', 'max@gmail.com', 0, 'photo1674816774.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
