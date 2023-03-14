-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 14 2023 г., 10:25
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `object`
--

INSERT INTO `object` (`id`, `type`, `address`, `ownerId`, `cityId`, `roomCount`, `floorCount`, `floor`, `area`, `territory`, `conditions`, `heatSystem`, `basement`, `description`, `year`, `price`, `active`, `offer`) VALUES
(1, 'House', 'Aia tn 17', 3, 1, 20, 2, 2, '127.0', '1200.0', 'good', 'electric', 1, 'Это уютное и привлекательное место для проведения зимнего отпуска или отдыха на выходных. Дом расположен в красивом месте, окруженном заснеженными лесами и горами, что создает прекрасную атмосферу для отдыха и расслабления.\n\nВнутри дома есть все необходимое для комфортного проживания: просторная кухня с полным набором кухонной утвари и бытовой техникой, уютная гостиная с дровяной печью, где можно насладиться теплом камина и красивым видом на зимнюю природу.\n\nДом оборудован всеми необходимыми удобствами, включая современную ванную комнату с горячей водой и душем. В спальнях имеются удобные кровати, что обеспечивает хороший сон и отдых.', 1999, '115000.00', 1, 1),
(2, 'Summer house', 'ROCCA TOWERS II-III', 4, 1, 4, 4, 4, '38861.0', NULL, 'good', 'gas', 0, NULL, 2012, '12000000.00', 1, 0),
(3, 'Apartment', 'Pirnipuu pst 184', 3, 7, 4, 2, 2, '101.0', NULL, 'good', 'electric', 1, 'Новостройка Пирнипуу Коду - идеальное место для молодых семей с детьми. Это тихий и безопасный район. Каждая квартира имеет продуманную планировку, 2 парковочных места (одно с навесом), собственную террасу и сауну.', 1999, '1.89', 1, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityId` (`cityId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `object_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `object_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
