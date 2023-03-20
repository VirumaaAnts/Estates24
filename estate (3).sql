-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 11:53 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `countyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
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
-- Table structure for table `county`
--

CREATE TABLE `county` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `county`
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
-- Table structure for table `fav`
--

CREATE TABLE `fav` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `objectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fav`
--

INSERT INTO `fav` (`id`, `userId`, `objectId`) VALUES
(1, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `object`
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
-- Dumping data for table `object`
--

INSERT INTO `object` (`id`, `type`, `address`, `ownerId`, `cityId`, `roomCount`, `floorCount`, `floor`, `area`, `territory`, `conditions`, `heatSystem`, `basement`, `description`, `year`, `price`, `active`, `offer`) VALUES
(1, 'House', 'Aia tn 17', 1, 1, 20, 3, NULL, '127.0', '1200.0', 'good', 'air', 0, 'Это уютное и привлекательное место для проведения зимнего отпуска или отдыха на выходных. Дом расположен в красивом месте, окруженном заснеженными лесами и горами, что создает прекрасную атмосферу для отдыха и расслабления.\n\nВнутри дома есть все необходимое для комфортного проживания: просторная кухня с полным набором кухонной утвари и бытовой техникой, уютная гостиная с дровяной печью, где можно насладиться теплом камина и красивым видом на зимнюю природу.\n\nДом оборудован всеми необходимыми удобствами, включая современную ванную комнату с горячей водой и душем. В спальнях имеются удобные кровати, что обеспечивает хороший сон и отдых.', 1999, '115000.00', 1, 1),
(2, 'Summer house', 'ROCCA TOWERS II-III', 2, 15, 2, NULL, 1, '50.0', '70.0', 'need repair', 'gas', 0, 'Загородный дом АВЛ-50 с полезной площадью 50 м², плюс антресоль 20 м².\r\nДом Pinhouse A53 с полезной площадью 53 м².\r\nДеревня Сааника находится в 10 км от центра Хаапсалу и всего в 1 часе езды от Таллинна.', 2012, '14999.49', 1, 1),
(3, 'Apartment', 'Sinnimäe 1', 1, 1, 3, NULL, 4, '107.0', NULL, 'good', 'gas', 0, 'На улице Синимяэ в таллиннском районе Ласнамяэ только что построен новый, современный и энергоэффективный десятиэтажный многоквартирный дом Sinimäe Kodud. В доме 48 квартир от одной до пяти комнат площадью от 37,5 до 107 м², все они также имеют балкон.\r\n\r\nКвартиры на верхних этажах имеют интересное решение, состоящее из двух этажей, с гостиной с открытой кухней на нижнем этаже и спальнями на втором этаже.\r\n\r\nСолнечные батареи на крыше дома обеспечивают снижение общих затрат. Принудительная вентиляция с рекуперацией тепла позволяет снизить счета за отопление,\r\n\r\nв некоторых квартирах установлена ​​кухонная мебель.\r\n\r\n​Каждая квартира имеет кладовую на первом этаже здания, и в цену также входит парковочное место, квартиры на верхних этажах имеют два парковочных места, в том числе одно из них под тенью на первом этаже здания.', 2017, '359000.00', 1, 0),
(4, 'Garage', 'Suur-Kaare 35g', 2, 6, NULL, NULL, NULL, '24.0', NULL, 'good', 'air', 0, 'Продается гараж в хорошем состоянии в Паалалинна, Суур-Кааре 35г.\r\nРазмеры пола гаража 7,25х3,40. Новая электрическая панель, проводка и светодиодные фонари в гараже (январь 2023 г.).\r\nНовая жестяная крыша установлена ​​в январе 2023 года.\r\nГараж свободен, ключи будут получены в день сделки.', 2023, '9000.00', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `houseId` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photo`, `houseId`, `description`) VALUES
(1, 'buildings-with-trees-001.webp', 1, ''),
(2, 'gherkin.webp', 1, ''),
(3, 'p0db81jf.jpg', 1, ''),
(4, 'p01btjdf.jpg', 1, ''),
(5, '72e13ca9-33fd-4076-9655-ea31432ed6a4.jpg', 2, ''),
(6, 'af0458d6-0c4f-494b-9d4b-0822071bc8e6.jpg', 2, ''),
(7, '94d11034-1e3b-44fb-aaaa-558f4ea4214c.jpg', 3, ''),
(8, 'aa4866bd-5c57-4723-a9bc-71ba18eba5d0.jpg', 3, ''),
(9, '481b6d9a-ac3e-4da4-b945-f6ecb3120d55.jpg', 3, ''),
(10, '6ebbb717-1632-4c79-bf36-e5df6cb11813.jpg', 3, ''),
(11, '5b16cfad-616b-4baf-9cf3-6d6fcdfd2a45.jpg', 3, ''),
(12, 'c03d3653-3f8b-4430-bc9d-4a2ce018d35a.jpg', 3, ''),
(13, '2058ca94-7730-4923-8839-70c12ee7cfdb.jpg', 3, ''),
(14, '509743e1-2135-409e-8a33-498383098918.jpg', 4, ''),
(15, '9eff9cba-3aeb-43dd-9b5a-911660d04153.jpg', 4, ''),
(16, 'a245a44e-8f6c-4bdd-b7e0-edaf574f13fd.jpg', 4, ''),
(17, '0da5ad63-74be-4b56-b030-25fa137f969c.jpg', 4, ''),
(18, '366416ca-4872-4fc8-af03-73f291d9098d.jpg', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `phone`, `mackler`, `photo`) VALUES
(1, 'Aleksei', 'Kozlov', 'MiFista', 'aleksei22891@gmail.com', '$2y$10$XOJ.puAWB1KhaApyG7VDfOpPg4ietxLZ/trNfPNLd2tklXgCfZhiC', '59024698', 1, 'about.png'),
(2, 'Maksim', 'Dzjubenko', 'mak7ilenin', 'maksondzjubenko@gmail.com', '$2y$10$.aMy6egTJKOf8sk.2LJ5LuxlVJX6yDU71dNFlMKTeZ.uerT3TDCFO', '+37253005207', 0, 'me.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_county` (`countyId`);

--
-- Indexes for table `county`
--
ALTER TABLE `county`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fav`
--
ALTER TABLE `fav`
  ADD PRIMARY KEY (`id`),
  ADD KEY `objectId` (`objectId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `object`
--
ALTER TABLE `object`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cityId` (`cityId`),
  ADD KEY `ownerId` (`ownerId`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `houseId` (`houseId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `county`
--
ALTER TABLE `county`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `fav`
--
ALTER TABLE `fav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `object`
--
ALTER TABLE `object`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `fk_county` FOREIGN KEY (`countyId`) REFERENCES `county` (`id`);

--
-- Constraints for table `fav`
--
ALTER TABLE `fav`
  ADD CONSTRAINT `fav_ibfk_1` FOREIGN KEY (`objectId`) REFERENCES `object` (`id`),
  ADD CONSTRAINT `fav_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`id`);

--
-- Constraints for table `object`
--
ALTER TABLE `object`
  ADD CONSTRAINT `object_ibfk_1` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`),
  ADD CONSTRAINT `object_ibfk_2` FOREIGN KEY (`ownerId`) REFERENCES `user` (`id`);

--
-- Constraints for table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`houseId`) REFERENCES `object` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
